<?php get_header(); ?>
<div class="tp-page-header"><!-- full page header -->
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="page-header"> <!-- page header  -->
            <h1>
              <?php _e('INSURANCE','insurance'); ?>
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
    <div class="row">
      <?php 
        $i=0;
        while (have_posts()) : the_post(); $i++;
        
        $ins_deta = get_post_meta(get_the_ID(),'_cmb_ins_deta', true);
        $btnlink1 = get_post_meta(get_the_ID(),'_cmb_btnlink1', true);
        $btntext1 = get_post_meta(get_the_ID(),'_cmb_btntext1', true);
        $btnlink2 = get_post_meta(get_the_ID(),'_cmb_btnlink2', true);
        $btntext2 = get_post_meta(get_the_ID(),'_cmb_btntext2', true);
        
      ?>
    <div class="tp-product-page font-increase <?php if($i%3==1){echo 'first';} ?>">
      <div class="col-md-4 product-thumb">
        <div class="product-img">

          <a href="<?php echo get_permalink(); ?>"><img src="<?php echo esc_url(wp_get_attachment_url(get_post_thumbnail_id())); ?>" alt="" ></a>

        </div>

        <div class="grey-box">
          <h1><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>

          <p><?php echo htmlspecialchars_decode($ins_deta); ?></p>

          <?php if($btntext1 != '') { ?><a href="<?php echo esc_url($btnlink1); ?>" class="btn tp-btn tp-btn-orange"><?php echo htmlspecialchars_decode($btntext1); ?></a> 
          <?php }if($btntext2 != '') { ?><a href="<?php echo get_permalink(); ?>" class="btn tp-btn tp-btn-grey"><?php echo htmlspecialchars_decode($btntext2); ?></a><?php } ?>

        </div>
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
<?php get_footer(); ?>