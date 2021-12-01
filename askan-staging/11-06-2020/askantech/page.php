<?php

echo get_header(); ?>

<section class="content">
    <!--innerbanner + title-->
    <div class="div100">
        <div class="innerbanner service-banner">
            <div class="wrapper"><h1><?php the_title(); ?></h1></div>
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
            <?php the_content();  ?>

        </div>
    </div>

<?php get_footer(1); ?>
<?php get_footer(2); ?>
<?php get_footer(3); ?>
<?php get_footer(); ?>