<!-- Service Two -->
<div class="service-output service-2">
	<span class="service-title"><?php echo get_option( 'service_2_title','Service Two' ); ?></span>
	<span class="service-subtitle"><?php echo get_option( 'service_2_subtitle','Service Subtitle Two' ); ?></span>
	<a href="<?php echo esc_url( get_permalink(get_option( 'service_2_url','#' )) ); ?>"><?php _e('Learn More', 'surge') ?></a>
</div>