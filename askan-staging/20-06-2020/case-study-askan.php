<?php /* Template Name: Askan Case Study */ ?>
<?php get_header('casestudy'); ?>
<div class="ss-sty">
<header>
        <div class="cc-header-section-wrapper" >

            <div class="cc-nav-section-wrapper">
                <div class="cc-container">
                    <div class="cc-nav-section">
                        <div class="cc-logo-section">
                            <a href="<?php echo site_url(); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo">
                            </a>    
                        </div>
                        <nav>
                            <div class="cc-mobile-toggle">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            
                            <div class="cc-ul-wrapper">
                                <div class="cc-closemenu">
                                    <img class="lazy" data-src="<?php echo get_template_directory_uri();?>/assets/img/closemenu.png" alt="closemenu" src="<?php echo get_template_directory_uri();?>/assets/img/closemenu.png" alt="closemenu">
                                </div>
                                <?php //wp_nav_menu(array('theme_location'=>'header-menu'));?>
                                <ul>
                                    <li> <a href="https://www.askantech.com/about-us/">About us</a> </li>
                                    <li><a href="https://www.askantech.com/services/">Services</a></li>
                                    <li><a href="https://www.askantech.com/success-stories/">Portfolio</a></li>
                                    <li><a href="https://www.askantech.com/blog/">Blog</a></li>
                                    <!--li><a href="">Case study</a></li-->
                                    <!--li><a href="">testimonial</a></li-->
                                    <li class="get-quote-button"><a href="https://www.askantech.com/contact-us/">Get A Quote</a></li>
                                </ul>

                            </div>
                        </nav>
                    </div>
                </div>
            </div>

        </div>
</header>
    <!--====== HEADER PART ENDS ======-->
    <div class="ss-bg">
        <section id="case-study" class="ss-cs">
            <div id="home" class="header-hero bg_cover d-lg-flex align-items-center ss-home-carousel">
                <div class="container">
                    <div class="row">
                        <div class="ss-flght wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="2.1s">
                            <img src="/wp-content/themes/askantech/assets/cs-assets/images/flight.png" alt="ss-ig">
                        </div>
                        <div class="ss-bg-txt"><?php the_field('background_text'); ?></div>
                        <div class="col-lg-6 ss-c6">
                            <div class="header-hero-content">
                            <a href="https://www.askantech.com/laravel-parcel-delivery-system-case-study/">
                                <h1 class="hero-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"><?php the_field('title_blue_1'); ?> <span><?php the_field('title_orange_1'); ?> </span><?php the_field('title_blue_2'); ?> 
                                <span><?php the_field('title_orange_2'); ?> </span><?php the_field('title_blue_3'); ?></h1>
                            </a>    
                                <?php if(get_field('tech-used')): ?>
                                <ul class="blue-tags">
                                <?php while(has_sub_field('tech-used')): ?>
                                    <li><span><?php the_sub_field('technologies'); ?></span></li>
                                <?php endwhile; ?>
                                </ul>
                            </div>
                            <?php endif; ?>
                            <div class="ss-point">
                                <p><?php the_field('content_1'); ?></p>
                            </div>
                            <div class="ss-details">
                                <div class="ss-country">
                                    <p><?php the_field('country'); ?></p>
                                    <p><?php the_field('country_name'); ?> <span><?php the_field('country_state'); ?></span></p>
                                </div>
                                <div class="ss-industry">
                                    <p><?php the_field('industry'); ?></p>
                                    <p><?php the_field('industry_name'); ?></p>
                                </div>
                            </div>
                            <button class="button slide" onclick="window.location.href='https://www.askantech.com/laravel-parcel-delivery-system-case-study/';"><?php the_field('discover_btn'); ?></button>
                        </div>
                        <div class="col-lg-6">
                            <div class="header-hero-image d-flex align-items-center wow "
                                data-wow-duration="1s" data-wow-delay="1.1s">
                                <div class="desktop-wrapper desk-pop">
                                    <img src="/wp-content/themes/askantech/assets/cs-assets/images/tabimg.png" alt="ss-ig" class="ss-lap-ig">   
                                    <div class="ss-site-img">
                                        <div class="ss-imgslidersec">
                                            <div class="ss-owl owl-carousel owl-theme" id="ss-ttw">
                                                <?php $image = get_field('slider_img_1');?>
                                                <a href="<?php echo $image['url']; ?>" data-lightbox="gallery1">
                                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                                </a>
                                                <?php $image = get_field('slider_img_2');?>
                                                <a href="<?php echo $image['url']; ?>" data-lightbox="gallery1">
                                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                                </a>
                                                <?php $image = get_field('slider_img_3');?>
                                                <a href="<?php echo $image['url']; ?>" data-lightbox="gallery1">
                                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                                </a>
                                                <?php $image = get_field('slider_img_4');?>
                                                <a href="<?php echo $image['url']; ?>" data-lightbox="gallery1">
                                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                                </a>
                                            </div>   
                                        </div>   
                                     </div>                           
                                </div> 
                                <div class="desktop-wrapper mob-pop">
                                    <img src="/wp-content/themes/askantech/assets/cs-assets/images/tabimg.png" alt="ss-ig" class="ss-lap-ig">   
                                    <div class="ss-site-img">
                                        <div class="ss-imgslidersec">
                                            <div class="ss-owl owl-carousel owl-theme" id="ss-ttw">
                                                <img src="https://www.askantech.com/wp-content/uploads/2019/10/keyfeatures.jpg" alt="keyfeatures">
                                                <img src="https://www.askantech.com/wp-content/uploads/2019/10/functionaily.jpg" alt="keyfeatures">
                                                <img src="https://www.askantech.com/wp-content/uploads/2019/10/achived-result.jpg" alt="achived-result">
                                                <img src="https://www.askantech.com/wp-content/uploads/2019/10/business-gain.jpg" alt="business-gain">
                                            </div>   
                                        </div>   
                                     </div>                           
                                </div>                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="case-study" class="ss-cs">
            <div id="home" class="header-hero bg_cover d-lg-flex align-items-center ss-two-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="header-hero-image d-flex align-items-center wow "
                                data-wow-duration="1s" data-wow-delay="1.1s">
                                <div class="desktop-wrapper desk-pop">
                                    <div class="ss-site-img ss-mg-bg">
                                        <div class="ss-imgslidersec">
                                            <div class="ss-owl owl-carousel owl-theme" id="ss-tt"> 
                                                <?php $image = get_field('slider_img_link_5');?>                                               
                                                <a href="<?php echo $image['url']; ?>" data-lightbox="gallery">
                                                    <?php $image = get_field('slider_img_5');?>
                                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                                </a>
                                                <?php $image = get_field('slider_img_link_6');?>   
                                                <a href="<?php echo $image['url']; ?>" data-lightbox="gallery">
                                                    <?php $image = get_field('slider_img_6');?>
                                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                                </a>
                                                <?php $image = get_field('slider_img_link_7');?>   
                                                <a href="<?php echo $image['url']; ?>" data-lightbox="gallery">
                                                    <?php $image = get_field('slider_img_7');?>
                                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                                </a>                                           
                                                <?php $image = get_field('slider_img_link_8');?>        
                                                <a href="<?php echo $image['url']; ?>" data-lightbox="gallery">
                                                    <?php $image = get_field('slider_img_8');?>
                                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                                </a>
                                            </div>   
                                        </div>   
                                     </div>                           
                                </div>
                                <div class="desktop-wrapper mob-pop">
                                    <div class="ss-site-img ss-mg-bg">
                                        <div class="ss-imgslidersec">
                                            <div class="ss-owl owl-carousel owl-theme" id="ss-tt">
                                                    <img src="https://www.askantech.com/wp-content/uploads/2019/08/dynamic-price-tab.png" alt="keyfeatures" >
                                                    <img src="https://www.askantech.com/wp-content/uploads/2019/08/secure-record-tab.png" alt="keyfeatures">
                                                    <img src="https://www.askantech.com/wp-content/uploads/2019/08/flexible-tab.png" alt="achived-result">
                                                    <img src="https://www.askantech.com/wp-content/uploads/2019/08/functionality-tab.png" alt="business-gain">
                                            </div>   
                                        </div>   
                                     </div>                           
                                </div>                                 
                            </div>
                        </div>
                        <div class="col-lg-6 ss-mgg">
                            <div class="header-hero-content">
                            <a href="https://www.askantech.com/multigadget-case-study/"><h1 class="hero-title ss-mg-h1 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"><?php the_field('title_pink_1'); ?> <span><?php the_field('title_bluesd_1'); ?></span> <?php the_field('title_pink_2'); ?></h1></a>
                                <?php if(get_field('tech-used-1')): ?>    
                                <ul class="blue-tags">
                                    <?php while(has_sub_field('tech-used-1')): ?>
                                        <li><span><?php the_sub_field('technologies'); ?></span></li>
                                    <?php endwhile; ?>
                                </ul>
                                <?php endif; ?>
                            </div>
                            <div class="ss-point ss-mg-p">
                                <p><?php the_field('content_2'); ?></p>
                            </div>
                            <div class="ss-details">
                                <div class="ss-country ss-mg-ct">
                                    <p><?php the_field('country_1'); ?></p>
                                    <p><?php the_field('country_name_1'); ?> <span><?php the_field('country_state_1'); ?></span></p>
                                </div>
                                <div class="ss-industry ss-mg-iy">
                                    <p><?php the_field('industry_1'); ?></p>
                                    <p><?php the_field('industry_name_1'); ?></p>
                                </div>
                            </div>
                            <button class="button slide ss-mg-slide" onclick="window.location.href='https://www.askantech.com/multigadget-case-study/';"><?php the_field('discover_btn_1'); ?></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><img src="https://upload.wikimedia.org/wikipedia/commons/8/87/Arrow_top.png" alt="ss-ig"></a>
</div>
    <!--====== BACK TOP TOP PART ENDS ======-->
    <?php get_footer('cs');  ?>