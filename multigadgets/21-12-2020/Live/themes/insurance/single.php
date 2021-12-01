
<?php
 global $insurance_option;
 $link_audio = get_post_meta(get_the_ID(),'_cmb_link_audio', true);
 $link_video = get_post_meta(get_the_ID(),'_cmb_link_video', true);
get_header();
?>
 
<div class="tp-page-header"><!-- full page header -->
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="page-header"> <!-- page header  -->
          <?php if($insurance_option['the_blog_single']) { ?>
          <h1><?php echo esc_attr($insurance_option['the_blog_single']); ?></h1>
          <?php } ?>
          <?php if($insurance_option['the_blog-2']) { ?>
          <p class="lead"><?php echo esc_attr($insurance_option['the_blog-2']); ?>
          <?php } ?>
          </p>
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
<?php while (have_posts()): the_post(); ?> 
<div class="main-container" id="main-container"><!--Main container start-->
  <div class="tp-blog-details" id="tp-blog-details"><!-- blog details -->
    <div class="container">
      <div class="row">
        <div class="col-md-8 tp-blog-left">
          <div class="row">
            <div class="col-md-12 tp-blog-post"><!-- blog post start-->
              
              <h1><?php the_title(); ?></h1>
              <p class="meta"> <span class="meta-date"> <i class="fa fa-calendar"> </i> <?php the_time('M d, Y '); ?> </span> 
              <span class="meta-comments"> <i class="fa fa-comments"></i><a href="<?php echo get_permalink(); ?>#respond"><?php comments_number( __('(0) comment', 'insurance'), __('(1) comment', 'insurance'), __('(%) comments', 'insurance') ); ?></a></span> 
              <?php if(has_tag()) { ?>
              <span class="meta-tags"> <i class="fa fa-tags"></i><?php the_tags('', ', ' ); ?></span> 
              <?php } ?></p>
              <?php $format = get_post_format(); ?>
              <?php if($format=='audio'){ ?>
              <iframe width="100%" height="200px" src="<?php echo esc_url(get_post_meta(get_the_ID(),'_cmb_link_audio', true));?>"></iframe>              
              <?php } elseif($format=='video'){ ?>
              <iframe width="100%" height="400px" src="<?php echo esc_url($link_video); ?>"allowfullscreen></iframe>
              <?php } elseif($format=='quote'){ ?>
              <div class="quote">
              <?php 
                $text = get_post_meta(get_the_ID(),'_cmb_quote', true);
                $autor = get_post_meta(get_the_ID(),'_cmb_quote_author', true);
              ?>
                <div class="content">

                  <h1><a href="<?php the_permalink(); ?>"><?php echo ($text);?></a></h1>

                <div class="author">

                  <p>- <?php echo ($autor);?></p>

                </div>
                </div>
              </div>

              <?php } elseif($format=='gallery'){ ?>

              <?php if( function_exists( 'rwmb_meta' ) ) { ?>

                <?php $images = rwmb_meta( '_cmb_images', "type=image" ); ?>
                <?php if($images){ ?>
                <div id="slider">
                <?php                                                        
                foreach ( $images as $image ) {                              
                ?>
                <?php $img = $image['full_url']; ?>
                <div class="item"><img src="<?php echo esc_url($img); ?>" alt="" class="img-responsive"></div>
                <?php } ?>                   
                </div>
                <?php } ?>

                <?php } ?>   

                <?php } elseif($format=='image') { ?>
                <?php if( function_exists( 'rwmb_meta' ) ) { ?>
                  <?php $images = rwmb_meta( '_cmb_image', "type=image" ); ?>
                  <?php if($images){ ?>         
                    <?php                                                        
                    foreach ( $images as $image ) {                              
                    ?>
                    <?php $img = $image['full_url']; ?>
                    <img src="<?php echo esc_url($img); ?>" alt=""class="img-responsive">
                    <?php } ?>           
                  <?php } } ?>

                <?php }else{ ?>
                  <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail(); ?>
                  <?php endif; ?>
                <?php } ?>
              <div class="text-post">
                <?php 
                   the_content();
                   wp_link_pages( array(
                    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'insurance' ) . '</span>',
                    'after'       => '</div>',
                    'link_before' => '<span>',
                    'link_after'  => '</span>',
                    'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'insurance' ) . ' </span>%',
                    'separator'   => '<span class="screen-reader-text">, </span>',
                  ) );
                ?>
              </div>
                

            </div>
            <!-- /.blog post start--> 
            
          </div>
          <div class="row">
            <div class="col-md-12 author-block">
              <div class="author-bg">
                <div class="row">
                  <div class="col-md-3 auhtor-thumb"><?php echo get_avatar($comment,$size='145',$default='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=70' ); ?></div>
                  <div class="col-md-9 author-dec">
                    <h3 class="name-author"><?php the_author_posts_link(); ?> </h3>
                    <p><?php the_author_meta('description'); ?></p>
                    <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" class="btn tp-btn tp-btn-orange"><?php _e('All posts by Mark Mathon','insurance') ?></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row pre-next-post">
            
            <div class="col-md-6 blog-prv-link"> 
             <?php previous_post_link( '%link', _x( '<span class="meta-nav"><i class="fa fa-long-arrow-left"> Previous Post</i></span> <h3> %title </h3>', 'Previous post link', 'insurance' ) ); ?>
            </div>

            <div class="col-md-6 blog-nxt-link"> 
              <?php next_post_link( '%link', _x( '<span class="meta-nav"> Next Post <i class="fa fa-long-arrow-right"></i></span><h3> %title</h3>', 'Next post link', 'twentythirteen' ) ); ?>              
            </div>

          </div>

          <div class="row">
            <div class="col-md-12 blog-comments">              
              <h2 class='count'><?php comments_number( 'Comment (0)', 'Comment (1)', 'Comments (%)' ); ?></h2>          
              <?php comments_template(); ?>           
            </div>
          </div>
         
        </div>
        <div class="col-md-4 tp-blog-right"><!-- tp blog right -->
          <div class="row">
            <div class="col-md-12">
              <?php get_sidebar();?>
            </div>
          </div>
        </div>
        <!-- /.tp blog right --> 
      </div>
    </div>
  </div><!-- /.blog details -->
</div>
<!-- /.Main container start-->

<?php endwhile; wp_reset_query(); ?>
<?php get_footer(); ?>
 