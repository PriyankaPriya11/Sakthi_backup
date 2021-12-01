<?php /** * Template Name: Megento Dev */ ?>
<?php get_header('new'); ?>

<style>
/* .cc-innerpage-banner .overlay-section.opacity0 .container { transform: translateY(-18%); } */
@media only screen and (min-width:1600px) {
    .cc-innerpage-banner .banner-section { height: 80vh; }
}
</style>

<div class="content">
    <div class="cc-megento-develop" id="megento">
        <div class="wrapper">
                <!--banner-section-->
                <div class="cc-innerpage-banner">
                    <div class="banner-section">
                        <div class="image-section"
                            style="background: url('<?php echo get_template_directory_uri();?>/assets/images/megento-banner-bg.png') no-repeat ;background-size: cover">
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
                                                        <a href="#cc-footer-contact-section" class="btn-sty-one animated-button thar-three cc-ani-scroller"><span class="text"><?php echo esc_attr($link_text); ?></span><span class="arrow"></span></a>
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
            <div class="cc-why-megento">
                <div class="container">
                    <div class="cc-row">
                        
                        <div class="cc-col-50">
                            <div class="content-block">
                                <div class="content-block-title wep-app-title-two slideInLeft">
                                    <?php if(get_field('content_heading')){ the_field('content_heading'); }?>
                                </div>
                                <div class="content-block-sub-title">
                                    <div class="right-line small-title-line"></div>
                                    <?php if(get_field('content_quote')){ the_field('content_quote'); }?>
                                </div>
                                <div class="content-block-title-wrapper">
                                </div>
                        
                                <div class="content-block-contents">
                                    <?php if (have_rows('content_description')):?>
                                        <?php while (have_rows('content_description')): the_row();?>
                                            <div class="cc-block">
                                                <?php the_sub_field('para');?>
                                            </div>
                                        <?php endwhile;?>
                                    <?php endif;?>                                    
                        
                                </div>
                        
                        
                            </div>
                        </div>
                        
                        <div class="cc-col-50 cc-img-wrap">
                            <?php $content_image = get_field('content_image');
                                if ($content_image){?>
                            <img src="<?php echo $content_image['url']; ?>" alt="<?php echo $content_image['alt']; ?>">
                            <?php } ?>
                        </div>
    
                    </div>
                </div>
            </div>
            <div class="megento-expertise">
    
                <div class="container">
                    <div class="block-titles">
                        <div class="title">
                            <div class="big-title">
                                <h2><?php if(get_field('heading')){ the_field('heading'); }?></h2>
                            </div>
                            <div class="small-title" id="triggerElem">
                                <div class="right-line small-title-line"></div>
                                <div class="title-content expertice-in fadeIn">
                                    <h3><?php if(get_field('quote')){ the_field('quote'); }?></h3>
                                </div>
                                <div class="left-line small-title-line"></div>
                            </div>
                        </div>
                        <div class="desc">
                            <p><?php if(get_field('description')){ the_field('description'); }?></p>
                        </div>
                    </div>
        
                    <div class="cc-block-content megento-title-blocks">
                        <div class="cc-row">
                            
                            <div class="cc-col-47 two-iconbox">
                                <div class="blue-box box">
                                    <div class="image megento-icons td"></div>
                                    <div class="content">
                                        <?php if(get_field('icon1_content')){ the_field('icon1_content'); }?>
                                    </div>
                                </div>
                                <div class="white-box box">
                                    <div class="image megento-icons cs"></div>
                                    <div class="content">
                                        <?php if(get_field('icon2_content')){ the_field('icon2_content'); }?>
                                    </div>
                                </div>
                            </div>
        
                            <div class="cc-col-53">
                                <div class="white-box box mv">
                                    <div class="image megento-icons mvg"></div>
                                    <div class="content">
                                        <?php if(get_field('icon3_content')){ the_field('icon3_content'); }?>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
    
                        <div class="cc-row">
                            <div class="cc-col-53">
                                <div class="white-box box mv">
                                    <div class="image megento-icons mvg"></div>
                                    <div class="content">
                                        <?php if(get_field('icon4_content')){ the_field('icon4_content'); }?>
                                    </div>
                                </div>
                            </div>
                            <div class="cc-col-47 two-iconbox">
                                <div class="white-box box">
                                    <div class="image megento-icons cs"></div>
                                    <div class="content">
                                        <?php if(get_field('icon5_content')){ the_field('icon5_content'); }?>
                                    </div>
                                </div>
                                <div class="blue-box box">
                                    <div class="image megento-icons td"></div>
                                    <div class="content">
                                        <?php if(get_field('icon6_content')){ the_field('icon6_content'); }?>
                                    </div>
                                </div>
                            </div>
                        
                        
                        </div>
    
    
                    </div>
    
                </div>
                
    
            </div>
            <div class="cc-megento-why-askan">
                <div class="cc-mws-wrapper">
                    <div class="container">
                        <div class="cc-row">
                            <div class="cc-col-50 cc-img">
                                <?php $why_askan_image = get_field('why_askan_image');
                                    if ($why_askan_image){?>
                                <img src="<?php echo $why_askan_image['url']; ?>" alt="<?php echo $why_askan_image['alt']; ?>">
                                <?php } ?>
                            </div>
                            <div class="cc-col-50">
                                <div class="whylist">
                                    <?php if (have_rows('why_askan_list')):?>
                                        <?php while (have_rows('why_askan_list')): the_row();?>
                                            <div class="whylist-title"><?php the_sub_field('list_no')?> <span><?php the_sub_field('list_heading')?></span></div>
                                            <div class="whylist-p"><?php the_sub_field('list_description')?></div>
                                        <?php endwhile;?>
                                    <?php endif;?>
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
                        <div class="cc-row">
                            <div class="cc-col-55 casestudy-left">
                                <div class="casestudy-testimonial">
                                    <div class="case-study-title"><?php if(get_field('case_study_title')){ the_field('case_study_title'); }?></div>
                                    <h3><?php if(get_field('case_study_heading')){ the_field('case_study_heading'); }?></h3>
                                    <?php if(get_field('case_study_content')){ the_field('case_study_content'); }?>
                                
                                    <div class="more-btn">
                                        <div class="button-wrapper">
                                            <?php $case_study_button_link = get_field('case_study_button_link');
                                                if($case_study_button_link) {  
                                                    $link_url = $case_study_button_link['url']; 
                                                    $link_text = $case_study_button_link['title']; ?>
                                                    <a href="<?php echo esc_url($link_url); ?>" class="btn-sty-one animated-button thar-three"><span class="text"><?php echo esc_attr($link_text); ?></span><span class="arrow"></span></a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                
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
            <div class="footer-contact" id="cc-footer-contact-section">
                <div class="container">

                    <div class="cc-row">
                        <div class="contact-block-title block-titles">
                            <div class="title">
                                <div class="big-title">
                                    <h2><?php if(get_field('contact_heading')){ the_field('contact_heading'); }?></h2>
                                </div>
                                <div class="small-title">
                                    <div class="right-line small-title-line"></div>
                                    <div class="title-content get-for-quote">
                                        <h3><?php if(get_field('contact_quote')){ the_field('contact_quote'); }?></h3>
                                    </div>
                                    <div class="left-line small-title-line"></div>
                                </div>
                            </div>
                            <div class="title">
                                <h3><?php if(get_field('service_name')){ the_field('service_name'); }?></h3>
                            </div>
                            <div class="desc">
                                <p><?php if(get_field('contact_description')){ the_field('contact_description'); }?></p>
                            </div>
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