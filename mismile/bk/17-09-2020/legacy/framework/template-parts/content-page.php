<!-- Single.php and Page.php -->
<article id="post-<?php the_ID(); ?>" <?php post_class('post-single'); ?>>

    <header class="entry-header">
    	<!-- The Post Title -->
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<!--Entry Meta for Posts Only-->
		<!--<?php if ( has_category( 'blog') ) { surge_entry_meta(); } ?>-->
	</header><!-- .entry-header -->
	
	<?php the_post_thumbnail( 'medium', array( 'class' => 'thumbnail img-responsive' )); ?>
	
	<!-- Init The Content -->
	<div class="entry-content clearfix">
		<?php the_content(); ?>
	</div>

	<footer class="entry-footer">

		<!-- Entry Meta for Posts Only -->
		<?php surge_entry_meta_bottom(); ?>

		<!-- Init Post Pages. -->
		<?php wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'surge' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			) );
		?>

	</footer>
	
</article>

<?php surge_custom_posts_navigation_links(); ?>