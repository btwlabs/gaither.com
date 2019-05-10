<?php

/**
 * Helper to implementation of hook_node_info().
 */
function _sponsors_node_info() {
  $items = array(
    'sponsor' => array(
      'name' => t('Sponsor'),
      'module' => 'features',
      'description' => t('Add images with links for <em>sponsors</em>.'),
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
