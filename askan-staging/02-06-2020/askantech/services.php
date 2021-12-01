<?php
/**
 * Template Name: Services
 */
echo get_header(); ?>

<section class="content">
    <!--innerbanner + title-->
    <div class="div100">
        <div class="innerbanner service-banner">
            <div class="wrapper"><h1><?php get_field('services')? the_field('services'):'';?></h1></div>
        </div>
    </div>
    <!--innerbanner + title-->
    <!--breadcrumb-->
    <div class="div100">
        <div class="wrapper">
            <div class="breadcrumb">
                <a href="<?php echo site_url(); ?>">Home</a> >> <a class="current" href="#"/>Services</a>
            </div>
        </div>
    </div>
    <!--breadcrumb-->
    <div class="div100 mt25">
        <div class="wrapper">
            <div class="inner-main-title"><?php get_field('take_a_look')? the_field('take_a_look'):'';?></div>
            <div class="div100"><hr class="sepl" /></div>

            <div class="100">
                <?php get_field('we_offer_software_development')? the_field('we_offer_software_development'):'';?>
            </div>

            <div class="div100 mt40">
                <?php if(get_field('our_services')): ?>
                    <?php while(has_sub_field('our_services')):
                        $service_images = get_sub_field('service_images'); ?>
                <div class="div50 services">
                    <div class="div25"><img src="<?php echo $service_images['url'];?>" alt="<?php echo $service_images['alt'];?>" title="<?php echo $service_images['title'];?>"/></div>
                    <div class="div75">
                        <div class="service-title"><?php the_sub_field('service_title');?></div>
                        <p><?php the_sub_field('service_description');?></p>
                            <a class="readmore" href="<?php if(get_sub_field('service_read_more')==null) echo "javascript:void(0)";else the_sub_field('service_read_more')?>"/>Read More</a>
                    </div>
                </div>
                    <?php endwhile; ?>
                <?php endif ?>

            </div>

        </div>
    </div>

<?php get_footer(1); ?>
<?php get_footer(2); ?>
<?php get_footer(3); ?>
<?php get_footer(); ?>