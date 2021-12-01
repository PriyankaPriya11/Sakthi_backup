<?php
/**
 * Template Name: Agent
 */
 global $insurance_option;
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
    <!-- CONTENT BLOG -->
<div class="main-container" id="main-container"><!--Main container start-->
  <div class="tp-agent-result" id="tp-agent-result">
    <div class="container">
      <div class="row">
        
            <?php if(have_posts()) : ?>  
            <?php 
            $args = array(    
              'post_type' => 'agent',
              'posts_per_page' => -1,
            );
            $wp_query = new WP_Query($args);
            while ($wp_query -> have_posts()): $wp_query -> the_post(); 
            $address = get_post_meta(get_the_ID(),'_cmb_address', true);
            $phone   = get_post_meta(get_the_ID(),'_cmb_phone', true);
            $btnlink = get_post_meta(get_the_ID(),'_cmb_btnlink', true);
            $btntext = get_post_meta(get_the_ID(),'_cmb_btntext', true);
            ?>                    
            <div class="col-md-3 agent-thumb">
              <div class="agent-pic">
                <a href="<?php echo get_permalink(); ?>"><img src="<?php echo esc_url(wp_get_attachment_url(get_post_thumbnail_id())); ?>" alt="" class="img-responsive"></a>
              </div>
                  <div class="agent-info">
                    <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2> 
                    <p><?php echo esc_attr($address); ?></p>
                    <p class="call"><i class="fa fa-phone-square"></i><?php echo esc_attr($phone); ?></p>
                    <a href="<?php echo get_permalink(); ?>" class="btn tp-btn tp-btn-orange"> <?php echo esc_attr($btntext); ?></a> 
                  </div>
                      
              </div>

            <?php endwhile;?> 
        
            <?php else: ?>
            <h1><?php _e('Nothing Found Here!','insurance'); ?></h1>
            <?php endif; ?>   
        
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>