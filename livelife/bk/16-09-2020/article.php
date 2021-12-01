<?php
/*Template Name: article Template */
get_header();

?>
     <!--section two-->
     <section id="sectiontwo">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="col-md-1"></div>
                     <div class="col-md-11">
                        <div class="article_content_1">
                            <p><?php echo get_field("article_content"); ?></p>
                                <div class="art_sub">
                                <?php $image = get_field('group_image');?>
                                <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>">
                                    <p><?php echo get_field("content"); ?></p>
                                </div>
                                <p><?php echo get_field("article_content_1"); ?></p>
                        </div>
                        <?php echo get_field("main_content"); ?>
                     </div>
                 </div>
             </div>
         </div>
     </section>
       <!--section two-->
       <!--section three-->
       <section id="sectionthree">
           <div class="container">
               <div class="row">
                   <div class="col-md-12">
                       <div class="col-md-1">
                        <div class="side_title a1">
                            <h3><?php echo get_field("firemness_levels_title"); ?></h3>
                        </div>
                        <?php $image = get_field('group_image_1');?>
                         <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>" class="group_class">
                        <!-- <img src="img/Group.png" > -->
                        <div class="side-title_mobile">
                            <h3><?php echo get_field("firemness_levels_title_mobile"); ?></h3>
                        </div>
                       </div>
                       <div class="col-md-11">
                       <?php if (have_rows('firmeness_images')):?>
                        <?php while (have_rows('firmeness_images')): the_row(); ?> 
                           <div class="col-md-4">
                               <div class="mm">
                               <?php $image = get_sub_field('firmeness_level_image');?>
                                <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>">
                                   <!-- <img src="img/white1.png"> -->
                                </div>
                            </div>
                            <?php endwhile;?>
                            <?php endif;?>
                           <!-- <div class="col-md-4"><div class="mm"><img src="img/white2.png"></div></div>
                           <div class="col-md-4"><div class="mm"><img src="img/white3.png"></div></div> -->
                           <div class="firm_change">
                           <?php if (have_rows('firm_content')):?>
                        <?php while (have_rows('firm_content')): the_row(); ?> 
                           <div class="firm_content">
                               <h3><?php echo get_sub_field("firm_title"); ?></h3>
                               <p><?php echo get_sub_field("firm_main"); ?></p>
                           </div>
                           <?php endwhile;?>
                            <?php endif;?>
                           <!-- <div class="firm_content">
                            <h3>Medium</h3>
                            <p>These mattresses are the most commonly sold and are favored by most sleepers because they give good support, are well-balanced and have moderate hug and sinkage.</p>
                        </div>
                        <div class="firm_content">
                            <h3>Firm</h3>
                            <p>These mattresses give the feeling that you are floating on the surface rather than sinking in. Firm mattresses are more suitable for those that sleep on their back or stomach.
                            </p>
                        </div>
                        <div class="firm_content">
                            <h3>Orthopedic</h3>
                            <p>For those that suffer from back pain, musculoskeletal or joint problems, orthopedic mattresses give the extra support required to ensure a better night’s sleep. These mattresses are designed to provide enhanced weight distribution that can help to relieve sleep pressure points. 
                                Customers with a higher bodyweight often prefer this type of mattress because of the extra support it provides.</p>
                        </div> -->
                    </div>
                       
                       </div>
                   </div>
               </div>
           </div>
       </section>
        <!--section three-->
        <!--section four-->
        <section id="sectionfour">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-1">
                            <div class="side_title a1">
                                <h3><?php echo get_field("sleep_position_title"); ?></h3>
                            </div>
                            <div class="side-title_mobile">
                                <h3><?php echo get_field("sleep_position_title_mobile"); ?></h3>
                            </div>
                        </div>
                        <div class="col-md-11">
                       
                            <div class="col-md-5 d1">
                            <?php $image = get_field('sleep_one');?>
                         <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>" class="sleep1">
                                <!-- <img src="img/sleep1.png" class="sleep1"> -->
                            </div>
                            <div class="col-md-7 d1">
                            <?php $image = get_field('sleep_two');?>
                         <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>" class="sleep1">
                                <!-- <img src="img/sleep2.png" class="sleep1"> -->
                            </div>
<p class="depend"><?php echo get_field("depend_text"); ?></p>
<?php echo get_field("depend_images"); ?>

                        </div>
                    </div>
                </div>
            </div>

        </section>
           <!--section four-->
<!--section five-->
<section id="sectionfive">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-1">
                    <div class="side_title a1">
                        <h3><?php echo get_field("type_of_mattress_title"); ?></h3>
                    </div>
                    <div class="side-title_mobile">
                        <h3><?php echo get_field("type_of_mattress_title_mobile"); ?></h3>
                    </div>
                </div>
                <div class="col-md-11">
                <?php if (have_rows('type_mattress')):?>
                        <?php while (have_rows('type_mattress')): the_row(); ?> 
                <div class="col-md-6">
                <?php $image = get_sub_field('type_mattress_images');?>
                <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>" class="bed_image">
                    <!-- <img src="img/bed1.png" class="bed_image"> -->
                    <div class="bed_content">
                        <h3><?php echo get_sub_field('type_mattress_con_title');?></h3>
                        <p><?php  echo get_sub_field('type_mattress_content');?></p>
                    </div>
                </div>
                <?php endwhile;?>
                            <?php endif;?>
                <!-- <div class="col-md-6"> 
                    <img src="img/bed2.png"  class="bed_image">
                    <div class="bed_content">
                        <h3>Wired</h3>
                        <p>These mattresses have internal support constructed with metal springs. The number of coils in the mattress is an indicator of quality – more coils mean more support. The distribution and the number of the coils determine how effective the mattress
                             will be in conforming to your body shape. The majority of sleepers find these mattresses to be very comfortable.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="img/bed3.png"  class="bed_image">
                    <div class="bed_content">
                        <h3>Hybrid</h3>
                        <p>Hybrid mattresses have a core of coils for support and a comfort layer of memory foam or latex. 
                            The coils in a hybrid mattress are in pockets of cloth. Having the coils in pockets helps to reduce motion transfer and provides better support.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="img/bed4.png"  class="bed_image">
                    <div class="bed_content">
                        <h3>Latex</h3>
                        <p>These products are made with a combination of latex foam with reflex foam or springs. The combination creates a durable and supportive mattress. Latex is a natural product (the source of natural rubber from trees) and the mattresses
                             often have other natural fillings. They are particularly popular with customers that wish to avoid synthetic materials.</p>
                    </div>
                </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--section five-->
<!--section six-->
<section id="sectionsix">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-1">
                    <div class="side_title a1 consi">
                        <h3><?php echo get_field("consider_title"); ?></h3>
                    </div>
                    <div class="side-title_mobile">
                        <h3><?php echo get_field("consider_title_mobile"); ?></h3>
                    </div>

                </div>
                <div class="col-md-11">
                <?php echo get_field("consider_content"); ?>
                 

                </div>
            </div>
        </div>
    </div>
</section>
<!--section six-->
<!--section seven-->
<section id="sectionseven">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-1">
                    <div class="side_title a1 c1">
                        <h3><?php echo get_field("men_women_title"); ?></h3>
                    </div>
                    <div class="side-title_mobile">
                        <h3><?php echo get_field("men_women_title_mobile"); ?></h3>
                    </div>
                    <!-- <img src="img/Group.png" class="group_class"> -->
                    <?php $image = get_field('group_image_1');?>
                    <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>" class="group_class">
                </div>
                <div class="col-md-11">
                <?php echo get_field("men_womencontent"); ?>
                   
                </div>
            </div>
        </div>
    </div>
</section>
<!--section seven-->
<!--section eight-->
<section id="sectioneight">
    <div class="container1">
        <h3><?php echo get_field("two_cupcake"); ?></h3>
    </div>

</section>
<!--section eight-->
<!--section nine-->
<section id="sectionnine">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
                <div  class="col-md-1">
                    <div class="side_title a1 sum">
                        <h3><?php echo get_field("summary_title"); ?></h3>
                      
                      
                    </div>
                    <div class="side-title_mobile">
                        <h3><?php echo get_field("summary_title_mobile"); ?></h3>
                    </div>
                    <?php $image = get_field('group_image_1');?>
                    <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>" class="group_class">
                    <!-- <img src="img/Group.png" class="group_class"> -->
                </div>
                <div class="col-md-11">
               
                    <p class="summ-content"><?php echo get_field("summary_content"); ?></p>
                        <h3 class="comment_sec"><?php echo get_field("summary_comment"); ?></h3>
                        <div class="class_line"></div>
                        <?php comments_template();?>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<!--section nine-->
<!--section ten-->
<section id="sectionten">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3><?php echo get_field("really_busy"); ?></h3>
            </div>
        </div>
    </div>
</section>
<!--section ten-->
<!--sectionelven-->
<section id="sectioneleven">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-1">
                    <div class="side_title a1 sum tr">
                        <h3><?php echo get_field("tldr_title"); ?></h3>
                      
                      
                    </div>
                    <div class="side-title_mobile">
                        <h3><?php echo get_field("tldr_mobile"); ?></h3>
                    </div>
                </div>
                <div class="col-md-11">
                <?php echo get_field("tldr_content"); ?>
 
                </div>
            </div>
        </div>
    </div>
</section>
<!--sectioneleven-->



<?php
get_footer();	
?>