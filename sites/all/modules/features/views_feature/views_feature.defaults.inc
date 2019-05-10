<?php

/**
 * Helper to implementation of hook_user_default_permissions().
 */
function _views_feature_user_default_permissions() {
  $permissions = array();

  // Exported permission: access all views
  $permissions[] = array(
    'name' => 'access all views',
    'roles' => array(),
  );

  // Exported permission: administer views
  $permissions[] = array(
    'name' => 'administer views',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'developer',
    ),
  );

  // Exported permission: use views exporter
  $permissions[] = array(
    'name' => 'use views exporter',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'developer',
    ),
  );

  return $permissions;
}
