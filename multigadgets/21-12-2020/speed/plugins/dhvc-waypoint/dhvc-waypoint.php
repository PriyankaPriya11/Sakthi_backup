<?php
/*
* Plugin Name: Waypoint for Visual Composer
* Plugin URI: http://sitesao.com/
* Description: Add new options to Visual Composer rows and columns to enable animation whenever you scroll.
* Version: 2.0.3
* Author: Sitesao
* Author URI: http://sitesao.com/
* License: License GNU General Public License version 2 or later;
* Copyright 2013 Sitesao
*/
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if(!defined('DHVC_WAYPOINT'))
	define('DHVC_WAYPOINT','dhvc-waypoint');

if(!defined('DHVC_WAYPOINT_VERSION'))
	define('DHVC_WAYPOINT_VERSION','2.0.3');

if(!defined('DHVC_WAYPOINT_URL'))
	define('DHVC_WAYPOINT_URL',plugin_dir_url( __FILE__ ));

if(!defined('DHVC_WAYPOINT_DIR'))
	define('DHVC_WAYPOINT_DIR',dirname( __FILE__ ));

if (! function_exists ( 'dhvc_is_editor' )) {
	function dhvc_is_editor() {
		return (isset ( $_GET ['vc_action'] ) && $_GET ['vc_action'] === 'vc_inline') || (isset ( $_GET ['vc_inline'] ) || isset ( $_POST ['vc_inline'] ));
	}
}
if (! function_exists ( 'dhvc_is_inline' )) {
	function dhvc_is_inline() {
		return isset ( $_GET ['vceditor'] ) && $_GET ['vceditor'] === 'true';
	}
}
if (! function_exists ( 'dhvc_is_editable' )) {
	function dhvc_is_editable() {
		return isset ( $_GET ['vc_editable'] ) && $_GET ['vc_editable'] === 'true';
	}
}


if(!class_exists('DHVCWaypoint',false)){
	
	class DHVCWaypoint {
		
		protected $_effect;
		
		public function __construct(){
			add_action('init',array(&$this,'init'));
		}
		
		public function init(){
			load_plugin_textdomain( DHVC_WAYPOINT, false, basename(DHVC_WAYPOINT_DIR) . '/languages/' );
			
			// Check if Visual Composer is installed
			if ( ! defined( 'WPB_VC_VERSION' ) || ! function_exists( 'vc_add_param' ) ) {
				add_action('admin_notices', array(&$this,'notice'));
				return;
			}
			require_once DHVC_WAYPOINT_DIR.'/includes/map.php';
			require_once DHVC_WAYPOINT_DIR.'/includes/shortcode.php';

			wp_register_script('dhvc-waypoint-setting',DHVC_WAYPOINT_URL.'assets/js/setting.js', array('wpb_js_composer_js_custom_views','thickbox'), DHVC_WAYPOINT_VERSION,true);
			wp_register_style('dhvc-waypoint-setting',DHVC_WAYPOINT_URL.'assets/css/setting.css', array('thickbox'), DHVC_WAYPOINT_VERSION);
			
			if(dhvc_is_inline() || dhvc_is_editor() || dhvc_is_editable() || is_admin()){
				wp_enqueue_script('dhvc-waypoint-setting');
				wp_enqueue_style('dhvc-waypoint-setting');
			}
			
			if(!dhvc_is_editor() && !dhvc_is_inline()){
				add_action('wp_print_styles',array(&$this,'enqueue_styles') );
				add_action('wp_print_scripts',array(&$this,'enqueue_scripts') );
			}
			add_filter('dhvc_waypoint_add_div', array(&$this,'add_div'), 10,2);
			
			add_action( 'init', array( $this, 'add_options' ), 99 );
			
			//$this->_add_options();
		}
		
		public function notice(){
			$plugin = get_plugin_data(__FILE__);
			echo '
			  <div class="updated">
			    <p>' . sprintf(__('<strong>%s</strong> requires <strong><a href="http://bit.ly/1gKaeh5" target="_blank">Visual Composer</a></strong> plugin to be installed and activated on your site.', DHVC_WOO), $plugin['Name']) . '</p>
			  </div>';
		}
		
		public function enqueue_styles(){
			wp_register_style('dhvc-waypoint', DHVC_WAYPOINT_URL.'assets/css/style.css');
			wp_enqueue_style('dhvc-waypoint');
			wp_register_style('dhvc-waypoint-v2', DHVC_WAYPOINT_URL.'assets/css/stylev2.min.css');
			wp_enqueue_style('dhvc-waypoint-v2');
		}
		
		public function enqueue_scripts(){
			wp_register_script('dhvc-waypoint',DHVC_WAYPOINT_URL.'assets/js/script.min.js',array('jquery'),DHVC_WAYPOINT_VERSION,true);
			wp_register_script('dhvc-waypoint-v2',DHVC_WAYPOINT_URL.'assets/js/script.v2.min.js',array('jquery'),DHVC_WAYPOINT_VERSION,true);
			wp_enqueue_script('dhvc-waypoint');
			wp_enqueue_script('dhvc-waypoint-v2');
		}
		
		public function add_div($output, $atts, $content=''){
			extract( shortcode_atts( array(
				'enable_waypoint'	=>'',
				'viewportfactor'	=>'0.33',
				'trigger'			=>'scroll',
				'scrollup'			=>'no',
				'stick_top'			=>0,
				'effect'			=>'fadeInLeft',
				'timing'			=>'linear',
				'duration'			=>1000,
				'iteration_count'	=>1,
				'delay'				=>0,
				'waypoint_mobile'	=>'',
			), $atts ) );
			
			$parallaxDiv = '';
			if(defined( 'GAMBIT_VC_PARALLAX_BG' ))
				$parallaxDiv = apply_filters( 'gambit_add_parallax_div', '', $atts, $content );
		
			
			if(empty($enable_waypoint) || $enable_waypoint == 'disable_waypoint'){
				return $parallaxDiv;
			}
			$mobile = empty($waypoint_mobile) ? 0 : 1;
			
			$no_mobile = empty($waypoint_mobile) ? 'no_wayoint' : '';
			$waypoint_data = 'data-mobile="'.$mobile.'" data-stick-top= '.absint($stick_top).' data-trigger = "'.$trigger.'" data-delay="'.$delay.'" data-timing="'.$timing.'" data-iteration-count="'.$iteration_count.'" data-scrollup = "'.$scrollup.'" data-effect="'.$effect.'" data-viewport-factor="'.$viewportfactor.'" data-duration="'.$duration.'"';
			$waypoint_class_effect_ex = 'dhvc-waypoint-'.$trigger.' '.$no_mobile;
			return $parallaxDiv.'<div class="dhvc-waypoint '.$waypoint_class_effect_ex.'" '.$waypoint_data.'></div>';
		}
		
		protected function _get_effects(){
			$effects = array(
				'bounce'=>'bounce',
				'flash'=>'flash',
				'pulse'=>'pulse',
				'rubberBand'=>'rubberBand',
				'shake'=>'shake',
				'swing'=>'swing',
				'spin'=>'spin',
				'tada'=>'tada',
				'wobble'=>'wobble',
				'bounceIn'=>'bounceIn',
				'bounceInDown'=>'bounceInDown',
				'bounceInLeft'=>'bounceInLeft',
				'bounceInRight'=>'bounceInRight',
				'bounceInUp'=>'bounceInUp',
				'bounceOut'=>'bounceOut',
				'bounceOutDown'=>'bounceOutDown',
				'bounceOutLeft'=>'bounceOutLeft',
				'bounceOutRight'=>'bounceOutRight',
				'bounceOutUp'=>'bounceOutUp',
				'fadeIn'=>'fadeIn',
				'fadeInDown'=>'fadeInDown',
				'fadeInDownBig'=>'fadeInDownBig',
				'fadeInLeft'=>'fadeInLeft',
				'fadeInLeftBig'=>'fadeInLeftBig',
				'fadeInRight'=>'fadeInRight',
				'fadeInRightBig'=>'fadeInRightBig',
				'fadeInUp'=>'fadeInUp',
				'fadeInUpBig'=>'fadeInUpBig',
				'fadeOut'=>'fadeOut',
				'fadeOutDown'=>'fadeOutDown',
				'fadeOutDownBig'=>'fadeOutDownBig',
				'fadeOutLeft'=>'fadeOutLeft',
				'fadeOutLeftBig'=>'fadeOutLeftBig',
				'fadeOutRight'=>'fadeOutRight',
				'fadeOutRightBig'=>'fadeOutRightBig',
				'fadeOutUp'=>'fadeOutUp',
				'fadeOutUpBig'=>'fadeOutUpBig',
				'lightSpeedIn'=>'lightSpeedIn',
				'lightSpeedOut'=>'lightSpeedOut',
				'rotateIn'=>'rotateIn',
				'rotateInDownLeft'=>'rotateInDownLeft',
				'rotateInDownRight'=>'rotateInDownRight',
				'rotateInUpLeft'=>'rotateInUpLeft',
				'rotateInUpRight'=>'rotateInUpRight',
				'rotateOut'=>'rotateOut',
				'rotateOutDownLeft'=>'rotateOutDownLeft',
				'rotateOutDownRight'=>'rotateOutDownRight',
				'rotateOutUpLeft'=>'rotateOutUpLeft',
				'rotateOutUpRight'=>'rotateOutUpRight',
				'slideInDown'=>'slideInDown',
				'slideInLeft'=>'slideInLeft',
				'slideInRight'=>'slideInRight',
				'slideOutLeft'=>'slideOutLeft',
				'slideOutRight'=>'slideOutRight',
				'slideOutUp'=>'slideOutUp',
				'hinge'=>'hinge',
				'rollIn'=>'rollIn',
				'rollOut'=>'rollOut'
			);
			return apply_filters( 'dhvc_waypoint_effects', $effects );
		}
		
		protected function _get_timing(){
			$timing = array (
					'linear' => 'linear',
					'ease' => 'ease',
					'easeIn' => 'easeIn',
					'easeOut' => 'easeOut',
					'easeInOut' => 'easeInOut',
					'easeInQuad' => 'easeInQuad',
					'easeInCubic' => 'easeInCubic',
					'easeInQuart' => 'easeInQuart',
					'easeInQuint' => 'easeInQuint',
					'easeInSine' => 'easeInSine',
					'easeInExpo' => 'easeInExpo',
					'easeInCirc' => 'easeInCirc',
					'easeInBack' => 'easeInBack',
					'easeOutQuad' => 'easeOutQuad',
					'easeOutCubic' => 'easeOutCubic',
					'easeOutQuart' => 'easeOutQuart',
					'easeOutQuint' => 'easeOutQuint',
					'easeOutSine' => 'easeOutSine',
					'easeOutExpo' => 'easeOutExpo',
					'easeOutCirc' => 'easeOutCirc',
					'easeOutBack' => 'easeOutBack',
					'easeInOutQuad' => 'easeInOutQuad',
					'easeInOutCubic' => 'easeInOutCubic',
					'easeInOutQuart' => 'easeInOutQuart',
					'easeInOutQuint' => 'easeInOutQuint',
					'easeInOutSine' => 'easeInOutSine',
					'easeInOutExpo' => 'easeInOutExpo',
					'easeInOutCirc' => 'easeInOutCirc',
					'easeInOutBack' => 'easeInOutBack' 
			);
			return apply_filters( 'dhvc_waypoint_transition_timing', $timing );
		}
		
		public function add_options(){
			$enable = array(
				"type" => "dropdown",
				"heading" => __( "Waypoint Enable", DHVC_WAYPOINT ),
				"param_name" => "enable_waypoint",
				"value" => Array( __('No',DHVC_WAYPOINT)=>'disable_waypoint',__( "Yes", DHVC_WAYPOINT ) => 'enable_waypoint'),
				//"group" => __( "Waypoint", DHVC_WAYPOINT ),
			);
			vc_add_param('vc_row',$enable);
			vc_add_param('vc_row_inner',$enable);
			vc_add_param('vc_column',$enable);
			
			$trigger = array(
					"type" => "dropdown",
					"param_name" => "trigger",
					"heading" => __( "Waypoint Trigger", DHVC_WAYPOINT ),
					"value" => array(
						__('On Scroll',DHVC_WAYPOINT)=>'scroll',
						__('On Hover',DHVC_WAYPOINT) =>'hover'
					),
					"description" => __( "Waypoint triger event", DHVC_WAYPOINT ),
					"dependency" => Array('element'	=> "enable_waypoint", 'value' => array('enable_waypoint') ),
					//"group" => __( "Waypoint", DHVC_WAYPOINT ),
			);
			vc_add_param('vc_row',$trigger);
			vc_add_param('vc_row_inner',$trigger);
			vc_add_param('vc_column',$trigger);
			
			$scrollup = array(
					"type" => "dropdown",
					"param_name" => "scrollup",
					'heading'=>__('Waypoint Event Scroll Trigger',DHVC_WAYPOINT),
					"value" => array("No"=>'no',__("Make elements 'stick' to the top of the page when the user scrolls past for trigger event 'Scroll'",DHVC_WAYPOINT)=>'sticky',__( "Enable effect when scroll up for trigger event 'Scroll'", DHVC_WAYPOINT ) => "yes" ),
					"dependency" => Array('element'	=> "enable_waypoint",'value' => array('enable_waypoint')),
					//"group" => __( "Waypoint", DHVC_WAYPOINT ),
			);
			vc_add_param('vc_row',$scrollup);
			vc_add_param('vc_row_inner',$scrollup);
			vc_add_param('vc_column',$scrollup);
			
			$top = array(
					"type" => "textfield",
					"heading" => __( "Elements Stick Margin Top", DHVC_WAYPOINT ),
					"param_name" => "stick_top",
					"value" => "0",
					"description" => __( "Margin top of element when it's 'stick'", DHVC_WAYPOINT ),
					"dependency" => Array('element'	=> "enable_waypoint", 'value' => array('enable_waypoint') ),
			);
			vc_add_param('vc_row',$top);
			vc_add_param('vc_row_inner',$top);
			vc_add_param('vc_column',$top);
			$offset = array(
				"type" => "textfield",
				"heading" => __( "Viewport Factor", DHVC_WAYPOINT ),
				"param_name" => "viewportfactor",
				"value" => "0.33",
				"description" => __( " If 0, the element is considered in the viewport as soon as it enters.If 1, the element is considered in the viewport when it's fully visible", DHVC_WAYPOINT ),
				"dependency" => Array('element'	=> "enable_waypoint", 'value' => array('enable_waypoint') ),
				//"group" => __( "Waypoint", DHVC_WAYPOINT ),
			);
			
			vc_add_param('vc_row',$offset);
			vc_add_param('vc_row_inner',$offset);
			vc_add_param('vc_column',$offset);
			
			$effect = array(
				"type" => "dropdown",
				"heading" => __( "Waypoint Animation Effect", DHVC_WAYPOINT ),
				"param_name" => "effect",
				"value" => $this->_get_effects(),
				"description" => __("Select the Waypoint Animation effect when scroll to it.", DHVC_WAYPOINT ),
				"dependency" => Array('element'	=> "enable_waypoint", 'value' => array('enable_waypoint')),
				//"group" => __( "Waypoint", DHVC_WAYPOINT ),
			);
			vc_add_param('vc_row', $effect);
			vc_add_param('vc_row_inner', $effect);
			vc_add_param('vc_column', $effect);
			
			$animation_transition = array(
					"type" => "dropdown",
					"heading" => __( "Waypoint Animation Transition", DHVC_WAYPOINT ),
					"param_name" => "timing",
					"value" => $this->_get_timing(),
					"description" => __("Select the Waypoint animation transition.", DHVC_WAYPOINT ),
					"dependency" => Array('element'	=> "enable_waypoint", 'value' => array('enable_waypoint') ),
					//"group" => __( "Waypoint", DHVC_WAYPOINT ),
			);
			vc_add_param('vc_row', $animation_transition);
			vc_add_param('vc_row_inner', $animation_transition);
			vc_add_param('vc_column', $animation_transition);
			
			$duration = array(
				"type" => "textfield",
				"class" => "",
				"heading" => __( "Waypoint Animation Duration (ms)", DHVC_WAYPOINT ),
				"param_name" => "duration",
				"value" => "1000",
				"description" => __( "Specifies how many milliseconds an animation takes to complete.", DHVC_WAYPOINT ),
				"dependency" => Array('element'	=> "enable_waypoint", 'value' => array('enable_waypoint')),
				//"group" => __( "Waypoint", DHVC_WAYPOINT ),
			);
				
			vc_add_param('vc_row',$duration);
			vc_add_param('vc_row_inner',$duration);
			vc_add_param('vc_column',$duration);
			
			$delay = array(
					"type" => "textfield",
					"class" => "",
					"heading" => __( "Waypoint Animation Delay (ms)", DHVC_WAYPOINT ),
					"param_name" => "delay",
					"value" => "0",
					"description" => __( "Specifies a delay before the animation will start.", DHVC_WAYPOINT ),
					"dependency" => Array('element'	=> "enable_waypoint", 'value' => array('enable_waypoint')),
					//"group" => __( "Waypoint", DHVC_WAYPOINT ),
			);
			vc_add_param('vc_row',$delay);
			vc_add_param('vc_row_inner',$delay);
			vc_add_param('vc_column',$delay);
			
			$iteration_count = array(
					"type" => "textfield",
					"class" => "",
					"heading" => __( "Waypoint Animation Iteration Count", DHVC_WAYPOINT ),
					"param_name" => "iteration_count",
					"value" => "1",
					"description" => __( "Specifies how many times an animation should be played. Value example: {number},infinite|initial|inherit . See detail property: <a href=\"http://www.w3schools.com/cssref/css3_pr_animation-iteration-count.asp\" target=\"_blank\">CSS3 animation-iteration-count Property</a>", DHVC_WAYPOINT ),
					"dependency" => Array('element'	=> "enable_waypoint", 'value' => array('enable_waypoint') ),
					//"group" => __( "Waypoint", DHVC_WAYPOINT ),
			);
			vc_add_param('vc_row',$iteration_count);
			vc_add_param('vc_row_inner',$iteration_count);
			vc_add_param('vc_column',$iteration_count);
			
			$waypoint_mobile = array(
					"type" => "checkbox",
					"param_name" => "waypoint_mobile",
					"value" => array( __( "Check this to enable the effect in mobile devices", DHVC_WAYPOINT ) => "waypoint-mobile-mobile" ),
					"description" => __( "Waypoint effects would most probably cause slowdowns when your site is viewed in mobile devices. If the device width is less than 980 pixels, then it is assumed that the site is being viewed in a mobile device.", DHVC_WAYPOINT ),
					//"group" => __( "Waypoint", DHVC_WAYPOINT ),
					"dependency" => Array('element'	=> "enable_waypoint", 'value' => array('enable_waypoint') ),
			);
			vc_add_param('vc_row',$waypoint_mobile);
			vc_add_param('vc_row_inner',$waypoint_mobile);
			vc_add_param('vc_column',$waypoint_mobile);
		}
		
	}
	new DHVCWaypoint();
}

if(!function_exists('vc_theme_before_vc_row')){
	function vc_theme_before_vc_row($atts, $content = null){
		return apply_filters( 'dhvc_waypoint_add_div', '', $atts, $content );
	}
}

if(!function_exists('vc_theme_before_vc_row_inner')){
	function vc_theme_before_vc_row_inner($atts, $content = null){
		return apply_filters( 'dhvc_waypoint_add_div', '', $atts, $content );
	}
}
if(!function_exists('vc_theme_before_vc_column')){
	function vc_theme_before_vc_column($atts, $content = null){
		return apply_filters( 'dhvc_waypoint_add_div', '', $atts, $content );
	}
}
