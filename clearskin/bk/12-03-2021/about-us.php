<?php
/*
* Template Name: about-us
*/
get_header(); ?>
<section>
    <div class="ab-ban">
        <div class="ab-ban-sec">
                                    <?php
									$about_banner = get_field('about_banner');
									
									if (!empty($about_banner)) {
										$ab_image = $about_banner;
									} else {
										$ab_image = array('url' => get_stylesheet_directory_uri() . '/assets/image/shutterstock_1192627735.png');
										
									} ?>
                                    <div class="ab_img" style="background-image:url(<?php echo $ab_image['url']; ?>);">
            <div class="ab-ban-tit">
                <h1><?php echo get_field('about_title');?></h1>
            </div>
        </div>
    </div>
</section>
<section>
        <div class="tab8">
            <h3 class="tablinks8" onclick="openCity8(event, 'Journey')" id="defaultOpen-j"><?php echo get_field('about_tit1');?></h3>
                <h3 class="tablinks8" onclick="openCity8(event, 'Vision')"><?php echo get_field('about_tit2'); ?></h3>
  
        </div>

        <div id="Journey" class="tabcontent8">
            
                <div class="cl-sk-ab-jmv">
                    <div class="cl-sk-ab-mpi">
                        <p><?php echo get_field('about_j_para');?></p>
                        <?php $imageabj = get_field('about_j_img'); ?>
                        <img src="<?php echo $imageabj ['url']; ?>" class="attachment-full size-full" alt="<?php echo $imageabj ['alt']; ?>">
                    </div>
                    <a href="<?php echo get_field('about_j_link');?>"><span>Read more...</span></a>
                </div>
            
        </div>

        <div id="Vision" class="tabcontent8">
            <div class="cl-sk-ab-jmv">
                <div class="cl-sk-ab-mpi">
                    <?php $imageabm = get_field('about_m_img'); ?>
                        <img src="<?php echo $imageabm ['url']; ?>" class="attachment-full size-full" alt="<?php echo $imageabm ['alt']; ?>">
                    <p><?php echo get_field('about_m_para');?></p> 
                    
                </div>
                <a href="<?php echo get_field('about_m_link');?>"><span>Read more...</span></a>
            </div>
        </div>
</section>
<section>
    <div class="cl-sk-ab-key">
        <div class="cl-sk-ab-featu">
            <div class="cl-ab-key-img">
            <?php $imageabk = get_field('key_img'); ?>
                        <img src="<?php echo $imageabk ['url']; ?>" class="attachment-full size-full" alt="<?php echo $imageabk ['alt']; ?>">
            </div>
            <div class="cl-ab-featu-para">
                <h1><?php echo get_field('about_key_tit'); ?></h1>
                
                  <p><?php echo get_field('about_key_para1');?></p>
                  <p><?php echo get_field('about_key_para2'); ?></p>
                  <p><?php echo get_field('about_key_para3'); ?></p>
                
            </div>
        </div>
     
    </div>
</section>
<section>
    <div class="cl-sk-rev">
        <div class="cl-sk-tg">
        <h1><?php echo get_field('cust_tit');?></div>
        <div class="slideshow-container3">
            <?php if (have_rows('cust_sect')) : ?>
                <?php while (have_rows('cust_sect')) : the_row(); ?>   

                    <div class="mySlides3 fade3">
                    <?php $x =  get_sub_field('cust_name'); ?>
                        <span class="circle1"><?php echo substr($x,0,1); ?></span>
                        <h3><?php echo $x; ?></h3>
    
                        <div class="cl-sk-img23"> 
                        <?php $imagecsi = get_sub_field('cust_st_img'); ?>
                        <img src="<?php echo $imagecsi['url']; ?>" class="attachment-full size-full" alt="<?php echo $imagecsi['alt']; ?>"> </div>
                        <p><?php echo get_sub_field('cust_comment_test'); ?></p>
                    </div>
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
    <div class="cl-sk-ab-ld">
        <div class="cl-sk-abl-tit">
            <h1><?php echo get_field('leader_tit');?></h1>
        </div>
        <div class="cl-sk-ls-col">
            <div class="cl-ab-col-ld1">
                <?php $imagel1 = get_field('found1_img'); ?>
                <img src="<?php echo $imagel1 ['url']; ?>" class="attachment-full size-full" alt="<?php echo $imagel1 ['alt']; ?>">
                <h1><?php echo get_field('found1_name'); ?></h1>
                <p><?php echo get_field('found1_posi'); ?></p>
                <div class="cl-ad-lin">
                    <?php $imagelin = get_field('found1_lin'); ?>
                    <a href="<?php echo get_field('found1_lin_link'); ?>"><img src="<?php echo $imagelin ['url']; ?>" class="attachment-full size-full" alt="<?php echo $imagelin ['alt']; ?>"></a>
                    <?php $imagetw = get_field('found1_tw'); ?>
                    <a href="<?php echo get_field('found1_tw_link');?>"><img src="<?php echo $imagetw ['url']; ?>" class="attachment-full size-full" alt="<?php echo $imagetw ['alt']; ?>"></a>
                    <!-- <img src="http://clearskin.alldemosite.com/wp-content/themes/clearskin/assets/image/twitter.png"> -->
                </div>
                
            </div>
            <div class="cl-ab-col-ld2">
                <?php $imagel2 = get_field('found2_img'); ?>
                <img src="<?php echo $imagel2 ['url']; ?>" class="attachment-full size-full" alt="<?php echo $imagel2 ['alt']; ?>">
                <!-- <img src="http://clearskin.alldemosite.com/wp-content/themes/clearskin/assets/image/Dr.Dhanaraj_chavan_dueirh-1.png"> -->
                <h1><?php echo get_field('found2_name');?></h1>
                <p><?php echo get_field('found2_posi'); ?></p>
                <div class="cl-ad-lin">
                    <?php $imagelin2 = get_field('found2_lin'); ?>
                    <a href="<?php echo get_field('found2_lin_link');?>"><img src="<?php echo $imagelin2 ['url']; ?>" class="attachment-full size-full" alt="<?php echo $imagelin2 ['alt']; ?>"></a>
                    <!-- <img src="http://clearskin.alldemosite.com/wp-content/themes/clearskin/assets/image/linkedin.png"> -->
                    <?php $imagetw2 = get_field('found2_tw'); ?>
                    <a href="<?php echo get_field('found2_tw_link');?>"><img src="<?php echo $imagetw2 ['url']; ?>" class="attachment-full size-full" alt="<?php echo $imagetw2 ['alt']; ?>"></a>
                    <!-- <img src="http://clearskin.alldemosite.com/wp-content/themes/clearskin/assets/image/twitter.png"> -->
                </div>
            </div>
        </div> 
    </div>
</section>
<section>
    <div class="cl-sk-me-te">
        <div class="cl-sk-me-tm">
            <div class="cl-sk-ab-tem"><h1><?php echo get_field('met_te_tit');?></h1></div>
            <div id="image-slider32" class="splide">
                <div class="splide__track">
                    <div class="splide__list">
                        <?php if (have_rows('met_te_rep')) : ?>   
                            <?php while (have_rows('met_te_rep')) : the_row(); ?>
                                <div class="splide__slide">
                                    <div class="cl-ab-tem-img">
                                        <?php $imagemti = get_sub_field('met_team_img'); ?>
                                        <img src="<?php echo $imagemti ['url']; ?>" class="attachment-full size-full" alt="<?php echo $imagemti ['alt']; ?>"> 
                                        <div class="cl-ab-team">                                           
                                            <h1><?php echo get_sub_field('met_team_name'); ?></h1>
                                            <h6><?php echo get_sub_field('met_team_posi'); ?></h6>
                                            <p><?php echo get_sub_field('met_team_cont'); ?></p>
                                            <a href="<?php echo get_sub_field('met_team_link'); ?>"><span>Read more....</span></a> 
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
</section>

<section>
    <div class="cl-sk-ty-doc">
        <div class="cl-sk-ty-cont">
            <div class="cl-sk-assd-title">
                <h1><?php echo get_field('ass_title');?></h1>
            </div>
            <div class="doc-select">
                <select id="doc-select"> 
                    <option value="A">Concellors</option>
                    <option value="B">Chief Doctor</option>
                    <option value="C">Advicors</option>
                </select>
            </div>
            <div id="A" class="vis">
                <div id="image-slider12" class="splide">
                    <div class="splide__track">
                        <div class="splide__list">
                            <?php if (have_rows('cl_ass_rep')) : ?>   
                                <?php while (have_rows('cl_ass_rep')) : the_row(); ?>
                                    <div class="splide__slide">
                                        <div class="cl-assd-img">
                                            <?php $imagemai = get_sub_field('cl_ass_img'); ?>
                                            <img src="<?php echo $imagemai ['url']; ?>" class="attachment-full size-full" alt="<?php echo $imagemai ['alt']; ?>"> 
                                            <div class="cl-ass-der">                                           
                                                <h1><?php echo get_sub_field('cl_ass_name'); ?></h1>
                                                <h6><?php echo get_sub_field('cl_ass_posi'); ?></h6>
                                            </div>
                                        </div>                
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>	                          
                        </div>
                    </div>
                </div>
            </div>

            <div id="B" class="inv">
                <div id="image-slider13" class="splide">
                    <div class="splide__track">
                        <div class="splide__list">
                            <?php if (have_rows('cl_ass_rep1')) : ?>   
                                <?php while (have_rows('cl_ass_rep1')) : the_row(); ?>
                                    <div class="splide__slide">
                                        <div class="cl-assd-img">
                                            <?php $imageyz = get_sub_field('cl_ass_img1'); ?>
                                            <img src="<?php echo $imageyz ['url']; ?>" class="attachment-full size-full" alt="<?php echo $imageyz ['alt']; ?>"> 
                                            <div class="cl-ass-der">                                           
                                                <h1><?php echo get_sub_field('cl_ass_name'); ?></h1>
                                                <h6><?php echo get_sub_field('cl_ass_posi'); ?></h6>
                                            </div>
                                        </div>                
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>	                          
                        </div>
                    </div>
                </div>
            </div>

            <div id="C" class="inv">
                <div id="image-slider14" class="splide">
                    <div class="splide__track" >
                        <div class="splide__list">
                            <?php if (have_rows('cl_ass_rep2')) : ?>   
                                <?php while (have_rows('cl_ass_rep2')) : the_row(); ?>
                                    <div class="splide__slide">
                                        <div class="cl-assd-img">
                                            <?php $imagelk = get_sub_field('cl_ass_img'); ?>
                                            <img src="<?php echo $imagelk ['url']; ?>" class="attachment-full size-full" alt="<?php echo $imagelk ['alt']; ?>"> 
                                            <div class="cl-ass-der">                                           
                                                <h1><?php echo get_sub_field('cl_ass_name'); ?></h1>
                                                <h6><?php echo get_sub_field('cl_ass_posi'); ?></h6>
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
    </div>                            
</section>



<section>
    <div class="cl-sk-doc-tor">
        <div class="cl-sk-doctor-tit">
            <h3><?php echo get_field('doc_tor_tit1');?></h3>
            <h1><?php echo get_field('doc_tor_tit2');?></h1>
        </div>
        <div class="sk-doc-tor-dermo">
            <div class="sk-doc-tor-cont">
                <h1><?php echo get_field('doc_tor_name');?></h1>
                <h4><?php echo get_field('doc-tor-posi');?></h4>
                <p><?php echo get_field('doc-tor-cont');?></p>
            </div>
            <div class="sk-doc-tor-img">
                <?php $imagedti = get_field('doc-tor-img'); ?>
                <img src="<?php echo $imagedti ['url']; ?>" class="attachment-full size-full" alt="<?php echo $imagedti ['alt']; ?>"> 
            </div>
        </div>
    </div>
</section>


<section>
    <div class="cl-sk-or-prce">
        <div class="cl-sk-our-prs">
            <div class="cl-sk-prs-tit">
                <h1><?php echo get_field('our-pre_tit');?>
            </div>
            <div class="pre-select">
                <select id="pre-select">
                    <option value="D">Pune</option>
                    <option value="E">Karnataka</option>
                    <option value="F">Gujarat</option>
                </select>
            </div> 
            <div id="D" class="vis1">
                <div class="container_custom">
                    <h1 class="cl-sk-top">Pune</h1>
                    <div id="image-slider" class="splide">
                        <div class="splide__track">
                            <div class="splide__list">
                                <?php if (have_rows('ab_location')) : ?>
                                    <?php while (have_rows('ab_location')) : the_row(); ?>
                                        <div class="splide__slide">
                                            <div class="col-md-5">
                                                <?php $imageali = get_sub_field('ab_loc_img'); ?>
                                                <img src="<?php echo $imageali ['url']; ?>" class="attachment-full size-full" alt="<?php echo $imageali ['alt']; ?>"> 

                                                <div class="cl-sk-loc">
                                                    <h1><?php echo get_sub_field('ab_loc_top'); ?></h1>
                                                    <p><?php echo get_sub_field('ab_loc_cont'); ?></p>
                                                    <p><?php echo get_sub_field('ab_loc_time'); ?></p>
                                                    <a href="<?php echo get_sub_field('ab_loc_link');?>"><span>Book Appointment</span></a>
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

            <div id="E" class="inv1">
                <div class="container_custom">
                    <h1 class="cl-sk-top">Karnataka</h1>
                    <div id="image-slider51" class="splide">
                        <div class="splide__track">
                            <div class="splide__list">
                                <?php if (have_rows('ab_location1')) : ?>
                                    <?php while (have_rows('ab_location1')) : the_row(); ?>
                                        <div class="splide__slide">
                                            <div class="col-md-5">
                                                <?php $imageali1 = get_sub_field('ab_loc_img1'); ?>
                                                <img src="<?php echo $imageali1 ['url']; ?>" class="attachment-full size-full" alt="<?php echo $imageali1 ['alt']; ?>"> 

                                                <div class="cl-sk-loc">
                                                    <h1><?php echo get_sub_field('ab_loc_top'); ?></h1>
                                                    <p><?php echo get_sub_field('ab_loc_cont'); ?></p>
                                                    <p><?php echo get_sub_field('ab_loc_time'); ?></p>
                                                    <a href="<?php echo get_sub_field('ab_loc_link');?>"><span>Book Appointment</span></a>
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



            <div id="F" class="inv1">
                <div class="container_custom">
                    <h1 class="cl-sk-top">Gujarat</h1>
                    <div id="image-slider3" class="splide">
                        <div class="splide__track">
                            <div class="splide__list">
                                <?php if (have_rows('ab_location2')) : ?>
                                    <?php while (have_rows('ab_location2')) : the_row(); ?>
                                        <div class="splide__slide">
                                            <div class="col-md-5">
                                                <?php $imageali2 = get_sub_field('ab_loc_img'); ?>
                                                <img src="<?php echo $imageali2 ['url']; ?>" class="attachment-full size-full" alt="<?php echo $imageali2 ['alt']; ?>"> 

                                                <div class="cl-sk-loc">
                                                    <h1><?php echo get_sub_field('ab_loc_top'); ?></h1>
                                                    <p><?php echo get_sub_field('ab_loc_cont'); ?></p>
                                                    <p><?php echo get_sub_field('ab_loc_time'); ?></p>
                                                    <a href="<?php echo get_sub_field('ab_loc_link');?>"><span>Book Appointment</span></a>
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
        </div>
    </div>
</section>           

<?php get_footer(); ?>