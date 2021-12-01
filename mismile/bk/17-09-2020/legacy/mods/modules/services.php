<!-- Services -->
<div id="services" class="<?php echo get_option( 'hide_services','show-it' ); ?>">
	<div class="container">
        <div class="row text-center">
            <div class="col-sm-6 col-md-3">
				<?php get_template_part ('framework/outputs/service-1'); ?>
            </div>
            <div class="col-sm-6 col-md-3">
				<?php get_template_part ('framework/outputs/service-2'); ?>
            </div>
            <div class="col-sm-6 col-md-3">
				<?php get_template_part ('framework/outputs/service-3'); ?>
            </div>
            <div class="col-sm-6 col-md-3">
				<?php get_template_part ('framework/outputs/service-4'); ?>
            </div>
        </div>
	</div>
</div>

<!-- Services images and links
<a href="<?php echo esc_url( home_url() ) . '/' .  get_post(get_option( 'service_1_url','#' ))->post_name; ?>">
	<img src="<?php get_template_part ('framework/outputs/img-link') ?>/services/service-1.jpg" alt="service-image-1">
</a>
-->