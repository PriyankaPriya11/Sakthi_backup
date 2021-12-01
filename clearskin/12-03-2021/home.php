<?php
/*
* Template Name: Home Template
*/
get_header(); ?>
<section>
    <div class="banner">
        <?php if (have_rows('banner_image')) : ?>
		<?php while (have_rows('banner_image')) : the_row(); ?>
		<?php $sect_image = get_sub_field('banner_image');
		$sec_image = $sect_image; ?>
         <?php
		    $banner_image = get_sub_field('banner_image');
            if (!empty($banner_image)) {
		    $bn_image = $banner_image;
		    } else {
		    $bn_image = array('url' => get_stylesheet_directory_uri() . '/assets/image/Banner_007.png');
		    } ?>
        <div class="mySlides fade"  style="background-image:url(<?php echo $bn_image['url']; ?>);" >
            <div class="ban_img"> 
           
                <div class=container-ban>
                    <div class="banner-text">
                        <h2 class="bann1"><?php echo get_field('text_content1'); ?></h2>
                        <h1 class="bann2"><?php echo get_field('text_content2'); ?></h1>
                        <a href="<?php echo get_field('text_content3'); ?>"><span>Book an appointment</span></a>
                    </div>
                </div>          
            </div>         
        </div>
        <?php endwhile; ?>
        <?php endif; ?>	
        <div style="text-align:center;position: absolute;width: 100%;margin-top: -27px;">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <span class="dot" onclick="currentSlide(4)"></span>  
                </div>	  
    </div>
    <?php $image = get_field('mobile_banner_slider_photo');?>
    <div class="mobile_banner" style="background-image:url(<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>);">
        <div class="mobile_inner_section">
            
        </div>
    </div>
</section>
 <section id="second_fold">
    <div class="container-doc">
        <div class="section-3">
            <?php if (have_rows('cust_image')) : ?>
	            <?php while (have_rows('cust_image')) : the_row(); ?>
	                <?php $doc_image = get_sub_field('doc_image');
	                 $cus_image = $doc_image; ?>
                    <div class="tr-cust-doc">
                        <img src="<?php echo $cus_image['url']; ?>" alt="<?php echo $cus_image['alt']; ?>">
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>	
</section>
<!-- <section>
    <div class="cl-skin-services">
        <h1><?php //echo get_field("service_title");?></h1>
        <div class="tab">
            <h3 class="tablinks" id="cl_link" onclick="openCity(event, 'London')">Acne</h3>
            <h3 class="tablinks" onclick="openCity(event, 'Paris')">Inflammatory Conditions</h3>
            <h3 class="tablinks" onclick="openCity(event, 'Tokyo')">Inflections</h3>
            <h3 class="tablinks" onclick="openCity(event, 'London')">Skin Pigmentation</h3>
            <h3 class="tablinks" onclick="openCity(event, 'Paris')">Anti Aging</h3>
            <h3 class="tablinks" onclick="openCity(event, 'Tokyo')">Vitilligo</h3>
        </div>

    </div>
</section>  -->


<section id="tab_section">
    <div class="container">
        <div class="row">
            <div class="tab">
                <?php if (have_rows('service_menu')):?>
                    <?php $i = 0; while (have_rows('service_menu')): the_row(); ?>      
                        <button class="tablinks" onclick="openCity(event, '<?php echo $i; ?>')"><?php echo get_sub_field('service_sec');?></button>
                    <?php $i++; endwhile; ?>
                <?php endif; ?>
                <!-- <button class="tablinks" onclick="openCity(event, 'sec2')">Inflammatory conditions</button>
                <button class="tablinks" onclick="openCity(event, 'sec3')">infections</button>
                <button class="tablinks" onclick="openCity(event, 'sec4')">skin pigmentation</button>
                <button class="tablinks" onclick="openCity(event, 'sec5')">Anti Aging</button>
                <button class="tablinks" onclick="openCity(event, 'sec6')">Vitilligo</button> -->
            </div>
            <?php $j = 0; if (have_rows('service_menu')):?>
                <?php while (have_rows('service_menu')): the_row(); ?>
                    <div id="<?php echo $j; ?>" class="tabcontent" <?php if($j>0){ ?> style="display: none;" <?php } ?>>

                        <div class="tab1">
                            <?php if (have_rows('serivce_sub')): ?>         
                                <?php while(have_rows('serivce_sub')): the_row(); ?>
                                    <button class="tablinks1" onclick="openCity1(event, '<?php echo get_sub_field('sub_id'); ?>')"><?php echo get_sub_field('service_sub_menu');?></button>
                                <?php endwhile; ?>
                            <?php endif; ?>

                            <!-- <button class="tablinks1" onclick="openCity1(event, 'sub2')">Acne Scars</button> -->
                        </div>
                        <?php if(have_rows('serivce_sub')): ?>
                            <?php while(have_rows('serivce_sub')): the_row(); ?>
                                <?php $r= get_sub_field('sub_id'); ?>
                                <div id="<?php echo get_sub_field('sub_id'); ?>" class="tabcontent1">     
                                    <div class="col-md-6 tab-style">
                                        <h3><?php echo get_sub_field('service_tit_tag'); ?></h3>
                                        <p><?php echo get_sub_field('service_sub_para');?></p>
                                        <a href="<?php echo get_sub_field('service_sub_link');?>"><span>Read more...</span></a>
                                    </div>
                                    <div class="col-md-6">
                                        <?php $image76 = get_sub_field('service_img'); ?>
                                        <img src="<?php echo $image76 ['url']; ?>" class="attachment-full size-full" alt="<?php echo $image76 ['alt']; ?>">
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <!-- <div id="sub2" class="tabcontent1">
                        <div class="col-md-6">
                        <img src="http://localhost/hairmd/wp-content/themes/hairmd/assets/img/blog_1.png">
                        </div>
                        <div class="col-md-6 tab-style">
                        <h3>Acene & Pimple </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                         enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         <a href="">Read more</a>
                        </div>

                        </div> -->

                    </div>
                <?php $j++; endwhile;?>
            <?php endif;?>
            <!-- <div id="sec2" class="tabcontent">
            <h3>Paris</h3>
            <p>Paris is the capital of France.</p>
            </div> -->

            <!-- <div id="sec3" class="tabcontent">
            <h3>Tokyo</h3>
            <p>Tokyo is the capital of Japan.</p>
            </div> -->
            <!-- <div id="sec4" class="tabcontent">
            <h3>Tokyo</h3>
            <p>Tokyo is the capital of Japan.</p>
            </div> -->
            <!-- <div id="sec5" class="tabcontent">
            <h3>Tokyo</h3>
            <p>Tokyo is the capital of Japan.</p>
            </div> -->
            <!-- <div id="sec6" class="tabcontent">
            <h3>Tokyo</h3>
            <p>Tokyo is the capital of Japan.</p>
            </div> -->
        </div>
    </div>
</section>













<section>
        <div class="cl-skin-cont">
            <h2><?php echo get_field('topic_1'); ?></h2>
            <h1><?php echo get_field('topic_2'); ?></h1>
        </div>
<div class="slideshow-container">
<div class="doctor_slider">

        <?php if (have_rows('back_image')) : ?>
		<?php while (have_rows('back_image')) : the_row(); ?>


<div class="mySlides1 fade1" >
  
<!-- <img src="http://clearskin.alldemosite.com/wp-content/themes/clearskin/assets/image/Banner_004.png"> -->
        <?php $sac_image = get_sub_field('back_img');
		$sce_image = $sac_image; ?>
         <?php
		    $back_image = get_sub_field('back_img');
            if (!empty($back_img)) {
		    $ba_image = $back_img;
		    } else {
		    $ba_image = array('url' => get_stylesheet_directory_uri() . '/assets/image/Banner_004.png');
		    } ?>
            
           <div class="ba-image"  style="background-image:url(<?php echo $ba_image['url']; ?>);" > 


            <div class="cl-skin">
           <div class="cl-skin-col"> 
           <h1><?php echo get_field('topic-21'); ?></h1>
           <h2><?php echo get_field('sub_topic21'); ?></h2>
           <p class="cl-skin-tp"><?php echo get_field('sub_cont'); ?></p>
           <p class="cl-skin-tp1"><?php echo get_field('sub-button'); ?></p>
           </div>
           </div>

           
</div>

</div>
<?php endwhile; ?>
        <?php endif; ?>	


<!-- <div class="mySlides1 fade1">
  
<img src="http://clearskin.alldemosite.com/wp-content/themes/clearskin/assets/image/Banner_004.png">

 
</div> -->

<!-- <div class="mySlides1 fade1">
  
<img src="http://clearskin.alldemosite.com/wp-content/themes/clearskin/assets/image/Banner_004.png">


</div> -->

<a class="prev" onclick="plusSlides1(-1)"><img src="http://clearskin.alldemosite.com/wp-content/themes/clearskin/assets/image/Path 54.png"></a>
<a class="next" onclick="plusSlides1(1)"><img src="http://clearskin.alldemosite.com/wp-content/themes/clearskin/assets/image/Path 55.png"></a>
</div>
</div>
</section>

<section id="location_section_new">
    <div class="cl-sk-tit">
        <div class="cl-sk-img-loc">
            <img src="http://clearskin.alldemosite.com/wp-content/themes/clearskin/assets/image/f7e04570aedfd8a78f8e49e2eaded974.png">      
                <h1>Locations</h1>
                <select id="city-select">
                    <option value="X">Pune</option>
                    <option value="Y">Karnataka</option>
                    <option value="Z">Gujarat</option>
                </select>

        </div>
    </div>


                            <!-- <div class="slideshow-container2">

            <div class="mySlides2 fade2">
               
                <?php// if (have_rows('location')) : ?>
                <?php// while (have_rows('location')) : the_row(); ?>
                <div class="col-md-5">
                        <?php //$image_new = get_sub_field('loc_image'); ?>
                        <img src="<?php// echo $image_new ['url']; ?>" class="attachment-full size-full" alt="<?php //echo $image_new ['alt']; ?>"> 

                    <div class="cl-sk-loc">
                        <h1><?php// echo get_sub_field('img_topic'); ?></h1>
                        <p><?php// echo get_sub_field('img_address'); ?></p>
                        <p><?php //echo get_sub_field('img_time'); ?></p>
                    </div>


                </div>
                <?php //endwhile; ?>
                <?php //endif; ?>	

                </div>


                <div class="mySlides2 fade2">
                <h1 class="cl-sk-top">Karnataka</h1>
                <?php //if (have_rows('location-1')) : ?>
                <?php //while (have_rows('location-1')) : the_row(); ?>
                <div class="col-md-5">
                <?php// $image1 = get_sub_field('loc_image'); ?>
            <img src="<?php //echo $image1['url']; ?>" class="attachment-full size-full" alt="<?php// echo $image1['alt']; ?>"> 

            <div class="cl-sk-loc">
            <h1><?php // echo get_sub_field('img_topic'); ?></h1>
            <p><?php // echo get_sub_field('img_address'); ?></p>
            <p><?php // echo get_sub_field('img_time'); ?></p>
            </div>


            </div>
            <?php //endwhile; ?>
            <?php //endif; ?>	
            </div>


                <div class="mySlides2 fade2">
                <h1 class="cl-sk-top">Gujarat</h1>
                <?php //if (have_rows('location-2')) : ?>
                <?php //while (have_rows('location-2')) : the_row(); ?>
                <div class="col-md-5">
                <?php //$image2 = get_sub_field('loc_image'); ?>
                <img src="<?php //echo $image2['url']; ?>" class="attachment-full size-full" alt="<?php //echo $image2['alt']; ?>"> 

                <div class="cl-sk-loc">
                <h1><?php //echo get_sub_field('img_topic'); ?></h1>
                <p><?php //echo get_sub_field('img_address'); ?></p>
                <p><?php //echo get_sub_field('img_time'); ?></p>
                </div>


                </div>

                <?php// endwhile; ?>
                <?php //endif; ?>	
                </div>

                <a class="prev1" onclick="plusSlides2(-1)"><img src="http://clearskin.alldemosite.com/wp-content/themes/clearskin/assets/image/Path 60.png"></a>
                        <a class="next1" onclick="plusSlides2(1)"><img src="http://clearskin.alldemosite.com/wp-content/themes/clearskin/assets/image/Path61.png"></a>

                    </div> -->
<div id="X" class="vis2">
    <div class="container_custom">
        <h1 class="cl-sk-top">Pune</h1>
        <div id="image-slider7" class="splide">
            <div class="splide__track">
                <div class="splide__list">
                    <?php if (have_rows('location')) : ?>
                        <?php while (have_rows('location')) : the_row(); ?>
                            <div class="splide__slide">
                                <div class="col-md-5">
                                    <?php $image_new = get_sub_field('loc_image'); ?>
                                    <img src="<?php echo $image_new ['url']; ?>" class="attachment-full size-full" alt="<?php echo $image_new ['alt']; ?>"> 

                                    <div class="cl-sk-loc">
                                        <h1><?php echo get_sub_field('img_topic'); ?></h1>
                                        <p><?php echo get_sub_field('img_address'); ?></p>
                                        <p><?php echo get_sub_field('img_time'); ?></p>
                                    </div>

                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>	
                </div>
            </div>
        </div>  
    </div>
</div>
<div id="Y" class="inv2">
    <div class="container_custom">
        <h1 class="cl-sk-top">Karnataka</h1>
        <div id="image-slider34" class="splide">
            <div class="splide__track">
                <div class="splide__list">
                    <?php if (have_rows('location-1')) : ?>
                        <?php while (have_rows('location-1')) : the_row(); ?>
                            <div class="splide__slide">
                                <div class="col-md-5">
                                    <?php $image_loc2 = get_sub_field('loc_image'); ?>
                                    <img src="<?php echo $image_loc2 ['url']; ?>" class="attachment-full size-full" alt="<?php echo $image_loc2 ['alt']; ?>"> 

                                    <div class="cl-sk-loc">
                                        <h1><?php echo get_sub_field('img_topic'); ?></h1>
                                        <p><?php echo get_sub_field('img_address'); ?></p>
                                        <p><?php echo get_sub_field('img_time'); ?></p>
                                    </div>

                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>	
                </div>
            </div>
        </div>  
    </div>
</div>
<div id="Z" class="inv2">
    <div class="container_custom">
        <h1 class="cl-sk-top">Gujarat</h1>
        <div id="image-slider43" class="splide">
            <div class="splide__track">
                <div class="splide__list">
                    <?php if (have_rows('location-2')) : ?>
                        <?php while (have_rows('location-2')) : the_row(); ?>
                            <div class="splide__slide">
                                <div class="col-md-5">
                                    <?php $image_loc3 = get_sub_field('loc_image'); ?>
                                    <img src="<?php echo $image_loc3 ['url']; ?>" class="attachment-full size-full" alt="<?php echo $image_loc3 ['alt']; ?>"> 

                                    <div class="cl-sk-loc">
                                        <h1><?php echo get_sub_field('img_topic'); ?></h1>
                                        <p><?php echo get_sub_field('img_address'); ?></p>
                                        <p><?php echo get_sub_field('img_time'); ?></p>
                                    </div>

                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>	
                </div>
            </div>
        </div>  
    </div>
</div>
<p class="sk-cl-b"><?php echo get_field('buton12'); ?></p>

</section>




<section>
    <div class="cl-sk-rev">
        <div class="cl-sk-tg">
        <h1><?php echo get_field('user_tit');?></div>
    <div class="slideshow-container3">
    <?php if (have_rows('review_sect')) : ?>
    <?php while (have_rows('review_sect')) : the_row(); ?>   

<div class="mySlides3 fade3">
<?php //$image11 = get_sub_field('review_image'); ?>
<!-- <img src="<?php// echo $image11['url']; ?>" class="attachment-full size-full" alt="<?php //echo $image11['alt']; ?>">  -->
<?php $x =  get_sub_field('review_name'); ?>
                        <span class="circle1"><?php echo substr($x,0,1); ?></span>
                        <h3><?php echo $x; ?></h3>
<h3><?php //echo get_sub_field('review_name'); ?></h3>
<?php $image12 = get_sub_field('review_star_img'); ?>
<div class="cl-sk-img23">
<img src="<?php echo $image12['url']; ?>" class="attachment-full size-full" alt="<?php echo $image12['alt']; ?>"> </div>
<p><?php echo get_sub_field('review_comment'); ?></p>

  
  
</div>

<!-- <div class="mySlides3 fade3">
 
<h1>dummmy1</h1>
  
</div>

<div class="mySlides3 fade3">
  
<h1>dummmy3</h1>
  
</div> -->

<?php endwhile; ?>
<?php endif; ?>	

<a class="prev3" onclick="plusSlides3(-1)"><img src="http://clearskin.alldemosite.com/wp-content/themes/clearskin/assets/image/Path 58.png"></a>
<a class="next3" onclick="plusSlides3(1)"><img src="http://clearskin.alldemosite.com/wp-content/themes/clearskin/assets/image/Path 59.png"></a>

</div>


<div style="text-align:center">
  <span class="dot3" onclick="currentSlide3(1)"></span> 
  <span class="dot3" onclick="currentSlide3(2)"></span> 
  <span class="dot3" onclick="currentSlide3(3)"></span>
  <span class="dot3" onclick="currentSlide3(4)"></span>  
</div>
</div>
</section>

<section>
    <div class="cl-sk-say-user">
        <div class="cl-sk-us">
            <h2><?php echo get_field('user_tit1'); ?></h2>
            <h1><?php echo get_field('user_tit2'); ?></h1>
        </div>
        <?php if (have_rows('user_rep')) : ?>
		<?php while (have_rows('user_rep')) : the_row(); ?>

        <div class="cl-sk-usimg">
        <?php $image31 = get_sub_field('user_re_img'); ?>  
        <img src="<?php echo $image31['url']; ?>" class="attachment-full size-full" alt="<?php echo $image31['alt']; ?>"> 
            <!-- <img src="http://clearskin.alldemosite.com/wp-content/themes/clearskin/assets/image/Rectangle 41.png"> -->
            <!-- <img src="http://clearskin.alldemosite.com/wp-content/themes/clearskin/assets/image/Rectangle 42.png">
            <img src="http://clearskin.alldemosite.com/wp-content/themes/clearskin/assets/image/Rectangle 43.png"> -->
            <div class="cl-sk-befaft">
                <div class="cl-sk-us11i">
                    <h1><?php echo get_sub_field('user_bef'); ?></h1>
                
                </div>
                <div class="cl-sk-us12i">
                    <h1><?php echo get_sub_field('user_aft'); ?></h1>
                </div>
                <!-- <div class="cl-sk-us11i">
                    <h1>Before</h1>
                
                </div>
                <div class="cl-sk-us12i">
                    <h1>After</h1>
                </div>
                <div class="cl-sk-us11i">
                    <h1>Before</h1>
                
                </div>
                <div class="cl-sk-us12i">
                    <h1>After</h1>
                </div> -->
            </div>
            <div class="cl-md-07">
            <div class="cl-sk-nam">  
                <?php $image32 = get_sub_field('user_sa_img'); ?>  
                <img src="<?php echo $image32['url']; ?>" class="attachment-full size-full" alt="<?php echo $image32['alt']; ?>">           
                <!-- <img src="http://clearskin.alldemosite.com/wp-content/themes/clearskin/assets/image/e-1.png">  -->
                <div class="sk-cl-imgh">
                <h1><?php echo get_sub_field("user_sa-tit"); ?></h1>
                <p><?php echo get_sub_field('user_sa_cont'); ?></p>
                <a href="#">Read more....</a>
                </div>
            </div>
            </div>
        </div>

        
        
        <?php endwhile; ?>
        <?php endif; ?>	

    </div>
</section>

<section>
    <div class="cl-sk-sec-video">
        <div class="cl-sk-video">
            <h1><?php echo get_field('video_tit'); ?></h1>
        </div>
        <div class="slideshow-container5">
            <?php if (have_rows('video_rep')) : ?>
		        <?php while (have_rows('video_rep')) : the_row(); ?>

                <div class="mySlides5 fade5">

    
                    <?php echo get_sub_field('video'); ?>
                </div>


            <?php endwhile; ?>
            <?php endif; ?>	    
            <a class="prev5" onclick="plusSlides5(-1)"><img src="http://clearskin.alldemosite.com/wp-content/themes/clearskin/assets/image/Path 58.png"></a>   
            <a class="next5" onclick="plusSlides5(1)"><img src="http://clearskin.alldemosite.com/wp-content/themes/clearskin/assets/image/Path 59.png"></a>
        </div>
        <div class="cl-sk-view-all">
        <a href="<?php echo get_field('video_view_all'); ?>"><span>View all Videos</span></a>
        </div>
    </div>
</section>

<section>
    <div class="sk-cl-bl">
    <div class="slideshow-container6">
        <h1 class="cl-sk-btit"><?php echo get_field('blog_tit'); ?></h1>
        <div id="image-slider1" class="splide">
                    <div class="splide__track">
                        <div class="splide__list">
                        <?php if (have_rows('blog_rep')) : ?>   
                <?php while (have_rows('blog_rep')) : the_row(); ?>
                            <div class="splide__slide">
                            
               
                <div class="cl-sk-bl">
                    <?php $image91 = get_sub_field('blog_img'); ?>
                    <img src="<?php echo $image91 ['url']; ?>" class="attachment-full size-full" alt="<?php echo $image91 ['alt']; ?>"> 

                    <div class="cl-sk-blimg">

                        <h1><?php echo get_sub_field('blog_top'); ?></h1>
                        <h6><?php echo get_sub_field('blog_cont'); ?></h6>
                        <a href="<?php echo get_sub_field('blog_link'); ?>"><span>Read more....</span></a> 
                    </div>
                </div>  
                
                            </div>
                            <?php endwhile; ?>
                <?php endif; ?>	
                            
                        </div>
                    </div>
                </div>


        
        <div class="mySlides6 fade6">   
                
                <?php if (have_rows('blog_rep')) : ?>   
                <?php while (have_rows('blog_rep')) : the_row(); ?>
               
                <div class="cl-sk-bl">
                    <?php $image91 = get_sub_field('blog_img'); ?>
                    <img src="<?php echo $image91 ['url']; ?>" class="attachment-full size-full" alt="<?php echo $image91 ['alt']; ?>"> 

                    <div class="cl-sk-blimg">

                        <h1><?php echo get_sub_field('blog_top'); ?></h1>
                        <h6><?php echo get_sub_field('blog_cont'); ?></h6>
                        <a href="<?php echo get_sub_field('blog_link'); ?>"><span>Read more....</span></a> 
                    </div>
                </div>  
                <?php endwhile; ?>
                <?php endif; ?>	                  
        </div>
        <div class="mySlides6 fade6">   
                
                <?php if (have_rows('blog_rep1')) : ?>   
                <?php while (have_rows('blog_rep1')) : the_row(); ?>
                
                <div class="cl-sk-bl">
                    <?php $image92 = get_sub_field('blog_img'); ?>
                    <img src="<?php echo $image92 ['url']; ?>" class="attachment-full size-full" alt="<?php echo $image92 ['alt']; ?>"> 

                    <div class="cl-sk-blimg">
                    <!-- <div class="cl-sk-loc"> -->

                        <h1><?php echo get_sub_field('blog_top'); ?></h1>
                        <h6><?php echo get_sub_field('blog_cont'); ?></h6>
                        <a href="<?php echo get_sub_field('blog_link'); ?>"><span>Read more....</span></a> 
                    </div>
                </div>  
                <?php endwhile; ?>
                <?php endif; ?>	                  
        </div>
        <div class="mySlides6 fade6">   
                
                <?php if (have_rows('blog_rep2')) : ?>   
                <?php while (have_rows('blog_rep2')) : the_row(); ?>
                <div class="cl-sk-bl">
            
                    <?php $image93 = get_sub_field('blog_img'); ?>
                    <img src="<?php echo $image93 ['url']; ?>" class="attachment-full size-full" alt="<?php echo $image93 ['alt']; ?>"> 

                    <div class="cl-sk-blimg">
                    <!-- <div class="cl-sk-loc"> -->

                        <h1><?php echo get_sub_field('blog_top'); ?></h1>
                        <h6><?php echo get_sub_field('blog_cont'); ?></h6>
                        <a href="<?php echo get_sub_field('blog_link'); ?>"><span>Read more....</span></a> 
                    </div>
                </div>  
                <?php endwhile; ?>
                <?php endif; ?>	                  
        </div>

                <!-- <a class="prev6" onclick="plusSlides6(-1)"><img src="http://clearskin.alldemosite.com/wp-content/themes/clearskin/assets/image/Path 60.png"></a>
                <a class="next6" onclick="plusSlides6(1)"><img src=http://clearskin.alldemosite.com/wp-content/themes/clearskin/assets/image/Path61.png"></a> -->

    </div>
    <div class="cl-sk-bg-view">
        <a href="<?php echo get_field('blog_view'); ?>"><span>View all blogs</span></a>
    </div>
    </div>
</section>

<section>
    <div class="cl-sk-pop">
        <div class="pop-contain">

            <div class="cl-pop-guide">
                <h1><?php echo get_field('pop_title'); ?></h1>
            </div>







        <div class="cl-ks-guip">
        <?php

        $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

        $args = array(

        'post_type' => 'post',

        'post_status' => 'publish',

        'posts_per_page' => 4,

        'paged' => $paged,

        );

        $the_query = new WP_Query($args);

        if ($the_query->have_posts()): ?>

        <?php while ($the_query->have_posts()): $the_query->the_post();?>

        <article class="loop-entry clearfix">
    
            <div class="loop-entry-thumbnail">
                <a href="<?php the_permalink();?>"><?php
                    $thumb = get_post_thumbnail_id();
                    $img_url = wp_get_attachment_url( $thumb,'full');
                    $image001 = $img_url; 
                    echo '<img src="'.$img_url.'" alt="event-img" />'; ?></a>
            </div>
            <div class="cl-sk-date">
                <span class="round"><?php echo get_the_date( 'j' ); ?><br/><?php echo get_the_date('M'); ?></span>
            </div>
            <div class="loop-entry-right">
            <div class="blog_text_section">
                <h2><a href="<?php the_permalink();?>" title="New Year’s Resolutions: Part 1"><?php the_title();?></a></h2>
                <p><?php echo wp_trim_words( get_the_content(),50, '...' ); ?></p><a href="<?php the_permalink();?>">Read more....</a>
                </div>
            </div>



        </article>








        <?php

            endwhile;

            else:

        ?>

        <h3>no posts found!!</h3>

            

        <?php endif;?>
        </div>

        <div class="cl-pop-read">
            <a href="<?php echo get_field('pop_read_more'); ?>"><span>read all</span></a>
        </div>

    </div>          
    </div>
    

</section>



<?php get_footer(); ?>