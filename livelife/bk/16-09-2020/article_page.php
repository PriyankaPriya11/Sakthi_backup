<?php
/*Template Name: article_page Template */
get_header();

?>
 <!--section one-->
 <section id="art-page" class="cont1_col-md-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- <div class="col-md-1"></div> -->
                    <div class="col-md-12">
        <div class="col-md-6  text-center">
                 <?php $image = get_field('blog_top_images');?>
                                <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>" class="art_img_1">
                                    <!-- <img src="img/articleheaderimg.png"  class="art_img_1"> -->
                                </div>
            <div class="col-md-6 mm1 ac1"><div class="inside_content in-con">
                                <h3 class="tabe_content"><?php echo get_field("content_title"); ?></h3>
                               
                                <?php  wp_nav_menu( array( 'theme_location' => 'article-menu1', 'container_class' => '','menu_class'=>'tabe_content_1' ) ); ?> 
                                </div>
                            </div>
            
            </div>
        </div>
            </div>
        </div>
     </section>
     <!--section two-->
     <section id="sectiontwo" class="cont1_col-md-1">

         <div class="container">
             
             <div class="row">

                 <div class="col-md-12">
                     <div class="col-md-1"></div>
                     <div class="col-md-8">
                        <div class="article_content_1">
                            <p class="do_article"><?php echo get_field("article_content"); ?></p>
                                <div class="art_sub art_1sub_1">
                                <?php $image = get_field('group_image');?>
                                <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>">
                                    <!-- <img src="img/Group.png"> -->
                                    <p><?php echo get_field("content"); ?></p>
                                </div>
                                <p><?php echo get_field("article_content_1"); ?></p>
                        </div>
                        <h2 class="main_content_1 b1 art_main_content"><?php echo get_field("main_points"); ?></h2>

                     </div>
                     <div class="col-md-3">
                         <!-- <img src="img/adv1.png" class="adv1"> -->
                        </div>
                 </div>
             </div>
         </div>
     </section>
       <!--section two-->
       <!--section three-->
       <section id="sectionthree" class="cont1_col-md-1">
           <div class="container">
               <div class="row">
                   <div class="col-md-12">
                       <div class="col-md-1">
                        <div class="side_title a1">
                            <h3><?php echo get_field("firemness_levels_title"); ?></h3>
                        </div>
                      
                        <div class="side-title_mobile">
                            <h3><?php echo get_field("firemness_levels_title_mobile"); ?></h3>
                        </div>
                       </div>
                       <div class="col-md-8">
                        <div class="flowe_div">
                            <div class="col-md-1 div_flwo">
                            <?php $image = get_field('group_image');?>
                                <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"class="flower fl1_u5">
                                <!-- <img src="img/Group.png" class="flower" > -->
                            </div>
                            <div class="col-md-11">
                            <?php echo get_field("firemness_precive_content"); ?>
                           
                        </div>
                    </div>
                    <?php if (have_rows('firmeness_images')):?>
                        <?php while (have_rows('firmeness_images')): the_row(); ?> 
                           <div class="col-md-4">
                               <div class="mm">
                               <?php $image = get_sub_field('firmeness_level_image');?>
                                <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>" class="mm-white">
                                   <!-- <img src="img/white1.png" class="mm-white"></div> -->
                            </div>
                    </div>
                            <?php endwhile;?>
                            <?php endif;?>
                       
                           <!-- <div class="col-md-4">
                               <div class="mm"><img src="img/white1.png" class="mm-white"></div>
                            </div> -->
                           <!-- <div class="col-md-4"><div class="mm"><img src="img/white2.png" class="mm-white"></div></div>
                           <div class="col-md-4"><div class="mm"><img src="img/white3.png" class="mm-white"></div></div> -->
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
                       <div class="col-md-3">
                           <?php echo get_field("guid_form"); ?>
                           <div class="col-md-1"><div class="title_rotate ad-rotate">
<h3>Look for more</h3></div></div>
<div class="col-md-11"> <div class="home_form form1">
<h4>GUIDES</h4>
 <ul class="guid_list">
 <li><div class="sub-line"><div class="right-line rl1"></div><a href="">Life</a></div></li>
<li><div class="sub-line"><div class="right-line rl1"></div><a href="">Health</a></div></li>
<li><div class="sub-line"><div class="right-line rl1"></div> <a href="">Environment</a></div></li>
<li><div class="sub-line"><div class="right-line rl1"></div><a href="">Entertainment</a></div></li>
<li> <div class="sub-line"><div class="right-line rl1"></div><a href="">Travel</a></div></li>
</ul>
 </div>
</div>
<div class="form1_1">
<h3>Why Not Suggest A Guide?</h3>
<div class="form-box">
<lable>Name</lable>
 <div class="input-field">
<input type="text" id="name" required />
<label for="name">Your name:</label>
 </div>
<lable>Email</lable>
<div class="input-field">
<input type="email" id="name" required />
<label for="name">Your email</label>
</div>
<lable>Guide suggestion</lable>
 <div class="input-field">
 <input type="textarea" id="textarea" required />
<label for="name">Your suggestion</label>
 </div>
<input type="submit" value="SEND" id="send">
</div>
</div>
</div>
                   </div>
               </div>
           </div>
       </section>
        <!--section three-->
        <!--section four-->
        <section id="sectionfour" class="cont1_col-md-1">
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
                        <div class="col-md-8">
                            <div class="col-md-5 d1 up1_u5">
                            <?php $image = get_field('sleep_one');?>
                         <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>" class="sleep1 up5_sleep_img">
                            </div>
                            <div class="col-md-7 d1">
                            <?php $image = get_field('sleep_two');?>
                         <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>" class="sleep1 up5_sleep_img">
                            </div>
<p class="depend"><?php echo get_field("depend_text"); ?></p>



                        </div>
                        <div class="col-md-9 marg_up5">
                        <?php echo get_field("depend_images"); ?>
                           </div>
                        <div class="col-md-3">
                          
                        </div>
                    </div>
                </div>
            </div>

        </section>
           <!--section four-->
<!--section five-->
<section id="sectionfive" class="cont1_col-md-1">
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
                <div class="col-md-8">
                <?php if (have_rows('type_mattress')):?>
                        <?php while (have_rows('type_mattress')): the_row(); ?> 
                <div class="col-md-6">
                <?php $image = get_sub_field('type_mattress_images');?>
                <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>" class="bed_image">
                    <div class="bed_content bc1 mmattress_u5">
                        <h3><?php echo get_sub_field('type_mattress_con_title');?></h3>
                        <p><?php  echo get_sub_field('type_mattress_content');?></p>
                    </div>
                </div>
                <?php endwhile;?>
                            <?php endif;?>
                <!-- <div class="col-md-6"> 
               
                    <div class="bed_content bc1">
                        <h3>Wired</h3>
                        <p>These mattresses have internal support constructed with metal springs. The number of coils in the mattress is an indicator of quality – more coils mean more support. The distribution and the number of the coils determine how effective the mattress
                             will be in conforming to your body shape. The majority of sleepers find these mattresses to be very comfortable.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="img/bed3.png"  class="bed_image">
                    <div class="bed_content bc1">
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
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</section>
<!--section five-->
<!--section six-->
<section id="sectionsix" class="cont1_col-md-1">
    <div class="custom_section_up5">
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
                <div class="col-md-8">
                <?php echo get_field("consider_content"); ?>
                   

                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</div>
</section>
<!--section six-->
<section id="sectionseven1">
    <div class="container">
        <div class="row">
            <di class="col-md-12">
                <div class="col-md-1">

                </div>
                <div class="col-md-8">
                    <h2 class="main_content_1 b1"><?php echo get_field("dismiss_content"); ?></h2>
                </div>
            </di>
            </div>
    </div>
</section>
<!--section seven-->
<section id="sectionseven" class="cont1_col-md-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-1">
                    <div class="side_title a1 c1">
                        <h3><?php echo get_field("men_women_title"); ?></h3>
                    </div>
                    <div class="side-title_mobile">
                        <h3><?php echo get_field("men_women_title"); ?></h3>
                    </div>
                </div>
                <div class="col-md-8">
                    <!-- <h2 class="main_content_1 b1">Don’t dismiss buying from a store because they often match online prices and you will have the advantage of professional advice. 
                        The salesperson will also be able to see you and advise you on the most suitable mattress for your body weight and preferred sleep style.</h2> -->
                        <?php echo get_field("men_womencontent"); ?>
                     
                </div>
                <div class="col-md-3">
        
                </div>
            </div>
        </div>
    </div>
</section>
<!--section seven-->
<!--section eight-->
<section id="sectioneight" class="cont1_col-md-1">
    <div class="container11">
        <h3><?php echo get_field("two_cupcake"); ?></h3>
    </div>

</section>
<!--section eight-->
<!--section nine-->
<section id="sectionnine" class="cont1_col-md-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div  class="col-md-1">
                    <div class="side_title a1 sum">
                    <h3><?php echo get_field("summary_title"); ?></h3>
                      
                      
                    </div>
                    <div class="side-title_mobile">
                    <h3><?php echo get_field("summary_title"); ?></h3>
                    </div>
                    <?php $image = get_field('group_image_1');?>
                    <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>" class="group_class grcl">
                    <!-- <img src="img/Group.png" class="group_class grcl"> -->
                </div>
                <div class="col-md-8">
                <p class="summ-content art_comment"><?php echo get_field("summary_content"); ?></p>
 <h3 class="comment_sec"><?php echo get_field("summary_comment"); ?></h3>
<div class="class_line"></div>
<?php comments_template();?>
                        <!-- <div class="comment_section">
                            <div class="tab1">
                                <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">142 Comments</button>
                                <button class="tablinks" onclick="openCity(event, 'Paris')">The Atlantic</button>
                               <span class="comment_span"> <i class="fa fa-comment" style="font-size:24px"></i><div class="custom-select" style="width:200px;"><select>
                                <option value="0">Colin Newcomer</option>
                                    <option value="1">comment</option>
                                    
                                  </select>
                                </div>
                            </span>
                              </div>
                              <div id="London" class="tabcontent">
                                  <div class="recom">
                               <p><img src="img/icons8-heart-16.png">Recommend<span>2</span></p>
                               <p>  <i class="fa fa-share-square-o"></i>Share</p>
                              <div class="custom-select" style="width:200px;"><select>
                                <option value="0">Sort by Best</option>
                                    <option value="1">comment</option>
                                    
                                  </select>
                                </div>
                               
                             
                              </div>
                              <p><img src="img/commet1.jpg"><input type="text" placeholder="Join the discussion..." class="comment_input"></p>
                              <p><img src="img/commet2.jpg"><a href="" class="name_comment">EIJando</a> <span></span>10 hours ago
                            </p>
                             
                            </div>
                              <div id="Paris" class="tabcontent">
                                <h3>Paris</h3>
                                <p>Paris is the capital of France.</p> 
                              </div>
                        </div> -->
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</section>
<!--section nine-->
<!--section ten-->
<section id="sectionten" class="cont1_col-md-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3><?php echo get_field("really_busy"); ?></h3>
            </div>
            <div class="side-title_mobile">
                <h3><?php// echo get_field("really_busy"); ?></h3>
            </div>
        </div>
    </div>
</section>
<!--section ten-->
<!--sectionelven-->
<section id="sectioneleven" class="cont1_col-md-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-1">
                    <div class="side_title a1 sum tr">
                        <h3><?php echo get_field("tldr_title"); ?></h3>
                      
                      
                    </div>
                    <div class="side-title_mobile">
                <h3><?php echo get_field("tldr_title"); ?></h3>
            </div>
                </div>
                <div class="col-md-8">
                <?php echo get_field("tldr_content"); ?>
                   

                    
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</section>
<!--sectioneleven-->

<?php
get_footer();	
?>