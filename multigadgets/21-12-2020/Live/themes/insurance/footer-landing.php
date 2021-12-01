<?php
/**
 * The template for displaying the footer
 */
 global $insurance_option; 
?>
<div class="lp-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <p class="text-muted"><?php echo esc_attr($insurance_option['footer_landing']); ?></p>
      </div>
      <div class="col-md-4 lp-social">
        <ul>
          <?php if($insurance_option['facebook']) { ?>
          <li><a target="_blank" href="<?php echo esc_url($insurance_option['facebook']); ?>" data-dummy="facebook"><i class="fa fa-facebook-square"></i></a></li>
          <?php } ?>
          <?php if($insurance_option['twitter']) { ?>
          <li><a target="_blank" href="<?php echo esc_url($insurance_option['twitter']); ?>" data-dummy="twitter"><i class="fa fa-twitter-square"></i></a></li>
          <?php } ?>
          <?php if($insurance_option['google']) { ?>
          <li><a target="_blank" href="<?php echo esc_url($insurance_option['google']); ?>" data-dummy="google-plus"><i class="fa fa-google-plus-square"></i></a></li>
          <?php } ?>
          <?php if($insurance_option['linkedin']) { ?>
          <li><a target="_blank" href="<?php echo esc_url($insurance_option['linkedin']); ?>" data-dummy="linkedin"><i class="fa fa-linkedin-square"></i></a></li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php wp_footer(); ?>