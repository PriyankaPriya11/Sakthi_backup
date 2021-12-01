<div id="blog-sidebar">
	<?php do_action( 'before_sidebar' ); ?>
	<?php if ( ! dynamic_sidebar( 'blog-sidebar' ) ) { ?>
		<?php the_widget( 'WP_Widget_Archives' ); ?>
		<?php the_widget( 'WP_Widget_Categories' ); ?>
		<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
		<?php the_widget( 'WP_Widget_Calendar' ); ?>
	<?php } // end sidebar widget area ?>
</div><!-- #secondary -->
