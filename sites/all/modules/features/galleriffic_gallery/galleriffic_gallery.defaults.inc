<?php

/**
 * Helper to implementation of hook_content_default_fields().
 */
function _galleriffic_gallery_content_default_fields() {
  $fields = array();

  // Exported field: field_fupload_photo
  $fields[] = array(
    'field_name' => 'field_fupload_photo',
    'type_name' => 'photo',
    'display_settings' => array(
      'label' => array(
        'format' => 'above',
        'exclude' => 0,
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
      'token' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'filefield',
    'required' => '1',
    'multiple' => '1',
    'module' => 'filefield',
    'active' => '1',
    'list_field' => '0',
    'list_default' => 1,
    'description_field' => '0',
    'widget' => array(
      'file_extensions' => 'png gif jpg jpeg',
      'file_path' => '',
      'progress_indicator' => 'bar',
      'max_filesize_per_file' => '',
      'max_filesize_per_node' => '',
      'max_resolution' => '0',
      'min_resolution' => '0',
      'alt' => '',
      'custom_alt' => 1,
      'title' => '',
      'custom_title' => 1,
      'title_type' => 'textfield',
      'default_image' => NULL,
      'use_default_image' => 0,
      'fupload_mode' => 'single',
      'fupload_previewlist_img_attributes' => '',
      'fupload_title_replacements' => '_;{;};-',
      'fupload_previewlist_field_settings' => array(
        'node_title' => 0,
        'node_description' => 0,
        'imagefield_title' => 0,
        'imagefield_alt' => 0,
        'imagefield_description' => 0,
      ),
      'fupload_previewlist_redirecturl' => '',
      'label' => 'Photo',
      'weight' => '-4',
      'description' => '',
      'type' => 'image_fupload_imagefield_widget',
      'module' => 'image_fupload_imagefield',
    ),
  );

  // Translatables
  array(
    t('Photo'),
  );

  return $fields;
}

/**
 * Helper to implementation of hook_imagecache_default_presets().
 */
function _galleriffic_gallery_imagecache_default_presets() {
  $items = array(
    '200scale' => array(
      'presetname' => '200scale',
      'actions' => array(
        '0' => array(
          'weight' => '0',
          'module' => 'imagecache',
          'action' => 'imagecache_scale',
          'data' => array(
            'width' => '200',
            'height' => '',
            'upscale' => 0,
          ),
        ),
      ),
    ),
    '490scale-height' => array(
      'presetname' => '490scale-height',
      'actions' => array(
        '0' => array(
          'weight' => '0',
          'module' => 'imagecache',
          'action' => 'imagecache_scale',
          'data' => array(
            'width' => '',
            'height' => '490',
            'upscale' => 0,
          ),
        ),
      ),
    ),
    '490scale-width' => array(
      'presetname' => '490scale-width',
      'actions' => array(
        '0' => array(
          'weight' => '0',
          'module' => 'imagecache',
          'action' => 'imagecache_scale',
          'data' => array(
            'width' => '490',
            'height' => '',
            'upscale' => 0,
          ),
        ),
      ),
    ),
    '75square' => array(
      'presetname' => '75square',
      'actions' => array(
        '0' => array(
          'weight' => '0',
          'module' => 'imagecache',
          'action' => 'imagecache_scale_and_crop',
          'data' => array(
            'width' => '75',
            'height' => '75',
          ),
        ),
      ),
    ),
    'GalleryFinal' => array(
      'presetname' => 'GalleryFinal',
      'actions' => array(
        '0' => array(
          'weight' => '0',
          'module' => 'imagecache_canvasactions',
          'action' => 'canvasactions_aspect',
          'data' => array(
            'portrait' => '2',
            'landscape' => '1',
            'ratio_adjustment' => '1',
          ),
        ),
      ),
    ),
  );
  return $items;
}

/**
 * Helper to implementation of hook_user_default_permissions().
 */
function _galleriffic_gallery_user_default_permissions() {
  $permissions = array();

  // Exported permission: create photo content
  $permissions[] = array(
    'name' => 'create photo content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: delete any photo content
  $permissions[] = array(
    'name' => 'delete any photo content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: delete own photo content
  $permissions[] = array(
    'name' => 'delete own photo content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: edit any photo content
  $permissions[] = array(
    'name' => 'edit any photo content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: edit captions
  $permissions[] = array(
    'name' => 'edit captions',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: edit own photo content
  $permissions[] = array(
    'name' => 'edit own photo content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: mass upload images
  $permissions[] = array(
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
