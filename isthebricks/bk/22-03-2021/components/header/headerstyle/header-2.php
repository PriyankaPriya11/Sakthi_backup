<?php
$topbar_onoff          	= shelder_get_options('topbar_onoff');
$top_bar_moto          	= shelder_get_options('top_bar_moto');
$header_social_onoff   	= shelder_get_options('header_social_onoff');
$shelder_social         = shelder_get_options('shelder_social');
$top_menu_phone_number 	= shelder_get_options('top_menu_phone_number');
$top_menu_email 		= shelder_get_options('top_menu_header_email');
$top_menu_business_day 	= shelder_get_options('top_menu_business_day');
$top_menu_address      	= shelder_get_options('top_menu_address');
$top_menu_address_city	= shelder_get_options('top_menu_address_city');
$top_bar_button_title  	= shelder_get_options('top_bar_button_title');
$top_bar_button_url  	= shelder_get_options('top_bar_button_url');
$sidebar_menu_onoff 	= shelder_get_options('sidebar_menu_onoff');
$sticky_header_onoff 	= shelder_get_options('sticky_header_onoff');
$header_search_onoff 	= shelder_get_options('header_search_onoff');
$contact_information_onoff 	= shelder_get_options('contact_information_onoff');
?>
<!-- main header -->
<header class="main-header style-two">

	<div class="header-top">
		<div class="auto-container">
			<div class="top-inner clearfix">
			<?php if($contact_information_onoff ){?>
				<div class="top-left pull-left">
					<ul class="info-column clearfix">
						<?php
						if ($top_menu_business_day) :
							printf('<li><i class="flaticon-clock-1"></i>' . $top_menu_business_day . '</li>');
						endif;
						?>
						<?php
						if ($top_menu_email) :
							printf('<li><i class="flaticon-mail"></i><a href="mailto:'. $top_menu_email .'">' . $top_menu_email . '</a></li>');
						endif;
						?>
					</ul>
				</div>
				<?php } ?>
				<div class="top-right pull-right clearfix">
					<?php if($header_search_onoff){?>
					<ul class="header-nav pull-left clearfix margin-right-0">
						<li class="search-box-outer">
							<div class="search-btn">
								<button type="button" class="search-toggler"><i class="fas fa-search"></i><?php esc_html_e('Search','shelder');?></button>
							</div>
						</li>
					</ul>
					<?php } ?>
					<?php
						if (has_nav_menu('top_bar')) {
							 wp_nav_menu(
								array(
									'theme_location' => 'top_bar',
									'container'      => 'false',
									'container_id'   => '',
									'menu_class'   => 'header-nav pull-left clearfix',
								)
							);
						}
						?>
					<ul class="social-links pull-left clearfix">
						<?php
						if ($header_social_onoff === '1') :
							echo wp_kses($shelder_social,'code_context');
						endif;
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="header-upper">
		<div class="auto-container">
			<div class="upper-inner clearfix">
				<div class="logo-box pull-left">
					<figure class="logo">
						<?php get_template_part('components/header/logo'); ?>
					</figure>
				</div>
				<?php if($contact_information_onoff ){?>
				<ul class="info-box pull-right clearfix">
					<?php if ($top_menu_phone_number) : ?>
						<li class="single-info">
							<i class="flaticon-clock"></i>
							<h5><a href="tel:<?php echo esc_attr($top_menu_phone_number); ?>"><?php echo esc_html($top_menu_phone_number); ?></a></h5>
							<p><?php esc_html_e('Need help? Make a Call','shelder'); ?></p>
						</li>
					<?php endif; ?>
					<?php if ($top_menu_address || $top_menu_address_city) : ?>
						<li class="single-info">
							<i class="flaticon-pin"></i>
							<?php if ($top_menu_address_city) : ?>
								<h5><?php echo esc_html($top_menu_address_city); ?></h5>
							<?php endif; ?>
							<?php if ($top_menu_address) : ?>
								<p><?php echo esc_html($top_menu_address); ?></p>
							<?php endif; ?>
						</li>
					<?php endif; ?>
					<?php if ($top_bar_button_title AND $top_bar_button_url) : ?>
						<li class="btn-box">
							<a href="<?php echo esc_attr($top_bar_button_url); ?>" class="theme-btn"><?php echo esc_html($top_bar_button_title); ?><i class="flaticon-login"></i></a>
						</li>
					<?php endif; ?>
				</ul>
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="header-lower">
		<div class="auto-container">
			<div class="outer-box clearfix">
				<div class="menu-area">
					<!--Mobile Navigation Toggler-->
					<div class="mobile-nav-toggler">
						<i class="icon-bar"></i>
						<i class="icon-bar"></i>
						<i class="icon-bar"></i>
					</div>
					<nav class="main-menu navbar-expand-md navbar-light">
						<div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
							<?php
							if (has_nav_menu('primary')) {
								wp_nav_menu(
									array(
										'theme_location' => 'primary',
										'walker'         => new Shelder_Bootstrap_Navwalker(),
										'depth'          => 3, // 1 = no dropdowns, 2 = with dropdowns.
										'container'      => 'ul',
										'container_id'   => '',
										'menu_class'     => 'navigation clearfix',
									)
								);
							} else {
								wp_nav_menu(
									array(
										'depth'          => 3, // 1 = no dropdowns, 2 = with dropdowns.
										'container'      => 'ul',
										'container_id'   => '',
										'menu_class'     => 'navigation clearfix',
									)
								);
							}
							?>
						</div>
					</nav>
					<div class="menu-right-content clearfix pull-right">
						<?php
						if ( class_exists( 'WooCommerce' ) ) :
							$items_count = WC()->cart->get_cart_contents_count();
							?>
						<div class="cart-box">
							<a href="<?php echo get_permalink( wc_get_page_id( 'cart' ) ); ?>"><i class="flaticon-sales"></i>
							<?php if ( $items_count > 0 ) : ?>
							<span><?php echo esc_html( $items_count ); ?></span>
							<?php endif; ?>
							</a>
						</div>
						<?php endif; ?>
						<?php if($sidebar_menu_onoff){?>
						<div class="nav-box">
							<div class="nav-btn nav-toggler navSidebar-button clearfix">
								<i class="flaticon-sort"></i>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php if($sticky_header_onoff){?>
	<!--sticky Header-->
	<div class="sticky-header">
		<div class="auto-container">
			<div class="outer-box clearfix">
				<div class="menu-area">
					<nav class="main-menu clearfix">
						<!--Keep This Empty / Menu will come through Javascript-->
					</nav>
					<div class="menu-right-content clearfix pull-right">
						<?php
						if ( class_exists( 'WooCommerce' ) ) :
							$items_count = WC()->cart->get_cart_contents_count();
							?>
						<div class="cart-box">
							<a href="<?php echo get_permalink( wc_get_page_id( 'cart' ) ); ?>"><i class="flaticon-sales"></i>
							<?php if ( $items_count > 0 ) : ?>
							<span><?php echo esc_html( $items_count ); ?></span>
							<?php endif; ?>
							</a>
						</div>
						<?php endif; ?>
						<?php if($sidebar_menu_onoff){?>
						<div class="nav-box">
							<div class="nav-btn nav-toggler navSidebar-button clearfix">
								<i class="flaticon-sort"></i>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
</header>
<!-- main-header end -->