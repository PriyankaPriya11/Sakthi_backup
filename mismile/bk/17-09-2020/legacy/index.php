<?php if ( ! is_child_theme() ) {
	get_header(); ?>

	<?php 

	// Getting Surge Version

	$surge_ver = wp_get_theme(); ?>

	<!-- Surge Only -->
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1><?php _e('Surge version', 'surge') ?> <?php echo $surge_ver->get( 'Version' ); ?></h1>
			</div>
		</div>
	</div>

	<?php get_footer();
}