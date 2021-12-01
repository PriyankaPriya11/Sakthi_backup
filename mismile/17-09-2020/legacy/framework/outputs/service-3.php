<!-- Service Three -->
<div class="service-output service-3">
	<span class="service-title"><?php echo get_option( 'service_3_title','Service Three' ); ?></span>
	<span class="service-subtitle"><?php echo get_option( 'service_3_subtitle','Service Subtitle Three' ); ?></span>
	<a href="<?php echo esc_url( get_permalink(get_option( 'service_3_url','#' )) ); ?>"><?php _e('Learn More', 'surge') ?></a>
</div>