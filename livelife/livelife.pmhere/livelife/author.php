<?php
/*Template Name: author Template */
get_header();

?>
 <!--secction two-->
 <section id="authortwo">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="col-md-1">
                        <div class="side_title a1">
                            <h3><?php echo get_field("latest_section"); ?></h3>
                        </div>
                        <div class="side-title_mobile">
                            <h3><?php echo get_field("latest_section"); ?></h3>
                        </div>
                     </div>
                     <div class="col-md-11" id="desktop_caro">
                        <div class="owl-carousel owl-theme" id="carousel11">
                        <?php if (have_rows('post_images')):?>
                        <?php while (have_rows('post_images')): the_row(); ?> 
                            <div class="item" data-dot="<?php echo get_sub_field('count');?>">
                            <?php if (have_rows('post_images_section')):?>
                        <?php while (have_rows('post_images_section')): the_row(); ?> 
                                <div class="lx-1">
                                <?php $image = get_sub_field('images_section');?>
                <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>" >
                                    <!-- <img src="img/home_sec1.png"> -->
                                    <div class="beauty_content1 auth_con1">
                                        <h3><?php echo get_sub_field('post_title');?></h3>
                                        <h4><?php echo get_sub_field('post_title_sub');?></h4>
                                        <p><?php echo get_sub_field('post_content');?></p>
                                        <div class="sub-line">
                                            <div class="right-line"></div>
                                            <a href="<?php echo get_sub_field('post_link');?>"><?php echo get_sub_field('post_link_content');?></a>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile;?>
                            <?php endif;?>
                                
                                <!-- <div class="lx-1">
                                    <img src="img/home_sec4.png">
                                    <div class="beauty_content1 auth_con1">
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
                            <?php endwhile;?>
                            <?php endif;?>
                            <!-- <div class="item" data-dot="<button>02</button>">
                                <div class="lx-1">
                                    <img src="img/home_sec2.png">
                                    <div class="beauty_content1 auth_con1">
                                        <h3>BEAUTY</h3>
                                        <h4>The best moisturizer</h4>
                                        <p>Aging, or rather the appearance of early signs of aging, is a very dreadful sight for most women in their 30s and 40s. 
                                            It is an acceptable fact that aging is your skin’s natural process</p>
                                            <div class="sub-line">
                                                <div class="right-line"></div>
                                                <a href="">Read more</a>
                                            </div>
                                    </div>
                                </div>
                                <div class="lx-1">
                                    <img src="img/home_sec3.png">
                                    <div class="beauty_content1 auth_con1">
                                        <h3>BEAUTY</h3>
                                        <h4>Anti aging creams you wish</h4>
                                        <p>Aging is bound to happen, whether you are ready for it or not. To be true, no one is ever quite ready for aging. Every woman wants to look young forever</p>
                                        <div class="sub-line">
                                            <div class="right-line"></div>
                                            <a href="">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item" data-dot="<button>03</button>">
                                <div class="lx-1">
                                    <img src="img/make4.png"    >
                                    <div class="title1 auth_con1">
                                        <h3 class="main-title1">BEDROOMS</h3>
                                        <h3 class="sub-title1">How to choose the best mattress for the perfect night’s sleep</h3>
                                        <p>Do you leap out of bed in the morning feeling fully refreshed after a good night’s sleep, or do you toss and turn throughout the night and wake up with aches and pains in your back and limbs?</p>
                                        <div class="sub-line">
                                            <div class="right-line"></div>
                                            <a href="">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="lx-1">
                                    <img src="img/mask3.png">
                                    <div class="title1 auth_con1">
                                        <h3 class="main-title1">LIFE</h3>
                                        <h3 class="sub-title1">How scary games give us the fright we’re looking for</h3>
                                        <p>Fear makes us panic, sweat, scream and shake uncontrollably. You may be wondering why anyone would want to voluntarily invoke such a feeling. In the face of this, however, horror sells.     </p>
                                        <div class="sub-line">
                                            <div class="right-line"></div>
                                            <a href="">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="item" data-dot="<button>04</button>">
                                <div class="lx-1">
                                    <img src="img/make4.png"    >
                                    <div class="title1 auth_con1">
                                        <h3 class="main-title1">BEDROOMS</h3>
                                        <h3 class="sub-title1">How to choose the best mattress for the perfect night’s sleep</h3>
                                        <p>Do you leap out of bed in the morning feeling fully refreshed after a good night’s sleep, or do you toss and turn throughout the night and wake up with aches and pains in your back and limbs?</p>
                                        <div class="sub-line">
                                            <div class="right-line"></div>
                                            <a href="">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="lx-1">
                                    <img src="img/mask3.png">
                                    <div class="title1 auth_con1">
                                        <h3 class="main-title1">LIFE</h3>
                                        <h3 class="sub-title1">How scary games give us the fright we’re looking for</h3>
                                        <p>Fear makes us panic, sweat, scream and shake uncontrollably. You may be wondering why anyone would want to voluntarily invoke such a feeling. In the face of this, however, horror sells.     </p>
                                        <div class="sub-line">
                                            <div class="right-line"></div>
                                            <a href="">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                     </div>
                 </div>
                 <div class="col-md-11" id="mobile_caro">
                    <div class="owl-carousel owl-theme" id="carousel112">
                    <?php if (have_rows('post_images')):?>
                        <?php while (have_rows('post_images')): the_row(); ?> 
                        <?php if (have_rows('post_images_section')):?>
                        <?php while (have_rows('post_images_section')): the_row(); ?> 
            <div class="item">
            <?php $image = get_sub_field('images_section');?>
                <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>" >
                <!-- <img src="img/home_sec1.png"> -->
                <div class="beauty_content1">
                    <h3><?php echo get_sub_field('post_title');?></h3>
                    <h4><?php echo get_sub_field('post_title_sub');?></h4>
                    <p><?php echo get_sub_field('post_content');?></p>
                    <div class="sub-line">
                        <div class="right-line"></div>
                        <a href="<?php echo get_sub_field('post_link');?>"><?php echo get_sub_field('post_link_content');?></a>
                    </div>
                </div>
            </div>
            <?php endwhile;?>
             <?php endif;?>
            <?php endwhile;?>
             <?php endif;?>
            <!-- <div class="item">
                <img src="img/home_sec4.png">
                <div class="beauty_content1">
                    <h3>BEAUTY</h3>
                    <h4>Wrinkle treatments vs prevention</h4>
                    <p>Today more and more people are using anti wrinkle creams to help keep their skin looking young as they get older. There’s no doubt that they can have impressive effects</p>
                    <div class="sub-line">
                        <div class="right-line"></div>
                        <a href="">Read more</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/home_sec2.png">
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
            </div>
            <div class="item">
                <img src="img/home_sec3.png">
                                    <div class="beauty_content1">
                                        <h3>BEAUTY</h3>
                                        <h4>Anti aging creams you wish</h4>
                                        <p>Aging is bound to happen, whether you are ready for it or not. To be true, no one is ever quite ready for aging. Every woman wants to look young forever</p>
                                        <div class="sub-line">
                                            <div class="right-line"></div>
                                            <a href="">Read more</a>
                                        </div>
                                    </div>
            </div>
            <div class="item">
                <img src="img/make4.png"    >
                <div class="title1">
                    <h3 class="main-title1">BEDROOMS</h3>
                    <h3 class="sub-title1">How to choose the best mattress for the perfect night’s sleep</h3>
                    <p>Do you leap out of bed in the morning feeling fully refreshed after a good night’s sleep, or do you toss and turn throughout the night and wake up with aches and pains in your back and limbs?</p>
                    <div class="sub-line">
                        <div class="right-line"></div>
                        <a href="">Read more</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/mask3.png">
                <div class="title1">
                    <h3 class="main-title1">LIFE</h3>
                    <h3 class="sub-title1">How scary games give us the fright we’re looking for</h3>
                    <p>Fear makes us panic, sweat, scream and shake uncontrollably. You may be wondering why anyone would want to voluntarily invoke such a feeling. In the face of this, however, horror sells.     </p>
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
     <!--secction two-->

<?php
get_footer();	
?>