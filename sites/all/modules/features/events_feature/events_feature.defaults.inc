<?php

/**
 * Helper to implementation of hook_content_default_fields().
 */
function _events_feature_content_default_fields() {
  $fields = array();

  // Exported field: field_event_date
  $fields[] = array(
    'field_name' => 'field_event_date',
    'type_name' => 'event',
    'display_settings' => array(
      'weight' => '-4',
      'parent' => '',
      'label' => array(
        'format' => 'hidden',
      ),
      'teaser' => array(
        'format' => 'medium',
        'exclude' => 0,
      ),
      'full' => array(
        'format' => 'short',
        'exclude' => 0,
      ),
      '4' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'date',
    'required' => '1',
    'multiple' => '0',
    'module' => 'date',
    'active' => '1',
    'granularity' => array(
      'year' => 'year',
      'month' => 'month',
      'day' => 'day',
    ),
    'timezone_db' => '',
    'tz_handling' => 'none',
    'todate' => 'optional',
    'repeat' => 0,
    'repeat_collapsed' => '',
    'default_format' => 'medium',
    'widget' => array(
      'default_value' => 'blank',
      'default_value_code' => '',
      'default_value2' => 'same',
      'default_value_code2' => '',
      'input_format' => 'Y-m-d H:i:s',
      'input_format_custom' => '',
      'increment' => '1',
      'text_parts' => array(
        '0' => 'hour',
        '1' => 'minute',
      ),
      'year_range' => '-3:+3',
      'label_position' => 'above',
      'label' => 'Date',
      'weight' => '-4',
      'description' => '',
      'type' => 'date_popup',
      'module' => 'date',
    ),
  );

  // Exported field: field_event_link
  $fields[] = array(
    'field_name' => 'field_event_link',
    'type_name' => 'event',
    'display_settings' => array(
      'weight' => '-2',
      'parent' => '',
      'label' => array(
        'format' => 'hidden',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      '4' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'link',
    'required' => '0',
    'multiple' => '0',
    'module' => 'link',
    'active' => '1',
    'attributes' => array(
      'target' => '_blank',
      'rel' => '',
      'class' => '',
    ),
    'display' => array(
      'url_cutoff' => '80',
    ),
    'url' => 0,
    'title' => 'value',
    'title_value' => 'Buy Tickets Online',
    'enable_tokens' => 0,
    'validate_url' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'title' => '',
          'url' => '',
        ),
      ),
      'default_value_php' => NULL,
      'label' => 'Buy Tix Link',
      'weight' => '-2',
      'description' => '',
      'type' => 'link',
      'module' => 'link',
    ),
  );

  // Exported field: field_event_time
  $fields[] = array(
    'field_name' => 'field_event_time',
    'type_name' => 'event',
    'display_settings' => array(
      'weight' => '-3',
      'parent' => '',
      'label' => array(
        'format' => 'hidden',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      '4' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '0',
    'multiple' => '0',
    'module' => 'text',
    'active' => '1',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'widget' => array(
      'rows' => 5,
      'size' => '30',
      'default_value' => array(
        '0' => array(
          'value' => '',
          '_error_element' => 'default_value_widget][field_event_time][0][value',
        ),
      ),
      'default_value_php' => NULL,
      'label' => 'Time',
      'weight' => '-3',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Translatables
  array(
    t('Buy Tix Link'),
    t('Date'),
    t('Time'),
  );

  return $fields;
}

/**
 * Helper to implementation of hook_user_default_permissions().
 */
function _events_feature_user_default_permissions() {
  $permissions = array();

  // Exported permission: create event content
  $permissions[] = array(
    'name' => 'create event content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: delete any event content
  $permissions[] = array(
    'name' => 'delete any event content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: delete own event content
  $permissions[] = array(
    'name' => 'delete own event content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: edit any event content
  $permissions[] = array(
    'name' => 'edit any event content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  // Exported permission: edit own event content
  $permissions[] = array(
    'name' => 'edit own event content',
    'roles' => array(
      '0' => 'account manager',
      '1' => 'administrator',
      '2' => 'client',
      '3' => 'developer',
    ),
  );

  return $permissions;
}
