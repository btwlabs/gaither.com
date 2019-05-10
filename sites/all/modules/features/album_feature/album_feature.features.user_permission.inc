<?php

/**
 * Implementation of hook_user_default_permissions().
 */
function album_feature_user_default_permissions() {
  $permissions = array();

  // Exported permission: administer flash
  $permissions['administer flash'] = array(
    'name' => 'administer flash',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'developer',
    ),
  );

  // Exported permission: create microsite_album content
  $permissions['create microsite_album content'] = array(
    'name' => 'create microsite_album content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: create microsite_track content
  $permissions['create microsite_track content'] = array(
    'name' => 'create microsite_track content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: delete any microsite_album content
  $permissions['delete any microsite_album content'] = array(
    'name' => 'delete any microsite_album content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: delete any microsite_track content
  $permissions['delete any microsite_track content'] = array(
    'name' => 'delete any microsite_track content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: delete own microsite_album content
  $permissions['delete own microsite_album content'] = array(
    'name' => 'delete own microsite_album content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: delete own microsite_track content
  $permissions['delete own microsite_track content'] = array(
    'name' => 'delete own microsite_track content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: edit any microsite_album content
  $permissions['edit any microsite_album content'] = array(
    'name' => 'edit any microsite_album content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: edit any microsite_track content
  $permissions['edit any microsite_track content'] = array(
    'name' => 'edit any microsite_track content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: edit own microsite_album content
  $permissions['edit own microsite_album content'] = array(
    'name' => 'edit own microsite_album content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: edit own microsite_track content
  $permissions['edit own microsite_track content'] = array(
    'name' => 'edit own microsite_track content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: view imagecache album_thumbnail
  $permissions['view imagecache album_thumbnail'] = array(
    'name' => 'view imagecache album_thumbnail',
    'roles' => array(),
  );

  return $permissions;
}
