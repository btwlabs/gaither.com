<?php

/**
 * Helper to implementation of hook_node_info().
 */
function _news_node_info() {
  $items = array(
    'news' => array(
      'name' => t('News'),
      'module' => 'features',
      'description' => t('A <em>news</em> entry is ideal for posting professional content such as press releases, announcements, etc.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'has_body' => '1',
      'body_label' => t('Body'),
      'min_word_count' => '0',
      'help' => t('<br />
'),
    ),
  );
  return $items;
}
