<?php

/*========================================================================
                Surge Core
========================================================================*/

/* Registering Bootstrap Nav Walker */
include get_template_directory() . '/framework/functions/core/wp_bootstrap_navwalker.php';

/* Registering Theme Options */
include get_template_directory() . '/framework/functions/core/theme-options.php';

/* Get the Customizer settings */
include get_template_directory() . '/framework/functions/core/customizer.php';

/* Shortcodes */
include get_template_directory() . '/framework/functions/core/shortcodes.php';

/* Custom Template Tags */
include get_template_directory() . '/framework/functions/core/template-tags.php';

/*========================================================================
                Template Init
========================================================================*/

function remove_cssjs_ver( $src ) {
 if( strpos( $src, '?ver=' ) )
 $src = remove_query_arg( 'ver', $src );
 return $src;
}
if(!is_admin()) {
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 ); 
add_filter( 'script_loader_tag', function ( $tag, $handle ) {
//echo $handle;
    if ( 'jquery-core' == $handle){ return $tag; }
    return str_replace( ' src', ' defer="defer" src', $tag );
}, 10, 2 );
}

function no_captcha_recaptcha_menu() {
	add_menu_page("reCapatcha Options", "reCaptcha Options", "manage_options", "recaptcha-options", "recaptcha_options_page", "", 100);
}

function recaptcha_options_page() { ?>
	<div class="wrap">
		<h1>reCaptcha Options</h1>
		<form method="post" action="options.php">
		<?php settings_fields("header_section");
			do_settings_sections("recaptcha-options");
			submit_button(); ?>          
		</form>
	</div>
<?php }
add_action("admin_menu", "no_captcha_recaptcha_menu");

function display_recaptcha_options() {
	add_settings_section("header_section", "Keys", "display_recaptcha_content", "recaptcha-options");

	add_settings_field("captcha_site_key", __("Site Key"), "display_captcha_site_key_element", "recaptcha-options", "header_section");
	add_settings_field("captcha_secret_key", __("Secret Key"), "display_captcha_secret_key_element", "recaptcha-options", "header_section");

	register_setting("header_section", "captcha_site_key");
	register_setting("header_section", "captcha_secret_key");
}

function display_recaptcha_content() {
	echo __('<p>You need to <a href="https://www.google.com/recaptcha/admin" rel="external">register you domain</a> and get keys to make this plugin work.</p>');
	echo __("Enter the key details below");
}

function display_captcha_site_key_element() { ?>
	<input type="text" name="captcha_site_key" id="captcha_site_key" value="<?php echo get_option('captcha_site_key'); ?>" />
<?php }

function display_captcha_secret_key_element() { ?>
	<input type="text" name="captcha_secret_key" id="captcha_secret_key" value="<?php echo get_option('captcha_secret_key'); ?>" />
<?php }
add_action("admin_init", "display_recaptcha_options");

function login_recaptcha_script() {
    if(!is_page(2867)){
	    wp_register_script("recaptcha_login", "https://www.google.com/recaptcha/api.js");
        wp_enqueue_script("recaptcha_login");
    }
}
add_action("login_enqueue_scripts", "login_recaptcha_script");
add_action("wp_enqueue_scripts", "login_recaptcha_script");
function display_login_captcha() { ?>
	<div class="g-recaptcha" data-sitekey="<?php echo get_option('captcha_site_key'); ?>"></div>
<?php }
add_action( "login_form", "display_login_captcha" );

function verify_login_captcha($user, $password) {
	if (isset($_POST['g-recaptcha-response'])) {
		$recaptcha_secret = get_option('captcha_secret_key');
		$response = wp_remote_get("https://www.google.com/recaptcha/api/siteverify?secret=". $recaptcha_secret ."&response=". $_POST['g-recaptcha-response']);
		$response = json_decode($response["body"], true);
		if (true == $response["success"]) {
			return $user;
		} else {
			return new WP_Error("Captcha Invalid", __("<strong>ERROR</strong>: You are a bot"));
		} 
	} else {
		return new WP_Error("Captcha Invalid", __("<strong>ERROR</strong>: You are a bot. If not then enable JavaScript"));
	}
}
add_filter("wp_authenticate_user", "verify_login_captcha", 10, 2);

function display_comment_recaptcha() { ?>
	<div class="g-recaptcha" data-sitekey="<?php echo get_option('captcha_site_key'); ?>"></div><br/>
	<input name="submit" type="submit" class="submit" value="Post Comment">
<?php }
add_action("comment_form", "display_comment_recaptcha");

function verify_comment_captcha($commentdata) {
	if (isset($_POST['g-recaptcha-response'])) {
		$recaptcha_secret = get_option('captcha_secret_key');
		$response = wp_remote_get("https://www.google.com/recaptcha/api/siteverify?secret=". $recaptcha_secret ."&response=". $_POST['g-recaptcha-response']);
		$response = json_decode($response["body"], true);
		if (true == $response["success"]) {
			return $commentdata;
		} else {
			echo __("Bots are not allowed to submit comments.");
			return null;
		}
	} else if ((!isset($_POST['g-recaptcha-response'])) && ($_POST['mode'] == 'dashboard')){
		return $commentdata;
    } else if ((!isset($_POST['g-recaptcha-response'])) && ($_POST['mode'] == 'detail')){
		return $commentdata;
    } else {
		echo __("Bots are not allowed to submit comments. If you are not a bot then please enable JavaScript in browser.");
		return null;
	}
}
add_filter("preprocess_comment", "verify_comment_captcha");

