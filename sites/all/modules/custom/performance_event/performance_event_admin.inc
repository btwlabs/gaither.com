<?php

/**
 * function performance_event_meet_greet_settings_form() provides the meet and
 * greet settings form
 */
function performance_event_meet_greet_settings_form() {
  $form = array();

  $form['performance_event_meet_greet_types'] = array(
    '#description' => t('Please enter the types of meet and greet events available. These will show up as the options when creating a meet and greet event. Please enter one item per line.'),
    '#rows' => '5',
    '#weight' => '-5',
    '#type' => 'textarea',
    '#title' => t('Types of Meet and Greets'),
    '#default_value' => variable_get('performance_event_meet_greet_types', ''),
  );
  $form['performance_event_meet_greet_max_events'] = array(
    '#description' => t('Please enter maximum number of requests allowed per membership year'),
    '#rows' => '5',
    '#weight' => '-5',
    '#type' => 'textfield',
    '#title' => t('Number of Meet and Greet requests allowed'),
    '#default_value' => variable_get('performance_event_meet_greet_max_events', 3),
  );
  $form['emails'] = array(
    '#type' => 'fieldset',
    '#title' => t('Email notification settings'),
    '#description' => t('For Performance Event and Meeet and Greet titles, use the tokens [performance_event_title] and [meet_greet_title]'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['emails']['performance_event_winning_email'] = array(
    '#weight' => '-4',
    '#description' => t('Please enter the default email sent to meet & greet winners. '),
    '#type' => 'textarea',
    '#rows' => '5',
    '#title' => t('Default Meet & Greet Winner Email'),
    '#default_value' => variable_get('performance_event_winning_email', ''),
  );
  $form['emails']['performance_event_losing_email'] = array(
    '#weight' => '-3',
    '#description' => t('Please enter the default email sent to meet & greet losers.'),
    '#rows' => '5',
    '#type' => 'textarea',
    '#title' => t('Default Meet & Greet Losing Email'),
    '#default_value' => variable_get('performance_event_losing_email', ''),
  );
  $form['emails']['performance_event_followup_email'] = array(
    '#weight' => '-2',
    '#description' => t('Please enter the default followup email text.'),
    '#rows' => '5',
    '#type' => 'textarea',
    '#title' => t('Default Meet & Greet Follow up Email'),
    '#default_value' => variable_get('performance_event_followup_email', ''),
  );
  $form['emails']['performance_event_followup_delay'] = array(
    '#weight' => -1,
    '#description' => t('Please enter the number of days to wait before sending the follow-up email. Leave blank for no follow-up.'),
    '#type' => 'textfield',
    '#title' => t('Follow-up email delay'),
    '#default_value' => variable_get('performance_event_followup_delay', ''),
  );
  $form['emails']['performance_event_deleted_email'] = array(
    '#weight' => '0',
    '#description' => t('Please enter the default email that is sent when a event has been deleted.'),
    '#rows' => '5',
    '#type' => 'textarea',
    '#title' => t('Default Deleted Event email'),
    '#default_value' => variable_get('performance_event_deleted_email', ''),
  );
  $form['performance_event_membership_product_id'] = array(
    '#weight' => '0',
    '#description' => t('Please enter the id of the membership product.  You can find this by browsing to the membership product, and clicking the edit tab.  Example:  http://www.example.com/node/42/edit, enter 42.  This will be used to display links to purchase a membership.'),
    '#type' => 'textfield',
    '#title' => t('Membership node ID'),
    '#default_value' => variable_get('performance_event_membership_product_id', ''),
  );
  $form['performance_event_meet_greet_access_denied'] = array(
    '#weight' => '0',
    '#description' => t('Please enter the id for the access denied page.  Example:  http://www.example.com/node/42/edit, enter 42.'),
    '#type' => 'textfield',
    '#title' => t('Access Denied node ID'),
    '#default_value' => variable_get('performance_event_meet_greet_access_denied', ''),
  );
  $form['performance_event_post_event_merchandise_path'] = array(
    '#weight' => '0',
    '#description' => t('The path to post-event merchandise. example: http://www.example.com/post-event-products'),
    '#type' => 'textfield',
    '#title' => t('Default path for after event merchandise'),
    '#default_value' => variable_get('performance_event_post_event_merchandise_path', ''),
  );
  $form['emails']['performance_event_notification_addresses'] = array(
    '#weight' => '0',
    '#description' => t('Please enter one email address per line.'),
    '#type' => 'textarea',
    '#title' => t('Notify these email addresses with a list of Meet & Greet winners'),
    '#default_value' => variable_get('performance_event_notification_addresses', ''),
  );
  $token_list = token_get_list('all');
  $tokens = array();
  foreach ($token_list as $category => $options) {
    foreach ($options as $key => $value) {
      if (strpos($key, 'meet') !== FALSE) {
        $tokens[] = '['.$key .'] - '. $value;
      }
    }
  }
  $form['emails']['available_tokens'] = array(
    '#type' => 'markup',
    '#value' => '<h3>Available Replacements</h3>'. theme('item_list', $tokens),
  );
  $roles = user_roles(TRUE);
  $form['performance_events_presale_roles'] = array(
    '#title' => t('Available presale roles'),
    '#type' => 'checkboxes',
    '#options' => $roles,
    '#default_value' => variable_get('performance_events_presale_roles', array()),
  );

  return system_settings_form($form);
}

  /**
   * function performance_event_meet_greet_request_form()
   * The meet and greet request form
   */
function performance_event_meet_greet_request_form($form_state, $node) {
  GLOBAL $user;
  $form = array();

  $output = t('You are requesting a meet and greet for %title', array('%title' => $node->title));

  $form['html'] = array(
    '#type' => 'markup',
    '#value' => $output,
  );
  $form['nid'] = array(
    '#type' => 'value',
    '#value' => $node->nid,
  );

  $node = array(
    'uid' => $user->uid,
    'type' => 'uprofile',
  );
  if(!content_profile_profile_exists((object)$node, $user->uid)) {

    $form['first_name'] = array(
      // '#weight' => 0,
      '#description' => t('Please enter first name.'),
      '#required' => TRUE,
      '#type' => 'textfield',
      '#title' => t('First Name'),
      '#default_value' => '',
    );

    $form['last_name'] = array(
      // '#weight' => 1,
      '#description' => t('Please enter last name.'),
      '#required' => TRUE,
      '#type' => 'textfield',
      '#title' => t('Last Name'),
      '#default_value' => '',
    );

  }

  $form['needs'] = array(
    '#type' => 'textarea',
    '#title' => t('Special needs'),
    '#rows' => 5,
    '#description' => t('Please enter any special needs for this request'),
  );
  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Submit request'),
  );
  return $form;
}

function performance_event_meet_greet_request_form_submit($form, $form_state) {
  // should call meet greet save request in other module -
  GLOBAL $user;
  $request = new stdClass();
  $request->uid = $user->uid;
  $request->nid = $form_state['values']['nid'];
  $request->needs = $form_state['values']['needs'];
  $request->status = performance_event_meet_greet_default_status($user);
  $request->request_time = time();
  drupal_write_record('meet_greet_request', $request);
  drupal_set_message(t('Your request has been submitted and an email has been sent to you'));
  performance_event_send_meet_greet_email('request_submitted', $request->nid, $request->id);

  if($form_state['values']['first_name']) {

    $name['first_name'] = $form_state['values']['first_name'];
    $name['last_name'] = $form_state['values']['last_name'];
    performance_event_create_profile($user, $name);

  }

  drupal_goto('<front>');
}

/**
 * function performance_event_meet_greet_user_page()
 * returns a themed table of all the events a user has applied for
 */
function performance_event_meet_greet_user_page($user = NULL) {
  if (arg(3) == 'withdrawl' && is_numeric(arg(4))) {
    $request_id = db_result(db_query("SELECT id FROM {meet_greet_request} WHERE uid=%d AND nid=%d", $user->uid, arg(4)));
    performance_event_request_modify ('withdraw', $request_id);
    //db_query('DELETE FROM {meet_greet_request} WHERE uid = %d AND nid = %d', $user->uid, arg(4));
  }

  if ($user) {
    $requests = db_query("
      SELECT m.field_merchandise_link_url, r.nid, r.status, r.request_time FROM {meet_greet_request} r
      INNER JOIN {content_type_meet_greet} m ON m.nid = r.nid
      WHERE uid = %d ORDER BY r.request_time", $user->uid);
    $rows = array();
    while ($request = db_fetch_object($requests)){
      //drupal_set_message(dpr($request, true));
      $event = node_load($request->nid);
      $status = theme('performance_event_meet_greet_request_status', $request->status);
      if (time() <= strtotime($event->field_meet_greet_date[0]['value'])) {
        $operation = l('Withdrawal request', 'user/'. $user->uid .'/meet_greets/withdrawl/'. $event->nid);
      }
      else {
        //if ($request->status > 1)
        if ($request->field_merchandise_link_url) {
          $operation = l('Buy Photos & Merch', 'node/' . $request->field_merchandise_link_url);
        }
        else {
          $operation = 'none';
        }
      }
      //$operation = (time() > strtotime($event->field_meet_greet_date[0]['value'])) ? t('none') : l('Withdrawal request', 'user/'. $user->uid .'/meet_greets/withdrawl/'. $event->nid);
      $rows[] = array(
        l($event->title, 'node/'.$event->nid),
        format_date(strtotime($event->field_meet_greet_date[0]['value']), 'large'),
        $status,
        $operation,
      );
    }
    if (count($rows) > 0) {
      $header = array('event', 'date', 'status', 'operation');
      return theme('table', $header, $rows);
    }
  }
  return t('You are not registered for any events');
}

/**
 * function performance_event_meet_greet_manage_requests()
 * Provides the administrative interface for managing the meet and greet requests
 * for each meet and greet
 * @param object $node The meet and greet node
 * @return The rendered html for the meet and greet
 */
function performance_event_meet_greet_manage_requests($node = NULL) {
  //If an invalid node is passed, throw an error
  if ($node->type != 'meet_greet') {
    drupal_set_message(t('Error: invalid meet and greet'));
    drupal_goto();
  }
  drupal_set_title(t('Manage %event requests', array('%event' => $node->title)));
  return drupal_get_form('performance_event_meet_greet_manage_requests_form', $node);
}

/**
 *raj needs submit funtio -= validatre needs finishing
 * function performance_event_meet_greet_manage_requests_form()
 * displays the meet and greet request management form
 */
function performance_event_meet_greet_manage_requests_form($form_state, $node = NULL) {
  $form = array();
  $form['requests'] = array('#tree' => TRUE);
  $requests = db_query("SELECT m.*, u.name FROM {meet_greet_request} m JOIN {users} u on m.uid=u.uid WHERE nid = %d", $node->nid);
  while($request = db_fetch_object($requests)){
    //dpr($request);
    $date = db_result(db_query("SELECT max(field_meet_greet_date_value) FROM {meet_greet_request} m JOIN {content_type_meet_greet} c ON m.nid = c.nid WHERE m.uid = %d AND m.status > 1", $request->uid));
    $won = db_result(db_query("SELECT COUNT(*) FROM {meet_greet_request} WHERE uid = %d AND status > 1", $request->uid));
    $profile_node = performance_event_user_profile_node($request->uid);
    $flag = $profile_node->field_user_flag[0]['value'] == 'Flagged for denial' ? 'Flagged for denial' : '';
    $form['requests'][$request->id] = array(
      '#type' => 'checkbox',
      'uid' => array('#type' => 'markup', '#value' => l($request->name, 'user/'.$request->uid)),
      'status' => array('#type' => 'markup', '#value' => theme('performance_event_meet_greet_request_status', $request->status)),
      'flag' => array('#type' => 'markup', '#value' => $flag),
      'name' => array('#type' => 'markup', '#value' => $profile_node->field_first_name_profile[0]['value'] .' '. $profile_node->field_last_name_profile[0]['value']),
      'won' => array('#type' => 'markup', '#value' => $won),
      'date' => array('#type' => 'markup', '#value' => $date ? date('n/d/Y', strtotime($date)) : t('none')),
      'needs' => array('#type' => 'markup', '#value' => check_markup($request->needs)),
      '#tree' => TRUE,
    );
  }
  if (count($form['requests']) > 0) {
    $form['actions'] = array(
      '#title' => t('actions'),
      '#type' => 'select',
      '#options' => array('approve' => t('approve'), 'deny' => t('deny'), 'delete' => t('delete')),
    );
    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Submit'),
    );
  }

  return $form;
}

function performance_event_meet_greet_manage_requests_form_validate($form, &$form_state) {
  $request_ids = $form_state['clicked_button']['#post']['requests'];
  if (!$request_ids) {
    form_set_error('requests', 'Please use checkboxes to select the requests to ' . $form_state['values']['actions']);
  }
}

function performance_event_meet_greet_manage_requests_form_submit($form, &$form_state) {
  $meet_greet_nid = arg(2);
  $request_ids = $form_state['clicked_button']['#post']['requests'];
  foreach($request_ids as $request_id => $dummy) {
      switch ($form_state['values']['actions']) {
        case 'approve':
          //performance_event_set_request_status($request_id, 2);
          performance_event_request_modify('approve', $request_id);
          performance_event_send_meet_greet_email('winning', $meet_greet_nid, $request_id );
          drupal_set_message("Winning email sent to member");
          // performance_event_send_meet_greet_notification_email($meet_greet_nid);
          // drupal_set_message("Winner email notification list sent ");
        break;
        case 'deny':
          //performance_event_set_request_status($request_id, 0);
          performance_event_request_modify('deny', $request_id);
          performance_event_send_meet_greet_email('losing', arg(2), $request_id );
          drupal_set_message("Losing email sent to member");
        break;
        case 'delete':
          performance_event_request_modify('delete', $request_id);
          drupal_set_message("Um... do we send an email?  same as when deleting a meet and greet event?");
        break;
      }
  }

  performance_event_send_meet_greet_notification_email($meet_greet_nid);
  //  drupal_set_message("Winner email notification list sent ");

  return false;
}

/**
 * function performance_event_meet_greet_listing_page()
 * returns a list of meet and greet events.
 */
function meet_greets_listing_page() {
  //get a list of all the future meet/greet events
    $meet_greets = '';
    $meet_greet_count = 1;
    $results= db_query("SELECT nid from {content_type_meet_greet} WHERE field_meet_greet_status_value = 'Open' AND field_meet_greet_date_value > NOW()");
    while ($meet_greet = db_fetch_array($results)) {
      $meet_greet = node_load($meet_greet['nid']);
      //drupal_set_message(dpr($meet_greet->field_meet_greet_status[0]['value'], true));
      $meet_greet_status = theme('performance_event_meet_greet_status', $meet_greet->field_meet_greet_status[0]['value']);
      $meet_greets .= theme('performance_event_meet_greet_listing', $meet_greet, $meet_greet_status, $meet_greet_count % 2, $event_count % 2);
      $meet_greet_count++;
    }
    return $meet_greets ;
}





/**
 * function performance_event_meet_greet_listing_page()
 * returns a list of meet and greet events.
 */
function performance_event_listing_page() {
  //get a list of all the future meet/greet events
  $event_results = db_query("SELECT nid FROM {content_type_performance_event} WHERE field_event_date_value > NOW()");
  $events = '';
  $count = 1;
  //iterate over the list of events, for each event we need to load and theme
  //the meet and greets.
  while ($event = db_fetch_object($event_results)) {
    $event = node_load($event->nid);
    //drupal_set_message('<pre>'.var_export($event, true).'</pre>');
    $meet_greets = '';
    $meet_greet_count = 1;
    foreach ($event->field_meet_greet_reference as $key => $meet_greet) {
      $meet_greet = node_load($meet_greet['nid']);
      //drupal_set_message(dpr($meet_greet->field_meet_greet_status[0]['value'], true));
      $meet_greet_status = theme('performance_event_meet_greet_status', $meet_greet->field_meet_greet_status[0]['value']);
      $meet_greets .= theme('performance_event_meet_greet_listing', $meet_greet, $meet_greet_status, $meet_greet_count % 2, $event_count % 2);
      $meet_greet_count++;
    }
    $status = theme('performance_event_status', 'active');
    $events .= theme('performance_event_listing', $event, $status, $meet_greets, $event_count % 2);
    $event_count++;
  }
  return theme('performance_event_page', $events);
}


function performance_event_manage_meet_greets($node = NULL) {
  //If an invalid node is passed, throw an error
  //if ($node->type != 'meet_greet') {
  //  drupal_set_message($node->type);
  //  drupal_goto();
  //}
  if ($node->type == 'performance_event') {
    drupal_set_title(t('Manage %event Meet and Greets', array('%event' => $node->title)));
    return drupal_get_form('performance_event_manage_meet_greets_form', $node);
    //return performance_event_manage_meet_greets_form($form_state, $node);
  }
}

function performance_event_manage_meet_greets_form($form_state, $node = NULL) {
  $form = array();
  $form['nid'] = array (
    '#type' =>'hidden',
    '#default_value' => $node->nid,
  );
  $form['meet_greets'] = array('#tree' => TRUE);

  foreach ($node->field_meet_greet_reference as $key => $meet_greet_nid) {
    performance_event_sync_meet_greet_status($meet_greet_nid['nid']);
    $meet_greet = node_load($meet_greet_nid['nid']);
    $date = $meet_greet->field_meet_greet_date[0]['value'];
    $won =      db_result(db_query("SELECT COUNT(*) FROM {meet_greet_request} WHERE nid = %d AND status > 1", $meet_greet->nid));
    $requests = db_result(db_query("SELECT count(*) FROM {meet_greet_request} WHERE nid =%d",                 $meet_greet->nid));
    $form['meet_greets'][$meet_greet->nid] = array(
      '#type' => 'checkbox',
      'nid' => array('#type' => 'markup', '#value' => l($meet_greet->title, 'node/'.$meet_greet->nid.'/edit')),
      'date' => array('#type' => 'markup', '#value' => $date ? format_date(strtotime($date), 'large') : t('none')),
      'available' => array('#type' => 'markup', '#value' => $meet_greet->field_available[0]['value']),
      'requests' => array('#type' => 'markup', '#value' => $requests),
      'won' => array('#type' => 'markup', '#value' => $won . ' ' .  l('See Requests', 'meet_greet/review/'.$meet_greet->nid)),
      'status' => array('#type' => 'markup', '#value' => $meet_greet->field_meet_greet_status[0]['value'] . ' ' . $status_operation),
      //'operation' => array('#type' => 'markup', '#value' => $operation),
      '#tree' => TRUE,
    );
  }

  $form['submit_new'] = array(
    '#type' => 'submit',
    '#value' => t('New Meet and Greet'),
  );
  $form['actions'] = array(
    //'#title' => t('actions'),
    '#type' => 'select',
    '#options' => array('close' => t('Close selected'),  'Open' => t('Open selected'), 'cancel' => t('Cancel selected')),
  );
  $form['submit_action'] = array(
    '#type' => 'submit',
    '#value' => t('Submit'),
  );

  return $form;
}

function performance_event_manage_meet_greets_form_submit($form, &$form_state) {
  if ($form_state['clicked_button']['#value'] == 'New Meet and Greet') {
    drupal_goto('node/add/meet-greet/' . $form_state['values']['nid']);
  }
  $meet_greet_nids = $form_state['clicked_button']['#post']['meet_greets'];
  if (!$meet_greet_nids) {
    drupal_set_message(t('Please select at least one Meet and Great'));
    return;
  }
  foreach($meet_greet_nids as $meet_greet_nid => $dummy) {
      switch ($form_state['values']['actions']) {
        case 'close':
          $node = node_load($meet_greet_nid);
          $node->field_meet_greet_status[0]['value'] = 'Closed';
          node_save($node);
          drupal_set_message($node->title . ' status changed to Closed');
        break;
        case 'open':
          $node = node_load($meet_greet_nid);
          $node->field_meet_greet_status[0]['value'] = 'Open';
          node_save($node);
          drupal_set_message($node->title . ' status changed to Open');
        break;
        case 'cancel':
          $node = node_load($meet_greet_nid);
          $node->field_meet_greet_status[0]['value'] = 'Canceled';
          node_save($node);
          drupal_set_message($node->title . ' status changed to Canceled');
        break;
      }
  }

return false;
}

function performance_event_set_request_status($request_id, $status) {
  //maybe do some updating of totals somewhere ??
  db_query("UPDATE {meet_greet_request} SET status=%d WHERE id=%d", $status, $request_id);
}

function performance_event_request_modify($op, $request_id) {
  $result = db_query("
    SELECT r.uid, r.status, m.nid AS meet_greet_nid, m.field_meet_greet_date_value
    FROM {meet_greet_request} r
    INNER JOIN {content_type_meet_greet} m ON m.nid = r.nid
    WHERE r.id=%d", $request_id);

  $request = db_fetch_object($result);
  $time = strtotime($request->field_meet_greet_date_value);
  switch ($op) {
    case 'approve':
      db_query("UPDATE {meet_greet_request} SET status=2 WHERE id=%d", $request_id);
      if ($request->status != 2){ // it not already approved
        db_query("UPDATE {meet_greet} SET approvals = approvals + 1
                 WHERE uid=%d AND %d BETWEEN start_date and end_date",
                 $request->uid, $time);
      }
    break;
    case 'deny':
      db_query("UPDATE {meet_greet_request} SET status=0 WHERE id=%d", $request_id);
      if ($request->status = 2){ // it was approved
        db_query("UPDATE {meet_greet} SET approvals = approvals - 1
                 WHERE approvals > 0 AND uid=%d AND %d BETWEEN start_date and end_date",
                 $request->uid, $time);
      }
    break;
    case 'delete':
    case 'withdraw':
      db_query("DELETE FROM {meet_greet_request} WHERE id=%d", $request_id);
      if ($request->status = 2){ // it was approved
        db_query("UPDATE {meet_greet} SET approvals = approvals - 1
                 WHERE approvals > 0 AND uid=%d AND %d BETWEEN start_date and end_date",
                 $request->uid, $time);
      }
    break;
  }
  performance_event_sync_meet_greet_status($request->meet_greet_nid);

}

function performance_event_sync_meet_greet_status($meet_greet_nid) {
  $meet_greet = node_load($meet_greet_nid);
  $result = db_query("
    SELECT count(*) as num_approved
    FROM {meet_greet_request} r
    WHERE r.status = 2 AND r.nid = %d
    GROUP BY r.nid", $meet_greet_nid);
  $stats = db_fetch_object($result);

  $num_approved = $stats ? $stats->num_approved : 0;

  if ($num_approved >= $meet_greet->field_available[0]['value']) {
    if ($meet_greet->field_meet_greet_status[0]['value'] != 'Full') {
      $meet_greet->field_meet_greet_status[0]['value'] = "Full";
      node_save($meet_greet);
      drupal_set_message(t($meet_greet_nid . "Meet and Greet status updated to 'Full'"));
    }
  }
  else {
    if ($meet_greet->field_meet_greet_status[0]['value'] != 'Closed' && $meet_greet->field_meet_greet_status[0]['value'] != 'Open') {
      $meet_greet->field_meet_greet_status[0]['value'] = "Open";
      node_save($meet_greet);
      drupal_set_message(t($meet_greet_nid . "Meet and Greet status updated to 'Open'"));
    }
  }
}

function performance_event_send_meet_greet_email($which_email, $meet_greet_nid, $request_id) {
  $meet_greet_node = node_load($meet_greet_nid);
  $performance_event_nid = db_result(db_query("SELECT nid FROM {content_field_meet_greet_reference} WHERE field_meet_greet_reference_nid=%d", $meet_greet_nid));
  $performance_event_node = node_load($performance_event_nid);
  $uid = db_result(db_query("SELECT uid FROM {meet_greet_request} WHERE id=%d", $request_id));
  $user_profile_node = performance_event_user_profile_node($uid);
  switch ($which_email) {
    case 'winning':
      $original = $meet_greet_node->field_winning_subject[0]['value'];
      $tokenized = performance_event_tokenize($original, $meet_greet_node, $performance_event_node, $user_profile_node);
      $params['subject'] = $tokenized;
      $original  = $meet_greet_node->field_winning_body[0]['value'];
      $tokenized = performance_event_tokenize($original, $meet_greet_node, $performance_event_node, $user_profile_node);
      $params['body'] = $tokenized;
    break;
    case 'losing':
      $original = $meet_greet_node->field_losing_subject[0]['value'];
      $tokenized = performance_event_tokenize($original, $meet_greet_node, $performance_event_node, $user_profile_node);
      $params['subject'] = $tokenized;
      $original  = $meet_greet_node->field_losing_body[0]['value'];
      $tokenized = performance_event_tokenize($original, $meet_greet_node, $performance_event_node, $user_profile_node);
      $params['body'] = $tokenized;
    break;
    case 'request_submitted':
      $original = 'You requested to attend [meet_greet_title]';
      $tokenized = performance_event_tokenize($original, $meet_greet_node, $performance_event_node, $user_profile_node);
      $params['subject'] = $tokenized;
      $original = 'Dear member,
        Thank you for submitting a Meet and Greet request for the [performance_event_title] show.  Winners are chosen at random and you will be notified either way via email prior to the show.  Please do not email checking on your the status of your request as these emails will not be answered.
        Thank you for being a member!';
      $tokenized = performance_event_tokenize($original, $meet_greet_node, $performance_event_node, $user_profile_node);
      $params['body'] = $tokenized;

    break;
  }
  $params['from'] = variable_get('site_name', 'Music City Network');
  $to = db_result(db_query("SELECT mail FROM {users} WHERE uid=%d", $uid));
  drupal_mail('performance_event', 'aaa', $to, language_default(), $params, variable_get('site_mail', ''));
}

/* function tokenizes
*/

function performance_event_tokenize($original, $meet_greet_node, $performance_event_node, $user_profile_node) {
  $newtext = $original;
  $newtext = token_replace($newtext, 'node', $performance_event_node);
  $newtext = token_replace($newtext, 'node', $meet_greet_node);
  $newtext = token_replace($newtext, 'node', $user_profile_node);
  $newtext = token_replace($newtext, 'global', NULL);
  return $newtext;
}

function performance_event_send_meet_greet_notification_email($meet_greet_nid) {
  $success = FALSE;

  $meet_greet_node = node_load($meet_greet_nid);

  $result = db_query("SELECT u.mail,
   field_first_name_profile_value,
   field_last_name_profile_value
   FROM users AS u
   LEFT JOIN meet_greet_request AS mgr ON u.uid = mgr.uid
   LEFT JOIN node AS n ON u.uid = n.uid
   LEFT JOIN content_type_uprofile AS ctu ON n.nid = ctu.nid
   WHERE n.type = 'uprofile'
   AND mgr.status = '2'
   AND mgr.nid = '%d';", $meet_greet_nid);

  $params['subject'] = "Meet and Greet Winners: ". $meet_greet_node->title;
  $params['body'] = "Meet and Greet Winners: ". $meet_greet_node->title ."\n\n";
  while ($winner = db_fetch_array($result)) {
    // dpm("winner: ");
    // dvm($winner);
    $params['body'] .= '<p>'.$winner['mail'] ." \t\t". $winner['field_first_name_profile_value'] ." \t\t". $winner['field_last_name_profile_value']."</p>\n";

  }

  $notification_addresses = explode("\n",variable_get('performance_event_notification_addresses', ''));
  // dvm($notification_addresses);
  $params['from'] = variable_get('site_name', 'Music City Network');
  foreach($notification_addresses as $key => $value) {
    $to = $value;
     // dvm($to);
    $success = drupal_mail('performance_event', 'aaa', $to, language_default(), $params, variable_get('site_mail', ''));
    // dpm("success");
    // dvm($success);
    //  $success = TRUE;
  }
  if($success) {
    drupal_set_message("Winner email notification list sent ");
  }
  return $success;
}


function performance_event_create_profile($u, $i) {
  $p = new stdClass();
  $p->title = '';
  $p->type = 'uprofile';
  $p->uid = $u->uid;
  $p->created = $u->created;
  $p->changed = time();
  $p->comment = 0;
  $p->promote = 0;
  $p->moderate = 0;
  $p->sticky = 0;
  $p->body = '';
  $p->teaser = '';
  $p->log = "Creating profile in meet and greet request";
  $p->name = $u->name;
  $p->format = 0;
  $p->field_name[0]['value'] = $u->name;
  $p->field_first_name_profile[0]['value'] = $i['first_name'];
  $p->field_last_name_profile[0]['value'] = $i['last_name'];
  // $p->field_state_profile[0]['value'] = ''; //$i[17];
  // $p->field_country_profile[0]['value'] = ''; //$i[18];
  // $p->field_postal_code_profile[0]['value'] = ''; //$i[19];
  // $p->field_gender_profile[0]['value'] = '';
  // $p->field_birthday_profile[0]['value'] = $i[8];

  // print_r($p);

  node_save($p);
}
