<?php /** * Template Name: Case Study New */ ?>
<?php get_header('new'); ?>
<div class="content">
    <div class="cc-yii-development" id="yii-development">
        <div class="wrapper">
                <!--banner-section-->
                <div class="cc-innerpage-banner">
                    <div class="banner-section">
                        <div class="image-section"
                            style="background: url('<?php echo get_template_directory_uri();?>/assets/images/app-development-bg-banner.jpg') no-repeat ;background-size: cover">
                        </div>
                        <div class="overlay-section opacity0">
                            <div class="container">
                                <div class="cc-row">
                                    <div class="banner-content">
                                        <div class="text-one">
                                            <h3><?php if(get_field('banner_section_line_one')){ the_field('banner_section_line_one'); }?></h3>
                                        </div>
                                        <div class="text-two">
                                            <h2 class="mobile-text-two-sty"><?php if(get_field('banner_section_line_two')){ the_field('banner_section_line_two'); }?> </h2>
                                        </div>
                                        <div class="text-three">
                                            <h3><?php if(get_field('banner_section_content')){ the_field('banner_section_content'); }?></h3>
                                            <div class="more-btn">
                                                <div class="button-wrapper">
                                                    <?php $banner_section_button_link = get_field('banner_section_button_link');
                                                        if($banner_section_button_link) {  
                                                            $link_url = $banner_section_button_link['url']; 
                                                            $link_text = $banner_section_button_link['title']; ?>
                                                    <a href="<?php echo esc_url($link_url); ?>" class="btn-sty-one animated-button thar-three"><span class="text"><?php echo esc_attr($link_text); ?></span><span class="arrow"></span></a>
                                                        <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-content-right">
                                        <?php $banner_section_image = get_field('banner_section_image');
                                                if ($banner_section_image){?>
                                            <img src="<?php echo $banner_section_image['url']; ?>" alt="<?php echo $banner_section_image['alt']; ?>">
                                            <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="content">
            <div class="cc-row case-study wordpressdevdiv">
                <div class="container">
                    <div class="cc-row">
                        <div class="cc-col-full">
                            <div class="content-block text-center">
                                <div class="content-block-title web-app-title green-title fadeIn">
                                    <h3 class="text-center"><span class="grey-col"><?php if(get_field('project_name')){ the_field('project_name'); }?> -</span> <?php if(get_field('project_done')){ the_field('project_done'); }?></h3>
                                </div>
                                <div class="content-block-title-wrapper">
                                </div>
                                <div class="content-block-contents">
                                    <div class="cc-block">
                                        <?php if(get_field('project_description')){ the_field('project_description'); }?>
                                    </div>
                                </div>
                            </div>
                            <div class="cc-icons-section">
                                <div class="cc-icons-section-line"></div>
                                <div class="cc-icon-wrapper-section">
                                    <?php if (have_rows('icons')):?>
                                        <?php while (have_rows('icons')): the_row();?>
                                            <div class="cc-icon-text-wrapper">
                                                <div class="cc-icons-img-section">
                                                    <div class="image-wrapper">
                                                        <?php $icon_image = get_sub_field('icon_image');
                                                            if ($icon_image){?>
                                                                <img src="<?php echo $icon_image['url']; ?>" alt="<?php echo $icon_image['alt']; ?>">
                                                            <?php } ?>
                                                    </div>
                                                </div>
                                                <div class="cc-icons-text-section">
                                                    <h3><?php the_sub_field('icon_text');?></h3>
                                                </div>
                                            </div>
                                        <?php endwhile;?>
                                    <?php endif;?>                     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="cc-webspeed-section">
                <div class="container">
                    <div class="cc-row">
                        <div class="cc-col-50">
                            <div class="cc-img-section">
                                <?php $webspeed_section_image = get_field('webspeed_section_image');
                                            if ($webspeed_section_image){?>
                                        <img src="<?php echo $webspeed_section_image['url']; ?>" alt="<?php echo $webspeed_section_image['alt']; ?>">
                                        <?php } ?>
                            </div>
                        </div>
                        <div class="cc-col-50">
                            <div class="cc-text-section">
                                <div class="cc-title">
                                        <?php $webspeed_section_logo = get_field('webspeed_section_logo');
                                            if ($webspeed_section_logo){?>
                                        <img src="<?php echo $webspeed_section_logo['url']; ?>" alt="<?php echo $webspeed_section_logo['alt']; ?>">
                                        <?php } ?>
                                    <?php if(get_field('webspeed_section_heading')){ the_field('webspeed_section_heading'); }?>
                                </div>
                                <div class="cc-content">
                                    <?php if(get_field('webspeed_section_content')){ the_field('webspeed_section_content'); }?>
                                    <?php $webspeed_section_image_one = get_field('webspeed_section_image_one');
                                            if ($webspeed_section_image_one){?>
                                        <img src="<?php echo $webspeed_section_image_one['url']; ?>" alt="<?php echo $webspeed_section_image_one['alt']; ?>">
                                        <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cc-row">
                        <div class="cc-col-full">
                            <div class="cc-full-img">
                                    <?php $webspeed_section_image_two = get_field('webspeed_section_image_two');
                                            if ($webspeed_section_image_two){?>
                                        <img src="<?php echo $webspeed_section_image_two['url']; ?>" alt="<?php echo $webspeed_section_image_two['alt']; ?>">
                                        <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="cc-mobile-responsive">
                <div class="container">
                    <div class="cc-row">
                        <div class="cc-col-50 cent-div">
                            <div class="cc-text">
                                <div class="cc-title">
                                        <?php $responsive_section_logo = get_field('responsive_section_logo');
                                            if ($responsive_section_logo){?>
                                        <img src="<?php echo $responsive_section_logo['url']; ?>" alt="<?php echo $responsive_section_logo['alt']; ?>">
                                        <?php } ?>
                                    <h3><?php if(get_field('responsive_section_heading')){ the_field('responsive_section_heading'); }?></h3>
                                </div>
                                <div class="cc-cont">
                                    
                                    <?php if(get_field('responsive_section_content')){ the_field('responsive_section_content'); }?>
                                
                                </div>
                            </div>
                        </div>
                        <div class="cc-col-50">
                            <div class="cc-img-wrapper">
                                    <?php $responsive_section_image = get_field('responsive_section_image');
                                            if ($responsive_section_image){?>
                                        <img src="<?php echo $responsive_section_image['url']; ?>" alt="<?php echo $responsive_section_image['alt']; ?>">
                                        <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="cc-seo-friendly">
    
                <div class="container">
                    <div class="cc-row">
                        <div class="cc-col-50">
                            <div class="cc-image-section">
                                <?php $seo_section_image = get_field('seo_section_image');
                                    if ($seo_section_image){?>
                                <img src="<?php echo $seo_section_image['url']; ?>" alt="<?php echo $seo_section_image['alt']; ?>">
                                <?php } ?>
                            </div>
                        </div>
                        <div class="cc-col-50">
                            <div class="cc-text-section">
                                    <div class="cc-title">
                                        <?php $seo_section_logo = get_field('seo_section_logo');
                                            if ($seo_section_logo){?>
                                        <img src="<?php echo $seo_section_logo['url']; ?>" alt="<?php echo $seo_section_logo['alt']; ?>">
                                        <?php } ?>
                                        <?php if(get_field('seo_section_heading')){ the_field('seo_section_heading'); }?>
                                    </div>
                                    <div class="cc-content">
                                        <?php if(get_field('seo_section_content')){ the_field('seo_section_content'); }?>
                                    </div>
                                </div>
                        </div>
                    </div>
    
                    <div class="cc-row seo-feature-tiles">
                        <?php if (have_rows('seo_section_points')):?>
                            <?php while (have_rows('seo_section_points')): the_row();?>                            
                                <div class="cc-col-33">
                                    <div class="cc-tiles-wrapper">
                                        <div class="image-wrapper"></div>
                                        <div class="text-wrapper">
                                            <p><?php the_sub_field('seo_section_points_text'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile;?>
                        <?php endif;?> 
                    </div>
    
                </div>
    
            </div>
    
            <div class="cc-w3-validation">
                <div class="container">
                    <div class="cc-row center-row">
                        
                        <div class="cc-col-50">
                            <div class="cc-text">
                                <div class="cc-title">
                                    <?php $w3c_validator_logo = get_field('w3c_validator_logo');
                                        if ($w3c_validator_logo){?>
                                    <img src="<?php echo $w3c_validator_logo['url']; ?>" alt="<?php echo $w3c_validator_logo['alt']; ?>">
                                    <?php } ?>
                                    <h3><?php if(get_field('w3c_validator_heading')){ the_field('w3c_validator_heading'); }?></h3>
                                </div>
                                <div class="cc-content">
                                    
                                    <?php if(get_field('w3c_validator_content')){ the_field('w3c_validator_content'); }?>
                                
                                </div>
                            </div>
                        </div>
    
                        <div class="cc-col-50">
                            <div class="image-wrapper">
                                <?php $w3c_validator_image = get_field('w3c_validator_image');
                                        if ($w3c_validator_image){?>
                                    <img src="<?php echo $w3c_validator_image['url']; ?>" alt="<?php echo $w3c_validator_image['alt']; ?>">
                                    <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="cc-web-security">
    
                <div class="container">
                    <div class="cc-row row-cent">
                        <div class="cc-col-50">
                            <div class="cc-image-section">
                                <?php $web_security_image = get_field('web_security_image');
                                    if ($web_security_image){?>
                                <img src="<?php echo $web_security_image['url']; ?>" alt="<?php echo $web_security_image['alt']; ?>">
                                <?php } ?>
                            </div>
                        </div>
                        <div class="cc-col-50">
                            <div class="cc-text-section">
                                    <div class="cc-title">
                                        <?php $web_security_logo = get_field('web_security_logo');
                                        if ($web_security_logo){?>
                                        <img src="<?php echo $web_security_logo['url']; ?>" alt="<?php echo $web_security_logo['alt']; ?>">
                                        <?php } ?>
                                        <?php if(get_field('web_security_heading')){ the_field('web_security_heading'); }?>
                                    </div>
                                    <div class="cc-content">
                                        <?php if(get_field('web_security_content')){ the_field('web_security_content'); }?>
                                    </div>
                                </div>
                        </div>
                    </div>
    
                    <div class="cc-row seo-feature-tiles web-secure">
                        <?php if (have_rows('web_security_lists')):?>
                            <?php while (have_rows('web_security_lists')): the_row();?>                   
                                <div class="cc-col-33">
                                    <div class="cc-tiles-wrapper">
                                        <div class="image-wrapper <?php the_sub_field('logo_text');?>"></div>
                                        <div class="text-wrapper">
                                            <p><?php the_sub_field('section_lists_text');?></p>
                                        </div>
                                    </div>
                                </div>                     
                            <?php endwhile;?>
                        <?php endif;?>                  
                    </div>
    
                </div>
    
            </div>
    
            <!--footer contact-->
            <div class="footer-case-study">
                    <div class="parallax-overlay-casestudy"></div>
                    <div class="container">
                        <div class="cc-row">
                            <div class="cc-col-55 casestudy-left">
                                <div class="casestudy-testimonial">
                                    <div class="case-study-title">TESTIMONIAL</div>
                                    <h3><?php if(get_field('testimonial_project_name')){ the_field('testimonial_project_name'); }?></h3>
                                    <?php if(get_field('testimonial_project_content')){ the_field('testimonial_project_content'); }?>
                                    <p class="author"> -<?php if(get_field('testimonial_project_ceo_name')){ the_field('testimonial_project_ceo_name'); }?>, <span>CEO of Kartica</span></p>
                                </div>
                            </div>
                            <div class="cc-col-45">
                                <?php $testimonial_project_image = get_field('testimonial_project_image');
                                if ($testimonial_project_image){?>
                                <img src="<?php echo $testimonial_project_image['url']; ?>" alt="<?php echo $testimonial_project_image['alt']; ?>">
                                <?php } ?>
                            </div>
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
                            <h3><?php if(get_field('footer_contact_line_one')){ the_field('footer_contact_line_one'); }?></h3>
                        </div>
                        <div class="desc">
                            <p><?php if(get_field('footer_contact_line_two')){ the_field('footer_contact_line_two'); }?></p>
                        </div>
                        <div class="more-btn button-center">
                            <div class="button-wrapper">
                                <?php $footer_contact_button = get_field('footer_contact_button');
                                    if($footer_contact_button) {  
                                        $link_url = $footer_contact_button['url']; 
                                        $link_text = $footer_contact_button['title']; ?>
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