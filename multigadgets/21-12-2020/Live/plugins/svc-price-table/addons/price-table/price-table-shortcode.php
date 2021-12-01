<?php
function svc_ptable_layout_shortcode( $atts , $content) {
	$output = '';
		extract(shortcode_atts(array(
			'choose_column'=>'',
			'choose_border'=>'',
			'ts_pricing_content'=>'Linux Web Hosting|Number of Websites,1,1,5,10
										Cloud hosting platform,Y,Y,N,Y',
			'img_pricing'=>'',
			'color'=>'',

			'icon_prcing_1'=>'',	
			'title_pricing_1'=>'',	
			'price_1'=>'',	
			'pence_pricing_1'=>'',	
			'unit_pricing_1'=>'',	
			'des_plan_one_1'=>'',	
			'vatprompt'=>'',	
			'button_pricing_1'=>'',	
			'link_pricing_1'=>'',
			'color_border_1'=>'',


			'icon_prcing_2'=>'',	
			'title_pricing_2'=>'',	
			'price_2'=>'',	
			'pence_pricing_2'=>'',	
			'unit_pricing_2'=>'',	
			'des_plan_one_2'=>'',	
			'vatprompt_2'=>'',	
			'button_pricing_2'=>'',	
			'link_pricing_2'=>'',
			'color_border_2'=>'',	

			'icon_prcing_3'=>'',	
			'title_pricing_3'=>'',	
			'price_3'=>'',	
			'pence_pricing_3'=>'',	
			'unit_pricing_3'=>'',	
			'des_plan_one_3'=>'',	
			'vatprompt_3'=>'',	
			'button_pricing_3'=>'',	
			'link_pricing_3'=>'',
			'color_border_3'=>'',

			'icon_prcing_4'=>'',	
			'title_pricing_4'=>'',	
			'price_4'=>'',	
			'pence_pricing_4'=>'',	
			'unit_pricing_4'=>'',	
			'des_plan_one_4'=>'',	
			'vatprompt_4'=>'',	
			'button_pricing_4'=>'',	
			'link_pricing_4'=>'',
			'color_border_4'=>'',

			'borber_1'=>'',
			'borber_2'=>'',
			'borber_3'=>'',
			'borber_4'=>'',
		), $atts));

		wp_register_style( 'svc-ptable-css', plugins_url('css/css.css', __FILE__));
		wp_enqueue_style( 'svc-ptable-css');
		$output .='<style type="text/css">';
		if($color != ''){
			$output .='.svc-pt-pricingtable-5 .price-icon{background:'.$color.' !important;}
					   .svc-pt-pricingtable-5 .price-unit{color:'.$color.' !important;}
					   .svc-pt-pricingtable-5 .svc-pt-bt-pricing{background:'.$color.' !important;border:1px solid '.$color.' !important;}
					   .svc-pt-pricingtable-5 .svc-pt-bt-pricing:hover{color:'.$color.' !important;border:1px solid '.$color.' !important;background:#fff !important;}';
		}
		$output .='</style>';
			if(isset($img_pricing) && is_numeric($img_pricing))
							 {
							 	$img_pricing = wp_get_attachment_image_src($img_pricing,'img216x460');
								$img_pricing = $img_pricing[0];
							 }
			if($choose_border=='yes'){
				if($color_border_1!=''){					
					$borber_1 = 'style="border:2px solid '.esc_attr( $color_border_1).';"';
				}
				if($color_border_2!=''){					
					$borber_2 = 'style="border:2px solid '.esc_attr( $color_border_2).';"';
				}
				if($color_border_3!=''){					
					$borber_3 = 'style="border:2px solid '.esc_attr( $color_border_3).';"';
				}
				if($color_border_4!=''){					
					$borber_4 = 'style="border:2px solid '.esc_attr( $color_border_4).';"';
				}
			}				 
			

			$output .='<div class="svc-pt-pricingtable-5">
						<table>
							<tr class="section-info">
								<td class="svc-pt-pricing-img"><figure><img alt="" src="'.esc_url($img_pricing).'"></figure></td>
								<td>
									<div class="svc-pt-pricing-item" '.$borber_1.'>
										<span class="price-icon"><i class="fa '.esc_attr($icon_prcing_1).'"></i></span>
										<h3 class="price-title">'.esc_attr($title_pricing_1).'</h3>
										<div class="price-unit-vat">
											<div class="price-unit">
												<span class="price">'.esc_attr( $price_1).'.</span>
												<span class="unit">'.esc_attr( $pence_pricing_1 ).' / <span class="per-month">'.esc_attr( $unit_pricing_1).'</span></span>
											</div>	
											<p>'.apply_filters('the_title',$vatprompt).'</p>
										</div>
										<div class="desc">'.esc_attr( $des_plan_one_1).'</div>
										<div class="section-feature visible-xs ddfgdf">';
										$items_respon   = preg_split( '/\t\r\n|\r|\n/', $ts_pricing_content );
										/*foreach($items_respon as $item_res){
											$exts_res = explode("|", $item_res);						
											foreach($exts_res as $ext_res){
											$ex_res = explode(",", $ext_res);
												if(count($ex_res)==1){	
												$output .=' <h3 class="title-feature">'.$ex_res[0].'</h3>';
												}			
												$output .= '<ul>';
												if(count($ex_res)!=1){																	
														$ex_res[1]=strip_tags($ex_res[1]);
														if($ex_res[1]=='Y'){													
															$ex_res[1]='<span class="svc-pt-icon-check"><i class="fa fa-check"></i>';
														}elseif($ex_res[1]=='N'){													
															$ex_res[1]='<span class="svc-pt-icon-close"><i class="fa fa-close"></i></span>';
														}				
														$output .= '<li><label>'.esc_attr($ex_res[0]).'</label>'.$ex_res[1].'</li>';										
													 	
												}
														$output .= '</ul>';
											}
										}*/
									$output .='						
										</div>
										<a href="'.esc_url($link_pricing_1).'" class="svc-pt-bt-pricing">'.esc_attr($button_pricing_1).'</a>
									</div>
								</td>
								<td>
									<div class="svc-pt-pricing-item" '.$borber_2.'>
										<span class="price-icon"><i class="fa '.esc_attr($icon_prcing_2).'"></i></span>
										<h3 class="price-title">'.esc_attr($title_pricing_2).'</h3>
										<div class="price-unit-vat">
											<div class="price-unit">
												<span class="price">'.esc_attr( $price_2).'.</span>
												<span class="unit">'.esc_attr( $pence_pricing_2 ).' / <span class="per-month">'.esc_attr( $unit_pricing_2).'</span></span>
											</div>	
											<p>'.apply_filters('the_title',$vatprompt_2).'</p>
										</div>
										<div class="desc">'.esc_attr( $des_plan_one_2).'</div>
										<div class="section-feature visible-xs">';
										$items_respon_2   = preg_split( '/\t\r\n|\r|\n/', $ts_pricing_content );
											/*foreach($items_respon_2 as $item_res_2){
												$exts_res_2 = explode("|", $item_res_2);						
												foreach($exts_res_2 as $ext_res_2){
												$ex_res_2 = explode(",", $ext_res_2);
													if(count($ex_res_2)==1){	
													$output .=' <h3 class="title-feature">'.$ex_res_2[0].'</h3>';
													}			
													$output .= '<ul>';
													if(count($ex_res_2)!=1){																	
															$ex_res_2[2]=strip_tags($ex_res_2[2]);
															if($ex_res_2[2]=='Y'){													
																$ex_res_2[2]='<span class="svc-pt-icon-check"><i class="fa fa-check"></i>';
															}elseif($ex_res_2[2]=='N'){													
																$ex_res_2[2]='<span class="svc-pt-icon-close"><i class="fa fa-close"></i></span>';
															}				
															$output .= '<li><label>'.esc_attr($ex_res_2[0]).'</label>'.$ex_res_2[2].'</li>';																								 	
													}
															$output .= '</ul>';
												}
											}*/
										$output .='
										</div>
										<a href="'.esc_url($link_pricing_2).'" class="svc-pt-bt-pricing">'.esc_attr($button_pricing_2).'</a>
									</div>
								</td>';
								if($choose_column=='4'||$choose_column=='5'){
			$output	.='			<td>
									<div class="svc-pt-pricing-item" '.$borber_3.'>
										<span class="price-icon"><i class="fa '.esc_attr($icon_prcing_3).'"></i></span>
										<h3 class="price-title">'.esc_attr($title_pricing_3).'</h3>
										<div class="price-unit-vat">
											<div class="price-unit">
												<span class="price">'.esc_attr( $price_3).'.</span>
												<span class="unit">'.esc_attr( $pence_pricing_3 ).' / <span class="per-month">'.esc_attr( $unit_pricing_3).'</span></span>
											</div>	
											<p>'.apply_filters('the_title',$vatprompt_3).'</p>
										</div>
										<div class="desc">'.esc_attr( $des_plan_one_3).'</div>
										<div class="section-feature visible-xs">';
										$items_respon_3   = preg_split( '/\t\r\n|\r|\n/', $ts_pricing_content );
											/*foreach($items_respon_3 as $item_res_3){
												$exts_res_3 = explode("|", $item_res_3);						
												foreach($exts_res_3 as $ext_res_3){
												$ex_res_3 = explode(",", $ext_res_3);
													if(count($ex_res_3)==1){	
													$output .=' <h3 class="title-feature">'.$ex_res_3[0].'</h3>';
													}			
													$output .= '<ul>';
													if(count($ex_res_3)!=1){																	
															$ex_res_3[3]=strip_tags($ex_res_3[3]);
															if($ex_res_3[3]=='Y'){													
																$ex_res_3[3]='<span class="svc-pt-icon-check"><i class="fa fa-check"></i>';
															}elseif($ex_res_3[3]=='N'){													
																$ex_res_3[3]='<span class="svc-pt-icon-close"><i class="fa fa-close"></i></span>';
															}				
															$output .= '<li><label>'.esc_attr($ex_res_3[0]).'</label>'.$ex_res_3[3].'</li>';										
														 	
													}
															$output .= '</ul>';
												}
											}*/
									$output	.='
										</div>
										<a href="'.esc_url($link_pricing_3).'" class="svc-pt-bt-pricing">'.esc_attr($button_pricing_3).'</a>
									</div>
								</td>';
							}
			if($choose_column=='5'){
			$output	.='			<td>
								<div class="svc-pt-pricing-item" '.$borber_4.'>
										<span class="price-icon"><i class="fa '.esc_attr($icon_prcing_4).'"></i></span>
										<h3 class="price-title">'.esc_attr($title_pricing_4).'</h3>
										<div class="price-unit-vat">
											<div class="price-unit">
												<span class="price">'.esc_attr( $price_4).'.</span>
												<span class="unit">'.esc_attr( $pence_pricing_4 ).' / <span class="per-month">'.esc_attr( $unit_pricing_4).'</span></span>
											</div>	
											<p>'.apply_filters('the_title',$vatprompt_4).'</p>
										</div>
										<div class="desc">'.esc_attr( $des_plan_one_4).'</div>
										<div class="section-feature visible-xs">';
										$items_respon_4   = preg_split( '/\t\r\n|\r|\n/', $ts_pricing_content );
											/*foreach($items_respon_4 as $item_res_4){
												$exts_res_4 = explode("|", $item_res_4);						
												foreach($exts_res_4 as $ext_res_4){
												$ex_res_4 = explode(",", $ext_res_4);
													if(count($ex_res_4)==1){	
													$output .=' <h3 class="title-feature">'.$ex_res_4[0].'</h3>';
													}			
													$output .= '<ul>';
													if(count($ex_res_4)!=1){																	
															$ex_res_4[3]=strip_tags($ex_res_4[3]);
															if($ex_res_4[3]=='Y'){													
																$ex_res_4[3]='<span class="svc-pt-icon-check"><i class="fa fa-check"></i>';
															}elseif($ex_res_4[3]=='N'){													
																$ex_res_4[3]='<span class="svc-pt-icon-close"><i class="fa fa-close"></i></span>';
															}				
															$output .= '<li><label>'.esc_attr($ex_res_4[0]).'</label>'.$ex_res_4[3].'</li>';										
														 	
													}
															$output .= '</ul>';
												}
											}*/
									$output	.='
										</div>
										<a href="'.esc_url($link_pricing_4).'" class="svc-pt-bt-pricing">'.esc_attr($button_pricing_4).'</a>
									</div>
								</td>';
							}					
			$output	.=			'</tr>';							
						$items_contents   = preg_split( '/\t\r\n|\r|\n/', $ts_pricing_content );
						foreach($items_contents as $item){
							$exts = explode("|", $item);						
							foreach($exts as $ext){
							$ex = explode(",", $ext);
							if(count($ex)==1){	
							$output .=' <tr class="hidden-xs">
											<td colspan="'.esc_attr($choose_column ).'" class="title-feature">'.$ex[0].'</td>
										</tr>';
							}			
										$output .= '<tr class="hidden-xs list-feature">';
										if(count($ex)!=1){							
											for ($i=0; $i < $choose_column; $i++) { 
												$ex[$i]=strip_tags($ex[$i]);
												if($ex[$i]=='Y'){
													$a = 'aa';
													$class_pricing='svc-pt-icon-check';
													$ex[$i]='<i class="fa fa-check"></i>';
												}elseif($ex[$i]=='N'){
													$class_pricing='svc-pt-icon-close';
													$ex[$i]='<i class="fa fa-close"></i>';
												}else{
													$class_pricing = '';
												}				
												$output .= '<td><span class="inner-td '.esc_attr( $class_pricing).'">'.$ex[$i].'</span></td>';										
											 }	
												$output .= '</tr>';
										}
							}
						}		
							
			$output .='		<tr class="pricing-footer hidden-xs">
								<td></td>
								<td>
									<div class="svc-pt-footer-price">
										<div class="price-unit">
											<span class="price">'.esc_attr( $price_1).'.</span>
											<span class="unit">'.esc_attr( $pence_pricing_1 ).'/'.esc_attr( $unit_pricing_1).'</span>
										</div>	
										<p>'.apply_filters('the_title',$vatprompt).'</p>
										<a href="'.esc_url($link_pricing_1).'" class="svc-pt-bt-pricing">'.esc_attr($button_pricing_1).'</a>
									</div>
								</td>
								<td>
									<div class="svc-pt-footer-price">
										<div class="price-unit">
											<span class="price">'.esc_attr( $price_2).'.</span>
											<span class="unit">'.esc_attr( $pence_pricing_2 ).'/'.esc_attr( $unit_pricing_2).'</span>
										</div>	
										<p>'.apply_filters('the_title',$vatprompt_2).'</p>
										<a href="'.esc_url($link_pricing_2).'" class="svc-pt-bt-pricing">'.esc_attr($button_pricing_2).'</a>
									</div>
								</td>';
								if($choose_column=='4'||$choose_column=='5'){
			$output .='			<td>
									<div class="svc-pt-footer-price">
										<div class="price-unit">
											<span class="price">'.esc_attr( $price_3).'.</span>
											<span class="unit">'.esc_attr( $pence_pricing_3 ).'/'.esc_attr( $unit_pricing_3).'</span>
										</div>	
										<p>'.apply_filters('the_title',$vatprompt_3).'</p>
										<a href="'.esc_url($link_pricing_3).'" class="svc-pt-bt-pricing">'.esc_attr($button_pricing_3).'</a>
									</div>
								</td>';
								}
								if($choose_column=='5'){
			$output .='			<td>
									<div class="svc-pt-footer-price">
										<div class="price-unit">
											<span class="price">'.esc_attr( $price_4).'.</span>
											<span class="unit">'.esc_attr( $pence_pricing_4 ).'/'.esc_attr( $unit_pricing_4).'</span>
										</div>	
										<p>'.apply_filters('the_title',$vatprompt_4).'</p>
										<a href="'.esc_url($link_pricing_4).'" class="svc-pt-bt-pricing">'.esc_attr($button_pricing_4).'</a>
									</div>
								</td>';
								}
			$output .='		</tr>
						</table>
					</div>
					';				

	return $output;	
}

function svc_ptable_layout1_shortcode( $atts , $content = null) {
    	$html = '';
		 extract( shortcode_atts(
		  array(
		   'css' => '',
		   //custom
		   'pricing_table_style'=>'style1',
		   'pricing_title'=>'Economy',
		   'pricing_price'=>'$3.99',
		   'pricing_unit'=>'pm',
		   'pricing_link_button'=>'#',
		   'pricing_text_button'=>'GET STARTED',
		   'class_active'=>'',
		   'css_awesome'=>'',
		   'pricing_subtitle'=>'',
		   'price_description'=>'',
		   'image_service'=>'',

		  ), $atts ));
		wp_register_style( 'svc-ptable-css', plugins_url('css/css.css', __FILE__));
		wp_enqueue_style( 'svc-ptable-css');

// Content
		if($pricing_table_style =='style1')	{
			$html .='<div class="svc-pt-pricing-table-style1 '.$class_active.'">
							<div class="price-unit">
								<span class="price">'.$pricing_price.'</span>
								<span class="unit">'.$pricing_unit.'</span>
							</div>
							<h3>'.esc_attr($pricing_title).'</h3>';
			$html .= apply_filters('the_content',$content);
			$html .='<a class="cta_pricing" href="'.esc_url($pricing_link_button).'">'.$pricing_text_button.'</a>
						</div>';
		}elseif($pricing_table_style =='style3'){
			$html .='<div class="svc-pt-pricing-table-style3 '.$class_active.'">
							<div class="price-icon">
								<span class="pricing-icon"><i class="fa '.esc_attr($css_awesome).'"></i></span>								
							</div>';
			$html .='		<div class="price-title">
								<h3>'.esc_attr($pricing_title).'</h3>
								<p>'.esc_attr( $pricing_subtitle).'</p>
							</div>';
			$html .='		<div class="price-unit">
								from
								<div class="price-unit">
									<span class="price">'.$pricing_price.'</span>
									<span class="unit">'.$pricing_unit.'</span>
								</div>	
								<p>'.apply_filters('the_title',$price_description).'</p>
							</div>';				
			$html .= apply_filters('the_content',$content);
			$html .='<a class="cta_pricing" href="'.esc_url($pricing_link_button).'">'.$pricing_text_button.'</a>
						</div>';
		}elseif($pricing_table_style=='style2'){
			$html .='<div class="svc-pt-pricing-table-style2 '.$class_active.'">
						<h3>'.$pricing_title.'</h3>
						<div class="price-unit">
							<span class="price">'.$pricing_price.'</span>
							<span class="unit">'.$pricing_unit.'</span>
							</div>';
			$html .= apply_filters('the_content',$content);
			$html .='<a class="cta_pricing" href="'.esc_url($pricing_link_button).'">'.$pricing_text_button.'</a>
						</div>';
		}else{
			if(isset($image_service) && is_numeric($image_service))
		 {
			$image_service = wp_get_attachment_image_src($image_service,'full');
			$image_service = $image_service[0];
		 }
			$html .='<div class="svc-pt-service-img">
						<div class="service-img">
							<figure><img alt="" src="'.esc_url($image_service).'"></figure>
						</div>
						<div class="service-content">
							<h4>'.$pricing_title.'</h4>';
			$html .= apply_filters('the_content',$content);	

			$html .='		
							<div class="svc-pt-price-unit"><span class="price">'.esc_attr($pricing_price).'</span>/'.esc_attr( $pricing_unit).'</div>
							<a class="cta_pricing" href="'.esc_url($pricing_link_button).'">'.$pricing_text_button.'</a>
						</div>
					 </div>'	;
		}
	 return $html;
}

function svc_ptable_layout2_shortcode( $atts , $content = null) {
    	$html = $css ='';

		 extract( shortcode_atts(
		  array(
		   'el_class'=>'',
		   'css'=>'',
		   //custom
		   'heading_hosting'=>'Single CPU, Multiple Cores (Intel Xeon E3)',
		   'content_title'=>'CPU|RAM|HARD DRIVER|BANDWIDTH|PRICE',
		   'unit_hosting'=>'',
		  ), $atts ));
		wp_register_style( 'svc-ptable-css', plugins_url('css/css.css', __FILE__));
		wp_enqueue_style( 'svc-ptable-css');

		$text_title = explode("|", $content_title);
		$html .='<table class="svc-pt-compare-table svc-pt-res-table">
				<thead>
					<tr class="svc-pt-compare-heading">
						<th colspan="6">'.$heading_hosting.'</th>
					</tr>
					<tr class="title-compare-table">';
							for ($i=0; $i < 5 ; $i++) {
					$html .='<td>'.$text_title[$i].'</td>';
								}
					$html .='<td></td></tr>
				</thead>
				<tbody>';
					$content = stripcslashes( $content);
					$items   = preg_split( '/\t\r\n|\r|\n/', $content );
					foreach($items as $item){
						$extract = explode("|", $item);
						
						if(strpos($extract[5],'.')){
							$ws = explode('.',$extract[5]);
							$whole = $ws[0];
							$decimal = $ws[1];
						}else{
							$whole = $extract[5];
							$decimal = '00';
						}
		$html .= '	<tr>
						<td data-title="'.$text_title[0].'">
							<span class="compare-name">'.$extract[0].'</span>
							<span class="compare-line">'.$extract[1].'</span>
						</td>
						<td data-title="'.$text_title[1].'">'.$extract[2].'</td>
						<td data-title="'.$text_title[2].'">'.$extract[3].'</td>
						<td data-title="'.$text_title[3].'">'.$extract[4].'</td>
						<td data-title="'.$text_title[4].'">
							<span class="compare-price">'.$whole.'</span>
							<div class="compare-unit"><span class="top-unit">.'.$decimal.'</span><span class="bt-unit">'.$extract[6].'</span></div>
						</td>
						<td class="no-title">
							<a href="'.esc_url(strip_tags($extract[8])).'" class="svc-pt-bt cta-compare">'.strip_tags($extract[7]).'</a>							
						</td>
					</tr>';
					}
		$html .='</tbody></table>';
		return $html ;
	}
?>
