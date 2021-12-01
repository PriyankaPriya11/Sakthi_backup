<?php
/**
 * Template Name: Success Stories page
 */
get_header(); ?>
<section class="content">
    <!--innerbanner + title-->
    <div class="div100">
        <div class="innerbanner success-banner">
            <div class="wrapper"><h1><?php get_field('success_stories')? the_field('success_stories'):'';?></h1></div>
        </div>
    </div>
    <!--innerbanner + title-->
    <!--breadcrumb-->
    <div class="div100">
        <div class="wrapper">
            <div class="breadcrumb">
                <a href="<?php echo site_url(); ?>">Home</a> >> <a class="current" href="#"/>Success Stories</a>
            </div>
        </div>
    </div>
    <!--breadcrumb-->
    <div class="div100 mt25">
        <div class="wrapper">
            <div class="inner-main-title"><?php get_field('what_we_have_done')? the_field('what_we_have_done'):'';?></div>
            <div class="div100"><hr class="sepl" /></div>

            <div class="100">
                <?php get_field('view_our_successful_projects')? the_field('view_our_successful_projects'):'';?>
            </div>

            <div class="div100 mt40">

            <?php if(get_field('clients_says')): ?>
            <?php while(has_sub_field('clients_says')):
            $websiteimages = get_sub_field('website-images'); ?>
                    <div class="view view-second">
                        <img src="<?php echo $websiteimages['url'];?>" alt="<?php echo $websiteimages['alt'];?>" title="<?php echo $websiteimages['title'];?>"/>
                        <div class="mask"></div>
                        <div class="content">
                            <h2><?php the_sub_field('website_name');?></h2>
                            <p><?php the_sub_field('website-content');?></p>
                            <?php if(get_sub_field('read_more')!=null): ?><a href="<?php the_sub_field('read_more');?>" class="info">Read More</a><?php endif; ?>
                        </div>
                    </div>
              <?php endwhile; ?>
            <?php endif ?>
            </div>

        </div>
    </div>

         <?php get_footer(1); ?>
        <?php get_footer(); ?>