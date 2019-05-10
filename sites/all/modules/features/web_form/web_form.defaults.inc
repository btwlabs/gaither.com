<?php

/**
 * Helper to implementation of hook_user_default_permissions().
 */
function _web_form_user_default_permissions() {
  $permissions = array();

  // Exported permission: access own webform submissions
  $permissions[] = array(
    'name' => 'access own webform submissions',
    'roles' => array(
      '0' => 'administrator',
    ),
  );

  // Exported permission: access webform results
  $permissions[] = array(
    'name' => 'access webform results',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: clear webform results
  $permissions[] = array(
    'name' => 'clear webform results',
    'roles' => array(
      '0' => 'administrator',
    ),
  );

  // Exported permission: create webforms
  $permissions[] = array(
    'name' => 'create webforms',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: edit own webform submissions
  $permissions[] = array(
    'name' => 'edit own webform submissions',
    'roles' => array(
      '0' => 'administrator',
    ),
  );

  // Exported permission: edit own webforms
  $permissions[] = array(
    'name' => 'edit own webforms',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: edit webform submissions
  $permissions[] = array(
    'name' => 'edit webform submissions',
    'roles' => array(
      '0' => 'administrator',
    ),
  );

  // Exported permission: edit webforms
  $permissions[] = array(
    'name' => 'edit webforms',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: use PHP for additional processing
  $permissions[] = array(
    'name' => 'use PHP for additional processing',
    'roles' => array(
      '0' => 'administrator',
      '1' => 'developer',
    ),
  );

  return $permissions;
}
