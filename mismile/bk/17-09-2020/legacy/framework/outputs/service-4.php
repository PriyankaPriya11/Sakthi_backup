<!-- Service Four -->
<div class="service-output service-4">
    <span class="service-title"><?php echo get_option( 'service_4_title','Service Four' ); ?></span>
    <span class="service-subtitle"><?php echo get_option( 'service_4_subtitle','Service Subtitle Four' ); ?></span>
    <a href="<?php echo esc_url( get_permalink(get_option( 'service_4_url','#' )) ); ?>"><?php _e('Learn More', 'surge') ?></a>
</div>