    <footer>
        <div class="footer-address-row">
            <div class="cc-container">
                <div class="cc-fx-row">
                    <div class="cc-col-33 united" data-bg="url(https://www.askantech.com/wp-content/themes/askantech/assets/images/united.png)" data-was-processed="true" style="background-image: url(&quot;https://www.askantech.com/wp-content/themes/askantech/assets/images/united.png&quot;);">
                        <div class="addressbox">
                            <?php dynamic_sidebar( 'case-study-footer-1' ); ?>
                        </div>
                    </div>

                    <div class="cc-col-33 india" data-bg="url(https://www.askantech.com/wp-content/themes/askantech/assets/images/india.png)" data-was-processed="true" style="background-image: url(&quot;https://www.askantech.com/wp-content/themes/askantech/assets/images/india.png&quot;);">
                        <div class="addressbox">
                            <?php dynamic_sidebar( 'case-study-footer-2' ); ?>
                        </div>
                    </div>


                    <div class="cc-col-33 thailand" data-bg="url(https://www.askantech.com/wp-content/themes/askantech/assets/images/thailand.png)" data-was-processed="true" style="background-image: url(&quot;https://www.askantech.com/wp-content/themes/askantech/assets/images/thailand.png&quot;);">
                        <div class="addressbox">
                            <?php dynamic_sidebar( 'case-study-footer-3' ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social-links">
                <ul>
                    <li><a href="https://www.facebook.com/askantech/" target="_blank">Facebook</a><span></span></li>
                    <li><a href="https://twitter.com/askantech" target="_blank">Twitter</a><span></span></li>
                    <li><a href="https://in.linkedin.com/company/askan-technologies" target="_blank">LinkedIn</a></li>
                </ul>
            </div>
        </div>
        <div class="cc-footer-desc">
            <div class="cc-footer-des-links">
                <p>Privacy Policy</p>
                <p>Terms and Conditions</p>
            </div>
            <div class="cc-footer-copyright">
                <p>All Rights Reserved <?php echo date("Y"); ?>. ASKAN TECHNOLOGIES</p>
            </div>
        </div>
    </footer>
</div>
<script src="https://www.askantech.com/wp-content/themes/askantech/assets/js/jquery.min.js"></script>
<?php wp_footer(); ?>
<script>

    jQuery(document).ready(function(){



        jQuery('.cc-mobile-toggle').on('click',function(){
            jQuery('.cc-nav-section .cc-ul-wrapper').addClass('openmenu');
        })

        jQuery('.cc-closemenu').on('click',function(){
            jQuery('.cc-nav-section .cc-ul-wrapper').removeClass('openmenu');
        })

        var iframeElem = jQuery('.cc-vidsec iframe');
        let vidsec_overlap = jQuery('.cc-video-section .cc-lapimg .cc-vidsec') ;
        let plimg          =  jQuery('.cc-play-img') ;
        plimg.on('click', function () { 
            vidsec_overlap.toggleClass('cc-hiddensegment'); 
            iframeElem.attr('src','https://player.vimeo.com/video/326966176?autoplay=1')
        });

        jQuery('.cc-tech-carousel .owl-carousel').owlCarousel({
            center: true,
            items:8,
            loop:true,
            margin:25,
            nav:false,
            dots:true,
            autoplay: true,
            autoWidth:true,
            slideTransition: 'linear',
            autoplayTimeout: 2350,
            autoplaySpeed: 2350,
            smartSpeed: 2350,
            fluidSpeed: 2350,
            autoplayHoverPause: true,
            responsive:{
                0:{
                    items:2,
                    autoWidth:false
                },
                567:{
                    items:3 ,
                    autoWidth:false
                },
                600:{
                    items:4,
                    autoWidth:false
                },
                1000:{
                    items:8
                }
            }
        })

    })

    function opentab(evt, tabname) {

        var i, tabcontent, tablinks;

        tabcontent = document.getElementsByClassName("tabcontent");

        for (i = 0; i < tabcontent.length; i++) { tabcontent[i].style.display = "none"; }

        tablinks = document.getElementsByClassName("tablinks");

        for (i = 0; i < tablinks.length; i++) { tablinks[i].className = tablinks[i].className.replace(" active", ""); }

        document.getElementById(tabname).style.display = "block";
        evt.currentTarget.className += " active";

    }

</script>
<script>
    jQuery("body").on('change', '#file', function(e) {
        var ext = this.value.replace(/^.*\./, '');
        switch(ext){
            case 'jpg':
            case 'png':
            case 'PNG':
            case 'xlsx':
            case 'xls':
            case 'docx':
            case 'doc':
            case 'doc':
            case 'pdf':
            case 'txt':
            jQuery("#file_error").html('');
            break;
            default:
            jQuery("#file_error").html('<p class="my-notify-error">This file type not allowed</p>');
            this.value='';
            return false;
        }
        var filename = jQuery('input[type=file]').val().split('\\').pop();
        var label_text = jQuery('#labelId').text();
        console.log(label_text);
        var res = filename.replace(label_text, filename);
        console.log(res);
        var labelId = jQuery('#labelId').text(res);
        console.log(labelId);
    });
        
    jQuery('body').on('click', '#submit', function(e) {
        e.preventDefault();
        var name=jQuery("#name").val();
        var email=jQuery("#email").val();
        var phone=jQuery("#phone").val();
        var website=jQuery("#website").val();
        var budjet=jQuery("#budget").val();
        var message=jQuery("#message").val();                  
        var filename =jQuery("#file").val();
          
        var namevalid = /^[a-zA-Z\s]+$/;
        var emailvalid = /^([\w\.\-\+])+\@(([\w\-])+\.)+([a-zA-Z0-9]{2,6})$/;
        var phoneNumber = /[0-9-()+]{3,20}/;
        var domainRegex = /^(([\w]+:)?\/\/)?(([\d\w]|%[a-fA-f\d]{2,2})+(:([\d\w]|%[a-fA-f\d]{2,2})+)?@)?([\d\w][-\d\w]{0,253}[\d\w]\.)+[\w]{2,4}(:[\d]+)?(\/([-+_~.\d\w]|%[a-fA-f\d]{2,2})*)*(\?(&?([-+_~.\d\w]|%[a-fA-f\d]{2,2})=?)*)?(#([-+_~.\d\w]|%[a-fA-f\d]{2,2})*)?$/;        
        if(name == '')
                {
                jQuery("#name_error").html('<p class="my-notify-error">Please Enter Your Name</p>');
                return false;
                }else if((name.length)<3){
                jQuery("#name_error").html('<p class="my-notify-error">Please Enter Atleast 3 Characters</p>');
                return false;
                }else if(!namevalid.test(name)){
                jQuery("#name_error").html('<p class="my-notify-error">Please Enter only Characters</p>');
                return false;
                }else if(email=="")
                {  jQuery("#email_error").html('<p class="my-notify-error">Please Enter E-mail address</p>');
                if(name != '')
                {
                jQuery("#name_error").html('');
                }
                if(phone != '')
                {
                jQuery("#phone_error").html('');
                }
                if(website != '')
                {
                jQuery("#website_error").html('');
                }
                if(budget != '')
                {
                jQuery("#budjet_error").html('');
                }
                if(message != '')
                {
                jQuery("#message_error").html('');
                }
                return false;
                }
                else if(!emailvalid.test(email))
                { jQuery("#email_error").html('<p class="my-notify-error">Please Enter Valid E-mail address</p>');
                if(name != '')
                {
                jQuery("#name_error").html('');
                }
                if(phone != '')
                {
                jQuery("#phone_error").html('');
                }
                if(website != '')
                {
                jQuery("#website_error").html('');
                }
                if(budget != '')
                {
                jQuery("#budjet_error").html('');
                }
                if(message != '')
                {
                jQuery("#message_error").html('');
                }
                return false;
                }else if(phone==""){
                jQuery("#phone_error").html('<p class="my-notify-error">Please Enter PhoneNumber</p>');
                if(name != '')
                {
                jQuery("#name_error").html('');
                }
                if(email != '')
                {
                jQuery("#email_error").html('');
                }
                if(website != '')
                {
                jQuery("#website_error").html('');
                }
                if(budget != '')
                {
                jQuery("#budjet_error").html('');
                }
                if(message != '')
                {
                jQuery("#message_error").html('');
                }
                return false;
                }else if(((phone.length) <= 9) || ((phone.length) > 16)){
                jQuery("#phone_error").html('<p class="my-notify-error">Please Enter valid PhoneNumber</p>');
                if(name != '')
                {
                jQuery("#name_error").html('');
                }
                if(email != '')
                {
                jQuery("#email_error").html('');
                }
                if(website != '')
                {
                jQuery("#website_error").html('');
                }
                if(budget != '')
                {
                jQuery("#budjet_error").html('');
                }
                if(message != '')
                {
                jQuery("#message_error").html('');
                }
                return false;
                }else if(!phoneNumber.test(phone)){
                jQuery("#phone_error").html('<p class="my-notify-error">Please Enter valid PhoneNumber</p>');
                if(name != '')
                {
                jQuery("#name_error").html('');
                }
                if(email != '')
                {
                jQuery("#email_error").html('');
                }
                if(website != '')
                {
                jQuery("#website_error").html('');
                }
                if(budget != '')
                {
                jQuery("#budjet_error").html('');
                }
                if(message != '')
                {
                jQuery("#message_error").html('');
                }
                return false;
                }else if(website == ''){
                jQuery("#website_error").html('<p class="my-notify-error">Please Enter Website URL</p>');
                if(name != '')
                {
                jQuery("#name_error").html('');
                }
                if(email != '')
                {
                jQuery("#email_error").html('');
                }
                if(phone != '')
                {
                jQuery("#phone_error").html('');
                }
                if(budget != '')
                {
                jQuery("#budjet_error").html('');
                }
                if(message != '')
                {
                jQuery("#message_error").html('');
                }
                return false;
                }else if((website!='') && (!domainRegex.test(website))) {
                jQuery("#website_error").html('<p class="my-notify-error">Please Enter Website URL</p>');
                if(name != '')
                {
                jQuery("#name_error").html('');
                }
                if(email != '')
                {
                jQuery("#email_error").html('');
                }
                if(phone != '')
                {
                jQuery("#phone_error").html('');
                }
                if(budget != '')
                {
                jQuery("#budjet_error").html('');
                }
                if(message != '')
                {
                jQuery("#message_error").html('');
                }
                return false;
                }else if(budjet == ''){
                jQuery("#budjet_error").html('<p class="my-notify-error">Please Enter Your Budget</p>');
                if(name != '')
                {
                jQuery("#name_error").html('');
                }
                if(email != '')
                {
                jQuery("#email_error").html('');
                }
                if(phone != '')
                {
                jQuery("#phone_error").html('');
                }
                if(website != '')
                {
                jQuery("#website_error").html('');
                }
                if(message != '')
                {
                jQuery("#message_error").html('');
                }
                return false;
                }else if(message == ''){
                jQuery("#message_error").html('<p class="my-notify-error">Please Enter Your message</p>');
                if(name != '')
                {
                jQuery("#name_error").html('');
                }
                if(email != '')
                {
                jQuery("#email_error").html('');
                }
                if(phone != '')
                {
                jQuery("#phone_error").html('');
                }
                if(website != '')
                {
                jQuery("#website_error").html('');
                }
                if(budget != '')
                {
                jQuery("#budjet_error").html('');
                }
                return false;
                }else{
                jQuery("#name_error").html('');
                jQuery("#email_error").html('');
                jQuery("#phone_error").html('');
                jQuery("#website_error").html('');
                jQuery("#budjet_error").html('');
                jQuery("#message_error").html('');
                }
                var formData=new FormData(jQuery('#contact_form')[0]);
                formData.append('action', 'submit_form');
            
                jQuery.ajax({
                url:"/wp-admin/admin-ajax.php",
                type:"POST",
                data:formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    jQuery("#submit" ).addClass("loader");
                },
                success:function(data){+
                    jQuery("#submit").removeClass("loader");
                console.log(data);
                if(data==1){
                    jQuery("#display").show();
                    jQuery("#display").html('<p class="my-notify-success">The Form Successfully Submitted.</p>');
                    jQuery('#contact_form')[0].reset();
                    jQuery('#labelId').text('File Upload');
                }else{
                    jQuery("#display").show();
                    jQuery("#display").html('<p class="my-notify-success">The Form Not Submitted.</p>');
                }
                }
            });
    });
</script>
<script>
    function _extends(){return(_extends=Object.assign||function(t){for(var e=1;e<arguments.length;e++){var n=arguments[e];for(var o in n)Object.prototype.hasOwnProperty.call(n,o)&&(t[o]=n[o])}return t}).apply(this,arguments)}function _typeof(t){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}!function(t,e){"object"===("undefined"==typeof exports?"undefined":_typeof(exports))&&"undefined"!=typeof module?module.exports=e():"function"==typeof define&&define.amd?define(e):t.LazyLoad=e()}(this,function(){"use strict";var t="undefined"!=typeof window,e=t&&!("onscroll"in window)||"undefined"!=typeof navigator&&/(gle|ing|ro)bot|crawl|spider/i.test(navigator.userAgent),n=t&&"IntersectionObserver"in window,o=t&&"classList"in document.createElement("p"),r={elements_selector:"img",container:e||t?document:null,threshold:300,thresholds:null,data_src:"src",data_srcset:"srcset",data_sizes:"sizes",data_bg:"bg",class_loading:"loading",class_loaded:"loaded",class_error:"error",load_delay:0,auto_unobserve:!0,callback_enter:null,callback_exit:null,callback_reveal:null,callback_loaded:null,callback_error:null,callback_finish:null,use_native:!1},a=function(t,e){var n,o=new t(e);try{n=new CustomEvent("LazyLoad::Initialized",{detail:{instance:o}})}catch(t){(n=document.createEvent("CustomEvent")).initCustomEvent("LazyLoad::Initialized",!1,!1,{instance:o})}window.dispatchEvent(n)};var i=function(t,e){return t.getAttribute("data-"+e)},s=function(t,e,n){var o="data-"+e;null!==n?t.setAttribute(o,n):t.removeAttribute(o)},c=function(t){return"true"===i(t,"was-processed")},l=function(t,e){return s(t,"ll-timeout",e)},u=function(t){return i(t,"ll-timeout")},d=function(t,e){t&&t(e)},f=function(t,e){t._loadingCount+=e,0===t._elements.length&&0===t._loadingCount&&d(t._settings.callback_finish)},_=function(t){for(var e,n=[],o=0;e=t.children[o];o+=1)"SOURCE"===e.tagName&&n.push(e);return n},v=function(t,e,n){n&&t.setAttribute(e,n)},g=function(t,e){v(t,"sizes",i(t,e.data_sizes)),v(t,"srcset",i(t,e.data_srcset)),v(t,"src",i(t,e.data_src))},m={IMG:function(t,e){var n=t.parentNode;n&&"PICTURE"===n.tagName&&_(n).forEach(function(t){g(t,e)});g(t,e)},IFRAME:function(t,e){v(t,"src",i(t,e.data_src))},VIDEO:function(t,e){_(t).forEach(function(t){v(t,"src",i(t,e.data_src))}),v(t,"src",i(t,e.data_src)),t.load()}},b=function(t,e){var n,o,r=e._settings,a=t.tagName,s=m[a];if(s)return s(t,r),f(e,1),void(e._elements=(n=e._elements,o=t,n.filter(function(t){return t!==o})));!function(t,e){var n=i(t,e.data_src),o=i(t,e.data_bg);n&&(t.style.backgroundImage='url("'.concat(n,'")')),o&&(t.style.backgroundImage=o)}(t,r)},h=function(t,e){o?t.classList.add(e):t.className+=(t.className?" ":"")+e},p=function(t,e,n){t.addEventListener(e,n)},y=function(t,e,n){t.removeEventListener(e,n)},E=function(t,e,n){y(t,"load",e),y(t,"loadeddata",e),y(t,"error",n)},w=function(t,e,n){var r=n._settings,a=e?r.class_loaded:r.class_error,i=e?r.callback_loaded:r.callback_error,s=t.target;!function(t,e){o?t.classList.remove(e):t.className=t.className.replace(new RegExp("(^|\\s+)"+e+"(\\s+|$)")," ").replace(/^\s+/,"").replace(/\s+$/,"")}(s,r.class_loading),h(s,a),d(i,s),f(n,-1)},I=function(t,e){var n=function n(r){w(r,!0,e),E(t,n,o)},o=function o(r){w(r,!1,e),E(t,n,o)};!function(t,e,n){p(t,"load",e),p(t,"loadeddata",e),p(t,"error",n)}(t,n,o)},k=["IMG","IFRAME","VIDEO"],A=function(t,e){var n=e._observer;z(t,e),n&&e._settings.auto_unobserve&&n.unobserve(t)},L=function(t){var e=u(t);e&&(clearTimeout(e),l(t,null))},x=function(t,e){var n=e._settings.load_delay,o=u(t);o||(o=setTimeout(function(){A(t,e),L(t)},n),l(t,o))},z=function(t,e,n){var o=e._settings;!n&&c(t)||(k.indexOf(t.tagName)>-1&&(I(t,e),h(t,o.class_loading)),b(t,e),function(t){s(t,"was-processed","true")}(t),d(o.callback_reveal,t),d(o.callback_set,t))},O=function(t){return!!n&&(t._observer=new IntersectionObserver(function(e){e.forEach(function(e){return function(t){return t.isIntersecting||t.intersectionRatio>0}(e)?function(t,e){var n=e._settings;d(n.callback_enter,t),n.load_delay?x(t,e):A(t,e)}(e.target,t):function(t,e){var n=e._settings;d(n.callback_exit,t),n.load_delay&&L(t)}(e.target,t)})},{root:(e=t._settings).container===document?null:e.container,rootMargin:e.thresholds||e.threshold+"px"}),!0);var e},N=["IMG","IFRAME"],C=function(t,e){return function(t){return t.filter(function(t){return!c(t)})}((n=t||function(t){return t.container.querySelectorAll(t.elements_selector)}(e),Array.prototype.slice.call(n)));var n},M=function(t,e){this._settings=function(t){return _extends({},r,t)}(t),this._loadingCount=0,O(this),this.update(e)};return M.prototype={update:function(t){var n,o=this,r=this._settings;(this._elements=C(t,r),!e&&this._observer)?(function(t){return t.use_native&&"loading"in HTMLImageElement.prototype}(r)&&((n=this)._elements.forEach(function(t){-1!==N.indexOf(t.tagName)&&(t.setAttribute("loading","lazy"),z(t,n))}),this._elements=C(t,r)),this._elements.forEach(function(t){o._observer.observe(t)})):this.loadAll()},destroy:function(){var t=this;this._observer&&(this._elements.forEach(function(e){t._observer.unobserve(e)}),this._observer=null),this._elements=null,this._settings=null},load:function(t,e){z(t,this,e)},loadAll:function(){var t=this;this._elements.forEach(function(e){A(e,t)})}},t&&function(t,e){if(e)if(e.length)for(var n,o=0;n=e[o];o+=1)a(t,n);else a(t,e)}(M,window.lazyLoadOptions),M});
</script>
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
					elements_selector: ".lazy",
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
</body>
</html>