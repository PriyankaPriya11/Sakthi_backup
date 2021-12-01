<?php get_header(); ?>
<div class="tp-page-header"><!-- full page header -->
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="page-header"> <!-- page header  -->
            <h1>
              <?php _e('CLAIMS','insurance'); ?>
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
<div class="main-container" id="main-container">
  <div class="container">
    <?php 
    $i=0;
   while (have_posts()) : the_post(); $i++;
   
   $icon = get_post_meta(get_the_ID(),'_cmb_icon', true);
   $claim_ds = get_post_meta(get_the_ID(),'_cmb_claim_ds', true);
   $btntext = get_post_meta(get_the_ID(),'_cmb_btntext', true);
   $btnlink = get_post_meta(get_the_ID(),'_cmb_btnlink', true);
   ?>
  <?php if($i%2 ==1){ ?>
  <div class="tp-claim-center" id="tp-claim-center">
    <div class="row claim-product"><!--claim-product-->
        <div class="col-md-offset-1 col-md-6 claim-info">
          <h2><?php the_title(); ?></h2>
          <p><?php echo htmlspecialchars_decode($claim_ds); ?></p>
          <a href="<?php echo get_permalink(); ?>" class="btn tp-btn tp-btn-orange"> <?php echo htmlspecialchars_decode($btntext); ?></a>  
        </div>
        <div class="col-md-offset-1 col-md-3 claim-pic"> <img src="<?php echo esc_url(wp_get_attachment_url(get_post_thumbnail_id())); ?>" alt="" class="img-responsive img-circle"> <?php if($icon) { ?><span class="claim-icon"><i class="fa fa-<?php echo esc_attr($icon); ?>"></i></span><?php } ?> </div>
    </div> 
  </div>
     
        <?php }else{ ?>
        <div class="tp-claim-center" id="tp-claim-center">
        <div class="row claim-product"><!--claim-product-->
        <div class="col-md-offset-1 col-md-3 claim-pic"> <img src="<?php echo esc_url(wp_get_attachment_url(get_post_thumbnail_id())); ?>" alt="" class="img-responsive img-circle"> <?php if($icon) { ?><span class="claim-icon"><i class="fa fa-<?php echo esc_attr($icon); ?>"></i></span><?php } ?> </div>
        <div class="col-md-offset-1 col-md-6 claim-info">
          <h2><?php the_title(); ?></h2>
          <p><?php echo htmlspecialchars_decode($claim_ds); ?></p>
          <a href="<?php echo get_permalink(); ?>" class="btn tp-btn tp-btn-orange"> <?php echo htmlspecialchars_decode($btntext); ?></a>  
        </div>
        </div>
       </div>
<?php } ?>
<?php endwhile;?>
      <div class="col-md-12 tp-pagination" style="text-align: center"><!-- pagination -->
        <ul class="pagination">
          <?php echo insurance_pagination(); ?>
        </ul>
      </div><!-- pagination -->
  </div>
</div>
<?php get_footer(); ?>