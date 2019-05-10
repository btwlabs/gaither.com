<?php

/**
 * Implementation of hook_user_default_permissions().
 */
function slideshow_user_default_permissions() {
  $permissions = array();

  // Exported permission: create slideshow content
  $permissions['create slideshow content'] = array(
    'name' => 'create slideshow content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: delete any slideshow content
  $permissions['delete any slideshow content'] = array(
    'name' => 'delete any slideshow content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: delete own slideshow content
  $permissions['delete own slideshow content'] = array(
    'name' => 'delete own slideshow content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: edit any slideshow content
  $permissions['edit any slideshow content'] = array(
    'name' => 'edit any slideshow content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: edit own slideshow content
  $permissions['edit own slideshow content'] = array(
    'name' => 'edit own slideshow content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  return $permissions;
}
