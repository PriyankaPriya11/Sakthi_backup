<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Askan Tech
 * @since Askan Tech 1.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="google-site-verification" content="7-7Bo3weL4J_F9678oa798ZWKh0tIO4hWhu8dGKJS2Y" />
<title><?php wp_title(' '); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" type="text/css" href="https://dev.askantech.com/wp-content/themes/askantech/blog-file/styles/bootstrap4/bootstrap.min.css">
	<link href="https://dev.askantech.com/wp-content/themes/askantech/blog-file/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="https://dev.askantech.com/wp-content/themes/askantech/blog-file/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="https://dev.askantech.com/wp-content/themes/askantech/blog-file/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="https://dev.askantech.com/wp-content/themes/askantech/blog-file/plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="https://dev.askantech.com/wp-content/themes/askantech/blog-file/plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.css">
	<link rel="stylesheet" type="text/css" href="https://dev.askantech.com/wp-content/themes/askantech/blog-file/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="https://dev.askantech.com/wp-content/themes/askantech/blog-file/styles/responsive.css">
    <link rel="stylesheet" type="text/css" href="https://dev.askantech.com/wp-content/themes/askantech/blog-file/styles/post.css">
	<link rel="stylesheet" type="text/css" href="https://dev.askantech.com/wp-content/themes/askantech/blog-file/styles/post_responsive.css">
	<link rel="stylesheet" type="text/css" href="https://dev.askantech.com/wp-content/themes/askantech/blog-file/styles/search.css">
	<link href="https://fonts.googleapis.com/css?family=Signika&display=swap" rel="stylesheet">
    <style>
    @media only screen and (max-width: 768px) {
        .navbar .menulist {
        position: fixed;
        height: 100%;
        width: 100%;
        background: rgba(0, 0, 0, 0.9);
        top: 0;
        overflow: auto;
        z-index: 1;
        right: -100%;
        -webkit-transition: all ease-out 0.3s;
        transition: all ease-out 0.3s;
        }
    }
    </style>
    <?php wp_head(); ?>

    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/favicons/favicon.ico">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/common.css">

    <!-- calling style for specific page -->
    <?php if(is_front_page()) { ?> <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/home.css"> <?php  } ?>
    <?php if(is_page(823)){ ?> <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/cc-about-us.css"> <?php  } ?>

    <?php if(is_page(823) || is_page(880) || is_page(1331) || is_page(1667) || is_page(1992) || is_page(2019) || is_page(1989)) { ?> 
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/fontawsome/css/font-awesome.min.css"> 
    <?php  } ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Askan Technologies Pvt Ltd",
  "alternateName": "Askan",
  "url": "https://www.askantech.com",
  "logo": "https://dev.askantech.com/wp-content/themes/askantech/assets/images/alw-new.png",
  "contactPoint": [{
    "@type": "ContactPoint",
    "telephone": "+917871997663",
    "contactType": "sales",
    "areaServed": "IN",
    "availableLanguage": "en"
  },{
    "@type": "ContactPoint",
    "telephone": "+1 6469718889",
    "contactType": "sales",
    "areaServed": "US",
    "availableLanguage": "en"
  }],
  "sameAs": [
    "https://www.facebook.com/askantech/",
    "https://twitter.com/askantech/",
    "https://in.linkedin.com/company/askan-technologies/"
  ],
  
  "location": 
[ 
      { 
         "@type": "LocalBusiness", 
         "parentOrganization": {
         	"name": "Askan Technologies"
      	  },
         "name" : "Askan Technologies - India",
         "image": "https://dev.askantech.com/wp-content/themes/askantech/assets/images/alw-new.png",
         "address": {
             "@type": "PostalAddress",
             "addressLocality": "Pondicherry",
             "addressCountry": "IN",
             "postalCode": "605005",
             "streetAddress": "No:48, Pavendhar St, Mariamman Nagar"
           },
           "geo": {
            "@type": "GeoCoordinates",
            "latitude": 11.9254023,
            "longitude": 79.80890999999997
          },
             "openingHoursSpecification": {
                  "@type": "OpeningHoursSpecification",
                  "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday",
                    "Saturday"
                  ],
                  "opens": "09:30",
                  "closes": "18:30"
                },
             "telephone" : "0413 4500022",
             "priceRange": "1000USD"
      }, 
      { 
         "@type": "LocalBusiness", 
         "parentOrganization": {
         "name": "Askan Technologies"
      	  },
         "name" : "Askan Technologies - United States",
         "image": "https://dev.askantech.com/wp-content/themes/askantech/assets/images/alw-new.png",
         "address": {
             "@type": "PostalAddress",
             "addressLocality": "Plano",
             "addressRegion": "Texas",
             "addressCountry": "US",
             "postalCode": "75024",
             "streetAddress": "8404 Memorial In, #4205"
           },
         "geo": {
            "@type": "GeoCoordinates",
            "latitude": 33.0936406,
            "longitude": -96.8009385
          },
             "openingHoursSpecification": {
                  "@type": "OpeningHoursSpecification",
                  "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday",
                    "Saturday"
                  ],
                  "opens": "09:30",
                  "closes": "18:30"
                },
             "telephone" : "+1 (646) 971-8889",
             "priceRange": "1000USD"
           },
      { 
         "@type": "LocalBusiness", 
         "parentOrganization": {
         "name": "Askan Technologies"
      },
         "name" : "Askan Technologies - Thailand",
         "image": "https://dev.askantech.com/wp-content/themes/askantech/assets/images/alw-new.png",
         "address": {
             "@type": "PostalAddress",
             "addressLocality": "Hua Mak",
             "addressRegion": "Bang Kapi",
             "addressCountry": "Bangkok",
             "postalCode": "10240",
             "streetAddress": "Sapsin1, R#209, 249, Soi Ramkhamhaeng 24 Yeak 30,"
           },
         "geo": {
            "@type": "GeoCoordinates",
            "latitude": 13.7495259,
            "longitude": 100.6270978
          },
             "openingHoursSpecification": {
                  "@type": "OpeningHoursSpecification",
                  "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday",
                    "Saturday"
                  ],
                  "opens": "09:30",
                  "closes": "18:30"
                },
             "telephone" : "+66838762766",
             "priceRange": "1000USD"
           }
           
           
]}
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
<body <?php echo body_class() ?> >

    <div class="wrapper">
        <!--header section-->
        <div class="header-section">

            <header>

                <div class="container">

                    <div class="nav-bar">
                        <div class="logo-sectio">
                            <div class="logo">
                                 <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
                                 <a href="<?php echo site_url(); ?>"><img itemprop="logo" class="simplelazy" data-src="<?php echo get_template_directory_uri();?>/assets/images/alw-new.png" alt="Askan Technologies"/></a>
                                <?php else : ?>
                                    <hgroup>
                                <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
                                <h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
                                 <?php endif; ?>
                            </div>
                        </div>
                        <nav class="navbar">
                            <div class="menulist">
                                <?php
                                $defaults = array(
                                    'theme_location'  => 'header-menu',
                                    'menu'            => 'nav-menu',
                                    'container'       => 'div',
                                    'container_class' => '',
                                    'container_id'    => '',
                                    'menu_class'      => 'menu',
                                    'menu_id'         => 'header-menu',
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'items_wrap'      => '<ul id="%1$s" class="%2$s nav navbar-nav right">%3$s</ul>',
                                    'depth'           => 0,
                                    'walker'          => new Child_Wrap()
                                );
                                //wp_nav_menu( $defaults );?>
                                <ul>
                                    <li> <a href="https://dev.askantech.com/about-us/">About us</a> </li>
                                    <li><a href="https://dev.askantech.com/services/">Services</a></li>
                                    <li><a href="https://dev.askantech.com/success-stories/">Portfolio</a></li>
                                    <li><a href="https://dev.askantech.com/blog/">Blog</a></li>
                                    <!--li><a href="">Case study</a></li-->
                                    <!--li><a href="">testimonial</a></li-->
                                    <li class="get-quote-button"><a href="https://dev.askantech.com/contact-us/">get a quote</a></li>
                                </ul>
                                <div class="close-menu">
                                    <img class="simplelazy" data-src="<?php echo get_template_directory_uri();?>/assets/images/cancel-w.png" alt="cancel">
                                </div>
                            </div>

                            <div class="menu-close-btn" id="menu-toggle">
                                <img class="simplelazy" data-src="<?php echo get_template_directory_uri();?>/assets/images/menu-w.png" alt="menu toggle">
                            </div>
                        </nav>
                    </div>
                </div>

            </header>

        </div>
        <!--banner-section-->

        <?php if(is_front_page()) { ?>
            <div class="banner-section">   
                <div id="cc-dym-content"> </div>  

                    <div class="overlay-section">
                        <div class="container">
                            <div class="banner-content">
                                <div class="text-one">
                                    <!-- <h3>WELCOME TO ASKAN</h3> -->
                                </div>
                                <div class="text-two">

                                    <h2 class="mobile-text-two-sty">WE DO CUSTOM APP</h2>

                                    <div class="typed-effect">

                                        <div class="cc-typeeffect-one">
                                            <div class="type-wrap">
                                                <div id="typed-strings1">
                                                    <h2>WE DO CUSTOM APP</h2>
                                                </div>
                                                <div id="typed1" style="white-space:pre;display: inline"></div>
                                            </div>
                                        </div>

                                        <div class="show-typed">
                                            <div class="type-effect-style">WE DO CUSTOM
                                                <span class="cc-typeeffect-two">
                                                    <span class="type-wrap">
                                                        <span id="typed-strings">
                                                            <span>WEBSITES</span>
                                                            <span>E-COMMERCE</span>
                                                        </span>
                                                        <span id="typed" style="white-space:pre;"></span>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="text-three">
                                    <h3>For Your Business Growth and Development </h3>
                                </div>
                                <div class="bottom-scroll bounce animated slow infinite">
                                    <a href="javascript:void(0);">
                                        <img class="simplelazy" data-src="<?php echo get_template_directory_uri();?>/assets/images/scroll-down.png" alt="scroll-down">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

    <div class="content">