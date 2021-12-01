<?php

if(class_exists('WPBakeryShortCode')):

	if(!class_exists('WPBakeryShortCode_VC_Column')){
		require_once vc_path_dir('SHORTCODES_DIR', 'vc-column.php');
	}
	if(class_exists('WPBakeryShortCodesContainer')){
	class WPBakeryShortCode_DHVC_Waypoint extends WPBakeryShortCodesContainer {
		public function output( $atts, $content = null, $base = '' ) {
			$output = $el_class='';
			extract(shortcode_atts(array(
			'animation'=>'',
			'animatedonce'=>'',
			'timing'=>'',
			'duration'=>'',
			'delay'=>'',
			'iteration_count'=>'',
			'mobile_enable'=>'',
			'el_class'=>''
				), $atts));
				$el_class = $this->getExtraClass($el_class);
	
				$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $this->settings['base'].' '. $el_class,$this->settings['base'],$atts );
				$animatedonce_class = !empty($animatedonce) ? 'dhvc-waypoint-animatedOnce ':'';
				$mobile_enable_class = !empty($mobile_enable) ? '':' dhvc-waypoint-no-mobile ';
				$output .='<div data-mobile_enable="'.(int)$mobile_enable.'" class="'.$animatedonce_class.'dhvc-waypoint-animatedParent">';
				$output .= '<div class="'.$css_class.' dhvc-waypoint-animated  '.$animation.' '.$timing.$mobile_enable_class.'" style="-webkit-animation-duration: '.absint($duration).'ms;animation-duration: '.absint($duration).'ms;-webkit-animation-delay: '.absint($delay).'ms; animation-delay: '.absint($delay).'ms; -webkit-animation-iteration-count: '.$iteration_count.';animation-iteration-count:'.$iteration_count.';">' . "\n";
				$output .= wpb_js_remove_wpautop($content);
				$output .= '</div>';
				$output .='</div>';
				return $output;
		}
	}		
	}else{
		class WPBakeryShortCode_DHVC_Waypoint extends WPBakeryShortCode_VC_Column {
			protected $predefined_atts = array(
				'el_class' => '',
			);
		
			public function __construct( $settings ) {
				parent::__construct( $settings );
			}
		
			public function mainHtmlBlockParams( $width, $i ) {
				return 'data-element_type="' . $this->settings["base"] . '" class="' . $this->settings['base'] . ' wpb_sortable wpb_content_holder"';
			}
		
			public function containerHtmlBlockParams( $width, $i ) {
				return 'class="wpb_column_container vc_container_for_children"';
			}
		
			public function getColumnControls( $controls, $extended_css = '' ) {
				$controls_start = '<div class="controls controls_column' . ( ! empty( $extended_css ) ? " {$extended_css}" : '' ) . '">';
				$controls_end = '</div>';
		
				if ( $extended_css == 'bottom-controls' ) $control_title = sprintf( __( 'Append to this %s', DHVC_WAYPOINT ), strtolower( $this->settings( 'name' ) ) );
				else $control_title = sprintf( __( 'Prepend to this %s', DHVC_WAYPOINT ), strtolower( $this->settings( 'name' ) ) );
		
				$controls_add = ' <a class="column_add" href="#" title="' . $control_title . '"></a>';
				$controls_edit = ' <a class="column_edit" href="#" title="' . sprintf( __( 'Edit this %s', DHVC_WAYPOINT ), strtolower( $this->settings( 'name' ) ) ) . '"></a>';
				$controls_clone = '<a class="column_clone" href="#" title="' . sprintf( __( 'Clone this %s', DHVC_WAYPOINT ), strtolower( $this->settings( 'name' ) ) ) . '"></a>';
		
				$controls_delete = '<a class="column_delete" href="#" title="' . sprintf( __( 'Delete this %s', DHVC_WAYPOINT ), strtolower( $this->settings( 'name' ) ) ) . '"></a>';
				return $controls_start . $controls_add . $controls_edit . $controls_clone . $controls_delete . $controls_end;
			}
			
			public function output( $atts, $content = null, $base = '' ) {
				$output = $el_class='';
				extract(shortcode_atts(array(
					'animation'=>'',
					'animatedonce'=>'',
					'timing'=>'',
					'duration'=>'',
					'delay'=>'',
					'iteration_count'=>'',
					'mobile_enable'=>'',
					'el_class'=>''
				), $atts));
				$el_class = $this->getExtraClass($el_class);
				
				$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $this->settings['base'].' '. $el_class,$this->settings['base'],$atts );
				$animatedonce_class = !empty($animatedonce) ? 'dhvc-waypoint-animatedOnce ':'';
				$mobile_enable_class = !empty($mobile_enable) ? '':' dhvc-waypoint-no-mobile ';
				$output .='<div data-mobile_enable="'.(int)$mobile_enable.'" class="'.$animatedonce_class.'dhvc-waypoint-animatedParent">';
				$output .= '<div class="'.$css_class.' dhvc-waypoint-animated  '.$animation.' '.$timing.$mobile_enable_class.'" style="-webkit-animation-duration: '.absint($duration).'ms;animation-duration: '.absint($duration).'ms;-webkit-animation-delay: '.absint($delay).'ms; animation-delay: '.absint($delay).'ms; -webkit-animation-iteration-count: '.$iteration_count.';animation-iteration-count:'.$iteration_count.';">' . "\n";
				$output .= wpb_js_remove_wpautop($content);
				$output .= '</div>';
				$output .='</div>';
				return $output;
			}
		}
	}
endif;