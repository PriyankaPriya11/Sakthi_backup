<div style="max-width: 92%; width: 100%; margin: 0px auto; min-height: 1000px;">

    <div id="js-grid-masonry-projects" class="cbp cbp-l-grid-masonry-projects">
	
	<?php 
		if($clients) {
			foreach ($clients as $client) {
			if( !empty($client['video']) ) { ?>
				<div class="cbp-item graphic">
					<div class="cbp-caption">
						<div class="cbp-caption-defaultWrap">
							<img src="<?php echo SITE_URL.'/webroot/images/ClientP/'. $client['image'] ?>" alt="">
						</div>
						<div class="cbp-caption-activeWrap">
							<div class="cbp-l-caption-alignCenter">
								<div class="cbp-l-caption-body">
									 <a href="<?php echo $client['video'] ?>&autoplay=1&mute=1" class="cbp-lightbox" data-title="<?php echo $client['title'] ?><br><?php echo $client['location'] ?>"><img src="<?php echo SITE_URL; ?>/gallery/img/video-icon.png"></a>
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
							<img src="<?php echo SITE_URL.'/webroot/images/ClientPT/'. $client['image'] ?>" alt="">
						</div>
						<div class="cbp-caption-activeWrap">
							<div class="cbp-l-caption-alignCenter">
								<div class="cbp-l-caption-body">                             
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
	<img src="https://getethnic.com/webroot/images/demo_wait.gif" width="30" height="30"/>
	Loading ....
	</div>
     <div id="loadMore1" style="display:none;">
      <a href="javascript:void(0)">Load More</a>
    </div>
    <div class="loadmorelimit" style="text-align:center;"></div>
		


	<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>/gallery/css/cubeportfolio.min.css">
    <!-- load jquery -->
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script> -->

    <!-- load cubeportfolio -->
    <script type="text/javascript" src="<?php echo SITE_URL; ?>/gallery/js/jquery.cubeportfolio.min.js"></script>

    <!-- init cubeportfolio -->
    <script type="text/javascript" src="<?php echo SITE_URL; ?>/gallery/js/main.js"></script>
    
    
    
  </div>

<style>
    
      .cbp-ready .cbp-item{
          -webkit-box-shadow: -1px 3px 8px -2px rgba(0,0,0,0.3) ;
          -moz-box-shadow: -1px 3px 8px -2px rgba(0,0,0,0.3) ;
          box-shadow: -1px 3px 8px -2px rgba(0,0,0,0.3);
          padding-bottom: 10px;
}
      .cbp-l-grid-masonry-projects-title{
          color: #911c2d;
          text-align: left;
          padding-left: 15px;
          
      }
      .cbp-l-grid-masonry-projects-title:hover{
          color: #000;
          
      }
      .cbp-l-grid-masonry-projects-desc{
          text-align: left;
          padding-left: 15px;
      }
      .cbp-l-grid-masonry-projects .cbp-caption-activeWrap{
          background: rgba(0,0,0,0.7);
      }
      .cbp-lightbox img{
          width: auto;
          margin: auto;
      }
      #loadMore1{
    padding-bottom: 30px;
    padding-top: 30px;
    text-align: center;
    width: 100%;
}
#loadMore1 a {
    background: #faa635;
    border-radius: 3px;
    color: white;
    display: inline-block;
    padding: 10px 30px;
    transition: all 0.25s ease-out;
    -webkit-font-smoothing: antialiased;
}
#loadMore1 a:hover {
    background-color: #042a63;
}
.loadmorelimit 
{
text-align: center;
}

    </style>
	<script>
		function sleep(milliseconds) {
			var start = new Date().getTime();
				for (var i = 0; i < 1e7; i++) {
					if ((new Date().getTime() - start) > milliseconds){
						break;
					}
				}
		}
		$.fn.isInViewport = function() {
			var elementTop = $(this).offset().top;
			var elementBottom = elementTop + $(this).outerHeight();
			var viewportTop = $(window).scrollTop();
			var viewportBottom = viewportTop + $(window).height();
			return elementBottom > viewportTop && elementTop < viewportBottom;
		};
		$(window).load(function(){
			$("#loadMore1").show();
		});
		$(document).ready(function(){
			localStorage.removeItem("imagecount");
			localStorage.removeItem("totalimagecount");
		});
var processing;
$(window).load(function(){
			if (processing)
            return false;
			localStorage.setItem("imagecount",$(".cbp-lightbox").length);
			localStorage.setItem("totalimagecount",$(".cbp-caption .cbp-caption-defaultWrap img").eq(51).attr("data"));
			processing = true;
			//setTimeout(() => {
			getajax();
			//}, 1000);
            processing = false;
        });
function getajax()
{
	localStorage.setItem("imagecount",$(".cbp-lightbox").length);
	localStorage.setItem("totalimagecount",$(".cbp-caption .cbp-caption-defaultWrap img").eq(51).attr("data"));
	if(localStorage.getItem("imagecount") < localStorage.getItem("totalimagecount"))
	{
	$.ajax({
						url: '/clients',
						type: 'GET',
						data: {imagecount: localStorage.getItem("imagecount")},
						dataType: "html",
						beforeSend:function(){
							$("#wait").css('display', 'flex').css('align-items', 'center').css('justify-content', 'center');
							$("#loadMore1").hide();
						},
						success: function(response){
							console.log(response);
							if(response.length > 0){
								jQuery("#js-grid-masonry-projects").cubeportfolio('appendItems', response);
								setTimeout(() => {
									$("#wait").css('display', 'none');
									$('#loadMore1').hide();
								}, 1000);
							}
							getajax();
						}
					});
	}
	else
	{
		$("#wait").append('<p>No More Images</p>');
		$("#wait").css('display', 'none');
		return false;
	}	
}
	</script>
