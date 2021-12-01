<?php
/**
 * Template Name: Blog
 */
 global $insurance_option;
get_header(); ?>

<div class="tp-page-header"><!-- full page header -->
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="page-header"> <!-- page header  -->
          <?php if($insurance_option['the_blog']) { ?>
          <h1><?php echo esc_attr($insurance_option['the_blog']); ?></h1>
          <?php } ?>
          <?php if($insurance_option['the_blog-2']) { ?>
          <p class="lead"><?php echo esc_attr($insurance_option['the_blog-2']); ?></p>
          <?php } ?>
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
                    
            <?php if(have_posts()) : ?>  
                <?php 
                $args = array(    
                  'paged' => $paged,
                  'post_type' => 'post',
                );
                $wp_query = new WP_Query($args);
                while ($wp_query -> have_posts()): $wp_query -> the_post();                         
                    get_template_part( 'content', get_post_format() ) ; ?> 
                <?php endwhile;?> 
            
                <?php else: ?>
                <h1><?php _e('Nothing Found Here!','insurance'); ?></h1>
                <?php endif; ?>   

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