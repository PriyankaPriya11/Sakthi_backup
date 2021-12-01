
<?php

get_header('pmhere');

?>
     <!--section One-->
     <section id="section2">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="col-md-6">
                    <div class="content1">
                        <p><strong><?php echo get_field('live_life');?></strong><br><span><?php echo get_field('live_life1');?></span></p>
                    </div>
                     </div>
                     <div class="col-md-6">
                         <div class="col-md-4">
                        <div class="content2">
                         <p><strong><?php echo get_field('million_20');?></strong><br><span><?php echo get_field('million_text');?></span></p>
                        </div>
                         </div>
                         <div class="col-md-4">
                            <div class="content2">
                         <p><strong><?php echo get_field('lifestyle');?></strong><br><span><?php echo get_field('lifestyle_text');?></span></p>
                         </div>
                         </div>
                         <div class="col-md-4">
                            <div class="content2 cont2">
                         <p><strong><?php echo get_field('over_500');?></strong><br><span><?php echo get_field('over_text');?></span></p>
                         </div>
                         </div>

                     </div>
                    
                 </div>
                 <div class="col-md-12">
                    <div class="mobile_content">
                    <?php echo get_field('mobile_text');?>
                       
                     </div>
                 </div>
             </div>
         </div>
     </section>
        <!--section One-->
        <!--section second-->
        <section id="section3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-1">
                            <div class="side_title">
                                <h3> <?php echo get_field('popular');?></h3>
                            </div>
                            <div class="side-title_mobile">
                                <h3><?php echo get_field('popular_mobile');?></h3>
                            </div>

                        </div>
                        <div class="col-md-11 md2">
                        <?php if (have_rows('most_popular_images')):?>
                        <?php while (have_rows('most_popular_images')): the_row(); ?> 
                            <div class="col-md-3">
                            <?php $image = get_sub_field('popular_section_image');?>
                                <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>" class="most_popular_img">
                                <!-- <img src="http://localhost/livelife/wp-content/themes/livelife/img/make4.png" class="most_popular_img"> -->
                                <div class="title1">
                                    <h3 class="main-title1"><?php echo get_sub_field('popular_title');?></h3>
                                    <h3 class="sub-title1"><?php echo get_sub_field('popular_subtitle');?></h3>
                                    <p><?php echo get_sub_field('popular_content');?></p>
                                </div>

                            </div>
                            <?php endwhile;?>
                            <?php endif;?>
                            <!-- <div class="col-md-3">
                                <img src="http://localhost/livelife/wp-content/themes/livelife/img/Mask1.png" class="most_popular_img">
                                <div class="title1">
                                    <h3 class="main-title1">TRAVEL</h3>
                                    <h3 class="sub-title1">Top 5 Caribbean cruise destinations on a budget</h3>
                                    <p>Caribbean cruises are incredible. Sailing through tropical climes is a wonderful way to take some time out – and there are some truly wild and wonderful places for you to visit through thousands of cruise tours each year.</p>
                                </div>

                            </div>
                            <div class="col-md-3">
                                <img src="http://localhost/livelife/wp-content/themes/livelife/img/mask2.png" class="most_popular_img">
                                <div class="title1">
                                    <h3 class="main-title1">EDUCATION</h3>
                                    <h3 class="sub-title1">How can you get printable math worksheets for your class?</h3>
                                    <p>The age of the math workbook might finally be on the way out. Sure, not everyone is working with tablets and touchscreens yet, but it’s getting more and more economical to print out individual exercises for children to complete </p>
                                </div>

                            </div>
                            <div class="col-md-3">
                                <img src="http://localhost/livelife/wp-content/themes/livelife/img/mask3.png" class="most_popular_img">
                                <div class="title1">
                                    <h3 class="main-title1">LIFE</h3>
                                    <h3 class="sub-title1">How scary games give us the fright we’re looking for</h3>
                                    <p>Fear makes us panic, sweat, scream and shake uncontrollably. You may be wondering why anyone would want to voluntarily invoke such a feeling. In the face of this, however, horror sells.     </p>
                                </div>

                            </div> -->

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--section second-->
        <!--section third-->
        <section id="section-three">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-1">
                            <div class="side_title">
                                <h3><?php echo get_field('post');?></h3>
                            </div>
                            <div class="side-title_mobile">
                                <h3><?php echo get_field('post_mobile');?></h3>
                            </div>
                        </div>
                        <div class="col-md-11">
                            <div class="owl-carousel owl-theme" id="carousel1">
                            <?php if (have_rows('latest_post')):?>
                        <?php while (have_rows('latest_post')): the_row(); ?> 
                                <div class="item" data-dot="<?php echo get_sub_field('count');?>">
                                <?php $image = get_sub_field('latest_image');?>
                                <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>">
                                    <div class="carousel_item1">
                                        <h3 class="carousle_title_1"><?php echo get_sub_field('latest_title');?></h3>
                                        <p><?php echo get_sub_field('latest_sub');?></p>
                                        <div class="sub-line">
                                        <div class="right-line"></div>
                                        <a href=""><?php echo get_sub_field('latest_read');?>Read more</a>
                                    </div>
                                    </div>
                                </div>
                                <?php endwhile;?>
                            <?php endif;?>
                                <!-- <div class="item" data-dot="<button>02</button>"><img src="http://localhost/livelife/wp-content/themes/livelife/img/slide2.png">
                                    <div class="carousel_item1">
                                        <h3 class="carousle_title_1">CRUISE</h3>
                                        <p>Cheap last minute<br> cruises</p>
                                        <div class="sub-line">
                                            <div class="right-line"></div>
                                            <a href="">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item" data-dot="<button>03</button>"><img src="http://localhost/livelife/wp-content/themes/livelife/img/slide3.png">
                                    <div class="carousel_item1" >
                                        <h3 class="carousle_title_1">FOOD</h3>
                                        <p>General Tips for Healthy Eating for a <br>Healthy Heart</p>
                                        <div class="sub-line">
                                            <div class="right-line"></div>
                                            <a href="">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item" data-dot="<button>04</button>"><img src="http://localhost/livelife/wp-content/themes/livelife/img/slide4.png">
                                    <div class="carousel_item1" >
                                        <h3 class="carousle_title_1">CRUISE</h3>
                                        <p>Cheap last minute cruises</p>
                                        <div class="sub-line">
                                            <div class="right-line"></div>
                                            <a href="">Read more</a>
                                        </div>
                                    </div>
                                
                                </div> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
           <!--section third-->
           <!---section four-->
           <section id="four">
               <div class="container">
                   <div class="row">
                       <div class="col-md-12 md-12-section">
                           <div class="col-md-1">
                            <div class="side_title">
                                <h3><?php echo get_field('home');?></h3>
                                
                            </div>
                            <div class="side-title_mobile">
                                <h3><?php echo get_field('home_mobile');?></h3>
                            </div>
                           </div>
                           <div class="col-md-7 md-10">
                               <div class="home_section">
                               <?php $image = get_field('home_image');?>
                                   <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>" class="home_img_1">
                                   <div class="home_section_title">
                                       <h3><?php echo get_field('home_title');?></h3>
                                       <h4><?php echo get_field('home_subtitle');?></h4>
                                       <p><?php echo get_field('home_content');?></p>
                                           <div class="sub-line">
                                            <div class="right-line"></div>
                                            <a href=""><?php echo get_field('home_link');?>Read more</a>
                                        </div>
                                           
                                   </div>

                               </div>

                           </div>
                           <div class="col-md-4">
                           <?php $image = get_field('home_image_side');?>
                               <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>" class="home_img_2">
                               <div class="home_section_side">
                                   <h3><?php echo get_field('home_side_title');?></h3>
                                   <h4><?php echo get_field('home_side_sub');?></h4>
                                   <p><?php echo get_field('home_side_content');?></p>
                                       <div class="sub-line">
                                        <div class="right-line"></div>
                                        <a href=""><?php echo get_field('home_side_link');?>Read more</a>
                                    </div>
                               </div>

                           </div>
                       </div>
                       <div class="col-md-12">
                        <div class="col-md-1">
                            <div class="side_title">
                                <h3><?php echo get_field('beauty');?></h3>
                            </div>   
                            <div class="side-title_mobile">
                                <h3><?php echo get_field('beauty_mobile');?></h3>
                            </div>
                       </div>
                       <div class="col-md-7 md-10">
                           <div class="section_under1">
                           <?php if (have_rows('beauty_section')):?>
                        <?php while (have_rows('beauty_section')): the_row(); ?> 
                           <div class="col-md-6">
                           <?php $image = get_sub_field('beauty_section_image');?>
                            <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>">
                            <div class="beauty_content1">
                                <h3><?php echo get_sub_field('beauty_title');?></h3>
                                <h4><?php echo get_sub_field('beauty_sub');?></h4>
                                <p><?php echo get_sub_field('beauty_content');?></p>
                                <div class="sub-line">
                                    <div class="right-line"></div>
                                    <a href=""><?php echo get_sub_field('beauty_link');?>Read more</a>
                                </div>
                            </div>
                           </div>
                           <?php endwhile;?>
                            <?php endif;?>
                           <!-- <div class="col-md-6">
                            <img src="http://localhost/livelife/wp-content/themes/livelife/img/home_sec2.png"> 
                            <div class="beauty_content1">
                                <h3>BEAUTY</h3>
                                <h4>The best moisturizer</h4>
                                <p>Aging, or rather the appearance of early signs of aging, is a very dreadful sight for most women in their 30s and 40s. 
                                    It is an acceptable fact that aging is your skin’s natural process</p>
                                    <div class="sub-line">
                                        <div class="right-line"></div>
                                        <a href="">Read more</a>
                                    </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="section_under2">
                    <!-- <?//php if (have_rows('beauty_section1')):?>
                        <?//php while (have_rows('beauty_section1')): the_row(); ?> 
                        <div class="col-md-6">
                        <?//php $image = get_sub_field('beauty_section_image1');?>
                            <img src="<?//php echo $image['url']; ?>"  alt="<?//php echo $image['alt']; ?>">  
                            <!-- <div class="beauty_content1">
                                <h3><?//php echo get_sub_field('beauty_title1');?>BEAUTY</h3>
                                <h4><?//php echo get_sub_field('beauty_sub1');?>Anti aging creams you wish</h4>
                                <p><?//php echo get_sub_field('beauty_content1');?>Aging is bound to happen, whether you are ready for it or not. To be true, no one is ever quite ready for aging. Every woman wants to look young forever</p>
                                <div class="sub-line">
                                    <div class="right-line"></div>
                                    <a href=""><?//php echo get_sub_field('beauty_link1');?>Read more</a>
                                </div>
                            </div>
                        </div> -->
                        <?//php endwhile;?>
                            <?//php endif;?>
                        <!-- <div class="col-md-6">
                            <img src="http://localhost/livelife/wp-content/themes/livelife/img/home_sec4.png">   
                            <div class="beauty_content1">
                                <h3>BEAUTY</h3>
                                <h4>Wrinkle treatments vs prevention</h4>
                                <p>Today more and more people are using anti wrinkle creams to help keep their skin looking young as they get older. There’s no doubt that they can have impressive effects</p>
                                <div class="sub-line">
                                    <div class="right-line"></div>
                                    <a href="">Read more</a>
                                </div>
                            </div>  
                        </div> -->
                    </div>
                       </div>
                       <div class="col-md-4">
                        <div class="col-md-1"><div class="title_rotate"><h3><?php echo get_field('newletter');?></h3></div></div>
                        <div class="col-md-11">
                       <div class="home_form">
                          <h4><?php echo get_field('newletter_title');?></h4>
                          <p><?php echo get_field('newletter_content');?></p>
                          <label><input id="fname" type="text" placeholder="Email Address"></label>
                          <a class="login-trigger" href="#" data-target="#login" data-toggle="modal">SUBSCRIBE</a>
                       </div>
                    </div>
                       </div>
                   </div>
               </div>
           </section>
              <!---section four-->
              <!--section five-->
              <section id="five">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-12">
                              <div class="col-md-1"></div>
                              <div class="col-md-7">
                                  <div class=" col-md-6 subscribe_Text">
                                   <h3><?php echo get_field('subscribe');?></h3>
                                   <p><?php echo get_field('subscribe_text');?></p>
                                  </div>
                                  <div class="col-md-6 subscribe_form">
                                    <div class="home_form">
                                        <label><input id="fname" type="text" placeholder="Email Address"></label>
                                        <a class="login-trigger" href="#" data-target="#login" data-toggle="modal">SUBSCRIBE</a>
                                     </div> 
                                      
                                </div>
                              </div>
                              <div class="col-md-4" style="text-align: center;">
                              <?php $image = get_field('subscribe_img');?>
                                  <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>">
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
               <!--section five-->
               <!--section six-->
               <section id="six">
                   <div class="container">
                       <div class="row">
                           <div class="col-md-12">
                               <div class="col-md-1">
                                <div class="side_title">
                                    <h3><?php echo get_field('wellness');?></h3>
                                </div>
                                <div class="side-title_mobile">
                                    <h3><?php echo get_field('wellness_mobile');?></h3>
                                </div>
                               </div>
                               <div class="col-md-11">
                               <?php if (have_rows('wellness_sections')):?>
                        <?php while (have_rows('wellness_sections')): the_row(); ?> 
                                   <div class="col-md-4">
                                       <?php $image = get_sub_field('wellness_imgs');?>
                                      <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>" class="wel_img">
                                       <div class="wel-content">
                                           <h3><?php echo get_sub_field('health_title');?></h3>
                                           <h4><?php echo get_sub_field('health_sub');?></h4>
                                           <p><?php echo get_sub_field('health_content');?></p>
                                               <div class="sub-line">
                                                <div class="right-line"></div>
                                                <a href=""><?php echo get_sub_field('health_link');?>Read more</a>
                                            </div>
                                       </div>
                                   </div>
                                   <?php endwhile;?>
                            <?php endif;?>
                                   <!-- <div class="col-md-4">
                                    <img src="http://localhost/livelife/wp-content/themes/livelife/img/wel2.png" class="wel_img">
                                    <div class="wel-content">
                                        <h3>HEALTH</h3>
                                        <h4>Massage Therapy for Pain Management</h4>
                                        <p>Message can manage chronic pain as well as acute, and is particularly effective with chronic low back pain, where massage treatment has proven more effective </p>
                                            <div class="sub-line">
                                             <div class="right-line"></div>
                                             <a href="">Read more</a>
                                         </div>
                                    </div>
                                   </div>
                                   <div class="col-md-4">
                                    <img src="http://localhost/livelife/wp-content/themes/livelife/img/wel3.png" class="wel_img">
                                    <div class="wel-content">
                                        <h3>HEALTH</h3>
                                        <h4>Massage for Relaxation</h4>
                                        <p>Whether getting massage on a physician’s order or to pamper themselves with a day at the spa, one of the first benefits people notice is that getting massaged is relaxing. </p>
                                            <div class="sub-line">
                                             <div class="right-line"></div>
                                             <a href="">Read more</a>
                                         </div>
                                    </div>
                                   </div> -->
                               </div>
                           </div>
                       </div>
                   </div>
               </section>
                <!--section six-->
                <!--section seven-->
                <section id="seven">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-1">
                                    <div class="side_title t1">
                                        <h3><?php echo get_field('best_post');?></h3>
                                    </div>
                                    <div class="side-title_mobile">
                                        <h3><?php echo get_field('best_post_mobile');?></h3>
                                    </div>
                                </div>
                                <div class="col-md-11">
                                <?php if (have_rows('best_post_sections')):?>
                        <?php while (have_rows('best_post_sections')): the_row(); ?> 
                                <div class="col-md-6">
                                <?php $image = get_sub_field('best_post_imgs');?>
                                      <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>" class="post_img">
                                <div class="post_content">
                                    <h3><?php echo get_sub_field('bpost_title');?></h3>
                                    <h4><?php echo get_sub_field('bpost_sub');?></h4>
                                    <div class="sub-line">
                                        <div class="right-line"></div>
                                        <a href=""><?php echo get_sub_field('bpost_link');?>Read more</a>
                                    </div>
                                </div>
                                </div>
                                <?php endwhile;?>
                            <?php endif;?>
                                <!-- <div class="col-md-6">
                                <img src="http://localhost/livelife/wp-content/themes/livelife/img/post2.png" class="post_img">
                                <div class="post_content">
                                    <h3>TRAVEL</h3>
                                    <h4>Last minute cruises: the key destinations</h4>
                                    <div class="sub-line">
                                        <div class="right-line"></div>
                                        <a href="">Read more</a>
                                    </div>
                                </div>
                                </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--section seven-->
                <!--section eight-->
                <section id="eight">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-1">
                                <div class="side_title">
                                    <h3><?php echo get_field('food_post');?></h3>
                                </div>
                                <div class="side-title_mobile">
                                    <h3><?php echo get_field('food_post_mobile');?></h3>
                                </div>
                            </div>
                            <div class="col-md-11 md33">
                                <div class="col-md-8 md88">
                                <?php if (have_rows('food_post_sections')):?>
                        <?php while (have_rows('food_post_sections')): the_row(); ?>
                                    <div class="col-md-5 md5">
                                    <!-- <img src="http://localhost/livelife/wp-content/themes/livelife/img/recent1.png" class="recent_post_img"> -->
                                    <?php $image = get_sub_field('food_post_imgs');?>
                                      <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>" class="recent_post_img">
                                    </div>
                                    <div class="col-md-7 md77">
                                    <div class="recent-content">
                                        <h3><?php echo get_sub_field('food_post_title');?></h3>
                                        <h4><?php echo get_sub_field('food_post_sub');?></h4>
                                        <p><?php echo get_sub_field('food_post_content');?></p>
                                        <div class="sub-line">
                                            <div class="right-line"></div>
                                            <a href="<?php echo get_sub_field('link_url');?>"><?php echo get_sub_field('food_post_link_text');?></a>
                                        </div>  
                                    </div>
                                    </div>
                                  
                                    <?php endwhile;?>
                            <?php endif;?>
                                    <!-- <div class="col-md-5 md5">
                                        <img src="http://localhost/livelife/wp-content/themes/livelife/img/recent2.png" class="recent_post_img">
                                        </div>
                                        <div class="col-md-7 md77">
                                        <div class="recent-content">
                                            <h3>FOOD</h3>
                                            <h4>Healthy Eating for Toddlers
                                            </h4>
                                            <p>Once your baby is weaned from the bottle or breast, and you have an independent toddler on you hands, then getting them fed healthily can be another worrying point.</p>
                                            <div class="sub-line">
                                                <div class="right-line"></div>
                                                <a href="">Read more</a>
                                            </div>  
                                        </div>
                                        </div>
                                        <div class="col-md-5 md5">
                                            <img src="http://localhost/livelife/wp-content/themes/livelife/img/recent3.png" class="recent_post_img">
                                            </div>
                                            <div class="col-md-7 md77">
                                            <div class="recent-content">
                                                <h3>FOOD</h3>
                                                <h4>Healthy Weaning for Babies – First Foods</h4>
                                                <p>So your baby has been milk fed for six months (breast or bottle), and now it’s time to start on solids. This can be a stressful time for both parent and baby.</p>
                                                <div class="sub-line">
                                                    <div class="right-line"></div>
                                                    <a href="">Read more</a>
                                                </div>  
                                            </div>
                                            </div>
                                            <div class="col-md-5 md5">
                                                <img src="http://localhost/livelife/wp-content/themes/livelife/img/recent4.png" class="recent_post_img">
                                                </div>
                                                <div class="col-md-7 md77">
                                                <div class="recent-content">
                                                    <h3>FOOD</h3>
                                                    <h4>Good Food – Going Straight to the Heart</h4>
                                                    <p>The British Heart Foundation gives the advice that, “Prevention is better than cure and a healthy diet can not only reduce your chances of developing heart disease</p>
                                                    <div class="sub-line">
                                                        <div class="right-line"></div>
                                                        <a href="">Read more</a>
                                                    </div>  
                                                </div>
                                                </div>
                                                <div class="col-md-5 md5">
                                                    <img src="http://localhost/livelife/wp-content/themes/livelife/img/recent5.png" class="recent_post_img">
                                                    </div>
                                                    <div class="col-md-7 md77">
                                                    <div class="recent-content">
                                                        <h3>FOOD</h3>
                                                        <h4>General Tips for Healthy Eating</h4>
                                                        <p>High cholesterol can increase your chance of heart disease, and saturated fat is a high risk culprit when it comes to raising your cholesterol.</p>
                                                        <div class="sub-line">
                                                            <div class="right-line"></div>
                                                            <a href="">Read more</a>
                                                        </div>  
                                                    </div>
                                                    </div>
                                    
                                    

                                </div> -->
                                <a href="#" class="more">MORE FROM</a>
                                </div>
                                <div class="col-md-4 md34">
                                    <div class="col-md-1"><div class="title_rotate"><h3><?php echo get_field('newletter');?></h3></div></div>
                                    <div class="col-md-11">
                                        <div class="home_form">
                                           <h4><?php echo get_field('newletter_title');?></h3></h4>
                                           <p><?php echo get_field('newletter_content');?></h3></p>
                                           <label><input id="fname" type="text" placeholder="Email Address"></label>
                                           <a class="login-trigger" href="#" data-target="#login" data-toggle="modal">SUBSCRIBE</a>
                                        </div>
                                     </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
                 <!--section eight-->

<?php
get_footer('pmhere');	
?>
              
                   
