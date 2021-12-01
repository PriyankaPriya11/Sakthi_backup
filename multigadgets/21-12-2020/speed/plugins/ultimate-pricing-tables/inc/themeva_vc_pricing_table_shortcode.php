<?php

if( class_exists('WPBakeryShortCode') ) {

	class WPBakeryShortCode_T_Plan extends WPBakeryShortCode {

		protected  $predefined_atts = array(
			'el_position' => '',
			'title' => "",
			'featured' => '',
			'button_text' => '',
			'button_link' => '',
			'price' => '',
			'currency' => '',
			'target' => '',
			'icon' => '',
			'icon_background' => '',
			'icon_color' => '',						
			'per' => '',
			'color' => '',
			'el_class' => '',
			'width' => '1/4',
			'title_background' => '',
			'background_color' => '',
			'border_style' => '',
			'border_color' => '',
			'shade_color' => '',
			'text_color' => '',
			'title_color' => '',
			'button_color' => '',
			'button_text_color' => '',				
			'shadow' => ''
		);
		
       public function customAdminBlockParams() {
            return '';
       }
       public function mainHtmlBlockParams($width, $i) {
            return 'data-element_type="'.$this->settings["base"].'" class="wpb_'.$this->settings['base'].' wpb_sortable '.$this->templateWidth().' vc_shortcodes_container"'.$this->customAdminBlockParams();
       }
		protected function templateWidth() {
			return '<%= window.vc_convert_column_size(params.width) %>';
		}		
  
		public function getColumnControls( $controls, $extended_css = '' ) {
			$controls_start = '<div class="vc_controls controls controls_column vc_controls-visible controls' . ( ! empty( $extended_css ) ? " {$extended_css}" : '' ) . '">';
			$controls_end = '</div>';
	
			if ( $extended_css == 'bottom-controls' ) $control_title = __( 'Append to this column', 'js_composer' );
			else $control_title = __( 'Prepend to this column', 'js_composer' );
	
			$controls_add = ' <a class="vc_control column_add" href="#" title="' . $control_title . '"><i class="vc_icon"></i></a>';
			$controls_edit = ' <a class="vc_control column_edit vc_column-edit" data-vc-control="edit" href="#" title="' . __( 'Edit this column', 'js_composer' ) . '"><i class="vc_icon"></i></a>';
			//$controls_delete = ' <a class="vc_control column_delete" href="#" title="' . __( 'Delete this column', 'js_composer' ) . '"><i class="vc_icon"></i></a>';
	
			return $controls_start . $controls_add . $controls_edit . $controls_delete . $controls_end;
		}
		public function contentAdmin($atts, $content = null) {
			$width = $el_class = '';
           extract(shortcode_atts($this->predefined_atts, $atts));
           $output = '';

           $column_controls = $this->getColumnControls($this->settings('controls'));
           $column_controls_bottom =  $this->getColumnControls('add', 'bottom-controls');

		   if ( $width == 'column_14' || $width == '1/4' ) {
				$width = array('vc_span3');
			}
			else if ( $width == 'column_14-14-14-14' ) {
				$width = array('vc_span3', 'vc_span3', 'vc_span3', 'vc_span3');
			}
	
			else if ( $width == 'column_13' || $width == '1/3' ) {
				$width = array('vc_span4');
			}
			else if ( $width == 'column_13-23' ) {
				$width = array('vc_span4', 'vc_span8');
			}
			else if ( $width == 'column_13-13-13' ) {
				$width = array('vc_span4', 'vc_span4', 'vc_span4');
			}
	
			else if ( $width == 'column_12' || $width == '1/2' ) {
				$width = array('vc_span6');
			}
			else if ( $width == 'column_12-12' ) {
				$width = array('vc_span6', 'vc_span6');
			}
	
			else if ( $width == 'column_23' || $width == '2/3' ) {
				$width = array('vc_span8');
			}
			else if ( $width == 'column_34' || $width == '3/4' ) {
				$width = array('vc_span9');
			}
			else if ( $width == 'column_16' || $width == '1/6' ) {
				$width = array('vc_span2');
			} else if ( $width == 'column_56' || $width == '5/6' ) {
				$width = array('vc_span10');
			} else {
				$width = array('');
			}
			
            for ( $i=0; $i < count($width); $i++ ) {
                $output .= '<div '.$this->mainHtmlBlockParams($width, $i).'>';
                $output .= $column_controls;
                $output .= '<div class="wpb_element_wrapper">';
  
                if ( isset($this->settings['params']) ) {
                    $inner = '';
                    foreach ($this->settings['params'] as $param) {
                        $param_value = isset($$param['param_name']) ? $$param['param_name'] : '';
                        if ( is_array($param_value)) {
                            // Get first element from the array
                            reset($param_value);
                            $first_key = key($param_value);
                            $param_value = $param_value[$first_key];
                        }
                        $inner .= $this->singleParamHtmlHolder($param, $param_value);
                    }
                    $output .= $inner;
                }
                $output .= '</div>';
                $output .= '</div>';
            }
            return $output;
        }
		
		public function content( $atts, $content = null ) {
			$title = $el_position = $featured = $button_text = $button_link = $price = $target = $per = $color = $el_class = $width = $title_background = $icon_style = $shadow = $border_style = $shade_color = $text_color = $title_color = $plan_style = $plan_design = $button_style = $border_color = $background_color = '';
	
			extract(shortcode_atts(array(
				'el_position' => '',
				'title' => "",
				'featured' => '',
				'button_text' => '',
				'button_link' => '',
				'price' => '',
				'currency' => '',
				'target' => '',
				'icon' => '',
				'icon_background' => '',
				'icon_color' => '',						
				'per' => '',
				'color' => '',
				'el_class' => '',
				'width' => '1/4',
				'title_background' => '',
				'background_color' => '',
				'border_style' => '',
				'border_color' => '',
				'shade_color' => '',
				'text_color' => '',
				'title_color' => '',
				'button_color' => '',
				'button_text_color' => '',				
				'shadow' => ''				
			), $atts));	
		
			// Featured
			if( $featured == 'true' ) $featured = 'featured';
			
			// Custom Plan Design
			if( $color == 'custom' )
			{
				// Color
				if( !empty( $background_color ) )
				{
					$plan_design .= 'background-color:'. $background_color .';';
				}

				// Text Color
				if( !empty( $text_color ) )
				{
					$plan_design .= 'color:'. $text_color .';';
				}			
				
				// Button Color
				if( !empty( $button_color ) ) 
				{				
					$button_style = 'background-color:'. $button_color .';';
				}

					
			
				// Set Icon Background if not set
				if( empty( $icon_background ) )
				{
					$icon_background = $custom_color;
				}
			}
			elseif( $color == '' && empty( $custom_color ) )
			{
				$color = 'grey';
			}
			
			$width = wpb_translateColumnWidthToSpan($width);	
		
			$output = '';
			$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'pricing-plan group '. $featured .' '. ( !empty( $shadow ) ? 'shadow '  : '' ) . ( !empty( $plan_style ) ? $plan_style. ' '  : '' ) . ( !empty( $border_style ) ? 'border-'. $border_style .' ' : '' ) . $color .' '. $el_class .' '. $width, $this->settings['base']);
			$output .= "\n\t\t\t" . '<div class="'.$css_class.'">';	
			$output .= "\n\t\t\t\t" . '<div class="plan-wrap" '. ( !empty( $border_color ) && $color == 'custom' ? 'style="border-color:'. $border_color .'"' : '' ) .' >';		

			if( !empty( $icon ) ) 
			{
				// Icon + Icon Background
				if( !empty( $icon_color ) ) $icon_style .= 'color:'. $icon_color .';';
				if( !empty( $icon_background ) ) $icon_style .= 'background-color:'. $icon_background .';';						
				
				wp_register_style( 'font-awesome', plugins_url('../css/font-awesome/css/font-awesome.min.css', __FILE__) );
				wp_enqueue_style( 'font-awesome' );				
								
				$output .= "\n\t\t\t" . '<span class="icon-wrap" '. ( !empty( $icon_style ) && $color == 'custom' ? 'style="'. $icon_style .'"' : '' ) .'><span><i class="fa '. $icon .'"></i></span></span>';	
			}
			
			
			
			
			$output .= "\n\t\t\t\t" . '<div class="pricing-title '. ( !empty( $icon ) ? 'icon' : '' ) .' '. $color .'" '. ( !empty( $title_background ) && $color == 'custom' ? 'style="background-color:'. $title_background .'"' : '' ) .'>';
			
			if( !empty( $title ) )
			{
				$output .= '<h4 '. ( !empty( $title_color ) && $color == 'custom' ? 'style="color:'. $title_color .'"' : '' ) .'>'. ( $title =='BLANK' ? '&nbsp;' : esc_attr($title) ) .'</h4>';
			}
			
			if ( $price !='' )
			{
				$output .= "\n\t\t\t\t\t" . '<div class="pricing-cost" '. ( !empty( $title_color ) ? 'style="color:'. $title_color .'"' : '' ) .'><span class="price-value"><span class="price-currency">'. esc_attr($currency) .'</span><span class="price-number">'. ( $price =='BLANK' ? '&nbsp;' : $price ) .'</span><span class="price-per">'. esc_attr($per) .'</span></span></div>';
			}
			
			$output .= "\n\t\t\t\t" . '</div>';
			$output .= "\n\t\t\t\t\t" . '<div class="pricing-container '. $color .'" '. ( !empty( $plan_design ) ? 'style="'. $plan_design .'"' : '' ) .'>';
			$output .= "\n\t\t\t\t\t\t" . '<div class="pricing-content">';
			$output .= "\n\t\t\t\t\t\t\t" . wpb_js_remove_wpautop($content);
			$output .= "\n\t\t\t\t\t\t" . '</div> ' . $this->endBlockComment('.pricing-content');
				
			// Set Signup Button		
			if( $target !='' ) $target='target="'. $target .'"';
			
			if( $button_text != '' )
			{
				$output .= "\n\t\t\t\t\t" . '<div class="pricing-signup"><div class="pricing-button" '. ( !empty( $button_style ) ? 'style="'. $button_style .'"' : '' ) .'><div class="button-overlay"><a href="'.esc_attr($button_link).'" '. $target .' '. ( !empty( $button_text_color ) ? 'style="color:'. $button_text_color .'"' : ''  ) .' >'. esc_attr($button_text) .'</a></div></div></div>';
			}
				
			$output .= "\n\t\t\t\t\t" . '</div> ' . $this->endBlockComment('.pricing-container');
			$output .= "\n\t\t\t\t" . '</div> ' . $this->endBlockComment('.plan-wrap');	
			$output .= "\n\t\t\t" . '</div> ' . $this->endBlockComment('.pricing-plan');	
	
			return $output;
		}	
	}
	
	if( !class_exists( 'WPBakeryShortCode_VC_Row' ) )
	{
		require_once vc_path_dir('SHORTCODES_DIR', 'vc-row.php');
	}
	

	class WPBakeryShortCode_T_Pricing_Table extends WPBakeryShortCode_VC_Row {

	   protected $predefined_atts = array(
			'padding' => '',
			'el_class' => '',
			'animation' => '',
			'plan_style' => ''
		);

		protected function content( $atts, $content = null ) {
			$padding = $animation = $plan_style = $el_class = '';

			extract(shortcode_atts(array(
				'padding' => '',
				'el_class' => '',
				'animation' => '',
				'plan_style' => '',
			), $atts));
			$output = '';

			wp_register_style( 'themeva_pricing_table', plugins_url('../css/pricing-table.css', __FILE__) );
			wp_enqueue_style( 'themeva_pricing_table' );
			
			if( $padding != true ) 
			{
				$el_class .= ' no_padding';
			}
			else
			{
				$el_class .= ' '. get_row_css_class();
			}
			
			if( $plan_style == 'rounded' )
			{
				$el_class .= ' rounded';
			}
			
			if( $animation != 'disable' )
			{
				$el_class .= ' animate '. $animation;
			}
	
			$el_class = $this->getExtraClass($el_class);

			$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'themeva_pricing_table clearfix '.$el_class , $this->settings['base']);
	
			$output .= "\n\t".'<div class="'.$css_class.'">';
			$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
			$output .= "\n\t".'</div> '.$this->endBlockComment($width);			
			
			//$output = $this->startRow($el_position) . $output . $this->endRow($el_position);
			return $output;
		}		
	}
}