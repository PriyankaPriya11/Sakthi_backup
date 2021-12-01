(function ($) {
    "use strict";
    $(".navbar .dropdown").hover(
        function () {
            $(this).find(".dropdown-menu").first().stop(true, true).slideDown(200);
        },
        function () {
            $(this).find(".dropdown-menu").first().stop(true, true).slideUp(400);
        }
    );
})(jQuery);
(function ($) {
    "use strict";
    $(document).ready(function () {
        $("#client-demo").owlCarousel({ autoPlay: 3000, stopOnHover: true, items: 4, itemsDesktop: [1199, 3], itemsDesktopSmall: [979, 3], navigation: false });
    });
})(jQuery);
(function ($) {
    "use strict";
    $(document).ready(function () {
        $("#testimonial").owlCarousel({ autoPlay: 3000, stopOnHover: true, items: 2, itemsDesktop: [1199, 3], itemsDesktopSmall: [979, 3], navigation: false });
    });
})(jQuery);
(function ($) {
    "use strict";
    $("#sidebar").affix({ offset: { top: 530 } });
    var $body = $(document.body);
    var navHeight = $(".navbar").outerHeight(true) + 10;
    if($('#leftCol').length > 0){
    $body.scrollspy({ target: "#leftCol", offset: navHeight });
    $("#leftCol a[href*=#]:not([href=#])").click(function () {
        if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
            if (target.length) {
                $("html,body").animate({ scrollTop: target.offset().top - 50 }, 1000);
                return false;
            }
        }
    });
    }
    $(window).bind("scroll", function () {
        "use strict";
        if ($(window).scrollTop() >= $(".tp-footer").offset().top - window.innerHeight) {
            $(".hide-side").hide("fast");
        } else {
            $(".hide-side").show("fast");
        }
    });
})(jQuery);
(function ($) {
    "use strict";
    $(document).ready(function () {
        $("#slider").owlCarousel({ navigation: true, slideSpeed: 300, paginationSpeed: 400, singleItem: true, navigationText: false, transitionStyle: "fade", autoPlay: true });
    });
})(jQuery);
(function ($) {
    "use strict";
    $(document).ready(function () {
        $(".search").click(function () {
            $(".search-open").slideToggle("1000");
        });
    });
})(jQuery);
(function ($) {
    "use strict";
    $(document).ready(function () {
        $("#incfont").click(function () {
            curSize = parseInt($(".font-increase").css("font-size")) + 2;
            if (curSize <= 28) $(".font-increase").css("font-size", curSize);
        });
        $("#decfont").click(function () {
            curSize = parseInt($(".font-increase").css("font-size")) - 2;
            if (curSize >= 12) $(".font-increase").css("font-size", curSize);
        });
    });
})(jQuery);
(function ($) {
    "use strict";
    $(document).ready(function () {
        $("#product").owlCarousel({ autoPlay: 3000, stopOnHover: true, items: 4, itemsDesktop: [1199, 3], itemsDesktopSmall: [979, 3], navigation: false });
    });
})(jQuery);
