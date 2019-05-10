; MCN Artist Social Profile 

; This makefile does not build the full environment.  It only downloads the specific needs to run the profile.
; It usually would be run automatically when using distro.make, but can be executed manually.  
; example usage:  "drush make --no-core --contrib-destination=. artistsocial_profile.make ."

api = 2
core = 6.x

options[no-core] = TRUE

projects[artistsocial][type] = theme
projects[artistsocial][download][type] = git
projects[artistsocial][download][url] = git@devmcn.com:themes/artistsocial
projects[artistsocial][download][working-copy] = TRUE
