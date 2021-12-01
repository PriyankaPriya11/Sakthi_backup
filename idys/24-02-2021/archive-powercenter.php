<?php
get_header(); ?>
<div id="blog-page">
<div class="site-wrapper">
<main role="main">  
    <?php
    $a = 1; 
    if ( have_posts() ) : while ( have_posts() ) : the_post();
        $image_id = get_post_thumbnail_id();
        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
        $image_title = get_the_title($image_id);
        if($a == 1) { ?>
            <div class="featured-post hidden-m">
                <div class="featured-image">
                    <img style="width:100%;height:auto;" src="<?php echo get_the_post_thumbnail_url(); ?>" title="<?php echo $image_title; ?>" alt="<?php echo $image_alt; ?>"/>
                </div>
                <div class="container">
                    <div class="featured-details blog-details">
                        <span class="blog-tag-text">FEATURED STORY</span>
                        <h4 class="blog-title">
                            <a href="<?php the_permalink();?> ">
                                <?php the_title();?>
                            </a>
                        </h4>
                        <?php the_excerpt();?>
                        <br>
                        <a class="read-full-featured" href="<?php the_permalink();?>">
                            Read full article
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/slider-arrow.svg" alt="slider arrow" class="next-page" width="44.28" height="13" />
                        </a>
                    </div>
                    <div class="featured-border"></div>
                </div>
            </div>
            <div class="container">
            <div id="dropdown-wrapper-blog">
                <div id="filter-dropdown-title" tabindex="0">View all</div>
                <ul id="blog-category-filters">
                    <li class="active" tabindex="0">
                        <a href="<?php site_url();?>/powercenter/">View all</a>
                    </li>
                    <br>
                    <?php
                    $taxonomy = 'powercenter_topics';
                    $terms = get_terms($taxonomy); // Get all terms of a taxonomy
                    if ($terms && !is_wp_error($terms)):
                        foreach ($terms as $term) {?>
                            <li tabindex="0"><a href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><?php echo $term->name; ?></a></li><br/>
                    <?php } endif;?>
                </ul>
            </div>
            <br>
            <div class="row blog-container blog-container-main center-xs">
        <?php } else { ?>
            <div class="col xs-11 sm-11 md-5 start-xs active-block blog-details-wrap">
                <a class="blog-link-overlay" href="<?php the_permalink();?>"></a>
                <div class="blog-details">
                    <span class="blog-cover">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>"  title="<?php echo $image_title; ?>" alt="<?php echo $image_alt; ?>" />
                    </span>
                    <div class="blog-details-content">
                        <div class="blog-link">
                            <?php
                            $post_id = get_the_ID();
                            $categories = get_the_terms($post_id, 'powercenter_topics');
                            foreach ($categories as $cates) { $category_link = get_category_link($cate->term_id); ?>
                                <a class="blog-tag-text" href="<?php echo $category_link; ?>"><?php echo $cates->name; ?></a>
                            <?php } ?>
                        </div>
                        <h4 class="blog-title"><?php the_title();?></h4>
                        <?php the_excerpt();?>
                    </div>
                </div>
                <div class="hover-line"></div>
            </div>
        <?php } $a++;
        endwhile;
        endif;
        ?>
    <div class="spacer col xs-10 sm-10 md-5 start-xs"></div>
    <div class="blog-footer">
        <div class="blog-buttons">
            <div class="custom_pagination">
            <?php
            the_posts_pagination( array('mid_size'  => 2,'prev_text' => 'Previous','next_text' => 'Next', ) );
            wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
    </div>
    </div>
</main>
</div>
</div>
<?php get_footer();