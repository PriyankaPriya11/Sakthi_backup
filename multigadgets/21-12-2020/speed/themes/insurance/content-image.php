<?php 
global $insurance_option;
?>


<div class="col-md-12 tp-blog-post"><!-- blog post start-->
  <h1><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>
  <p class="meta"> <span class="meta-date"><i class="fa fa-calendar"></i><?php the_time('M d, Y '); ?></span>
  <span class="meta-comments"> <i class="fa fa-comments"></i><a href="<?php comments_link(); ?>"><?php comments_number( __('(0) comment', 'insurance'), __('(1) comment', 'insurance'), __('(%) comments', 'insurance') ); ?></a></span> 
  <?php if(has_tag()) { ?>
  <span class="meta-tags"><i class="fa fa-tags"></i><?php the_tags('', ', ' ); ?></span> 
  <?php } ?></p>
  
            <div class="img-responsive">
             
                <?php if( function_exists( 'rwmb_meta' ) ) { ?>
                <?php $images = rwmb_meta( '_cmb_image', "type=image" ); ?>
                <?php if($images){ ?>         
                <?php                                                        
                foreach ( $images as $image ) {                              
                ?>
                <?php $img = $image['full_url']; ?>
                <a href="<?php echo get_permalink(); ?>"><img src="<?php echo esc_url($img); ?>" alt="" class="img-responsive"></a>
                <?php } ?>           
                <?php } ?>  
                <?php } ?>
           
            </div>
  
  <p><?php echo insurance_excerpt($insurance_option['blog_excerpt']); ?></p>
  <a href="<?php echo get_permalink(); ?>" class="btn tp-btn tp-btn-grey"><?php _e('Read more', 'insurance') ?></a>
</div>