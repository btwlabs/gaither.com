<?php

/**
 * Implementation of hook_node_info().
 */
function social2_groups_add_on_node_info() {
  $items = array(
    'group' => array(
      'name' => t('Group'),
      'module' => 'features',
      'description' => t('Add a new group to the user community.'),
      'has_title' => '1',
      'title_label' => t('Group Name'),
      'has_body' => '0',
      'body_label' => '',
      'min_word_count' => '0',
      'help' => '',
    ),
  );
  return $items;
}

/**
 * Implementation of hook_views_api().
 */
function social2_groups_add_on_views_api() {
  return array(
    'api' => '2',
  );
}
