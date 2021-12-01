<?php
/**
 * Template Name: Home page old
 */

get_header(); ?>

    <section class="content">
    <!--banner-->
    <div class="div100">
        <div class="home-banner">
            <!--div id="full-slider-wrapper">
                <div id="layerslider" style="width:100%;height:500px;">
                    <div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/fw-1.jpg" class="ls-bg" alt="Slide background"/>
                        <img class="ls-l" style="top:280px;left:50%;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:300;delayin:500;offsetxout:0;offsetyout:-50;durationout:1000;showuntil:220;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;transformoriginout:50% top 0;" src="<?php echo get_template_directory_uri(); ?>/images/s1.png" alt="">
                        <img class="ls-l" style="top:230px;left:50%;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:30;delayin:1720;scalexin:0.9;scaleyin:0.9;offsetxout:0;offsetyout:300;durationout:1000;scalexout:0.5;scaleyout:0.5;transformoriginout:50% bottom 0;" src="<?php echo get_template_directory_uri(); ?>/images/s2.png" alt="">
                        <img class="ls-l" style="top:65%;left:50%;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:250;durationin:950;delayin:500;offsetxout:0;offsetyout:-8;durationout:1000;showuntil:270;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;" src="<?php echo get_template_directory_uri(); ?>/images/s2.jpg" alt="">
                        <img class="ls-l" style="top:195px;left:50%;white-space: nowrap;" data-ls="offsetxin:0;delayin:1720;easingin:easeInOutQuart;scalexin:0.7;scaleyin:0.7;offsetxout:-800;durationout:1000;" src="<?php echo get_template_directory_uri(); ?>/images/s1.jpg" alt="">
                        <p class="ls-l" style="top:150px;left:116px;font-weight: 300;font-family: 'robotobold';height:40px;font-size:32px;line-height:37px;color:#6db509;border-radius:3px;white-space: nowrap;" data-ls="offsetxin:0;durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-200;durationout:1000;">
                            <?php get_field('slider_1_text_1','options')? the_field('slider_1_text_1','options'):'';?>
                        </p>
                        <p class="ls-l" style="top:190px;left:125px;font-family: 'robotobold';font-size:31px;color:#6db509;white-space: nowrap;" data-ls="offsetxin:0;durationin:2000;delayin:2000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% top 0;offsetxout:-400;">
                            <?php get_field('slider_1_text_2','options')? the_field('slider_1_text_2','options'):'';?>
                        </p>
                        <img class="ls-l ls-linkto-3" style="top:460px;left:610px;white-space: nowrap;" data-ls="offsetxin:-50;delayin:1000;rotatein:-40;offsetxout:-50;rotateout:-40;" src="<?php echo get_template_directory_uri(); ?>/images/left.png" alt="">
                        <img class="ls-l ls-linkto-2" style="top:460px;left:650px;white-space: nowrap;" data-ls="offsetxin:50;delayin:1000;offsetxout:50;" src="<?php echo get_template_directory_uri(); ?>/images/right.png" alt="">
                    </div>
                    <div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/fw-1.jpg" class="ls-bg" alt="Slide background"/>
                        <img class="ls-l" style="top:157px;left:284px;white-space: nowrap;" data-ls="offsetxin:300;durationin:2000;offsetxout:-300;parallaxlevel:-1;" src="<?php echo get_template_directory_uri(); ?>/images/l1.png" alt="">
                        <img class="ls-l" style="top:20px;left:50%;white-space: nowrap;" data-ls="offsetxin:600;durationin:2000;offsetxout:-600;parallaxlevel:1;" src="<?php echo get_template_directory_uri(); ?>/images/l2.png" alt="">
                        <img class="ls-l" style="top:37px;left:564px;white-space: nowrap;" data-ls="offsetxin:900;durationin:2000;offsetxout:-900;parallaxlevel:4;" src="<?php echo get_template_directory_uri(); ?>/images/l3.png" alt="">
                        <p class="ls-l" style="top:170px;left:174px;font-weight: 300;height:40px;font-family: 'robotobold';font-size:32px;line-height:37px;color:#f04705;border-radius:3px;white-space: nowrap;" data-ls="offsetxin:0;durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-200;durationout:1000;parallaxlevel:10;">
                            <?php get_field('slider_2_text_1','options')? the_field('slider_2_text_1','options'):'';?>
                        </p>
                        <p class="ls-l" style="top:210px;left:183px;font-family: 'robotobold';font-size:31px;color:#f04705;white-space: nowrap;" data-ls="offsetxin:0;durationin:2000;delayin:2000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% top 0;offsetxout:-400;parallaxlevel:8;">
                            <?php get_field('slider_2_text_2','options')? the_field('slider_2_text_2','options'):'';?>
                        </p>
                        <img class="ls-l ls-linkto-1" style="top:430px;left:210px;white-space: nowrap;" data-ls="offsetxin:-50;delayin:1000;offsetxout:-50;parallaxlevel:3;" src="<?php echo get_template_directory_uri(); ?>/images/left.png" alt="">
                        <img class="ls-l ls-linkto-3" style="top:430px;left:250px;white-space: nowrap;" data-ls="offsetxin:50;delayin:1000;offsetxout:50;parallaxlevel:3;" src="<?php echo get_template_directory_uri(); ?>/images/right.png" alt="">
                    </div>
                    <div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/fw-1.jpg" class="ls-bg" alt="Slide background"/>
                        <img class="ls-l" style="top:129px;left:487px;white-space: nowrap;" data-ls="offsetxin:400;durationin:2000;offsetxout:400;" src="<?php echo get_template_directory_uri(); ?>/images/d1.png" alt="">
                        <img class="ls-l" style="top:104px;left:70px;white-space: nowrap;" data-ls="offsetxin:-200;durationin:2000;offsetxout:-200;" src="<?php echo get_template_directory_uri(); ?>/images/d2.png" alt="">
                        <p class="ls-l" style="top:320px;left:830px;font-weight: 300;height:40px;font-family: 'robotobold';font-size:32px;line-height:37px;color:#544f8c;border-radius:3px;white-space: nowrap;" data-ls="offsetxin:0;durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-400;durationout:1000;">
                            <?php get_field('slider_3_text_1','options')? the_field('slider_3_text_1','options'):'';?>
                        </p>
                        <p class="ls-l" style="top:360px;left:836px;font-family: 'robotobold';font-size:31px;color:#544f8c;white-space: nowrap;" data-ls="offsetxin:0;durationin:2000;delayin:2000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% top 0;offsetxout:-600;">
                            <?php get_field('slider_3_text_2','options')? the_field('slider_3_text_2','options'):'';?>
                        </p>
                        <img class="ls-l ls-linkto-2" style="top:430px;left:960px;white-space: nowrap;" data-ls="offsetxin:-50;delayin:1000;offsetxout:-50;" src="<?php echo get_template_directory_uri(); ?>/images/left.png" alt="">
                        <img class="ls-l ls-linkto-1" style="top:430px;left:1000px;white-space: nowrap;" data-ls="offsetxin:50;delayin:1000;offsetxout:50;" src="<?php echo get_template_directory_uri(); ?>/images/right.png" alt="">
                    </div>
                </div>
            </div-->

<div id="inner_element"><h1 class="green-title">Better People,</h1><p class="ctext">Better Technology,</p><p class="rtext">Better Life</p></div>
        </div>
    </div>
    <!--banner-->
    <div class="wrapper">
        <!--About Us-->
        <div class="div100 mt40">
            <div class="div30">
                <div class="main-title"><?php get_field('about_us_title')? the_field('about_us_title'):'';?></div>
                <div class="div100"><hr class="sep" /></div>
                <div class="sub-title"><?php get_field('who_we_are_quote')? the_field('who_we_are_quote'):'';?></div>
            </div>
            <div class="div70">
<div itemscope itemtype="http://schema.org/Person">
               <div itemprop="description"> <?php get_field('about_us_content')? the_field('about_us_content'):'';?> </div>
</div>
                <a class="btn btn-blue floatr" href="<?php echo site_url();?>/about-us/">Read More</a>
            </div>
        </div>
        <!--About Us-->
        <!--Services title-->
        <div class="div100 mt40">
            <div class="div30">
                <div class="main-title"><?php get_field('services_title')? the_field('services_title'):'';?></div>
                <div class="div100"><hr class="sep" /></div>
                <div class="sub-title"><?php get_field('what_we_do_quote')? the_field('what_we_do_quote'):'';?></div>
            </div>
            <div class="div70">
                <?php get_field('services_content')? the_field('services_content'):'';?>
            </div>
        </div>
        <!--Services title-->
    </div>
    <!--Services segment-->
    <div class="div100 service-bg mt25">
        <div class="wrapper">
        <?php if(get_field('services_segment')): ?>
            <?php while(has_sub_field('services_segment')):
                $service_image = get_sub_field('service_image'); ?>
            <div class="div33">
                <a href="<?php the_sub_field('service_page_link'); ?>"><img src="<?php echo $service_image['url']; ?>" alt="<?php echo $service_image['alt']; ?>" title="<?php echo $service_image['title']; ?>" width="150" height="150"/>
                <p><?php the_sub_field('service_title'); ?></p></a>
            </div>
            <?php endwhile; ?>
        <?php endif ?>

            <a class="btn btn-blue floatr m20" href="<?php echo site_url();?>/services/">View All Services</a>
        </div>
    </div>
    <!--Services segment-->
    <div class="wrapper">
        <!--Process flow-->
        <div class="div100 mt40">
            <div class="div30">
                <div class="main-title"><?php get_field('process_flow_title')? the_field('process_flow_title'):'';?></div>
                <div class="div100"><hr class="sep" /></div>
                <div class="sub-title"><?php get_field('how_we_do_quote')? the_field('how_we_do_quote'):'';?></div>
            </div>
            <div class="div70">
                <?php get_field('process_flow_content')? the_field('process_flow_content'):'';?>
            </div>
        </div>
        <div class="div100 processflow mt25">
        <?php if(get_field('process_flow_segment')): $i=1;?>
            <?php while(has_sub_field('process_flow_segment')):
                $process_image = get_sub_field('process_image'); ?>
            <div class="div20">
                <div class="dottedcircle"><img src="<?php echo $process_image['url'];?>" alt="<?php echo $process_image['alt'];?>" title="<?php echo $process_image['title'];?>" width="72" height="72"/></div>
                <p><?php echo  $i.'. '; the_sub_field('process_title'); ?></p>
            </div>
            <?php $i++; endwhile; ?>
        <?php endif ?>


        </div>
        <!--a class="btn btn-blue floatr mt15" href="<?php //echo site_url();?>/process-flow/">View in Details</a-->
        <!--Process flow-->
        <!--Our Portfolio-->
        <div class="div100 mt40">
            <div class="div30">
                <div class="main-title"><?php get_field('our_portfolio_title')? the_field('our_portfolio_title'):'';?></div>
                <div class="div100"><hr class="sep" /></div>
                <div class="sub-title"><?php get_field('what_we_done_quote')? the_field('what_we_done_quote'):'';?></div>
            </div>
            <div class="div70">
                <?php get_field('our_portfolio_content')? the_field('our_portfolio_content'):'';?>
            </div>
        </div>
        <div class="div100 portfolio mt25">
        <?php if(get_field('our_portfolio_segment')): ?>
            <?php while(has_sub_field('our_portfolio_segment')):
                $project_image = get_sub_field('project_image'); ?>
            <div class="div25">
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <img src="<?php echo rw_resize($project_image['id'],221,168);?>" alt="<?php echo $project_image['alt'];?>" title="<?php echo $project_image['title'];?>" width="221" height="168"/>
                        <div class="portfolio-overlay">
                            <a href="<?php if(get_sub_field('project_search_link')==null) echo 'javascript:void(0)'; else the_sub_field('project_search_link');  ?>"><span><i class="fa fa-search fa-lg"></i></span></a>
                            <a rel="nofollow" href="<?php if(get_sub_field('project_site_link')==null) echo 'javascript:void(0)'; else the_sub_field('project_site_link');  ?>" target="_blank"><span><i class="fa fa-link"></i></span></a>
                        </div>
                    </div>
                    <p><?php the_sub_field('project_title'); ?></p>
                </div>
            </div>
                <?php endwhile; ?>
        <?php endif ?>

        </div>
        <a class="btn btn-blue floatr mt15 mb15" href="<?php echo site_url();?>/success-stories/">Load Showcase</a>
        <!--Our Portfolio-->
    </div>
<?php get_footer(1); ?>
<?php get_footer(2); ?>
<?php get_footer(3); ?>
<?php get_footer(); ?>