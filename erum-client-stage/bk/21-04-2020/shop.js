jQuery(document).ready(function ($) {
    if ($(window).width() >= 1024) {
        if (jQuery('body').hasClass('archive')) {
            $('.products').masonry({
                itemSelector: '.product',
                isAnimated: true
            });
        }
    }
});
jQuery(document).ready(function () {
    jQuery('section.related.products h2').text('Tenemos más opciones');
});
jQuery(document).ready(function () {
    if (jQuery(window).width() <= 1023) {
        jQuery(".woocommerce-result-count").click(function () {
            console.log("salkrljthyijy")
            jQuery('.woocommerce-result-count').not(this).removeClass('ad-cl');
            jQuery('#sidebar, p.woocommerce-result-count, .woof_products_top_panel, nav.woocommerce-breadcrumb, #primary').toggleClass('ad-cl');
        });
        jQuery(".widget.widget-woof h3").click(function () {
            jQuery('.widget.widget-woof h3').not(this).removeClass('ad-cl');
            jQuery('#sidebar, p.woocommerce-result-count, .woof_products_top_panel, nav.woocommerce-breadcrumb, #primary').toggleClass('ad-cl');
        })
    }
});
    // jQuery(document).ready(function(){
    //     console.log(jQuery(window));
    //     jQuery(window).scroll(function(e){
    //     // parallaxScroll();

    //         if (jQuery(window).width() > 1440||jQuery(window).width()<2345){	
    //             parallaxScroll2();
    //         }
    //         if (jQuery(window).width() <= 1440){	
    //                 parallaxScroll();
    //             }
    //         if (jQuery(window).width() > 2345){	
    //                 parallaxScroll3();
    //         }
    //     });
    // });
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
    04 - 03 - 2020   // function parallaxScroll(){
	// var scrolled = jQuery(window).scrollTop();
	// 	jQuery('li.post-121 h2.woocommerce-loop-product__title').css('top',(57-(scrolled*0.15))+'%');
    //     jQuery('img.imgAnimate121').css('top',(45-(scrolled*.75))+'%');
    //     jQuery('li.post-126 h2.woocommerce-loop-product__title').css('top',(120-(scrolled*0.15))+'%');
    //     jQuery('img.imgAnimate126').css('top',(45-(scrolled*.75))+'%');
    //     jQuery('li.post-128 h2.woocommerce-loop-product__title').css('top',(180-(scrolled*0.15))+'%');
    //     jQuery('img.imgAnimate128').css('top',(45-(scrolled*.75))+'%');
    //     jQuery('li.post-124 h2.woocommerce-loop-product__title').css('top',(255-(scrolled*0.15))+'%');
	// 	jQuery('img.imgAnimate124').css('top',(45-(scrolled*.75))+'%');
    // }
    // function parallaxScroll2(){
    // var scrolled = jQuery(window).scrollTop();
    //         jQuery('li.post-121 h2.woocommerce-loop-product__title').css('top',(50-(scrolled*0.12))+'%');
    //         jQuery('img.imgAnimate121').css('top',(45-(scrolled*.75))+'%');
    //         jQuery('li.post-126 h2.woocommerce-loop-product__title').css('top',(130-(scrolled*0.12))+'%');
    //         jQuery('img.imgAnimate126').css('top',(45-(scrolled*.75))+'%');
    //         jQuery('li.post-128 h2.woocommerce-loop-product__title').css('top',(205-(scrolled*0.12))+'%');
    //         jQuery('img.imgAnimate128').css('top',(45-(scrolled*.75))+'%');
    //         jQuery('li.post-124 h2.woocommerce-loop-product__title').css('top',(275-(scrolled*0.12))+'%');
	// 	    jQuery('img.imgAnimate124').css('top',(45-(scrolled*.75))+'%');
    // }
    // function parallaxScroll3(){
    // var scrolled = jQuery(window).scrollTop();
    //             jQuery('li.post-121 h2.woocommerce-loop-product__title').css('top',(60-(scrolled*0.11))+'%');
    //             jQuery('img.imgAnimate121').css('top',(45-(scrolled*.75))+'%');
    //             jQuery('li.post-126 h2.woocommerce-loop-product__title').css('top',(160-(scrolled*0.11))+'%');
    //             jQuery('img.imgAnimate126').css('top',(45-(scrolled*.75))+'%');
    //             jQuery('li.post-128 h2.woocommerce-loop-product__title').css('top',(250-(scrolled*0.11))+'%');
    //             jQuery('img.imgAnimate128').css('top',(45-(scrolled*.75))+'%');
    //             jQuery('li.post-124 h2.woocommerce-loop-product__title').css('top',(345-(scrolled*0.11))+'%');
	// 	        jQuery('img.imgAnimate124').css('top',(45-(scrolled*.75))+'%');
    // }
//  }); 

