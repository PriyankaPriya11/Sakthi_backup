<?php 
/* 
Template Name: Politica
*/
get_header('pol');?>

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class=" d-flex align-items-center justify-content-center slider_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="ss-content">
                                <h3><?php  echo get_field('pol-title');?></h3>
                                
                                <?php 
                                if ( have_posts() ) {
                                    while ( have_posts() ) {
                                        the_post();
                                        the_content(); 
                                        //
                                        // Post Content here
                                        //
                                    } // end while
                                } // end if
                                ?>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
      
    </div>
    <!-- slider_area_end -->
   
<?php get_footer('pol');?>