<!-- Headerbar -->

<div id="headerbar">
  <header class="container">
    <div class="row">
      <div class="col-sm-3 col-md-3"> <a href="<?php echo esc_url( home_url() )?>">
        <?php get_template_part ('framework/outputs/logo') ?>
        </a></div>
      <div class="col-sm-9 col-md-9 text-right">
        <?php if ( is_home() || is_front_page() ) { ?>
        <span class="mobile-none">
			<span class="phone-text">CALL OR TEXT  </span><a href="tel:248-644-2136"><?php get_template_part ('framework/outputs/phone') ?></a>
		</span>
        <?php } ?>
		<div class="mobile-contact-page">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="tel:2486442136" class="mobile-contact-btn">
						<!--i class="fa fa-phone" aria-hidden="true"></i--> 248-644-2136
					</a>
					<a href="sms:2486442136" class="mobile-contact-btn fright">
						<i class="fa fa-comment" aria-hidden="true"></i> TEXT US
					</a>
				</div>
			</div>
		</div>
		</div>
        <?php get_template_part ('mods/modules/navbar'); ?>
      </div>
      
      
    </div>
  </header>
</div>
