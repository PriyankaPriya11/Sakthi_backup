/**
 *
 * Created by Borbás Geri on 12/17/13
 * Copyright (c) 2013 eppz! development, LLC.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 */


var EPPZScrollTo =
{
    /**
     * Helpers.
     */
    documentVerticalScrollPosition: function()
    {
        if (self.pageYOffset) return self.pageYOffset; // Firefox, Chrome, Opera, Safari.
        if (document.documentElement && document.documentElement.scrollTop) return document.documentElement.scrollTop; // Internet Explorer 6 (standards mode).
        if (document.body.scrollTop) return document.body.scrollTop; // Internet Explorer 6, 7 and 8.
        return 0; // None of the above.
    },

    viewportHeight: function()
    { return (document.compatMode === "CSS1Compat") ? document.documentElement.clientHeight : document.body.clientHeight; },

    documentHeight: function()
    { return (document.height !== undefined) ? document.height : document.body.offsetHeight; },

    documentMaximumScrollPosition: function()
    { return this.documentHeight() - this.viewportHeight(); },

    elementVerticalClientPositionById: function(id)
    {
        var element = document.getElementById(id);
        var rectangle = element.getBoundingClientRect();
        return rectangle.top;
    },

    /**
     * Animation tick.
     */
    scrollVerticalTickToPosition: function(currentPosition, targetPosition)
    {
        var filter = 0.2;
        var fps = 60;
        var difference = parseFloat(targetPosition) - parseFloat(currentPosition);

        // Snap, then stop if arrived.
        var arrived = (Math.abs(difference) <= 0.5);
        if (arrived)
        {
            // Apply target.
            scrollTo(0.0, targetPosition);
            return;
        }
    }
}
jQuery(document).ready(function() {
    jQuery('.menu-main-menu-container .ss-language a:first-child').on('click', function(){
        jQuery('.lang-es').addClass("active");
        jQuery('.lang-en').removeClass("active");
        jQuery('.lang-fr').removeClass("active");
        jQuery('.menu-main-menu-container .ss-language a:first-child').addClass("active");
        jQuery('.menu-main-menu-container .ss-language a:nth-child(2)').removeClass("active");
        jQuery('.menu-main-menu-container .ss-language a:nth-child(3)').removeClass("active");
    });
    jQuery('.menu-main-menu-container .ss-language a:nth-child(2)').on('click', function(){
        jQuery('.lang-es').removeClass("active");
        jQuery(".lang-en").addClass("active");
        jQuery(".lang-fr").removeClass("active");
        jQuery('.menu-main-menu-container .ss-language a:first-child').removeClass("active");
        jQuery('.menu-main-menu-container .ss-language a:nth-child(2)').addClass("active");
        jQuery('.menu-main-menu-container .ss-language a:nth-child(3)').removeClass("active");
    });
    jQuery('.menu-main-menu-container .ss-language a:nth-child(3)').on('click', function(){
        jQuery('.lang-es').removeClass("active");
        jQuery(".lang-en").removeClass("active");
        jQuery(".lang-fr").addClass("active");
        jQuery('.menu-main-menu-container .ss-language a:first-child').removeClass("active");
        jQuery('.menu-main-menu-container .ss-language a:nth-child(2)').removeClass("active");
        jQuery('.menu-main-menu-container .ss-language a:nth-child(3)').addClass("active");
    });
    jQuery(function() {
        jQuery('.lang-es, .menu-main-menu-container .ss-language a:first-child').addClass('active');
    });
    jQuery(".ss-line-hr.ss-1").mouseenter(function(){
        jQuery(".ss-div-line-1").css({"width": "15px", "height": "10px", "background-color": "#525252", "transition": " 0.5s"});
        jQuery(".ss-ln-txt-1 p").css({"opacity": "1", "transition": "0.5s", "text-decoration": "none"});
      }).mouseleave(function() {
        jQuery(".ss-div-line-1").css({"width": "30px", "height": "1px", "background-color": "#B0B0B0", "transition": " 0.5s"});
        jQuery(".ss-ln-txt-1 p").css({"opacity": "0", "transition": "0.5s", "text-decoration": "none"});
    });
    jQuery(".ss-line-hr.ss-2").mouseenter(function(){
            jQuery(".ss-div-line-2").css({"width": "15px", "height": "10px", "background-color": "#525252", "transition": " 0.5s"});
            jQuery(".ss-ln-txt-2 p").css({"opacity": "1", "transition": "0.5s", "text-decoration": "none"});
        }).mouseleave(function() {
            jQuery(".ss-div-line-2").css({"width": "30px", "height": "1px", "background-color": "#B0B0B0", "transition": " 0.5s"});
            jQuery(".ss-ln-txt-2 p").css({"opacity": "0", "transition": "0.5s", "text-decoration": "none"});
    });
    jQuery(".ss-line-hr.ss-3").mouseenter(function(){
            jQuery(".ss-div-line-3").css({"width": "15px", "height": "10px", "background-color": "#525252", "transition": " 0.5s"});
            jQuery(".ss-ln-txt-3 p").css({"opacity": "1", "transition": "0.5s", "text-decoration": "none"});
        }).mouseleave(function() {
            jQuery(".ss-div-line-3").css({"width": "30px", "height": "1px", "background-color": "#B0B0B0", "transition": " 0.5s"});
            jQuery(".ss-ln-txt-3 p").css({"opacity": "0", "transition": "0.5s", "text-decoration": "none"});
    });
    jQuery(".ss-line-hr.ss-4").mouseenter(function(){
            jQuery(".ss-div-line-4").css({"width": "15px", "height": "10px", "background-color": "#525252", "transition": " 0.5s"});
            jQuery(".ss-ln-txt-4 p").css({"opacity": "1", "transition": "0.5s", "text-decoration": "none"});
        }).mouseleave(function() {
            jQuery(".ss-div-line-4").css({"width": "30px", "height": "1px", "background-color": "#B0B0B0", "transition": " 0.5s"});
            jQuery(".ss-ln-txt-4 p").css({"opacity": "0", "transition": "0.5s", "text-decoration": "none"});
    });
    jQuery(".ss-line-hr.ss-5").mouseenter(function(){
            jQuery(".ss-div-line-5").css({"width": "15px", "height": "10px", "background-color": "#525252", "transition": " 0.5s"});
            jQuery(".ss-ln-txt-5 p").css({"opacity": "1", "transition": "0.5s", "text-decoration": "none"});
        }).mouseleave(function() {
            jQuery(".ss-div-line-5").css({"width": "30px", "height": "1px", "background-color": "#B0B0B0", "transition": " 0.5s"});
            jQuery(".ss-ln-txt-5 p").css({"opacity": "0", "transition": "0.5s", "text-decoration": "none"});
    });
    jQuery(".ss-line-hr.ss-6").mouseenter(function(){
            jQuery(".ss-div-line-6").css({"width": "15px", "height": "10px", "background-color": "#525252", "transition": " 0.5s"});
            jQuery(".ss-ln-txt-6 p").css({"opacity": "1", "transition": "0.5s", "text-decoration": "none"});
        }).mouseleave(function() {
            jQuery(".ss-div-line-6").css({"width": "30px", "height": "1px", "background-color": "#B0B0B0", "transition": " 0.5s"});
            jQuery(".ss-ln-txt-6 p").css({"opacity": "0", "transition": "0.5s", "text-decoration": "none"});
    });
    jQuery(".ss-line-hr.ss-7").mouseenter(function(){
            jQuery(".ss-div-line-7").css({"width": "15px", "height": "10px", "background-color": "#525252", "transition": " 0.5s"});
            jQuery(".ss-ln-txt-7 p").css({"opacity": "1", "transition": "0.5s", "text-decoration": "none"});
        }).mouseleave(function() {
            jQuery(".ss-div-line-7").css({"width": "30px", "height": "1px", "background-color": "#B0B0B0", "transition": " 0.5s"});
            jQuery(".ss-ln-txt-7 p").css({"opacity": "0", "transition": "0.5s", "text-decoration": "none"});
    });
});
jQuery(document).ready(function() {
    jQuery(window).scroll(function() {
        var windowpos = jQuery(window).scrollTop();
            if (windowpos >= 10) {
                jQuery(".ss-head").addClass("sst");
            } else {
                jQuery(".ss-head").removeClass("sst");
        }
    });
});
