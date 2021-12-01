<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Surge
 * @since Surge 1.cf0c645
 */

get_header(); ?>

<!-- Content Area -->
<div id="main-content">
    <div class="container">
        <div class="row">
            <main class="col-md-12 clearfix">
            	<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title"><?php _e( '404. Apologies! That page can&rsquo;t be found.', 'surge' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'surge' ); ?></p>

						<?php get_search_form(); ?>
					</div><!-- .page-content -->
				</section><!-- .error-404 -->
            </main>
        </div>
    </div>
</div>
<?php get_footer();
