<?php
/**
 * Template Name: Divi Playground
 *
 * @package WordPress
 * @subpackage Surge
 * @since Surge 1.0.2.68c5b2
 */

get_template_part ('framework/config/head'); ?>

<?php if ( have_posts() ) { ?>

	<?php while ( have_posts() ) : the_post(); ?>

	<div id="post-<?php the_ID(); ?>" <?php post_class('divi-page-wrap'); ?>>
		<?php the_content(); ?>
	</div>

	<?php endwhile; ?>

<?php } else { // if there are no posts ?>

	<?php get_template_part( 'framework/template-parts/content', 'none' ); ?>

<?php } ?>


<?php

get_template_part ('framework/config/foot');