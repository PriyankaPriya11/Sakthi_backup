<?php

 global $insurance_option;
 
get_header(); ?>

<div class="tp-page-header"><!-- full page header -->
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="page-header"> <!-- page header  -->
            <h1>
              <?php printf( __( 'Search Results For: %s', 'insurance' ), get_search_query() ); ?>
            </h1>
        </div>
        <!-- page header  --> 
      </div>
      <div class="col-md-5 header-pic">
      <img src="<?php echo esc_url($insurance_option['blog_thumbnail']['url']); ?>" alt="" class="img-responsive">
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
  <div class="tp-blog" id="tp-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-8 tp-blog-left">
          <div class="row">
                    
            <?php 
            while (have_posts()) : the_post();
            get_template_part( 'content', get_post_format() ) ;  

            endwhile;
            ?>

            <div class="col-md-12 tp-pagination"><!-- pagination -->
              <ul class="pagination">
                <?php echo insurance_pagination(); ?>
              </ul>
            </div><!-- pagination -->
            
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