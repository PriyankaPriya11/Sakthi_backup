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
?>
<!doctype html>
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
    <?php wp_head(); ?>

    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/favicons/favicon.ico">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/common.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/home.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/font-awesome.css">
  </head>
<body class="home">

    <div class="wrapper">
        <!--header section-->
        <div class="header-section">

            <header>

                <div class="container">

                    <div class="nav-bar">
                        <div class="logo-sectio">
                            <div class="logo">
                                 <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
                                 <img itemprop="logo" src="<?php echo get_template_directory_uri();?>/assets/images/askan-white-logo.png" alt="Askan Technologies"/>
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
                                    <li> <a href="https://www.askantech.com/about-us/">About us</a> </li>
                                    <li><a href="https://www.askantech.com/services/">Services</a></li>
                                    <li><a href="https://www.askantech.com/success-stories/">Portfolio</a></li>
                                    <li><a href="https://www.askantech.com/blog/">Blog</a></li>
                                    <!--li><a href="">Case study</a></li-->
                                    <!--li><a href="">testimonial</a></li-->
                                    <li class="get-quote-button"><a href="https://www.askantech.com/contact-us/">get quote</a></li>
                                </ul>
                                <div class="close-menu">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/cancel-w.png" alt="cancel">
                                </div>
                            </div>

                            <div class="menu-close-btn" id="menu-toggle">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/menu-w.png" alt="menu toggle">
                            </div>
                        </nav>
                    </div>
                </div>

            </header>

        </div>
        <!--banner-section-->
      
    </div>
    <div class="content">