<?php

$options['context-path'] = array (
  'site' => 'sites/gaither.com/drushrc.php',
);
$options['db_type'] = 'mysqli';
$options['db_host'] = 'vs27';
$options['db_passwd'] = '635LaYffMN';
$options['db_name'] = 'site_1658_0';
$options['db_user'] = 'site_1658_0';
$options['installed'] = true;
$options['aliases'] = '*gaithermusic.com,gaither-com.mcnutility.com,www.gaither.com';
$options['site_url'] = 'gaither.com';
$options['site_id'] = '1658';
$options['client_email'] = 'joe@musiccitynetworks.com';
$options['packages'] = array (
  'platforms' => 
  array (
    'drupal' => 
    array (
      'short_name' => 'drupal',
      'version' => '6.22',
      'description' => 'This platform is running Drupal 6.22',
    ),
  ),
  'profiles' => 
  array (
    'gaither_profile' => 
    array (
      'name' => 'gaither_profile',
      'filename' => '/data/aegir/platforms/acadia2-0916/profiles/gaither_profile/gaither_profile.profile',
      'project' => '',
      'info' => 
      array (
        'name' => 'Gaither Profile',
        'core' => '6.x',
        'theme' => 'artistsocial',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'filter',
          2 => 'node',
          3 => 'system',
          4 => 'user',
          5 => 'comment',
          6 => 'dblog',
          7 => 'help',
          8 => 'menu',
          9 => 'path',
          10 => 'better_formats',
          11 => 'image_resize_filter',
          12 => 'imce',
          13 => 'wysiwyg',
          14 => 'imce_wysiwyg',
          15 => 'imce_search',
          16 => 'imce_file_path',
          17 => 'colorbox',
          18 => 'content',
          19 => 'fieldgroup',
          20 => 'filefield',
          21 => 'imagefield',
          22 => 'link',
          23 => 'number',
          24 => 'optionwidgets',
          25 => 'text',
          26 => 'comment_notify',
          27 => 'mollom',
          28 => 'fb_social',
          29 => 'fb_social_like',
          30 => 'tweetbutton',
          31 => 'google_plusone',
          32 => 'oauth',
          33 => 'twitter',
          34 => 'twitter_post',
          35 => 'quicktabs',
          36 => 'context',
          37 => 'acl',
          38 => 'forum_access',
          39 => 'forum',
          40 => 'advanced_forum',
          41 => 'advanced_forum_more_styles',
          42 => 'author_pane',
          43 => 'transliteration',
          44 => 'googleanalytics',
          45 => 'path_redirect',
          46 => 'jplayer',
          47 => 'advanced_profile',
          48 => 'fivestar',
          49 => 'privatemsg',
          50 => 'terms_of_use',
          51 => 'votingapi',
          52 => 'wordfilter',
          53 => 'user_relationships_api',
          54 => 'user_relationship_defaults',
          55 => 'user_relationships_ui',
          56 => 'user_relationship_views',
          57 => 'ajax',
          58 => 'formblock',
          59 => 'mcn_social_form_alter',
          60 => 'views_field_view',
          61 => 'views_filters_autosubmit',
          62 => 'content_complete',
          63 => 'content_profile',
          64 => 'auto_nodetitle',
          65 => 'user_badges',
          66 => 'userpoints',
          67 => 'userpoints_nc',
          68 => 'userpoints_login',
          69 => 'userpoints_user_picture',
          70 => 'imagecache_profiles',
          71 => 'rules',
          72 => 'rules_admin',
          73 => 'media_mtv',
          74 => 'media_vimeo',
          75 => 'media_youtube',
          76 => 'location_cck',
          77 => 'jquery_ui',
          78 => 'views_customfield',
          79 => 'performance_event',
        ),
        'variables' => 
        array (
          'error_level' => '0',
          'page_compression' => '0',
          'block_cache' => '1',
          'update_check_frequency' => '7',
          'update_notification_threshold' => 'security',
          'update_notify_emails' => 
          array (
            0 => 'sysadmin@musiccitynetworks.com',
          ),
          'admin_theme' => 'rubik',
          'configurable_timezones' => '0',
          'site_mail' => 'sysadmin+artistsocial@musiccitynetworks.com',
        ),
        'languages' => 
        array (
          0 => 'en',
        ),
        'version' => NULL,
      ),
      'version' => '6.22',
      'status' => 1,
    ),
  ),
  'modules' => 
  array (
    'acl' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/acl/acl.module',
      'name' => 'acl',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ACL',
        'description' => 'Access control list API. Has no features on its own.',
        'package' => 'Access control',
        'core' => '6.x',
        'version' => '6.x-1.4',
        'project' => 'acl',
        'datestamp' => '1311687714',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'acl',
      'version' => '6.x-1.4',
    ),
    'actions_permissions' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/views_bulk_operations/actions_permissions.module',
      'name' => 'actions_permissions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Actions permissions',
        'description' => 'Integrates actions with the permission system.',
        'package' => 'Administration',
        'core' => '6.x',
        'version' => '6.x-1.11-beta1',
        'project' => 'views_bulk_operations',
        'datestamp' => '1310060820',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'views_bulk_operations',
      'version' => '6.x-1.11-beta1',
    ),
    'activity' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'activity',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'activity_comments' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'activity_comments',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ad' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'ad',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'addtoany' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'addtoany',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'admin' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/admin/admin.module',
      'name' => 'admin',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6202',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'Admin',
        'description' => 'UI helpers for Drupal admins and managers.',
        'package' => 'Administration',
        'core' => '6.x',
        'version' => '6.x-2.0',
        'project' => 'admin',
        'datestamp' => '1282226188',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'admin',
      'version' => '6.x-2.0',
    ),
    'adminrole' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'adminrole',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'admin_menu' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/admin_menu/admin_menu.module',
      'name' => 'admin_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '1',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Administration menu',
        'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
        'package' => 'Administration',
        'core' => '6.x',
        'version' => '6.x-1.8',
        'project' => 'admin_menu',
        'datestamp' => '1308238014',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'admin_menu',
      'version' => '6.x-1.8',
    ),
    'advanced_forum' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/advanced_forum/advanced_forum.module',
      'name' => 'advanced_forum',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Advanced Forum',
        'description' => 'Enables the look and feel of other popular forum software.',
        'dependencies' => 
        array (
          0 => 'forum',
          1 => 'author_pane',
        ),
        'core' => '6.x',
        'version' => '6.x-1.2',
        'project' => 'advanced_forum',
        'datestamp' => '1301364666',
        'php' => '4.3.5',
      ),
      'project' => 'advanced_forum',
      'version' => '6.x-1.2',
    ),
    'advanced_forum_more_styles' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/advanced_forum_more_styles/advanced_forum_more_styles.module',
      'name' => 'advanced_forum_more_styles',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Advanced Forum More Styles',
        'description' => 'Additional Advanced Forum Styles',
        'version' => '6.x-1.0-alpha2',
        'dependencies' => 
        array (
          0 => 'advanced_forum',
        ),
        'core' => '6.x',
        'project' => 'advanced_forum_more_styles',
        'datestamp' => '1248935418',
        'php' => '4.3.5',
      ),
      'project' => 'advanced_forum_more_styles',
      'version' => '6.x-1.0-alpha2',
    ),
    'advanced_help' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/advanced_help/advanced_help.module',
      'name' => 'advanced_help',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Advanced help',
        'description' => 'Allow advanced help and documentation.',
        'core' => '6.x',
        'version' => '6.x-1.2',
        'project' => 'advanced_help',
        'datestamp' => '1238954409',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'advanced_help',
      'version' => '6.x-1.2',
    ),
    'advanced_profile' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/advanced_profile/advanced_profile.module',
      'name' => 'advanced_profile',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Advanced Profile Kit',
        'description' => 'Provides building blocks for creating enhanced user profile pages.',
        'core' => '6.x',
        'version' => '6.x-1.0',
        'project' => 'advanced_profile',
        'datestamp' => '1286220058',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'advanced_profile',
      'version' => '6.x-1.0',
    ),
    'advuser' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/advuser/advuser.module',
      'name' => 'advuser',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Advanced User Management',
        'description' => 'Advanced user management module. Filter users and mass actions based on their filters.',
        'core' => '6.x',
        'version' => '6.x-2.3',
        'project' => 'advuser',
        'datestamp' => '1245780626',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'advuser',
      'version' => '6.x-2.3',
    ),
    'ad_actions' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'ad_actions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ad_banners' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/features/ad_banners/ad_banners.module',
      'name' => 'ad_banners',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'features',
          2 => 'filefield',
          3 => 'imagefield',
          4 => 'link',
          5 => 'taxonomy',
          6 => 'views',
        ),
        'description' => 'Provides banner functionality using images/links',
        'features' => 
        array (
          'content' => 
          array (
            0 => 'banner-field_link',
            1 => 'banner-field_required_image',
          ),
          'node' => 
          array (
            0 => 'banner',
          ),
          'user_permission' => 
          array (
            0 => 'create banner content',
            1 => 'delete any banner content',
            2 => 'delete own banner content',
            3 => 'edit any banner content',
            4 => 'edit own banner content',
          ),
          'views' => 
          array (
            0 => 'banners',
          ),
          'views_api' => 
          array (
            0 => 'api:2',
          ),
        ),
        'name' => 'Ad Banners',
        'package' => 'Features',
        'project' => 'ad_banners',
        'project status url' => 'http://features.devmcn.com/fserver',
        'version' => '6.x-2.0',
        'php' => '4.3.5',
      ),
      'project' => 'ad_banners',
      'version' => '6.x-2.0',
    ),
    'ad_cache_file' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'ad_cache_file',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ad_channel' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'ad_channel',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ad_embed' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'ad_embed',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ad_external' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'ad_external',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ad_geoip' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'ad_geoip',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ad_html' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'ad_html',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ad_image' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'ad_image',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ad_owners' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'ad_owners',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ad_remote' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'ad_remote',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ad_report' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'ad_report',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ad_text' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'ad_text',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ad_weight_probability' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'ad_weight_probability',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'aggregation' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'aggregation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'aggregator' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/aggregator/aggregator.module',
      'name' => 'aggregator',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aggregator',
        'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'ajax' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/ajax/ajax.module',
      'name' => 'ajax',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6102',
      'weight' => '81',
      'info' => 
      array (
        'name' => 'Ajax',
        'description' => 'Automatically validates and submits any Drupal form using AJAX.',
        'package' => 'Ajax',
        'core' => '6.x',
        'version' => '6.x-1.14',
        'project' => 'ajax',
        'datestamp' => '1240859105',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'ajax',
      'version' => '6.x-1.14',
    ),
    'ajax_captcha' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/ajax/plugins/captcha/ajax_captcha.module',
      'name' => 'ajax_captcha',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Ajax plugin - captcha',
        'description' => 'Enables AJAX functionality with CAPTCHA-enabled forms. This module requires that the patches in \'ajax/plugins/captcha/patches\' be applied to the CAPTCHA module.',
        'package' => 'Ajax',
        'dependencies' => 
        array (
          0 => 'ajax',
          1 => 'captcha',
        ),
        'core' => '6.x',
        'version' => '6.x-1.14',
        'project' => 'ajax',
        'datestamp' => '1240859105',
        'php' => '4.3.5',
      ),
      'project' => 'ajax',
      'version' => '6.x-1.14',
    ),
    'ajax_comment' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/ajax/plugins/comment/ajax_comment.module',
      'name' => 'ajax_comment',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Ajax plugin - comment',
        'description' => 'Enables ajax functionality for comment forms',
        'package' => 'Ajax',
        'dependencies' => 
        array (
          0 => 'ajax',
          1 => 'comment',
        ),
        'core' => '6.x',
        'version' => '6.x-1.14',
        'project' => 'ajax',
        'datestamp' => '1240859105',
        'php' => '4.3.5',
      ),
      'project' => 'ajax',
      'version' => '6.x-1.14',
    ),
    'ajax_disable_redirect' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/ajax/plugins/disable_redirect/ajax_disable_redirect.module',
      'name' => 'ajax_disable_redirect',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Ajax plugin - disable_redirect',
        'description' => 'Allows form redirections to be disabled for Ajax forms',
        'package' => 'Ajax',
        'dependencies' => 
        array (
          0 => 'ajax',
          1 => 'ajax_ui',
        ),
        'core' => '6.x',
        'version' => '6.x-1.14',
        'project' => 'ajax',
        'datestamp' => '1240859105',
        'php' => '4.3.5',
      ),
      'project' => 'ajax',
      'version' => '6.x-1.14',
    ),
    'ajax_fckeditor' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/ajax/plugins/fckeditor/ajax_fckeditor.module',
      'name' => 'ajax_fckeditor',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Ajax plugin - fckeditor',
        'description' => 'Enables AJAX functionality for FCKEditor',
        'package' => 'Ajax',
        'dependencies' => 
        array (
          0 => 'ajax',
          1 => 'fckeditor',
        ),
        'core' => '6.x',
        'version' => '6.x-1.14',
        'project' => 'ajax',
        'datestamp' => '1240859105',
        'php' => '4.3.5',
      ),
      'project' => 'ajax',
      'version' => '6.x-1.14',
    ),
    'ajax_logintoboggan' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/ajax/plugins/loggintoboggan/ajax_logintoboggan.module',
      'name' => 'ajax_logintoboggan',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Ajax plugin - logintoboggan',
        'description' => 'Enables AJAX functionality for LoginToboggan forms',
        'package' => 'Ajax',
        'dependencies' => 
        array (
          0 => 'ajax',
          1 => 'logintoboggan',
        ),
        'core' => '6.x',
        'version' => '6.x-1.14',
        'project' => 'ajax',
        'datestamp' => '1240859105',
        'php' => '4.3.5',
      ),
      'project' => 'ajax',
      'version' => '6.x-1.14',
    ),
    'ajax_quicktabs' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/ajax/plugins/quicktabs/ajax_quicktabs.module',
      'name' => 'ajax_quicktabs',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Ajax plugin - quicktabs',
        'description' => 'Enhances AJAX functionality for quicktabs.',
        'package' => 'Ajax',
        'dependencies' => 
        array (
          0 => 'ajax',
          1 => 'quicktabs',
        ),
        'core' => '6.x',
        'version' => '6.x-1.14',
        'project' => 'ajax',
        'datestamp' => '1240859105',
        'php' => '4.3.5',
      ),
      'project' => 'ajax',
      'version' => '6.x-1.14',
    ),
    'ajax_thickbox' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/ajax/plugins/thickbox/ajax_thickbox.module',
      'name' => 'ajax_thickbox',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Ajax plugin - thickbox',
        'description' => 'Enhances AJAX functionality for thickbox.',
        'package' => 'Ajax',
        'dependencies' => 
        array (
          0 => 'ajax',
        ),
        'core' => '6.x',
        'version' => '6.x-1.14',
        'project' => 'ajax',
        'datestamp' => '1240859105',
        'php' => '4.3.5',
      ),
      'project' => 'ajax',
      'version' => '6.x-1.14',
    ),
    'ajax_tinymce' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/ajax/plugins/tinymce/ajax_tinymce.module',
      'name' => 'ajax_tinymce',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Ajax plugin - tinymce',
        'description' => 'Enables AJAX functionality for tinymce',
        'package' => 'Ajax',
        'dependencies' => 
        array (
          0 => 'ajax',
          1 => 'tinymce',
        ),
        'core' => '6.x',
        'version' => '6.x-1.14',
        'project' => 'ajax',
        'datestamp' => '1240859105',
        'php' => '4.3.5',
      ),
      'project' => 'ajax',
      'version' => '6.x-1.14',
    ),
    'ajax_ui' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/ajax/ajax_ui/ajax_ui.module',
      'name' => 'ajax_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6101',
      'weight' => '80',
      'info' => 
      array (
        'name' => 'Ajax ui',
        'description' => 'User Interface for Ajax forms. You will not be able to manage Ajax forms without this module.',
        'package' => 'Ajax',
        'dependencies' => 
        array (
          0 => 'ajax',
        ),
        'core' => '6.x',
        'version' => '6.x-1.14',
        'project' => 'ajax',
        'datestamp' => '1240859105',
        'php' => '4.3.5',
      ),
      'project' => 'ajax',
      'version' => '6.x-1.14',
    ),
    'ajax_webform' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/ajax/plugins/webform/ajax_webform.module',
      'name' => 'ajax_webform',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Ajax plugin - webform',
        'description' => 'Enables AJAX functionality for webforms',
        'package' => 'Ajax',
        'dependencies' => 
        array (
          0 => 'ajax',
          1 => 'webform',
        ),
        'core' => '6.x',
        'version' => '6.x-1.14',
        'project' => 'ajax',
        'datestamp' => '1240859105',
        'php' => '4.3.5',
      ),
      'project' => 'ajax',
      'version' => '6.x-1.14',
    ),
    'ajax_wysiwyg' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/ajax/plugins/wysiwyg/ajax_wysiwyg.module',
      'name' => 'ajax_wysiwyg',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Ajax plugin - wysiwyg',
        'description' => 'Enables AJAX functionality for wysiwyg API',
        'package' => 'Ajax',
        'dependencies' => 
        array (
          0 => 'ajax',
          1 => 'wysiwyg',
        ),
        'core' => '6.x',
        'version' => '6.x-1.14',
        'project' => 'ajax',
        'datestamp' => '1240859105',
        'php' => '4.3.5',
      ),
      'project' => 'ajax',
      'version' => '6.x-1.14',
    ),
    'album_feature' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/features/album_feature/album_feature.module',
      'name' => 'album_feature',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'colorbox',
          1 => 'features',
          2 => 'image_features',
          3 => 'imagecache',
          4 => 'imagefield',
          5 => 'link',
          6 => 'location',
          7 => 'nodereference_url',
          8 => 'number',
          9 => 'site_administration',
          10 => 'swftools',
          11 => 'views_accordion',
          12 => 'views_attach',
          13 => 'views_feature',
        ),
        'description' => 'A module to allow the album and track content types and views.',
        'features' => 
        array (
          'content' => 
          array (
            0 => 'microsite_album-field_album_buynowlink',
            1 => 'microsite_album-field_album_order',
            2 => 'microsite_album-field_microsite_album_featured',
            3 => 'microsite_album-field_microsite_album_image',
            4 => 'microsite_track-field_microsite_album_field',
            5 => 'microsite_track-field_microsite_track_audio',
            6 => 'microsite_track-field_microsite_track_buy_now',
            7 => 'microsite_track-field_microsite_track_no',
          ),
          'imagecache' => 
          array (
            0 => '200scale',
            1 => 'album_thumbnail',
          ),
          'node' => 
          array (
            0 => 'microsite_album',
            1 => 'microsite_track',
          ),
          'user_permission' => 
          array (
            0 => 'administer flash',
            1 => 'create microsite_album content',
            2 => 'create microsite_track content',
            3 => 'delete any microsite_album content',
            4 => 'delete any microsite_track content',
            5 => 'delete own microsite_album content',
            6 => 'delete own microsite_track content',
            7 => 'edit any microsite_album content',
            8 => 'edit any microsite_track content',
            9 => 'edit own microsite_album content',
            10 => 'edit own microsite_track content',
            11 => 'view imagecache album_thumbnail',
          ),
          'views' => 
          array (
            0 => 'Albums',
            1 => 'Albums_Tracks',
          ),
          'views_api' => 
          array (
            0 => 'api:2',
          ),
        ),
        'name' => 'Album Feature',
        'package' => 'Features',
        'project' => 'album_feature',
        'project status url' => 'http://features.devmcn.com/fserver',
        'version' => '6.x-2.1',
        'datestamp' => '',
        'php' => '4.3.5',
      ),
      'project' => 'album_feature',
      'version' => '6.x-2.1',
    ),
    'author_pane' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/author_pane/author_pane.module',
      'name' => 'author_pane',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Author Pane',
        'description' => 'Gathers information from core and user related contrib modules and displays it in a template.',
        'core' => '6.x',
        'version' => '6.x-2.2',
        'project' => 'author_pane',
        'datestamp' => '1315346516',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'author_pane',
      'version' => '6.x-2.2',
    ),
    'autoload' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'autoload',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'auto_nodetitle' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/auto_nodetitle/auto_nodetitle.module',
      'name' => 'auto_nodetitle',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '1',
      'weight' => '5',
      'info' => 
      array (
        'name' => 'Automatic Nodetitles',
        'description' => 'Allows hiding of the content title field and automatic title creation.',
        'core' => '6.x',
        'version' => '6.x-1.2',
        'project' => 'auto_nodetitle',
        'datestamp' => '1249042505',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'auto_nodetitle',
      'version' => '6.x-1.2',
    ),
    'banners' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'banners',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'better_exposed_filters' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/better_exposed_filters/better_exposed_filters.module',
      'name' => 'better_exposed_filters',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Better Exposed Filters',
        'description' => 'Allow the use of checkboxes or radio buttons for exposed Views filters',
        'core' => '6.x',
        'package' => 'Views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'version' => '6.x-2.0-beta1',
        'project' => 'better_exposed_filters',
        'datestamp' => '1307589414',
        'php' => '4.3.5',
      ),
      'project' => 'better_exposed_filters',
      'version' => '6.x-2.0-beta1',
    ),
    'better_formats' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/better_formats/better_formats.module',
      'name' => 'better_formats',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6110',
      'weight' => '100',
      'info' => 
      array (
        'name' => 'Better Formats',
        'description' => 'Enhances the core input format system by managing input format defaults and settings.',
        'core' => '6.x',
        'version' => '6.x-1.2',
        'project' => 'better_formats',
        'datestamp' => '1265402405',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'better_formats',
      'version' => '6.x-1.2',
    ),
    'block' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/block/block.module',
      'name' => 'block',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Block',
        'description' => 'Controls the boxes that are displayed around the main content.',
        'package' => 'Core - required',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'blockcache_alter' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/blockcache_alter/blockcache_alter.module',
      'name' => 'blockcache_alter',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Block Cache Alter',
        'description' => 'Alter the cache settings per block.',
        'core' => '6.x',
        'version' => '6.x-1.4',
        'package' => 'Caching',
        'project' => 'blockcache_alter',
        'datestamp' => '1253309710',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'blockcache_alter',
      'version' => '6.x-1.4',
    ),
    'blog' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/blog/blog.module',
      'name' => 'blog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Blog',
        'description' => 'Enables keeping easily and regularly updated user web pages or blogs.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'blogapi' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/blogapi/blogapi.module',
      'name' => 'blogapi',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Blog API',
        'description' => 'Allows users to post content using applications that support XML-RPC blog APIs.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'blog_feature' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/features/blog_feature/blog_feature.module',
      'name' => 'blog_feature',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'captcha',
          1 => 'comment',
          2 => 'features',
          3 => 'scheduler',
          4 => 'site_administration',
          5 => 'taxonomy',
          6 => 'views',
          7 => 'views_feature',
        ),
        'description' => 'Provides blog content type and views',
        'features' => 
        array (
          'node' => 
          array (
            0 => 'blog',
          ),
          'user_permission' => 
          array (
            0 => 'access comments',
            1 => 'administer CAPTCHA settings',
            2 => 'administer comments',
            3 => 'create blog content',
            4 => 'delete any blog content',
            5 => 'delete own blog content',
            6 => 'edit any blog content',
            7 => 'edit own blog content',
            8 => 'post comments',
            9 => 'post comments without approval',
            10 => 'skip CAPTCHA',
          ),
          'views' => 
          array (
            0 => 'blog',
          ),
          'views_api' => 
          array (
            0 => 'api:2',
          ),
        ),
        'name' => 'Blog Feature',
        'package' => 'Features',
        'project' => 'blog_feature',
        'project status url' => 'http://features.devmcn.com/fserver',
        'version' => '6.x-1.5',
        'php' => '4.3.5',
      ),
      'project' => 'blog_feature',
      'version' => '6.x-1.5',
    ),
    'book' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/book/book.module',
      'name' => 'book',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Book',
        'description' => 'Allows users to structure site pages in a hierarchy or outline.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'bulk_export' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/ctools/bulk_export/bulk_export.module',
      'name' => 'bulk_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bulk Export',
        'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '6.x-1.8',
        'project' => 'ctools',
        'datestamp' => '1288393844',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.8',
    ),
    'ca' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib-patched/ubercart/ca/ca.module',
      'name' => 'ca',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Conditional Actions',
        'description' => 'REQUIRED. Create conditional action configurations for taxes, shipping, and more!',
        'package' => 'Ubercart - core',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.6',
        'project' => 'ubercart',
        'datestamp' => '1312031519',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.6',
    ),
    'cacherouter' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'cacherouter',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'calendar' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'calendar',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'calendar_ical' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'calendar_ical',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'captcha' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/captcha/captcha.module',
      'name' => 'captcha',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6203',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CAPTCHA',
        'description' => 'Base CAPTCHA module for adding challenges to arbitrary forms.',
        'package' => 'Spam control',
        'core' => '6.x',
        'version' => '6.x-2.4',
        'project' => 'captcha',
        'datestamp' => '1297123619',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'captcha',
      'version' => '6.x-2.4',
    ),
    'ckeditor' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/ckeditor/ckeditor.module',
      'name' => 'ckeditor',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CKEditor',
        'description' => 'Enables the usage of CKEditor (WYSIWYG) instead of plain text fields.',
        'core' => '6.x',
        'package' => 'User interface',
        'version' => '6.x-1.x-dev',
        'project' => 'ckeditor',
        'datestamp' => '1315440331',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'ckeditor',
      'version' => '6.x-1.x-dev',
    ),
    'click_filter' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'click_filter',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'cloud_zoom' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'cloud_zoom',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'color' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/color/color.module',
      'name' => 'color',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Color',
        'description' => 'Allows the user to change the color scheme of certain themes.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'colorbox' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/colorbox/colorbox.module',
      'name' => 'colorbox',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Colorbox',
        'description' => 'A light-weight, customizable lightbox plugin for jQuery 1.3 and 1.4.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'jquery_update',
        ),
        'version' => '6.x-1.1',
        'project' => 'colorbox',
        'datestamp' => '1311834127',
        'php' => '4.3.5',
      ),
      'project' => 'colorbox',
      'version' => '6.x-1.1',
    ),
    'comment' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/comment/comment.module',
      'name' => 'comment',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Comment',
        'description' => 'Allows users to comment on and discuss published content.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'comment_box' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/util/contribs/logged_in/comment_box.module',
      'name' => 'comment_box',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Comment Box',
        'description' => 'Changes the size of the comment area.',
        'dependencies' => 
        array (
          0 => 'util',
          1 => 'comment',
        ),
        'package' => 'Util',
        'core' => '6.x',
        'version' => '6.x-3.0',
        'project' => 'util',
        'datestamp' => '1288295149',
        'php' => '4.3.5',
      ),
      'project' => 'util',
      'version' => '6.x-3.0',
    ),
    'comment_notify' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/comment_notify/comment_notify.module',
      'name' => 'comment_notify',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6006',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'Comment Notify',
        'description' => 'Comment follow-up e-mail notification for anonymous as well as registered users.',
        'dependencies' => 
        array (
          0 => 'comment',
        ),
        'core' => '6.x',
        'version' => '6.x-1.6',
        'project' => 'comment_notify',
        'datestamp' => '1314101218',
        'php' => '4.3.5',
      ),
      'project' => 'comment_notify',
      'version' => '6.x-1.6',
    ),
    'contact' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/contact/contact.module',
      'name' => 'contact',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contact',
        'description' => 'Enables the use of both personal and site-wide contact forms.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'content' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/cck/content.module',
      'name' => 'content',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6010',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content',
        'description' => 'Allows administrators to define new content types.',
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
    ),
    'content_access' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'content_access',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'content_complete' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/content_complete/content_complete.module',
      'name' => 'content_complete',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content Complete',
        'description' => 'Configure CCK fields to be tagged as required to be complete. Display the percent of completion to the user via a block.',
        'core' => '6.x',
        'package' => 'CCK',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'version' => '6.x-1.5',
        'project' => 'content_complete',
        'datestamp' => '1313755016',
        'php' => '4.3.5',
      ),
      'project' => 'content_complete',
      'version' => '6.x-1.5',
    ),
    'content_copy' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/cck/modules/content_copy/content_copy.module',
      'name' => 'content_copy',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content Copy',
        'description' => 'Enables ability to import/export field definitions.',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
    ),
    'content_permissions' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/cck/modules/content_permissions/content_permissions.module',
      'name' => 'content_permissions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content Permissions',
        'description' => 'Set field-level permissions for CCK fields.',
        'package' => 'CCK',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
    ),
    'content_profile' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/content_profile/content_profile.module',
      'name' => 'content_profile',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6004',
      'weight' => '-1',
      'info' => 
      array (
        'name' => 'Content Profile',
        'description' => 'Use content types for user profiles.',
        'package' => 'Content Profile',
        'core' => '6.x',
        'version' => '6.x-1.0',
        'project' => 'content_profile',
        'datestamp' => '1270662007',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'content_profile',
      'version' => '6.x-1.0',
    ),
    'content_profile_registration' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/content_profile/modules/content_profile_registration.module',
      'name' => 'content_profile_registration',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'Content Profile User Registration',
        'description' => 'Enable content profile features during user registration',
        'package' => 'Content Profile',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'content_profile',
        ),
        'version' => '6.x-1.0',
        'project' => 'content_profile',
        'datestamp' => '1270662007',
        'php' => '4.3.5',
      ),
      'project' => 'content_profile',
      'version' => '6.x-1.0',
    ),
    'content_profile_tokens' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/content_profile/modules/content_profile_tokens.module',
      'name' => 'content_profile_tokens',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content Profile Tokens',
        'description' => 'Add user tokens for content profiles.',
        'package' => 'Content Profile',
        'dependencies' => 
        array (
          0 => 'content_profile',
          1 => 'token',
          2 => 'content',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0',
        'project' => 'content_profile',
        'datestamp' => '1270662007',
        'php' => '4.3.5',
      ),
      'project' => 'content_profile',
      'version' => '6.x-1.0',
    ),
    'context' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/context/context.module',
      'name' => 'context',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6304',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Context',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'description' => 'Provide modules with a cache that lasts for a single page request.',
        'package' => 'Context',
        'core' => '6.x',
        'version' => '6.x-3.0',
        'project' => 'context',
        'datestamp' => '1282588006',
        'php' => '4.3.5',
      ),
      'project' => 'context',
      'version' => '6.x-3.0',
    ),
    'context_layouts' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/context/context_layouts/context_layouts.module',
      'name' => 'context_layouts',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Context layouts',
        'description' => 'Allow theme layer to provide multiple region layouts and integrate with context.',
        'dependencies' => 
        array (
          0 => 'context',
        ),
        'package' => 'Context',
        'core' => '6.x',
        'version' => '6.x-3.0',
        'project' => 'context',
        'datestamp' => '1282588006',
        'php' => '4.3.5',
      ),
      'project' => 'context',
      'version' => '6.x-3.0',
    ),
    'context_ui' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/context/context_ui/context_ui.module',
      'name' => 'context_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6004',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Context UI',
        'description' => 'Provides a simple UI for settings up a site structure using Context.',
        'dependencies' => 
        array (
          0 => 'context',
        ),
        'package' => 'Context',
        'core' => '6.x',
        'version' => '6.x-3.0',
        'project' => 'context',
        'datestamp' => '1282588006',
        'php' => '4.3.5',
      ),
      'project' => 'context',
      'version' => '6.x-3.0',
    ),
    'cookie_cache_bypass' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/cookie_cache_bypass/cookie_cache_bypass.module',
      'name' => 'cookie_cache_bypass',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Cookie cache bypass',
        'description' => 'Sets a cookie on form submission directing a reverse proxy to temporarily not serve cached pages for an anonymous user that just submitted content.',
        'core' => '6.x',
        'package' => 'Pressflow',
        'dependencies' => 
        array (
        ),
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'ctools' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/ctools/ctools.module',
      'name' => 'ctools',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6007',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos tools',
        'description' => 'A library of helpful tools by Merlin of Chaos.',
        'core' => '6.x',
        'package' => 'Chaos tool suite',
        'version' => '6.x-1.8',
        'project' => 'ctools',
        'datestamp' => '1288393844',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.8',
    ),
    'ctools_access_ruleset' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
      'name' => 'ctools_access_ruleset',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom rulesets',
        'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
        'core' => '6.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '6.x-1.8',
        'project' => 'ctools',
        'datestamp' => '1288393844',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.8',
    ),
    'ctools_ajax_sample' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
      'name' => 'ctools_ajax_sample',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos Tools (CTools) AJAX Example',
        'description' => 'Shows how to use the power of Chaos AJAX.',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '6.x-1.8',
        'core' => '6.x',
        'project' => 'ctools',
        'datestamp' => '1288393844',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.8',
    ),
    'ctools_custom_content' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/ctools/ctools_custom_content/ctools_custom_content.module',
      'name' => 'ctools_custom_content',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom content panes',
        'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
        'core' => '6.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '6.x-1.8',
        'project' => 'ctools',
        'datestamp' => '1288393844',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.8',
    ),
    'ctools_plugin_example' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/ctools/ctools_plugin_example/ctools_plugin_example.module',
      'name' => 'ctools_plugin_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos Tools (CTools) Plugin Example',
        'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'panels',
          2 => 'page_manager',
          3 => 'advanced_help',
        ),
        'core' => '6.x',
        'version' => '6.x-1.8',
        'project' => 'ctools',
        'datestamp' => '1288393844',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.8',
    ),
    'cufon' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'cufon',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6000',
      'weight' => '100',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'custom_product_store_feature_link_out_' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/features/custom_product_store_feature_link_out_/custom_product_store_feature_link_out_.module',
      'name' => 'custom_product_store_feature_link_out_',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'image_features',
          2 => 'imagecache',
          3 => 'imagefield',
          4 => 'lightbox2',
          5 => 'link',
          6 => 'number',
          7 => 'optionwidgets',
          8 => 'text',
          9 => 'views',
          10 => 'views_feature',
        ),
        'description' => 'A module to allow a store that links out to buy.',
        'features' => 
        array (
          'content' => 
          array (
            0 => 'custom_product-field_image',
            1 => 'custom_product-field_product_buy_link',
            2 => 'custom_product-field_product_price',
            3 => 'custom_product-field_sort_order',
          ),
          'imagecache' => 
          array (
            0 => '280wide',
          ),
          'node' => 
          array (
            0 => 'custom_product',
          ),
          'user' => 
          array (
            0 => 'administer lightbox2',
            1 => 'create custom_product content',
            2 => 'delete any custom_product content',
            3 => 'delete own custom_product content',
            4 => 'download original image',
            5 => 'edit any custom_product content',
            6 => 'edit own custom_product content',
            7 => 'view imagecache 280wide',
          ),
          'views' => 
          array (
            0 => 'Products',
          ),
        ),
        'name' => 'Custom Product Store Feature (Link Out)',
        'package' => 'Features',
        'project' => 'custom_product_store_feature_link_out_',
        'project status url' => 'http://features.devmcn.com/fserver',
        'version' => '6.x-1.0',
        'datestamp' => '1291241184',
        'php' => '4.3.5',
      ),
      'project' => 'custom_product_store_feature_link_out_',
      'version' => '6.x-1.0',
    ),
    'database_test' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'database_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'date' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/date/date/date.module',
      'name' => 'date',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6005',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date',
        'description' => 'Defines CCK date/time fields and widgets.',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'date_api',
          2 => 'date_timezone',
        ),
        'package' => 'Date/Time',
        'core' => '6.x',
        'version' => '6.x-2.7',
        'project' => 'date',
        'datestamp' => '1294059080',
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.7',
    ),
    'date_api' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/date/date_api.module',
      'name' => 'date_api',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6006',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date API',
        'description' => 'A Date API that can be used by other modules.',
        'package' => 'Date/Time',
        'core' => '6.x',
        'version' => '6.x-2.7',
        'project' => 'date',
        'datestamp' => '1294059080',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.7',
    ),
    'date_locale' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/date/date_locale/date_locale.module',
      'name' => 'date_locale',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Locale',
        'description' => 'Allows the site admin to configure multiple formats for date/time display to tailor dates for a specific locale or audience.',
        'package' => 'Date/Time',
        'dependencies' => 
        array (
          0 => 'date_api',
          1 => 'locale',
        ),
        'core' => '6.x',
        'version' => '6.x-2.7',
        'project' => 'date',
        'datestamp' => '1294059080',
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.7',
    ),
    'date_php4' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/date/date_php4/date_php4.module',
      'name' => 'date_php4',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date PHP4',
        'description' => 'Emulate PHP 5.2 date functions in PHP 4.x, PHP 5.0, and PHP 5.1. Required when using the Date API with PHP versions less than PHP 5.2.',
        'package' => 'Date/Time',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'core' => '6.x',
        'version' => '6.x-2.7',
        'project' => 'date',
        'datestamp' => '1294059080',
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.7',
    ),
    'date_popup' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/date/date_popup/date_popup.module',
      'name' => 'date_popup',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Popup',
        'description' => 'Enables jquery popup calendars and time entry widgets for selecting dates and times.',
        'dependencies' => 
        array (
          0 => 'date_api',
          1 => 'date_timezone',
        ),
        'package' => 'Date/Time',
        'core' => '6.x',
        'version' => '6.x-2.7',
        'project' => 'date',
        'datestamp' => '1294059080',
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.7',
    ),
    'date_repeat' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/date/date_repeat/date_repeat.module',
      'name' => 'date_repeat',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Repeat API',
        'description' => 'A Date Repeat API to calculate repeating dates and times from iCal rules.',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'package' => 'Date/Time',
        'core' => '6.x',
        'version' => '6.x-2.7',
        'project' => 'date',
        'datestamp' => '1294059080',
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.7',
    ),
    'date_timezone' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/date/date_timezone/date_timezone.module',
      'name' => 'date_timezone',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '5200',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Timezone',
        'description' => 'Needed when using Date API. Overrides site and user timezone handling to set timezone names instead of offsets.',
        'package' => 'Date/Time',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'core' => '6.x',
        'version' => '6.x-2.7',
        'project' => 'date',
        'datestamp' => '1294059080',
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.7',
    ),
    'date_tools' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/date/date_tools/date_tools.module',
      'name' => 'date_tools',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Tools',
        'description' => 'Tools to import and auto-create dates and calendars.',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'date',
        ),
        'package' => 'Date/Time',
        'core' => '6.x',
        'version' => '6.x-2.7',
        'project' => 'date',
        'datestamp' => '1294059080',
        'php' => '4.3.5',
      ),
      'project' => 'date',
      'version' => '6.x-2.7',
    ),
    'dblog' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/dblog/dblog.module',
      'name' => 'dblog',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database logging',
        'description' => 'Logs and records system events to the database.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'dblog_clear' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/util/contribs/dblog_ext/dblog_clear/dblog_clear.module',
      'name' => 'dblog_clear',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Log clearance',
        'description' => 'Provides clearing function for filtered "Recent log" report.',
        'core' => '6.x',
        'version' => '6.x-3.0',
        'package' => 'Util',
        'dependencies' => 
        array (
          0 => 'dblog',
          1 => 'dblog_common',
        ),
        'project' => 'util',
        'datestamp' => '1288295149',
        'php' => '4.3.5',
      ),
      'project' => 'util',
      'version' => '6.x-3.0',
    ),
    'dblog_common' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/util/contribs/dblog_ext/dblog_common.module',
      'name' => 'dblog_common',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database logging common',
        'description' => 'Provides API support for other modules to enhance "Recent log" report page.',
        'core' => '6.x',
        'version' => '6.x-3.0',
        'package' => 'Util',
        'project' => 'util',
        'datestamp' => '1288295149',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'util',
      'version' => '6.x-3.0',
    ),
    'dblog_ext' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/util/contribs/dblog_ext/dblog_ext.module',
      'name' => 'dblog_ext',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database logging extension',
        'description' => 'Provides API support for other modules to enhance "Recent log" report page.',
        'core' => '6.x',
        'version' => '6.x-3.0',
        'package' => 'Util',
        'dependencies' => 
        array (
          0 => 'dblog',
        ),
        'project' => 'util',
        'datestamp' => '1288295149',
        'php' => '4.3.5',
      ),
      'project' => 'util',
      'version' => '6.x-3.0',
    ),
    'dblog_filters' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/util/contribs/dblog_ext/dblog_filters/dblog_filters.module',
      'name' => 'dblog_filters',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Log filters',
        'description' => 'Exposes hooks for other modules to implement "Recent log" report filters.',
        'core' => '6.x',
        'version' => '6.x-3.0',
        'package' => 'Util',
        'dependencies' => 
        array (
          0 => 'dblog',
          1 => 'dblog_ext',
        ),
        'project' => 'util',
        'datestamp' => '1288295149',
        'php' => '4.3.5',
      ),
      'project' => 'util',
      'version' => '6.x-3.0',
    ),
    'dblog_host_filter' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/util/contribs/dblog_ext/dblog_filters/dblog_host_filter.module',
      'name' => 'dblog_host_filter',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Log hostname filter',
        'description' => 'Provides hostname filter for "Recent log" report page.',
        'core' => '6.x',
        'version' => '6.x-3.0',
        'package' => 'Util',
        'dependencies' => 
        array (
          0 => 'dblog_filters',
        ),
        'project' => 'util',
        'datestamp' => '1288295149',
        'php' => '4.3.5',
      ),
      'project' => 'util',
      'version' => '6.x-3.0',
    ),
    'dblog_time_filters' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/util/contribs/dblog_ext/dblog_filters/dblog_time_filters.module',
      'name' => 'dblog_time_filters',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Log date/time filters',
        'description' => 'Provides date/time filters for "Recent log" report page.',
        'core' => '6.x',
        'version' => '6.x-3.0',
        'package' => 'Util',
        'dependencies' => 
        array (
          0 => 'dblog_filters',
          1 => 'dblog_common',
        ),
        'project' => 'util',
        'datestamp' => '1288295149',
        'php' => '4.3.5',
      ),
      'project' => 'util',
      'version' => '6.x-3.0',
    ),
    'dblog_user_filter' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/util/contribs/dblog_ext/dblog_filters/dblog_user_filter.module',
      'name' => 'dblog_user_filter',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Log user filter',
        'description' => 'Provides user filter for "Recent log" report page.',
        'core' => '6.x',
        'version' => '6.x-3.0',
        'package' => 'Util',
        'dependencies' => 
        array (
          0 => 'dblog_filters',
        ),
        'project' => 'util',
        'datestamp' => '1288295149',
        'php' => '4.3.5',
      ),
      'project' => 'util',
      'version' => '6.x-3.0',
    ),
    'dbtng' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'dbtng',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'demo' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/demo/demo.module',
      'name' => 'demo',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Demonstration site',
        'description' => 'Create snapshots and reset the site for demonstration or testing purposes.',
        'package' => 'Development',
        'core' => '6.x',
        'version' => '6.x-1.4',
        'project' => 'demo',
        'datestamp' => '1266603905',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'demo',
      'version' => '6.x-1.4',
    ),
    'demo_reset' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/demo/demo_reset.module',
      'name' => 'demo_reset',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Demonstration site reset',
        'description' => 'Allows to reset the site on cron runs and to <strong>reset the site WITHOUT CONFIRMATION.</strong> Only supposed to be used on public demonstration sites. Use at your own risk.',
        'package' => 'Development',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'demo',
        ),
        'version' => '6.x-1.4',
        'project' => 'demo',
        'datestamp' => '1266603905',
        'php' => '4.3.5',
      ),
      'project' => 'demo',
      'version' => '6.x-1.4',
    ),
    'devel' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/devel/devel.module',
      'name' => 'devel',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6003',
      'weight' => '88',
      'info' => 
      array (
        'name' => 'Devel',
        'description' => 'Various blocks, pages, and functions for developers.',
        'package' => 'Development',
        'dependencies' => 
        array (
          0 => 'menu',
        ),
        'core' => '6.x',
        'version' => '6.x-1.26',
        'project' => 'devel',
        'datestamp' => '1311355315',
        'php' => '4.3.5',
      ),
      'project' => 'devel',
      'version' => '6.x-1.26',
    ),
    'devel_generate' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/devel/devel_generate.module',
      'name' => 'devel_generate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel generate',
        'description' => 'Generate dummy users, nodes, and taxonomy terms.',
        'package' => 'Development',
        'core' => '6.x',
        'version' => '6.x-1.26',
        'project' => 'devel',
        'datestamp' => '1311355315',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'devel',
      'version' => '6.x-1.26',
    ),
    'devel_node_access' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/devel/devel_node_access.module',
      'name' => 'devel_node_access',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel node access',
        'description' => 'Developer block and page illustrating relevant node_access records.',
        'package' => 'Development',
        'core' => '6.x',
        'version' => '6.x-1.26',
        'project' => 'devel',
        'datestamp' => '1311355315',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'devel',
      'version' => '6.x-1.26',
    ),
    'diff' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'diff',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'draggableviews' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/draggableviews/draggableviews.module',
      'name' => 'draggableviews',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'DraggableViews',
        'description' => 'Makes Views draggable',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'package' => 'Views',
        'core' => '6.x',
        'version' => '6.x-3.5',
        'project' => 'draggableviews',
        'datestamp' => '1288359645',
        'php' => '4.3.5',
      ),
      'project' => 'draggableviews',
      'version' => '6.x-3.5',
    ),
    'draggableviews_book' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/draggableviews/modules/draggableviews_book/draggableviews_book.module',
      'name' => 'draggableviews_book',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'DraggableViews Book handler',
        'description' => 'Provides Book support.',
        'dependencies' => 
        array (
          0 => 'draggableviews',
          1 => 'book',
        ),
        'package' => 'Views',
        'core' => '6.x',
        'version' => '6.x-3.5',
        'project' => 'draggableviews',
        'datestamp' => '1288359645',
        'php' => '4.3.5',
      ),
      'project' => 'draggableviews',
      'version' => '6.x-3.5',
    ),
    'draggableviews_cck' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/draggableviews/modules/draggableviews_cck/draggableviews_cck.module',
      'name' => 'draggableviews_cck',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'DraggableViews CCK handler',
        'description' => 'Provides CCK support for both order fields and parent fields.',
        'dependencies' => 
        array (
          0 => 'draggableviews',
          1 => 'content',
        ),
        'package' => 'Views',
        'core' => '6.x',
        'version' => '6.x-3.5',
        'project' => 'draggableviews',
        'datestamp' => '1288359645',
        'php' => '4.3.5',
      ),
      'project' => 'draggableviews',
      'version' => '6.x-3.5',
    ),
    'draggableviews_taxonomy' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/draggableviews/modules/draggableviews_taxonomy/draggableviews_taxonomy.module',
      'name' => 'draggableviews_taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'DraggableViews Taxonomy handler',
        'description' => 'Provides Taxonomy support for both order fields and parent fields.',
        'dependencies' => 
        array (
          0 => 'draggableviews',
          1 => 'taxonomy',
        ),
        'package' => 'Views',
        'core' => '6.x',
        'version' => '6.x-3.5',
        'project' => 'draggableviews',
        'datestamp' => '1288359645',
        'php' => '4.3.5',
      ),
      'project' => 'draggableviews',
      'version' => '6.x-3.5',
    ),
    'ds' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/gaither.com/modules/ds/ds.module',
      'name' => 'ds',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '3',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Display suite',
        'description' => 'Manage the display of your data objects.',
        'core' => '6.x',
        'package' => 'Display suite',
        'version' => '6.x-1.4',
        'project' => 'ds',
        'datestamp' => '1292540632',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'ds',
      'version' => '6.x-1.4',
    ),
    'ds_ui' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/gaither.com/modules/ds/ds_ui.module',
      'name' => 'ds_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Display suite UI',
        'description' => 'Administrative interface to display suite. Without this module, you cannot manage your display settings, fields etc.',
        'core' => '6.x',
        'package' => 'Display suite',
        'dependencies' => 
        array (
          0 => 'ds',
        ),
        'version' => '6.x-1.4',
        'project' => 'ds',
        'datestamp' => '1292540632',
        'php' => '4.3.5',
      ),
      'project' => 'ds',
      'version' => '6.x-1.4',
    ),
    'elements' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'elements',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'emaudio' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/emfield/contrib/emaudio/emaudio.module',
      'name' => 'emaudio',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Embedded Audio Field',
        'description' => 'Defines a field type for displaying third party music, podcasts, and other audio, such as podOmatic and Odeo.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'emfield',
        ),
        'package' => 'Media',
        'version' => '6.x-2.5',
        'project' => 'emfield',
        'datestamp' => '1304705515',
        'php' => '4.3.5',
      ),
      'project' => 'emfield',
      'version' => '6.x-2.5',
    ),
    'embonus' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/emfield/contrib/embonus/embonus.module',
      'name' => 'embonus',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Embedded Media Bonus Pack',
        'description' => 'Provides extra field information for embedded media fields.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'emfield',
        ),
        'package' => 'Media',
        'version' => '6.x-2.5',
        'project' => 'emfield',
        'datestamp' => '1304705515',
        'php' => '4.3.5',
      ),
      'project' => 'emfield',
      'version' => '6.x-2.5',
    ),
    'emfield' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/emfield/emfield.module',
      'name' => 'emfield',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6204',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Embedded Media Field',
        'description' => 'Provides an engine for modules to integrate various 3rd party media content providers.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'package' => 'Media',
        'php' => '5.2',
        'version' => '6.x-2.5',
        'project' => 'emfield',
        'datestamp' => '1304705515',
      ),
      'project' => 'emfield',
      'version' => '6.x-2.5',
    ),
    'emimage' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/emfield/contrib/emimage/emimage.module',
      'name' => 'emimage',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Embedded Image Field',
        'description' => 'Defines a field type for displaying images from third party providers, such as Flickr or Photobucket.',
        'dependencies' => 
        array (
          0 => 'emfield',
        ),
        'package' => 'Media',
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'emfield',
        'datestamp' => '1304705515',
        'php' => '4.3.5',
      ),
      'project' => 'emfield',
      'version' => '6.x-2.5',
    ),
    'eminline' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/emfield/contrib/eminline/eminline.module',
      'name' => 'eminline',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Embedded Inline Media',
        'description' => 'Allows users to embed media into text-areas.',
        'dependencies' => 
        array (
          0 => 'emfield',
          1 => 'emvideo',
        ),
        'core' => '6.x',
        'package' => 'Media',
        'version' => '6.x-2.5',
        'project' => 'emfield',
        'datestamp' => '1304705515',
        'php' => '4.3.5',
      ),
      'project' => 'emfield',
      'version' => '6.x-2.5',
    ),
    'emma' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/custom/emma/emma.module',
      'name' => 'emma',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Emma API',
        'description' => 'Provides an API to integrate with Emma mailing lists',
        'core' => '6.x',
        'package' => 'Emma',
        'version' => '6.x-1.0',
        'project status url' => 'http://features.devmcn.com/fserver',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.x-1.0',
    ),
    'emma_block' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/gaither.com/modules/emma_block/emma_block.module',
      'name' => 'emma_block',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Emma Block',
        'description' => 'Creation of a block for Emma newsletter registrations',
        'package' => 'Emma',
        'core' => '6.x',
        'version' => '6.x-1.1',
        'project' => 'emma_block',
        'datestamp' => '1303570916',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'emma_block',
      'version' => '6.x-1.1',
    ),
    'emthumb' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/emfield/contrib/emthumb/emthumb.module',
      'name' => 'emthumb',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Embedded Media Thumbnail',
        'description' => 'Allows custom thumbnails for Embedded Media Fields.',
        'dependencies' => 
        array (
          0 => 'emfield',
        ),
        'package' => 'Media',
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'emfield',
        'datestamp' => '1304705515',
        'php' => '4.3.5',
      ),
      'project' => 'emfield',
      'version' => '6.x-2.5',
    ),
    'emvideo' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/emfield/contrib/emvideo/emvideo.module',
      'name' => 'emvideo',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6101',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Embedded Video Field',
        'description' => 'Defines a field type for displaying third party videos, such as YouTube and Google Video.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'emfield',
        ),
        'package' => 'Media',
        'version' => '6.x-2.5',
        'project' => 'emfield',
        'datestamp' => '1304705515',
        'php' => '4.3.5',
      ),
      'project' => 'emfield',
      'version' => '6.x-2.5',
    ),
    'emwave' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/emfield/contrib/emwave/emwave.module',
      'name' => 'emwave',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Embedded Wave Field',
        'description' => 'Defines a field type for displaying waves from third party providers, such as Google or ...',
        'dependencies' => 
        array (
          0 => 'emfield',
        ),
        'package' => 'Media',
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'emfield',
        'datestamp' => '1304705515',
        'php' => '4.3.5',
      ),
      'project' => 'emfield',
      'version' => '6.x-2.5',
    ),
    'enforce_revlog' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/util/contribs/logged_in/enforce_revlog.module',
      'name' => 'enforce_revlog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Enforce Revlog',
        'description' => 'Enforces the use of the revision log field.',
        'dependencies' => 
        array (
          0 => 'util',
        ),
        'package' => 'Util',
        'core' => '6.x',
        'version' => '6.x-3.0',
        'project' => 'util',
        'datestamp' => '1288295149',
        'php' => '4.3.5',
      ),
      'project' => 'util',
      'version' => '6.x-3.0',
    ),
    'events_feature' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/features/events_feature/events_feature.module',
      'name' => 'events_feature',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'date',
          1 => 'date_popup',
          2 => 'features',
          3 => 'link',
          4 => 'text',
          5 => 'views',
        ),
        'description' => 'A module to allow the event content type and views.',
        'features' => 
        array (
          'content' => 
          array (
            0 => 'event-field_event_date',
            1 => 'event-field_event_link',
            2 => 'event-field_event_time',
          ),
          'node' => 
          array (
            0 => 'event',
          ),
          'user_permission' => 
          array (
            0 => 'create event content',
            1 => 'delete any event content',
            2 => 'delete own event content',
            3 => 'edit any event content',
            4 => 'edit own event content',
          ),
          'views' => 
          array (
            0 => 'Events',
          ),
          'views_api' => 
          array (
            0 => 'api:2',
          ),
        ),
        'name' => 'Events Feature',
        'package' => 'Features',
        'project' => 'events_feature',
        'project status url' => 'http://features.devmcn.com/fserver',
        'version' => '6.x-2.0',
        'php' => '4.3.5',
      ),
      'project' => 'events_feature',
      'version' => '6.x-2.0',
    ),
    'facebook_status' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'facebook_status',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '1',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'facebook_status_tags' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'facebook_status_tags',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'faq_accordion' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/features/faq_accordion/faq_accordion.module',
      'name' => 'faq_accordion',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'features',
          2 => 'number',
          3 => 'optionwidgets',
          4 => 'path',
          5 => 'pathauto',
          6 => 'taxonomy',
          7 => 'text',
          8 => 'views',
          9 => 'views_accordion',
          10 => 'views_ui',
        ),
        'description' => 'Provides a content type and view for accordion displays of title/body content such as FAQ',
        'features' => 
        array (
          'content' => 
          array (
            0 => 'faq-field_faq_store_sort',
          ),
          'node' => 
          array (
            0 => 'faq',
          ),
          'user' => 
          array (
            0 => 'access all views',
            1 => 'administer content types',
            2 => 'administer nodes',
            3 => 'administer views',
            4 => 'create faq content',
            5 => 'delete any faq content',
            6 => 'delete own faq content',
            7 => 'edit any faq content',
            8 => 'edit own faq content',
          ),
          'views' => 
          array (
            0 => 'FAQ',
          ),
        ),
        'name' => 'FAQ Accordion',
        'package' => 'Features',
        'project' => 'faq_accordion',
        'version' => '6.x-1.0',
        'php' => '4.3.5',
      ),
      'project' => 'faq_accordion',
      'version' => '6.x-1.0',
    ),
    'favorite_nodes' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'favorite_nodes',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'fb' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'fb',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'fb_actions' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'fb_actions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'fb_app' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'fb_app',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'fb_canvas' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'fb_canvas',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'fb_connect' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'fb_connect',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'fb_devel' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'fb_devel',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'fb_example' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'fb_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'fb_form' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'fb_form',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'fb_friend' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'fb_friend',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'fb_permission' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'fb_permission',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'fb_register' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'fb_register',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'fb_rules' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'fb_rules',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'fb_social' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/fb_social/fb_social.module',
      'name' => 'fb_social',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'fb social plugins',
        'description' => 'facebook social plugins',
        'package' => 'Facebook Social',
        'core' => '6.x',
        'version' => '6.x-1.0-beta8',
        'project' => 'fb_social',
        'datestamp' => '1307760116',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'fb_social',
      'version' => '6.x-1.0-beta8',
    ),
    'fb_social_comments' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/fb_social/modules/fb_social_comments/fb_social_comments.module',
      'name' => 'fb_social_comments',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'fb social comments',
        'description' => 'fb social comments',
        'package' => 'Facebook Social',
        'dependencies' => 
        array (
          0 => 'fb_social',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0-beta8',
        'project' => 'fb_social',
        'datestamp' => '1307760116',
        'php' => '4.3.5',
      ),
      'project' => 'fb_social',
      'version' => '6.x-1.0-beta8',
    ),
    'fb_social_like' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/fb_social/modules/fb_social_like/fb_social_like.module',
      'name' => 'fb_social_like',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'fb social like',
        'description' => 'fb social like',
        'dependencies' => 
        array (
          0 => 'fb_social',
        ),
        'package' => 'Facebook Social',
        'core' => '6.x',
        'version' => '6.x-1.0-beta8',
        'project' => 'fb_social',
        'datestamp' => '1307760116',
        'php' => '4.3.5',
      ),
      'project' => 'fb_social',
      'version' => '6.x-1.0-beta8',
    ),
    'fb_social_likebox' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/fb_social/modules/fb_social_likebox/fb_social_likebox.module',
      'name' => 'fb_social_likebox',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'fb social like box',
        'description' => 'fb social like box',
        'dependencies' => 
        array (
          0 => 'fb_social',
        ),
        'package' => 'Facebook Social',
        'core' => '6.x',
        'version' => '6.x-1.0-beta8',
        'project' => 'fb_social',
        'datestamp' => '1307760116',
        'php' => '4.3.5',
      ),
      'project' => 'fb_social',
      'version' => '6.x-1.0-beta8',
    ),
    'fb_social_send' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/fb_social/modules/fb_social_send/fb_social_send.module',
      'name' => 'fb_social_send',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'fb social send',
        'description' => 'fb social send',
        'dependencies' => 
        array (
          0 => 'fb_social',
        ),
        'package' => 'Facebook Social',
        'core' => '6.x',
        'version' => '6.x-1.0-beta8',
        'project' => 'fb_social',
        'datestamp' => '1307760116',
        'php' => '4.3.5',
      ),
      'project' => 'fb_social',
      'version' => '6.x-1.0-beta8',
    ),
    'fb_social_share' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/fb_social/modules/fb_social_share/fb_social_share.module',
      'name' => 'fb_social_share',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'fb social share',
        'description' => 'fb social share',
        'dependencies' => 
        array (
          0 => 'fb_social',
        ),
        'package' => 'Facebook Social',
        'core' => '6.x',
        'version' => '6.x-1.0-beta8',
        'project' => 'fb_social',
        'datestamp' => '1307760116',
        'php' => '4.3.5',
      ),
      'project' => 'fb_social',
      'version' => '6.x-1.0-beta8',
    ),
    'fb_stream' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'fb_stream',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'fb_tab' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'fb_tab',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'fb_user' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'fb_user',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'fb_user_app' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'fb_user_app',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'fb_views' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'fb_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'features' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/features/features.module',
      'name' => 'features',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6101',
      'weight' => '20',
      'info' => 
      array (
        'name' => 'Features',
        'description' => 'Provides feature management for Drupal.',
        'core' => '6.x',
        'package' => 'Features',
        'version' => '6.x-1.1',
        'project' => 'features',
        'datestamp' => '1310653316',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'features',
      'version' => '6.x-1.1',
    ),
    'features_plumber' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'features_plumber',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'features_plumber_ui' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'features_plumber_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'features_test' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/features/tests/features_test.module',
      'name' => 'features_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'fieldgroup',
          2 => 'text',
          3 => 'views',
        ),
        'description' => 'Test module for Features testing.',
        'features' => 
        array (
          'content' => 
          array (
            0 => 'features_test-field_features_test',
            1 => 'features_test-field_features_test_child_a',
            2 => 'features_test-field_features_test_child_b',
          ),
          'fieldgroup' => 
          array (
            0 => 'features_test-group_features_test',
          ),
          'filter' => 
          array (
            0 => 'features_test',
          ),
          'imagecache' => 
          array (
            0 => 'features_test',
          ),
          'node' => 
          array (
            0 => 'features_test',
          ),
          'user_permission' => 
          array (
            0 => 'create features_test content',
          ),
          'views' => 
          array (
            0 => 'features_test',
          ),
          'views_api' => 
          array (
            0 => 'api:2',
          ),
        ),
        'name' => 'Features Tests',
        'package' => 'Testing',
        'version' => '6.x-1.1',
        'project' => 'features',
        'datestamp' => '1310653316',
        'php' => '4.3.5',
      ),
      'project' => 'features',
      'version' => '6.x-1.1',
    ),
    'feeds' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'feeds',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'feeds_defaults' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'feeds_defaults',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'feeds_fast_news' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'feeds_fast_news',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'feeds_import' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'feeds_import',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'feeds_news' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'feeds_news',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'feeds_ui' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'feeds_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'fe_block' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/features_extra/fe_block.module',
      'name' => 'fe_block',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FE block',
        'description' => 'Build blocks and block settings as features.',
        'package' => 'Features extra',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'features',
          2 => 'ctools',
        ),
        'version' => '6.x-1.x-dev',
        'project' => 'features_extra',
        'datestamp' => '1307621229',
        'php' => '4.3.5',
      ),
      'project' => 'features_extra',
      'version' => '6.x-1.x-dev',
    ),
    'fe_nodequeue' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/features_extra/fe_nodequeue.module',
      'name' => 'fe_nodequeue',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FE nodequeue',
        'description' => 'Build nodequeues as features.',
        'package' => 'Features extra',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'nodequeue',
          1 => 'features',
          2 => 'ctools',
        ),
        'version' => '6.x-1.x-dev',
        'project' => 'features_extra',
        'datestamp' => '1307621229',
        'php' => '4.3.5',
      ),
      'project' => 'features_extra',
      'version' => '6.x-1.x-dev',
    ),
    'fe_taxonomy' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/features_extra/fe_taxonomy.module',
      'name' => 'fe_taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FE taxonomy',
        'description' => 'Build taxonomies as features.',
        'package' => 'Features extra',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'features',
          2 => 'ctools',
        ),
        'version' => '6.x-1.x-dev',
        'project' => 'features_extra',
        'datestamp' => '1307621229',
        'php' => '4.3.5',
      ),
      'project' => 'features_extra',
      'version' => '6.x-1.x-dev',
    ),
    'fieldgroup' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/cck/modules/fieldgroup/fieldgroup.module',
      'name' => 'fieldgroup',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6007',
      'weight' => '9',
      'info' => 
      array (
        'name' => 'Fieldgroup',
        'description' => 'Create display groups for CCK fields.',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
    ),
    'filefield' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/filefield/filefield.module',
      'name' => 'filefield',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6104',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FileField',
        'description' => 'Defines a file field type.',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-3.10',
        'project' => 'filefield',
        'datestamp' => '1303970816',
      ),
      'project' => 'filefield',
      'version' => '6.x-3.10',
    ),
    'filefieldmp3player' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/mp3player/filefieldmp3player/filefieldmp3player.module',
      'name' => 'filefieldmp3player',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FileField MP3 Player Formatter',
        'description' => 'Formats an MP3 file into the MP3 Player.',
        'dependencies' => 
        array (
          0 => 'filefield',
          1 => 'mp3player',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-1.x-dev',
        'project' => 'mp3player',
        'datestamp' => '1299111022',
        'php' => '4.3.5',
      ),
      'project' => 'mp3player',
      'version' => '6.x-1.x-dev',
    ),
    'filefield_meta' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/filefield/filefield_meta/filefield_meta.module',
      'name' => 'filefield_meta',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FileField Meta',
        'description' => 'Add metadata gathering and storage to FileField.',
        'dependencies' => 
        array (
          0 => 'filefield',
          1 => 'getid3',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-3.10',
        'project' => 'filefield',
        'datestamp' => '1303970816',
      ),
      'project' => 'filefield',
      'version' => '6.x-3.10',
    ),
    'filefield_sources' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/filefield_sources/filefield_sources.module',
      'name' => 'filefield_sources',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '5',
      'info' => 
      array (
        'name' => 'FileField Sources',
        'description' => 'Extends FileField to allow referencing of existing files, remote files, and server files.',
        'dependencies' => 
        array (
          0 => 'filefield',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-1.4',
        'project' => 'filefield_sources',
        'datestamp' => '1304045215',
        'php' => '4.3.5',
      ),
      'project' => 'filefield_sources',
      'version' => '6.x-1.4',
    ),
    'filter' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/filter/filter.module',
      'name' => 'filter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Filter',
        'description' => 'Handles the filtering of content in preparation for display.',
        'package' => 'Core - required',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'filterbynodetype' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'filterbynodetype',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'fivestar' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/fivestar/fivestar.module',
      'name' => 'fivestar',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Fivestar',
        'description' => 'A simple five-star voting widget for nodes.',
        'package' => 'Voting',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'votingapi',
        ),
        'version' => '6.x-1.19',
        'project' => 'fivestar',
        'datestamp' => '1256241955',
        'php' => '4.3.5',
      ),
      'project' => 'fivestar',
      'version' => '6.x-1.19',
    ),
    'fivestar_comment' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/fivestar/fivestar_comment.module',
      'name' => 'fivestar_comment',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Fivestar Comments',
        'description' => 'Rate nodes by leaving comments.',
        'package' => 'Voting',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'votingapi',
          1 => 'fivestar',
        ),
        'version' => '6.x-1.19',
        'project' => 'fivestar',
        'datestamp' => '1256241955',
        'php' => '4.3.5',
      ),
      'project' => 'fivestar',
      'version' => '6.x-1.19',
    ),
    'flag' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/flag/flag.module',
      'name' => 'flag',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6005',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Flag',
        'description' => 'Create customized flags that users can set on content.',
        'core' => '6.x',
        'package' => 'Flags',
        'version' => '6.x-1.3',
        'project' => 'flag',
        'datestamp' => '1273367107',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'flag',
      'version' => '6.x-1.3',
    ),
    'flag_actions' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/flag/flag_actions.module',
      'name' => 'flag_actions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Flag actions',
        'description' => 'Execute actions on Flag events.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'flag',
        ),
        'package' => 'Flags',
        'version' => '6.x-1.3',
        'project' => 'flag',
        'datestamp' => '1273367107',
        'php' => '4.3.5',
      ),
      'project' => 'flag',
      'version' => '6.x-1.3',
    ),
    'flickrapi' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'flickrapi',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'flickrbatchimport' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'flickrbatchimport',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'flickrcomments' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'flickrcomments',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'flickrgeo' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'flickrgeo',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'flickrgroups' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'flickrgroups',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'flickrjpegcache' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'flickrjpegcache',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'flickrrippr' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'flickrrippr',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6160',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'flickrshadowbox' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'flickrshadowbox',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'flickrsync' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'flickrsync',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'flickrtags' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'flickrtags',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'flowplayer' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/swftools/flowplayer/flowplayer.module',
      'name' => 'flowplayer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FlowPlayer',
        'description' => 'Enables support for FlowPlayer.',
        'package' => 'SWF Tools',
        'dependencies' => 
        array (
          0 => 'swftools',
        ),
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'swftools',
        'datestamp' => '1240829764',
        'php' => '4.3.5',
      ),
      'project' => 'swftools',
      'version' => '6.x-2.5',
    ),
    'flowplayer3' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/swftools/flowplayer3/flowplayer3.module',
      'name' => 'flowplayer3',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FlowPlayer 3',
        'description' => 'Enables support for FlowPlayer 3.',
        'package' => 'SWF Tools',
        'dependencies' => 
        array (
          0 => 'swftools',
        ),
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'swftools',
        'datestamp' => '1240829764',
        'php' => '4.3.5',
      ),
      'project' => 'swftools',
      'version' => '6.x-2.5',
    ),
    'followbutton' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'followbutton',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'formblock' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/formblock/formblock.module',
      'name' => 'formblock',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Form block',
        'description' => 'Enables the presentation of node creation forms in blocks. This is particularly useful for including forms on panels.',
        'core' => '6.x',
        'version' => '6.x-1.0',
        'project' => 'formblock',
        'datestamp' => '1242203473',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'formblock',
      'version' => '6.x-1.0',
    ),
    'forum' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/forum/forum.module',
      'name' => 'forum',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Forum',
        'description' => 'Enables threaded discussions about general topics.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'comment',
        ),
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'forum_access' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/forum_access/forum_access.module',
      'name' => 'forum_access',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Forum Access',
        'description' => 'Allows forums to be set private and allows forums to be given moderators.',
        'dependencies' => 
        array (
          0 => 'acl',
          1 => 'forum',
        ),
        'package' => 'Access control',
        'core' => '6.x',
        'version' => '6.x-1.5',
        'project' => 'forum_access',
        'datestamp' => '1286640667',
        'php' => '4.3.5',
      ),
      'project' => 'forum_access',
      'version' => '6.x-1.5',
    ),
    'front_page' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'front_page',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'galleriffic_gallery' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/features/galleriffic_gallery/galleriffic_gallery.module',
      'name' => 'galleriffic_gallery',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'features',
          2 => 'filefield',
          3 => 'image_fupload',
          4 => 'image_fupload_imagefield',
          5 => 'imagefield',
          6 => 'site_administration',
          7 => 'taxonomy',
          8 => 'text',
          9 => 'token',
          10 => 'views_feature',
          11 => 'views_galleriffic',
        ),
        'description' => 'Multiple upload Gallery using taxonomy and displaying as a galleriffic jquery gallery',
        'features' => 
        array (
          'content' => 
          array (
            0 => 'photo-field_fupload_photo',
          ),
          'imagecache' => 
          array (
            0 => '490scale-height',
            1 => '75square',
            2 => 'GalleryFinal',
          ),
          'node' => 
          array (
            0 => 'photo',
          ),
          'user_permission' => 
          array (
            0 => 'create photo content',
            1 => 'delete any photo content',
            2 => 'delete own photo content',
            3 => 'edit any photo content',
            4 => 'edit captions',
            5 => 'edit own photo content',
            6 => 'mass upload images',
          ),
          'views' => 
          array (
            0 => 'gallerific_gallery',
          ),
          'views_api' => 
          array (
            0 => 'api:2',
          ),
        ),
        'name' => 'Galleriffic Gallery',
        'package' => 'Features',
        'project' => 'galleriffic_gallery',
        'project status url' => 'http://features.devmcn.com/fserver',
        'version' => '6.x-2.0',
        'php' => '4.3.5',
      ),
      'project' => 'galleriffic_gallery',
      'version' => '6.x-2.0',
    ),
    'galleriffic_gallery_2' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'galleriffic_gallery_2',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'gmap' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/gmap/gmap.module',
      'name' => 'gmap',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '5003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'GMap',
        'description' => 'Filter to allow insertion of a google map into a node',
        'core' => '6.x',
        'package' => 'Location',
        'version' => '6.x-1.1',
        'project' => 'gmap',
        'datestamp' => '1278426618',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'gmap',
      'version' => '6.x-1.1',
    ),
    'gmap_location' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/gmap/gmap_location.module',
      'name' => 'gmap_location',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '5102',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'GMap Location',
        'description' => 'Display location.module information on Google Maps',
        'package' => 'Location',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'gmap',
          1 => 'location',
        ),
        'version' => '6.x-1.1',
        'project' => 'gmap',
        'datestamp' => '1278426618',
        'php' => '4.3.5',
      ),
      'project' => 'gmap',
      'version' => '6.x-1.1',
    ),
    'gmap_macro_builder' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/gmap/gmap_macro_builder.module',
      'name' => 'gmap_macro_builder',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'GMap Macro Builder',
        'description' => 'UI for building GMap macros.',
        'package' => 'Location',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'gmap',
        ),
        'version' => '6.x-1.1',
        'project' => 'gmap',
        'datestamp' => '1278426618',
        'php' => '4.3.5',
      ),
      'project' => 'gmap',
      'version' => '6.x-1.1',
    ),
    'gmap_taxonomy' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/gmap/gmap_taxonomy.module',
      'name' => 'gmap_taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'GMap Taxonomy Markers',
        'description' => 'Taxonomy based markers',
        'package' => 'Location',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'gmap',
        ),
        'version' => '6.x-1.1',
        'project' => 'gmap',
        'datestamp' => '1278426618',
        'php' => '4.3.5',
      ),
      'project' => 'gmap',
      'version' => '6.x-1.1',
    ),
    'googleanalytics' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/google_analytics/googleanalytics.module',
      'name' => 'googleanalytics',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6302',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Google Analytics',
        'description' => 'Adds Google Analytics javascript tracking code to all your site\'s pages.',
        'core' => '6.x',
        'package' => 'Statistics',
        'version' => '6.x-3.3',
        'project' => 'google_analytics',
        'datestamp' => '1301340368',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'google_analytics',
      'version' => '6.x-3.3',
    ),
    'google_plusone' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/google_plusone/google_plusone.module',
      'name' => 'google_plusone',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Google Plus One +1',
        'description' => 'Adds Google +1 button to your site. Enable it per node, or as a block.',
        'core' => '6.x',
        'version' => '6.x-1.0-rc8',
        'project' => 'google_plusone',
        'datestamp' => '1309904516',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'google_plusone',
      'version' => '6.x-1.0-rc8',
    ),
    'help' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/help/help.module',
      'name' => 'help',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Help',
        'description' => 'Manages the display of online help.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'help_example' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/advanced_help/help_example/help_example.module',
      'name' => 'help_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Advanced help example',
        'description' => 'A example help module to demonstrate the advanced help module.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'advanced_help',
        ),
        'version' => '6.x-1.2',
        'project' => 'advanced_help',
        'datestamp' => '1238954409',
        'php' => '4.3.5',
      ),
      'project' => 'advanced_help',
      'version' => '6.x-1.2',
    ),
    'i18n' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'i18n',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'i18nblocks' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'i18nblocks',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'i18ncck' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'i18ncck',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'i18ncontent' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'i18ncontent',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'i18nmenu' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'i18nmenu',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'i18npoll' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'i18npoll',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'i18nprofile' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'i18nprofile',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'i18nstrings' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'i18nstrings',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'i18nsync' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'i18nsync',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'i18ntaxonomy' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'i18ntaxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'i18n_test' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'i18n_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'image' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'image',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'imageapi' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/imageapi/imageapi.module',
      'name' => 'imageapi',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ImageAPI',
        'description' => 'ImageAPI supporting multiple toolkits.',
        'package' => 'ImageCache',
        'core' => '6.x',
        'php' => '5.1',
        'version' => '6.x-1.10',
        'project' => 'imageapi',
        'datestamp' => '1305563215',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'imageapi',
      'version' => '6.x-1.10',
    ),
    'imageapi_gd' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/imageapi/imageapi_gd.module',
      'name' => 'imageapi_gd',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ImageAPI GD2',
        'description' => 'Uses PHP\'s built-in GD2 image processing support.',
        'package' => 'ImageCache',
        'core' => '6.x',
        'version' => '6.x-1.10',
        'project' => 'imageapi',
        'datestamp' => '1305563215',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'imageapi',
      'version' => '6.x-1.10',
    ),
    'imageapi_imagemagick' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/imageapi/imageapi_imagemagick.module',
      'name' => 'imageapi_imagemagick',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ImageAPI ImageMagick',
        'description' => 'Command Line ImageMagick support.',
        'package' => 'ImageCache',
        'core' => '6.x',
        'version' => '6.x-1.10',
        'project' => 'imageapi',
        'datestamp' => '1305563215',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'imageapi',
      'version' => '6.x-1.10',
    ),
    'imagecache' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/imagecache/imagecache.module',
      'name' => 'imagecache',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ImageCache',
        'description' => 'Dynamic image manipulator and cache.',
        'package' => 'ImageCache',
        'dependencies' => 
        array (
          0 => 'imageapi',
        ),
        'core' => '6.x',
        'version' => '6.x-2.0-beta12',
        'project' => 'imagecache',
        'datestamp' => '1305566515',
        'php' => '4.3.5',
      ),
      'project' => 'imagecache',
      'version' => '6.x-2.0-beta12',
    ),
    'imagecache_autorotate' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/imagecache_actions/imagecache_autorotate.module',
      'name' => 'imagecache_autorotate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Imagecache Autorotate',
        'description' => 'Autorotate image based on EXIF Orientation.',
        'dependencies' => 
        array (
          0 => 'imagecache',
        ),
        'package' => 'ImageCache',
        'core' => '6.x',
        'version' => '6.x-1.8',
        'project' => 'imagecache_actions',
        'datestamp' => '1297936065',
        'php' => '4.3.5',
      ),
      'project' => 'imagecache_actions',
      'version' => '6.x-1.8',
    ),
    'imagecache_canvasactions' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/imagecache_actions/imagecache_canvasactions.module',
      'name' => 'imagecache_canvasactions',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Imagecache Canvas Actions',
        'description' => 'Actions for manipulating image canvases layers, including watermark and background effect. Also an aspect switcher (portrait/landscape)',
        'dependencies' => 
        array (
          0 => 'imagecache',
          1 => 'imageapi',
        ),
        'package' => 'ImageCache',
        'core' => '6.x',
        'version' => '6.x-1.8',
        'project' => 'imagecache_actions',
        'datestamp' => '1297936065',
        'php' => '4.3.5',
      ),
      'project' => 'imagecache_actions',
      'version' => '6.x-1.8',
    ),
    'imagecache_coloractions' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/imagecache_actions/imagecache_coloractions.module',
      'name' => 'imagecache_coloractions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Imagecache Color Actions',
        'description' => 'Additional ImageCache actions, providing color-shifting, brightness and alpha transparency effects.',
        'dependencies' => 
        array (
          0 => 'imagecache',
          1 => 'imageapi',
        ),
        'package' => 'ImageCache',
        'core' => '6.x',
        'version' => '6.x-1.8',
        'project' => 'imagecache_actions',
        'datestamp' => '1297936065',
        'php' => '4.3.5',
      ),
      'project' => 'imagecache_actions',
      'version' => '6.x-1.8',
    ),
    'imagecache_customactions' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/imagecache_actions/imagecache_customactions.module',
      'name' => 'imagecache_customactions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Imagecache Custom Actions',
        'description' => 'Allow direct PHP code manipulation of imagecache images.',
        'dependencies' => 
        array (
          0 => 'imagecache',
        ),
        'package' => 'ImageCache',
        'core' => '6.x',
        'version' => '6.x-1.8',
        'project' => 'imagecache_actions',
        'datestamp' => '1297936065',
        'php' => '4.3.5',
      ),
      'project' => 'imagecache_actions',
      'version' => '6.x-1.8',
    ),
    'imagecache_profiles' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/imagecache_profiles/imagecache_profiles.module',
      'name' => 'imagecache_profiles',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Imagecache Profile Pictures',
        'description' => 'Utilizes imagecache presets for user profile pictures.',
        'package' => 'ImageCache',
        'dependencies' => 
        array (
          0 => 'imagecache',
        ),
        'core' => '6.x',
        'version' => '6.x-1.3',
        'project' => 'imagecache_profiles',
        'datestamp' => '1269515110',
        'php' => '4.3.5',
      ),
      'project' => 'imagecache_profiles',
      'version' => '6.x-1.3',
    ),
    'imagecache_textactions' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/imagecache_actions/imagecache_textactions.module',
      'name' => 'imagecache_textactions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Imagecache Text Actions',
        'description' => 'Display simple or dynamic captions on images.',
        'dependencies' => 
        array (
          0 => 'imagecache',
        ),
        'package' => 'ImageCache',
        'core' => '6.x',
        'version' => '6.x-1.8',
        'project' => 'imagecache_actions',
        'datestamp' => '1297936065',
        'php' => '4.3.5',
      ),
      'project' => 'imagecache_actions',
      'version' => '6.x-1.8',
    ),
    'imagecache_ui' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/imagecache/imagecache_ui.module',
      'name' => 'imagecache_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ImageCache UI',
        'description' => 'ImageCache User Interface.',
        'dependencies' => 
        array (
          0 => 'imagecache',
          1 => 'imageapi',
        ),
        'package' => 'ImageCache',
        'core' => '6.x',
        'version' => '6.x-2.0-beta12',
        'project' => 'imagecache',
        'datestamp' => '1305566515',
        'php' => '4.3.5',
      ),
      'project' => 'imagecache',
      'version' => '6.x-2.0-beta12',
    ),
    'imagefield' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/imagefield/imagefield.module',
      'name' => 'imagefield',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6006',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ImageField',
        'description' => 'Defines an image field type.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'filefield',
        ),
        'package' => 'CCK',
        'version' => '6.x-3.10',
        'project' => 'imagefield',
        'datestamp' => '1303971115',
        'php' => '4.3.5',
      ),
      'project' => 'imagefield',
      'version' => '6.x-3.10',
    ),
    'imagerotator' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/swftools/imagerotator/imagerotator.module',
      'name' => 'imagerotator',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'JW Image Rotator 3',
        'description' => 'Enables support for JW Image Rotator 3.',
        'package' => 'SWF Tools',
        'dependencies' => 
        array (
          0 => 'swftools',
        ),
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'swftools',
        'datestamp' => '1240829764',
        'php' => '4.3.5',
      ),
      'project' => 'swftools',
      'version' => '6.x-2.5',
    ),
    'image_attach' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'image_attach',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'image_captcha' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/captcha/image_captcha/image_captcha.module',
      'name' => 'image_captcha',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6203',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image CAPTCHA',
        'description' => 'Provides an image based CAPTCHA.',
        'package' => 'Spam control',
        'dependencies' => 
        array (
          0 => 'captcha',
        ),
        'core' => '6.x',
        'version' => '6.x-2.4',
        'project' => 'captcha',
        'datestamp' => '1297123619',
        'php' => '4.3.5',
      ),
      'project' => 'captcha',
      'version' => '6.x-2.4',
    ),
    'image_features' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/features/image_features/image_features.module',
      'name' => 'image_features',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'imageapi',
          2 => 'imageapi_gd',
          3 => 'imagecache',
          4 => 'imagecache_ui',
        ),
        'description' => 'A helper module to allow images on sites.',
        'features' => 
        array (
          'user' => 
          array (
            0 => 'administer imageapi',
            1 => 'administer imagecache',
            2 => 'flush imagecache',
          ),
        ),
        'name' => 'Image Features',
        'package' => 'Features',
        'project' => 'image_features',
        'project status url' => 'http://features.devmcn.com/fserver',
        'version' => '6.x-1.0-alpha',
        'php' => '4.3.5',
      ),
      'project' => 'image_features',
      'version' => '6.x-1.0-alpha',
    ),
    'image_fupload' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib-patched/image_fupload/image_fupload.module',
      'name' => 'image_fupload',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6304',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image FUpload',
        'description' => 'Allows uploading several images all at once using swfUpload',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'libraries',
        ),
        'version' => '6.x-3.0-rc2',
        'project' => 'image_fupload',
        'datestamp' => '1239195044',
        'php' => '4.3.5',
      ),
      'project' => 'image_fupload',
      'version' => '6.x-3.0-rc2',
    ),
    'image_fupload_image' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib-patched/image_fupload/image_fupload_image/image_fupload_image.module',
      'name' => 'image_fupload_image',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image FUpload (image)',
        'description' => 'Allows uploading several images all at once to image module',
        'core' => '6.x',
        'package' => 'Image',
        'dependencies' => 
        array (
          0 => 'image_fupload',
          1 => 'image',
        ),
        'version' => '6.x-3.0-rc2',
        'project' => 'image_fupload',
        'datestamp' => '1239195044',
        'php' => '4.3.5',
      ),
      'project' => 'image_fupload',
      'version' => '6.x-3.0-rc2',
    ),
    'image_fupload_imagefield' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib-patched/image_fupload/image_fupload_imagefield/image_fupload_imagefield.module',
      'name' => 'image_fupload_imagefield',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image FUpload (CCK)',
        'description' => 'Allows uploading several images all at once to ImageField module',
        'core' => '6.x',
        'package' => 'CCK',
        'dependencies' => 
        array (
          0 => 'image_fupload',
          1 => 'content',
          2 => 'filefield',
          3 => 'imagefield',
          4 => 'imagecache',
        ),
        'version' => '6.x-3.0-rc2',
        'project' => 'image_fupload',
        'datestamp' => '1239195044',
        'php' => '4.3.5',
      ),
      'project' => 'image_fupload',
      'version' => '6.x-3.0-rc2',
    ),
    'image_gallery' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'image_gallery',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'image_import' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'image_import',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'image_im_advanced' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'image_im_advanced',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'image_resize_filter' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/image_resize_filter/image_resize_filter.module',
      'name' => 'image_resize_filter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6102',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image resize filter',
        'description' => 'Filter to automatically scale images to their height and width dimensions.',
        'core' => '6.x',
        'package' => 'Input filters',
        'version' => '6.x-1.13',
        'project' => 'image_resize_filter',
        'datestamp' => '1313565118',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'image_resize_filter',
      'version' => '6.x-1.13',
    ),
    'imce' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/imce/imce.module',
      'name' => 'imce',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6201',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IMCE',
        'description' => 'An image/file uploader and browser supporting personal directories and user quota.',
        'core' => '6.x',
        'version' => '6.x-2.2',
        'project' => 'imce',
        'datestamp' => '1307386316',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'imce',
      'version' => '6.x-2.2',
    ),
    'imce_dir_man' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/imce_tools/modules/imce_dir_man/imce_dir_man.module',
      'name' => 'imce_dir_man',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IMCE Directory Manager',
        'description' => 'Allows for per user management of directory restrictions in IMCE',
        'dependencies' => 
        array (
          0 => 'imce',
        ),
        'package' => 'Other',
        'core' => '6.x',
        'version' => '6.x-1.1',
        'project' => 'imce_tools',
        'datestamp' => '1299006367',
        'php' => '4.3.5',
      ),
      'project' => 'imce_tools',
      'version' => '6.x-1.1',
    ),
    'imce_file_path' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/imce_tools/modules/imce_file_path/imce_file_path.module',
      'name' => 'imce_file_path',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IMCE File Path',
        'description' => 'Provides a status bar like interface for displaying the file path of the currently selected file',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'imce',
        ),
        'version' => '6.x-1.1',
        'project' => 'imce_tools',
        'datestamp' => '1299006367',
        'php' => '4.3.5',
      ),
      'project' => 'imce_tools',
      'version' => '6.x-1.1',
    ),
    'imce_search' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/imce_tools/modules/imce_search/imce_search.module',
      'name' => 'imce_search',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IMCE Search',
        'description' => 'Provides an autocomplete search box for finding files through the IMCE browser',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'imce',
        ),
        'version' => '6.x-1.1',
        'project' => 'imce_tools',
        'datestamp' => '1299006367',
        'php' => '4.3.5',
      ),
      'project' => 'imce_tools',
      'version' => '6.x-1.1',
    ),
    'imce_wysiwyg' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/imce_wysiwyg/imce_wysiwyg.module',
      'name' => 'imce_wysiwyg',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IMCE Wysiwyg API bridge',
        'description' => 'Makes IMCE available as plugin for client-side editors integrated via Wysiwyg API.',
        'package' => 'User interface',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'imce',
          1 => 'wysiwyg',
        ),
        'version' => '6.x-1.1',
        'project' => 'imce_wysiwyg',
        'datestamp' => '1268433606',
        'php' => '4.3.5',
      ),
      'project' => 'imce_wysiwyg',
      'version' => '6.x-1.1',
    ),
    'invite' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/invite/invite.module',
      'name' => 'invite',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6200',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Invite',
        'description' => 'Allow your users to send and track invitations to join your site.',
        'dependencies' => 
        array (
          0 => 'token',
        ),
        'package' => 'Invite',
        'core' => '6.x',
        'version' => '6.x-2.0-beta3',
        'project' => 'invite',
        'datestamp' => '1304068019',
        'php' => '4.3.5',
      ),
      'project' => 'invite',
      'version' => '6.x-2.0-beta3',
    ),
    'invite_cancel_account' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/invite/invite_cancel_account.module',
      'name' => 'invite_cancel_account',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Cancel User Accounts',
        'description' => 'Allows your users to terminate user accounts by withdrawing their invitation. WARNING - This module is put into effect when you enable it.',
        'dependencies' => 
        array (
          0 => 'invite',
        ),
        'package' => 'Invite',
        'core' => '6.x',
        'version' => '6.x-2.0-beta3',
        'project' => 'invite',
        'datestamp' => '1304068019',
        'php' => '4.3.5',
      ),
      'project' => 'invite',
      'version' => '6.x-2.0-beta3',
    ),
    'invite_stats' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/invite/invite_stats.module',
      'name' => 'invite_stats',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Invite Statistics',
        'description' => 'Displays some statistics about sent invitations.',
        'dependencies' => 
        array (
          0 => 'invite',
        ),
        'package' => 'Invite',
        'core' => '6.x',
        'version' => '6.x-2.0-beta3',
        'project' => 'invite',
        'datestamp' => '1304068019',
        'php' => '4.3.5',
      ),
      'project' => 'invite',
      'version' => '6.x-2.0-beta3',
    ),
    'invite_views' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/invite/invite_views/invite_views.module',
      'name' => 'invite_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Invite Views integration',
        'description' => 'Invite backend for Views module',
        'core' => '6.x',
        'version' => '6.x-2.0-beta3',
        'dependencies' => 
        array (
          0 => 'invite',
          1 => 'views',
        ),
        'package' => 'Invite',
        'project' => 'invite',
        'datestamp' => '1304068019',
        'php' => '4.3.5',
      ),
      'project' => 'invite',
      'version' => '6.x-2.0-beta3',
    ),
    'jcalendar' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'jcalendar',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'jcarousel' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'jcarousel',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'job_queue' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'job_queue',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '3',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'jplayer' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/custom/jplayer/jplayer.module',
      'name' => 'jplayer',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'jPlayer',
        'description' => 'Provides an HTML5-compatible with Flash-fallback audio player.',
        'package' => 'User interface',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'filefield',
        ),
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'jquery_popup' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'jquery_popup',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'jquery_ui' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/jquery_ui/jquery_ui.module',
      'name' => 'jquery_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'jQuery UI',
        'description' => 'Provides the jQuery UI plug-in to other Drupal modules.',
        'package' => 'User interface',
        'core' => '6.x',
        'version' => '6.x-1.5',
        'project' => 'jquery_ui',
        'datestamp' => '1308323216',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'jquery_ui',
      'version' => '6.x-1.5',
    ),
    'jquery_update' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/jquery_update/jquery_update.module',
      'name' => 'jquery_update',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6200',
      'weight' => '99',
      'info' => 
      array (
        'name' => 'jQuery Update',
        'description' => 'Updates Drupal to use the latest version of jQuery.',
        'package' => 'User interface',
        'core' => '6.x',
        'version' => '6.x-2.x-dev',
        'project' => 'jquery_update',
        'datestamp' => '1303258490',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'jquery_update',
      'version' => '6.x-2.x-dev',
    ),
    'ladya_migration' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'ladya_migration',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'libraries' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/libraries/libraries.module',
      'name' => 'libraries',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Libraries',
        'description' => 'Allows version dependent and shared usage of external libraries.',
        'core' => '6.x',
        'version' => '6.x-1.0',
        'project' => 'libraries',
        'datestamp' => '1296096157',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'libraries',
      'version' => '6.x-1.0',
    ),
    'lightbox2' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'lightbox2',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'link' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/link/link.module',
      'name' => 'link',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Link',
        'description' => 'Defines simple link field types.',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'link',
        'datestamp' => '1276539609',
        'php' => '4.3.5',
      ),
      'project' => 'link',
      'version' => '6.x-2.9',
    ),
    'locale' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/locale/locale.module',
      'name' => 'locale',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Locale',
        'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'location' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/location/location.module',
      'name' => 'location',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6309',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Location',
        'package' => 'Location',
        'description' => 'The location module allows you to associate a geographic location with content and users. Users can do proximity searches by postal code.  This is useful for organizing communities that have a geographic presence.',
        'core' => '6.x',
        'version' => '6.x-3.1',
        'project' => 'location',
        'datestamp' => '1278427508',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'location',
      'version' => '6.x-3.1',
    ),
    'location_addanother' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/location/contrib/location_addanother/location_addanother.module',
      'name' => 'location_addanother',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Location Add Another',
        'description' => 'Allows you to quickly add locations directly from a node without having to click \'edit\' first.',
        'dependencies' => 
        array (
          0 => 'location',
          1 => 'location_node',
        ),
        'package' => 'Location',
        'core' => '6.x',
        'version' => '6.x-3.1',
        'project' => 'location',
        'datestamp' => '1278427508',
        'php' => '4.3.5',
      ),
      'project' => 'location',
      'version' => '6.x-3.1',
    ),
    'location_cck' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/location/contrib/location_cck/location_cck.module',
      'name' => 'location_cck',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6301',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Location CCK',
        'description' => 'Defines a Location field type.',
        'core' => '6.x',
        'package' => 'CCK',
        'dependencies' => 
        array (
          0 => 'location',
          1 => 'content',
        ),
        'version' => '6.x-3.1',
        'project' => 'location',
        'datestamp' => '1278427508',
        'php' => '4.3.5',
      ),
      'project' => 'location',
      'version' => '6.x-3.1',
    ),
    'location_fax' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/location/contrib/location_fax/location_fax.module',
      'name' => 'location_fax',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Location Fax',
        'package' => 'Location',
        'description' => 'Allows you to add a fax number to a location.',
        'dependencies' => 
        array (
          0 => 'location',
        ),
        'core' => '6.x',
        'version' => '6.x-3.1',
        'project' => 'location',
        'datestamp' => '1278427508',
        'php' => '4.3.5',
      ),
      'project' => 'location',
      'version' => '6.x-3.1',
    ),
    'location_generate' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/location/contrib/location_generate/location_generate.module',
      'name' => 'location_generate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Location Generate',
        'description' => 'Bulk assign random latitude and longitudes to nodes.',
        'package' => 'Development',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'devel_generate',
          1 => 'location',
        ),
        'version' => '6.x-3.1',
        'project' => 'location',
        'datestamp' => '1278427508',
        'php' => '4.3.5',
      ),
      'project' => 'location',
      'version' => '6.x-3.1',
    ),
    'location_node' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/location/location_node.module',
      'name' => 'location_node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node Locations',
        'description' => 'Associate locations with nodes.',
        'dependencies' => 
        array (
          0 => 'location',
        ),
        'package' => 'Location',
        'core' => '6.x',
        'version' => '6.x-3.1',
        'project' => 'location',
        'datestamp' => '1278427508',
        'php' => '4.3.5',
      ),
      'project' => 'location',
      'version' => '6.x-3.1',
    ),
    'location_phone' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/location/contrib/location_phone/location_phone.module',
      'name' => 'location_phone',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Location Phone',
        'package' => 'Location',
        'description' => 'Allows you to add a phone number to a location.',
        'dependencies' => 
        array (
          0 => 'location',
        ),
        'core' => '6.x',
        'version' => '6.x-3.1',
        'project' => 'location',
        'datestamp' => '1278427508',
        'php' => '4.3.5',
      ),
      'project' => 'location',
      'version' => '6.x-3.1',
    ),
    'location_search' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/location/contrib/location_search/location_search.module',
      'name' => 'location_search',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Location Search',
        'package' => 'Location',
        'description' => 'Advanced search page for locations.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'search',
          1 => 'location',
          2 => 'gmap',
        ),
        'version' => '6.x-3.1',
        'project' => 'location',
        'datestamp' => '1278427508',
        'php' => '4.3.5',
      ),
      'project' => 'location',
      'version' => '6.x-3.1',
    ),
    'location_taxonomy' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/location/contrib/location_taxonomy/location_taxonomy.module',
      'name' => 'location_taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Location Taxonomy',
        'description' => 'Associate locations with taxonomy terms.',
        'dependencies' => 
        array (
          0 => 'location',
          1 => 'taxonomy',
        ),
        'package' => 'Location',
        'core' => '6.x',
        'version' => '6.x-3.1',
        'project' => 'location',
        'datestamp' => '1278427508',
        'php' => '4.3.5',
      ),
      'project' => 'location',
      'version' => '6.x-3.1',
    ),
    'location_user' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/location/location_user.module',
      'name' => 'location_user',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User Locations',
        'description' => 'Associate locations with users.',
        'dependencies' => 
        array (
          0 => 'location',
        ),
        'package' => 'Location',
        'core' => '6.x',
        'version' => '6.x-3.1',
        'project' => 'location',
        'datestamp' => '1278427508',
        'php' => '4.3.5',
      ),
      'project' => 'location',
      'version' => '6.x-3.1',
    ),
    'logged_in' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/util/contribs/logged_in/logged_in.module',
      'name' => 'logged_in',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Logged_In',
        'description' => 'Adds a "Logged In As" block.',
        'dependencies' => 
        array (
          0 => 'util',
          1 => 'block',
        ),
        'package' => 'Util',
        'core' => '6.x',
        'version' => '6.x-3.0',
        'project' => 'util',
        'datestamp' => '1288295149',
        'php' => '4.3.5',
      ),
      'project' => 'util',
      'version' => '6.x-3.0',
    ),
    'logintoboggan' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/logintoboggan/logintoboggan.module',
      'name' => 'logintoboggan',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'LoginToboggan',
        'description' => 'Improves Drupal\'s login system.',
        'core' => '6.x',
        'version' => '6.x-1.9',
        'project' => 'logintoboggan',
        'datestamp' => '1302094616',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'logintoboggan',
      'version' => '6.x-1.9',
    ),
    'logintoboggan_rules' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/logintoboggan/contrib/logintoboggan_rules/logintoboggan_rules.module',
      'name' => 'logintoboggan_rules',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'LoginToboggan Rules Integration',
        'description' => 'Integrates LoginToboggan with Rules module',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'logintoboggan',
          1 => 'rules',
        ),
        'version' => '6.x-1.9',
        'project' => 'logintoboggan',
        'datestamp' => '1302094616',
        'php' => '4.3.5',
      ),
      'project' => 'logintoboggan',
      'version' => '6.x-1.9',
    ),
    'login_destination' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'login_destination',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'log_clear' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/util/contribs/log_clear/log_clear.module',
      'name' => 'log_clear',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Log Clear',
        'description' => 'Adds a clearing function to "Recent log" report.',
        'dependencies' => 
        array (
          0 => 'util',
          1 => 'dblog',
        ),
        'package' => 'Util',
        'core' => '6.x',
        'version' => '6.x-3.0',
        'project' => 'util',
        'datestamp' => '1288295149',
        'php' => '4.3.5',
      ),
      'project' => 'util',
      'version' => '6.x-3.0',
    ),
    'lutman' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/swftools/lutman/lutman.module',
      'name' => 'lutman',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'jQuery Flash plugin',
        'description' => 'Enables support for the jQuery Flash plugin embedding method.',
        'package' => 'SWF Tools',
        'dependencies' => 
        array (
          0 => 'swftools',
        ),
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'swftools',
        'datestamp' => '1240829764',
        'php' => '4.3.5',
      ),
      'project' => 'swftools',
      'version' => '6.x-2.5',
    ),
    'mass_contact' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'mass_contact',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'mcnplayer' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'mcnplayer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'mcnreports' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'mcnreports',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'mcn_email_redirect' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'mcn_email_redirect',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'mcn_ppr' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/custom/mcn_ppr/mcn_ppr.module',
      'name' => 'mcn_ppr',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Purchased Products Report',
        'description' => 'Generate CSV report of product purchases',
        'package' => 'MCN',
        'core' => '6.x',
        'datestamp' => '1291152546',
        'project' => 'mcn_ppr',
        'project status url' => 'http://features.devmcn.com/fserver',
        'version' => '6.x-1.0',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'mcn_ppr',
      'version' => '6.x-1.0',
    ),
    'mcn_salt' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'mcn_salt',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'mcn_social_form_alter' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/custom/mcn_social_form_alter/mcn_social_form_alter.module',
      'name' => 'mcn_social_form_alter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'MCN Social Form Alter',
        'description' => 'Standard Hook Form Alters for CCK Forms on Social Sites',
        'core' => '6.x',
        'datestamp' => '',
        'project' => 'mcn_social_form_alter',
        'project status url' => 'http://features.devmcn.com/fserver',
        'version' => '6.x-2.0',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'mcn_social_form_alter',
      'version' => '6.x-2.0',
    ),
    'media_bitsontherun' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/media_bitsontherun/media_bitsontherun.module',
      'name' => 'media_bitsontherun',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Media: Bits On The Run',
        'description' => 'Embedded Video Field provider file for BitsOnTheRun.com.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'emvideo',
        ),
        'package' => 'Media',
        'version' => '6.x-1.0',
        'project' => 'media_bitsontherun',
        'datestamp' => '1247854287',
        'php' => '4.3.5',
      ),
      'project' => 'media_bitsontherun',
      'version' => '6.x-1.0',
    ),
    'media_mtv' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/media_mtv/media_mtv.module',
      'name' => 'media_mtv',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Media: MTV Music',
        'description' => 'Embedded Audio Field provider file for MTV Music.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'emvideo',
        ),
        'package' => 'Media',
        'version' => '6.x-1.x-dev',
        'project' => 'media_mtv',
        'datestamp' => '1298619622',
        'php' => '4.3.5',
      ),
      'project' => 'media_mtv',
      'version' => '6.x-1.x-dev',
    ),
    'media_vimeo' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/media_vimeo/media_vimeo.module',
      'name' => 'media_vimeo',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Media: Vimeo',
        'description' => 'Provides Vimeo support to the Embedded Media Field module.',
        'package' => 'Media',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'emfield',
          1 => 'emvideo',
        ),
        'version' => '6.x-1.1',
        'project' => 'media_vimeo',
        'datestamp' => '1285276865',
        'php' => '4.3.5',
      ),
      'project' => 'media_vimeo',
      'version' => '6.x-1.1',
    ),
    'media_youtube' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/media_youtube/media_youtube.module',
      'name' => 'media_youtube',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6014',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Media: YouTube',
        'description' => 'Provides YouTube support to the Embedded Media Field module.',
        'package' => 'Media',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'emfield',
          1 => 'emvideo',
        ),
        'version' => '6.x-1.3',
        'project' => 'media_youtube',
        'datestamp' => '1296846508',
        'php' => '4.3.5',
      ),
      'project' => 'media_youtube',
      'version' => '6.x-1.3',
    ),
    'menu' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/menu/menu.module',
      'name' => 'menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu',
        'description' => 'Allows administrators to customize the site navigation menu.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'menu_attributes' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'menu_attributes',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'menu_block' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/menu_block/menu_block.module',
      'name' => 'menu_block',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu Block',
        'description' => 'Provides configurable blocks of menu items.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'menu',
        ),
        'version' => '6.x-2.4',
        'project' => 'menu_block',
        'datestamp' => '1297370223',
        'php' => '4.3.5',
      ),
      'project' => 'menu_block',
      'version' => '6.x-2.4',
    ),
    'menu_per_role' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/menu_per_role/menu_per_role.module',
      'name' => 'menu_per_role',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6004',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu Per Role',
        'description' => 'Allows restricting access to menu items per role.',
        'dependencies' => 
        array (
          0 => 'menu',
        ),
        'package' => 'Menu',
        'core' => '6.x',
        'version' => '6.x-1.10',
        'project' => 'menu_per_role',
        'datestamp' => '1309207618',
        'php' => '4.3.5',
      ),
      'project' => 'menu_per_role',
      'version' => '6.x-1.10',
    ),
    'migrate' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'migrate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'migrate_example' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'migrate_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'migrate_example_oracle' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'migrate_example_oracle',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'migrate_extras' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'migrate_extras',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'migrate_extras_date' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'migrate_extras_date',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'migrate_extras_pathauto' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'migrate_extras_pathauto',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'migrate_ui' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'migrate_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'module_weights' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/util/module_weights.module',
      'name' => 'module_weights',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Module Weights',
        'description' => 'Allows module weights to be viewed and edited.',
        'dependencies' => 
        array (
          0 => 'util',
        ),
        'package' => 'Util',
        'core' => '6.x',
        'version' => '6.x-3.0',
        'project' => 'util',
        'datestamp' => '1288295149',
        'php' => '4.3.5',
      ),
      'project' => 'util',
      'version' => '6.x-3.0',
    ),
    'mollom' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/mollom/mollom.module',
      'name' => 'mollom',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6121',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mollom',
        'description' => 'Automatically moderates user-submitted content and protects your site from spam and profanity.',
        'core' => '6.x',
        'version' => '6.x-1.16',
        'project' => 'mollom',
        'datestamp' => '1310217719',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'mollom',
      'version' => '6.x-1.16',
    ),
    'mollom_test' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/mollom/tests/mollom_test.module',
      'name' => 'mollom_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mollom Test',
        'description' => 'Testing module for Mollom functionality. Do not enable.',
        'core' => '6.x',
        'package' => 'Testing',
        'hidden' => true,
        'php' => '5',
        'version' => '6.x-1.16',
        'project' => 'mollom',
        'datestamp' => '1310217719',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'mollom',
      'version' => '6.x-1.16',
    ),
    'mozes' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'mozes',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'mp3player' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/mp3player/mp3player.module',
      'name' => 'mp3player',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '1',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'MP3 Player',
        'description' => 'A module to integrate the 1pixelout player into Drupal.',
        'core' => '6.x',
        'package' => 'Media',
        'version' => '6.x-1.x-dev',
        'project' => 'mp3player',
        'datestamp' => '1299111022',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'mp3player',
      'version' => '6.x-1.x-dev',
    ),
    'nd' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/gaither.com/modules/nd/nd.module',
      'name' => 'nd',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '2',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node displays',
        'description' => 'Extended node build and display modes',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'ds',
        ),
        'package' => 'Display suite',
        'version' => '6.x-2.4',
        'project' => 'nd',
        'datestamp' => '1292540633',
        'php' => '4.3.5',
      ),
      'project' => 'nd',
      'version' => '6.x-2.4',
    ),
    'ndtest' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/gaither.com/modules/nd/tests/ndtest.module',
      'name' => 'ndtest',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node displays TEST',
        'description' => 'Test module for Node Displays, do not enable this on production sites.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'ds',
          1 => 'ds_ui',
        ),
        'package' => 'Display suite',
        'version' => '6.x-2.4',
        'project' => 'nd',
        'datestamp' => '1292540633',
        'php' => '4.3.5',
      ),
      'project' => 'nd',
      'version' => '6.x-2.4',
    ),
    'nd_cck' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/gaither.com/modules/nd_contrib/nd_cck/nd_cck.module',
      'name' => 'nd_cck',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ND CCK',
        'description' => 'CCK support for node displays',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'nd',
          1 => 'content',
        ),
        'package' => 'Display suite',
        'version' => '6.x-2.4',
        'project' => 'nd_contrib',
        'datestamp' => '1292540634',
        'php' => '4.3.5',
      ),
      'project' => 'nd_contrib',
      'version' => '6.x-2.4',
    ),
    'nd_context_bm' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/gaither.com/modules/nd_contrib/nd_context_bm/nd_context_bm.module',
      'name' => 'nd_context_bm',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ND context',
        'dependencies' => 
        array (
          0 => 'context',
          1 => 'ds',
        ),
        'description' => 'Allow nd-build modes to act as conditions and triggers for contexts',
        'package' => 'Display suite',
        'core' => '6.x',
        'version' => '6.x-2.4',
        'project' => 'nd_contrib',
        'datestamp' => '1292540634',
        'php' => '4.3.5',
      ),
      'project' => 'nd_contrib',
      'version' => '6.x-2.4',
    ),
    'nd_faq' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/gaither.com/modules/nd_contrib/nd_faq/nd_faq.module',
      'name' => 'nd_faq',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ND Faq',
        'description' => 'FAQ support for Node Displays',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'nd',
          1 => 'faq',
        ),
        'package' => 'Display suite',
        'version' => '6.x-2.4',
        'project' => 'nd_contrib',
        'datestamp' => '1292540634',
        'php' => '4.3.5',
      ),
      'project' => 'nd_contrib',
      'version' => '6.x-2.4',
    ),
    'nd_fivestar' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/gaither.com/modules/nd_contrib/nd_fivestar/nd_fivestar.module',
      'name' => 'nd_fivestar',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ND Fivestar',
        'description' => 'Fivestar support for node displays',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'nd',
          1 => 'fivestar',
        ),
        'package' => 'Display suite',
        'version' => '6.x-2.4',
        'project' => 'nd_contrib',
        'datestamp' => '1292540634',
        'php' => '4.3.5',
      ),
      'project' => 'nd_contrib',
      'version' => '6.x-2.4',
    ),
    'nd_location' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/gaither.com/modules/nd_contrib/nd_location/nd_location.module',
      'name' => 'nd_location',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ND location',
        'description' => 'Location support for node displays',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'nd',
          1 => 'location',
        ),
        'package' => 'Display suite',
        'version' => '6.x-2.4',
        'project' => 'nd_contrib',
        'datestamp' => '1292540634',
        'php' => '4.3.5',
      ),
      'project' => 'nd_contrib',
      'version' => '6.x-2.4',
    ),
    'nd_search' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/gaither.com/modules/nd_contrib/nd_search/nd_search.module',
      'name' => 'nd_search',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ND search',
        'description' => 'Search support for node displays',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'nd',
          1 => 'search',
        ),
        'package' => 'Display suite',
        'version' => '6.x-2.4',
        'project' => 'nd_contrib',
        'datestamp' => '1292540634',
        'php' => '4.3.5',
      ),
      'project' => 'nd_contrib',
      'version' => '6.x-2.4',
    ),
    'nd_switch_bm' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/gaither.com/modules/nd_contrib/nd_switch_bm/nd_switch_bm.module',
      'name' => 'nd_switch_bm',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ND switch build modes',
        'description' => 'Switch the full build mode on a per-node basis',
        'package' => 'Display suite',
        'dependencies' => 
        array (
          0 => 'ds',
        ),
        'core' => '6.x',
        'version' => '6.x-2.4',
        'project' => 'nd_contrib',
        'datestamp' => '1292540634',
        'php' => '4.3.5',
      ),
      'project' => 'nd_contrib',
      'version' => '6.x-2.4',
    ),
    'nd_webform' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/gaither.com/modules/nd_contrib/nd_webform/nd_webform.module',
      'name' => 'nd_webform',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ND Webform',
        'description' => 'Webform support for Node Displays',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'nd',
          1 => 'webform',
        ),
        'package' => 'Display suite',
        'version' => '6.x-2.4',
        'project' => 'nd_contrib',
        'datestamp' => '1292540634',
        'php' => '4.3.5',
      ),
      'project' => 'nd_contrib',
      'version' => '6.x-2.4',
    ),
    'news' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/features/news/news.module',
      'name' => 'news',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'scheduler',
          2 => 'site_administration',
          3 => 'views',
          4 => 'views_feature',
        ),
        'description' => 'News Module',
        'features' => 
        array (
          'node' => 
          array (
            0 => 'news',
          ),
          'user_permission' => 
          array (
            0 => 'administer scheduler',
            1 => 'create news content',
            2 => 'delete any news content',
            3 => 'delete own news content',
            4 => 'edit any news content',
            5 => 'edit own news content',
            6 => 'schedule (un)publishing of nodes',
          ),
          'views' => 
          array (
            0 => 'News',
          ),
          'views_api' => 
          array (
            0 => 'api:2',
          ),
        ),
        'name' => 'News',
        'package' => 'Features',
        'project' => 'news',
        'project status url' => 'http://features.devmcn.com/fserver',
        'version' => '6.x-2.0',
        'php' => '4.3.5',
      ),
      'project' => 'news',
      'version' => '6.x-2.0',
    ),
    'nice_menus' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/nice_menus/nice_menus.module',
      'name' => 'nice_menus',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Nice Menus',
        'description' => 'CSS/jQuery drop-down, drop-right and drop-left menus to be placed in blocks',
        'dependencies' => 
        array (
          0 => 'menu',
        ),
        'core' => '6.x',
        'version' => '6.x-2.1',
        'project' => 'nice_menus',
        'datestamp' => '1287318691',
        'php' => '4.3.5',
      ),
      'project' => 'nice_menus',
      'version' => '6.x-2.1',
    ),
    'node' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/node/node.module',
      'name' => 'node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node',
        'description' => 'Allows content to be submitted to the site and displayed on pages.',
        'package' => 'Core - required',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'nodereference' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/cck/modules/nodereference/nodereference.module',
      'name' => 'nodereference',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node Reference',
        'description' => 'Defines a field type for referencing one node from another.',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'text',
          2 => 'optionwidgets',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
    ),
    'nodereference_url' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/nodereference_url/nodereference_url.module',
      'name' => 'nodereference_url',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6100',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node Reference URL Widget',
        'description' => 'Adds an additional widget to the CCK Node Reference field that prepopulates a reference by the URL.',
        'dependencies' => 
        array (
          0 => 'nodereference',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-1.11',
        'project' => 'nodereference_url',
        'datestamp' => '1305427016',
        'php' => '4.3.5',
      ),
      'project' => 'nodereference_url',
      'version' => '6.x-1.11',
    ),
    'node_export' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'node_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'node_export_file' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'node_export_file',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'node_import' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/gaither.com/modules/node_import/node_import.module',
      'name' => 'node_import',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6102',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node import',
        'description' => 'Allows users to import node content from a CSV or TSV file.',
        'package' => 'Development',
        'core' => '6.x',
        'php' => '5',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'version' => '6.x-1.1',
        'project' => 'node_import',
        'datestamp' => '1300878969',
      ),
      'project' => 'node_import',
      'version' => '6.x-1.1',
    ),
    'notify' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'notify',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'number' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/cck/modules/number/number.module',
      'name' => 'number',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Number',
        'description' => 'Defines numeric field types.',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
    ),
    'oauth' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/oauth/oauth.module',
      'name' => 'oauth',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'description' => 'Enable the world wide standard OAuth for authentication.',
        'name' => 'OAuth',
        'dependencies' => 
        array (
        ),
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'oauth_test' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/oauth/oauth_test/oauth_test.module',
      'name' => 'oauth_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'description' => 'A generic client that might be used by developers that want to integrate their modules with OAuth.',
        'name' => 'OAuth Client Test',
        'dependencies' => 
        array (
        ),
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'og' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'og',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'og_access' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'og_access',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'og_actions' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'og_actions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'og_menu' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'og_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'og_notifications' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'og_notifications',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'og_user_roles' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'og_user_roles',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'og_views' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'og_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'onepixelout' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/swftools/onepixelout/onepixelout.module',
      'name' => 'onepixelout',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => '1 Pixel Out',
        'description' => 'Enables support for the 1 Pixel Out MP3 player.',
        'package' => 'SWF Tools',
        'dependencies' => 
        array (
          0 => 'swftools',
        ),
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'swftools',
        'datestamp' => '1240829764',
        'php' => '4.3.5',
      ),
      'project' => 'swftools',
      'version' => '6.x-2.5',
    ),
    'openid' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/openid/openid.module',
      'name' => 'openid',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID',
        'description' => 'Allows users to log into your site using OpenID.',
        'version' => '6.22',
        'package' => 'Core - optional',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'optionwidgets' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/cck/modules/optionwidgets/optionwidgets.module',
      'name' => 'optionwidgets',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Option Widgets',
        'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
    ),
    'page_manager' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/ctools/page_manager/page_manager.module',
      'name' => 'page_manager',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '99',
      'info' => 
      array (
        'name' => 'Page manager',
        'description' => 'Provides a UI and API to manage pages within the site.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '6.x-1.8',
        'project' => 'ctools',
        'datestamp' => '1288393844',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.8',
    ),
    'panels' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'panels',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'panels_ipe' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'panels_ipe',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'panels_mini' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'panels_mini',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'panels_node' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'panels_node',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '11',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'panels_stylizer' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'panels_stylizer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'path' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/path/path.module',
      'name' => 'path',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Path',
        'description' => 'Allows users to rename URLs.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'pathauto' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/pathauto/pathauto.module',
      'name' => 'pathauto',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '7',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'Pathauto',
        'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
        'dependencies' => 
        array (
          0 => 'path',
          1 => 'token',
        ),
        'core' => '6.x',
        'recommends' => 
        array (
          0 => 'path_redirect',
        ),
        'version' => '6.x-1.5',
        'project' => 'pathauto',
        'datestamp' => '1286469664',
        'php' => '4.3.5',
      ),
      'project' => 'pathauto',
      'version' => '6.x-1.5',
    ),
    'path_alias_cache' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/path_alias_cache/path_alias_cache.module',
      'name' => 'path_alias_cache',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Path alias cache',
        'description' => 'A path alias implementation which adds a cache to the core version.',
        'core' => '6.x',
        'package' => 'Pressflow',
        'dependencies' => 
        array (
        ),
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'path_redirect' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/path_redirect/path_redirect.module',
      'name' => 'path_redirect',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6103',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Path redirect',
        'description' => 'Redirect users from one URL to another.',
        'core' => '6.x',
        'enhances' => 
        array (
          0 => 'pathauto',
        ),
        'suggests' => 
        array (
          0 => 'global_redirect',
        ),
        'recommends' => 
        array (
          0 => 'elements',
        ),
        'version' => '6.x-1.0-rc2',
        'project' => 'path_redirect',
        'datestamp' => '1291583783',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'path_redirect',
      'version' => '6.x-1.0-rc2',
    ),
    'path_redirect_generate' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/path_redirect/generate/path_redirect_generate.module',
      'name' => 'path_redirect_generate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Path redirect generate',
        'description' => 'Bulk create redirects for testing.',
        'package' => 'Development',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'path_redirect',
          1 => 'devel_generate',
        ),
        'tags' => 
        array (
          0 => 'developer',
        ),
        'version' => '6.x-1.0-rc2',
        'project' => 'path_redirect',
        'datestamp' => '1291583783',
        'php' => '4.3.5',
      ),
      'project' => 'path_redirect',
      'version' => '6.x-1.0-rc2',
    ),
    'patterns' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'patterns',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'performance' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'performance',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'performance_event' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/gaither.com/modules/performance_event/performance_event.module',
      'name' => 'performance_event',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Performance Event',
        'description' => 'Provides Performance Event and Meet and Greet funtionality.',
        'core' => '6.x',
        'package' => 'MCN Modules',
        'version' => '6.x-1.0',
        'project status url' => 'http://features.devmcn.com/fserver',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'content',
          2 => 'content_copy',
          3 => 'date',
          4 => 'location',
          5 => 'fieldgroup',
          6 => 'nodereference',
          7 => 'text',
          8 => 'link',
          9 => 'number',
          10 => 'optionwidgets',
          11 => 'date_popup',
          12 => 'userreference',
          13 => 'content_profile_registration',
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.x-1.0',
    ),
    'perms_fieldsets' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/util/perms_fieldsets.module',
      'name' => 'perms_fieldsets',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Access Permissions Fieldsets Manager',
        'description' => 'Set default collapsed/expanded state for Access Permissions',
        'dependencies' => 
        array (
          0 => 'util',
        ),
        'package' => 'Util',
        'core' => '6.x',
        'version' => '6.x-3.0',
        'project' => 'util',
        'datestamp' => '1288295149',
        'php' => '4.3.5',
      ),
      'project' => 'util',
      'version' => '6.x-3.0',
    ),
    'php' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/php/php.module',
      'name' => 'php',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'PHP filter',
        'description' => 'Allows embedded PHP code/snippets to be evaluated.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'ping' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/ping/ping.module',
      'name' => 'ping',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Ping',
        'description' => 'Alerts other sites when your site has been updated.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'pm_block_user' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/privatemsg/pm_block_user/pm_block_user.module',
      'name' => 'pm_block_user',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Block user messages',
        'description' => 'Allows users to block other users from sending them messages.',
        'package' => 'Mail',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'privatemsg',
        ),
        'version' => '6.x-1.5',
        'project' => 'privatemsg',
        'datestamp' => '1308483720',
        'php' => '4.3.5',
      ),
      'project' => 'privatemsg',
      'version' => '6.x-1.5',
    ),
    'pm_email_notify' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/privatemsg/pm_email_notify/pm_email_notify.module',
      'name' => 'pm_email_notify',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Privatemsg Email Notification',
        'description' => 'Notifies users about new Private Messages via Email.',
        'package' => 'Mail',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'privatemsg',
        ),
        'version' => '6.x-1.5',
        'project' => 'privatemsg',
        'datestamp' => '1308483720',
        'php' => '4.3.5',
      ),
      'project' => 'privatemsg',
      'version' => '6.x-1.5',
    ),
    'poll' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/poll/poll.module',
      'name' => 'poll',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Poll',
        'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'privatemsg' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/privatemsg/privatemsg.module',
      'name' => 'privatemsg',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6007',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Private messages',
        'description' => 'Allow private messages between users.',
        'package' => 'Mail',
        'core' => '6.x',
        'version' => '6.x-1.5',
        'project' => 'privatemsg',
        'datestamp' => '1308483720',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'privatemsg',
      'version' => '6.x-1.5',
    ),
    'privatemsg_filter' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/privatemsg/privatemsg_filter/privatemsg_filter.module',
      'name' => 'privatemsg_filter',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Privatemsg filter',
        'description' => 'Allow users to filter messages using tags or other criteria.',
        'package' => 'Mail',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'privatemsg',
        ),
        'version' => '6.x-1.5',
        'project' => 'privatemsg',
        'datestamp' => '1308483720',
        'php' => '4.3.5',
      ),
      'project' => 'privatemsg',
      'version' => '6.x-1.5',
    ),
    'profile' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/profile/profile.module',
      'name' => 'profile',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Profile',
        'description' => 'Supports configurable user profiles.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'quicktabs' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/quicktabs/quicktabs.module',
      'name' => 'quicktabs',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6300',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Quick Tabs',
        'description' => 'Create blocks of tabbed views, blocks and nodes.',
        'core' => '6.x',
        'version' => '6.x-3.0',
        'project' => 'quicktabs',
        'datestamp' => '1312171920',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'quicktabs',
      'version' => '6.x-3.0',
    ),
    'quote' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'quote',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'reference_views' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'reference_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'reverse_node_reference' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/reverse_node_reference/reverse_node_reference.module',
      'name' => 'reverse_node_reference',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Reverse Node Reference',
        'description' => 'Enhances Views with reverse relationships for Node Reference fields.',
        'dependencies' => 
        array (
          0 => 'nodereference',
          1 => 'views',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-1.0',
        'project' => 'reverse_node_reference',
        'datestamp' => '1279266009',
        'php' => '4.3.5',
      ),
      'project' => 'reverse_node_reference',
      'version' => '6.x-1.0',
    ),
    'rpx' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'rpx',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6005',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'rpx_core' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/rpx/rpx_core.module',
      'name' => 'rpx_core',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Janrain Engage Core',
        'description' => 'Core sign-in functionality for Janrain Engage.',
        'package' => 'Janrain Engage',
        'core' => '6.x',
        'version' => '6.x-2.1',
        'project' => 'rpx',
        'datestamp' => '1312817531',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'rpx',
      'version' => '6.x-2.1',
    ),
    'rpx_rules' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/rpx/rpx_rules.module',
      'name' => 'rpx_rules',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Janrain Engage Rules integration',
        'description' => 'Provides integration of Janrain Engage with rules',
        'dependencies' => 
        array (
          0 => 'rpx_core',
          1 => 'rpx_widgets',
          2 => 'rules',
        ),
        'package' => 'Janrain Engage',
        'core' => '6.x',
        'version' => '6.x-2.1',
        'project' => 'rpx',
        'datestamp' => '1312817531',
        'php' => '4.3.5',
      ),
      'project' => 'rpx',
      'version' => '6.x-2.1',
    ),
    'rpx_ui' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/rpx/rpx_ui.module',
      'name' => 'rpx_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6201',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Janrain Engage UI',
        'description' => 'User interface for Janrain Engage.',
        'dependencies' => 
        array (
          0 => 'rpx_core',
          1 => 'rpx_widgets',
        ),
        'package' => 'Janrain Engage',
        'core' => '6.x',
        'version' => '6.x-2.1',
        'project' => 'rpx',
        'datestamp' => '1312817531',
        'php' => '4.3.5',
      ),
      'project' => 'rpx',
      'version' => '6.x-2.1',
    ),
    'rpx_widgets' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/rpx/rpx_widgets.module',
      'name' => 'rpx_widgets',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Janrain Engage Widgets',
        'description' => 'Engage sign-in and social widgets integration.',
        'dependencies' => 
        array (
          0 => 'rpx_core',
        ),
        'package' => 'Janrain Engage',
        'core' => '6.x',
        'version' => '6.x-2.1',
        'project' => 'rpx',
        'datestamp' => '1312817531',
        'php' => '4.3.5',
      ),
      'project' => 'rpx',
      'version' => '6.x-2.1',
    ),
    'rss_aggregator' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'rss_aggregator',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'rules' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/rules/rules/rules.module',
      'name' => 'rules',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6005',
      'weight' => '20',
      'info' => 
      array (
        'name' => 'Rules',
        'description' => 'Lets you define conditionally executed actions based on occurring events.',
        'package' => 'Rules',
        'core' => '6.x',
        'php' => '5.1',
        'version' => '6.x-1.4',
        'project' => 'rules',
        'datestamp' => '1294236219',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'rules',
      'version' => '6.x-1.4',
    ),
    'rules_admin' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/rules/rules_admin/rules_admin.module',
      'name' => 'rules_admin',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rules Administration UI',
        'description' => 'Provides the administration UI for rules.',
        'dependencies' => 
        array (
          0 => 'rules',
        ),
        'package' => 'Rules',
        'core' => '6.x',
        'version' => '6.x-1.4',
        'project' => 'rules',
        'datestamp' => '1294236219',
        'php' => '4.3.5',
      ),
      'project' => 'rules',
      'version' => '6.x-1.4',
    ),
    'rules_forms' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/rules/rules_forms/rules_forms.module',
      'name' => 'rules_forms',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rules Forms support',
        'description' => 'Provides events, conditions and actions for rule-based form customization.',
        'dependencies' => 
        array (
          0 => 'rules',
        ),
        'package' => 'Rules',
        'core' => '6.x',
        'version' => '6.x-1.4',
        'project' => 'rules',
        'datestamp' => '1294236219',
        'php' => '4.3.5',
      ),
      'project' => 'rules',
      'version' => '6.x-1.4',
    ),
    'rules_scheduler' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/rules/rules_scheduler/rules_scheduler.module',
      'name' => 'rules_scheduler',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rules Scheduler',
        'description' => 'Schedule the execution of rule sets.',
        'dependencies' => 
        array (
          0 => 'rules',
        ),
        'package' => 'Rules',
        'core' => '6.x',
        'version' => '6.x-1.4',
        'project' => 'rules',
        'datestamp' => '1294236219',
        'php' => '4.3.5',
      ),
      'project' => 'rules',
      'version' => '6.x-1.4',
    ),
    'rules_test' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/rules/rules_test/rules_test.module',
      'name' => 'rules_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rules Simpletest',
        'description' => 'Tests the functionality of the rule engine',
        'package' => 'Rules',
        'dependencies' => 
        array (
          0 => 'simpletest',
          1 => 'rules',
        ),
        'core' => '6.x',
        'version' => '6.x-1.4',
        'project' => 'rules',
        'datestamp' => '1294236219',
        'php' => '4.3.5',
      ),
      'project' => 'rules',
      'version' => '6.x-1.4',
    ),
    'scheduler' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/scheduler/scheduler.module',
      'name' => 'scheduler',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6101',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Scheduler',
        'description' => 'This module allows nodes to be published and unpublished on specified dates.',
        'core' => '6.x',
        'version' => '6.x-1.8',
        'project' => 'scheduler',
        'datestamp' => '1293465831',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'scheduler',
      'version' => '6.x-1.8',
    ),
    'search' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/search/search.module',
      'name' => 'search',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search',
        'description' => 'Enables site-wide keyword searching.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'securepages' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/securepages/securepages.module',
      'name' => 'securepages',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Secure Pages',
        'description' => 'Set which pages are always going to be used in secure mode (SSL) Warning: Do not enable this module without configuring your web server to handle SSL with this installation of Drupal',
        'core' => '6.x',
        'version' => '6.x-1.9',
        'project' => 'securepages',
        'datestamp' => '1298472431',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'securepages',
      'version' => '6.x-1.9',
    ),
    'securepages_login' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/custom/securepages_login/securepages_login.module',
      'name' => 'securepages_login',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Secure Pages Login',
        'description' => 'Secure the login form.',
        'dependencies' => 
        array (
          0 => 'securepages',
        ),
        'core' => '6.x',
        'datestamp' => '',
        'project' => 'securepages_login',
        'project status url' => 'http://features.devmcn.com/fserver',
        'version' => '6.x-1.0',
        'php' => '4.3.5',
      ),
      'project' => 'securepages_login',
      'version' => '6.x-1.0',
    ),
    'semanticviews' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'semanticviews',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'sharethis' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'sharethis',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'signature_forum' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'signature_forum',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'simpletest' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/simpletest/simpletest.module',
      'name' => 'simpletest',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'SimpleTest',
        'description' => 'Provides a framework for unit and functional testing.',
        'package' => 'Development',
        'core' => '6.x',
        'php' => '5 ; Drupal 6',
        'files' => 
        array (
          0 => 'simpletest.module',
          1 => 'simpletest.pages.inc',
          2 => 'simpletest.install',
          3 => 'simpletest.test',
          4 => 'drupal_web_test_case.php',
          5 => 'tests/block.test',
        ),
        'version' => '6.x-2.10',
        'project' => 'simpletest',
        'datestamp' => '1262212859',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'simpletest',
      'version' => '6.x-2.10',
    ),
    'simpleviewer' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/swftools/simpleviewer/simpleviewer.module',
      'name' => 'simpleviewer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'SimpleViewer',
        'description' => 'Enables support for SimpleViewer.',
        'package' => 'SWF Tools',
        'dependencies' => 
        array (
          0 => 'swftools',
        ),
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'swftools',
        'datestamp' => '1240829764',
        'php' => '4.3.5',
      ),
      'project' => 'swftools',
      'version' => '6.x-2.5',
    ),
    'site_administration' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/features/site_administration/site_administration.module',
      'name' => 'site_administration',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'admin',
          1 => 'admin_menu',
          2 => 'features',
          3 => 'menu',
          4 => 'path',
          5 => 'pathauto',
          6 => 'taxonomy',
          7 => 'token',
        ),
        'description' => 'Admin and Base Roles / Permissions',
        'features' => 
        array (
          'user_permission' => 
          array (
            0 => 'access administration menu',
            1 => 'access administration pages',
            2 => 'access content',
            3 => 'access site reports',
            4 => 'access user profiles',
            5 => 'administer actions',
            6 => 'administer blocks',
            7 => 'administer content types',
            8 => 'administer features',
            9 => 'administer files',
            10 => 'administer filters',
            11 => 'administer menu',
            12 => 'administer nodes',
            13 => 'administer pathauto',
            14 => 'administer permissions',
            15 => 'administer site configuration',
            16 => 'administer taxonomy',
            17 => 'administer url aliases',
            18 => 'administer users',
            19 => 'change own username',
            20 => 'create page content',
            21 => 'create url aliases',
            22 => 'delete any page content',
            23 => 'delete own page content',
            24 => 'delete revisions',
            25 => 'edit any page content',
            26 => 'edit own page content',
            27 => 'manage features',
            28 => 'notify of path changes',
            29 => 'revert revisions',
            30 => 'select different theme',
            31 => 'use PHP for block visibility',
            32 => 'use admin toolbar',
            33 => 'view revisions',
          ),
        ),
        'name' => 'Site Administration',
        'package' => 'Features',
        'project' => 'site_administration',
        'project status url' => 'http://features.devmcn.com/fserver',
        'version' => '6.x-2.0',
        'php' => '4.3.5',
      ),
      'project' => 'site_administration',
      'version' => '6.x-2.0',
    ),
    'skinr' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'skinr',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'slideshow' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/features/slideshow/slideshow.module',
      'name' => 'slideshow',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'features',
          2 => 'filefield',
          3 => 'imagefield',
          4 => 'link',
          5 => 'number',
          6 => 'optionwidgets',
          7 => 'scheduler',
          8 => 'site_administration',
          9 => 'views_feature',
          10 => 'views_slideshow',
          11 => 'views_slideshow_singleframe',
        ),
        'description' => 'Provides slideshow banner content type and slideshow view using Views Slideshow',
        'features' => 
        array (
          'content' => 
          array (
            0 => 'slideshow-field_slide_image',
            1 => 'slideshow-field_slide_link',
            2 => 'slideshow-field_slide_sort',
          ),
          'node' => 
          array (
            0 => 'slideshow',
          ),
          'user_permission' => 
          array (
            0 => 'create slideshow content',
            1 => 'delete any slideshow content',
            2 => 'delete own slideshow content',
            3 => 'edit any slideshow content',
            4 => 'edit own slideshow content',
          ),
          'views' => 
          array (
            0 => 'slideshow',
          ),
          'views_api' => 
          array (
            0 => 'api:2',
          ),
        ),
        'name' => 'Slideshow',
        'package' => 'Features',
        'project' => 'slideshow',
        'project status url' => 'http://features.devmcn.com/fserver',
        'version' => '6.x-1.2',
        'php' => '4.3.5',
      ),
      'project' => 'slideshow',
      'version' => '6.x-1.2',
    ),
    'snapit' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'snapit',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'soundscan' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'soundscan',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'sponsors' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/features/sponsors/sponsors.module',
      'name' => 'sponsors',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'features',
          2 => 'filefield',
          3 => 'imagefield',
          4 => 'link',
          5 => 'number',
          6 => 'optionwidgets',
          7 => 'taxonomy',
          8 => 'views',
        ),
        'description' => 'Adds linked sponsor images',
        'features' => 
        array (
          'content' => 
          array (
            0 => 'sponsor-field_link',
            1 => 'sponsor-field_required_image',
            2 => 'sponsor-field_sort',
          ),
          'node' => 
          array (
            0 => 'sponsor',
          ),
          'user' => 
          array (
            0 => 'create sponsor content',
            1 => 'delete any sponsor content',
            2 => 'delete own sponsor content',
            3 => 'edit any sponsor content',
            4 => 'edit own sponsor content',
          ),
          'views' => 
          array (
            0 => 'sponsors',
          ),
        ),
        'name' => 'Sponsors',
        'package' => 'Features',
        'project' => 'sponsors',
        'project status url' => 'http://features.devmcn.com/fserver',
        'version' => '6.x-2.0',
        'php' => '4.3.5',
      ),
      'project' => 'sponsors',
      'version' => '6.x-2.0',
    ),
    'sponsors_2' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'sponsors_2',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'sso' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/custom/sso/sso.module',
      'name' => 'sso',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'SSO Autologin Module',
        'description' => 'Module to allow single sign on for multiple sites ',
        'package' => 'RealTimeData',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'statistics' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/statistics/statistics.module',
      'name' => 'statistics',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '1',
      'schema_version' => '6000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Statistics',
        'description' => 'Logs access statistics for your site.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'strongarm' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/strongarm/strongarm.module',
      'name' => 'strongarm',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Strongarm',
        'description' => 'Enforces variable values defined by modules that need settings set to operate properly.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '6.x-2.0',
        'project' => 'strongarm',
        'datestamp' => '1281369974',
        'php' => '4.3.5',
      ),
      'project' => 'strongarm',
      'version' => '6.x-2.0',
    ),
    'stylizer' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/ctools/stylizer/stylizer.module',
      'name' => 'stylizer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stylizer',
        'description' => 'Create custom styles for applications such as Panels.',
        'core' => '6.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '6.x-1.8',
        'project' => 'ctools',
        'datestamp' => '1288393844',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.8',
    ),
    'swfobject' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/swftools/swfobject/swfobject.module',
      'name' => 'swfobject',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'SWFObject',
        'description' => 'Enables support for the SWFObject embedding method.',
        'package' => 'SWF Tools',
        'dependencies' => 
        array (
          0 => 'swftools',
        ),
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'swftools',
        'datestamp' => '1240829764',
        'php' => '4.3.5',
      ),
      'project' => 'swftools',
      'version' => '6.x-2.5',
    ),
    'swfobject2' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/swftools/swfobject2/swfobject2.module',
      'name' => 'swfobject2',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'SWFObject2',
        'description' => 'Enables support for the SWFObject 2 embedding method.',
        'package' => 'SWF Tools',
        'dependencies' => 
        array (
          0 => 'swftools',
        ),
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'swftools',
        'datestamp' => '1240829764',
        'php' => '4.3.5',
      ),
      'project' => 'swftools',
      'version' => '6.x-2.5',
    ),
    'swftools' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/swftools/swftools.module',
      'name' => 'swftools',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'SWF Tools',
        'description' => 'This is the core component of SWF Tools and provides a common API for handling Adobe Flash related media.',
        'package' => 'SWF Tools',
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'swftools',
        'datestamp' => '1240829764',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'swftools',
      'version' => '6.x-2.5',
    ),
    'syslog' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/syslog/syslog.module',
      'name' => 'syslog',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Syslog',
        'description' => 'Logs and records system events to syslog.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'system' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/system/system.module',
      'name' => 'system',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6055',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System',
        'description' => 'Handles general site configuration for administrators.',
        'package' => 'Core - required',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'system_module' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/util/system_module.module',
      'name' => 'system_module',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System Module',
        'description' => 'Set default collapsed/expanded state for system modules fieldsets',
        'dependencies' => 
        array (
          0 => 'util',
        ),
        'package' => 'Util',
        'core' => '6.x',
        'version' => '6.x-3.0',
        'project' => 'util',
        'datestamp' => '1288295149',
        'php' => '4.3.5',
      ),
      'project' => 'util',
      'version' => '6.x-3.0',
    ),
    'tac_lite' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/tac_lite/tac_lite.module',
      'name' => 'tac_lite',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '9',
      'info' => 
      array (
        'name' => 'Taxonomy Access Control Lite',
        'description' => 'Simple access control based on categories.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
        ),
        'core' => '6.x',
        'version' => '6.x-1.5',
        'project' => 'tac_lite',
        'datestamp' => '1305133016',
        'php' => '4.3.5',
      ),
      'project' => 'tac_lite',
      'version' => '6.x-1.5',
    ),
    'tac_lite_create' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/tac_lite/tac_lite_create.module',
      'name' => 'tac_lite_create',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy Access Control Lite Create',
        'description' => 'Hide taxonomy terms on node add/edit forms.',
        'dependencies' => 
        array (
          0 => 'tac_lite',
        ),
        'core' => '6.x',
        'version' => '6.x-1.5',
        'project' => 'tac_lite',
        'datestamp' => '1305133016',
        'php' => '4.3.5',
      ),
      'project' => 'tac_lite',
      'version' => '6.x-1.5',
    ),
    'tagadelic' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'tagadelic',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'taxonomy' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/taxonomy/taxonomy.module',
      'name' => 'taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy',
        'description' => 'Enables the categorization of content.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'taxonomy_image' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/gaither.com/modules/taxonomy_image/taxonomy_image.module',
      'name' => 'taxonomy_image',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6101',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy Image',
        'description' => 'Upload and associate images with taxonomy terms.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
        ),
        'core' => '6.x',
        'package' => 'Taxonomy Image',
        'version' => '6.x-1.6',
        'project' => 'taxonomy_image',
        'datestamp' => '1239889366',
        'php' => '4.3.5',
      ),
      'project' => 'taxonomy_image',
      'version' => '6.x-1.6',
    ),
    'taxonomy_image_attach' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/gaither.com/modules/taxonomy_image/contributed/taxonomy_image_attach/taxonomy_image_attach.module',
      'name' => 'taxonomy_image_attach',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy Image Attach',
        'description' => 'Support re-use of existing image nodes as taxonomy images.',
        'dependencies' => 
        array (
          0 => 'taxonomy_image',
          1 => 'image_attach',
        ),
        'package' => 'Taxonomy Image',
        'core' => '6.x',
        'version' => '6.x-1.6',
        'project' => 'taxonomy_image',
        'datestamp' => '1239889366',
        'php' => '4.3.5',
      ),
      'project' => 'taxonomy_image',
      'version' => '6.x-1.6',
    ),
    'taxonomy_image_blocks' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/gaither.com/modules/taxonomy_image/contributed/taxonomy_image_blocks/taxonomy_image_blocks.module',
      'name' => 'taxonomy_image_blocks',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy Image Blocks',
        'description' => 'Provides blocks for Taxonomy Image.',
        'dependencies' => 
        array (
          0 => 'taxonomy_image',
        ),
        'core' => '6.x',
        'package' => 'Taxonomy Image',
        'version' => '6.x-1.6',
        'project' => 'taxonomy_image',
        'datestamp' => '1239889366',
        'php' => '4.3.5',
      ),
      'project' => 'taxonomy_image',
      'version' => '6.x-1.6',
    ),
    'taxonomy_image_link_alter' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/gaither.com/modules/taxonomy_image/contributed/taxonomy_image_link_alter/taxonomy_image_link_alter.module',
      'name' => 'taxonomy_image_link_alter',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy Image Link Alter',
        'description' => 'Modify taxonomy term links to use Taxonomy Image.',
        'dependencies' => 
        array (
          0 => 'taxonomy_image',
        ),
        'core' => '6.x',
        'package' => 'Taxonomy Image',
        'version' => '6.x-1.6',
        'project' => 'taxonomy_image',
        'datestamp' => '1239889366',
        'php' => '4.3.5',
      ),
      'project' => 'taxonomy_image',
      'version' => '6.x-1.6',
    ),
    'taxonomy_image_node_display' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/gaither.com/modules/taxonomy_image/contributed/taxonomy_image_node_display/taxonomy_image_node_display.module',
      'name' => 'taxonomy_image_node_display',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy Image Node Display',
        'description' => 'Display taxonomy images in nodes where and when you want them.',
        'dependencies' => 
        array (
          0 => 'taxonomy_image',
        ),
        'core' => '6.x',
        'package' => 'Taxonomy Image',
        'version' => '6.x-1.6',
        'project' => 'taxonomy_image',
        'datestamp' => '1239889366',
        'php' => '4.3.5',
      ),
      'project' => 'taxonomy_image',
      'version' => '6.x-1.6',
    ),
    'taxonomy_other' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/gaither.com/modules/taxonomy_other/taxonomy_other.module',
      'name' => 'taxonomy_other',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6100',
      'weight' => '11',
      'info' => 
      array (
        'name' => 'Taxonomy Other',
        'description' => 'Add optional \'- Other -\' to taxonomy select lists.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
        ),
        'core' => '6.x',
        'version' => '6.x-1.1',
        'project' => 'taxonomy_other',
        'datestamp' => '1218066022',
        'php' => '4.3.5',
      ),
      'project' => 'taxonomy_other',
      'version' => '6.x-1.1',
    ),
    'taxonomy_role' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'taxonomy_role',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'taxonomy_theme' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'taxonomy_theme',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'terms_of_use' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/terms_of_use/terms_of_use.module',
      'name' => 'terms_of_use',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Terms of Use',
        'description' => 'Adds terms of Use to the registration page.',
        'core' => '6.x',
        'version' => '6.x-1.13',
        'project' => 'terms_of_use',
        'datestamp' => '1306504016',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'terms_of_use',
      'version' => '6.x-1.13',
    ),
    'test_gateway' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib-patched/ubercart/payment/uc_credit/test_gateway.module',
      'name' => 'test_gateway',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Test Gateway',
        'description' => 'Adds a credit card gateway that simulates a successful payment for testing checkout.',
        'dependencies' => 
        array (
          0 => 'uc_payment',
          1 => 'uc_credit',
        ),
        'package' => 'Ubercart - payment',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.6',
        'project' => 'ubercart',
        'datestamp' => '1312031519',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.6',
    ),
    'text' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/cck/modules/text/text.module',
      'name' => 'text',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Text',
        'description' => 'Defines simple text field types.',
        'dependencies' => 
        array (
          0 => 'content',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
    ),
    'themesettingsapi' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/themesettingsapi/themesettingsapi.module',
      'name' => 'themesettingsapi',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Theme Settings API',
        'description' => 'Allows themes to add options to the themes settings page',
        'core' => '6.x',
        'version' => '6.x-1.4',
        'project' => 'themesettingsapi',
        'datestamp' => '1207252515',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'themesettingsapi',
      'version' => '6.x-1.4',
    ),
    'throttle' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/throttle/throttle.module',
      'name' => 'throttle',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Throttle',
        'description' => 'Handles the auto-throttling mechanism, to control site congestion.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'token' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/token/token.module',
      'name' => 'token',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '1',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'Token',
        'description' => 'Provides a shared API for replacement of textual placeholders with actual data.',
        'core' => '6.x',
        'version' => '6.x-1.16',
        'project' => 'token',
        'datestamp' => '1305745318',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'token',
      'version' => '6.x-1.16',
    ),
    'tokenSTARTER' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/token/tokenSTARTER.module',
      'name' => 'tokenSTARTER',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'TokenSTARTER',
        'description' => 'Provides additional tokens and a base on which to build your own tokens.',
        'dependencies' => 
        array (
          0 => 'token',
        ),
        'core' => '6.x',
        'version' => '6.x-1.16',
        'project' => 'token',
        'datestamp' => '1305745318',
        'php' => '4.3.5',
      ),
      'project' => 'token',
      'version' => '6.x-1.16',
    ),
    'token_actions' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/token/token_actions.module',
      'name' => 'token_actions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Token actions',
        'description' => 'Provides enhanced versions of core Drupal actions using the Token module.',
        'dependencies' => 
        array (
          0 => 'token',
        ),
        'core' => '6.x',
        'version' => '6.x-1.16',
        'project' => 'token',
        'datestamp' => '1305745318',
        'php' => '4.3.5',
      ),
      'project' => 'token',
      'version' => '6.x-1.16',
    ),
    'token_test' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/token/tests/token_test.module',
      'name' => 'token_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Token Test',
        'description' => 'Testing module for token functionality.',
        'package' => 'Testing',
        'core' => '6.x',
        'files' => 
        array (
          0 => 'token_test.module',
        ),
        'hidden' => true,
        'version' => '6.x-1.16',
        'project' => 'token',
        'datestamp' => '1305745318',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'token',
      'version' => '6.x-1.16',
    ),
    'top_buttons' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/util/contribs/top_buttons/top_buttons.module',
      'name' => 'top_buttons',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Top Buttons',
        'description' => 'Duplicate node form buttons at the top.',
        'dependencies' => 
        array (
          0 => 'util',
          1 => 'node',
        ),
        'package' => 'Util',
        'core' => '6.x',
        'version' => '6.x-3.0',
        'project' => 'util',
        'datestamp' => '1288295149',
        'php' => '4.3.5',
      ),
      'project' => 'util',
      'version' => '6.x-3.0',
    ),
    'tracker' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/tracker/tracker.module',
      'name' => 'tracker',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tracker',
        'description' => 'Enables tracking of recent posts for users.',
        'dependencies' => 
        array (
          0 => 'comment',
        ),
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'translation' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/translation/translation.module',
      'name' => 'translation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content translation',
        'description' => 'Allows content to be translated into different languages.',
        'dependencies' => 
        array (
          0 => 'locale',
        ),
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'transliteration' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/transliteration/transliteration.module',
      'name' => 'transliteration',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Transliteration',
        'description' => 'Converts non-latin text to US-ASCII and sanitizes file names.',
        'core' => '6.x',
        'version' => '6.x-3.0',
        'project' => 'transliteration',
        'datestamp' => '1279738213',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'transliteration',
      'version' => '6.x-3.0',
    ),
    'trigger' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/trigger/trigger.module',
      'name' => 'trigger',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Trigger',
        'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'tweetbutton' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/tweetbutton/tweetbutton.module',
      'name' => 'tweetbutton',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tweetbutton',
        'description' => 'Add tweet button to  your website without having to leave the page',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'token',
        ),
        'version' => '6.x-1.4',
        'project' => 'tweetbutton',
        'datestamp' => '1288693861',
        'php' => '4.3.5',
      ),
      'project' => 'tweetbutton',
      'version' => '6.x-1.4',
    ),
    'twitter' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/twitter/twitter.module',
      'name' => 'twitter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6301',
      'weight' => '3',
      'info' => 
      array (
        'name' => 'Twitter',
        'description' => 'Adds integration with the Twitter microblogging service.',
        'php' => '5.1',
        'core' => '6.x',
        'version' => '6.x-3.0-beta6',
        'project' => 'twitter',
        'datestamp' => '1315837306',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'twitter',
      'version' => '6.x-3.0-beta6',
    ),
    'twitter_actions' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/twitter/twitter_actions/twitter_actions.module',
      'name' => 'twitter_actions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Twitter actions',
        'description' => 'Exposes Drupal actions to send Twitter messages.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'twitter',
          1 => 'oauth',
        ),
        'version' => '6.x-3.0-beta6',
        'project' => 'twitter',
        'datestamp' => '1315837306',
        'php' => '4.3.5',
      ),
      'project' => 'twitter',
      'version' => '6.x-3.0-beta6',
    ),
    'twitter_post' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/twitter/twitter_post/twitter_post.module',
      'name' => 'twitter_post',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Twitter Post',
        'description' => 'Enables posting to twitter',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'twitter',
          1 => 'oauth',
        ),
        'version' => '6.x-3.0-beta6',
        'project' => 'twitter',
        'datestamp' => '1315837306',
        'php' => '4.3.5',
      ),
      'project' => 'twitter',
      'version' => '6.x-3.0-beta6',
    ),
    'twitter_search' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'twitter_search',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'twitter_signin' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/twitter/twitter_signin/twitter_signin.module',
      'name' => 'twitter_signin',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Twitter Signin',
        'description' => 'Adds support for "Sign in with Twitter"',
        'php' => '5.1',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'twitter',
          1 => 'oauth',
        ),
        'version' => '6.x-3.0-beta6',
        'project' => 'twitter',
        'datestamp' => '1315837306',
      ),
      'project' => 'twitter',
      'version' => '6.x-3.0-beta6',
    ),
    'type_defaults' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/util/contribs/type_defaults/type_defaults.module',
      'name' => 'type_defaults',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Type Defaults',
        'description' => 'Sets default options for all content types.',
        'dependencies' => 
        array (
          0 => 'util',
        ),
        'package' => 'Util',
        'core' => '6.x',
        'version' => '6.x-3.0',
        'project' => 'util',
        'datestamp' => '1288295149',
        'php' => '4.3.5',
      ),
      'project' => 'util',
      'version' => '6.x-3.0',
    ),
    'ucd' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/gaither.com/modules/nd_contrib/nd_ubercart/ucd.module',
      'name' => 'ucd',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Ubercart displays',
        'description' => 'Extended Ubercart node build and display modes',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'ds',
          1 => 'nd',
          2 => 'uc_product',
        ),
        'package' => 'Display suite',
        'version' => '6.x-2.4',
        'project' => 'nd_contrib',
        'datestamp' => '1292540634',
        'php' => '4.3.5',
      ),
      'project' => 'nd_contrib',
      'version' => '6.x-2.4',
    ),
    'uc_2checkout' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib-patched/ubercart/payment/uc_2checkout/uc_2checkout.module',
      'name' => 'uc_2checkout',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => '2Checkout',
        'description' => 'Enable to process payments using 2Checkout.com.',
        'dependencies' => 
        array (
          0 => 'uc_payment',
        ),
        'package' => 'Ubercart - payment',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.6',
        'project' => 'ubercart',
        'datestamp' => '1312031519',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.6',
    ),
    'uc_attribute' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib-patched/ubercart/uc_attribute/uc_attribute.module',
      'name' => 'uc_attribute',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6005',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Attribute',
        'description' => 'Extends product content type to support product variations.  Allows customers to select these product attributes before purchase.',
        'dependencies' => 
        array (
          0 => 'uc_product',
        ),
        'package' => 'Ubercart - core (optional)',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.6',
        'project' => 'ubercart',
        'datestamp' => '1312031519',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.6',
    ),
    'uc_authorizenet' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib-patched/ubercart/payment/uc_authorizenet/uc_authorizenet.module',
      'name' => 'uc_authorizenet',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Authorize.net',
        'description' => 'Process payments using Authorize.net. Supports AIM and ARB.',
        'dependencies' => 
        array (
          0 => 'uc_payment',
          1 => 'uc_credit',
        ),
        'package' => 'Ubercart - payment',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.6',
        'project' => 'ubercart',
        'datestamp' => '1312031519',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.6',
    ),
    'uc_bank_transfer' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/uc_bank_transfer/uc_bank_transfer.module',
      'name' => 'uc_bank_transfer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bank Transfer',
        'description' => 'Provides the Bank Transfer payment method.',
        'dependencies' => 
        array (
          0 => 'uc_cart',
          1 => 'uc_payment',
        ),
        'package' => 'Ubercart - payment',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-1.0',
        'project' => 'uc_bank_transfer',
        'datestamp' => '1292569482',
      ),
      'project' => 'uc_bank_transfer',
      'version' => '6.x-1.0',
    ),
    'uc_cart' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib-patched/ubercart/uc_cart/uc_cart.module',
      'name' => 'uc_cart',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '1',
      'schema_version' => '6202',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Cart',
        'description' => 'REQUIRED. Controls the shopping cart for an Ubercart e-commerce site.',
        'dependencies' => 
        array (
          0 => 'ca',
          1 => 'uc_order',
          2 => 'uc_product',
        ),
        'package' => 'Ubercart - core',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.6',
        'project' => 'ubercart',
        'datestamp' => '1312031519',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.6',
    ),
    'uc_cart_links' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib-patched/ubercart/uc_cart_links/uc_cart_links.module',
      'name' => 'uc_cart_links',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Cart Links',
        'description' => 'Create specialized links to purchase products from other nodes.',
        'dependencies' => 
        array (
          0 => 'uc_cart',
        ),
        'package' => 'Ubercart - extra',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.6',
        'project' => 'ubercart',
        'datestamp' => '1312031519',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.6',
    ),
    'uc_catalog' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib-patched/ubercart/uc_catalog/uc_catalog.module',
      'name' => 'uc_catalog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Catalog',
        'description' => 'Display a hierarchical product catalog page and block.',
        'dependencies' => 
        array (
          0 => 'path',
          1 => 'taxonomy',
          2 => 'uc_product',
        ),
        'package' => 'Ubercart - core (optional)',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.6',
        'project' => 'ubercart',
        'datestamp' => '1312031519',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.6',
    ),
    'uc_content_profile' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/custom/uc_content_profile/uc_content_profile.module',
      'name' => 'uc_content_profile',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content profile pane',
        'description' => 'Adds a checkout pane for the information required from user registration content profiles.',
        'dependencies' => 
        array (
          0 => 'uc_cart',
          1 => 'content_profile',
          2 => 'content',
        ),
        'package' => 'Ubercart - extra',
        'core' => '6.x',
        'php' => '5.0',
        'project status url' => 'http://features.devmcn.com/fserver',
        'datestamp' => '1291230427',
        'project' => 'uc_content_profile',
        'version' => '6.x-1.0',
      ),
      'project' => 'uc_content_profile',
      'version' => '6.x-1.0',
    ),
    'uc_coupon' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/uc_coupon/uc_coupon.module',
      'name' => 'uc_coupon',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6006',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Discount Coupons',
        'description' => 'Allow administrators to manage store coupons',
        'dependencies' => 
        array (
          0 => 'uc_cart',
        ),
        'package' => 'Ubercart - payment',
        'core' => '6.x',
        'version' => '6.x-1.7',
        'project' => 'uc_coupon',
        'datestamp' => '1313511121',
        'php' => '4.3.5',
      ),
      'project' => 'uc_coupon',
      'version' => '6.x-1.7',
    ),
    'uc_coupon_purchase' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/uc_coupon/uc_coupon_purchase/uc_coupon_purchase.module',
      'name' => 'uc_coupon_purchase',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Discount Coupon Purchase',
        'description' => 'Allows coupons to be purchased as a product feature.',
        'dependencies' => 
        array (
          0 => 'uc_coupon',
        ),
        'package' => 'Ubercart - payment',
        'core' => '6.x',
        'version' => '6.x-1.7',
        'project' => 'uc_coupon',
        'datestamp' => '1313511121',
        'php' => '4.3.5',
      ),
      'project' => 'uc_coupon',
      'version' => '6.x-1.7',
    ),
    'uc_coupon_register' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/uc_coupon/uc_coupon_register/uc_coupon_register.module',
      'name' => 'uc_coupon_register',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Discount Coupon User Registration',
        'description' => 'Issues a coupon after a new user is registered.',
        'dependencies' => 
        array (
          0 => 'uc_coupon',
        ),
        'package' => 'Ubercart - payment',
        'core' => '6.x',
        'version' => '6.x-1.7',
        'project' => 'uc_coupon',
        'datestamp' => '1313511121',
        'php' => '4.3.5',
      ),
      'project' => 'uc_coupon',
      'version' => '6.x-1.7',
    ),
    'uc_credit' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib-patched/ubercart/payment/uc_credit/uc_credit.module',
      'name' => 'uc_credit',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '1',
      'schema_version' => '6000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Credit Card',
        'description' => 'Receive credit card payments through checkout.',
        'dependencies' => 
        array (
          0 => 'uc_store',
          1 => 'uc_payment',
        ),
        'package' => 'Ubercart - payment',
        'core' => '6.x',
        'version' => '6.x-2.6',
        'project' => 'ubercart',
        'datestamp' => '1312031519',
        'php' => '4.3.5',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.6',
    ),
    'uc_cybersource' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib-patched/ubercart/payment/uc_cybersource/uc_cybersource.module',
      'name' => 'uc_cybersource',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CyberSource',
        'description' => 'Enable to process payments using the CyberSource Silent Order POST and Hosted Order Page services.',
        'dependencies' => 
        array (
          0 => 'uc_payment',
        ),
        'package' => 'Ubercart - payment',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.6',
        'project' => 'ubercart',
        'datestamp' => '1312031519',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.6',
    ),
    'uc_donate' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/uc_donation/uc_donate/uc_donate.module',
      'name' => 'uc_donate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Donate',
        'description' => 'Provides a page with donation products.',
        'dependencies' => 
        array (
          0 => 'uc_donation',
        ),
        'package' => 'Ubercart - extra',
        'core' => '6.x',
        'version' => '6.x-2.0-beta3',
        'project' => 'uc_donation',
        'datestamp' => '1244475420',
        'php' => '4.3.5',
      ),
      'project' => 'uc_donation',
      'version' => '6.x-2.0-beta3',
    ),
    'uc_donation' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/uc_donation/uc_donation.module',
      'name' => 'uc_donation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Donation Product',
        'description' => 'This node module the creation of donation products.',
        'dependencies' => 
        array (
          0 => 'uc_cart',
        ),
        'package' => 'Ubercart - extra',
        'core' => '6.x',
        'version' => '6.x-2.0-beta3',
        'project' => 'uc_donation',
        'datestamp' => '1244475420',
        'php' => '4.3.5',
      ),
      'project' => 'uc_donation',
      'version' => '6.x-2.0-beta3',
    ),
    'uc_endicia_xml' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/custom/uc_endicia_xml/uc_endicia_xml.module',
      'name' => 'uc_endicia_xml',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Ubercart Endicia',
        'description' => 'Handles the Ubercart orders to USPS Endicia export process.',
        'core' => '6.x',
        'package' => 'MCN Modules',
        'dependencies' => 
        array (
          0 => 'uc_views_bulk_operations',
          1 => 'uc_usps',
        ),
        'datestamp' => '1305903790',
        'project' => 'uc_endicia_xml',
        'project status url' => 'http://features.devmcn.com/fserver',
        'version' => '6.x-1.1',
        'php' => '4.3.5',
      ),
      'project' => 'uc_endicia_xml',
      'version' => '6.x-1.1',
    ),
    'uc_fee' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/uc_fee/uc_fee.module',
      'name' => 'uc_fee',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Fees',
        'description' => 'Ubercart fees',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'uc_store',
          1 => 'uc_payment',
          2 => 'uc_product',
          3 => 'ca',
        ),
        'package' => 'Ubercart - extra',
        'version' => '6.x-1.0-beta2',
        'project' => 'uc_fee',
        'datestamp' => '1258399359',
        'php' => '4.3.5',
      ),
      'project' => 'uc_fee',
      'version' => '6.x-1.0-beta2',
    ),
    'uc_file' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib-patched/ubercart/uc_file/uc_file.module',
      'name' => 'uc_file',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6006',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File Downloads',
        'description' => 'Allows products to be associated with downloadable files.',
        'dependencies' => 
        array (
          0 => 'uc_product',
          1 => 'uc_order',
        ),
        'package' => 'Ubercart - core (optional)',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.6',
        'project' => 'ubercart',
        'datestamp' => '1312031519',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.6',
    ),
    'uc_flatrate' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib-patched/ubercart/shipping/uc_flatrate/uc_flatrate.module',
      'name' => 'uc_flatrate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Flatrate',
        'description' => 'Assigns a flat shipping rate to an order, plus an optional amount per product.',
        'dependencies' => 
        array (
          0 => 'uc_quote',
        ),
        'package' => 'Ubercart - fulfillment',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.6',
        'project' => 'ubercart',
        'datestamp' => '1312031519',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.6',
    ),
    'uc_googleanalytics' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib-patched/ubercart/uc_googleanalytics/uc_googleanalytics.module',
      'name' => 'uc_googleanalytics',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Google Analytics for Ubercart',
        'description' => 'Adds e-commerce tracking for Ubercart to the Google Analytics module.',
        'dependencies' => 
        array (
          0 => 'googleanalytics',
          1 => 'uc_cart',
          2 => 'uc_order',
          3 => 'uc_store',
        ),
        'package' => 'Ubercart - extra',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.6',
        'project' => 'ubercart',
        'datestamp' => '1312031519',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.6',
    ),
    'uc_google_checkout' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib-patched/ubercart/payment/uc_google_checkout/uc_google_checkout.module',
      'name' => 'uc_google_checkout',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Google Checkout',
        'description' => 'Integrates Google\'s Checkout, Merchant Calculated Shipping, and Order Processing APIs.',
        'dependencies' => 
        array (
          0 => 'uc_cart',
          1 => 'uc_payment',
          2 => 'uc_quote',
        ),
        'package' => 'Ubercart - payment',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.6',
        'project' => 'ubercart',
        'datestamp' => '1312031519',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.6',
    ),
    'uc_og_subscribe' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/uc_og_subscribe/uc_og_subscribe.module',
      'name' => 'uc_og_subscribe',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Ubercart Organic Group subscribe',
        'description' => 'Creates a conditional action that subscribes the user to the organic groups ordered',
        'dependencies' => 
        array (
          0 => 'og',
          1 => 'uc_product',
          2 => 'uc_order',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0',
        'project' => 'uc_og_subscribe',
        'datestamp' => '1279299309',
        'php' => '4.3.5',
      ),
      'project' => 'uc_og_subscribe',
      'version' => '6.x-1.0',
    ),
    'uc_order' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib-patched/ubercart/uc_order/uc_order.module',
      'name' => 'uc_order',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6019',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Order',
        'description' => 'REQUIRED. Receive and manage orders through your website.',
        'dependencies' => 
        array (
          0 => 'ca',
          1 => 'token',
        ),
        'package' => 'Ubercart - core',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.6',
        'project' => 'ubercart',
        'datestamp' => '1312031519',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.6',
    ),
    'uc_out_of_stock' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/uc_out_of_stock/uc_out_of_stock.module',
      'name' => 'uc_out_of_stock',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Out of stock notificator',
        'description' => 'It tells the user if an item is out of stock. It supports attributes.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'uc_stock',
        ),
        'package' => 'Ubercart - extra',
        'version' => '6.x-1.4',
        'project' => 'uc_out_of_stock',
        'datestamp' => '1247684543',
        'php' => '4.3.5',
      ),
      'project' => 'uc_out_of_stock',
      'version' => '6.x-1.4',
    ),
    'uc_payment' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib-patched/ubercart/payment/uc_payment/uc_payment.module',
      'name' => 'uc_payment',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Payment',
        'description' => 'Defines an API to let payment modules interact with the cart.',
        'dependencies' => 
        array (
          0 => 'ca',
          1 => 'uc_order',
          2 => 'uc_store',
        ),
        'package' => 'Ubercart - core (optional)',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.6',
        'project' => 'ubercart',
        'datestamp' => '1312031519',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.6',
    ),
    'uc_payment_pack' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib-patched/ubercart/payment/uc_payment_pack/uc_payment_pack.module',
      'name' => 'uc_payment_pack',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Payment Method Pack',
        'description' => 'Provides the check/money order, COD, and \'other\' payment methods.',
        'dependencies' => 
        array (
          0 => 'uc_cart',
          1 => 'uc_payment',
        ),
        'package' => 'Ubercart - payment',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.6',
        'project' => 'ubercart',
        'datestamp' => '1312031519',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.6',
    ),
    'uc_paypal' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib-patched/ubercart/payment/uc_paypal/uc_paypal.module',
      'name' => 'uc_paypal',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'PayPal',
        'description' => 'Integrates various PayPal payment services and IPN feedback.',
        'dependencies' => 
        array (
          0 => 'uc_payment',
        ),
        'package' => 'Ubercart - payment',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.6',
        'project' => 'ubercart',
        'datestamp' => '1312031519',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.6',
    ),
    'uc_price_per_role' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/uc_price_per_role/uc_price_per_role.module',
      'name' => 'uc_price_per_role',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Price per role',
        'description' => 'Allow Ubercart products to have role-specific pricing.',
        'dependencies' => 
        array (
          0 => 'uc_product',
        ),
        'package' => 'Ubercart - extra',
        'core' => '6.x',
        'version' => '6.x-1.1',
        'project' => 'uc_price_per_role',
        'datestamp' => '1287870335',
        'php' => '4.3.5',
      ),
      'project' => 'uc_price_per_role',
      'version' => '6.x-1.1',
    ),
    'uc_product' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib-patched/ubercart/uc_product/uc_product.module',
      'name' => 'uc_product',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6009',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Product',
        'description' => 'REQUIRED. A module to represent items in an online store. Imagecache and CCK Image field recommended.',
        'dependencies' => 
        array (
          0 => 'uc_store',
        ),
        'package' => 'Ubercart - core',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.6',
        'project' => 'ubercart',
        'datestamp' => '1312031519',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.6',
    ),
    'uc_product_kit' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib-patched/ubercart/uc_product_kit/uc_product_kit.module',
      'name' => 'uc_product_kit',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Product Kit',
        'description' => 'This node module represents two or more products that have been listed together. This presents a logical and convenient grouping of items to the customer.',
        'dependencies' => 
        array (
          0 => 'uc_product',
        ),
        'package' => 'Ubercart - extra',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.6',
        'project' => 'ubercart',
        'datestamp' => '1312031519',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.6',
    ),
    'uc_promo' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'uc_promo',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'uc_quote' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib-patched/ubercart/shipping/uc_quote/uc_quote.module',
      'name' => 'uc_quote',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6004',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Shipping Quotes',
        'description' => 'Retrieve and display quotes for shipping products.',
        'dependencies' => 
        array (
          0 => 'uc_cart',
          1 => 'ca',
        ),
        'package' => 'Ubercart - core (optional)',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.6',
        'project' => 'ubercart',
        'datestamp' => '1312031519',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.6',
    ),
    'uc_recurring' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/uc_recurring/uc_recurring.module',
      'name' => 'uc_recurring',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Recurring Payments API',
        'description' => 'Manage the integration between ubercart and recurring payment gateways that implement a recurring fee handler. This module does not do anything on its own it required a module that creates the recurring payments on specific events like the recurring products or recurring order modules.',
        'dependencies' => 
        array (
          0 => 'uc_cart',
        ),
        'package' => 'Ubercart - recurring',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.0-alpha6',
        'project' => 'uc_recurring',
        'datestamp' => '1296268419',
      ),
      'project' => 'uc_recurring',
      'version' => '6.x-2.0-alpha6',
    ),
    'uc_recurring_hosted' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/uc_recurring/modules/uc_recurring_hosted/uc_recurring_hosted.module',
      'name' => 'uc_recurring_hosted',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Recurring - Hosted Gateways',
        'description' => 'Recurring Fees handlers for hosted gateways - Authorize.net ARB and Paypal WPS',
        'dependencies' => 
        array (
          0 => 'uc_recurring',
        ),
        'package' => 'Ubercart - recurring',
        'core' => '6.x',
        'version' => '6.x-2.0-alpha6',
        'project' => 'uc_recurring',
        'datestamp' => '1296268419',
        'php' => '4.3.5',
      ),
      'project' => 'uc_recurring',
      'version' => '6.x-2.0-alpha6',
    ),
    'uc_recurring_mock_gateway' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/uc_recurring/test/uc_recurring_mock_gateway.module',
      'name' => 'uc_recurring_mock_gateway',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mock Recurring Gateway',
        'description' => 'DO NOT ENABLE - Implements mock payment method functions to simulate payment processing for simpletests ONLY.',
        'dependencies' => 
        array (
          0 => 'uc_payment',
        ),
        'package' => 'Ubercart - recurring',
        'hidden' => true,
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.0-alpha6',
        'project' => 'uc_recurring',
        'datestamp' => '1296268419',
      ),
      'project' => 'uc_recurring',
      'version' => '6.x-2.0-alpha6',
    ),
    'uc_recurring_order' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/uc_recurring/modules/uc_recurring_order/uc_recurring_order.module',
      'name' => 'uc_recurring_order',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Recurring Order',
        'description' => 'Recurring Fees for duplicating entire orders.',
        'dependencies' => 
        array (
          0 => 'uc_recurring',
        ),
        'package' => 'Ubercart - recurring',
        'core' => '6.x',
        'version' => '6.x-2.0-alpha6',
        'project' => 'uc_recurring',
        'datestamp' => '1296268419',
        'php' => '4.3.5',
      ),
      'project' => 'uc_recurring',
      'version' => '6.x-2.0-alpha6',
    ),
    'uc_recurring_product' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/uc_recurring/modules/uc_recurring_product/uc_recurring_product.module',
      'name' => 'uc_recurring_product',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Recurring Product Fees',
        'description' => 'Add recurring fees for products.',
        'dependencies' => 
        array (
          0 => 'uc_recurring',
        ),
        'package' => 'Ubercart - recurring',
        'core' => '6.x',
        'version' => '6.x-2.0-alpha6',
        'project' => 'uc_recurring',
        'datestamp' => '1296268419',
        'php' => '4.3.5',
      ),
      'project' => 'uc_recurring',
      'version' => '6.x-2.0-alpha6',
    ),
    'uc_recurring_subscription' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/uc_recurring/modules/uc_recurring_subscription/uc_recurring_subscription.module',
      'name' => 'uc_recurring_subscription',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Subscription Manager',
        'description' => 'Provides a Subscription Manager UI for paid membership features. Must read README.txt before installing.',
        'dependencies' => 
        array (
          0 => 'uc_recurring',
          1 => 'uc_recurring_product',
          2 => 'uc_attribute',
        ),
        'package' => 'Ubercart - recurring',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.0-alpha6',
        'project' => 'uc_recurring',
        'datestamp' => '1296268419',
      ),
      'project' => 'uc_recurring',
      'version' => '6.x-2.0-alpha6',
    ),
    'uc_reports' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib-patched/ubercart/uc_reports/uc_reports.module',
      'name' => 'uc_reports',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Reports',
        'description' => 'View reports about your store\'s sales, customers, and products.',
        'dependencies' => 
        array (
          0 => 'uc_order',
          1 => 'uc_product',
        ),
        'package' => 'Ubercart - core (optional)',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.6',
        'project' => 'ubercart',
        'datestamp' => '1312031519',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.6',
    ),
    'uc_restrict_qty' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/uc_restrict_qty/uc_restrict_qty.module',
      'name' => 'uc_restrict_qty',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6201',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UC Restrict Qty',
        'description' => 'Restrict the quantity on specified products so that only specified quantity may be purchased at a time.',
        'dependencies' => 
        array (
          0 => 'uc_cart',
        ),
        'package' => 'Ubercart - extra',
        'core' => '6.x',
        'version' => '6.x-2.x-dev',
        'project' => 'uc_restrict_qty',
        'datestamp' => '1298620523',
        'php' => '4.3.5',
      ),
      'project' => 'uc_restrict_qty',
      'version' => '6.x-2.x-dev',
    ),
    'uc_rolenotify' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/custom/uc_rolenotify/uc_rolenotify.module',
      'name' => 'uc_rolenotify',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UC Role Expiration Notifications',
        'description' => 'Provides a much more flexible notification system for expiring Ubercart role promotions.',
        'dependencies' => 
        array (
          0 => 'uc_roles',
        ),
        'package' => 'Ubercart - extra',
        'core' => '6.x',
        'php' => '5.0',
        'datestamp' => '1291223162',
        'project' => 'uc_rolenotify',
        'project status url' => 'http://features.devmcn.com/fserver',
        'version' => '6.x-1.0',
      ),
      'project' => 'uc_rolenotify',
      'version' => '6.x-1.0',
    ),
    'uc_roles' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib-patched/ubercart/uc_roles/uc_roles.module',
      'name' => 'uc_roles',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6004',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Roles',
        'description' => 'Assign permanent or expirable roles based on product purchases.',
        'dependencies' => 
        array (
          0 => 'uc_product',
          1 => 'uc_order',
        ),
        'package' => 'Ubercart - core (optional)',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.6',
        'project' => 'ubercart',
        'datestamp' => '1312031519',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.6',
    ),
    'uc_sage_payments' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/custom/uc_sage_payments/uc_sage_payments.module',
      'name' => 'uc_sage_payments',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Sage Payments',
        'description' => 'A gateway used to process payments using Sage Payments only.',
        'dependencies' => 
        array (
          0 => 'uc_payment',
          1 => 'uc_credit',
        ),
        'package' => 'Ubercart - payment',
        'core' => '6.x',
        'datestamp' => '1291150935',
        'project' => 'uc_sage_payments',
        'project status url' => 'http://features.devmcn.com/fserver',
        'version' => '6.x-1.0',
        'php' => '4.3.5',
      ),
      'project' => 'uc_sage_payments',
      'version' => '6.x-1.0',
    ),
    'uc_shipping' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib-patched/ubercart/shipping/uc_shipping/uc_shipping.module',
      'name' => 'uc_shipping',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6006',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Shipping',
        'description' => 'Gets products ready for physical shipment.',
        'dependencies' => 
        array (
          0 => 'uc_quote',
        ),
        'package' => 'Ubercart - core (optional)',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.6',
        'project' => 'ubercart',
        'datestamp' => '1312031519',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.6',
    ),
    'uc_stock' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib-patched/ubercart/uc_stock/uc_stock.module',
      'name' => 'uc_stock',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stock',
        'description' => 'Manage stock levels of your Ubercart products',
        'dependencies' => 
        array (
          0 => 'ca',
          1 => 'uc_product',
          2 => 'uc_reports',
          3 => 'uc_store',
        ),
        'package' => 'Ubercart - extra',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.6',
        'project' => 'ubercart',
        'datestamp' => '1312031519',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.6',
    ),
    'uc_store' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib-patched/ubercart/uc_store/uc_store.module',
      'name' => 'uc_store',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '1',
      'schema_version' => '6006',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Store',
        'description' => 'REQUIRED. Setup the store settings and manage your Ubercart site.',
        'package' => 'Ubercart - core',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.6',
        'project' => 'ubercart',
        'datestamp' => '1312031519',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.6',
    ),
    'uc_taxes' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib-patched/ubercart/uc_taxes/uc_taxes.module',
      'name' => 'uc_taxes',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6003',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'Taxes',
        'description' => 'Define tax rates for customers\' geographic locations and products sold.',
        'dependencies' => 
        array (
          0 => 'uc_store',
          1 => 'uc_payment',
          2 => 'uc_product',
          3 => 'ca',
        ),
        'package' => 'Ubercart - core (optional)',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.6',
        'project' => 'ubercart',
        'datestamp' => '1312031519',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.6',
    ),
    'uc_tax_report' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib-patched/ubercart/uc_tax_report/uc_tax_report.module',
      'name' => 'uc_tax_report',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tax Report',
        'description' => 'View a report about sales tax your customers paid.',
        'dependencies' => 
        array (
          0 => 'uc_reports',
          1 => 'uc_taxes',
        ),
        'package' => 'Ubercart - core (optional)',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.6',
        'project' => 'ubercart',
        'datestamp' => '1312031519',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.6',
    ),
    'uc_ups' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib-patched/ubercart/shipping/uc_ups/uc_ups.module',
      'name' => 'uc_ups',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UPS',
        'description' => 'Integration of UPS Rates and Services Selection and Shipping Online Tools with Drupal. See www.ups.com for details.',
        'dependencies' => 
        array (
          0 => 'uc_quote',
        ),
        'package' => 'Ubercart - fulfillment',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.6',
        'project' => 'ubercart',
        'datestamp' => '1312031519',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.6',
    ),
    'uc_usps' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib-patched/ubercart/shipping/uc_usps/uc_usps.module',
      'name' => 'uc_usps',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'U.S. Postal Service',
        'description' => 'Integration of USPS Rate Calculator and Mail Service Standards Web Tools with Ubercart.',
        'dependencies' => 
        array (
          0 => 'uc_quote',
        ),
        'package' => 'Ubercart - fulfillment',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.6',
        'project' => 'ubercart',
        'datestamp' => '1312031519',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.6',
    ),
    'uc_usps_zones' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/custom/uc_usps_zones/uc_usps_zones.module',
      'name' => 'uc_usps_zones',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'USPS Zones',
        'description' => 'Encodes the USPS Zones for Shipping',
        'core' => '6.x',
        'dependancies' => 
        array (
          0 => 'uc_usps',
        ),
        'package' => 'MCN Modules',
        'datestamp' => '1291225441',
        'project' => 'uc_usps_zones',
        'project status url' => 'http://features.devmcn.com/fserver',
        'version' => '6.x-1.0',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'uc_usps_zones',
      'version' => '6.x-1.0',
    ),
    'uc_views' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/uc_views/uc_views.module',
      'name' => 'uc_views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6301',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Ubercart Views',
        'description' => 'Makes Ubercart order, product and cart data available to Views and provides some standard views as templates for your own views.',
        'dependencies' => 
        array (
          0 => 'uc_product',
          1 => 'uc_order',
          2 => 'views',
        ),
        'package' => 'Ubercart - views',
        'core' => '6.x',
        'version' => '6.x-3.x-dev',
        'project' => 'uc_views',
        'datestamp' => '1298620535',
        'php' => '4.3.5',
      ),
      'project' => 'uc_views',
      'version' => '6.x-3.x-dev',
    ),
    'uc_views_addresses' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/uc_views/uc_views_addresses/uc_views_addresses.module',
      'name' => 'uc_views_addresses',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Ubercart Views Addresses',
        'description' => 'Views definitions for Ubercart Addresses module.',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'uc_addresses',
        ),
        'package' => 'Ubercart - views',
        'core' => '6.x',
        'version' => '6.x-3.x-dev',
        'project' => 'uc_views',
        'datestamp' => '1298620535',
        'php' => '4.3.5',
      ),
      'project' => 'uc_views',
      'version' => '6.x-3.x-dev',
    ),
    'uc_views_attribute' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/uc_views/uc_views_attribute/uc_views_attribute.module',
      'name' => 'uc_views_attribute',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Ubercart Views Attribute',
        'description' => 'Create views on Ubercart Attribute data.',
        'dependencies' => 
        array (
          0 => 'uc_stock',
          1 => 'uc_product',
          2 => 'uc_order',
          3 => 'uc_attribute',
          4 => 'views',
          5 => 'uc_views',
        ),
        'package' => 'Ubercart - views',
        'core' => '6.x',
        'version' => '6.x-3.x-dev',
        'project' => 'uc_views',
        'datestamp' => '1298620535',
        'php' => '4.3.5',
      ),
      'project' => 'uc_views',
      'version' => '6.x-3.x-dev',
    ),
    'uc_views_bulk_operations' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/uc_views/uc_views_bulk_operations/uc_views_bulk_operations.module',
      'name' => 'uc_views_bulk_operations',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Ubercart Views Bulk Operations',
        'description' => 'Print, delete or change the status of multiple orders, or add multiple nodes to the cart at once.',
        'dependencies' => 
        array (
          0 => 'uc_views',
          1 => 'views_bulk_operations',
        ),
        'package' => 'Ubercart - views',
        'core' => '6.x',
        'version' => '6.x-3.x-dev',
        'project' => 'uc_views',
        'datestamp' => '1298620535',
        'php' => '4.3.5',
      ),
      'project' => 'uc_views',
      'version' => '6.x-3.x-dev',
    ),
    'uc_views_marketing' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/uc_views/uc_views_marketing/uc_views_marketing.module',
      'name' => 'uc_views_marketing',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Ubercart Views Marketing',
        'description' => 'Create views on Ubercart data for marketing purposes, such as a block for new products, lists of a users purchased products, most popular products, etc.',
        'dependencies' => 
        array (
          0 => 'uc_views',
        ),
        'package' => 'Ubercart - views',
        'core' => '6.x',
        'version' => '6.x-3.x-dev',
        'project' => 'uc_views',
        'datestamp' => '1298620535',
        'php' => '4.3.5',
      ),
      'project' => 'uc_views',
      'version' => '6.x-3.x-dev',
    ),
    'uc_weightquote' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib-patched/ubercart/shipping/uc_weightquote/uc_weightquote.module',
      'name' => 'uc_weightquote',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Weight quote',
        'description' => 'Assigns a shipping rate to products based on weight.',
        'dependencies' => 
        array (
          0 => 'uc_quote',
        ),
        'package' => 'Ubercart - fulfillment',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-2.6',
        'project' => 'ubercart',
        'datestamp' => '1312031519',
      ),
      'project' => 'ubercart',
      'version' => '6.x-2.6',
    ),
    'ufo' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/swftools/ufo/ufo.module',
      'name' => 'ufo',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UFO',
        'description' => 'Enables support for the UFO embedding method.',
        'package' => 'SWF Tools',
        'dependencies' => 
        array (
          0 => 'swftools',
        ),
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'swftools',
        'datestamp' => '1240829764',
        'php' => '4.3.5',
      ),
      'project' => 'swftools',
      'version' => '6.x-2.5',
    ),
    'update' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/update/update.module',
      'name' => 'update',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update status',
        'description' => 'Checks the status of available updates for Drupal and your installed modules and themes.',
        'version' => '6.22',
        'package' => 'Core - optional',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'update_advanced' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/update_advanced/update_advanced.module',
      'name' => 'update_advanced',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update status advanced settings',
        'description' => 'Adds advanced settings and extra functionality to the Update status module in core.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'update',
        ),
        'version' => '6.x-1.1',
        'project' => 'update_advanced',
        'datestamp' => '1254623487',
        'php' => '4.3.5',
      ),
      'project' => 'update_advanced',
      'version' => '6.x-1.1',
    ),
    'upgrade_assist' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/upgrade_status/upgrade_assist/upgrade_assist.module',
      'name' => 'upgrade_assist',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Upgrade Assist',
        'description' => 'Assists in upgrading Drupal to a new major version.',
        'core' => '6.x',
        'files' => 
        array (
          0 => 'upgrade_assist.module',
        ),
        'version' => '6.x-1.1',
        'project' => 'upgrade_status',
        'datestamp' => '1286923264',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'upgrade_status',
      'version' => '6.x-1.1',
    ),
    'upgrade_status' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/upgrade_status/upgrade_status.module',
      'name' => 'upgrade_status',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Upgrade status',
        'description' => 'Checks to see if the installed modules are available for the next major version of Drupal.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'update',
        ),
        'version' => '6.x-1.1',
        'project' => 'upgrade_status',
        'datestamp' => '1286923264',
        'php' => '4.3.5',
      ),
      'project' => 'upgrade_status',
      'version' => '6.x-1.1',
    ),
    'upload' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/upload/upload.module',
      'name' => 'upload',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Upload',
        'description' => 'Allows users to upload and attach files to content.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'user' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/modules/user/user.module',
      'name' => 'user',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User',
        'description' => 'Manages the user registration and login system.',
        'package' => 'Core - required',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'user2userpoints' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/userpoints_contrib/user2userpoints/user2userpoints.module',
      'name' => 'user2userpoints',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User to User Points',
        'description' => 'Users are able to send points to other users.',
        'package' => 'Userpoints',
        'dependencies' => 
        array (
          0 => 'userpoints',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0-beta1',
        'project' => 'userpoints_contrib',
        'datestamp' => '1270651218',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.0-beta1',
    ),
    'userpoints' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/userpoints/userpoints.module',
      'name' => 'userpoints',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6012',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints',
        'description' => 'Userpoints core: API module for recording points for other modules.',
        'package' => 'Userpoints',
        'core' => '6.x',
        'version' => '6.x-1.2',
        'project' => 'userpoints',
        'datestamp' => '1296670918',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'userpoints',
      'version' => '6.x-1.2',
    ),
    'userpoints_admin_email' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/userpoints_contrib/userpoints_admin_email/userpoints_admin_email.module',
      'name' => 'userpoints_admin_email',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints Admin Email',
        'description' => 'Notifies the site admin when any user reaches a certain number of points',
        'dependencies' => 
        array (
          0 => 'userpoints',
        ),
        'package' => 'Userpoints',
        'core' => '6.x',
        'version' => '6.x-1.0-beta1',
        'project' => 'userpoints_contrib',
        'datestamp' => '1270651218',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.0-beta1',
    ),
    'userpoints_badges' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/userpoints_contrib/userpoints_badges/userpoints_badges.module',
      'name' => 'userpoints_badges',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints Badges',
        'description' => 'Assign badges to users as they get certain number of userpoints.',
        'package' => 'Userpoints',
        'dependencies' => 
        array (
          0 => 'userpoints',
          1 => 'user_badges',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0-beta1',
        'project' => 'userpoints_contrib',
        'datestamp' => '1270651218',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.0-beta1',
    ),
    'userpoints_cap' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/userpoints_contrib/userpoints_cap/userpoints_cap.module',
      'name' => 'userpoints_cap',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints Cap',
        'description' => 'Limit the number of points a user can earn.',
        'package' => 'Userpoints',
        'dependencies' => 
        array (
          0 => 'userpoints',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0-beta1',
        'project' => 'userpoints_contrib',
        'datestamp' => '1270651218',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.0-beta1',
    ),
    'userpoints_commentspertype' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/userpoints_contrib/userpoints_commentspertype/userpoints_commentspertype.module',
      'name' => 'userpoints_commentspertype',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints Comments per Type',
        'description' => 'Users get points for comments. Comments for different node types can be different.',
        'package' => 'Userpoints',
        'dependencies' => 
        array (
          0 => 'userpoints',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0-beta1',
        'project' => 'userpoints_contrib',
        'datestamp' => '1270651218',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.0-beta1',
    ),
    'userpoints_download' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/userpoints_contrib/userpoints_download/userpoints_download.module',
      'name' => 'userpoints_download',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints Download',
        'description' => 'Deduct points from users when they download private files',
        'package' => 'Userpoints',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'userpoints',
          1 => 'upload',
        ),
        'version' => '6.x-1.0-beta1',
        'project' => 'userpoints_contrib',
        'datestamp' => '1270651218',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.0-beta1',
    ),
    'userpoints_flag' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/userpoints_contrib/userpoints_flag/userpoints_flag.module',
      'name' => 'userpoints_flag',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User Points Flag',
        'description' => 'Integrates User Points with flag API.',
        'package' => 'Userpoints',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'userpoints',
          1 => 'flag',
        ),
        'version' => '6.x-1.0-beta1',
        'project' => 'userpoints_contrib',
        'datestamp' => '1270651218',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.0-beta1',
    ),
    'userpoints_invite' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/userpoints_contrib/userpoints_invite/userpoints_invite.module',
      'name' => 'userpoints_invite',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints Invite',
        'description' => 'Users earn points when they invite other, and when others register.',
        'package' => 'Userpoints',
        'dependencies' => 
        array (
          0 => 'userpoints',
          1 => 'invite',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0-beta1',
        'project' => 'userpoints_contrib',
        'datestamp' => '1270651218',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.0-beta1',
    ),
    'userpoints_login' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/userpoints_login/userpoints_login.module',
      'name' => 'userpoints_login',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints Login',
        'description' => 'Users earn points for each login.',
        'package' => 'Userpoints',
        'core' => '6.x',
        'version' => '6.x-1.1',
        'project' => 'userpoints_login',
        'datestamp' => '1240967775',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_login',
      'version' => '6.x-1.1',
    ),
    'userpoints_modr8' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/userpoints_contrib/userpoints_modr8/userpoints_modr8.module',
      'name' => 'userpoints_modr8',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints Modr8',
        'description' => 'Moderators get awarded points for moderating via the modr8 module',
        'package' => 'Userpoints',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'userpoints',
        ),
        'version' => '6.x-1.0-beta1',
        'project' => 'userpoints_contrib',
        'datestamp' => '1270651218',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.0-beta1',
    ),
    'userpoints_nc' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/userpoints_nc/userpoints_nc.module',
      'name' => 'userpoints_nc',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints Nodes and Comments',
        'description' => 'Grants userpoints for posting nodes or comments or moderating comments',
        'package' => 'Userpoints',
        'dependencies' => 
        array (
          0 => 'userpoints',
        ),
        'core' => '6.x',
        'version' => '6.x-1.1',
        'project' => 'userpoints_nc',
        'datestamp' => '1231497640',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_nc',
      'version' => '6.x-1.1',
    ),
    'userpoints_nodelimit' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/userpoints_contrib/userpoints_nodelimit/userpoints_nodelimit.module',
      'name' => 'userpoints_nodelimit',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User Points Node Limit',
        'description' => 'Limits the creation of specific nodes based on the available number of userpoints',
        'package' => 'Userpoints',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'userpoints',
        ),
        'version' => '6.x-1.0-beta1',
        'project' => 'userpoints_contrib',
        'datestamp' => '1270651218',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.0-beta1',
    ),
    'userpoints_no_negative' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/userpoints_contrib/userpoints_no_negative/userpoints_no_negative.module',
      'name' => 'userpoints_no_negative',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints No Negative',
        'description' => 'Has no UI.  Once enabled, prevents transactions that would move accounts negative.  Allows currently negative users to make positive transactions.',
        'package' => 'Userpoints',
        'dependencies' => 
        array (
          0 => 'userpoints',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0-beta1',
        'project' => 'userpoints_contrib',
        'datestamp' => '1270651218',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.0-beta1',
    ),
    'userpoints_pageviews' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/userpoints_contrib/userpoints_pageviews/userpoints_pageviews.module',
      'name' => 'userpoints_pageviews',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints Page Views',
        'description' => 'Gives points to content creators based on page views',
        'package' => 'Userpoints',
        'dependencies' => 
        array (
          0 => 'userpoints',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0-beta1',
        'project' => 'userpoints_contrib',
        'datestamp' => '1270651218',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.0-beta1',
    ),
    'userpoints_register' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/userpoints_contrib/userpoints_register/userpoints_register.module',
      'name' => 'userpoints_register',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints Register',
        'description' => 'Users earn points just for registering on the site',
        'package' => 'Userpoints',
        'dependencies' => 
        array (
          0 => 'userpoints',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0-beta1',
        'project' => 'userpoints_contrib',
        'datestamp' => '1270651218',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.0-beta1',
    ),
    'userpoints_reset' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/userpoints_contrib/userpoints_reset/userpoints_reset.module',
      'name' => 'userpoints_reset',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints Reset',
        'description' => 'Resets all userpoints on the site.',
        'package' => 'Userpoints',
        'dependencies' => 
        array (
          0 => 'userpoints',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0-beta1',
        'project' => 'userpoints_contrib',
        'datestamp' => '1270651218',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.0-beta1',
    ),
    'userpoints_retroactive' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/userpoints_contrib/userpoints_retroactive/userpoints_retroactive.module',
      'name' => 'userpoints_retroactive',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints Retroactive',
        'description' => 'Calculate userpoints for nodes and comments created so far.',
        'package' => 'Userpoints',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'userpoints',
        ),
        'version' => '6.x-1.0-beta1',
        'project' => 'userpoints_contrib',
        'datestamp' => '1270651218',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.0-beta1',
    ),
    'userpoints_revision' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/userpoints_contrib/userpoints_revision/userpoints_revision.module',
      'name' => 'userpoints_revision',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints Revision',
        'description' => 'Gives users points for creating revisions on nodes that are not their own.',
        'core' => '6.x',
        'package' => 'Userpoints',
        'version' => '6.x-1.0-beta1',
        'project' => 'userpoints_contrib',
        'dependencies' => 
        array (
          0 => 'userpoints',
        ),
        'datestamp' => '1270651218',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.0-beta1',
    ),
    'userpoints_role' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/userpoints_contrib/userpoints_role/userpoints_role.module',
      'name' => 'userpoints_role',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints Role',
        'description' => 'Users join/leave roles as they earn/lose certain points threshold, and get an email.',
        'package' => 'Userpoints',
        'dependencies' => 
        array (
          0 => 'userpoints',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0-beta1',
        'project' => 'userpoints_contrib',
        'datestamp' => '1270651218',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.0-beta1',
    ),
    'userpoints_role_exempt' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/userpoints_contrib/userpoints_role_exempt/userpoints_role_exempt.module',
      'name' => 'userpoints_role_exempt',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Role exempt',
        'description' => 'Exempts certain roles from earning userpoints. Useful for admin and moderators.',
        'package' => 'Userpoints',
        'dependencies' => 
        array (
          0 => 'userpoints',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0-beta1',
        'project' => 'userpoints_contrib',
        'datestamp' => '1270651218',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.0-beta1',
    ),
    'userpoints_rules' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/userpoints/userpoints_rules.module',
      'name' => 'userpoints_rules',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints rules integration',
        'description' => 'Provides integration of Userpoints with rules',
        'dependencies' => 
        array (
          0 => 'userpoints',
          1 => 'rules',
        ),
        'package' => 'Userpoints',
        'core' => '6.x',
        'version' => '6.x-1.2',
        'project' => 'userpoints',
        'datestamp' => '1296670918',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints',
      'version' => '6.x-1.2',
    ),
    'userpoints_service' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/userpoints/userpoints_service.module',
      'name' => 'userpoints_service',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints Service',
        'description' => 'Exposes userpoints functionality via XML-RPC',
        'package' => 'Userpoints',
        'dependencies' => 
        array (
          0 => 'userpoints',
          1 => 'services',
        ),
        'core' => '6.x',
        'version' => '6.x-1.2',
        'project' => 'userpoints',
        'datestamp' => '1296670918',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints',
      'version' => '6.x-1.2',
    ),
    'userpoints_user_picture' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/userpoints_user_picture/userpoints_user_picture.module',
      'name' => 'userpoints_user_picture',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Userpoints User Picture',
        'description' => 'Users earn points for adding a user picture.',
        'package' => 'Userpoints',
        'dependencies' => 
        array (
          0 => 'userpoints',
        ),
        'core' => '6.x',
        'version' => '6.x-1.2',
        'project' => 'userpoints_user_picture',
        'datestamp' => '1296018707',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_user_picture',
      'version' => '6.x-1.2',
    ),
    'userreference' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/cck/modules/userreference/userreference.module',
      'name' => 'userreference',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User Reference',
        'description' => 'Defines a field type for referencing a user from a node.',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'text',
          2 => 'optionwidgets',
        ),
        'package' => 'CCK',
        'core' => '6.x',
        'version' => '6.x-2.9',
        'project' => 'cck',
        'datestamp' => '1294407979',
        'php' => '4.3.5',
      ),
      'project' => 'cck',
      'version' => '6.x-2.9',
    ),
    'user_badges' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/user_badges/user_badges.module',
      'name' => 'user_badges',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6104',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User badges',
        'description' => 'Enables assignment of graphical badges to users and roles.',
        'dependencies' => 
        array (
          0 => 'upload',
        ),
        'core' => '6.x',
        'version' => '6.x-1.x-dev',
        'project' => 'user_badges',
        'datestamp' => '1298620587',
        'php' => '4.3.5',
      ),
      'project' => 'user_badges',
      'version' => '6.x-1.x-dev',
    ),
    'user_badges_products' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/user_badges/user_badges_products.module',
      'name' => 'user_badges_products',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User Product Badges',
        'description' => 'Enables assignment of graphical badges to users and roles.',
        'dependencies' => 
        array (
          0 => 'user_badges',
          1 => 'ec_product',
        ),
        'core' => '6.x',
        'version' => '6.x-1.x-dev',
        'project' => 'user_badges',
        'datestamp' => '1298620587',
        'php' => '4.3.5',
      ),
      'project' => 'user_badges',
      'version' => '6.x-1.x-dev',
    ),
    'user_relationships_api' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/user_relationships/user_relationships_api/user_relationships_api.module',
      'name' => 'user_relationships_api',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6103',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UR-API',
        'description' => 'API for User Relationships. This will only provide the programmer interface.',
        'package' => 'User Relationships',
        'core' => '6.x',
        'version' => '6.x-1.0',
        'project' => 'user_relationships',
        'datestamp' => '1293042058',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0',
    ),
    'user_relationships_panels_visibility' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/user_relationships/user_relationships_panels_visibility/user_relationships_panels_visibility.module',
      'name' => 'user_relationships_panels_visibility',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UR-Panels Visibility',
        'description' => 'Provide visibility for panels panes and pages based on User Relationships',
        'dependencies' => 
        array (
          0 => 'user_relationships_api',
          1 => 'ctools',
        ),
        'core' => '6.x',
        'package' => 'User Relationships',
        'version' => '6.x-1.0',
        'project' => 'user_relationships',
        'datestamp' => '1293042058',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0',
    ),
    'user_relationships_rules' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/user_relationships/user_relationships_rules/user_relationships_rules.module',
      'name' => 'user_relationships_rules',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UR-Rules',
        'description' => 'Rules integration for User Relationships.',
        'package' => 'User Relationships',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'user_relationships_api',
          1 => 'rules',
        ),
        'version' => '6.x-1.0',
        'project' => 'user_relationships',
        'datestamp' => '1293042058',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0',
    ),
    'user_relationships_ui' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/user_relationships/user_relationships_ui/user_relationships_ui.module',
      'name' => 'user_relationships_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UR-UI',
        'description' => 'User Relationships UI. This enables basic UI functionality for User Relationships',
        'package' => 'User Relationships',
        'dependencies' => 
        array (
          0 => 'user_relationships_api',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0',
        'project' => 'user_relationships',
        'datestamp' => '1293042058',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0',
    ),
    'user_relationship_blocks' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/user_relationships/user_relationship_blocks/user_relationship_blocks.module',
      'name' => 'user_relationship_blocks',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UR-Blocks',
        'description' => 'Blocks that can be used with User Relationships',
        'dependencies' => 
        array (
          0 => 'user_relationships_api',
          1 => 'user_relationships_ui',
        ),
        'package' => 'User Relationships',
        'core' => '6.x',
        'version' => '6.x-1.0',
        'project' => 'user_relationships',
        'datestamp' => '1293042058',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0',
    ),
    'user_relationship_defaults' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/user_relationships/user_relationship_defaults/user_relationship_defaults.module',
      'name' => 'user_relationship_defaults',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UR-Defaults',
        'description' => 'Allows admins to specify relationships that are automatically created when a new user joins',
        'dependencies' => 
        array (
          0 => 'user_relationships_api',
          1 => 'user_relationships_ui',
        ),
        'package' => 'User Relationships',
        'core' => '6.x',
        'version' => '6.x-1.0',
        'project' => 'user_relationships',
        'datestamp' => '1293042058',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0',
    ),
    'user_relationship_elaborations' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/user_relationships/user_relationship_elaborations/user_relationship_elaborations.module',
      'name' => 'user_relationship_elaborations',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UR-Elaborations',
        'description' => 'Allow users to elaborate on their relationships with others',
        'dependencies' => 
        array (
          0 => 'user_relationships_api',
        ),
        'package' => 'User Relationships',
        'core' => '6.x',
        'version' => '6.x-1.0',
        'project' => 'user_relationships',
        'datestamp' => '1293042058',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0',
    ),
    'user_relationship_implications' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/user_relationships/user_relationship_implications/user_relationship_implications.module',
      'name' => 'user_relationship_implications',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UR-Implications',
        'description' => 'Lets admins create implied relationships. For example \'Manager implies Coworker\'',
        'dependencies' => 
        array (
          0 => 'user_relationships_api',
          1 => 'user_relationships_ui',
        ),
        'package' => 'User Relationships',
        'core' => '6.x',
        'version' => '6.x-1.0',
        'project' => 'user_relationships',
        'datestamp' => '1293042058',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0',
    ),
    'user_relationship_invites' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/user_relationships/user_relationship_invites/user_relationship_invites.module',
      'name' => 'user_relationship_invites',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UR-Invite',
        'description' => 'Gives users the option of specifying a relationship when inviting new users',
        'dependencies' => 
        array (
          0 => 'user_relationships_api',
          1 => 'user_relationships_ui',
          2 => 'invite',
        ),
        'core' => '6.x',
        'package' => 'User Relationships',
        'version' => '6.x-1.0',
        'project' => 'user_relationships',
        'datestamp' => '1293042058',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0',
    ),
    'user_relationship_mailer' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/user_relationships/user_relationship_mailer/user_relationship_mailer.module',
      'name' => 'user_relationship_mailer',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6100',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UR-Mailer',
        'description' => 'Gives the option to mail users when about relationship events (request, remove, disapprove, approve, etc)',
        'dependencies' => 
        array (
          0 => 'user_relationships_api',
          1 => 'user_relationships_ui',
        ),
        'package' => 'User Relationships',
        'core' => '6.x',
        'version' => '6.x-1.0',
        'project' => 'user_relationships',
        'datestamp' => '1293042058',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0',
    ),
    'user_relationship_migrate' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/user_relationships/user_relationship_migrate/user_relationship_migrate.module',
      'name' => 'user_relationship_migrate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UR Migrate Buddylist2',
        'description' => 'Allows admins to migrate buddylist2 relationships to user relationships',
        'dependencies' => 
        array (
          0 => 'user_relationships_api',
        ),
        'package' => 'User Relationships',
        'core' => '6.x',
        'version' => '6.x-1.0',
        'project' => 'user_relationships',
        'datestamp' => '1293042058',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0',
    ),
    'user_relationship_node_access' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/user_relationships/user_relationship_node_access/user_relationship_node_access.module',
      'name' => 'user_relationship_node_access',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UR-Node Access',
        'description' => 'Provides per node access control based on relationship to author',
        'dependencies' => 
        array (
          0 => 'user_relationships_api',
        ),
        'package' => 'User Relationships',
        'core' => '6.x',
        'version' => '6.x-1.0',
        'project' => 'user_relationships',
        'datestamp' => '1293042058',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0',
    ),
    'user_relationship_service' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/user_relationships/user_relationship_service/user_relationship_service.module',
      'name' => 'user_relationship_service',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UR-Services',
        'description' => 'Provides functions of User Relationships to Services module.',
        'package' => 'User Relationships',
        'dependencies' => 
        array (
          0 => 'services',
          1 => 'user_relationships_api',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0',
        'project' => 'user_relationships',
        'datestamp' => '1293042058',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0',
    ),
    'user_relationship_views' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/user_relationships/user_relationship_views/user_relationship_views.module',
      'name' => 'user_relationship_views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UR-Views',
        'description' => 'Integrates User Relationships with Views',
        'dependencies' => 
        array (
          0 => 'user_relationships_api',
          1 => 'views',
        ),
        'core' => '6.x',
        'package' => 'User Relationships',
        'version' => '6.x-1.0',
        'project' => 'user_relationships',
        'datestamp' => '1293042058',
        'php' => '4.3.5',
      ),
      'project' => 'user_relationships',
      'version' => '6.x-1.0',
    ),
    'util' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/util/util.module',
      'name' => 'util',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Util',
        'description' => 'Enables Menu parent for the util modules',
        'package' => 'Util',
        'core' => '6.x',
        'version' => '6.x-3.0',
        'project' => 'util',
        'datestamp' => '1288295149',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'util',
      'version' => '6.x-3.0',
    ),
    'varnish' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/varnish/varnish.module',
      'name' => 'varnish',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Varnish',
        'description' => 'Provides integration with the Varnish HTTP accelerator.',
        'core' => '6.x',
        'package' => 'Caching',
        'version' => '6.x-1.0',
        'project' => 'varnish',
        'datestamp' => '1306353117',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'varnish',
      'version' => '6.x-1.0',
    ),
    'vd' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/gaither.com/modules/vd/vd.module',
      'name' => 'vd',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '20',
      'info' => 
      array (
        'name' => 'Views displays',
        'description' => 'Extended views display modes',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'ds',
          1 => 'views',
        ),
        'package' => 'Display suite',
        'version' => '6.x-1.3',
        'project' => 'vd',
        'datestamp' => '1292540640',
        'php' => '4.3.5',
      ),
      'project' => 'vd',
      'version' => '6.x-1.3',
    ),
    'vertical_tabs' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/vertical_tabs/vertical_tabs.module',
      'name' => 'vertical_tabs',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Vertical Tabs',
        'description' => 'Provides vertical tabs for supported forms like the node edit page.',
        'core' => '6.x',
        'package' => 'User interface',
        'recommends' => 
        array (
          0 => 'form',
        ),
        'version' => '6.x-1.0-rc2',
        'project' => 'vertical_tabs',
        'datestamp' => '1309875122',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'vertical_tabs',
      'version' => '6.x-1.0-rc2',
    ),
    'videos' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/features/videos/videos.module',
      'name' => 'videos',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'content',
          1 => 'emfield',
          2 => 'emvideo',
          3 => 'features',
          4 => 'media_bitsontherun',
          5 => 'media_youtube',
          6 => 'views',
          7 => 'views_feature',
        ),
        'description' => 'Video content type and views to quickly add a Video section to any site.',
        'features' => 
        array (
          'content' => 
          array (
            0 => 'microsite_videos-field_microsite_video_embed_code',
          ),
          'node' => 
          array (
            0 => 'microsite_videos',
          ),
          'user_permission' => 
          array (
            0 => 'create microsite_videos content',
            1 => 'delete any microsite_videos content',
            2 => 'delete own microsite_videos content',
            3 => 'edit any microsite_videos content',
            4 => 'edit own microsite_videos content',
          ),
          'views' => 
          array (
            0 => 'videos',
          ),
          'views_api' => 
          array (
            0 => 'api:2',
          ),
        ),
        'name' => 'Videos',
        'package' => 'Features',
        'project' => 'videos',
        'project status url' => 'http://features.devmcn.com/fserver',
        'version' => '6.x-2.0',
        'php' => '4.3.5',
      ),
      'project' => 'videos',
      'version' => '6.x-2.0',
    ),
    'views' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/views/views.module',
      'name' => 'views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6009',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'Views',
        'description' => 'Create customized lists and queries from your database.',
        'package' => 'Views',
        'core' => '6.x',
        'version' => '6.x-2.12',
        'project' => 'views',
        'datestamp' => '1292446272',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'views',
      'version' => '6.x-2.12',
    ),
    'viewsdisplaytabs' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/gaither.com/modules/viewsdisplaytabs/viewsdisplaytabs.module',
      'name' => 'viewsdisplaytabs',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Display Tabs',
        'description' => 'A module that exposes a view\'s displays as tabs.',
        'package' => 'Views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0-beta6',
        'project' => 'viewsdisplaytabs',
        'datestamp' => '1267054214',
        'php' => '4.3.5',
      ),
      'project' => 'viewsdisplaytabs',
      'version' => '6.x-1.0-beta6',
    ),
    'views_accordion' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/views_accordion/views_accordion.module',
      'name' => 'views_accordion',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Accordion',
        'description' => 'Provides an accordion views display plugin.',
        'package' => 'Views',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'version' => '6.x-1.4',
        'project' => 'views_accordion',
        'datestamp' => '1286530277',
        'php' => '4.3.5',
      ),
      'project' => 'views_accordion',
      'version' => '6.x-1.4',
    ),
    'views_attach' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/views_attach/views_attach.module',
      'name' => 'views_attach',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views attach',
        'description' => 'Provides new Views display types that can be attached to nodes or users.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'suggests' => 
        array (
          0 => 'token',
        ),
        'package' => 'Views',
        'version' => '6.x-2.2',
        'project' => 'views_attach',
        'datestamp' => '1255040204',
        'php' => '4.3.5',
      ),
      'project' => 'views_attach',
      'version' => '6.x-2.2',
    ),
    'views_autorefresh' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/views_hacks/views_autorefresh/views_autorefresh.module',
      'name' => 'views_autorefresh',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Auto-refresh',
        'description' => 'Allows auto-refreshing of Ajax-enabled views.',
        'package' => 'Views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0-beta2',
        'project' => 'views_hacks',
        'datestamp' => '1307120522',
        'php' => '4.3.5',
      ),
      'project' => 'views_hacks',
      'version' => '6.x-1.0-beta2',
    ),
    'views_block' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/views_hacks/views_block/views_block.module',
      'name' => 'views_block',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Type Block',
        'description' => 'Exposes blocks as Views objects.',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'block',
          2 => 'views_bulk_operations',
        ),
        'package' => 'Views',
        'core' => '6.x',
        'version' => '6.x-1.0-beta2',
        'project' => 'views_hacks',
        'datestamp' => '1307120522',
        'php' => '4.3.5',
      ),
      'project' => 'views_hacks',
      'version' => '6.x-1.0-beta2',
    ),
    'views_bonus_export' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/views_bonus/export/views_bonus_export.module',
      'name' => 'views_bonus_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bonus: Views Export',
        'description' => 'Plugin to export views a couple of formats including Comma Separated Values(CSV), Doc or XML',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'package' => 'Views',
        'core' => '6.x',
        'version' => '6.x-1.1',
        'project' => 'views_bonus',
        'datestamp' => '1276701909',
        'php' => '4.3.5',
      ),
      'project' => 'views_bonus',
      'version' => '6.x-1.1',
    ),
    'views_bonus_paged_feed' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/views_bonus/paged_feed/views_bonus_paged_feed.module',
      'name' => 'views_bonus_paged_feed',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bonus: Paged Feed',
        'description' => 'Like a feed display on it pages. How cool!',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'package' => 'Views',
        'core' => '6.x',
        'version' => '6.x-1.1',
        'project' => 'views_bonus',
        'datestamp' => '1276701909',
        'php' => '4.3.5',
      ),
      'project' => 'views_bonus',
      'version' => '6.x-1.1',
    ),
    'views_bonus_panels' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/views_bonus/panels/views_bonus_panels.module',
      'name' => 'views_bonus_panels',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bonus: Panels',
        'description' => 'Various views style plugins to put views nodes in panels',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'panels',
        ),
        'package' => 'Views',
        'core' => '6.x',
        'version' => '6.x-1.1',
        'project' => 'views_bonus',
        'datestamp' => '1276701909',
        'php' => '4.3.5',
      ),
      'project' => 'views_bonus',
      'version' => '6.x-1.1',
    ),
    'views_bulk_operations' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/views_bulk_operations/views_bulk_operations.module',
      'name' => 'views_bulk_operations',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Bulk Operations',
        'description' => 'Exposes new Views style \'Bulk Operations\' for selecting multiple nodes and applying operations on them.',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'package' => 'Views',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-1.11-beta1',
        'project' => 'views_bulk_operations',
        'datestamp' => '1310060820',
      ),
      'project' => 'views_bulk_operations',
      'version' => '6.x-1.11-beta1',
    ),
    'views_clone_display' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/gaither.com/modules/views_clone_display/views_clone_display.module',
      'name' => 'views_clone_display',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views clone display',
        'description' => 'Utility for clone display views',
        'dependencies' => 
        array (
          0 => 'views_ui',
        ),
        'package' => 'Views',
        'core' => '6.x',
        'version' => '6.x-1.1',
        'project' => 'views_clone_display',
        'datestamp' => '1299189369',
        'php' => '4.3.5',
      ),
      'project' => 'views_clone_display',
      'version' => '6.x-1.1',
    ),
    'views_composite_exposed_form' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/views_hacks/views_composite_exposed_form/views_composite_exposed_form.module',
      'name' => 'views_composite_exposed_form',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Composite Exposed Form Plugin',
        'description' => 'Allows multiple exposed form plugins to be activated simultaneously.',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'package' => 'Views',
        'core' => '6.x',
        'version' => '6.x-1.0-beta2',
        'project' => 'views_hacks',
        'datestamp' => '1307120522',
        'php' => '4.3.5',
      ),
      'project' => 'views_hacks',
      'version' => '6.x-1.0-beta2',
    ),
    'views_content' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/ctools/views_content/views_content.module',
      'name' => 'views_content',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views content panes',
        'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'views',
        ),
        'core' => '6.x',
        'version' => '6.x-1.8',
        'project' => 'ctools',
        'datestamp' => '1288393844',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.8',
    ),
    'views_customfield' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/views_customfield/views_customfield.module',
      'name' => 'views_customfield',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Custom Field',
        'description' => 'Provides a number of custom fields (rownumber, phpcode, ...).',
        'core' => '6.x',
        'package' => 'Views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'version' => '6.x-1.0',
        'project' => 'views_customfield',
        'datestamp' => '1240962075',
        'php' => '4.3.5',
      ),
      'project' => 'views_customfield',
      'version' => '6.x-1.0',
    ),
    'views_display_block_path' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/views_hacks/views_display_block_path/views_display_block_path.module',
      'name' => 'views_display_block_path',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Display Block Path',
        'description' => 'Extends block display plugin to support URL path and use exposed filter form without Ajax.',
        'package' => 'Views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0-beta2',
        'project' => 'views_hacks',
        'datestamp' => '1307120522',
        'php' => '4.3.5',
      ),
      'project' => 'views_hacks',
      'version' => '6.x-1.0-beta2',
    ),
    'views_export' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/views/views_export/views_export.module',
      'name' => 'views_export',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views exporter',
        'description' => 'Allows exporting multiple views at once.',
        'package' => 'Views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'core' => '6.x',
        'version' => '6.x-2.12',
        'project' => 'views',
        'datestamp' => '1292446272',
        'php' => '4.3.5',
      ),
      'project' => 'views',
      'version' => '6.x-2.12',
    ),
    'views_feature' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/features/views_feature/views_feature.module',
      'name' => 'views_feature',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'views',
          2 => 'views_export',
          3 => 'views_ui',
        ),
        'description' => 'A helper module to allow views on sites.',
        'features' => 
        array (
          'user' => 
          array (
            0 => 'access all views',
            1 => 'administer views',
            2 => 'use views exporter',
          ),
        ),
        'name' => 'Views Feature',
        'package' => 'Features',
        'project' => 'views_feature',
        'project status url' => 'http://features.devmcn.com/fserver',
        'version' => '6.x-1.0-alpha',
        'php' => '4.3.5',
      ),
      'project' => 'views_feature',
      'version' => '6.x-1.0-alpha',
    ),
    'views_field_view' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/views_field_view/views_field_view.module',
      'name' => 'views_field_view',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'views_field_view',
        'description' => 'Embeds a view into a view as field',
        'core' => '6.x',
        'version' => '6.x-1.0-beta1',
        'project' => 'views_field_view',
        'datestamp' => '1283541410',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'views_field_view',
      'version' => '6.x-1.0-beta1',
    ),
    'views_filters_autosubmit' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/views_hacks/views_filters_autosubmit/views_filters_autosubmit.module',
      'name' => 'views_filters_autosubmit',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Filters Auto-submit',
        'description' => 'Auto-submits exposed filters on change.',
        'package' => 'Views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0-beta2',
        'project' => 'views_hacks',
        'datestamp' => '1307120522',
        'php' => '4.3.5',
      ),
      'project' => 'views_hacks',
      'version' => '6.x-1.0-beta2',
    ),
    'views_filters_reset' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/views_hacks/views_filters_reset/views_filters_reset.module',
      'name' => 'views_filters_reset',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Filters Reset',
        'description' => 'Adds a "Reset" button to exposed filters.',
        'package' => 'Views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0-beta2',
        'project' => 'views_hacks',
        'datestamp' => '1307120522',
        'php' => '4.3.5',
      ),
      'project' => 'views_hacks',
      'version' => '6.x-1.0-beta2',
    ),
    'views_filters_selective' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/views_hacks/views_filters_selective/views_filters_selective.module',
      'name' => 'views_filters_selective',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Selective Exposed Filters',
        'description' => 'Restrict exposed filter values to those present in the result set.',
        'package' => 'Views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0-beta2',
        'project' => 'views_hacks',
        'datestamp' => '1307120522',
        'php' => '4.3.5',
      ),
      'project' => 'views_hacks',
      'version' => '6.x-1.0-beta2',
    ),
    'views_flipped_table' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/views_hacks/views_flipped_table/views_flipped_table.module',
      'name' => 'views_flipped_table',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Flipped Table',
        'description' => 'Table style with rows and columns flipped.',
        'package' => 'Views',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'version' => '6.x-1.0-beta2',
        'project' => 'views_hacks',
        'datestamp' => '1307120522',
        'php' => '4.3.5',
      ),
      'project' => 'views_hacks',
      'version' => '6.x-1.0-beta2',
    ),
    'views_galleriffic' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'views_galleriffic',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'views_groupby' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'views_groupby',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'views_perm' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/views_hacks/views_perm/views_perm.module',
      'name' => 'views_perm',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Perm',
        'description' => 'Exposes permission information to Views.',
        'package' => 'Views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0-beta2',
        'project' => 'views_hacks',
        'datestamp' => '1307120522',
        'php' => '4.3.5',
      ),
      'project' => 'views_hacks',
      'version' => '6.x-1.0-beta2',
    ),
    'views_slideshow' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/views_slideshow/views_slideshow.module',
      'name' => 'views_slideshow',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Slideshow',
        'description' => 'Provides a View style that displays rows as a jQuery slideshow.',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'package' => 'Views',
        'core' => '6.x',
        'version' => '6.x-2.3',
        'project' => 'views_slideshow',
        'datestamp' => '1279683019',
        'php' => '4.3.5',
      ),
      'project' => 'views_slideshow',
      'version' => '6.x-2.3',
    ),
    'views_slideshow_singleframe' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/views_slideshow/contrib/views_slideshow_singleframe/views_slideshow_singleframe.module',
      'name' => 'views_slideshow_singleframe',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Slideshow: SingleFrame',
        'description' => 'Adds a Single Frame slideshow mode to Views Slideshows.',
        'dependencies' => 
        array (
          0 => 'views_slideshow',
        ),
        'package' => 'Views',
        'core' => '6.x',
        'version' => '6.x-2.3',
        'project' => 'views_slideshow',
        'datestamp' => '1279683019',
        'php' => '4.3.5',
      ),
      'project' => 'views_slideshow',
      'version' => '6.x-2.3',
    ),
    'views_slideshow_thumbnailhover' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/views_slideshow/contrib/views_slideshow_thumbnailhover/views_slideshow_thumbnailhover.module',
      'name' => 'views_slideshow_thumbnailhover',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Slideshow: ThumbnailHover',
        'description' => 'Adds a Thumbnail Hover slideshow mode to Views Slideshows.',
        'dependencies' => 
        array (
          0 => 'views_slideshow',
        ),
        'package' => 'Views',
        'core' => '6.x',
        'version' => '6.x-2.3',
        'project' => 'views_slideshow',
        'datestamp' => '1279683019',
        'php' => '4.3.5',
      ),
      'project' => 'views_slideshow',
      'version' => '6.x-2.3',
    ),
    'views_summary_taxonomy' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/views_hacks/views_summary_taxonomy/views_summary_taxonomy.module',
      'name' => 'views_summary_taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Taxonomy Summary',
        'description' => 'Provides a summary style plugin suitable for displaying hierarchical taxonomies.',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'taxonomy',
        ),
        'package' => 'Views',
        'core' => '6.x',
        'version' => '6.x-1.0-beta2',
        'project' => 'views_hacks',
        'datestamp' => '1307120522',
        'php' => '4.3.5',
      ),
      'project' => 'views_hacks',
      'version' => '6.x-1.0-beta2',
    ),
    'views_ui' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/views/views_ui.module',
      'name' => 'views_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views UI',
        'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
        'package' => 'Views',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'version' => '6.x-2.12',
        'project' => 'views',
        'datestamp' => '1292446272',
        'php' => '4.3.5',
      ),
      'project' => 'views',
      'version' => '6.x-2.12',
    ),
    'votingapi' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/votingapi/votingapi.module',
      'name' => 'votingapi',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Voting API',
        'description' => 'Provides a shared voting API for other modules.',
        'package' => 'Voting',
        'core' => '6.x',
        'version' => '6.x-2.3',
        'project' => 'votingapi',
        'datestamp' => '1250359559',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'votingapi',
      'version' => '6.x-2.3',
    ),
    'votingpoints' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/userpoints_contrib/votingpoints/votingpoints.module',
      'name' => 'votingpoints',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Votingpoints',
        'description' => 'Rules integration for users earning points as they vote on nodes. With the rules approach, the node author can be assigned userpoints too.',
        'package' => 'Userpoints',
        'dependencies' => 
        array (
          0 => 'userpoints',
          1 => 'rules',
        ),
        'core' => '6.x',
        'version' => '6.x-1.0-beta1',
        'project' => 'userpoints_contrib',
        'datestamp' => '1270651218',
        'php' => '4.3.5',
      ),
      'project' => 'userpoints_contrib',
      'version' => '6.x-1.0-beta1',
    ),
    'webform' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/webform/webform.module',
      'name' => 'webform',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6329',
      'weight' => '-1',
      'info' => 
      array (
        'name' => 'Webform',
        'description' => 'Enables the creation of forms and questionnaires.',
        'core' => '6.x',
        'package' => 'Webform',
        'php' => '5.1',
        'version' => '6.x-3.14',
        'project' => 'webform',
        'datestamp' => '1314823622',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'webform',
      'version' => '6.x-3.14',
    ),
    'webformblock' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'webformblock',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'web_form' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/features/web_form/web_form.module',
      'name' => 'web_form',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'site_administration',
          2 => 'webform',
        ),
        'description' => 'Provides Webform Functionality',
        'features' => 
        array (
          'user' => 
          array (
            0 => 'access own webform submissions',
            1 => 'access webform results',
            2 => 'clear webform results',
            3 => 'create webforms',
            4 => 'edit own webform submissions',
            5 => 'edit own webforms',
            6 => 'edit webform submissions',
            7 => 'edit webforms',
            8 => 'use PHP for additional processing',
          ),
        ),
        'name' => 'Web Form',
        'package' => 'Features',
        'project' => 'web_form',
        'project status url' => 'http://features.devmcn.com/fserver',
        'version' => '6.x-1.0',
        'php' => '4.3.5',
      ),
      'project' => 'web_form',
      'version' => '6.x-1.0',
    ),
    'wijering' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/swftools/wijering/wijering.module',
      'name' => 'wijering',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'JW Media Player 3',
        'description' => 'Enables support for JW Media Player 3.',
        'package' => 'SWF Tools',
        'dependencies' => 
        array (
          0 => 'swftools',
        ),
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'swftools',
        'datestamp' => '1240829764',
        'php' => '4.3.5',
      ),
      'project' => 'swftools',
      'version' => '6.x-2.5',
    ),
    'wijering4' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/swftools/wijering4/wijering4.module',
      'name' => 'wijering4',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'JW Media Player 4',
        'description' => 'Enables support for JW Media Player 4.',
        'package' => 'SWF Tools',
        'dependencies' => 
        array (
          0 => 'swftools',
        ),
        'core' => '6.x',
        'version' => '6.x-2.5',
        'project' => 'swftools',
        'datestamp' => '1240829764',
        'php' => '4.3.5',
      ),
      'project' => 'swftools',
      'version' => '6.x-2.5',
    ),
    'wordfilter' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/wordfilter/wordfilter.module',
      'name' => 'wordfilter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6100',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Word Filter',
        'description' => 'Replaces words inside posts with filtered versions.',
        'core' => '6.x',
        'version' => '6.x-1.1',
        'project' => 'wordfilter',
        'datestamp' => '1273645512',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'wordfilter',
      'version' => '6.x-1.1',
    ),
    'wysiwyg' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/modules/contrib/wysiwyg/wysiwyg.module',
      'name' => 'wysiwyg',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6201',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Wysiwyg',
        'description' => 'Allows users to edit contents with client-side editors.',
        'package' => 'User interface',
        'core' => '6.x',
        'version' => '6.x-2.4',
        'project' => 'wysiwyg',
        'datestamp' => '1308450722',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'wysiwyg',
      'version' => '6.x-2.4',
    ),
    'zambooie' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916',
      'name' => 'zambooie',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
  ),
  'themes' => 
  array (
    'cube' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/themes/rubik/cube/cube.info',
      'name' => 'cube',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Cube',
        'description' => 'Spaces-aware front-end theme based on Rubik.',
        'base theme' => 'rubik',
        'core' => '6.x',
        'engine' => 'phptemplate',
        'stylesheets' => 
        array (
          'screen' => 
          array (
            0 => 'style.css',
          ),
        ),
        'regions' => 
        array (
          'header' => 'Header',
          'content' => 'Content',
          'left' => 'Left',
          'right' => 'Right',
        ),
        'designkit' => 
        array (
          'color' => 
          array (
            'background' => '#0088cc',
          ),
          'logo' => 
          array (
            'logo' => 'imagecache_scale:200x50',
            'print' => 'imagecache_scale:600x150',
          ),
        ),
        'layouts' => 
        array (
          'default' => 
          array (
            'name' => 'Default',
            'description' => 'Simple one column page.',
            'template' => 'page',
          ),
          'sidebar' => 
          array (
            'name' => 'Sidebar',
            'description' => 'Main content with sidebar.',
            'stylesheet' => 'layout-sidebar.css',
            'template' => 'layout-sidebar',
            'regions' => 
            array (
              0 => 'content',
              1 => 'right',
            ),
          ),
          'split' => 
          array (
            'name' => 'Split',
            'description' => '50/50 split.',
            'stylesheet' => 'layout-split.css',
            'template' => 'layout-sidebar',
            'regions' => 
            array (
              0 => 'content',
              1 => 'right',
            ),
          ),
          'columns' => 
          array (
            'name' => 'Columns',
            'description' => 'Three column layout.',
            'stylesheet' => 'layout-columns.css',
            'template' => 'layout-columns',
            'regions' => 
            array (
              0 => 'header',
              1 => 'content',
              2 => 'left',
              3 => 'right',
            ),
          ),
          'offset' => 
          array (
            'name' => 'Offset sidebars',
            'description' => 'Main content with two offset sidebars.',
            'stylesheet' => 'layout-offset.css',
            'template' => 'layout-offset',
            'regions' => 
            array (
              0 => 'header',
              1 => 'content',
              2 => 'left',
              3 => 'right',
            ),
          ),
        ),
        'version' => '6.x-3.0-beta2',
        'project' => 'rubik',
        'datestamp' => '1285709466',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'rubik',
      'version' => '6.x-3.0-beta2',
    ),
    'rubik' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/themes/rubik/rubik.info',
      'name' => 'rubik',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rubik',
        'description' => 'Clean admin theme.',
        'base theme' => 'tao',
        'core' => '6.x',
        'engine' => 'phptemplate',
        'scripts' => 
        array (
          0 => 'js/rubik.js',
        ),
        'stylesheets' => 
        array (
          'screen' => 
          array (
            0 => 'core.css',
            1 => 'icons.css',
            2 => 'style.css',
          ),
        ),
        'version' => '6.x-3.0-beta2',
        'project' => 'rubik',
        'datestamp' => '1285709466',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'rubik',
      'version' => '6.x-3.0-beta2',
    ),
    'tao' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/all/themes/tao/tao.info',
      'name' => 'tao',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'description' => 'Tao is a base theme that is all about going with the flow. It takes care of key reset and utility tasks so that sub-themes can get on with their job.',
        'engine' => 'phptemplate',
        'name' => 'Tao',
        'regions' => 
        array (
          'left' => 'Left sidebar',
          'right' => 'Right sidebar',
          'content' => 'Content',
          'header' => 'Header',
          'footer' => 'Footer',
        ),
        'scripts' => 
        array (
          0 => 'js/tao.js',
        ),
        'stylesheets' => 
        array (
          'screen' => 
          array (
            0 => 'reset.css',
            1 => 'drupal.css',
            2 => 'base.css',
          ),
          'print' => 
          array (
            0 => 'reset.css',
            1 => 'base.css',
            2 => 'print.css',
          ),
          'all' => 
          array (
            0 => 'admin.css',
            1 => 'block.css',
            2 => 'book.css',
            3 => 'comment.css',
            4 => 'dblog.css',
            5 => 'defaults.css',
            6 => 'forum.css',
            7 => 'help.css',
            8 => 'maintenance.css',
            9 => 'node.css',
            10 => 'openid.css',
            11 => 'poll.css',
            12 => 'profile.css',
            13 => 'search.css',
            14 => 'system.css',
            15 => 'system-menus.css',
            16 => 'taxonomy.css',
            17 => 'tracker.css',
            18 => 'update.css',
            19 => 'user.css',
          ),
        ),
        'version' => '6.x-3.2',
        'project' => 'tao',
        'datestamp' => '1287680788',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'tao',
      'version' => '6.x-3.2',
    ),
    'bluemarine' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/themes/bluemarine/bluemarine.info',
      'name' => 'bluemarine',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bluemarine',
        'description' => 'Table-based multi-column theme with a marine and ash color scheme.',
        'version' => '6.22',
        'core' => '6.x',
        'engine' => 'phptemplate',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'chameleon' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/themes/chameleon/chameleon.info',
      'name' => 'chameleon',
      'type' => 'theme',
      'owner' => 'themes/chameleon/chameleon.theme',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chameleon',
        'description' => 'Minimalist tabled theme with light colors.',
        'regions' => 
        array (
          'left' => 'Left sidebar',
          'right' => 'Right sidebar',
        ),
        'features' => 
        array (
          0 => 'logo',
          1 => 'favicon',
          2 => 'name',
          3 => 'slogan',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
            1 => 'common.css',
          ),
        ),
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'marvin' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/themes/chameleon/marvin/marvin.info',
      'name' => 'marvin',
      'type' => 'theme',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Marvin',
        'description' => 'Boxy tabled theme in all grays.',
        'regions' => 
        array (
          'left' => 'Left sidebar',
          'right' => 'Right sidebar',
        ),
        'version' => '6.22',
        'core' => '6.x',
        'base theme' => 'chameleon',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'garland' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/themes/garland/garland.info',
      'name' => 'garland',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Garland',
        'description' => 'Tableless, recolorable, multi-column, fluid width theme (default).',
        'version' => '6.22',
        'core' => '6.x',
        'engine' => 'phptemplate',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
          ),
          'print' => 
          array (
            0 => 'print.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'minnelli' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/themes/garland/minnelli/minnelli.info',
      'name' => 'minnelli',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Minnelli',
        'description' => 'Tableless, recolorable, multi-column, fixed width theme.',
        'version' => '6.22',
        'core' => '6.x',
        'base theme' => 'garland',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'minnelli.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'pushbutton' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/themes/pushbutton/pushbutton.info',
      'name' => 'pushbutton',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Pushbutton',
        'description' => 'Tabled, multi-column theme in blue and orange tones.',
        'version' => '6.22',
        'core' => '6.x',
        'engine' => 'phptemplate',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'artistsocial' => 
    array (
      'filename' => '/data/aegir/platforms/acadia2-0916/sites/gaither.com/themes/artistsocial/artistsocial.info',
      'name' => 'artistsocial',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'artistsocial',
        'description' => 'Drupal 6 Custom Theme built for',
        'version' => '1.0',
        'core' => '6.x',
        'engine' => 'phptemplate',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/reset.css',
            1 => 'css/text.css',
            2 => 'css/960.css',
            3 => 'css/style.css',
          ),
        ),
        'scripts' => 
        array (
          0 => 'js/jquery.elastic.source.js',
          1 => 'js/charCount.js',
          2 => 'js/script.js',
        ),
        'regions' => 
        array (
          'admin' => 'Admin Bar',
          'header' => 'Header',
          'content_top' => 'Content Top',
          'content_bottom' => 'Content Bottom',
          'right' => 'Right Sidebar',
          'post_content' => 'Post Content',
          'footer' => 'Footer',
        ),
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '1.0',
    ),
  ),
);
$options['redirection'] = '1';
$options['ssl'] = '0';

$_SERVER['db_type'] = 'mysqli';
$_SERVER['db_host'] = 'vs27';
$_SERVER['db_user'] = 'site_1658_0';
$_SERVER['db_passwd'] = '635LaYffMN';
$_SERVER['db_name'] = 'site_1658_0';
