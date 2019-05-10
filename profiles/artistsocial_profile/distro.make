; Artistsocial Platform
 core = 6.x
 api  = 2

 projects[pressflow][type]                  = core
 projects[pressflow][download][type]         = git
 projects[pressflow][download][url]          = git://github.com/pressflow/6.git
;projects[pressflow][download][type]         = get
;projects[pressflow][download][url]          = http://files.pressflow.org/pressflow-6-current.tar.gz

;********************************************
; MCN Set of standard Modules & Themes
;********************************************
;includes[mcn_base] = http://atrium.devmcn.com/gitweb/?p=drupal/makefiles.git;a=blob_plain;f=mcn_base.make;hb=dev


;********************************************
; Profiles
;********************************************

 projects[artistsocial_profile][type]       = profile
 projects[artistsocial_profile][download][type] = git
 projects[artistsocial_profile][download][url]  = git@devmcn.com:drupal/profiles/artistsocial_profile
 projects[artistsocial_profile][download][working-copy] = TRUE

 projects[gaither_profile][type]            = profile
 projects[gaither_profile][download][type]    = git
 projects[gaither_profile][download][url]     = git@devmcn.com:sites/gaither.com/profiles/gaither_profile
 projects[gaither_profile][download][working-copy] = TRUE


;********************************************
; features
;********************************************

 projects[ad_banners][subdir]               = features
 projects[ad_banners][location]              = http://features.devmcn.com/fserver
 projects[album_feature][subdir]            = features
 projects[album_feature][location]           = http://features.devmcn.com/fserver
 projects[blog_feature][subdir]             = features
 projects[blog_feature][location]            = http://features.devmcn.com/fserver
 projects[events_feature][subdir]           = features
 projects[events_feature][location]          = http://features.devmcn.com/fserver
 projects[faq_accordion][subdir]            = features
 projects[faq_accordion][location]           = http://features.devmcn.com/fserver
 projects[galleriffic_gallery][subdir]      = features
 projects[galleriffic_gallery][location]     = http://features.devmcn.com/fserver
 projects[image_features][subdir]           = features
 projects[image_features][location]          = http://features.devmcn.com/fserver
 projects[news][subdir]                     = features
 projects[news][location]                    = http://features.devmcn.com/fserver
 projects[site_administration][subdir]      = features
 projects[site_administration][location]     = http://features.devmcn.com/fserver
 projects[slideshow][subdir]                = features
 projects[slideshow][location]               = http://features.devmcn.com/fserver
 projects[sponsors][subdir]                 = features
 projects[sponsors][location]                = http://features.devmcn.com/fserver
 projects[videos][subdir]                   = features
 projects[videos][location]                  = http://features.devmcn.com/fserver
 projects[views_feature][subdir]            = features
 projects[views_feature][location]           = http://features.devmcn.com/fserver
 projects[web_form][subdir]                 = features
 projects[web_form][location]                = http://features.devmcn.com/fserver


;********************************************
; Modules
;********************************************

; custom

 projects[emma][subdir]                     = custom
 projects[emma][type]                        = module
 projects[emma][download][type]              = git
 projects[emma][download][url]               = git@devmcn.com:modules/custom/emma
 projects[emma][download][working-copy]      = TRUE

 projects[emma_block][subdir]               = custom
 projects[emma_block][type]                  = module
 projects[emma_block][download][type]        = git
 projects[emma_block][download][url]         = git@devmcn.com:modules/contrib/emma_block
 projects[emma_block][download][working-copy] = TRUE

 projects[jplayer][subdir]                  = custom
 projects[jplayer][type]                     = module
 projects[jplayer][download][type]           = git
 projects[jplayer][download][url]            = git@devmcn.com:modules/custom/jplayer
 projects[jplayer][download][working-copy]   = TRUE

 projects[mcn_social_form_alter][subdir]    = custom
 projects[mcn_social_form_alter][location]   = http://features.devmcn.com/fserver
 projects[performance_event][subdir]        = custom
 projects[performance_event][location]       = http://features.devmcn.com/fserver
 projects[securepages_login][subdir]        = custom
 projects[securepages_login][location]       = http://features.devmcn.com/fserver

 projects[sso][subdir]                      = custom
 projects[sso][type]                         = module
 projects[sso][download][type]               = git
 projects[sso][download][url]                = git@devmcn.com:modules/custom/sso
 projects[sso][download][working-copy]       = TRUE


; contrib

 projects[acl][subdir]                      = contrib
 projects[admin][subdir]                    = contrib
 projects[admin_menu][subdir]               = contrib
 projects[advanced_help][subdir]            = contrib
 projects[advanced_forum][subdir]           = contrib
 projects[advanced_forum_more_styles][subdir] = contrib
 projects[advanced_profile][subdir]         = contrib
 projects[advuser][subdir]                  = contrib
 projects[ajax][subdir]                     = contrib
 projects[author_pane][subdir]              = contrib
 projects[auto_nodetitle][subdir]           = contrib
 projects[better_exposed_filters][subdir]   = contrib
 projects[better_exposed_filters][version]   = 2.0-beta1
 projects[better_formats][subdir]           = contrib
 projects[blockcache_alter][subdir]         = contrib
 projects[captcha][subdir]                  = contrib
 projects[cck][subdir]                      = contrib
 projects[ckeditor][subdir]                 = contrib
 projects[ckeditor][version]                 = 1.x-dev
 projects[colorbox][subdir]                 = contrib
 projects[comment_notify][subdir]           = contrib
 projects[comment_notify][subdir]           = contrib
 projects[content_complete][subdir]         = contrib
 projects[content_profile][subdir]          = contrib
 projects[context][subdir]                  = contrib
 projects[ctools][subdir]                   = contrib
 projects[date][subdir]                     = contrib
 projects[demo][subdir]                     = contrib
 projects[devel][subdir]                    = contrib
 projects[draggableviews][subdir]           = contrib
 projects[emfield][subdir]                  = contrib
 projects[fb_social][subdir]                = contrib
 projects[features][subdir]                 = contrib
 projects[features_extra][subdir]           = contrib
 projects[filefield][subdir]                = contrib
 projects[filefield_sources][subdir]        = contrib
 projects[fivestar][subdir]                 = contrib
 projects[flag][subdir]                     = contrib
 projects[formblock][subdir]                = contrib
 projects[forum_access][subdir]             = contrib
 projects[gmap][subdir]                     = contrib
 projects[google_analytics][subdir]         = contrib
 projects[google_plusone][subdir]           = contrib
 projects[google_analytics][subdir]         = contrib
 projects[google_plusone][subdir]           = contrib
 projects[imageapi][subdir]                 = contrib
 projects[imagecache][subdir]               = contrib
 projects[imagecache_actions][subdir]       = contrib
 projects[imagecache_profiles][subdir]      = contrib
 projects[imagefield][subdir]               = contrib
 projects[image_fupload][subdir]            = contrib-patched
;http://drupal.org/node/670174#comment-2538240
 projects[image_fupload][patch][]            = http://drupal.org/files/issues/image_fupload-swfupload_as_library_1.patch
 projects[image_resize_filter][subdir]      = contrib
 projects[imce][subdir]                     = contrib
 projects[imce_tools][subdir]               = contrib
 projects[imce_wysiwyg][subdir]             = contrib
 projects[invite][subdir]                   = contrib
;projects[jplayer][subdir]                  = contrib
; no recommnended release                                ;being pulled from fserver
;projects[jplayer][version]                  = 1.0-beta2
 projects[jquery_ui][subdir]                = contrib
 projects[jquery_update][subdir]            = contrib
 projects[jquery_update][version]            = 2.x-dev
 projects[location][subdir]                 = contrib
 projects[logintoboggan][subdir]            = contrib
 projects[libraries][subdir]                = contrib
 projects[link][subdir]                     = contrib
;projects[mollom][subdir]                   = contrib
 projects[media_bitsontherun][subdir]       = contrib
 projects[media_mtv][subdir]                = contrib
; no recommnended release
 projects[media_mtv][version]                = 1.x-dev
 projects[media_vimeo][subdir]              = contrib
 projects[media_youtube][subdir]            = contrib
 projects[menu_block][subdir]               = contrib
 projects[menu_per_role][subdir]            = contrib
 projects[mollom][subdir]                   = contrib
 projects[mp3player][subdir]                = contrib
 projects[mp3player][version]                = 1.x-dev
 projects[nice_menus][subdir]               = contrib
 projects[nodereference_url][subdir]        = contrib
 projects[oauth][subdir]                    = contrib
 projects[oauth][download][type]             = cvs
 projects[oauth][download][module]           = contributions/modules/oauth
 projects[oauth][download][revision]         = DRUPAL-6--2-02
 projects[pathauto][subdir]                 = contrib
 projects[path_redirect][subdir]            = contrib
 projects[privatemsg][subdir]               = contrib
 projects[profiler][subdir]                 = contrib
 projects[quicktabs][subdir]                = contrib
 projects[reverse_node_reference][subdir]   = contrib
 projects[rpx][subdir]                      = contrib
 projects[rules][subdir]                    = contrib
 projects[scheduler][subdir]                = contrib
 projects[strongarm][subdir]                = contrib
 projects[swftools][subdir]                 = contrib
 projects[tac_lite][subdir]                 = contrib
 projects[tac_lite][version]                 = 1.5
 projects[terms_of_use][subdir]             = contrib
 projects[themesettingsapi][subdir]         = contrib
 projects[token][subdir]                    = contrib
 projects[transliteration][subdir]          = contrib
 projects[tweetbutton][subdir]              = contrib
 projects[twitter][subdir]                  = contrib
 projects[update_advanced][subdir]          = contrib
 projects[upgrade_status][subdir]           = contrib
 projects[user_badges][subdir]              = contrib
; ERROR on update - http://drupal.org/node/984880 - requires dev till next release
 projects[user_badges][version]              = 1.x-dev
 projects[user_relationships][subdir]       = contrib
;projects[user_stats][subdir]               = contrib
 projects[userpoints][subdir]               = contrib
 projects[userpoints_contrib][subdir]       = contrib
 projects[userpoints_login][subdir]         = contrib
 projects[userpoints_nc][subdir]            = contrib
 projects[userpoints_user_picture][subdir]  = contrib
 projects[util][subdir]                     = contrib
 projects[vertical_tabs][subdir]            = contrib
 projects[views][subdir]                    = contrib
 projects[views_accordion][subdir]          = contrib
 projects[views_attach][subdir]             = contrib
 projects[views_bonus][subdir]              = contrib
 projects[views_bulk_operations][subdir]    = contrib
 projects[views_customfield][subdir]        = contrib
 projects[views_field_view][subdir]         = contrib
 projects[views_hacks][subdir]              = contrib
 projects[views_slideshow][subdir]          = contrib
 projects[votingapi][subdir]                = contrib
 projects[webform][subdir]                  = contrib
 projects[wordfilter][subdir]               = contrib
 projects[wysiwyg][subdir]                  = contrib

; For live site only
 projects[securepages][subdir]              = contrib
 projects[varnish][subdir]                  = contrib


; Ubercart
;includes ubercart and associated modules
 includes[ubercart]         = http://atrium.devmcn.com/gitweb/?p=drupal/makefiles.git;a=blob_plain;f=ubercart.make;hb=refs/heads/dev

 projects[uc_og_subscribe][subdir]          = contrib
 projects[uc_out_of_stock][subdir]          = contrib


;****************************************
; Themes
;****************************************

; Rubik, Singular and Tao included in MCN Base

 projects[] = rubik
 projects[] = tao


;****************************************
; Libraries in sites/all/libraries
;****************************************
 
; CKEditor library for  CKEditor (ckeditor) and Wysiwyg API (wysiwyg).
 libraries[ckeditor_l][directory_name]      = ckeditor
 libraries[ckeditor_l][download][type]       = get
 libraries[ckeditor_l][download][url]        = http://download.cksource.com/CKEditor/CKEditor/CKEditor%203.4.2/ckeditor_3.4.2.tar.gz

; Colorbox library plugin for  Colorbox (colorbox).
 libraries[colorbox][directory_name]        = colorbox
 libraries[colorbox][download][type]         = get
 libraries[colorbox][download][url]          = http://colorpowered.com/colorbox/latest

; JPlayer Audio Player library  JPlayer (jplayer).
 libraries[jplayer_l][directory_name]       = jplayer
 libraries[jplayer_l][download][type]        = get
 libraries[jplayer_l][download][url]         = http://www.jplayer.org/1.2.0/jQuery.jPlayer.1.2.0.zip

; jQuery UI 1.7.x library for  jQuery UI (jquery_ui) and jQuery Update (jquery_update).
 libraries[jquery.ui][directory_name]       = jquery.ui
 libraries[jquery.ui][download][type]        = get
 libraries[jquery.ui][download][url]         = http://jquery-ui.googlecode.com/files/jquery-ui-1.7.3.zip
;libraries[jquery.ui][destination]           = modules/contrib/jquery_ui

; Mp3player Wordpress Audio Player library for MP3Player
 libraries[mp3player][directory_name]       = mp3player
 libraries[mp3player][download][type]        = get
 libraries[mp3player][download][url]         = http://wpaudioplayer.com/wp-content/downloads/audio-player-standalone.zip

; Swfupload library for image_fupload  (swftools?)
 libraries[swfupload][directory_name]       = swfupload
 libraries[swfupload][download][type]        = get
 libraries[swfupload][download][url]         = http://swfupload.googlecode.com/files/SWFUpload%20v2.2.0.1%20Core.zip

