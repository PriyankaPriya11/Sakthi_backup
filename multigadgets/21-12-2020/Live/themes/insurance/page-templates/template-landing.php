
<?php
/**
 * Template Name: Landing
 */
get_header('landing');
 ?>
<!-- subheader begin -->


<?php if (have_posts()){ ?>
    
        <?php while (have_posts()) : the_post()?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    
    <?php }else {
        echo 'Page Landing For Page Builder'; 
    }?>

<?php get_footer('landing'); ?>