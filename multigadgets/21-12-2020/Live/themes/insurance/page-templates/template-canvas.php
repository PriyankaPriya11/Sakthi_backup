<?php
/*
 * Template Name: Canvas
 * Description: A Page Template with a Page Builder design.
 */

get_header(); ?>

<div class="tp-page-header"><!-- full page header -->
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="page-header"> <!-- page header  -->
          
          <h1><?php the_title(); ?></h1>
          
          <?php 
          $page_sub = get_post_meta(get_the_ID(),'_cmb_page_sub', true); 
          ?>
          <p class="lead"><?php echo esc_attr($page_sub); ?></p>
        </div>
        <!-- page header  --> 
      </div>
      <div class="col-md-5 header-pic">
      <div class="img-responsive">
            <?php if( function_exists( 'rwmb_meta' ) ) { ?>
            <?php $images = rwmb_meta( '_cmb_image_page', "type=image" ); ?>
            <?php if($images){ ?>         
            <?php                                                        
            foreach ( $images as $image ) {                              
            ?>
            <?php $img = $image['full_url']; ?>
            <img src="<?php echo esc_url($img); ?>" alt="" class="img-responsive">
            <?php } ?>           
            <?php } ?>  
            <?php } ?>
      </div>
      </div>
      <!-- page header pic --> 
    </div>
  </div>
</div>

<div class="tp-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        
           <?php insurance_breadcrumbs(); ?>
        
      </div>
    </div>
  </div>
</div>

<div class="main-container" id="main-container">

<?php if (have_posts()){ ?>
	
		<?php while (have_posts()) : the_post()?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	
	<?php }else {
		echo 'Page Canvas For Page Builder'; 
	}?>
</div>
<?php get_footer(); ?>