<?php /** * Template Name: CMS Development */ ?>
<?php get_header('new'); ?>
<div class="content">
    <div class="wrapper">
        <!--banner-section-->
        <div class="cc-innerpage-banner">
            <div class="banner-section">
                <div class="image-section"
                    style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/cms-development.jpg') no-repeat ;background-size: cover">
                </div>
                <div class="overlay-section opacity0">
                    <div class="container">
                        <div class="banner-content">
                            <div class="text-one">
                                <h3><?php if(get_field('banner_heading')){ the_field('banner_heading'); }?></h3>
                            </div>
                            <div class="text-two">
                                <?php if(get_field('banner_description')){ the_field('banner_description'); }?>
                            </div>
                            <div class="text-three">
                                <h3><?php if(get_field('banner_text')){ the_field('banner_text'); }?></h3>
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
    <div class="content">
        <div class="cc-row web-app-service cms-developdiv">
            <div class="container">
                <div class="cc-row cms-service-development">
                    <div class="cc-col-50">
                        <div class="content-block">
                            <div class="content-block-title web-app-title">
                                <?php if(get_field('content_heading')){ the_field('content_heading'); }?>
                            </div>
                            <div class="content-block-sub-title">
                                <div class="right-line small-title-line"></div>
                                <h5><?php if(get_field('content_description')){ the_field('content_description'); }?></h5>
                            </div>
                            
                            <div class="content-block-contents">
                                <?php if(get_field('content_text')){ the_field('content_text'); }?>
                            </div>

                        </div>
                    </div>
                    <div class="cc-col-50">
                        <div class="image-block">
                            <div class="image-one">
                                <?php $content_image = get_field('content_image');
                                    if ($content_image){?>
                                <img src="<?php echo $content_image['url']; ?>" alt="<?php echo $content_image['alt']; ?>">
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--our cms service-->
                <div class="cc-row askancms-service">
                    <div class="cc-col-50">
                        <div class="content-block">
                            <div class="content-block-contents">
                                <div class="cc-row">
                                    <?php if (have_rows('services_row_1')):?>
                                        <?php while (have_rows('services_row_1')): the_row();?>
                                            <div class="cc-col-50 why-cms-askan">
                                                <div class="whyus-box">
                                                    <?php $services_logo = get_sub_field('services_logo');
                                                        if ($services_logo){?>
                                                    <img src="<?php echo $services_logo['url']; ?>" alt="<?php echo $services_logo['alt']; ?>">
                                                    <?php } ?>
                                                    <?php the_sub_field('services_heading');?>
                                                    <?php the_sub_field('services_content');?>
                                                </div>
                                            </div>
                                        <?php endwhile;?>
                                    <?php endif;?>
                                </div>
                                <div class="cc-row">
                                    <?php if (have_rows('services_row_2')):?>
                                        <?php while (have_rows('services_row_2')): the_row();?>
                                            <div class="cc-col-50 why-cms-askan">
                                                <div class="whyus-box">
                                                    <?php $services_row_logo = get_sub_field('services_row_logo');
                                                        if ($services_row_logo){?>
                                                    <img src="<?php echo $services_row_logo['url']; ?>" alt="<?php echo $services_row_logo['alt']; ?>">
                                                    <?php } ?>
                                                    <?php the_sub_field('services_row_heading');?>
                                                    <?php the_sub_field('services_row_content');?>
                                                </div>
                                            </div>
                                        <?php endwhile;?>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cc-col-50 ourcms-service-div">
                        <div class="content-block">
                            <div class="content-block-contents ourcms-service">
                                <?php if(get_field('slider_content')){ the_field('slider_content'); }?>
                            </div>
                        </div>
                    </div>
                </div>
                <!--our cms servoce-->
            </div>
        </div>
        
        <!--cms technolgies-->
        <div class="cc-row technologies-div text-center">
            <div class="container">
                <div class="cc-col-100">
                    <div class="content-block">
                        <?php if(get_field('cms_technologies_heading')){ the_field('cms_technologies_heading'); }?>
                        <ul>
                            <?php if (have_rows('technologies')):?>
                                <?php while (have_rows('technologies')): the_row();?>
                                    <li> <?php $technologies_image = get_sub_field('technologies_image'); if ($technologies_image){?> <img src="<?php echo $technologies_image['url']; ?>" alt="<?php echo $technologies_image['alt']; ?>"> <?php } ?></li>                                    
                                <?php endwhile;?>
                            <?php endif;?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--cms technolgies-->
        
        <!--why choose askan-->
        <div class="customer-choose">
            <div class="container">
                <div class="cc-row">
                <div class="cc-col-50">
                    <div class="content-block">
                        <div class="content-block-title web-app-title">
                            <?php if(get_field('why_choose_askan_heading')){ the_field('why_choose_askan_heading'); }?>
                        </div>
                        <div class="content-block-contents">
                            <div class="tick-list">
                            <ul>
                                <?php if (have_rows('lists')):?>
                                    <?php while (have_rows('lists')): the_row();?>
                                        <li><?php the_sub_field('lists_name');?></li>                                    
                                    <?php endwhile;?>
                                <?php endif;?>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cc-col-50">
                    <div class="image-block">
                        <div class="image-one">
                            <?php $why_choose_us_image = get_field('why_choose_us_image');
                                if ($why_choose_us_image){?>
                            <img src="<?php echo $why_choose_us_image['url']; ?>" alt="<?php echo $why_choose_us_image['alt']; ?>">
                            <?php } ?>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!--why choose askan-->
        
        <!--cms process steps-->
        <div class="cms-process">
            <div class="container">
                <div class="cc-row">
                    <div class="contact-block-title block-titles">
                    <div class="title">
                        <div class="big-title">
                            <h2><?php if(get_field('process_steps_heading')){ the_field('process_steps_heading'); }?></h2>
                        </div>
                        <div class="small-title">
                            <div class="right-line small-title-line"></div>
                            <div class="title-content cms-quote">
                                <h3><?php if(get_field('process_steps_header')){ the_field('process_steps_header'); }?></h3>
                            </div>
                            <div class="left-line small-title-line"></div>
                        </div>
                    </div>
                    <div class="desc">
                        <p><?php if(get_field('process_step_description')){ the_field('process_step_description'); }?></p>
                    </div>
                </div>
                </div>
                <div class="cc-row">
                <div class="steps-div">
                    <div class="dash"></div>
                        <div class="cc-row m-t-30">
                            <?php if (have_rows('process_steps')):?>
                                <?php while (have_rows('process_steps')): the_row();?>
                                    <div class="cc-col-25 text-center">
                                        <div class="number-span"><?php the_sub_field('number'); ?></div>
                                        <p class="step-desp"><?php the_sub_field('steps'); ?></p>
                                    </div>
                                <?php endwhile;?>
                            <?php endif;?>
                        </div>
                        <div class="step-image">
                            <?php $process_steps_image = get_field('process_steps_image');
                                if ($process_steps_image){?>
                            <img src="<?php echo $process_steps_image['url']; ?>" alt="<?php echo $process_steps_image['alt']; ?>">
                            <?php } ?>
                        </div>
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
                        <h3><?php if(get_field('services_name')){ the_field('services_name'); }?></h3>
                    </div>
                    <div class="desc">
                        <p><?php if(get_field('contact_description')){ the_field('contact_description'); }?></p>
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
<?php get_footer('new'); ?>