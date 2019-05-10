<?php

/**
 * Helper to implementation of hook_node_info().
 */
function _custom_product_store_feature_link_out__node_info() {
  $items = array(
    'custom_product' => array(
      'name' => t('Custom Product'),
      'module' => 'features',
      'description' => t('The <em>Custom Product</em> is a non-traditional store item with BUY links to external sites.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'has_body' => '1',
      'body_label' => t('Description'),
      'min_word_count' => '0',
      'help' => '',
    ),
  );
  return $items;
}
