<?php
$footer_animation_shape = shelder_get_options('footer-animation-shape');
$footer_left_bg = shelder_get_options('footer-left-bg');


$footer_right_widget_elementor = rwmb_meta( 'shelder_metabox_select_footer_widget' );

if(!$footer_right_widget_elementor){
$footer_right_widget_elementor = shelder_get_options('footer_right_widget_elementor');
}


$footer_style_select = get_post_meta( get_the_ID(), 'shelder_metabox_footer_style_select', true );
if(!$footer_style_select){
	$footer_style_select      		= shelder_get_options('footer_style');
}

if (class_exists('\\Elementor\\Plugin')) {
	if (is_array($footer_right_widget_elementor) && !empty($footer_right_widget_elementor)) :
		$pluginElementor = \Elementor\Plugin::instance();
	
?>
<?php if($footer_style_select == '2'){?>
	
	<?php	

		foreach ($footer_right_widget_elementor as $single_value) {
			$shelder_all_save_element = $pluginElementor->frontend->get_builder_content($single_value);
			echo do_shortcode($shelder_all_save_element);
		} ?>

<?php }else{ ?>

<div class="footer-top bg-color-1">
	<?php if($footer_left_bg){ ?>
	<figure class="image-layer wow slideInLeft animated animated" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="<?php echo esc_url($footer_left_bg['url']);?>" alt="<?php esc_attr_e('Footer Left Background','shelder');?>"></figure>
	<?php } ?>
	<div class="auto-container">
		<div class="widget-section">
			<div class="pattern-scale"></div>
		<?php	
		foreach ($footer_right_widget_elementor as $single_value) {
			$shelder_all_save_element = $pluginElementor->frontend->get_builder_content($single_value);
			echo do_shortcode($shelder_all_save_element);
		} ?>
		</div>
	</div>
</div>
<?php } ?>
<?php
		
	endif;
}