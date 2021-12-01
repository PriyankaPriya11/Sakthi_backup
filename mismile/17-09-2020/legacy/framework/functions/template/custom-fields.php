<?php

/**
 *
 * Adding Template theme Custom Fields.
 * 
 * @since       1.0.7
 * @package     Surge
 * @subpackage  Surge Template
 * @author      Rodrigo Leon
 * @uses        ACF
 * @link        
 * 
 */

if ( function_exists("acf_add_local_field_group") ) {

	acf_add_local_field_group(array (
		'key' => 'group_2',
		'id' => 'acf_header-image',
		'title' => 'Header Image',
		'fields' => array (
			array (
				'key' => 'field_56b3c99863fa1',
				'label' => 'Header Image',
				'name' => 'hero_image',
				'type' => 'select',
				'choices' => array (
					'header-1' => 'Header Image 1',
					'header-2' => 'Header Image 2',
					'header-3' => 'Header Image 3',
					'header-4' => 'Header Image 4',
					'header-5' => 'Header Image 5',
				),
				'default_value' => 'header-1',
				'allow_null' => 0,
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));

}