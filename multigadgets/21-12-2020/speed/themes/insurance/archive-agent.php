<?php get_header(); ?>
<div class="tp-page-header"><!-- full page header -->
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="page-header"> <!-- page header  -->
            <h1>
              <?php _e('AGENT','insurance'); ?>
            </h1>
       </div>
      </div>
      <div class="col-md-5 header-pic">
        <img src="<?php echo esc_url($insurance_option['blog_thumbnail']['url']); ?>" alt="" class="img-responsive">
      </div>
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
  <div class="tp-agent-result" id="tp-agent-result">
    <div class="container">
      <div class="row">
                    
           <?php 
                while (have_posts()) : the_post();
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
            <?php endwhile; ?> 
            <div class="col-md-12 tp-pagination" style="text-align: center"><!-- pagination -->
                <ul class="pagination">
                  <?php echo insurance_pagination(); ?>
                </ul>
            </div><!-- pagination -->
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>
