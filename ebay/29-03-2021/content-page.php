<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

?>
	<?php if ( ! is_front_page() ) { ?>
	<section id="hero-5" class="hero-section division" style="background:#132672">			
				<div class="container pt-20" >		
					<div class="row d-flex align-items-center">


						<!-- HERO TEXT -->
						<div class="col-md-12 col-lg-12">
							<div class="hero-txt mb-20 text-center">

								<!-- Title -->
								<h1 class="h4-sm white-color"><?php the_title(); ?></h1>

							

							

							</div>	
						</div>	<!-- END HERO TEXT -->


					

					</div>	   <!-- End row -->	
				</div> 	   <!-- End container -->
			</section>	<!-- END HERO-5 -->	
			<?php }else{ 
			
			
			
			?>
			
		

	
				<section id="hero-7">	
				<div id="carouselExampleControls" class="carousel slide  hero-section" data-ride="carousel" style="background:#c1f4fe">
			
  <div class="carousel-inner">
      <?php   global $wpdb;
	    $table_prefix = $wpdb->prefix."nextend2_smartslider3_slides";
	  
	  $results = $wpdb->get_results( "SELECT *  FROM  $table_prefix where slider='2' order by first desc "  );
$ctr=0;


    foreach ($results as $pages) {
		$ctr++;
		if($ctr=='1'){
			$d='active';
		}else{
			$d='';
		}
		$imagepath1=str_replace("$upload$","",$pages->thumbnail);
		$imagepath=str_replace("upload","uploads",$imagepath1);

		?>
    
    <div class="carousel-item <?php echo $d; ?>">
     <a href="<?php echo get_site_url(); ?>/start-selling/"> <img class="d-block w-100" src="<?php echo get_site_url(); ?>/wp-content/<?php echo $imagepath; ?>" style="width:100%" ></a>
    </div> <?php } ?>
   
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>	
<script>
jQuery(document).ready(function($){
  // Activate Carousel
  $("#carouselExampleControls").carousel();
    
  
  // Enable Carousel Controls
  $(".carousel-control-prev").click(function(){
    $("#carouselExampleControls").carousel("prev");
  });
  $(".carousel-control-next").click(function(){
    $("#carouselExampleControls").carousel("next");
  });
});
</script>
					<?php
//echo do_shortcode('[smartslider3 slider="2"]'); 
}
?>


			</section>	<!-- END HERO-7 -->

	
		<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
						 		    
						 		    <?php 	the_content(); ?>

						
			</section>	<!-- END BANNER-2 -->
