<?php

ini_set('error_reporting', 'E_ALL ^ E_NOTICE');

$conf = array(
  'cache_inc' => './sites/gaither.com/modules/memcache/memcache.inc',
  // 'cache_inc' => './sites/gaither.com/modules/memcache/memcache.db.inc',
  'memcache_servers' => array(
    '10.1.10.27:11222' => 'default',
    '10.1.10.27:11223' => 'page',
    '10.1.10.27:11224' => 'filter',
    '10.1.10.27:11225' => 'form',
  ),
  'memcache_bins' => array(
    'cache'        => 'default',
    'cache_menu'   => 'default',
    'cache_page'   => 'page',
    'cache_filter' => 'filter',
    'cache_form'   => 'form',
  ),
);

  $conf['maintenance_theme'] = 'maintenance';

  $conf['reverse_proxy'] = TRUE;
  $conf['reverse_proxy_addresses'] = array(
    '10.1.10.11', // Reverse proxy host A
    '10.1.10.12', // Reverse proxy host
    '10.1.10.15',
    '10.1.10.52',
    '10.1.10.55',
  );


