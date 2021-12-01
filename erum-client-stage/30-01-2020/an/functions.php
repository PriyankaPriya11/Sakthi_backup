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
            $output .= get_the_post_thumbnail( $post->ID, $size, array('class' => $classname,'data-aos' => 'fade-up', 'data-aos-duration' => '1700') );
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
function wpb_adding_scripts() {
wp_register_script('okzp-js', get_stylesheet_directory_uri().'/assets/ele/okzp.js', array('jquery'),'1.1', false);
wp_enqueue_script('okzp-js');
wp_register_script('owl.carousel.js', get_stylesheet_directory_uri().'/assets/css/owl-carousel/owl.carousel.js', array('okzp-js'),'', false);
wp_enqueue_script('owl.carousel.js');
wp_register_script('custom', get_stylesheet_directory_uri().'/assets/js/custom.js', array('owl.carousel.js'),'', false);
wp_enqueue_script('custom');
wp_register_script('custom-shop', get_stylesheet_directory_uri().'/assets/js/shop.js', array('custom'),'', false);
wp_enqueue_script('custom-shop');
wp_register_script('bootstrap-js', "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js", array('custom-shop'),'', false);
wp_enqueue_script('bootstrap-js');
wp_register_script('aos-js', "https://unpkg.com/aos@2.3.1/dist/aos.js", array('bootstrap-js'),'', false);
wp_enqueue_script('aos-js');
}
  
add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' ); 

function wpb_adding_styles() {
wp_register_style('hk8sx', get_stylesheet_directory_uri().'/assets/ele/hk8sx.css');
wp_enqueue_style('hk8sx');
wp_register_style('home', get_stylesheet_directory_uri().'/assets/css/home.css');
wp_enqueue_style('home');
wp_register_style('shop', get_stylesheet_directory_uri().'/assets/css/shop.css');
wp_enqueue_style('shop');
wp_register_style('origen', get_stylesheet_directory_uri().'/assets/css/origen.css');
wp_enqueue_style('origen');
wp_register_style('product-details', get_stylesheet_directory_uri().'/assets/css/product-details.css');
wp_enqueue_style('product-details');
wp_register_style('style', get_stylesheet_uri());
wp_enqueue_style('style');
wp_register_style('style-contact', get_stylesheet_directory_uri().'/assets/contact-css/style.css');
wp_enqueue_style('style-contact');
wp_register_style('font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
wp_enqueue_style('font-awesome');
wp_register_style('owl.carousel', get_stylesheet_directory_uri().'/assets/css/owl-carousel/owl.carousel.min.css');
wp_enqueue_style('owl.carousel');
wp_register_style('owl.theme', get_stylesheet_directory_uri().'/assets/css/owl-carousel/owl.theme.default.css');
wp_enqueue_style('owl.theme');
wp_register_style('bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css");
wp_enqueue_style('bootstrap');
wp_register_style('map', get_stylesheet_directory_uri().'/assets/map/css/map.css');
wp_enqueue_style('map');
wp_register_style('aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
wp_enqueue_style('aos-css');
wp_register_style('origen', get_stylesheet_directory_uri().'/assets/ele/origen.css');
wp_enqueue_style('origen');
wp_register_style('styles-home-block', get_stylesheet_directory_uri().'/assets/files/styles.css');
wp_enqueue_style('styles-home-block');
}
add_action( 'wp_enqueue_scripts', 'wpb_adding_styles' ); 


add_filter('woof_get_more_less_button_label', 'woof_get_more_less_button');
 
    function woof_get_more_less_button($args)
    {
        $args['type'] = 'text';
        $args['closed'] = 'Open me';
        $args['opened'] = 'Close me';
 
        return $args;
    }
    
$current = $_SERVER['REQUEST_URI'];
if($current=='/shop/' || $current=='/shop') {
   add_action( 'wp_print_styles','my_deregister_styles', 9999 );
   //add_action( 'wp_enqueue_scripts', 'my_deregister_styles', 9999 );
   add_action( 'wp_head', 'my_deregister_styles', 9999 );
   function my_deregister_styles()    { 
        wp_deregister_style('woocommerce-layout');
        wp_deregister_style('woocommerce-smallscreen');
        wp_deregister_style('woocommerce-general');
    }
}