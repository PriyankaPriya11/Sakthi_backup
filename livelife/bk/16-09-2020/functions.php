<?php
add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array('site-title', 'site-description'),
));
add_theme_support( 'footer-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array('site-title', 'site-description'),
));
// function styles()
// {
//  wp_register_style("bootstrap.min.css",get_stylesheet_directory_uri(). '"http://localhost/livelife/wp-content/themes/livelife/_css/bootstrap.min.css');
// wp_enqueue_style("bootstrap.min.css");  
// wp_register_style("style.css",get_stylesheet_directory_uri(). 'http://localhost/livelife/wp-content/themes/livelife/style.css');
// wp_enqueue_style("style.css");  
// wp_register_style("owl.carousel.min.css",get_stylesheet_directory_uri(). 'http://localhost/livelife/wp-content/themes/livelife/_css/owl.carousel.min.css');
// wp_enqueue_style("owl.carousel.min.css"); 
// wp_register_style("jquery-swipe-nav.css",get_stylesheet_directory_uri(). 'http://localhost/livelife/wp-content/themes/livelife/_css/jquery-swipe-nav.css');
// wp_enqueue_style("jquery-swipe-nav.css");  

// }
// add_action('wp_enqueue_scripts', 'enque_styles');
// function adding_jsfile(){
//     wp_enqueue_script('jquery.min', get_stylesheet_directory_uri().'_css/jquery.min.js',array('jquery'),'',true);
//     wp_enqueue_script('owl.carousel', get_stylesheet_directory_uri().'_css/owl.carousel.js',array('jquery.min'),'',true);
//     wp_enqueue_script('jquery-swipe-nav-plugin', get_stylesheet_directory_uri().'js/jquery-swipe-nav-plugin.js',array('owl.carousel'),'',true);
// }
function register_my_menus()
 {
    register_nav_menus(
    array(
 'header-menu' => __('header-menu'),
 'header-menu1' => __('header-menu1'),
 'footer-menu' => __('footer-menu'),
 'footer-menu1' => __('footer-menu1'),
 'article-menu1' => __('article-menu1'),
));
  }
  add_action( 'init', 'register_my_menus' );
  function wpb_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Footer 1', 'wpb' ),
        'id' => 'footer-1',
        'description' => __( 'The bottom bar appears on each page', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
    add_action( 'widgets_init', 'wpb_widgets_init' );

    add_theme_support('html5', array('search__input'));