<?php

/**
 * Implementation of hook_imagecache_default_presets().
 */
function album_feature_imagecache_default_presets() {
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
    'album_thumbnail' => array(
      'presetname' => 'album_thumbnail',
      'actions' => array(
        '0' => array(
          'weight' => '0',
          'module' => 'imagecache',
          'action' => 'imagecache_scale',
          'data' => array(
            'width' => '50',
            'height' => '50',
            'upscale' => 0,
          ),
        ),
      ),
    ),
  );
  return $items;
}

/**
 * Implementation of hook_node_info().
 */
function album_feature_node_info() {
  $items = array(
    'microsite_album' => array(
      'name' => t('Album'),
      'module' => 'features',
      'description' => t('The <em>Album</em> content type is used to generate collections of tracks into albums.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'has_body' => '1',
      'body_label' => t('Album Notes'),
      'min_word_count' => '0',
      'help' => '',
    ),
    'microsite_track' => array(
      'name' => t('Track'),
      'module' => 'features',
      'description' => t('The <em>Track</em> content type is used to generate tracks for the album.'),
      'has_title' => '1',
      'title_label' => t('Track Title'),
      'has_body' => '1',
      'body_label' => t('Cut by Cut'),
      'min_word_count' => '0',
      'help' => t('<p>
	Place credits or lyrics here.</p>
'),
    ),
  );
  return $items;
}

/**
 * Implementation of hook_views_api().
 */
function album_feature_views_api() {
  return array(
    'api' => '2',
  );
}
