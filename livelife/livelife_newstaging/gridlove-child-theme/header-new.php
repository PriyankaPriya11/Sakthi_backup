<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="referrer" content="no-referrer-when-downgrade" />
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
html body.home {
    background:unset !important;
    /*margin-bottom: 45px !important;*/
}
body {
    background-color: #f6f6f6 !important;
}
.home  #header {
    box-shadow:unset;
}
.cc-home-header {
  display:flex;
  flex-direction:column;
}
.cc-home-header .gridlove-header-bottom .container {
  display:flex;
  flex-direction:column;
  width: 50%;
}

.cc-home-header .gridlove-slot-c ,  .cc-home-header .gridlove-slot-l {
  width:100%;
  position:relative;
}
.cc-home-header .gridlove-slot-l { 
    text-align: center;
    position: unset !important;
    left:0 !important;
}
.cc-home-header .gridlove-header-bottom {
  height:auto;
  background:#fff;
  border: 0;
}
.cc-home-header .gridlove-header-wrapper {
    background-color: #ffffff;
}

.cc-home-header .gridlove-header-bottom .gridlove-main-nav>li>a {
    margin: 22px 5px;
    background: #595463;
    color: #fff;
    display: inline-block;
    height: auto;
    padding: 10px 30px;
    line-height: initial;
    border-radius: 40px;
}
.cc-home-header .input-field {
    display:flex;
    width:85%;
    margin:0 auto;
}

.cc-home-header .gridlove-slot-l .gridlove-menu>li:first-child {
    margin-left:0 !important;
}

.cc-home-header #search_field {
    padding: 26px 0;
    border-radius: 0 30px 30px 0px;
    border-left: 0;
    border-color:#c8c6cb !important;
}
.cc-home-header .input-field .btn-search {
    width: 8%;
    background: transparent;
    border: 0;
    border: 1px solid #000;
    border-right: 0;
    border-radius: 30px 0 0 30px;
    background-image: url(https://www.livelife.guide/wp-content/themes/gridlove-child-theme/images/search-2.png);
    background-size: 20px;
    background-repeat: no-repeat;
    background-position: center center;
    border-color:#c8c6cb !important;
}
.cc-home-header .gridlove-main-navigation {
    padding:0 15px !important;
}

.cc-home-header .gridlove-header-middle .gridlove-slot-c {
    margin-top: 30px;
}
.cc-home-header .gridlove-slot-c input[type=text]{
    /*width: 765px;*/
    height: 60px;
    font-size: 24px;
}
@media only screen and (max-width:1600px) {
    .cc-home-header .gridlove-header-bottom .container {
        width:78%;
    }
}
</style>
<body <?php body_class(); ?>>

<?php
		if(isset($_REQUEST['llgagid']))
		{ 
			$llgaid_one = $_REQUEST['llgagid'];
		}
		if(isset($_REQUEST['llgaid']))
		{ 
			$llgaid_two = $_REQUEST['llgaid'];
		}
		if(isset($_REQUEST['llgcid']))
		{ 
			$llgcid_one = $_REQUEST['llgcid'];
		}
		if(isset($_REQUEST['llgkid']))
		{ 
			$llgkid_three = $_REQUEST['llgkid'];
		}
?>
		<!-- Google Tag Manager (noscript) -->
			<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KF5QNLQ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
	
	<?php $header_orientation_class = gridlove_get_option( 'header_orientation' ) == 'wide' ? 'gridlove-header-wide' : ''; ?>
	<?php $shadow_class = gridlove_get_option('header_shadow') ? 'gridlove-header-shadow' : ''; ?>

	<header id="header" class="gridlove-site-header yoyoheader hidden-md-down <?php echo esc_attr( $header_orientation_class ); ?> <?php echo esc_attr( $shadow_class ); ?>">
        <?php //if(!wp_is_mobile()): ?>
			<?php /*if( gridlove_get_option( 'header_top' ) ): ?>
				<?php get_template_part( 'template-parts/header/topbar' ); ?>
			<?php endif; ?>

			<?php get_template_part('template-parts/header/layout-'.gridlove_get_option( 'header_layout' )); ?>

			<?php if ( gridlove_get_option( 'header_sticky' ) ): ?>
				<?php get_template_part( 'template-parts/header/sticky' ); ?>
            <?php endif;*/ ?>
            <div class="gridlove-header-3 cc-home-header">
				<div class="gridlove-header-wrapper">
					<div class="gridlove-header-middle">
						<div class="gridlove-slot-c">
							<?php get_template_part('template-parts/header/elements/logo'); ?>
						</div>
					</div>
				</div>
				<div class="gridlove-header-bottom">
					<div class="container">
						<div class="gridlove-slot-c">
							<?php if(isset($_REQUEST['swpquery'])){ $word = $_REQUEST['swpquery']; $word = str_replace("+"," ",$word); }else{
									$word = 'Search Guides...'; } $id = get_field( 'fid_related', 8294); ?>
							<div class="">
								<form role="search" method="get" id="searchform" class="gridlove-search-form" action="<?php echo site_url().'/search2.php'; ?>">
									<div class="inner-form">
										<div class="input-field">    
											<label class="screen-reader-text" for="s">' . _x( 'Search for:', 'label' ) . '</label>
											<button type="submit" class="btn-search"></button>
											<input class="search_field" id="search_field" type="text" placeholder="Search Guides..." value="<?php echo $word; ?>" name="swpquery" title="Search for:">
											<input type="hidden" name="FID" value="<?php echo $id; ?>">
											<?php if(!empty($llgaid_one)) { ?>
												<input type="hidden" name="llgagid" value="<?php echo $llgaid_one;?>">
											<?php } ?>
											<?php if(!empty($llgaid_two)) { ?>
												<input type="hidden" name="llgaid" value="<?php echo $llgaid_two;?>">
											<?php } ?>
											<?php if(!empty($llgcid_one)) { ?>
												<input type="hidden" name="llgcid" value="<?php echo $llgcid_one;?>">
											<?php } ?>
											<?php if(!empty($llgkid_three)) { ?>
												<input type="hidden" name="llgkid" value="<?php echo $llgkid_three;?>">
											<?php } ?>
												<input type="hidden" name="CID" value="<?php echo time(); ?>">
											<input type="hidden" name="TYPE" value="BROAD">
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="gridlove-slot-l">
							<?php get_template_part('template-parts/header/elements/main-menu'); ?>
						</div>
						<!-- <div class="gridlove-slot-r">
							<?php //get_template_part('template-parts/header/elements/actions'); ?>
						</div>-->
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
	<?php //if(wp_is_mobile()): ?>
	<?php get_template_part( 'template-parts/header/responsive' ); ?>
	<?php //endif; ?>