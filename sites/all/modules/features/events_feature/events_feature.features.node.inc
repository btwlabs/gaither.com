<?php

/**
 * Helper to implementation of hook_node_info().
 */
function _events_feature_node_info() {
  $items = array(
    'event' => array(
      'name' => t('Event'),
      'module' => 'features',
      'description' => t('An <em>event</em> is ideal for posting a tour date or event listing.'),
      'has_title' => '1',
      'title_label' => t('Location'),
      'has_body' => '1',
      'body_label' => t('Description'),
      'min_word_count' => '0',
      'help' => t('<br />
'),
    ),
  );
  return $items;
}
