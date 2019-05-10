<?php

/**
 * Implementation of hook_content_default_fields().
 */
function faq_accordion_content_default_fields() {
  module_load_include('inc', 'faq_accordion', 'faq_accordion.defaults');
  $args = func_get_args();
  return call_user_func_array('_faq_accordion_content_default_fields', $args);
}

/**
 * Implementation of hook_node_info().
 */
function faq_accordion_node_info() {
  module_load_include('inc', 'faq_accordion', 'faq_accordion.features.node');
  $args = func_get_args();
  return call_user_func_array('_faq_accordion_node_info', $args);
}

/**
 * Implementation of hook_user_default_permissions().
 */
function faq_accordion_user_default_permissions() {
  module_load_include('inc', 'faq_accordion', 'faq_accordion.defaults');
  $args = func_get_args();
  return call_user_func_array('_faq_accordion_user_default_permissions', $args);
}

/**
 * Implementation of hook_views_default_views().
 */
function faq_accordion_views_default_views() {
  module_load_include('inc', 'faq_accordion', 'faq_accordion.features.views');
  $args = func_get_args();
  return call_user_func_array('_faq_accordion_views_default_views', $args);
}
