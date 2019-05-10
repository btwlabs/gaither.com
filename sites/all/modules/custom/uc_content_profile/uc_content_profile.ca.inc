<?php

/**
 * Implementation of hook_ca_condition().
 */
function uc_content_profile_ca_condition() {
  $conditions['uc_content_profile_create_profile'] = array(
    '#title' => t("Create a profile for this order's user?"),
    '#category' => t('Order: User'),
    '#callback' => 'uc_content_profile_create_profile',
    '#arguments' => array(
      'order' => array(
        '#entity' => 'uc_order',
        '#title' => t('Order'),
      ),
    ),
  );

  return $conditions;
}

/**
 * Implementation of hook_ca_action().
 */
function uc_content_profile_ca_action() {
  $order_arg = array(
    '#entity' => 'uc_order',
    '#title' => t('Order'),
  );

  $actions['uc_content_profile_action_create_profile'] = array(
    '#title' => t("Create a profile for this order's user"),
    '#category' => t('Order'),
    '#callback' => 'uc_content_profile_action_create_profile',
    '#arguments' => array(
      'order' => $order_arg,
    ),
  );
  return $actions;
}

// Create profile(s) for a new user.
function uc_content_profile_action_create_profile($order) {
  _uc_content_profile_submit_form($order->data['profile_info'], user_load($order->uid));
  
  unset($order->data['profile_info']);
}

// Does this order have profile information?
function uc_content_profile_create_profile($order) {
  return isset($order->data['profile_info']);
}

/**
 * Implementation of hook_ca_predicate().
 */
function uc_content_profile_ca_predicate() {
  $predicates['uc_content_profile_create_profile'] = array(
    '#title' => t('Create a user profile'),
    '#description' => t('Create a user profile.'),
    '#class' => 'order',
    '#status' => 1,
    '#trigger' => 'uc_checkout_complete',
    '#conditions' => array(
      '#operator' => 'AND',
      '#conditions' => array(
        array(
          '#name' => 'uc_content_profile_create_profile',
          '#title' => t('Check whether this order has profile information.'),
          '#argument_map' => array(
            'order' => 'order',
          ),
        ),
      ),
    ),
    '#actions' => array(
      array(
        '#name' => 'uc_content_profile_action_create_profile',
        '#title' => t('Create a profile for the customer'),
        '#argument_map' => array(
          'order' => 'order',
        ),
      ),
    ),
  );

  return $predicates;
}

