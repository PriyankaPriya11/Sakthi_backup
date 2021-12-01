<!-- Menu -->
<div id="navbar">
	<nav class="navbar">
		
			<!-- Mobile Menu (Output Start)-->
			<div class="navbar-header">
            
            <span class="mobile">
                <strong><a href="tel:2486442136"><i></i></a></strong>
                <a href="mailto:info@mismile.com"> <i></i></a>
				<strong class="sms"><a href="sms:2486442136"><i></i></a></strong>
              </span>
            
            
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#optizign-navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			    <!-- Main Menu -->
			    <?php
			    if (has_nav_menu('main-menu')) {
			        wp_nav_menu( array(
			            'menu'              => 'main-menu',
			            'theme_location'    => 'main-menu',
			            'depth'             => 5,
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
		
	</nav>
</div>