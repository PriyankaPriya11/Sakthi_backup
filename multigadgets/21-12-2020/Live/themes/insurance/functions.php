<?php

// Speed
// echo "v1";
include('PerformanceFix.php');
// Speed

global $insurance_option;
if ( !class_exists( 'ReduxFramework' ) && file_exists( get_template_directory() . '/ReduxFramework/ReduxCore/framework.php' ) ) {
    require_once( get_template_directory() . '/ReduxFramework/ReduxCore/framework.php' );
}
if ( !isset( $redux_demo ) && file_exists( get_template_directory() . '/ReduxFramework/sample/sample-config.php' ) ) {
    require_once( get_template_directory() . '/ReduxFramework/sample/sample-config.php' );
}
//Custom fields:
require_once get_template_directory() . '/framework/bfi_thumb-master/BFI_Thumb.php';
require_once get_template_directory() . '/framework/meta-boxes.php';
require_once get_template_directory() . '/framework/widget/widget.php';
require_once get_template_directory() . '/shortcodes.php';
require_once get_template_directory() . '/framework/wp_bootstrap_navwalker.php';


//Theme Set up:
function insurance_theme_setup() {
    if ( ! isset( $content_width ) ){ $content_width = 900; }  

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on cubic, use a find and replace
     * to change 'cubic' to the name of your theme in all the template files
     */
    load_theme_textdomain( 'insurance', get_template_directory() . '/languages' );
    
    /*
     * This theme uses a custom image size for featured images, displayed on
     * "standard" posts and pages.
     */
	add_theme_support( 'custom-header' ); 
	add_theme_support( 'custom-background' );	
    add_theme_support( 'post-thumbnails' );
    add_theme_support( "title-tag" );
    // Adds RSS feed links to <head> for posts and comments.
    add_theme_support( 'automatic-feed-links' );
    // Switches default core markup for search form, comment form, and comments
    // to output valid HTML5.
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
    //Post formats
    add_theme_support( 'post-formats', array(
        'audio',  'gallery', 'image', 'quote', 'video'
    ) );
    // This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(		
		'menumain'      => __('Main Menu', 'insurance'),
        'menutop'       => __('top menu', 'insurance'),
        'menufooter'    => __('menu footer', 'insurance'),       
	) );   
}
add_action( 'after_setup_theme', 'insurance_theme_setup' );

function insurance_load_custom_wp_admin_style() {
        wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/framework/admin-style.css', false, '1.0.0' );
        wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'insurance_load_custom_wp_admin_style' );

function insurance_fonts_url() {
    $fonts_url = '';
 
    /* Translators: If there are characters in your language that are not
    * supported by Lora, translate this to 'off'. Do not translate
    * into your own language.
    */
    $source_sans_pro = _x( 'on', 'Source Sans Pro font: on or off', 'insurance' );
 
    /* Translators: If there are characters in your language that are not
    * supported by Open Sans, translate this to 'off'. Do not translate
    * into your own language.
    */
    $roboto_slab = _x( 'on', 'Roboto Slab font: on or off', 'insurance' );
 
    if ( 'off' !== $source_sans_pro || 'off' !== $roboto_slab ) {
        $font_families = array();
 
        if ( 'off' !== $source_sans_pro ) {
            $font_families[] = 'Source Sans Pro:300,400,600,700,300italic,400italic,600italic';
        }
 
        if ( 'off' !== $roboto_slab ) {
            $font_families[] = 'Roboto Slab:400,300,100,700';
        }
 
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
    }
 
    return esc_url_raw( $fonts_url );
}

function insurance_theme_scripts_styles() {
	global $insurance_option;
	$protocol = is_ssl() ? 'https' : 'http';

    // Add custom fonts, used in the main stylesheet.
    wp_enqueue_style( 'insurance-fonts', insurance_fonts_url(), array(), null );

    wp_enqueue_style( 'insurance-bootstrap.min', get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style( 'insurance-style', get_stylesheet_uri(), array(), '2014-11-11' );
	wp_enqueue_style( 'insurance-carousel', get_template_directory_uri().'/css/owl.carousel.css');
    wp_enqueue_style( 'insurance-owl.theme', get_template_directory_uri().'/css/owl.theme.css');
    wp_enqueue_style( 'insurance-font-awesome', get_template_directory_uri().'/css/css/font-awesome.min.css');
    wp_enqueue_style( 'insurance-color', get_template_directory_uri().'/framework/color.php');
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ){
    	wp_enqueue_script( 'comment-reply' );
	}		
	wp_enqueue_script("insurance-bootstrap.min", get_template_directory_uri()."/js/bootstrap.min.js",array(),false,true);
    wp_enqueue_script("insurance-owl.carousel.min", get_template_directory_uri()."/js/owl.carousel.min.js",array(),false,true);
    wp_enqueue_script("insurance-easing", get_template_directory_uri()."/js/jquery.easing.min.js",array(),false,true);
    wp_enqueue_script("insurance-prettify", get_template_directory_uri()."/js/prettify.js",array(),false,true);
    wp_enqueue_script("insurance-custom", get_template_directory_uri()."/js/insurance.js",array(),false,true);
    
}
add_action( 'wp_enqueue_scripts', 'insurance_theme_scripts_styles');

if(!function_exists('insurance_custom_frontend_style')){
	function insurance_custom_frontend_style(){
    	global $insurance_option;
    	echo '<style type="text/css">'.$insurance_option['custom-css'].'</style>';
    }
}
add_action('wp_head', 'insurance_custom_frontend_style');

/**** redirect to search-agent.php ****/
function insurance_template_chooser($template){    
  global $wp_query;   
  $post_type = get_query_var('post_type');   
  if( $wp_query->is_search && $post_type == 'agent' )   
  {
    return locate_template('search-agent.php');  //  redirect to archive-search.php
  }   
  return $template;   
}
add_filter('template_include', 'insurance_template_chooser');  

/**** insurance breadcrumbs ****/
function insurance_breadcrumbs() {
    $text['home']     = __('Home', 'insurance'); // text for the 'Home' link
    $text['category'] = '%s'; // text for a category page
    $text['tax']      = '%s'; // text for a taxonomy page
    $text['search']   = '%s'; // text for a search results page
    $text['tag']      = '%s'; // text for a tag page
    $text['author']   = '%s'; // text for an author page
    $text['404']      = '404'; // text for the 404 page
    $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
    $showOnHome  = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
    $delimiter   = ''; // delimiter between crumbs
    $before      = '<li class="active">'; // tag before the current crumb
    $after       = '</li>'; // tag after the current crumb
    global $post;
    $homeLink = esc_url(home_url('/')) . '';
    $linkBefore = '<li>';
    $linkAfter = '</li>';
    $linkAttr = ' rel="v:url" property="v:title"';
    $link = $linkBefore . '<a' . $linkAttr . ' href="%1$s">%2$s</a>' . $linkAfter;
 
    if (is_home() || is_front_page()) {
 
        if ($showOnHome == 1) echo '<div id="crumbs"><a href="' . esc_url($homeLink) . '">' . $text['home'] . '</a></div>';
 
    } else {
 
        echo '<ul class="breadcrumb">' . sprintf($link, $homeLink, $text['home']) . $delimiter;
 
        
        if ( is_category() ) {
            $thisCat = get_category(get_query_var('cat'), false);
            if ($thisCat->parent != 0) {
                $cats = get_category_parents($thisCat->parent, TRUE, $delimiter);
                $cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
                $cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
                echo htmlspecialchars_decode($cats);
            }
            echo htmlspecialchars_decode($before) . sprintf($text['category'], single_cat_title('', false)) . $after;
 
        } elseif( is_tax() ){
            $thisCat = get_category(get_query_var('cat'), false);
            if ($thisCat->parent != 0) {
                $cats = get_category_parents($thisCat->parent, TRUE, $delimiter);
                $cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
                $cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
                echo htmlspecialchars_decode($cats);
            }
            echo htmlspecialchars_decode($before) . sprintf($text['tax'], single_cat_title('', false)) . $after;
        
        }elseif ( is_search() ) {
            echo htmlspecialchars_decode($before) . sprintf($text['search'], get_search_query()) . $after;
 
        } elseif ( is_day() ) {
            echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
            echo sprintf($link, get_month_link(get_the_time('Y'),get_the_time('m')), get_the_time('F')) . $delimiter;
            echo htmlspecialchars_decode($before) . get_the_time('d') . $after;
 
        } elseif ( is_month() ) {
            echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
            echo htmlspecialchars_decode($before) . get_the_time('F') . $after;
 
        } elseif ( is_year() ) {
            echo htmlspecialchars_decode($before) . get_the_time('Y') . $after;
 
        } elseif ( is_single() && !is_attachment() ) {
            if ( get_post_type() != 'post' ) {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                if ( get_post_type() == 'portfolio' ) {
                 printf($link, $homeLink . '' . $slug['slug'] . '/', 'Portfolio'); //Translate breadcrumb.
             }else{
              printf($link, $homeLink . '' . $slug['slug'] . '/', $post_type->labels->singular_name);
             }
                if ($showCurrent == 1) echo htmlspecialchars_decode($delimiter) . $before . get_the_title() . $after;
            } else {
                $cat = get_the_category(); $cat = $cat[0];
                $cats = get_category_parents($cat, TRUE, $delimiter);
                if ($showCurrent == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
                $cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
                $cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
                echo htmlspecialchars_decode($cats);
                if ($showCurrent == 1) echo htmlspecialchars_decode($before) . get_the_title() . $after;
            }
 
        } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
            $post_type = get_post_type_object(get_post_type());
            echo htmlspecialchars_decode($before) . $post_type->labels->singular_name . $after;
 
        } elseif ( is_attachment() ) {
            $parent = get_post($post->post_parent);
            $cat = get_the_category($parent->ID); $cat = $cat[0];
            $cats = get_category_parents($cat, TRUE, $delimiter);
            $cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
            $cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
            echo htmlspecialchars_decode($cats);
            printf($link, get_permalink($parent), $parent->post_title);
            if ($showCurrent == 1) echo htmlspecialchars_decode($delimiter) . $before . get_the_title() . $after;
 
        } elseif ( is_page() && !$post->post_parent ) {
            if ($showCurrent == 1) echo htmlspecialchars_decode($before) . get_the_title() . $after;
 
        } elseif ( is_page() && $post->post_parent ) {
            $parent_id  = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
                $parent_id  = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            for ($i = 0; $i < count($breadcrumbs); $i++) {
                echo htmlspecialchars_decode($breadcrumbs[$i]);
                if ($i != count($breadcrumbs)-1) echo htmlspecialchars_decode($delimiter);
            }
            if ($showCurrent == 1) echo htmlspecialchars_decode($delimiter) . $before . get_the_title() . $after;
 
        } elseif ( is_tag() ) {
            echo htmlspecialchars_decode($before) . sprintf($text['tag'], single_tag_title('', false)) . $after;
 
        } elseif ( is_author() ) {
             global $author;
            $userdata = get_userdata($author);
            echo htmlspecialchars_decode($before) . sprintf($text['author'], $userdata->display_name) . $after;
 
        } elseif ( is_404() ) {
            echo htmlspecialchars_decode($before) . $text['404'] . $after;
        }
 
        if ( get_query_var('paged') ) {
            if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() );
            if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
        }

        echo '</ul>';
 
    }
}

// Widget Sidebar
function insurance_widgets_init() {
	register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'insurance' ),
        'id'            => 'sidebar-1',        
		'description'   => __( 'Appears in the sidebar section of the site.', 'insurance' ),        
		'before_widget' => '<div id="%1$s" class="widget %2$s">',        
		'after_widget'  => '</div>',        
		'before_title'  => '<h2>',        
		'after_title'   => '</h2>'
    ) );
    register_sidebar( array(
		'name'          => __( 'Footer One Widget Area', 'insurance' ),
		'id'            => 'footer-area-1',
		'description'   => __( 'Footer Widget that appears on the Footer.', 'insurance' ),
		'before_widget' => '<div id="%1$s" class="insurance-widget clearfix %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Two Widget Area', 'insurance' ),
		'id'            => 'footer-area-2',
		'description'   => __( 'Footer Widget that appears on the Footer.', 'insurance' ),
		'before_widget' => '<div id="%1$s" class="insurance-widget clearfix %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Three Widget Area', 'insurance' ),
		'id'            => 'footer-area-3',
		'description'   => __( 'Footer Widget that appears on the Footer.', 'insurance' ),
		'before_widget' => '<div id="%1$s" class="insurance-widget clearfix %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Fourth Widget Area', 'insurance' ),
		'id'            => 'footer-area-4',
		'description'   => __( 'Footer Widget that appears on the Footer.', 'insurance' ),
		'before_widget' => '<div id="%1$s" class="insurance-widget clearfix %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'insurance_widgets_init' );

//function tag widgets
function insurance_tag_cloud_widget($args) {
	$args['number'] = 0; //adding a 0 will display all tags
	$args['largest'] = 18; //largest tag
	$args['smallest'] = 11; //smallest tag
	$args['unit'] = 'px'; //tag font unit
	$args['format'] = 'list'; //ul with a class of wp-tag-cloud
	$args['exclude'] = array(20, 80, 92); //exclude tags by ID
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'insurance_tag_cloud_widget' );

// Excerp Number use: echo insurance_excerpt(25);
function insurance_excerpt($limit) {
      $excerpt = explode(' ', get_the_excerpt(), $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
      $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
      return $excerpt;
}

//pagination
function insurance_pagination($prev = 'Prev', $next = 'Next', $pages='') {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    if($pages==''){
        global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
    }
    $pagination = array(
		'base' 			=> str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) ),
		'format' 		=> '',
		'current' 		=> max( 1, get_query_var('paged') ),
		'total' 		=> $pages,
		'prev_text' => $prev,
        'next_text' => $next,		
        'type'			=> 'list',
		'end_size'		=> 3,
		'mid_size'		=> 3
);
    $return =  paginate_links( $pagination );
	echo str_replace( "<ul class='page-numbers'>", '', $return );
}


function insurance_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="input-group" action="' . esc_url(home_url( '/' )) . '" >  
    	<input type="text" value="" class="form-control"'  . get_search_query() . '" name="s" id="s" placeholder="search blog here " />
    	<span class="input-group-btn"><button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button></span>
    </form>';
    return $form;
}

add_filter( 'get_search_form', 'insurance_search_form' );

// Comment Form
function insurance_theme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <div class="media">
       	<a class="media-left" href="#">
    		<?php echo get_avatar($comment,$size='122',$default='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=70' ); ?>
    	</a>
        <div class="media-body">
        	<h3 class="media-heading">
        		<a href="<?php echo get_permalink(); ?>"><?php printf(__('%s','insurance'), get_comment_author_link()) ?></a>
        		<span class="cmt-meta"><i class="fa fa-calendar"></i>
        		  <?php the_time('dS M Y'); ?>
                </span>
                <small><?php the_time('G:i:s a'); ?></small>
            </h3>        
    		<?php if ($comment->comment_approved == '0'){ ?>
    			 <p><em><?php _e('Your comment is awaiting moderation.','insurance') ?></em></p>
    		<?php }else{ ?>
                <?php comment_text() ?>
    		<?php } ?>
            <div class="btn tp-btn tp-btn-grey"><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?> <i class="fa fa-mail-forward"></i></div>
		</div>
	</div> 
<?php
}

/**** Register Form ****/
function insurance_register_a_user(){
    global $current_user, $wp_roles;
    get_currentuserinfo();
  if(isset($_GET['do']) && $_GET['do'] == 'register'):
    $errors = array();
    if(empty($_POST['user']) || empty($_POST['email']) || empty($_POST['pass']) || empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['pass1'])) $errors[] = 'Please enter a user name and e-mail.';

    $user_login = esc_attr($_POST['user']);
    $user_email = esc_attr($_POST['email']);
    $user_passw  = esc_attr($_POST['pass']);
    $first_name = esc_attr($_POST['fname']);
    $last_name = esc_attr($_POST['lname']);
    $pass1 = esc_attr($_POST['pass1']);

    $sanitized_user_login = sanitize_user($user_login);
    $user_email = apply_filters('user_registration_email', $user_email);
    $user_passw = apply_filters('user_registration_pass', $user_passw);
    $first = sanitize_user($first_name);

    if(!is_email($user_email)) $errors[] = 'Invalid e-mail.';
    elseif(email_exists($user_email)) $errors[] = 'This email is already registered.';

    if(empty($sanitized_user_login) || !validate_username($user_login)) $errors[] = 'Invalid user name.';
    elseif(username_exists($sanitized_user_login)) $errors[] = 'User name already exists.';
    if($pass1 != $user_passw ){$errors[] = 'Invalid re-enter password.Password must be the same';}
    if(empty($errors)):
      $user_pass = $user_passw;
      $user_id = wp_create_user($sanitized_user_login, $user_pass, $user_email);var_dump($user_id);
    if ( !empty( $_POST['fname'] ) ){
    update_user_meta( $user_id, 'first_name', esc_attr( $_POST['fname'] ) );}
    if ( !empty( $_POST['lname'] ) ){
    update_user_meta( $user_id, 'last_name', esc_attr( $_POST['lname'] ) );}
      if(!$user_id):
        $errors[] = 'Registration failed';
      else:
        update_user_option($user_id, 'default_password_nag', true, true);
        wp_new_user_notification($user_id, $user_pass);
      endif;
    endif;

    if(!empty($errors)) define('REGISTRATION_ERROR', serialize($errors));
    else define('REGISTERED_A_USER', $user_email);
  endif;
}
add_action('template_redirect', 'insurance_register_a_user');

//Code Visual Compurso.
require_once get_template_directory() . '/vc_shortcode.php';
//if(class_exists('WPBakeryVisualComposerSetup')){
function custom_css_classes_for_vc_row_and_vc_column($class_string, $tag) {
    if($tag=='vc_row' || $tag=='vc_row_inner') {
        $class_string = str_replace('vc_row-fluid', '', $class_string);
    }
    if($tag=='vc_column' || $tag=='vc_column_inner') {
		$class_string = preg_replace('/vc_col-xs-(\d{1,2})/', 'col-xs-$1', $class_string);
        $class_string = preg_replace('/vc_col-sm-(\d{1,2})/', 'col-md-$1', $class_string);
        $class_string = preg_replace('/vc_col-md-(\d{1,2})/', 'col-sm-$1', $class_string);
        $class_string = preg_replace('/vc_col-lg-(\d{1,2})/', 'col-lg-$1', $class_string);
        $class_string = preg_replace('/vc_col-md-offset-(\d{1,2})/', 'col-md-offset-$1', $class_string);
    }
    return $class_string;
}
// Filter to Replace default css class for vc_row shortcode and vc_column
add_filter('vc_shortcodes_css_class', 'custom_css_classes_for_vc_row_and_vc_column', 10, 2); 
// Add new Param in Row
if(function_exists('vc_add_param')){
vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => __('Extra id name', 'wpb'),
                              "param_name" => "extra_id",
                              "value" => "",
                              "description" => __("If you wish to style particular content element differently, then use this field to add a id name and then refer to it in your css file.", "wpb"),   
    ));
vc_add_param('vc_row',array(
                              "type" => "dropdown",
                              "heading" => __('Fullwidth', 'wpb'),
                              "param_name" => "fullwidth",
                              "value" => array(   
                                                __('No', 'wpb') => 'no',  
                                                __('Yes', 'wpb') => 'yes',                                                                                
                                              ),
                              "description" => __("Select Fullwidth or not, Default: No fullwidth", "wpb"),      
                            ) 
    );
vc_remove_param( "vc_row", "el_id" );
vc_remove_param( "vc_row", "parallax" );
vc_remove_param( "vc_row", "parallax_image" );
vc_remove_param( "vc_row", "full_width" );
vc_remove_param( "vc_row", "full_height" );
vc_remove_param( "vc_row", "video_bg" );
vc_remove_param( "vc_row", "video_bg_parallax" );
vc_remove_param( "vc_row", "content_placement" );
vc_remove_param( "vc_row", "video_bg_url" );
vc_remove_element( "vc_basic_grid" ); //Note: "vc_basic_grid" was used in the vc_map() function call as a base parameter for "Post Grid" element
vc_remove_element( "vc_posts_slider" ); //Note: "vc_posts_slider" was used in the vc_map() function call as a base parameter for "Posts Slider" element
vc_remove_element( "vc_media_grid" ); //Note: "vc_media_grid" was used in the vc_map() function call as a base parameter for "Media Grid" element
vc_remove_element( "vc_masonry_grid" ); //Note: "vc_masonry_grid" was used in the vc_map() function call as a base parameter for "Post Masonry Grid" element
vc_remove_element( "vc_masonry_media_grid" ); //Note: "vc_masonry_media_grid" was used in the vc_map() function call as a base parameter for "Masonry Media Grid" element

}
//}

/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.5.0-alpha
 * @author     Thomas Griffin
 * @author     Gary Jones
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/thomasgriffin/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory() . '/framework/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'insurance_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function insurance_register_required_plugins() {

    /*
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(

       // Plugin Download the http://wordpress.org
        array(
            'name'               => 'Meta Box',
            'slug'               => 'meta-box',
            'required'           => true,
            'force_activation'   => false,
            'force_deactivation' => false,
        ),

         // Plugin Include in Folder Theme
        array(            
            'name'               => 'WPBakery Visual Composer', // The plugin name.
            'slug'               => 'js_composer', // The plugin slug (typically the folder name).
            'source'             => get_template_directory_uri() . '/framework/plugins/js_composer.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ),
		array(            
            'name'               => 'One Click Demo Content', // The plugin name.
            'slug'               => 'ot-themes-one-click-import', // The plugin slug (typically the folder name).
            'source'             => get_template_directory_uri() . '/framework/plugins/ot-themes-one-click-import.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
        ),  
        array(            
            'name'               => 'OT Agents', // The plugin name.
            'slug'               => 'ot_agent', // The plugin slug (typically the folder name).
            'source'             => get_template_directory_uri() . '/framework/plugins/ot_agent.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
        ),         
        array(            
            'name'               => 'OT Careers', // The plugin name.
            'slug'               => 'ot_career', // The plugin slug (typically the folder name).
            'source'             => get_template_directory_uri() . '/framework/plugins/ot_career.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
        ), 
        array(            
            'name'               => 'OT Claim', // The plugin name.
            'slug'               => 'ot_claim', // The plugin slug (typically the folder name).
            'source'             => get_template_directory_uri() . '/framework/plugins/ot_claim.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
        ), 
        array(            
            'name'               => 'OT Insurances', // The plugin name.
            'slug'               => 'ot_insurance', // The plugin slug (typically the folder name).
            'source'             => get_template_directory_uri() . '/framework/plugins/ot_insurance.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
        ), 
        array(            
            'name'               => 'OT Slider Text', // The plugin name.
            'slug'               => 'ot_slider_text', // The plugin slug (typically the folder name).
            'source'             => get_template_directory_uri() . '/framework/plugins/ot_slider_text.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
        ), 
        array(            
            'name'               => 'OT Testimonial', // The plugin name.
            'slug'               => 'ot_testimonial', // The plugin slug (typically the folder name).
            'source'             => get_template_directory_uri() . '/framework/plugins/ot_testimonial.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
        ),                 
        array(
            'name'                     => 'Contact Form 7', // The plugin name
            'slug'                     => 'contact-form-7', // The plugin slug (typically the folder name)
            'required'                 => false, // If false, the plugin is only 'recommended' instead of required
        ),    
        array(
            'name'                     => 'Contact Form 7 Multi-Step Forms', // The plugin name
            'slug'                     => 'contact-form-7-multi-step-module', // The plugin slug (typically the folder name)
            'required'                 => false, // If false, the plugin is only 'recommended' instead of required
        ),           
        array(
            'name'                     => 'Newsletter', // The plugin name
            'slug'                     => 'newsletter', // The plugin slug (typically the folder name)
            'required'                 => false, // If false, the plugin is only 'recommended' instead of required
        ),
    );

    /*
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are wrapped in a sprintf(), so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'parent_slug'  => 'themes.php',            // Parent menu slug.
        'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => __( 'Install Required Plugins', 'insurance' ),
            'menu_title'                      => __( 'Install Plugins', 'insurance' ),
            'installing'                      => __( 'Installing Plugin: %s', 'insurance' ), // %s = plugin name.
            'oops'                            => __( 'Something went wrong with the plugin API.', 'insurance' ),
            'notice_can_install_required'     => _n_noop(
                'This theme requires the following plugin: %1$s.',
                'This theme requires the following plugins: %1$s.',
                'insurance'
            ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop(
                'This theme recommends the following plugin: %1$s.',
                'This theme recommends the following plugins: %1$s.',
                'insurance'
            ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop(
                'Sorry, but you do not have the correct permissions to install the %s plugin.',
                'Sorry, but you do not have the correct permissions to install the %s plugins.',
                'insurance'
            ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop(
                'The following required plugin is currently inactive: %1$s.',
                'The following required plugins are currently inactive: %1$s.',
                'insurance'
            ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop(
                'The following recommended plugin is currently inactive: %1$s.',
                'The following recommended plugins are currently inactive: %1$s.',
                'insurance'
            ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop(
                'Sorry, but you do not have the correct permissions to activate the %s plugin.',
                'Sorry, but you do not have the correct permissions to activate the %s plugins.',
                'insurance'
            ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop(
                'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
                'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
                'insurance'
            ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop(
                'Sorry, but you do not have the correct permissions to update the %s plugin.',
                'Sorry, but you do not have the correct permissions to update the %s plugins.',
                'insurance'
            ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop(
                'Begin installing plugin',
                'Begin installing plugins',
                'insurance'
            ),
            'activate_link'                   => _n_noop(
                'Begin activating plugin',
                'Begin activating plugins',
                'insurance'
            ),
            'return'                          => __( 'Return to Required Plugins Installer', 'insurance' ),
            'plugin_activated'                => __( 'Plugin activated successfully.', 'insurance' ),
            'complete'                        => __( 'All plugins installed and activated successfully. %s', 'insurance' ), // %s = dashboard link.
            'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'tgmpa' ),

            'nag_type'                        => 'updated', // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );

    tgmpa( $plugins, $config );

}
?>