<?php get_header(); ?>
<div class="tp-page-header"><!-- full page header -->
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="page-header"> <!-- page header  -->
            <h1>
              <?php _e('ARCHIVE CAREERS','insurance'); ?>
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
      while (have_posts()) : the_post();
        $cates = get_the_terms(get_the_ID(),'category_career');
        $cate_name = '';
        $cate_slug = '';
      foreach((array)$cates as $cate){
        if(count($cates)>0){
          $cate_name .= $cate->name.'' ;
          $cate_slug .= $cate->slug .'';     
          } 
      } 
      $location = get_post_meta(get_the_ID(),'_cmb_location', true);
      $btntext = get_post_meta(get_the_ID(),'_cmb_btntext', true);
      $btnlink = get_post_meta(get_the_ID(),'_cmb_btnlink', true);
    ?>
      <div class="col-md-4">
       <div class="career-title"><!-- career title -->
        <div class="grey-box"><!-- greay box -->
         <div class="caption"> <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
          <p class="job-info"><span class="job-category"><strong><?php _e('Job Category: ','insurance') ?></strong><a href="#"><?php echo htmlspecialchars_decode($cate_name); ?></a></span> 
            <span class="job-location"><strong><?php _e('Location: ','insurance') ?></strong><?php echo htmlspecialchars_decode($location); ?></span></p>
          </div> 
            <div class="caption-btn"><?php if($btntext != '') { ?><a href="<?php echo esc_url($btnlink); ?>" class="btn tp-btn tp-btn-orange pull-right"><?php echo htmlspecialchars_decode($btntext); ?></a><?php } ?></div>
        </div><!-- /.greay box -->
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