<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

get_header();
?>

<section id="banner-3" class="bg-scroll hero-section pt-80 pb-80 banner-section division">
				<div class="container white-color">
					<div class="row d-flex align-items-center">


						<!-- BANNER TEXT -->
						<div class="col-lg-5">
							<div class="banner-txt">

								<!-- Title -->
								<h3 class="h3-xl" style="margin-bottom:0">Blogs</h3>

						

							
							</div>
						</div>	<!-- END BANNER TEXT -->



					</div>    <!-- End row -->	
				</div>     <!-- End container -->	
			</section>	<!-- END BANNER-3 -->


<!-- HERO-7
			============================================= -->
			<section id="hero-7">	
				<div id="heroCarousel" class="bg-blue-light carousel slide  white-color" data-ride="carousel">


					<!-- SLIDER CONTENT -->
					<div class="carousel-inner">
	<?php
		$args = array(
        'post_type' => 'post',// your post type,
        'orderby' => 'post_date',
        'order' => 'DESC',
         'showposts' => '3',
        'cat' => '4' // current category ID
);
$the_query = new WP_Query($args);
		
		
			 $ctr=0;
			 ?>

<?php while ($the_query -> have_posts()) : $the_query -> the_post(); 

$ctr++;
if($ctr=='1'){
	$d='active';
}else{
	$d='';
}
					$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
					$ddate='Posted on '.get_the_date(). '';
					
						$long_messagetitle=wp_trim_excerpt();
$messagetitle = substr($long_messagetitle, 0, 150);	
?>
						<!-- SLIDE 1 -->
						<div class="carousel-item <?php echo $d; ?>">
							<div class="mask d-flex align-items-center">
						        <div class="container">
						          	<div class="row d-flex align-items-center">

						          	

								        <!-- SLIDE-1 IMAGE -->
								        <div class="col-md-6">
								        	<div class="hero-img text-center">
								          		<img class="img-fluid" src="<?php echo $featured_img_url; ?>" alt="slide-image">
								          	</div>
								         </div>
	<!-- SLIDE-1 TEXT -->
						           		<div class="col-md-6">
						           			<div class="hero-txt">

						           				<!-- Title -->
									            <h3 class="h2-xs"><?php  the_title(); ?></h3>

									            <!-- Text -->	
									            <p class="p-md white-color"><?php echo $messagetitle; ?>
									            </p>
									            <p><a href="<?php echo esc_url( get_permalink() ) ; ?>">Read More</a></p>
<span><?php echo $ddate; ?> By <?php echo ucfirst(get_author_name()); ?> </span>
								            </div> 
								        </div>
						        	</div>
					       		</div>
					      	</div>
					    </div>	<!-- END SLIDE 1 -->

<?php 	endwhile;  ?>
					  


					</div>	<!-- END SLIDER CONTENT -->


					<!-- SLIDER NAVIGATION -->
					<div class="carousel-nav">

						<a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev"> 
							<span class="carousel-control-prev-icon" aria-hidden="true"></span> 
						</a> 

						<a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next"> 
							<span class="carousel-control-next-icon" aria-hidden="true"></span> 
						</a> 

					</div>


				</div>
			</section>	<!-- END HERO-7 -->
		<section id="banner-2" class="banner-section division">
		<div class="bg-sky-blue">
				<div class="container">
					
				 		<div class="row d-flex align-items-center">


						 	<!-- BANNER TEXT -->
						 		<div class="col-lg-8 col-xl-8" >
						 	<div class="banner-txt">
<?php
// Get the current queried object
$term    = get_queried_object();
$term_id = ( isset( $term->term_id ) ) ? (int) $term->term_id : 0;

$categories = get_categories( array(
    'taxonomy'   => 'category', // Taxonomy to retrieve terms for. We want 'category'. Note that this parameter is default to 'category', so you can omit it
    'orderby'    => 'name',
    'parent'     => 4,
    'hide_empty' => 0, // change to 1 to hide categores not having a single post
) );
?>

<ul>
    <?php
    foreach ( $categories as $category ) 
    {
        $cat_ID        = (int) $category->term_id;
        $category_name = $category->name;

        // When viewing a particular category, give it an [active] class
        $cat_class = ( $cat_ID == $term_id ) ? 'active' : 'not-active';

        // I don't like showing the [uncategoirzed] category
        if ( strtolower( $category_name ) != 'uncategorized' )
        {
            echo  '<li style="display:inline;padding: 0 15px 0 0;"><a href="'.esc_url( get_category_link( $category->term_id ) ).'">';
            printf( '%3$s',
                esc_attr( $cat_class ),
                esc_url( get_category_link( $category->term_id ) ),
                esc_html( $category->name )
            );
            
            echo '</a></li>';
        }
    }
    ?>
								
								
			
						 		</div>
						 	</div>	  <!-- END BANNER TEXT -->


						 	<!-- BANNER IMAGE -->
							<div class="col-lg-4 col-xl-4">
							<!-- Search Field --> 
							
	<div id="search-field" class="hide-button sidebar-div mt-20">
									<form action="<?php echo get_site_url(); ?>" method="get">
									<div class="input-group mb-3">
									    
									  	<input type="text" class="form-control" name="s" required placeholder="Search" aria-label="Search" aria-describedby="search-field">
									 	<div class="input-group-append">
									    	<button class="btn btn-lightgreen1" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
									 	</div>
									 
									</div>
	</form>
								</div>
							</div>


				 		</div>	   <!-- End row -->		
				 	</div>


			 	</div>	   <!-- End container -->
			</section>	<!-- END BANNER-2 -->

			<!-- BLOG PAGE CONTENT
			============================================= -->
			<div id="blog-page" class="wide-50 blog-page-section division">
				<div class="container">
				 	<div class="row">


				 		<!-- BLOG POSTS HOLDER -->
				 		<div class="col-md-8">
				 		   
				 		    
				 			<div class="posts-holder">
	<?php
		$args = array(
        'post_type' => 'post',// your post type,
        'orderby' => 'post_date',
        'order' => 'DESC',
        
        'cat' => '4' // current category ID
);
$the_query = new WP_Query($args);
		
		
			 $ctr=0;
			 ?>


	<?php
	
	
		//	if ( have_posts() ) :
while ($the_query -> have_posts()) : $the_query -> the_post(); 
			
					
					$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
					$ddate='Posted on '.get_the_date(). '';
					
						$long_messagetitle=wp_trim_excerpt();
$messagetitle = substr($long_messagetitle, 0, 150);	
?>
		<div class="blog-post col-md-6">


					 				<!-- BLOG POST IMAGE -->
						 			<div class="blog-post-img">
									<a href="<?php echo esc_url( get_permalink() ) ; ?>">	<img class="img-fluid" src="<?php echo $featured_img_url; ?>" alt="blog-post-image" /></a>	
									</div>

					 				<!-- BLOG POST TITLE -->
									<div class="blog-post-txt">

										<!-- Post Data -->
										<span><?php echo $ddate; ?> By <?php echo ucfirst(get_author_name()); ?> </span>

										<!-- Post Title -->
										<h5 class="h5-lg"><a href="<?php echo esc_url( get_permalink() ) ; ?>"><?php  echo wp_trim_words( get_the_title(), 10 );  ?></a></h5>

									<?php echo $messagetitle; ?>
 <p><a href="<?php echo esc_url( get_permalink() ) ; ?>">Read More</a></p>
 <div class="addthis_inline_share_toolbox"></div>
									</div>

			
								</div>	<!-- END BLOG POST #1 -->			
					<?php
					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that
					 * will be used instead.
					 */
				//	get_template_part( 'template-parts/post/content', get_post_format() );

				endwhile;

				//the_posts_pagination(
				//	array(
				//		'prev_text'          => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
				//		'next_text'          => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
				//		'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
				//	)
				//);

	//		else :

	//			get_template_part( 'template-parts/post/content', 'none' );

	//		endif;
			?>
					 			
						

				 			</div>
				 		</div>	 <!-- END BLOG POSTS HOLDER -->


				 		<!-- SIDEBAR RIGHT
						============================================= -->
						<aside id="sidebar-right" class="col-md-4">
					
	<section id="media_image-2" class="widget widget_media_image pb-50"><img width="100%"  src="<?php echo get_template_directory_uri(); ?>/images/download.jpg" class="image wp-image-13  attachment-medium size-medium" alt="" loading="lazy" style="max-width: 100%; height: auto;" srcset="<?php echo get_template_directory_uri(); ?>/images/download.jpg" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px"></section>
		<section id="recent-posts-2" class="widget widget_recent_entries pb-50">
		<h3>Recent/Popular Blogs</h3>
	<ul>
		    	<?php
		$args = array(
        'post_type' => 'post',// your post type,
        'orderby' => 'post_date',
        'order' => 'DESC',
         'showposts' => '6',
        'cat' => '4' // current category ID
);
$the_query = new WP_Query($args);
		
			 
			 $ctr=0;
			 ?>

<?php while ($the_query -> have_posts()) : $the_query -> the_post(); 

$ctr++;
if($ctr=='1'){
	$d='active';
}else{
	$d='';
}
					$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
					$ddate='Posted on '.get_the_date(). '';
?>
											<li class="pt-10 pb-10" style="border-bottom:1px solid #ddd">
					<a href="<?php echo esc_url( get_permalink() ) ; ?>" aria-current="page"><?php  the_title(); ?></a>
									</li>
									
										<?php endwhile; ?>
					</ul>

		</section>
							<div class="pl-60" style="display:none">


								<!-- Search Field --> 
								<div id="search-field" class="sidebar-div mb-50">
									
									<div class="input-group mb-3">
									  	<input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="search-field">
									 	<div class="input-group-append">
									    	<button class="btn btn-lightgreen1" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
									 	</div>
									</div>

								</div>


								<!-- Most Popular Posts -->
								<div id="popular-posts" class="sidebar-div mb-50">
										
									<!-- Title -->
									<h5 class="h5-sm">Popular Posts</h5>

									<ul class="popular-posts">
									
										<!-- Popular post #1 -->
										<li class="clearfix d-flex align-items-center">

											<!-- Image -->
											<img class="img-fluid" src="images/blog/popular-post-1.jpg" alt="blog-post-preview" />

											<!-- Text -->
											<div class="post-summary">
												<a href="single-post.html" class="rose-hover">Etiam sapien accumsan molestie ante empor ...</a>
												<p>43 Comments</p>
											</div>

										</li>
										
										<!-- Popular post #2 -->
										<li class="clearfix d-flex align-items-center">

											<!-- Image -->
											<img class="img-fluid" src="images/blog/popular-post-2.jpg" alt="blog-post-preview" />

											<!-- Text -->
											<div class="post-summary">
												<a href="single-post.html" class="rose-hover">Blandit tempor sapien ipsum, porta justo ...</a>
												<p>38 Comments</p>
											</div>

										</li>
										
										<!-- Popular post #3 -->
										<li class="clearfix d-flex align-items-center">

											<!-- Image -->
											<img class="img-fluid" src="images/blog/popular-post-3.jpg" alt="blog-post-preview" />

											<!-- Text -->
											<div class="post-summary">
												<a href="single-post.html" class="rose-hover">Cursus risus laoreet turpis auctor varius ...</a>
												<p>29 Comments</p>
											</div>

										</li>
									</ul>

								</div>


								<!-- Popular Tags -->
								<div id="popular-tags" class="sidebar-div mb-50">
										
									<!-- Title -->
									<h5 class="h5-sm">Popular Tags</h5>

									<span class="badge"><a href="#">video</a> 3</span>
									<span class="badge"><a href="#">web</a> 17</span> 
									<span class="badge"><a href="#">music</a> 2</span> 
									<span class="badge"><a href="#">design</a> 54</span> 
									<span class="badge"><a href="#">image</a> 46</span>  								 
									<span class="badge"><a href="#">typography</a> 6</span> 
									<span class="badge"><a href="#">journal</a> 9</span>
									<span class="badge"><a href="#">graphic</a> 32</span>  
									<span class="badge"><a href="#">photo</a> 67</span> 
									<span class="badge"><a href="#">photoshop</a> 26</span>

								</div>


								<!-- Image Widget -->						
								<div id="image-widget" class="sidebar-div mb-50">
											
									<!-- Title -->
									<h5 class="h5-sm">Image Widget</h5>
									
									<img class="img-fluid" src="images/blog/image-widget.jpg" alt="image-widget" />
																			
								</div>

							
							</div>
						</aside>	<!-- END SIDEBAR RIGHT -->

				 		
				 	</div>	<!-- End row -->	
				 </div>	 <!-- End container -->
			</div>	<!-- END BLOG PAGE CONTENT -->




			
			
				<section id="sale-1" class="bg-green pt-50 pb-50 sale-section division">
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row">	
						<div class="col-lg-10 offset-lg-1 section-title">	

							<!-- Title 	-->	
							<h3 class="h3-md">News & Publication</h3>	

						
								
						</div>
					</div>

			 		
			 		<div class="row">

	<?php
		$args = array(
        'post_type' => 'post',// your post type,
        'orderby' => 'post_date',
        'order' => 'DESC',
         'showposts' => '3',
        'cat' => '5' // current category ID
);
$the_query = new WP_Query($args);
			// $the_query = new WP_Query( 'showposts=3' ); 
			 $ctr=0;
			 ?>

<?php while ($the_query -> have_posts()) : $the_query -> the_post(); 

$ctr++;
if($ctr=='1'){
	$d='active';
}else{
	$d='';
}
					$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
					$ddate='Posted on '.get_the_date(). '';
				// echo esc_url( get_permalink() ) ; 
	$long_message=wp_trim_excerpt();
$message = substr($long_message, 0, 99);		
?>


	 					<!-- SALE BOX #1 -->
	 					<div class="col-sm-6 col-lg-4">
	 						<div class="">

	 							<!-- Image -->
								<img class="img-fluid" src="<?php echo $featured_img_url; ?>" alt="device-preview" />

								<h5 class="h5-xl" style="text-decoration: none !important;"><a href="<?php echo esc_url( get_permalink() ) ; ?>"><?php  the_title(); ?></a></h5>	
								<!-- Title -->
								<p>	<?php echo $message; ?>..</p>

	 						</div>
	 					</div>	<!-- END SALE BOX #1 -->
	 					
<?php 	endwhile;  ?>



	 					
			 		</div>	   <!-- End row -->	


			 	</div>	   <!-- End container -->		
			</section>	<!-- END SALE-1 -->


<?php
get_footer();
