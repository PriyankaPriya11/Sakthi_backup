 



jQuery(document).ready(function(){

    jQuery(".woocommerce-result-count").click(function() {
        console.log("salkrljthyijy")
       jQuery('.woocommerce-result-count').not(this).removeClass('ad-cl');
       jQuery('#sidebar, p.woocommerce-result-count, .woof_products_top_panel, nav.woocommerce-breadcrumb, #primary').toggleClass('ad-cl');
   });
   jQuery(".widget.widget-woof h3").click(function() {
    jQuery('.widget.widget-woof h3').not(this).removeClass('ad-cl');
    jQuery('#sidebar, p.woocommerce-result-count, .woof_products_top_panel, nav.woocommerce-breadcrumb, #primary').toggleClass('ad-cl');
})
    jQuery(window).scroll(function(e){
    parallaxScroll();
    });
    
    function parallaxScroll(){
	var scrolled = jQuery(window).scrollTop();
		jQuery('span#parallax-bg-3328K').css('top',(50-(scrolled*0.15))+'%');
        jQuery('img.imgAnimate28').css('top',(45-(scrolled*.75))+'%');
        jQuery('span#parallax-bg-3330K').css('top',(115-(scrolled*0.12))+'%');
        jQuery('img.imgAnimate32').css('top',(45-(scrolled*.75))+'%');
        jQuery('span#parallax-bg-3350K').css('top',(170-(scrolled*0.12))+'%');
		jQuery('img.imgAnimate33').css('top',(45-(scrolled*.75))+'%');
	}
 
 }); 

