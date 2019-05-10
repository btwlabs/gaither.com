<?php
// $Id$

/**
 * @file
 * Administrative forms and page callbacks for role expiration notifications.
 */


/**
 * Display a table listing all the currently configured notifications.
 */
function uc_rolenotify_list() {
  drupal_add_css(drupal_get_path('module', 'uc_rolenotify') .'/css/uc_rolenotify.css');

  $header = array(
    t('Role promotion feature'),
    t('Notification time'),
    array('data' => t('Operations'), 'colspan' => 2),
  );

  $rows = array();

  $result = pager_query("SELECT rn.rnid, rp.duration, rp.granularity, n.title AS product_title, r.name AS role_name, rn.time_number, rn.time_unit, rn.time_relative FROM {uc_rolenotify} AS rn LEFT JOIN {uc_roles_products} AS rp ON rn.rpid = rp.rpid LEFT JOIN {role} AS r ON rp.rid = r.rid LEFT JOIN {node} AS n ON rp.nid = n.nid ORDER BY r.name, rn.time_relative, rn.time_number", 25);

  while ($row = db_fetch_object($result)) {
    $rep = array('@number' => $row->time_number, '@unit' => $row->time_unit);

    $description = array(
      t('@name granted for @number @unit', array('@name' => $row->role_name, '@number' => $row->duration, '@unit' => $row->granularity)),
      t('On product: %title', array('%title' => $row->product_title)),
    );

    $row = array(
      'data' => array(
        implode('<br />', $description),
        $row->time_relative == 0 ? t('@number @unit before expiration', $rep) : t('@number @unit after expiration', $rep),
        l(t('edit'), 'admin/store/settings/rolenotify/'. $row->rnid .'/edit'),
        l(t('delete'), 'admin/store/settings/rolenotify/'. $row->rnid .'/delete'),
      ),
      'class' => 'notification',
    );

    $rows[] = $row;
  }

  return theme('table', $header, $rows) . theme('pager');
}

/**
 * Return the add/edit form for notifications.
 */
function uc_rolenotify_edit_form($form_state, $rolenotify = FALSE) {
  drupal_add_css(drupal_get_path('module', 'uc_rolenotify') .'/css/uc_rolenotify.css');

  $form = array();

  $form['rolenotify'] = array(
    '#type' => 'value',
    '#value' => $rolenotify,
  );

  // Build an array of role feature options.
  $options = array();

  $result = db_query("SELECT rp.*, r.name AS role_name, n.title AS product_title FROM {uc_roles_products} AS rp LEFT JOIN {role} AS r ON rp.rid = r.rid LEFT JOIN {node} AS n ON rp.nid = n.nid WHERE rp.duration > 0 ORDER BY n.title, rp.pfid");

  while ($row = db_fetch_object($result)) {
    $options[check_plain($row->product_title)][$row->rpid] = t('@name for @number @unit', array('@name' => $row->role_name, '@number' => $row->duration, '@unit' => $row->granularity));
  }

  $options = array('' => ' ') + $options;

  $form['rpid'] = array(
    '#type' => 'select',
    '#title' => t('Role assignment product feature'),
    '#description' => t('Select the feature for which this notification should be sent.'),
    '#options' => $options,
    '#default_value' => $rolenotify ? $rolenotify->rpid : '',
    '#required' => TRUE,
  );

  $form['time'] = array(
    '#type' => 'fieldset',
    '#title' => t('Notification time relative to role expiration'),
    '#tree' => TRUE,
    '#attributes' => array('class' => 'notification-time'),
  );
  $form['time']['number'] = array(
    '#type' => 'select',
    '#options' => drupal_map_assoc(range(0, 90)),
    '#default_value' => $rolenotify ? $rolenotify->time_number : 7,
  );
  $form['time']['unit'] = array(
    '#type' => 'select',
    '#options' => array(
      'days' => t('day(s)'),
      'weeks' => t('week(s)'),
      'months' => t('month(s)'),
      'years' => t('year(s)'),
    ),
    '#default_value' => $rolenotify ? $rolenotify->time_unit : 'days',
  );
  $form['time']['relative'] = array(
    '#type' => 'select',
    '#options' => array(
      0 => t('before'),
      1 => t('after'),
    ),
    '#default_value' => $rolenotify ? $rolenotify->time_relative : 0,
  );

  $form['email'] = array(
    '#type' => 'fieldset',
    '#title' => t('Notification e-mail settings'),
    '#tree' => TRUE,
  );

  $settings = $rolenotify ? $rolenotify->email : array('from' => uc_store_email_from(), 'addresses' => '[mail]');

  $form['email'] += ca_build_email_form($form_state, $settings, array('global', 'uc_roles', 'user', 'node', 'product'));

  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Save notification'),
    '#suffix' => l(t('Cancel'), 'admin/store/settings/rolenotify'),
  );

  return $form;
}

function uc_rolenotify_edit_form_submit($form, &$form_state) {
  // Determine whether we need a new object or an existing one.
  if ($form_state['values']['rolenotify']) {
    $rolenotify = $form_state['values']['rolenotify'];
  }
  else {
    $rolenotify = new stdClass();
  }

  // Update the notification object with the form values.
  $rolenotify->rpid = $form_state['values']['rpid'];
  $rolenotify->time_number = $form_state['values']['time']['number'];
  $rolenotify->time_unit = $form_state['values']['time']['unit'];
  $rolenotify->time_relative = $form_state['values']['time']['relative'];
  $rolenotify->email = array(
    'from' => $form_state['values']['email']['from'],
    'addresses' => $form_state['values']['email']['addresses'],
    'subject' => $form_state['values']['email']['subject'],
    'message' => $form_state['values']['email']['message'],
    'format' => $form_state['values']['format'],
  );

  // Save the new or updated object.
  uc_rolenotify_save($rolenotify);

  // Display a message and head back to the list page.
  drupal_set_message(t('Role expiration notification saved.'));

  $form_state['redirect'] = 'admin/store/settings/rolenotify';
}

/**
 * Confirm the deletion of a role expiration notification.
 *
 * @param $rolenotify
 *   The fully loaded role expiration notification object.
 */
function uc_rolenotify_delete_confirm_form($form_state, $rolenotify) {
  $form = array();

  $form['rolenotify'] = array(
    '#type' => 'value',
    '#value' => $rolenotify,
  );

  $rep = array('@number' => $rolenotify->time_number, '@unit' => $rolenotify->time_unit);
  $time = $row->time_relative == 0 ? t('@number @unit before expiration', $rep) : t('@number @unit after expiration', $rep);

  $description = t('Notify expirations of the role %name !time.', array('%name' => $rolenotify->role_name, '!time' => $time));

  return confirm_form($form, t('Are you sure you want to delete this notification?'), 'admin/store/settings/rolenotify', $description, t('Delete'));
}

function uc_rolenotify_delete_confirm_form_submit($form, &$form_state) {
  // Delete the notification.
  uc_rolenotify_delete($form_state['values']['rolenotify']);

  // Display a message and head back to the list page.
  drupal_set_message(t('Role expiration notification deleted.'));

  $form_state['redirect'] = 'admin/store/settings/rolenotify';
}

/**
 * Build the settings form for role expiration notifications.
 */
function uc_rolenotify_settings_form() {
  $form = array();

  $form['uc_rolenotify_cron_limit'] = array(
    '#type' => 'textfield',
    '#title' => t('Cron notification limit'),
    '#description' => t('Enter the number of notifications to process each cron run.'),
    '#default_value' => variable_get('uc_rolenotify_cron_limit', 25),
  );

  return system_settings_form($form);
}
