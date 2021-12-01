<?php
/**
 * Template Name: Divi Playground Wrapped
 *
 * @package WordPress
 * @subpackage Surge
 * @since Surge 1.0.2.ba118f1
 */

get_header(); ?>

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

get_footer();