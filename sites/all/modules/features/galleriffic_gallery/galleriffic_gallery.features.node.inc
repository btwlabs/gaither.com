<?php

/**
 * Helper to implementation of hook_node_info().
 */
function _galleriffic_gallery_node_info() {
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
