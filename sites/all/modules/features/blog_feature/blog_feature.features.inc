<?php

/**
 * Implementation of hook_node_info().
 */
function blog_feature_node_info() {
  $items = array(
    'blog' => array(
      'name' => t('Blog'),
      'module' => 'features',
      'description' => t('A <em>blog</em> is ideal for creating and displaying content that informs or engages website visitors. Press releases, site announcements, and informal entries may all be created with a <em>blog</em> entry.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'has_body' => '1',
      'body_label' => t('Body'),
      'min_word_count' => '0',
      'help' => '',
    ),
  );
  return $items;
}

/**
 * Implementation of hook_views_api().
 */
function blog_feature_views_api() {
  return array(
    'api' => '2',
  );
}
