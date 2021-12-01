<?php
/**
 * Template Name: Divi Sidebar Template
 *
 * @package WordPress
 * @subpackage Surge
 * @since Surge 1.0.2.68c5b2
 */

get_header(); ?>
<div class="container sidebar-template-div">
	<div class="row">
      <div class="col-sm-9 col-md-9 side-border">
		<?php if ( have_posts() ) { ?>

			<?php while ( have_posts() ) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class('divi-page-wrap'); ?>>
				<?php the_content(); ?>
			</div>

			<?php endwhile; ?>

		<?php } else { // if there are no posts ?>

			<?php get_template_part( 'framework/template-parts/content', 'none' ); ?>

		<?php } ?>
		</div>
		<div class="col-sm-3 col-md-3">
			<div id="sidebar" class="sidebar">
				<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
						<?php dynamic_sidebar( 'sidebar-1' ); ?>				
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<?php

get_footer();