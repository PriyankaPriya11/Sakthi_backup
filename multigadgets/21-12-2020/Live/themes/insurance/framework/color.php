<?php
$root =dirname(dirname(dirname(dirname(dirname(__FILE__)))));
if ( file_exists( $root.'/wp-load.php' ) ) {
    require_once( $root.'/wp-load.php' );
} elseif ( file_exists( $root.'/wp-config.php' ) ) {
    require_once( $root.'/wp-config.php' );
}
header("Content-type: text/css; charset=utf-8");
global $insurance_option; 
?>
/* Color Theme - Amethyst /Violet/

/* 01 MAIN STYLES
****************************************************************************************************/
a {
    color: <?php echo esc_attr( $insurance_option['main-color'] ); ?>;
}
::selection {
  color: #fff;
  background: <?php echo esc_attr( $insurance_option['main-color'] ); ?>;
}
::-moz-selection {
  color: #fff;
  background: <?php echo esc_attr( $insurance_option['main-color'] ); ?>;
}
h1, h2, h3, h4, h5, h6 {color: <?php echo esc_attr( $insurance_option['main-color'] ); ?>;}
.tp-navbar .nav > li.current-menu-ancestor > a, 
.tp-header .cta-box .btn-group ul.dropdown-menu li a:hover, .tp-header .cta-box .btn-group ul.dropdown-menu li a i,
.tp-navbar .navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav>li>a:hover, .insurance-block i, .agent-block i,
.product-thumb .grey-box i, .tp-blog-news .thumb-box .tp-meta, .tp-testimonial-two .name,
.tp-newsletter-section .select-products ul li i, .widget_recent_entries a,
.support-section .support-box i, .tabs-one .wpb_content_element .wpb_tabs_nav .ui-state-active > a, 
.nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover, .tabs-two .wpb_content_element .wpb_tabs_nav .ui-state-active > a,
.search-agent .wpb_content_element .wpb_tabs_nav .ui-state-active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover,
.howitwork .step-box span.number {color: <?php echo esc_attr( $insurance_option['main-color'] ); ?>;}

.tp-header, .tp-navbar .navbar-toggle, .owl-theme .owl-controls .owl-buttons div,
.owl-theme .owl-controls .owl-page span, .tp-testimonial-two .circle-icon .blue-quote,
.widget_search .btn-search, .claim-right-side .claim-pic .claim-icon,
.small-number, .tp-testimonial .circle-icon .blue-quote {
  background-color: <?php echo esc_attr( $insurance_option['main-color'] ); ?>;
}
.tp-navbar .navbar-toggle {
  border-color: <?php echo esc_attr( $insurance_option['main-color'] ); ?>;
}

/**** Main Color 2 ****/
.tp-agent-detail .detail-block h3 i, .tp-agent-detail .detail-block ul li i,
.tp-testimonial .name, .tp-agent-detail .detail-block h3 i, .tp-agent-detail .detail-block ul li i,
.tp-agent-detail .detail-block p a i:hover, .tp-agent-detail .form-block .about-me p mark,
.lp-home .home-feature .home-feature-box i, .lp-business .business-block .business-feature i,
.lp-home .home-feature .home-feature-box i, .lp-business .business-block .business-feature i {color: <?php echo esc_attr( $insurance_option['second-color'] ); ?>; }

.tp-navbar .nav li ul li.current-menu-item > a, .tp-btn-orange, .tp-testimonial-two .circle-icon .orange-quote,
.dropdown-menu > li > a:hover, .submit, .btn-group ul li a, .tp-testimonial .circle-icon .orange-quote,
.tp-wizard-form .next:hover , .tp-wizard-form .wpcf7-back:hover, .owl-theme .owl-controls .owl-buttons div:hover {background-color: <?php echo esc_attr( $insurance_option['second-color'] ); ?>; color: #fff;}
.lp-business .business-block .business-feature i {border-color:<?php echo esc_attr( $insurance_option['second-color'] ); ?>;}

/**** Main Color 3 ****/
.tp-btn-orange:hover, .tp-product-page .product-img:hover img, .tp-agent-result .agent-thumb .agent-pic:hover img,
.widget_tag_cloud a:hover, .product .circle-icon:hover, .tp-latest-news .thumb-box .tp-pic:hover img,
.lp-feature-block .feature-box .orng-box, .lp-feature-block .feature-box .orng-box,
.btn-group ul li a:hover, .tp-btn-orange:focus, .submit:hover, .tp-btn-grey:hover, .tp-btn-grey:focus,
.tp-breadcrumb .font-option a:hover{
  background-color: <?php echo esc_attr( $insurance_option['hover-color'] ); ?>;
}
.tp-footer .col-md-3 ul li a:hover, .tp-footer .ft-links-social ul li a:hover,
.tp-tiny-footer .tiny-ft-links ul li a:hover, .tp-product-page .product-thumb .grey-box:hover i,
.feature-box:hover i.feature-icon, .feature-box i.feature-icon:hover, .outline-box small,
.promo-box h2 span, .promo-box-two h2 span, .why-agent ul li i, .lead, .claim-info-left ul li i,
.tp-team-page .team-thumb .team-info .designation, .tp-team-page .team-thumb .team-info ul li a:hover,
.categories-widget ul li span, .widget_recent_entries a:hover, .investor-box i,
.tp-financial-report .financial-box i, .tp-financial-report .financial-box ul li a:hover,
.tp-accordion-one .wpb_accordion .wpb_accordion_wrapper .wpb_accordion_header a:hover,
.tp-how-it-works .howitwork h1 span, .tp-how-it-works .htw-option-two h1 span, .tp-how-it-works .htw-option-three h1 span,
.tp-footer-two .ft-links ul li a:hover, .lp-footer .lp-social ul li a:hover, .lp-footer .lp-social ul li a:hover,
.widget_categories ul li, .nav-sidebar ul.nav li a.back {
  color: <?php echo esc_attr( $insurance_option['hover-color'] ); ?>;
}
.feature-box:hover i.feature-icon, .feature-box i.feature-icon:hover,
blockquote, .tp-blockquotes blockquote, .tp-blockquotes .blockquote-reverse {border-color:<?php echo esc_attr( $insurance_option['hover-color'] ); ?>;}

.pagination>li>span:hover, .pagination>li>span,.tp-pagination .pagination>.active>a, .pagination>.active>a:focus, 
.pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover,
.tp-pagination .pagination-two>li>a:focus, .pagination-two>li>a:hover, .pagination-two>li>span:focus, .pagination-two>li>span:hover,
.tp-pagination .pagination-two>.active>a, .pagination-two>.active>a:focus, .pagination-two>.active>a:hover, 
.pagination-two>.active>span, .pagination-two>.active>span:focus, .pagination-two>.active>span:hover,
.tp-navbar .navbar-default .navbar-toggle:focus, .navbar-default .navbar-toggle:hover {
  background-color: <?php echo esc_attr( $insurance_option['hover-color'] ); ?>;
  border-color: <?php echo esc_attr( $insurance_option['hover-color'] ); ?>;
}

.tp-footer {background-color: <?php echo esc_attr( $insurance_option['background_footer'] ); ?>;}
.tp-tiny-footer {background-color: <?php echo esc_attr( $insurance_option['background_footer2'] ); ?>;}
.copyright-text {color: <?php echo esc_attr( $insurance_option['color_footer'] ); ?>;}
