<?php if ( !is_child_theme() ) { ?>
<style>

/*=============================================================================================
[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[ Main Nav Style ]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]
=============================================================================================*/
.navbar {
	border:0;
	margin:0;
	border-radius:0;
	padding:0;
	background: <?php echo get_theme_mod( 'main_color', '#333333'); ?>;
}

/*=============================================================================================
[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[ Level One Nav ]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]
=============================================================================================*/

.navbar li {
	font-family: 'Lato', 'Arial', sans-serif;
}

/* Main Menu Item */
.navbar .navbar-nav > li > a{
    padding: 15px 20px;
    font-size: 14px;
    font-weight: 300;
    text-transform: uppercase;
    color:#efefef;
}

/* Main Menu Item Hover, Active, Focus, Open */
.navbar .navbar-nav > li > a:hover,
.navbar .navbar-nav > li > a:focus,
.navbar .navbar-nav > .active > a,
.navbar .navbar-nav > .active > a:hover,
.navbar .navbar-nav > .active > a:focus,
.navbar .navbar-nav > .open > a,
.navbar .navbar-nav > .open > a:hover,
.navbar .navbar-nav > .open > a:focus {
	color: #efefef;
	background: <?php echo get_theme_mod( 'secondary_color', '#444444'); ?>;
}

/*=============================================================================================
[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[ Level Two Nav (Dropdown) ]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]
=============================================================================================*/

/* Dropdown Menu Wrap */
.dropdown-menu{
	padding: 0;
}

/* Dropdown Menu Item */
.dropdown-menu>li>a{
	padding: 12px;
}

/* Dropdown Menu Item Hover, Active, Focus */
.dropdown-menu>li>a:hover,
.dropdown-menu>li>a:focus,
.dropdown-menu>.active>a,
.dropdown-menu>.active>a:hover,
.dropdown-menu>.active>a:focus{
	color: #efefef;
	background: <?php echo get_theme_mod( 'secondary_color', '#444444'); ?>;
}


/*=============================================================================================
[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[ Mobile Menu ]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]
=============================================================================================*/

/* Mobile Menu Toggle Button Border */
.navbar .navbar-toggle {
  border-color: transparent;
}

/* Mobile Menu Toggle Bar BG*/
.navbar .navbar-toggle:hover,
.navbar .navbar-toggle:focus {
	background: <?php echo get_theme_mod( 'main_color', '#333333'); ?>;
}

/* Mobile Menu Toggle Button Icons (Hamburger Menu) */
.navbar .navbar-toggle .icon-bar {
  background-color: #efefef;
}

/* Mobile Menu Toggle Button Icons (Hamburger Menu) Hover */
.navbar .navbar-toggle:hover .icon-bar,
.navbar .navbar-toggle:focus .icon-bar{
	background-color: <?php echo get_theme_mod( 'secondary_color', '#444444'); ?>;
}

/* Mobile Menu Icons */
.navbar-icons li a{
	color: white;
}

/* Mobile Menu Icons Hover */
.navbar-icons li a:hover  {
	background: <?php echo get_theme_mod( 'secondary_color', '#444444'); ?>;
}

/* Mobile Dropdown Menu Box Border */
.navbar .navbar-collapse {
  border-color: #999;
}

/*========================================================================
						Bootstrap 3 Media Queries           
========================================================================*/

/*==========  Mobile First Method  ==========*/

/* Custom, iPhone Retina */ 
@media only screen and (min-width : 320px) {
    
}

/* Extra Small Devices, Phones */ 
@media only screen and (min-width : 480px) {

}

/* Small Devices, Tablets */ /* Mostly used. Size of iPad Mini non-retina and iPhone 6 Plus */
@media only screen and (min-width : 768px) {

}

/* Medium Devices, Desktops */
@media only screen and (min-width : 992px) {

}

/* Large Devices, Wide Screens */
@media only screen and (min-width : 1200px) {

}

/*==========  Non-Mobile First Method  ==========*/

/* Large Devices, Wide Screens */
@media only screen and (max-width : 1200px) {

}

/* Medium Devices, Desktops */
@media only screen and (max-width : 992px) {

}

/* Small Devices, Tablets */
@media only screen and (max-width : 768px) {

}

/* Extra Small Devices, Phones */ 
@media only screen and (max-width : 480px) {

}

/* Custom, iPhone Retina */ 
@media only screen and (max-width : 320px) {
    
}

</style>

<?php } ?>