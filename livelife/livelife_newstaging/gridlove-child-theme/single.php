<?php get_header('post'); ?>
<div class="container">
    <div class="bread">
<?php
if(!wp_is_mobile()){
    if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb('<p id="breadcrumbs">','</p>');
    } 
} ?>
</div>
</div>
<?php $layout = gridlove_get_single_layout(); ?>

<?php if( $layout['cover'] ): ?>
	<div id="cover" class="gridlove-cover-area gridlove-cover-single">
		<?php get_template_part( 'template-parts/single/cover-' . $layout['cover'] ); ?>
	</div>
<?php endif; ?>

<?php get_template_part('template-parts/ads/below-header'); ?>

<?php $sidebar = gridlove_get_current_sidebar(); ?>

<div id="content" class="gridlove-site-content yoyo container gridlove-sidebar-<?php echo esc_attr( $sidebar['position'] ); ?>">

    <div class="row">

    	<?php get_template_part('template-parts/single/share');  ?>

        <div class="gridlove-content gridlove-single-layout-<?php echo esc_attr($layout['content']); ?>">

            <?php while( have_posts() ) : the_post(); ?>
                
                <?php get_template_part('template-parts/single/content-'.$layout['content']); ?>

            <?php endwhile; ?>
                

            <?php get_template_part('template-parts/ads/below-single'); ?>

            <?php comments_template(); ?>
            
            <?php get_template_part('template-parts/single/related'); ?>

        </div>

        <?php get_sidebar(); ?>
    </div>
        
</div>

<?php get_template_part('template-parts/single/infinite-scroll'); ?>
<!-- <script>
	jQuery(window).scroll(function(){
    if (jQuery(window).scrollTop() >= 0) {
        jQuery('#header').addClass('sticky');
    }
    else {
        jQuery('#header').removeClass('sticky');
    }
});
    </script> -->
    <style>
        .sticky {
    position: sticky !important;
    top: 0;
    width: 100%;

    left: 0;
    transition: .3s;
    z-index: 999999 !important;
}
.gridlove-slot-r {
    right: 28.5% !important;
}
.cc-post-header .gridlove-header-wrapper .header-search form #search_field{
    padding: 14px 14px !important;  
    border: 1px solid #e2e1e4 !important;
    border-radius: 30px 30px 30px 30px;
    height: auto;
    margin-top: 12.5px;
    width: 80%;
    min-width: 80%;
    position: relative;
    right: -70px;
    /* background: #fff url(https://www.livelife.guide/wp-content/themes/gridlove-child-theme/images/search-2.png) no-repeat 20px 11px !important; */
    background-size: 18px;
}
button.submit-button {
    box-sizing: border-box;
    position: absolute;
    top: 0;
    right: -2px;
    height: 30px;
    padding: 0 20px;
    border: none;
    border-radius: 20px;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    color: #fff;
    font-family: montserrat-500,Times,sans-serif;
    font-size: 14px;
    line-height: 28px;
    background-color: #a5d66b;
    -webkit-transition: background-color .3s ease;
    -o-transition: background-color .3s ease;
    transition: background-color .3s ease;
}
.cc-post-header .gridlove-header-wrapper {
    background-color: rgba(58,67,73,.95);
    height: 75px !important;
}
.gridlove-header-middle .gridlove-slot-c, .gridlove-header-middle .gridlove-slot-l, .gridlove-header-middle .gridlove-slot-r{height:79% !important;}
@media (min-width: 1200px){
.container {
    max-width: 1338px !important;
}
}
.container #breadcrumbs {
    padding-left: 8.5% !important;
    
}
.single.single-post .gridlove-logo {
/* max-height: 60px !important; */
max-height: 49px !important;
}
@media only screen and (min-width: 1200px)
.single.single-post .gridlove-logo {
margin-left: -27px !important;
}

@media screen and (max-width:1024px){
.bread{
    padding-left:0px;
    padding-right:18px;
}
html body.container #breadcrumbs {
    padding-left: 0% !important;
}
}
@media screen and (min-width:1025px) and (max-width:1150px){
    html body .container #breadcrumbs {
    padding-left: 0% !important;
} 
}
@media screen and (min-width:1151px) and (max-width:1160px){
    html body .container #breadcrumbs {
    padding-left: 0.5% !important;
}   
}
@media screen and (min-width:1161px) and (max-width:1185px){
    html body .container #breadcrumbs {
    padding-left: 0.5% !important;
}    
}
@media screen and (min-width:1186px) and (max-width:1205px){
    html body .container #breadcrumbs {
    padding-left: 2.5% !important;
}    
}
@media screen and (min-width:1206px) and (max-width:1230px){
    html body .container #breadcrumbs {
    padding-left: 3.5% !important;
}    
}
@media screen and (min-width:1231px) and (max-width:1260px){
    html body .container #breadcrumbs {
    padding-left: 4.5% !important;
}    
}
@media screen and (min-width:1261px) and (max-width:1280px){
    html body .container #breadcrumbs {
    padding-left: 5.5% !important;
}    
}
@media screen and (min-width:1281px) and (max-width:1320px){
    html body .container #breadcrumbs {
    padding-left: 6.5% !important;
}    
}
@media screen and (min-width:1321px) and (max-width:1366px){
    html body .container #breadcrumbs {
    padding-left: 7.5% !important;
}    
}

/* @media screen and (min-width:1135px) and (max-width:1250px){
    .bread{
    padding-left:50px !important;
    padding-right:18px;
}
} */
@media screen and (min-width:761px) and (max-width:768px){
    .bread{
    padding-left:18px !important;
    padding-right:18px;
}  
}
body{
    background:#ffffff !important;
}
.entry-content {
    padding-top: 30px;
}
.entry-meta .meta-item, .entry-meta a, .entry-meta span, .comment-metadata a {
    /* color: #d6cfc9; */
    color: #59484f !important;
    font-family: 'Cabin';
    font-weight: 500;
    /* font-size:18px !important; */
}
.h2{
    color: #59484f !important;
    font-family: 'Cabin';
    font-weight: 500;
    font-size:18px !important;
}
        </style>
<?php get_footer('post'); ?>