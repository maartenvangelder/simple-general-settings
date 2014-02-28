<?php 
/*
Plugin Name: Simple General Settings
Description: Simple General Settings - Make some general settings editable for everyone
Author: Maarten van Gelder
<<<<<<< HEAD
Version: 0.5
=======
Version: 0.4.2
>>>>>>> a8142f3e14a5e391c8f1fade869c23d7b730a96d
Author URI: http://www.maartenvangelder.nl
*/


//*************** Admin function ***************
function SimpleGeneralSettings_admin() {
	include('simple-general-settings-admin.php');
}

function SimpleGeneralSettings_admin_actions() {
// pagetitle, menutitle, capacibler, menuslug, function
    add_options_page("Simple General Settings", "Simple General Settings", 1, "simple-general-settings", "SimpleGeneralSettings_admin");
}

add_action('admin_menu', 'SimpleGeneralSettings_admin_actions');