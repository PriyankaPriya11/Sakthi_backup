<?php
/**
 * The template for displaying the header
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>LiveLife</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="http://livelife.pmhere.xyz/wp-content/themes/livelife/_css/bootstrap.min.css">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="http://livelife.pmhere.xyz/wp-content/themes/livelife/_css/fontawesome.min.css"> -->
    <link rel="stylesheet" type="text/css" href="http://livelife.pmhere.xyz/wp-content/themes/livelife/style.css">
    <link rel="stylesheet" href="http://livelife.pmhere.xyz/wp-content/themes/livelife/_css/owl.carousel.min.css">
    <script src="http://livelife.pmhere.xyz/wp-content/themes/livelife/_css/jquery.min.js"></script>
    <script src="http://livelife.pmhere.xyz/wp-content/themes/livelife/_css/owl.carousel.js"></script>

	<link rel="stylesheet" type="text/css" href="http://livelife.pmhere.xyz/wp-content/themes/livelife/_css/jquery-swipe-nav.css" media="all" />
    <script type="text/javascript" src="http://livelife.pmhere.xyz/wp-content/themes/livelife/js/jquery-swipe-nav-plugin.js"></script>
    <style>
        html{
            margin-top:0 !important;
        }
 /* @media screen and (min-width:1800px){
body.home.page-template.page-template-index.page-template-index-php.page.page-id-31.logged-in.admin-bar.no-customize-support.wp-custom-logo.open {
left: 40px !important;
} */
}
@media screen and (max-width: 1023px) and (min-width: 320px){
div#mobile img.menu-sec.toggle {
    position: fixed !important;
    left: 79%;
}
.sidebar.active1 ul li a {
    padding: 10px 20px;
    color: #fff;
    display: block;
    text-decoration: none;
    border-bottom: 1px solid rgba(0, 0, 0, .2);
}
.sidebar.active1 ul {
    padding: 0;
}
.sidebar.active1 ul li{
    list-style: none;
}

div#mobile .sidebar{
        position: fixed;
        top: 0;
        left: -250px;
        background: #f5f5f5;
        width: 250px;
        height: 100%;
        transition: .3s;
        z-index: 9999;
      }
      div#mobile img.menu-sec.toggle {
          position: absolute;
          right: 13px;
          z-index: 99999;
          top: -28px;
      }
      div#mobile .active1 {
        left: 0 !important;
        width: 88% !important;
      }
      div#mobile .sidebarBtn {
        position: absolute;
        top: 0;
        right: -50px;
        width: 50px;
        height: 50px;
        box-sizing: border-box;
        cursor: pointer;
        background: #FEF4E8;
        border: none;
        outline: none;
        z-index: 999;
      }
      div#mobile .sidebar.active1 ul li a{
          color:#000;
      }
      img.menu-sec.active2.img1.toggle {
    content: url(http://livelife.pmhere.xyz/wp-content/themes/livelife/img/clear.png);
}
img.menu-sec.active2.img1 {
    content: url(http://livelife.pmhere.xyz/wp-content/themes/livelife/img/menu.png);
}
div#mobile img.menu-sec.toggle {
    position: absolute;
    right: 13px;
    z-index: 99999;
    /* width: 13%; */
    top: -28px;
}
    }
    <?php if(is_page(217)) {?>
        section#section1 {
    background: #FEF4E8;
}

    <?php } ?>
    <?php if(is_page(338) || is_page(217) || is_page(423)){?>
        .search_1{background-color:#fff;}

    <?php } ?>

        </style>
    <?php do_action('wp_head');?>
</head>
<body <?php body_class(); ?>>
    <!--header start-->
    <!-- <nav id="swipeNav" class="swipe">
	    <ul>
	        <li><a href="#">Life</a></li>
	        <li><a href="#">Health</a></li>
	        <li><a href="#">Environment</a></li>
            <li><a href="#">Entertainment</a></li>
            <li><a href="#">travel</a></li>
        </ul>
      
    </nav> -->
    <?php  wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => '','menu_id'=>'swipeNav','menu_class'=>'swipe' ) ); ?> 
   
    <section id="section1">
  

        <header>
      
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="desktop">
              
                <div class="col-md-1">
                      <img src="http://livelife.pmhere.xyz/wp-content/themes/livelife/img/menu.png" class="menu-sec sidebarBtn "  id="menuBtn">
                </div>
                   
                    <div class="col-md-4 md1">
                      
                        <?php 
 $custom_logo_id = get_theme_mod('custom_logo');
 $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>
  <img src="<?php echo $image[0];?>"  class="logo_sec">
                    </div>
                    <div class="col-md-7">
                        <div class="content">

                        <div >
                             
                             <!-- <input type="text" class="search__input" aria-label="search" placeholder="Search guides...">

                             <button class="search__btn" aria-label="submit search"><i class="fas fa-search" aria-hidden="true" style="color: #FF6002; margin-right: 8%;"></i>Search</button> -->
                              <form role="search" class="search_1" method="get" action="<?php echo home_url('/');?>">

                                <input type="search" class="search__input search-form" value="<?php echo get_search_query();?>" name="s" aria-label="search" placeholder="Search guides...">

                                <button class="search__btn" aria-label="submit search" type="submit"><i class="fas fa-search" aria-hidden="true" style="color: #FF6002; margin-right: 8%;"></i>Search</button>

                                </form>

                         </div>


                        </div>

                    </div>
                <?php if(is_page(217)){?>
                    <div class="col-md-12 header2">
                    <div class="col-md-1"></div>
                    <div class="col-md-7 bedrooms">
                     <h3 class="bedrms_title">BEDROOMS</h3>
                     <h2 class="be_1">How to choose the best mattress for the perfect<br> night’s sleep 2020</h2>
                     <div class="author">
                         <img src="http://livelife.pmhere.xyz/wp-content/uploads/2020/07/author.png">
                         <p>Author - Aimee<br>
                            Published 20/06/19<br>
                            Updated   20/06/20</p>
                     </div>
                    </div>
                    <div class="col-md-4">
                        <div class="inside_content">
                    <h3 class="tabe_content">Table of contents</h3>
                    <!-- <ul class="tabe_content_1">
                        <li><a href="#">Firmness levels</a></li>
                        <li><a href="#">Sleep position</a></li>
                        <li><a href="#">Types of mattress</a></li>
                        <li><a href="#">What to consider</a></li>
                        <li><a href="#">How men and women sleep differently</a></li>
                        <li><a href="#">Summary</a></li>
                    </ul> -->
                    <?php  wp_nav_menu( array( 'theme_location' => 'article-menu1', 'container_class' => '','menu_class'=>'tabe_content_1' ) ); ?> 
                    </div>
                </div>
                </div>

               <?php } ?>
               <?php if(is_page(338)){?>
                <div class="col-md-12 header2 header_22">
                        <div class="col-md-12">
                        <div class="col-md-6">
                           
                        </div>
                    <div class="col-md-6 mm1 bedrooms">
                     <h3 class="bedrms_title">BEDROOMS</h3>
                     <h2 class="be_1 be_11">How to choose the best mattress for the perfect night’s sleep 2020</h2>
                     <div class="author">
                         <img src="http://livelife.pmhere.xyz/wp-content/uploads/2020/07/author.png">
                         <p>Author - Aimee<br>
                            Published 20/06/19<br>
                            Updated   20/06/20</p>
                     </div>
                    </div>
                    </div>
                </div>

               <?php } ?>
               <?php if(is_page('author-page')) { ?>
                <div class="col-md-12 author_header">
                        <div class="col-md-1"></div>
                        <div class="col-md-8">
                            <h3 class="author_life">AUTHOR - Lifestyle Editor</h3>
                            <h2 class="aime">Aimee Jons</h2>
                            <p class="lorme">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                 eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="col-md-3">
                            <div class="author_imgs">
                              <img src="http://livelife.pmhere.xyz/wp-content/uploads/2020/07/author_imgs.png" class="author_img_1_1">
                              <ul class="icons">
                                <li><a href=""><img src="http://livelife.pmhere.xyz/wp-content/uploads/2020/07/ytube.png"></a></li>
                                <li><a href=""><img src="http://livelife.pmhere.xyz/wp-content/uploads/2020/07/fb.png"></a></li>
                                <li><a href=""><img src="http://livelife.pmhere.xyz/wp-content/uploads/2020/07/instagram.png"></a></li>
                            
                              </ul>
                            </div>
                        </div>

                    </div>

               <?php } ?>
                </div>
                <div class="col-md-12" id="mobile">
                    
                    <div class="col-md-6 ">
                      <!-- <div class="sidebar">
                            <ul>
                                <li><a href="#">Life</a></li>
                                <li><a href="#">Health</a></li>
                                <li><a href="#">Environment</a></li>
                                <li><a href="#">Entertainment</a></li>
                                <li><a href="#">travel</a></li>
                            </ul>
                       </div>  -->
                       <?php  wp_nav_menu( array( 'theme_location' => 'header-menu1', 'container_class' => 'sidebar','menu_class'=>'swipe1' ) ); ?> 
                        

                        <div class="mobiel_header">
                     <img src="http://livelife.pmhere.xyz/wp-content/themes/livelife/img/menu.png" class="menu-sec active2">
                     <img src="http://livelife.pmhere.xyz/wp-content/themes/livelife/img/Frame.png"  class="logo_sec">
                    </div>
                    </div>
                   
                    <div class="col-md-6">
                        <div class="content">
                        <div>
                             
                             <!-- <input type="text" class="search__input" aria-label="search" placeholder="Search guides...">

                             <button class="search__btn" aria-label="submit search"><i class="fas fa-search" aria-hidden="true" style="color: #FF6002; margin-right: 8%;"></i></button> -->
                              <form role="search" class="search_1" method="get" action="<?php echo home_url('/');?>">

                                <input type="search" class="search__input search-form" value="<?php echo get_search_query();?>" name="s" aria-label="search" placeholder="Search guides...">

                                <button class="search__btn" aria-label="submit search" type="submit"><i class="fas fa-search" aria-hidden="true" style="color: #FF6002; margin-right: 8%;"></i></button>

                                </form>

                         </div>


                            <!-- <form role="search" class="search" method="get" action="<?//php echo home_url('/');?>">

                                <input type="search" class="search__input search-form" value="<?//php echo get_search_query();?>" name="s" aria-label="search" placeholder="Search guides...">

                                <button class="search__btn" aria-label="submit search" type="submit"><i class="fas fa-search" aria-hidden="true" style="color: #FF6002; margin-right: 8%;"></i></button>

                                </form> -->
                                <!-- <div class="search">
                                <?//php get_search_form(); ?>
                                 </div> -->

                        </div>

                    </div>
                    <?php if(is_page(217)) {?>
                        <div class="col-md-12 header2">
                        <div class="col-md-1"></div>
                        <div class="col-md-7 bedrooms">
                         <h3 class="bedrms_title">BEDROOMS</h3>
                         <h2 class="be_1">How to choose the best mattress for the perfect<br> night’s sleep 2020</h2>
                         <div class="author">
                             <img src="http://livelife.pmhere.xyz/wp-content/uploads/2020/07/author.png">
                             <p>Author - Aimee<br>
                                Published 20/06/19<br>
                                Updated   20/06/20</p>
                         </div>
                        </div>
                        <div class="col-md-4">
                            <div class="inside_content">
                        <h3 class="tabe_content">Table of contents</h3>
                        <ul class="tabe_content_1">
                            <li><a href="#">Firmness levels</a></li>
                            <li><a href="#">Sleep position</a></li>
                            <li><a href="#">Types of mattress</a></li>
                            <li><a href="#">What to consider</a></li>
                            <li><a href="#">How men and women sleep differently</a></li>
                            <li><a href="#">Summary</a></li>
                        </ul>
                        </div>
                    </div>
                    </div>
                    <?php } ?>
                    <?php if(is_page(338)) { ?>
                        <div class="col-md-12 header2">
                        <div class="col-md-1"></div>
                       
                        <div class="col-md-5 bedrooms">
                         <h3 class="bedrms_title">BEDROOMS</h3>
                         <h2 class="be_1">How to choose the best mattress for the perfect<br> night’s sleep 2020</h2>
                         <div class="author">
                             <img src="http://livelife.pmhere.xyz/wp-content/uploads/2020/07/author.png">
                             <p>Author - Aimee<br>
                                Published 20/06/19<br>
                                Updated   20/06/20</p>
                       
                        </div>
                    </div>
                       
                    </div>

                    <?php } ?>
                    <?php if(is_page('author-page')) { ?>
                        <div class="col-md-12 author_header">
                        <div class="col-md-1"></div>
                        <div class="col-md-8">
                            <h3 class="author_life">AUTHOR - Lifestyle Editor</h3>
                            <h2 class="aime">Aimee Jons</h2>
                            <p class="lorme">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                 eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="col-md-3">
                         
                            <div class="author_imgs">
                              <img src="http://livelife.pmhere.xyz/wp-content/uploads/2020/07/author_imgs.png" class="author_img_1_1">
                              <ul class="icons">
                                <li><a href=""><img src="http://livelife.pmhere.xyz/wp-content/uploads/2020/07/ytube.png"></a></li>
                                <li><a href=""><img src="http://livelife.pmhere.xyz/wp-content/uploads/2020/07/fb.png"></a></li>
                                <li><a href=""><img src="http://livelife.pmhere.xyz/wp-content/uploads/2020/07/instagram.png"></a></li>
                            
                              </ul>
                             
                            </div>
                        </div>

                    </div>

                   <?php } ?>
                </div>
            
            </div>
        </div>
    </header>
    </section>