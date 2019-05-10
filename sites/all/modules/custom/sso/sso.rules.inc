<?php

/**
 * Implementation of hook_rules_action_info()
 *
 * Describe actions for the rules system
 *
 * @return array per the rules API
 */
function sso_rules_action_info () {
  $result = array ();
  $result['sso_promote_user'] = array(
    'label' => t('Promote a user on SSO'),
    'arguments' => array(
      'user' => array('type' => 'user', 'label' => t('User')),
      'role' => array('label' => t('Add Role'), 'type' => 'sso_selector'),
    ),
    'module' => 'SSO',
  );
  return $result;
} // hook_rules_action_info

/**
 * Implementation of hook_rules_data_type_info
 *
 * Describe a custom data type for the rules system
 *
 * @return array per the rules API
 */
function sso_rules_data_type_info() {
  return array(
    'sso_selector' => array(
      'label' => t('Select Role'),
      'class' => 'sso_selector_string',
      'savable' => FALSE,
      'identifiable' => FALSE,
      'uses_input_form' => FALSE,
      'module' => 'sso',
    )
  );
} // hook_rules_data_type_info

class sso_selector_string extends rules_data_type {
  /**
   * Generate our default input form
   *
   * Generate an input form for setting the value for this rule
   *
   * @param $info array per the rules API
   * @param $value string default value
   * @return array a single form element per the forms API
   */
  function get_default_input_form($info, $value) {
    $desc = $info['description'];
    $label = $info['label'];
    $selector = array(
      '#type' => 'select',
      '#description' => t('Suggested roles. Those marked with an asterisk (*) '
        . 'do not exist locally and will need to be configured.'),
      '#options' => sso_get_roles(),
    );
    $textfield = array(
      '#type' => 'textfield',
      '#description' => t('If your desired role is not listed above, type it here.'),
      '#default_value' => $value,
    );
    $form = array(
      '#type' => 'fieldset',
      '#title' => $label ? $label : t('Add Role'),
      '#description' => $desc ? $desc : t('Role to grant. Must be a valid role on the SSO server.'),
      '#element_validate' => array('sso_selector_validate'),
      'role_selected' => $selector,
      'role_typed' => $textfield,
    );
    return $form;
  } // sso_selector_string::get_default_input_form
} // class sso_selector_string

/**
 * validate an sso_selector_string selector form element
 *
 * Go through the element fieldset and set its value equal to one of its
 *  children's. Also, prevent priviledge escalation: you may only grant a
 *  a role if a) you have the role yourself, b) the role does not exist locally
 *  or c) you have the "administer permissions" permission
 *
 * @input $form array per the drupal forms api
 * @input &$form_state array per the drupal forms api
 */
function sso_selector_validate($form, &$form_state) {
  $input = reset($form_state['values']['settings']); // first (only) element is usually 'role'
  $role_typed = $input['role_typed'];
  $role_selected = $input['role_selected'];
  $role = $role_typed ? $role_typed : $role_selected;
  $roles = user_roles();
  global $user;
  // Ensure the current user is allowed to grant this permission
  $invalid_role = !user_access('administer permissions') // Admins can grant permissions
    && in_array($role, $roles)         // does the role exist locally?
    && !in_array($role, $user->roles); // Does this user have the role already?
  if ($invalid_role) {
    $key = key($form_state['values']['settings']);
    form_set_error('settings][' . $key . '][role_typed', 
      'You have insufficient permission to grant this role. Please select a different one.'
    );
    form_set_error('settings][' . $key . '][role_selected', ' ');
  } // a user may not create a rule granting a role he himself does not have
  else {
    form_set_value($form, $role, $form_state);
  }
} // sso_selector_validate

/**
 * Get a list of currently-used roles from the SSO server
 *
 * Query the SSO server for all roles currently used by this realm
 *
 * @return array of roles in the format ('role name' => 'Role Display Name')
 */
function sso_get_roles() {
  $result = array();
  $sso_data = 'code=' . variable_get('sso_code','')
    . '&key=' . variable_get('sso_drupal_api_key','')
    . '&period=current'
    . '&realm=' . variable_get('sso_realm', sso_default_realm())
  ;
  $url = SSO_SERVER.'api.php';
  $response = sso_send_data_to_mcnhub($url,$sso_data);
  $roles = json_decode($response);
  if (!is_array($roles) || empty($roles)) {
    $result['fan club member'] = 'Fan Club Member';
  }
  else {
    $query = 'SELECT rid FROM {role} WHERE name="%s"';
    foreach ($roles AS $role) {
      $rname = $role->{roleName};
      $rid = db_result(db_query($query, $rname));
      $result[$rname] = $rname . ($rid ? '' : ' *');
    } // foreach role in roles
  } // list of roles returned
  return $result;
} // sso_get_roles

/**
 * Apply a role promotion to a user.
 *
 * Invoke an SSO role promotion on a user
 *
 * @param $account a Drupal user object
 * @param $role string the role name
 */
function sso_promote_user($account, $role) {
  $account_guid = sso_get_user_guid($account->uid);
  $sso_data =
    'website=' . variable_get('sso_referer', $_SERVER[HTTP_HOST])
    . '&code=' . variable_get('sso_code','')
    . '&realm=' . variable_get('sso_realm', sso_default_realm())
    . '&apiKey=' . variable_get('sso_drupal_api_key','')
    . '&roleName=' . $role
    . '&startDate=' . date('Y-m-d')
    . '&endDate=' . date('Y-m-d', time() + 31556909) // 365.242 * 24 * 3600 (days/yr * hours/day * seconds/hour)
    . '&user=' . $account_guid;
  $url = SSO_SERVER.'role_promotion.php';
  $response = sso_send_data_to_mcnhub($url, $sso_data);
  $responseParts = explode(",",$response);
  if (isset($responseParts[1])) {
    $status = explode("=",$responseParts[0]);
    $code = explode("=",$responseParts[1]);
    if ($status[1] == "OK") {
      drupal_set_message(t('Congratulations! Your membership has been applied successfully!'));
    }
  } // if (isset($responseParts[1]))
  if ($error_message) {
    drupal_set_message(t('Error activating membership: @error', array('@error'=>$error_message)), 'error');
  }
} // sso_promote_user
