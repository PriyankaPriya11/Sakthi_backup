



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
    
    if (jQuery(window).width() > 1440||jQuery(window).width()<2345){	
        parallaxScroll2();
        }
        if (jQuery(window).width() <= 1440){	
                parallaxScroll();
            }
        if (jQuery(window).width() > 2345){	
                parallaxScroll3();
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
		jQuery('li.post-121 h2.woocommerce-loop-product__title').css('top',(50-(scrolled*0.15))+'%');
        jQuery('img.imgAnimate121').css('top',(45-(scrolled*.75))+'%');
        jQuery('li.post-126 h2.woocommerce-loop-product__title').css('top',(115-(scrolled*0.15))+'%');
        jQuery('img.imgAnimate126').css('top',(45-(scrolled*.75))+'%');
        jQuery('li.post-128 h2.woocommerce-loop-product__title').css('top',(170-(scrolled*0.15))+'%');
        jQuery('img.imgAnimate128').css('top',(45-(scrolled*.75))+'%');
        jQuery('li.post-124 h2.woocommerce-loop-product__title').css('top',(220-(scrolled*0.15))+'%');
		jQuery('img.imgAnimate124').css('top',(45-(scrolled*.75))+'%');
    }
    function parallaxScroll2(){
    var scrolled = jQuery(window).scrollTop();
            jQuery('li.post-121 h2.woocommerce-loop-product__title').css('top',(50-(scrolled*0.12))+'%');
            jQuery('img.imgAnimate121').css('top',(45-(scrolled*.75))+'%');
            jQuery('li.post-126 h2.woocommerce-loop-product__title').css('top',(115-(scrolled*0.12))+'%');
            jQuery('img.imgAnimate126').css('top',(45-(scrolled*.75))+'%');
            jQuery('li.post-128 h2.woocommerce-loop-product__title').css('top',(170-(scrolled*0.12))+'%');
            jQuery('img.imgAnimate128').css('top',(45-(scrolled*.75))+'%');
            jQuery('li.post-124 h2.woocommerce-loop-product__title').css('top',(230-(scrolled*0.12))+'%');
		    jQuery('img.imgAnimate124').css('top',(45-(scrolled*.75))+'%');
    }
    function parallaxScroll3(){
    var scrolled = jQuery(window).scrollTop();
                jQuery('li.post-121 h2.woocommerce-loop-product__title').css('top',(60-(scrolled*0.11))+'%');
                jQuery('img.imgAnimate121').css('top',(45-(scrolled*.75))+'%');
                jQuery('li.post-126 h2.woocommerce-loop-product__title').css('top',(140-(scrolled*0.11))+'%');
                jQuery('img.imgAnimate126').css('top',(45-(scrolled*.75))+'%');
                jQuery('li.post-128 h2.woocommerce-loop-product__title').css('top',(212-(scrolled*0.11))+'%');
                jQuery('img.imgAnimate128').css('top',(45-(scrolled*.75))+'%');
                jQuery('li.post-124 h2.woocommerce-loop-product__title').css('top',(310-(scrolled*0.12))+'%');
		        jQuery('img.imgAnimate124').css('top',(45-(scrolled*.75))+'%');
    }
 }); 

