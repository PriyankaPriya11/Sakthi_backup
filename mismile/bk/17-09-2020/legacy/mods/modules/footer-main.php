<!-- Footer Main -->
<div id="footer-main">
    <footer class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3 mobile-center <?php echo get_option( 'hide_excerpt','show-it' ); ?>">
                <?php get_template_part ('framework/outputs/excerpt'); ?><br>
            </div>
                
            <div class="col-sm-6 col-md-3 text-center hidden-xs <?php echo get_option( 'hide_map','show-it'); ?>">
                <?php get_template_part ('framework/outputs/map'); ?><br>
            </div>
            
            <div class="col-sm-6 col-md-3 mobile-center">
                <?php get_template_part ('framework/outputs/name'); ?>
                <p><?php get_template_part ('framework/outputs/address'); ?></p>
                <?php get_template_part ('framework/outputs/phone'); ?><br>
                <?php get_template_part ('framework/outputs/email'); ?>
            </div>
            
            <div class="col-sm-6 col-md-3 hidden-xs hidden-sm <?php echo get_option( 'hide_links','show-it'); ?>">
                <?php get_template_part ('framework/outputs/links'); ?><br>
            </div>
        </div>
    </footer>
</div>