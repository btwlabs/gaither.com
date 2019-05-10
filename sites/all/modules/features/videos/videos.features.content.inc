<?php

/**
 * Implementation of hook_content_default_fields().
 */
function videos_content_default_fields() {
  $fields = array();

  // Exported field: field_microsite_video_embed_code
  $fields['microsite_videos-field_microsite_video_embed_code'] = array(
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
    'required' => '1',
    'multiple' => '0',
    'module' => 'emvideo',
    'active' => '1',
    'widget' => array(
      'video_width' => '620',
      'video_height' => '511',
      'video_autoplay' => 0,
      'preview_width' => '425',
      'preview_height' => '90',
      'preview_autoplay' => 0,
      'thumbnail_width' => '280',
      'thumbnail_height' => '209',
      'thumbnail_default_path' => '',
      'thumbnail_link_title' => 'See video',
      'providers' => array(
        'bitsontherun' => 'bitsontherun',
        'youtube' => 'youtube',
      ),
      'default_value' => array(
        '0' => array(
          'embed' => '',
          'value' => '',
        ),
      ),
      'default_value_php' => NULL,
      'meta_fields' => array(
        'title' => 0,
        'description' => 0,
      ),
      'label' => 'Video Embed Code',
      'weight' => '-4',
      'description' => '',
      'type' => 'emvideo_textfields',
      'module' => 'emvideo',
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Video Embed Code');

  return $fields;
}
