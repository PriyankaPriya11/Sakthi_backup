(function ($) {


    "use strict";

    AOS.init();

    window.onload = function () {
        lax.setup() // init

        const updateLax = () => {
            lax.update(window.scrollY)
            window.requestAnimationFrame(updateLax)
        }

        window.requestAnimationFrame(updateLax)
    }

    lax.addPreset("backText", function () {
        return {
            "data-lax-rotate": "(-vh*2) 1000, (-vh*0.5) 0"
        }
    })

    Pace.on('done', function () {
        $('.page-trans-top').addClass('page-load-tr');
        $('.page-trans-bottom').addClass('page-load-tr');
        $('.pace-progress').css({
            color: '#BA9972',

        });

        setTimeout(function () {
            $('.pace-progress').css({
                letterSpacing: '30px',
                opacity: 0,
            });
        }, 800);

        setTimeout(function () {

            $('.page-trans-top').removeClass('page-trans-top-before');
            $('.page-trans-bottom').removeClass('page-trans-bottom-before');
        }, 1000);

        setTimeout(function () {

            $('.page-trans-top').removeClass('page-load-tr');
            $('.page-trans-bottom').removeClass('page-load-tr');
        }, 1600);

    });


    //Reset Start



    if ($(window).width() < 850) {

        $('*').removeClass('lax');

    }


    $('.site-footer a').addClass('ulink');

    if ($('.fw-page-builder-content').length > 0) {
        $('.page-content').removeClass('container');
    };


    if ($('.fs-dark-skin').length) {
        $('.elg-navigation').addClass('dark-menu');
        $('.site-content a, .fs-footer a').addClass('white-hover');
    }

    if ($('.dark-skin').length) {
        $('body').css({
            background: '#212121'
        });
        $('.elg-navigation').addClass('dark-menu');
        $('.site-content a, .fs-footer a').addClass('white-hover');
    }



    if ($('.dark-menu').length) {
        $('.dark-logo').css({
            display: 'none',

        });

        $('.light-logo').css({

            display: 'block',
        });
    }

    //Reset End

    // Main Navigation Start

    $('.elg-navigation').on('click', function () {

        var clicks = $(this).data('clicks');
        if (clicks) {

            $('.main-navigation li').removeClass('menu-item-comes');
            $('.fs-menu-seperator').removeClass('seperator-top');
            $('.menu-sidebar-foundation').removeClass('menu-sidebar-comes');
            setTimeout(function () {
                $('.elg-nav-line:nth-child(1)').removeClass('elg-nav-line-1');
                $('.elg-nav-line:nth-child(3)').removeClass('elg-nav-line-2');
                $('.elg-nav-line:nth-child(2)').css({
                    opacity: 1
                });
                $('.fs-menu').removeClass('fs-menu-in');
                $('.elg-navigation').removeClass('menu-org');
            }, 500);
        } else {
            $('.elg-navigation').addClass('menu-org');
            $('.elg-nav-line:nth-child(1)').addClass('elg-nav-line-1');
            $('.elg-nav-line:nth-child(3)').addClass('elg-nav-line-2');
            $('.elg-nav-line:nth-child(2)').css({
                opacity: 0
            });
            $('.fs-menu').addClass('fs-menu-in');
            setTimeout(function () {
                $('.fs-menu-seperator').addClass('seperator-top');
            }, 250);
            setTimeout(function () {
                $('.main-navigation li').addClass('menu-item-comes');
                $('.menu-sidebar-foundation').addClass('menu-sidebar-comes');
            }, 500);
        }
        $(this).data("clicks", !clicks);
    });

    $('#primary-menu li a').on('click', function () {
        $('.main-navigation li').removeClass('menu-item-comes');
        $('.fs-menu-seperator').removeClass('seperator-top');
        $('.menu-sidebar-foundation').removeClass('menu-sidebar-comes');
        setTimeout(function () {
            $('.elg-nav-line:nth-child(1)').removeClass('elg-nav-line-1');
            $('.elg-nav-line:nth-child(3)').removeClass('elg-nav-line-2');
            $('.fs-menu').removeClass('fs-menu-in');
            $('.elg-navigation').removeClass('menu-org');
        }, 500);

    });

    $('.sub-menu').hide();
    $('.widget .sub-menu').show();

    var menuHeight = $('#primary-menu').outerHeight();
    var menuLength = $('#primary-menu > li').length;
    var menuFinalHeight = menuLength * 30;
    var widgetHeight = menuHeight - menuFinalHeight + 'px';


    $('.menu-sidebar-foundation').css('height', widgetHeight);

    $('.menu-item-has-children').prepend('<span class="dropdown-toggle">+</span>');

    $('.dropdown-toggle').on('click', function () {
        var clickedMenuItem = $(this).parent();
        clickedMenuItem.children('.sub-menu').slideToggle(500);

        $(this).toggleClass('dropdown-toggle-anim');

    });

    // Main Navigation End

    //---------------------------------//

    // Blog List Start

    $('.elg-blog-post').on('mouseenter', function () {

        var thmb = $(this).find('.post-thumbnail');
        thmb.addClass('post-thumbnail-comes');
        $('.elg-blog-post').css('opacity', '0.3');
        $(this).css('opacity', '1')
    });

    $('.elg-blog-post').on('mouseleave', function () {

        var thmb = $(this).find('.post-thumbnail');

        thmb.removeClass('post-thumbnail-comes');
        $('.elg-blog-post').css('opacity', '1');
    });

    // Blog List End

    //---------------------------------//

    // Portfolio Slideshow Start


    if ($('.portfolio-showcase').length) {

        var pfSlider = new Swiper('.portfolio-swiper', {
            effect: 'slide',
            fadeEffect: {
                crossFade: true
            },
            navigation: {
                nextEl: '.slide-next',
                prevEl: '.slide-prev',
            },
            speed: 2500,
            allowTouchMove: false,

            pagination: {
                el: '.current',
                type: 'fraction',
                renderFraction: function (currentClass) {
                    return '<p class="' + currentClass + '"></p>';
                },
            },
            breakpoints: {
                850: {
                    slidesPerView: 1,
                    allowTouchMove: true,

                }

            },



        });

        var titleSlider = new Swiper('.titles-swiper', {
            effect: 'slide',
            speed: 1,
            fadeEffect: {
                crossFade: true
            },
            navigation: {
                nextEl: '.slide-next',
                prevEl: '.slide-prev',
            },
            speed: 2000,
            allowTouchMove: false,
            breakpoints: {
                850: {
                    slidesPerView: 1,

                }

            }

        });

        if ($(window).width() < 850) {

            pfSlider.controller.control = titleSlider;


        }


        var number = $('.swiper-pagination-current').text();
        if (number < 10) {
            $('.swiper-pagination-current').prepend('0');
        };

        pfSlider.on('slideChange', function () {
            $('.single-slide-img').addClass('img-changing');

            setTimeout(function () {
                $('.single-slide-img').removeClass('img-changing');
            }, 1250);

            var number = $('.swiper-pagination-current').text();
            if (number < 10) {
                $('.swiper-pagination-current').prepend('0');
            };
        });

        $('.take-a-look').mouseenter(function () {
            $('.single-slide-img').addClass('img-hover');
            $('.single-slide-heading').addClass('lp');

        });

        $('.take-a-look').mouseleave(function () {
            $('.single-slide-img').removeClass('img-hover');
            $('.single-slide-heading').removeClass('lp');

        });



        var slideTotal = $('.single-slide').length;

        $('.total p').html(slideTotal);

        if (slideTotal < 10) {
            $('.total p').prepend('0');
        }




    };








    // Portfolio Slideshow End

    // Portfolio List Start

    $('.p-list-image').hide();
    $('.p-list-item-link').on('mouseenter', function () {
        $('.p-list-item-link').css('opacity', '0.2');

        $(this).css('opacity', '1');
        var selectedImage = $(this).data('img');
        $('.p-list-image').fadeOut();
        $(selectedImage).fadeIn();

    });

    $('.p-list-item-link').on('mouseleave', function () {

        $('.p-list-item-link').css('opacity', '1')
        $('.p-list-image').fadeOut();


    });



    // Portfolio List End

    // Portfolio FS Slideshow Start

    var fsSlider = new Swiper('.portfolios-fs', {
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        navigation: {
            nextEl: '.slide-next',
            prevEl: '.slide-prev',
        },
        speed: 1200,
        pagination: {
            el: '.fs-slide-fraction',
            type: 'fraction',
            renderFraction: function (currentClass, totalClass) {
                return '<p class="' + currentClass + '"></p>' +
                    '<p class="' + totalClass + '"></p>';
            },
        },
        loop: true,

    });





    // Portfolio FS Slideshow eND

    // Portfolio Carousel Start


    var carousel = new Swiper('.portfolios-carousel', {
        slidesPerView: '5',
        mousewheel: {
            invert: false,
        },
        pagination: {
            el: '.carousel-progress',
            type: 'progressbar',
        },
        breakpoints: {
            850: {
                slidesPerView: 1,
                allowTouchMove: true,
            }

        }



    });


    // Portfolio Carousel End


    $('.masonry-p-item:even .masonry-p-item-inner').addClass('inner-even');
    $('.masonry-p-item:odd .masonry-p-item-inner').addClass('inner-odd');






    // external js: masonry.pkgd.js, imagesloaded.pkgd.js

    // init Masonry
    var $grid = $('.grid').masonry({
        itemSelector: '.grid-item',
        percentPosition: true,
        columnWidth: '.grid-sizer',
        horzontalOrder: true

    });
    // layout Masonry after each image loads
    $grid.imagesLoaded().progress(function () {
        $grid.masonry();
    });



    $('.dark-switch').on('click', function () {
        $('.fullscreen').toggleClass('fs-dark-skin');
        $('.elg-navigation').toggleClass('dark-menu');
    });

    $('.dark-switch').on('click', function () {
        $('.portfolio-masonry').toggleClass('dark-skin');
    });




})(jQuery);