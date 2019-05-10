<?php

/**
 * Implementation of hook_user_default_permissions().
 */
function web_form_user_default_permissions() {
  module_load_include('inc', 'web_form', 'web_form.defaults');
  $args = func_get_args();
  return call_user_func_array('_web_form_user_default_permissions', $args);
}
