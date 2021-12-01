<?php /* Template Name: prestashop */ ?>
<?php get_header('new'); ?>
<div class="content">
    <div class="cc-presta-develop" id="presta">

        <div class="wrapper">
            <!--banner-section-->
            <div class="cc-innerpage-banner">
                <div class="banner-section">            
                
<?php $images = get_field('banner_content_img');?>                          
<div class="image-section" style="background: url('<?php echo $images['url'];  ?>') no-repeat ;background-size: cover">
                    </div>
                    <div class="overlay-section opacity0">
                        <div class="container">
                            <div class="cc-row">
                                <div class="banner-content">
                                    <div class="text-one">
                                        <h3><?php echo get_field('banner_head');?> </h3>
                                    </div>
                                    <div class="text-two">
                                        <h2 class="mobile-text-two-sty"><?php echo get_field('banner_head_one');?>  <br><?php echo get_field('banner_head_two');?>  </h2>
                                    </div>
                                    <div class="text-three">
                                        <h3><?php echo get_field('banner_text');?></h3>
                                        <div class="more-btn">
                                            <div class="button-wrapper">
                                                <a href="javascript:void(0)"
                                                    class="btn-sty-one animated-button thar-three"><span
                                                        class="text"><?php echo get_field('banner_text_two');?></span><span
                                                        class="arrow"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner-content-right">
                                <?php $image = get_field('banner_image');?>
                                         <img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>">
  <!-- <img src="<?php //echo get_stylesheet_directory_uri() ?>/assets/img/prestashop-banner-right-img.png" alt="askan">-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">

            <div class="cc-prest-main-content-block">
                <div class="container">
                    <div class="content-block text-center">
                        <div class="content-block-title">
                            <h3 class="text-center"><span class="grey-col"><?php echo get_field('presta_head');?></span><?php echo get_field('presta_head_two');?>
                            </h3>
                        </div>
                        <div class="content-block-title-wrapper">
                        </div>

                        <div class="content-block-contents">
                            <div class="cc-block">
                                <p><?php echo get_field('presta_main_content');?>
                                </p>
                                <p><?php echo get_field('main_content_description');?>
                                </p>
                            </div>
                        </div>
                        <div class="space50"> </div>
                        <div class="content-block-title">
                            <h3 class="text-center"><span class="grey-col"><?php echo get_field('presta_comit');?> </span>
                            <?php echo get_field('presta_comitt_two');?>     </h3>
                        </div>
                        <div class="content-block-title-wrapper">
                        </div>

                        <div class="content-block-contents">
                            <div class="cc-block">
                                <p>
                                <?php echo get_field('presta_main_content_two');?>
                                </p>
                            </div>
                        </div>
                        <div class="space50"> </div>



                    </div>
                </div>

                <div class="container">


                    <div class="cc-row">
                        <div class="cc-col-25 whyus-box">
                        <?php $image = get_field('why_presta_image');?>
  <img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>">
                          <!--  <img src="<?php //echo get_stylesheet_directory_uri() ?>/assets/images/transparency.png" alt="askan">-->
                            <h3> <?php echo get_field('presta_container_head');?><br>  <?php echo get_field('presta_container_head_two');?></h3>
                            <p> <?php echo get_field('presta_container_text');?></p>
                        </div>
                        <div class="cc-col-25 whyus-box">
                        <?php $image = get_field('container_img_two');?>
  <img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>">
                           <!-- <img src="<?php //echo get_stylesheet_directory_uri() ?>/assets/images/ontime-delivery.png" alt="askan">-->
                            <h3> <?php echo get_field('presta_contianer_three');?></h3>
                            <p><?php echo get_field('presta_container_text');?></p>
                        </div>
                        <div class="cc-col-25 whyus-box">
                        <?php $image = get_field('container_img_three');?>
  <img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>">
                          <!-- <img src="<?php //echo get_stylesheet_directory_uri() ?>/assets/images/free-support.png" alt="askan">-->
                            <h3> <?php echo get_field('presta_contianer_four');?></h3>
                            <p><?php echo get_field('presta_container_text');?></p>
                        </div>
                        <div class="cc-col-25 whyus-box">
                        <?php $image = get_field('container_img_four');?>
  <img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>">
                          <!--  <img src="<?php //echo get_stylesheet_directory_uri() ?>/assets/images/engagements.png" alt="askan">-->
                            <h3> <?php echo get_field('presta_contianer_five');?></h3>
                            <p><?php echo get_field('presta_container_text');?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="presta-expertise">

                <div class="container">
                    <div class="block-titles">
                        <div class="title">
                            <div class="big-title">
                        
                                <h2><?php echo get_field('why_presta_head');?></h2>
                            </div>
                            <div class="small-title" id="triggerElem">
                                <div class="right-line small-title-line"></div>
                                <div class="title-content expertice-in">
                                    <h3><?php echo get_field('why_presta_head_two');?></h3>
                                </div>
                                <div class="left-line small-title-line"></div>
                            </div>
                        </div>
                        <div class="desc">  
                            <p><?php echo get_field('why_presta_text');?></p>
                        </div>
                    </div>

                    <div class="cc-block-content presta-title-blocks">
                        <div class="cc-row">

                            <div class="cc-col-47 two-iconbox">
                                <div class="blue-box box">
                                    <div class="ccbb-wrapper">
                                        <div class="image presta-icons cc-intall-img"></div>
                                        <div class="content">
                                            <h3><?php echo get_field('why_presta_head_three');?></h3>
                                            <p><?php echo get_field('why_presta_text_two');?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="white-box box">
                                    <div class="ccbb-wrapper">
                                        <div class="image presta-icons cc-opensource"></div>
                                        <div class="content">
                                            <h3> <?php echo get_field('why_presta_head_four');?></h3>
                                            <p><?php echo get_field('why_presta_text_three');?> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cc-col-53">
                                <div class="white-box box mv">
                                    <div class="ccbb-wrapper">
                                        <div class="image presta-icons mvg cc-em"></div>
                                        <div class="content">
                                            <h3><?php echo get_field('why_presta_head_five');?></h3>
                                            <p><?php echo get_field('why_presta_text_four');?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="cc-row">
                            <div class="cc-col-53">
                                <div class="white-box box mv">
                                    <div class="ccbb-wrapper">
                                        <div class="image presta-icons mvg cc-uf"></div>
                                        <div class="content">
                                            <h3><?php echo get_field('why_presta_head_six');?></h3>
                                            <p><?php echo get_field('why_presta_text_six');?></p>
                                             
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cc-col-47 two-iconbox">
                                <div class="white-box box">
                                    <div class="ccbb-wrapper">
                                        <div class="image presta-icons cs cc-cf"></div>
                                        <div class="content">
                                    
                                            <h3><?php echo get_field('why_presta_head_seven');?></h3>
                                            <p><?php echo get_field('why_presta_text_seven');?> </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="blue-box box">
                                    <div class="ccbb-wrapper">
                                        <div class="image presta-icons td cc-gr"></div>
                                        <div class="content">
                                            <h3><?php echo get_field('why_presta_head_eight');?></h3>
                                            <p><?php echo get_field('why_presta_text_eight');?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>


                    </div>

                </div>


            </div>

            <div class="cc-why-choose-prestashop">
                <div class="container">
                    <div class="cc-row">
                        <div class="cc-col-50 cc-img-container cc-opac-dev">
                        <?php $image = get_field('container_img_one');?>
  <img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>">
                          <!--  <img src="<?php // echo get_stylesheet_directory_uri() ?>/assets/img/prestashopimg.jpeg" alt="">-->
                        </div>

                        <div class="cc-col-50">
                            <h3><span class="grey-col"><?php echo get_field('askan_presta_head');?></span> <br /> <?php echo get_field('askan_presta_head_two');?></h3>
                            <div class="tick-list">
                              
                                <?php echo get_field('askan_presta_list');?>
                                   
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-case-study">
                <div class="parallax-overlay-casestudy"></div>
                <div class="container">
                    <div class="cc-row">
                        <div class="cc-col-55 casestudy-left">
                            <div class="casestudy-testimonial">
                                <div class="case-study-title"><?php echo get_field('case_study_title');?></div>
                                <h3><?php echo get_field('case_study_head');?></h3>
                                <p><?php echo get_field('case_study_text');?></p>
                                <p class="author"> <?php echo get_field('case_study_author');?> <span><?php echo get_field('case_study_author_name');?></span></p>
                            </div>
                        </div>
                        <div class="cc-col-45 cc-opac-dev">
                        <?php $image = get_field('case_study_image');?>
  <img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>" class="cc-footercase-img">
                          <!--  <img src="<?php// echo get_stylesheet_directory_uri() ?>/assets/img/monitors.png" class="cc-footercase-img">-->
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-contact">
                <div class="container">
                    <div class="cc-row">
                        <div class="contact-block-title block-titles">
                            <div class="title">
                                <div class="big-title">
                                    <h2><?php echo get_field('contact_us_head');?></h2>
                                </div>
                                <div class="small-title">
                                    <div class="right-line small-title-line"></div>
                                    <div class="title-content get-for-quote fadeIn">
                                        <h3><?php echo get_field('contact_us_head_two');?></h3>
                                    </div>
                                    <div class="left-line small-title-line"></div>
                                </div>
                            </div>
                            <div class="title">
                                <h3><?php echo get_field('contact_us_head_three');?></h3>
                            </div>
                            <div class="desc">
                                <p><?php echo get_field('contact_us_text');?>
                                </p>
                            </div>
                            <div class="more-btn button-center">
                                <div class="button-wrapper">
                                    <a href="https://www.askantech.com/contact-us/" class="btn-sty-one animated-button thar-three"><span
                                            class="text"><?php echo get_field('contact_us_getintouch');?></span><span class="arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<?php get_footer('new'); ?>