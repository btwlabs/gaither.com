<?php

/**
 * Implementation of hook_user_default_permissions().
 */
function social2_groups_add_on_user_default_permissions() {
  $permissions = array();

  // Exported permission: administer organic groups
  $permissions['administer organic groups'] = array(
    'name' => 'administer organic groups',
    'roles' => array(
      '0' => 'administrator',
      '1' => 'developer',
    ),
  );

  return $permissions;
}
