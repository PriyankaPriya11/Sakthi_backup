<?php
$header_style = get_query_var( 'header_type' );
if ( ! $header_style ) {
	$header_style = shelder_get_options( 'header_style' );
}

if (has_custom_logo()) {
	the_custom_logo();
} elseif (!has_custom_logo()) {
?>
<?php if($header_style == 2){ ?>
	<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(SHELDER_IMG_URL . 'logo-2.png'); ?>" alt="<?php esc_attr_e('Shelder Logo', 'shelder'); ?>"></a>
<?php }else{ ?>
	<a class="main-nav__logo" href="<?php echo esc_url(home_url('/')); ?>">
		<img class="main-logo" src="<?php echo esc_url(SHELDER_IMG_URL . 'logo.png'); ?>" alt="<?php esc_attr_e('Shelder Logo', 'shelder'); ?>">
	</a>
<?php } ?>
	<?php
} else {

	if (is_front_page() && is_home()) :
	?>
		<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
	<?php
	else :
	?>
		<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
	<?php
	endif;
	$shelder_description = get_bloginfo('description', 'display');
	if ($shelder_description || is_customize_preview()) :
	?>
		<p class="site-description"><?php echo esc_html($shelder_description); /* WPCS: xss ok. */ ?></p>
<?php
	endif;
}
?>