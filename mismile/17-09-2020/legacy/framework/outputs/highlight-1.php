<!-- Highlight One -->
<div class="highlight-output highlight-1">

	<?php if ( get_option( 'hfeatured_img_status_1' ) == 'active') { ?>

		<a class="img-responsive" href="<?php echo get_option( 'highlight_1_url', '#' ); ?>" target="_blank"><img src="<?php echo get_option( 'hfeature_img_1' ); ?>"></a>

	<?php } ?>

	<span class="highlight-title"><?php echo get_option( 'highlight_1_title','Highlight One' ); ?></span>
	<span class="highlight-subtitle"><?php echo get_option( 'highlight_1_subtitle','Highlight Subtitle One' ); ?></span>
	<a href="<?php echo esc_url( get_permalink(get_option( 'highlight_1_url','#' )) ); ?>"><?php _e('Learn More', 'surge') ?></a>
</div>