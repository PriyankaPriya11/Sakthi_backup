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
      <div class="img-responsive"style="<?php if($insurance_option['blog_thumbnail']) { ?>background-image: url(<?php echo esc_url($insurance_option['blog_thumbnail']['url']); ?>)<?php } ?>"></div>
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
<div class="main-container" id="main-container"><!--Main container start-->
  <div class="tp-agent-result" id="tp-agent-result">
    <div class="container">
      <div class="row">        
            <?php
				global $query_string;
				$termslug = $_GET['state'];	
				$termsstate = $_GET['state'];	
			?>
			<?php if (!empty($termslug) || $_GET['s'] != '') {			  
			  $args = array(    				  	
				  'post_type' => 'agent',
				  'posts_per_page' => -1, 	
				  'state' => $termslug,
				  's' => $_GET['s'],
			  );
			  query_posts( $args );
			  if(have_posts()) : while(have_posts()) : the_post(); ?>  
            <?php 				
				$address = get_post_meta(get_the_ID(),'_cmb_address', true);
				$phone   = get_post_meta(get_the_ID(),'_cmb_phone', true);				
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
		<?php endwhile;?>				
		<?php endif; } ?> 
		
		<?php if (!empty($termsstate) || !empty($_GET['s'])) {			  
			  $args = array(    				  	
				  'post_type' => 'agent',
				  'posts_per_page' => -1, 	
				  'state' => $termsstate,
				  'meta_query' => array(
						array(
							'key' => '_cmb_city',
							'value' => $_GET['s'],
							'compare' => 'LIKE',
						)
					)
			  );
			  query_posts( $args );
			  if(have_posts()) : while(have_posts()) : the_post(); ?>  
            <?php 				
				$address = get_post_meta(get_the_ID(),'_cmb_address', true);
				$phone   = get_post_meta(get_the_ID(),'_cmb_phone', true);				
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
		<?php endwhile;?>				
		<?php endif; } ?> 
		
		<?php if (!empty($_GET['s'])) {			  
				$args = array(    				  	
					'post_type' => 'agent',
					'posts_per_page' => -1, 	
					'meta_query' => array(
						array(
							'key' => '_cmb_zipcode',
							'value' => $_GET['s'],
							'compare' => 'LIKE',
						)
					)
			    );
			  query_posts( $args );
			  if(have_posts()) : while(have_posts()) : the_post(); ?>  
            <?php 				
				$address = get_post_meta(get_the_ID(),'_cmb_address', true);
				$phone   = get_post_meta(get_the_ID(),'_cmb_phone', true);				
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
		<?php endwhile;?>				
		<?php endif; } ?> 			
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>