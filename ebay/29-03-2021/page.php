<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

get_header();

/* Start the Loop */
?>
<style>
    html {
  scroll-behavior: smooth;
}
</style>

<?php
                $link=$_SERVER['REQUEST_URI'];
                 $link_array = explode('/',$link);
    $plink=$link_array['2'];
      $plinks=$link_array['1'];
    if($plink=='why-sell-on-ebay' || $plinks=='why-sell-on-ebay'){
    ?>
    
<style>
    .elementor-tab-content p{

    color: #fff;
}
.elementor-tab-content h3{color:#fff; }
</style>
    <?php }else{ } ?>
    <?php
if($plink=='start-selling' || $plinks=='start-selling' || $plink=='self-serve-2' || $plinks=='self-serve-2'){ 

include('selfserve2.php');
?>
<script>
  jQuery(document).ready(function(){
    window.location.href='/start-selling/#openpaymentgateway';
      })
</script>
<?php 
// header("Location: /start-selling/#openpaymentgateway");
// die;
 }elseif($plink=='startselling' || $plinks=='startselling'){ 
include('selfserve1.php');
 }elseif($plink=='start-sellingnew' || $plinks=='start-sellingnew'){ 
include('selfserve3.php');
 }else{ ?>



	<?php 
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content-page' );
	


	// If comments are open or there is at least one comment, load up the comment template.
//	if ( comments_open() || get_comments_number() ) {
//		comments_template();
//	}
endwhile; // End of the loop.
}
get_footer();
