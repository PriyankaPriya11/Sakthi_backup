<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<?php if(isset($_REQUEST['swpquery'])){ $word = $_REQUEST['swpquery']; $word = str_replace("+"," ",$word); } ?>
	<title> <?php echo $word; ?> - LiveLife.guide - Find Your Live Life Guide</title>
	<!--<link rel="icon" href="https://www.livelife.guide/wp-content/uploads/2018/04/icon.png" type="image/gif" sizes="16x16">-->
	<link rel="icon" href="https://www.livelife.guide/wp-content/uploads/2019/02/cropped-lg_fav.png" type="image/gif" sizes="16x16">

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
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-KF5QNLQ');</script>
	<!-- End Google Tag Manager -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-2469581-18"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-2469581-18');
	</script>
	<script>
		function readCookie(name) {
			var nameEQ = encodeURIComponent(name) + "=";
			var ca = document.cookie.split(';');
			for (var i = 0; i < ca.length; i++) {
				var c = ca[i];
				while (c.charAt(0) === ' ')
					c = c.substring(1, c.length);
				if (c.indexOf(nameEQ) === 0)
					return decodeURIComponent(c.substring(nameEQ.length, c.length));
			}
			return null;
		}
	</script>
	<?php
	//wp_head();
	$timezone = date_default_timezone_get();
	date_default_timezone_set('GMT');
	$datetime = date('YmdHi', time() + 30);
	date_default_timezone_set($timezone);

		if(isset($_REQUEST['swpquery'])){ 
			$word = $_REQUEST['swpquery'];
		}
		if(isset($_REQUEST['FID'])){
			$FID = $_REQUEST['FID'];
		}else if(isset($_REQUEST['fid'])){
			$FID = $_REQUEST['fid'];
		}

		if(isset($_REQUEST['CID'])){
			$CID = $_REQUEST['CID'];
		}else if(isset($_REQUEST['cid'])){
			$CID = $_REQUEST['cid'];
		}

		if(isset($_REQUEST['rtds'])){
			$RTDS = $_REQUEST['rtds'];
		}else if(isset($_REQUEST['RTDS'])){
			$RTDS = $_REQUEST['RTDS'];
		}
		if(isset($_REQUEST['tmplt'])){
			$tmplt = $_REQUEST['tmplt'];
		}else if(isset($_REQUEST['TMPLT'])){
			$tmplt = $_REQUEST['TMPLT'];
		} else {
			$tmplt = 2;
		}
		$geo_detail = get_currency_code();
		$country_code = $geo_detail['geoplugin_countryCode'];
		$continent_code = $geo_detail['geoplugin_continentCode'];

		$access_key = "Gp-PFae4v2TxdO61iVo2G1ld";

		$create_sig = trim($datetime.$access_key.$word);
		$sha_val = sha1($create_sig, true);

		$final_val_1 = str_replace(array('+', '/'), array('-', '_'), trim(base64_encode($sha_val), '=='));
		
	?>
	<script >
	//var signature_key = '<?php echo $final_val; ?>';
	var result_count = '<?php echo $GLOBALS[ 'result_count' ]; ?>';
	var signature_key = '<?php echo $final_val_1 ?>';
	// console.log(signature_key);
	// console.log(result_count);
	var word = '<?php echo $word; ?>';
	var FID = '<?php  echo $FID; ?>';
	var CID = '<?php  echo $CID; ?>';
	var tmplt = '<?php echo $tmplt; ?>';
    var rtds = '<?php echo $RTDS; ?>';
	var segment_id = 'llguide'+FID;
	var country_code = '<?php echo $country_code; ?>';
	var continent_code = '<?php echo $continent_code; ?>';
	var cookie_policy = readCookie("viewed_cookie_policy");
		// console.log('Cookie_policy ' + cookie_policy);
		// console.log('country_code ' + country_code);
		// console.log('continent_code ' + continent_code);
	if ((result_count > 3) && (result_count < 7)){
		segment_id = 'llguide'+FID+'b';
	}
	//console.log(segment_id);
	function onResolved(msg) {
		console.log(msg);
        console.log('completed');
		//jQuery(".layout-simple.mainResults").css("display", "block");
		if(continent_code != 'EU'){
			jQuery(".cc-page-loader").css("display", "none");
			jQuery(".layout-simple.ads_top").css("display", "block");
			jQuery(".layout-simple.ads_bottom").css("display", "block");
			jQuery(".layout-simple.cc-mobile-relatedResults").css("display", "block");
			jQuery('#content').css("display", "block");
		} else if ((continent_code == 'EU'))
		{
			jQuery(".cc-page-loader").css("display", "none");
			jQuery(".layout-simple.ads_top").css("display", "block");
			jQuery(".layout-simple.ads_bottom").css("display", "block");
			jQuery(".layout-simple.cc-mobile-relatedResults").css("display", "block");
			jQuery('#content').css("display", "block");
		} else if ((continent_code == 'EU') && (cookie_policy == 'no' ) ){
			jQuery(".cc-page-loader").css("display", "none");
			jQuery('#content').css("display", "block");
		}
		//jQuery(".cc-sidebar-content.relatedResults").css("display", "block");
		jQuery('#relatedResults iframe').contents().find("body").on('click', 'a.aylf-bing-sidebar__title', function(e) {
			e.preventDefault();
			e.stopPropagation();
			var __dataQuery=e.target.parentNode.getAttribute('data-query');
			if(e.target.tagName.toLowerCase() == 'a')
				__dataQuery=e.target.getAttribute('data-query');
			localStorage.setItem('__query',__dataQuery);
			top.location='/search/?swpquery='+__dataQuery+'&FID='+FID+'&CID='+CID+'&TYPE=BROAD&rtds='+rtds+'&tmplt='+tmplt;
			return false;
		});
		jQuery('#relatedResults-mobile #relatedResults iframe').contents().find("head")
      		.append(jQuery("<style type='text/css'> .aylf-bing-sidebar .aylf-bing-sidebar__label{font-size: 14px !important; padding-bottom: 5px !important; text-transform: uppercase !important; width: 100% !important;} .sidebar-results .aylf-bing-sidebar{display: flex !important; flex-wrap: wrap !important;} .aylf-bing-sidebar .aylf-bing-sidebar__result{width: 48% !important; margin: 0 !important;} @media only screen and (max-width:374px) {.aylf-bing-sidebar .aylf-bing-sidebar__result{width: 100% !important;;}}</style>"));
		jQuery('#relatedResults iframe').contents().find("head")
      		.append(jQuery("<style type='text/css'> .aylf-bing-sidebar .aylf-bing-sidebar__label{font-size: 14px !important; padding-bottom: 5px !important; text-transform: uppercase !important; width: 100% !important;}</style>"));
		/*jQuery('#mainResults iframe').contents().find("head")
			.append(jQuery("<style type='text/css'> .embedded-layout { display: none !important; } </style>"));*/
    }
    function onRejected(msg) {
        console.log(msg);
    }
	var accept_policy = true;
	if((cookie_policy == 'yes') && (continent_code == 'EU')){
		accept_policy = true;
	}else if((cookie_policy == 'no') && (continent_code == 'EU')){ 
		accept_policy = false;
	} else if(continent_code != 'EU'){
		accept_policy = true;
	}

	window.s1search = window.s1search || function () { (window.s1search.q = window.s1search.q || []).push(arguments) };
		window.s1search('config', {
			category: "web",
			domain: "www.livelife.guide", 
			partnerId: 41117,
			isTest: false,
			onComplete: onResolved,
			onError: onRejected,
			query: word,
			segment: segment_id,
			signature: signature_key,
			linkTarget : '_blank',
			clickTrackingUrl: 'https://trk.livelife.guide/postback?clickid='+CID,
			gdprOptIn: accept_policy,
		});
		console.log(window.s1search);
	</script>
</head>

<!--body <?php /*if(!is_page(8214)){body_class();} else { echo 'class = "search search-results chrome"'; } */ ?>-->
<body class = "search search-results chrome <?php if (is_user_logged_in()) { echo 'admin'; }  ?> <?php if($tmplt == 1){?> cc-temp-1 <?php }else{?>cc-temp-2 <?php } ?>SDK_Search">

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KF5QNLQ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	
	<?php $header_orientation_class = gridlove_get_option( 'header_orientation' ) == 'wide' ? 'gridlove-header-wide' : ''; ?>
	<?php $shadow_class = gridlove_get_option('header_shadow') ? 'gridlove-header-shadow' : ''; ?>
    <?php $id = get_field( 'fid', 8214); 
        $word = "";
        if(isset($_REQUEST['swpquery'])){ $word = $_REQUEST['swpquery']; $word = str_replace("+"," ",$word); }?>
	<header id="header" class="gridlove-site-header hidden-md-down <?php echo esc_attr( $header_orientation_class ); ?> <?php echo esc_attr( $shadow_class ); ?>">
	<?php if($tmplt == 1): ?>
			<div class="cc-searchpage-header-sty">
				<div class="gridlove-slot-l">
					<?php //get_template_part('template-parts/header/elements/logo');  ?>
					<div class="gridlove-site-branding  ">
						<span class="site-title h1"><a href="https://www.livelife.guide/" rel="home">
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
                                <input class="search_field" type="text" placeholder="Search Guides..." value="<?php echo $word;?>" name="swpquery" title="Search for:">
                                <input type="hidden" name="FID" value="<?php echo $id;?>">
                                <input type="hidden" name="CID" value="<?php echo time(); ?>">
                                <input type="hidden" name="TYPE" value="EXACT">
                                <button type="submit" class="cc-submit-btn"></button>
                            </form>
                        </div>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<?php if($tmplt == 2): ?>
			<div class="cc-searchpage-header-sty cc-temp-header-two">
				<div class="gridlove-slot-r cent temp_2 ">
					<div class="cc-wrapp-search-from">
						<div class="header-search">
                            <?php //get_search_form(); ?>
                            <form role="search" method="get" id="searchform" action="<?php echo site_url().'/search2.php'; ?>" class="gridlove-search-form">
                                <label class="screen-reader-text" for="s"> Search For</label>
                                <input class="search_field" type="text" placeholder="Search Guides..." value="<?php echo $word;?>" name="swpquery" title="Search for:">
                                <input type="hidden" name="FID" value="<?php echo $id;?>">
                                <input type="hidden" name="CID" value="<?php echo time(); ?>">
                                <input type="hidden" name="TYPE" value="EXACT">
                                <button type="submit" class="cc-submit-btn"></button>
                            </form>
                        </div>
					</div>
				</div>
				<div class="gridlove-slot-l">
					<div class="gridlove-site-branding  ">
						<span class="site-title h1"><a href="https://www.livelife.guide/" rel="home">
						<img src="<?php echo  get_stylesheet_directory_uri(); ?>/images/livelife-logo" alt="livelife">
						</a></span>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<!-- <div class="gridlove-header-wrapper">
				<div class="gridlove-header-1 gridlove-header-middle container">
				</div>
			</div> -->
	</header>
	<script>
jQuery('body').on('click','.trigger',function()
{
	jQuery('.modal').addClass("show-modal");
}
);	
var modal = document.querySelector(".modal");
var trigger = document.querySelector(".trigger");
var closeButton = document.querySelector(".close-button");

function toggleModal() {
    modal.classList.toggle("show-modal");
}

function windowOnClick(event) {
    if (event.target === modal) {
        toggleModal();
    }
}
//trigger.addEventListener("click", toggleModal);
closeButton.addEventListener("click", toggleModal);
window.addEventListener("click", windowOnClick);
jQuery(document).ready(function()
{
	jQuery('body').on('click','.cc-close-cookie',function()
	{
		jQuery("#cookie-law-info-bar").css("display","none");
		jQuery("#cookie-law-info-again").css("display","block");	
	}
	);
	jQuery('body').on('click','#cookie-law-info-again',function()
	{
		jQuery(this).css("display","none");
		jQuery("#cookie-law-info-bar").css("display","block");	
	}
	);

}
);
<?php
$geo_detail = get_currency_code();
$country_code = $geo_detail['geoplugin_countryCode'];
$continent_code = $geo_detail['geoplugin_continentCode'];
if($continent_code == 'EU'):
?>
	</script>
	<div class="modal">
    <div class="modal-content">
		<span class="close-button">×</span>
		<img src="https://www.livelife.guide/wp-content/uploads/2018/04/livelife-logonew_small.png" style="width:24em;" />
		<h3>We Value your Privacy</h3>
		<p>By using this site,you agree to our use of cookies and information to provide personalized content and ads and measure and analyze site usage.</p>
        <p style="text-align:center;"><?php echo do_shortcode('[cookie_reject]'); ?><?php echo do_shortcode('[cookie_accept]'); ?></p>
    </div>
</div>
	<?php //get_template_part( 'template-parts/header/responsive' ); ?>