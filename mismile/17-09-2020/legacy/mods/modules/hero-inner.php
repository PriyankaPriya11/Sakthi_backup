<!-- Header for content inner-hero -->
<div id="hero">
	<div class="inner-hero hidden-xs hidden-sm">
		<img src="<?php get_template_part ('framework/outputs/img-link'); ?>inner-hero/<?php if( get_field( 'hero_image' ) ) { echo get_field( 'hero_image' ); } else { echo 'header-1'; } ?>.jpg" alt="inner-hero-image" width="100%" height="auto">
	</div>
</div>