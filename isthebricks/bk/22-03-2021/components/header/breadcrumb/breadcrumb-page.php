
<?php
$show_breadcrumb = get_post_meta( get_the_ID(), 'shelder_metabox_show_breadcrumb', true );

if ( $show_breadcrumb != 'off' ) {
?>
<section class="page-title centred">
	<div class="auto-container">
		<div class="content-box">
			<div class="title">
				<h1><?php the_title(); ?></h1>
			</div>
			<?php if (function_exists('bcn_display')) : ?>
			<ul class="bread-crumb clearfix">
			<?php bcn_display(); ?>
			</ul>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php } ?>