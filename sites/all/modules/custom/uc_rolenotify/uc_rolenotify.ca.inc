<?php
// $Id$

/**
 * @file
 * Conditional actions integration for role expiration notifications.
 */


/**
 * Implementation of hook_ca_action().
 */
function uc_rolenotify_ca_action() {
  $actions = array();

  // Grant or renew role expirations and setup notifications.
  $actions['uc_rolenotify_order_renew'] = array(
    '#title' => t('Grant/renew roles and setup notifications'),
    '#category' => t('renewal'),
    '#callback' => 'uc_rolenotify_action_order_renew',
    '#arguments' => array(
      'order' => array(
        '#entity' => 'uc_order',
        '#title' => t('Order'),
      ),
    ),
  );

  return $actions;
}

/**
 * Grant or renew role expirations and setup notifications.
 *
 * This function is a copy of the core function that has been modified to setup
 * the role expiration notifications offered by this module.
 *
 * @param $order
 *   A fully loaded Ubercart order object.
 *
 * @see uc_roles_action_order_renew_form()
 */
function uc_rolenotify_action_order_renew($order, $settings) {
  // Load the order's user and exit if not available.
  if (!($account = user_load($order->uid))) {
    return;
  }

  // Loop through all the products on the order.
  foreach ($order->products as $product) {
    // Look for any role promotion features assigned to the product.
    $roles = db_query("SELECT * FROM {uc_roles_products} WHERE nid = %d", $product->nid);

    while ($role = db_fetch_object($roles)) {
      // Product model matches, or was 'any'.
      if (!empty($role->model) && $role->model != $product->model) {
        continue;
      }

      $existing_role = db_fetch_object(db_query("SELECT * FROM {uc_roles_expirations} WHERE uid = %d AND rid = %d", $account->uid, $role->rid));

      // Determine the expiration timestamp for the role.
      $expiration = _uc_roles_product_get_expiration($role, $product->qty, !is_null($existing_role->expiration) ? $existing_role->expiration : NULL);

      // Leave an order comment.
      if (!is_null($existing_role->expiration)) {
        $op = 'renew';
        $comment = t('Customer user role %role renewed.', array('%role' => _uc_roles_get_name($role->rid)));

        // Renew the user's role.
        uc_roles_renew($account, $role->rid, $expiration, !$settings['message']);
      }
      else {
        $op = 'grant';
        $comment = t('Customer granted user role %role.', array('%role' => _uc_roles_get_name($role->rid)));

        // Grant the role to the user.
        uc_roles_grant($account, $role->rid, $expiration, TRUE, !$settings['message']);
      }

      // Get the new expiration (if applicable)
      $new_expiration = db_fetch_object(db_query("SELECT * FROM {uc_roles_expirations} WHERE uid = %d AND rid = %d", $account->uid, $role->rid));

      // Process any role expiration notifications associated with this feature.
      uc_rolenotify_process_notifications($op, $role, $new_expiration);

      uc_order_comment_save($order->order_id, $user->uid, $comment);

      // Trigger role email.
      ca_pull_trigger('uc_roles_notify_'. $op, $order, $new_expiration);
    }
  }
}

/**
 * @see uc_roles_action_order_renew()
 */
function uc_rolenotify_action_order_renew_form($form_state, $settings = array()) {
  $form = array();

  $form['message'] = array(
    '#type' => 'checkbox',
    '#title' => t('Display messages to alert users of any new or updated roles.'),
    '#default_value' => isset($settings['message']) ? $settings['message'] : FALSE,
  );

  return $form;
}
