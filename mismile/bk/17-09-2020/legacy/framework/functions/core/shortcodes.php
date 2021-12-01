<?php

/*========================================================================
                Linebreak Shortcode
========================================================================*/

if ( ! function_exists( 'opt_break' ) ) {
	
	function opt_break() {

		return '<br>';
	
	}

	add_shortcode( 'optBR', 'opt_break' );
}

/*========================================================================
                City Shortcode
========================================================================*/

if ( ! function_exists( 'opt_sitename' ) ) {

	function opt_sitename() {

		$optSiteName = get_bloginfo( 'name', 'display' );

		return $optSiteName;

	} // End some_random_code()

	add_shortcode( 'optSiteName', 'opt_sitename' );
}

/*========================================================================
                Address Shortcode
========================================================================*/

if ( ! function_exists( 'opt_address' ) ) {

	function opt_address() {

		$optAddress = get_option( 'address','My Address' ) . '<br>' . get_option( 'city','My City' ) . ', ' . get_option( 'state','My State' ) . ' ' . get_option( 'zip','54321' );

		return $optAddress;

	}// End some_random_code()

	add_shortcode( 'optAddress', 'opt_address' );
}

/*========================================================================
                City Shortcode
========================================================================*/

if ( ! function_exists( 'opt_city' ) ) {

	function opt_city() {

		$optCity = get_option( 'city','My City' );

		return $optCity;

	} // End some_random_code()

	add_shortcode( 'optCity', 'opt_city' );
}

/*========================================================================
                Email Shortcode
========================================================================*/

if ( ! function_exists( 'opt_email' ) ) {

	function opt_email() {

		$optEmail = get_option( 'email','My Email' );

		return $optEmail;

	}// End some_random_code()

	add_shortcode( 'optEmail', 'opt_email' );
}

/*========================================================================
                Phone Shortcode
========================================================================*/

if ( ! function_exists( 'opt_phone' ) ) {
	
	function opt_phone() {

		$optPhone = get_option( 'phone','800.997.9368' );

		return $optPhone;

	}// End some_random_code()

	add_shortcode( 'optPhone', 'opt_phone' );
}

/*========================================================================
                Name Shortcode
========================================================================*/

if ( ! function_exists( 'opt_name' ) ) {

	function opt_name(){

		$optName = get_option( 'blogname','Business Name' );

		return $optName;

	}// End some_random_code()

	add_shortcode( 'optName', 'opt_name' );
}

/*========================================================================
                Map Shortcode
========================================================================*/

if ( ! function_exists( 'opt_map' ) ) {

	function opt_map( $atts) {

		extract( shortcode_atts( array(
	        'width' => '100%',
	        'height' => '400',
	    ), $atts ));

	    $address   = str_replace( ' ', '', get_option( 'address' ) );
		$city      = str_replace( ' ', '', get_option( 'city' ) );
		$state     = str_replace( ' ', '', get_option( 'state' ) );
		$zipcode   = str_replace( ' ', '', get_option( 'zip' ) );

		ob_start(); ?>

		<div class="map-shortcode">
			<iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCP_Cn5FiJfss_EB46VAdFmYNfgEbhReHE=&q=<?php echo $address; ?>+<?php echo $city; ?>+<?php echo $state; ?>+<?php echo $zipcode; ?>" style="border:0; height: <?php echo esc_html( $height ) ?>; width: <?php echo esc_html( $width ) ?>;">
			</iframe>
		</div>

	<?php
		return ob_get_clean();
	}

	add_shortcode( 'optMap', 'opt_map' );
}

/*========================================================================
                Action Shortcode
========================================================================*/

if ( ! function_exists( 'opt_action' ) ) {

	function opt_action() {

		ob_start(); ?>

		<a class="action" href="<?php echo esc_url( home_url() ) . '/' .  get_post(get_option( 'action_url','#' ))->post_name; ?>"><?php echo get_option( 'action_text','Contact Us Today' ); ?></a>

	<?php
		return ob_get_clean();
	}

	add_shortcode( 'optAction', 'opt_action' );
}

/*========================================================================
                Map Link Shortcode
========================================================================*/

if ( ! function_exists( 'opt_maplink' ) ) {

	function opt_maplink() {

		ob_start(); ?>

		<div class="map-link"><a href="<?php get_template_part ('framework/outputs/map-link'); ?>" target="_blank"><?php _e( 'Map', 'surge' ); ?></a></div>

	<?php
		return ob_get_clean();
	}

	add_shortcode( 'optMaplink', 'opt_maplink' );
}

/*========================================================================
                Promo One Shortcode
========================================================================*/

if ( ! function_exists( 'opt_promoone' ) ) {

	function opt_promoone() {

		ob_start(); ?>

		<!-- Promos 1 -->
		<div class="promo-output promo-1">
		    <span class="promo-title"><?php echo get_option( 'promo_1_title','Promo 1 Title' ); ?></span>
		    <span class="promo-subtitle"><?php echo get_option( 'promo_1_subtitle','Subtitle One' ); ?></span>
		    <!-- Promos Fine Print -->
		    <span class="promo-fineprint"><?php echo get_option( 'promo_1_fine_print' , 'Promos fine print and expiration will go here.' ); ?></span>
		    <a href="<?php echo esc_url( get_permalink(get_option( 'promo_1_url','#' )) ); ?>"><?php _e( 'Learn More.', 'surge' ); ?></a>
		</div>

	<?php
		return ob_get_clean();
	}

	add_shortcode( 'optPromoone', 'opt_promoone' );
}

/*========================================================================
                Promo Two Shortcode
========================================================================*/

if ( ! function_exists( 'opt_promotwo' ) ) {
	
	function opt_promotwo() {

		ob_start(); ?>

		<!-- Promos 2 -->
		<div class="promo-output promo-2">
		    <span class="promo-title"><?php echo get_option( 'promo_2_title','Promo 2 Title' ); ?></span>
		    <span class="promo-subtitle"><?php echo get_option( 'promo_2_subtitle','Subtitle Two' ); ?></span>
		    <!-- Promos Fine Print -->
		    <span class="promo-fineprint"><?php echo get_option( 'promo_2_fine_print' , 'Promos fine print and expiration will go here.' ); ?></span>
		    <a href="<?php echo esc_url( get_permalink(get_option( 'promo_2_url','#' )) ); ?>"><?php _e( 'Learn More.', 'surge' ); ?></a>
		</div>

	<?php
		return ob_get_clean();
	}

	add_shortcode( 'optPromotwo', 'opt_promotwo' );
}

/*========================================================================
                Address Editor Button
========================================================================*/

/*
add_action('init', 'add_button');
function add_button() {
   if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )
   {
     add_filter('mce_external_plugins', 'add_plugin');
     add_filter('mce_buttons', 'register_button');
   }
}

function register_button($buttons) {
   array_push($buttons, "optaddress");
   return $buttons;
}

function add_plugin($plugin_array) {
   $plugin_array['optaddress'] = get_bloginfo('template_url').'/framework/assets/js/global.js';
   return $plugin_array;
}
*/