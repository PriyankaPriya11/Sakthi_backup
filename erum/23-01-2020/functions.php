<?php
function erum_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'erum-style', get_stylesheet_uri(), array(), $theme_version );
	// wp_style_add_data( 'erum-style', 'rtl', 'replace' );

}
add_action( 'wp_enqueue_scripts', 'erum_register_styles' );

add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}

function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


// function disable_woo_commerce_sidebar() {
// 	remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10); 
// }
// add_action('init', 'disable_woo_commerce_sidebar');


add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_after_shop_loop_item_sku_in_cart', 20, 1);
function woocommerce_after_shop_loop_item_sku_in_cart( $template )  {
	global $product;
	$sku = $product->get_sku();
	echo '<span id="parallax-bg-'.$sku.'" class="skuAnimate">'.$sku.'</span>';
}

if ( ! function_exists( 'woocommerce_get_product_thumbnail' ) ) {   
    function woocommerce_get_product_thumbnail( $size = 'shop_catalog' ) {
        global $post, $woocommerce;
        $output = '';

        if ( has_post_thumbnail() ) {    
			$classname = 'imgAnimate'.$post->ID;           
            $output .= get_the_post_thumbnail( $post->ID, $size, array('class' => $classname) );
        } else {
             $output .= wc_placeholder_img( $size );
             // Or alternatively setting yours width and height shop_catalog dimensions.
             // $output .= '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" width="300px" height="300px" />';
		} 
        return $output;
    }
}
if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Main Sidebar',
    'before_widget' => '<div class = "widgetizedArea">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);

function wpdocs_theme_name_scripts() {
	wp_enqueue_style( 'ss-rp', get_template_directory_uri() . '/w-files/css/ss-rp.css');
	wp_enqueue_style( 'ss-responsive', get_template_directory_uri() . '/w-files/css/ss-responsive.css');
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/w-files/css/owl.carousel.min.css');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/w-files/css/font-awesome.min.css');
	wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_script( 'jquery-3.4', get_template_directory_uri() . '/w-files/js/jquery.min.js');
	wp_enqueue_script( 'jquery-migrate-1.4', get_template_directory_uri() . '/w-files/js/jquery-migrate-1.4.1.min.js');
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/w-files/js/bootstrap.min.js');
	// wp_enqueue_script( 'owl.carousel.min', get_template_directory_uri() . '/w-files/js/owl.carousel.min.js' );
	// wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/w-files/js/jquery.slicknav.min.js' );
	// wp_enqueue_script( 'main', get_template_directory_uri() . '/w-files/js/main.js');
	wp_enqueue_script( 'popup', get_template_directory_uri() . '/w-files/js/popup.js' );

}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

add_filter('woof_get_more_less_button_label', 'woof_get_more_less_button');
 
    function woof_get_more_less_button($args)
    {
        $args['type'] = 'text';
        $args['closed'] = 'Open me';
        $args['opened'] = 'Close me';
 
        return $args;
    }