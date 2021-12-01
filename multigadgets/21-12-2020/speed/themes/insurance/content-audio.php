<?php  
global $insurance_option;
 $link_audio = get_post_meta(get_the_ID(),'_cmb_link_audio', true);
 $rtext = get_post_meta(get_the_ID(),'_cmb_right_text', true);
?>	

</li>
<div class="col-md-12 tp-blog-post"><!-- blog post start-->
  <h1><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>
  <p class="meta"> <span class="meta-date"><i class="fa fa-calendar"></i><?php the_time('M d, Y'); ?></span><span class="meta-comments"> <i class="fa fa-comments"></i><a href="<?php comments_link(); ?>"><?php comments_number( __('(0) comment', 'insurance'), __('(1) comment', 'insurance'), __('(%) comments', 'insurance') ); ?></a></span> 
  <?php if(has_tag()) { ?>
  <span class="meta-tags"><i class="fa fa-tags"></i><?php the_tags('', ', ' ); ?></span> 
  <?php } ?> </p>
  <a href="<?php echo get_permalink(); ?>">
  <div class="img-responsive">
  <iframe width="100%" src="<?php echo esc_url(get_post_meta(get_the_ID(),'_cmb_link_audio', true));?>"></iframe>  
  </div>
  </a>
  <p><?php echo insurance_excerpt($insurance_option['blog_excerpt']); ?></p>
  <a href="<?php echo get_permalink(); ?>" class="btn tp-btn tp-btn-grey"><?php _e('Read more', 'insurance') ?></a>
</div>