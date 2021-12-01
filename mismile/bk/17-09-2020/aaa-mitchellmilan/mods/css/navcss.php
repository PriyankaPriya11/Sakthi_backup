<style>
/*========================================================================
							Main Nav Style           
========================================================================*/
.navbar {
	border:0;
	margin:0;
	border-radius:0;
	padding:0;
	background: 	;
}

.home #navbar { float: right; margin-top:33px;}
.home .navbar-collapse{  }


.navbar-nav { float: right; margin-top:20px;}


 .home .navbar-header {
        float: none;
    }
  .home .navbar-toggle {
        display: block;
		margin:0;
    }
.home #headerbar > header div .navbar-collapse {
    position: absolute !important;
    top: 137px;
    right: 0px;
    background: rgba(1, 37, 72, 1);
    z-index: 9999;
    padding: 0;
    width: 100%;
}
#headerbar > header div {
    position: static !important;
}
#navbar .navbar {
    position: static;
}
   .home .navbar-collapse.collapse {
        display: none!important;
    }
   .home .navbar-nav {
        float: none!important;
        margin: 7.5px 30px;
    }
   .home .navbar-nav>li {
        float: none;
		display:inline-block;
    }
   .home .navbar-nav>li>a {
        padding-top: 10px;
        padding-bottom: 10px;
    }




/*========================================================================
							Menu Level One           
========================================================================*/

 .navbar li {
	font-family: 'Lato', 'Arial', sans-serif;
}

/* Main Menu Item */
.home .navbar .navbar-nav > li > a{  background:none; color:#fff; max-width:100%; font-size: 14px; padding: 10px 7px;}

.navbar .navbar-nav > li > a{
    padding: 15px 13px;
    font-size: 14px;
    font-weight: 300;
    text-transform: uppercase;
    color: #fff;
	transition: all 0.6s ease-in-out 0s;
	-moz-transition: all 0.6s ease-in-out 0s;
	-ms-transition: all 0.6s ease-in-out 0s;
	-o-transition: all 0.6s ease-in-out 0s;
	-webkit-transition: all 0.6s ease-in-out 0s;
}

/* Main Menu Item Hover, Active, Focus, Open */

.home .navbar .navbar-nav > li > a:hover,
.home .navbar .navbar-nav > li > a:focus,
.home .navbar .navbar-nav > .active > a,
.home .navbar .navbar-nav > .active > a:hover,
.home .navbar .navbar-nav > .active > a:focus,
.home .navbar .navbar-nav > .open > a,
.home .navbar .navbar-nav > .open > a:hover,
.home .navbar .navbar-nav > .open > a:focus {
	color: #16263b;
	background: #fff;
}



.navbar .navbar-nav > li > a:hover,
.navbar .navbar-nav > li > a:focus,
.navbar .navbar-nav > .active > a,
.navbar .navbar-nav > .active > a:hover,
.navbar .navbar-nav > .active > a:focus,
.navbar .navbar-nav > .open > a,
.navbar .navbar-nav > .open > a:hover,
.navbar .navbar-nav > .open > a:focus {
	color: #fff;
	background: none;
}

/*========================================================================
							Menu Level Two (Dropdown)           
========================================================================*/

/* Dropdown Menu Wrap */
.dropdown-menu{
	padding: 0;
}

.home .dropdown-menu{ position:absolute; width:100%; border-radius:0; border: none; box-shadow: none; }
.home .dropdown-menu > li> a{background: #16263b; color: #fff }
.home .dropdown-menu > li> a:hover{ color:#fff; }
.home .navbar ul ul li:hover ul { display: block; margin-top:0;}
.navbar ul ul li:hover ul {  border-radius: 0; display: block; left: 100%; margin-top: 0; top: -1px;}
.navbar li:after { clear: both; content: ""; display: block;}
.home .navbar-nav ul ul li a { white-space:normal;}


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
	color: #fff;
	background: #012548;
}


/*========================================================================
							Mobile Menu           
========================================================================*/

/* Mobile Menu Toggle Button Border */
.navbar .navbar-toggle {
  border-color: transparent;
}

/* Mobile Menu Toggle Bar BG*/
.navbar .navbar-toggle:hover,
.navbar .navbar-toggle:focus {
	background:;
}

/* Mobile Menu Toggle Button Icons (Hamburger Menu) */
.navbar .navbar-toggle .icon-bar {
  background-color:#fff;
  width: 52px;
  margin-bottom: 4px;
  float: right;
  clear: both;
  width:52px;
  height:4px;
}

/* Mobile Menu Toggle Button Icons (Hamburger Menu) Hover */
.navbar .navbar-toggle:hover .icon-bar,
.navbar .navbar-toggle:focus .icon-bar{
	background-color: ;
}

/* Mobile Dropdown Menu Box Border */
.navbar .navbar-collapse {
  border-color:;
}






.navbar-collapse.collapse.in {display:block !important; }

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
@media only screen and (max-width : 1199px) {

.navbar-nav { margin-top: 0;}
.home #headerbar > header div .navbar-collapse{top:131px;}


}

/* Medium Devices, Desktops */
@media only screen and (max-width : 991px) {

.navbar .navbar-nav > li > a{padding: 3px 11px 10px;}

.home #navbar{ margin-top:13px;}

.home #headerbar > header div .navbar-collapse {
    top: 109px;
}


}

/* Small Devices, Tablets */
@media only screen and (max-width : 767px) {

#navbar { margin-top: 10px;}
.navbar-nav{ float:none; margin: 7.5px 0;}
.navbar-collapse{ border:none; box-shadow:none;}
.navbar-nav{ text-align:left;}
.navbar .navbar-nav > li > a{ padding:14px 11px; color:#16263b; }
.navbar-toggle{margin-right: 5px;}

.home .navbar .navbar-nav > li > a:hover,
.home .navbar .navbar-nav > li > a:focus,
.home .navbar .navbar-nav > .active > a,
.home .navbar .navbar-nav > .active > a:hover,
.home .navbar .navbar-nav > .active > a:focus,
.home .navbar .navbar-nav > .open > a,
.home .navbar .navbar-nav > .open > a:hover,
.home .navbar .navbar-nav > .open > a:focus {
	color: #fff;
	background: #16263b;
}

.navbar .navbar-nav > li > a:hover,
.navbar .navbar-nav > li > a:focus,
.navbar .navbar-nav > .active > a,
.navbar .navbar-nav > .active > a:hover,
.navbar .navbar-nav > .active > a:focus,
.navbar .navbar-nav > .open > a,
.navbar .navbar-nav > .open > a:hover,
.navbar .navbar-nav > .open > a:focus {
	color: #fff;
	background: #16263b;
}

.navbar-nav{ background:#fff;}

.home .navbar-nav{ background: #fff;}
.home .navbar .navbar-nav > li > a{ color:#16263b; padding: 14px 11px; }

.navbar .navbar-toggle {
  float: right;
  height: 45px;
  margin: 0;
  padding: 10px 15px;
  width: auto;
  font-family: "Roboto Slab",serif;
}



.home #navbar { float: none; margin-top: 33px;}
.home .navbar-collapse{ padding: 0 15px; position:static; width:100%; top: 100%; }
.dropdown-menu > li > a{ padding:14px 11px 14px 25px !important; font-size:15px; }
.navbar-nav ul ul li a { padding-left: 40px !important;}

.home .navbar-collapse {padding: 0 15px;position: static;width: 100% !important;top: 100%;}
.home .navbar-nav>li{display:block;}
.home #headerbar > header div .navbar-collapse {
    position: static !important;
}
}



@media only screen and (max-width : 640px) {

.navbar .navbar-toggle .icon-bar {
  height: 3px ;
  margin-bottom: 2px;
  width: 42px;
}


.navbar{ position:fixed; width:100%; top:0; left:0; z-index:99; background:rgba(1,37,72,0.6); padding: 8px 0;  }
.home #navbar{ margin-top:0;}
.home .navbar-collapse { top: 100%;}
	
}


/* Extra Small Devices, Phones */ 
@media only screen and (max-width : 480px) {

}

/* Custom, iPhone Retina */ 
@media only screen and (max-width : 320px) {
    
}
</style>