<?php get_template_part ('framework/config/head'); ?>
<!-- Start Customizing -->
<?php get_template_part ('mods/modules/headerbar'); ?>
<!-- Hero Home/Inner -->
<?php if ( is_home() || is_front_page() ) { ?>       
	<?php get_template_part ('mods/modules/hero-home'); ?>  		
<?php }  else {?>
   <span class="inner-address">
   <?php get_template_part ('framework/outputs/address') ?>
   <?php get_template_part ('framework/outputs/phone') ?>
  <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <label> <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
     <input type="search" class="search-field"placeholder="<?php echo esc_attr_x('Search …','placeholder')?>"value="<?php echo get_search_query()?>"name="s"
        title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
     </label>
    <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
   </form>
 </span>
<?php } ?>
     
		
