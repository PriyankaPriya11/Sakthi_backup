<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage erum
 * @since 1.0.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <style type="text/css">
    .recentcomments a {
      display: inline !important;
      padding: 0 !important;
      margin: 0 !important;
    }
    .project-client,
    .project-year {
      display: none
    }
  </style>
</head>

<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0"  <?php body_class(); ?>>
  <div id="page" class="site">
    <header id="masthead" class="site-header ss-head">
      <div class="site-branding">
        <!-- <div class="dark-logo">
          <a href="http://www.elegea.petekmedya.com/" class="custom-logo-link" rel="home"><img width="738" height="91"
              src="wp-content/themes/erum/assets/ele/site-logo-dark.png" class="custom-logo"
              alt="Elegea"
              srcset="http://www.elegea.petekmedya.com/wp-content/uploads/2019/08/site-logo-dark.png 738w, http://www.elegea.petekmedya.com/wp-content/uploads/2019/08/site-logo-dark-300x37.png 300w"
              sizes="(max-width: 738px) 100vw, 738px"></a> 
        </div> -->
        <div class="light-logo">
          <a href="<?php echo site_url(); ?>" rel="home">
            <img src="https://erum.askantech.com/wp-content/themes/erum/assets/images/logo-wt.png">
          </a>
          <a href="<?php echo site_url(); ?>" rel="home">
            <img src="https://erum.askantech.com/wp-content/themes/erum/assets/images/logo-bk.png">
          </a>
        </div>
      </div><!-- .site-branding -->
      <nav id="site-navigation" class="main-navigation">
        <div class="elg-navigation">
          <div class="elg-hamburger">
            <span class="elg-nav-line second-line"></span>
            <span class="elg-nav-line cor-line" style="opacity: 1;"></span>
            <span class="elg-nav-line first-line"></span>
          </div>
          <p>Menu</p>
        </div>
        <div class="fs-menu">
          <div class="menu-main-menu-container">
            <ul id="primary-menu" class="menu">
              <!-- <li id="menu-item-347"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-347">
                <span class="dropdown-toggle">+</span><a href="javascript:void(0)"
                  aria-current="page">Sobre Erum</a>
                <ul class="sub-menu" style="display: none;">
                  <li id="menu-item-340" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-340">
                    <a href="#">Sobre Erum-1</a></li>
                  <li id="menu-item-339" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-339">
                    <a href="#">Sobre Erum-2</a></li>
                  <li id="menu-item-342" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-342">
                    <a href="#">Sobre Erum-3</a></li>
                  <li id="menu-item-351"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7 current_page_item menu-item-351">
                    <a href="#" aria-current="page">Sobre Erum-4</a></li>
                </ul>
              </li> -->
              <li id="menu-item-348" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-348"><a
                  href="javascript:void(0)">Catálogo</a></li>
              <li id="menu-item-346" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-346"><a
                  href="javascript:void(0)">Nuestros clientes</a></li>
              <li id="menu-item-352" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-352"><a
                  href="javascript:void(0)">I+D</a></li>
              <li id="menu-item-349" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-349"><a
                  href="javascript:void(0)">RTS</a></li>
              <li id="menu-item-345" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-345"><a
                  href="javascript:void(0)">Contacto</a></li>
              <li id="menu-item-345" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-345"><a
                  href="javascript:void(0)">Ubicación</a></li>
              <li id="menu-item-345" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-345"><a
                  href="javascript:void(0)">Recursos humanos</a></li>
            </ul>
          </div> <span class="fs-menu-seperator"></span>
          <div class="menu-sidebar-foundation" style="height: 420px;">
            <div id="menu-sidebar" class="menu-sidebar widget-area" role="complementary">
              <section id="text-2" class="widget widget_text">
                <div class="textwidget">
                  <h5><img class="alignnone wp-image-67 size-full"
                      src="https://erum.askantech.com/wp-content/themes/erum/assets/ele/eeeee.png" alt="" width="71"
                      height="91"></h5>
                  <p>&nbsp;</p>
                  <div class="ss-menu-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
						</div>
						<div class="ss-menu-link">
							<a href="tel:+34 965 330 817">+34 965 330 817</a><br>
							<a href="mailto:erum@erumgroup.com">erum@erumgroup.com</a>
						</div>
						<div class="ss-menu-social">
							<a href="javascript:void(0)"><img src="https://erum.askantech.com/wp-content/themes/erum/assets/images/fb.png"></a>
							<a href="javascript:void(0)"><img src="https://erum.askantech.com/wp-content/themes/erum/assets/images/linkedin.png"></a>
							<a href="javascript:void(0)"><img src="https://erum.askantech.com/wp-content/themes/erum/assets/images/instagram.png"></a>
						</div>
                </div>
              </section>
            </div><!-- #primary-sidebar -->
          </div>
        </div>
      </nav><!-- #site-navigation -->
    </header><!-- #masthead -->
  </div>
    <script>
      jQuery(".elg-navigation").click(function() {
    jQuery('.elg-navigation.menu-org').not(this).removeClass('menu-org');
    jQuery('.elg-navigation').toggleClass('menu-org');
    jQuery('.elg-navigation.elg-nav-line-1').not(this).removeClass('elg-nav-line-1');
    jQuery('.second-line').toggleClass('elg-nav-line-1');
    jQuery('.elg-navigation.elg-nav-line-2').not(this).removeClass('elg-nav-line-2');
    jQuery('.first-line').toggleClass('elg-nav-line-2');
    jQuery('.elg-navigation.fs-menu-in').not(this).removeClass('fs-menu-in');
    jQuery('.fs-menu').toggleClass('fs-menu-in');
    jQuery('.elg-navigation.seperator-top').not(this).removeClass('seperator-top');
    jQuery('.fs-menu-seperator').toggleClass('seperator-top');
    jQuery('.elg-navigation.menu-sidebar-comes').not(this).removeClass('menu-sidebar-comes');
    jQuery('.menu-sidebar-foundation').toggleClass('menu-sidebar-comes');
    jQuery('.elg-navigation.menu-item-comes').not(this).removeClass('menu-item-comes');
    jQuery('.menu-item').toggleClass('menu-item-comes');
}) 


</script>
<?php if(is_shop()) { ?><div class="test"> <?php } ?> 