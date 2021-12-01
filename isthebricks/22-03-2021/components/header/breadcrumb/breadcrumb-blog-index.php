<?php
$blog_page_header_text = shelder_get_options('blog_page_header_text');
?>
<section class="page-title centred">
	<div class="auto-container">
		<div class="content-box">
			<div class="title">
				<?php if($blog_page_header_text){?>
				<h1><?php echo esc_html($blog_page_header_text); ?></h1>
				<?php }else{ ?>
					<h1><?php esc_html_e('Blog Posts','shelder'); ?></h1>
				<?php } ?>
			</div>
			<?php if (function_exists('bcn_display')) : ?>
			<ul class="bread-crumb clearfix">
			<?php bcn_display(); ?>
			</ul>
			<?php endif; ?>
		</div>
	</div>
</section>
