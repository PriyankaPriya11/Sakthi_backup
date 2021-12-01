// common code

$(document).ready(function () {
    $('#menu-toggle').on('click', function () {
        $('.menulist').addClass("menu-from-right")
    });
    
    $('.close-menu img').on('click', function () {
        $('.menulist').removeClass("menu-from-right");
    });
    
})


// common code

$(function () {
    $(window).load(function () {
        var e = new ScrollMagic.Controller
        o = TweenMax.staggerFromTo([".android", ".php", ".yii", ".joomla", ".wordpress", ".magento", ".codeigniter", ".react"], 1, {
            marginLeft: 0
        }, {
                marginLeft: -360,
                ease: Power2.easeOut
            }, .1);
        new ScrollMagic.Scene({
            triggerElement: "#triggerElem",
            duration: 600,
            offset: -50
        }).setTween(o).addTo(e);

        n = TweenMax.staggerFromTo([".ios", ".google-analitics", ".woo", ".flutter", ".prestashop", ".laravel", ".angular"], 1, {
            marginRight: 0
        }, {
                marginRight: -360,
                ease: Power2.easeOut
            }, .12);
        new ScrollMagic.Scene({
            triggerElement: "#triggerElem",
            duration: 600,
            offset: -50
        }).setTween(n).addTo(e);

        //small word animation
        var scaleScene = new ScrollMagic.Scene({ triggerElement: '.services' }) .setClassToggle('.what-we-do', 'fadeIn') .addTo(e);

        var scaleScene2 = new ScrollMagic.Scene({ triggerElement: '.technologies' }) .setClassToggle('.expertice-in', 'fadeIn') .addTo(e);

        var scaleScene3 = new ScrollMagic.Scene({ triggerElement: '.contact' }) .setClassToggle('.get-for-quote', 'fadeIn') .addTo(e);

        var scaleScene4 = new ScrollMagic.Scene({ triggerElement: '.case-study' }) .setClassToggle('.success-story', 'fadeIn') .addTo(e);

        var scaleScene5 = new ScrollMagic.Scene({ triggerElement: '.parcel-image-div' }) .setClassToggle('.flight-left', 'flyleft') .addTo(e);

        var scaleScene5 = new ScrollMagic.Scene({ triggerElement: '.parcel-image-div' }) .setClassToggle('.flight-right', 'flyright') .addTo(e);

        //para title
        var slideScene = new ScrollMagic.Scene({ triggerElement: '.web-app-service' }).setClassToggle('.web-app-service .web-app-title', 'slideInRight').addTo(e);
        var slideScene2 = new ScrollMagic.Scene({ triggerElement: '.mobile-app-service' }).setClassToggle('.mobile-app-title', 'slideInLeft').addTo(e);
        var slideScene3 = new ScrollMagic.Scene({ triggerElement: '.web-app-service2' }) .setClassToggle('.wep-app-title-two', 'slideInRight') .addTo(e);


        var scaleScene3 = new ScrollMagic.Scene({ triggerElement: '.footer-contact' })
        .setClassToggle('.get-for-quote', 'fadeIn')
        .addTo(e);

        //para title

        var slideScene = new ScrollMagic.Scene({ triggerElement: '.customer-choose'})
        .setClassToggle('.customer-choose .web-app-title', 'slideInLeft')
        .addTo(e);
        var scaleScene3 = new ScrollMagic.Scene({triggerElement: '.customer-choose' })
        .setClassToggle('.customer-choose .image-one img', 'slideInRight')
        .addTo(e);

    });
});