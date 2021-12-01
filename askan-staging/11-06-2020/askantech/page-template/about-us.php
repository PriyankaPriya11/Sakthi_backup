<?php
/**
 * Template Name: About-us page
 */

get_header(); ?>
<section class="content">
<!--innerbanner + title-->
<div class="div100">
    <div class="innerbanner about-banner">
        <div class="wrapper"><h1><?php get_field('about-us-text')? the_field('about-us-text'):'';?></h1></div>
    </div>
</div>
<!--innerbanner + title-->
<!--breadcrumb-->
<div class="div100">
    <div class="wrapper">
        <div class="breadcrumb">
            <a href="<?php echo site_url(); ?>">Home</a> >> <a class="current" href="#"/>About US</a>
        </div>
    </div>
</div>
<!--breadcrumb-->
<div class="div100">
    <div class="wrapper">
        <div class="inner-main-title"><?php get_field('introduction')? the_field('introduction'):'';?></div>
        <div class="div100"><hr class="sepl" /></div>

        <div class="100">
            <h4><strong><?php get_field('matters')? the_field('matters'):'';?></strong></h4>
            <?php get_field('ab-desc')? the_field('ab-desc'):'';?>
        </div>

        <div class="div100 mt40">
            <div class="inner-main-title"><?php get_field('ceo')? the_field('ceo'):'';?></div>
            <div class="div100"><hr class="sepl" /></div>
        </div>
        <div class="100">
        <?php if(get_field('ceo-image')): ?>
        <?php while(has_sub_field('ceo-image')):
        $ceo_img = get_sub_field('ceo-img'); ?>
<div itemscope itemtype="http://schema.org/Person">
            <div class="div25">
                <img itemprop="image" src="<?php echo $ceo_img['url'];?>" alt="<?php echo $ceo_img['alt'];?>" title="<?php echo $ceo_img['title'];?>"/>

            </div>
            <div class="div75">
               <span itemprop="name"><?php the_sub_field('ceo-desc'); ?></span>
            </div>
        <?php endwhile; ?>
        <?php endif ?>
</div>
        </div>
        <div class="div100 mt40">
            <div class="inner-main-title"><?php get_field('why-askan')? the_field('why-askan'):'';?></div>
            <div class="div100"><hr class="sepl" /></div>
        </div>
        <div class="div100 whyaskan">
        <?php if(get_field('why-askan-images')): ?>
        <?php while(has_sub_field('why-askan-images')):
        $why_askan_img = get_sub_field('why-askan-img'); ?>

            <div class="div50 mb15">
          <div class="why-icon"><img src="<?php echo $why_askan_img['url'];?>" alt="<?php echo $why_askan_img['alt'];?>" title="<?php echo $why_askan_img['title'];?>"/>
                </div>
                <div class="why-content">
                    <h4><?php the_sub_field('why-askan-title'); ?></h4>
                    <p><?php the_sub_field('why-askan-desc'); ?></p>
                </div>

            </div>
             <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class="div100 mt40 dispnone">
            <div class="inner-main-title"><?php get_field('ab-expertise')? the_field('ab-expertise'):'';?></div>
            <div class="div100"><hr class="sepl" /></div>
        </div>
    </div>
</div>

<div class="div100 expertisebg">
    <div class="wrapper">
        <div class="expertise-text">
            <?php get_field('ab-expertise-txt')? the_field('ab-expertise-txt'):'';?>
        </div>
    </div>
</div>
    <?php get_footer(1); ?>
    <?php get_footer(); ?>