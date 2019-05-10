<?php

/**
 * Roku authentication linking form - allow users to enter their linking code to authenticate a device
 *
 * @return array per the drupal forms API
 */
function roku_auth_linking_form() {
  global $user;
  $form = array();
  $form['linking_code'] = array(
    '#type' => 'textfield',
    '#title' => t('Linking Code'),
    '#description' => t('Please enter the linking code displayed on your TV screen'),
    '#required' => TRUE,
  );
  $form['device_name'] = array(
    '#type' => 'textfield',
    '#title' => t('Device Name'),
    '#description' => t('Please give this device a nickname to help identify it later'),
    '#required' => TRUE,
  );
  $devices = roku_auth_get_devices_by_uid($user->uid);
  if (count($devices) > 0) {
    // Make sure a user doesn't exceed their authentications
    $excess_devices = count($devices)+1 - variable_get('roku_auth_num_authentications', 1);
    $form['excess_devices'] = array(
      '#type' => 'value',
      '#value' => $excess_devices,
    );
    $ed_warning = $excess_devices > 0 
      ? t(
        'You have too many devices authorized. You must delete !ed to authenticate this new one!', 
        array('!ed' => '<strong>' . $excess_devices . '</strong>'))
      : '';
    $options = array(); 
    foreach ($devices AS $token => $device) {
      $options[$token] = t(
        '@name - last accessed @date', 
        array('@name' => $device['device_name'], '@date' => date('d/m/Y', $device['last_access'])));
    } // foreach device in devices
    $form['delete_devices'] = array(
      '#type' => 'checkboxes',
      '#title' => t('Your current devices.'),
      '#description' => t('Above are your currently-authorized devices. ')
        . t('Click the checkbox to delete a device from your list. ')
        . $ed_warning,
      '#options' => $options,
    );
  } // count devices > 0
  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Submit'),
  );

  return $form;
} // roku_auth_linking_form

/**
 * Validate the roku_auth_linking_form
 *
 * @param $form array per the drupal forms API
 * @param &$form_state array per the drupal forms API
 */
function roku_auth_linking_form_validate($form, &$form_state) {
  $code = $form_state['values']['linking_code'];
  $time = db_result(db_query('SELECT expiration FROM {roku_auth_linking_code} WHERE linking_code="%s"', $code));
  if (!$time) {
    form_set_error('linking_code', t('The supplied code is invalid. Please check it and try again'));
  } else if ($time < time()) {
    form_set_error('linking_code', t('The supplied code is expired.'));
  }
  $existing_query = 'SELECT device_token FROM {roku_auth_validation} WHERE linking_code="%s"';
  $device_token = db_result(db_query($existing_query, $code));
  if ($device_token) {
    form_set_error('linking_code', t('Sorry, that linking code is already in use. Please restart the authentication process to get a new code.'));
  }
  $excess_devices = $form_state['values']['excess_devices'];
  $del_auths = $form_state['values']['delete_devices'];
  $num_auths_deleted = 0;
  foreach ($del_auths AS $del_auth) {
    if ($del_auth != NULL) { $num_auths_deleted++; }
  } // foreach del_auth in del_auths
  if ($excess_devices > $num_auths_deleted) {
    $err_str = 'You have exceeded your number of device authorizations. You must delete @num devices to enable this new one.';
    form_set_error('delete_devices', t($err_str, array('@num' => $excess_devices)));
  }
} // roku_auth_linking_form_validate

/**
 * Submit the roku_auth_linking_form
 *
 * @param $form array per the drupal forms API
 * @param &$form_state array per the drupal forms API
 */
function roku_auth_linking_form_submit($form, &$form_state) {
  $del_auths = $form_state['values']['delete_devices'];
  foreach ($del_auths AS $token => $delete_it) {
    if ($delete_it) {
      roku_auth_delete_validations_by_device($token);
    }
  } // foreach existing device
  $device_token = roku_auth_generate_device_token($form_state['values']['linking_code']);
  global $user;
  $record->uid = $user->uid;
  $record->device_token = $device_token;
  $record->linking_code = $form_state['values']['linking_code'];
  $record->device_name = $form_state['values']['device_name'];
  $record->last_access = time();
  drupal_write_record('roku_auth_validation', $record);
  drupal_set_message(
    t('@name has been successfully added to your devices!', array('@name' => $form_state['values']['device_name']))
  );
} // roku_auth_linking_form_submit
