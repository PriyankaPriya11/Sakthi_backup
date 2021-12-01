# Change Log

Changes, Fixes and Additons can be found on the Change Log. For all other minor notes, please head over to our [remote repo](https://bitbucket.org/optimized360/surge).

## Core Updates
* 1.0.2: The DRY Update | July 6st, 2016

	> The System Output received a major overhaul and it is now following the DRY principal. As Surge becomes larger and able to proliferate with ease thanks to The Pluggable Update, it is best for Surge to follow OOP's main principal of DRY. There are other places were DRY vs WET can be implemented within the framework.

* 1.0.1: The Pluggable Update | June 1st, 2016
	
	> All core files were updated to be pluggable. This gives child themes absolute control when it comes to overriding parent functions. This way, child themes function files will be smaller, and all the overhead control can be handled by the parent without affecting child themes.

* 1.0.7: The Division Update | November 28th, 2016

	> Surge now services Custom (known as core in the backed) sites first, template sites second. Instead of having a function file/script on each custom site to remove unwanted functionality, template-centric functionality will be applied to template sites only via a checkbox. Note: this change affects Surge, Custom Startup, Template Startup and Skywalker themes.

* 1.0.8: Mankind Divided Update | February 15th, 2017

	> All non-essential components have been removed from Surge and placed on a plugin (Surge XP). Surge has now become the framework that is used exclusively for Template clients; however, its code base will remain broken into CORE and TEMPLATE in the case of any rollback. The only major difference will be that Surge Custom (CORE) has the template checkbox and Surge version 1.0.8 does not. To use Surge version 1.0.8 on custom sites, simply remove line 26 from the function file.

### 1.0.8: February 15th, 2017
* Add: Google Reviews (with map icon) to the customizer. This is to separate Google Plus profile vs Google Reviews. [#278a300](https://bitbucket.org/optimized360/surge/commits/278a300fd873de4d83621cb11d2e0ceff7d6c581)
* Removed: Custom CSS from the customizer. Wordpress 4.7 introduces this by default. [#969de46](https://bitbucket.org/optimized360/surge/commits/969de46d80d4a2b0370f665125864bdc21823176)
* Removed: Use of checkbox for template as Surge is now exclusively used for templates. [#c06d0e1](https://bitbucket.org/optimized360/surge/commits/c06d0e1cba8253a9150c2d2af77bbd34ee796986)
* Removed: Client ID, Google Analytics, Site-wide SEO, and Business Category. [#2013870](https://bitbucket.org/optimized360/surge/commits/2013870ab7de65750df517915986af1e40ceb725)

### 1.0.79: February 2nd, 2017
* Removed: All functions that are not vital to theme functions are moved to a plugin that can serve both Surge, Legacy and Rogue. [#2013870](https://bitbucket.org/optimized360/surge/commits/2013870ab7de65750df517915986af1e40ceb725)

### 1.0.73: December 8th, 2016
* Add: Cloak. Hides website's body. Adds coming soon message.[#e94c156](https://bitbucket.org/optimized360/surge/commits/e94c156a9adeabeba5a97f4311e32fd21cb199eb)

### 1.0.72: December 7th, 2016
* Add: Adding the ability to turn on/off Template capabilities. This is known as Site Class. Template class vs Custom/Core class.[#d2e5aed](https://bitbucket.org/optimized360/surge/commits/d2e5aed6caa1bab83b7a353f7c48f87cf985063d)
* Add: Preventative measures for security risks. Removed plugins pages. Added a warning in the reset password screen.[#aa44503](https://bitbucket.org/optimized360/surge/commits/aa44503dac5a2d8d176f98c405d42a4f18b7a5f6)

### 1.0.71: December 2nd, 2016
* Removed: All Template front-end structure (styles and mods) have been removed as these are not needed to run Surge. In its place, there is a simple front-end title that displays the theme name and the theme version.[#3e1601f](https://bitbucket.org/optimized360/surge/commits/3e1601f31ff152627a8f6948bed6c8d5f995fb37)

### 1.0.7: November 28th, 2016
* Change: Surge now services Custom sites first, template sites second. Instead of having a function file for custom sites to remove unwanted functionality, this file will be on template sites to add template functionality. Note: this change affects Custom Startup, Template Startup and Skywalker. [#9ce8dcf](https://bitbucket.org/optimized360/surge/commits/9ce8dcf92cb83cdf88918340547505b211cfdcf4)
* Fix: Cleaning up the Core Theme Options and other function so that the division between core functions and add-ons are clear. [#9ce8dcf](https://bitbucket.org/optimized360/surge/commits/9ce8dcf92cb83cdf88918340547505b211cfdcf4)

### 1.0.61: November 28th, 2016
* Fix: Making the division between Template and Custom functions more prominant. We have divided admin menu labels into "Surge" and "Template" functions. One for template only use and the other for Surge overall use.[#26640f5](https://bitbucket.org/optimized360/surge/commits/26640f5fc30aaaa7e532eec72d37920c81c596e9)
* Add: Site Stat label that redirect you to the Jetpack's stats page. [#73e6f50](https://bitbucket.org/optimized360/surge/commits/73e6f5031d06adbae67c3fe7d313efd13c65d4c8)
* Add: Conditional stylesheet for the admin menu. This will display the "Role Red Alert" without having to rely on the Welcome Panel or have it show only on the dashboard. [#6b76fe3](https://bitbucket.org/optimized360/surge/commits/6b76fe3529e32a92a8835e5a737abc162a76319c)

### 1.0.6: November 16th, 2016
* Add: Adding a more polished welcome screen in preparation for a possible inclusion of 360 Control Panel into Surge-powered sites. [#3ffdfb3](https://bitbucket.org/optimized360/surge/commits/3ffdfb3e055d961c265d646e548a858d6a817c3d)
* Add: Adding a Client ID to the customizer so that CP and Surge-powered sites have a connecting point if we use 360CP within Surge. This heavily relies on Wordpress' WP RESTful API. [#9244a9f](https://bitbucket.org/optimized360/surge/commits/9244a9ff5b92d03e0917d21cea42ab98dd29ecfa)

### 1.0.5: October 28th, 2016
* Fix: Adding some support for the search archive pages. [#96bfa37](https://bitbucket.org/optimized360/surge/commits/96bfa37437b3a63d62e0677c2d93039f4ca64538)
* Add: Introducing CP features to Surge in beta form. [#325a685](https://bitbucket.org/optimized360/surge/commits/325a68524e68e66bd8983bb193183beae61e9de5)

### 1.0.4: September 19th, 2016
* Add: Cache Busting versioning parameter to all mod assets. [#123d7c8](https://bitbucket.org/optimized360/surge/commits/123d7c8a97c1ec9cb1c15088d79f8fe0df238297)
* Add: App.js for per-theme jQuery functions. [#123d7c8](https://bitbucket.org/optimized360/surge/commits/123d7c8a97c1ec9cb1c15088d79f8fe0df238297)
* Fix: Adding ";" to all missing PHP inclusions. [#a0d42d4](https://bitbucket.org/optimized360/surge/commits/a0d42d4734cbb7a1eb123611bf8770837d8a3928)
* Add: "Support" label for dashboard. All users that are not admin will be able to use this to get to the tickets form. [#123d7c8](https://bitbucket.org/optimized360/surge/commits/123d7c8a97c1ec9cb1c15088d79f8fe0df238297)


### 1.0.3: September 19th, 2016
* Add: Cache Busting versioning parameter to the stylesheet of the current theme. This will append the stylesheet version number to the end of the Style.css inclusion as well as a fileModTime integer. [#c7a133a](https://bitbucket.org/optimized360/surge/commits/c7a133ae2e154e44bc277852aee7574764f9406e)


### 1.0.3: August 12th, 2016
* Add: Optimized360.com centric titles for the title tag. We may be able to remove these and place theme on Skywalker itself, but for now we will keep them here. [#f1c3523](https://bitbucket.org/optimized360/surge/commits/f1c352308c542e3f6daba2c38859ad551ff84711)
* Fix: Fixing a title error with the archive's if statement. [#f1c3523](https://bitbucket.org/optimized360/surge/commits/f1c352308c542e3f6daba2c38859ad551ff84711)
* Add: Adding Opt360 Content aware titles. Articles, Services, Blog now show their names not Category: Articles and so on. [#f1c3523](https://bitbucket.org/optimized360/surge/commits/f1c352308c542e3f6daba2c38859ad551ff84711)

> After this update, all major changes will recieve and increase in number if warranted.


### 1.0.2: August 9th, 2016
* Fix: Fixed the language att that was placed in the wrong section of the code. [#be9fcd6](https://bitbucket.org/optimized360/surge/commits/be9fcd6e4063dc0eb0617cc0a2470a0210387d74)
* Fix: Fixed Google Font URL string that had pipes as suppose to its encoded character.[#be9fcd6](https://bitbucket.org/optimized360/surge/commits/be9fcd6e4063dc0eb0617cc0a2470a0210387d74)
* Fix: Updating the Map Output and Map Shortcode so that address is stripped from all white space before being parsed into the Google Maps URL. [#a0108b5](https://bitbucket.org/optimized360/surge/commits/a0108b5814d6b908d287090db772fe5f79e6c7c3)

### 1.0.2: August 2nd, 2016
* Fix: Adding archive titles and post/page titles to be present in the default sets of the <title> tag. Adding post/page names to site-wide SEO so no repeated titles are spread to the site. [#773be93](https://bitbucket.org/optimized360/surge/commits/773be934e50aabc5b9bdc7309abdca043dd6b9c3)
* Add: Adding City, State to the <title> tag. [#1cb46ee](https://bitbucket.org/optimized360/surge/commits/1cb46eeff932578f6e31c0c59b280004abbc374e)

### 1.0.2: July 28th, 2016
* Add: Adding a title to the archives so that custom post types get their name in the title. [#e4dde40](https://bitbucket.org/optimized360/surge/commits/e4dde40fab4ce5704dd45d748a4231c0faa6e4f7)
Add: Adding post type category name to the next post links (singular). [#e4dde40](https://bitbucket.org/optimized360/surge/commits/e4dde40fab4ce5704dd45d748a4231c0faa6e4f7)
* Fix: Moving the pipe before the "Login" link inside the "login" span so that if we need to hide the login, the pipe will be hidden as well. Removed excessive use of span. This hunk can use clean up, but not priority. [#714a811](https://bitbucket.org/optimized360/surge/commits/714a8116d31e4df7514a0bd3d66771f29121faf9)
* Fix: Fixing the date link for posts. It will now link you to the date archive. [#c64981b](https://bitbucket.org/optimized360/surge/commits/c64981b851f2fb74d63480b85f0b1d4f1b21d66d)
* Add: Adding a title to the archives to handle custom taxonomy. [#86cbf85](https://bitbucket.org/optimized360/surge/commits/86cbf851664d882fab689fdac510f818ebdb05db)

### 1.0.2: July 26th, 2016
* Add: Added classes on the article of template-parts posts-loop vs post-single.[#3d0cde7](https://bitbucket.org/optimized360/surge/commits/3d0cde7f441973d9ee49fc6d528af3c589a1ceb8)
* Fix: Adding some reset blog styles from framework.css to Blog.css. [#3d0cde7](https://bitbucket.org/optimized360/surge/commits/3d0cde7f441973d9ee49fc6d528af3c589a1ceb8)

### 1.0.2: July 25th, 2016
* Fix: SEO fields get_post_meta() function has been fixes.[#0cc6aa3](https://bitbucket.org/optimized360/surge/commits/0cc6aa36c0afe932d3d6d913beba0ddb5dc64e2a)

### 1.0.2: July 8st, 2016
* Fix: Removing Editor Styles.[#9a07fef](https://bitbucket.org/optimized360/surge/commits/9a07fefc75a225773ba4b975daeb0c7586acbccd)

### 1.0.2: July 8st, 2016
* Add: Based on our Divi Playground Template, we have added a Divi Slider Output that outputs the page with the name of "Divi Slider" (slug of "divi-slider"). This output can be used for anything, but we are currently targeting it for slider usage instead of the meta slider. ([#93aac2e](https://bitbucket.org/optimized360/surge/commits/93aac2e456a7b11615bd00cd0b44eb575e185283))

### 1.0.2: July 7st, 2016
* Add: Adding Custom Posts Navigation Links so that blogs and articles and be browsed while in the same post. Note: All these options can become available through the customizer under Theme Options, should the need arise. ([#0c5e28f](https://bitbucket.org/optimized360/surge/commits/0c5e28fa81c2c70f1867104dc267f4a53e3efcc6))
* Change: Cleaning up the new DRY System Output and its files so that they are consistent across all files. Articles now have header, div, footer for better SEO and HTML5 validation. ([#dac69ae](https://bitbucket.org/optimized360/surge/commits/dac69ae77e5f1927e310925ecf0a4a3829c45857))
* Add: Adding a reset stylesheet for blogs that will be activated/included when the blog status option is set to active. This stylesheet will contain generic blog styles like comments, entry meta as well generic widget styles if need be. ([#d6d8de4](https://bitbucket.org/optimized360/surge/commits/d6d8de461dad052be838510dfc411d62eb3061e5))
* Add: Readme.txt to comply with Wordpress.org's inspections. This file is not needed. ([#444b3c](https://bitbucket.org/optimized360/surge/commits/4444b3cb8a957825c9082a36254e4d9d84625159))
* Add: Page Templates: Surge now has Page Templates that can be utilized in different situations. The first Page Template is called DIVI and it is a complete DIVI playground. ([#68c57b2](https://bitbucket.org/optimized360/surge/commits/68c57b258c2198144222ecc78dd3070897ed2402))

### 1.0.2: July 6st, 2016
* Core Update: 1.0.2: The DRY Update
* Add: Completely DRYing the System Output into Template Tags and Template Parts. System Output is now one clean, DRY, comprehensive and scalable file with dependencies of other files. ([#b876897](https://bitbucket.org/optimized360/surge/commits/b87689763c3db75e0ea9ce1ceac38cdc7dfe4956))
* Add: Custom Excerpts that are wrapped in a div and forgo "[...]" in favor of "...". ([#80f2faf](https://bitbucket.org/optimized360/surge/commits/80f2faff81fa4af29d99f24065389f682d98cb8a))
* Change: Moving the Form customizer option to template centric file so that it only shows up on Surge: Template. ([#204dbe2](https://bitbucket.org/optimized360/surge/commits/204dbe29108ef71bb29929a2a53b1f70eccaf0b9))
* Fix: Updating Entry Meta Template Tags so that we can keeps things DRY and style them properly. ([#4429911](https://bitbucket.org/optimized360/surge/commits/442991124540fe17578af85d083a8d72e06af9b0))
* Fix: Placing the icons inside the spans tags of the corresponding items so that they can be moved arround with the icons. ([#a48ae3f](https://bitbucket.org/optimized360/surge/commits/a48ae3f080b539dee96c2e6c940b36ceda107fe8?at=master))

### 1.0.1: July 5st, 2016
* Add: Creating Template Tags to use with System-Output and Template Parts. ([#9011dae](https://bitbucket.org/optimized360/surge/commits/9011dae9412c63516fde4cdb44a6612eae9a8035))
* Add: Dividing and DRYing the System Output file into Template Tags and Template Parts. ([#9011dae](https://bitbucket.org/optimized360/surge/commits/9011dae9412c63516fde4cdb44a6612eae9a8035))
* Remove: Completely removing all trace of Custom Taxonomy and Custom Post Type. Education and Specialties. ([#a6fe6ba](https://bitbucket.org/optimized360/surge/commits/a6fe6baeddd5256f63ee1d31ad606b06c8c9da96))
* Add: Creating Surge Entry Meta Bottom and giving both it and Surge Entry Meta class of entry-meta-bottom and top accordingly. This way icons can be styled appropriately and there is no need for a separate page to call the meta on post roll. ([#4429911](https://bitbucket.org/optimized360/surge/commits/442991124540fe17578af85d083a8d72e06af9b0))
* Add: Adding a few non-opinionated styles to the framework styles to reset blog centric HTML. ([#087a876](https://bitbucket.org/optimized360/surge/commits/087a876374becbd1d116fac11c51fae045d3ee36))


### 1.0.1: July 1st, 2016
* Add: Hiding author names based on ID. ([#80492eb](https://bitbucket.org/optimized360/surge/commits/80492eb589f47cb6087f3317d6f7f6af641bcb9c))
* Add: Adding Sidebar-1 and the abilility to use widgets on the sidebar. ([#80492eb](https://bitbucket.org/optimized360/surge/commits/80492eb589f47cb6087f3317d6f7f6af641bcb9c))

### 1.0.1: June 30th, 2016
* Add: Removing Wordpress Version Number from meta, scripts, styles. ([#b1c9181](https://bitbucket.org/optimized360/surge/commits/b1c9181013e92877aa05c447247347376b907b52))
* Fix: Adding Posts back into the customizer picker. ([#aa65a0d](https://bitbucket.org/optimized360/surge/commits/aa65a0d981b94cecbd13bb408c127d3eb72cc005))
* Add: Adding a 404 Page so that the_posts don't appear when a user hits a 404 page. ([#14a5902](https://bitbucket.org/optimized360/surge/commits/14a590265690c93a183d6ea954b83ef5b34615d1))
* Fix: Adding both ACF and ACF Pro to the dependency notice in the admin dashboard. ([#c26cd4d](https://bitbucket.org/optimized360/surge/commits/c26cd4d49b074b9aeac9d6b4885966646b294ba4))
* Add: Bringing in Surge: Custom functions into the parent theme and calling it on the child's function file. This way we can update custom sites at will with one file. Unfortunately we cannot do this with Surge: Template as they deal with colors. ([#8ba9dc1](https://bitbucket.org/optimized360/surge/commits/8ba9dc1607cce9e0af2f839dbbc825228b5cf639))
* Fix: Fixing an issue where a if template to custom scenario were to happen, editor roles would be able to change themes and see menus only Surge: Template editors should see. ([#8ba9dc1](https://bitbucket.org/optimized360/surge/commits/8ba9dc1607cce9e0af2f839dbbc825228b5cf639))

### 1.0.1: June 27th, 2016
* Add: Adding a Changelog. ([#b421558](https://bitbucket.org/optimized360/surge/commits/b4215583eb90e3d8631013739f5cf08cbf455bd9))

### 1.0.1: June 1st, 2016
* Core Update: 1.0.1 The Pluggable Update.
* Change: Making all functions pluggable and child theme compatible. ([#e411e22](https://bitbucket.org/optimized360/surge/commits/e411e222dee0e0f0cf4982f94c40aa3a3ee277e1))

### 1.0.0: Before June 1st, 2016
* Start