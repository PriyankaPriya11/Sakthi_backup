<?php
$header_style = get_query_var( 'header_type' );
if ( ! $header_style ) {
    $header_style = shelder_get_options( 'header_style' );
}

if ( ! $header_style ) {
    $header_style = '1';
}


$sidebar_text           = shelder_get_options('sidebar_text');
$topbar_onoff          = shelder_get_options('topbar_onoff');
$header_social_onoff   = shelder_get_options('header_social_onoff');
$shelder_social        = shelder_get_options('shelder_social');
$top_bar_button_title  = shelder_get_options('top_bar_button_title');
$top_bar_button_url    = shelder_get_options('top_bar_button_url');
$top_menu_header_email = shelder_get_options('top_menu_header_email');
$top_menu_phone_number = shelder_get_options('top_menu_phone_number');
$top_menu_address      = shelder_get_options('top_menu_address');
$shelder_currency_on_off      = shelder_get_options('shelder_currency_on_off');



?>
<!-- search-popup -->
<div id="search-popup" class="search-popup">
    <div class="close-search"><span><?php esc_html_e('Close','shelder') ?></span></div>
    <div class="popup-inner">
        <div class="overlay-layer"></div>
        <div class="search-form">
            <form method="get" action="<?php echo esc_url(home_url('/')); ?>">
                <div class="form-group">
                    <fieldset>
                        <input type="search" class="form-control" name="s" value="" placeholder="<?php esc_attr_e('Search Here','shelder');?>" required>
                        <input type="submit" value="<?php esc_attr_e('Search Now!','shelder');?>" class="theme-btn style-four">
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- search-popup end -->
<!-- sidebar cart item -->
<div class="xs-sidebar-group info-group info-sidebar">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading">
                <a href="#" class="close-side-widget">X</a>
            </div>
            <div class="sidebar-textwidget">
                <div class="sidebar-info-contents">
                    <div class="content-inner">
                        <div class="logo">
                            <?php
                            if (has_custom_logo()) {
                                the_custom_logo();
                            }else{ ?>
                                <a href="<?php echo esc_url(home_url('/')); ?>">
                                <img src="<?php echo esc_url(SHELDER_IMG_URL . 'logo.png'); ?>" alt="<?php esc_attr_e('Shelder Logo', 'shelder'); ?>">
                                </a>
                           <?php } ?>
                        </div>
                        <?php
                        if ($sidebar_text) : 
                        ?>
                        <div class="content-box">
                            <?php echo wp_kses($sidebar_text,'code_context'); ?>
                        </div>
                        <?php
                         endif;
                         ?>
                        <div class="contact-info">
                            <h4><?php esc_html_e('Contact Info','shelder');?></h4>
                            <ul>
                                <?php
                                if ($top_menu_address) :
                                ?>
                                    <li><span class="fa fa-map-marker"></span><?php echo esc_html($top_menu_address); ?></li>
                                <?php
                                endif;
                                ?>
                                <?php
                                if ($top_menu_phone_number) :
                                ?>
                                    <li><span class="fa fa-phone"></span><a href="tel:<?php echo esc_attr($top_menu_phone_number); ?>"><?php echo esc_html($top_menu_phone_number); ?> </a></li>
                                <?php
                                endif;
                                ?>
                                <?php
                                if ($top_menu_header_email) :
                                ?>
                                    <li><span class="fa fa-envelope"></span><a href="mailto:<?php echo esc_attr($top_menu_header_email); ?>"><?php echo esc_html($top_menu_header_email); ?> </a></li>
                                <?php
                                endif;
                                ?>
                            </ul>
                        </div>

                        <?php
                        if ($header_social_onoff === '1') :?>
                          <ul class="social-box">
                          <?php echo wp_kses($shelder_social,'code_context'); ?>
                           </ul>
                      <?php  endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END sidebar widget item -->
<?php

get_template_part('components/header/headerstyle/header', $header_style);
?>
<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>
    <nav class="menu-box">
        <div class="nav-logo">
            <?php
            if (has_custom_logo()) {
                the_custom_logo();
            }else{ ?>
                <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo esc_url(SHELDER_IMG_URL . 'logo.png'); ?>" alt="<?php esc_attr_e('Shelder Logo', 'shelder'); ?>">
                </a>
            <?php } ?>
        </div>
        <div class="menu-outer">
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        </div>
        <div class="contact-info">
            <h4><?php esc_html_e('Contact Info','shelder');?></h4>
            <ul>
                <?php
                if ($top_menu_address) :
                ?>
                    <li><?php echo esc_html($top_menu_address); ?></li>
                <?php
                endif;
                ?>
                <?php
                if ($top_menu_phone_number) :
                ?>
                    <li><a href="tel:<?php echo esc_attr($top_menu_phone_number); ?>"> <?php echo esc_html($top_menu_phone_number); ?> </a></li>
                <?php
                endif;
                ?>
                <?php
                if ($top_menu_header_email) :
                ?>
                    <li><a href="mailto:<?php echo esc_attr($top_menu_header_email); ?>"> <?php echo esc_html($top_menu_header_email); ?> </a></li>
                <?php
                endif;
                ?>
            </ul>
        </div>
        <?php if ($header_social_onoff === '1') : ?>
        <div class="social-links">
            <ul class="clearfix">
                <?php
                    echo wp_kses($shelder_social,'code_context');
                ?>
            </ul>
        </div>
        <?php endif; ?>
    </nav>
</div><!-- End Mobile Menu -->