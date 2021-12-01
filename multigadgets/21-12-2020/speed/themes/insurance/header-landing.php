<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js lt-ie9" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<?php global $insurance_option; ?>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!-- Favicons
	================================================== -->
	<?php if($insurance_option['favicon']['url'] !=''){ ?>
    <link rel="icon" href="<?php echo esc_url($insurance_option['favicon']['url']); ?>" type="image/x-icon">    
    <?php } ?>	
<?php wp_head(); ?>
</head>

<body <?php body_class('bg'); ?> >
<div class="container">
<div class="row lp-header"><!-- lp-header -->
    <div class="col-md-4"> <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"> <img src="<?php echo esc_url($insurance_option['logo']['url']); ?>" alt="Peace Insurance Logo" class="img-responsive"> </a> </div>
    <div class="col-md-8 text-right"><span class="call"><?php _e('Call:','insurance') ?> <?php echo esc_attr($insurance_option['phone_2']); ?></span> </div>
 </div>
 </div>
