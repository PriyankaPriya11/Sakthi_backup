<?php
/*
Template Name: Textil
*/  get_header(); ?>

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active">
            <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <?php $image = get_field('banner-ig');?><img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>">
                                <div class="ss-textz"><p><?php echo get_field('banner_text_fir');?> <strong style="font-weight:700"><?php  echo get_field('text-2');?></strong> <?php  echo get_field('text-3');?> <strong style="font-weight:700"><?php  echo get_field('text-4');?></strong></p></div>
                                <h3><span style="color: #3F3F3F;	font-family: Lora;	font-size: 63.36px;	line-height: 81px;text-transform:lowercase;position:relative;left:19px;"><?php  echo get_field('text-one');?></span><span style="color: #96A57B;	font-family: Gruenewald VA;	font-size: 64.08px;	line-height: 98px;text-transform:lowercase;"> <?php  echo get_field('text-two');?></span></h3>
                                <p><strong style="color: #96a57b;font-family: Gruenewald VA;font-size: 40px;line-height: 50px;font-weight:100;"><?php  echo get_field('text-three');?></strong><span style="color: #3F3F3F;font-family: Lora;font-size: 38.93px;line-height: 50px;font-weight:100;"><?php  echo get_field('text-four');?></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->
    <!-- Mobile View -->
    <div class="mobile-menu">
        <div class="container">
            <div class="row ss-menu">
                <div class="ss-column03">
                    <a href="<?php echo site_url();?>/#gl_1"><?php $image = get_field('mobile-menu-1');?><img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"></a>
                    <span class="img-code-mobile-header"><p>CU 1001476</p></span>
                    <br>
                    <a href="<?php echo site_url();?>/#sea_1"><?php $image = get_field('mobile-menu-4');?><img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"></a>
                    <br>
                </div>
                <div class="ss-column03">
                    <a href="<?php echo site_url();?>/#gr_1"><?php $image = get_field('mobile-menu-2');?><img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"></a>
                    <span class="img-code-mobile-header"><p>CU 1001476</p></span><br> 
                    <a href="<?php echo site_url();?>/#inescop_1"><?php $image = get_field('mobile-menu-5');?><img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"></a>
                   <br>
                    
                </div>
                <div class="ss-column03">
                    <a href="<?php echo get_field('logo_href');?>" target="_blank"><?php $image = get_field('mobile-menu-3');?><img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"></a>
                    <span class="img-code-mobile-header"><p>CU 1001476</p></span>
                    <br>
                    <a href="<?php echo site_url();?>/#carbono_1"><?php $image = get_field('mobile-menu-6');?><img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile View End -->
    <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <div class="row">
                <div class="ss-column4">
                    <div class="ss-icon"><?php $image = get_field('icon-one');?><img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"></div>
                    <h4><?php  echo get_field('icon-title-one');?></h4>
                    <p><?php  echo get_field('icon-text-one');?></p>
                </div>
                <div class="ss-column4">
                    <div class="ss-icon"><?php $image = get_field('icon-two');?><img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"></div>
                    <h4><?php  echo get_field('icon-title-two');?></h4>
                    <p><?php  echo get_field('icon-text-two');?></p>
                </div>
                <div class="ss-column4">
                    <div class="ss-icon"><?php $image = get_field('icon-three');?><img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"></div>
                    <h4><?php  echo get_field('icon-title-three');?></h4>
                    <p><?php  echo get_field('icon-text-three');?></p>
                </div>
                <div class="ss-column4">
                    <div class="ss-icon"><?php $image = get_field('icon-four');?><img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"></div>
                    <h4><?php  echo get_field('icon-title-four');?></h4>
                    <p><?php  echo get_field('icon-text-four');?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->
    <div class="ss-desktop-content">
        <!-- about_area_start -->
        <div id="gl" class="global_organic">
                <div class="container">
                    <div class="row">
                        <div class="ss-column-ue">
                            <div class="ss-gl-logo"><?php $image = get_field('content-logo-1');?>
                        <a href="<?php echo site_url();?>/wp-content/uploads/2019/10/pdf/GLOBAL%20ORGANIC%20TEXTILE%20STANDARD.pdf" target="_blank"><img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"></a></div> 
                            <!-- <a href="<?php //echo get_field('logo_href');?>" target="_blank"><img  src="<?php // echo $image['url']; ?>"  alt="<?php //echo $image['alt']; ?>"></a></div> -->
                            
                            <span class="img-code"><p><?php echo get_field('img_code');?></p></span>
                        </div>
                        <div class="ss-column-ue-1">
                            <h4><?php  echo get_field('content-title-1');?></h4>
                            <p><?php  echo get_field('content-text-1');?></p>
                            <span class="ss-atag">
                            <a class="trigger_popup_fricc">
                                <h5><?php  echo get_field('content-link-1');?>
                                <svg version="1.1" id="link_arrow_1"
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    width="19px" height="13px" viewBox="0 0 19 13"
                                    enable-background="new 0 0 19 13" xml:space="preserve">
                                    <polygon fill="#756d6d"
                                    points="12.475,0 11.061,0 17.081,6.021 0,6.021 0,7.021 17.038,7.021 11.06,13 12.474,13 18.974,6.5 " />
                                </svg>
                                </h5>
                            </a>
                            </span>
                            <div class="ss-gl-img owl-carousel owl-theme">
                                <div class="item"><?php $image1 = get_field('content-image-1');?><img  src="<?php echo $image1['url']; ?>"  alt="<?php echo $image1['alt']; ?>"></div>
                                <div class="item"><?php $image1a = get_field('content-image-1a');?><img  src="<?php echo $image1a['url']; ?>"  alt="<?php echo $image1a['alt']; ?>"></div>
                                <div class="item"><?php $image1b = get_field('content-image-1b');?><img  src="<?php echo $image1b['url']; ?>"  alt="<?php echo $image1b['alt']; ?>"></div>
                                <div class="item"><?php $image1c = get_field('content-image-1c');?><img  src="<?php echo $image1c['url']; ?>"  alt="<?php echo $image1c['alt']; ?>"></div>
                            </div>
                            
                            <div class="hover_bkgr_fricc">
                                <span class="helper"></span>
                                <div>
                                    <div class="popupCloseButton">X</div>
                                    <div class="frame"><?php echo do_shortcode(' [wonderplugin_pdf src="http://www.povedatextil.com/wp-content/uploads/2019/12/GLOBAL-ORGANIC-TEXTILE-STANDARD.pdf" width="100%" height="600px" style="border:0;"]');
                                     ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
            <!-- about_area_end -->
            <!-- about_area_start -->
        <div id="gr" class="global_recycled">
                <div class="container">
                    <div class="row">
                        <div class="ss-column-ue">
                            <div class="ss-gl-logo"><?php $image = get_field('content-logo-2');?>
                            <a href="<?php site_url();?>/wp-content/uploads/2019/10/pdf/GLOBAL%20RECYCLED%20STANDARD%20(GRS).pdf" target="_blank"><img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"></a></div>
                            <span class="img-code"><p><?php echo get_field('img_code');?></p></span>
                        </div>
                        <div class="ss-column-ue-1">
                            <h4><?php  echo get_field('content-title-2');?></h4>
                            <p><?php  echo get_field('content-text-2');?></p>
                                <span class="ss-atag"><a class="trigger_popup_fricc_two"><h5><?php  echo get_field('content-link-2');?>
                                <svg version="1.1" id="link_arrow_1"
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    width="19px" height="13px" viewBox="0 0 19 13"
                                    enable-background="new 0 0 19 13" xml:space="preserve">
                                    <polygon fill="#756d6d"
                                    points="12.475,0 11.061,0 17.081,6.021 0,6.021 0,7.021 17.038,7.021 11.06,13 12.474,13 18.974,6.5 " />
                                </svg></h5></a></span>
                            <div class="ss-gl-img owl-carousel owl-theme">
                                <div class="item"><?php $image2 = get_field('content-image-2');?><img  src="<?php echo $image2['url']; ?>"  alt="<?php echo $image2['alt']; ?>"></div>
                                <div class="item"><?php $image2a = get_field('content-image-2a');?><img  src="<?php echo $image2a['url']; ?>"  alt="<?php echo $image2a['alt']; ?>"></div>
                                <div class="item"><?php $image2b = get_field('content-image-2b');?><img  src="<?php echo $image2b['url']; ?>"  alt="<?php echo $image2b['alt']; ?>"></div>
                                <div class="item"><?php $image2c = get_field('content-image-2c');?><img  src="<?php echo $image2c['url']; ?>"  alt="<?php echo $image2c['alt']; ?>"></div>
                            </div>
                            <div class="hover_bkgr_fricc_two">
                                <span class="helper"></span>
                                <div>
                                    <div class="popupCloseButton_two">X</div>
                                    <div class="frame"><?php echo do_shortcode(' [wonderplugin_pdf src="http://www.povedatextil.com/wp-content/uploads/2019/12/GLOBAL-RECYCLED-STANDARD.pdf" width="100%" height="600px" style="border:0;"]');
                                    ?></div>
                                </div>
                            </div>
               
                        </div>
                    </div>
                </div>
        </div>
            <!-- about_area_end -->
            <!-- about_area_start -->
        <div id="sea" class="seaqual">
                <div class="container">
                    <div class="row">
                        <div class="ss-column-ue">
                            <div class="ss-gl-logo"><?php $image = get_field('content-logo-3');?>
                            <a href="http://www.povedatextil.com/wp-content/uploads/2019/10/pdf/ORGANIC%20CONTENT%20STANDARD.pdf" target="_blank"><img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"></a>
                           
                            </div>
                        </div>
                        <div class="ss-column-ue-1">
                            <h4><?php  echo get_field('content-title-3');?></h4>
                            <p><?php  echo get_field('content-text-3');?></p>
                                <span class="ss-atag"><a class="trigger_popup_fricc_three"><h5><?php  echo get_field('content-link-3');?><svg version="1.1" id="link_arrow_1"
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    width="19px" height="13px" viewBox="0 0 19 13"
                                    enable-background="new 0 0 19 13" xml:space="preserve">
                                    <polygon fill="#756d6d"
                                    points="12.475,0 11.061,0 17.081,6.021 0,6.021 0,7.021 17.038,7.021 11.06,13 12.474,13 18.974,6.5 " />
                                </svg></h5></a></span>
                            <div class="ss-gl-img owl-carousel owl-theme">
                                <div class="item"><?php $image3 = get_field('content-image-3');?><img  src="<?php echo $image3['url']; ?>"  alt="<?php echo $image3['alt']; ?>"></div>
                                <div class="item"><?php $image3a = get_field('content-image-3a');?><img  src="<?php echo $image3a['url']; ?>"  alt="<?php echo $image3a['alt']; ?>"></div>
                                <div class="item"><?php $image3b = get_field('content-image-3b');?><img  src="<?php echo $image3b['url']; ?>"  alt="<?php echo $image3b['alt']; ?>"></div>
                                <div class="item"><?php $image3c = get_field('content-image-3c');?><img  src="<?php echo $image3c['url']; ?>"  alt="<?php echo $image3c['alt']; ?>"></div>
                            </div>
                            <div class="hover_bkgr_fricc_three">
                                <span class="helper"></span>
                                <div>
                                    <div class="popupCloseButton_three">X</div>
                                    <div class="frame"><?php echo do_shortcode(' [wonderplugin_pdf src="http://www.povedatextil.com/wp-content/uploads/2019/12/SEAQUAL.pdf" width="100%" height="600px" style="border:0;"]');
                                 ?></div>
                                </div>
                            </div>
                            <div class="sea-video"><iframe width="754" height="503" src="<?php the_field('content-video'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        </div>
                    </div>
                </div>
        </div>
            <!-- about_area_end -->
                <!-- about_area_start -->
        <div id="inescop" class="inescop_vegan">
                <div class="container">
                    <div class="row">
                        <div class="ss-column-ue">
                            <div class="ss-inescop_vegan"><?php $image = get_field('content-logo-4');?>
                            <a href="<?php echo site_url();?>/wp-content/uploads/2019/10/pdf/VEGAN%20INESCOP.pdf" target="_blank"><img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"></a></div>
                            
                        </div>
                        <div class="ss-column-ue-1">
                            <h4><?php  echo get_field('content-title-4');?></h4>
                            <p><?php  echo get_field('content-text-4');?></p>
                           <?php  $testconditon=get_field('content_link_four');
                           if($testconditon!=""):?>
                                 <span class="ss-atag"><a class="trigger_popup_fricc_four"><h5><?php  echo get_field('content_link_four');?><svg version="1.1" id="link_arrow_1"
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    width="19px" height="13px" viewBox="0 0 19 13"
                                    enable-background="new 0 0 19 13" xml:space="preserve">
                                    <polygon fill="#756d6d"
                                    points="12.475,0 11.061,0 17.081,6.021 0,6.021 0,7.021 17.038,7.021 11.06,13 12.474,13 18.974,6.5 " />
                                </svg></h5></a></span>
                           <?php endif;?>
                        </div>
                        <div class="hover_bkgr_fricc_four">
                                <span class="helper"></span>
                                <div>
                                    <div class="popupCloseButton_four">X</div>
                                    <div class="frame"><?php echo do_shortcode(' [wonderplugin_pdf src="http://www.povedatextil.com/wp-content/uploads/2019/10/pdf/VEGAN%20INESCOP.pdf" width="100%" height="600px" style="border:0;"]');
                                  ?></div>
                                </div>
                            </div>
                    </div>
                </div>
        </div>
            <!-- about_area_end -->
            <!-- about_area_start -->
        <div id="carbono" class="carbono">
                <div class="container">
                    <div class="row">
                        <div class="ss-column-ue">
                            <div class="ss-inescop_vegan"><?php $image = get_field('content-logo-5');?>
                            <a href="<?php echo site_url();?>/wp-content/uploads/2019/10/pdf/HUELLA%20DE%20CARBONO.pdf" target="_blank"><img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"></a></div>
                            
                        </div>
                        <div class="ss-column-ue-1">
                            <h4><?php  echo get_field('content-title-5');?></h4>
                            <p><?php  echo get_field('content-text-5');?></p>
                        </div>
                    </div>
                </div>
        </div>
            <!-- about_area_end -->
            <!-- about_area_start -->


            <div id="inescop" class="inescop_vegan">
                <div class="container">
                    <div class="row">
                        <div class="ss-column-ue">
                            <div class="ss-inescop_vegan"><?php $image = get_field('digitial_logo');?>
                            <a href="<?php echo site_url();?>/wp-content/uploads/2019/12/IMPRESI%C3%93N-DIGITAL.pdf" target="_blank"><img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"></a></div>
                            
                        </div>
                        <div class="ss-column-ue-1">
                            <h4><?php  echo get_field('content-title-6');?></h4>
                            <p><?php  echo get_field('content-text-6');?></p>
                                <span class="ss-atag"><a class="trigger_popup_fricc_five"><h5><?php  echo get_field('content-link-6');?><svg version="1.1" id="link_arrow_1"
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    width="19px" height="13px" viewBox="0 0 19 13"
                                    enable-background="new 0 0 19 13" xml:space="preserve">
                                    <polygon fill="#756d6d"
                                    points="12.475,0 11.061,0 17.081,6.021 0,6.021 0,7.021 17.038,7.021 11.06,13 12.474,13 18.974,6.5 " />
                                </svg></h5></a></span>
                        </div>
                        <div class="hover_bkgr_fricc_five">
                                <span class="helper"></span>
                                <div>
                                    <div class="popupCloseButton_five">X</div>
                                    <div class="frame"><?php echo do_shortcode(' [wonderplugin_pdf src="http://www.povedatextil.com/wp-content/uploads/2019/12/IMPRESI%C3%93N-DIGITAL.pdf" width="100%" height="600px" style="border:0;"]');
                                   ?></div>
                                </div>
                            </div>
                    </div>
                </div>
        </div>

    </div>

        <div class="ss-mobile-content">
            <div id="gl_1" class="global_organic">
                <div class="container">
                    <div class="row">
                        <div class="ss-column-ue">
                        <div class="ss-gl-logo-1"><?php $image = get_field('content-logo-1');?>
                        <?php //$image= get_field('logo_href');?>
                        <a href="<?php echo site_url();?>/wp-content/uploads/2019/10/pdf/GLOBAL%20ORGANIC%20TEXTILE%20STANDARD.pdf" target="_blank"> <img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"></a></div>
                        <!-- <a href=" <?php// echo get_field('logo_href');?>" target="_blank"> <img  src="<?php //echo $image['url']; ?>"  alt="<?php //echo $image['alt']; ?>"></a></div> -->
               
                        <span class="img-code"><p><?php echo get_field('img_code');?></p></span>
                        </div>
                        <div class="ss-column-ue-1 ss-clt">
                            <h4><?php  echo get_field('content-title-1');?></h4>
                        </div>
                        <p><?php  echo get_field('content-text-1');?></p>
                            <span class="ss-atag"></span><a class="trigger_popup_fricc"><h5><?php  echo get_field('content-link-1');?></h5></a></span>
                            <div class="hover_bkgr_fricc">
                                <span class="helper"></span>
                                <div>
                                    <div class="popupCloseButton">X</div>
                                    <div class="frame"><?php 
                                     echo do_shortcode(' [wonderplugin_pdf src="http://www.povedatextil.com/wp-content/uploads/2019/12/GLOBAL-ORGANIC-TEXTILE-STANDARD.pdf" width="100%" height="600px" style="border:0;"]');
                                 ?></div>
                                </div>
                            </div>
                            <!-- <div class=""><?php $image = get_field('content-image-1');?><img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"></div> -->
                            <div class="ss-gl-img owl-carousel owl-theme">
                                <div class="item"><?php $image1 = get_field('content-image-1');?><img  src="<?php echo $image1['url']; ?>"  alt="<?php echo $image1['alt']; ?>"></div>
                                <div class="item"><?php $image1a = get_field('content-image-1a');?><img  src="<?php echo $image1a['url']; ?>"  alt="<?php echo $image1a['alt']; ?>"></div>
                                <div class="item"><?php $image1b = get_field('content-image-1b');?><img  src="<?php echo $image1b['url']; ?>"  alt="<?php echo $image1b['alt']; ?>"></div>
                                <div class="item"><?php $image1c = get_field('content-image-1c');?><img  src="<?php echo $image1c['url']; ?>"  alt="<?php echo $image1c['alt']; ?>"></div>
                            </div>
                    </div>
                </div>
               
            </div>
            <div id="gr_1" class="global_recycled">
                <div class="container">
                    <div class="row">
                        <div class="ss-column-ue">
                            <div class="ss-gl-logo-2"><?php $image = get_field('content-logo-2');?>
                            <a href="<?php echo site_url();?>/wp-content/uploads/2019/10/pdf/GLOBAL%20RECYCLED%20STANDARD%20(GRS).pdf" target="_blank"> <img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"></a></div>
                            <span class="img-code"><p><?php echo get_field('img_code');?></p></span>
                        </div>
                        <div class="ss-column-ue-1 ss-clt-1">
                            <h4><?php  echo get_field('content-title-2');?></h4>
                        </div>
                        <p><?php  echo get_field('content-text-2');?></p>
                        <span class="ss-atag"></span><a class="trigger_popup_fricc_two"><h5><?php  echo get_field('content-link-2');?></h5></a></span>
                            <!-- <div class="ss-gl-img"><?php $image = get_field('content-image-2');?><img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"></div> -->
                            <div class="ss-gl-img owl-carousel owl-theme">
                                <div class="item"><?php $image1 = get_field('content-image-2');?><img  src="<?php echo $image1['url']; ?>"  alt="<?php echo $image1['alt']; ?>"></div>
                                <div class="item"><?php $image1a = get_field('content-image-2a');?><img  src="<?php echo $image1a['url']; ?>"  alt="<?php echo $image1a['alt']; ?>"></div>
                                <div class="item"><?php $image1b = get_field('content-image-2b');?><img  src="<?php echo $image1b['url']; ?>"  alt="<?php echo $image1b['alt']; ?>"></div>
                                <div class="item"><?php $image1c = get_field('content-image-2c');?><img  src="<?php echo $image1c['url']; ?>"  alt="<?php echo $image1c['alt']; ?>"></div>
                            </div>
                    </div>
                    <div class="hover_bkgr_fricc_two">
                                <span class="helper"></span>
                                <div>
                                    <div class="popupCloseButton_two">X</div>
                                    <div class="frame"><?php 
                                     echo do_shortcode(' [wonderplugin_pdf src="http://www.povedatextil.com/wp-content/uploads/2019/12/GLOBAL-RECYCLED-STANDARD.pdf" width="100%" height="600px" style="border:0;"]');
                                  ?></div>
                                </div>
                            </div>
                    
                </div>
                
            </div>
            <div id="sea_1" class="seaqual">
                <div class="container">
                    <div class="row">
                        <div class="ss-column-ue">
                            <div class="ss-gl-logo"><?php $image = get_field('content-logo-3');?>
                            <a href="<?php echo site_url();?>/wp-content/uploads/2019/10/pdf/ORGANIC%20CONTENT%20STANDARD.pdf" target="_blank"><img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"></a></div>
                       
                            </div>
                        <div class="ss-column-ue-1 ss-clt-2">
                            <h4><?php  echo get_field('content-title-3');?></h4>
                        </div>
                        <p><?php  echo get_field('content-text-3');?></p>
                        <span class="ss-atag"></span><a class="trigger_popup_fricc_three"><h5><?php  echo get_field('content-link-3');?></h5></a></span>
                            <!-- <div class="ss-gl-img"><?php $image = get_field('content-image-3');?><img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"></div> -->
                            <div class="ss-gl-img owl-carousel owl-theme">
                                <div class="item"><?php $image1 = get_field('content-image-3');?><img  src="<?php echo $image1['url']; ?>"  alt="<?php echo $image1['alt']; ?>"></div>
                                <div class="item"><?php $image1a = get_field('content-image-3a');?><img  src="<?php echo $image1a['url']; ?>"  alt="<?php echo $image1a['alt']; ?>"></div>
                                <div class="item"><?php $image1b = get_field('content-image-3b');?><img  src="<?php echo $image1b['url']; ?>"  alt="<?php echo $image1b['alt']; ?>"></div>
                                <div class="item"><?php $image1c = get_field('content-image-3c');?><img  src="<?php echo $image1c['url']; ?>"  alt="<?php echo $image1c['alt']; ?>"></div>
                            </div>
                            <div class="sea-video"><iframe width="754" height="503" src="<?php the_field('content-video'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                            <div class="hover_bkgr_fricc_three">
                                <span class="helper"></span>
                                <div>
                                    <div class="popupCloseButton_three">X</div>
                                    <div class="frame"><?php
                                     echo do_shortcode(' [wonderplugin_pdf src="http://www.povedatextil.com/wp-content/uploads/2019/12/SEAQUAL.pdf" width="100%" height="600px" style="border:0;"]');
                                    ?></div>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
            <div id="inescop_1" class="inescop_vegan">
                <div class="container">
                    <div class="row">
                        <div class="ss-column-ue">
                            <div class="ss-inescop_vegan"><?php $image = get_field('content-logo-4');?>
                            <a href="<?php echo site_url();?>/wp-content/uploads/2019/10/pdf/VEGAN%20INESCOP.pdf" target="_blank"> <img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"></a></div>
                        
                            </div>
                        <div class="ss-column-ue-1 ss-clt-3">
                            <h4><?php  echo get_field('content-title-4');?></h4>
                        </div>
                        <p><?php  echo get_field('content-text-4');?></p>
                        <?php $links=get_field('content_link_four');?>
                        <?php if($links!=""):?>
                        <span class="ss-atag"></span><a class="trigger_popup_fricc_four"><h5><?php  echo get_field('content_link_four');?></h5></a></span> 
                        <?php endif;?>
                    </div>
                    <div class="hover_bkgr_fricc_four">
                                <span class="helper"></span>
                                <div>
                                    <div class="popupCloseButton_four">X</div>
                                    <div class="frame"><?php 
                                     echo do_shortcode(' [wonderplugin_pdf src="http://www.povedatextil.com/wp-content/uploads/2019/10/pdf/VEGAN%20INESCOP.pdf" width="100%" height="600px" style="border:0;"]');
                                ?></div>
                                </div>
                            </div>
                </div>
            </div>
            <div id="carbono_1" class="carbono">
                <div class="container">
                    <div class="row">
                        <div class="ss-column-ue">
                            <div class="ss-inescop_vegan"><?php $image = get_field('content-logo-5');?>
                            <a href="<?php echo site_url();?>/wp-content/uploads/2019/10/pdf/HUELLA%20DE%20CARBONO.pdf" target="_blank"><img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"></a></div>
                        
                            </div>
                        <div class="ss-column-ue-1 ss-clt-4">
                            <h4><?php  echo get_field('content-title-5');?></h4>
                        </div>
                            <p><?php  echo get_field('content-text-5');?></p>
                                    
                    </div>
                </div>
            </div>

            <div id="inescop_1" class="inescop_vegan">
                <div class="container">
                    <div class="row">
                        <div class="ss-column-ue">
                            <div class="ss-inescop_vegan"><?php $image = get_field('digitial_logo');?>
                            <a href="<?php echo site_url();?>/wp-content/uploads/2019/12/IMPRESI%C3%93N-DIGITAL.pdf" target="_blank"> <img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"></a></div>
                        
                            </div>
                        <div class="ss-column-ue-1 ss-clt-3">
                            <h4><?php  echo get_field('content-title-6');?></h4>
                        </div>
                        <p><?php  echo get_field('content-text-6');?></p>
                        <span class="ss-atag"></span><a class="trigger_popup_fricc_five"><h5><?php  echo get_field('content-link-6');?></h5></a></span>
                    </div>
                    <div class="hover_bkgr_fricc_five">
                                <span class="helper"></span>
                                <div>
                                    <div class="popupCloseButton_five">X</div>
                                    <div class="frame"><?php 
                                     echo do_shortcode(' [wonderplugin_pdf src="http://www.povedatextil.com/wp-content/uploads/2019/12/IMPRESI%C3%93N-DIGITAL.pdf" width="100%" height="600px" style="border:0;"]');
                                    ?></div>
                                </div>
                            </div>
                </div>
            </div>
            </div>
<?php get_footer();?>