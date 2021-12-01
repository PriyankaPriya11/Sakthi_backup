<?php if ( !is_child_theme() ) { ?>

	<aside id="sidebar" class="col-md-4 remove-<?php echo get_option( 'hide_sidebar' ); ?>">

		<?php if ( has_category( 'blog' ) ) { ?>

			<?php get_template_part ('framework/outputs/blog-sidebar'); ?>
		
		<?php } else { ?>
		
		<div class="promos <?php echo get_option( 'hide_promos','show-it' ); ?>">
			<?php get_template_part ('framework/outputs/promo-1'); ?>
			<?php get_template_part ('framework/outputs/promo-2'); ?>
		</div>

		<div class="<?php echo get_option( 'hide_form' ); ?>">
			<?php get_template_part ('framework/outputs/form'); ?>
		</div>

		<?php get_template_part ('framework/outputs/sidebar-1'); ?>
		
	</aside>

<?php } ?>

<?php } //End of if child. ?>