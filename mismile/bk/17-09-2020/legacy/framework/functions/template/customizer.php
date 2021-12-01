<?php

/**
 *
 * Creating Surge Template Child Theme Customizer functions used by Template Init.
 * 
 * @since       1.0.7
 * @package     Surge
 * @subpackage  Surge Template
 * @author      Rodrigo Leon
 * @link        
 * 
 */

if ( ! function_exists( 'surge_override_customizer_defaults' ) ) {

    function surge_override_customizer_defaults( $wp_customize ) {

        // Ranaming the Setting as customs do not upload logos.
        // Original setting set in Core Customizer.php
        $wp_customize->get_section( 'name_logo' )->title = __( 'Name & Logo', 'surge' );

    }

}

/*========================================================================
                Additional Customizer Fields
========================================================================*/

if ( ! function_exists ( 'template_customizer_options_registration' ) ) {

function template_customizer_options_registration($wp_customize) {

/*========================================================================
                Advanced Panel
========================================================================*/

/*$wp_customize->add_panel( 'advanced', array(
  'title' => __( 'Fonts & Colors', 'surge' ),
  'description' => 'Controls for Colors, Fonts...',
  'priority' => 102,
) );
*/

/*========================================================================
                Fonts
========================================================================*/

$wp_customize->add_section( 'fonts', array(
'title' => __( 'Fonts', 'surge' ),
'priority' => 92,
//'panel' => 'advanced',
) );

// Title 1
$wp_customize->add_setting( 'title_1_font', array(
'type' => 'theme_mod',
'sanitize_callback' => 'surge_sanitize_choices',
) );

$wp_customize->add_control(
    new WP_Customize_Control(
    $wp_customize,
    'title_1_font',
    array(
    'label'      => __( 'Primary Headings (h1, h3, h5)', 'surge' ),
    'section'    => 'fonts',
    'settings'   => 'title_1_font',
    'type'       => 'select',
    'choices'    => array(
        '' => __('Default', 'surge'),
        'Lato' => __('Lato (modern)', 'surge'),
        'Arial' => __('Arial (modern/common)', 'surge'),
        'Oswald' => __('Oswald (modern/condensed)', 'surge'),
        'Times new roman' => __('Times New Roman (traditional)', 'surge'),
        'Georgia' => __('Georgia (classic)', 'surge'),
        'Cinzel' => __('Cinzel (modern/allcap)', 'surge'),
        'Raleway' => __('Raleway (recent-stylish)', 'surge'),
        'Open Sans' => __('Open Sans (modern/thin)', 'surge'),
        'Dancing Script' => __('Dancing Script (modern cursive)', 'surge'),
        'Fjala One' => __('Fjala One (straight)', 'surge'),
        'Arvo' => __('Arvo (code-like)', 'surge'),
        'Margarine' => __('Margarine (fun/kids)', 'surge'),
        'Pt Serif' => __('PT Serif (classic/clean)', 'surge'),
        'Merriweather' => __('Merriweather (classic/round)', 'surge'),
        'Ubuntu' => __('Ubuntu (ultra-modern)', 'surge'),
        'Lobster' => __('Lobster (lines)', 'surge'),
        'Pinyon Script' => __('Pinyon Script (cursive)', 'surge'),
        'Henny Penny' => __('Henny Penny (fun/kids)', 'surge'),
            ),
        )
    )
);

// Title 2
$wp_customize->add_setting( 'title_2_font', array(
'type' => 'theme_mod',
'sanitize_callback' => 'surge_sanitize_choices',
) );

$wp_customize->add_control( 'title_2_font', array(
'label'      => __( 'Secondary Headings (h2, h4, h6)', 'surge' ),
'section'    => 'fonts',
'settings'   => 'title_2_font',
'type'       => 'select',
    'choices'    => array(
        '' => __('Default', 'surge'),
        'Lato' => __('Lato (modern)', 'surge'),
        'Arial' => __('Arial (modern/common)', 'surge'),
        'Oswald' => __('Oswald (modern/condensed)', 'surge'),
        'Times new roman' => __('Times New Roman (traditional)', 'surge'),
        'Georgia' => __('Georgia (classic)', 'surge'),
        'Cinzel' => __('Cinzel (Modern/Allcap)', 'surge'),
        'Raleway' => __('Raleway (recent-stylish)', 'surge'),
        'Open Sans' => __('Open Sans (modern/thin)', 'surge'),
        'Dancing Script' => __('Dancing Script (modern cursive)', 'surge'),
        'Fjala One' => __('Fjala One (straight)', 'surge'),
        'Arvo' => __('Arvo (code-like)', 'surge'),
        'Margarine' => __('Margarine (fun/kids)', 'surge'),
        'Pt Serif' => __('PT Serif (classic/clean)', 'surge'),
        'Merriweather' => __('Merriweather (classic/round)', 'surge'),
        'Ubuntu' => __('Ubuntu (ultra-modern)', 'surge'),
        'Lobster' => __('Lobster (lines)', 'surge'),
        'Pinyon Script' => __('Pinyon Script (cursive)', 'surge'),
        'Henny Penny' => __('Henny Penny (fun/kids)', 'surge'),
    ),
) );

// Main Font
$wp_customize->add_setting( 'main_font', array(
'type' => 'theme_mod',
'sanitize_callback' => 'surge_sanitize_choices',
) );

$wp_customize->add_control( 'main_font', array(
'label'      => __( 'Body Text', 'surge' ),
'section'    => 'fonts',
'settings'   => 'main_font',
'type'       => 'select',
    'choices'    => array(
        '' => __('Default', 'surge'),
        'Lato' => __('Lato (Modern)', 'surge'),
        'Arial' => __('Arial (modern/common)', 'surge'),
        'Oswald' => __('Oswald (modern/condensed)', 'surge'),
        'Times new roman' => __('Times New Roman (traditional)', 'surge'),
        'Georgia' => __('Georgia (classic)', 'surge'),
        'Cinzel' => __('Cinzel (recent/classic)', 'surge'),
        'Raleway' => __('Raleway (recent-stylish)', 'surge'),
        'Open Sans' => __('Open Sans (modern/thin)', 'surge'),
        'Dancing Script' => __('Dancing Script (modern cursive)', 'surge'),
        'Fjala One' => __('Fjala One (straight)', 'surge'),
        'Arvo' => __('Arvo (code-like)', 'surge'),
        'Margarine' => __('Margarine (fun/kids)', 'surge'),
        'Pt Serif' => __('PT Serif (classic/clean)', 'surge'),
        'Merriweather' => __('Merriweather (classic/round)', 'surge'),
        'Ubuntu' => __('Ubuntu (ultra-modern)', 'surge'),
        'Lobster' => __('Lobster (lines)', 'surge'),
        'Pinyon Script' => __('Pinyon Script (cursive)', 'surge'),
        'Henny Penny' => __('Henny Penny (fun/kids)', 'surge'),
    ),
) );

/*========================================================================
                Practice Info
========================================================================*/

// Hide Logo
$wp_customize->add_setting( 'hide_logo', array(
'type' => 'option',
'default' => 'hide-it',
'sanitize_callback' => 'surge_sanitize_choices',
) );

$wp_customize->add_control( 'hide_logo', array(
'label'      => __( 'Logo', 'surge' ),
'section'    => 'name_logo',
'settings'   => 'hide_logo',
'type'       => 'radio',
     'choices'    => array(
     'show-it' => __('Show', 'surge'),
     'hide-it' => __('Hide', 'surge'),
    ),
) );

//Logo Image Upload
$wp_customize->add_setting('logo', array(
    'default'  => get_template_directory_uri() . '/framework/assets/images/defaults/logos/logo-1.png',
    'type'     => 'option',
    'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'logo', array(
    'label'    => __('Upload Logo', 'surge'),
    'section'  => 'name_logo',
    'settings' => 'logo',
)));

/*========================================================================
                Social
========================================================================*/

$wp_customize->add_setting( 'hide_social', array(
'type' => 'option',
'default' => 'show-it',
'sanitize_callback' => 'surge_sanitize_choices',
) );

$wp_customize->add_control( 'hide_social', array(
'label'      => __( 'Social Media Icons', 'surge' ),
'section'    => 'social',
'settings'   => 'hide_social',
'type'       => 'radio',
     'choices'    => array(
        'show-it' => __('Show', 'surge'),
        'hide-it' => __('Hide', 'surge'),
    ),
) );

/*========================================================================
                Call To Action
========================================================================*/

$wp_customize->add_section( 'action', array(
'title' => __( 'Call to Action', 'surge' ),
'priority' => 107,
//'panel' => 'page_elements',
) );

//Hide Action
$wp_customize->add_setting( 'hide_action', array(
'type' => 'option',
'default' => 'show-it',
'sanitize_callback' => 'surge_sanitize_choices',
) );

$wp_customize->add_control( 'hide_action', array(
'label'      => __( 'Call to Action', 'surge' ),
'section'    => 'action',
'settings'   => 'hide_action',
'type'       => 'radio',
     'choices'    => array(
        'show-it' => __('Show', 'surge'),
        'hide-it' => __('Hide', 'surge'),
    ),
) );

// Action Text
$wp_customize->add_setting( 'action_text', array(
'type' => 'option',
'default' => 'Contact Us Today',
'sanitize_callback' => 'surge_sanitize_strip_slashes',
) );

$wp_customize->add_control( 'action_text', array(
'label'      => __( 'Action Text', 'surge' ),
'section'    => 'action',
'settings'   => 'action_text',
'type'       => 'text',
));

// Action URL
$wp_customize->add_setting('action_url', array(
    'type'    => 'option',
    'default' => '#',
    'sanitize_callback' => 'absint',
));

$wp_customize->add_control(
    new WP_Customize_Pick_A_Post_Control(
    $wp_customize,
    'action_url', array(
    'label'      => __('Target Page', 'surge'),
    'section'    => 'action',
    'type'    => 'dropdown-pages',
    'settings'   => 'action_url',
)));

/*========================================================================
                Services
========================================================================*/

$wp_customize->add_section( 'services', array(
'title' => __( 'Services', 'surge' ),
'priority' => 103,
//'panel' => 'page_elements',
) );

// Hide services
$wp_customize->add_setting( 'hide_services', array(
'type' => 'option',
'default' => 'show-it',
'sanitize_callback' => 'surge_sanitize_choices',
) );

$wp_customize->add_control( 'hide_services', array(
'label'      => __( 'Services', 'surge' ),
'section'    => 'services',
'settings'   => 'hide_services',
'type'       => 'radio',
     'choices'    => array(
     'show-it' => __('Show', 'surge'),
     'hide-it' => __('Hide', 'surge'),
    ),
) );

// Service-1-Title
$wp_customize->add_setting( 'service_1_title', array(
'type' => 'option',
'default' => 'Service One',
'sanitize_callback' => 'surge_sanitize_text_field',
) );

$wp_customize->add_control( 'service_1_title', array(
'label'      => __( '========== Service 1 ==========', 'surge' ),
'section'    => 'services',
'settings'   => 'service_1_title',
'type'       => 'text',
) );

// Service-1-content
$wp_customize->add_setting( 'service_1_subtitle', array(
'type' => 'option',
'default' => 'Service One Subtitle ',
'sanitize_callback' => 'surge_sanitize_text_field',
) );

$wp_customize->add_control( 'service_1_subtitle', array(
'label'      => __( 'Subtitle', 'surge' ),
'section'    => 'services',
'settings'   => 'service_1_subtitle',
'type'       => 'textarea',
) );

// Service 1 URL
$wp_customize->add_setting('service_1_url', array(
    'type'    => 'option',
    'default' => '#',
    'sanitize_callback' => 'absint',
));

$wp_customize->add_control(
    new WP_Customize_Pick_A_Post_Control(
    $wp_customize,
    'service_1_url', array(
    'label'      => __('Target Page 1', 'surge'),
    'section'    => 'services',
    'type'    => 'dropdown-pages',
    'settings'   => 'service_1_url',
)));

// Service 2 Title
$wp_customize->add_setting( 'service_2_title', array(
'type' => 'option',
'default' => 'Service Two',
'sanitize_callback' => 'surge_sanitize_text_field',
) );

$wp_customize->add_control( 'service_2_title', array(
'label'      => __( '========== Service 2 ==========', 'surge' ),
'section'    => 'services',
'settings'   => 'service_2_title',
'type'       => 'text',
) );

// Service 2 Content
$wp_customize->add_setting( 'service_2_subtitle', array(
'type' => 'option',
'default' => 'Service Two Subtitle',
'sanitize_callback' => 'surge_sanitize_text_field',
) );

$wp_customize->add_control( 'service_2_subtitle', array(
'label'      => __( 'Subtitle', 'surge' ),
'section'    => 'services',
'settings'   => 'service_2_subtitle',
'type'       => 'textarea',
) );

// Service 2 URL
$wp_customize->add_setting('service_2_url', array(
    'type'    => 'option',
    'default' => '#',
    'sanitize_callback' => 'absint',
));

$wp_customize->add_control(
    new WP_Customize_Pick_A_Post_Control(
    $wp_customize,
    'service_2_url', array(
    'label'      => __('Target Page 2', 'surge'),
    'section'    => 'services',
    'type'    => 'dropdown-pages',
    'settings'   => 'service_2_url',
)));

// Service 3 Title
$wp_customize->add_setting( 'service_3_title', array(
'type' => 'option',
'default' => 'Service Three',
'sanitize_callback' => 'surge_sanitize_text_field',
) );

$wp_customize->add_control( 'service_3_title', array(
'label'      => __( '========== Service 3 ==========', 'surge' ),
'section'    => 'services',
'settings'   => 'service_3_title',
'type'       => 'text',
) );

// Service 3 Content
$wp_customize->add_setting( 'service_3_subtitle', array(
'type' => 'option',
'default' => 'Service Three Subtitle',
'sanitize_callback' => 'surge_sanitize_text_field',
) );

$wp_customize->add_control( 'service_3_subtitle', array(
'label'      => __( 'Subtitle', 'surge' ),
'section'    => 'services',
'settings'   => 'service_3_subtitle',
'type'       => 'textarea',
) );

// Service 3 URL
$wp_customize->add_setting('service_3_url', array(
    'type'    => 'option',
    'default' => '#',
    'sanitize_callback' => 'absint',
));

$wp_customize->add_control(
    new WP_Customize_Pick_A_Post_Control(
    $wp_customize,
    'service_3_url', array(
    'label'      => __('Target Page 3', 'surge'),
    'section'    => 'services',
    'type'    => 'dropdown-pages',
    'settings'   => 'service_3_url',
)));

// Service 4 Title
$wp_customize->add_setting( 'service_4_title', array(
'type' => 'option',
'default' => 'Service Four',
'sanitize_callback' => 'surge_sanitize_text_field',
) );

$wp_customize->add_control( 'service_4_title', array(
'label'      => __( '========== Service 4 ==========', 'surge'),
'section'    => 'services',
'settings'   => 'service_4_title',
'type'       => 'text',
) );

// Service 4 Content
$wp_customize->add_setting( 'service_4_subtitle', array(
'type' => 'option',
'default' => 'Service Four Subtitle',
'sanitize_callback' => 'surge_sanitize_text_field',
) );

$wp_customize->add_control( 'service_4_subtitle', array(
'label'      => __( 'Subtitle 4', 'surge' ),
'section'    => 'services',
'settings'   => 'service_4_subtitle',
'type'       => 'textarea',
) );

// Service 4 URL
$wp_customize->add_setting('service_4_url', array(
    'type'    => 'option',
    'default' => '#',
    'sanitize_callback' => 'absint',
));

$wp_customize->add_control(
    new WP_Customize_Pick_A_Post_Control(
    $wp_customize,
    'service_4_url', array(
    'label'      => __('Target Page 4', 'surge'),
    'section'    => 'services',
    'type'    => 'dropdown-pages',
    'settings'   => 'service_4_url',
)));

/*========================================================================
                Highlights
========================================================================*/

/*
$wp_customize->add_section( 'highlights', array(
'title' => __( 'Highlights', 'surge' ),
'priority' => 103,
//'panel' => 'page_elements',
) );

// Hide Highlights
$wp_customize->add_setting( 'hide_highlights', array(
'type' => 'option',
'default' => 'show-it',
'sanitize_callback' => 'surge_sanitize_choices',
) );

$wp_customize->add_control( 'hide_highlights', array(
'label'      => __( 'Highlights', 'surge' ),
'section'    => 'highlights',
'settings'   => 'hide_highlights',
'type'       => 'radio',
     'choices'    => array(
     'show-it' => __('Show', 'surge'),
     'hide-it' => __('Hide', 'surge'),
    ),
) );

// Highlight 1 Title
$wp_customize->add_setting( 'highlight_1_title', array(
'type' => 'option',
'default' => 'Highlight One',
'sanitize_callback' => 'surge_sanitize_text_field',
) );

$wp_customize->add_control( 'highlight_1_title', array(
'label'      => __( '========== Highlight 1 ==========', 'surge' ),
'section'    => 'highlights',
'settings'   => 'highlight_1_title',
'type'       => 'text',
) );

// Highlight 1 Content
$wp_customize->add_setting( 'highlight_1_subtitle', array(
'type' => 'option',
'default' => 'Highlight One Subtitle ',
'sanitize_callback' => 'surge_sanitize_text_field',
) );

$wp_customize->add_control( 'highlight_1_subtitle', array(
'label'      => __( 'Subtitle', 'surge' ),
'section'    => 'highlights',
'settings'   => 'highlight_1_subtitle',
'type'       => 'textarea',
) );

// Highlight 1 URL
$wp_customize->add_setting('highlight_1_url', array(
    'type'    => 'option',
    'default' => '#',
    'sanitize_callback' => 'absint',
));

$wp_customize->add_control(
    new WP_Customize_Pick_A_Post_Control(
    $wp_customize,
    'highlight_1_url', array(
    'label'      => __('Target Page 1', 'surge'),
    'section'    => 'highlights',
    'type'    => 'dropdown-pages',
    'settings'   => 'highlight_1_url',
)));

// Highlight Image 1
$wp_customize->add_setting( 'hfeatured_img_status_1', array(
'type' => 'option',
'default' => 'inactive',
//'transport' => 'postMessage', //(Used With JS)
'sanitize_callback' => 'surge_sanitize_choices',
) );

$wp_customize->add_control( 'hfeatured_img_status_1', array(
'label'      => __( 'Display Featured Image', 'surge' ),
'section'    => 'highlights',
'settings'   => 'hfeatured_img_status_1',
'type'       => 'select',
     'choices'    => array(
     'active' => __('Active', 'surge'),
     'inactive' => __('Inactive', 'surge'),
    ),
) );

// Highlight Image 1
$wp_customize->add_setting('hfeature_img_1', array(
    //'default' => get_template_directory_uri() . '/framework/assets/images/defaults/logos/logo-1.png',
    'type' => 'option',
    'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'hfeature_img_1', array(
    'label'    => __('Upload Highlight Image 1', 'surge'),
    'section'  => 'highlights',
    'settings' => 'hfeature_img_1',
)));

//Highlight 2 Title
$wp_customize->add_setting( 'highlight_2_title', array(
'type' => 'option',
'default' => 'Highlight Two',
'sanitize_callback' => 'surge_sanitize_text_field',
) );

$wp_customize->add_control( 'highlight_2_title', array(
'label'      => __( '========== Highlight 2 ==========', 'surge' ),
'section'    => 'highlights',
'settings'   => 'highlight_2_title',
'type'       => 'text',
) );

// Highlight 2 Content
$wp_customize->add_setting( 'highlight_2_subtitle', array(
'type' => 'option',
'default' => 'Highlight Two Subtitle ',
'sanitize_callback' => 'surge_sanitize_text_field',
) );

$wp_customize->add_control( 'highlight_2_subtitle', array(
'label'      => __( 'Subtitle', 'surge' ),
'section'    => 'highlights',
'settings'   => 'highlight_2_subtitle',
'type'       => 'textarea',
) );

// Highlight 2 URL
$wp_customize->add_setting('highlight_2_url', array(
    'type'    => 'option',
    'default' => '#',
    'sanitize_callback' => 'absint',
));

$wp_customize->add_control(
    new WP_Customize_Pick_A_Post_Control(
    $wp_customize,
    'highlight_2_url', array(
    'label'      => __('Target Page 2', 'surge'),
    'section'    => 'highlights',
    'type'    => 'dropdown-pages',
    'settings'   => 'highlight_2_url',
)));

// Highlight Image 2
$wp_customize->add_setting( 'hfeatured_img_status_2', array(
'type' => 'option',
'default' => 'inactive',
//'transport' => 'postMessage', //(Used With JS)
'sanitize_callback' => 'surge_sanitize_choices',
) );

$wp_customize->add_control( 'hfeatured_img_status_2', array(
'label'      => __( 'Display Featured Image', 'surge' ),
'section'    => 'highlights',
'settings'   => 'hfeatured_img_status_2',
'type'       => 'select',
     'choices'    => array(
     'active' => __('Active', 'surge'),
     'inactive' => __('Inactive', 'surge'),
    ),
) );

// Highlight Image 2
$wp_customize->add_setting('hfeature_img_2', array(
    //'default' => get_template_directory_uri() . '/framework/assets/images/defaults/logos/logo-2.png',
    'type' => 'option',
    'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'hfeature_img_2', array(
    'label'    => __('Upload Highlight Image 2', 'surge'),
    'section'  => 'highlights',
    'settings' => 'hfeature_img_2',
)));

*/

/*========================================================================
                Excerpt
========================================================================*/
$wp_customize->add_section( 'excerpt', array(
'title' => __( 'Excerpt', 'surge' ),
'priority' => 104,
//'panel' => 'page_elements',
));

// Hide Excerpt
$wp_customize->add_setting( 'hide_excerpt', array(
'type' => 'option',
'default' => 'show-it',
'sanitize_callback' => 'surge_sanitize_choices',
));

$wp_customize->add_control( 'hide_excerpt', array(
'label'      => __( 'Excerpt (location varies)', 'surge' ),
'section'    => 'excerpt',
'settings'   => 'hide_excerpt',
'type'       => 'radio',
     'choices'    => array(
     'show-it' => __('Show', 'surge'),
     'hide-it' => __('Hide', 'surge'),
    ),
));

// Text Area Title
$wp_customize->add_setting( 'excerpt_title', array(
'type' => 'option',
'default' => 'Some Title',
'sanitize_callback' => 'surge_sanitize_text_field',
) );

$wp_customize->add_control( 'excerpt_title', array(
'label'      => __( 'Title', 'surge' ),
'section'    => 'excerpt',
'settings'   => 'excerpt_title',
'type'       => 'text',
) );

// Text Area Subitle
$wp_customize->add_setting( 'excerpt_subtitle', array(
'type' => 'option',
'default' => 'Subtitle',
'sanitize_callback' => 'surge_sanitize_text_field',
) );

$wp_customize->add_control( 'excerpt_subtitle', array(
'label'      => __( 'Subitle', 'surge' ),
'section'    => 'excerpt',
'settings'   => 'excerpt_subtitle',
'type'       => 'text',
) );

// Text Area Content
$wp_customize->add_setting( 'excerpt_content', array(
'type' => 'option',
'default' => 'You can also hide the whole textarea. Example use: A short description about business, the owner or a service with link to more details.',
'sanitize_callback' => 'surge_sanitize_text_field',
) );

$wp_customize->add_control( 'excerpt_content', array(
'label'      => __( 'Content', 'surge' ),
'section'    => 'excerpt',
'settings'   => 'excerpt_content',
'type'       => 'textarea',
) );

// Text Area Link
$wp_customize->add_setting( 'excerpt_link', array(
'type' => 'option',
'default' => 'Learn More',
'sanitize_callback' => 'surge_sanitize_text_field',
) );

$wp_customize->add_control( 'excerpt_link', array(
'label'      => __( 'Call to Action Text', 'surge' ),
'section'    => 'excerpt',
'settings'   => 'excerpt_link',
'type'       => 'text',
) );

// Text Area URL
$wp_customize->add_setting('excerpt_url', array(
    'type'    => 'option',
    'default' => '#',
    'sanitize_callback' => 'absint',
));

$wp_customize->add_control(
    new WP_Customize_Pick_A_Post_Control(
    $wp_customize,
    'excerpt_url', array(
    'label'      => __('Target Page', 'surge'),
    'section'    => 'excerpt',
    'type'    => 'dropdown-pages',
    'settings'   => 'excerpt_url',
)));

/*========================================================================
                Testimonials
========================================================================*/

$wp_customize->add_section( 'testimonials', array(
'title' => __( 'Testimonials', 'surge' ),
'priority' => 105,
//'panel' => 'page_elements',
) );

// Hide Testimonials
$wp_customize->add_setting( 'hide_testimonials', array(
'type' => 'option',
'default' => 'show-it',
'sanitize_callback' => 'surge_sanitize_choices',
) );

$wp_customize->add_control( 'hide_testimonials', array(
'label'      => __( 'Testimonials', 'surge' ),
'section'    => 'testimonials',
'settings'   => 'hide_testimonials',
'type'       => 'radio',
     'choices'    => array(
     'show-it' => __('Show', 'surge'),
     'hide-it' => __('Hide', 'surge'),
    ),
) );

// Testimonial 1 Content
$wp_customize->add_setting( 'testimonials_1_text', array(
'type' => 'option',
'default' => '"... this is where a testimonial will go. A good source of testimonials is phone conversations, reviews on other sites and emails or mail received. Best reviews and testimonials have a name and are specific..."',
'sanitize_callback' => 'surge_sanitize_text_field',
) );

$wp_customize->add_control( 'testimonials_1_text', array(
'label'      => __( '========== Testimonial 1 ==========', 'surge' ),
'section'    => 'testimonials',
'settings'   => 'testimonials_1_text',
'type'       => 'textarea',
) );

// Testimonials 1 Name
$wp_customize->add_setting( 'testimonials_1_name', array(
'type' => 'option',
'default' => 'Anonymous',
'sanitize_callback' => 'surge_sanitize_text_field',
) );

$wp_customize->add_control( 'testimonials_1_name', array(
'label'      => __( 'Display Name 1', 'surge' ),
'section'    => 'testimonials',
'settings'   => 'testimonials_1_name',
'type'       => 'text',
) );

// Testimonial 2 Content
$wp_customize->add_setting( 'testimonials_2_text', array(
'type' => 'option',
'default' => '"... this is where a testimonial will go. A good source of testimonials is phone conversations, reviews on other sites and emails or mail received. Best reviews and testimonials have a name and are specific..."',
'sanitize_callback' => 'surge_sanitize_text_field',
) );

$wp_customize->add_control( 'testimonials_2_text', array(
'label'      => __( '========== Testimonial 2 ==========', 'surge' ),
'section'    => 'testimonials',
'settings'   => 'testimonials_2_text',
'type'       => 'textarea',
) );

// Testimonials 3 Name
$wp_customize->add_setting( 'testimonials_2_name', array(
'type' => 'option',
'default' => 'Anonymous',
'sanitize_callback' => 'surge_sanitize_text_field',
) );

$wp_customize->add_control( 'testimonials_2_name', array(
'label'      => __( 'Display Name 2', 'surge' ),
'section'    => 'testimonials',
'settings'   => 'testimonials_2_name',
'type'       => 'text',
) );

// Testimonial 3 Content
$wp_customize->add_setting( 'testimonials_3_text', array(
'type' => 'option',
'default' => '"... this is where a testimonial will go. A good source of testimonials is phone conversations, reviews on other sites and emails or mail received. Best reviews and testimonials have a name and are specific..."',
'sanitize_callback' => 'surge_sanitize_text_field',
) );

$wp_customize->add_control( 'testimonials_3_text', array(
'label'      => __( '========== Testimonial 3 ==========', 'surge' ),
'section'    => 'testimonials',
'settings'   => 'testimonials_3_text',
'type'       => 'textarea',
) );

// Testimonials 3 Name
$wp_customize->add_setting( 'testimonials_3_name', array(
'type' => 'option',
'default' => 'Anonymous',
'sanitize_callback' => 'surge_sanitize_text_field',
) );

$wp_customize->add_control( 'testimonials_3_name', array(
'label'      => __( 'Display Name 3', 'surge' ),
'section'    => 'testimonials',
'settings'   => 'testimonials_3_name',
'type'       => 'text',
));

// Testimonials Link Text
$wp_customize->add_setting( 'testimonials_link_text', array(
'type' => 'option',
'default' => 'Read more reviews',
'sanitize_callback' => 'surge_sanitize_text_field',
));

$wp_customize->add_control( 'testimonials_link_text', array(
'label'      => __( '======== Testimonial Link ========', 'surge' ),
'section'    => 'testimonials',
'settings'   => 'testimonials_link_text',
'type'       => 'text',
));

// Testimonials Link URL
$wp_customize->add_setting( 'testimonials_link_url', array(
'type' => 'option',
'sanitize_callback' => 'esc_url',
));

$wp_customize->add_control( 'testimonials_link_url', array(
'label'      => __( 'Testimonials Link', 'surge' ),
'section'    => 'testimonials',
'settings'   => 'testimonials_link_url',
'type'       => 'text',
));

/*========================================================================
                Promos
========================================================================*/

$wp_customize->add_section( 'promos', array(
'title' => __( 'Promos', 'surge' ),
'priority' => 105,
//'panel' => 'page_elements',
) );

// Hide Promos
$wp_customize->add_setting( 'hide_promos', array(
'type' => 'option',
'default' => 'show-it',
'sanitize_callback' => 'surge_sanitize_choices',
) );

$wp_customize->add_control( 'hide_promos', array(
'label'      => __( 'Promotions', 'surge' ),
'section'    => 'promos',
'settings'   => 'hide_promos',
'type'       => 'radio',
     'choices'    => array(
     'show-it' => __('Show', 'surge'),
     'hide-it' => __('Hide', 'surge'),
    ),
) );

// Promo 1 Title
$wp_customize->add_setting( 'promo_1_title', array(
'type' => 'option',
'default' => 'Promo 1 Title',
'sanitize_callback' => 'surge_sanitize_text_field',
) );

$wp_customize->add_control( 'promo_1_title', array(
'label'      => __( '===== Promo 1 Title =====', 'surge' ),
'section'    => 'promos',
'settings'   => 'promo_1_title',
'type'       => 'text',
) );

// Promo 1 Subtitle
$wp_customize->add_setting( 'promo_1_subtitle', array(
'type' => 'option',
'default' => 'Subtitle One',
'sanitize_callback' => 'surge_sanitize_text_field',
) );

$wp_customize->add_control( 'promo_1_subtitle', array(
'label'      => __( 'Subtitle', 'surge' ),
'section'    => 'promos',
'settings'   => 'promo_1_subtitle',
'type'       => 'text',
) );

// Promo 1 URL
$wp_customize->add_setting('promo_1_url', array(
    'type'    => 'option',
    'default' => '#',
    'sanitize_callback' => 'absint',
));

$wp_customize->add_control(
    new WP_Customize_Pick_A_Post_Control(
    $wp_customize,
    'promo_1_url', array(
    'label'      => __('Target Page', 'surge'),
    'section'    => 'promos',
    'type'    => 'dropdown-pages',
    'settings'   => 'promo_1_url',
)));

// Promo 1 Fineprint
$wp_customize->add_setting( 'promo_1_fine_print', array(
'type' => 'option',
'default' => 'Promos fine print and expiration will go here.',
'sanitize_callback' => 'surge_sanitize_text_field',
) );

$wp_customize->add_control( 'promo_1_fine_print', array(
'label'      => __( 'Fineprints & Expiration', 'surge' ),
'section'    => 'promos',
'settings'   => 'promo_1_fine_print',
'type'       => 'textarea',
) );

// Promo 2 Title
$wp_customize->add_setting( 'promo_2_title', array(
'type' => 'option',
'default' => 'Promo 2 Title',
'sanitize_callback' => 'surge_sanitize_text_field',
) );

$wp_customize->add_control( 'promo_2_title', array(
'label'      => __( '===== Promo 2 Title =====', 'surge' ),
'section'    => 'promos',
'settings'   => 'promo_2_title',
'type'       => 'text',
) );

// Promo 2 Subtitle
$wp_customize->add_setting( 'promo_2_subtitle', array(
'type' => 'option',
'default' => 'Subtitle Two',
'sanitize_callback' => 'surge_sanitize_text_field',
) );

$wp_customize->add_control( 'promo_2_subtitle', array(
'label'      => __( 'Subtitle', 'surge' ),
'section'    => 'promos',
'settings'   => 'promo_2_subtitle',
'type'       => 'text',
) );

// Promo 2 URL
$wp_customize->add_setting('promo_2_url', array(
    'type'    => 'option',
    'default' => '#',
    'sanitize_callback' => 'absint',
));

$wp_customize->add_control(
    new WP_Customize_Pick_A_Post_Control(
    $wp_customize,
    'promo_2_url', array(
    'label'      => __('Target Page', 'surge'),
    'section'    => 'promos',
    'type'    => 'dropdown-pages',
    'settings'   => 'promo_2_url',
)));

// Promo 2 Fineprint
$wp_customize->add_setting( 'promo_2_fine_print', array(
'type' => 'option',
'default' => 'Promos fine print and expiration will go here.',
'sanitize_callback' => 'surge_sanitize_text_field',
) );

$wp_customize->add_control( 'promo_2_fine_print', array(
'label'      => __( 'Fineprints & Expiration', 'surge' ),
'section'    => 'promos',
'settings'   => 'promo_2_fine_print',
'type'       => 'textarea',
) );

/*========================================================================
                Sidebar Options
========================================================================*/

$wp_customize->add_section( 'sidebar_section', array(
'title' => __( 'Sidebar', 'surge' ),
'priority' => 109,
//'panel' => 'page_elements',
) );

// Hide Sidebar
$wp_customize->add_setting( 'hide_sidebar', array(
'type' => 'option',
'default' => 'yes-sidebar',
'sanitize_callback' => 'surge_sanitize_choices',
) );

$wp_customize->add_control( 'hide_sidebar', array(
'label'      => __( 'Sidebar', 'surge' ),
'section'    => 'sidebar_section',
'settings'   => 'hide_sidebar',
'type'       => 'radio',
     'choices'    => array(
     'yes-sidebar' => __('Show', 'surge'),
     'sidebar' => __('Hide', 'surge'),
    ),
) );

/*========================================================================
                Map Options
========================================================================*/

$wp_customize->add_section( 'map_section', array(
'title' => __( 'Map', 'surge' ),
'priority' => 108,
//'panel' => 'page_elements',
) );

// Hide Map
$wp_customize->add_setting( 'hide_map', array(
'type' => 'option',
'default' => 'show-it',
'sanitize_callback' => 'surge_sanitize_choices',
) );

$wp_customize->add_control( 'hide_map', array(
'label'      => __( 'Map', 'surge' ),
'section'    => 'map_section',
'settings'   => 'hide_map',
'type'       => 'radio',
     'choices'    => array(
     'show-it' => __('Show', 'surge'),
     'hide-it' => __('Hide', 'surge'),
    ),
) );

/*========================================================================
                Footer Logos
========================================================================*/

$wp_customize->add_section( 'add_logos', array(
'title' => __( 'Additional Logos', 'surge' ),
'priority' => 110,
//'panel' => 'page_elements',
) );

// Hide Footer Logos
$wp_customize->add_setting( 'hide_add_logos', array(
'type' => 'option',
'default' => 'show-it',
'sanitize_callback' => 'surge_sanitize_choices',
) );

$wp_customize->add_control( 'hide_add_logos', array(
'label'      => __( 'Additional Logos', 'surge' ),
'section'    => 'add_logos',
'settings'   => 'hide_add_logos',
'type'       => 'radio',
     'choices'    => array(
     'show-it' => __('Show', 'surge'),
     'hide-it' => __('Hide', 'surge'),
    ),
) );

// Additional Logo 1
$wp_customize->add_setting('add_logo_1', array(
    'default' => get_template_directory_uri() . '/framework/assets/images/defaults/logos/logo-1.png',
    'type' => 'option',
    'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'add_logo_1', array(
    'label'    => __('Upload Logo 1', 'surge'),
    'section'  => 'add_logos',
    'settings' => 'add_logo_1',
)));

// Footer Link URL #1
$wp_customize->add_setting( 'add_logos_url_1', array(
    'type' => 'option',
    'default' => '#',
    'sanitize_callback' => 'esc_url',
) );

$wp_customize->add_control( 'add_logos_url_1', array(
    'label'      => __( 'Logo 1 Link', 'surge' ),
    'section'    => 'add_logos',
    'settings'   => 'add_logos_url_1',
    'type'       => 'text',
) );

// Additional Logo 2
$wp_customize->add_setting('add_logo_2', array(
    'default' => get_template_directory_uri() . '/framework/assets/images/defaults/logos/logo-2.png',
    'type' => 'option',
    'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'add_logo_2', array(
    'label'    => __('Upload Logo 2', 'surge'),
    'section'  => 'add_logos',
    'settings' => 'add_logo_2',
)));

// Footer Logo Link URL #2
$wp_customize->add_setting( 'add_logos_url_2', array(
    'type' => 'option',
    'default' => '#',
    'sanitize_callback' => 'esc_url',
) );

$wp_customize->add_control( 'add_logos_url_2', array(
    'label'      => __( 'Logo 2 Link', 'surge' ),
    'section'    => 'add_logos',
    'settings'   => 'add_logos_url_2',
    'type'       => 'text',
) );

// Additional Logo 3
$wp_customize->add_setting('add_logo_3', array(
    'default' => get_template_directory_uri() . '/framework/assets/images/defaults/logos/logo-3.png',
    'type' => 'option',
    'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'add_logo_3', array(
    'label'    => __('Upload Logo 3', 'surge'),
    'section'  => 'add_logos',
    'settings' => 'add_logo_3',
)));

// Footer Logo Link URL #3
$wp_customize->add_setting( 'add_logos_url_3', array(
    'type' => 'option',
    'default' => '#',
    'sanitize_callback' => 'esc_url',
) );

$wp_customize->add_control( 'add_logos_url_3', array(
    'label'      => __( 'Logo 3 Link', 'surge' ),
    'section'    => 'add_logos',
    'settings'   => 'add_logos_url_3',
    'type'       => 'text',
) );

// Additional Logo 4 
$wp_customize->add_setting('add_logo_4', array(
    'default' => get_template_directory_uri() . '/framework/assets/images/defaults/logos/logo-4.png',
    'type' => 'option',
    'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'add_logo_4', array(
    'label'    => __('Upload Logo 4', 'surge'),
    'section'  => 'add_logos',
    'settings' => 'add_logo_4',
)));

// Footer Logo Link URL #4
$wp_customize->add_setting( 'add_logos_url_4', array(
    'type' => 'option',
    'default' => '#',
    'sanitize_callback' => 'esc_url',
) );

$wp_customize->add_control( 'add_logos_url_4', array(
    'label'      => __( 'Logo 4 Link', 'surge' ),
    'section'    => 'add_logos',
    'settings'   => 'add_logos_url_4',
    'type'       => 'text',
) );

/*========================================================================
                Footer Links
========================================================================*/

$wp_customize->add_section( 'links', array(
'title' => __( 'Footer Links', 'surge' ),
'priority' => 111,
//'panel' => 'page_elements',
) );

// Hide Footer Links
$wp_customize->add_setting( 'hide_links', array(
'type' => 'option',
'default' => 'show-it',
'sanitize_callback' => 'surge_sanitize_choices',
) );

$wp_customize->add_control( 'hide_links', array(
'label'      => __( 'Footer Links', 'surge' ),
'section'    => 'links',
'settings'   => 'hide_links',
'type'       => 'radio',
     'choices'    => array(
     'show-it' => __('Show', 'surge'),
     'hide-it' => __('Hide', 'surge'),
    ),
) );

// Link-1-Text
$wp_customize->add_setting( 'link_1', array(
'type' => 'option',
'default' => 'Footer Link 1',
'sanitize_callback' => 'surge_sanitize_text_field',
) );

$wp_customize->add_control( 'link_1', array(
'label'      => __( '========== Link 1 ==========', 'surge' ),
'section'    => 'links',
'settings'   => 'link_1',
'type'       => 'text',
) );

// link-1-URL
$wp_customize->add_setting('link_1_url', array(
    'type'    => 'option',
    'default' => '#',
    'sanitize_callback' => 'absint',
));

$wp_customize->add_control(
    new WP_Customize_Pick_A_Post_Control(
    $wp_customize,
    'link_1_url', array(
    'label'      => __('Target Page 1', 'surge'),
    'section'    => 'links',
    'type'    => 'dropdown-pages',
    'settings'   => 'link_1_url',
)));

// Link-2-Text
$wp_customize->add_setting( 'link_2', array(
'type' => 'option',
'default' => 'Footer Link 2',
'sanitize_callback' => 'surge_sanitize_text_field',
) );

$wp_customize->add_control( 'link_2', array(
'label'      => __( '========== Link 2 ==========', 'surge' ),
'section'    => 'links',
'settings'   => 'link_2',
'type'       => 'text',
) );

// link-2-URL
$wp_customize->add_setting('link_2_url', array(
    'type'           => 'option',
    'default' => '#',
    'sanitize_callback' => 'absint',
));

$wp_customize->add_control(
    new WP_Customize_Pick_A_Post_Control(
    $wp_customize,
    'link_2_url', array(
    'label'      => __('Target Page 2', 'surge'),
    'section'    => 'links',
    'type'    => 'dropdown-pages',
    'settings'   => 'link_2_url',
)));

// Link-3-Text
$wp_customize->add_setting( 'link_3', array(
'type' => 'option',
'default' => 'Footer Link 3',
'sanitize_callback' => 'surge_sanitize_text_field',
) );

$wp_customize->add_control( 'link_3', array(
'label'      => __( '========== Link 3 ==========', 'surge' ),
'section'    => 'links',
'settings'   => 'link_3',
'type'       => 'text',
) );

// link-3-URL
$wp_customize->add_setting('link_3_url', array(
    'type'           => 'option',
    'default' => '#',
    'sanitize_callback' => 'absint',
));

$wp_customize->add_control(
    new WP_Customize_Pick_A_Post_Control(
    $wp_customize,
    'link_3_url', array(
    'label'      => __('Target Page 3', 'surge'),
    'section'    => 'links',
    'type'    => 'dropdown-pages',
    'settings'   => 'link_3_url',
)));

// Link-4-Text
$wp_customize->add_setting( 'link_4', array(
'type' => 'option',
'default' => 'Footer Link 4',
'sanitize_callback' => 'surge_sanitize_text_field',
) );

$wp_customize->add_control( 'link_4', array(
'label'      => __( '========== Link 4 ==========', 'surge' ),
'section'    => 'links',
'settings'   => 'link_4',
'type'       => 'text',
) );

// link-4-URL
$wp_customize->add_setting('link_4_url', array(
    'type'           => 'option',
    'default' => '#',
    'sanitize_callback' => 'absint',
));

$wp_customize->add_control(
    new WP_Customize_Pick_A_Post_Control(
    $wp_customize,
    'link_4_url', array(
    'label'      => __('Target Page 4', 'surge'),
    'section'    => 'links',
    'type'    => 'dropdown-pages',
    'settings'   => 'link_4_url',
)));

// Link-5-Text
$wp_customize->add_setting( 'link_5', array(
'type' => 'option',
'default' => 'Footer Link 5',
'sanitize_callback' => 'surge_sanitize_text_field',
) );

$wp_customize->add_control( 'link_5', array(
'label'      => __( '========== Link 5 ==========', 'surge' ),
'section'    => 'links',
'settings'   => 'link_5',
'type'       => 'text',
) );

// link-5-URL
$wp_customize->add_setting('link_5_url', array(
    'type'           => 'option',
    'default' => '#',
    'sanitize_callback' => 'absint',
));

$wp_customize->add_control(
    new WP_Customize_Pick_A_Post_Control(
    $wp_customize,
    'link_5_url', array(
    'label'      => __('Target Page 5', 'surge'),
    'section'    => 'links',
    'type'    => 'dropdown-pages',
    'settings'   => 'link_5_url',
)));

/*========================================================================
                Form Options
========================================================================*/

// Hide Form
$wp_customize->add_setting( 'hide_form', array(
'type' => 'option',
'default' => 'show-it',
'sanitize_callback' => 'surge_sanitize_choices',
) );

$wp_customize->add_control( 'hide_form', array(
'label'      => __( 'Contact Form', 'surge' ),
'section'    => 'form_section',
'settings'   => 'hide_form',
'type'       => 'radio',
     'choices'    => array(
     'show-it' => __('Show', 'surge'),
     'hide-it' => __('Hide', 'surge'),
    ),
) );

/*========================================================================
                Image Set
========================================================================*/

$wp_customize->add_section( 'image_set', array(
'title' => __( 'Image Set', 'surge' ),
'priority' => 100,
'panel' => '360_panel',
));

$wp_customize->add_setting( 'image_set_folder', array(
'type' => 'option',
'default' => 'generic',
'sanitize_callback' => 'surge_sanitize_choices',
) );

$wp_customize->add_control( 'image_set_folder', array(
'label'      => __( 'Folder', 'surge' ),
'section'    => 'image_set',
'settings'   => 'image_set_folder',
'type'       => 'select',
     'choices'    => array(
     'chiropractic' => __('Chiropractic', 'surge'),
     'optometry' => __('Optometry', 'surge'),
     'dental' => __('Dentistry', 'surge'),
     'dental-labs' => __('Dental Labs', 'surge'),
     'cosmetic' => __('Cosmetic', 'surge'),
     'generic' => __('Generic', 'surge'),
     'medical' => __('Medical', 'surge'),
    ),
));

$wp_customize->add_setting( 'client_folder', array(
'type' => 'theme_mod', // or 'theme_mod'
'default' => 'no-client-folder',
'transport' => 'refresh', // or postMessage
'sanitize_callback' => 'surge_sanitize_choices',
) );

$wp_customize->add_control( 'client_folder', array(
'label'      => __( 'Client Custom Images. Blog ID: ' . get_current_blog_id(), 'surge' ),
'section'    => 'image_set',
'settings'   => 'client_folder',
'type'       => 'radio',
     'choices'    => array(
        'yes-client-folder' => __('Active', 'surge'),
        'no-client-folder' => __('Innactive', 'surge'),
    ),
));

/*========================================================================
                Form
========================================================================*/

$wp_customize->add_section( 'form', array(
'title' => __( 'Form', 'surge' ),
'priority' => 310,
'panel' => '360_panel',
) );

// Form Embed
$wp_customize->add_setting( 'form', array(
'type' => 'option',
'default' => '<script type="text/javascript" src="https://form.jotform.com/jsform/53087180760961"></script>',
'sanitize_callback' => 'surge_sanitize_strip_slashes',
) );

$wp_customize->add_control( 'form', array(
'label'      => __( 'Form Script', 'surge' ),
'section'    => 'form',
'settings'   => 'form',
'type'       => 'text',
) );

/*========================================================================
                Form Options
========================================================================*/

$wp_customize->add_section( 'form_section', array(
'title' => __( 'Form', 'surge' ),
'priority' => 112,
//'panel' => 'page_elements',
) );

// Form Title
$wp_customize->add_setting( 'form_title', array(
'type' => 'option',
'default' => 'Quick Contact',
'sanitize_callback' => 'surge_sanitize_text_field',
) );

$wp_customize->add_control( 'form_title', array(
'label'      => __( 'Form Heading', 'surge' ),
'section'    => 'form_section',
'settings'   => 'form_title',
'type'       => 'text',
) );

/*========================================================================
                Theme Colors
========================================================================*/

// Section
$wp_customize->add_section( 'theme_colors', array(
'title' => __( 'Colors', 'surge' ),
'priority' => 94,
//'panel' => 'advanced',
));

// Primary Color (bootstrap primary)
$wp_customize->add_setting( 'main_color', array(
'type' => 'theme_mod',
'default' => '#333333',
'sanitize_callback' => 'surge_sanitize_hexcolor'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_color', array(
'label' => 'Main Color',
'section' => 'theme_colors',
'settings' => 'main_color',
)));

// Secondary Color (bootstrap success)
$wp_customize->add_setting( 'secondary_color', array(
'type' => 'theme_mod',
'default' => '#444444',
'sanitize_callback' => 'surge_sanitize_hexcolor'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_color', array(
'label' => 'Secondary Color',
'section' => 'theme_colors',
'settings' => 'secondary_color',
)));

// Accent Color (bootstrap danger)
$wp_customize->add_setting( 'accent_color', array(
'type' => 'theme_mod',
'default' => '#999999',
'sanitize_callback' => 'surge_sanitize_hexcolor'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'accent_color', array(
'label' => 'Accent Color',
'section' => 'theme_colors',
'settings' => 'accent_color',
)));

// Additional Color (bootstrap info)
$wp_customize->add_setting( 'additional_color', array(
'type' => 'theme_mod',
'default' => '#cccccc',
'sanitize_callback' => 'surge_sanitize_hexcolor'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'additional_color', array(
'label' => 'Additional Color',
'section' => 'theme_colors',
'settings' => 'additional_color',
)));

} //Closign Fuction

} //Closing IF fuction Exist/Pluggable