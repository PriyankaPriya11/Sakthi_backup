<!-- Footer Main -->
<div id="footer-main">
<?php if((!is_front_page())  && (!is_home()) && (!is_page(53))) { ?>
<div class="dr-footer">
<div class="container">
          <?php get_template_part ('framework/outputs/excerpt') ?>
</div>
</div>
<?php } ?>

<div class="footer-social">
<div class="container">
		
          <span>FOLLOW US TODAY</span><?php get_template_part ('framework/outputs/social') ?>

</div>
</div>
	
    <footer class="container">
		<div class="row">
				<div class="col-md-4 col-sm-4">
				<span>BIRMINGHAM CENTER<br/> FOR COSMETIC DENTISTRY</span>
                </div>
                
                <div class="col-md-4 col-sm-4">
                <strong><a href="tel:2486442136"><?php get_template_part ('framework/outputs/phone') ?></a></strong>
                <a href="mailto:info@mismile.com"> <?php get_template_part ('framework/outputs/email') ?></a>
                <?php get_template_part ('framework/outputs/action') ?>
                </div>
                
                <div class="col-md-4 col-sm-4">
                <?php get_template_part ('framework/outputs/address') ?>
                <?php get_template_part ('framework/outputs/map') ?>
                </div>
                
                  
               
		</div>
	</footer>
</div>