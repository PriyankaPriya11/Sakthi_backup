<?php /** * Template Name: Service-New */ ?>
<?php get_header('new'); ?>
<!--banner-section-->
    <div class="cc-innerpage-banner">
        <div class="banner-section">
            <div class="image-section" style="background: url('<?php echo get_template_directory_uri();?>/assets/images/service.png') no-repeat ;background-size: cover">
            </div>
            <div class="overlay-section opacity0">
                <div class="container">
                    <div class="banner-content">
                        <div class="text-two">
                            <h2 class="mobile-text-two-sty"><?php if(get_field('banner_heading')){ the_field('banner_heading'); }?></h2>
                        </div>
                        <div class="text-three">
                            <?php if(get_field('banner_description')){ the_field('banner_description'); }?>
                        </div>
                    </div>
                    <div class="banner-content-right">
                        <?php $banner_image = get_field('banner_image'); 
                            if($banner_image){?>
                        <img src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>"/>
                            <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="content" id="cc-services">

        <div class="cc-services-wrapper">
            <div class="cc-services-container">
                <div class="container">
                    <div class="cc-row">
                        <?php if(have_rows('service_box')){ 
                                while(have_rows('service_box')){ the_row();?>
                            <div class="cc-services-box-wrapper">
                                <div class="cc-sbw">
                                    <div class="cc-services-box">
                                        <div class="cc-service-icon">
                                            <?php $service_image = get_sub_field('service_box_image');
                                                if ($service_image){?>
                                            <img src="<?php echo $service_image['url']; ?>" alt="<?php echo $service_image['alt']; ?>">
                                            <?php } ?>
                                        </div>
                                        <div class="cc-service-name"><?php the_sub_field('service_box_name'); ?></div>
                                    </div>
                                    <div class="cc-more-info">
                                            <?php $service_link = get_sub_field('service_box_link');
                                                if($service_link) {  
                                                    $link_url = $service_link['url']; 
                                                    $link_text = $service_link['title']; ?>
                                            <a  href="<?php echo esc_url($link_url); ?>" > <?php echo esc_attr($link_text); ?></a> <!-- data-scroll="<?php //echo esc_url($link_url); ?>" -->
                                                <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        <?php } ?>
                      
                    </div>
                </div>
            </div>
        </div>

        <div class="cc-cms-develop cc-cms-develop-ani" id="cc-cms-develop">
                <div class="container">
                    <div class="cc-row">
                        <div class="cc-col-50">
                            <div class="content-block">
                                <div class="content-block-title web-app-title ">
                                    <?php if(get_field('cms_heading')){ the_field('cms_heading'); }?>
                                </div>
                                <div class="content-block-sub-title">
                                    <div class="right-line small-title-line"></div>
                                    <h5><?php if(get_field('cms_sub_heading')){ the_field('cms_sub_heading'); }?></h5>
                                </div>
                                
                                <div class="content-block-contents">
                                    <?php if(get_field('cms_content')){ the_field('cms_content'); }?>
                                </div>

                                <div class="more-btn button-center cc-cl-btn">
                                    <div class="button-wrapper">
                                        <?php $cms_link = get_field('cms_learn_more_link');
                                                if($cms_link) {  
                                                    $link_url = $cms_link['url']; 
                                                    $link_text = $cms_link['title']; ?>
                                        <a href="<?php echo esc_url($link_url); ?>" class="btn-sty-one animated-button thar-three"><span class="text"><?php echo esc_attr($link_text); ?></span><span class="arrow"></span></a>
                                                <?php } ?>
                                    </div>
                                </div>

                            </div>
                        </div>
    
                        <div class="cc-col-50">
                            <div class="image-block">
                                <div class="image-one">
                                     <?php $cms_image = get_field('cms_image');
                                                if ($cms_image){?>
                                    <img src="<?php echo $cms_image['url'];?>" alt="<?php echo $cms_image['alt']; ?>" class="">
                                                <?php } ?>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
        </div>

        <div class="cc-ind-section cc-android-develop" id="cc-android-develop">
            <div class="cc-and-app">
                <div class="container">
                    <div class="cc-row">
                        <div class="cc-col-50 cc-indsec-bg">

                            <div class="cc-andparalax">
                                <div class="parallax-background">
                                    <div class="parallax-inner">
                                    </div>
                                </div>
                            </div>

                            <div class="more-btn button-center cc-cl-btn">
                                <div class="button-wrapper">
                                    <?php $android_link = get_field('android_section_link');
                                        if($android_link){
                                            $link_url = $android_link['url']; 
                                                    $link_text = $android_link['title'];?>
                                    <a href="<?php echo esc_url($link_url); ?>" class="btn-sty-one animated-button thar-three"><span class="text"><?php echo esc_attr($link_text); ?></span><span class="arrow"></span></a>
                                        <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="cc-col-50">

                            <div class="content-block text-center cc-dbbg">
                                <div class="">
                                    <h3 class="text-center"><?php if(get_field('block_one_heading')){ the_field('block_one_heading'); } ?></h3>
                                </div>
                                <div class="content-block-contents">
                                    <div class="cc-block">
                                        <?php if(get_field('block_one_content')){ the_field('block_one_content'); } ?>
                                    </div>
                                </div>
                            </div>

                            <div class="cc-indsec-seprator"></div>

                            <div class="content-block text-center">

                                <div class="cc-row cc-sm-dbbg-row">
                                                    <?php if(have_rows('block_two')){?>
                                                        <?php while(have_rows('block_two')){ the_row();?>
                                    <div class="cc-col-50 cc-dbbg sm-cc-dbbg">
                                        <div class="">
                                            <h3 class="text-center"><span class="grey-col"><?php the_sub_field('block_two_heading'); ?></h3>
                                        </div>
                                        <div class="content-block-contents">
                                            <div class="cc-block">
                                                <?php the_sub_field('block_two_content');?>
                                            </div>
                                        </div>
                                    </div>
                                                <?php }?>                                                
                                            <?php }?>                                                
                                </div>

                                
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cc-cms-develops cc-ecom-develop" id="cc-ecom-develop">
                <div class="container">
                    <div class="cc-row">
                        <div class="cc-col-50">
                            <div class="content-block">
                                <div class="content-block-title web-app-title ">
                                    <h3><?php if(get_field('ecommerce_heading')){ the_field('ecommerce_heading'); } ?></h3>
                                </div>
                                <div class="content-block-sub-title">
                                    <div class="right-line small-title-line"></div>
                                    <h5><?php if(get_field('ecommerce_sub_heading')){ the_field('ecommerce_sub_heading'); } ?></h5>
                                </div>
                                <div class="content-block-title-wrapper">
                                </div>
                            
                                <div class="content-block-contents">
                                    <?php if(have_rows('ecommerce_content')){?>
                                                <?php while(have_rows('ecommerce_content')){ the_row();?>
                                <div class="cc-block"><?php the_sub_field('ecommerce_contents'); ?></div>
                                        <?php }?>                                                
                                            <?php }?>   
                                </div>

                                <div class="more-btn button-center cc-cl-btn">
                                    <div class="button-wrapper">
                                        <?php $ecom_link = get_field('ecommerce_link');
                                            if($ecom_link){
                                                $link_url = $ecom_link['url']; 
                                                        $link_text = $ecom_link['title'];?>
                                        <a href="<?php echo esc_url($link_url); ?>" class="btn-sty-one animated-button thar-three"><span class="text"><?php echo esc_attr($link_text); ?></span><span class="arrow"></span></a>
                                            <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cc-col-50">
                            <div class="cc-image-wrapper">
                                <?php $ecommerce_image = get_field('ecommerce_image');
                                                if ($ecommerce_image){?>
                                    <img src="<?php echo $ecommerce_image['url'];?>" alt="<?php echo $ecommerce_image['alt']; ?>">
                                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <div class="cc-web-appications-develop" id="cc-web-appications-develop">
                <div class="container">
                        <div class="cc-row">
                            <div class="cc-col-50">
                                <div class="cc-cwad-boxwrapper">
                                        <?php if(have_rows('web_dev_block')){?>
                                                <?php while(have_rows('web_dev_block')){ the_row();?>
                                    <div class="cc-cwad-box">                                          
                                                    <?php $block = get_sub_field('web_dev_block_logo');
                                                if ($block){?>
                                                    <img src="<?php echo $block['url'];?>" alt="<?php echo $block['alt']; ?>">
                                                <?php } ?>
                                        <span><?php the_sub_field('web_dev_block_name'); ?></span>                                                  
                                    </div>
                                    <?php }?>                                                
                                            <?php }?> 
                                </div>
                            </div>
                            <div class="cc-col-50 cc-cwad-content">
                                <div class="content-block">
                                    <div class="content-block-title web-app-title ">
                                        <h3><?php if(get_field('web_dev_title')){ the_field('web_dev_title'); } ?></h3>
                                    </div>
                                    <div class="content-block-sub-title">
                                        <div class="right-line small-title-line"></div>
                                        <h5><?php if(get_field('web_dev_sub_title')){ the_field('web_dev_sub_title'); } ?></h5>
                                    </div>
                                
                                    <div class="content-block-contents">
                                        <div class="cc-block">
                                            <?php if(get_field('web_dev_content')){ the_field('web_dev_content'); } ?>
                                        </div>
                                    </div>

                                    <div class="more-btn button-center cc-cl-btn">
                                        <div class="button-wrapper">
                                            <?php $web_dev = get_field('web_dev_link');
                                                if($web_dev){
                                                    $link_url = $web_dev['url']; 
                                                            $link_text = $web_dev['title'];?>
                                            <a href="<?php echo esc_url($link_url); ?>" class="btn-sty-one animated-button thar-three"><span class="text"><?php echo esc_attr($link_text); ?></span><span class="arrow"></span></a>
                                            <?php } ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            
                        </div>
                    </div>
        </div>
        <?php if(have_rows('last_two_sections')){ $i=1;?>
            <?php while(have_rows('last_two_sections')){ the_row();?>
                <?php if ($i == 1) {?>                                           
        <div class="cc-yii-develops" id="cc-yii-develops">
            <div class="container">
                <div class="cc-row">
                    <div class="cc-col-50">
                        <div class="content-block">
                            <div class="content-block-title web-app-title ">
                                <h3><?php the_sub_field('last_two_section_heading');?></h3>
                            </div>
                            <div class="content-block-sub-title">
                                <div class="right-line small-title-line"></div>
                                <h5><?php the_sub_field('last_section_sub_heading');?></h5>
                            </div>
                            <div class="content-block-title-wrapper">
                            </div>
                        
                            <div class="content-block-contents">
                                <?php if(have_rows('last_section_content')){ ?>
                                    <?php while(have_rows('last_section_content')){ the_row();?>
                                <div class="cc-block">
                                    <?php the_sub_field('last_section_contents');?>
                                </div>
                                    <?php } ?>
                                        <?php } ?>
                            </div>

                            <div class="more-btn button-center cc-cl-btn">
                                <div class="button-wrapper">
                                    <?php $last_sec_link = get_sub_field('last_section_link');
                                                if($last_sec_link){
                                                    $link_url = $last_sec_link['url']; 
                                                            $link_text = $last_sec_link['title'];?>
                                            <a href="<?php echo esc_url($link_url); ?>" class="btn-sty-one animated-button thar-three"><span class="text"><?php echo esc_attr($link_text); ?></span><span class="arrow"></span></a>
                                            <?php } ?>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="cc-col-50">
                        <div class="cc-image-wrapper">
                            <?php $lst_sec_img = get_sub_field('last_section_image');
                                                if ($lst_sec_img){?>
                                    <img src="<?php echo $lst_sec_img['url'];?>" alt="<?php echo $lst_sec_img['alt']; ?>">
                                                <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <?php }elseif ($i == 2){?>
        <div class="cc-megento-develop" id="cc-megento-develop">
            <div class="container">
                    <div class="cc-row">
                        <div class="cc-col-50 cc-megento-imgwrap-col">
                            <div class="cc-image-wrapper cc-megento-imgwrap">
                                <?php $lst_sec_img = get_sub_field('last_section_image');
                                                if ($lst_sec_img){?>
                                    <img src="<?php echo $lst_sec_img['url'];?>" alt="<?php echo $lst_sec_img['alt']; ?>">
                                                <?php } ?>
                            </div>
                        </div>
                        <div class="cc-col-50 cc-cwad-content">
                            <div class="content-block">
                                <div class="content-block-title web-app-title ">
                                    <h3><?php the_sub_field('last_two_section_heading');?></h3>
                                </div>
                                <div class="content-block-sub-title">
                                    <div class="right-line small-title-line"></div>
                                    <h5><?php the_sub_field('last_section_sub_heading');?></h5>
                                </div>
                                <div class="content-block-title-wrapper">
                                </div>
                            
                                <div class="content-block-contents">
                                    <?php if(have_rows('last_section_content')){ ?>
                                        <?php while(have_rows('last_section_content')){ the_row();?>
                                    <div class="cc-block">
                                        <?php the_sub_field('last_section_contents');?>
                                    </div>
                                        <?php } ?>
                                            <?php } ?>
                                </div>

                                <div class="more-btn button-center cc-cl-btn">
                                    <div class="button-wrapper">
                                        <?php $last_sec_link = get_sub_field('last_section_link');
                                                if($last_sec_link){
                                                    $link_url = $last_sec_link['url']; 
                                                            $link_text = $last_sec_link['title'];?>
                                            <a href="<?php echo esc_url($link_url); ?>" class="btn-sty-one animated-button thar-three"><span class="text"><?php echo esc_attr($link_text); ?></span><span class="arrow"></span></a>
                                            <?php } ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                        
                    </div>
                </div>
        </div>
            <?php } $i++; }?>                                                
            <?php }?> 

        <!--footer contact-->
        <div class="footer-contact">
			<div class="container">
                <div class="cc-row">
					<div class="contact-block-title block-titles">
                    <div class="title">
                        <div class="big-title">
                            <h2><?php if(get_field('footer_big_heading')){ the_field('footer_big_heading'); } ?></h2>
                        </div>
                        <div class="small-title">
                            <div class="right-line small-title-line"></div>
                            <div class="title-content get-for-quote">
                                <h3><?php if(get_field('contact_fade_text')){ the_field('contact_fade_text'); } ?></h3>
                            </div>
                            <div class="left-line small-title-line"></div>
                        </div>
                    </div>
					<div class="title">
                        <h3><?php if(get_field('contact_title')){ the_field('contact_title'); } ?></h3>
                    </div>
                    <div class="desc">
                        <?php if(get_field('contact_description')){ the_field('contact_description'); } ?>
                    </div>
					<div class="more-btn button-center">
						<div class="button-wrapper">
                        <?php $contact = get_field('contact_link');
                                                if($contact){
                                                    $link_url = $contact['url']; 
                                                            $link_text = $contact['title'];?>
                                            <a href="<?php echo esc_url($link_url); ?>" class="btn-sty-one animated-button thar-three"><span class="text"><?php echo esc_attr($link_text); ?></span><span class="arrow"></span></a>
                                            <?php } ?>
						</div>
					</div>
                </div>
				</div>
			</div>
        </div>

<?php get_footer('new');?>

