/* JS Document */

/******************************

[Table of Contents]

1. Vars and Inits
2. Set Header
3. Init Menu
4. Init Top Slider
5. Init Vid Slider
6. Init Events Slider
7. Init Grid


******************************/

jQuery(document).ready(function()
{
	"use strict";

	/* 

	1. Vars and Inits

	*/

	var header = jQuery('.header');
	var menuActive = false;
	var menu = jQuery('.menu');
	var burger = jQuery('.hamburger');

	setHeader();

	jQuery(window).on('resize', function()
	{
		setHeader();
	});

	jQuery(document).on('scroll', function()
	{
		setHeader();
	});

	initMenu();
	initTopSlider();
	initVidSlider();
	initEventsSlider();
	initGrid();

	/* 

	2. Set Header

	*/

	function setHeader()
	{
		if(jQuery(window).scrollTop() > 100)
		{
			header.addClass('scrolled');
		}
		else
		{
			header.removeClass('scrolled');
		}
	}

	/* 

	3. Init Menu

	*/

	function initMenu()
	{
		if(jQuery('.menu').length)
		{
			var menu = jQuery('.menu');
			if(jQuery('.hamburger').length)
			{
				burger.on('click', function()
				{
					if(menuActive)
					{
						closeMenu();
					}
					else
					{
						openMenu();

						jQuery(document).one('click', function cls(e)
						{
							if(jQuery(e.target).hasClass('menu_mm'))
							{
								jQuery(document).one('click', cls);
							}
							else
							{
								closeMenu();
							}
						});
					}
				});
			}
		}
	}

	function openMenu()
	{
		menu.addClass('active');
		menuActive = true;
	}

	function closeMenu()
	{
		menu.removeClass('active');
		menuActive = false;
	}

	/* 

	4. Init Top Slider

	*/

	function initTopSlider()
	{
		if(jQuery('.sidebar_slider_top').length)
		{
			var topSlider = jQuery('.sidebar_slider_top');
			
			topSlider.owlCarousel(
			{
				items:1,
				loop:true,
				autoplay:false,
				smartSpeed:1200,
				dots:true,
				dotsContainer:'.custom_dots_top',
				nav:false
			});

			if(jQuery('.custom_prev_top').length)
			{
				jQuery('.custom_prev_top').on('click', function()
				{
					topSlider.trigger('prev.owl.carousel');
				});
			}

			if(jQuery('.custom_next_top').length)
			{
				jQuery('.custom_next_top').on('click', function()
				{
					topSlider.trigger('next.owl.carousel');
				});
			}

			/* Custom dots events */
			if(jQuery('.custom_dot_top').length)
			{
				jQuery('.custom_dot_top').on('click', function(ev)
				{	
					var dot = jQuery(ev.target);
					jQuery('.custom_dot_top').removeClass('active');
					dot.addClass('active');
					topSlider.trigger('to.owl.carousel', [jQuery(this).index(), 300]);
				});
			}

			/* Change active class for dots when slide changes by nav or touch */
			topSlider.on('changed.owl.carousel', function(event)
			{
				jQuery('.custom_dot_top').removeClass('active');
				jQuery('.custom_dots_top li').eq(event.page.index).addClass('active');
			});	
		}
	}

	/* 

	5. Init Vid Slider

	*/

	function initVidSlider()
	{
		if(jQuery('.sidebar_slider_vid').length)
		{
			var vidSlider = jQuery('.sidebar_slider_vid');
			
			vidSlider.owlCarousel(
			{
				items:1,
				loop:true,
				autoplay:false,
				smartSpeed:1200,
				dots:true,
				dotsContainer:'.custom_dots_vid',
				nav:false
			});

			if(jQuery('.custom_prev_vid').length)
			{
				jQuery('.custom_prev_vid').on('click', function()
				{
					vidSlider.trigger('prev.owl.carousel');
				});
			}

			if(jQuery('.custom_next_vid').length)
			{
				jQuery('.custom_next_vid').on('click', function()
				{
					vidSlider.trigger('next.owl.carousel');
				});
			}

			/* Custom dots events */
			if(jQuery('.custom_dot_vid').length)
			{
				jQuery('.custom_dot_vid').on('click', function(ev)
				{	
					var dot = jQuery(ev.target);
					jQuery('.custom_dot_vid').removeClass('active');
					dot.addClass('active');
					vidSlider.trigger('to.owl.carousel', [jQuery(this).index(), 300]);
				});
			}

			/* Change active class for dots when slide changes by nav or touch */
			vidSlider.on('changed.owl.carousel', function(event)
			{
				jQuery('.custom_dot_vid').removeClass('active');
				jQuery('.custom_dots_vid li').eq(event.page.index).addClass('active');
			});	
		}
	}

	/* 

	6. Init Events Slider

	*/

	function initEventsSlider()
	{
		if(jQuery('.sidebar_slider_events').length)
		{
			var vidSlider = jQuery('.sidebar_slider_events');
			
			vidSlider.owlCarousel(
			{
				items:1,
				loop:true,
				autoplay:false,
				smartSpeed:1200,
				dots:true,
				dotsContainer:'.custom_dots_events',
				nav:false
			});

			if(jQuery('.custom_prev_events').length)
			{
				jQuery('.custom_prev_events').on('click', function()
				{
					vidSlider.trigger('prev.owl.carousel');
				});
			}

			if(jQuery('.custom_next_events').length)
			{
				jQuery('.custom_next_events').on('click', function()
				{
					vidSlider.trigger('next.owl.carousel');
				});
			}

			/* Custom dots events */
			if(jQuery('.custom_dot_events').length)
			{
				jQuery('.custom_dot_events').on('click', function(ev)
				{	
					var dot = jQuery(ev.target);
					jQuery('.custom_dot_events').removeClass('active');
					dot.addClass('active');
					vidSlider.trigger('to.owl.carousel', [jQuery(this).index(), 300]);
				});
			}

			/* Change active class for dots when slide changes by nav or touch */
			vidSlider.on('changed.owl.carousel', function(event)
			{
				jQuery('.custom_dot_events').removeClass('active');
				jQuery('.custom_dots_events li').eq(event.page.index).addClass('active');
			});	
		}
	}

	/* 

	7. Init Grid

	*/

	function initGrid()
	{
		setTimeout(function()
		{
			jQuery('.grid').masonry(
			{
				itemSelector:'.grid-item',
				columnWidth: '.card_default',
				gutter:30
			});
		}, 500);
			
	}

});