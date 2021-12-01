<?php do_action('gridlove_before_end_content'); ?>

<?php get_template_part('template-parts/ads/above-footer'); ?>

<div id="footer" class="gridlove-footer">

	<?php if( gridlove_get_option('footer_widgets') ): ?>

	        <div class="container">
	            <div class="row">
	                <?php 
						$layout = explode( "_", gridlove_get_option('footer_layout') );
						$columns = $layout[0];
						$col_lg = $layout[1];
						$col_md = $columns > 1 ? 6 : 12;


					?>

					<?php for($i = 1; $i <= $columns; $i++) : ?>
						<div class="col-lg-<?php echo esc_attr($col_lg); ?> col-md-<?php echo esc_attr($col_md); ?> col-sm-12">
							<?php if( is_active_sidebar( 'gridlove_footer_sidebar_'.$i ) ) : ?>
								<?php dynamic_sidebar( 'gridlove_footer_sidebar_'.$i );?>
							<?php endif; ?>
						</div>
					<?php endfor; ?>

	            </div>
	        </div>

	<?php endif; ?>

    <div class="container">
		<div class="row">
		
		<?php if( gridlove_get_option('footer_bottom') ): ?>

			<div class="col col-lg-6 gridlove-copyright text-left">
				<div class="container">
					<?php echo wp_kses_post( gridlove_get_option('footer_copyright') ); ?>
				</div>
			</div>

		<?php endif; ?>
		
			<div class="col col-lg-6 gridlove-copyright text-right footer-menu" >
				<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
			</div>
		</div>
	</div>

</div>

<?php get_template_part('template-parts/header/side'); ?>

<?php wp_footer(); ?>
<script>
//var cookie_policy = $.cookie("viewed_cookie_policy");
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
var cookie_policy = readCookie("viewed_cookie_policy")
	console.log(cookie_policy);
	
</script>
<?php 
    if(isset($_REQUEST['swpquery'])){ 
			$word = $_REQUEST['swpquery'];
		if(isset($_REQUEST['swppg']))
			$page = $_REQUEST['swppg'];
		if(isset($_REQUEST['FID']))
			$FID = $_REQUEST['FID'];
		if(isset($_REQUEST['CID']))
			$CID = $_REQUEST['CID'];
			if(get_field('related_search',8214)==true){
				$show_the_content= 1;
			}
		$geo_detail = get_currency_code();
		$country_code = $geo_detail['geoplugin_countryCode'];
		$continent_code = $geo_detail['geoplugin_continentCode'];
		// $access_id = 'purecontent.llguide1';
		// if(wp_is_mobile()){
		// 	$access_id = 'purecontent.llguidemob.1';
		// 	if(my_wp_is_tablet()){
		// 		$access_id = 'purecontent.llguidetab.1';
		// 	}
		// }
		 ?>
<script>
	jQuery('#cookie_action_close_header').click(function() {
    	location.reload();
	});
	jQuery('#cookie_action_close_header_reject').click(function() {
    	location.reload();
	});

	var word = '<?php echo $word; ?>';
	var page = '<?php echo ($page != '') ? $page : 1; ?>';
	var result_count = '<?php echo $GLOBALS[ 'result_count' ]; ?>';
	var FID = '<?php  echo $FID; ?>';
	var CID = '<?php  echo $CID; ?>';
	var signature = '<?php echo infospace_getsignature($word); ?>';
	var show_the_content='<?php echo $show_the_content; ?>';
	var country_code = '<?php echo $country_code; ?>';
	var continent_code = '<?php echo $continent_code; ?>';
    console.log("New_search");
	console.log(signature);
	console.log(country_code);
	console.log(continent_code);
	console.log(show_the_content);
	if (result_count > 1){
		jQuery('.gridlove-post .box-inner-ellipsis .entry-title.h3 a').highlight(word,{
			wholeWord: true,
			background: "#ffff",
			color: "#3300b5",
			bold: false,
		});
	}
	var access_id = 'purecontent.llguide'+FID;
	var mobile_id = 'llguidemob.'+FID;
	var tablet_id = 'llguidetab.'+FID;
	console.log(mobile_id);
	console.log(tablet_id);
	console.log(FID);
	console.log(access_id);
	console.log(word);
	if ((result_count > 3) && (result_count < 7)){
		access_id = 'purecontent.llguide'+FID+'b';
	}
	console.log(access_id);
if(result_count > 3){
	if((cookie_policy == 'yes') && (continent_code == 'EU')){
		jQuery('#content').show();
		insp.search.doSearch({
			query: word,  // take care to encode the query term properly, refer to Best Practices Tip #7
			accessId: access_id,
			//accessId: 'purecontent.llguide1',
			signature: signature,
			deviceSegments: { mobile: mobile_id, tablet: tablet_id },
			page: page,
			adLinesCount : 3,
			gdprOptIn: true,
			category: 'web',
			linkTarget : '_blank',
			containers: {
				'main': {
					id:'mainResults',
					styles:{
						'fontFamily': 'Arial',
						'titleFontSize' : 18,
						'titleColor': '3300b5',
						'titleUnderline': true,
						'urlFontSize': 14,
						'textFontSize': 13,
						'textColor': '333',

					}
				},
				'top': {
					id:'ads_top',
					styles:{
						'fontFamily': 'Arial',
						'titleFontSize' : 18,
						'titleColor': '3300b5',
						'titleUnderline': true,
						'urlFontSize': 14,
						'textFontSize': 13,
						'textColor': '333',

					}
				},
				'bottom': {
					id:'ads_bottom',
					styles:{
						'fontFamily': 'Arial',
						'titleFontSize' : 18,
						'titleColor': '3300b5',
						'titleUnderline': true,
						'urlFontSize': 14,
						'textFontSize': 13,
						'textColor': '333',
					}
				},
				'related': {
					id:'relatedResults',
					styles:{
						'fontFamily': 'Arial',
						'titleFontSize' : 18,
						'titleColor': '3300b5',
						'titleUnderline': true,
						'urlFontSize': 14,
						'textFontSize': 13,
						'textColor': '333',
					}
				},
			},
			searchUrlFormat: '/search/?swpquery={searchTerm}&FID='+FID,
			clickTrackingUrl: 'https://trk.livelife.guide/postback?clickid='+CID,
			onComplete:function(details) {
				console.log(details);
				console.log(JSON.stringify(details.adDisplayUrls));
				/*jQuery(".cc-page-loader").css("display", "none"); 
				jQuery("#content").css("display", "block"); 
				jQuery("#footer").css("display", "block"); */
				
			},
			onError:function(details) {
				console.log(details);
				/*jQuery(".cc-page-loader").css("display", "none"); 
				jQuery("#content").css("display", "block"); 
				jQuery("#footer").css("display", "block"); */
				
			},
		});
	} else if((cookie_policy == 'no') && (continent_code == 'EU')){
		jQuery('#content').show();
		insp.search.doSearch({
			query: word,  // take care to encode the query term properly, refer to Best Practices Tip #7
			accessId: access_id,
			//accessId: 'purecontent.llguide1',
			signature: signature,
			deviceSegments: { mobile: mobile_id, tablet: tablet_id },
			page: page,
			adLinesCount : 3,
			gdprOptIn: false,
			category: 'web',
			linkTarget : '_blank',
			containers: {
				'main': {
					id:'mainResults',
					styles:{
						'fontFamily': 'Arial',
						'titleFontSize' : 18,
						'titleColor': '3300b5',
						'titleUnderline': true,
						'urlFontSize': 14,
						'textFontSize': 13,
						'textColor': '333',

					}
				},
				'top': {
					id:'ads_top',
					styles:{
						'fontFamily': 'Arial',
						'titleFontSize' : 18,
						'titleColor': '3300b5',
						'titleUnderline': true,
						'urlFontSize': 14,
						'textFontSize': 13,
						'textColor': '333',

					}
				},
				'bottom': {
					id:'ads_bottom',
					styles:{
						'fontFamily': 'Arial',
						'titleFontSize' : 18,
						'titleColor': '3300b5',
						'titleUnderline': true,
						'urlFontSize': 14,
						'textFontSize': 13,
						'textColor': '333',
					}
				},
					'related': {
					id:'relatedResults',
					styles:{
						'fontFamily': 'Arial',
						'titleFontSize' : 18,
						'titleColor': '3300b5',
						'titleUnderline': true,
						'urlFontSize': 14,
						'textFontSize': 13,
						'textColor': '333',
					}
				},
			},
			searchUrlFormat: '/search/?swpquery={searchTerm}&FID='+FID,
			clickTrackingUrl: 'https://trk.livelife.guide/postback?clickid='+CID,
			onComplete:function(details) {
				console.log(details);
				console.log(JSON.stringify(details.adDisplayUrls));
				/*jQuery(".cc-page-loader").css("display", "none"); 
				jQuery("#content").css("display", "block"); 
				jQuery("#footer").css("display", "block"); */
				
			},
			onError:function(details) {
				console.log(details);
				/*jQuery(".cc-page-loader").css("display", "none"); 
				jQuery("#content").css("display", "block"); 
				jQuery("#footer").css("display", "block"); */
				
			},
		});
	} else if(continent_code != 'EU'){
		jQuery('#content').show();
		insp.search.doSearch({
			query: word,  // take care to encode the query term properly, refer to Best Practices Tip #7
			accessId: access_id,
			//accessId: 'purecontent.llguide1',
			signature: signature,
			deviceSegments: { mobile: mobile_id, tablet: tablet_id },
			page: page,
			adLinesCount : 3,
			gdprOptIn: true,
			category: 'web',
			linkTarget : '_blank',
			containers: {
				'main': {
					id:'mainResults',
					styles:{
						'fontFamily': 'Arial',
						'titleFontSize' : 18,
						'titleColor': '3300b5',
						'titleUnderline': true,
						'urlFontSize': 14,
						'textFontSize': 13,
						'textColor': '333',

					}
				},
				'top': {
					id:'ads_top',
					styles:{
						'fontFamily': 'Arial',
						'titleFontSize' : 18,
						'titleColor': '3300b5',
						'titleUnderline': true,
						'urlFontSize': 14,
						'textFontSize': 13,
						'textColor': '333',

					}
				},
				'bottom': {
					id:'ads_bottom',
					styles:{
						'fontFamily': 'Arial',
						'titleFontSize' : 18,
						'titleColor': '3300b5',
						'titleUnderline': true,
						'urlFontSize': 14,
						'textFontSize': 13,
						'textColor': '333',
					}
				},
					'related': {
					id:'relatedResults',
					styles:{
						'fontFamily': 'Arial',
						'titleFontSize' : 18,
						'titleColor': '3300b5',
						'titleUnderline': true,
						'urlFontSize': 14,
						'textFontSize': 13,
						'textColor': '333',
					}
				},
			},
			searchUrlFormat: '/related-search/?swpquery={searchTerm}&FID='+FID,
			clickTrackingUrl: 'https://trk.livelife.guide/postback?clickid='+CID,
			onComplete:function(details) {
				console.log(details);
				console.log(JSON.stringify(details.adDisplayUrls));
				/*jQuery(".cc-page-loader").css("display", "none"); 
				jQuery("#content").css("display", "block"); 
				jQuery("#footer").css("display", "block"); */
				
			},
			onError:function(details) {
				console.log(details);
				/*jQuery(".cc-page-loader").css("display", "none"); 
				jQuery("#content").css("display", "block"); 
				jQuery("#footer").css("display", "block"); */
				
			},
		});
	}
} else {
	jQuery('#content').show();
}
		

	jQuery(window).scroll(function() {    
	var scroll = jQuery(window).scrollTop();
		//console.log(scroll);
		//>=, not <=
		if (scroll > 75 ) {
			jQuery(".cc-sidebar-content").addClass("cc-sidebar-stick");
		} else if (scroll < 75){
			jQuery(".cc-sidebar-content").removeClass("cc-sidebar-stick");
		}
	});

</script>
<?php } ?>

</body>

</html>