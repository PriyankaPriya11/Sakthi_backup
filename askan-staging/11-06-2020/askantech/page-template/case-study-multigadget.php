<?php /* Template Name: Mutligaget Case Study */ ?>
<?php get_header('casestudy'); ?>
    <header>
        <div class="cc-header-section-wrapper">

            <div class="cc-nav-section-wrapper">
                <div class="cc-container">
                    <div class="cc-nav-section">
                        <div class="cc-logo-section">
                            <a href="<?php echo site_url(); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo">
                            </a>    
                        </div>
                        <nav>
                            <div class="cc-mobile-toggle">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            
                            <div class="cc-ul-wrapper">
                                <div class="cc-closemenu">
                                    <img class="lazy" data-src="<?php echo get_template_directory_uri();?>/assets/img/closemenu.png" alt="closemenu">
                                </div>
                                <?php //wp_nav_menu(array('theme_location'=>'header-menu'));?>
                                <ul>
                                    <li> <a href="https://www.askantech.com/about-us/">About us</a> </li>
                                    <li><a href="https://www.askantech.com/services/">Services</a></li>
                                    <li><a href="https://www.askantech.com/success-stories/">Portfolio</a></li>
                                    <li><a href="https://www.askantech.com/blog/">Blog</a></li>
                                    <!--li><a href="">Case study</a></li-->
                                    <!--li><a href="">testimonial</a></li-->
                                    <li class="get-quote-button"><a href="https://www.askantech.com/contact-us/">Get A Quote</a></li>
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
                            <div class="cc-col-35 cc-content-section">
                                <?php if(get_field('header_section_title')) : ?><h3><?php the_field('header_section_title'); ?></h3><?php endif; ?>
                                <?php if(get_field('header_section_content')) : ?><p><?php the_field('header_section_content'); ?></p><?php endif; ?>
                                <?php $link = get_field('header_section_button'); 
                                    if( $link ): 
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];                
                                        ?>
                                <a class="cc-call-to-action" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
                                    <?php endif; ?>
                            </div>
                            <div class="cc-col-65 cc-img-section">
                                <div class="cc-video-section">
                                    <div class="cc-lapimg">
                                        <?php $image = get_field('header_section_image');
                                        if( !empty($image) ): ?>
                                            <img class="lazy" data-src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>">
                                        <?php endif; ?>
                                        <div class="cc-play-img">
                                            <img class="lazy" data-src="<?php echo get_template_directory_uri();?>/assets/img/playbtn.png" alt="playbtn">
                                        </div>
                                        <div class="cc-vidsec">
                                            <iframe <?php if(get_field('header_video_link')):?> src="<?php the_field('header_video_link'); ?>" <?php endif; ?> allowfullscreen=""></iframe>
                                        </div>
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

        <div class="cc-multigadget-section">
            <div class="cc-mg-insure-section cc-padsection">
                <div class="cc-container">
                    <div class="cc-section-title">
                        <?php if(get_field('client_name')) : ?><h3><?php the_field('client_name'); ?></h3><?php endif; ?>
                        <hr>
                        <h5><?php if(get_field('client_desc')) : ?><?php the_field('client_desc'); ?><?php endif; ?> <br /> Technology: <?php if(get_field('technology_used')) : ?><?php the_field('technology_used'); ?><?php endif; ?></h5>
                    </div>
                </div>
            </div>

            <div class="cc-tech-used cc-padsection">
                <div class="cc-section-title">
                    <?php if(get_field('slider_section_heading')) : ?><h3><?php the_field('slider_section_heading'); ?></h3><?php endif; ?>
                </div>

                <div class="cc-tech-carousel">.
                    <div class="cc-container">
                        <div class="owl-carousel">
                        <?php if (have_rows('slider_image')):?>
                            <?php while (have_rows('slider_image')): the_row(); ?> 
                                <div class="cc-isec">
                                    <?php $image = get_sub_field('slider_images');
                                    if( !empty($image) ): ?> <img class="lazy" data-src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"><?php endif;?>
                                </div>       
                            <?php endwhile;?>
                        <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cc-insure-method-section-wrapper cc-padsection">
                <div class="cc-container">
                    <div class="cc-insure-method-section">
                                       
                        <div class="cc-fx-row">
                            <div class="cc-col-50 cc-cont-section">
                                <?php if (have_rows('project_steps')): ?>
                                    <?php while (have_rows('project_steps')): the_row(); ?>
                                        <div class="cc-num-box-wrapper">
                                            <div class="cc-ims-heading">
                                                <div class="cc-num-box">
                                                    <div class="cc-ly-one"></div>
                                                    <div class="cc-ly-two"><?php the_sub_field('no'); ?></div>
                                                </div>
                                                <h3><?php the_sub_field('project_steps_heading'); ?></h3>
                                            </div>
                                            <div class="cc-cont">
                                                <?php the_sub_field('project_steps_content'); ?>
                                            </div>
                                        </div>
                                    <?php endwhile;?>
                                <?php endif;?>
                            </div>
                            <div class="cc-col-50 cc-img-section">
                                <?php $image = get_field('project_image');
                                if( !empty($image) ): ?> 
                                    <img class="lazy" data-src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>">
                                <?php endif;?>
                            </div>
                        </div>

                        <div class="cc-fx-row">
                            <?php if (have_rows('project_steps_row_two')): ?>
                                <?php while (have_rows('project_steps_row_two')): the_row(); ?>
                                    <div class="cc-num-box-wrapper">
                                        <div class="cc-ims-heading">
                                            <div class="cc-num-box">
                                                <div class="cc-ly-one"></div>
                                                <div class="cc-ly-two"><?php the_sub_field('project_steps_row_two_no'); ?></div>
                                            </div>
                                            <h3><?php the_sub_field('project_steps_row_two_heading'); ?></h3>
                                        </div>
                                        <div class="cc-cont">
                                            <?php the_sub_field('project_steps_row_two_content'); ?>
                                        </div>
                                    </div>
                                <?php endwhile;?>
                            <?php endif;?> 
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php if (have_rows('client_testimonial')): $i=1;?>
            <?php while (have_rows('client_testimonial')): the_row();?>

                <div class="cc-testimonial-section-wrapper">
                    <div class="cc-container">
                        <div class="cc-testimonial-section">
                            <div class="cc-fx-row">
                                <div class="cc-author-img">
                                    <div class="cc-cir-img-wrapper">
                                        <div class="cc-cir-one cc-fx-cen">
                                            <div class="cc-cir-two cc-fx-cen">
                                                <?php $image = get_sub_field('client_testimonial_image');
                                                if( !empty($image) ): ?> 
                                                    <img class="lazy" data-src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>">
                                                <?php endif;?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cc-author-quote">
                                    <?php the_sub_field('client_testimonial_content'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if($i == 1) :?>                      
                    <div class="cc-aim-section-wrapper cc-padsection">
                        <div class="cc-container">
                            <div class="cc-aim-section">

                                <div class="cc-section-title">
                                    <?php if(get_field('aim_section_heading')) : ?><h3><?php the_field('aim_section_heading'); ?></h3><?php endif; ?>
                                    <hr>
                                </div>

                                <div class="cc-aim-process-wrapper">
                                    <div class="cc-aim-process-wrapper-section">
                                        <div class="cc-fx-col-row cc-col-3">
                                            <?php if (have_rows('aim_section_column_one')): ?>
                                                <?php while (have_rows('aim_section_column_one')): the_row();?>
                                                    <div class="cc-aim-process-box">
                                                        <?php $image = get_sub_field('aim_section_column_one_logo');
                                                        if( !empty($image) ): ?> <img class="lazy" data-src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"><?php endif;?>
                                                        <p><?php the_sub_field('aim_section_column_one_content');?></p>
                                                    </div>
                                                <?php endwhile;?>
                                            <?php endif;?>
                                        </div>
                                        <div class="cc-fx-col-row cc-col-6 text-center cc-phonecent-img">
                                            <?php $image = get_field('aim_section_centre_image');
                                            if( !empty($image) ): ?> <img class="lazy" data-src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"><?php endif;?>
                                        </div>
                                        <div class="cc-fx-col-row cc-col-3">
                                            <?php if (have_rows('aim_section_column_two')): ?>
                                                <?php while (have_rows('aim_section_column_two')): the_row();?>
                                                    <div class="cc-aim-process-box">
                                                        <?php $image = get_sub_field('aim_section_column_two_logo');
                                                        if( !empty($image) ): ?> <img class="lazy" data-src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"><?php endif;?>
                                                        <p><?php the_sub_field('aim_section_column_two_content');?></p>
                                                    </div>
                                                <?php endwhile;?>
                                            <?php endif;?>
                                        </div>
                                    </div>
                                    <div class="cc-fx-col-row cc-col-3 cc-sep-process-box">
                                        <div class="cc-aim-process-box">
                                            <?php $image = get_field('aim_section_column_below_logo');
                                            if( !empty($image) ): ?> <img class="lazy" data-src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"><?php endif;?>
                                            <p><?php if(get_field('aim_section_column_below_content')) : ?><?php the_field('aim_section_column_below_content'); ?><?php endif; ?></p>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="cc-our-objective-wrapper cc-padsection">
                        <div class="cc-container">
                            <div class="cc-our-objective-section">
                                <div class="cc-section-title">
                                    <h3><?php if(get_field('objective_section_heading')) : ?><?php the_field('objective_section_heading'); ?><?php endif; ?></h3>
                                    <hr>
                                </div>
                                <div class="cc-circle-points">
                                    <ul>
                                        <?php if (have_rows('objectives')):?>
                                            <?php while (have_rows('objectives')): the_row();?>
                                                <li>
                                                    <span class="cc-cirbox-wrapper"> <span class="cc-cir1"> <span class="cc-cir2"> </span> </span> </span>
                                                    <span class="cc-text-sec"><?php the_sub_field('objective'); ?></span>
                                                </li>
                                            <?php endwhile;?>
                                        <?php endif;?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                  <?php elseif($i == 2) : ?>
                    <div class="cc-need-of-clients-wrapper cc-padsection">
                        <div class="cc-container">
                            <div class="cc-need-of-clients-section">
                                <div class="cc-section-title">
                                    <?php if(get_field('process_section_heading')) : ?><?php the_field('process_section_heading'); ?><?php endif; ?>
                                    <hr>
                                </div>

                                <div class="cc-noc-wrapper">
                                    <?php if (have_rows('process')):?>
                                        <?php while (have_rows('process')): the_row(); ?>
                                            <div class="cc-box">
                                                <div class="cc-icon-section">
                                                    <?php $image = get_sub_field('process_logo');
                                                    if( !empty($image) ): ?> <img class="lazy" data-src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"><?php endif;?>
                                                </div>
                                                <h4 class="cc-noc-box-title"> <?php the_sub_field('process_name'); ?> </h4>
                                                <div class="cc-noc-box-desc">
                                                    <p><?php the_sub_field('process_content'); ?></p>
                                                </div>
                                            </div> 
                                        <?php endwhile;?>
                                    <?php endif;?>                                   
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="cc-tabsection-wrapper cc-padsection">

                        <div class="cc-section-title">
                            <h3><?php if(get_field('feature_section_heading')) : ?><?php the_field('feature_section_heading'); ?><?php endif; ?></h3>
                            <hr>
                        </div>

                        <div class="cc-tabsection-section">
                            <div class="cc-tab-switcher">
                                <ul>
                                    <?php if (have_rows('features')): $j=1;?>
                                        <?php while (have_rows('features')): the_row(); ?>      
                                            <li class="tablinks" onclick="opentab(event, 'tab<?php echo $j;?>')" > 
                                                <?php $image = get_sub_field('feature_logo');
                                                if( !empty($image) ): ?> <img class="lazy" data-src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"><?php endif;?>
                                                <span><?php the_sub_field('feature_title'); ?></span> 
                                            </li>                                    
                                        <?php $j++; endwhile;?>
                                    <?php endif;?>
                                </ul>
                            </div>
                            <div class="cc-tabcontainer">
                                <?php if (have_rows('features')): $k=1;?>
                                    <?php while (have_rows('features')): the_row(); ?>
                                        <div class="cc-tab tabcontent" id="tab<?php echo $k;?>">
                                            <div class="cc-container">
                                                <div class="cc-fx-row">
                                                    <div class="cc-col-50 cc-tab-img">
                                                        <?php $image = get_sub_field('feature_tab_image');
                                                        if( !empty($image) ): ?> <img class="lazy" data-src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"><?php endif;?>
                                                    </div>
                                                    <div class="cc-col-50 cc-tab-content">
                                                        <ul>
                                                            <?php if (have_rows('feature_points')): ?>
                                                                <?php while (have_rows('feature_points')): the_row(); ?>
                                                                    <li><?php the_sub_field('feature_point'); ?></li>
                                                                <?php endwhile;?>
                                                            <?php endif;?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php $k++; endwhile;?>
                                <?php endif;?>
                            </div>
                        </div>

                    </div>
                  <?php elseif($i == 3) :?>

                    <div class="cc-business-gains-wrapper cc-padsection">
                        <div class="cc-container">

                            <div class="cc-section-title">
                                <?php if(get_field('achievement_section_heading')) : ?><h3><?php the_field('achievement_section_heading'); ?></h3><?php endif; ?>
                                <hr>
                            </div>

                            <div class="cc-para-sec">
                                <?php if(get_field('achievement_section_content')) : ?><?php the_field('achievement_section_content'); ?><?php endif; ?>
                            </div>

                        </div>
                    </div>

                    <div class="cc-speed-performance-wrapper cc-padsection lazy" data-bg="url(<?php echo get_template_directory_uri();?>/assets/img/speed-performance.png)">
                        <div class="cc-container">

                            <div class="cc-section-title">
                                <?php if(get_field('speed_performance_section_heading')) : ?><h3><?php the_field('speed_performance_section_heading'); ?></h3><?php endif; ?>
                                <hr>
                            </div>

                            <div class="cc-spw-content">
                                <?php if(get_field('speed_performance_section_content')) : ?><?php the_field('speed_performance_section_content'); ?><?php endif; ?>
                            </div>

                        </div>
                    </div>
                <?php endif;?>
            <?php $i++; endwhile; ?>
        <?php endif;?>
        <div class="cc-bottom-footer-wrapper">
            <div class="cc-container">
                <div class="cc-bottom-footer">
                    <div class="cc-bottom-footer-title">
                        <h3>contact us</h3>
                        <h5>get A quote</h5>
                    </div>
                    <p>What if your website could reduce your customer support costs and improve customer satisfaction? Askan can make it happen! </p>
                </div>

                <div class="form-wrapper">
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
                            <input id="budget" name="budjet" type="text" placeholder="Project Budget ?*" onkeypress="javascript:return isNumber(event)">
                            <div id="budjet_error"></div>
                        </div>
                        <div class="wrapp-field text-field">
                            <label  for="file"   class="filelabel"  >
                                <span id="labelId"> File Upload</span>
                            <input id="file" name="file" type="file" class="filetype" >
                            <div id="file_error"></div>
                            </label>
                        </div>
                        <div class="wrapp-field textarea-field full-wrap">
                            <textarea id="message" name="message" placeholder='Your Message*'></textarea>    <div id="message_error"></div>
                        </div>
                        <div class="wrap-submit-btn more-btn">
                            <div class="button-wrapper">                                    
                                <button id="submit" type="submit" class="btn-sty-one animated-button thar-three">
                                    <span class="text">Send</span><span class="arrow"></span></button>                                    
                            </div>                            
                        </div>
                        <div id="display"></div>
                    </form>
                </div>
                
            </div>
        </div>

    </div>
<?php get_footer('casestudy');  ?>