<?php
/**
 * Template Name: Archives
 */
get_header(); ?>
<?php

$args = array(
    'type'                     => 'post',
    'child_of'                 => 0,
    'parent'                   => '',
    'orderby'                  => 'name',
    'order'                    => 'ASC',
    'hide_empty'               => 1,
    'hierarchical'             => 1,
    'exclude'                  => '',
    'include'                  => '',
    'number'                   => '',
    'taxonomy'                 => 'category',
    'pad_counts'               => false

);
$categories = get_categories( $args );

?>

<section class="content">
    <!--innerbanner + title-->
    <div class="div100">
        <div class="innerbanner blog-banner">
            <div class="wrapper"><h1>Blog - Category</h1></div>
        </div>
    </div>
    <!--innerbanner + title-->
    <!--breadcrumb-->
    <div class="div100">
        <div class="wrapper">
            <div class="breadcrumb">
                <a href="<?php echo site_url(); ?>">Home</a> >> <a class="current" href="<?php echo site_url(); ?>/archive"/>Archive</a>
            </div>
        </div>
    </div>
    <!--breadcrumb-->
    <div class="div100 mt25 ">
        <div class="wrapper">
            <div class="100">
                <!--left content-->
                <div class="div70 success-stories-inner">
                    <div class="inner-main-title"><?php echo 'Archives: '.get_the_date( _x( 'F Y', 'monthly archives date format' ) ); ?></div>
                    <div class="div100"><hr class="sepl" /></div>
                    <div class="div100">
                        <?php// query_posts('category_name=CATEGORYNAME&showposts=5'); ?>
                        <?php
                        /*$args = array ( 'category' => ID, 'posts_per_page' => 5);
                        $myposts = get_posts( $args );
                        foreach( $myposts as $post ) : setup_postdata($post); */?>
                        <?php //print_r(category); ?>
                        <?php if(have_posts()): ?>

                            <?php while (have_posts()) : the_post();?>

                                <div class="blog-container">
                                    <div class="div40">
                                        <div class="blog-image">
					<?php $thumbnail = get_post( get_post_thumbnail_id() ); ?>
                                            <img src="<?php if(get_post_thumbnail_id()) { echo rw_resize(get_post_thumbnail_id(),235,185); } else { echo get_template_directory_uri()."/images/askantech-blog.png";} ?>"  alt="<?php if(get_post_thumbnail_id()) { echo get_post_meta( $thumbnail->ID, '_wp_attachment_image_alt', true );} else { echo "askantech-blog"; } ?>"
                                                     title="<?php if(get_post_thumbnail_id()) { echo $thumbnail->post_title; } else { echo "askantech-blog"; } ?>" height="185" width="235"/>
                                            <div class="blog-comment"><?php $comments_count = wp_count_comments( post_id );
                                                    echo $comments_count->total_comments ?> </div>
                                        </div>
                                    </div>
                                    <div class="div60">
                                        <div class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                                        <div class="blog-date"><?php the_time('M d Y'); ?></div>
                                        <div class="blog-tag"><a href="javascript:void(0);">Wordpress</a> , <a href="javascript:void(0);">CMS</a> </div>
                                        <p><?php the_excerpt(); ?></p>
                                        <a href="<?php the_permalink(); ?>">Read more</a>
                                    </div>
                                </div>
                            <?php endwhile; ?> <?php endif; ?> <?php //endforeach; ?>
                    </div>
                </div>
                <!--left content-->
                <!--right content-->
                <div class="div30">
                    <div class="blog-sidebar">

                        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                            <div id="secondary" class="widget-area" role="complementary">
                                <?php dynamic_sidebar( 'sidebar-1' ); ?>
                            </div>
                        <?php endif; ?>

                    </div>

                </div>
                <!--right content-->
            </div>
        </div>
    </div>
<?php get_footer(); ?>