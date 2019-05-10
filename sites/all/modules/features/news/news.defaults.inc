<?php

/**
 * Helper to implementation of hook_user_default_permissions().
 */
function _news_user_default_permissions() {
  $permissions = array();

  // Exported permission: administer scheduler
  $permissions[] = array(
    'name' => 'administer scheduler',
    'roles' => array(
      '0' => 'administrator',
      '1' => 'developer',
    ),
  );

  // Exported permission: create news content
  $permissions[] = array(
    'name' => 'create news content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: delete any news content
  $permissions[] = array(
    'name' => 'delete any news content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: delete own news content
  $permissions[] = array(
    'name' => 'delete own news content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: edit any news content
  $permissions[] = array(
    'name' => 'edit any news content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: edit own news content
  $permissions[] = array(
    'name' => 'edit own news content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: schedule (un)publishing of nodes
  $permissions[] = array(
    'name' => 'schedule (un)publishing of nodes',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  return $permissions;
}
