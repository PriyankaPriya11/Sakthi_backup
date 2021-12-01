<div>
    <div>
	<?php 
		if($clients) {
			$i = 1;
			foreach ($clients as $client) {
			if( !empty($client['video']) ) { 
				$url =$client['video'];
				$keys = $url; 
				$path = explode("/", $keys);
				$path1 = explode("?", $path[4]);
				
				?>
				<div class="cbp-item graphic">
					<div class="cbp-caption">
						<div class="cbp-caption-defaultWrap">
					
                 
					<amp-img src="<?php echo SITE_URL.'/webroot/images/ClientP/'. $client['image'] ?>" alt="" height="15" width="30" layout="responsive"></amp-img>
							
						</div>
						<div id="cbp-caption-activeWrap1" class="cbp-caption-activeWrap">
						<button class="container1" on="tap:my-lightbox<?php echo $i; ?>" role="button" tabindex="0"></button>
							<div class="cbp-l-caption-alignCenter">
								<div class="cbp-l-caption-body">
								
									<amp-lightbox id="my-lightbox<?php echo $i; ?>" layout="nodisplay">
                    <div class="lightbox" on="tap:my-lightbox<?php echo $i; ?>.close" role="button" tabindex="0">
                      <amp-youtube data-videoid="<?php echo $path1[0]; ?>" layout="fixed" width="480" height="270" autoplay=1></amp-youtube>
                    </div>
                  </amp-lightbox>
				  
				  <button class="ampstart-btn caps m2" on="tap:my-lightbox<?php echo $i; ?>" role="button" tabindex="0">Watch Video</button>
								</div>
								
							</div>
						</div>
					</div>
					
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
								<div class="cbp-l-caption-body" on="tap:my-lightbox<?php echo $i; ?>.close" role="button" tabindex="0">  
									<button class="ampstart-btn caps m3" on="tap:my-lightbox<?php echo $i; ?>" role="button" tabindex="0">Enlarge</button>			
									<div class="img_popup">
										<amp-lightbox id="my-lightbox<?php echo $i; ?>" layout="nodisplay">
										<div class="popupimg">
											<amp-img  src="<?php echo SITE_URL.'/webroot/images/ClientPT/'. $client['image'] ?>" alt="" height="37" width="30" layout="responsive"></amp-img>
			</div>
										</amp-lightbox>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					<a href="#" class=" cbp-l-grid-masonry-projects-title" rel="nofollow"><?php echo $client['title'] ?></a>
					<div class="cbp-l-grid-masonry-projects-desc"><?php echo $client['location'] ?></div>
				</div>
			<?php } ?>
			
	<?php $i++;}
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
  <!-- <form method="post" action-xhr="https://getethnic.com/cake3/clients/amp" target="_top">
      <input type="hidden" name="ajax" value="1">
     
      <input type="submit" on="tap:my-lightbox" value="Load More" role="" tabindex="">
	 
      </form> -->
	  <div>
    
  </div>