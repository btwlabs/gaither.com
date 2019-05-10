<?php

/**
 * Helper to implementation of hook_content_default_fields().
 */
function _faq_accordion_content_default_fields() {
  $fields = array();

  // Exported field: field_faq_store_sort
  $fields[] = array(
    'field_name' => 'field_faq_store_sort',
    'type_name' => 'faq',
    'display_settings' => array(
      'weight' => '31',
      'parent' => '',
      'label' => array(
        'format' => 'above',
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
      '2' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'number_integer',
    'required' => '0',
    'multiple' => '0',
    'module' => 'number',
    'active' => '1',
    'prefix' => '',
    'suffix' => '',
    'min' => '0',
    'max' => '50',
    'allowed_values' => '0
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
42
43
44
45
46
47
48
49
50',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => '',
        ),
      ),
      'default_value_php' => NULL,
      'label' => 'faq_store_sort',
      'weight' => '31',
      'description' => '',
      'type' => 'optionwidgets_select',
      'module' => 'optionwidgets',
    ),
  );

  // Translatables
  array(
    t('faq_store_sort'),
  );

  return $fields;
}

/**
 * Helper to implementation of hook_user_default_permissions().
 */
function _faq_accordion_user_default_permissions() {
  $permissions = array();

  // Exported permission: access all views
  $permissions[] = array(
    'name' => 'access all views',
    'roles' => array(
      '0' => 'developer',
    ),
  );

  // Exported permission: administer content types
  $permissions[] = array(
    'name' => 'administer content types',
    'roles' => array(
      '0' => 'developer',
    ),
  );

  // Exported permission: administer nodes
  $permissions[] = array(
    'name' => 'administer nodes',
    'roles' => array(
      '0' => 'developer',
    ),
  );

  // Exported permission: administer views
  $permissions[] = array(
    'name' => 'administer views',
    'roles' => array(
      '0' => 'developer',
    ),
  );

  // Exported permission: create faq content
  $permissions[] = array(
    'name' => 'create faq content',
    'roles' => array(),
  );

  // Exported permission: delete any faq content
  $permissions[] = array(
    'name' => 'delete any faq content',
    'roles' => array(),
  );

  // Exported permission: delete own faq content
  $permissions[] = array(
    'name' => 'delete own faq content',
    'roles' => array(),
  );

  // Exported permission: edit any faq content
  $permissions[] = array(
    'name' => 'edit any faq content',
    'roles' => array(),
  );

  // Exported permission: edit own faq content
  $permissions[] = array(
    'name' => 'edit own faq content',
    'roles' => array(),
  );

  return $permissions;
}
