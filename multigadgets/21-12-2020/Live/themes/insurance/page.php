<?php get_header(); ?>

<div class="tp-page-header"><!-- full page header -->
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="page-header"> <!-- page header  -->
          <h1><?php the_title(); ?></h1>
          
          <?php $page_sub = get_post_meta(get_the_ID(),'_cmb_page_sub', true); ?>
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
            <img src="<?php echo esc_url($img); ?>" alt="">
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

<div class="main-container" id="main-container"><!--Main container start-->
  <div class="tp-blog" id="tp-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-8 tp-blog-left">
          <div class="row">       
            <?php while (have_posts()) : the_post()?>                     
  				    <?php 
                the_content();
                wp_link_pages( array(
                  'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'insurance' ) . '</span>',
                  'after'       => '</div>',
                  'link_before' => '<span>',
                  'link_after'  => '</span>',
                  'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'insurance' ) . ' </span>%',
                  'separator'   => '<span class="screen-reader-text">, </span>',
                ) );
              ?>
					<?php
					   if ( comments_open() || get_comments_number() ) :
						    comments_template();
					   endif; 
					?>
            <?php endwhile; ?>
          </div>
        </div>
            
        <div class="col-md-4 tp-blog-right"><!-- tp blog right -->
            <div class="row">
              <div class="col-md-12">
              <?php get_sidebar();?>
              </div>
            </div>
        </div>

      </div>
    </div>
  </div>
</div>	
<?php get_footer(); ?>