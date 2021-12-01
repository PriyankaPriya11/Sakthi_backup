<?php
// Speed
include('PerformanceFix.php');
// Speed
/**
 * Askan Tech functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Askan Tech
 * @since Askan Tech 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Askan Tech 1.0
 */

//include('protect/protect-wp-admin.php');



function themeslug_theme_customizer( $wp_customize ) {

    $wp_customize->add_section( 'themeslug_logo_section' , array(
        'title'       => __( 'Logo', 'themeslug' ),
        'priority'    => 30,
        'description' => 'Upload a logo to replace the default site name and description in the header',
    ) );

    $wp_customize->add_setting( 'themeslug_logo' );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
        'label'    => __( 'Logo', 'themeslug' ),
        'section'  => 'themeslug_logo_section',
        'settings' => 'themeslug_logo',
    ) ) );
}
add_action( 'customize_register', 'themeslug_theme_customizer' );

function register_my_menu() {
    register_nav_menus( array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' )
    ));
}
add_action( 'init', 'register_my_menu' );

if(function_exists("register_options_page")) {
    register_options_page('Home Page Slider');
    register_options_page('Client Slider');
    register_options_page('Testimonials');
}

class Child_Wrap extends Walker_Nav_Menu
{
    /**
     * Start the element output.
     *
     * @param  string $output Passed by reference. Used to append additional content.
     * @param  object $item   Menu item data object.
     * @param  int $depth     Depth of menu item. May be used for padding.
     * @param  array $args    Additional strings.
     * @return void
     */
    function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output )
    {
        $id_field = $this->db_fields['id'];
        if ( is_object( $args[0] ) ) {
            $args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
        }
        return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }

    function start_lvl(&$output, $depth = 0, $args = Array()) {
        // depth dependent classes
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $display_depth = ( $depth); // because it counts the first submenu as 0
        $classes = array('sub-menu'. $display_depth,'level-' . $display_depth);
        $class_names = implode( ' ', $classes );
        // build html
        $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = Array(), $id = 0)
    {
        $classes     = empty ( $item->classes ) ? array () : (array) $item->classes;
        $class_names = join(
            ' '
            ,   apply_filters(
                'nav_menu_css_class'
                ,   array_filter( $classes ), $item
            )
        );
        if ($args->has_children && $depth == 0){
            ! empty ( $class_names )
            and $class_names = ' class="'. esc_attr( $class_names ) . ' has_children"';
        }else{
            ! empty ( $class_names )
            and $class_names = ' class="'. esc_attr( $class_names ) . '"';
        }
        $output .= "<li id='menu-item-$item->ID' $class_names>" ;
        $attributes  = '';
        ! empty( $item->attr_title )
        and $attributes .= ' title="'  . esc_attr( $item->attr_title ) .'"';
        ! empty( $item->target )
        and $attributes .= ' target="' . esc_attr( $item->target     ) .'"';
        ! empty( $item->xfn )
        and $attributes .= ' rel="'    . esc_attr( $item->xfn        ) .'"';
        ! empty( $item->url )
        and $attributes .= ' href="'   . esc_attr( $item->url        ) .'"';
        // insert description for top level elements only
        // you may change this
        $description = ( ! empty ( $item->description ) and 0 == $depth )
            ? '<span class="desc">' . esc_attr( $item->description ) . '</span>' : '';
        $title = apply_filters( 'the_title', $item->title, $item->ID );
        if ( $depth == 0 ) {//top level items
            $item_output = $args->before
                //."<div class='first-level'>"
                . "<a $attributes>"
                . $args->link_before
                . $title
                . '</a>'
                . $args->link_after
                . $description
                //. '</div>'
                . $args->after;
        }else{//everything else
            $item_output = $args->before
                . "<a $attributes>"
                . $args->link_before
                . $title
                . '</a> '
                . $args->link_after
                . $args->after;
        }
        // Since $output is called by reference we don't need to return anything.
        $output .= apply_filters(
            'walker_nav_menu_start_el'
            ,   $item_output
            ,   $item
            ,   $depth
            ,   $args
        );
    }
}

function wpb_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Widget Area', 'wpb' ),
		'id' => 'sidebar-1',
		'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Case Study Footer 1', 'wp-bootstrap-starter' ),
        'id'            => 'case-study-case-study-footer-1',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
        'before_widget' => '',
        'after_widget'  => '',
       
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Case Study Footer 2', 'wp-bootstrap-starter' ),
        'id'            => 'case-study-case-study-footer-2',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
        'before_widget' => '',
        'after_widget'  => '',
       
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Case Study Footer 3', 'wp-bootstrap-starter' ),
        'id'            => 'case-study-case-study-footer-3',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
        'before_widget' => '',
        'after_widget'  => '',
      
    ) );
}

add_action( 'widgets_init', 'wpb_widgets_init' );

//featured image
add_theme_support( 'post-thumbnails' );

//fly resize
function rw_resize( $attachment_id, $width, $height, $crop = true )
{
    // Get upload directory info
    $upload_info = wp_upload_dir();
    $upload_dir  = $upload_info['basedir'];
    $upload_url  = $upload_info['baseurl'];

    // Get file path info
    $path      = get_attached_file( $attachment_id );
    $path_info = pathinfo( $path );
    $ext       = $path_info['extension'];
    $rel_path  = str_replace( array( $upload_dir, ".$ext" ), '', $path );
    $suffix    = "{$width}x{$height}";
    $dest_path = "{$upload_dir}{$rel_path}-{$suffix}.{$ext}";
    $url       = "{$upload_url}{$rel_path}-{$suffix}.{$ext}";

    // If file exists: do nothing
    if ( file_exists( $dest_path ) )
        return $url;

    // Generate thumbnail
    if ( image_make_intermediate_size( $path, $width, $height, $crop ) )
        return $url;

    // Fallback to full size
    return "{$upload_url}{$rel_path}.{$ext}";
}

function custom_excerpt_length( $length ) {
	return 15;
}
//add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

add_filter( 'get_the_archive_title', function ( $title ) {

    if( is_category() ) {

        $title = single_cat_title( '', false );

    }

    return $title;

});

function defer_parsing_of_js ( $url ) {
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery.js' ) ) return $url;
    //if ( strpos( $url, 'jquery-migrate.min.js' ) ) return $url;    
    return "$url' defer='defer";
  }
//add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );

function remove_cssjs_ver( $src ) {
 if( strpos( $src, '?ver=' ) )
 $src = remove_query_arg( 'ver', $src );
 return $src;
}
//add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
//add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );

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

// add_action("admin_menu", "no_captcha_recaptcha_menu");

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
// add_action("admin_init", "display_recaptcha_options");

function login_recaptcha_script() {
	wp_register_script("recaptcha_login", "https://www.google.com/recaptcha/api.js");
	wp_enqueue_script("recaptcha_login");
}
// add_action("login_enqueue_scripts", "login_recaptcha_script");

function display_login_captcha() { ?>
	<div class="g-recaptcha" data-sitekey="<?php echo get_option('captcha_site_key'); ?>"></div>
<?php }
// add_action( "login_form", "display_login_captcha" );

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
// add_filter("wp_authenticate_user", "verify_login_captcha", 10, 2); 

remove_action('wp_head', 'wp_generator');

add_action( 'wp_ajax_nopriv_post_contact_form', 'post_contact_form' );
add_action( 'wp_ajax_post_contact_form', 'post_contact_form' );

function post_contact_form() {
		
    $name=$_POST['fname'];
    $email=$_POST['email'];
    $ph=$_POST['phone'];
    $site=$_POST['website'];
    $tarea=$_POST['message'];
    $c_url=$_POST['c_url'];
	$localpath = wp_upload_dir();
	$adminAddress = "info@askantech.com";
	// $adminAddress = "mohan.askan@gmail.com";
	$target ='/home/askantech/public_html/askantech.com/wp-content/uploads/custom_uploads/';
	$path_parts = pathinfo($_FILES["image_data"]["name"]);
	$image_path = $path_parts['filename'].'_'.time().'.'.$path_parts['extension'];
	$path = $localpath['basedir'].'/custom_uploads/'.$image_path;
	//$path = '/home/users/web/b1347/sl.mangalyammatrimonyco/public_html/askantech.com/wp-content/uploads/custom_uploads/'.$image_path;
		
    $mysqli=new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
	$image = $_FILES["image_data"]["name"];
	$tmp =$_FILES["image_data"]["tmp_name"];	
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }// Check connectionelse
    if($name != '' && $email != ''){
		//echo WP_CONTENT_DIR;
        //insert into database
        mysqli_query($mysqli,"insert into at2015_contact(fname,email,phone,website,file,message,created_on) values('$name','$email','$ph','$site','$image','$tarea',NOW())");
		
		//echo $path;
		$dte=date("d-M-y");
        // a random hash will be necessary to send mixed content
        $separator_t = md5(time());
        // carriage return type (RFC)
        $eol_t = "\r\n";
        
        $htmlContent .='<table rules="all" border="1" cellpadding="10" style="width:600px;">';
        $htmlContent .= "<tr><td style='width: 100px;border-color: #666;background: #eee;'><strong>Name:</strong> </td><td>" . strip_tags(trim(ucwords($name))) . "</td></tr>";
        $htmlContent .= "<tr><td style='width: 100px;border-color: #666;background: #eee;'><strong>Email:</strong> </td><td>" . strip_tags($email) . "</td></tr>";
        $htmlContent .= "<tr><td style='width: 100px;border-color: #666;background: #eee;'><strong>IP Address:</strong> </td><td>" . get_client_ip_server() . "</td></tr>";
        if(trim($_SERVER['HTTP_REFERER']) != '')
            $htmlContent .= "<tr><td style='width: 100px;border-color: #666;background: #eee;'><strong>Form Url:</strong> </td><td>" . $_SERVER['HTTP_REFERER'] . "</td></tr>";
        $htmlContent .= "<tr><td style='width: 100px;border-color: #666;background: #eee;'><strong>Message:</strong> </td><td>" .stripslashes($tarea). "</td></tr></table>";
        
        // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        // $headers = 'From: <'.$email.'> '.trim(ucwords($name)).''. "\r\n";
        // $headers .= "MIME-Version: 1.0\r\n";
        // $headers .= "Content-Type: multipart/mixed; boundary=\"".$separator_t."\"\r\n";
        // $headers .= "This is a multi-part message in MIME format.\r\n";
        // $headers .= "--".$separator_t."\r\n";
        // $headers .= "Content-type:text/html; charset=iso-8859-1\r\n";
        // $headers .= "Content-Transfer-Encoding: 7bit\r\n";
        // $headers .= $message."\r\n";

        $headers = "From: ".trim(ucwords($name))."<".$email.">";
        $semi_rand = md5(time()); 
        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
        $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
        $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" ."Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 

        // attachment
        if(!empty($_FILES["image_data"]["name"])){
            move_uploaded_file($_FILES["image_data"]["tmp_name"], $target.$image_path);
            // $mail->AddAttachment($path);
            $filename_t = $image_path;
            $file_t = $target . "/" . $filename_t;

            $message .= "--{$mime_boundary}\n";
            $fp =    @fopen($file_t,"rb");
            $data =  @fread($fp,filesize($file_t));

            @fclose($fp);
            $data = chunk_split(base64_encode($data));
            $message .= "Content-Type: application/octet-stream; name=\"".basename($file_t)."\"\n" . 
            "Content-Description: ".basename($file_t)."\n" .
            "Content-Disposition: attachment;\n" . " filename=\"".basename($file_t)."\"; size=".filesize($file_t).";\n" . 
            "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
        }
        $message .= "--{$mime_boundary}--";
        $returnpath = "-f" . $email;

        // More headers '.$adminAddress.'
        
        if(!mail($adminAddress,"Enquiry from ".trim(ucwords($name)),$message,$headers, $returnpath)) {
            print_r(error_get_last());
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		}else{
            $body = "Thank you for contacting us.";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'From: <contact@askantech.com> Askan Tech' . "\r\n";
            mail($email,"Enquiry from ".trim(ucwords($name)),$body,$headers);
            //echo '<div class="my-notify-success">Successfully Submitted.</div>';
			
			echo 1;
		}
	}
	
	exit();
}

// Function to get the client ip address
function get_client_ip_server() {
    $ipaddress = '';
    if ($_SERVER['HTTP_CLIENT_IP'])
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if($_SERVER['HTTP_X_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if($_SERVER['HTTP_X_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if($_SERVER['HTTP_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if($_SERVER['HTTP_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if($_SERVER['REMOTE_ADDR'])
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
 
    return $ipaddress;
}

add_action( 'wp_ajax_nopriv_post_career_form', 'post_career_form' );
add_action( 'wp_ajax_post_career_form', 'post_career_form' );

function post_career_form() {
    session_start();
    $mysqli=new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }// Check connection
    if(!empty($_REQUEST['fname'])){$YourName = trim($_REQUEST['fname']);}else{$YourName = trim($_GET['fname']);}
    if(!empty($_REQUEST['email'])){$email = trim($_REQUEST['email']);}else{$email = trim($_GET['email']);}
    if(!empty($_REQUEST['applyfor'])){$position = trim($_REQUEST['applyfor']);}else{$position = trim($_GET['applyfor']);}
    if(!empty($_REQUEST['phone'])){$phone = trim($_REQUEST['phone']);}else{$phone = trim($_GET['phone']);}
    if(!empty($_REQUEST['current_company'])){$current_company = trim($_REQUEST['current_company']);}else{$current_company = trim($_GET['current_company']);}
    if(!empty($_REQUEST['information'])){$additionalinfo = trim($_REQUEST['information']);}else{$additionalinfo = trim($_GET['information']);}
//$current_company = $_GET['current_company'];
//$additionalinfo = $_GET['additionalinfo'];

    $requestfiles = $_FILES['resume']['name'];
    $network_url = site_url();
    $upload_dir = wp_upload_dir();
    $browser = $_REQUEST['browser'];
    $subject = 'Job Submit';
    $path = '';
    $adminAddress = "career@askantech.com";//'arunkumar.d@beroe-inc.com';
    if ($YourName != "" && $email != "") {
        if($requestfiles != ""){
            $newfile = explode('.', $requestfiles);
            $remove_these = array(' ','`','"','\'','\\','/');
            $newname = str_replace($remove_these, '', $_FILES['resume']['name']);
            $newname = time().'-'.$newname;
            $localpath = wp_upload_dir();
            $path = $localpath['basedir'].'/custom_uploads/'.$newname;
            //$newpath = $localpath['basedir'].'/custom_uploads/';
            $tmp = $_FILES['resume']['tmp_name'];
            move_uploaded_file($name, $path);
        }

        mysqli_query($mysqli,"INSERT INTO at2015_jobsubmit(fname,email,phone,position,current_company,files,additionalinfo,created_on) VALUES('$YourName','$email','$phone','$position','$current_company','$requestfiles','$additionalinfo',NOW())");
        //Mail Sending
        require_once('mail/mail/class.phpmailer.php');
        $mail             = new PHPMailer();
        $help = nl2br(urldecode(stripslashes($help)));
        $body=
        $body=
            "<table border='0'>
            <tr>
            <td width='200'><b>Name</b></td><td width='30'>:</td><td>$YourName</td></tr>
            <tr><td><b>Email</b></td><td>:</td><td>$email</td></tr>
            <tr><td><b>Phone</b></td><td>:</td><td>$phone</td></tr>
            <tr><td><b>Position applied for</b></td><td>:</td><td>$position</td></tr>
            <tr><td><b>File</b></td><td>:</td><td>$requestfiles</td></tr>
            </table>";
        $mail->IsSMTP(); // telling the class to use SMTP
        $mail->MailerDebug = false;
        $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)    // 1 = errors and messages    // 2 = messages only
        $mail->SMTPAuth   = true;                  // enable SMTP authentication
        $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
        $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
        $mail->Port       = 587;                   // set the SMTP port for the GMAIL server
        $mail->Username   = "speedkanweb@gmail.com";  // GMAIL username
        $mail->Password   = "Speed@123";            // GMAIL password
        $mail->SetFrom($email, $FullName);
        //$mail->AddReplyTo($email, $FullName);
        $mail->Subject    = "Askan Tech JOB SUBMIT";
        $mail->AddAttachment($tmp, $path);
        $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
        $mail->MsgHTML($body);
        $mail->AddAddress($adminAddress, $adminName);
        if(!$mail->Send()) {
            echo '<div class="my-notify-error">Your message could not reach.  Please try again later. </div> ';
        }else{
            $body = "Thank you for contacting us.";
            // Mail to customer
            $mailtocustomer             = new PHPMailer();
            $mailtocustomer->IsSMTP(); // telling the class to use SMTP
            $mailtocustomer->MailerDebug = false;
            $mailtocustomer->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
            $mailtocustomer->SMTPAuth   = true;                  // enable SMTP authentication
            $mailtocustomer->SMTPSecure = "tls";                 // sets the prefix to the servier
            $mailtocustomer->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
            $mailtocustomer->Port       = 587;                   // set the SMTP port for the GMAIL server
            $mailtocustomer->Username   = "speedkanweb@gmail.com";  // GMAIL username
            $mailtocustomer->Password   = "Speed@123";            // GMAIL password
            $mailtocustomer->SetFrom('info@kanwebspeed.com', 'Askan Tech');
            $mailtocustomer->Subject    = "JOB SUBMIT";
            $mailtocustomer->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
            $mailtocustomer->MsgHTML($body);
            $mailtocustomer->AddAddress($email, $FullName);
            $mailtocustomer->Send();
            echo '<div class="my-notify-success">Successfully Submitted.</div>';
        }
    }
	exit();
}

function social_share_icon(){ 
    $post_id = get_the_ID(); ?>
    <div class="div100 social-icon mt25">
        <div class="div25">
            <a class="fb" onclick="javascript:popupCenter('https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink($post_id); ?>&amp;appId=speedboost','Facebook Share', '540', '400');return false;" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink($post_id); ?>&amp;appId=askantech" target="_blank">
                <span><i class="fa fa-facebook fa-lg"></i></span>
                <span class="share-count" data-sc-fb="<?php the_permalink($post_id); ?>"></span>
            </a>
        </div>
        <div class="div25">
            <a class="tw" onclick="javascript:popupCenter('https://twitter.com/share?&amp;url=<?php the_permalink($post_id); ?>&amp;text=<?php the_title($post_id); ?>&amp;via=speedboost','Tweet', '540', '400');return false;" href="https://twitter.com/share?&amp;url=<?php the_permalink($post_id); ?>&amp;text=<?php the_title($post_id); ?>&amp;via=askantech" target="_blank">
            <span><i class="fa fa-twitter fa-lg"></i></span></a>
        </div>
        <div class="div25">
            <a class="ln" onclick="javascript:popupCenter('http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink($post_id); ?>&amp;title=<?php the_title($post_id); ?>&amp;source=<?php echo site_url(); ?>','Share on LinkedIn', '520', '570');return false;" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink($post_id); ?>&amp;title=<?php the_title($post_id); ?>&amp;source=<?php echo site_url(); ?>" target="_blank">
                <span><i class="fa fa-linkedin fa-lg"></i></span>
                <span class="share-count" data-sc-ln="<?php the_permalink($post_id); ?>"></span>
            </a>
        </div>
        <div class="div25">
            <a class="gp" onclick="javascript:popupCenter('https://plus.google.com/share?url=<?php the_permalink($post_id); ?>','Share on Google+', '600', '600');return false;" href="https://plus.google.com/share?url=<?php the_permalink($post_id); ?>" target="_blank">
                <span><i class="fa fa-google-plus fa-lg"></i></span>
            </a>
        </div>
    </div>
<?php }

add_action( 'wp_ajax_submit_form', 'submit_form' );
add_action( 'wp_ajax_nopriv_submit_form', 'submit_form' );
function submit_form(){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $website=$_POST['website'];
    $budjet=$_POST['budjet'];
    $message=$_POST['message'];
    $file=$_FILES["file"]["name"];
    $target = $_SERVER['DOCUMENT_ROOT']."/wp-content/uploads/custom_uploads/";
    $localpath = wp_upload_dir();
	$path_parts = pathinfo($_FILES["file"]["name"]);
	$image_path = $path_parts['filename'].'_'.time().'.'.$path_parts['extension'];
	$path = $localpath['basedir'].'/custom_uploads/'.$image_path;
    //print_r($target_dir);
    //exit();
    //$dupname= $_FILES["file"]["tmp_name"];
   // $move=move_uploaded_file($dupname,$target . $file);
    global $wpdb;
    $table_name=$wpdb->prefix."contact_form";
    /*$sql = "INSERT INTO `askan_contact_form`(`name`,`email`,`phonenumber`,`website`,`budjet`,`message`,`filename`) 
            values ('$name', '$email', '$phone', '$website', '$budjet', '$message','$file' )";*/
     $sql = "insert into at2015_contact(fname,email,phone,website,message,created_on) values('$name','$email','$phone','$website','$budjet $message',NOW())";
    $result=$wpdb->query($sql);   
    if($result>0){       
        /*$headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: $name <$mail> \r\n";
        //$headers .= 'Cc: myboss@example.com' . "\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";*/
        //$headers = '';
        //$headers = array('From: '.$name.' <'.$email.'>');
        //$to = 'qatest.askan@gmail.com';
        $to ='info@askantech.com';
        //$to ='arune@askantech.com';
        $subject ='Askan - Contact Form';
        $htmlContent .='<table rules="all" border="1" cellpadding="10" style="width:600px;">';
        $htmlContent .= "<tr><td style='width: 100px;border-color: #666;background: #eee;'><strong>Name:</strong> </td><td>" . strip_tags(trim(ucwords($name))) . "</td></tr>";
        $htmlContent .= "<tr><td style='width: 100px;border-color: #666;background: #eee;'><strong>Email:</strong> </td><td>" . strip_tags($email) . "</td></tr>";
        $htmlContent .= "<tr><td style='width: 100px;border-color: #666;background: #eee;'><strong>Phone:</strong> </td><td>" . strip_tags($phone) . "</td></tr>";
        $htmlContent .= "<tr><td style='width: 100px;border-color: #666;background: #eee;'><strong>Website:</strong> </td><td>" . strip_tags($website) . "</td></tr>";
        $htmlContent .= "<tr><td style='width: 100px;border-color: #666;background: #eee;'><strong>Budget:</strong> </td><td>" . strip_tags($budjet) . "</td></tr>";
        $htmlContent .= "<tr><td style='width: 100px;border-color: #666;background: #eee;'><strong>File:</strong> </td><td>" . strip_tags($file) . "</td></tr>";
        $htmlContent .= "<tr><td style='width: 100px;border-color: #666;background: #eee;'><strong>IP Address:</strong> </td><td>" . get_client_ip_server() . "</td></tr>";
        if(trim($_SERVER['HTTP_REFERER']) != '')
            $htmlContent .= "<tr><td style='width: 100px;border-color: #666;background: #eee;'><strong>Form Url:</strong> </td><td>" . $_SERVER['HTTP_REFERER'] . "</td></tr>";
        $htmlContent .= "<tr><td style='width: 100px;border-color: #666;background: #eee;'><strong>Message:</strong> </td><td>" .stripslashes($message). "</td></tr></table>";
        
        $headers = "From: ".trim(ucwords($name))."<".$email.">";
        $semi_rand = md5(time()); 
        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
        $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
        $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" ."Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 
        
        if(!empty($_FILES["file"]["name"])){
            move_uploaded_file($_FILES["file"]["tmp_name"], $target.$image_path);
            // $mail->AddAttachment($path);
            $filename_t = $image_path;
            $file_t = $target . "/" . $filename_t;

            $message .= "--{$mime_boundary}\n";
            $fp =    @fopen($file_t,"rb");
            $data =  @fread($fp,filesize($file_t));

            @fclose($fp);
            $data = chunk_split(base64_encode($data));
            $message .= "Content-Type: application/octet-stream; name=\"".basename($file_t)."\"\n" . 
            "Content-Description: ".basename($file_t)."\n" .
            "Content-Disposition: attachment;\n" . " filename=\"".basename($file_t)."\"; size=".filesize($file_t).";\n" . 
            "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
        }
        $message .= "--{$mime_boundary}--";
        $returnpath = "-f" . $email;

        // More headers '.$adminAddress.'
        
        if(!mail($to,"Enquiry from ".trim(ucwords($name)),$message,$headers, $returnpath)) {
            print_r(error_get_last());
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		}else{
            $body = "Thank you for contacting us.";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'From: <contact@askantech.com> Askan Tech' . "\r\n";
            mail($email,"Enquiry from ".trim(ucwords($name)),$body,$headers);
            //echo '<div class="my-notify-success">Successfully Submitted.</div>';
			
			echo 1;
		}
        
        /*$messa="Name : $name \n Email : $email \n Phone Number : $phone \n Website : $website \n Budjet : $budjet \n Message : $message \n File : $file";    */
        //$attachments = array(WP_CONTENT_DIR . '/wp-content/uploads/'.$file);    
        /*$attachments = $_SERVER['DOCUMENT_ROOT']."/wp-content/uploads/custom_uploads/".$image_path;
        $mailResult = false;
        define('WP_USE_THEMES', false);
        add_filter('wp_mail_content_type', create_function('', 'return "text/html"; '));
        $mailResult=wp_mail($to, $subject, $htmlContent, $headers,$attachments);
        if ( $mailResult ) {
            // The message was sent.
            echo 'success';
        } else {
            // The message was not sent.
            echo 'The message was not sent!';
        }
        remove_filter('wp_mail_content_type', 'set_html_content_type');*/
    }else{
    echo "failed";
    }
    die();
}


/*AMP SHORTCODES */

function amp_footer_code(){ 
    ob_start();     ?>
        <footer>
            <div class="cc-footer-section">
                <div class="cc-footer-address">
                    <div class="cc-address-box united">
                        <h3>UNITED STATES OF AMERICA</h3>
                        <div class="cc-country-address">
                            <p>8404 Memorial In, Apt 4205</p>
                            <p>Plano, TX 75024</p>
                            <p>United States</p>
                        </div>
                        <div class="cc-country-contact-details">
                            <p>Phone : +1 6469718889</p>
                            <p>Skype : kan.speed</p>
                        </div>
                    </div>
                    <div class="cc-address-box india">
                        <h3>UNITED STATES OF AMERICA</h3>
                        <div class="cc-country-address">
                            <p>8404 Memorial In, Apt 4205</p>
                            <p>Plano, TX 75024</p>
                            <p>United States</p>
                        </div>
                        <div class="cc-country-contact-details">
                            <p>Phone : +1 6469718889</p>
                            <p>Skype : kan.speed</p>
                        </div>
                    </div>
                    <div class="cc-address-box thailand">
                        <h3>UNITED STATES OF AMERICA</h3>
                        <div class="cc-country-address">
                            <p>8404 Memorial In, Apt 4205</p>
                            <p>Plano, TX 75024</p>
                            <p>United States</p>
                        </div>
                        <div class="cc-country-contact-details">
                            <p>Phone : +1 6469718889</p>
                            <p>Skype : kan.speed</p>
                        </div>
                    </div>
                </div>
                <div class="cc-social-links">
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">LinkedIn</a></li>
                    </ul>
                </div>
                <div class="cc-privacy-policy">
                    <div class="cc-privacy-menu">
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms and Conditions</a></li>
                        </ul>
                    </div>
                    <div class="cc-copyright">
                        <p>All Rights Reserved 2019. ASKAN TECHNOLOGIES</p>
                    </div>
                </div>
            </div>
        </footer>
<?php	
	$output = ob_get_clean();
    return $output;
}
add_shortcode('amp_footer', 'amp_footer_code');

function page_banner(){ 
    ob_start();     
    ?>
<div class="cc-page-banner">
    <div class="cc-bannerimg-wrapper">
        <div class="cc-banner-overlay"></div>
    </div>
    <div class="cc-banner-content">
        <h3>WE DO CUSTOM APPLICATIONS</h3>
        <h4>For Your Business Growth and Development </h4>
    </div>
    <div class="cc-scrollericon-wrapper">
        <a href="#service">
            <amp-img src="/assets/images/scroll-down.png" width="23" height="52" alt="downarrow" >
            </amp-img>
        </a>
    </div>
</div>
<?php $output = ob_get_clean();
    return $output;
}
add_shortcode('pagebanner', 'page_banner');

function service_section(){ 
    ob_start();     
    ?>
    <div class="cc-service-section" id="service">
        <div class="cc-box-wrapper">
            <div class="cc-container">
                <div class="block-titles">
                    <div class="title">
                        <div class="big-title">
                            <h2>services</h2>
                        </div>
                        <div class="small-title">
                            <div class="small-title-line"></div>
                            <div class="title-content"><h3>What we do</h3></div>
                            <div class="small-title-line"></div>
                        </div>
                    </div>
                    <div class="desc">
                        <p>Askan Technologies, that loves to make you look good in web world with our creative services. We always offer the technology service better with better people with better placement for your business growth. </p>
                    </div>
                </div>
                <div class="cc-double-image-block">
                    <div class="image-one">
                        <amp-img src="<?php echo get_template_directory_uri();?>/assets/images/content-image-bg.png"
                            width="314"
                            height="275"
                            alt="dione">
                        </amp-img>
                    </div>
                    <div class="image-two">
                        <amp-img src="<?php echo get_template_directory_uri();?>/assets/images/web-app.png"
                            width="314"
                            height="275"
                            alt="dione">
                        </amp-img>
                    </div>
                </div>
            </div>
            <div class="cc-content-block">
                <div class="cc-container">
                    <div class="cc-title">
                        <h3><span class="cc-greysty">CUSTOM</span> WEB DEVELOPMENT </h3>
                    </div>
                    <div class="cc-content-sub-title">
                        <div class="cc-rightline"></div>
                        <h5>MULTI ONLINE SERVICES</h5>
                    </div>
                    <div class="cc-block-content">
                        <p>We have a vast skill set in various server-side / client side scripting languages and content management systems (CMS), enabling us to deliver remarkable web applications.</p>
                        <p>Business always grows and our solutions helps you to scale without compromising the security aspects.</p>
                        <p>Provide immediate solutions for any kind of intricacies faced post go-live of your website .</p>
                    </div>
                    <div class="cc-more-btn">
                        <a href="#"><span>More</span><span class="cc-arrow"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cc-box-wrapper">
            <div class="cc-container">
                <div class="cc-double-image-block">
                    <div class="image-one">
                        <amp-img src="<?php echo get_template_directory_uri();?>/assets/images/content-image-bg.png"
                            width="314"
                            height="275"
                            alt="dione">
                        </amp-img>
                    </div>
                    <div class="image-two">
                        <amp-img src="<?php echo get_template_directory_uri();?>/assets/images/mobile-app.png"
                            width="314"
                            height="275"
                            alt="dione">
                        </amp-img>
                    </div>
                </div>
            </div>
            <div class="cc-content-block">
                <div class="cc-container">
                    <div class="cc-title">
                        <h3><span class="cc-greysty">CUSTOM</span> MOBILE APPLICATION </h3>
                    </div>
                    <div class="cc-content-sub-title">
                        <div class="cc-rightline"></div>
                        <h5>ANDROID, IPHONE</h5>
                    </div>
                    <div class="cc-block-content">
                        <p>We design your app with utmost consideration of the demands and limitations of various hand held devices.</p>
                        <p>UI design for mobile apps matters a lot when it comes to the device screen sizes. We are capable in delivering better look and feel while presenting your information across multiple devices.</p>
                        <p>We achieve high-performance mobile apps by allowing for the facts like it is understandable, uses minimal keystrokes and has safe work flow.</p>
                    </div>
                    <div class="cc-more-btn">
                        <a href="#"><span>More</span><span class="cc-arrow"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cc-box-wrapper">
            <div class="cc-container">
                <div class="cc-double-image-block">
                    <div class="image-one">
                        <amp-img src="<?php echo get_template_directory_uri();?>/assets/images/content-image-bg.png"
                            width="314"
                            height="275"
                            alt="dione">
                        </amp-img>
                    </div>
                    <div class="image-two">
                        <amp-img src="<?php echo get_template_directory_uri();?>/assets/images/ecommerceapp.png"
                            width="314"
                            height="275"
                            alt="dione">
                        </amp-img>
                    </div>
                </div>
            </div>
            <div class="cc-content-block">
                <div class="cc-container">
                    <div class="cc-title">
                        <h3><span class="cc-greysty">CUSTOM</span> WEB APPLICATION </h3>
                    </div>
                    <div class="cc-content-sub-title">
                        <div class="cc-rightline"></div>
                        <h5>MULTI ONLINE SERVICES</h5>
                    </div>
                    <div class="cc-block-content">
                        <p>In-depth knowledge across multiple custom app development technologies.</p>
                        <p>We designed, developed and delivered many custom software incorporated with innovative ideas to meet users business requirements.</p>
                        <p>With good hands on experience in custom app development, we identify the complexities in the requirements and provide best solutions.</p>
                    </div>
                    <div class="cc-more-btn">
                        <a href="#"><span>More</span><span class="cc-arrow"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $output = ob_get_clean();
    return $output;
}
add_shortcode('servicesection', 'service_section');

function technologies_section(){ 
    ob_start();     
?>
    <div class="cc-technologies-section" id="technologies">
        <div class="cc-container">
            <div class="block-titles">
                <div class="title">
                    <div class="big-title">
                        <h2>TECHNOLOGIES</h2>
                    </div>
                    <div class="small-title">
                        <div class="small-title-line"></div>
                        <div class="title-content">
                            <h3>EXPERTICE IN</h3>
                        </div>
                        <div class="small-title-line"></div>
                    </div>
                </div>
                <div class="desc">
                    <p>The extensive knowledge of our team in various technologies helps to accelerate your website more efficiently.</p>
                </div>
            </div>
        </div>
        <div class="cc-tech-mobile-part">
            <div class="mobile-logo-section mobile-logo-section-android"></div>
            <div class="mobile-logo-section mobile-logo-section-angular"></div>
            <div class="mobile-logo-section mobile-logo-section-codeigniter_logo"></div>
            <div class="mobile-logo-section mobile-logo-section-flutter"></div>
            <div class="mobile-logo-section mobile-logo-section-ios"></div>
            <div class="mobile-logo-section mobile-logo-section-joomla"></div>
            <div class="mobile-logo-section mobile-logo-section-laravel"></div>
            <div class="mobile-logo-section mobile-logo-section-megento"></div>
            <div class="mobile-logo-section mobile-logo-section-presta_shop"></div>
            <div class="mobile-logo-section mobile-logo-section-react"></div>
            <div class="mobile-logo-section mobile-logo-section-wordpress"></div>
            <div class="mobile-logo-section mobile-logo-section-yii "></div>
        </div>        
    </div>
<?php $output = ob_get_clean();
    return $output;
}
add_shortcode('technologiessection', 'technologies_section');

function testimonial_slider(){ 
    ob_start();     
    ?>
   <div class="cc-testimonial-slider">
        <amp-carousel 
        width="400"
        height="400"
        layout="responsive"
        type="slides">
        <div class="cc-testimonial-section">
            <amp-img src="<?php echo get_template_directory_uri();?>/assets/images/testimonial-one.jpg"
                width="767"
                height="300"
                layout="responsive"
                alt="a sample image"></amp-img>
            <div class="cc-testimonial-content">
                <h4>"Post launch attracted 7000 customers and new business has increased over 400%"</h4>
                <p class="cc-author">KEVIN SLOWTHER</p>
            </div>
        </div>
        <div class="cc-testimonial-section">
            <amp-img src="<?php echo get_template_directory_uri();?>/assets/images/testimonial-two.jpg"
                width="767"
                height="300"
                layout="responsive"
                alt="a sample image"></amp-img>
            <div class="cc-testimonial-content">
                <h4>
                    "When we decided to shift our web services from a company that took care of our hosting and maintenance for the past 12 years, we were very apprehensive to assign such a complicated and monumental project to Askantech.  But to our pleasant surprise, Kannan and his professional team - Arun, Aramudhan, Ganesh, Brindha and many others behind the scene far exceeded our expectations.  They excelled in all aspects and delivered a fully functional portal in a record time - less than 6 months from start to finish.
                    <br/>
                    Our web portal is very intricate and extremely complex, and one that needs a constant tweak and follow up. We being in Los Angeles, our time zone is different from India and it was very critical for us to have a partner that is available during our business hours. Kannan made sure that we had access to Arun and his team anytime we had an issue that needed immediate attention. They are extremely customer and result oriented. Each issue is well tested and only then delivered to us. Their quality control process is one that needs a special mention. 
                    <br/>
                    Team Askantech is very creative, intelligent, hard-working, resourceful, responsible, responsive and readily available (even during major holidays and weekends). With Arun as our team leader and Kannan as the pilot of the ship, we have a great partner in Askantech. We are extremely satisfied and highly recommend Askantech for anyone who wants professional results."
                </h4>
                <p class="cc-author">BALAJI THIRUMALAI</p>
            </div>
        </div>
        </amp-carousel>
</div>
<?php $output = ob_get_clean();
    return $output;
}
add_shortcode('testimonialslider', 'testimonial_slider');

function contact_section(){ 
    ob_start();     
    ?>
<div class="cc-contact-section" id="contact">
    <div class="cc-container">
        <div class="block-titles">
            <div class="title">
                <div class="big-title">
                    <h2>TECHNOLOGIES</h2>
                </div>
                <div class="small-title">
                    <div class="small-title-line"></div>
                    <div class="title-content">
                        <h3>EXPERTICE IN</h3>
                    </div>
                    <div class="small-title-line"></div>
                </div>
            </div>
            <div class="desc">
                <p>The extensive knowledge of our team in various technologies helps to accelerate your website more efficiently.</p>
            </div>
        </div>
    </div>
    <div class="cc-contact-section">
        <div class="cc-form-wrapper">
            <div class="cc-more-btn cc-contact-link-btn">
            <a href="<?php echo site_url();?>/contact-us"><span>Contact Us<span><span class="cc-arrow"></span></a>
            </div>
        </div>
    </div>
</div>
<?php $output = ob_get_clean();
    return $output;
}
add_shortcode('contactsection', 'contact_section');

function casestudy_section(){ 
    ob_start();     
    ?>
<div class="cc-casestudy-section" id="casestudy">
    <div class="cc-container">
        <div class="block-titles">
            <div class="title">
                <div class="big-title">
                    <h2>CASE STUDY</h2>
                </div>
                <div class="small-title">
                    <div class="small-title-line"></div>
                    <div class="title-content">
                        <h3>SUCCESS STORIES</h3>
                    </div>
                    <div class="small-title-line"></div>
                </div>
            </div>
            <div class="desc">
                <p>View our successful projects portfolio and its client's review over the products.</p>
            </div>
        </div>
    </div>
    <div class="cc-casestudy-box ppi">
        <div class="cc-container">
            <div class="cc-imgwrapper">
                <amp-img src="<?php echo get_template_directory_uri();?>/assets/images/parcel.png"
                    width="247"
                    height="157"
                    alt="dione"
                    >
                </amp-img>
            </div>
            <div class="cc-imgwrapper cc-truckimg">
                <amp-img
                    src="<?php echo get_template_directory_uri();?>/assets/images/ppi-service.png"
                    width="451"
                    height="74"
                    alt="dione" 
                    layout="responsive"
                >

                </amp-img>
            </div>
            <div class="cc-cont cc-top-heading">
                <h3>PRIORITY PARCEL <br>SERVICE</h3>
            </div>
            <div class="cc-heading-title">
                <h3>PRIORITY PARCEL <br> SERVICE</h3>
            </div>
            <div class="cc-desc-section">
                <p>WEB APPLICATION</p>
            </div>
        </div>
    </div>
    <div class="cc-casestudy-box multigadget">
        <div class="cc-cont-section">
            <div class="cc-title-sec">
                <h3>MULTIGADGET</h3>
            </div>
            <div class="cc-title-subsec">
                <p>WEB APPLICATION</p>
            </div>
        </div>
        <div class="cc-imgwrapper">
            <amp-img
                src="<?php echo get_template_directory_uri();?>/assets/images/multigadgets.png"
                width="506"
                height="570"
                alt="dione" 
                layout="responsive"
            >
            </amp-img>
        </div>
    </div>
    <div class="cc-casestudy-box trmc">
        <div class="cc-imgwrapper">
            <amp-img
                src="<?php echo get_template_directory_uri();?>/assets/images/taylor.png"
                width="473"
                height="390"
                alt="dione" 
                layout="responsive"
            >
            </amp-img>
        </div>
        <div class="cc-container">
            <div class="cc-cont-section">
                <div class="cc-title-sec">
                    <h3>TRMC <span class="cc-trmc-desc">(TaylorRobinsonMusic)</span></h3>
                </div>
                <div class="cc-title-subsec">
                    <p>MOBILE APPLICATION</p>
                </div>
            </div>
        </div>
    </div>
    <div class="cc-casestudy-box threedids">
            <div class="cc-container">
                <div class="cc-cont-section">
                    <div class="cc-title-sec">
                        <h3>3DIDS</h3>
                    </div>
                    <div class="cc-title-subsec">
                        <p>ECOMMERCE SOLUTIONS</p>
                    </div>
                </div>
            </div>
            <div class="cc-imgwrapper">
                <amp-img
                    src="<?php echo get_template_directory_uri();?>/assets/images/cart.png"
                    width="643"
                    height="545"
                    alt="dione" 
                    layout="responsive"
                >
                </amp-img>
            </div>
        </div>
</div>
<?php $output = ob_get_clean();
    return $output;
}
add_shortcode('casestudysection', 'casestudy_section');


/*AMP SHORTCODES */

    function askantech_adding_service_style(){
        if(is_page(916)){
            wp_register_style("service",get_template_directory_uri().'/assets/css/service.css');
            wp_enqueue_style("service");   
        }
        if(is_page(1007)){
            wp_register_style("android-development",get_template_directory_uri().'/assets/css/android-development.css');
            wp_enqueue_style("android-development");   
        }
        if(is_page(1107)){
            wp_register_style("app-development",get_template_directory_uri().'/assets/css/app-development.css');
            wp_enqueue_style("app-development");   
        }    
        if(is_page(1331)){
            wp_register_style("cms-development",get_template_directory_uri().'/assets/css/cms-development.css');
            wp_enqueue_style("cms-development");   
        } 
        if(is_page(1365)){
            wp_register_style("ecommerce-development",get_template_directory_uri().'/assets/css/ecommerce-development.css');
            wp_enqueue_style("ecommerce-development");   
        }
        if(is_page(1454)){
            wp_register_style("megento-development",get_template_directory_uri().'/assets/css/megento-development.css');
            wp_enqueue_style("megento-development");   
        }
        if(is_page(1521)){
            wp_register_style("web-application",get_template_directory_uri().'/assets/css/web-application.css');
            wp_enqueue_style("web-application");   
        }    
        if(is_page(1596)){
            wp_register_style("wordpress-development",get_template_directory_uri().'/assets/css/wordpress-development.css');
            wp_enqueue_style("wordpress-development");   
        } 
        if(is_page(1667) || is_page(1989) || is_page(1992) || is_page(1989) ){
            wp_register_style("yii-development",get_template_directory_uri().'/assets/css/yii-development.css');
            wp_enqueue_style("yii-development");   
        }
        if(is_page(1833)){
            wp_register_style("case-study",get_template_directory_uri().'/assets/css/case-study.css');
            wp_enqueue_style("case-study");
            // wp_register_style("owl.carousel.min",get_template_directory_uri().'/assets/css/owl.carousel.min.css');
            // wp_enqueue_style("owl.carousel.min");
            wp_dequeue_style( 'wp-block-library' );
            wp_dequeue_style( 'contact-form-7' );            
        }
        if(is_page(2584)){
            wp_register_style("case-study",get_template_directory_uri().'/assets/css/case-study.css');
            wp_enqueue_style("case-study");
            wp_register_style("bootstrap.css",get_template_directory_uri().'/assets/amp_page_css/css1/bootstrap.css');
            wp_enqueue_style("bootstrap.css");
            wp_register_style("owl.carousel.min",get_template_directory_uri().'/assests-two/css/owl.carousel.min.css');
            wp_enqueue_style("owl.carousel.min"); 
            wp_register_style("owl.theme.default.min",get_template_directory_uri().'/assets/cs-assets/css/owl.theme.default.min.css');
            wp_enqueue_style("owl.theme.default.min");
            wp_register_style("style",get_template_directory_uri().'/assets/cs-assets/css/style.css');
            wp_enqueue_style("style");
            wp_register_style("animate.css",get_template_directory_uri().'/assets/amp_page_css/css1/animate.css');
            wp_enqueue_style("animate.css"); 
            // wp_register_style("owl.carousel.min",get_template_directory_uri().'/assets/css/owl.carousel.min.css');
            // wp_enqueue_style("owl.carousel.min");
            wp_dequeue_style( 'wp-block-library' );
            wp_dequeue_style( 'contact-form-7' );            
        }
        if(is_page(1996)){
            wp_register_style("style.css",get_template_directory_uri().'/assets/amp_page_css/style.css');
            wp_enqueue_style("style.css");
            wp_register_style("home.css",get_template_directory_uri().'/assets/amp_page_css/home.css');
            wp_enqueue_style("home.css");
            wp_register_style("common.css",get_template_directory_uri().'/assets/amp_page_css/common.css');
            wp_enqueue_style("common.css");
            wp_register_style("st.css",get_template_directory_uri().'/assets/amp_page_css/st.css');
            wp_enqueue_style("st.css");
            wp_register_style("icomoon.css",get_template_directory_uri().'/assets/amp_page_css/icomoon.css');
            wp_enqueue_style("icomoon.css");
            wp_register_style("magnific-popup.css",get_template_directory_uri().'/assets/amp_page_css/magnific-popup.css');
            wp_enqueue_style("magnific-popup.css");
            wp_register_style("aos.css",get_template_directory_uri().'/assets/amp_page_css/aos.css');
            wp_enqueue_style("aos.css");
            wp_register_style("style.css",get_template_directory_uri().'/assets/amp_page_css/css1/style.css');
            wp_enqueue_style("style.css");
            wp_register_style("bootstrap.css",get_template_directory_uri().'/assets/amp_page_css/css1/bootstrap.css');
            wp_enqueue_style("bootstrap.css");
            wp_register_style("animate.css",get_template_directory_uri().'/assets/amp_page_css/css1/animate.css');
            wp_enqueue_style("animate.css");                   
        }
        if(is_page(2340)){
            wp_register_style("case-study",get_template_directory_uri().'/assests-two/css/case-study.css');
            wp_enqueue_style("case-study");   
            wp_register_style("owl.carousel.min",get_template_directory_uri().'/assests-two/css/owl.carousel.min.css');
            wp_enqueue_style("owl.carousel.min"); 
            //wp_register_style("stylesheet",get_template_directory_uri().'/assests-two/fonts/stylesheet.css');
            //wp_enqueue_style("stylesheet");      
        }

        if(is_page(2019)){
            wp_register_style("presta-development",get_template_directory_uri().'/assets/css/presta-development.css');
            wp_enqueue_style("presta-development");   
        } 

    }
    add_action('wp_enqueue_scripts','askantech_adding_service_style');

    function askantech_adding_scripts(){
        if(is_page(1833)){
            wp_register_script('owl.carousel.min',get_template_directory_uri().'/assets/js/owl.carousel.min.js','','',true);
            wp_enqueue_script('owl.carousel.min');
        }
        if(is_page(2340)){
            wp_register_script('jquery.min',get_template_directory_uri().'/assests-two/js/jquery.min.js','','',true);
            wp_enqueue_script('jquery.min');
            wp_register_script('owl.carousel.min',get_template_directory_uri().'/assests-two/js/owl.carousel.min.js','','',true);
            wp_enqueue_script('owl.carousel.min');
            wp_register_script('player',get_template_directory_uri().'/assests-two/js/player.js','','',true);
            wp_enqueue_script('player');
        }
        if(is_page(2584)){
            wp_register_script('jquery-1.12.4.min',get_template_directory_uri().'/assets/cs-assets/js/vendor/jquery-1.12.4.min.js','','',true);
            wp_enqueue_script('jquery-1.12.4.min');
            wp_register_script('owl.carousel',get_template_directory_uri().'/assets/cs-assets/js/owl.carousel.js','','',true);
            wp_enqueue_script('owl.carousel');
            wp_register_script('jquery.min',get_template_directory_uri().'/assets/cs-assets/js/bootstrap.min.js','','',true);
            wp_enqueue_script('jquery.min');
            wp_register_script('circles.min',get_template_directory_uri().'/assets/cs-assets/js/circles.min.js','','',true);
            wp_enqueue_script('circles.min');
            wp_register_script('headroom.min',get_template_directory_uri().'/assets/cs-assets/js/headroom.min.js','','',true);
            wp_enqueue_script('headroom.min');
            wp_register_script('imagesloaded.pkgd.min',get_template_directory_uri().'/assets/cs-assets/js/imagesloaded.pkgd.min.js','','',true);
            wp_enqueue_script('imagesloaded.pkgd.min');
            wp_register_script('isotope.pkgd.min',get_template_directory_uri().'/assets/cs-assets/js/isotope.pkgd.min.js','','',true);
            wp_enqueue_script('isotope.pkgd.min');
            wp_register_script('jquery.appear.min',get_template_directory_uri().'/assets/cs-assets/js/jquery.appear.min.js','','',true);
            wp_enqueue_script('jquery.appear.min');
            wp_register_script('jquery.counterup.min',get_template_directory_uri().'/assets/cs-assets/js/jquery.counterup.min.js','','',true);
            wp_enqueue_script('jquery.counterup.min');
            wp_register_script('jquery.magnific-popup.min',get_template_directory_uri().'/assets/cs-assets/js/jquery.magnific-popup.min.js','','',true);
            wp_enqueue_script('jquery.magnific-popup.min');
            wp_register_script('jquery.nav',get_template_directory_uri().'/assets/cs-assets/js/jquery.nav.js','','',true);
            wp_enqueue_script('jquery.nav');
            wp_register_script('main',get_template_directory_uri().'/assets/cs-assets/js/main.js','','',true);
            wp_enqueue_script('main');
            wp_register_script('scrollIt.min',get_template_directory_uri().'/assets/cs-assets/js/scrollIt.min.js','','',true);
            wp_enqueue_script('scrollIt.min');
            wp_register_script('slick.min',get_template_directory_uri().'/assets/cs-assets/js/slick.min.js','','',true);
            wp_enqueue_script('slick.min');
            wp_register_script('waypoints.min',get_template_directory_uri().'/assets/cs-assets/js/waypoints.min.js','','',true);
            wp_enqueue_script('waypoints.min');
            wp_register_script('wow.min',get_template_directory_uri().'/assets/cs-assets/js/wow.min.js','','',true);
            wp_enqueue_script('wow.min');
        }
    }
    add_action('wp_enqueue_scripts','askantech_adding_scripts');


    function digwp_disable_feed() {
        wp_die(__('<h1>Feed not available, please visit our <a href="'.get_bloginfo('url').'">Home Page</a>!</h1>'));
    }
    add_action('do_feed',      'digwp_disable_feed', 1);
    add_action('do_feed_rdf',  'digwp_disable_feed', 1);
    add_action('do_feed_rss',  'digwp_disable_feed', 1);
    add_action('do_feed_rss2', 'digwp_disable_feed', 1);
    add_action('do_feed_atom', 'digwp_disable_feed', 1);


  