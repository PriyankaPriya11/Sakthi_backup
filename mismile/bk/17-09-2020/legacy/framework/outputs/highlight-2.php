<!-- Highlight Two -->
<div class="highlight-output highlight-2">

	<?php if ( get_option( 'hfeatured_img_status_2' ) == 'active') { ?>
	
		<a class="img-responsive" href="<?php echo get_option( 'highlight_2_url', '#' ); ?>" target="_blank"><img src="<?php echo get_option( 'hfeature_img_2' ); ?>"></a>
	
	<?php } ?>
	
	<span class="highlight-title"><?php echo get_option( 'highlight_2_title','Highlight Two' ); ?></span>
	<span class="highlight-subtitle"><?php echo get_option( 'highlight_2_subtitle','Highlight Subtitle Two' ); ?></span>
	<a href="<?php echo esc_url( get_permalink(get_option( 'highlight_2_url','#' )) ); ?>"><?php _e('Learn More', 'surge') ?></a>
</div>