<?php
include('price-table-shortcode.php');
if(!class_exists('svc_ptable_layout'))
{
	class svc_ptable_layout
	{
		function __construct()
		{
			add_action('admin_init',array($this,'svc_ptable_layout_init'));
			add_shortcode('svc_ptable_layout','svc_ptable_layout_shortcode');
			add_shortcode('svc_ptable_layout1','svc_ptable_layout1_shortcode');
			add_shortcode('svc_ptable_layout2','svc_ptable_layout2_shortcode');
		}
		function svc_ptable_layout_init()
		{

			if(function_exists('vc_map'))
			{
				vc_map( array(
				 'name' => __( 'Pricing Table', 'svc-ptable' ),
				 'base' => 'svc_ptable_layout',
				 "class" => "",
				 "category" => __('Price Table','svc-ptable'),
				 'params' => array(
					array(
						'type' => 'dropdown',
						'heading' => __( 'Choose Number plan display', 'svc-ptable' ),
						'param_name' => 'choose_column',
						'value' => array(
							__( 'Two plan', 'svc-ptable' ) => '3',
							__( 'Three plan', 'svc-ptable' ) => '4',			    						   				
							__( 'Four plan', 'svc-ptable' ) => '5',			    						   				
						),						  
						'description' => __( 'Choose number plan display .', 'svc-ptable' )
					),
					array(
						'type' => 'dropdown',
						'heading' => __( 'Choose style plan display', 'svc-ptable' ),
						'param_name' => 'choose_border',
						'value' => array(
							__( 'No border', 'svc-ptable' ) => 'no',
							__( 'Yes border', 'svc-ptable' ) => 'yes',			    						   											    						   			
						),						  
						'description' => __( 'Choose style plan display .', 'svc-ptable' )
					),	
						
					array(
						 "type" => "textarea",
						 "class" => "",
						 "admin_label" => true,
						 "heading" => __("Pricing Content", 'svc-ptable'),
						 "param_name" => "ts_pricing_content",
						 "value" => "Linux Web Hosting|Number of Websites,1,1,5,10
										Cloud hosting platform,Y,Y,N,Y",	         
						 "description" => __("Input graph values here. Divide values with linebreaks (Enter). <br />
												Example: Linux Web Hosting includes|Number of Websites,1,1,5,9 <br />Cloud hosting platform,Y,Y,Y,N", 'svc-ptable')
					), 
					array(
						"type" => "attach_image",
						"holder" => "div",
						"class" => "",
						"heading" => __("Image pricing","themestudio"),
						"param_name" => "img_pricing",
						"value" => '',	            
						"description" => __("Upload image pricing","themestudio")
					),
					array(
						'type' => 'colorpicker',
						'heading' => __( 'icon background and button color.', 'js_composer' ),
						'param_name' => 'color',
						'description' => __( 'icon background and button color.', 'js_composer' ),
					),

			// Plan 1			
					array(			    			   
						'type' => 'textfield',
						"heading" => __("Icon Pricing",'svc-ptable'),
						"class" => "",
						"param_name" => "icon_prcing_1",		
						'value' => '',
						'group' => __( 'Plan one', 'svc-ptable' ),
						'description' => __( 'Enter font icon awesome .eg: fa-facebook... . <a href="http://fortawesome.github.io/Font-Awesome/icons/">click here.</a>', 'svc-ptable' ),
					 ), 	
					array(
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __("Title pricing plan one",'svc-ptable'),
						"param_name" => "title_pricing_1",			    
						'group' => __( 'Plan one', 'svc-ptable' ),
						"description" => __("Enter Value for element",'svc-ptable')
					 ),
					array(
						"type" => "colorpicker",
						"holder" => "div",
						"class" => "",
						"heading" => __("Color border plan 1","themestudio"),
						"param_name" => "color_border_1",
						"value" => '', //Default color
						'dependency' => array(
							'element' => 'choose_border',
							'value' => array( 'yes')
							),
						'group' => __( 'Plan one', 'svc-ptable' ),			             
						"description" => __("Select color for plan 1","themestudio")
						),
					 array(
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __("Price",'svc-ptable'),
						"param_name" => "price_1",			    
						'group' => __( 'Plan one', 'svc-ptable' ),
						"description" => __("Enter Value for element",'svc-ptable')
					 ),
					 array(
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __("pence",'svc-ptable'),
						"param_name" => "pence_pricing_1",			    
						'group' => __( 'Plan one', 'svc-ptable' ),
						"description" => __("Enter Value for element",'svc-ptable')
					 ),    
					array(
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __("Unit",'svc-ptable'),
						"param_name" => "unit_pricing_1",			    
						'group' => __( 'Plan one', 'svc-ptable' ),
						"description" => __("Enter Value for element",'svc-ptable')
					 ),
					array(
						"type" => "textarea",
						"holder" => "div",
						"class" => "",
						"heading" => __("VAT prompt",'svc-ptable'),
						"param_name" => "vatprompt",			    
						'group' => __( 'Plan one', 'svc-ptable' ),
						"description" => __("Enter Value for element",'svc-ptable')
					 ),
					array(
						 "type" => "textarea",
						 "class" => "",
						 "admin_label" => true,
						 "heading" => __("Description plan one", 'svc-ptable'),
						 "param_name" => "des_plan_one_1",
						 "value" => "",	 
						 'group' => __( 'Plan one', 'svc-ptable' ),        
						 "description" => __("Input description values here", 'svc-ptable')
					),
					array(
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __("Text button",'svc-ptable'),
						"param_name" => "button_pricing_1",			    
						'group' => __( 'Plan one', 'svc-ptable' ),
						"description" => __("Enter text button for element",'svc-ptable')
					 ),
					array(
						 "type" => "textfield",
						 "class" => "",		         
						 "heading" => __("Link button", 'svc-ptable'),
						 "param_name" => "link_pricing_1",
						 "value" => "",	 
						 'group' => __( 'Plan one', 'svc-ptable' ),        
						 "description" => __("Input link pricing one values here", 'svc-ptable')
					), 
			// Plan 2 		
					array(			    			   
						'type' => 'textfield',
						"heading" => __("Icon Pricing",'svc-ptable'),
						"class" => "",
						"param_name" => "icon_prcing_2",		
						'value' => '',
						'group' => __( 'Plan Two', 'svc-ptable' ),
						'description' => __( 'Enter font icon awesome .eg: fa-facebook... . <a href="http://fortawesome.github.io/Font-Awesome/icons/">click here.</a>', 'svc-ptable' ),
					 ), 	
					array(
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __("Title pricing plan one",'svc-ptable'),
						"param_name" => "title_pricing_2",			    
						'group' => __( 'Plan Two', 'svc-ptable' ),
						"description" => __("Enter Value for element",'svc-ptable')
					 ),
					array(
						"type" => "colorpicker",
						"holder" => "div",
						"class" => "",
						"heading" => __("Color border plan 2","themestudio"),
						"param_name" => "color_border_2",
						"value" => '', //Default color
						'dependency' => array(
							'element' => 'choose_border',
							'value' => array( 'yes')
							),
						'group' => __( 'Plan Two', 'svc-ptable' ),			             
						"description" => __("Select color for plan 2","themestudio")
						),
					 array(
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __("Price",'svc-ptable'),
						"param_name" => "price_2",			    
						'group' => __( 'Plan Two', 'svc-ptable' ),
						"description" => __("Enter Value for element",'svc-ptable')
					 ),
					 array(
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __("pence",'svc-ptable'),
						"param_name" => "pence_pricing_2",			    
						'group' => __( 'Plan Two', 'svc-ptable' ),
						"description" => __("Enter Value for element",'svc-ptable')
					 ),    
					array(
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __("Unit",'svc-ptable'),
						"param_name" => "unit_pricing_2",			    
						'group' => __( 'Plan Two', 'svc-ptable' ),
						"description" => __("Enter Value for element",'svc-ptable')
					 ),
					array(
						"type" => "textarea",
						"holder" => "div",
						"class" => "",
						"heading" => __("VAT prompt",'svc-ptable'),
						"param_name" => "vatprompt_2",			    
						'group' => __( 'Plan Two', 'svc-ptable' ),
						"description" => __("Enter Value for element",'svc-ptable')
					 ),
					array(
						 "type" => "textarea",
						 "class" => "",
						 "admin_label" => true,
						 "heading" => __("Description plan one", 'svc-ptable'),
						 "param_name" => "des_plan_one_2",
						 "value" => "",	 
						 'group' => __( 'Plan Two', 'svc-ptable' ),        
						 "description" => __("Input description values here", 'svc-ptable')
					),
					array(
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __("Text button",'svc-ptable'),
						"param_name" => "button_pricing_2",			    
						'group' => __( 'Plan Two', 'svc-ptable' ),
						"description" => __("Enter text button for element",'svc-ptable')
					 ),
					array(
						 "type" => "textfield",
						 "class" => "",		         
						 "heading" => __("Link button", 'svc-ptable'),
						 "param_name" => "link_pricing_2",
						 "value" => "",	 
						 'group' => __( 'Plan Two', 'svc-ptable' ),        
						 "description" => __("Input link pricing one values here", 'svc-ptable')
					), 
			// Plan 3     	  
					array(			    			   
						'type' => 'textfield',
						"heading" => __("Icon Pricing",'svc-ptable'),
						"class" => "",
						"param_name" => "icon_prcing_3",		
						'value' => '',
						'group' => __( 'Plan Three', 'svc-ptable' ),
						'description' => __( 'Enter font icon awesome .eg: fa-facebook... . <a href="http://fortawesome.github.io/Font-Awesome/icons/">click here.</a>', 'svc-ptable' ),
					 ), 	
					array(
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __("Title pricing plan one",'svc-ptable'),
						"param_name" => "title_pricing_3",			    
						'group' => __( 'Plan Three', 'svc-ptable' ),
						"description" => __("Enter Value for element",'svc-ptable')
					 ),
					array(
						"type" => "colorpicker",
						"holder" => "div",
						"class" => "",
						"heading" => __("Color border plan 3","themestudio"),
						"param_name" => "color_border_3",
						"value" => '', //Default color
						'dependency' => array(
							'element' => 'choose_border',
							'value' => array( 'yes')
							),
						'group' => __( 'Plan Three', 'svc-ptable' ),			             
						"description" => __("Select color for plan 3","themestudio")
						),
					 array(
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __("Price",'svc-ptable'),
						"param_name" => "price_3",			    
						'group' => __( 'Plan Three', 'svc-ptable' ),
						"description" => __("Enter Value for element",'svc-ptable')
					 ),
					 array(
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __("pence",'svc-ptable'),
						"param_name" => "pence_pricing_3",			    
						'group' => __( 'Plan Three', 'svc-ptable' ),
						"description" => __("Enter Value for element",'svc-ptable')
					 ),    
					array(
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __("Unit",'svc-ptable'),
						"param_name" => "unit_pricing_3",			    
						'group' => __( 'Plan Three', 'svc-ptable' ),
						"description" => __("Enter Value for element",'svc-ptable')
					 ),
					array(
						"type" => "textarea",
						"holder" => "div",
						"class" => "",
						"heading" => __("VAT prompt",'svc-ptable'),
						"param_name" => "vatprompt_3",			    
						'group' => __( 'Plan Three', 'svc-ptable' ),
						"description" => __("Enter Value for element",'svc-ptable')
					 ),
					array(
						 "type" => "textarea",
						 "class" => "",
						 "admin_label" => true,
						 "heading" => __("Description plan one", 'svc-ptable'),
						 "param_name" => "des_plan_one_3",
						 "value" => "",	 
						 'group' => __( 'Plan Three', 'svc-ptable' ),        
						 "description" => __("Input description values here", 'svc-ptable')
					),
					array(
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __("Text button",'svc-ptable'),
						"param_name" => "button_pricing_3",			    
						'group' => __( 'Plan Three', 'svc-ptable' ),
						"description" => __("Enter text button for element",'svc-ptable')
					 ),
					array(
						 "type" => "textfield",
						 "class" => "",		         
						 "heading" => __("Link button", 'svc-ptable'),
						 "param_name" => "link_pricing_3",
						 "value" => "",	 
						 'group' => __( 'Plan Three', 'svc-ptable' ),        
						 "description" => __("Input link pricing one values here", 'svc-ptable')
					),  	
			// Plan 4     	  
					array(			    			   
						'type' => 'textfield',
						"heading" => __("Icon Pricing",'svc-ptable'),
						"class" => "",
						"param_name" => "icon_prcing_4",		
						'value' => '',
						'group' => __( 'Plan Four', 'svc-ptable' ),
						'description' => __( 'Enter font icon awesome .eg: fa-facebook... . <a href="http://fortawesome.github.io/Font-Awesome/icons/">click here.</a>', 'svc-ptable' ),
					 ), 	
					array(
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __("Title pricing plan one",'svc-ptable'),
						"param_name" => "title_pricing_4",			    
						'group' => __( 'Plan Four', 'svc-ptable' ),
						"description" => __("Enter Value for element",'svc-ptable')
					 ),
					array(
						"type" => "colorpicker",
						"holder" => "div",
						"class" => "",
						"heading" => __("Color border plan 4","themestudio"),
						"param_name" => "color_border_4",
						"value" => '', //Default color
						'dependency' => array(
							'element' => 'choose_border',
							'value' => array( 'yes')
							),		             
						'group' => __( 'Plan Four', 'svc-ptable' ),
						"description" => __("Select color for plan 4","themestudio")
						),
					 array(
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __("Price",'svc-ptable'),
						"param_name" => "price_4",			    
						'group' => __( 'Plan Four', 'svc-ptable' ),
						"description" => __("Enter Value for element",'svc-ptable')
					 ),
					 array(
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __("pence",'svc-ptable'),
						"param_name" => "pence_pricing_4",			    
						'group' => __( 'Plan Four', 'svc-ptable' ),
						"description" => __("Enter Value for element",'svc-ptable')
					 ),    
					array(
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __("Unit",'svc-ptable'),
						"param_name" => "unit_pricing_4",			    
						'group' => __( 'Plan Four', 'svc-ptable' ),
						"description" => __("Enter Value for element",'svc-ptable')
					 ),
					array(
						"type" => "textarea",
						"holder" => "div",
						"class" => "",
						"heading" => __("VAT prompt",'svc-ptable'),
						"param_name" => "vatprompt_4",			    
						'group' => __( 'Plan Four', 'svc-ptable' ),
						"description" => __("Enter Value for element",'svc-ptable')
					 ),
					array(
						 "type" => "textarea",
						 "class" => "",
						 "admin_label" => true,
						 "heading" => __("Description plan one", 'svc-ptable'),
						 "param_name" => "des_plan_one_4",
						 "value" => "",	 
						 'group' => __( 'Plan Four', 'svc-ptable' ),        
						 "description" => __("Input description values here", 'svc-ptable')
					),
					array(
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => __("Text button",'svc-ptable'),
						"param_name" => "button_pricing_4",			    
						'group' => __( 'Plan Four', 'svc-ptable' ),
						"description" => __("Enter text button for element",'svc-ptable')
					 ),
					array(
						 "type" => "textfield",
						 "class" => "",		         
						 "heading" => __("Link button", 'svc-ptable'),
						 "param_name" => "link_pricing_4",
						 "value" => "",	 
						 'group' => __( 'Plan Four', 'svc-ptable' ),        
						 "description" => __("Input link pricing one values here", 'svc-ptable')
					), 	
			 )));
			 
			 
			 vc_map( array(
					"name" => __("Pricing Table1",'svc-ptable'),
					"base" => "svc_ptable_layout1",
					"class" => "",
					"category" => __('Price Table','svc-ptable'),
					"params" => array(    
					  array(
							'type' => 'dropdown',
							'heading' => __( 'Pricing table style ', 'svc-ptable' ),
							'param_name' => 'pricing_table_style',
							'value' => array(
								__( 'Layout style 1', 'svc-ptable' ) => 'style1',				
								__( 'Layout style 2', 'svc-ptable' ) => 'style2',
								__( 'Layout style 3', 'svc-ptable' ) => 'style3',
								__( 'Layout style 4', 'svc-ptable' ) => 'style4'
							),
							'description' => __( 'Choose Pricing table layout needed.', 'svc-ptable' )
						), 
					  array(
							"type" => "attach_image",
							"holder" => "div",
							"class" => "",
							"heading" => __("Image service","themestudio"),
							"param_name" => "image_service",
							"value" => '',
							'dependency' => array(
									'element' => 'pricing_table_style',
									'value' => array( 'style4' )
									),
							"description" => __("Upload image service","themestudio")
								),
					  array(
							'type' => 'textfield',
							'heading' => __( 'font awesome icon class', 'svc-ptable' ),
							'param_name' => 'css_awesome',
							'admin_label' => true,
							'value' => '',
							'dependency' => array(
									'element' => 'pricing_table_style',
									'value' => array( 'style3' )
									),
							'description' => __( 'Enter font icon awesome .eg: fa-facebook... . <a target="__blank" href="http://fortawesome.github.io/Font-Awesome/icons/">click here.</a>', 'svc-ptable' ),
						),  
						array(
							"type" => "textfield",
							"holder" => "div",
							"class" => "",
							"heading" => __("Pricing Subtitle",'svc-ptable'),
							"param_name" => "pricing_subtitle",
							"value" => __("",'svc-ptable'),
							'dependency' => array(
									'element' => 'pricing_table_style',
									'value' => array( 'style3' )
									),
							"description" => __("Add Pricing Title for element",'svc-ptable')
					  ),    
					  array(
							'type' => 'dropdown',
							'heading' => __( 'Choose Active', 'svc-ptable' ),
							'param_name' => 'class_active',
							'value' => array(
								__( 'No Active', 'svc-ptable' ) => '',				
								__( 'Active', 'svc-ptable' ) => 'active'
							),
							'dependency' => array(
									'element' => 'pricing_table_style',
									'value' => array( 'style1','style2','style3' )
									),
							'description' => __( 'Choose active pricing needed.', 'svc-ptable' )
						),
						   
					   array(
							"type" => "textfield",
							"holder" => "div",
							"class" => "",
							"heading" => __("Pricing Title",'svc-ptable'),
							"param_name" => "pricing_title",
							"value" => __("Economy",'svc-ptable'),
							"description" => __("Add Pricing Title for element",'svc-ptable')
					  ),       
					  array(
							"type" => "textfield",
							"holder" => "div",
							"class" => "",
							"heading" => __("Pricing Price",'svc-ptable'),
							"param_name" => "pricing_price",
							"value" => __("$3.99",'svc-ptable'),
							"description" => __("Add Pricing Price for element",'svc-ptable')
					  ),
					  array(
							"type" => "textfield",
							"holder" => "div",
							"class" => "",
							"heading" => __("Pricing Price unit",'svc-ptable'),
							"param_name" => "pricing_unit",
							"value" => __("pm",'svc-ptable'),
							"description" => __("Add Pricing Price unit for element",'svc-ptable')
					  ),
					  array(
							"type" => "textfield",
							"holder" => "div",
							"class" => "",
							"heading" => __("Price description",'svc-ptable'),
							"param_name" => "price_description",
							"value" => __("",'svc-ptable'),
							'dependency' => array(
									'element' => 'pricing_table_style',
									'value' => array( 'style3' )
									),
							"description" => __("Add Price description for element",'svc-ptable')
					  ),            
					  array(
							"type" => "textarea_html",
							"holder" => "div",
							"class" => "",
							"heading" => __("Content",'svc-ptable'),
							"param_name" => "content",
							"value" => __("<ul>
												<li>500 GB Disk Space</li>
												<li>100 Databases List</li>
												<li>Free Domain Registration</li>
												<li>1 Hosting Space</li>
												<li>FREE Ad Coupons</li>
											</ul>",'svc-ptable'),
							"description" => __("Add content",'svc-ptable')
					  ),
					  array(
							"type" => "textfield",
							"holder" => "div",
							"class" => "",
							"heading" => __("Pricing Link Button",'svc-ptable'),
							"param_name" => "pricing_link_button",
							"value" => __("#",'svc-ptable'),
							"description" => __("Add Pricing Link Button for element",'svc-ptable')
					  ),
					  array(
							"type" => "textfield",
							"holder" => "div",
							"class" => "",
							"heading" => __("Pricing Text Button",'svc-ptable'),
							"param_name" => "pricing_text_button",
							"value" => __("GET STARTED",'svc-ptable'),
							"description" => __("Add Pricing Text Button for element",'svc-ptable')
					  ),       
					)));
					
					
				//******************************************************************************************************/
				// Compare Table
				//******************************************************************************************************/
					vc_map( array(
					 'name' => __( 'Compare Table', 'svc-ptable' ),
					 'base' => 'svc_ptable_layout2',
					 "class" => "",
					 "category" => __('Price Table','svc-ptable'),
					 'params' => array(			  
							array(
								"type" => "textfield",
								"holder" => "div",
								"class" => "",
								"heading" => __("Heading Pricing",'svc-ptable'),
								"param_name" => "heading_hosting",
								"value" => 'Single CPU, Multiple Cores (Intel Xeon E3)',
								"description" => __("Add Heading Pricing for element",'svc-ptable')
							),      		
							array(
								"type" => "textfield",
								"holder" => "div",
								"class" => "",
								"heading" => __("Title Pricing",'svc-ptable'),
								"param_name" => "content_title",
								"value" => 'CPU|RAM|HARD DRIVER|BANDWIDTH|PRICE',
								"description" => __("Add Heading Pricing for element",'svc-ptable')
							),
							array(
								"type" => "textarea_html",
								"holder" => "div",
								"class" => "",
								"heading" => __("Content",'svc-ptable'),
								"param_name" => "content",
								"value" => __("Xeon E3-1240 v34|Cores x 3.4 GHz|8GBDDR3|1TB|100TB|$99|mo|GET STARTED|#",'svc-ptable'),
								"description" => __("Add content",'svc-ptable')
								),
				
					)));
				
			}
		}
		
	}
	
	
	//instantiate the class
	$svc_ptable_layout = new svc_ptable_layout;
}
