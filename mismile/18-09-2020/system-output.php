<?php
/**
 * System Output
 *
 * @package WordPress
 * @subpackage Surge
 * @since Surge 1.b876897
 *
 * System output is now divided into Template Tags and Template Parts. Template Tags add new functions to the content side of the framework like surge_the_archive_title() to spit out our own archive title as suppose to the regular the_archive_title(). We also call Template Parts dynamically so if someone wants to override template parts, they can do so by overriding them with their own templates.
 * 
 */
?>

<!-- Content -->
<div class="system-output">
	<?php if ( have_posts() ) { ?>

		<?php if ( is_archive() ) { //Only show this title for acrhive pages. ?>
			<div class="archive-header clearfix">
				<?php
					surge_the_archive_title();//Created in Surge Template Tags
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</div>
		<?php } ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php if ( is_single() || is_page() ) {

				// Getting the Content for Pages & Singles
				get_template_part('framework/template-parts/content', 'page');

			} elseif ( is_search() ) {
				
			get_template_part(
					'framework/template-parts/content');

			} else {

				// Getting the Content for everything else.
				get_template_part(
					'framework/template-parts/content',
				 	get_post_type() != 'post' ? get_post_type() : get_post_format() );

			} ?>

		<?php endwhile; ?>

		<!-- Getting the post pagination for Posts. Shows In Post Roll/Archive only. -->
		<?php the_posts_pagination( array(
		    'mid_size' => 4,
		    'prev_text' => __( 'Previous', 'surge' ),
		    'next_text' => __( 'Next', 'surge' ),
		    'screen_reader_text' => __('Navigation', 'surge'),
			));
		?>

		<!-- Getting the Comments Template for Blogs Singles only. -->
		<?php if ( has_category( 'blog' ) ) {
				comments_template();
		} ?>

	<?php } else { // if there is no posts ?>

		<?php get_template_part( 'framework/template-parts/content', 'none' ); ?>

	<?php } ?>

	
</div>