<?php

/**
 * Helper to implementation of hook_content_default_fields().
 */
function _videos_content_default_fields() {
  $fields = array();

  // Exported field: field_microsite_video_embed_code
  $fields[] = array(
    'field_name' => 'field_microsite_video_embed_code',
    'type_name' => 'microsite_videos',
    'display_settings' => array(
      'weight' => '-4',
      'parent' => '',
      'label' => array(
        'format' => 'hidden',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      '4' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'emvideo',
    'required' => '0',
    'multiple' => '0',
    'module' => 'emvideo',
    'active' => '1',
    'widget' => array(
      'video_width' => '425',
      'video_height' => '350',
      'video_autoplay' => '',
      'preview_width' => '425',
      'preview_height' => '90',
      'preview_autoplay' => '',
      'thumbnail_width' => '175',
      'thumbnail_height' => '131',
      'thumbnail_default_path' => '',
      'thumbnail_link_title' => 'See video',
      'providers' => array(
        '1' => 1,
        '0' => 1,
        'archive' => FALSE,
        'bliptv' => FALSE,
        'dailymotion' => FALSE,
        'google' => FALSE,
        'guba' => FALSE,
        'imeem' => FALSE,
        'lastfm' => FALSE,
        'livevideo' => FALSE,
        'metacafe' => FALSE,
        'myspace' => FALSE,
        'revver' => FALSE,
        'sevenload' => FALSE,
        'spike' => FALSE,
        'tudou' => FALSE,
        'twistage' => FALSE,
        'ustream' => FALSE,
        'ustreamlive' => FALSE,
        'vimeo' => FALSE,
        'voicethread' => FALSE,
        'yahoomusic' => FALSE,
        'youtube' => FALSE,
        'zzz_custom_url' => FALSE,
      ),
      'default_value' => array(
        '0' => array(
          'embed' => '',
          'value' => '',
        ),
      ),
      'default_value_php' => NULL,
      'label' => 'Video Embed Code',
      'weight' => '-4',
      'description' => '',
      'type' => 'emvideo_textfields',
      'module' => 'emvideo',
    ),
  );

  // Translatables
  array(
    t('Video Embed Code'),
  );

  return $fields;
}

/**
 * Helper to implementation of hook_user_default_permissions().
 */
function _videos_user_default_permissions() {
  $permissions = array();

  // Exported permission: create microsite_videos content
  $permissions[] = array(
    'name' => 'create microsite_videos content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: delete any microsite_videos content
  $permissions[] = array(
    'name' => 'delete any microsite_videos content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: delete own microsite_videos content
  $permissions[] = array(
    'name' => 'delete own microsite_videos content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: edit any microsite_videos content
  $permissions[] = array(
    'name' => 'edit any microsite_videos content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: edit own microsite_videos content
  $permissions[] = array(
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
