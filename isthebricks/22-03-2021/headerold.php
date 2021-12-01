<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shelder
 */
$preloader_on_off = shelder_get_options('preloader_on_off');
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<?php if ( is_page('3885') ) { ?>
    <!-- Event snippet for Submit lead form conversion page --> <script> gtag('event', 'conversion', {'send_to': 'AW-408743852/ecK8CMjZyvkBEKzf88IB'}); </script>
<?php } ?>
	<?php wp_head(); ?>
	
</head>
<!-- page wrapper -->

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="boxed_wrapper">
		<?php
		if ($preloader_on_off == '1') :
			do_action('shelder_preloader');
		endif;

		get_template_part('components/header/header');

		if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
			if(!is_woocommerce()){
				if ( is_blog()) {
					if (is_home()) {
						get_template_part('components/header/breadcrumb/breadcrumb-blog-index');
					} elseif (is_archive()) {
						get_template_part('components/header/breadcrumb/breadcrumb-archive');
					} elseif (is_single()) {
						get_template_part('components/header/breadcrumb/breadcrumb-single');
					}
					
				}else {
					if ( !is_home() && !is_front_page() && !is_search() && !is_404()) {
						get_template_part('components/header/breadcrumb/breadcrumb-page');
					}
				}
			}
		}else{
			
			if (is_blog()) {
				
				if (is_home()) {
					get_template_part('components/header/breadcrumb/breadcrumb-blog-index');
				} elseif (is_archive()) {
					get_template_part('components/header/breadcrumb/breadcrumb-archive');
				} elseif (is_single()) {
					get_template_part('components/header/breadcrumb/breadcrumb-single');
				}
				
			}else {
				if ( !is_home() && !is_front_page() && !is_search() && !is_404()) {
					get_template_part('components/header/breadcrumb/breadcrumb-page');
				}
			}
		}