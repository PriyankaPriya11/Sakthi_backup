<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-KF5QNLQ');</script>
	<!-- End Google Tag Manager -->
</head>
<style>
.cc-post-header .gridlove-header-wrapper {background-color:#fff;}
.cc-post-header .header-search {
	width:600px;
}
.cc-post-header .gridlove-header-wrapper .header-search form #search_field{
    border: 1px solid #e2e1e4 !important;
    border-radius: 30px 30px 30px 30px;
    height: auto;
    padding: 14px 14px;
    margin-top: 25px;
    width: 80%;
    min-width: 80%;
    position: relative;
    right: -70px;
    background: #fff url(https://www.livelife.guide/wp-content/themes/gridlove-child-theme/images/search-2.png) no-repeat 20px 16px;
    background-size: 18px;
}
.single-post #breadcrumbs , .single-post #breadcrumbs a {
	font-size:11px; font-weight:normal;
}
@media only screen and (min-width:1200px) {
	.single.single-post .gridlove-logo {margin-left:30px;}
}
/*20-02-2020*/
.drop-menu{
	float:right;
	cursor: pointer;
	padding:30px;
	/* margin-right:15%; */
}
#menu-post-menu{
    display:none;
	padding-left:0px;
}

/* .menu-test:hover #menu-post-menu {display: block;} */
.menu-test {
    font-size: 14px;
    /* border: 1px solid rgb(142, 130, 94); */
    border-radius: 12px;
    padding: 2px 19px;
    /* letter-spacing: 3px; */
	margin-top:-4px;
	position:absolute;
	/* right:12.5%; */
	right:9.3%;
	color: #7f7e82;
}
.gridlove-slot-l{
	left:7.7% !important;
}
@media screen and (min-width:1280px) and (max-width:1440px){
	.gridlove-slot-l{
	left:7.7% !important;
}
}

@media screen and (min-width:769px) and (max-width:1024px){
	html body .gridlove-slot-r{
		right:22.1% !important;
	}
	.gridlove-slot-l{
		left:2.7% !important;
	}
	.menu-test{
		right:1.5% !important;
	}
	ul#menu-post-menu{
		right: 2.3% !important;
	}
	/* html body .container #breadcrumbs{
		padding-left:0.5% !important;
		display:block;
	} */
}
@media screen and (min-width:1138px) and (max-width:1200px)
{
	html body .gridlove-slot-r {
    right: 25.5% !important;
}
.menu-test {
    right: 4.5% !important;
}
}
@media screen and (min-width:1231px) and (max-width:1279px){
	html body .gridlove-slot-l {
    left: 5.5% !important;
}}
@media screen and (min-width:1025px) and (max-width:1200px){
	html body .gridlove-slot-l{
		left:2.2% !important;
	}
	html body .gridlove-slot-r {
    right: 21.5% !important;
}
/* .single.single-post .gridlove-logo {
    margin-left: 37px !important;
} */
.menu-test{
	right: 1.5%;
}
.gridlove-slot-r {
    right: 22.5% !important;
}
}
@media screen and (min-width:1201px) and  (max-width:1279px){
	.gridlove-slot-l {
    left: 3.7% !important;
}
}
.menu-test:after{
	content: "▼";
	font-size:13px;
}
ul#menu-post-menu {
    list-style: none;
    border: 1px solid;
    width: 170px;
    padding: 10px;
    margin-top: 10px;
	background:#ffffff;
	position:absolute;
	/* right:14%; */
	right:10.3%;
	top:52%;
}
ul#menu-post-menu li a{
	color:#59484f;
}
ul#menu-post-menu li a:hover{
	color:rgb(142, 130, 94);
}
img.gridlove-logo {
    width: 140px !important;
}
@media screen and (min-width:320px) and (max-width:767px){
	.single.single-post .gridlove-logo{
		max-height: 49px !important;
        /* width: 64% !important;
        margin-left: -32px; */
	}
	/* html body .container #breadcrumbs {
    padding-left: 0.5% !important;
} */
}

body.post-template-default.single.single-post.postid-9192.single-format-standard.logged-in.admin-bar.chrome.customize-support.wt-cli-geoip-on.wt-cli-non-eu-country{
	background-color:#f6f6f6f !important;
}
.gridlove-header-wrapper, .gridlove-header-middle .sub-menu, .gridlove-header-responsive, .gridlove-header-responsive .sub-menu {
background-color: rgba(58,67,73,.95) !important;
}
@media screen and (max-width:1024px){
	html body .container #breadcrumbs {
    padding-left: 0% !important;
}
}
@media screen and (min-width:780px) and (max-width:1023px){
	.bread{
		padding-left:50px !important;
	}
}
@media screen and (min-width:580px) and (max-width:1023px){
    .single.single-post.gridlove-logo{
        width:140px !important;
    }
}
.gridlove-header-wrapper {
    z-index: 8003;
}
/*20-02-2020*/

</style>
<script>

jQuery(document).ready(function(){
	jQuery(".menu-test").click(function(){
	jQuery("#menu-post-menu").toggle();
});
});
</script>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KF5QNLQ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	
	<?php $header_orientation_class = gridlove_get_option( 'header_orientation' ) == 'wide' ? 'gridlove-header-wide' : ''; ?>
	<?php $shadow_class = gridlove_get_option('header_shadow') ? 'gridlove-header-shadow' : ''; ?>

	<header id="header" class="gridlove-site-header hidden-md-down cc-post-header <?php echo esc_attr( $header_orientation_class ); ?> <?php echo esc_attr( $shadow_class ); ?>">
		<?php //if(!wp_is_mobile()): ?>	
			<?php /*if( gridlove_get_option( 'header_top' ) ): ?>
				<?php get_template_part( 'template-parts/header/topbar' ); ?>
			<?php endif; ?>

			<?php get_template_part('template-parts/header/layout-'.gridlove_get_option( 'header_layout' )); ?>

			<?php if ( gridlove_get_option( 'header_sticky' ) ): ?>
				<?php get_template_part( 'template-parts/header/sticky' ); ?>
			<?php endif;*/ ?>
			
			<div class="gridlove-header-wrapper">
				<div class="gridlove-header-1 gridlove-header-middle container">
					
					<div class="gridlove-slot-l">
						<?php get_template_part('template-parts/header/elements/logo'); ?>
					</div>

					<div class="gridlove-slot-r">
						<?php //get_template_part('template-parts/header/elements/main-menu'); ?>
						<?php //get_template_part('template-parts/header/elements/actions'); ?>
						<div class="header-search">
							<?php 
							add_filter( 'get_search_form', 'related_search_form' );
							get_search_form(); 
							remove_filter( 'get_search_form', 'related_search_form' );?>
						</div>
					</div>
					<div class="drop-menu">
					<div class="menu-test">BROWSE GUIDES</div>
					<?php wp_nav_menu( array( 'theme_location' => 'post-menu', 'container_class' => '','menu_class'=>'navbar-nav hidden' ) ); ?>
				
					</div>
				</div>
			</div>
		<?php //endif; ?>
	</header>
	<div class="modal">
		<div class="modal-content">
			<span class="close-button">×</span>
			<img src="<?php echo "https://" . $_SERVER['SERVER_NAME'] ?>/wp-content/uploads/2018/04/livelife-logonew_small.png" style="width:24em;" />
			<h3>We Value your Privacy</h3>
			<p>By using this site,you agree to our use of cookies and information to provide personalized content and ads and measure and analyze site usage.</p>
			<p style="text-align:center;"><p style="text-align:center;"> <a href="#" id="cookie_action_close_header_reject" class="medium cli-plugin-button cli-plugin-main-button cookie_action_close_header_reject cli_action_button" data-cli_action="reject" style="color: rgb(255, 255, 255); background-color: rgb(128, 128, 128);">Reject</a><a href="#" class="cli_action_button cli-accept-button medium cli-plugin-button green" data-cli_action="accept">ACCEPT</a></p></p>
		</div>
	</div>
	<?php get_template_part( 'template-parts/header/responsive' ); ?>