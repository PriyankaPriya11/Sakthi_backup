<!-- Promos 1 -->
<div class="promo-output promo-1">
    <span class="promo-title"><?php echo get_option( 'promo_1_title','Promo 1 Title' ); ?></span>
    <span class="promo-subtitle"><?php echo get_option( 'promo_1_subtitle','Subtitle One' ); ?></span>
    <!-- Promos Fine Print -->
    <span class="promo-fineprint"><?php echo get_option( 'promo_1_fine_print' , 'Promos fine print and expiration will go here.' ); ?></span>
    <a href="<?php echo esc_url( get_permalink(get_option( 'promo_1_url','#' )) ); ?>"><?php _e('Learn More', 'surge') ?></a>
</div>