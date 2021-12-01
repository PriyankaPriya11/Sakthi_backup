<section class="page-title centred">
	<div class="auto-container">
		<div class="content-box">
		<div class="title">
			<h1>
				<?php 
				if ( have_posts() ) :
					printf( esc_html__( 'Search Results for: %s', 'shelder' ), '<span>' . get_search_query() . '</span>' ); 
				else : 	
					esc_html_e( 'Nothing Found', 'shelder' );
				endif;
				?>
			</h1>
		</div>
		<?php if (function_exists('bcn_display')) : ?>
			<ul class="bread-crumb clearfix">
				<?php bcn_display(); ?>
			</ul><!-- /.breadcrumb -->
		<?php endif; ?>
		</div>
	</div>
</section>