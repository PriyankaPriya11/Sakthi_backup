<?php
/**
 * Template Name: Home
 */
get_header();
 ?>
<!-- subheader begin -->


<?php if (have_posts()){ ?>
    
        <?php while (have_posts()) : the_post()?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    
    <?php }else {
        echo 'Page Blog Full For Page Builder'; 
    }?>

<?php get_footer(); ?>