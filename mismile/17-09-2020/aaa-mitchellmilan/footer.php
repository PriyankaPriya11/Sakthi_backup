<!-- Footer -->
<?php if ( is_home() || is_front_page() ) { ?>
<?php get_template_part ('mods/modules/services'); ?>
<?php get_template_part ('mods/modules/testimonials'); ?>
<?php get_template_part ('mods/modules/highlights'); ?>
<?php get_template_part ('mods/modules/footer-top'); ?>
<?php get_template_part ('mods/modules/footer-main'); ?>
<?php get_template_part ('mods/modules/footer-bottom'); ?>
<?php } else { ?>
<?php get_template_part ('mods/modules/footer-main'); ?>
<?php get_template_part ('mods/modules/footer-bottom'); ?>
<?php } ?>
<!-- Stop Customizing -->
<?php get_template_part ('framework/config/foot'); ?>

<script type="text/javascript" data-cfasync="false">
		var disableStr = 'ga-disable-UA-43629508-1';

	/* Function to detect opted out users */
	function __gaTrackerIsOptedOut() {
		return document.cookie.indexOf(disableStr + '=true') > -1;
	}

	/* Disable tracking if the opt-out cookie exists. */
	if ( __gaTrackerIsOptedOut() ) {
		window[disableStr] = true;
	}

	/* Opt-out function */
	function __gaTrackerOptout() {
	  document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
	  window[disableStr] = true;
	}
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','__gaTracker');

	__gaTracker('create', 'UA-43629508-1', 'auto');
	__gaTracker('set', 'forceSSL', true);
	__gaTracker('require', 'displayfeatures');
	__gaTracker('require', 'linkid', 'linkid.js');
	__gaTracker('send','pageview');
</script>
<script>
(function(a,e,c,f,g,h,b,d){var k={ak:"829800589",cl:"KwZaCKPf3ncQjYHXiwM",autoreplace:"248-644-2136"};a[c]=a[c]||function(){(a[c].q=a[c].q||[]).push(arguments)};a[g]||(a[g]=k.ak);b=e.createElement(h);b.async=1;b.src="//www.gstatic.com/wcm/loader.js";d=e.getElementsByTagName(h)[0];d.parentNode.insertBefore(b,d);a[f]=function(b,d,e){a[c](2,b,k,d,null,new Date,e)};a[f]()})(window,document,"_googWcmImpl","_googWcmGet","_googWcmAk","script");
</script>
<script type="application/ld+json">
{
	"@context": "http://schema.org",
	"@type": "Dentist",
	"name": "Birmingham Center For Cosmetic Dentistry: Mitchell S. Milan, DDS",
	"address": {
		"@type": "PostalAddress",
		"streetAddress": "555 S Old Woodward Ave",
		"addressLocality": "Birmingham",
		"addressRegion": "MI",
		"postalCode": "48009"
	},
	"image": "https://mismile.com/wp-content/uploads/2017/11/square-logo-profile.jpg",
	"telePhone": "(248) 644-2136",
	"url": "https://mismile.com/",
	"paymentAccepted": [ "cash", "check", "credit card", "invoice", "paypal" ],
	"geo": {
		"@type": "GeoCoordinates",
		"latitude": "42.542935",
		"longitude": "-83.210103"
	},
"priceRange":"$"
}
</script>

