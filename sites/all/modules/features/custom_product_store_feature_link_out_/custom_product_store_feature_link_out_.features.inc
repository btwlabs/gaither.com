<?php

/**
 * Implementation of hook_content_default_fields().
 */
function custom_product_store_feature_link_out__content_default_fields() {
  module_load_include('inc', 'custom_product_store_feature_link_out_', 'custom_product_store_feature_link_out_.defaults');
  $args = func_get_args();
  return call_user_func_array('_custom_product_store_feature_link_out__content_default_fields', $args);
}

/**
 * Implementation of hook_imagecache_default_presets().
 */
function custom_product_store_feature_link_out__imagecache_default_presets() {
  module_load_include('inc', 'custom_product_store_feature_link_out_', 'custom_product_store_feature_link_out_.defaults');
  $args = func_get_args();
  return call_user_func_array('_custom_product_store_feature_link_out__imagecache_default_presets', $args);
}

/**
 * Implementation of hook_node_info().
 */
function custom_product_store_feature_link_out__node_info() {
  module_load_include('inc', 'custom_product_store_feature_link_out_', 'custom_product_store_feature_link_out_.features.node');
  $args = func_get_args();
  return call_user_func_array('_custom_product_store_feature_link_out__node_info', $args);
}

/**
 * Implementation of hook_user_default_permissions().
 */
function custom_product_store_feature_link_out__user_default_permissions() {
  module_load_include('inc', 'custom_product_store_feature_link_out_', 'custom_product_store_feature_link_out_.defaults');
  $args = func_get_args();
  return call_user_func_array('_custom_product_store_feature_link_out__user_default_permissions', $args);
}

/**
 * Implementation of hook_views_default_views().
 */
function custom_product_store_feature_link_out__views_default_views() {
  module_load_include('inc', 'custom_product_store_feature_link_out_', 'custom_product_store_feature_link_out_.features.views');
  $args = func_get_args();
  return call_user_func_array('_custom_product_store_feature_link_out__views_default_views', $args);
}
