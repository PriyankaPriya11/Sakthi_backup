/* JS Document */

/******************************

[Table of Contents]

1. Vars and Inits
2. Set Header
3. Init Menu
4. Init Grid


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

	4. Init Grid

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