<?php

/**
 * Helper to implementation of hook_user_default_permissions().
 */
function _image_features_user_default_permissions() {
  $permissions = array();

  // Exported permission: administer imageapi
  $permissions[] = array(
    'name' => 'administer imageapi',
    'roles' => array(
      '0' => 'administrator',
    ),
  );

  // Exported permission: administer imagecache
  $permissions[] = array(
    'name' => 'administer imagecache',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'developer',
    ),
  );

  // Exported permission: flush imagecache
  $permissions[] = array(
    'name' => 'flush imagecache',
    'roles' => array(
      '0' => 'administrator',
      '1' => 'developer',
    ),
  );

  return $permissions;
}
