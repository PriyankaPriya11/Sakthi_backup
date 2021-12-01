<?php

/**
 *
 * Initializing a Template child theme by including the correct functions.
 * 
 * @since       1.0.7
 * @package     Surge
 * @subpackage  Surge Template
 * @author      Rodrigo Leon
 * @uses        ST Customizer, ST Theme Options.
 * @link        
 * 
 */

include get_template_directory() . '/framework/functions/template/custom-fields.php';

include get_template_directory() . '/framework/functions/template/customizer.php';

include get_template_directory() . '/framework/functions/template/theme-options.php';

function surge_template_theme_init() {

    // Updating/Renaming Customizer
    add_action( 'customize_register', 'surge_override_customizer_defaults', 1000 );

    // Adding Customizer Extra fields.
    add_action('customize_register', 'template_customizer_options_registration' );
	
	// ST0001
    add_action('admin_head', 'surge_remove_acf_meta_boxes');
    
    // ST0002
    add_action( 'admin_menu', 'surge_template_theme_admin_menu_labels' );

    // ST0003
    add_action( 'wp_enqueue_scripts', 'surge_template_styles' );

    // ST0004
    add_action( 'admin_init', 'surge_add_role_capability');

}

/*

Turned off in 1.0.8

// Init the Template System based on Customizer Option
if ( get_option( 'site_class' ) === '1' ) {

    surge_template_theme_init();

}

else {

    // Core - Surge0023
    add_action( 'admin_init', 'surge_remove_role_capability' );

}
*/

surge_template_theme_init();