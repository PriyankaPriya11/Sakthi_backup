<?php /* Template Name: Yii dev */ ?>
<?php get_header('new'); ?>
<div class="content">
    <div class="cc-yii-development" id="yii-development">
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
                                        <h3><?php if(get_field('banner_heading')) {the_field('banner_heading');}?> </h3>
                                    </div>
                                    <div class="text-two">
                                        <?php if(get_field('banner_quote')) {the_field('banner_quote');}?>
                                    </div>
                                    <div class="text-three">
                                        <h3><?php if(get_field('banner_description')) {the_field('banner_description');}?> </h3>
                                        <div class="more-btn">
                                            <div class="button-wrapper">
                                                <?php $banner_button = get_field('banner_button');
                                                if($banner_button){
                                                    $link_url = $banner_button['url']; 
                                                    $link_text = $banner_button['title']; ?>
                                                <a href="<?php echo esc_url($link_url); ?>" class="btn-sty-one animated-button thar-three">
                                                        <span class="text"><?php echo esc_html($link_text); ?></span>
                                                        <span class="arrow"></span>
                                                    </a>
                                                    <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner-content-right">
                                    <?php $banner_image = get_field('banner_image'); 
                                    if($banner_image){ ?>
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
            <div class="cc-row web-app-service yii-developdiv">
                <div class="container">
                    <div class="cc-row">
                    <div class="cc-col-full">
                        <div class="content-block text-center">
                            <div class="content-block-title  green-title">
                                <?php if(get_field('content_heading')){ the_field('content_heading'); }?>
                            </div>
                            <div class="content-block-title-wrapper">
                            </div>
                            <div class="content-block-contents">
                                <div class="cc-block">
                                    <?php if(get_field('content_description')){  the_field('content_description'); }?>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            
            <!--why yii-->
            <div class="whyyii-adv">
                <div class="container">
                    <div class="cc-row">
                        <div class="cc-col-50">
                            <div class="image-block whyyii-image">
                                <div class="image-one">
                                    <?php $content_section_image = get_field('content_section_image');
                                            if($content_section_image){?>
                                    <img src="<?php echo $content_section_image['url']; ?>" alt="<?php echo $content_section_image['alt']; ?>"/>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="cc-col-50">
                            <div class="content-block">
                                <div class="content-block-contents whyyii-adv-right">
                                    <div class="tick-list">
                                        <ul>
                                            <?php if(have_rows('content_lists')){?>
                                                <?php while(have_rows('content_lists')){ the_row();?>
                                                    <li><?php the_sub_field('lists'); ?></li>
                                                <?php } ?>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="shadowtext"><?php if(get_field('advantages_of_askan_heading')){ the_field('advantages_of_askan_heading'); }?></h3>
            </div>
            <!--why yii-->
            
            <!--why yii askan-->
            <?php $advantages_of_askan_image = get_field('advantages_of_askan_image');
                    if($advantages_of_askan_image){?>
            <div class="whyyii-askan" style="background-image: url('<?php echo $advantages_of_askan_image['url']; ?>')">
                <?php } ?>
                <div class="container">
                    <div class="cc-row">
                        <div class="cc-col-50 mobile-whyyii-askan">
                            <div class="image-block">
                                <div class="image-one">
                                    
                                    <img src="<?php echo $advantages_of_askan_image['url']; ?>" alt="<?php echo $advantages_of_askan_image['alt']; ?>"/>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="cc-col-50">
                            <div class="content-block">
                                <div class="content-block-contents">
                                    <div class="content-block yaskan-steps">
                                        <?php if(have_rows('advantages')){?>
                                            <?php while(have_rows('advantages')){ the_row();?>
                                                <div class="wsteps">
                                                    <span class="blue-circle">
                                                        <?php $lists_image = get_sub_field('lists_image');
                                                                if($lists_image){?>
                                                        <img src="<?php echo $lists_image['url']; ?>" alt="<?php echo $lists_image['alt']; ?>"/>
                                                        <?php } ?>
                                                    </span>
                                                    <p>
                                                        <?php the_sub_field('advantages_lists'); ?>
                                                    </p>
                                                </div>  
                                            <?php } ?>
                                        <?php } ?>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="shadowtext"><?php if(get_field('shadow_text')){ the_field('shadow_text'); }?></h3>
            </div>
            <!--why yii askan-->
            
            <!--our yii-->
            <div class="cc-row web-app-service ouryii">
                <div class="container">
                    <div class="cc-row">
                    <div class="cc-col-full">
                        <div class="content-block">
                            <div class="content-block-title web-app-title green-title">
                                <?php if(get_field('services_heading')){ the_field('services_heading'); }?>
                            </div>
                            <div class="content-block-title-wrapper">
                            </div>
                            <div class="content-block-contents">
                                <div class="cc-block">
                                    <p><?php if(get_field('services_description')){ the_field('services_description'); }?></p>
                                </div>
                            </div>
                            <div class="cc-row yii-serv">
                                <?php if (have_rows('services')):?>
                                    <?php while (have_rows('services')): the_row(); ?>
                                        <div class="cc-col-33">
                                            <div class="box">
                                            <?php 
                                                    $image = get_sub_field('services_logo');
                                                    if( !empty($image) ): ?> <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>">
                                                    <?php endif;?>
                                                <p><?php the_sub_field("services_name");?></p>
                                            </div>
                                        </div>
                                    <?php endwhile;?>
                                <?php endif;?>                
                            </div>
                            <div class="cc-row yii-serv">
                                <?php if (have_rows('services')):?>
                                    <?php while (have_rows('services')): the_row(); ?>
                                        <div class="cc-col-33">
                                            <div class="box">
                                            <?php 
                                                    $image = get_sub_field('row2_services_logo');
                                                    if( !empty($image) ): ?> <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>">
                                                    <?php endif;?>
                                                <p><?php the_sub_field("row2_services_name");?></p>
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
            <!--our yii-->
        
            <!--footer contact-->
            <div class="footer-case-study">
                <div class="parallax-overlay-casestudy"></div>
                <div class="container">
                    <div class="cc-row">
                        <div class="cc-col-55 casestudy-left">
                            <div class="casestudy-testimonial">
                                <div class="case-study-title"><?php if(get_field('case_study_heading')){ the_field('case_study_heading'); }?></div>
                                <h3><?php if(get_field('case_study_name')){ the_field('case_study_name'); }?></h3>
                                <?php if(get_field('case_study_description')){ the_field('case_study_description'); }?>
                                <p class="author"> - <?php if(get_field('project_ceo_name')){ the_field('project_ceo_name'); }?> <span>CEO of <?php if(get_field('project_name')){ the_field('project_name'); }?></span></p>
                            </div>
                        </div>
                        <div class="cc-col-45">
                            <?php $case_study_image = get_field('case_study_image');
                                    if($case_study_image){?>
                            <img src="<?php echo $case_study_image['url']; ?>" alt="<?php echo $case_study_image['alt']; ?>"/>
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
                                        <h3><?php if(get_field('footer_contact_fadein_text')){ the_field('footer_contact_fadein_text'); }?></h3>
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

                            <!-- <div class="more-btn button-center">
                                <div class="button-wrapper">
                                    <?php// $footer_contact = get_field('footer_contact'); if($footer_contact) { $link_url = $footer_contact['url']; $link_text = $footer_contact['title']; ?> <a href="<?php //echo esc_url($link_url); ?>" class="btn-sty-one animated-button thar-three"><span class="text"><?php //echo esc_attr($link_text); ?></span><span class="arrow"></span></a> <?php //} ?>
                                </div>
                            </div> -->

                        </div>

                    </div>
                    <div class="cc-row">
                        <div class="form-wrapper cc-inner-form-section">
                            <form   id="contact_form" name="contact_form" action="#" method="POST" enctype="multipart/form-data">
                                <div class="wrapp-field text-field">
                                    <input id="name" name="name" type="text" placeholder="Name*"><div id="name_error"></div>
                                </div>
                                <div class="wrapp-field text-field">
                                    <input id="phone" name="phone" type="text" placeholder="Phone*"><div id="phone_error"></div>
                                </div>
                                <div class="wrapp-field text-field">
                                    <input id="email" name="email" type="email" placeholder="Email*"><div id="email_error"></div>
                                </div>
                                <div class="wrapp-field text-field">
                                    <input id="website" name="website"type="text" placeholder="Website*"><div id="website_error"></div>
                                </div>
                                <div class="wrapp-field text-field">
                                    <input id="budget" name="budjet" type="text" placeholder="Project budget ?*" onkeypress="javascript:return isNumber(event)">
                                    <div id="budjet_error"></div>
                                </div>
                                <div class="wrapp-field text-field">
                                    <label  for="file"   class="filelabel"  >
                                    <span id="labelId"> file upload</span>
                                    <input id="file" name="file" type="file" class="filetype" >
                                    <div id="file_error"></div>
                                    </label>
                                </div>
                                <div class="wrapp-field textarea-field full-wrap">
                                    <textarea id="message" name="message" placeholder='Your message*'></textarea>    <div id="message_error"></div>
                                </div>
                                <div class="wrap-submit-btn more-btn">
                                    <div class="button-wrapper">                                    
                                        <button id="submit" type="submit" class="btn-sty-one animated-button thar-three"><span
                                                class="text">Send</span><span class="arrow"></span></button>
                                    </div>
                                </div>
                                <div id="display"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php get_footer('new'); ?>