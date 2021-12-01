<?php if ( !is_child_theme() ) { ?>

<style>

/*========================================================================
							Font Families           
========================================================================*/

body {
     font-family: 'Lato', 'Arial', sans-serif;
     font-family: <?php echo get_theme_mod('main_font','Lato'); ?>;
}

h1,.h1,
h3,.h3,
h5,.h5,
.name,
.service-title,
.promo-title,
.excerpt-title,
.form-title  {
     font-family: 'Lato', 'Arial', sans-serif;
     font-family:<?php echo get_theme_mod( 'title_1_font','Lato'); ?>;
}

h2,.h2,
h4,.h4,
h6,.h6,
.tagline,
.service-subtitle,
.promo-subtitle,
.excerpt-subtitle {
     font-family: 'Times New Roman', 'Georgia', serif;
     font-family:<?php echo get_theme_mod( 'title_2_font','Times New Roman'); ?>;
}

/* FONT OPTIONS
Lato . Cinzel . Raleway . Open Sans . Dancing+Script . Fjalla One . Arvo . Margarine . Oswald . PT Serif . Merriweather . Ubuntu . Lobster . Pinyon Script . Henny Penny
Monsieur La Doulaise 
*/

/*========================================================================
								Text Colors           
========================================================================*/

a,
a:focus, a:hover, a:active,
h1,h3,h5,
.promo-title,
.form-title,
.social a {
	color: <?php echo get_theme_mod( 'main_color', '#333333'); ?>;
}

h2,h4,h6,
.promo-fineprint {
	color: #666;
}

#footer-bottom,
#footer-bottom a,
#footer-main,
#footer-main a,
#services,
#services a {
	color:#e6e6e6;
}

/*========================================================================
							Background Colors          
========================================================================*/

#footer-bottom {
	background-color: <?php echo get_theme_mod( 'main_color', '#333333'); ?>;
}

#footer-main,
#services  {
	background-color: <?php echo get_theme_mod( 'secondary_color', '#444444'); ?>;
}

/*========================================================================
							Border Colors           
========================================================================*/

</style>

<?php } ?>