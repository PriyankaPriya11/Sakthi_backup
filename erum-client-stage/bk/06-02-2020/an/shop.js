



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
jQuery(document).ready(function(){
    console.log(jQuery(window));
    jQuery(window).scroll(function(e){
    // parallaxScroll();
    
    if (jQuery(window).width() > 1440){	
        parallaxScroll2();
        }
        if (jQuery(window).width() <= 1440){	
                parallaxScroll();
            }
    });
});
    // jQuery(document).ready(function(){

    // if (jQuery(window).width() < 1440){	
    //     parallaxScroll();
    // }
    // });
    // jQuery(document).ready(function(){

    //     if (jQuery(window).width() > 1440){	
    //         parallaxScroll2();
    //     }
    //     });
    function parallaxScroll(){
	var scrolled = jQuery(window).scrollTop();
		jQuery('span#parallax-bg-3328K').css('top',(50-(scrolled*0.15))+'%');
        jQuery('img.imgAnimate28').css('top',(45-(scrolled*.75))+'%');
        jQuery('span#parallax-bg-3330K').css('top',(105-(scrolled*0.15))+'%');
        jQuery('img.imgAnimate32').css('top',(45-(scrolled*.75))+'%');
        jQuery('span#parallax-bg-3350K').css('top',(160-(scrolled*0.15))+'%');
		jQuery('img.imgAnimate33').css('top',(45-(scrolled*.75))+'%');
    }
    function parallaxScroll2(){
        var scrolled = jQuery(window).scrollTop();
            jQuery('span#parallax-bg-3328K').css('top',(50-(scrolled*0.15))+'%');
            jQuery('img.imgAnimate28').css('top',(45-(scrolled*.75))+'%');
            jQuery('span#parallax-bg-3330K').css('top',(115-(scrolled*0.15))+'%');
            jQuery('img.imgAnimate32').css('top',(45-(scrolled*.75))+'%');
            jQuery('span#parallax-bg-3350K').css('top',(200-(scrolled*0.15))+'%');
            jQuery('img.imgAnimate33').css('top',(45-(scrolled*.75))+'%');
        }
 }); 

