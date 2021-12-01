<!-- Excerpt -->
<div class="excerpt">
    <span class="excerpt-title"><?php echo get_option( 'excerpt_title','Excerpt Title' ); ?></span>
    <span class="excerpt-subtitle"><?php echo get_option( 'excerpt_subtitle','Subtitle' ); ?></span>
    <p><?php echo get_option( 'excerpt_content','Example use: A short description about business, the owner or a service with a link to more details.' ); ?> <a href="<?php echo esc_url( get_permalink(get_option( 'excerpt_url','#' )) ); ?>">
    <?php echo get_option( 'excerpt_link','Learn More' ); ?>
    </a></p>
</div>