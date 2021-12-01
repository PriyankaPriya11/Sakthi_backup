<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        
        <?php
            surge_site_head_meta();
        ?>
        <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,400italic,700italic,300italic%7CCinzel:400,700%7CRaleway:400,700,300%7COpen+Sans:400,300,300italic,400italic,700,700italic%7CDancing+Script:400,700%7CFjalla+One%7CArvo:400,400italic,700,700italic%7CMargarine%7COswald:400,700,300%7CPT+Serif:400,400italic,700,700italic%7CMerriweather:400,300italic,300,400italic,700italic,700%7CUbuntu:400,300italic,300,400italic,700,700italic%7CLobster%7CPinyon+Script%7CHenny+Penny' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://mismile.com/wp-content/themes/legacy/framework/assets/css/bootstrap.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <link href="<?php echo get_template_directory_uri(); ?>/framework/assets/css/bootstrap.min.css" rel="stylesheet">
            <script src="<?php echo get_template_directory_uri(); ?>/framework/assets/js/bootstrap.min.js"></script>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
        <?php get_template_part ('mods/css/fonts-colors')?>
        <?php get_template_part ('mods/css/navcss')?>

    </head>
    <body <?php body_class(); ?>>