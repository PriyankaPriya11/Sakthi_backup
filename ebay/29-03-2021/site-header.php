<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= true === get_theme_mod( 'display_title_and_tagline', true ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
?>

<header id="header" class="header top-line">
	<div class="headerstrip bg-white">
					<div class="container">
						<div class="row">
	<?php get_template_part( 'template-parts/header/site-branding' ); ?>
	</div></div></div>
	<?php get_template_part( 'template-parts/header/site-nav' ); ?>

</header><!-- #masthead -->
