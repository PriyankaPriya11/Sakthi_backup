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
            $output .= get_the_post_thumbnail( $post->ID, $size, array('class' => $classname,'data-aos' => 'fade-up', 'data-aos-duration' => '2000') );
            // ,'data-aos' => 'fade-up', 'data-aos-duration' => '1700'
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
wp_register_script('owl.carousel', get_stylesheet_directory_uri().'/assets/css/owl-carousel/owl.carousel.js', array('jquery'),'', false);
wp_enqueue_script('owl.carousel');
wp_register_script('custom', get_stylesheet_directory_uri().'/assets/js/custom.js', array('owl.carousel'),'', false);
wp_enqueue_script('custom');
wp_register_script('custom-shop', get_stylesheet_directory_uri().'/assets/js/shop.js', array('custom'),'', false);
wp_enqueue_script('custom-shop');
wp_register_script('bootstrap-js', "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js", array('custom-shop'),'', false);
wp_enqueue_script('bootstrap-js');
wp_register_script('aos-js', "/wp-content/themes/erum/assets/js/aos.js", array('bootstrap-js'),'', false);
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
wp_register_style('aos-css', '/wp-content/themes/erum/assets/css/aos.css');
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
$protect ='/shop';
if (strpos($current, $protect) !== false) {
    add_action( 'wp_print_styles','my_deregister_styles', 9999 );
    //add_action( 'wp_enqueue_scripts', 'my_deregister_styles', 9999 );
    add_action( 'wp_head', 'my_deregister_styles', 9999 );
    function my_deregister_styles()    { 
         wp_deregister_style('woocommerce-layout');
         wp_deregister_style('woocommerce-smallscreen');
         wp_deregister_style('woocommerce-general');
     }
}
$current_one = $_SERVER['REQUEST_URI'];
$protect_one ='/product-category';
if (strpos($current_one, $protect_one) !== false) {
    add_action( 'wp_print_styles','my_deregister_styles', 9999 );
    //add_action( 'wp_enqueue_scripts', 'my_deregister_styles', 9999 );
    add_action( 'wp_head', 'my_deregister_styles', 9999 );
    function my_deregister_styles()    { 
         wp_deregister_style('woocommerce-layout');
         wp_deregister_style('woocommerce-smallscreen');
         wp_deregister_style('woocommerce-general');
     }
}
// if($current=='/shop/' || $current=='/shop') {
//    add_action( 'wp_print_styles','my_deregister_styles', 9999 );
//    //add_action( 'wp_enqueue_scripts', 'my_deregister_styles', 9999 );
//    add_action( 'wp_head', 'my_deregister_styles', 9999 );
//    function my_deregister_styles()    { 
//         wp_deregister_style('woocommerce-layout');
//         wp_deregister_style('woocommerce-smallscreen');
//         wp_deregister_style('woocommerce-general');
//     }
// }

add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {
    unset( $tabs['description'] );          // Remove the description tab
    unset( $tabs['reviews'] );          // Remove the reviews tab 
    return $tabs;
}


## ---- 1. Backend ---- ##

// Adding a custom Meta container to admin products pages
add_action( 'add_meta_boxes', 'create_custom_meta_box' );
if ( ! function_exists( 'create_custom_meta_box' ) )
{
    function create_custom_meta_box()
    {
        add_meta_box(
            'custom_product_meta_box',
            __( 'Additional Product Information <em>(optional)</em>', 'cmb' ),
            'add_custom_content_meta_box',
            'product',
            'normal',
            'default'
        );
    }
}

//  Custom metabox content in admin product pages
if ( ! function_exists( 'add_custom_content_meta_box' ) ){
    function add_custom_content_meta_box( $post ){
        $prefix = '_bhww_'; // global $prefix;

        $ingredients = get_post_meta($post->ID, $prefix.'ingredients_wysiwyg', true) ? get_post_meta($post->ID, $prefix.'ingredients_wysiwyg', true) : '';
        $benefits = get_post_meta($post->ID, $prefix.'benefits_wysiwyg', true) ? get_post_meta($post->ID, $prefix.'benefits_wysiwyg', true) : '';
        $args['textarea_rows'] = 6;

        echo '<p>'.__( 'Ingredients', 'cmb' ).'</p>';
        wp_editor( $ingredients, 'ingredients_wysiwyg', $args );

        echo '<p>'.__( 'Benefits', 'cmb' ).'</p>';
        wp_editor( $benefits, 'benefits_wysiwyg', $args );

        echo '<input type="hidden" name="custom_product_field_nonce" value="' . wp_create_nonce() . '">';
    }
}



//Save the data of the Meta field
add_action( 'save_post', 'save_custom_content_meta_box', 10, 1 );
if ( ! function_exists( 'save_custom_content_meta_box' ) )
{

    function save_custom_content_meta_box( $post_id ) {
        $prefix = '_bhww_'; // global $prefix;

        // We need to verify this with the proper authorization (security stuff).

        // Check if our nonce is set.
        if ( ! isset( $_POST[ 'custom_product_field_nonce' ] ) ) {
            return $post_id;
        }
        $nonce = $_REQUEST[ 'custom_product_field_nonce' ];

        //Verify that the nonce is valid.
        if ( ! wp_verify_nonce( $nonce ) ) {
            return $post_id;
        }

        // If this is an autosave, our form has not been submitted, so we don't want to do anything.
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
            return $post_id;
        }

        // Check the user's permissions.
        if ( 'product' == $_POST[ 'post_type' ] ){
            if ( ! current_user_can( 'edit_product', $post_id ) )
                return $post_id;
        } else {
            if ( ! current_user_can( 'edit_post', $post_id ) )
                return $post_id;
        }

        // Sanitize user input and update the meta field in the database.
        update_post_meta( $post_id, $prefix.'ingredients_wysiwyg', wp_kses_post($_POST[ 'ingredients_wysiwyg' ]) );
        update_post_meta( $post_id, $prefix.'benefits_wysiwyg', wp_kses_post($_POST[ 'benefits_wysiwyg' ]) );
    }
}

## ---- 2. Front-end ---- ##

// Create custom tabs in product single pages
add_filter( 'woocommerce_product_tabs', 'custom_product_tabs' );
function custom_product_tabs( $tabs ) {
    global $post;

    $product_ingredients = get_post_meta( $post->ID, '_bhww_ingredients_wysiwyg', true );
    $product_benefits    = get_post_meta( $post->ID, '_bhww_benefits_wysiwyg', true );

    if ( ! empty( $product_ingredients ) )
        $tabs['ingredients_tab'] = array(
            'title'    => __( 'Ingredients', 'woocommerce' ),
            'priority' => 45,
            'callback' => 'ingredients_product_tab_content'
        );

    if ( ! empty( $product_benefits ) )
        $tabs['benefits_tab'] = array(
            'title'    => __( 'Benefits', 'woocommerce' ),
            'priority' => 50,
            'callback' => 'benefits_product_tab_content'
        );

    return $tabs;
}

// Add content to custom tab in product single pages (1)
function ingredients_product_tab_content() {
    global $post;

    $product_ingredients = get_post_meta( $post->ID, '_bhww_ingredients_wysiwyg', true );

    if ( ! empty( $product_ingredients ) ) {
        echo '<h2>' . __( 'Product Ingredients', 'woocommerce' ) . '</h2>';

        // Updated to apply the_content filter to WYSIWYG content
        echo apply_filters( 'the_content', $product_ingredients );
    }
}

// Add content to custom tab in product single pages (2)
function benefits_product_tab_content() {
    global $post;

    $product_benefits = get_post_meta( $post->ID, '_bhww_benefits_wysiwyg', true );

    if ( ! empty( $product_benefits ) ) {
        echo '<h2>' . __( 'Product Benefits', 'woocommerce' ) . '</h2>';

        // Updated to apply the_content filter to WYSIWYG content
        echo apply_filters( 'the_content', $product_benefits );
    }
}

add_filter('woof_text_autocomplete_items', function($count){       
    return 5;
});

add_action('woocommerce_after_single_product', 'woof_custom_product_description' );
 
function woof_custom_product_description() {
 global $product;
//  echo $id = $product->get_id();
    // echo 'TEST';
    
// check if the repeater field has rows of data
if( have_rows('custom_layout',$id) ):

    // loop through the rows of data
 $ss_product='<div class="woocommerce-tabs wc-tabs-wrapper">';
   while ( have_rows('custom_layout',$id) ) : the_row();
        $layout = get_sub_field('layout_format');
        if($layout == 'layout2'){ ?>
            <div id="tab-benefits_tab">
                <div class="ss-product-txt">
                    <div class="ss-col-one ss-lt">
                        <div class="pro-txt">          
                            <p><?php echo get_sub_field('custom_product_name'); ?></p>            
                                                </div>
                        <div class="ss-txt-p">
                            <?php echo get_sub_field('custom_product_description'); ?>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="3000">
                            <?php $image = get_sub_field('custom_image_1');?><img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>">
                        </div>
                    </div>
                    <div class="ss-col-one ss-rt">
                        <div data-aos="fade-up" data-aos-duration="3000">
                        <?php $image = get_sub_field('custom_image_2');?><img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>">
                        </div>
                        <div class="ss-txt-p">
                            <?php echo get_sub_field('custom_product_description_2'); ?>
                        </div>
                    </div>
                </div>
            </div>         
        <?php }else{ ?>
            <div id="tab-ingredients_tab">
                <div class="ss-tab-txt">
                    <div class="ss-product-txt">
                        <h3><?php echo get_sub_field('custom_product_name'); ?></h3>
                        <?php echo get_sub_field('custom_product_description'); ?>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="3000">
                        <a href="https://erum.desarrollo3dids.net/wp-content/uploads/2020/02/Cs1.jpg">
                            <?php $image = get_sub_field('custom_image_1');?><img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>">
                        </a>
                    </div>
                </div>
            </div>
        <?php }
        echo $ss_product;
       // display a sub field value
       the_sub_field('');

   endwhile;
   $ss_product .='</div>';
else :

   // no rows found

endif;
 
}

add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );
function jk_dequeue_styles( $enqueue_styles ) {
    unset( $enqueue_styles['woocommerce-general'] );    // Remove the gloss
    unset( $enqueue_styles['woocommerce-layout'] );     // Remove the layout
    unset( $enqueue_styles['woocommerce-smallscreen'] );    // Remove the smallscreen optimisation
    return $enqueue_styles;
}

function wp_enqueue_woocommerce_style(){
wp_register_style( 'woocommerce-layout', get_stylesheet_directory_uri() . '/woocommerce/css/woocommerce-layout.css' );
if ( class_exists( 'woocommerce' ) ) {
    wp_enqueue_style( 'woocommerce-layout' );
}

wp_register_style( 'woocommerce-smallscreen', get_stylesheet_directory_uri() . '/woocommerce/css/woocommerce-smallscreen.css' ,array(),'4.0.1','only screen and (max-width: 768px)' );
    if ( class_exists( 'woocommerce' ) ) {
            wp_enqueue_style( 'woocommerce-smallscreen' );
    }

wp_register_style( 'woocommerce-general', get_stylesheet_directory_uri() . '/woocommerce/css/woocommerce.css' );
if ( class_exists( 'woocommerce' ) ) {
    wp_enqueue_style( 'woocommerce-general' );
    }
 }

 add_action( 'wp_enqueue_scripts', 'jk_masonry' );
function jk_masonry() {
  wp_enqueue_script( 'jquery-masonry', array( 'jquery' ) );
}

