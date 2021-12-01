<?php

/*Template Name:Case Study PPI*/

?>

<?php get_header('casestudy'); ?>
    <div class="cc-case-study-section">

        <header>
            <div class="cc-header-section-wrapper">

                <div class="cc-nav-section-wrapper">
                    <div class="cc-container">
                        <div class="cc-nav-section">
                            <div class="cc-logo-section">
                            <a href="<?php echo site_url(); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo">
                            </a> 
                                <!--<img src="assets/img/logo.png" alt="">-->
                            </div>
                            <nav>
                                <div class="cc-mobile-toggle">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>

                                <div class="cc-ul-wrapper">
                                    <div class="cc-closemenu">
                                    <img class="lazy" src="<?php echo get_template_directory_uri();?>/assets/img/closemenu.png" alt="closemenu">
                                        <!--<img src="/assets/img/closemenu.png" alt="">-->
                                    </div>
                                    <ul>
                                        <li> <a href="javascript:void(0)">Home</a> </li>
                                        <li><a href="javascript:void(0)">About Us</a></li>
                                        <li> <a href="javascript:void(0)">Services</a></li>
                                        <li> <a href="javascript:void(0)">Portfolio</a></li>
                                        <li> <a href="javascript:void(0)">Blog</a></li>
                                        <li class="get-quote-button"> <a href="javascript:void(0)">GET OUOTE</a></li>
                                    </ul>

                                </div>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="cc-banner-section-wrapper">
                    <div class="cc-container">
                        <div class="cc-banner-section">
                            <div class="cc-fx-row">
                                <div class="cc-col-40 cc-content-section">
                                <?php if(get_field('header_section_title')) : ?><h3><?php the_field('header_section_title'); ?></h3><?php endif; ?>
                                <?php if(get_field('header_author_name')) : ?><h6><?php the_field('header_author_name'); ?></h6><?php endif; ?>
                                <?php $link = get_field('header_section_button'); 
                                    if( $link ): 
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];                
                                        ?>
        
                                    <a class="cc-banner-btn" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
                                    <?php endif; ?>
                                </div>
                                <div class="cc-col-60 cc-img-section">
                                    <div class="cc-bannerlaptop-content-wrapper">
                                    <?php $image = get_field('header_section_image');
                                        if( !empty($image) ): ?>
                                            <img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>">
                                        <?php endif; ?>
                                        <!--<img src="assets/img/banner-laptop.png" alt="">-->
                                        <div class="cc-bannerlaptop-content">

                                        <iframe  <?php if(get_field('header_video_link')):?> src="<?php the_field('header_video_link'); ?>" <?php endif; ?> frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"> </iframe>
                                           <!-- <iframe src="https://www.youtube-nocookie.com/embed/Ss1IKwkY08U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </header>

        <div class="cc-page-content">
       
         <div class="cc-carousel-slider">
                <div class="cc-tech-used cc-padsection">

                    <div class="cc-section-title">
                        <h3>technology used</h3>
                    </div>
            
                    <div class="cc-tech-carousel">.
                        <div class="cc-container">
                            <div class="owl-carousel">
                                <div class="cc-isec">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assests-two/img/html.png" alt="">
                                </div>
                                <div class="cc-isec">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assests-two/img/html.png" alt="">
                                </div>
                                <div class="cc-isec">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assests-two/img/html.png" alt="">
                                </div>
                                <div class="cc-isec">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assests-two/img/html.png" alt="">
                                </div>
                                <div class="cc-isec">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assests-two/img/html.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

                                         
            <div class="cc-overview-section-wrapper">
                <div class="cc-container-full">
                    <div class="cc-fx-row">
                        <div class="cc-col-40">
                            <div class="cc-osw-testimonial-wrapper">
                                <div class="cc-osw-testimonial">
                                    <div class="cc-title">
                                    <?php if(get_field('project_left_head')) : ?>    <h4><?php the_field('project_left_head'); ?></h4><?php endif; ?>
                                    </div>
                                    <div class="cc-content">
                                    <?php if(get_field('project_left_content')) : ?>  <p class="cc-text"><?php the_field('project_left_content'); ?></p><?php endif; ?>
                                    <?php if(get_field('project_left_author')) : ?><p class="cc-name"><?php the_field('project_left_author'); ?></p><?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="cc-col-60">
                            <div class="cc-osw-content">
                                <div class="cc-box-section">
                                <?php if (have_rows('project_steps')): ?>
                                    <?php while (have_rows('project_steps')): the_row(); ?>
                                    <h3> <span class="cc-title-wrapper"> <span class="cc-bs-title"><?php the_sub_field('project_steps_heading'); ?></span> <span
                                                class="cc-underline"></span> </span> </h3>
                                                <?php the_sub_field('project_steps_content'); ?>
                                 
                                </div>    
                                 <?php endwhile;?>
                                <?php endif;?>
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        

            <div class="cc-aim-to-deliver-wrapper">
                <div class="cc-container">
                    <div class="cc-fx-row">
                        <div class="cc-col-60">
                            <div class="cc-img-section">
                                <ul>
                                    <li> 
                                    <?php $image = get_field('project_image');
                                if( !empty($image) ): ?> 
                                 
            
                                        <a href=""> 
                                        <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>">
                                           <!-- <img src="/assets/img/image1.JPG" alt=""> -->
                                        </a> 
                                        <?php endif;?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="cc-col-40 cc-atd-content">
                            <div class="cc-list-section">
                                            <?php if(get_field('aim_section_heading')) : ?> <h4><?php the_field('aim_section_heading'); ?></h4><?php endif; ?>
                                              <ul>
                                            <?php if(get_field('aim_section_list')) : ?> <?php the_field('aim_section_list'); ?><?php endif; ?>
                                             </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
            <div class="cc-our-objective-wrapper cc-padsection">

                <div class="cc-container">

                    <div class="cc-heading-section">
                    <?php if(get_field('objective_head')) : ?>
       
                        <h3><?php the_field('objective_head'); ?></h3><?php endif; ?>
                    </div>

                    <div class="cc-our-objective-section">
                        <div class="cc-fx-row">
                        <?php if (have_rows('objectives_one')): ?>
                                    <?php while (have_rows('objectives_one')): the_row(); ?>    
                        <div class="cc-col-25">

                                <h4 class="cc-count-section"><?php the_sub_field('objective_first_no'); ?></h4>
                                <p> <?php the_sub_field('objective_one_content'); ?></p>
                            </div>
                            <?php endwhile;?>
                            <? endif; ?>
                        </div>

                       
                        <div class="cc-fx-row">
                            <div class="cc-trans-testimonial">
                            <?php if(get_field('objective_client_content')) : ?> <p class="cc-tt-text"><?php the_field('objective_client_content'); ?></p><?php endif; ?>
                            <?php if(get_field('objective_client_auth')) : ?> <p class="cc-tt-auth"><?php the_field('objective_client_auth'); ?></p><?php endif; ?>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="cc-needs-of-clients-wrapper cc-padsection">
                <div class="cc-container">
                    <div class="cc-needs-of-clients-section">
                        <div class="cc-fx-row">
                            <div class="cc-col-25">
                                <div class="cc-noc-title">
                                <?php if(get_field('process_section_head')) : ?> <h4><?php the_field('process_section_head'); ?></h4><?php endif; ?>
                                    <div class="cc-testi-sec">
                                    <?php if(get_field('process_client_content')) : ?><p class="cc-testi-sec-quote"><?php the_field('process_client_content'); ?> </p><?php endif; ?>
                                    <?php if(get_field('process_client_auth')) : ?><p><?php the_field('process_client_auth'); ?></p><?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="cc-col-75">
                                <div class="cc-noc-row">
                                    <div class="cc-rowcol cc-rowcol-one">
                                  
                                        <div class="cc-rowcol-box-wrapper">
                                        <?php if (have_rows('process')): ?>
                                    <?php while (have_rows('process')): the_row(); ?>
                                            <div class="cc-rowcol-box">
                                            <?php $image = get_sub_field('process_image');
                                    if( !empty($image) ): ?> <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"><?php endif;?>
                                               <!-- <img src="/assets/img/analyse-blue.png" alt="">-->
                                                <h3><?php the_sub_field('process_head'); ?></h3>
                                                <p><?php the_sub_field('process_description'); ?></p>
                                            </div>
                                            <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                          
                                    </div>
                                  
                                    <div class="cc-rowcol cc-rowcol-two">
                                        <div class="cc-rowcol-box-wrapper">
                                        <?php if (have_rows('process_three_main')): ?>
                                    <?php while (have_rows('process_three_main')): the_row(); ?>
                                            <div class="cc-rowcol-box">
                                            <?php $image = get_sub_field('main_process_content_img');
                                    if( !empty($image) ): ?> <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"><?php endif;?>
                                                <!--<img src="/assets/img/testing-blue.png" alt="">-->
                                                <h3><?php the_sub_field('main_process_content_head'); ?></h3>
                                                <p><?php the_sub_field('main_process_content_description'); ?>
                                                </p>
                                            </div>
                                            <?php endwhile;?>
                                            <?php endif;?>
                                        </div>
                                    </div>
                              
                                    <div class="cc-rowcol cc-rowcol-three">
                                        <div class="cc-rowcol-box-wrapper">
                                        <?php if (have_rows('process_right')): ?>
                                    <?php while (have_rows('process_right')): the_row(); ?>
                                            <div class="cc-rowcol-box">
                                            <?php $image = get_sub_field('process_right_img');
                                           if( !empty($image) ): ?> <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"><?php endif;?>
                                               
                                               <!-- <img src="/assets/img/deployment-blue.png" alt="">-->
                                                <h3><?php the_sub_field('process_right_head'); ?></h3>
                                                <p><?php the_sub_field('process_right_content'); ?> </p>
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
            </div>


            <div class="cc-key-features-wrapper cc-padsection">
                <div class="cc-container">
                    <div class="cc-key-features-section">

                        <div class="cc-fx-row">
                            <div class="cc-slider-heading">
                                <div class="owl-carousel">
                                <?php if (have_rows('key_features')): ?>
                                    <?php while (have_rows('key_features')): the_row(); ?>
                                    <div class="cc-title-section">
                                        <h4><?php the_sub_field('key_features_head'); ?></h4>
                                    </div>
                                    <?php endwhile;?>
                                            <?php endif;?>

                                 
                                </div>
                            </div>
                        </div>

                        <div class="cc-fx-row">
                            <div class="cc-col-50">
                                <div class="cc-img-wrapper">
                                <?php $image = get_sub_field('key_features_images');
                                           if( !empty($image) ): ?> <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"><?php endif;?>
                                   <!-- <img src="/assets/img/tabimg.png" alt="">-->
                                    <div class="cc-site-img">
                                    <?php if (have_rows('key_features_repeater_img')): ?>
                                    <?php while (have_rows('key_features_repeater_img')): the_row(); ?>
                                        <div class="cc-imgslidersec owl-carousel">
                                        <?php $image = get_sub_field('key_features_image_rep');
                                           if( !empty($image) ): ?> <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"><?php endif;?>
                                        </div>
                                        <?php endwhile;?>
                                            <?php endif;?>
                                    </div>
                                </div>
                            </div>
                            <div class="cc-col-40 cc-kfw-text">
                                <div class="cc-carousel-section">
                                    <div class="carousel owl-carousel">
                                    <?php if (have_rows('key_features')): ?>
                                    <?php while (have_rows('key_features')): the_row(); ?>
                                        <div class="ullisting">
                                        <?php the_sub_field('key_features_description'); ?>
                                        </div>
                                        <?php endwhile;?>
                                            <?php endif;?>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <div class="cc-carousel-navsection">
                            <button id="prev">
                            <?php $image = get_sub_field('key_features_arrow');
                             if( !empty($image) ): ?> <img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"><?php endif;?>
                                                
                            
                           
                        
                        </button>
                            <button id="next">
                            <?php $image = get_sub_field('key_features_arrow');
                             if( !empty($image) ): ?> <img  src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"><?php endif;?>
                               
                         
                        
                        </button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="cc-speed-preformance-wrapper">
                <div class="cc-container-full">
                    <div class="cc-fx-row">
                        <div class="cc-col-50 cc-spw-formsection">
                            <div class="cc-spw-fs-title">
                            <?php if(get_field('contact_us_head')) : ?>
                           
                            <h4> <?php the_field('contact_us_head'); ?></h4><?php endif; ?>
                            <?php if(get_field('contact_us_description')) : ?>  <p><?php the_field('contact_us_description'); ?> </p><?php endif; ?>
                            </div>
                            <div class="cc-spw-fs-form">
                                <div class="form-wrapper">

                                    <form id="contact_form" name="contact_form" action="#" method="POST"
                                        enctype="multipart/form-data">
                                        <div class="wrapp-field text-field">
                                            <input id="name" name="name" type="text" placeholder="Name*">
                                            <div id="name_error"></div>
                                        </div>
                                        <div class="wrapp-field text-field">
                                            <input id="phone" name="phone" type="text" placeholder="Phone*">
                                            <div id="phone_error"></div>
                                        </div>
                                        <div class="wrapp-field text-field">
                                            <input id="email" name="email" type="email" placeholder="Email*">
                                            <div id="email_error"></div>
                                        </div>
                                        <div class="wrapp-field text-field">
                                            <input id="website" name="website" type="text" placeholder="Website*">
                                            <div id="website_error"></div>
                                        </div>
                                        <div class="wrapp-field text-field">
                                            <input id="budget" name="budjet" type="text" placeholder="Project budget ?*"
                                                onkeypress="javascript:return isNumber(event)">
                                            <div id="budjet_error"></div>
                                        </div>
                                        <div class="wrapp-field text-field">
                                            <label for="file" class="filelabel">
                                                <span id="labelId"> file upload</span>
                                                <input id="file" name="file" type="file" class="filetype">
                                                <div id="file_error"></div>
                                            </label>
                                        </div>
                                        <div class="wrapp-field textarea-field full-wrap">
                                            <textarea id="message" name="message"
                                                placeholder="Your message*"></textarea>
                                            <div id="message_error"></div>
                                        </div>
                                        <div class="wrap-submit-btn more-btn">
                                            <div class="button-wrapper">
                                                <button id="submit" type="submit"
                                                    class="btn-sty-one animated-button thar-three">Send</button>
                                            </div>
                                        </div>
                                        <div id="display"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="cc-col-50 cc-spw-textsection">
                            <div class="cc-spw-text-wrapper">
                             <p class="cc-tt-auth"></p>
                           
                             <?php if(get_field('speed_performance_head')) : ?> <h4><?php the_field('speed_performance_head'); ?></h4><?php endif; ?>
                             <?php if(get_field('speed_performance_description')) : ?> <p><?php the_field('speed_performance_description'); ?></p><?php endif; ?>
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
     </div>
     <?php get_footer('casestudy');  ?>
                                          