<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
global $insurance_option; 

get_header(); ?>
<div class="main-container" id="main-container"><!--Main container start-->
  	<div class="tp-error" id="tp-error"><!-- agent error section -->
		<div class="container">
			<div class="row">
                <div class="tp-error-block"><!-- tp error block -->
                    <div class="col-md-7">
                    	<div class="error-info"><!-- error info -->
                        	<h1 class="hero-text"><?php echo esc_attr($insurance_option['404_title_top']); ?></h1>
                            <h1><?php echo esc_attr($insurance_option['404_title']); ?></h1>
                            <p><?php echo esc_attr($insurance_option['404_content']); ?></p>
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn tp-btn tp-btn-orange"><?php echo esc_attr( $insurance_option['back_404'] ); ?></a>
                        </div><!-- /.error info -->
                    </div>
                    <div class="col-md-5">
                    	<div class="error-icon"><!-- error icon -->
                        	<img class="img-responsive" src="<?php echo esc_url($insurance_option['404_image']['url']); ?>" alt="">
                        </div><!-- /.error icon -->
                    </div>
                </div><!-- /.tp error block -->
            </div>
        </div>
  	</div>
</div>
<?php get_footer();
