<?php

/**
 * Implementation of hook_user_default_permissions().
 */
function image_features_user_default_permissions() {
  module_load_include('inc', 'image_features', 'image_features.defaults');
  $args = func_get_args();
  return call_user_func_array('_image_features_user_default_permissions', $args);
}
