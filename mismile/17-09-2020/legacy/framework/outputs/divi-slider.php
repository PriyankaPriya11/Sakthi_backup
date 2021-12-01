<?php

$page = get_page_by_path('divi-slider');

if ( !empty($page) ) { ?>

	<div class="divi-slider">

		<?php

		// WP_Query arguments
		$args = array (
			'pagename'               => 'divi-slider',
			'post_per_page'          => '1',
		);

		// The Query
		$query = new WP_Query( $args );

		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				
				// Adding support for Archive Pages
				if(is_archive()) {
				
					$content = get_the_content(); 
						
					echo '<div class="et_builder_outer_content" id="et_builder_outer_content">
				<div class="et_builder_inner_content et_pb_gutters3">'.do_shortcode($content).'</div></div>';

				} else { // Default Pages
					the_content();	
				}

			} //Endwhile;
		} else {
			// no posts found
		}

		// Restore original Post Data
		wp_reset_postdata();

		?>

	</div>

<?php

} else {

	echo _e('Divi Slider page does not exist, please create a page called "Divi Slider".', 'surge');
	echo '<img src="http://placehold.it/1920x600/1abc9c/2c3e50?text=Divi+Slider+page+does+not+exist,+please+create+a+page+called+Divi+Slider." alt="inner-hero-image" width="100%" height="auto">';

}