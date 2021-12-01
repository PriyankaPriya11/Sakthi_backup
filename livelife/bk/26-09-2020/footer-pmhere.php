
   <!--footer-->
   <footer id="footer">
                     <div class="container">
                         <div class="row">
                             <div class="col-md-12">
                               <div class="col-md-12"> 
                                   <!-- <img src="img/Frame.png" class="footer_img"> -->
                                   <?php 
if ( is_active_sidebar( 'footer-1' ) ) : ?>
<div id="secondary" class="widget-area" role="complementary">
<?php dynamic_sidebar( 'footer-1' ); ?>
</div>
<?php endif; ?>
 
                                </div>
                                 <div class="col-md-4 footer_m4">
                                     
                                     <p class="footer_text">Live Life To the Full</p>
                                     <div class="home_form footer_form">
                                     <?php echo do_shortcode( '[contact-form-7 id="14584" title="Subscription"]' ); ?>
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                     <div class="col-md-4 footer_m4"><span class="topics">Topics</span>
                                        <!-- <ul class="topic_list">
                                            <li><a href="">Life</a></li>
                                            <li><a href="">Health</a></li>
                                            <li><a href="">Environment</a></li>
                                            <li><a href="">Entertainment</a></li>
                                            <li><a href="">Travel</a></li>
                                        </ul> -->
                                        <?php  wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => '','menu_class'=>'topic_list' ) ); ?> 
                                    </div>
                                     <div class="col-md-4 footer_m4"><span class="topics">Information</span>
                                        <!-- <ul class="topic_list">
                                            <li><a href="">About Us</a></li>
                                            <li><a href="">Contact Us</a></li>
                                            <li><a href="">FAQs</a></li>
                                        </ul> -->
                                        <?php  wp_nav_menu( array( 'theme_location' => 'footer-menu1', 'container_class' => '','menu_class'=>'topic_list' ) ); ?> 
                                    </div>
                                     <div class="col-md-4 footer_m4"><span class="topics">Folow us</span>
                                        <ul class="topic_list1">
                                            <li><a href=""><img src="https://www.livelife.guide/newstaging/wp-content/themes/gridlove-child-theme/img/fb.png"></a></li>
                                            <li><a href=""><img src="https://www.livelife.guide/newstaging/wp-content/themes/gridlove-child-theme/img/instagram.png"></a></li>
                                            <li><a href=""><img src="https://www.livelife.guide/newstaging/wp-content/themes/gridlove-child-theme/img/ytube.png"></a></li>
                                        </ul>

                                    </div>
                                    <p class="copyr mright">© Copyright 2020  </p>
                                 </div>
                                 <p class="copyr">© Copyright 2020  </p>
                             </div>
                         </div>
                     </div>
                 </footer>
                  <!--footer-->
           <script>
            jQuery(document).ready(function() {
                jQuery('#carousel1').owlCarousel({
                    loop: true,
                    margin: 10,
                    autoWidth:true,
                    nav: true,
                    autoplay: false,
                    items: 1,
                    responsiveClass: true,
                    dotsData: true,
                    responsive: {
                        0: {
                            items: 1,
                        },
                        600: {
                            items: 1,
                           
                        },
                        1000: {
                            items: 4,
                            
                        }
                    }
                })
            });
             </script>
                <script>
                    jQuery("p").text(function(index, currentText) {
                        return currentText.substr(0, 125);
                    });
                    jQuery(".content1 p").text(function(index, currentText) {
                        return currentText.substr(0, 5000);
                    });
                    jQuery(".content2 p").text(function(index, currentText) {
                        return currentText.substr(0, 5000);
                    });
                </script>
                	<script type="text/javascript">
                        jQuery(document).ready(function(jQuery){
                            jQuery(document).on('click','#swipeNav li a',function(){
                                var href= jQuery(this).attr("href");
                            });
                
                            //jQueryPlug-in Slide-Nav
                            jQuery('#swipeNav').swipeNav();
                        });
                    </script>
                      <script>
                        jQuery(document).ready(function(){
                            jQuery(".menu-sec").click(function(){
                                jQuery('.sidebar').toggleClass("active1");
                                jQuery('.menu-sec').toggleClass('toggle');
           
                })
              })
            </script>
                    <script>
                        jQuery(document).ready(function(){
                            jQuery(".menu-sec").click(function(){
                    // if( $("img.menu-sec.active2.toggle") ){
                    //  $("img.menu-sec.active2.toggle").attr("src","img/clear.png");
                    //  $("img.menu-sec.active2").attr("src","img/menu.png");
                    jQuery("img.menu-sec.active2").addClass("img1");

                //  }
                //  if($("img.menu-sec.active2")){
                //     $("img.menu-sec.active2").attr("src","img/menu.png");
    
                //  }
                })
              })
                    </script>
                      <script>
        jQuery(document).ready(function() {
            jQuery('#carousel11').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                autoplay: false,
                items: 1,
                responsiveClass: true,
                dotsData: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 1,
                       
                    },
                    1000: {
                        items: 3,
                        slideBy: 1
                        
                    }
                }
            })
        });
         </script>
             <script>
                jQuery(document).ready(function() {
                    jQuery('#carousel112').owlCarousel({
                        loop: true,
                        margin: 10,
                        nav: true,
                        autoplay: false,
                        items: 1,
                        responsiveClass: true,
                        // dotsData: true,
                        responsive: {
                            0: {
                                items: 1,
                            },
                            600: {
                                items: 2,
                               
                            },
                            1000: {
                                items: 3,
                                slideBy: 1
                                
                            }
                        }
                    })
                });
</script>
<?php do_action('wp_footer');?>             
</body>
</html>