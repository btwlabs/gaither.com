<?php
// $Id$

/**
 * @file
 * Theme functions for the Emma module.
 *
 * @author Bob Marchman
 * @date 07/07/2010
 */





/**
 * Display a table of Emma mailing lists.
 */
function theme_emma_mailing_lists() {      
  $header = array(
    array('data' => t('List Name'), 'field' => 'm.list_name'),
    array('data' => t('Group ID'), 'field' => 'm.group_id'),
    array('data' => t('Remote Signup URL'), 'field' => 'm.signup_url'),
    array('data' => t('Signup Post'), 'field' => 'm.signup_post'),
    array('data' => t('Account ID'), 'field' => 'm.account_id'),
    array('data' => t('Username'), 'field' => 'm.username'),
    array('data' => t('Password'), 'field' => 'm.password'),
    array('data' => t('Created'), 'field' => 'm.created', 'sort' => 'asc'),
    array('data' => t('Last Updated'), 'field' => 'm.updated'),
    array('data' => t('On Registration Form?')),
    array('data' => t('Operations')),
  );
  
  $sql    = 'SELECT m.* FROM {emma} m';
  $result = pager_query($sql . tablesort_sql($header), 20, 0, NULL);
  
  $rows = array();
  
  while ($row = db_fetch_object($result)) {
    $rows[] = array(
      array('data' => '<strong>'. $row->list_name .'</strong>'),
      array('data' => $row->group_id),
      array('data' => $row->signup_url),
      array('data' => $row->signup_post),
      array('data' => $row->account_id),
      array('data' => $row->username),
      array('data' => $row->password),
      array('data' => '<em>'. format_date($row->created) .'</em>'),
      array('data' => $row->updated ? '<em>'. format_date($row->updated) .'</em>' : 'Never'),
      array('data' => $row->registration ? 'Yes' : 'No'), 
      array('data' => l(t('Edit'), 'admin/emma/lists/edit/'. $row->group_id) .' | '. l(t('Delete'), 'admin/emma/lists/delete/'. $row->group_id)),
    );
  }
   
  $output .= theme('table', $header, $rows);
  $output .= theme('pager', NULL, 20, 0);
  
  module_load_include('inc', 'emma', 'includes/emma.admin');  
  $output .= drupal_get_form('emma_edit_list_form');
  
  return $output;  
}





/**
 * Display a tabular listing of Emma mailing list subscribers, optionally filtered by mailing list.
 *
 * @param $group_id
 *   The group id of a mailing list.
 */
function theme_emma_show_subscribers($group_id = NULL) {
  module_load_include('inc', 'emma', 'includes/emma.admin');
      
  $output = drupal_get_form('emma_filter_by_group_form');
  
  $header = array(
    array('data' => t('List'), 'field' => 'm.list_name', 'sort' => 'asc'),
    array('data' => t('Group ID'), 'field' => 'm.group_id'),
    array('data' => t('User'), 'field' => 'u.name'),
    array('data' => t('Created'), 'field' => 'm.created'),
  );
  
  $count_sql = 'SELECT COUNT(*) FROM {emma_users} m WHERE m.group_id = %d';
  
  // test to see if this mailing list has any subscribers first before going any further
  $has_subscribers = db_result(db_query($count_sql, $group_id));
  
  // only display an error message if a mailing list has been selected to filter on that has no subscribers
  if (!$has_subscribers && !empty($group_id)) {
    $message = t('There are currently no subscribers for the selected mailing list.');
    drupal_set_message($message, 'error');
    return $output;
  }
  
  module_load_include('inc', 'emma', 'includes/emma.api');
    
  $sql    = emma_get_subscribers($group_id, TRUE);
  $result = pager_query($sql . tablesort_sql($header), 20, 0, $count_sql, $group_id);
  
  $rows = array();
  
  while ($row = db_fetch_object($result)) {
    $list = emma_list_load($row->group_id);
    
    $rows[] = array(
      array('data' => '<strong>'. $list->list_name .'</strong>'),
      array('data' => $row->group_id),
      array('data' => l($row->name, '/user/'. $row->uid, array('attributes' => array('target' => 'blank')))),
      array('data' => '<em>'. format_date($row->created) .'</em>'),
    );
  }
  
  $output .= theme('table', $header, $rows);
  $output .= theme('pager', NULL, 20, 0);
  
  return $output;
}