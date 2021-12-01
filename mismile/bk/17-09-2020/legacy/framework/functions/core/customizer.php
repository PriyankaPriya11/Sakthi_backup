<?php

/*========================================================================
                Hide Sections
========================================================================*/

/**
* @deprecated Removing Nav spits out error when viewing with Debug Mode on.
* @todo We can use the link below, but it must be inside a plugin as its filter runs during the plugin_loaded action.
* @link( https://developer.wordpress.org/reference/hooks/customize_loaded_components/, Customize_loaded_components)
**/

if ( ! function_exists( 'remove_customizer_settings' ) ) {

  function remove_customizer_settings( $wp_customize ) {

    $wp_customize->remove_panel('nav_menus');
    $wp_customize->remove_section('colors');
    $wp_customize->remove_section('title_tagline');
    $wp_customize->remove_section('background_image');
    $wp_customize->remove_section('header_image');
    $wp_customize->remove_section('static_front_page');
  
  }

  add_action( 'customize_register', 'remove_customizer_settings', 20 );

}

/*========================================================================
                Rename/Rearange Controls
========================================================================*/

if ( ! function_exists( 'rename_customizer_settings' ) ) {

  function rename_customizer_settings( $wp_customize ) {

    $wp_customize->get_control( 'site_icon' )->section = __( 'business_category', 'surge' );
    $wp_customize->get_control( 'show_on_front' )->section = __( 'theme_options', 'surge' );
    $wp_customize->get_control( 'page_on_front' )->section = __( 'theme_options', 'surge' );
    $wp_customize->get_control( 'page_for_posts' )->section = __( 'theme_options', 'surge' );
  
  }

  add_action( 'customize_register', 'rename_customizer_settings', 20 );
}

/*========================================================================
                Pick From Custom Post Type
========================================================================*/

if( class_exists( 'WP_Customize_Control' ) ) {

    class WP_Customize_Pick_A_Post_Control extends WP_Customize_Control {

        public $type = 'latest_post_dropdown';
 
        public function render_content() {

        $latest = new WP_Query( array(
            'post_type'   => array('page', 'post'), // Add = 'education', = before page if needed.
            'posts_per_page' => -1
        ));

        ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <select <?php $this->link(); ?>>
                    <?php 
                    while( $latest->have_posts() ) {
                        $latest->the_post();
                        echo "<option " . selected( $this->value(), get_the_ID() ) . " value='" . get_the_ID() . "'>" . the_title( '', '', false ) . "</option>";
                    }
                    ?>
                </select>
            </label>
        <?php

        }
    }
}

/*========================================================================
                Sanitation Functions
========================================================================*/

//Sanitize Text inputs and text ares
//Use 'sanitize_callback' => 'absint' to sanitize page choices. - Use 'sanitize_callback' => 'esc_url', for raw url.
function surge_sanitize_strip_slashes($input) {
    return wp_kses_stripslashes($input);
}

//Sanitize Email inputs
function surge_sanitize_email($input) {
    return is_email($input);
}

function surge_sanitize_text_field($input) {
    return sanitize_text_field($input);
}

//Sanitize Text titles
function surge_sanitize_nohtml($input) {
    return wp_filter_nohtml_kses($input);
}
//Sanitize Numbers
function surge_sanitize_number($input) {
    if ( isset( $input ) && is_numeric( $input ) ) {
        return $input;
    }
}
//Sanitize Hex
function surge_sanitize_hexcolor($color) {
    if ($unhashed = sanitize_hex_color_no_hash($color))
        return '#' . $unhashed;
    return $color;
}

//Test run. Sanitize Radio Buttons and select lists.
function surge_sanitize_choices( $input, $setting ) {
    
    global $wp_customize;

    $control = $wp_customize->get_control( $setting->id );

    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    }

    else {
        return $setting->default;
    }
}

//Slashes to Text, HTML to Text area, Email to Email. Checking later for hex and others.

/*========================================================================
                Custom Controls
========================================================================*/

/**
 * Theme Customizer sources
 * @link codex.wordpress.org/Theme_Customization_API
 * @link developer.wordpress.org/themes/advanced-topics/customizer-api/
 * @link www.narga.net/comprehensive-guide-wordpress-theme-options-with-customization-api/ - control examples
 */

if ( ! function_exists( 'surge_customize_register' ) ) {

add_action( 'customize_register', 'surge_customize_register' );

function surge_customize_register($wp_customize) { // ... what you want to customize will go below and '}' at the end

/*========================================================================
                360 Panel
========================================================================*/
$wp_customize->add_panel( '360_panel', array(
  'title' => __( '360 Panel', 'surge' ),
  'description' => 'Controls for 360 Semi-Custom Designs', // Include html tags such as <p>.
  'capability'     => 'create_users',
  'priority' => 90, // Mixed with top-level-section hierarchy.
) );

/*========================================================================
                Business Info Panel
========================================================================*/
$wp_customize->add_panel( 'site_info', array(
  'title' => __( 'Business Info', 'surge' ),
  'description' => 'Enter your practice phone number, address, email, etc.',
  'priority' => 91,
) );

/*========================================================================
                Page Elements Panel
========================================================================*/
/*
$wp_customize->add_panel( 'page_elements', array(
  'title' => __( 'Page Elements', 'surge' ),
  'description' => 'Customize theme elements like promos, excerpt, etc.',
  'priority' => 380,
) );
*/

/*========================================================================
                Practice Info
========================================================================*/

// Name-Logo Section
$wp_customize->add_section( 'name_logo', array(
'title' => __( 'Name & Tagline', 'surge' ),
'priority' => 120,
'panel' => 'site_info',
) );

// Hide Name
/**
* @todo Hidding name section for now, however there are themes that use both a logo and text. Oversight here so we will comment it out for now.
*
$wp_customize->add_setting( 'hide_name', array(
'type' => 'option', // or 'theme_mod'
'default' => 'show-it',
'transport' => 'refresh', // or postMessage
'sanitize_callback' => 'surge_sanitize_choices',
) );

$wp_customize->add_control( 'hide_name', array(
'label'      => __( 'Name', 'surge' ),
'section'    => 'name_logo',
'settings'   => 'hide_name',
'type'       => 'radio',
     'choices'    => array(
     'show-it' => __('Show', 'surge'),
     'hide-it' => __('Hide', 'surge'),
    ),
) );
*/

// Name
$wp_customize->add_setting( 'name', array(
'type' => 'option',
'default' => 'Business Name',
'sanitize_callback' => 'surge_sanitize_nohtml',
) );

$wp_customize->add_control( 'name', array(
'label'      => __( 'Business Name', 'surge' ),
'section'    => 'name_logo',
'settings'   => 'blogname',
'type'       => 'text',
) );

// Tag Line
$wp_customize->add_setting( 'tagline', array(
'type' => 'option',
'default' => 'OPTIONAL TAGLINE',
'sanitize_callback' => 'surge_sanitize_nohtml',
) );

$wp_customize->add_control( 'tagline', array(
'label'      => __( 'Tagline', 'surge' ),
'section'    => 'name_logo',
'settings'   => 'blogdescription',
'type'       => 'text',
) );


/*========================================================================
                Contact
========================================================================*/

$wp_customize->add_section( 'contact', array(
'title' => __( 'Contact Info', 'surge' ),
'priority' => 130,
'panel' => 'site_info',
) );

// Phone
$wp_customize->add_setting( 'phone', array(
'type' => 'option',
'default' => '800.997.9368',
'sanitize_callback' => 'surge_sanitize_nohtml',
) );

$wp_customize->add_control( 'phone', array(
'label'      => __( 'Phone', 'surge' ),
'section'    => 'contact',
'settings'   => 'phone',
'type'       => 'text',
) );

// Email
$wp_customize->add_setting( 'email', array(
'type' => 'option',
'default' => 'My Email',
'sanitize_callback' => 'surge_sanitize_email',
) );

$wp_customize->add_control( 'email', array(
'label'      => __( 'Email', 'surge' ),
'section'    => 'contact',
'settings'   => 'email',
'type'       => 'text',
) );

// Address
$wp_customize->add_setting( 'address', array(
'type' => 'option',
'default' => 'My Address',
'sanitize_callback' => 'surge_sanitize_nohtml',
) );

$wp_customize->add_control( 'address', array(
'label'      => __( 'Street Address', 'surge' ),
'section'    => 'contact',
'settings'   => 'address',
'type'       => 'text',
) );

// City
$wp_customize->add_setting( 'city', array(
'type' => 'option',
'default' => 'My City',
'sanitize_callback' => 'surge_sanitize_nohtml',
) );

$wp_customize->add_control( 'city', array(
'label'      => __( 'City', 'surge' ),
'section'    => 'contact',
'settings'   => 'city',
'type'       => 'text',
) );

// State
$wp_customize->add_setting( 'state', array(
'type' => 'option',
'default' => 'My State',
'sanitize_callback' => 'surge_sanitize_nohtml',
) );

$wp_customize->add_control( 'state', array(
'label'      => __( 'State', 'surge' ),
'section'    => 'contact',
'settings'   => 'state',
'type'       => 'text',
) );

// Zip
$wp_customize->add_setting( 'zip', array(
'type' => 'option',
'default' => '54321',
'sanitize_callback' => 'surge_sanitize_number',
) );

$wp_customize->add_control( 'zip', array(
'label'      => __( 'Zip', 'surge' ),
'section'    => 'contact',
'settings'   => 'zip',
'type'       => 'text',
) );

/*========================================================================
                Social
========================================================================*/

$wp_customize->add_section( 'social', array(
'title' => __( 'Social Media', 'surge' ),
'priority' => 106,
//'panel' => 'page_elements',
) );

$wp_customize->add_setting( 'facebook', array(
'type' => 'option',
'default' => 'https://facebook.com',
'sanitize_callback' => 'esc_url',
) );

$wp_customize->add_control( 'facebook', array(
'label'      => __( 'Facebook Page Web Address', 'surge' ),
'section'    => 'social',
'settings'   => 'facebook',
'type'       => 'text',
) );

$wp_customize->add_setting( 'google', array(
'type' => 'option',
'default' => 'https://plus.google.com',
'sanitize_callback' => 'esc_url',
) );

$wp_customize->add_control( 'google', array(
'label'      => __( 'Google Plus', 'surge' ),
'section'    => 'social',
'settings'   => 'google',
'type'       => 'text',
) );

$wp_customize->add_setting( 'twitter', array(
'type' => 'option',
'default' => 'https://twitter.com',
'sanitize_callback' => 'esc_url',
) );

$wp_customize->add_control( 'twitter', array(
'label'      => __( 'Twitter', 'surge' ),
'section'    => 'social',
'settings'   => 'twitter',
'type'       => 'text',
) );

$wp_customize->add_setting( 'googlereviews', array(
'type' => 'option',
'sanitize_callback' => 'esc_url',
) );

$wp_customize->add_control( 'googlereviews', array(
'label'      => __( 'Google Reviews', 'surge' ),
'section'    => 'social',
'settings'   => 'googlereviews',
'type'       => 'text',
) );

$wp_customize->add_setting( 'youtube', array(
'type' => 'option',
'default' => '',
'sanitize_callback' => 'esc_url',
) );

$wp_customize->add_control( 'youtube', array(
'label'      => __( 'YouTube', 'surge' ),
'section'    => 'social',
'settings'   => 'youtube',
'type'       => 'text',
) );

$wp_customize->add_setting( 'instagram', array(
'type' => 'option',
'default' => '',
'sanitize_callback' => 'esc_url',
) );

$wp_customize->add_control( 'instagram', array(
'label'      => __( 'Instagram', 'surge' ),
'section'    => 'social',
'settings'   => 'instagram',
'type'       => 'text',
) );

$wp_customize->add_setting( 'pinterest', array(
'type' => 'option',
'default' => '',
'sanitize_callback' => 'esc_url',
) );

$wp_customize->add_control( 'pinterest', array(
'label'      => __( 'Pinterest', 'surge' ),
'section'    => 'social',
'settings'   => 'pinterest',
'type'       => 'text',
) );

$wp_customize->add_setting( 'linkedin', array(
'type' => 'option',
'default' => '',
'sanitize_callback' => 'esc_url',
) );

$wp_customize->add_control( 'linkedin', array(
'label'      => __( 'Linkedin', 'surge' ),
'section'    => 'social',
'settings'   => 'linkedin',
'type'       => 'text',
) );

$wp_customize->add_setting( 'blogger', array(
'type' => 'option',
'default' => '',
'sanitize_callback' => 'esc_url',
) );

$wp_customize->add_control( 'blogger', array(
'label'      => __( 'Blogger', 'surge' ),
'section'    => 'social',
'settings'   => 'blogger',
'type'       => 'text',
) );

$wp_customize->add_setting( 'yelp', array(
'type' => 'option',
'default' => '',
'sanitize_callback' => 'esc_url',
) );

$wp_customize->add_control( 'yelp', array(
'label'      => __( 'Yelp', 'surge' ),
'section'    => 'social',
'settings'   => 'yelp',
'type'       => 'text',
) );

/*========================================================================
                Custom CSS
========================================================================*/

/*

$wp_customize->add_section( 'customcss', array(
'title' => __( 'Custom CSS - **Deprecated** Please use Additional CSS @ Root', 'surge' ),
'priority' => 175,
'panel' => '360_panel',
) );

// Text Area Content
$wp_customize->add_setting( 'customcss', array(
'type' => 'theme_mod',
'default' => '',
'sanitize_callback' => 'surge_sanitize_strip_slashes',
) );

$wp_customize->add_control( 'customcss', array(
'label'      => __( 'Custom CSS', 'surge' ),
'section'    => 'customcss',
'settings'   => 'customcss',
'type'       => 'textarea',
) );

*/

/*========================================================================
                Custom Scripts
========================================================================*/

$wp_customize->add_section( 'custom_scripts', array(
'title' => __( 'Custom Scripts', 'surge' ),
'priority' => 175,
'panel' => '360_panel',
) );

// Text Area Content
$wp_customize->add_setting( 'custom_scripts', array(
'type' => 'theme_mod',
'default' => '',
'sanitize_callback' => 'surge_sanitize_strip_slashes',
) );

$wp_customize->add_control( 'custom_scripts', array(
'label'      => __( 'Custom Scripts', 'surge' ),
'section'    => 'custom_scripts',
'settings'   => 'custom_scripts',
'type'       => 'textarea',
) );

/*========================================================================
                Theme Options
========================================================================*/

$wp_customize->add_section( 'theme_options', array(
'title' => __( 'Theme Options', 'surge' ),
'priority' => 100,
'panel' => '360_panel',
));

// Blog Status
$wp_customize->add_setting( 'blog_status_picker', array(
'type' => 'option', // or 'theme_mod'
'default' => 'opt-blog-off',
//'transport' => 'postMessage', // or postMessage
'sanitize_callback' => 'surge_sanitize_choices',
) );

$wp_customize->add_control( 'blog_status_picker', array(
'label'      => __( 'Blog Status:', 'surge' ),
'section'    => 'theme_options',
'settings'   => 'blog_status_picker',
'type'       => 'radio',
'choices'    => array(
  'opt-blog-on' => __('Active', 'surge'),
  'opt-blog-off' => __('Inactive', 'surge'),
  ),
));

// Site Class
/*
$wp_customize->add_setting( 'site_class', array(
'type' => 'option',
'transport' => 'postMessage',
));

$wp_customize->add_control( 'site_class', array(
'label'      => __( 'Template (Warning: check this box for Template clients only!)', 'surge' ),
'section'    => 'theme_options',
'settings'   => 'site_class',
'type'       => 'checkbox',
));
*/

}//End of the customizer options.

}//End of IF Function Exists