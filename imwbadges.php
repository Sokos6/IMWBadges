<?php

/*
Plugin Name: IMW Badges
Plugin URI:  anotherlineofcode.org
Description: Badges for IMW
Version:     0.96
Author:      Sokos6
Author URI:  http://willsokolowski
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wporg
Domain Path: /languages
*/


function wpimw_badges_menu() {
    
    /*
     * Use the add_options_page function
     * add_options_page( $page_title, $menu_title, $capablity, $menu-slug, $function )
     *
    */
    
   add_options_page(
    'Official IMW Badges Plugin',
    'IMW Badges',
    'manage_options',
    'wpimw-badges',
    'wpimw_badges_options_page'
   );
}
add_action( 'admin_menu', 'wpimw_badges_menu' );

function wpimw_badges_options_page() {
    
    if (!current_user_can( 'manage_options' ) ) {
        
        wp_die( 'You do not have sufficient permissions to access this page.' );
    } else {
    
    echo '<p>Welcome to our plugin page!</p>';
    }
}


































?>