<?php

/**
 * Implementation of hook_content_default_fields().
 */
function galleriffic_gallery_content_default_fields() {
  $fields = array();

  // Exported field: field_fupload_photo
  $fields['photo-field_fupload_photo'] = array(
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
        'node_title' => 'node_title',
        'node_description' => 0,
        'imagefield_title' => 0,
        'imagefield_alt' => 0,
        'imagefield_description' => 0,
        'taxonomy_3' => 0,
      ),
      'fupload_previewlist_redirecturl' => 'photos',
      'label' => 'Photo',
      'weight' => '-4',
      'description' => '',
      'type' => 'image_fupload_imagefield_widget',
      'module' => 'image_fupload_imagefield',
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Photo');

  return $fields;
}
