<?php 
/**
 * Template Name: map-section
 */
get_header(); ?>

<style>
#map {
    position: absolute;
    top: 0;
    bottom: 0;
    width: 100%;
}


.leaflet-marker-icon.my-div-icon.leaflet-zoom-animated.leaflet-interactive {
    background-color: transparent;
    height: 32px !important;
    width: 32px !important;
}



.leaflet-container .leaflet-tile-pane img {
    opacity: 0.8 !important;
}

#map .cc-overlayimg {
    z-index: 1;
    height: 100% !important;
    width: 100% !important;
    opacity: 0.6;
}
</style>








</head>

<body>


    <div class="cc-map-section">


        <div id='map'>
            <img class="leaflet-image-layer cc-overlayimg" src="/wp-content/themes/erum/map/assets/image/whitebg.png" alt="">
        </div>

        <div class="cc-map-carousel">

            <div class="cc-map-carousel-slider">

                <div class="bxslider">

                    <div class="slide" data-slideval="8">
                        <div class="cc-map-details">
                            <h3>ERUM ALGERIE 8</h3>
                            <hr>
                            <div class="cc-md">
                                <div class="cc-md-img">
                                    <img src="/wp-content/themes/erum/map/assets/image/flag1.png" alt="">
                                </div>
                                <div class="cc-md-content">
                                    <p>OFICINA COMERCIAL</p>
                                    <p>erum.algerie@erumgroup.com</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="slide" data-slideval="1">
                        <div class="cc-map-details">
                            <h3>ERUM ALGERIE 1</h3>
                            <hr>
                            <div class="cc-md">
                                <div class="cc-md-img">
                                    <img src="/wp-content/themes/erum/map/assets/image/flag1.png" alt="">
                                </div>
                                <div class="cc-md-content">
                                    <p>OFICINA COMERCIAL</p>
                                    <p>erum.algerie@erumgroup.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide" data-slideval="2">
                        <div class="cc-map-details">
                            <h3>ERUM ALGERIE 2</h3>
                            <hr>
                            <div class="cc-md">
                                <div class="cc-md-img">
                                    <img src="/wp-content/themes/erum/map/assets/image/flag1.png" alt="">
                                </div>
                                <div class="cc-md-content">
                                    <p>OFICINA COMERCIAL</p>
                                    <p>erum.algerie@erumgroup.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide" data-slideval="3">
                        <div class="cc-map-details">
                            <h3>ERUM ALGERIE 3</h3>
                            <hr>
                            <div class="cc-md">
                                <div class="cc-md-img">
                                    <img src="/wp-content/themes/erum/map/assets/image/flag1.png" alt="">
                                </div>
                                <div class="cc-md-content">
                                    <p>OFICINA COMERCIAL</p>
                                    <p>erum.algerie@erumgroup.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide" data-slideval="4">
                        <div class="cc-map-details">
                            <h3>ERUM ALGERIE 4</h3>
                            <hr>
                            <div class="cc-md">
                                <div class="cc-md-img">
                                    <img src="/wp-content/themes/erum/map/assets/image/flag1.png" alt="">
                                </div>
                                <div class="cc-md-content">
                                    <p>OFICINA COMERCIAL</p>
                                    <p>erum.algerie@erumgroup.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide" data-slideval="5">
                        <div class="cc-map-details">
                            <h3>ERUM ALGERIE 5</h3>
                            <hr>
                            <div class="cc-md">
                                <div class="cc-md-img">
                                    <img src="/wp-content/themes/erum/map/assets/image/flag1.png" alt="">
                                </div>
                                <div class="cc-md-content">
                                    <p>OFICINA COMERCIAL</p>
                                    <p>erum.algerie@erumgroup.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide" data-slideval="6">
                        <div class="cc-map-details">
                            <h3>ERUM ALGERIE 6</h3>
                            <hr>
                            <div class="cc-md">
                                <div class="cc-md-img">
                                    <img src="/wp-content/themes/erum/map/assets/image/flag1.png" alt="">
                                </div>
                                <div class="cc-md-content">
                                    <p>OFICINA COMERCIAL</p>
                                    <p>erum.algerie@erumgroup.com</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="slide" data-slideval="7">
                        <div class="cc-map-details">
                            <h3>ERUM ALGERIE 7</h3>
                            <hr>
                            <div class="cc-md">
                                <div class="cc-md-img">
                                    <img src="/wp-content/themes/erum/map/assets/image/flag1.png" alt="">
                                </div>
                                <div class="cc-md-content">
                                    <p>OFICINA COMERCIAL</p>
                                    <p>erum.algerie@erumgroup.com</p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


            </div>

        </div>

    </div>

    <?php get_footer(); ?>
    
    <script>
    let winwidth = jQuery(window).width();
    let zoomsize = ""

    if (winwidth >= 1600) {
        zoomsize = 3
    } else {
        zoomsize = 2
    }

    L.mapbox.accessToken =
        'pk.eyJ1IjoiYXJ1bmVhc2thbiIsImEiOiJjazJmcjhnd2QwMmd2M2JwZzRiODFtNWtvIn0.AURFAbHrLZfiuj_1TJgOOA';
    var map = L.mapbox.map('map')
        .setView([30, 0], 1)
        .addLayer(L.mapbox.styleLayer('mapbox://styles/aruneaskan/ck2frmiha0efc1cohly9hzyls', {
            noWrap: false
        }))
        .setZoom(zoomsize, 0.15);

    var myLayer = L.mapbox.featureLayer().addTo(map);

    var myIcon1 = L.divIcon({
        className: 'my-div-icon',
        html: `
            <div class="cc-map-point" data-popupimg="0"> 
                <div class="cc-imgpopup">
                    <div class="cc-img-wrapper">
                        <img src="/wp-content/themes/erum/map/assets/image/popupflag.png" alt="popupflag">
                    </div>

                    <div class="cc-imgsep">
                        <div class="cc-border"></div>
                        <div class="cc-line"></div>
                    </div>

                    <div class="cc-line-wrapper">

                    </div>
                </div>
                <div class="cc-circle1"> <div class="cc-circle2"> <div class="cc-circle3"></div> </div> </div> 
            </div>
        `
    });
    L.marker([54, -70], {
        icon: myIcon1
    }).addTo(map);

    var myIcon2 = L.divIcon({
        className: 'my-div-icon',
        html: `
            <div class="cc-map-point" data-popupimg="1"> 
                <div class="cc-imgpopup">
                    <div class="cc-img-wrapper">
                        <img src="/wp-content/themes/erum/map/assets/image/popupflag.png" alt="popupflag">
                    </div>

                    <div class="cc-imgsep">
                        <div class="cc-border"></div>
                        <div class="cc-line"></div>
                    </div>

                    <div class="cc-line-wrapper">

                    </div>
                </div>
                <div class="cc-circle1"> <div class="cc-circle2"> <div class="cc-circle3"></div> </div> </div> 
            </div>
        `
    });
    L.marker([5, -72], {
        icon: myIcon2
    }).addTo(map);

    var myIcon3 = L.divIcon({
        className: 'my-div-icon',
        html: `
            <div class="cc-map-point" data-popupimg="2"> 
                <div class="cc-imgpopup">
                    <div class="cc-img-wrapper">
                        <img src="/wp-content/themes/erum/map/assets/image/popupflag.png" alt="popupflag">
                    </div>

                    <div class="cc-imgsep">
                        <div class="cc-border"></div>
                        <div class="cc-line"></div>
                    </div>

                    <div class="cc-line-wrapper">

                    </div>
                </div>
                <div class="cc-circle1"> <div class="cc-circle2"> <div class="cc-circle3"></div> </div> </div> 
            </div>
        `
    });
    L.marker([22, -2], {
        icon: myIcon3
    }).addTo(map);

    var myIcon4 = L.divIcon({
        className: 'my-div-icon',
        html: `
            <div class="cc-map-point" data-popupimg="3"> 
                <div class="cc-imgpopup">
                    <div class="cc-img-wrapper">
                        <img src="/wp-content/themes/erum/map/assets/image/popupflag.png" alt="popupflag">
                    </div>

                    <div class="cc-imgsep">
                        <div class="cc-border"></div>
                        <div class="cc-line"></div>
                    </div>

                    <div class="cc-line-wrapper">

                    </div>
                </div>
                <div class="cc-circle1"> <div class="cc-circle2"> <div class="cc-circle3"></div> </div> </div> 
            </div>
        `
    });
    L.marker([22, 45], {
        icon: myIcon4
    }).addTo(map);

    var myIcon5 = L.divIcon({
        className: 'my-div-icon',
        html: `
            <div class="cc-map-point" data-popupimg="4"> 
                <div class="cc-imgpopup">
                    <div class="cc-img-wrapper">
                        <img src="/wp-content/themes/erum/map/assets/image/popupflag.png" alt="popupflag">
                    </div>

                    <div class="cc-imgsep">
                        <div class="cc-border"></div>
                        <div class="cc-line"></div>
                    </div>

                    <div class="cc-line-wrapper">

                    </div>
                </div>
                <div class="cc-circle1"> <div class="cc-circle2"> <div class="cc-circle3"></div> </div> </div> 
            </div>
        `
    });
    L.marker([30, 83], {
        icon: myIcon5
    }).addTo(map);

    var myIcon6 = L.divIcon({
        className: 'my-div-icon',
        html: `
            <div class="cc-map-point" data-popupimg="5"> 
                <div class="cc-imgpopup">
                    <div class="cc-img-wrapper">
                        <img src="/wp-content/themes/erum/map/assets/image/popupflag.png" alt="popupflag">
                    </div>

                    <div class="cc-imgsep">
                        <div class="cc-border"></div>
                        <div class="cc-line"></div>
                    </div>

                    <div class="cc-line-wrapper">

                    </div>
                </div>
                <div class="cc-circle1"> <div class="cc-circle2"> <div class="cc-circle3"></div> </div> </div> 
            </div>
        `
    });
    L.marker([41, 66], {
        icon: myIcon6
    }).addTo(map);

    var myIcon7 = L.divIcon({
        className: 'my-div-icon',
        html: `
            <div class="cc-map-point" data-popupimg="6"> 
                <div class="cc-imgpopup">
                    <div class="cc-img-wrapper">
                        <img src="/wp-content/themes/erum/map/assets/image/popupflag.png" alt="popupflag">
                    </div>

                    <div class="cc-imgsep">
                        <div class="cc-border"></div>
                        <div class="cc-line"></div>
                    </div>

                    <div class="cc-line-wrapper">

                    </div>
                </div>
                <div class="cc-circle1"> <div class="cc-circle2"> <div class="cc-circle3"></div> </div> </div> 
            </div>
        `
    });
    L.marker([54, 36], {
        icon: myIcon7
    }).addTo(map);

    var myIcon8 = L.divIcon({
        className: 'my-div-icon',
        html: `
            <div class="cc-map-point" data-popupimg="7"> 
                <div class="cc-imgpopup">
                    <div class="cc-img-wrapper">
                        <img src="/wp-content/themes/erum/map/assets/image/popupflag.png" alt="popupflag">
                    </div>

                    <div class="cc-imgsep">
                        <div class="cc-border"></div>
                        <div class="cc-line"></div>
                    </div>

                    <div class="cc-line-wrapper">

                    </div>
                </div>
                <div class="cc-circle1"> <div class="cc-circle2"> <div class="cc-circle3"></div> </div> </div> 
            </div>
        `
    });
    L.marker([62, 54], {
        icon: myIcon8
    }).addTo(map);
    </script>
    <script>
    jQuery(document).ready(function() {
        var mapslider = jQuery('.bxslider').bxSlider({

            mode: 'vertical',
            slideWidth: 600,
            preventDefaultSwipeY: true,
            minSlides: 3,
            maxSlides: 3,
            moveSlides: 1,
            pager: false,
            // auto: true,
            onSliderLoad: function() {
                jQuery('.bxslider>div:not(.bx-clone)').eq(1).addClass('active-slide');
            },
            onSlideAfter: function($slideElement, oldIndex, newIndex) {
                jQuery('.slide').removeClass('active-slide');
                jQuery($slideElement).next().addClass('active-slide');

                let popupValue = jQuery('.slide.active-slide').attr('data-slideval');
                jQuery('.cc-map-point').removeClass('active');
                jQuery(`.cc-map-point:eq(${popupValue - 1})`).addClass('active')
            }

        });

        jQuery('.cc-map-point .cc-circle1').on('click', function(ev) {
            ev.preventDefault();
            ev.stopPropagation();
            let slideval = jQuery(this).parent().attr('data-popupimg');
            jQuery('.cc-map-point').removeClass('active');
            jQuery(this).parent().toggleClass('active');

            let activeslide = jQuery('.slide.active-slide').attr('data-slideval') - 1;

            if (activeslide != slideval) {
                mapslider.goToSlide(slideval);
            }
        })

        jQuery("body").on('click', function() {
            jQuery('.cc-map-point').removeClass('active');
        })

    });
    </script>