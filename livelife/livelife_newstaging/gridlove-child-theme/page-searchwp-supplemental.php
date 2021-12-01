<?php
/* 
*
*
*
**Template Name: SearchWP Supplemental Search Results
*
* 
*
*
*/
	global $post;
		// retrieve our search query if applicable
		$query = isset( $_REQUEST['swpquery'] ) ? sanitize_text_field( $_REQUEST['swpquery'] ) : '';
		//print_r($query);
		// retrieve our pagination if applicable
		if(trim($query) == ''){
			get_template_part('template-parts/page/search-page');
			return false;
		}

		$swppg = isset( $_REQUEST['swppg'] ) ? absint( $_REQUEST['swppg'] ) : 1;
		if ( class_exists( 'SWP_Query' ) ) {
			$engine = 'supplemental_engine'; // taken from the SearchWP settings screen
			$swp_query = new SWP_Query(
				// see all args at https://searchwp.com/docs/swp_query/
				array(
					's'      => $query,
					'engine' => $engine,
					'page'   => $swppg,
					'posts_per_page' => 10,
				)
			);
			$GLOBALS[ 'result_count' ] = count($swp_query->posts); 
			//print_r($swp_query);
			// set up pagination
			$pagination = paginate_links( array(
				'format'  => '?swppg=%#%',
				'current' => $swppg,
				'total'   => $swp_query->max_num_pages,
			) );
		} ?>
		<?php get_header('search'); ?>

	<?php if( $cover = gridlove_get_cover_layout() ) : ?>
    <?php get_template_part( 'template-parts/cover/layout-' . absint( $cover ) ); ?>
	<?php endif; ?>

	<?php get_template_part('template-parts/ads/below-header'); ?>
	<!--div class="cc-page-loader">
		<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
	</div>
    <div id="content" class="gridlove-site-content container" style="display:none;"-->
    <div id="content" class="gridlove-site-content container" style="display:none;">
        <div class="gridlove-module module-type-posts <?php echo (!gridlove_has_combo_layout() && gridlove_get_archive_layout_type() == 'masonry') ? "gridlove-module-layout-" . gridlove_get_archive_layout_type() : '';?>">
            <?php echo gridlove_get_archive_heading(); ?>
			
			<div class="cc-wrapp-search-pages">
				<div class="row gridlove-posts yoyo2">
					<?php if($GLOBALS[ 'result_count' ] > 3 ){?>
					<div class="col-lg-12 col-md-12 col-sm-12 layout-simple ads_top" style="display:none;">
						<article class="gridlove-post gridlove-post-b gridlove-box  post-<?php echo $post->ID; ?>">
							<div class="box-inner-ptbr box-col-b entry-sm-overlay">
								<!--div class="ads_grey">Ads</div-->
								<div id="ads_top" class="box-inner-ellipsis">
	
								</div>
							</div>
						</article>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 layout-simple cc-mobile-relatedResults" style="display:none;">
						<article class="gridlove-post gridlove-post-b gridlove-box  post-<?php echo $post->ID; ?>">
							<div class="box-inner-ptbr box-col-b entry-sm-overlay">
								<div class="cc-related-heading">RELATED SEARCHES</div>
								<div id="relatedResults-mobile">
									<div id="relatedResults" class="box-inner-ellipsis relatedResults"></div>
								</div>
							</div>
						</article>
					</div>
					<?php } ?>
					<?php if ( ! empty( $query ) && isset( $swp_query ) && ! empty( $swp_query->posts ) ) { ?>
					<?php $ad_no=1; foreach ( $swp_query->posts as $post ) {
						//print_r($post);
						setup_postdata( $post );
						// output the result
						?>
						<div class="col-lg-12 col-md-12 col-sm-12 layout-simple">
							<article class="gridlove-post gridlove-post-b gridlove-box  post-<?php echo $post->ID; ?>">
							<div class="box-inner-ptbr box-col-b entry-sm-overlay">
							<div class="box-inner-ellipsis">
								<h2 class="entry-title h3">
									<a class="google-clk" href="<?php echo get_the_permalink(); ?>" target="_blank">
										<?php the_title(); ?>
									</a>
								</h2>
								<div class="resultDisplayUrlPane">
									<a target="_blank" class="resultDisplayUrl google-clk" href="<?php echo get_the_permalink(); ?>">
										<?php echo site_url(); ?>
									</a>
								</div>
								<div class="entry-content">
									<?php echo wp_trim_words( get_the_excerpt(),50,''); //the_excerpt(); //echo wp_trim_words( get_the_content(),55); //the_excerpt(); ?>
								</div>
							</div>
							</div>
							</article>
						</div>
						<?php if($ad_no == 2): ?>
						<div class="col-lg-12 col-md-12 col-sm-12 layout-simple mainResults" style="display:none;">
							<article class="gridlove-post gridlove-post-b gridlove-box  post-<?php echo $post->ID; ?>">
								<div class="box-inner-ptbr box-col-b entry-sm-overlay">
									<!--<div class="mainResults">Main Ads</div>-->
									<div id="mainResults" class="box-inner-ellipsis relatedResults"></div>
								</div>
							</article>
						</div>
						<?php endif; ?>
						<?php  $ad_no++; } ?>
					<?php wp_reset_postdata(); // pagination
					} else { ?>
						<p>Sorry your search returned no results, please try again.</p>
					<?php } if($GLOBALS[ 'result_count' ] > 3 ){ ?>
						<div class="col-lg-12 col-md-12 col-sm-12 layout-simple ads_bottom" style="display:none;">
							<article class="gridlove-post gridlove-post-b gridlove-box  post-<?php echo $post->ID; ?>">
								<div class="box-inner-ptbr box-col-b entry-sm-overlay">
									<!--div class="ads_grey">Ads</div-->
									<div id="ads_bottom" class="box-inner-ellipsis">
			
									</div>
								</div>
							</article>
						</div>
					<?php } ?>
				</div>
				<?php if($GLOBALS[ 'result_count' ] > 3 ){ ?> 
					<?php if(get_field('related_search',8214)==true){?>
						<!--<div class="cc-sidebar-content" style="display:none;">
							<div class="cc-sidebar-content-fixed">
								<div class="cc-related-heading">RELATED SEARCHES</div>
								<div id="relatedResults"></div>
							</div>
						</div>-->
					<?php } ?>
				<?php } ?>
			</div>
			
			<?php if ( $swp_query->max_num_pages > 1 ) { ?>
					<div class="gridlove-pagination">
						<?php echo wp_kses_post( $pagination ); ?>
					</div>
			<?php } ?>
        </div>

        <?php get_template_part( 'template-parts/pagination/'. gridlove_get_current_pagination() ); ?>
    </div>
<?php get_footer(); ?>