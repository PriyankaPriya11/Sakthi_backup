<!-- Post Roll -->
<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix posts-loop'); ?>>

	<?php if ( has_post_thumbnail() ) { ?>

		<div class="row">

			<div class="col-sm-4">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
			 		<?php the_post_thumbnail( 'medium_large', array( 'class' => 'thumbnail img-responsive' )); ?>
				</a>
			</div>

			<div class="col-sm-8">
				<header class="entry-header">
					<!-- The Post Title -->
					<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
					<!--Entry Meta for Posts Only-->
					<!--<?php if ( is_category( 'blog' ) ) { surge_entry_meta(); } ?>-->
				</header>
				<!-- Init Surge Excerpt -->
				<?php surge_custom_excerpt(); ?>
			</div>

		</div>

	<?php } else { ?>

		<header class="entry-header">
			<!-- The Post Title -->
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			<!--Entry Meta for Posts Only-->
			<?php if ( is_category( 'blog' ) ) { surge_entry_meta(); } ?>
		</header>

		<!-- Init Surge Excerpt -->
		<?php surge_custom_excerpt(); ?>

	<?php } ?>

	<footer class="entry-footer">
		<a class="read-more" href="<?php the_permalink(); ?>"><?php _e( 'Continue reading', 'surge' ); ?> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
		<?php surge_edit_entry(); ?>
	</footer>

</article>