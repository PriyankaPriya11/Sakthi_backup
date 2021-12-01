<?php /** * Template Name: amp-email-development */ ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>AMP EMAIL DEVELOPMENT</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri();?>/assets/amp_page_css/aos.css" rel="stylesheet">
	<script src="<?php echo get_template_directory_uri();?>/assets/amp_page_js/aos.js"></script>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/amp_page_css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/amp_page_css/icomoon.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/amp_page_css/style.css">
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/amp_page_css/css1/animate.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/amp_page_css/css1/bootstrap.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/amp_page_css/css1/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/amp_page_css/common.css">
	<!-- calling style for specific page -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/amp_page_css/home.css">
	<!-- Modernizr JS -->
	<script src="<?php echo get_template_directory_uri();?>/assets/amp_page_js/js1/modernizr-2.6.2.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
	<style>
		body img {
			width: 100%;
			height: 100%;
		}

		.part3 {
			padding: 50px 0;
		}

		.tet {
			text-align: center;
		}

		/* Main Title Area css
============================================================================================ */
		.main_title {
			text-align: center;
			margin-bottom: 30px;
		}

		.main_title h2 {
			font-size: 72px;
			color: #3fcaff;
			opacity: 0.2;
			margin: 0;
			line-height: 60px;
		}

		.main_title h1 {
			color: #222222;
			margin-top: -40px;
		}

		.main_title p {
			font-size: 14px;
			line-height: 24px;
			color: #777777;
			margin-bottom: 0px;
			max-width: 570px;
			margin: auto;
		}

		.main_title.white h2 {
			color: #fff;
		}

		.main_title.white p {
			color: #fff;
			opacity: 0.6;
		}

		/* End Main Title Area css
============================================================================================ */
		.collapsible {
			background: rgba(12, 52, 216, 0.8313725490196079);
    		color: white;
    		cursor: pointer;
    		padding: 23.2px;
    		width: 100%;
    		border: none;
    		text-align: left;
    		outline: none;
    		font-size: 18px;
		}

		.active,
		.collapsible:hover {
			background-color: rgba(2, 27, 130, 0.8313725490196079);
		}

		.collapsible:after {
			content: '\002B';
			color: white;
			font-weight: bold;
			float: right;
			margin-left: 5px;
		}


		.content {
			padding: 0 18px;
			max-height: 0;
			overflow: hidden;
			transition: max-height 0.2s ease-out;
			background-color: #f5f5f5;
			color: #000;
			font-weight: 500;
		}

		img.gf {
			width: 48%;
			position: absolute;
			top: 37%;
			left: 29%;
		}

		.laptop-wrapper {
			position: relative;
		}

		.cc-gifimg {
			position: absolute;
			top: 6.6%;
			left: 17%;
			width: 66%;
			background: red;
			height: 77%;
		}

		.cc-gifimg img {
			height: 100%;
			width: 100%;
			object-fit: cover;
		}

		@media only screen and (min-width:1499px) and (max-width:1367px) {
			.vp {

				background-image: url(https://www.askantech.com/wp-content/themes/askantech/images/lap.jpg);
				background-repeat: no-repeat;
				background-size: contain;
				background-position-x: 35%;
				padding-bottom: 50px;
			}
		}

		.vp1 {
			/* background-image: url(https://www.askantech.com/wp-content/themes/askantech/images/33574.jpg); */
			background: linear-gradient(0deg, rgba(154, 63, 255, 0.74), #337ab7), url(https://www.askantech.com/wp-content/themes/askantech/images/33574.jpg);
			background-attachment: fixed;
			/* background-repeat: no-repeat; */
			background-size: cover;
			padding-bottom: 50px;
		}

		.tab-content>.active {
			display: block;
			background: #fff;
		}

		@-webkit-keyframes pulse {
			0% {
				-webkit-box-shadow: 0 0 0 0 rgba(184, 176, 176, 0.4);
			}

			70% {
				-webkit-box-shadow: 0 0 0 30px rgba(184, 176, 176, 0);
			}

			100% {
				-webkit-box-shadow: 0 0 0 0 rgba(184, 176, 176, 0);
			}
		}

		@keyframes pulse {
			0% {
				-moz-box-shadow: 0 0 0 0 rgba(184, 176, 176, 0.4);
				-webkit-box-shadow: 0 0 0 0 rgba(184, 176, 176, 0.4);
				box-shadow: 0 0 0 0 rgba(184, 176, 176, 0.4);
			}

			70% {
				-moz-box-shadow: 0 0 0 30px rgba(184, 176, 176, 0);
				-webkit-box-shadow: 0 0 0 30px rgba(184, 176, 176, 0);
				box-shadow: 0 0 0 30px rgba(184, 176, 176, 0);
			}

			100% {
				-moz-box-shadow: 0 0 0 0 rgba(184, 176, 176, 0);
				-webkit-box-shadow: 0 0 0 0 rgba(184, 176, 176, 0);
				box-shadow: 0 0 0 0 rgba(184, 176, 176, 0);
			}
		}

		.tab-content p {
			color: #000;
			font-weight: 500;
			margin: 45px;
			text-align: justify;
		}
		@media only screen and (min-width:320px) and (max-width:767px) {
			.tab-content p {
				color: #000;
    			font-weight: 500;
    			margin: 0px;
    			text-align: justify;
			}
		}
		.tab-content li {
			color: #000;
			font-weight: 500;
		}

		.part3 p {
			color: #000;
			font-weight: 500;
		}

		.part3 li {
			color: #000;
			font-weight: 500;
			margin: 0 30px;
		}

		.contact {
			margin-top: 630px;
		}

		#loader {
			position: absolute;
			left: 51.5%;
			top: 50%;
			z-index: 1;
			width: 80px;
			height: 80px;
			margin: -75px 0 0 -75px;
			border: 10px solid #015aff57;
			border-radius: 50%;
			border-top: 10px solid #4e2f8d;
			width: 70px;
			height: 70px;
			-webkit-animation: spin 1.25s linear infinite;
			animation: spin 1.25s linear infinite;
		}

		@-webkit-keyframes spin {
			0% {
				-webkit-transform: rotate(0deg);
			}

			100% {
				-webkit-transform: rotate(360deg);
			}
		}

		@keyframes spin {
			0% {
				transform: rotate(0deg);
			}

			100% {
				transform: rotate(360deg);
			}
		}

		/* Add animation to "page content" */
		.animate-bottom {
			position: relative;
			-webkit-animation-name: animatebottom;
			-webkit-animation-duration: 1s;
			animation-name: animatebottom;
			animation-duration: 1s
		}

		@-webkit-keyframes animatebottom {
			from {
				bottom: -100px;
				opacity: 0
			}

			to {
				bottom: 0px;
				opacity: 1
			}
		}

		@keyframes animatebottom {
			from {
				bottom: -100px;
				opacity: 0
			}

			to {
				bottom: 0;
				opacity: 1
			}
		}

		#myDiv {
			display: none;

		}

		#myBtn {
			display: none;
			position: fixed;
			bottom: 20px;
			right: 30px;
			z-index: 99;
			font-size: 18px;
			border: none;
			outline: none;
			background: #8E2DE2;
			/* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #4A00E0, #8E2DE2);
			/* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #3502ff, #0044cc);
			color: white;
			cursor: pointer;
			padding: 8px 15px 0px 15px;
			border-radius: 19px;
		}

		#myBtn:hover {
			background: #8E2DE2;
			/* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #4A00E0, #8E2DE2);
			/* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #4A00E0, #8E2DE2);
			/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

		}

		.columnz1 {
			width: 100%;
			float: left;
			padding: 10px;
		}

		/* .columnz2 {
			width:40%;
			float: left;
			padding: 10px;
		} */
		#btg {
			height: auto;
			background: linear-gradient(0deg, #7533f759, #05090c), url(https://www.askantech.com/wp-content/themes/askantech/images/bg_2-01.jpg);
			background-attachment: fixed;
			background-size: cover;
			margin: -80px 0 0 0;
		}

		ul.navbar-nav.ml-auto {
			float: right;
		}

		img.limg {
			width: 230px;
			height: auto;
		}
		html body .navbar-brand .color-logo {
			display: none;
		}
		html body .scrolled .navbar-brand .color-logo {
			display: block;
		}
		html body .scrolled .navbar-brand .white-logo {
			display: none;
		}
		@media only screen and (min-width:320px) and (max-width:767px) {
			#vd iframe {
				width:100%;
				height:auto;
			}
			img.limg {
    			width: 152px;
    			height: auto;
			}
			.navbar-toggle {
				margin: 30px 0 0 0;
			}
		}
		@media only screen and (min-width:768px) and (max-width:1023px) {
			#vd iframe {
				width:100%;
				height:auto;
			}
		}
		@media only screen and (min-width:1023px) and (max-width:1365px) {
			#vd iframe {
				width:100%;
				height:auto;
			}
		}


		@media only screen and (max-width:1199px) {

			.cc-hero-wrapper {
				min-height: 100vh;
			}
			.cc-mob-nav {}
			.cc-mob-nav {
				width: 100%;
			}
			.cc-mob-nav .navbar-brand{
				padding: 0;
				margin: 0px;
				display: flex;
				justify-content: center;
				align-items: center;
				padding: 10px 0px;
			}

			.cc-mob-nav .cc-mobnav-wrapper {
				display: flex;
				justify-content: space-between;
				align-items: center;
				position: relative;
			}

			.ftco-navbar-light.scrolled {
				padding: 5px 0px 5px 0px;
			}

			html body .scrolled .navbar-brand.white-logo {
				display: none;
			}

			.cc-mob-menu-section {
				width: 100%;
				margin-right: 0;
				margin-left: 0;
				text-align: center;
			}

			.cc-mob-menu-section ul.navbar-nav.ml-auto {
				float: unset;
				width: 100%;
				margin: 0;
			}
		}
		.col-xs-2{
			color:#000;
			width: 20%;
		}
.col-half-offset{
    margin-left:4.166666667%
}
.ss-panel {
    margin: 40px 0 0 0;
}
@media only screen and (min-width:320px) and (max-width: 767px) {
	.ss-panel {
		display: flex;
    flex-direction: column;
    
	}
	.col-xs-2 {
		width:100%;
	}
	.ss-ag {
		/* display: flex;
    width: 25%; */
	}
}
.ss-panel p {
	text-align: center;
	font-size: 16px;
}
.ss-text {
    text-align: center;
    font-size: 22px;
}
#f1 {
	position: relative;
	left: 42%;
	font-size: 42px;
	margin: 0 0 20px 0;
	color: #078aea;
}
.cc-hero-wrapper {
	min-height: 100vh;
}
.subheading1 {
	color:#000;
	text-transform: inherit;
	font-size: 18px;
}
.subheading2 {
	color:#000;
	text-transform: inherit;
	position: relative;
	top: 25px; 
	font-weight: 700;
}
.ss-bx {
	margin-bottom: 0px;
}
.ss-t1 h2  {
	text-transform: inherit;
	font-size: 65px;
}
.ss-t2 p {
	color: #ffffff;
	font-weight: 100;
}
.ss-t3 p {
	color: black;
    font-size: 18px;
}
#fl2 h2 {
	color: #000;
	font-size: 22px;
    font-weight: 700;
}
div#fl2 {
    margin: 35px 0 0 0;
}
@media only screen and (min-width:320px) and (max-width:767px) {
	div#fl2 {
    margin: 25px 0 0 0;
}
}
@media only screen and (min-width:768px) and (max-width:1439px) {
	div#fl2 {
    margin: 0px 0 0 0;
}
}
.my-notify-success{
	color : #8dc228 ;
}
.my-notify-error{
	color: red;
}

.block-titles h2 {
	font-size: 72px;
    color: #3fcaff;
    opacity: 0.2;
	margin: -46px 0;
}
.block-titles h1 {
	color:#000;
}

@media only screen and (min-width: 768px) and (max-width:1023px) {
	html body .block-titles h2 {
    font-size: 55px;
    color: #3fcaff;
    opacity: 0.2;
    margin: -46px 0;
}
.block-titles h1 {
	color:#000;
}
.main_title h2 {
    font-size: 55px;
    color: #3fcaff;
    opacity: 0.2;
    margin: 0;
    line-height: 60px;
}
html body .scrolled .navbar-toggler .menuz {
	display: none;
}
html body .scrolled button.navbar-toggler.collapsed img.menuz {
	display: none;
}
html body .scrolled .navbar-toggler .menuz1 {
	display: block;
}
html body .scrolled button.navbar-toggler.collapsed img.menuz1 {
	display: block;
}
html body .navbar-toggler .menuz1 {
	display: none;
}
html body  button.navbar-toggler.collapsed img.menuz1 {
	display: none;
}
button.navbar-toggler img.menuzs {
    display: none;
}
button.navbar-toggler.test img.menuz {
    display: none;
}
button.navbar-toggler.test img.menuzs {
    display: block;
}
button.navbar-toggler img.menuz1s {
    display: none;
}
.scrolled button.navbar-toggler.test img.menuz1 {
    display: none;
}
.scrolled button.navbar-toggler.test img.menuz1s {
    display: block;
}
img.menuz1s {
    margin: -21px 0 0 -3px;
}
}

@media only screen and (min-width:320px) and (max-width:767px) {
html body .scrolled .navbar-toggler .menuz {
	display: none;
}
html body .scrolled button.navbar-toggler.collapsed img.menuz {
	display: none;
}
html body .scrolled .navbar-toggler .menuz1 {
	display: block;
}
html body .scrolled button.navbar-toggler.collapsed img.menuz1 {
	display: block;
}
html body .navbar-toggler .menuz1 {
	display: none;
}
html body  button.navbar-toggler.collapsed img.menuz1 {
	display: none;
}

html body .block-titles h2 {
	font-size: 48px;
    color: #3fcaff;
    opacity: 0.2;
	margin: -75px 0 -43px 0;
}
html body .block-titles h1 {
	color:#000;
}
.main_title h2 {
    font-size: 55px;
    color: #3fcaff;
    opacity: 0.2;
    margin: 0;
    line-height: 60px;
}
button.navbar-toggler img.menuzs {
    display: none;
}
button.navbar-toggler.test img.menuz {
    display: none;
}
button.navbar-toggler.test img.menuzs {
    display: block;
}
button.navbar-toggler img.menuz1s {
    display: none;
}
.scrolled button.navbar-toggler.test img.menuz1 {
    display: none;
}
.scrolled button.navbar-toggler.test img.menuz1s {
    display: block;
}
img.menuz1s {
    margin: -21px 0 0 -3px;
}
}

.contact {
    margin-top: 630px;
}
@media only screen and (min-width:320px) and (max-width:767px) {
	.contact {
    margin-top: 920px;
}
}
@media only screen and (min-width:768px) and (max-width:1023px) {
	.contact {
    margin-top:705px;
}
}
@media only screen and (min-width:320px) and (max-width:767px) {
html body #colorlib-intro .tabulation {
margin-top: 0em;
z-index: 1;
}
html body .vp1 {
padding-bottom: 0px;
}
html body .tab-content p {
color: #000;
font-weight: 500;
margin: 0px;
text-align: justify;
font-size: 18px;
}
}
@media only screen and (min-width:768px) and (max-width:1023px) {
html body #colorlib-intro .tabulation {
margin-top: -4em;
z-index: 1;
}
}
	</style> 
</script>
   <!-- Global site tag (gtag.js) - Google Analytics -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=UA-9250988-11"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-9250988-11');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->	
</head>

<body onload="myFunction()" style="margin:0;">
	<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-sort-asc"></i></button>
	<!-- <div id="loader"></div>
	<div style="display:none;" id="myDiv" class="animate-bottom"> -->
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">

			<div class="row cc-mob-nav">
				<div class="col-md-12 col-sm-12">
					<div class="cc-mobnav-wrapper">
						<a class="navbar-brand white-logo" href="<?php echo site_url();?>"><img
								src="https://www.askantech.com/wp-content/themes/askantech/images/alw-new.png"
								class="limg white-logo"></a>
						<a class="navbar-brand" href="#"><img
								src="https://www.askantech.com/wp-content/themes/askantech/images/alb-new.png"
								class="limg color-logo"></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
							aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="oi oi-menu"></span>
							<img src="<?php echo get_template_directory_uri();?>/assets/img/menu.png" class="menuz">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/close.png" class="menuzs">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/menu _1.png" class="menuz1">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/close _1.png" class="menuz1s">
						</button>
					</div>
				</div>
			</div>


			<div class="row cc-mob-menu-section">
				<div class="col-md-12 col-sm-12">
					<div class="collapse navbar-collapse" id="ftco-nav">
						<ul class="navbar-nav ml-auto">
							
							<li class="nav-item"><a href="https://www.askantech.com/about-us/" class="nav-link">ABOUT US</a></li>
							<li class="nav-item"><a href="https://www.askantech.com/services/" class="nav-link">SERVICES</a></li>
							<li class="nav-item"><a href="https://www.askantech.com/success-stories/" class="nav-link">PORTFOLIO</a></li>
							<li class="nav-item"><a href="https://www.askantech.com/blog/" class="nav-link">Blog</a></li>
							<li class="nav-item"><a href="https://www.askantech.com/contact-us/" class="nav-link">GET A QUOTE</a></li>
						</ul>
					</div>
				</div>
			</div>

			
		</div>
	</nav>
	
		<section class="hero-wrap d-flex js-fullheight cc-hero-wrapper">
			<div class="forth js-fullheight d-flex align-items-center">
				<div class="text">
					<div class="row">
						<div class="columnz1">
							<h1>AMP EMAIL DEVELOPMENT</h1>
							<h2 class="mb-5">Why Boring Emails & Why not dynamic email with AMP Email?</h2>
							<span class="subheading">( Seat booking, responding to polls, RSVP’s to an event, Ecommerce
								Checkout )</span>
							<span class="dis">
								<p><a href="<?php echo site_url();?>/amp-email-development/#amp-contact" class="btn-custom py-3 pr-2">Discuss More</a></p>
							</span>
						</div>
						<!-- <div class="columnz2">
							<h2 class="mb-5">What is AMP for email?</h2>
							<div class="sh1">
								<span class="subheading1">AMP provides users an engaging powerful, interactive, real-time
									experience that also keeps inboxes secure while giving actionable email experience.</span>
							</div>
									<span class="subheading1">Do you wish to RSVP an event right from the email?</span><br>
									<span class="subheading1">Do you want to respond to a comment?</span><br>
									<span class="subheading1">Do you want to buy something within an email?</span>
									<span class="subheading1">Can you fill out a questionnaire?</span><br>
									<span class="subheading1">Is it possible to browse through a store’s inventory?</span>
					</div>
					<div class="typewriter">
						<h1 class="ty">Yes you can - all without leaving your web-based email client.</h1>
					</div> -->
					</div>
				</div>
			</div>
			<div id="btg" class="third about-img js-fullheight">
				<a href="http://www.youtube.com/watch?v=OpXrSc3Yie0"
					class="icon popup-vimeo d-flex justify-content-center align-items-center">
					<span class="icon-play"></a>
				</a>
			</div>
		</section>
		<div id="colorlib-project">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box ss-bx">
						<div class="main_title">
								<span class="ss-t1">
									<h2>What is AMP for email?</h2>
								</span>
								<h1>What is AMP for email?</h1>
							</div>
						<div class="sh1">
							<span class="subheading1">AMP provides users an
								engaging powerful, interactive, real-time
								experience that also keeps inboxes secure while giving actionable email
								experience.</span>
						</div>

					</div>
				</div>
				<div class="ss-panel">
				<div class="col-xs-2" id="p1"  data-aos="fade-up" data-aos-delay="100">
						<i id="f1" class="fa fa-envelope"></i>
						<p>Do you wish to RSVP an event right from the email?</p>
				</div>
				<div class="col-xs-2 " id="p2"  data-aos="fade-up" data-aos-delay="200">
						<i id="f1" class="fa fa-comment-o"></i>
						<p>Do you want to respond to a comment?</p>
				</div>
				<div class="col-xs-2 " id="p3"  data-aos="fade-up" data-aos-delay="300">
						<i id="f1" class="	fa fa-cart-plus"></i>
						<p>Do you want to buy something within an email?</p>
				</div>
				<div class="col-xs-2" id="p4"  data-aos="fade-up" data-aos-delay="400">
						<i id="f1" class="fa fa-question"></i>
						<p>Can you fill out a questionnaire?</p>
				</div>
				<div class="col-xs-2 " id="p5"  data-aos="fade-up" data-aos-delay="500">
						<i id="f1" class="fa fa-shopping-bag"></i>
						<p>Is it possible to browse through a store’s inventory?</p>
				</div>
				<div class="ss-text ss-ag"  data-aos="zoom-in">
						<span class="subheading2">Yes you can - all without leaving your web-based email client.</span>
					</div>
					</div>
			</div>
		</div>
		<div class="vp1">
			<div class="container">
				<div class="part3">
					<div class="tet">
						<div class="row">
							<div class="col-lg-12">

								<span class="tp">
									<h1>Expand your business through unprecedented features</h1>
								</span>

							</div>
						</div>
						<span class="ss-t2">

							<p>Do you wish to generate greater ROI and
								driving
								business growth?<br>
								Then, AMP is a great idea that will aid you to unfold this. <br> Lets see how email
								marketing strategy becomes handy by incorporating AMP in email for many
								industries.</p>
						</span>
						<!-- <p style="color: black;    font-weight: 500;"> -->
						</p>
						</p>
					</div>

				</div>
			</div>
		</div>
		<div id="colorlib-intro">
			<div class="container">
				<div class="row">
					<div class="col-md-12 tabulation animate-box">
						<ul class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="#plan"><i class="flaticon-sketch"></i>
									Finance</a></li>
							<li><a data-toggle="tab" href="#general"><i class="flaticon-architect-with-helmet"></i> Food
									Industry</a></li>
							<li><a data-toggle="tab" href="#manage"><i class="flaticon-engineer"></i> Travel
									Industry</a></li>
							<li><a data-toggle="tab" href="#modeling"><i class="flaticon-skyline"></i>Goods Parcel &
									Delivery Industry</a></li>
							<li><a data-toggle="tab" href="#Ecom"><i class="flaticon-architect-with-helmet"></i>
									Ecommerce</a></li>
							<li><a data-toggle="tab" href="#rsvp"><i class="flaticon-engineer"></i> Event Invitations &
									Surveys</a></li>
						</ul>
						<div class="tab-content">
							<div id="plan" class="tab-pane fade in active">
								<div class="row">
									<div class="col-md-6">
										<div class="services-img" style="background-image: url(https://www.askantech.com/wp-content/themes/askantech/images/img1.png);"></div>
									</div>
									<div class="col-md-6">
										<div class="services-desc">
											<p>In Finance industry, AMP emails can be implemented by an API developer,
												in various advantageous ways, providing a form to calculate the loan
												eligibility by filling in some of the details, such as loan amount,
												duration etc. This provides ease of use and saves a lot of time.</p>
										</div>
									</div>
								</div>
							</div>
							<div id="general" class="tab-pane fade">
								<div class="row">
									<div class="col-md-6">
										<div class="services-img"
											style="background-image: url(https://www.askantech.com/wp-content/themes/askantech/images/building-2.jpg);background-size: contain;">
										</div>
									</div>
									<div class="col-md-6">
										<div class="services-desc">
											<p>Do you wish to Book a table and the choosing the food, by looking at the
												menu through the email. </p>
											<ul>
												<li>Want to review the food? </li>
												<li>Wish to rate the restaurant?</li>
												<p>All these can be implemented at one shot , just inside your email by
													using AMP email combined with API integration.</p>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div id="manage" class="tab-pane fade">
								<div class="row">
									<div class="col-md-6">
										<div class="services-img"
											style="background-image: url(https://www.askantech.com/wp-content/themes/askantech/images/amp-email-card.gif);"></div>
									</div>
									<div class="col-md-6">
										<div class="services-desc">
											<p>Users and subscribers can easily book the ticket within email. Not just
												that, it can be used in innumerable ways to check the availability,
												choosing the seat, booking a hotel, choosing a room etc. AMP email makes
												it simple without any chaos.</p>
										</div>
									</div>
								</div>
							</div>
							<div id="modeling" class="tab-pane fade">
								<div class="row">
									<div class="col-md-6">
										<div class="services-img"
											style="background-image: url(https://www.askantech.com/wp-content/themes/askantech/images/order-status-preview.gif);"></div>
									</div>
									<div class="col-md-6">
										<div class="services-desc">
											<p>Tracking the goods and courier services is made simple , by implementing
												it in dynamic AMPemail. Subscribers can easily follow the direction of
												their goods within the email. It takes the customer experience to a new
												level.</p>
										</div>
									</div>
								</div>
							</div>
							<div id="Ecom" class="tab-pane fade">
								<div class="row">
									<div class="col-md-6">
										<div class="services-img"
											style="background-image: url(https://www.askantech.com/wp-content/themes/askantech/images/ecwid_email_demo.gif);"></div>
									</div>
									<div class="col-md-6">
										<div class="services-desc">
											<p>Ecommerce users and subscribers can purchase directly from the email
												itself, with some options to select. Eg. Quantity, size, color. And the
												checkout process is made easy within email. Card abandonment can also be
												implemented in AMP emails, diminishing the time spent on the website.
											</p>
										</div>
									</div>
								</div>
							</div>
							<div id="rsvp" class="tab-pane fade">
								<div class="row">
									<div class="col-md-6">
										<div class="services-img"
											style="background-image: url(https://www.askantech.com/wp-content/themes/askantech/images/amp-for-email-confirm-meeting.jpg);background-size: contain;">
										</div>
									</div>
									<div class="col-md-6">
										<div class="services-desc">
											<p>AMP dynamic emails can be used to send event invites, and the users can
												RSVP directly within the email. This provides spontainity, that will
												in-turn invite more attendees and registrations to the event or webinar.
												The response rate for the surveys, can be hugely increased by providing
												the subscribes easy survey options that can be done right inside the
												email.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="vp">
			<div class="container">
				<div class="part3">
					<div class="tet">
						<div class="row">
							<div class="col-lg-12">
								<div class="main_title">
									<h2>What more to know?</h2>
									<h1>What more to know?</h1>
								</div>
							</div>
						</div>
						<span class="ss-t3">

							<p>It makes the email look like an app or a website
								providing similar actions and behaviour. </p>
						</span>
					</div>
					<div id="fl" class="row">

						<div id="fl1" class="column" data-aos="zoom-in">
							<div class="laptop-wrapper">
								<div class="cc-lapimg"><img src="<?php echo get_template_directory_uri(); ?>/images/lap.png" alt=""></div>
								<div class="cc-gifimg">
									<img src="<?php echo get_template_directory_uri(); ?>/images/ecwid_email_demo.gif" alt="">
								</div>
							</div>
						</div>

						<div id="fl2" class="column">
							<h2>Good news for AMP email developers..</h2>
							<ul>
								<li>Wish to include a carousel?</li>
								<li>Different types of forms and lists?</li>
							</ul>
							<p>Supporting this format should be fairly easy, especially if they have prior experience
								with building AMP pages. The format supports many popular AMP markup features.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="about-wrap">
			<div id="colorlib-about" class="colorlib-about-img"
				style="background-image: url(https://www.askantech.com/wp-content/themes/askantech/images/amp-email.png);  background-position: unset; background-attachment:fixed;">
				<div class="overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center colorlib-heading colorlib-heading2 animate-box">
							<h2>Advantages of AMP for Email</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box">
							<div class="about-flex">
								<div id="vd" class="col-half">
									<iframe width="700" height="395"
										src="https://www.youtube.com/embed/OpXrSc3Yie0?" frameborder="0"
										allow="accelerometer; encrypted-media; gyroscope; picture-in-picture"
										allowfullscreen></iframe>
									
								</div>
								<div class="col-half">
									<div class="desc">							


										<button class="collapsible">Extended personalization</button>
										<div class="content">
											<p>It provides efficient and smarter ways of user engagement. Customers can
												directly perform actions within the email. Eg. seat booking, responding
												to polls, managing subscriptions etc. This is possible because the
												server retrieves fresh content from remote endpoints, keeping email up
												to date. </p>
										</div>
										<button class="collapsible">Secure and safe</button>
										<div class="content">
											<p>Ad components are not allowed in AMP email, keeping users safe. It
												surpasses the capabilities currently provided by 3rd party providers and
												has no arbitrary 3rd party features to limit security issues.</p>
										</div>
										<button class="collapsible">Improvised in-mail capabilities</button>
										<div class="content">
											<p>We can achieve efficient results with fewer clicks. The emails can be
												insert engaging , rich , dynamic and interactive components, which makes
												the engagement faster, such asRSVP to events, personalizing their
												content and filling out questionnaires.
											</p>
										</div>
										<button class="collapsible">Engaging Customer experience </button>
										<div class="content">
											<p>Its interactive capabilities aids customers to perform actions such as
												filling the questionnaires, surveys and taking many types of inputs
												right inside the inbox.
											</p>
										</div>
										<button class="collapsible">Smart services</button>
										<div class="content">
											<p>Hassle-free feedback forms, subscription management, interactive
												promotional emails can be sent in an attractive way to the
												subscriber-list, which provides smarter engagement and customer
												satisfaction.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--contact-->
		<div class="contact ">
			<div class="container">
				<div id="amp-contact" class="contact-block-title block-titles">
					<div class="title">
						<div class="main_title">
							<h2>Contact Us</h2>
							<h1>Contact Us</h1>
						</div>
					</div>
					<div class="desc">
						<p>Askan is not just about graphic design; it's more than that. We offer integral communication services, and we're responsible for our process and results. We thank each client and their projects.</p>
					</div>
				</div>
				<div class="home-contact-form">
					<div class="cc-row">
						<div class="col-full">
                        <div class="form-wrapper">
                            <form   id="contact_form" name="contact_form" action="#" method="POST" enctype="multipart/form-data">
                                <div class="wrapp-field text-field">
                                    <input id="name" name="name" type="text" placeholder="Name*"><div id="name_error"></div>
                                </div>
                                <div class="wrapp-field text-field">
                                    <input id="phone" name="phone" type="text" placeholder="Phone*"><div id="phone_error"></div>
                                </div>
                                <div class="wrapp-field text-field">
                                    <input id="email" name="email" type="email" placeholder="Email*"><div id="email_error"></div>
                                </div>
                                <div class="wrapp-field text-field">
                                    <input id="website" name="website"type="text" placeholder="Website*"><div id="website_error"></div>
                                </div>
                                <div class="wrapp-field text-field">
                                    <input id="budget" name="budjet" type="text" placeholder="Project budget ?*" onkeypress="javascript:return isNumber(event)">
                                    <div id="budjet_error"></div>
                                </div>
                                <div class="wrapp-field text-field">
                                    <label  for="file"   class="filelabel"  >
                                    <span id="labelId"> file upload</span>
                                    <input id="file" name="file" type="file" class="filetype" >
                                    <div id="file_error"></div>
                                    </label>
                                </div>
                                <div class="wrapp-field textarea-field full-wrap">
                                    <textarea id="message" name="message" placeholder='Your message*'></textarea>    <div id="message_error"></div>
                                </div>
                                <div class="wrap-submit-btn more-btn">
                                    <div class="button-wrapper">                                    
                                        <button id="submit" type="submit" class="btn-sty-one animated-button thar-three"><span
                                                class="text">Send</span><span class="arrow"></span></button>
                                    </div>
                                </div>
                                <div id="display"></div>
                            </form>
                        </div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer>
			<div class="footer-wrapper">
				<div class="footer-part">
					<div class="cc-footer-iso-logo">
					   <img class="iso-img" src="https://www.askantech.com/wp-content/uploads/2019/07/footer-iso-logo.png" alt="askan-iso">
					   <!-- <img class="dmca-img" src="https://www.askantech.com/wp-content/uploads/2019/07/dmca.png" alt="dmca"> -->
					   <a target="_blank" href="//www.dmca.com/Protection/Status.aspx?ID=a58d6565-d105-4176-ac15-f8224bbea3e3" title="DMCA.com Protection Status" class="dmca-badge"> <img src ="https://images.dmca.com/Badges/dmca_protected_25_120.png?ID=a58d6565-d105-4176-ac15-f8224bbea3e3"  alt="DMCA.com Protection Status" /></a>
					</div>
					<div class="footer-address-row">
						<div class="container">
							<div class="cc-row">
								<div class="simplelazy cc-col-33 united" data-bg="url(https://www.askantech.com/wp-content/themes/askantech/images/united.png)">
									<div class="addressbox">
										<div class="country-title">
											<h2>UNITED STATES OF AMERICA</h2>
										</div>
										<div class="footer-sep-45"></div>
										<div class="country-address">
											<p>8404 Memorial In, Apt 4205</p>
											<p>Plano, TX 75024</p>
											<p>United States</p>
										</div>
										<div class="footer-sep-30"></div>
										<div class="country-contact-details">
											<p>Phone : +1 6469718889</p>
											<p>Skype : kan.speed</p>
										</div>
									</div>
								</div>
								<div class="simplelazy cc-col-33 india" data-bg="url(https://www.askantech.com/wp-content/themes/askantech/images/india.png)">
									<div class="addressbox">
										<div class="country-title">
											<h2>INDIA</h2>
										</div>
										<div class="footer-sep-45"></div>
										<div class="country-address">
											<p>48,(Backside), Pavendar Street</p>
											<p>Mariamman Nagar</p>
											<p>Mudaliarpet</p>
											<p>Pondicherry 605004</p>
										</div>
										<div class="footer-sep-30"></div>
										<div class="country-contact-details">
											<p>Phone : 0413 4500022</p>
											<p>Skype : kan.speed</p>
										</div>
									</div>
								</div>
								<div class="simplelazy cc-col-33 thailand" data-bg="url(https://www.askantech.com/wp-content/themes/askantech/images/thailand.png)">
									<div class="addressbox">
										<div class="country-title">
											<h2>THAILAND</h2>
										</div>
										<div class="footer-sep-45"></div>
										<div class="country-address">
											<p>Sapsin1, R#209, 249,</p>
											<p>Soi Ramkhamhaeng 24 Yeak 30,</p>
											<p>Hua Mak, Bang Kapi,</p>
											<p>Bangkok 10240</p>
										</div>
										<div class="footer-sep-30"></div>
										<div class="country-contact-details">
											<p>Phone : +66838762766</p>
											<p>Skype : kan.speed</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="social-links">
							<ul>
								<li><a href="https://www.facebook.com/askantech/" target="_blank">Facebook</a><span></span></li>
								<li><a href="https://twitter.com/askantech" target="_blank">Twitter</a><span></span></li>
								<li><a href="https://in.linkedin.com/company/askan-technologies" target="_blank">LinkedIn</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="footer-details">
						<div class="privacymenu">
							<ul>
								<li><a href="javascript:void(0)">Privacy Policy</a></li>
								<li><a href="javascript:void(0)">Terms and Conditions</a></li>
							</ul>
							<div class="copyrights">
								<p>All Rights Reserved 2019. ASKAN TECHNOLOGIES</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	
	</div>
	<script>
		AOS.init();
	</script>
	<script>
		var coll = document.getElementsByClassName("collapsible");
		var i;

		for (i = 0; i < coll.length; i++) {
			coll[i].addEventListener("click", function () {
				this.classList.toggle("active");
				var content = this.nextElementSibling;
				if (content.style.maxHeight) {
					content.style.maxHeight = null;
				} else {
					content.style.maxHeight = content.scrollHeight + "px";
				}
			});
		}
	</script>
	<script>
		var myVar;

		function myFunction() {
			myVar = setTimeout(showPage, 300);
		}

		function showPage() {
			document.getElementById("loader").style.display = "none";
			document.getElementById("myDiv").style.display = "block";
		}
	</script>
	<script>
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function () { scrollFunction() };

		function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				document.getElementById("myBtn").style.display = "block";
			} else {
				document.getElementById("myBtn").style.display = "none";
			}
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}
	</script>
	<!-- jQuery -->
	<script src="<?php echo get_template_directory_uri();?>/assets/amp_page_js/js1/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo get_template_directory_uri();?>/assets/amp_page_js/js1/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo get_template_directory_uri();?>/assets/amp_page_js/js1/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="<?php echo get_template_directory_uri();?>/assets/amp_page_js/js1/jquery.stellar.min.js"></script>
	<!-- Owl carousel -->
	<script src="<?php echo get_template_directory_uri();?>/assets/amp_page_js/js1/owl.carousel.min.js"></script>
	<!-- Main -->
	<script src="<?php echo get_template_directory_uri();?>/assets/amp_page_js/js1/main.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/assets/amp_page_js/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/assets/amp_page_js/jquery-migrate-3.0.1.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/assets/amp_page_js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/assets/amp_page_js/jquery.waypoints.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/assets/amp_page_js/jquery.stellar.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/assets/amp_page_js/owl.carousel.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/assets/amp_page_js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/assets/amp_page_js/scrollax.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/amp_page_js/main.js"></script>
    
    <script>
        jQuery("body").on('change', '#file', function (e) {
            var ext = this.value.replace(/^.*\./, '');
            switch (ext) {
                case 'jpg':
                case 'png':
                case 'PNG':
                case 'xlsx':
                case 'xls':
                case 'docx':
                case 'doc':
                case 'doc':
                case 'pdf':
                case 'txt':
                    $("#file_error").html('');
                    break;
                default:
                    if (ext !== '') {
                        $("#file_error").html('<p class="my-notify-error">This file type not allowed</p>');
                        $(this).val('');
                        $('#labelId').text('');
                    }
                    $('#labelId').text('file upload');
                    return false;
            }
            var filename = $('input[type=file]').val().split('\\').pop();
            var label_text = $('#labelId').text();
            console.log(label_text);
            var res = filename.replace(label_text, filename);
            console.log(res);
            var labelId = $('#labelId').text(res);
            console.log(labelId);
        });

        jQuery('body').on('click', '#submit', function (e) {
            e.preventDefault();
            $("#display").html('');
            var name = $.trim($("#name").val());
            var email = $.trim($("#email").val());
            var phone = $.trim($("#phone").val());
            var website = $.trim($("#website").val());
            var budjet = $.trim($("#budget").val());
            var message = $("#message").val();
            var filename = $("#file").val();
            console.log(phone.length);
            var namevalid = /^[a-zA-Z\s]+$/;
            var emailvalid = /^([\w\.\-\+])+\@(([\w\-])+\.)+([a-zA-Z0-9]{2,6})$/;
            var phoneNumber = /[0-9-()+]{3,20}/;
            var domainRegex = /^(([\w]+:)?\/\/)?(([\d\w]|%[a-fA-f\d]{2,2})+(:([\d\w]|%[a-fA-f\d]{2,2})+)?@)?([\d\w][-\d\w]{0,253}[\d\w]\.)+[\w]{2,4}(:[\d]+)?(\/([-+_~.\d\w]|%[a-fA-f\d]{2,2})*)*(\?(&?([-+_~.\d\w]|%[a-fA-f\d]{2,2})=?)*)?(#([-+_~.\d\w]|%[a-fA-f\d]{2,2})*)?$/;
            if (name == '') {
                $("#name_error").html('<p class="my-notify-error">Please Enter Your Name</p>');
                return false;
            } else if ((name.length) < 3) {
                $("#name_error").html('<p class="my-notify-error">Please Enter Atleast 3 Characters</p>');
                return false;
            } else if (!namevalid.test(name)) {
                $("#name_error").html('<p class="my-notify-error">Please Enter only Characters</p>');
                return false;
            } else if (email == "") {
                $("#email_error").html('<p class="my-notify-error">Please Enter E-mail address</p>');
                if (name != '') {
                    $("#name_error").html('');
                }
                if (phone != '') {
                    $("#phone_error").html('');
                }
                if (website != '') {
                    $("#website_error").html('');
                }
                if (budget != '') {
                    $("#budjet_error").html('');
                }
                if (message != '') {
                    $("#message_error").html('');
                }
                return false;
            }
            else if (!emailvalid.test(email)) {
                $("#email_error").html('<p class="my-notify-error">Please Enter Valid E-mail address</p>');
                if (name != '') {
                    $("#name_error").html('');
                }
                if (phone != '') {
                    $("#phone_error").html('');
                }
                if (website != '') {
                    $("#website_error").html('');
                }
                if (budget != '') {
                    $("#budjet_error").html('');
                }
                if (message != '') {
                    $("#message_error").html('');
                }
                return false;
            } else if (phone == "") {
                $("#phone_error").html('<p class="my-notify-error">Please Enter PhoneNumber</p>');
                if (name != '') {
                    $("#name_error").html('');
                }
                if (email != '') {
                    $("#email_error").html('');
                }
                if (website != '') {
                    $("#website_error").html('');
                }
                if (budget != '') {
                    $("#budjet_error").html('');
                }
                if (message != '') {
                    $("#message_error").html('');
                }
                return false;
            } else if (((phone.length) <= 9) || ((phone.length) > 16)) {
                $("#phone_error").html('<p class="my-notify-error">Please Enter valid PhoneNumber</p>');
                if (name != '') {
                    $("#name_error").html('');
                }
                if (email != '') {
                    $("#email_error").html('');
                }
                if (website != '') {
                    $("#website_error").html('');
                }
                if (budget != '') {
                    $("#budjet_error").html('');
                }
                if (message != '') {
                    $("#message_error").html('');
                }
                return false;
            } else if (!phoneNumber.test(phone)) {
                $("#phone_error").html('<p class="my-notify-error">Please Enter valid PhoneNumber</p>');
                if (name != '') {
                    $("#name_error").html('');
                }
                if (email != '') {
                    $("#email_error").html('');
                }
                if (website != '') {
                    $("#website_error").html('');
                }
                if (budget != '') {
                    $("#budjet_error").html('');
                }
                if (message != '') {
                    $("#message_error").html('');
                }
                return false;
            } else if (website == '') {
                $("#website_error").html('<p class="my-notify-error">Please Enter Website URL</p>');
                if (name != '') {
                    $("#name_error").html('');
                }
                if (email != '') {
                    $("#email_error").html('');
                }
                if (phone != '') {
                    $("#phone_error").html('');
                }
                if (budget != '') {
                    $("#budjet_error").html('');
                }
                if (message != '') {
                    $("#message_error").html('');
                }
                return false;
            } else if ((website != '') && (!domainRegex.test(website))) {
                $("#website_error").html('<p class="my-notify-error">Please Enter Website URL</p>');
                if (name != '') {
                    $("#name_error").html('');
                }
                if (email != '') {
                    $("#email_error").html('');
                }
                if (phone != '') {
                    $("#phone_error").html('');
                }
                if (budget != '') {
                    $("#budjet_error").html('');
                }
                if (message != '') {
                    $("#message_error").html('');
                }
                return false;
            } else if (budjet == '') {
                $("#budjet_error").html('<p class="my-notify-error">Please Enter Your Budget</p>');
                if (name != '') {
                    $("#name_error").html('');
                }
                if (email != '') {
                    $("#email_error").html('');
                }
                if (phone != '') {
                    $("#phone_error").html('');
                }
                if (website != '') {
                    $("#website_error").html('');
                }
                if (message != '') {
                    $("#message_error").html('');
                }
                return false;
            } else if (message == '') {
                $("#message_error").html('<p class="my-notify-error">Please Enter Your message</p>');
                if (name != '') {
                    $("#name_error").html('');
                }
                if (email != '') {
                    $("#email_error").html('');
                }
                if (phone != '') {
                    $("#phone_error").html('');
                }
                if (website != '') {
                    $("#website_error").html('');
                }
                if (budget != '') {
                    $("#budjet_error").html('');
                }
                return false;
            } else {
                $("#name_error").html('');
                $("#email_error").html('');
                $("#phone_error").html('');
                $("#website_error").html('');
                $("#budjet_error").html('');
                $("#message_error").html('');
            }
            var formData = new FormData($('#contact_form')[0]);
            formData.append('action', 'submit_form');

            jQuery.ajax({
                url: "/wp-admin/admin-ajax.php",
                type: "POST",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    console.log(data);
                    if (data == 1) {
                        $("#display").show();
                        $("#display").html('<p class="my-notify-success">Successfully Submitted.</p>');
                        $('#contact_form')[0].reset();
                        $('#labelId').text('File Upload');
                    } else {
                        $("#display").show();
                        $("#display").html('<p class="my-notify-error">Something went wrong. Please try again.</p>');
                    }
                }
            });
        });
	</script>
	<script>
		jQuery(document).ready(function(){
		jQuery('.navbar-toggler').on('click',function(){
		jQuery(this).toggleClass("test");
		})
		})
	</script>

</body>

</html>