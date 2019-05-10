<?php

/**
 * Implementation of hook_imagecache_default_presets().
 */
function galleriffic_gallery_imagecache_default_presets() {
  $items = array(
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
 * Implementation of hook_node_info().
 */
function galleriffic_gallery_node_info() {
  $items = array(
    'photo' => array(
      'name' => t('Photo'),
      'module' => 'features',
      'description' => t('Add <em>Photos</em> and sort into a gallery.  To add galleries, go to <em>Content >Taxonomy</em> and Add a new <em>Term</em> to the Gallery list.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'has_body' => '0',
      'body_label' => '',
      'min_word_count' => '0',
      'help' => t('<br />
'),
    ),
  );
  return $items;
}

/**
 * Implementation of hook_views_api().
 */
function galleriffic_gallery_views_api() {
  return array(
    'api' => '2',
  );
}
