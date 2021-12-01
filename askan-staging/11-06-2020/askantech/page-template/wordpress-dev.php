<?php /** * Template Name: Wordpress Dev */ ?>
<?php get_header('new'); ?>

<div class="content">

    <div class="cc-wp-development" id="wp-development">
        <div class="wrapper">
            <!--banner-section-->
            <div class="cc-innerpage-banner">
                    <div class="banner-section">
                        <div class="image-section"
                            style="background: url('<?php echo get_template_directory_uri();?>/assets/images/wp-bannerbg.png') no-repeat ;background-size: cover">
                        </div>
                        <div class="overlay-section opacity0">
                            <div class="container">
                                <div class="cc-row">
                                    <div class="banner-content">
                                        <div class="text-one">
                                            <h3><?php if(get_field('banner_heading')){ the_field('banner_heading'); }?> </h3>
                                        </div>
                                        <div class="text-two">
                                            <?php if(get_field('banner_quote')){ the_field('banner_quote'); }?>
                                        </div>
                                        <div class="text-three">
                                            <h3><?php if(get_field('banner_description')){ the_field('banner_description'); }?> </h3>
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
            <div class="cc-row web-app-service wp-developdiv">
                <div class="container">
                    <div class="cc-row">
                    <div class="cc-col-full">
                        <div class="content-block text-center">
                            <?php if (have_rows('content_section')): ?>
                                <?php while (have_rows('content_section')): the_row(); ?>
                                    <div class="content-block-title web-app-title green-title">
                                        <?php the_sub_field('content_heading');?>
                                    </div>
                                    <div class="content-block-title-wrapper">
                                    </div>
                                    <div class="content-block-contents">
                                        <div class="cc-block">
                                            <?php the_sub_field('content_description');?>
                                        </div>
                                    </div>
                                    <div class="space50"></div>
                                <?php endwhile;?>
                            <?php endif;?>
                            
                            <div class="askan-expertise">
                                <?php if (have_rows('askan_expertise')): ?>
                                    <?php while (have_rows('askan_expertise')): the_row(); ?>
                                        <div class="cc-col-25">
                                            <div class="box-exp">
                                                <?php $image = get_sub_field('block_logo');
                                                    if( !empty($image) ): ?> <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>">
                                                    <?php endif;?>
                                                <h3><?php the_sub_field('block_title');?></h3>
                                                <p><?php the_sub_field('block_content');?></p>
                                            </div>
                                        </div>
                                    <?php endwhile;?>
                                <?php endif;?>                
                            </div>
        
                            <div class="askan-expertise">
                                <?php if (have_rows('askan_expertise_row_2')): ?>
                                    <?php while (have_rows('askan_expertise_row_2')): the_row(); ?>
                                        <div class="cc-col-25">
                                            <div class="box-exp">
                                            <?php 
                                                    $image = get_sub_field('block_image');
                                                    if( !empty($image) ): ?> <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>">
                                                    <?php endif;?>
                                                <h3><?php the_sub_field('block_heading');?></h3>
                                                <p><?php the_sub_field('block_description');?></p>
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
            <!--why askan-->
            <!--why yii askan-->
            <div class="whywordpress-askan">
                <div class="container">
                    <div class="cc-row">
                        <div class="cc-col-full">
                            <div class="content-block text-center">
                                <div class="content-block-title web-app-title green-title">
                                    <?php if(get_field('why_wordpress_heading')){ the_field('why_wordpress_heading'); }?>
                                </div>
                                <div class="content-block-title-wrapper">
                                </div>
                                <div class="content-block-contents">
                                    <div class="cc-block">
                                        <?php if(get_field('why_wordpress_content')){ the_field('why_wordpress_content'); }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="whywp-askan">
                <div class="container">
                    
                    <div class="cc-row">
                        <div class="cc-col-50 mobile-whywp-askan">
                            <div class="image-block">
                                <div class="image-one">
                                    <?php $why_wordpress_image = get_field('why_wordpress_image');
                                        if ($why_wordpress_image){?>
                                    <img src="<?php echo $why_wordpress_image['url']; ?>" alt="<?php echo $why_wordpress_image['alt']; ?>">
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="cc-col-50">
                            <div class="content-block">
                                <div class="content-block-contents">
                                    <div class="content-block yaskan-steps">
                                        <?php if (have_rows('askan_advantages')): ?>
                                            <?php while (have_rows('askan_advantages')): the_row(); ?>
                                                <div class="wsteps">
                                                    <span class="white-circle"><?php $advantages_logo = get_sub_field('advantages_logo');
                                                        if ($advantages_logo){?>
                                                    <img src="<?php echo $advantages_logo['url']; ?>" alt="<?php echo $advantages_logo['alt']; ?>">
                                                    <?php } ?></span>
                                                    <p>
                                                    <span><?php the_sub_field('advantages_title');?></span>
                                                        <?php the_sub_field('advantages_content');?>
                                                    </p>
                                                </div>  
                                            <?php endwhile;?>
                                        <?php endif;?>                                 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--why yii askan-->
            <!--why askan-->
        
            <!--footer contact-->
            <div class="footer-case-study">
                <div class="parallax-overlay-casestudy"></div>
                <div class="container">
                    <div class="cc-row">
                        <div class="cc-col-55 casestudy-left">
                            <div class="casestudy-testimonial">
                                <div class="case-study-title"><?php if(get_field('case_study_heading')){ the_field('case_study_heading'); }?></div>
                                <h3><?php if(get_field('case_study_sub_heading')){ the_field('case_study_sub_heading'); }?></h3>
                                <?php if(get_field('case_study_content')){ the_field('case_study_content'); }?>
                                <p class="author"> - <?php if(get_field('project_ceo_name')){ the_field('project_ceo_name'); }?> <span>CEO of <?php if(get_field('case_study_project_name')){ the_field('case_study_project_name'); }?></span></p>
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
                                <h2><?php if(get_field('footer_contact_heading')){ the_field('footer_contact_heading'); }?></h2>
                            </div>
                            <div class="small-title">
                                <div class="right-line small-title-line"></div>
                                <div class="title-content get-for-quote">
                                    <h3><?php if(get_field('footer_contact_quote')){ the_field('footer_contact_quote'); }?></h3>
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