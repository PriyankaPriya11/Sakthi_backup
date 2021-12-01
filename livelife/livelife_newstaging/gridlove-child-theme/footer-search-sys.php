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

<?php wp_footer(); 
if(isset($_REQUEST['swpquery'])){ 
	$word = $_REQUEST['swpquery']; } 
	$geo_detail = get_currency_code();
	$country_code = $geo_detail['geoplugin_countryCode'];
	$continent_code = $geo_detail['geoplugin_continentCode'];?>

<script async type="text/javascript" src="https://s.flocdn.com/@s1/embedded-search/embedded-search-1.js"></script>

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
</script>
<script>
	
	jQuery('#cookie_action_close_header').click(function() {
    	location.reload();
	});
	jQuery('#cookie_action_close_header_reject').click(function() {
    	location.reload();
	});
	jQuery('.search_field').click(function() {
    	jQuery('.search_field').val('');
	});
	jQuery('.search_field').blur(function(e){ 
		var me = this; 
		if(jQuery(me).val() == ""){ 
			jQuery(me).val('<?php echo $word; ?>'); 
		} 
	});
	
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
		//console.log(mobile_id);
	} else if(isTab == true) {
		//console.log(tablet_id);
	} else {
		//console.log(access_id);
	}
	if((cookie_policy == null) && (continent_code == 'EU') ){
		jQuery(".layout-simple.CookieCompliance").css("display", "block");
	} else if((cookie_policy != null) && (continent_code == 'EU')){
		jQuery(".layout-simple.CookieCompliance").css("display", "none");
	} else {
		jQuery(".layout-simple.CookieCompliance").css("display", "none");
	}
	
	/*if(result_count > 3){
		jQuery('#content').show();
	} else {
		jQuery('#content').show();
	}*/
		
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
<script>
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
var conitent_code = '<?php echo $continent_code; ?>';
console.log(conitent_code);
if( conitent_code == 'EU' ){
trigger.addEventListener("click", toggleModal);
closeButton.addEventListener("click", toggleModal);
window.addEventListener("click", windowOnClick);
}
jQuery(document).ready(function()
{
	jQuery('body').on('click','.cc-close-cookie',function()
	{
		jQuery("#cookie-law-info-bar").css("display","none");
		jQuery("#cookie-law-info-again").css("display","block");	
	}
	);
}
);
</script>
</body>

</html>