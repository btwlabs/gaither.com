<?php

/**
 * Process requests from a roku box
 *
 * @return string XML
 */
function roku_auth_xml() {
  switch ($_REQUEST['cmd']) {
    case 'getLinkingCode' :
      $result = roku_auth_linking_code_xml();
    break;
    case 'validateLinkingCode' :
      $result = roku_auth_validate_xml();
    break;
    case 'hasAccess' :
      $result = roku_auth_hasaccess_xml();
    break;
    case '' :
      $result = roku_auth_error_xml(t('No command specified'));
    break;
    default;
      $result = roku_auth_error_xml(t('Invalid command'));
    break;
  } // switch request[cmd]
  drupal_set_header('Content-type: text/xml; charset=utf-8');
  drupal_send_headers();
  if (ob_get_level()) {
    ob_end_clean();
  }
  print $result;
  module_invoke_all('exit');
  exit();
  return $result;
} // roku_auth_xml

/**
 * Convert an array or object into valid XML appropriate to Roku's API
 *
 * @param $object mixed an object or array
 * @return string XML code
 */
function roku_auth_generate_xml($object) {
  $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><response></response>');
  roku_auth_add_xml_elements($xml, $object);
  return $xml->asXML();
} // roku_auth_generate_xml

/**
 * Recursively add elements to a SimpleXMLElement
 *
 * @param &$xml SimpleXMLElement to add children to
 * @param $object mixed an object or array to add as children to $xml
 * @return SimpleXMLElement $xml following modifications
 */
function roku_auth_add_xml_elements(&$xml, $object) {
  if (!($xml INSTANCEOF SimpleXMLElement)) {
    watchdog('roku_auth', 'Invalid XML object referenced!', WATCHDOG_WARNING);
    return FALSE;
  }
  foreach ($object AS $key => $value) {
    if (is_object($value) || is_array($value)) {
      $child = $xml->addChild($key);
      roku_auth_add_xml_elements($child, $value);
    } else {
      $xml->addChild($key, $value);
    }
  }
  return $xml;
} // roku_auth_add_xml_elements

/**
 * Generate a new linking code
 *
 * @return string - XML containing the new linking code and its expiration date
 */
function roku_auth_linking_code_xml() {
  $code = roku_auth_generate_linking_code();
  $expiration = time() + 60*10;
  $array = array(
    //'status' => 'success', // TODO: do they need this?
    'linking_code' => $code,
    'expiration' => $expiration,
  );
  $record->linking_code = $code;
  $record->expiration = $expiration;
  drupal_write_record('roku_auth_linking_code', $record);
  return roku_auth_generate_xml($array);
} // roku_auth_linking_code_xml

/**
 * Validate a linking code
 *
 * @param $_REQUEST['LinkingCode'] string - the linking code to validate
 * @return string valid XML containing a status and deviceToken on success or an error message on failure
 */
function roku_auth_validate_xml() {
  $linking_code = $_REQUEST['LinkingCode'];
  $error = NULL;
  $array = array();
  if (!$linking_code) { 
    $error = t('No LinkingCode specified'); 
  } else {
    $query = 'SELECT uid, device_token FROM {roku_auth_validation} WHERE linking_code="%s"';
    $q_res = db_query($query, $linking_code);
    $q_row = db_fetch_array($q_res);
    if (!empty($q_row)) {
      $uid = $q_row['uid'];
      $token = $q_row['device_token'];
      $account = user_load($uid);
      if (user_access('validate roku linking codes', $account)) {
        $array = array(
          'status' => 'success',
          'deviceToken' => $token,
        );
      } else { // if user does not have correct permissions
        $error = t('Sorry. This device is invalid. Has your subscription expired?');
      }
    } else { // could not find device token
      // check if this happened because of no code, expired code, or no link yet
      $query = 'SELECT expiration FROM {roku_auth_linking_code} WHERE linking_code="%s"';
      $expiration = db_result(db_query($query, $linking_code));
      if (!$expiration) { // invalid code
        $error = t('This is not a valid linking code. Please restart the validation process.');
      } else if ($expiration < time()) { // expired code
        $error = t('This linking code is expired. Please restart the validation process');
      } else { // code not validated yet
        $error = t(
          'This code is not validated yet. Please visit !link to validate it.',
          array('!link' => url('user/roku', array('absolute' => TRUE)))
        );
      } // linking_code not validated yet
    } // if device token not retreived from DB
  } // if $linking_code
  if ($error) {
    $result = roku_auth_error_xml($error);
  } else {
    $result = roku_auth_generate_xml($array);
  }
  return $result;
} // roku_auth_validate_xml

/**
 * Verify a device_token
 *
 * @param $_REQUEST['DeviceToken'] string - the device token to validate
 * @return string valid XML containing a success or error message
 */
function roku_auth_hasaccess_xml() {
  $device_token = $_REQUEST['DeviceToken'];
  $error = NULL;
  $array = array();
  if (!$device_token) {
    $error = t('No DeviceToken specified');
  } else {
    $query = 'SELECT uid, device_token FROM {roku_auth_validation} WHERE device_token="%s"';
    $q_res = db_query($query, $device_token);
    $q_row = db_fetch_array($q_res);
    if (!empty($q_row)) {
      $uid = $q_row['uid'];
      $token = $q_row['device_token'];
      $account = user_load($uid);
      if (user_access('validate roku linking codes', $account)) {
        $array = array(
          'status' => 'success',
        );
      } else { // if user does not have correct permissions
        $error = t('Sorry. This device is invalid. Has your subscription expired?');
      }
      // if !empty(q_row)
    } else { // invalid device token
      $error = t('Sorry. This device is invalid.');
    }
  } // if device_token

  if ($error) {
    $result = roku_auth_error_xml($error);
  } else {
    $result = roku_auth_generate_xml($array);
  }
  return $result;
} // roku_auth_hasaccess_xml

/**
 * Generate an xml error message from an error string
 *
 * @param $message string - a translated, human-readable, and sanitized error message
 * @return string - XML containing the error message
 */
function roku_auth_error_xml($message = '') {
  $array = array('status' => 'failure');
  if ($message) { $array['error'] = $message; }
  return roku_auth_generate_xml($array);
} // roku_auth_error_xml
