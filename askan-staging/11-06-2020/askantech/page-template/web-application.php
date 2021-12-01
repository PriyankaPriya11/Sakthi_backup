<?php /** * Template Name: Web Application */ ?>
<?php get_header('new'); ?>
<div class="content">
    <div class="cc-web-application" id="web-application">

        <div class="wrapper">
            <!--banner-section-->
            <div class="cc-innerpage-banner">
                <div class="banner-section">
                    <div class="image-section"
                        style="background: url('<?php echo get_template_directory_uri();?>/assets/images/web-application-banner.jpg') no-repeat ;background-size: cover">
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
                                        <?php if(get_field('banner_description')){ the_field('banner_description'); }?>
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
            <div class="cc-row web-app-service webapp-developdiv">
                <div class="container">
                    <div class="cc-row">
                    <div class="cc-col-full">
                        <div class="content-block text-center">
                            <div class="content-block-title web-app-title green-title">
                                <?php if(get_field('content_heading')){ the_field('content_heading'); }?>
                            </div>
                            <div class="content-block-title-wrapper">
                            </div>
                            <div class="content-block-contents">
                                <div class="cc-block">
                                    <?php if(get_field('content_description')){ the_field('content_description'); }?>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            
            <!--why choose askan-->
            <div class="askan-adv">
                <div class="container">
                    <div class="cc-row">
                    <div class="cc-col-50">
                        <div class="image-block askadv-image">
                            <div class="image-one">
                                <?php $why_askan_image = get_field('why_askan_image');
                                    if ($why_askan_image){?>
                                <img src="<?php echo $why_askan_image['url']; ?>" alt="<?php echo $why_askan_image['alt']; ?>">
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="cc-col-50">
                        <div class="content-block">
                            <div class="content-block-title web-app-title green-title">
                                <?php if(get_field('why_askan_heading')){ the_field('why_askan_heading'); }?>
                            </div>
                            <div class="content-block-contents">
                                <div class="tick-list">
                                    <ul>
                                        <?php if (have_rows('advantages')):?>
                                            <?php while (have_rows('advantages')): the_row();?>
                                                <li><?php the_sub_field('points');?></li>
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
            <!--why choose askan-->
            
            <!--web app framework-->
            <div class="webapp-framework">
                <div class="container">
                    <div class="cc-row">
                    <div class="cc-col-60">
                        <div class="content-block">
                            <div class="content-block-title web-app-title green-title">
                                <?php if(get_field('app_framework_heading')){ the_field('app_framework_heading'); }?>
                            </div>
                            <?php if (have_rows('app_framework')):?>
                                <?php while (have_rows('app_framework')): the_row(); ?>
                                    <div class="content-block-contents">
                                        <p class="bluebold"><?php the_sub_field('app_framework_title');?></p>
                                        <div class="tick-list">
                                            <?php if (have_rows('lists')):?>
                                                <?php while (have_rows('lists')): the_row(); ?>
                                                    <ul>
                                                        <li><?php the_sub_field('lists_name');?></li>
                                                    </ul>
                                                <?php endwhile;?>
                                            <?php endif;?>
                                        </div>
                                    </div>
                                <?php endwhile;?>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="cc-col-40">
                        <div class="image-block waf-image">
                            <div class="image-one">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/webapplicationframework.png" alt="askan"/>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <!--web app framework-->
            
            <!--our work process-->
            <div class="webapp-workflow">
                <div class="container">
                    <div class="cc-row">
                        <div class="cc-col-45">
                            <div class="content-block">
                                <div class="content-block-title web-app-title green-title">
                                    <?php if(get_field('work_process_heading')){ the_field('work_process_heading'); }?>
                                </div>
                                <div class="content-block-contents">
                                    <?php if(get_field('work_process_content')){ the_field('work_process_content'); }?>
                                    <div class="image-block workflow-image text-center">
                                        <div class="image-one">
                                            <?php $work_process_image = get_field('work_process_image');
                                                if ($work_process_image){?>
                                                <img src="<?php echo $work_process_image['url']; ?>" alt="<?php echo $work_process_image['alt']; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cc-col-50">
                            <div class="content-block webapp-steps">
                                <div class="step-dash"></div>
                                <?php if (have_rows('procedure')):?>
                                    <?php while (have_rows('procedure')): the_row(); ?>
                                        <div class="wsteps">
                                            <span class="blue-circle">         
                                                <?php $image = get_sub_field('procedure_image');
                                                    if( !empty($image) ): ?> <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>">
                                                    <?php endif;?>
                                            </span>                                    
                                                <?php the_sub_field('procedure_content');?>                                    
                                        </div>
                                    <?php endwhile;?>
                                <?php endif;?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--our work process-->
            
            <!--webapp service-->
            <div class="footer-case-study wepapp-footercs">
                <div class="parallax-overlay-casestudy"></div>
                <div class="container">
                    <div class="cc-row">
                        <div class="cc-col-50 apptech-txt">
                            <div class="webapp-casestudy">
                            <?php if(get_field('web_service_heading')): ?><h3><?php the_field("web_service_heading"); ?><span class="small-title-line"></span></h3> <?php endif;?>
                            <?php if(get_field('web_service_description')): ?><p><?php the_field("web_service_description"); ?></p><?php endif;?>
                            </div>
                        </div>
                        <div class="cc-col-50">
                        <?php if (have_rows('web_service_blocks')): $i=1;?>
                                <?php while (have_rows('web_service_blocks')): the_row(); 
                                if($i==1){
                                    $class='blue-bg';
                                    
                                
                                }elseif($i==2){
                                    $class='violet-bg';
                            
                                
                                }elseif($i==3){
                                    $class='skyblue-bg';
                            
                                
                                }else{
                                    $class='darkblue-bg';
                    
                                
                                }?>
                                <div class="<?php echo $class;?> apptech-box">
                                <?php 
                                            $image = get_sub_field('block_image');
                                            if( !empty($image) ): ?> <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>">
                                            <?php endif;?>
                            <span><?php the_sub_field('web_service_text');?></span>
                        </div>
                        <?php $i++; endwhile;?>
                                <?php endif;?>
                    
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
                                <?php if(get_field('footer_contact_heading')): ?><h2><?php the_field("footer_contact_heading"); ?></h2><?php endif;?>
                            </div>
                            <div class="small-title">
                                <div class="right-line small-title-line"></div>
                                <div class="title-content get-for-quote">
                                <?php if(get_field('footer_contact_fadein_header')): ?><h3><?php the_field("footer_contact_fadein_header"); ?></h3><?php endif;?>
                                </div>
                                <div class="left-line small-title-line"></div>
                            </div>
                        </div>
                        <div class="title">
                        <?php if(get_field('footer_contact_service_name')): ?><h3><?php the_field("footer_contact_service_name"); ?></h3><?php endif;?>
                        </div>
                        <div class="desc">
                        <?php if(get_field('footer_contact_description')): ?><p><?php the_field("footer_contact_description"); ?></p><?php endif;?>
                        </div>
                        <div class="more-btn button-center">
                            <div class="button-wrapper">
                                <?php $contact_button = get_field('contact_button');
                                    if($contact_button) {  
                                        $link_url = $contact_button['url']; 
                                        $link_text = $contact_button['title']; ?>
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