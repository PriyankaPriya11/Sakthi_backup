<!-- Mobile Menu -->
<div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#optizign-navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
    <ul class="nav navbar-icons hidden-sm hidden-md hidden-lg">
        <li><a href="tel:<?php echo get_option( 'phone','800.997.9368' ); ?>"><i class="fa fa-phone"></i></a></li>
        <li><a href="http://maps.google.com/?q=<?php echo get_option( 'address','My Address' ); ?>+<?php echo get_option( 'city','My City' ); ?>+<?php echo get_option( 'state','My State' ); ?>+<?php echo get_option( 'zip','12345' ); ?>" target="_blank"><i class="fa fa-map-marker"></i></a></li>
        <li><a href="mailto:<?php echo get_option( 'email','My Email' ); ?>"><i class="fa fa-envelope"></i></a></li>
    </ul>
</div>
    <!-- Main Menu -->
    <?php
    if (has_nav_menu('main-menu')) {
        wp_nav_menu( array(
            'menu'              => 'main-menu',
            'theme_location'    => 'main-menu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'optizign-navbar-collapse',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker()
            )
        );
    }
    ?>