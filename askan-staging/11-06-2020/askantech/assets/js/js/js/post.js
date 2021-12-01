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

jquery(document).ready(function()
{
	"use strict";

	/* 

	1. Vars and Inits

	*/

	var header = jquery('.header');
	var menuActive = false;
	var menu = jquery('.menu');
	var burger = jquery('.hamburger');

	setHeader();

	jquery(window).on('resize', function()
	{
		setHeader();
	});

	jquery(document).on('scroll', function()
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
		if(jquery(window).scrollTop() > 100)
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
		if(jquery('.menu').length)
		{
			var menu = jquery('.menu');
			if(jquery('.hamburger').length)
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

						jquery(document).one('click', function cls(e)
						{
							if(jquery(e.target).hasClass('menu_mm'))
							{
								jquery(document).one('click', cls);
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
		if(jquery('.sidebar_slider_top').length)
		{
			var topSlider = jquery('.sidebar_slider_top');
			
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

			if(jquery('.custom_prev_top').length)
			{
				jquery('.custom_prev_top').on('click', function()
				{
					topSlider.trigger('prev.owl.carousel');
				});
			}

			if(jquery('.custom_next_top').length)
			{
				jquery('.custom_next_top').on('click', function()
				{
					topSlider.trigger('next.owl.carousel');
				});
			}

			/* Custom dots events */
			if(jquery('.custom_dot_top').length)
			{
				jquery('.custom_dot_top').on('click', function(ev)
				{	
					var dot = jquery(ev.target);
					jquery('.custom_dot_top').removeClass('active');
					dot.addClass('active');
					topSlider.trigger('to.owl.carousel', [jquery(this).index(), 300]);
				});
			}

			/* Change active class for dots when slide changes by nav or touch */
			topSlider.on('changed.owl.carousel', function(event)
			{
				jquery('.custom_dot_top').removeClass('active');
				jquery('.custom_dots_top li').eq(event.page.index).addClass('active');
			});	
		}
	}

	/* 

	5. Init Vid Slider

	*/

	function initVidSlider()
	{
		if(jquery('.sidebar_slider_vid').length)
		{
			var vidSlider = jquery('.sidebar_slider_vid');
			
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

			if(jquery('.custom_prev_vid').length)
			{
				jquery('.custom_prev_vid').on('click', function()
				{
					vidSlider.trigger('prev.owl.carousel');
				});
			}

			if(jquery('.custom_next_vid').length)
			{
				jquery('.custom_next_vid').on('click', function()
				{
					vidSlider.trigger('next.owl.carousel');
				});
			}

			/* Custom dots events */
			if(jquery('.custom_dot_vid').length)
			{
				jquery('.custom_dot_vid').on('click', function(ev)
				{	
					var dot = jquery(ev.target);
					jquery('.custom_dot_vid').removeClass('active');
					dot.addClass('active');
					vidSlider.trigger('to.owl.carousel', [jquery(this).index(), 300]);
				});
			}

			/* Change active class for dots when slide changes by nav or touch */
			vidSlider.on('changed.owl.carousel', function(event)
			{
				jquery('.custom_dot_vid').removeClass('active');
				jquery('.custom_dots_vid li').eq(event.page.index).addClass('active');
			});	
		}
	}

	/* 

	6. Init Events Slider

	*/

	function initEventsSlider()
	{
		if(jquery('.sidebar_slider_events').length)
		{
			var vidSlider = jquery('.sidebar_slider_events');
			
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

			if(jquery('.custom_prev_events').length)
			{
				jquery('.custom_prev_events').on('click', function()
				{
					vidSlider.trigger('prev.owl.carousel');
				});
			}

			if(jquery('.custom_next_events').length)
			{
				jquery('.custom_next_events').on('click', function()
				{
					vidSlider.trigger('next.owl.carousel');
				});
			}

			/* Custom dots events */
			if(jquery('.custom_dot_events').length)
			{
				jquery('.custom_dot_events').on('click', function(ev)
				{	
					var dot = jquery(ev.target);
					jquery('.custom_dot_events').removeClass('active');
					dot.addClass('active');
					vidSlider.trigger('to.owl.carousel', [jquery(this).index(), 300]);
				});
			}

			/* Change active class for dots when slide changes by nav or touch */
			vidSlider.on('changed.owl.carousel', function(event)
			{
				jquery('.custom_dot_events').removeClass('active');
				jquery('.custom_dots_events li').eq(event.page.index).addClass('active');
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
			jquery('.grid').masonry(
			{
				itemSelector:'.grid-item',
				columnWidth: '.card_small_with_image',
				gutter:30
			});
		}, 500);
			
	}

});