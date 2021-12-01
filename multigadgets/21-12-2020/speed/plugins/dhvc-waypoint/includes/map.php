<?php
function dhvc_waypoint_get_anomations(){
	$animations = array(
			'dhvc-waypoint-bounceIn'=>'bounceIn',
			'dhvc-waypoint-bounceInRight'=>'bounceInRight',
			'dhvc-waypoint-bounceInLeft'=>'Bounce in left',
			'dhvc-waypoint-bounceInUp'=>'Bounce in up',
			'dhvc-waypoint-bounceInDown'=>'Bounce in down',
			'dhvc-waypoint-fadeIn'=>'Fade In',
			'dhvc-waypoint-growIn'=>'Grow in',
			'dhvc-waypoint-shake'=>'Shake',
			'dhvc-waypoint-shakeUp'=>'ShakeUp',
			'dhvc-waypoint-fadeInLeft'=>'FadeInLeft',
			'dhvc-waypoint-fadeInRight'=>'FadeInRight',
			'dhvc-waypoint-fadeInUp'=>'FadeInUp',
			'dhvc-waypoint-fadeInDown'=>'FadeInDown',
			'dhvc-waypoint-rotateIn'=>'rotateIn',
			'dhvc-waypoint-rotateInUpLeft'=>'rotateInUpLeft',
			'dhvc-waypoint-rotateInDownLeft'=>'rotateInDownLeft',
			'dhvc-waypoint-rotateInUpRight'=>'rotateInUpRight',
			'dhvc-waypoint-rotateInDownRight'=>'rotateInDownRight',
			'dhvc-waypoint-rollIn'=>'rollIn',
			'dhvc-waypoint-wiggle'=>'wiggle',
			'dhvc-waypoint-swing'=>'swing',
			'dhvc-waypoint-tada'=>'tada',
			'dhvc-waypoint-wobble'=>'wobble',
			'dhvc-waypoint-pulse'=>'pulse',
			'dhvc-waypoint-lightSpeedInRight'=>'lightSpeedInRight',
			'dhvc-waypoint-lightSpeedInLeft'=>'lightSpeedInLeft',
			'dhvc-waypoint-flip'=>'Flip',
			'dhvc-waypoint-flipInX'=>'flipInX',
			'dhvc-waypoint-flipInY'=>'flipInY',
			'dhvc-waypoint-bounceOut'=>'bounceOut',
			'dhvc-waypoint-bounceOutUp'=>'bounceOutUp',
			'dhvc-waypoint-bounceOutDown'=>'bounceOutDown',
			'dhvc-waypoint-bounceOutLeft'=>'bounceOutLeft',
			'dhvc-waypoint-bounceOutRight'=>'bounceOutRight',
			'dhvc-waypoint-fadeOut'=>'fadeOut',
			'dhvc-waypoint-fadeOutUp'=>'fadeOutUp',
			'dhvc-waypoint-fadeOutDown'=>'fadeOutDown',
			'dhvc-waypoint-fadeOutLeft'=>'fadeOutLeft',
			'dhvc-waypoint-fadeOutRight'=>'fadeOutRight',
			'dhvc-waypoint-flipOutX'=>'flipOutX',
			'dhvc-waypoint-flipOutY'=>'flipOutY',
			'dhvc-waypoint-lightSpeedOutRight'=>'lightSpeedOutRight',
			'dhvc-waypoint-lightSpeedOutLeft'=>'lightSpeedOutLeft',
			'dhvc-waypoint-rotateOut'=>'rotateOut',
			'dhvc-waypoint-rotateOutUpLeft'=>'rotateOutUpLeft',
			'dhvc-waypoint-rotateOutDownLeft'=>'rotateOutDownLeft',
			'dhvc-waypoint-rotateOutUpRight'=>'rotateOutUpRight',
			'dhvc-waypoint-rollOut'=>'rollOut'
	);
	$options = array();
	foreach ($animations as $key=>$animation){
		$options[$animation]=$key;
	}
	return $options;
}

function dhvc_waypoint_get_timing(){
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

vc_map ( array (
		"name" => __ ( "DHVC Waypoint", DHVC_WAYPOINT ),
		"base" => "dhvc_waypoint",
		'show_settings_on_create' => true,
		'allowed_container_element' => 'vc_row',
		'is_container' => true,
		"category" => __ ( "DHVC Waypoint", DHVC_WAYPOINT ),
		"icon" => "icon-dhvc-waypoint",
		"params" => array (
				array(
						"type" => "dropdown",
						"heading" => __( "Animation name", DHVC_WAYPOINT ),
						"param_name" => "animation",
						"value" => dhvc_waypoint_get_anomations(),
						"description" => __("Select the a animation effect.", DHVC_WAYPOINT ),
				),
				array(
						"type" => "checkbox",
						"param_name" => "animatedonce",
						"value" => array( __( "Animated once", DHVC_WAYPOINT ) => "1" ),
						"description" => __( "If checked this will make sure the item only animates once and will not reset when it leaves the viewport.", DHVC_WAYPOINT ),
				),
				array(
						"type" => "dropdown",
						"heading" => __( "Animation Transition", DHVC_WAYPOINT ),
						"param_name" => "timing",
						"value" => dhvc_waypoint_get_timing(),
						"description" => __("Select the a animation transition.", DHVC_WAYPOINT ),
				),
				array(
						"type" => "textfield",
						"class" => "",
						"heading" => __( "Animation Duration (ms)", DHVC_WAYPOINT ),
						"param_name" => "duration",
						"value" => "1000",
						"description" => __( "Specifies how many milliseconds an animation takes to complete.", DHVC_WAYPOINT ),
				),
				array(
						"type" => "textfield",
						"class" => "",
						"heading" => __( "Animation Delay (ms)", DHVC_WAYPOINT ),
						"param_name" => "delay",
						"value" => "0",
						"description" => __( "Specifies a delay before the animation will start.", DHVC_WAYPOINT ),
				),
				array(
						"type" => "textfield",
						"class" => "",
						"heading" => __( "Waypoint Animation Iteration Count", DHVC_WAYPOINT ),
						"param_name" => "iteration_count",
						"value" => "1",
						"description" => __( "Specifies how many times an animation should be played. Value example: {number},infinite|initial|inherit . See detail property: <a href=\"http://www.w3schools.com/cssref/css3_pr_animation-iteration-count.asp\" target=\"_blank\">CSS3 animation-iteration-count Property</a>", DHVC_WAYPOINT ),
				),
				array(
						"type" => "checkbox",
						"param_name" => "mobile_enable",
						"value" => array( __( "Check this to enable the animation in mobile devices", DHVC_WAYPOINT ) => "1" ),
						"description" => __( "Animation effects would most probably cause slowdowns when your site is viewed in mobile devices. If the device width is less than 980 pixels, then it is assumed that the site is being viewed in a mobile device.", DHVC_WAYPOINT ),
				),
				array (
						'type' => 'textfield',
						'heading' => __ ( 'Extra class name', DHVC_WAYPOINT ),
						'param_name' => 'el_class',
						'description' => __ ( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', DHVC_WAYPOINT ) 
				) 
		) ,
		'js_view'=>'DHVCWaypoint'
) );