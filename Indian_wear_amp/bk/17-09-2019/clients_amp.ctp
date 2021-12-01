<div>
    <div>
	<?php 
		if($clients) {
			foreach ($clients as $client) {
			if( !empty($client['video']) ) { ?>
				<div class="cbp-item graphic">
					<div class="cbp-caption">
						<div class="cbp-caption-defaultWrap">
							
							<amp-img src="<?php echo SITE_URL.'/webroot/images/ClientP/'. $client['image'] ?>" alt="" height="30" width="30" layout="responsive"></amp-img>
							<amp-lightbox id="my-lightbox1" layout="nodisplay">
                    <div class="lightbox" on="tap:my-lightbox1.close" role="button" tabindex="0">
					<amp-img src="<?php echo SITE_URL.'/webroot/images/ClientP/'. $client['image'] ?>" alt="" height="30" width="30" layout="responsive"></amp-img>
                  
                    </div>
                  </amp-lightbox>
                
							
						</div>
						<div class="cbp-caption-activeWrap">
							<div class="cbp-l-caption-alignCenter">
								<div class="cbp-l-caption-body">
									 <a href="<?php echo $client['video'] ?>" class="cbp-lightbox" data-title="<?php echo $client['title'] ?><br><?php echo $client['location'] ?>"><amp-img src="<?php echo SITE_URL; ?>/gallery/img/video-icon.png" height="30" width="30" layout="responsive"></amp-img></a>
								</div>
							</div>
						</div>
					</div>
					<a href="#" class=" cbp-l-grid-masonry-projects-title" rel="nofollow"><?php echo $client['title'] ?></a>
					<div class="cbp-l-grid-masonry-projects-desc"><?php echo $client['location'] ?></div>
				</div>
				
			<?php }else { ?> 
				<div class="cbp-item graphic">
					<div class="cbp-caption">
						<div class="cbp-caption-defaultWrap">
							<amp-img src="<?php echo SITE_URL.'/webroot/images/ClientPT/'. $client['image'] ?>" alt="" height="30" width="30" layout="responsive"></amp-img>
						</div>
						<div class="cbp-caption-activeWrap">
							<div class="cbp-l-caption-alignCenter">
								<div class="cbp-l-caption-body">  
								<button class="ampstart-btn caps m2" on="tap:my-lightbox1" role="button" tabindex="0">
								Enlarge
                  </button>                           
									<a href="<?php echo SITE_URL.'/webroot/images/ClientPT/'. $client['image'] ?>" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="<?php echo $client['title'] ?><br><?php echo $client['location'] ?>">Enlarge</a>
								</div>
							</div>
						</div>
					</div>
					<a href="#" class=" cbp-l-grid-masonry-projects-title" rel="nofollow"><?php echo $client['title'] ?></a>
					<div class="cbp-l-grid-masonry-projects-desc"><?php echo $client['location'] ?></div>
				</div>
			<?php } ?>
			
	<?php }
			} else {  ?>
					<div class="cbp-item graphic">
						<div class="cbp-caption">No Gallery Found !!!!.</div>
					</div>
		<?php } ?> 
    </div>
    <div id="wait" style="margin: auto;width: 10%;padding: 10px;display:none;">
			<amp-img src="http://getethnic.com/cake3/webroot/images/demo_wait.gif" width="30" height="30" layout="responsive"></amp-img></div>
   
    <div class="loadmorelimit" style="text-align:center;"></div>  
  </div>
  <form method="post" action-xhr="https://getethnic.com/cake3/clients/amp" target="_top">
      <input type="hidden" name="ajax" value="1">
     
      <input type="submit" on="tap:my-lightbox" value="Load More" role="" tabindex="">
	 
      </form>
	  <div>
    
  </div>