
<?php
/**
 * Template Name: Login
 */
get_header();
 ?>
<!-- subheader begin -->

<div class="main-container" id="main-container">
<?php if (have_posts()){ ?>
    
        <?php while (have_posts()) : the_post()?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    
    <?php }else {
        echo 'Page Login For Page Builder'; 
    }?>
</div>
<?php get_footer(); ?>