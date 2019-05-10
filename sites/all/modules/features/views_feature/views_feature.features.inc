<?php

/**
 * Implementation of hook_user_default_permissions().
 */
function views_feature_user_default_permissions() {
  module_load_include('inc', 'views_feature', 'views_feature.defaults');
  $args = func_get_args();
  return call_user_func_array('_views_feature_user_default_permissions', $args);
}
