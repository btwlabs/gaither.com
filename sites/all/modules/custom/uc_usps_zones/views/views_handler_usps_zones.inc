<?php
// $Id:$
/**
 * Filter by USPS Shipping Zone
 * 
 */
class views_handler_usps_zones extends views_handler_filter_in_operator {
  function get_value_options() {
    if (!isset($this->value_options)) {
      $this->value_title = t('USPS Shipping Zone');
      $sql = "SELECT zone as zone FROM {uc_usps_zones} order by zone asc LIMIT 9";
      $result = db_query($sql);
      $row = null;
      while($row = db_fetch_object($result)) {
        if(!empty($row->zone)) {
        $options[$row->zone] = t('Zone: '). (string)$row->zone;
        }else
        {
          $options[$row->zone] = t('Zone: Not Set');
        }
      }

      $this->value_options = $options;
    }
  }
  
}