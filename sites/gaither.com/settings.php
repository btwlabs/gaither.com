<?php
  /*$databases['default']['default'] = array(
    'driver' => urldecode($_SERVER['db_type']),
    'database' => urldecode($_SERVER['db_name']),
    'username' => urldecode($_SERVER['db_user']),
    'password' => urldecode($_SERVER['db_passwd']),
    'host' => urldecode($_SERVER['db_host']),
  );*/
  //$db_url = "$_SERVER[db_type]://$_SERVER[db_user]:$_SERVER[db_passwd]@$_SERVER[db_host]/$_SERVER[db_name]";
  $db_url = 'mysql://gaitherusr:A7sF9GjQ@gaither-cluster.cluster-cfbmilkwsngt.us-east-2.rds.amazonaws.com/gaither';

  $profile = "gaither_profile";
  /**
  * PHP settings:
  *
  * To see what PHP settings are possible, including whether they can
  * be set at runtime (ie., when ini_set() occurs), read the PHP
  * documentation at http://www.php.net/manual/en/ini.php#ini.list
  * and take a look at the .htaccess file to see which non-runtime
  * settings are used there. Settings defined here should not be
  * duplicated there so as to avoid conflict issues.
  */
  @ini_set('arg_separator.output',     '&amp;');
  @ini_set('magic_quotes_runtime',     0);
  @ini_set('magic_quotes_sybase',      0);
  @ini_set('session.cache_expire',     200000);
  @ini_set('session.cache_limiter',    'none');
  @ini_set('session.cookie_lifetime',  0);
  @ini_set('session.gc_maxlifetime',   200000);
  @ini_set('session.save_handler',     'user');
  @ini_set('session.use_only_cookies', 1);
  @ini_set('session.use_trans_sid',    0);
  @ini_set('url_rewriter.tags',        '');

  /**
  * Set the umask so that new directories created by Drupal have the correct permissions
  */
  umask(0002);


  global $conf;
  $conf['file_directory_path'] = 'sites/gaither.com/files';
  $conf['file_directory_temp'] = 'sites/gaither.com/files/tmp';
  $conf['file_downloads'] = 1;
  $conf['cache'] = 1;
  $conf['clean_url'] = 1;

  
# Extra configuration from modules:

  /**
  * This was added from Drupal 5.2 onwards.
  */
  /**
  * We try to set the correct cookie domain. If you are experiencing problems
  * try commenting out the code below or specifying the cookie domain by hand.
  */
  if (isset($_SERVER['HTTP_HOST'])) {
    $domain = '.'. preg_replace('`^www.`', '', $_SERVER['HTTP_HOST']);
    // Per RFC 2109, cookie domains must contain at least one dot other than the
    // first. For hosts such as 'localhost', we don't set a cookie domain.
    if (count(explode('.', $domain)) > 2) {
      @ini_set('session.cookie_domain', $domain);
    }
  }

  # Additional host wide configuration settings. Useful for safely specifying configuration settings.
  if (file_exists('/var/aegir/config/includes/global.inc')) {
    include_once('/var/aegir/config/includes/global.inc');
  }

 # Additional site configuration settings.
  if (file_exists('/var/aegir/platforms/acadia2-0916/sites/gaither.com/local.settings.php')) {
    include_once('/var/aegir/platforms/acadia2-0916/sites/gaither.com/local.settings.php');
  }


if(!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'){
  $_SERVER['HTTPS']='on';
}else{
  // `$_SERVER['HTTPS']='';
} 
