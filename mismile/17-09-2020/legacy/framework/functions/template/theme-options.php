<?php

/**
 *
 * Creating Surge Template Child Theme functions used by Template Init.
 * 
 * @since 		1.0.7
 * @package 	Surge
 * @subpackage 	Surge Template
 * @author 		Rodrigo Leon
 * @uses  		ST Customizer.php
 * @link 		
 * 
 */

/*========================================================================
                Removing Inner Header Image MetaBox - ST0001
========================================================================*/

// This function is used by Template child themes, please do not rename. (If renamed, you must rename all the template child themes using this function.)

if ( ! function_exists( 'surge_remove_acf_meta_boxes' ) ) {

    function surge_remove_acf_meta_boxes() {

        echo '<style type="text/css">#acf_acf_header-image, #acf-group_acf_header-image{ display: none; }</style>';
    
    }

}

/*========================================================================
                Adding Template Admin Menu Labels - ST0002
========================================================================*/

//Dashboard (add menu):codex.wordpress.org/Function_Reference/add_menu_page/
if ( ! function_exists( 'surge_template_theme_admin_menu_labels' ) ) {
    
    function surge_template_theme_admin_menu_labels() {

    	if ( ! current_user_can( 'create_users' ) ) {

	        add_menu_page( 'Designs', 'Designs', 'edit_posts', '/themes.php', '', 'dashicons-images-alt', 60 );
	        add_menu_page( 'Menus', 'Menus', 'edit_posts', '/nav-menus.php', '', 'dashicons-list-view', 60 );
	        // add_menu_page( 'Widgets', 'Widgets', 'edit_posts', '/widgets.php', '', 'dashicons-tagcloud', 60 );
	        add_menu_page( 'Customize', 'Customize', 'edit_posts', '/customize.php', '', 'dashicons-admin-customizer', 60 );
	        
	    }
    }
    
}

/*========================================================================
                Import Core Styles/Scripts - ST0003
========================================================================*/

if ( ! function_exists( 'surge_template_styles' ) ) {

    function surge_template_styles() {

        // Load the Framework Stylesheet
        wp_enqueue_style( 'framework', get_template_directory_uri() . '/framework/assets/css/framework.css' );

    }

}

/*========================================================================
                Adding Capabilities to the Editor Role - ST0004
========================================================================*/

if ( ! function_exists ( 'surge_add_role_capability' ) ) {
	
	function surge_add_role_capability() {

	    // gets the author role
	    $role = get_role( 'editor' );
	    // This only works, because it accesses the class instance.
	    $role->add_cap( 'switch_themes' );
	    $role->add_cap( 'edit_theme_options' );
	    $role->add_cap( 'manage_options' );

	}

}