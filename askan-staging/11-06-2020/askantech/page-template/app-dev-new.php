<?php /** * Template Name: App Dev New */ ?>
<?php get_header('new'); ?>

<div class="content">        
    <div class="cc-app-development" id="app-development">
        <div class="wrapper">
                <!--banner-section-->
                <div class="cc-innerpage-banner">
                    <div class="banner-section">
                        <div class="image-section"
                            style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/app-development-bg-banner.jpg') no-repeat ;background-size: cover">
                        </div>
                        <div class="overlay-section opacity0">
                            <div class="container">
                                <div class="banner-content">
                                    <div class="text-one">
                                        <h3><?php if(get_field('banner_section_one')){ the_field('banner_section_one'); }?></h3>
                                    </div>
                                    <div class="text-two">
                                        <?php if(get_field('banner_section_line_two')){ the_field('banner_section_line_two'); }?>
                                    </div>
                                    <div class="text-three">
                                        <?php if(get_field('banner_content')){ the_field('banner_content'); }?>
                                        <div class="more-btn">
                                            <div class="button-wrapper">
                                                <?php $banner_btn = get_field('banner_button_link');
                                                        if($banner_btn) {  
                                                            $link_url = $banner_btn['url']; 
                                                            $link_text = $banner_btn['title']; ?>
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
        <div class="content">
            <div class="cc-row web-app-service app-developdiv">
                <div class="container">
                    <div class="cc-row">
                    <div class="cc-col-full">
                        <div class="content-block text-center">
                            <div class="content-block-title web-app-title green-title">
                                <?php if(get_field('section_two_heading')){ the_field('section_two_heading'); }?>
                            </div>
                            <div class="content-block-title-wrapper">
                            </div>
                            <div class="content-block-contents">
                                <div class="cc-block">
                                    <?php if(get_field('section_two_content')){ the_field('section_two_content'); }?>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="cc-row web-app-service app-develop-whybg-top">
                <div class="container">
                    <div class="cc-row">
                        <div class="cc-col-50 text-center android-whyaskan">
                             <?php $section_three_sliding_image = get_field('section_three_sliding_image');
                                    if ($section_three_sliding_image){?>
                                <img src="<?php echo $section_three_sliding_image['url']; ?>" alt="<?php echo $section_three_sliding_image['alt']; ?>">
                            <?php } ?>
                        </div>
                        <div class="cc-col-50">
                        <div class="content-block">
                            <?php if (have_rows('section_three_contents')):?>
                                <?php while (have_rows('section_three_contents')): the_row();?>
                                    <div class="content-block-title web-app-title green-title">
                                        <?php the_sub_field('section_three_content_heading');?>
                                    </div>
                                    <div class="why-app-content">
                                        <?php the_sub_field('section_three_content');?>
                                    </div>
                                <?php endwhile;?>
                            <?php endif;?>                          

                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cc-row web-app-service app-develop-whybg">
                <div class="container">	
                    <div class="cc-row">
                        <div class="howwedo cc-col-full">
                        <div class="cc-col-full">
                            <div class="contact-block-title block-titles">
                                <div class="title">
                                    <div class="big-title">
                                        <h2><?php if(get_field('development_process_section_heading')){ the_field('development_process_section_heading'); }?></h2>
                                    </div>
                                    <div class="small-title">
                                        <div class="right-line small-title-line"></div>
                                        <div class="title-content our-expertise">
                                            <h3><?php if(get_field('development_process_section_fadin_text')){ the_field('development_process_section_fadin_text'); }?></h3>
                                        </div>
                                        <div class="left-line small-title-line"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cc-col-full how-steps desktop-steps text-center">
                            <div class="top-step">
                                <div class="cc-row">                                   
                                    <?php if (have_rows('steps')):?>
                                        <?php while (have_rows('steps')): the_row();?>
                                            <?php $top_section = get_sub_field('top_section');
                                                if ($top_section){?>
                                                <div class="cc-col-33 how-steps text-center">
                                                    <img src="<?php echo $top_section['url']; ?>" alt="<?php echo $top_section['alt']; ?>">
                                                </div>
                                                <?php } ?>
                                        <?php endwhile;?>
                                    <?php endif;?>
                                </div>
                                <div class="cc-row step-arrow">
                                    <?php if (have_rows('steps')):?>
                                        <?php while (have_rows('steps')): the_row();?>
                                            <?php $arrow = get_sub_field('arrow');
                                                if ($arrow){?>
                                                <div class="cc-col-33 how-steps text-center">
                                                    <img src="<?php echo $arrow['url']; ?>" alt="<?php echo $arrow['alt']; ?>">
                                                </div>
                                                <?php } ?>
                                        <?php endwhile;?>
                                    <?php endif;?>
                                </div>
                            </div>
                            <div class="bottom-step">
                                <div class="cc-row">
                                    <?php if (have_rows('steps')):?>
                                        <?php while (have_rows('steps')): the_row();?>
                                            <?php $bottom_section = get_sub_field('bottom_section');
                                                if ($bottom_section){?>
                                                <div class="cc-col-25 how-steps text-center">
                                                    <img src="<?php echo $bottom_section['url']; ?>" alt="<?php echo $bottom_section['alt']; ?>">
                                                </div>
                                                <?php } ?>
                                        <?php endwhile;?>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="cc-col-full how-steps mobile-steps text-center">
                                <div class="cc-row">
                                    <?php if (have_rows('process_images_for_mobile_version')):?>
                                        <?php while (have_rows('process_images_for_mobile_version')): the_row();?>
                                        <?php $img = get_sub_field('img');
                                                if ($img){?>
                                                <div class="mobile-how-steps text-center">
                                                    <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                                                </div>
                                                <?php } ?>
                                        <?php endwhile;?>
                                    <?php endif;?>
                                </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cc-row web-app-service app-develop-whybg-bottom">
                <div class="container">	
                    <div class="app-type cc-col-full">
                        <div class="cc-row">
                            <div class="cc-col-50 text-center app-whyaskan">
                                <div class="text-center android-whyaskan apptech-txt">
                                    <?php if(get_field('section_four_text')){ the_field('section_four_text'); }?>
                                    <?php $section_four_sliding_image = get_field('section_four_sliding_image');
                                                if ($section_four_sliding_image){?>
                                    <img src="<?php echo $section_four_sliding_image['url']; ?>" alt="<?php echo $section_four_sliding_image['alt']; ?>">
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="cc-col-50 app-type-image text-center">
                            <div class="content-block">
                                <?php $section_four_ios_img = get_field('section_four_ios_img');
                                                if ($section_four_ios_img){?>
                                <img src="<?php echo $section_four_ios_img['url']; ?>" class="ios-phone" alt="<?php echo $section_four_ios_img['alt']; ?>"/>
                                <?php } ?>
                                <?php $section_four_android_img = get_field('section_four_android_img');
                                                if ($section_four_android_img){?>
                                <img src="<?php echo $section_four_android_img['url']; ?>" class="android-phone" alt="<?php echo $section_four_android_img['alt']; ?>"/>
                                <?php } ?>
                            </div>
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
                            <h3><?php if(get_field('footer_contact_section_line_one')){ the_field('footer_contact_section_line_one'); }?></h3>
                        </div>
                        <div class="desc">
                            <p><?php if(get_field('footer_contact_section_line_two')){ the_field('footer_contact_section_line_two'); }?></p>
                        </div>
                        <div class="more-btn button-center">
                            <div class="button-wrapper">
                                <?php $footer_contact_section_button = get_field('footer_contact_section_button');
                                    if($footer_contact_section_button) {  
                                        $link_url = $footer_contact_section_button['url']; 
                                        $link_text = $footer_contact_section_button['title']; ?>
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