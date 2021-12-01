<?php

/**
 * @package WordPress
 * @subpackage Surge
 * @version 1.0.2 The Pluggable and The DRY updates.
 * @since Surge 1.94fafb2
 * @author Rodrigo Leon <github.com/rodrigoleon>
 * @copyright Copyright (c) 2016, Optimized360
 */

/**
 * Legend:
 * Theme Init - Surge0001
 * Registering Framework Nav Menus - Surge0002
 * Initializing Custom Widget Areas - Surge0003
 * Import Core Styles/Scripts - Surge0004
 * Enqueue Customizer Styles/Scripts - Surge0005
 * Enqueue Custom Stylesheet to Backend - Surge0006
 * Enqueue Custom Stylesheet to Login - Surge0007
 * Filtering the Title Tag - Surge0008
 * Custom Metabox for Page Templates - Surge0009
 * Welcome Panel on by Default - Surge0010
 * Custom Welcome Screen - Surge0011
 * Conditional Admin Stylesheet - Surge0012
 * Conditional Frontend Stylesheet - Surge0013
 * Resetting Role Capabilities - Surge0014 - Turned off on 1.0.8
 */

/*========================================================================
                Theme Init - Surge0001
========================================================================*/

if ( ! function_exists('surge_init') ) {

    // Register Theme Features
    function surge_init()  {

        // Add theme support for Automatic Feed Links
        add_theme_support( 'automatic-feed-links' );

        // Add theme support for Post Formats
        add_theme_support( 'post-formats', array( 'status', 'quote', 'gallery', 'image', 'video', 'audio', 'link', 'aside', 'chat' ) );

        // Add theme support for Featured Images
        add_theme_support( 'post-thumbnails' ); //Add ", array( 'post', 'page', 'education' )" if you would like to filter

        // Add theme support for HTML5 Semantic Markup
        add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

        // Add theme support for document Title tag
        add_theme_support( 'title-tag' );

        // Add theme support for custom CSS in the TinyMCE visual editor (We are already using an editor style that gets from our CSS. If you want to use an overall one, create this file on the path below.)
        // add_editor_style( 'framework/assets/css/editor-style.css' );

        // Add theme support for Translation
        load_theme_textdomain( 'surge', get_template_directory() . '/framework/config/lang' );

    }

    add_action( 'after_setup_theme', 'surge_init' );

}

/*========================================================================
                Registering Framework Nav Menus - Surge0002
========================================================================*/

if ( ! function_exists( 'surge_custom_menus' ) ) {

    // Register Navigation Menus
    function surge_custom_menus() {

        $locations = array(
            'main-menu' => __( 'Used in Headerbar or Navbar.', 'surge' ),
            'footer-menu' => __( 'Used in Footer-Top, Footer-Main or Footer-Bottom.', 'surge' ),
            'sidebar-menu' => __( 'Used in Sidebar.php.', 'surge' ),
            'mobile-menu' => __( 'Used in Headerbar if in mobile view.', 'surge' ), //This is not a usable way to use the menu unless if have a hidden menu. This is added for an added layer of flexibility.
            'additional-menu' => __( 'Additional Menu can be used anywhere in the theme.', 'surge' ),
        );
        register_nav_menus( $locations );

    }

    add_action( 'init', 'surge_custom_menus' );

}

/*========================================================================
                Initializing Custom Widget Areas - Surge0003
========================================================================*/

if ( ! function_exists( 'surge_custom_widget_areas_init' ) ) {

    // Register Sidebars
    function surge_custom_widget_areas_init() {

        $args = array(
            'id'            => 'sidebar-1',
            'class'         => 'sidebar-1',
            'name'          => __( 'Sidebar 1', 'surge' ),
            'description'   => __( 'This is the main sidebar shown in either left or right configuaration.', 'surge' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        );

        register_sidebar( $args );

        $args = array(
            'id'            => 'blog-sidebar',
            'class'         => 'blog-sidebar sidebar',
            'name'          => __( 'Blog Sidebar', 'surge' ),
            'description'   => __( 'This is the blog sidebar shown in either left or right configuaration.', 'surge' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        );

        register_sidebar( $args );

    }

    add_action( 'widgets_init', 'surge_custom_widget_areas_init' );

}

/*========================================================================
                Import Core Styles/Scripts - Surge0004
========================================================================*/

if ( ! function_exists( 'surge_enqueue_core_scripts' ) ){

    function surge_enqueue_core_scripts() {

        // Load Blog Reset Styles
        if ('opt-blog-on' == get_option('blog_status_picker') ){
            wp_enqueue_style( 'blog-reset', get_template_directory_uri() . '/framework/assets/css/blog-reset.css' );
        }

        // Cache Busting Enabler Theme Version + FileLastModificationTime
        function surge_get_current_theme_version() {
            $theme_data = wp_get_theme();
            return $theme_data->Version;
        }
        $theme_version = surge_get_current_theme_version();
        $theme_filemodtime = filemtime(get_stylesheet_directory() . '/style.css' );

        // Always load active theme's style.css.
        wp_enqueue_style( 'style', get_stylesheet_uri(), false, $theme_version . '.' . $theme_filemodtime );

        // Load the Framework JS file
        wp_enqueue_script( 'globaljs', get_template_directory_uri() . '/framework/assets/js/global.js', array(), $theme_version . '.' . $theme_filemodtime, true );

        // Load active theme's App.js
        // Get the directory name of the current theme: get_template()
        // @link https://codex.wordpress.org/Function_Reference/get_template
        if ( file_exists( ABSPATH . 'wp-content/themes/' . get_template() . '/mods/js/app.js' ) ) {
            wp_enqueue_script( 'appjs', get_stylesheet_directory_uri() . '/mods/js/app.js', false, $theme_version . '.' . $theme_filemodtime, true );
        }

        wp_add_inline_script( 'globaljs', 'console.log("Surge Framework: Developed by Rodrigo A Paredes Leon - github.com/Rodrigoleon - Optimized360");' );
    }

    //Imports styles from parent theme.
    add_action( 'wp_enqueue_scripts', 'surge_enqueue_core_scripts' );

}

/*========================================================================
                Enqueue Customizer Styles/Scripts - Surge0005
========================================================================*/

if ( ! function_exists( 'surge_enqueue_customizer_scripts' ) ){

    function surge_enqueue_customizer_scripts() {

        // Load the Framework Stylesheet
        wp_enqueue_style( 'customizer-css', get_template_directory_uri() . '/framework/assets/css/customizer.css' );

        wp_enqueue_script( 'customizerjs', get_template_directory_uri() . '/framework/assets/js/customizer.js', array( 'jquery', 'customize-controls' ), false, true );
    }

    add_action( 'customize_controls_enqueue_scripts', 'surge_enqueue_customizer_scripts' );

}

/*========================================================================
                Enqueue Custom Stylesheet to Backend - Surge0006
========================================================================*/

if ( ! function_exists( 'surge_enqueue_admin_scripts' ) ){

    function surge_enqueue_admin_scripts() {
    
      wp_enqueue_style('admin-styles', get_template_directory_uri().'/framework/assets/css/dashboard.css');
    
    }
    
    add_action('admin_enqueue_scripts', 'surge_enqueue_admin_scripts');
}

/*========================================================================
                Enqueue Custom Stylesheet to Login - Surge0007
========================================================================*/

// Custom WordPress Login Logo
if ( ! function_exists( 'surge_enqueue_login_scripts' ) ){

    function surge_enqueue_login_scripts() {
    
        wp_enqueue_style( 'custom_login_css', get_template_directory_uri() . '/framework/assets/css/login.css');
    
    }
    
    add_action('login_head', 'surge_enqueue_admin_scripts');
}

/*========================================================================
                Filtering the Title Tag - Surge0008
========================================================================*/

/**
* @uses [Wordpress' new title-tag theme support. This is a custom script]
* @link https://paulund.co.uk/wp_title-in-wordpress-4-4
* @todo Note that the Wordpress is trying to handle this via their own settings page in the future, thus us not having to do this via the customizer, and or here.
* Please note that the SEO practices used are the ones as highlighted by the following link:
* @link https://moz.com/learn/seo/title-tag and https://searchenginewatch.com/sew/how-to/2154469/write-title-tags-search-engine-optimization and http://www.hobo-web.co.uk/title-tags/ and http://www.morepro.com/services/seo-optimization/seo-title/ and https://searchenginewatch.com/2016/05/16/how-to-write-meta-title-tags-for-seo-with-good-and-bad-examples/
*/

if ( ! function_exists( 'surge_title_tag' ) ) {

    function surge_title_tag() {

        // Starting Title Retrival
        $title = get_bloginfo( 'name', 'display' );
        $seo_title_field = get_post_meta( get_the_ID(), 'title_tag', true );
        $site_description = get_bloginfo( 'description', 'display' );
        $site_wide_seo_title = get_option('sw_seo_title');
        $page_title = get_the_title();

        // Archive Title
        if ( is_category( 'articles' ) || is_category( 'services' ) || is_category( 'blog' ) ){

            $archive_title = single_cat_title('', false);

        } else {

            $archive_title = get_the_archive_title();

        }

        // City + State SEO
        $city_field = get_option( 'city' );
        $state_field = get_option( 'state' );

        if ( $city_field && $state_field ) {
            $state_city_fields = ' - ' . $city_field . ', ' . $state_field . ' - ';
        }

        else {
            $state_city_fields = ' - '; //Note that adding $state_city_fields acts like just a dash if there is no city/state
        }

        // Starting Title Composition
        if ( is_404() ) {
            return '404 - Page not Found' . ' - ' . $title;
        }

        // This is for Opt360 Only.
        elseif ( is_tax( 'project-category' ) ) {

            $portfolio_title = single_cat_title('', false);
            return 'Best ' . $portfolio_title . ' Website Examples';

        }

        elseif ( is_tax( 'project-tag' ) ) {

            $portfolio_title = single_tag_title('', false);
            return 'Best ' . $portfolio_title . ' Website Examples';

        }

        elseif ( is_post_type_archive( 'portfolio' ) ) {

            return 'Best Websites Gallery';

        } // End Opt360 Custom Tax/Type Titles.

        elseif ( is_archive() || is_tax() ) {

            if ( $site_wide_seo_title ) {
                return $archive_title . ' - ' . $site_wide_seo_title; // . ' - ' . $title;
            }
            else {
                return $archive_title . $state_city_fields . $title;
            }

        }

        else {

            if ( $seo_title_field ){
                return $seo_title_field; //. ' - ' . $title;
            }
            elseif ( $site_wide_seo_title ) {
                return $page_title . ' - ' . $site_wide_seo_title; // . ' - ' . $title;
            }
            else {
                return $page_title . $state_city_fields . $title;
            }

        }
    }

    add_filter('pre_get_document_title', 'surge_title_tag');
}

/*========================================================================
                Custom Metabox for Page Templates - Surge0009
========================================================================*/

//Adding the custom metabox.
/*if ( ! function_exists( 'adding_custom_meta_boxes' ) ){
    function adding_custom_meta_boxes( $post_type, $post ) {
    add_meta_box('custompageparentdiv', __('Page Look & Feel','surge'), 'page_attributes_meta_box_two', 'page', 'side');
    }
    add_action( 'add_meta_boxes', 'adding_custom_meta_boxes', 10, 2 );
}
*/
//REMOVE COMMENTS ABOVE IF NEEDED.

//Tweaking the custom metabox to say and display what we want it to.
if ( ! function_exists( 'page_attributes_meta_box_two' ) ){

    function page_attributes_meta_box_two($post) {

        if ( 'page' == $post->post_type && 0 != count( get_page_templates( $post ) ) && get_option( 'page_for_posts' ) != $post->ID ) { 
            $template = !empty($post->page_template) ? $post->page_template : false; 
            ?> 
            <p><strong><?php _e('Assign a Design to this Page','surge') ?></strong><?php
                /** 
                 * Fires immediately after the heading inside the 'Template' section
                 * of the 'Page Attributes' meta box.
                 * 
                 * @since 4.4.0
                 * 
                 * @param string  $template The template used for the current post.
                 * @param WP_Post $post     The current post.
                 */ 
                do_action( 'page_attributes_meta_box_two_template', $template, $post ); 
            ?></p> 
            <label class="screen-reader-text" for="page_template"><?php _e('Page Template','surge') ?></label><select name="page_template" id="page_template"> 
            <?php 
            /** 
             * Filter the title of the default page template displayed in the drop-down. 
             * 
             * @since 4.1.0 
             * 
             * @param string $label   The display value for the default page template title. 
             * @param string $context Where the option label is displayed. Possible values 
             *                        include 'meta-box' or 'quick-edit'. 
             */ 
            $default_title = apply_filters( 'default_page_template_title', __( 'Default Template','surge' ), 'meta-box' ); 
            ?> 
            <option value="default"><?php echo esc_html( $default_title ); ?></option> 
            <?php page_template_dropdown($template); ?> 
            </select> 
            <?php 
                } ?>
            <p><?php _e( 'Need help? Click here to watch a <a href="
            https://vimeo.com/121495474" target="_blank">video tutorial!</a>','surge' ); ?></p> 
            <?php 
    }
}

/*========================================================================
                Welcome Panel on by Default - Surge0010
========================================================================*/

if ( ! function_exists( 'surge_persistent_welcome_panel' ) ){

    function surge_persistent_welcome_panel() {

        $user_id = get_current_user_id();

        if ( 1 != get_user_meta( $user_id, 'show_welcome_panel', true ) )
            update_user_meta( $user_id, 'show_welcome_panel', 1 );
        // show_welcome_panel is not linked to function name.
    }

    add_action( 'load-index.php', 'surge_persistent_welcome_panel' );
}

/*========================================================================
                Custom Welcome Screen - Surge0011
========================================================================*/

if ( ! function_exists( 'surge_welcome_panel' ) ) {
    
    function surge_welcome_panel() {

        get_template_part ('framework/config/welcome-panel');
    
    }

    add_action( 'welcome_panel', 'surge_welcome_panel' );
}

/*========================================================================
                Conditional Admin Stylesheet - Surge0012
========================================================================*/

if ( ! function_exists( 'surge_conditional_admin_stylesheet' ) ) {

    function surge_conditional_admin_stylesheet() {
        
        echo '<style>';

        if ( current_user_can( 'create_users' ) ) {
            echo ".user-edit-php tr#password td:after, .profile-php tr#password td:after {
                    content: ' DO NOT RESET ADMIN OR SUPER ADMIN PASSWORDS UNLESS AUTHORIZED. This would affect LastPass, and the entire team.';
                    color: red;
                    font-weight: bold;
                    vertical-align: -webkit-baseline-middle;
                    margin-left: 10px;
                    font-size: 120%; }";
        }
        
        // Non Admins Hidden objects.
        if ( ! current_user_can( 'create_users' ) ) {
            echo '.gotonewdash,#menu-posts-feedback,#toplevel_page_jetpack{display:none;}';
        }

        // Roles Alerts
        if ( current_user_can('manage_network') ) {
            
            echo '#wpadminbar, .currentusericon{background: #c0392b;}';

        } elseif ( !current_user_can( 'manage_network' ) && current_user_can( 'remove_users' ) ) {
            
            echo '#wpadminbar, .currentusericon{background: #2c3e50;}';
        
        } else {}

        
        // End of conditional CSS.
        
        echo '</style>';

    }

    add_action('admin_head', 'surge_conditional_admin_stylesheet');

}

/*========================================================================
                Conditional Frontend Stylesheet - Surge0013
========================================================================*/


if ( ! function_exists( 'surge_conditional_frontend_stylesheet' ) ) {

    function surge_conditional_frontend_stylesheet() {
        
        //echo '<!--Conditional Frontend Stylesheet--><style type="text/css">';

        /* if ( get_option( 'site_cloak', '' ) === '1' ) {

            if ( ! is_user_logged_in() ) {

                echo 'body{display:none;}html:after{content:"Coming Soon..."; display:block; text-align:center; padding: 300px 0; font-size:40px;}';

            }

        } */

        //echo '</style>';
    
    }


    add_action( 'wp_head', 'surge_conditional_frontend_stylesheet' );

}

/*========================================================================
                Resetting Role Capabilities - Surge0014
========================================================================*/
/*

if ( ! function_exists( 'surge_remove_role_capability' ) ) { 
//Named this way so that Template child theme can override it easily.

    function surge_remove_role_capability() {

        // gets the author role
        $role = get_role( 'editor' );
        $role->remove_cap( 'switch_themes' );
        $role->remove_cap( 'edit_theme_options' );//You can add this if we want to show custom the welcome panel.
        $role->remove_cap( 'manage_options' );

    }

} */