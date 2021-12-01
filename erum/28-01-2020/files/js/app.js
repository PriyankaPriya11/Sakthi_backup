"use strict";

var path;
var pathElements =  document.getElementsByName('resources-path');
if (pathElements && pathElements.length) {
	path = pathElements[0].content;
} else {
	path = document.getElementsByTagName('head')[0].getAttribute('data-path');
}

// var path = document.getElementsByTagName('head')[0].getAttribute('data-path');
if (path.slice(-1) !== '/') path += '/';

require.config({
	baseUrl: path + 'js/modules',
	paths: {
		skrollr: '../libs/skrollr',
		TweenMax: '../libs/TweenMax',
		Swiper: '../libs/swiper.min'
	}
});

require([
	'domReady',
	'resize/vhUnits.view',
	'map/map.view',
	'map/map-markers.view',
	'slider/slider.view',
	'preload/preload.view',
	'preload/preloader.view',
	'images/images.view',
	'parallax/parallax.view',
	'decor/scroll-show.view',
	'form/form-focus.view',
	'form/form-responce.view',
	'form/form.view',
	'synthetic-scroll/synthetic-scroll.view',
	'synthetic-scroll/elem-scroll.view',
	'decor/text-center.view',
	'decor/hover.view',
	'decor/table.view',
	'decor/img-text.view',
	'decor/border.view',
	'decor/uncover.view',
	'decor/record.view'

	
	], function(
		domReady,
		vhUnits,
		map,
		mapMarkers,
		slider,
		preload,
		preloader,
		images,
		parallax,
		scrollShow,
		formFocus,
		formResponce,
		form,
		syntheticScroll,
		elemScroll,
		textCenter,
		hoverView,
		tableView,
		imgTextView,
		borderView,
		uncoverView,
		recordView

	) {
	domReady(function () {
		vhUnits.init();
		map.init();
		mapMarkers.init();
		slider.init();
		preload.init();
		preloader.init();
		images.init();
		parallax.init();
		scrollShow.init();
		formFocus.init();
		formResponce.init();
		form.init();
		syntheticScroll.init();
		elemScroll.init();
		hoverView.init();
		tableView.init();
		imgTextView.init();
		borderView.init();
		uncoverView.init();
		recordView.init();

	});
});