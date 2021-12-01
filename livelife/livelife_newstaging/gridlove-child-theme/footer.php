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
	jQuery('.logged_user').hover(
		function () {
			jQuery('.logged_user_menu').show();
		}, 
		function () {
			jQuery('.logged_user_menu').hide();
	});
</script>
<?php if((!is_page(8214)) && (!is_page(8294))): ?>
<script>
	jQuery('.search_field').click(function() {
    	jQuery('.search_field').val('');
	});
	jQuery('.search_field').blur(function(e){ 
		var me = this; 
		if(jQuery(me).val() == ""){ 
			jQuery(me).val('Search Guides...'); 
		} 
	});
</script>
<?php endif; ?>
<?php 
	if (is_search()){
		if(isset($_REQUEST['s'])){ 
			$word = $_REQUEST['s']; ?>
<script>
	var word = '<?php echo $word; ?>';
	jQuery('.gridlove-post .box-inner-ellipsis .entry-title.h3 a').highlight(word,{
		wholeWord: true,
		background: "#ffff",
  		color: "#3300b5",
  		bold: true,
	});
</script>
<?php } } ?>
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
	//console.log(cookie_policy);
	
</script>
<?php 
	if((is_page(8214)) || (is_page(8294)) || (is_page(11163))){
		if(isset($_REQUEST['swpquery'])){ 
			$word = $_REQUEST['swpquery'];
			if(isset($_REQUEST['swppg'])){
				$page = $_REQUEST['swppg'];
			}
			if(isset($_REQUEST['FID'])){
				$FID = $_REQUEST['FID'];
			}
			if(isset($_REQUEST['fid'])){
				$FID = $_REQUEST['fid'];
			}
			if(isset($_REQUEST['cid'])){
				$CID = $_REQUEST['cid'];
			}
			if(isset($_REQUEST['CID'])){
				$CID = $_REQUEST['CID'];
			}
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
<!--script>
	(function(a){(jQuery.browser=jQuery.browser||{}).mobile=/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))})(navigator.userAgent||navigator.vendor||window.opera);
</script-->
<script>
	// 16-02-2019

	jQuery(document).ready(function(){
		var winWidth =  jQuery(window).width();
		if(winWidth < 768) {
		jQuery('.search.search-results .gridlove-site-branding img').attr('src','<?php echo site_url() ?>/wp-content/uploads/2018/04/livelife-logonew_small.png')
		}
	}) ;

	// 16-02-2019

	/*jQuery(".google-clk").on("click", function(){
		console.log('GTAG Tigger');
		gtag('event', 'submit', {'event_category': 'Related_Search','event_label': 'Related_Result_link'});
	});*/

</script>
<script>

	jQuery('#cookie_action_close_header').click(function() {
    	location.reload();
	});
	jQuery('#cookie_action_close_header_reject').click(function() {
    	location.reload();
	});
	
	var win_width = jQuery( window ).width();
	//console.log(win_width);
	/*var device = {};
	if(win_width > 981){
		device = {
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
		}
	} else {
		device = {
			id:'relatedResults-mobile',
			styles:{
				'fontFamily': 'Arial',
				'titleFontSize' : 18,
				'titleColor': '3300b5',
				'titleUnderline': true,
				'urlFontSize': 14,
				'textFontSize': 13,
				'textColor': '333',
			}
		}
	}*/
	var device = {
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
		}
	//console.log(device);

	var word = '<?php echo $word; ?>';
	var page = '<?php echo ($page != '') ? $page : 1; ?>';
	var result_count = '<?php echo $GLOBALS[ 'result_count' ]; ?>';
	var FID = '<?php  echo $FID; ?>';
	var CID = '<?php  echo $CID; ?>';
	var signature = '<?php echo infospace_getsignature($word); ?>';
	var show_the_content='<?php echo $show_the_content; ?>';
	var country_code = '<?php echo $country_code; ?>';
	var continent_code = '<?php echo $continent_code; ?>';
	
	jQuery('#search_field').click(function() {
    	jQuery('#search_field').val('');
	});
	jQuery('#search_field').blur(function(e){ 
		var me = this; 
		if(jQuery(me).val() == ""){
			jQuery(me).val('<?php echo $word; ?>');
		} 
	});
	//console.log(signature);
	//console.log(country_code);
	//console.log(continent_code);
	//console.log(show_the_content);
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
	//console.log(mobile_id);
	//console.log(tablet_id);
	//console.log(FID);
	//console.log(access_id);
	//console.log(word);
	if ((result_count > 3) && (result_count < 7)){
		access_id = 'purecontent.llguide'+FID+'b';
	}
	var isMobile = false; //initiate as false
	// device detection
	if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
	|| /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) { 
		isMobile = true;
	}
	var isTab = false;
	if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)){
		isTab = true;
	}	
	if(isMobile == true){
		console.log(mobile_id);
	} else if(isTab == true) {
		console.log(tablet_id);
	} else {
		console.log(access_id);
	}
	
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
				'related': device,
				'right': {
					id:'rightResults',
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
			searchUrlFormat: '/related-search/?swpquery={searchTerm}&FID='+FID+'&CID='+CID,
			clickTrackingUrl: 'https://trk.livelife.guide/postback?clickid='+CID,
			onComplete:function(details) {
				console.log(details);
				//console.log(details.topResultCount);
				//console.log(details.bottomResultCount);
				//console.log(details.rightResultCount);
				//console.log(details.relatedResultCount);
				//console.log(JSON.stringify(details.adDisplayUrls));
				if(details.mainResultCount > 0 ){
					jQuery(".layout-simple.mainResults").css("display", "block");
				}
				if(details.topResultCount > 0 ){
					jQuery(".layout-simple.ads_top").css("display", "block");
				}
				if(details.bottomResultCount > 0 ){
					jQuery(".layout-simple.ads_bottom").css("display", "block");
				}
				if(details.relatedResultCount > 0 ){
					jQuery(".layout-simple.cc-mobile-relatedResults").css("display", "block");
				}
				/*if(details.deviceType == 'Desktop') { 
					if(details.relatedResultCount > 0 ){
						jQuery(".cc-sidebar-content").css("display", "block");
					}
				} else {
					if(details.relatedResultCount > 0 ){
						jQuery(".layout-simple.cc-mobile-relatedResults").css("display", "block");
					}
				}*/
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
				'related': device,
				'right': {
					id:'rightResults',
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
			searchUrlFormat: '/related-search/?swpquery={searchTerm}&FID='+FID+'&CID='+CID,
			clickTrackingUrl: 'https://trk.livelife.guide/postback?clickid='+CID,
			onComplete:function(details) {
				console.log(details);
				//console.log(details.topResultCount);
				//console.log(details.bottomResultCount);
				//console.log(details.rightResultCount);
				//console.log(details.relatedResultCount);
				//console.log(JSON.stringify(details.adDisplayUrls));
				if(details.mainResultCount > 0 ){
					jQuery(".layout-simple.mainResults").css("display", "block");
				}
				if(details.topResultCount > 0 ){
					jQuery(".layout-simple.ads_top").css("display", "block");
				}
				if(details.bottomResultCount > 0 ){
					jQuery(".layout-simple.ads_bottom").css("display", "block");
				}
				if(details.relatedResultCount > 0 ){
					jQuery(".layout-simple.cc-mobile-relatedResults").css("display", "block");
				}
				/*if(details.deviceType == 'Desktop') { 
					if(details.relatedResultCount > 0 ){
						jQuery(".cc-sidebar-content").css("display", "block");
					}
				} else {
					if(details.relatedResultCount > 0 ){
						jQuery(".layout-simple.cc-mobile-relatedResults").css("display", "block");
					}
				}*/
				/*jQuery(".cc-page-loader").css("display", "none"); 
				jQuery("#content").css("display", "block"); 
				jQuery("#footer").css("display", "block"); */
				
			},
			onError:function(details) {
				//console.log(details);
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
				'related': device,
				'right': {
					id:'rightResults',
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
			searchUrlFormat: '/related-search/?swpquery={searchTerm}&FID='+FID+'&CID='+CID,
			clickTrackingUrl: 'https://trk.livelife.guide/postback?clickid='+CID,
			onComplete:function(details) {
				console.log(details);
				//console.log(details.topResultCount);
				//console.log(details.bottomResultCount);
				//console.log(details.rightResultCount);
				//console.log(details.relatedResultCount);
				//console.log(JSON.stringify(details.adDisplayUrls));
				if(details.mainResultCount > 0 ){
					jQuery(".layout-simple.mainResults").css("display", "block");
				}
				if(details.topResultCount > 0 ){
					jQuery(".layout-simple.ads_top").css("display", "block");
				}
				if(details.bottomResultCount > 0 ){
					jQuery(".layout-simple.ads_bottom").css("display", "block");
				}
				if(details.relatedResultCount > 0 ){
					jQuery(".layout-simple.cc-mobile-relatedResults").css("display", "block");
				}
				/*if(details.deviceType == 'Desktop') { 
					if(details.relatedResultCount > 0 ){
						jQuery(".cc-sidebar-content").css("display", "block");
					}
				} else {
					if(details.relatedResultCount > 0 ){
						jQuery(".layout-simple.cc-mobile-relatedResults").css("display", "block");
					}
				}*/
				/*jQuery(".cc-page-loader").css("display", "none"); 
				jQuery("#content").css("display", "block"); 
				jQuery("#footer").css("display", "block"); */
				
			},
			onError:function(details) {
				//console.log(details);
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
		////console.log(scroll);
		//>=, not <=
		if (scroll > 75 ) {
			jQuery(".cc-sidebar-content").addClass("cc-sidebar-stick");
		} else if (scroll < 75){
			jQuery(".cc-sidebar-content").removeClass("cc-sidebar-stick");
		}
	});

</script>

<?php } } ?>
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
</script>
</body>

</html>