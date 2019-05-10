; Gaither Profile 

; This makefile does not build the full environment.  It only downloads the specific needs to run the profile.
; It usually would be run automatically when using distro.make, but can be executed manually.  
; example usage:  "drush make --no-core --contrib-destination=. gaither_profile.make ."

 api  = 2
 core = 6.x

 options[no-core]                           = TRUE
;options[working-copy]                      = TRUE

;****************************************
; themes
;****************************************
 projects[gaither][type]                    = theme
 projects[gaither][download][type]            = git
 projects[gaither][download][url]             = git@devmcn.com:sites/gaither.com/themes/gaither
 projects[gaither][download][branch]          = master
 projects[gaither][download][working-copy]    = TRUE


;****************************************
; modules
;****************************************

; custom
 projects[performance_event][subdir]        = custom
 projects[performance_event][type]             = module
 projects[performance_event][download][type]   = git
 projects[performance_event][download][url]    = git@devmcn.com:sites/gaither.com/modules/performance_event
 projects[performance_event][download][branch] = master
 projects[performance_event][download][working-copy] = TRUE

; contrib
 projects[ds][subdir]                       = contrib
 projects[nd][subdir]                       = contrib
 projects[nd_contrib][subdir]               = contrib
 projects[node_import][subdir]              = contrib
 projects[taxonomy_image][subdir]           = contrib
 projects[taxonomy_other][subdir]           = contrib
 projects[vd][subdir]                       = contrib
 projects[views_clone_display][subdir]      = contrib
 projects[viewsdisplaytabs][subdir]         = contrib

