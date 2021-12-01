<?php
/**
 * The template for displaying the footer
 */


 global $insurance_option; 
?>
<?php if (class_exists('newsletter')) { ?>
<div class="tp-newsletter">
  <div class="container">
    <div class="row">

      <div class="col-md-5 news-title">
        <h2><i class="fa fa-envelope-o"></i> <?php _e('Register to Peace Newsletter','insurance') ?></h2>
      </div>
	  
      <div class="col-md-7 newsletter">
        <script type="text/javascript">        
          if (typeof newsletter_check !== "function") {
            window.newsletter_check = function (f) {
                var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;
                if (!re.test(f.elements["ne"].value)) {
                    alert("The email is not correct");
                    return false;
                }
                for (var i=1; i<20; i++) {
                if (f.elements["np" + i] && f.elements["np" + i].value == "") {
                    alert("");
                    return false;
                }
                }
                if (f.elements["ny"] && !f.elements["ny"].checked) {
                    alert("You must accept the privacy statement");
                    return false;
                }
                return true;
            }
          }
        </script>
        <form method="post" action="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/plugins/newsletter/do/subscribe.php" onsubmit="return newsletter_check(this)">
          <div class="input-group">
            <label class="sr-only control-label" for="newsletter"><?php _e('Newsletter','insurance') ?></label>
            <input class="newsletter-email form-control" type="email" name="ne" size="30" placeholder="<?php _e('E-mail Address','insurance') ?>" required>
            <span class="input-group-btn">
              <button class="btn tp-btn-orange newsletter-submit" type="submit"><?php _e('Submit','insurance') ?></button>
            </span> 
          </div>          
        </form>
        <!-- /input-group --> 
        </div>
      <!-- Newsletter form --> 
	  
    </div>
  </div>
</div>
<?php } ?>

<div id="tp-footer" class="tp-footer">
  <div class="container">
    <div class="row">
      <?php get_sidebar('footer') ?>
    </div>
  </div>
</div>

<div class="tp-tiny-footer"><!-- Tiny footer -->
  <div class="container">
    <div class="row">
      <div class="col-md-6 copyright-text"><!-- copyright text --> 
		<?php echo wp_kses( $insurance_option['footer_text'], wp_kses_allowed_html('post') ); ?>
      </div>
      <!-- /.copyright text -->
      <div class="col-md-6 tiny-ft-links"><!-- tiny ft links -->
        <?php
              $menufooter = array(
               'theme_location'  => 'menufooter',
               'menu'            => '',
               'container'       => '',
               'container_class' => '',
               'container_id'    => '',
               'menu_class'      => '',
               'menu_id'         => '',
               'echo'            => true,
               'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
               'walker'          => new wp_bootstrap_navwalker(),
               'before'          => '',
               'after'           => '',
               'link_before'     => '',
               'link_after'      => '',
               'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
               'depth'           => 0,
              );
              if ( has_nav_menu( 'menufooter' ) ) {
               wp_nav_menu( $menufooter );
              }
              ?>
      </div>
      <!-- /.tiny ft links --> 
    </div>
  </div>
</div>
<?php wp_footer(); ?>
<script type="text/javascript">
  var currentYear = (new Date).getFullYear();
  document.getElementById('copyyear').innerHTML = (new Date).getFullYear();
</script>