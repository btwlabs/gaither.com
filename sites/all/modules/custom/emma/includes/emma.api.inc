<?php
// $Id$

/**
 * @file
 * 
 */
 




/**
 * Post a remote request to Emma.
 *
 * @param $uid
 *   A user id.
 * @param $params
 *   An array of parameters for this request. Possible keys are:
 *   - signup_url (required)
 *   - signup_post (required)
 *   - emma_account_id (required)
 *   - username (required)
 *   - password (required)
 *   - groups (required)
 *   - fields (required)
 *   - flush_groups
 *   - no_confirm
 * @param $debug
 *   Flag to enable/disable printing debugging info to the screen.
 */
function _emma_signup($uid, $params = array(), $debug = FALSE) {
  if (empty($uid) || !is_numeric($uid)) {
    return FALSE;
  }
  
  $lists = $params['groups'];
  
  $groups = array();
  
  foreach ($lists as $group) {
    $groups['group['. $group .']'] = 1;
  }

  // ToDo: $fields = module_invoke_all('emma_map_fields', $uid, $params['fields']);
  $fields = emma_map_fields($uid, $params['fields']);
  
  unset($params['groups']);
  unset($params['fields']);
  
  $query  = array_merge($params, $groups, $fields);
  $post = drupal_query_string_encode($query);

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $params['signup_url']);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	$response_code = curl_exec ($ch);
  curl_close ($ch);
  
  $response = emma_get_response($response_code);
 
  if ($response) {
    $user = user_load($uid);
     
    foreach ($lists as $group) {
      $data = array(
        'group_id' => $group,
        'uid' => $user->uid,
        'email' => $user->mail,
        'created' => time(),
      );
        
      // check if they already exist in emma_users table with the associated group id
      $exists = db_result(db_query("SELECT email FROM {emma_users} WHERE email = '%s' AND group_id = %d", $user->mail, $group));
      
      if (!$exists) {        
        drupal_write_record('emma_users', $data);
      }
    }
  }
  
  if ($debug) {
    $message  = '<pre>'. print_r($response, TRUE) .'</pre>';
    $message .= '<pre>'. print_r($post, TRUE) .'</pre>';
    $message .= '<pre>'. print_r($params, TRUE) .'</pre>';
    $message .= '<pre>'. print_r($lists, TRUE) .'</pre>';
    $message .= '<pre>'. print_r($fields, TRUE) .'</pre>';    
    drupal_set_message($message, 'status');
  }
  
  return $response_code;
}





/**
 * Retrieve a stored message for a given Emma API response code.
 *
 * @param $response_code
 *   The response code returned from a Emma API call.
 *
 * @return
 *   A translated message string.
 */
function emma_get_response($response_code) {
  switch ($response_code) {
    case 1:
      $message = 'You have been successfully registered';
      break;
      
    case 2:
      $message = 'Your subscription has been successfully updated';
      break;
    
    case 3:
      $message = 'A user with that information already exists';
      break;
    
    case 4:
      $message = 'Your membership has been successfully removed';
      break;
    
    case -1:
      $message = 'Emma authentication failure';
      break;
    
    case -2:
    case -3:
    case -5:
      $message = 'Your subscription could not be processed.';
      break;
    
    case -6:
      $message = 'The email address provided was not valid.';
      break;
    
    default:
      $message = 'An unknown error occurred while trying to register';
      break;
  }
  
  return $message;
}






/**
 * 
 */
function emma_get_lists() {  
  $results = db_query('SELECT m.* FROM {emma} m ORDER BY m.list_name');
  
  $lists = array();
  
  while ($row = db_fetch_object($results)) {
    $lists[] = $row;  
  }
  
  return $lists;
}





/**
 * Retrieve a list of Emma mailing list subscribers, optionally filtered by mailing list.
 *
 * @param $group_id
 *   The group id of the mailing list.
 * @param $return_sql
 *   If TRUE, then only return the generated SQL query string.
 *
 * @return
 *   An array of subscriber objects, or a SQL query string.
 */
function emma_get_subscribers($group_id = NULL, $return_sql = FALSE) {
  // if group id isn't set, retrieve all subscriber records
  $sql = 'SELECT m.*, mu.*, u.* FROM {emma} m INNER JOIN {emma_users} mu ON m.group_id = mu.group_id INNER JOIN {users} u ON mu.uid = u.uid';
  
  if (empty($group_id)) {
    $result = db_query($sql);
  }
  else {
    $sql .= ' WHERE m.group_id = %d';
    $result = db_query($sql, $group_id);
  }
  
  if ($return_sql) {
    return $sql;
  }
  
  $subscribers = array();
  
  while ($row = db_fetch_object($result)) {
    $subscribers[] = $row;
  }
  
  return $subscribers;
}





/**
 * Retrieve a list of saved Emma mailing list names.
 *
 * @return
 *   An associative array of list names, keyed on the mailing listÍs group id.
 */
function emma_get_list_names() {
  $results = db_query('SELECT m.* FROM {emma} m ORDER BY m.list_name');
  
  $lists = array();
  
  while ($row = db_fetch_object($results)) {
    $lists[$row->group_id] = $row->list_name;
  }
  
  return $lists;
}





/**
 * Menu callback that displays a listing of Emma subscribers, optionally filtered by mailing list.
 *
 * @param $group_id
 *   The group id of a mailing list.
 */
function emma_list_subscribers($group_id = NULL) {
  return theme('emma_show_subscribers', $group_id);
}





/**
 * Menu callback that displays a table listing of all stored Emma mailing lists.
 */
function emma_show_lists() {
  return theme('emma_mailing_lists');
}





/**
 * Menu callback for displaying the Emma mailing list edit form.
 */
function emma_edit_list($list = NULL) {
  module_load_include('inc', 'emma', 'includes/emma.admin');
  return drupal_get_form('emma_edit_list_form', $list);
}





/**
 * Update an existing Emma mailing list.
 *
 * @param $group_id
 *   The group id for the mailing list to be updated.
 * @param $data
 *   An associative array of mailing list values.
 *   Possible keys are:
 *     - group_id
 *     - list_name
 *     - signup_url
 *     - signup_post
 *     - account_id
 *     - username
 *     - password
 *
 * @return
 *   FALSE if the mailing list record could not be updated.
 */
function emma_update_list($data = array(), $is_new = FALSE) {
  if (empty($data) || !isset($data['group_id']) || !is_numeric($data['group_id'])) {
    return FALSE;
  }
  
  $list = emma_get_list_by_name($data['group_id']);
  
  if ($is_new) {
    $data['created'] = time();
   
    if (drupal_write_record('emma', $data) === SAVED_NEW) {
      watchdog('emma', 'Added new mailing list: %list', array('%list' => $list));
      drupal_set_message(t('Successfully added new mailing list: %list', array('%list' => $list)));
    }
    else {
      watchdog('emma', 'Unable to add new mailing list: %list', array('%list' => $list), WATCHDOG_ERROR);
      drupal_set_message(t('Unable to add new mailing list: %list', array('%list' => $list)), 'error');
    }    
  }
  else {
    $data['updated'] = time();

    if (drupal_write_record('emma', $data, 'group_id') === SAVED_UPDATED) {
      watchdog('emma', 'Updated mailing list: %list', array('%list' => $list));
      drupal_set_message(t('Updated mailing list: %list', array('%list' => $list)));
    }
    else {
      watchdog('emma', 'Unable to update mailing list: %list', array('%list' => $list), WATCHDOG_ERROR);
      drupal_set_message(t('Unable to update mailing list: %list', array('%list' => $list)), 'error');
    }  
  }
}





/**
 * Deletes an existing Emma mailing list.
 *
 * @param $group_id
 *   The group id for the mailing list to be deleted.
 *
 * @return
 *   FALSE if the mailing list record could not be deleted.
 */
function emma_delete_list($group_id = NULL) {
  if (empty($group_id) || !is_numeric($group_id)) {
    return FALSE;
  }
  
  $list = emma_get_list_by_name($group_id);
  
  db_query('DELETE FROM {emma} WHERE group_id = %d', $group_id);
  
  watchdog('emma', 'Removed mailing list: %list', array('%list' => $list));
  drupal_set_message(t('Removed mailing list: %list.', array('%list' => $list)));
  
  drupal_goto('admin/emma/lists');
}





/**
 * Determine if a given content type is enabled for Emma integration.
 *
 * @param $type
 *   The machine-name of the content type to check.
 * @return
 *   - TRUE if a content type is enabled.
 *   - FALSE otherwise.
 */
function emma_is_enabled_content_type($type = '') {
  if (empty($type)) {
    return FALSE;
  }

  $enabled_types = variable_get('emma_content_types', array());

  if (in_array($type, $enabled_types)) {
    return TRUE;
  }

  return FALSE;
}





/**
 *
 */
function emma_get_user_lists($uid = NULL) {
  if (empty($uid) || !is_numeric($uid)) {
    return FALSE;
  }
  
  $result = db_query('SELECT * FROM {emma_users} WHERE uid = %d', $uid);
  
  $lists = array();
  
  while ($row = db_fetch_object($result)) {
    $lists[] = $row->group_id;
  }
  
  return $lists;
}




/**
 * 
 */
function _emma_get_lists_by_uid($uid = NULL) {
  if (empty($uid) || !is_numeric($uid)) {
    return FALSE;
  }
  
  $results = db_query('SELECT * FROM {emma_users} WHERE uid = %d', $uid);
  
  $lists = array();
  
  while ($row = db_fetch_object($results)) {
    $lists[] = $row->group_id;
  }
  
  if (!empty($lists)) {
    return $lists;    
  }
  
  return FALSE;
}





/**
 * 
 */
function _emma_get_lists_by_mail($mail = NULL) {
  if (empty($mail) || !valid_email_address($mail)) {
    return FALSE;
  }
  
  $results = db_query("SELECT * FROM {emma_users} WHERE mail = '%s'", $mail);
  
  $lists = array();
  
  while ($row = db_fetch_object($results)) {
    $lists[] = $row->group_id;
  }
  
  if (!empty($lists)) {
    return $lists;    
  }
  
  return FALSE;
}



/**
 * 
 */
function _emma_add_to_group($uid, $group, $no_confirm = FALSE) {  
  $params = array(
    'signup_url'      => variable_get('emma_default_signup_url', ''),  
    'signup_post'     => variable_get('emma_default_signup_post', ''), 
    'emma_account_id' => variable_get('emma_default_account_id', ''),  
    'username'        => variable_get('emma_default_username', ''),    
    'password'        => variable_get('emma_default_password', ''),
    'groups'          => array($group),
    'fields'          => $group,
  );
  
  if ($no_confirm) {
    $params['no_confirm'] = 1;
  }
  
  $response = _emma_signup($uid, $params);
  
  return $response;
}





/**
 * 
 */
function _emma_remove_from_group($uid, $group) {
  $lists = emma_get_user_lists($uid);
  unset($lists[$group]);
  
  $params = array(
    'signup_url'      => variable_get('emma_default_signup_url', ''),  
    'signup_post'     => variable_get('emma_default_signup_post', ''), 
    'emma_account_id' => variable_get('emma_default_account_id', ''),  
    'username'        => variable_get('emma_default_username', ''),    
    'password'        => variable_get('emma_default_password', ''),
    'groups'          => $lists,
    'flush_groups'    => 1,
    'no_confirm'      => 1,
  );
  
  $response = _emma_signup($uid, $params);
  
  return $response;  
}





/**
 * 
 */
function _emma_update_user_profile($uid) {
  $lists = emma_get_user_lists($uid);
  $responses = array();
  
  foreach ($lists as $group) {
    $responses[] = _emma_add_to_group($uid, $group);
  }
  
  return $responses;
}





/**
 * 
 */
function emma_get_list_by_name($group_id) {
  $result = db_result(db_query('SELECT list_name FROM {emma} WHERE group_id = %d', $group_id));
  
  return $result;
}





/**
 * 
 */
function emma_get_group_by_name($name) {
  $result = db_result(db_query("SELECT group_id FROM {emma} WHERE list_name = '%s'", $name));
  
  return $result;
}





/**
 * 
 */
function emma_new_user_update($account) {
  // check emma_users table for email and lists
  $results = db_query("SELECT * FROM {emma_users} WHERE email = '%s'", $account->mail);
  
  $lists = array();
  
  while ($row = db_fetch_object($results)) {
    $lists[] = $row;
  }

  // if exists, update uid to $uid for each list  
  if (!empty($lists)) {
    foreach ($lists as $list) {  
      $record = new stdClass();
      $record->id = $list->id;
      $record->uid = $account->uid;
      drupal_write_record('emma_users', $record, 'id');
    }
  }
}





/**
 * 
 */
function emma_reset_user($account) {
  // check emma_users table for email and lists
  $results = db_query("SELECT * FROM {emma_users} WHERE email = '%s'", $account->mail);
  
  $lists = array();
  
  while ($row = db_fetch_object($results)) {
    $lists[] = $row;
  }

  // if exists, update uid to $uid for each list  
  if (!empty($lists)) {
    foreach ($lists as $list) {  
      $record = new stdClass();
      $record->id = $list->id;
      $record->uid = 0;
      drupal_write_record('emma_users', $record, 'id');
    }
  }
}





/**
 * 
 */
function emma_get_registration_lists() {
  $results = db_query("SELECT group_id, list_name FROM {emma} WHERE registration = 1 ORDER BY list_name");
  
  $lists = array();
  
  while ($row = db_fetch_object($results)) {
    $lists[$row->group_id] = $row->list_name;
  }
  
  return $lists;
}





/**
 * 
 */
function emma_get_field_mappings() {
  $result = db_query("SELECT m.* FROM {emma_fields} m WHERE m.emma_field_name <> ''");
  
  $fields = array();
  
  while ($row = db_fetch_object($result)) {
    $fields['emma'][$row->group_id][$row->type][$row->field_name] = $row->emma_field_name;
  }

  return $fields;
}





/**
 * Retrieve an array of field names for a given content type.
 *
 * Astounding that CCK doesn't provide a helper function like this.
 *
 * @param $type_name
 *   The machine name of a content type to retrieve field names for.
 *
 * @return
 *   An indexed array of field names.
 */
function emma_get_content_type_fields($type_name = '') {
  $fields = array();
  
  if (empty($type_name)) {
    return $fields;
  }
  
  $result = db_query("SELECT c.* FROM {content_node_field_instance} c WHERE c.type_name = '%s'", $type_name);
  
  while ($row = db_fetch_object($result)) {
    $fields[] = $row->field_name;
  }
  
  return $fields;
}





/**
 * 
 */
function emma_get_fields($category = NULL) {
  $fields = array();
  
  $use_profile_module = variable_get('emma_profile_module_enabled', FALSE);

  if ($use_profile_module && module_exists('profile') && !empty($category)) {
    $result = _profile_get_fields($category);

    $profile_fields = array();
    
    while ($row = db_fetch_object($result)) {
      $profile_fields[] = $row->name;  
    }
    
    $fields['core_profile'] = $profile_fields;
  }
  
  $enabled_content_types = variable_get('emma_content_types', array());
    
  foreach ($enabled_content_types as $content_type) {
    $fields[$content_type] = emma_get_content_type_fields($content_type);
  } 
  
  return $fields; 
}





/**
 * ToDo: make this into a hook
 */
function emma_map_fields($uid, $group_id) {
  if (empty($uid) || !is_numeric($uid) || empty($group_id) || !is_numeric($group_id)) {
    return FALSE;
  }
  
  $account     = user_load($uid);
  $member_info = array('emma_member_email' => $account->mail);

  $mapped_fields = array();
  
  $profile_module_enabled = variable_get('emma_profile_module_enabled', FALSE);
  
  $result = db_query("SELECT m.* FROM {emma_fields} m WHERE m.group_id = %d AND m.emma_field_name <> ''", $group_id);
  
  while ($row = db_fetch_object($result)) {
    $field_name = $row->field_name;

    if ($profile_module_enabled ) {
      if (!empty($account->$field_name)) {

        if ($row->emma_field_name == 'emma_member_dob') {
          $month = str_pad($account->profile_birthdate['month'], 2, '0', STR_PAD_LEFT);
          $day   = str_pad($account->profile_birthdate['day'], 2, '0', STR_PAD_LEFT);
          $year  = $account->profile_birthdate['year'];
          $bday  = $month .'/'. $day .'/'. $year;
          $mapped_fields['emma_member_dob'] = $bday;
        }
        else {
          $mapped_fields[$row->emma_field_name] = $account->$field_name;
        }
      }
    }
    else {
      $profile = content_profile_load('uprofile', $account->uid);
      $myfield = array();
      $myfield = $profile->$field_name;

      // handle getting city from postal code first
      if ($profile->field_country_profile[0]['value'] == 840 || $profile->field_country_profile[0]['value'] == 'UNITED STATES') {
        $postal_code = substr(str_replace(' ', '', $profile->field_postal_code_profile[0]['value']), 0, 5);
      }
      else {
        if (!empty($profile->field_postal_code_profile[0]['value'])) {
          $postal_code = substr(trim($profile->field_postal_code_profile[0]['value']), 0, 7);
        }
        else {
          $postal_code = '';
        }
      }
          
      $city = db_result(db_query("SELECT city FROM {zipcodes} WHERE zip = '%s'", $postal_code));
          
      if ($city) {
        $mapped_fields['emma_member_city'] = $city;
      } 
      
      if (!empty($myfield[0]['value'])) {
        if ($row->emma_field_name == 'emma_member_dob') {
          $bday = str_replace('T00:00:00', '', str_replace('-', '/', $profile->field_birthday_profile[0]['value']));
          $bday = explode('/', $bday);
          $bday = $bday[1] .'/'. $bday[2] .'/'. $bday[0];
                    
          $mapped_fields['emma_member_dob'] = $bday;

        }
        elseif ($row->emma_field_name == 'emma_member_gender') {          
          if ($profile->field_gender_profile[0]['value'] == 'Male') {
            $mapped_fields['emma_member_gender'] = 'M';
          }
          else {
            $mapped_fields['emma_member_gender'] = 'F';
          }          
        }
        elseif ($row->emma_field_name == 'emma_member_country') {
          $country = db_result(db_query('SELECT country_name FROM {uc_countries} WHERE country_id = %d', $profile->field_country_profile[0]['value']));
          $mapped_fields['emma_member_country'] = $country;
        }
        else {
          $mapped_fields[$row->emma_field_name] = $myfield[0]['value'];
        }
      }
    }
  }

  $member_info = array_merge($member_info, $mapped_fields);
  
  return $member_info;
}