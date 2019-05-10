<?php
// $Id$

/**
 * @file
 * 
 */
 
 



/**
 * Admin settings form.
 */
function emma_admin_settings_form() {
  $form = array();
  
  $form['emma'] = array(
    '#type' => 'fieldset',
    '#title' => t('Configure Emma'),
  );
  
  $form['emma']['emma_globals'] = array(
    '#type' => 'fieldset',
    '#title' => t('Global Settings'),
    '#description' => t('Configure global settings for the Emma module.'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  
  $form['emma']['emma_globals']['emma_default_signup_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Default Remote Signup URL'),
    '#default_value' => variable_get('emma_default_signup_url', ''),
  );
  
  $form['emma']['emma_globals']['emma_default_signup_post'] = array(
    '#type' => 'textfield',
    '#title' => t('Default Signup Post #'),
    '#default_value' => variable_get('emma_default_signup_post', ''),  
  );
  
  $form['emma']['emma_globals']['emma_default_account_id'] = array(
    '#type' => 'textfield',
    '#title' => t('Default Account ID #'),
    '#default_value' => variable_get('emma_default_account_id', ''),  
  );  
  
  $form['emma']['emma_globals']['emma_default_username'] = array(
    '#type' => 'textfield',
    '#title' => t('Default Username'),
    '#default_value' => variable_get('emma_default_username', ''),  
  );
  
  $form['emma']['emma_globals']['emma_default_password'] = array(
    '#type' => 'textfield',
    '#title' => t('Default Password'),
    '#default_value' => variable_get('emma_default_password', ''),
  );
  
  $form['emma']['emma_fields'] = array(
    '#type' => 'fieldset',
    '#title' => t('Subscription Fields'),
  );
  
  $form['emma']['emma_fields']['emma_profile_module_enabled'] = array(
    '#type' => 'checkbox',
    '#title' => t("Enable Profile module support"),
    '#description' => t("Include fields from core's Profile module."),
    '#default_value' => variable_get('emma_profile_module_enabled', FALSE),
  );  
  

  $options = array();

  if ($types = node_get_types()) {
    foreach ($types as $type) {
      $options[$type->type] = $type->name;
    }
  }

  $form['emma']['emma_fields']['emma_enable_content_types'] = array(
    '#type' => 'fieldset',
    '#title' => t('CCK Integration'),
    '#description' => t('Choose which content types should be enabled to have their fields integrated with Emma mailing list subscriptions.'),

  );

  $form['emma']['emma_fields']['emma_enable_content_types']['emma_content_types'] = array(
    '#type' => 'checkboxes',
    '#title' => t('Enable Content Types'),
    '#description' => t('Check the content types you wish enable.'),
    '#options' => $options,
    '#default_value' => variable_get('emma_content_types', array()),
  );

  
  $form['#submit'][] = 'emma_admin_settings_form_submit';  
  
  return system_settings_form($form);
}





/**
 * Implementation of hook_submit().
 */
function emma_admin_settings_form_submit($form, &$form_state) {
  // clean up the array of content types for easier retrieval
  $types = $form_state['values']['emma_content_types'];

  $enabled = array();

  foreach ($types as $type) {
    if ($type) {
      $enabled[] = $type;
    }
  }

  $form_state['values']['emma_content_types'] = $enabled;
}





/**
 * Form builder function.
 */
function emma_user_import_form() {
  $form = array();
 
  // get existing mailing list groups
  $results = db_query("SELECT group_id, list_name FROM {emma} ORDER BY list_name ASC");
  
  $options = array();
  while ($row = db_fetch_object($results)) {
    $options[$row->group_id] = $row->list_name;
  }
 
  $form['group_id'] = array(
    '#type' => 'radios',
    '#title' => 'Import Users Into Mailing List',
    '#options' => $options,
  );
  
  $form['import_file'] = array(
    '#type' => 'file',
    '#title' => 'Import Subscribers',
  );
  
  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Import'),
  );
  
  $form['#attributes'] = array('enctype' => "multipart/form-data");
  
  return $form;
}





/**
 * Implementation of hook_validate().
 */
function emma_user_import_form_validate($form, &$form_state) {
  // make sure mailing list exists with group id
  $group_id = $form_state['values']['group_id'];
  $exists   = db_result(db_query('SELECT group_id FROM {emma} WHERE group_id = %d', $group_id));
  
  if (!$exists) {
    form_set_error('group_id', t('There is no mailing list with the specified Group ID'));
  }

  $file = file_save_upload('import_file', array(
    'file_validate_extensions' => array('csv'),
  ));
  
  if (isset($file->filename)) {
    if (file_move($file, $file->filename)) {
      drupal_write_record('files', $file, 'fid');
      $form_state['storage']['import_file'] = $file;
    }
    else {
      form_set_error('import_file', t('Failed to save uploaded file.'));
    }
  }
  else {
    form_set_error('import_file', t('Invalid file extension.'));
  }
}





/**
 * Implementation of hook_submit().
 */
function emma_user_import_form_submit($form, &$form_state) {
  $file = $form_state['storage']['import_file'];
  
  unset($form_state['storage']['import_file']);
  
  file_set_status($file, FILE_STATUS_PERMANENT);
  
  $imports = array();
  
  if (($handle = fopen($file->filepath, "r")) !== FALSE) {
      while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $imports[] = array(
          'email' => $data[0],
        );
      }
      fclose($handle);
  }
  
  if (!empty($imports)) {
    unset($imports[0]);
  }
  
  $group_id = $form_state['values']['group_id'];
  
  foreach ($imports as $import) {
    // look up uid in users table
    $uid = db_result(db_query("SELECT uid FROM {users} WHERE mail = '%s'", $import['email']));
    
    if ($uid) {
      dpm($uid);
      // user already exists, check if they exist in emma_users table subscribed to group_id
      $exists = db_result(db_query('SELECT uid FROM {emma_users} WHERE uid = %d AND group_id = %d', $uid, $group_id));
      
      // if they don't exist, add them, otherwise ignore
      if (!$exists) {
        $record = new stdClass();
        $record->group_id = $group_id;
        $record->uid      = $uid;
        $record->email     = $import['email'];
        $record->created  = time();
        
        drupal_write_record('emma_users', $record);
      }
    }
    else {
      // user does not exists, but we still need to add them to emma_users table
      $record = new stdClass();
      $record->group_id = $group_id;
      $record->uid      = 0;
      $record->email     = $import['email'];
      $record->created  = time();
      
      drupal_write_record('emma_users', $record);
    }
  }
}





/**
 * Form builder function.
 */
function emma_edit_list_form(&$form_state, $list = NULL) {  
  $form = array();
  
  $is_new = FALSE;
  
  if (empty($list)) {
    // new mailing, set empty defaults for $data
    $list = new stdClass();
    $list->list_name = '';
    $list->group_id = '';
    $list->signup_url = '';
    $list->signup_post = '';
    $list->account_id = '';
    $list->username = '';
    $list->password = '';
    $list->registration = '';
    
    $is_new = TRUE;
  }
  
  $form['emma'] = array(
    '#type' => 'fieldset',
    '#title' => $is_new ? t('Add New Mailing List') : t('Edit Mailing List'),
    '#collapsible' => $is_new,
    '#collapsed' => $is_new,
  );
  
  $form['emma']['list_name'] = array(
    '#type' => 'textfield',
    '#title' => t('List Name'),
    '#description' => t('The name for this mailing list.'),
    '#default_value' => $list->list_name,
  );
  
  $form['emma']['group_id'] = array(
    '#type' => 'textfield',
    '#title' => t('Group ID'),
    '#description' => t('The group id number for this mailing list.'),
    '#default_value' => $list->group_id,    
  );
  
  $form['emma']['signup_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Signup URL'),
    '#description' => t('The remote signup url for this mailing list.'),
    '#default_value' => !empty($list->signup_url) ? $list->signup_url : variable_get('emma_default_signup_url', ''),    
  );
  
  $form['emma']['signup_post'] = array(
    '#type' => 'textfield',
    '#title' => t('Signup Post'),
    '#description' => t('The signup post for this mailing list.'),
    '#default_value' => !empty($list->signup_post) ? $list->signup_post : variable_get('emma_default_signup_post', ''),    
  );
  
  $form['emma']['account_id'] = array(
    '#type' => 'textfield',
    '#title' => t('Account ID'),
    '#description' => t('The account id number for this mailing list.'),
    '#default_value' => !empty($list->account_id) ? $list->account_id : variable_get('emma_default_account_id', ''),    
  );
  
  $form['emma']['username'] = array(
    '#type' => 'textfield',
    '#title' => t('Username'),
    '#description' => t('The username for this mailing list.'),
    '#default_value' => !empty($list->username) ? $list->username : variable_get('emma_default_username', ''),    
  );
  
  $form['emma']['password'] = array(
    '#type' => 'textfield',
    '#title' => t('Password'),
    '#description' => t('The password for this mailing list.'),
    '#default_value' => !empty($list->password) ? $list->password : variable_get('emma_default_password', ''),    
  );
  
  $form['emma']['registration'] = array(
    '#type' => 'checkbox',
    '#title' => t('Allow users the option to subscribe to this mailing list upon registration.'),
    '#description' => t('If selected, will display an opt-in checkbox on the user registration form'),
    '#default_value' => $list->registration,
  );
  
  $form['emma']['default_value'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enabled by Default?'),
    '#description' => t('If this mailing list is enabled to be displayed on the user registration form, check this box to have it enabled by default'),
    '#default_value' => variable_get('emma_list_'. $list->group_id .'_default_value', FALSE),
  );
 
  $form['emma']['is_new'] = array(
    '#type' => 'hidden',
    '#value' => $is_new,
  );
  
  $form['emma']['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Submit'),
  );
  
  return $form;              
}





/**
 * Implementation of hook_submit().
 */
function emma_edit_list_form_submit($form, &$form_state) {  
  module_load_include('inc', 'emma', 'includes/emma.api');
      
  $form_state['redirect'] = 'admin/emma/lists';

  $data = array(
    'group_id'     => $form_state['values']['group_id'],
    'list_name'    => $form_state['values']['list_name'],
    'signup_url'   => $form_state['values']['signup_url'],
    'signup_post'  => $form_state['values']['signup_post'],
    'account_id'   => $form_state['values']['account_id'],
    'username'     => $form_state['values']['username'],
    'password'     => $form_state['values']['password'],
    'registration' => $form_state['values']['registration'],
  );
  
  $is_new = $form_state['values']['is_new'] ? TRUE : FALSE;
  
  emma_update_list($data, $is_new);
}





/**
 * Form builder function.
 */
function emma_filter_by_group_form() {
  module_load_include('inc', 'emma', 'includes/emma.api');
  
  $form = array();
  
  $form['emma'] = array(
    '#type' => 'fieldset',
    '#title' => t('Filter by mailing list'),
  );
  
  $form['emma']['mailing_lists'] = array(
    '#type' => 'select',
    '#title' => t('Mailing Lists'),
    '#options' => emma_get_list_names(),
    '#default_value' => arg(4),
  );
  
  $form['emma']['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Submit'),
  );
  
  $form['emma']['reset'] = array(
    '#type' => 'submit',
    '#value' => t('Reset'),
  );
  
  $form['#submit'][] = 'emma_filter_by_group_form_submit';
  
  return $form;
}





/**
 * Implementation of hook_submit().
 */
function emma_filter_by_group_form_submit($form, &$form_state) {
  switch ($form_state['values']['op']) {
    case t('Submit'):
      $form_state['redirect'] = 'admin/reports/mcnstats/emma/'. $form_state['values']['mailing_lists'];    
      break;
      
    case t('Reset'):
      $form_state['redirect'] = 'admin/reports/mcnstats/emma';
      break;
  }
}





/**
 * Form builder function.
 */
function emma_content_fields_form() {
  module_load_include('inc', 'content', 'includes/content.admin');
  module_load_include('inc', 'emma', 'includes/emma.api');
  
  $form = array();
  
  $enabled_content_types = variable_get('emma_content_types', array());

  $all_fields = emma_get_fields();

  $form['emma'] = array(
    '#type' => 'fieldset',
    '#title' => t('Map content fields.'),
    '#description' => t("Map enabled content type's fields to Emma mailing list subscription fields."),
    '#tree' => TRUE,
  );
  
  $lists         = emma_get_list_names();
  $mapped_fields = emma_get_field_mappings();
  
  foreach ($lists as $group_id => $list_name) {
    $exists = db_result(db_query('SELECT DISTINCT(m.group_id) FROM {emma_fields} m WHERE m.group_id = %d', $group_id));
    
    $form['emma'][$group_id] = array(
      '#type' => 'fieldset',
      '#title' => $list_name,
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
      '#tree' => TRUE,      
    );
    
    $form['emma'][$group_id]['exists'] = array(
      '#type' => 'hidden',
      '#value' => $exists,
    );
    
    foreach ($all_fields as $type => $fields) {
      $form['emma'][$group_id][$type] = array(
        '#type' => 'fieldset',
        '#title' => $type,
        '#collapsible' => TRUE,
        '#collapsed' => TRUE,
        '#tree' => TRUE,        
      );
            
      foreach ($fields as $field) {
        $form['emma'][$group_id][$type][$field] = array(
          '#type' => 'textfield',
          '#title' => $field,
          '#size' => 20,
          '#default_value' => !empty($mapped_fields['emma'][$group_id][$type][$field]) ? $mapped_fields['emma'][$group_id][$type][$field] : '',
        );
      }
    }
  }
  
  $form['emma']['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Submit'),
  );  
  
  return $form;
}





/**
 * Implementation of hook_submit().
 */
function emma_content_fields_form_submit($form, &$form_state) {
  $data = $form_state['values']['emma'];
  unset($data['submit']);
  
  $exists = array();
  
  foreach ($data as $group_id => $values) {
    $exists[$group_id] = $values['exists'];
    unset($data[$group_id]['exists']);
  }

  foreach ($data as $group_id => $content_type) {
    foreach ($content_type as $type => $fields) {
      foreach ($fields as $field => $emma_field) {        
        $record = new stdClass();
        $record->group_id = $group_id;
        $record->type = $type;
        $record->field_name = $field;
        $record->emma_field_name = $emma_field;
        
        if (!$exists[$group_id]) {
          drupal_write_record('emma_fields', $record);
        }
        else {
          // circumventing using drupal_write_record() here as it seems to choke on having an auto-incrementing primary key, me thinks
          db_query("UPDATE {emma_fields} SET emma_field_name = '%s' WHERE group_id = %d AND type = '%s' AND field_name = '%s'", $emma_field, $group_id, $type, $field);  
        }
      }
    }
  }
}
