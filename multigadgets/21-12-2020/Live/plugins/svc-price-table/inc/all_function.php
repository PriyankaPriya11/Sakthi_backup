<?php
add_action('init','svc_ptable_grid_register_style_script');
function svc_ptable_grid_register_style_script(){
	wp_enqueue_style( 'svcp-awesome-css', plugins_url('../assets/css/font-awesome.min.css', __FILE__));
}
?>
