<!-- Content Area -->
<div id="main-content">
    <div class="container">
        <div class="row">
            <main class="col-md-8 hide-<?php echo get_option( 'hide_sidebar' ); ?> clearfix">
                <?php get_template_part ('framework/outputs/system-output') ?>
                <div class="<?php echo get_option( 'hide_action','show-it' ); ?>"><?php get_template_part ('framework/outputs/action') ?></div>
            </main>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>