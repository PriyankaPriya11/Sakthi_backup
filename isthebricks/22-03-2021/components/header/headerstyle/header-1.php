<?php
$topbar_onoff          	= shelder_get_options('topbar_onoff');
$top_bar_moto          	= shelder_get_options('top_bar_moto');
$header_social_onoff   	= shelder_get_options('header_social_onoff');
$shelder_social         = shelder_get_options('shelder_social');
$top_bar_button_title  	= shelder_get_options('top_bar_button_title');
$top_bar_button_url  	= shelder_get_options('top_bar_button_url');
$top_menu_phone_number 	= shelder_get_options('top_menu_phone_number');
$top_menu_business_day 	= shelder_get_options('top_menu_business_day');
$sidebar_menu_onoff 	= shelder_get_options('sidebar_menu_onoff');
$sticky_header_onoff 	= shelder_get_options('sticky_header_onoff');
$header_search_onoff 	= shelder_get_options('header_search_onoff');
$top_bar_moto_onoff 	= shelder_get_options('top_bar_moto_onoff');
$contact_information_onoff 	= shelder_get_options('contact_information_onoff');


$unittest_on_off	= shelder_get_options('unittest_on_off');

if($unittest_on_off){
	$class = '';
}else{
	$class = 'unit-test-header';
}
?>
<header class="main-header style-one <?php echo esc_attr($class);?>">

	<?php
	if ($topbar_onoff === '1') :
	?>
		<div class="header-top">
			<div class="large-container">
				<div class="top-inner clearfix">

					<?php if ($top_bar_moto_onoff) : ?>
						<div class="top-left pull-left">
							<p><i class="flaticon-home"></i><?php echo esc_html($top_bar_moto); ?></p>
						</div>
					<?php endif; ?>
					<div class="top-right pull-right clearfix">
						<?php if ($header_social_onoff) : ?>
						<ul class="social-links clearfix">
							<?php
								echo wp_kses($shelder_social,'code_context');
							?>
						</ul>
						<?php endif; ?>
						<?php if($header_search_onoff){?>
						<div class="search-box-outer">
							<div class="search-btn">
								<button type="button" class="search-toggler"><i class="flaticon-search-1"></i></button>
							</div>
						</div>
						<?php } ?>
						<?php if ($top_bar_button_title AND $top_bar_button_url) : ?>
						<div class="btn-box">
							<a href="<?php echo esc_url($top_bar_button_url); ?>" class="theme-btn"><?php echo esc_html($top_bar_button_title); ?><i class="flaticon-login"></i></a>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	<?php
	endif;
	?>
	<div class="header-upper">
		<div class="large-container">
			<div class="outer-box clearfix">
				<div class="ss-logo-box">
					<figure class="logo">
						<?php
						get_template_part('components/header/logo');
						?>
					</figure>
				</div>
				<div class="menu-area pull-right">
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

					<div class="menu-right-content clearfix pull-left">
						<?php if ($contact_information_onoff) : ?>
							<div class="info-box">
								<div class="box">
									<?php if ($top_menu_phone_number) : ?>
										<i class="flaticon-clock"></i>
										<h5><a href="tel:<?php echo esc_attr($top_menu_phone_number); ?>"> <?php echo esc_html($top_menu_phone_number); ?> </a></h5>
									<?php endif; ?>
									<?php if ($top_menu_business_day) : ?>
										<span>
											<?php
											echo esc_html($top_menu_business_day);
											?>
										</span>
									<?php endif; ?>
								</div>
							</div>
						<?php endif; ?>
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
		<div class="large-container">
			<div class="outer-box clearfix">
				<div class="ss-logo-box pull-left">
					<figure class="logo">
						<?php get_template_part('components/header/logo');?>
					</figure>
				</div>
				<div class="menu-area pull-right">
					<nav class="main-menu clearfix">
						<!--Keep This Empty / Menu will come through Javascript-->
					</nav>
					<div class="menu-right-content clearfix pull-left">

						<?php if ($top_menu_phone_number || $top_menu_business_day) : ?>
							<div class="info-box">
								<div class="box">
									<?php if ($top_menu_phone_number) : ?>
										<i class="flaticon-clock"></i>
										<h5><a href="tel:<?php echo esc_attr($top_menu_phone_number); ?>"> <?php echo esc_html($top_menu_phone_number); ?> </a></h5>
									<?php endif; ?>
									<?php if ($top_menu_business_day) : ?>
										<span>
											<?php
											echo esc_html($top_menu_business_day);
											?>
										</span>
									<?php endif; ?>
								</div>
							</div>
						<?php endif; ?>
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