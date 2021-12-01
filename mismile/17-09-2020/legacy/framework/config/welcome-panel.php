<?php //Getting theme and framework information.
$my_parent_theme = wp_get_theme('surge');
$my_child_theme = wp_get_theme();
?>

<!--Styles and Warnings for Admin Roles -->
<?php if ( current_user_can('manage_network') ) { ?>

    <div class="notice notice-error is-dismissible">
        <p class="about-description"><b><?php _e('Note:', 'surge') ?></b> <?php _e('Hey there! You are logged in as', 'surge') ?> <i><?php _e('Super Admin.', 'surge') ?></i> <?php _e('How cool. Please,', 'surge') ?> <b><?php _e('BE CAREFUL WITH WHAT YOU DO.', 'surge') ?></b></p>
    </div>
    <div class="currentusericon">
        <span class="dashicons dashicons-admin-users"></span> <?php _e('Super Admin', 'surge') ?>
    </div>

<?php } elseif ( !current_user_can( 'manage_network' ) && current_user_can( 'remove_users' ) ) { ?>

    <div class="notice notice-warning is-dismissible">
        <p class="about-description"><b><?php _e('Note:', 'surge') ?></b> <?php _e('You are currently logged in as', 'surge') ?> <i><?php _e('Admin.', 'surge') ?></i></p>
    </div>
    <div class="currentusericon">
        <span class="dashicons dashicons-admin-users"></span> <?php _e('Admin', 'surge') ?>
    </div>

<?php } else { ?>

    <div class="notice notice-info is-dismissible">
        <p class="about-description"><b><?php _e('Note:', 'surge') ?></b> <?php _e('You are currently logged in as', 'surge') ?> <i><?php _e('Editor.', 'surge') ?></i></p>
    </div>
    <div class="currentusericon"><span class="dashicons dashicons-admin-users"></span> <?php _e('Editor', 'surge') ?></div>

<?php } ?>
<!-- // Styles and Warnings for Admin Roles -->

<?php
/**
 * Detect plugin. For use in Admin area only.
 */
if ( !is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) && !is_plugin_active( 'advanced-custom-fields/acf.php' ) ) { ?>

    <div class="notice notice-error">
        <p class="about-description"><?php _e( '<b>Warning:</b> Please install and activate core denpendency: Advanced Custom Fields.','surge' ); ?></p>
    </div>

<?php } ?>

    
<?php
// Removes this when Surge CP becomes self including.
if (function_exists( 'welcome_panel_cp' )) {
    welcome_panel_cp();
}

else {

    if ( current_user_can('manage_network') || current_user_can( 'remove_users' ) ) { ?>

    <style>#dashboard-widgets-wrap{display: none;}</style>

    <div class="custom-welcome-panel-content" style="margin-left: 13px;">
        <h2><?php _e( 'Welcome!','surge' ); ?></h2>
        <div class="welcome-panel-column-container">

            <div class="welcome-panel-column">
                <h3 style="margin: 1.33em 0;"><?php _e( "Project Details",'surge' ); ?></h3>
                <p><span class="dashicons dashicons-welcome-widgets-menus"></span> <?php _e('Your active theme is', 'surge') ?> <i><?php echo $my_child_theme->get( 'Name' );?></i> <?php _e('version', 'surge') ?> <?php echo $my_child_theme->get( 'Version' ); ?></p>
                <p><span style="display: inline-block;line-height: 1;vertical-align: top;"><svg fill="#000000" height="20" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M7 18h2V6H7v12zm4 4h2V2h-2v20zm-8-8h2v-4H3v4zm12 4h2V6h-2v12zm4-8v4h2v-4h-2z"/></svg></span> <?php _e('Your active theme uses', 'surge') ?> <i><?php echo $my_parent_theme->get( 'Name' ) ?></i> <?php _e('version', 'surge') ?> <?php echo $my_parent_theme->get( 'Version' ); ?></p>
                <p><span class="dashicons dashicons-admin-site"></span> <?php _e('Website ID:', 'surge') ?> <?php echo get_current_blog_id()?></p>
                <p><span class="dashicons dashicons-id"></span> <?php _e( "Client ID:",'surge' ); ?> <?php echo get_option( 'project_client_id', 'Unset' ); ?></p>
                <hr>
                <p class="rssSummary"><span style="font-size: 12px; color: #999;"><?php _e( "Activate Surge's companion plugin to get more information about this client and website",'surge' ); ?> <?php echo get_current_blog_id()?>. <span class="dashicons dashicons-admin-tools"></span></span></p>
            </div>

            <div class="welcome-panel-column">
                <h3 style="margin: 1.33em 0;"><?php _e( "Customize this Site",'surge' ); ?></h3>
                <a class="button button-primary button-hero load-customize hide-if-no-customize" href="<?php echo admin_url( 'customize.php' ) ?>"><?php _e( 'Customize Theme', 'surge' ); ?></a>
                <p class="hide-if-no-customize"><?php printf( __( '<a href="%s">Change client\'s theme.</a>','surge' ), admin_url( 'themes.php' ) ); ?></p>
            </div>
        </div>
    </div>

    <?php 
    } // End if (Manage Network)
} //Plugin Exists ?>

<?php if ( ! current_user_can( 'remove_users' ) ) { ?>

    <style>#dashboard-widgets-wrap{display: none;}</style>
    <div class="custom-welcome-panel-content" style="margin-left: 13px;">
        <h2><?php _e( 'Welcome!','surge' ); ?></h2>
        <script type="text/javascript" src="https://form.jotform.com/jsform/60946818174970"></script>
        <center><a style="display: block;" href="https://optimized360.com"><img src="https://optimized360.com/wp-content/themes/optimized/images/logo/logo-top.png"></a></center>
    </div>
    
<?php } ?>

<?php

/***DO NOT DELETE this as this is Wordpress' framework we must work with when ready. Must use Wordpress classes to create content that will no need styling. ***/

/**
* @todo - We must eliminate the ones above and add it into here so either all roles can see it or only us once we have all the links down.
*

<div class="custom-welcome-panel-content">
    <h2><?php _e( 'Welcome to Optizign Framework 1.0','surge' ); ?></h2>
    <p class="about-description"><?php _e( 'Take a look at the great things you can do with your new website.','surge' ); ?></p>
    
    <div class="welcome-panel-column-container">
        
        <div class="welcome-panel-column">
            <h3><?php _e( "Let's Get Started",'surge' ); ?></h3>
            <a class="button button-primary button-hero load-customize hide-if-no-customize" href="<?php echo admin_url( 'customize.php' ) ?>"><?php _e( 'Customize Your Site!', 'surge' ); ?></a>
            <p class="hide-if-no-customize"><?php printf( __( 'or, <a href="%s">change your theme completely.</a>','surge' ), admin_url( 'themes.php' ) ); ?></p>
        </div>
        
        <div class="welcome-panel-column">
            <h3><?php _e( 'Next Steps','surge' ); ?></h3>
            <ul>
                <?php if ( 'page' == get_option( 'show_on_front' ) && ! get_option( 'page_for_posts' ) ) : ?>
                    <li><?php printf( '<a href="%s" class="welcome-icon welcome-edit-page">' . __( 'Edit your front page','surge' ) . '</a>', get_edit_post_link( get_option( 'page_on_front' ) ) ); ?></li>
                    <li><?php printf( '<a href="%s" class="welcome-icon welcome-add-page">' . __( 'Add additional pages','surge' ) . '</a>', admin_url( 'post-new.php?post_type=page' ) ); ?></li>
                <?php elseif ( 'page' == get_option( 'show_on_front' ) ) : ?>
                    <li><?php printf( '<a href="%s" class="welcome-icon welcome-edit-page">' . __( 'Edit your front page','surge' ) . '</a>', get_edit_post_link( get_option( 'page_on_front' ) ) ); ?></li>
                    <li><?php printf( '<a href="%s" class="welcome-icon welcome-add-page">' . __( 'Add additional pages','surge' ) . '</a>', admin_url( 'post-new.php?post_type=page' ) ); ?></li>
                    <li><?php printf( '<a href="%s" class="welcome-icon welcome-write-blog">' . __( 'Add a blog post','surge' ) . '</a>', admin_url( 'post-new.php' ) ); ?></li>
                <?php else : ?>
                    <li><?php printf( '<a href="%s" class="welcome-icon welcome-add-page">' . __( 'Add an About page','surge' ) . '</a>', admin_url( 'post-new.php?post_type=page' ) ); ?></li>
                <?php endif; ?>
                    <li><?php printf( '<a href="%s" class="welcome-icon welcome-view-site">' . __( 'View your site','surge' ) . '</a>', home_url( '/' ) ); ?></li>
                    <li><?php printf( '<div class="welcome-icon welcome-widgets-menus">' . __( 'Manage <a href="%1$s">widgets</a> or <a href="%2$s">menus</a>','surge' ) . '</div>', admin_url( 'widgets.php' ), admin_url( 'nav-menus.php' ) ); ?></li>
            </ul>
        </div>

        <div class="welcome-panel-column welcome-panel-last">
            <h3><?php _e( 'More Actions','surge' ); ?></h3>
            <ul>
                <li><a href="#" target="_blank" class="welcome-icon dashicons-format-video"><?php _e( 'Watch a video tutorial', 'surge' ); ?></a></li>
                <li><a href="#" target="_blank" class="welcome-icon welcome-learn-more"><?php _e( 'Read the comprehensive manual', 'surge' ); ?></a></li>
                <li><a href="#" target="_blank" class="welcome-icon dashicons-media-document"><?php _e( 'Get in touch with us for a custom site', 'surge' ); ?></a></li>
                <li><a href="#" target="_blank" class="welcome-icon dashicons-share"><?php _e( 'Contact us about marketing', 'surge' ); ?></a></li>
                <li><a href="#" target="_blank" class="welcome-icon dashicons-googleplus"><?php _e( 'Like us on Google Plus!', 'surge' ); ?></a></li>
            </ul>
        </div>

    </div> <!--End: welcome-panel-column-container-->

    <div class="">
        <h2><?php _e( 'The Optizign Framework','surge' ); ?></h2>
        <p class="about-description">A powerful tool for you!</p>
        <p>With Optizign Framework 1.0 you can...</p>
    </div>

</div><!--End: custom-welcome-panel-content-->
*/