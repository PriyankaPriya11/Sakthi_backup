<!-- Headerbar -->
<div id="headerbar">
    <header class="container">
        <div class="row">

            <div class="col-sm-8 mobile-center">
                <div class="<?php echo get_option( 'hide_logo','hide-it'); ?>">
                    <a href="<?php echo esc_url( home_url() ); ?>">
                    <?php get_template_part ('framework/outputs/logo'); ?>
                    </a>
                </div>

                <div class="<?php echo get_option( 'hide_logo','hide-it'); ?>-reverse">
                    <a href="<?php echo esc_url( home_url() )?>"><?php get_template_part ('framework/outputs/name'); ?></a>
                    <?php get_template_part ('framework/outputs/tagline'); ?>
                </div>
            </div>

            <div class="col-sm-4 text-right hidden-sm hidden-xs">
                <div class="<?php echo get_option( 'hide_social','show-it' ); ?>">
                    <?php get_template_part ('framework/outputs/social'); ?>
                </div>

                <?php get_template_part ('framework/outputs/phone'); ?><br>
                <?php get_template_part ('framework/outputs/address'); ?>
                <div class="<?php echo get_option( 'hide_action','show-it' ); ?>">
                    <?php get_template_part ('framework/outputs/action'); ?>
                </div>
            </div>

        </div>
    </header>
</div>