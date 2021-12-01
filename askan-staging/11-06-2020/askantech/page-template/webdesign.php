<?php
/**
 * Template Name: Web Design
 */
echo get_header(); ?>

<section class="content">
    <!--innerbanner + title-->
    <div class="div100">
        <div class="innerbanner service-banner">
            <div class="wrapper"><h1><?php get_field('service_type_title')? the_field('service_type_title'):'';?></h1></div>
        </div>
    </div>
    <!--innerbanner + title-->
    <!--breadcrumb-->
    <div class="div100">
        <div class="wrapper">
            <div class="breadcrumb">
                <a href="<?php echo site_url(); ?>">Home</a> >> <a href="<?php echo site_url(); ?>/services/" />Services</a> >> <a class="current" href="#"/><?php get_field('service_type_title')? the_field('service_type_title'):'';?></a>
            </div>
        </div>
    </div>
    <!--breadcrumb-->
    <div class="div100 mt25">
        <div class="wrapper">
            <div class="100">
                <div class="inner-main-title"><?php get_field('service_type_title')? the_field('service_type_title'):'';?></div>
                <div class="div100"><hr class="sepl" /></div>
            </div>
            <div class="100">
                <?php get_field('service_type_description')? the_field('service_type_description'):'';?>
            </div>

            <div class="div100 mt40">

               <?php 
			   $count=0;
			   if(get_field('service_explanation')):
                        while(has_sub_field('service_explanation')):
                            $service_explanation_image = get_sub_field('service_explanation_image')?>
                <div class="div50 services-inner">
                    <div class="div95">
                        <div class="100">
                            <div class="div10">
                                <img src="<?php echo $service_explanation_image['url'];?>" alt="<?php echo $service_explanation_image['alt'];?>" title="<?php echo $service_explanation_image['title'];?>"/>
                            </div>
                            <div class="div90">
                                <?php  if(get_sub_field('service_explanation_title')) { ?>
								<div class="service-inner-main-title"><?php the_sub_field('service_explanation_title');?> </div>
                                <div class="div100"><hr class="sepl" /></div>
								<?php } ?>
                            </div>
                        </div>
                        <div class="div100">
                            <?php
                            the_sub_field('service_explanation_content') ?>
                        </div>
                    </div>
                </div>
				<?php $count++; 
				if($count == 2){
					echo "<div class='div100 mb5'/>&nbsp;</div>";
				}
				?>
                <?php endwhile; endif; ?>
				
				<div class="div100 service-explanation">
					<?php the_content(); ?>
				</div>

            </div>

        </div>
    </div>

<?php get_footer(1); ?>
<?php get_footer(2); ?>
<?php get_footer(3); ?>
<?php get_footer(); ?>