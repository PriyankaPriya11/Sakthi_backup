<?php

/**
 *
 * SkyWalker Reset removes all optinionated functions that come with Surge.
 * 
 * @since       1.0.7
 * @package     Surge
 * @subpackage  Surge Reset
 * @author      Rodrigo Leon
 * @uses        Core Functions
 * @link        http://example.com
 * 
 */

/*========================================================================
                Overriding Functions
========================================================================*/

// Normalizing Wordpress Functions
function skyreset_remove_parent_functions() {

    // Surge0007
    remove_action( 'admin_enqueue_scripts', 'surge_enqueue_admin_scripts');

    // Surge0010
    remove_action( 'admin_menu', 'surge_remove_post_pages_meta_boxes' );

    // Surge0011
    remove_action( 'add_meta_boxes', 'adding_custom_meta_boxes', 10, 2 );

    // Surge0013
    remove_action( 'admin_menu', 'surge_remove_admin_menu_labels' );

    // Surge0014
    remove_action( 'admin_menu', 'surge_admin_menu_labels' );

    // Surge0015
    remove_action( 'wp_dashboard_setup', 'surge_remove_dashboard_widgets' );

    // Surge0017
    remove_action( 'load-index.php', 'surge_persistent_welcome_panel' );

    // Surge0018
    remove_action( 'welcome_panel', 'surge_welcome_panel' );

    // Surge0019
    remove_action( 'admin_bar_menu', 'surge_remove_adminbar_wp_nodes', 999 );

    // Surge0019
    remove_action( 'admin_bar_menu', 'surge_wp_nodes', 100 );

    // Surge0022
    remove_action( 'admin_head', 'surge_conditional_admin_stylesheet');

}

add_action( 'init', 'skyreset_remove_parent_functions' );