# Developer Guide v.1 #

Follow the instructions here to develop a rock-solid theme for Optimized360. These steps should allow you to code faster, smarter and without using extra code.

## Creating a Theme Using Outputs and Modules ##

To start creating a theme, use Bootstrap 3 to edit the files found on mods>modules (known as modules) as well as index.php, and sidebar.php. Modules call output files via get_template_part to output content to the website (phone numbers, email, services, call to actions, etc.). You can then style your theme with Style.css and Navcss.php. Style.css and Navcss.php will contain all the classes needed to style outputs, modules and Bootstrap's navbar. Surge: Custom is your playground. Aside from the sections that are marked to not be edited, you are free to override any modules or outputs but we do encourage you not to.

## Understanding Modules ##

Modules are big chunks of a theme that are called in header.php and footer.php via get_template_part. Surge comes with pre-made modules. These modules include:

Module   		   | Module CSS ID
------------------ | ----------
Headerbar.php 	   | #headerbar
Hero-Home.php	   | #hero
Hero-Inner.php	   | #hero
Navbar.php 		   | #navbar
Services.php	   | #services
Highlights.php	   | #highlights
Testimonials.php   | #testimonials
Footer-Top.php	   | #footer-top
Footer-Main.php	   | #footer-main
Footer-Bottom.php  | #footer-bottom
Index.php 		   | #main-content
Sidebar.php 	   | #sidebar

As displayed above, a module file has a predefined CSS ID. This CSS ID should not be changed and should remain the parent element of that file. You can start coding your module inside this parent element.

If your theme has a header that only contains the navigation menu, simply don't use headerbar.php and just use navbar.php and vise versa.

If your design contains only a logo for its header, edit headerbar.php to display the logo. The rest of the site should be coded outside of the headerbar.php file. Anything that is services related should be coded in services.php, anything above the main footer that isn't part of the main body, should be coded inside of footer-top and so on.

## Understanding Outputs ##

Outputs are found in Framework>outputs. Output files output content to the website (phone numbers, email, services, call to action, etc.). For example, if your design calls for a phone number and an email, use the phone and email outputs. Outputs come with predefined classes that you can use in style.css.

For example, in the DOM the phone.php output will read:

	999-999-9999

If you inspect the DOM you can see that phone.php also includes a div with a class around the actual phone numher:

	<div class="phone">999-999-9999</div>

Style.css will contain all the classes that are predefined by these outputs.

Outputs are used inside the modules with this line:

	<?php get_template_part ('framework/outputs/phone') ?>

> Most of these outputs are found on the parent theme which should **never be touched**. In the child theme you are working on, you will have a few of these outputs. If you need alter their HTML feel free to use those as template. Do not override the other outputs that are not found on the child theme.

### Editable Files vs Non-editable Files. ###

* Header: Only edit the header when you need to rearrange, remove, add or hide modules. Remember to only edit whatever is below the START CUSTOMIZING LINE.
* Footer: Only edit the footer when you need to rearrange, remove, add or hide modules. Remember to only edit whatever is above the STOP CUSTOMIZING LINE.
* Functions: Never touch the functions file.
* Style, Index, Sidebar: These files currently work as they regularly do on common Wordpress themes. You may style them and code on them based on the examples provided.
* Never rearrange, remove, edit or alter the parent theme (Surge) in any way.

## Don'ts ##

* Do not add custom Functions to the Functions.php file or any other file.
* Do not modify the header or footer files above or below their START/STOP CUSTOMIZING lines.
* Do not rename modules. If you need to merge, simply delete the file you are not using and comment it out on either the header or the footer files.
* No overlapping code should be added to the modules (div class of jumbotron shouldn't open in headerbar.php and close in services.php). They should all work independently from each other.
* Do not rename the file structure. Mods and module structure should never be renamed.
* Do not Code a website outside of the module files, index and sidebar.
* Do not use excessive HTML and Bootstrap elements. Outputs should normally be wrapped within columns, if they need an extra layer, you may add ONE, but generally, try to avoid it and use the outputs predefined CSS and HTML structure.
* Do not use extra classes or extra bootstrap columns. For example, outputs come with predefined classes, do not wrap outputs around divs with the same class or IDs. Examples below.

***

### Using Outputs ###

	<!-- Correct -->
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php get_template_part ('framework/outputs/promo-1') ?>
			</div>
			<div class="col-md-6">
				<?php get_template_part ('framework/outputs/promo-2') ?>
			</div>
		</div>
	</div>

	<!-- Incorrect -->
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="promo promo1">
					<?php get_template_part ('framework/outputs/promo-1') ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="promo promo1">
					<?php get_template_part ('framework/outputs/promo-2') ?>
				</div>
			</div>
		</div>
	</div>

### Using Bootstrap ###

	<!-- Correct -->
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php get_template_part ('framework/outputs/promo-1') ?>
			</div>
			<div class="col-md-6">
				<?php get_template_part ('framework/outputs/promo-2') ?>
			</div>
		</div>
	</div>

	<!-- Incorrect -->
	<div class="container">
		<div class="row">
			<div class="col-md-12"> 
			<!-- Misused. Columns below add up to 12. 
			No Need for additional col-md-12 div.
			Also, missing row div after 12 col div. -->
				<div class="col-md-6">
					<div class="promo promo1">
						<?php get_template_part ('framework/outputs/promo-1') ?>
					</div>
				</div>
				<div class="col-md-6">
					<div class="promo promo1">
						<?php get_template_part ('framework/outputs/promo-2') ?>
					</div>
				</div>
			</div>
		</div>
	</div>