<?php
/**
*Plugin Name: Koska Plugin
*Plugin URI: https://koska.at/plugin
*Author: Ben Koska
*Author URI: ben.koska.at
* Version: Beta 0.0.1
* Licence: GPLv2
* Description: A Plugin for Koska.at
*/

function kos_action_hook_dashboard(){
  remove_meta_box('dashboard_primary','dashboard',''post_container_1); 
}
add_action('wp_dashboard_setup', 'kos_action_hook_dashboard');

?>
