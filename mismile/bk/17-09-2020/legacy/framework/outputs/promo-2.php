<!-- Promos 2 -->
<div class="promo-output promo-2">
    <span class="promo-title"><?php echo get_option( 'promo_2_title','Promo 2 Title' ); ?></span>
    <span class="promo-subtitle"><?php echo get_option( 'promo_2_subtitle','Subtitle Two' ); ?></span>
    <!-- Promos Fine Print -->
    <span class="promo-fineprint"><?php echo get_option( 'promo_2_fine_print' , 'Promos fine print and expiration will go here.' ); ?></span>
    <a href="<?php echo esc_url( get_permalink(get_option( 'promo_2_url','#' )) ); ?>"><?php _e('Learn More', 'surge') ?></a>
</div>