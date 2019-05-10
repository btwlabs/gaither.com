<?php

/**
 * Implementation of hook_node_info().
 */
function slideshow_node_info() {
  $items = array(
    'slideshow' => array(
      'name' => t('Slideshow Banner'),
      'module' => 'features',
      'description' => t('For adding banners/links to the slideshow display.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'has_body' => '0',
      'body_label' => '',
      'min_word_count' => '0',
      'help' => '',
    ),
  );
  return $items;
}

/**
 * Implementation of hook_views_api().
 */
function slideshow_views_api() {
  return array(
    'api' => '2',
  );
}
