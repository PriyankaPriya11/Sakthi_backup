<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */
?>
<?php  $link=$_SERVER['REQUEST_URI'];
                 $link_array = explode('/',$link);
    $plink=$link_array['2'];
      $plinks=$link_array['1'];
   
    ?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!-- BOOTSTRAP CSS -->


	<?php wp_head(); ?>

	<link  href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" defer>

					
		<link href="<?php echo get_template_directory_uri(); ?>/css/flaticon.css" rel="stylesheet" media="print" onload="this.media='all'">
		<link href="<?php echo get_template_directory_uri(); ?>/css/animate.css" rel="stylesheet" media="print" onload="this.media='all'">
				
		
	
	 	<link  href="<?php echo get_template_directory_uri(); ?>/css/greenery.css" rel="stylesheet">

		<link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet" media="print" onload="this.media='all'"> 

	<style>
	.p-md{
	    color:#333;
	}
	.navbar-nav li a:hover {
    color: #80a63f !important;
   
}
	.navbar-nav li a {
   
 
}
.elementor-column-gap-default>.elementor-row>.elementor-column>.elementor-element-populated {
    padding: 0px !important; 
}
/* The actual timeline (the vertical ruler) */
.timeline {
  position: relative;
  max-width: 1200px;
  margin: 0 auto;
}

/* The actual timeline (the vertical ruler) */
.timeline::after {
  content: '';
  position: absolute;
  width: 6px;
  background-color:#d1d8e0;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -3px;
}

/* Container around content */
.container1 {
  padding: 10px 40px;
  position: relative;
  background-color: inherit;
  width: 100%;
  
}

/* The circles on the timeline */
.container1::after {
 content: '';
    position: absolute;
    width: 40px;
    height: 40px;
    right: 48.3%;
    background-color: #25c9cc;
    border: 8px solid #fff;
    top: 15px;
    border-radius: 50%;
    z-index: 1;
}


/* Place the container to the left */
.left {
  left: 0;
}

/* Place the container to the right */
.right {
  left: 50%;
}



/* Add arrows to the right container (pointing left) */
.right::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  left: 30px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
  left: -16px;
}

/* The actual content */
.content1 {
  padding: 20px 30px;
  background-color: white;
  position: relative;
  border-radius: 6px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .timeline::after {
  left: 31px;
  }
  
  /* Full-width containers */
  .container1 {
  width: 100%;
  padding-left: 70px;
  padding-right: 25px;
  }
  
  /* Make sure that all arrows are pointing leftwards */
  .container1::before {
  left: 60px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left::after, .right::after {
  left: 15px;
  }
  
  /* Make all right containers behave like the left ones */
  .right {
  left: 0%;
  }
}
</style>
<style>
.dropbtns {
  
  border: none;
}

.dropdowns {
  position: relative;
  display: inline-block;
}

.dropdowns-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdowns-content a {
  color: black;
  padding: 6px 10px;
  text-decoration: none;
  display: block;
}

.dropdowns-content a:hover {background-color: #ddd;}

.dropdowns:hover .dropdowns-content {display: block;}

.dropdowns:hover .dropbtns {background-color: #3e8e41;}

* {box-sizing: border-box}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #fff;
  width: 50%;
  min-height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding:5px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  color:#132672;
  
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #fff;
}

/* Create an active/current "tab button" class */
.tab button.active {
 color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  background:#132672;
  width: 50%;
  border-left: none;
  min-height: 300px;
}
.sub-menu-toggle{
    display:none;
}
</style>


		<script>var url_string =  window.location.href

var url = new URL(url_string);

var source = url.searchParams.get("source");

if (source !== null){

var date = new Date(),expires = 'expires=';

//date.setDate(date.getDate() + 7);
date.setTime(date.getTime()+(5*60*1000));
expires += date.toGMTString();

document.cookie = 'source=' + source + '; ' + expires + '; path=/';

}
	
		</script>
	
	
</head>

<body <?php body_class(); ?>    <?php
if($plink=='start-selling' || $plinks=='start-selling' || $plink=='self-serve-2' || $plinks=='self-serve-2'){ ?> onload="callimage()" <?php } ?>>
<?php wp_body_open(); ?>

<div id="page" class="page">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>

	<?php get_template_part( 'template-parts/header/site-header' ); ?>


