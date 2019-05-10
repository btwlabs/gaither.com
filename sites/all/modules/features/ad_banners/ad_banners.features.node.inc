<?php

/**
 * Helper to implementation of hook_node_info().
 */
function _ad_banners_node_info() {
  $items = array(
    'banner' => array(
      'name' => t('Banner'),
      'module' => 'features',
      'description' => t('A <em>banner</em> is ideal for posting image links to interior/exterior pages.'),
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
