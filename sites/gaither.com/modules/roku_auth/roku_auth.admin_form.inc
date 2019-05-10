<?php

/**
 * Administration form for Roku authentication
 *
 * @return array per the drupal forms API
 */
function roku_auth_admin_form() {
  $form = array();
  $form['roku_auth_num_authentications'] = array(
    '#title' => 'Number of Devices Per User',
    '#type' => 'select',
    '#description' => t('Number of devices to allow each user to authenticate'),
    '#options' => array_combine(range(1,10), range(1,10)),
    '#default_value' => variable_get('roku_auth_num_authentications', 1),
  );
  return system_settings_form($form);
} // roku_auth_admin_form
