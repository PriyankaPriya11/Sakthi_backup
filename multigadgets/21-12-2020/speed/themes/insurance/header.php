<?php 
if(isset($_REQUEST['lead']) && $_REQUEST['lead']!='') {
	setcookie("leadcookie", trim($_REQUEST['lead']), time()+3600, "/", ".multigadget.insure");
}
?>
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
<?php global $insurance_option;?>
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
<body <?php body_class(); ?> >
<?php if($insurance_option['search-switch']!=false){ ?>
<div class="search-open"><!-- search open -->
  <div class="container">
    <div class="col-md-offset-2 col-md-8">          
      <form role="search" method="get" class="input-group" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input type="text" class="form-control" placeholder="<?php echo _e( 'search here...', 'insurance' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="" />
        <span class="input-group-btn">
        <input type="submit" class="btn tp-btn-orange" value="<?php echo _e( 'Search', 'insurance' ) ?>" />
        </span>
      </form>        
    </div>
  </div>
</div>
<?php } ?>
<div class="tp-header" id="tp-header">
  <div class="container">
    <div class="row">
		<div class="col-md-4"><a class="navbar-brand logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url($insurance_option['logo']['url']); ?>" alt="Peace Insurance Logo" class="img-responsive"></a> </div>
		<div class="col-md-8 cta-box text-right"><span class="call"><?php _e('Call:','insurance') ?> <?php echo esc_attr($insurance_option['phone']); ?></span>
		<?php if($insurance_option['quote-switch']!=false){ ?>
		<!-- Single button -->
        <div class="btn-group">
              <?php
              $menutop = array(
               'theme_location'  => 'menutop',
               'menu'            => '',
               'container'       => '',
               'container_class' => '',
               'container_id'    => '',
               'menu_class'      => '',
               'menu_id'         => '',
               'echo'            => true,
               'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
               'walker'          => new wp_bootstrap_navwalker(),
               'before'          => '',
               'after'           => '',
               'link_before'     => '',
               'link_after'      => '',
               'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
               'depth'           => 0,
              );
              if ( has_nav_menu( 'menutop' ) ) {
               wp_nav_menu( $menutop );
              }
              ?>
        </div>     
		<?php } ?> 
        <?php if($insurance_option['login-switch']!=false){ ?><a href="<?php echo esc_url( home_url('/') ); ?>login/" class="btn tp-btn tp-btn-blue"><?php _e('Login','insurance') ?></a><?php } ?> 
        <?php if($insurance_option['search-switch']!=false){ ?><a href="#" class="btn search tp-search-btn"><i class="fa fa-search"></i></a><?php } ?> 
      </div>
    </div>
  </div>
</div>

<!-- tp-navbar -->
<div class="tp-navbar">
  <nav class="navbar navbar-default">
    <div class="container"> 
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>      
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">        
          <?php
          $menumain = array(
           'theme_location'  => 'menumain',
           'menu'            => '',
           'container'       => '',
           'container_class' => '',
           'container_id'    => '',
           'menu_class'      => 'nav navbar-nav',
           'menu_id'         => '',
           'echo'            => true,
           'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
           'walker'          => new wp_bootstrap_navwalker(),
           'before'          => '',
           'after'           => '',
           'link_before'     => '',
           'link_after'      => '',
           'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
           'depth'           => 0,
          );
          if ( has_nav_menu( 'menumain' ) ) {
           wp_nav_menu( $menumain );
          }
          ?>
        
      </div>
      <!-- /.navbar-collapse --> 
    </div>
    <!-- /.container-fluid --> 
  </nav>
</div>
