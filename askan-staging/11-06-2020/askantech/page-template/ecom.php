<?php /** * Template Name: Ecommerce Development */ ?>
<?php get_header('new'); ?>
<div class="content">
    <div class="cc-ecommerce-development-wrapper" id="ecommerce">
        <div class="wrapper">
                <!--banner-section-->
                <div class="cc-innerpage-banner">
                    <div class="banner-section">
                        <div class="image-section"
                            style="background: url('<?php echo get_template_directory_uri();?>/assets/images/ecommerce-banner-bg.png') no-repeat ;background-size: cover">
                        </div>
                        <div class="overlay-section opacity0">
                            <div class="container">
                                <div class="cc-row">
                                    <div class="banner-content">
                                        <div class="text-one">
                                            <h3><?php if(get_field('banner_heading')){ the_field('banner_heading'); }?></h3>
                                        </div>
                                        <div class="text-two">
                                            <?php if(get_field('banner_quote')){ the_field('banner_quote'); }?>
                                        </div>
                                        <div class="text-three">
                                            <h3><?php if(get_field('banner_description')){ the_field('banner_description'); }?></h3>
                                            <div class="more-btn">
                                                <div class="button-wrapper">
                                                    <?php $banner_button = get_field('banner_button');
                                                    if($banner_button) {  
                                                        $link_url = $banner_button['url']; 
                                                        $link_text = $banner_button['title']; ?>
                                                        <a href="<?php echo esc_url($link_url); ?>" class="btn-sty-one animated-button thar-three"><span class="text"><?php echo esc_attr($link_text); ?></span><span class="arrow"></span></a>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-content-right">
                                        <?php $banner_image = get_field('banner_image');
                                            if ($banner_image){?>
                                        <img src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>">
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="content">
            <div class="cc-ecommerce-development">
                <div class="container">
                    <div class="cc-row">
                    
                        <div class="cc-col-50">
                            <div class="cc-image-wrapper">
                                <?php $content_image = get_field('content_image');
                                    if ($content_image){?>
                                <img src="<?php echo $content_image['url']; ?>" alt="<?php echo $content_image['alt']; ?>">
                                <?php } ?>
                            </div>
                        </div>
    
                        <div class="cc-col-50">
                            <div class="content-block">
                                <div class="content-block-title web-app-title slideInRight">
                                    <?php if(get_field('content_heading')){ the_field('content_heading'); }?>
                                </div>
                                <div class="content-block-sub-title">
                                    <div class="right-line small-title-line"></div>
                                    <h5><?php if(get_field('content_quote')){ the_field('content_quote'); }?></h5>
                                </div>
                                <div class="content-block-title-wrapper">
                                </div>
                            
                                <div class="content-block-contents">
                                    <?php if (have_rows('content_description')):?>
                                        <?php while (have_rows('content_description')): the_row();?>
                                            <div class="cc-block">
                                                <?php the_sub_field('content');?>
                                            </div>
                                        <?php endwhile;?>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
            <div class="cc-what-we-provide">
                <div class="cc-wwp-wrapper">
                    <div class="container">
                        <div class="cc-row">
                            <div class="cc-col-50">
                                <div class="cc-icon-list-wrapper">
                                    <?php if (have_rows('services')):?>
                                        <?php while (have_rows('services')): the_row();?>
                                            <div class="cc-icon-wrapper">
                                                <?php $services_logo = get_sub_field('services_logo');
                                                    if ($services_logo){?>
                                                <img src="<?php echo $services_logo['url']; ?>" alt="<?php echo $services_logo['alt']; ?>">
                                                <?php } ?>
                                                <?php the_sub_field('services_title');?>
                                            </div>
                                        <?php endwhile;?>
                                    <?php endif;?>
                                </div>
                            </div>
    
                            <div class="cc-col-50 cc-list-block">
                                <div class="cc-content-box">
                                    <div class="content-block">
                                        <div class="content-block-title web-app-title slideInRight">
                                            <h3><?php if(get_field('what_we_provide_heading')){ the_field('what_we_provide_heading'); }?></h3>
                                        </div>
                                        <div class="content-block-sub-title">
                                            <div class="right-line small-title-line"></div>
                                            <h5><?php if(get_field('what_we_provide_quote')){ the_field('what_we_provide_quote'); }?></h5>
                                        </div>
    
                                        <div class="cc-list-wrapper">
                                            <ul>
                                                <?php if (have_rows('what_we_provide')):?>
                                                    <?php while (have_rows('what_we_provide')): the_row();?>
                                                        <li><?php the_sub_field('lists');?></li>
                                                    <?php endwhile;?>
                                                <?php endif;?>
                                            </ul>
                                        </div>
                                        
                            
                                    </div>
                                </div>
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
            <!--footer contact-->
            <div class="footer-case-study">
                <div class="parallax-overlay-casestudy"></div>
                <div class="container">
                    <div class="ecommerce-technology">
                        <div class="container">
                        <div class="cc-row">
                            <div class="cc-col-50 text-center apptech-txt">
                                <h3><?php if(get_field('case_study_quote')){ the_field('case_study_quote'); }?><span class="small-title-line"></span></h3>
                            </div>
                            <div class="cc-col-50 apptech-box-wrapper">
                                <?php if (have_rows('case_study')): $i = 1; ?>
                                    <?php while (have_rows('case_study')): the_row();
                                    if($i == 1){
                                    $class= "blue";
                                }elseif($i == 2){
                                        $class= "dark-blue";
                                        }elseif($i==3){$class="violet";}?>
                                        <div class="<?php echo $class; ?>-bg apptech-box">
                                            <?php $case_study_image = get_sub_field('case_study_image');
                                                if ($case_study_image){?>
                                            <img src="<?php echo $case_study_image['url']; ?>" alt="<?php echo $case_study_image['alt']; ?>">
                                            <?php } ?>
                                            <span><?php the_sub_field('case_study_title');?></span>
                                        </div>
                                    <?php $i++; endwhile;?>
                                <?php endif;?>
                            </div>					
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cc-how-we-work">
                <div class="container">
                    <div class="row">
                        <div class="cc-cont">
                            <div class="content-block">
                                <div class="content-block-title web-app-title slideInRight">
                                    <h3><?php if(get_field('work_process_heading')){ the_field('work_process_heading'); }?></h3>
                                </div>
                                <div class="content-block-sub-title">
                                    <div class="right-line small-title-line"></div>
                                    <h5><?php if(get_field('work_process_quote')){ the_field('work_process_quote'); }?></h5>
                                </div>
    
                                    <div class="cc-cont">
                                        <?php if(get_field('work_process_description')){ the_field('work_process_description'); }?>
                                    </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="cc-white-box-wrapper">
                            <?php if (have_rows('work_process_steps')):?>
                                <?php while (have_rows('work_process_steps')): the_row();?>
                                    <div class="cc-white-box">
                                        <?php $steps_image = get_sub_field('steps_image');
                                            if ($steps_image){?>
                                        <img src="<?php echo $steps_image['url']; ?>" alt="<?php echo $steps_image['alt']; ?>">
                                        <?php } ?>
                                        <h3><?php the_sub_field('steps_title'); ?></h3>
                                    </div>
                                <?php endwhile;?>
                            <?php endif;?>
                        </div>
                    </div>
    
                    <div class="cc-row">
                        <div class="cc-layer-link"></div>
                    </div>  
                    
                    
    
                </div>
            </div>
            <!--footer contact-->
            <div class="footer-contact">
                <div class="container">
                    <div class="cc-row">
                        <div class="contact-block-title block-titles">
                            <div class="title">
                                <div class="big-title">
                                    <h2>CONTACT US</h2>
                                </div>
                                <div class="small-title">
                                    <div class="right-line small-title-line"></div>
                                    <div class="title-content get-for-quote">
                                        <h3>GET FOR QUOTE</h3>
                                    </div>
                                    <div class="left-line small-title-line"></div>
                                </div>
                            </div>
                            <div class="title">
                                <h3><?php if(get_field('footer_contact_service_name')){ the_field('footer_contact_service_name'); }?></h3>
                            </div>
                            <div class="desc">
                                <p><?php if(get_field('footer_contact_description')){ the_field('footer_contact_description'); }?></p>
                            </div>
                            <div class="more-btn button-center">
                                <div class="button-wrapper">
                                    <?php $footer_contact = get_field('footer_contact');
                                        if($footer_contact) {  
                                            $link_url = $footer_contact['url']; 
                                            $link_text = $footer_contact['title']; ?>
                                        <a href="<?php echo esc_url($link_url); ?>" class="btn-sty-one animated-button thar-three"><span class="text"><?php echo esc_attr($link_text); ?></span><span class="arrow"></span></a>
                                    <?php } ?>
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
