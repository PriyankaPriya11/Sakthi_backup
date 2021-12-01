<?php
/* 
*
*
*
**Template Name: SDK Search
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
		
		if(isset($_REQUEST['rtds'])){
			$RTDS = $_REQUEST['rtds'];
		} else if(isset($_REQUEST['RTDS'])){
			$RTDS = $_REQUEST['RTDS'];
		} else {
			$RTDS = 1;
		}

		$swppg = isset( $_REQUEST['swppg'] ) ? absint( $_REQUEST['swppg'] ) : 1;
		if ( class_exists( 'SWP_Query' ) ) {
			$engine = 'supplemental_engine'; // taken from the SearchWP settings screen

			if($_REQUEST['TYPE'] == 'EXACT'){
				$engine = 'supplemental_engine';
			} else if ($_REQUEST['TYPE'] == 'BROAD') {
				$engine = 'related_key_search';
			}
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
			//print_r($swp_query->posts);
			// set up pagination
			$pagination = paginate_links( array(
				'format'  => '?swppg=%#%',
				'current' => $swppg,
				'total'   => $swp_query->max_num_pages,
			) );
		} ?>
		<?php //get_header('search-new'); 
		get_header('search-sys'); ?>

	<?php if( $cover = gridlove_get_cover_layout() ) : ?>
    <?php get_template_part( 'template-parts/cover/layout-' . absint( $cover ) ); ?>
	<?php endif; ?>

	<?php get_template_part('template-parts/ads/below-header'); ?>
	<div class="cc-page-loader">
		<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
	</div>
    <div id="content" class="gridlove-site-content container new-search" style="display:none;">
    <!--<div id="content" class="gridlove-site-content container new-search" style="display:none;">-->
        <div class="gridlove-module module-type-posts <?php echo (!gridlove_has_combo_layout() && gridlove_get_archive_layout_type() == 'masonry') ? "gridlove-module-layout-" . gridlove_get_archive_layout_type() : '';?>">
            <?php echo gridlove_get_archive_heading(); ?>
			
			<div class="cc-wrapp-search-pages">
				<div class="row gridlove-posts yoyo2">
					<?php if($GLOBALS[ 'result_count' ] > 3 ){?>
					<div class="col-lg-12 col-md-12 col-sm-12 layout-simple ads_top" style="display:none;">
						<article class="gridlove-post gridlove-post-b gridlove-box  post-<?php echo $post->ID; ?>">
							<div class="box-inner-ptbr box-col-b entry-sm-overlay">
								<div data-s1search="mainline-top"></div>
							</div>
						</article>
					</div>
					<?php //if(wp_is_mobile()):
						if($RTDS == 1): ?>
					<div class="col-lg-12 col-md-12 col-sm-12 layout-simple cc-mobile-relatedResults" style="display:none;">
						<article class="gridlove-post gridlove-post-b gridlove-box  post-<?php echo $post->ID; ?>">
							<div class="box-inner-ptbr box-col-b entry-sm-overlay">
								<!--<div class="cc-related-heading">RELATED SEARCHES</div>-->
								<div id="relatedResults-mobile">
								<div id="relatedResults" data-s1search="sidebar"></div>
								</div>
							</div>
						</article>
					</div>
					<?php //endif; 
						endif; ?>
					<?php } ?>
					<?php if ( ! empty( $query ) && isset( $swp_query ) && ! empty( $swp_query->posts ) ) { ?>
					<?php $ad_no = 1; foreach ( $swp_query->posts as $post ) {
						//print_r($post);
						setup_postdata( $post );
						// output the result
						?>
<div class="col-lg-12 col-md-12 col-sm-12 layout-simple ad-no-<?php echo $ad_no; ?>" style="display:none";>
							<article class="gridlove-post gridlove-post-b gridlove-box  post-<?php echo $post->ID; ?>">
							<div class="box-inner-ptbr box-col-b entry-sm-overlay">
							<div class="box-inner-ellipsis">
								<h2 class="entry-title h3">
									<a class="google-clk" href="<?php echo get_the_permalink(); ?>" target="_blank" >
									<?php $title = get_the_title(); 
										if(wp_is_mobile()):
											if (strlen($title) > 33):	
										$title = substr($title,0,33).'...';
											endif;
										echo $title;
										else:
										echo $title;
										endif;										
										?>
									</a>
								</h2>
								<div class="resultDisplayUrlPane">
									<a class="resultDisplayUrl google-clk" target="_blank" href="<?php echo get_the_permalink(); ?>"><?php echo get_the_permalink(); ?></a>
								</div>
								<div class="entry-content">
									<?php 
									echo wp_trim_words( get_the_content(), 40)
									/*$content = substr(get_the_excerpt(),0, 320);
											echo $content;*/
										//echo wp_trim_words( get_the_excerpt(),56,''); //the_excerpt(); //echo wp_trim_words( get_the_content(),55); //the_excerpt(); ?>
								</div>
							</div>
							</div>
							</article>
						</div>
						<?php if($ad_no == 2): ?>
						<div class="col-lg-12 col-md-12 col-sm-12 layout-simple mainResults" style="display:none;">
							<article class="gridlove-post gridlove-post-b gridlove-box  post-<?php echo $post->ID; ?>">
								<div class="box-inner-ptbr box-col-b entry-sm-overlay">
									<div id="mainResults" data-s1search="mainline-aylf"></div>
								</div>
							</article>
						</div>
						<?php endif; ?>
						<?php if($ad_no == 4): /* || ($ad_no == 4 && is_page(8214)) */ ?>
						<div class="col-lg-12 col-md-12 col-sm-12 layout-simple mainResults"> <!--  style="display:none;" -->
							<article class="gridlove-post gridlove-post-b gridlove-box  post-<?php echo $post->ID; ?>">
								<div class="box-inner-ptbr box-col-b entry-sm-overlay">
								<div data-s1search="mainline-algo"></div>
								</div>
							</article>
						</div>
						<?php endif; ?>
						<?php $ad_no++; } ?>
					<?php wp_reset_postdata();
					// pagination
					
					} else {
						?><p>Sorry your search returned no results, please try again.</p>
					<?php
						} if($GLOBALS[ 'result_count' ] > 3 ){?>
					<div class="col-lg-12 col-md-12 col-sm-12 layout-simple ads_bottom" style="display:none;">
						<article class="gridlove-post gridlove-post-b gridlove-box  post-<?php echo $post->ID; ?>">
							<div class="box-inner-ptbr box-col-b entry-sm-overlay">
								<div data-s1search="mainline-bottom"></div>
							</div>
						</article>
					</div>
					<?php } ?>
				</div>
				<?php if($GLOBALS[ 'result_count' ] > 3 ){ ?> 
					<?php if(get_field('related_search',8214)==true){?>
						<?php //if(!wp_is_mobile()):
							if($RTDS == 2): ?>
							<div class="cc-sidebar-content relatedResults layout-simple cc-mobile-relatedResults" style="display:none;">
								<div class="cc-sidebar-content-fixed">
									<!--<div class="cc-related-heading">RELATED SEARCHES</div>
									<div id="relatedResults"  class="relatedResults"></div>-->
									<div id="relatedResults" data-s1search="sidebar"></div>
								</div>
							</div>
						<?php //endif; 
							endif; ?>
					<?php } ?>
				<?php } ?>
			</div>
			
			<?php if ( $swp_query->max_num_pages > 1 ) { ?>
				<div data-s1search="pagination"></div>
			<?php } ?>
        </div>

        <?php get_template_part( 'template-parts/pagination/'. gridlove_get_current_pagination() ); ?>
    </div>
<?php //get_footer('search-new'); 
	get_footer('search-sys');?>