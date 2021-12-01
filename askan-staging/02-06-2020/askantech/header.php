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
?><!DOCTYPE html>
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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/font-awesome.css">
    <?php if(is_front_page()): ?>
        <!-- LayerSlider stylesheet -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/layerslider.css" type="text/css">
        <!-- LayerSlider stylesheet -->
    <?php endif;?>
    <?php if(is_page('30')) { ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style_common.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style2.css">
    <?php }?>
    <?php if(is_page_template( 'page-template/careerdetails.php' )) { ?>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/component.css" />
    <?php } ?>
	<!--owl carousel slider-->
	<link href="<?php echo get_template_directory_uri();?>/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/css/owl.theme.css" rel="stylesheet">
	<!--owl carousel slider-->
     <?php if(is_page_template( 'page-template/career.php' )) { ?>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/prettyPhoto.css" />
    <?php } ?>
  </head>
<body>
  <header>
		<div class="wrapper">
		    <div class="div100">
				<div class="div30">
                    <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
                        <div itemscope itemtype="http://schema.org/LocalBusiness"><a itemprop="url" class="logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img itemprop="logo" src="<?php echo get_template_directory_uri();?>/assets/images/alb-new.png" alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' width="256" height="76" /></a></div>
                    <?php else : ?>
                        <hgroup>
                            <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
                            <h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
                        </hgroup>
                    <?php endif; ?>

				</div>
				<div class="div70">
						<a class="toggleMenu active" href="#" style="display: none;">Menu</a>
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
                    wp_nav_menu( $defaults );?>

                   <!-- <ul class="nav">

							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="aboutus.html">About Us</a></li>
							<li>
								<a href="services.html" class="parent">Services</a>
								<ul>
									<li><a href="#">Custom App Development</a></li>
									<li><a href="#s">Web Design</a></li>
									<li><a href="#">Web Development</a></li>
									<li><a href="#">Digital Marketing</a></li>
									<li><a href="#">Ecommerce Services</a></li>
									<li><a href="#">Mobile App Development</a></li>
								</ul>
							</li>
							<li><a href="">Success Stories</a></li>
							<li><a href="contact.html">Contact Us</a></li>
						</ul>-->
				</div>
			</div>
		</div>
	</header> 