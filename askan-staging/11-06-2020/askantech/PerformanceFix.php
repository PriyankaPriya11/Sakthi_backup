<?php
/**
 * @Author: AmigoDheena
 * @Date:   2019-05-12 12:52:08
 * @Last Modified by:   amigodheena
 * @Last Modified time: 2019-07-05 15:30:53
 * @URL: askantech.com
 */

//DQ CSS
    add_action( 'wp_print_styles','css_deregister_styles', 100 );
    function css_deregister_styles()    { 
        if (!is_admin()) {
            if (is_front_page()) {
                wp_deregister_style( 'wordfenceAJAXcss' );
                wp_deregister_style( 'wp-block-library' );
            }
        }
    }
//DQ CSS

//DQ JS
    function js_dequeue_scripts()
    {
        if (is_front_page()) {
            wp_dequeue_script('wordfenceAJAXjs');wp_deregister_script('wordfenceAJAXjs');
            wp_dequeue_script('wp-embed');wp_deregister_script('wp-embed');
            wp_dequeue_script('mediaelement-vimeo');wp_deregister_script('mediaelement-vimeo');
        }
    }
    add_action('wp_print_scripts', 'js_dequeue_scripts', 100);
//DQ JS
    
//Remove emoji
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); 
    remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
//Remove emoji

//Inline Header
	function inline_header(){
    if (is_front_page()) {?>
        <!-- Front page only  -->
    <?php } 
    if(is_page(1833)){?>
        <style type="text/css">
            .owl-carousel,.owl-carousel .owl-item{-webkit-tap-highlight-color:transparent;position:relative}.owl-carousel{display:none;width:100%;z-index:1}.owl-carousel .owl-stage{position:relative;-ms-touch-action:pan-Y;touch-action:manipulation;-moz-backface-visibility:hidden}.owl-carousel .owl-stage:after{content:".";display:block;clear:both;visibility:hidden;line-height:0;height:0}.owl-carousel .owl-stage-outer{position:relative;overflow:hidden;-webkit-transform:translate3d(0,0,0)}.owl-carousel .owl-item,.owl-carousel .owl-wrapper{-webkit-backface-visibility:hidden;-moz-backface-visibility:hidden;-ms-backface-visibility:hidden;-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0)}.owl-carousel .owl-item{min-height:1px;float:left;-webkit-backface-visibility:hidden;-webkit-touch-callout:none}.owl-carousel .owl-item img{display:block;width:100%}.owl-carousel .owl-dots.disabled,.owl-carousel .owl-nav.disabled{display:none}.no-js .owl-carousel,.owl-carousel.owl-loaded{display:block}.owl-carousel .owl-dot,.owl-carousel .owl-nav .owl-next,.owl-carousel .owl-nav .owl-prev{cursor:pointer;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.owl-carousel .owl-nav button.owl-next,.owl-carousel .owl-nav button.owl-prev,.owl-carousel button.owl-dot{background:0 0;color:inherit;border:none;padding:0!important;font:inherit}.owl-carousel.owl-loading{opacity:0;display:block}.owl-carousel.owl-hidden{opacity:0}.owl-carousel.owl-refresh .owl-item{visibility:hidden}.owl-carousel.owl-drag .owl-item{-ms-touch-action:pan-y;touch-action:pan-y;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.owl-carousel.owl-grab{cursor:move;cursor:grab}.owl-carousel.owl-rtl{direction:rtl}.owl-carousel.owl-rtl .owl-item{float:right}.owl-carousel .animated{animation-duration:1s;animation-fill-mode:both}.owl-carousel .owl-animated-in{z-index:0}.owl-carousel .owl-animated-out{z-index:1}.owl-carousel .fadeOut{animation-name:fadeOut}@keyframes fadeOut{0%{opacity:1}100%{opacity:0}}.owl-height{transition:height .5s ease-in-out}.owl-carousel .owl-item .owl-lazy{opacity:0;transition:opacity .4s ease}.owl-carousel .owl-item .owl-lazy:not([src]),.owl-carousel .owl-item .owl-lazy[src^=""]{max-height:0}.owl-carousel .owl-item img.owl-lazy{transform-style:preserve-3d}.owl-carousel .owl-video-wrapper{position:relative;height:100%;background:#000}.owl-carousel .owl-video-play-icon{position:absolute;height:80px;width:80px;left:50%;top:50%;margin-left:-40px;margin-top:-40px;background:url(owl.video.play.png) no-repeat;cursor:pointer;z-index:1;-webkit-backface-visibility:hidden;transition:transform .1s ease}.owl-carousel .owl-video-play-icon:hover{-ms-transform:scale(1.3,1.3);transform:scale(1.3,1.3)}.owl-carousel .owl-video-playing .owl-video-play-icon,.owl-carousel .owl-video-playing .owl-video-tn{display:none}.owl-carousel .owl-video-tn{opacity:0;height:100%;background-position:center center;background-repeat:no-repeat;background-size:contain;transition:opacity .4s ease}.owl-carousel .owl-video-frame{position:relative;z-index:1;height:100%;width:100%}
        </style>
    <?php } ?>
        <!-- Allpage -->
        <script type="text/javascript">
            function _extends(){return(_extends=Object.assign||function(t){for(var e=1;e<arguments.length;e++){var n=arguments[e];for(var o in n)Object.prototype.hasOwnProperty.call(n,o)&&(t[o]=n[o])}return t}).apply(this,arguments)}function _typeof(t){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}!function(t,e){"object"===("undefined"==typeof exports?"undefined":_typeof(exports))&&"undefined"!=typeof module?module.exports=e():"function"==typeof define&&define.amd?define(e):t.LazyLoad=e()}(this,function(){"use strict";var t="undefined"!=typeof window,e=t&&!("onscroll"in window)||"undefined"!=typeof navigator&&/(gle|ing|ro)bot|crawl|spider/i.test(navigator.userAgent),n=t&&"IntersectionObserver"in window,o=t&&"classList"in document.createElement("p"),r={elements_selector:"img",container:e||t?document:null,threshold:300,thresholds:null,data_src:"src",data_srcset:"srcset",data_sizes:"sizes",data_bg:"bg",class_loading:"loading",class_loaded:"loaded",class_error:"error",load_delay:0,auto_unobserve:!0,callback_enter:null,callback_exit:null,callback_reveal:null,callback_loaded:null,callback_error:null,callback_finish:null,use_native:!1},a=function(t,e){var n,o=new t(e);try{n=new CustomEvent("LazyLoad::Initialized",{detail:{instance:o}})}catch(t){(n=document.createEvent("CustomEvent")).initCustomEvent("LazyLoad::Initialized",!1,!1,{instance:o})}window.dispatchEvent(n)};var i=function(t,e){return t.getAttribute("data-"+e)},s=function(t,e,n){var o="data-"+e;null!==n?t.setAttribute(o,n):t.removeAttribute(o)},c=function(t){return"true"===i(t,"was-processed")},l=function(t,e){return s(t,"ll-timeout",e)},u=function(t){return i(t,"ll-timeout")},d=function(t,e){t&&t(e)},f=function(t,e){t._loadingCount+=e,0===t._elements.length&&0===t._loadingCount&&d(t._settings.callback_finish)},_=function(t){for(var e,n=[],o=0;e=t.children[o];o+=1)"SOURCE"===e.tagName&&n.push(e);return n},v=function(t,e,n){n&&t.setAttribute(e,n)},g=function(t,e){v(t,"sizes",i(t,e.data_sizes)),v(t,"srcset",i(t,e.data_srcset)),v(t,"src",i(t,e.data_src))},m={IMG:function(t,e){var n=t.parentNode;n&&"PICTURE"===n.tagName&&_(n).forEach(function(t){g(t,e)});g(t,e)},IFRAME:function(t,e){v(t,"src",i(t,e.data_src))},VIDEO:function(t,e){_(t).forEach(function(t){v(t,"src",i(t,e.data_src))}),v(t,"src",i(t,e.data_src)),t.load()}},b=function(t,e){var n,o,r=e._settings,a=t.tagName,s=m[a];if(s)return s(t,r),f(e,1),void(e._elements=(n=e._elements,o=t,n.filter(function(t){return t!==o})));!function(t,e){var n=i(t,e.data_src),o=i(t,e.data_bg);n&&(t.style.backgroundImage='url("'.concat(n,'")')),o&&(t.style.backgroundImage=o)}(t,r)},h=function(t,e){o?t.classList.add(e):t.className+=(t.className?" ":"")+e},p=function(t,e,n){t.addEventListener(e,n)},y=function(t,e,n){t.removeEventListener(e,n)},E=function(t,e,n){y(t,"load",e),y(t,"loadeddata",e),y(t,"error",n)},w=function(t,e,n){var r=n._settings,a=e?r.class_loaded:r.class_error,i=e?r.callback_loaded:r.callback_error,s=t.target;!function(t,e){o?t.classList.remove(e):t.className=t.className.replace(new RegExp("(^|\\s+)"+e+"(\\s+|$)")," ").replace(/^\s+/,"").replace(/\s+$/,"")}(s,r.class_loading),h(s,a),d(i,s),f(n,-1)},I=function(t,e){var n=function n(r){w(r,!0,e),E(t,n,o)},o=function o(r){w(r,!1,e),E(t,n,o)};!function(t,e,n){p(t,"load",e),p(t,"loadeddata",e),p(t,"error",n)}(t,n,o)},k=["IMG","IFRAME","VIDEO"],A=function(t,e){var n=e._observer;z(t,e),n&&e._settings.auto_unobserve&&n.unobserve(t)},L=function(t){var e=u(t);e&&(clearTimeout(e),l(t,null))},x=function(t,e){var n=e._settings.load_delay,o=u(t);o||(o=setTimeout(function(){A(t,e),L(t)},n),l(t,o))},z=function(t,e,n){var o=e._settings;!n&&c(t)||(k.indexOf(t.tagName)>-1&&(I(t,e),h(t,o.class_loading)),b(t,e),function(t){s(t,"was-processed","true")}(t),d(o.callback_reveal,t),d(o.callback_set,t))},O=function(t){return!!n&&(t._observer=new IntersectionObserver(function(e){e.forEach(function(e){return function(t){return t.isIntersecting||t.intersectionRatio>0}(e)?function(t,e){var n=e._settings;d(n.callback_enter,t),n.load_delay?x(t,e):A(t,e)}(e.target,t):function(t,e){var n=e._settings;d(n.callback_exit,t),n.load_delay&&L(t)}(e.target,t)})},{root:(e=t._settings).container===document?null:e.container,rootMargin:e.thresholds||e.threshold+"px"}),!0);var e},N=["IMG","IFRAME"],C=function(t,e){return function(t){return t.filter(function(t){return!c(t)})}((n=t||function(t){return t.container.querySelectorAll(t.elements_selector)}(e),Array.prototype.slice.call(n)));var n},M=function(t,e){this._settings=function(t){return _extends({},r,t)}(t),this._loadingCount=0,O(this),this.update(e)};return M.prototype={update:function(t){var n,o=this,r=this._settings;(this._elements=C(t,r),!e&&this._observer)?(function(t){return t.use_native&&"loading"in HTMLImageElement.prototype}(r)&&((n=this)._elements.forEach(function(t){-1!==N.indexOf(t.tagName)&&(t.setAttribute("loading","lazy"),z(t,n))}),this._elements=C(t,r)),this._elements.forEach(function(t){o._observer.observe(t)})):this.loadAll()},destroy:function(){var t=this;this._observer&&(this._elements.forEach(function(e){t._observer.unobserve(e)}),this._observer=null),this._elements=null,this._settings=null},load:function(t,e){z(t,this,e)},loadAll:function(){var t=this;this._elements.forEach(function(e){A(e,t)})}},t&&function(t,e){if(e)if(e.length)for(var n,o=0;n=e[o];o+=1)a(t,n);else a(t,e)}(M,window.lazyLoadOptions),M});
        </script>
        <!-- Allpage -->
    <?php }
	add_action('wp_head', 'inline_header', 100);
//Inline Header

//Inline Footer
	function inline_footer(){ 
    if (is_front_page()) {?>
        <!-- Front page only  -->
	<?php } ?>
        <!-- Allpage -->
        <script>
            (function() {
                function logElementEvent(eventName, element) {
                    console.log(
                        Date.now(),
                        eventName,
                        element.getAttribute("data-src")
                    );
                }
                var callback_enter = function(element) {
                    logElementEvent("🔑 ENTERED", element);
                };
                var callback_exit = function(element) {
                    logElementEvent("🚪 EXITED", element);
                };
                var callback_reveal = function(element) {
                    logElementEvent("👁️ REVEALED", element);
                };
                var callback_loaded = function(element) {
                    logElementEvent("👍 LOADED", element);
                };
                var callback_error = function(element) {
                    logElementEvent("💀 ERROR", element);
                    element.src =
                        "https://via.placeholder.com/440x560/?text=Error+Placeholder";
                };
                var callback_finish = function() {
                    logElementEvent("✔️ FINISHED", document.documentElement);
                };
                var ll = new LazyLoad({
                    elements_selector: ".simplelazy",
                    // Assign the callbacks defined above
                    callback_enter: callback_enter,
                    callback_exit: callback_exit,
                    callback_reveal: callback_reveal,
                    callback_loaded: callback_loaded,
                    callback_error: callback_error,
                    callback_finish: callback_finish
                });
            })();
        </script>
        <script type="text/javascript">
            var winwit = window.innerwidth;
            let temp = ``
            if (window.innerWidth < 767) {
                console.log("Mobile");
                temp = 
                `<div class="video-section cc-mobile-bannervideo">
                <div class="video-wrapper">
                    <video autoplay muted loop playsinline >
                        <source src="<?php echo get_template_directory_uri();?>/assets/video/askantech.mp4" type="video/mp4">
                    </video>
                </div>
            </div>`
            }else{
                console.log("Desktop");
                temp =
                '<div class="video-section cc-desk-bannervideo"><div class="video-wrapper">ˀ<iframe  style="height: 100%;width:100%;" src="https://www.youtube.com/embed/fyMa0AvFYho?autoplay=1&controls=0&rel=0&showinfo=0&playlist=7r4pE9A5sXU&loop=1&mute=1&enablejsapi=1&origin=https%3A%2F%2Fwww.askantech.com&widgetid=1" data-autoplay data-keepplaying></iframe></div></div>';
            }
            let ccdymcontent = document.getElementById("cc-dym-content");
            // console.log(ccdymcontent);
            window.addEventListener('load', function() {
                setTimeout(function(){
                    ccdymcontent.innerHTML = temp;
                },5000);
            });

        </script>
        <script type="text/javascript">
            // amigolazy
                let amframe = document.querySelectorAll('.amigolazy');
                window.onload = function(){
                  for(let i=0; i<amframe.length;i++){
                    let amsrc = amframe[i];
                    let amdata = amsrc.getAttribute("data-src");
                    let datanew = amsrc.getAttribute("lazy");
                    if(datanew === null){
                      datanew = 1500;
                    }
                    setTimeout(function(){
                      amframe[i].setAttribute("src",amdata);
                      console.info(datanew + "ms Lazyloaded " + amframe[i].src);
                    }, datanew);
                  }
                }
            // amigolazy
        </script>
        <!-- Allpage -->
    <?php }
	add_action('wp_footer', 'inline_footer', 100);
//Inline Footer

// Onload css array
    add_filter( 'style_loader_tag',  'remove_https_http', 10, 4 );
    function remove_https_http( $html, $handle, $media,$tag ){
        $handles = array('dashicons', 'admin-bar','yoast-seo-adminbar');
            if (is_front_page()) {
            if( in_array( $handle, $handles ) ){
            $html = str_replace("media='all'", "media='none' onload=\"if(media!='all')media='all'\"", $html);   
            }
            return $html;
        }
        else {
            return $html;
        }
    }
// Onload css array

// Disable RSS Feed
    function itsme_disable_feed() {
     wp_die( __( 'No feed available, please visit the homepage' ) );
    }

    add_action('do_feed', 'itsme_disable_feed', 1);
    add_action('do_feed_rdf', 'itsme_disable_feed', 1);
    add_action('do_feed_rss', 'itsme_disable_feed', 1);
    add_action('do_feed_rss2', 'itsme_disable_feed', 1);
    add_action('do_feed_atom', 'itsme_disable_feed', 1);
    add_action('do_feed_rss2_comments', 'itsme_disable_feed', 1);
    add_action('do_feed_atom_comments', 'itsme_disable_feed', 1);
// Disable RSS Feed

// remove the header links to your RSS feeds
    remove_action( 'wp_head', 'feed_links_extra', 3 );
    remove_action( 'wp_head', 'feed_links', 2 );
// remove the header links to your RSS feeds