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


$plugin_url = WP_PLUGIN_URL . '/IMWBadges';



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
    } 
    
    global $plugin_url;
    
    if( isset( $_POST['wpimw_form_submitted'] ) ) {
        $hidden_field = esc_html( $_POST['wpimw_form_submitted'] );
        
        if( $hidden_field == 'Y' ) {
            $wpimw_username = esc_html( $_POST['wpimw_username'] );
            
        }
    }
    
    require( 'inc/options-page-wrapper.php' );
        
}

function wpimw_badges_styles() {
    
    wp_enqueue_style( 'wpimw_badges_styles', plugins_url( 'IMWBadges/wpimw-badges.css' ) );

}
add_action( 'admin_head', 'wpimw_badges_styles' );

?>