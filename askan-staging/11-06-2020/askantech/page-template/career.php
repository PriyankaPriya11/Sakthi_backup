<?php
/**
 * Template Name: Career
 */
 get_header(); ?>

<section class="content">
    <!--innerbanner + title-->
    <div class="div100">
        <div class="innerbanner career-banner">
            <div class="wrapper"><h1>career</h1></div>
        </div>
    </div>
    <!--innerbanner + title-->
    <!--breadcrumb-->
    <div class="div100">
        <div class="wrapper">
            <div class="breadcrumb">
                <a href="<?php echo site_url(); ?>">Home</a> >> <a class="current" href="#"/>Career</a>
            </div>
        </div>
    </div>
    <!--breadcrumb-->
    <div class="div100 mt25 ">
        <div class="wrapper">
            <div class="100">
                <div class="inner-main-title"><?php get_field('inner_main_title')? the_field('inner_main_title'):'';?></div>
                <div class="div100"><hr class="sepl" /></div>
            </div>
            <div class="100 career-page">
                <div class="career-title"><?php get_field('why_job_at_askan')? the_field('why_job_at_askan'):'';?></div>
                <p><?php get_field('why_job_at_askan_description')? the_field('why_job_at_askan_description'):'';?>
                </p><br/>
                <div class="career-title"><?php get_field('office_location_title')? the_field('office_location_title'):'';?></div>
                <?php $office_location_image= get_field('office_location_image');?>
                <img src="<?php echo $office_location_image['url'];?>" alt="<?php echo $office_location_image['alt'];?>" title="<?php echo $office_location_image['title'];?>"/>
                <p><?php get_field('office_location_content')? the_field('office_location_content'):'';?></p><br/>

                <div class="div100">
                <div class="div100 owl-slider">
                <?php if(get_field('office_appearance')): ?>
                      <?php while(has_sub_field('office_appearance')):
                             $office_views = get_sub_field('office_views'); ?>
                    <a class="item" href="<?php echo $office_views['url'];?>" rel="prettyPhoto[gallery2]" title="<?php echo $office_views['title'];?>"><img src="<?php echo $office_views['url'];?>" alt="<?php echo $office_views['alt'];?>" title="<?php echo $office_views['title'];?>" width="226" height="169"/></a>
                    <?php endwhile; endif; ?>
                </div>
                </div>

                <div class="div100 mt20">
                    <div class="career-title"><?php get_field('life_at_askan')? the_field('life_at_askan'):''?></div>
                    <p><?php get_field('life_at_askan_description')? the_field('life_at_askan_description'):''?></p><br/>
                    <?php $life_at_askan_image= get_field('life_at_askan_image');?>
                    <!--img src="<?php //echo $life_at_askan_image['url'];?>" alt="<?php //echo $life_at_askan_image['alt'];?>" title="<?php //echo $life_at_askan_image['title'];?>"/-->
					
					<div class="div100 owl-slider">
                    <?php if(get_field('life_at_askan_carousel')): ?>
                      <?php while(has_sub_field('life_at_askan_carousel')):
                             $office_views = get_sub_field('askan_life_gallery'); ?>
                    <a class="item" href="<?php echo $office_views['url'];?>" rel="prettyPhoto[gallery3]" title="<?php echo $office_views['title'];?>"><img src="<?php echo $office_views['url'];?>" alt="<?php echo $office_views['alt'];?>" title="<?php echo $office_views['title'];?>" width="226" height="169"/></a>
                    <?php endwhile; endif; ?>
				</div>
                </div>

                <div class="div100 mt20">
                    <div class="career-title"><?php get_field('join_with_us_title')? the_field('join_with_us_title'):'';?></div>
                    <ul class="job-table">
                        <li class="job-table-title">
                            <span class="job-title">Job Title</span>
                            <span class="job-loc">Job Location</span>
                            <span class="job-desp">Job Objective</span>
                            <span class="job-apply"></span>
                        </li>
                        <?php if(get_field('join_with_us')):
                                while(has_sub_field('join_with_us')):?>
                        <li>
                            <span class="job-title"><?php the_sub_field('career_job_title');?></span>
                            <span class="job-loc"><?php the_sub_field('career_job_location');?></span>
                            <span class="job-desp"><?php the_sub_field('career_job_objective');?></span>
                            <span class="job-apply"><a href="<?php if(get_sub_field('career_job_apply')==null)echo 'javascript:void(0)';else the_sub_field('career_job_apply');?>" class="career-apply-btn" target="_blank">APPLY</a></span>
                        </li>
                                <?php endwhile; endif; ?>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <?php get_footer(); ?>