<?php

/**
 * Helper to implementation of hook_node_info().
 */
function _videos_node_info() {
  $items = array(
    'microsite_videos' => array(
      'name' => t('Videos'),
      'module' => 'features',
      'description' => t('The <em>Videos</em> content type is used for adding videos to the site.'),
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
