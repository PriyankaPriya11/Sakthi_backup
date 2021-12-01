<?php 
if ( 'yes-client-folder' == get_theme_mod( 'client_folder' ) ) {
echo get_stylesheet_directory_uri() . '/mods/images/client/' . get_current_blog_id() . '/';
}
else {
echo get_stylesheet_directory_uri() . '/mods/images/' . get_option( 'image_set_folder', 'generic' ) . '/';
} ?>