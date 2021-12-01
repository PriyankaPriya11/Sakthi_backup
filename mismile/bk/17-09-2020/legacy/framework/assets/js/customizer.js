// Featured Image 1
jQuery(document).ready(function ($) {

	/* Hiding/showing top bar style dropdown */
	var topbar_style = $( '#customize-control-hfeature_img_1' );

	/* on page load, hide or show adv. option */
	if( $( '#customize-control-hfeatured_img_status_1 select' ).prop( "checked" ) ){
		topbar_style.show();
	}
	else{
		topbar_style.hide();
	}

	/* on change, hide or show adv. option */
	$( '#customize-control-hfeatured_img_status_1 select' ).change(function(){
		if($(this).val() == 'active'){
			topbar_style.show();
		} else {
			topbar_style.hide();
		}
	});
});

// Feature Image 2
jQuery(document).ready(function ($) {

	/* Hiding/showing top bar style dropdown */
	var topbar_style = $( '#customize-control-hfeature_img_2' );

	/* on page load, hide or show adv. option */
	if( $( '#customize-control-hfeatured_img_status_2 select' ).prop( "checked" ) ){
		topbar_style.show();
	}
	else{
		topbar_style.hide();
	}

	/* on change, hide or show adv. option */
	$( '#customize-control-hfeatured_img_status_2 select' ).change(function(){
		if($(this).val() == 'active'){
			topbar_style.show();
		} else {
			topbar_style.hide();
		}
	});
});