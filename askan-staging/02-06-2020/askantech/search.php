<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<section class="content">
    <!--innerbanner + title-->
    <div class="div100">
        <div class="innerbanner blog-banner">
            <div class="wrapper"><h1>Search</h1></div>
        </div>
    </div>
    <div class="div100 mt25 ">
        <div class="wrapper">
            <div class="100">
                <!--left content-->
                <div class="div70 success-stories-inner">

        <?php if ( have_posts() ) : ?>

              <?php printf( __( 'Search Results for: %s', 'Askantech' ), get_search_query() ); ?>

            <?php while(have_posts()): the_post(); ?>

                <div class="blog-container">
                    <div class="div40">
                        <div class="blog-image">
                            <img src="<?php if(get_post_thumbnail_id()) { echo rw_resize(get_post_thumbnail_id(),235,185); } else { echo 'http://askan.kannanr.com/wp-content/themes/askantech/images/askantech-blog.png';} ?>" height="185" width="235"/>
                            <div class="blog-comment"></div>
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
            <?php endwhile; ?><?php endif; ?>
    </div>

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
	</section>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>