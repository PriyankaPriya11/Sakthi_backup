<?php /** * Template Name: Android Dev New */ ?>
<?php get_header('new'); ?>

<div class="content">    
    <div class="cc-android-development-section" id="android-development">

        <div class="wrapper">
            <!--banner-section-->
            <div class="cc-innerpage-banner">
                <div class="banner-section">
                    <div class="image-section"
                        style="background: url('<?php echo get_template_directory_uri();?>/assets/images/android-header-bg.png') no-repeat ;background-size: cover">
                    </div>
                    <div class="overlay-section opacity0">
                        <div class="container">
                            <div class="banner-content">
                                <div class="text-one">
                                    <h3><?php if(get_field('banner_line_one')){ the_field('banner_line_one'); }?></h3>
                                </div>
                                <div class="text-two">
                                    <?php if(get_field('banner_line_two')){ the_field('banner_line_two'); }?>
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
                                <?php $banner_img = get_field('banner_image');
                                                if ($banner_img){?>
                                            <img src="<?php echo $banner_img['url']; ?>" alt="<?php echo $banner_img['alt']; ?>">
                                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">

                                
        
            <div class="cc-row web-app-service mobile-app">
                <div class="container">

                    <div class="cc-row">
                        <div class="cc-col-100">
                            <?php if (have_rows('section_two_content')):?>
                                <?php while (have_rows('section_two_content')): the_row();?>
                                    <div class="content-block text-center">
                                        <div class="content-block-title web-app-title green-title">
                                            <?php the_sub_field('section_heading');?>
                                        </div>
            
                                        <div class="content-block-contents">
                                            <div class="cc-block">
                                                <?php the_sub_field('section_description');?>
                                            </div>
                                        </div>
                                        <div class="space50"> </div>
                                    </div>
                                <?php endwhile;?>
                            <?php endif;?>
                        </div>
                    </div>

                    <div class="cc-row">
                        <?php if (have_rows('section_three_contents')):?>
                            <?php while (have_rows('section_three_contents')): the_row();?>
                                <div class="cc-col-25 whyus-box">
                                    <?php $section_three_logo = get_sub_field('section_three_logo');
                                                if ($section_three_logo){?>
                                            <img src="<?php echo $section_three_logo['url']; ?>" alt="<?php echo $section_three_logo['alt']; ?>">
                                            <?php } ?>
                                    <?php the_sub_field('section_three_content');?>
                                </div>
                            <?php endwhile;?>
                        <?php endif;?>
                    </div>

                </div>
            </div>

        
            <div class="cc-row slant-blue">
                <div class="container">
                    <div class="cc-row">
                        <div class="cc-col-50 text-center android-whyaskan">
                            <?php $section_four_sliding_image = get_field('section_four_sliding_image');
                                if ($section_four_sliding_image){?>
                            <img src="<?php echo $section_four_sliding_image['url']; ?>" alt="<?php echo $section_four_sliding_image['alt']; ?>">
                            <?php } ?>
                        </div>
                        <div class="cc-col-50">
                            <div class="whylist">
                                <?php if (have_rows('section_list')):?>
                                    <?php while (have_rows('section_list')): the_row();?>
                                        <div class="whylist-title"><?php the_sub_field('list_no');?> <span><?php the_sub_field('lists_heading');?></span></div>
                                        <div class="whylist-p"><?php the_sub_field('lists_description');?></div>
                                    <?php endwhile;?>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="cc-row app-technology">
                <div class="container">
                    <div class="cc-row">
                        <div class="cc-col-50 text-center apptech-txt">
                            <?php if(get_field('section_five_content')){ the_field('section_five_content'); }?>
                        </div>
                        <div class="cc-col-50">
                            <?php if (have_rows('section_five_block')): $i = 1;?>
                                <?php while (have_rows('section_five_block')): the_row();
                                if ($i % 2 ) {
                                    $class= "blue";
                                }else{
                                    $class= "violet";
                                }?>
                                    <div class="<?php echo $class; ?>-bg apptech-box">
                                    <?php $section_five_block_image = get_sub_field('section_five_block_image');
                                            if ($section_five_block_image){?>
                                        <img src="<?php echo $section_five_block_image['url']; ?>" alt="<?php echo $section_five_block_image['alt']; ?>">
                                        <?php } ?>
                                        <span><?php the_sub_field('section_five_block_text'); ?></span>
                                    </div>
                                <?php $i++; endwhile;?>
                            <?php endif;?>
                        </div>
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
                                <div class="case-study-title"><?php if(get_field('case_heading')){ the_field('case_heading'); }?></div>
                                <!--h3><?php if(get_field('project_name')){ the_field('project_name'); }?></h3-->
                                    <?php if(get_field('project_description')){ the_field('project_description'); }?>
                                    <?php if(get_field('project_author')){ the_field('project_author'); }?>
                            </div>
                        </div>
                        <div class="cc-col-45">
                            <?php $case_study_image = get_field('case_study_image');
                                    if ($case_study_image){?>
                                <img src="<?php echo $case_study_image['url']; ?>" alt="<?php echo $case_study_image['alt']; ?>">
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
                                <h3><?php if(get_field('contact_section_heading')){ the_field('contact_section_heading'); }?></h3>
                            </div>
                            <div class="desc">
                                <p><?php if(get_field('contact_section_description')){ the_field('contact_section_description'); }?></p>
                            </div>
                            <div class="more-btn button-center">
                                <div class="button-wrapper">
                                    <?php $contact_section_button = get_field('contact_section_button');
                                                    if($contact_section_button) {  
                                                        $link_url = $contact_section_button['url']; 
                                                        $link_text = $contact_section_button['title']; ?>
                                    <a href="<?php echo esc_url($link_url); ?>" class="btn-sty-one animated-button thar-three"><span
                                            class="text"><?php echo esc_attr($link_text); ?></span><span class="arrow"></span></a>
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