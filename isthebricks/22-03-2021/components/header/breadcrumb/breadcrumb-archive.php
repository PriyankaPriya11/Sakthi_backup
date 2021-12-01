<section class="page-title centred">
	<div class="auto-container">
		<div class="content-box">
			<div class="title">
				<h1><?php echo esc_html( get_the_archive_title() ); ?></h1>
			</div>
			<?php if (function_exists('bcn_display')) : ?>
			<ul class="bread-crumb clearfix">
			<?php bcn_display(); ?>
			</ul>
			<?php endif; ?>
		</div>
	</div>
</section>