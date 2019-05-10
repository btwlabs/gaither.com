<?php

/**
 * Implementation of hook_content_default_fields().
 */
function sponsors_content_default_fields() {
  module_load_include('inc', 'sponsors', 'sponsors.defaults');
  $args = func_get_args();
  return call_user_func_array('_sponsors_content_default_fields', $args);
}

/**
 * Implementation of hook_node_info().
 */
function sponsors_node_info() {
  module_load_include('inc', 'sponsors', 'sponsors.features.node');
  $args = func_get_args();
  return call_user_func_array('_sponsors_node_info', $args);
}

/**
 * Implementation of hook_user_default_permissions().
 */
function sponsors_user_default_permissions() {
  module_load_include('inc', 'sponsors', 'sponsors.defaults');
  $args = func_get_args();
  return call_user_func_array('_sponsors_user_default_permissions', $args);
}

/**
 * Implementation of hook_views_default_views().
 */
function sponsors_views_default_views() {
  module_load_include('inc', 'sponsors', 'sponsors.features.views');
  $args = func_get_args();
  return call_user_func_array('_sponsors_views_default_views', $args);
}
