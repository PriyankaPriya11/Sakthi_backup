<!-- Testimonials -->
<div id="testimonials" class="<?php echo get_option( 'hide_testimonials','show-it' ); ?>">
	<div class="container">
        <div class="row text-center">
            <div class="col-sm-6 col-md-4">
				<?php get_template_part ('framework/outputs/testimonial-1'); ?>
            </div>
            <div class="col-sm-6 col-md-4">
				<?php get_template_part ('framework/outputs/testimonial-2'); ?>
            </div>
            <div class="col-sm-6 col-md-4">
				<?php get_template_part ('framework/outputs/testimonial-3'); ?>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-md-12">
                <?php get_template_part ('framework/outputs/testimonial-link'); ?>
            </div>
        </div>
	</div>
</div>

<!-- Testimonials Links
<a href="<?php echo esc_url( get_option( 'testimonials_link_url','#' )); ?>">
	<img src="<?php get_template_part ('framework/outputs/img-link') ?>/services/testimonial-1.jpg" alt="testimonial-image-1">
</a>
-->