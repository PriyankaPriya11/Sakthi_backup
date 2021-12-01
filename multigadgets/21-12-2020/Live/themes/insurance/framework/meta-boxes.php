<?php
/**
 * Register meta boxes
 *
 * @since 1.0
 *
 * @param array $meta_boxes
 *
 * @return array
 */
function insurance_register_meta_boxes( $meta_boxes ) {

	$prefix = '_cmb_';
	// Post format
	$meta_boxes[] = array(
		'id'       => 'format_detail',
		'title'    => __( 'Format Details', 'insurance' ),
		'pages'    => array( 'post' ),
		'context'  => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields'   => array(
			array(
				'name'             => __( 'Image', 'insurance' ),
				'id'               => $prefix . 'image',
				'type'             => 'image_advanced',
				'class'            => 'image',
				'max_file_uploads' => 1,
			),
			array(
				'name'  => __( 'Gallery', 'insurance' ),
				'id'    => $prefix . 'images',
				'type'  => 'image_advanced',
				'class' => 'gallery',
			),
			array(
				'name'  => __( 'Quote', 'insurance' ),
				'id'    => $prefix . 'quote',
				'type'  => 'textarea',
				'cols'  => 20,
				'rows'  => 2,
				'class' => 'quote',
			),
			array(
				'name'  => __( 'Author', 'insurance' ),
				'id'    => $prefix . 'quote_author',
				'type'  => 'text',
				'class' => 'quote',
			),
			array(
				'name'  => __( 'Audio', 'insurance' ),
				'id'    => $prefix . 'link_audio',
				'type'  => 'textarea',
				'cols'  => 20,
				'rows'  => 2,
				'class' => 'audio',
				'desc' => 'Ex: https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/139083759',
			),
			array(
				'name'  => __( 'Video', 'insurance' ),
				'id'    => $prefix . 'link_video',
				'type'  => 'textarea',
				'cols'  => 20,
				'rows'  => 2,
				'class' => 'video',
				'desc' => 'Example: <b>http://www.youtube.com/embed/0ecv0bT9DEo</b> or <b>http://player.vimeo.com/video/47355798</b>',
			),			
		),
	);

	$meta_boxes[] = array(
		'id'       => 'page_dt',
		'title'    => __( 'Page Details', 'insurance' ),
		'pages'    => array( 'page' ),
		'context'  => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields'   => array(				
			array(
				'name'  => __( 'Page Subtitle', 'insurance' ),
				'id'    => $prefix . 'page_sub',
				'type'  => 'textarea',
				'class' => '',
			),		
			array(
				'name'  => __( 'Image page', 'insurance' ),
				'id'    => $prefix . 'image_page',
				'type'  => 'image_advanced',
				'class' => '',
			),			
		),
	);

	$meta_boxes[] = array(
		'id'       => 'slider_text_dt',
		'title'    => __( 'slider text Details', 'insurance' ),
		'pages'    => array( 'slider_text' ),
		'context'  => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields'   => array(				
					
			array(
				'name'  => __( 'button text', 'insurance' ),
				'id'    => $prefix . 'btntext',
				'type'  => 'text',
				'class' => '',
			),	
			array(
				'name'  => __( 'button link', 'insurance' ),
				'id'    => $prefix . 'btnlink',
				'type'  => 'text',
				'class' => '',
			),	
		),
	);

	$meta_boxes[] = array(
		'id'       => 'testimonial_dt',
		'title'    => __( 'testimonial details', 'insurance' ),
		'pages'    => array( 'testimonial' ),
		'context'  => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields'   => array(				
			array(
				'name'  => __( 'location', 'insurance' ),
				'id'    => $prefix . 'location',
				'type'  => 'text',
				'class' => '',
			),			
		),
	);
	$meta_boxes[] = array(
		'id'       => 'claim_dt',
		'title'    => __( 'Claim details', 'insurance' ),
		'pages'    => array( 'claim' ),
		'context'  => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields'   => array(	
			array(
				'name'  => __( 'Claim Subtitle', 'insurance' ),
				'id'    => $prefix . 'claim_sub',
				'type'  => 'textarea',
				'class' => '',
			),		
			array(
				'name'  => __( 'Image page', 'insurance' ),
				'id'    => $prefix . 'image_claim',
				'type'  => 'image_advanced',
				'class' => '',
			),				
			array(
				'name'  => __( 'Detail sub', 'insurance' ),
				'id'    => $prefix . 'claim_ds',
				'type'  => 'textarea',
				'class' => '',
			),	
			array(
				'name'  => __( 'icon', 'insurance' ),
				'id'    => $prefix . 'icon',
				'type'  => 'text',
				'class' => '',
			),	
			array(
				'name'  => __( 'button text', 'insurance' ),
				'id'    => $prefix . 'btntext',
				'type'  => 'text',
				'class' => '',
			),	
			array(
				'name'  => __( 'button link', 'insurance' ),
				'id'    => $prefix . 'btnlink',
				'type'  => 'text',
				'class' => '',
			),
		),
	);
	$meta_boxes[] = array(
		'id'       => 'career_dt',
		'title'    => __( 'Career details', 'insurance' ),
		'pages'    => array( 'career' ),
		'context'  => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields'   => array(	
			array(
				'name'  => __( 'Page Subtitle', 'insurance' ),
				'id'    => $prefix . 'career_sub',
				'type'  => 'textarea',
				'class' => '',
			),		
			array(
				'name'  => __( 'Image page', 'insurance' ),
				'id'    => $prefix . 'image_career',
				'type'  => 'image_advanced',
				'class' => '',
			),				
			array(
				'name'  => __( 'location', 'insurance' ),
				'id'    => $prefix . 'location',
				'type'  => 'text',
				'class' => '',
			),	
			array(
				'name'  => __( 'button text', 'insurance' ),
				'id'    => $prefix . 'btntext',
				'type'  => 'text',
				'class' => '',
			),
			array(
				'name'  => __( 'button link', 'insurance' ),
				'id'    => $prefix . 'btnlink',
				'type'  => 'text',
				'class' => '',
			),		
		),
	);
	$meta_boxes[] = array(
		'id'       => 'insurance_dt',
		'title'    => __( 'insurance', 'insurance' ),
		'pages'    => array( 'insurance' ),
		'context'  => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields'   => array(
			array(
				'name'  => __( 'Page sub', 'insurance' ),
				'id'    => $prefix . 'insurance_sub',
				'type'  => 'textarea',
				'class' => '',
			),	
			array(
				'name'  => __( 'Detail', 'insurance' ),
				'id'    => $prefix . 'ins_deta',
				'type'  => 'textarea',
				'class' => '',
			),							
			array(
				'name'  => __( 'icon', 'insurance' ),
				'id'    => $prefix . 'icon',
				'type'  => 'text',
				'class' => '',
			),		
			array(
				'name'  => __( 'button text 1', 'insurance' ),
				'id'    => $prefix . 'btntext1',
				'type'  => 'text',
				'class' => '',
			),		
			array(
				'name'  => __( 'button link 1', 'insurance' ),
				'id'    => $prefix . 'btnlink1',
				'type'  => 'text',
				'class' => '',
			),		
			array(
				'name'  => __( 'button text 2', 'insurance' ),
				'id'    => $prefix . 'btntext2',
				'type'  => 'text',
				'class' => '',
			),		
			
			array(
				'name'  => __( 'Image page', 'insurance' ),
				'id'    => $prefix . 'image_insurance',
				'type'  => 'image_advanced',
				'class' => '',
			),			
		),
	);
	
	$meta_boxes[] = array(
		'id'       => 'agent_dt',
		'title'    => __( 'Agent', 'insurance' ),
		'pages'    => array( 'agent' ),
		'context'  => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields'   => array(
			array(
				'name'  => __( 'Agent Subtitle', 'insurance' ),
				'id'    => $prefix . 'agent_sub',
				'type'  => 'textarea',
				'class' => '',
			),									
			array(
				'name'  => __( 'address', 'insurance' ),
				'id'    => $prefix . 'address',
				'type'  => 'textarea',
				'cols'  => 50,
				'rows'  => 3,
				'class' => '',
			),	
			array(
				'name'  => __( 'phone', 'insurance' ),
				'id'    => $prefix . 'phone',
				'type'  => 'text',
				'class' => '',
			),		
			array(
				'name'  => __( 'btntext', 'insurance' ),
				'id'    => $prefix . 'btntext',
				'type'  => 'text',
				'class' => '',
			),		
			array(
				'name'  => __( 'btnlink', 'insurance' ),
				'id'    => $prefix . 'btnlink',
				'type'  => 'text',
				'class' => '',
			),		
			array(
				'name'  => __( 'mail to', 'insurance' ),
				'id'    => $prefix . 'mailto',
				'type'  => 'text',
				'class' => '',
			),	
			array(
				'name'  => __( 'Zip code', 'insurance' ),
				'id'    => $prefix . 'zipcode',
				'type'  => 'text',
				'class' => '',
			),	
			array(
				'name'  => __( 'City', 'insurance' ),
				'id'    => $prefix . 'city',
				'type'  => 'text',
				'class' => '',
			),
			array(
				'name'  => __( 'Image page', 'insurance' ),
				'id'    => $prefix . 'image_agent',
				'type'  => 'image_advanced',
				'class' => '',
			),	
		),
	);
	

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'insurance_register_meta_boxes' );

/**
 * Enqueue scripts for admin
 *
 * @since  1.0
 */
function insurance_admin_enqueue_scripts( $hook ) {
	// Detect to load un-minify scripts when WP_DEBUG is enable
	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	if ( in_array( $hook, array( 'post.php', 'post-new.php' ) ) ) {
		wp_enqueue_script( 'insurance-backend-js', get_template_directory_uri()."/js/admin.js", array( 'jquery' ), '1.0.0', true );
	}
}

add_action( 'admin_enqueue_scripts', 'insurance_admin_enqueue_scripts' );
