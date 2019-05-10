<?php

/**
 * Implementation of hook_user_default_permissions().
 */
function galleriffic_gallery_user_default_permissions() {
  $permissions = array();

  // Exported permission: create photo content
  $permissions['create photo content'] = array(
    'name' => 'create photo content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: delete any photo content
  $permissions['delete any photo content'] = array(
    'name' => 'delete any photo content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: delete own photo content
  $permissions['delete own photo content'] = array(
    'name' => 'delete own photo content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: edit any photo content
  $permissions['edit any photo content'] = array(
    'name' => 'edit any photo content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: edit captions
  $permissions['edit captions'] = array(
    'name' => 'edit captions',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: edit own photo content
  $permissions['edit own photo content'] = array(
    'name' => 'edit own photo content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: mass upload images
  $permissions['mass upload images'] = array(
    'name' => 'mass upload images',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  return $permissions;
}
