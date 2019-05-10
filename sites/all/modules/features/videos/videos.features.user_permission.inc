<?php

/**
 * Implementation of hook_user_default_permissions().
 */
function videos_user_default_permissions() {
  $permissions = array();

  // Exported permission: create microsite_videos content
  $permissions['create microsite_videos content'] = array(
    'name' => 'create microsite_videos content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: delete any microsite_videos content
  $permissions['delete any microsite_videos content'] = array(
    'name' => 'delete any microsite_videos content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: delete own microsite_videos content
  $permissions['delete own microsite_videos content'] = array(
    'name' => 'delete own microsite_videos content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: edit any microsite_videos content
  $permissions['edit any microsite_videos content'] = array(
    'name' => 'edit any microsite_videos content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: edit own microsite_videos content
  $permissions['edit own microsite_videos content'] = array(
    'name' => 'edit own microsite_videos content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  return $permissions;
}
