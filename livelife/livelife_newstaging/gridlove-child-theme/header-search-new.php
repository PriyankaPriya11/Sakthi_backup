<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!-- <meta name="viewport" content="width=device-width,initial-scale=1.0"> -->

	<link rel="dns-prefetch" href="//csr.inspsearchapi.com" />
	<link rel="dns-prefetch" href="//config.inspsearchapi.com" />
	<link rel="dns-prefetch" href="//appapi.inspsearchapi.com" />
	<link rel="dns-prefetch" href="//glogger.stuff.com" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/cc_search.css?v=1548488126"></script>
	<link rel='stylesheet' id='cookie-law-info-css'  href='<?php echo plugins_url();?>/webtoffee-gdpr-cookie-consent/public/css/cookie-law-info-public.css?ver=1.7.1' type='text/css' media='all' />
	<link rel='stylesheet' id='cookie-law-info-gdpr-css'  href='<?php echo plugins_url();?>/webtoffee-gdpr-cookie-consent/public/css/cookie-law-info-gdpr.css?ver=1.7.1' type='text/css' media='all' />

	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php //wp_head(); ?>
	<script type='text/javascript' src='<?php echo includes_url();?>/js/jquery/jquery.js?ver=1.12.4'></script>
	<script type='text/javascript' src='<?php echo includes_url();?>/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
	<script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/js/jQuery.highlight.js'></script>
	<script type='text/javascript'>
		/* <![CDATA[ */
		var Cli_Data = {"nn_cookie_ids":[],"cookielist":[]};
		var log_object = {"ajax_url":"http:\/\/www.livelife.guide\/wp-admin\/admin-ajax.php"};
		/* ]]> */
	</script>
	<script type='text/javascript' src='<?php echo plugins_url();?>/webtoffee-gdpr-cookie-consent/public/js/cookie-law-info-public.js?ver=1.7.1'></script>

	<script type="text/javascript" src="//csr.inspsearchapi.com/lib/infospace.search.js"></script>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-KF5QNLQ');</script>
	<!-- End Google Tag Manager -->
</head>

<!--body <?php /*if(!is_page(8214)){body_class();} else { echo 'class = "search search-results chrome"'; } */ ?>-->
<body class = "search search-results chrome">
		<!-- Google Tag Manager (noscript) -->
			<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KF5QNLQ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
	
	<?php $header_orientation_class = gridlove_get_option( 'header_orientation' ) == 'wide' ? 'gridlove-header-wide' : ''; ?>
	<?php $shadow_class = gridlove_get_option('header_shadow') ? 'gridlove-header-shadow' : ''; ?>
    <?php $id = get_field( 'fid', 8214); 
        $word = "";
        if(isset($_REQUEST['swpquery'])){ $word = $_REQUEST['swpquery']; $word = str_replace("+"," ",$word); }?>
	<header id="header" class="gridlove-site-header hidden-md-down <?php echo esc_attr( $header_orientation_class ); ?> <?php echo esc_attr( $shadow_class ); ?>">
			<div class="cc-searchpage-header-sty">
				<div class="gridlove-slot-l">
					<?php //get_template_part('template-parts/header/elements/logo');  ?>
					<div class="gridlove-site-branding  ">
						<span class="site-title h1"><a href="<?php echo site_url(); ?>" rel="home">
						<img src="<?php echo  get_stylesheet_directory_uri(); ?>/images/livelife-logo" alt="livelife">
						</a></span>
					</div>
				</div>
				<div class="gridlove-slot-r cent">
					<div class="cc-wrapp-search-from">
						<div class="header-search">
                            <?php //get_search_form(); ?>
                            <form role="search" method="get" id="searchform" action="<?php echo site_url().'/search2.php'; ?>" class="gridlove-search-form">
                                <label class="screen-reader-text" for="s"> Search For</label>
                                <input type="text" placeholder="Search" value="<?php echo $word;?>" name="swpquery" title="Search for:">
                                <input type="hidden" name="FID" value="<?php echo $id;?>">
                                <input type="hidden" name="CID" value="<?php echo time(); ?>">
                                <button type="submit" class="cc-submit-btn"></button>
                            </form>
                        </div>
					</div>
				</div>
			</div>
			<!-- <div class="gridlove-header-wrapper">
				<div class="gridlove-header-1 gridlove-header-middle container">
				</div>
			</div> -->

	</header>

	<?php //get_template_part( 'template-parts/header/responsive' ); ?>