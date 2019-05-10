<?php /**
/**
* Sets the body tag class and id attributes.
*
* From the Theme Developer's Guide, http://drupal.org/node/32077
*
* @return
*Êstring The rendered id attributes.
*/
function artistsocial_body_attributes($is_front = false) {  
  if ($is_front) {
    $body_id = $body_class = 'homepage';
  }
  else {
    // Remove base path and any query string.
    global $base_path;
    list(,$path) = explode($base_path, $_SERVER['REQUEST_URI'], 2);
    list($path,) = explode('?', $path, 2);
    $path = rtrim($path, '/');
    // Construct the id name from the path, replacing slashes with dashes.
    $body_id = str_replace('/', '-', $path);
  }
  
  $body_id = 'page-'. $body_id;
  
  return 'id="'. $body_id .'"';
}

function artistsocial_search_block_form($form) {
  $output = '';
 
  // the search_block_form element is the search's text field, it also happens to be the form id, so can be confusing
  $form['search_block_form']['#title'] = t('search');
  $form['submit']['#value'] = t('Go');

  $output .= drupal_render($form);
  return $output;
}