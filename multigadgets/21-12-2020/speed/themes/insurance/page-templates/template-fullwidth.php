<?php
/**
 * Template Name: Full Width
 */
get_header();
 ?>
<!-- subheader begin -->
<div class="main-container" id="main-container">
<div class="tp-error" id="tp-error">

<?php if (have_posts()){ ?>
    
        <?php while (have_posts()) : the_post()?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    
    <?php }else {
        echo 'Page Blog Full For Page Builder'; 
    }?>
</div>
</div>
<?php get_footer(); ?>