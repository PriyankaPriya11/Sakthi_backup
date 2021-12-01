<?php /** * Template Name: contact-us-new */ ?>

<?php get_header('new'); ?>

<style>
    #contact-us .aboutusdiv .content-block-contents p {  margin-bottom: 18px;  width: 80%;margin-left:auto;margin-right:auto;}
    #contact-us .technologies-div{padding:60px 0;background-size:100%;}
    #contact-us .technology-title{text-transform:uppercase;font-size:42px;color:#fff;line-height:48px;}
    #contact-us .technology-title span{color:#51ded1;}
    #contact-us .technologies-div ul{display:inline-block;margin:50px 0 25px 0;list-style:none;}
    #contact-us .technologies-div ul li{display:inline-block;padding:15px 45px;border-right:1px solid #fff;font-size:28px;color:#fff;font-weight:500;}
    #contact-us .technologies-div ul li:last-child{border-right:0px;}
    #contact-us .contact{padding:60px 0 30px 0;}
    .text-center { text-align:center; }

    .home-contact-form { max-width: 1040px; margin: 0px auto; }  
    .form-wrapper form { display: -webkit-box; display: -ms-flexbox; display: flex; -ms-flex-wrap: wrap; flex-wrap: wrap; justify-content: space-between; }  
    .form-wrapper .wrapp-field { width: 48%; }  
    .form-wrapper .full-wrap { width: 100%; }  
    .form-wrapper .wrapp-field input[type="text"], 
    .form-wrapper .wrapp-field input[type="email"], 
    .form-wrapper .wrapp-field input[type="file"], 
    .form-wrapper .wrapp-field textarea { width: 100%; padding: 33px 0px 10px 0px; border-bottom: 2px solid #e2e2e2; font-size: 18px; text-transform: capitalize; outline: none; font-family: "poppins"; -webkit-transition: all ease-out 0.3s; transition: all ease-out 0.3s; }  .form-wrapper .wrapp-field textarea { width: 100%; padding-bottom: 40px; resize: none; }  .filelabel { position: relative; display: block; width: 100%; padding: 33px 0px 10px 0px; border-bottom: 2px solid #e2e2e2; font-size: 18px; text-transform: capitalize; outline: none; font-family: "poppins"; color: grey; }  
    .filelabel .filetype { position: absolute; z-index: 232; padding: 0; height: 100%; width: 100%; left: 0; opacity: 0; top: 0; }  
    .wrap-submit-btn { width: 100%; text-align: right; margin-top: 45px; }  
    .wrap-submit-btn.more-btn button { font-size: 16px; }


@media only screen and (max-width:767px) {
    
    #contact-us .technologies-div ul li { border: 0px; }

    /*contact style*/
    .form-wrapper .wrapp-field { width: 100%; }
    .form-wrapper .wrapp-field input[type="text"], .form-wrapper .wrapp-field input[type="email"], .form-wrapper .wrapp-field input[type="file"], .form-wrapper .wrapp-field textarea, .filelabel {
    width: 100%; font-size: 16px;
    }
    .wrap-submit-btn { width: 100%; }
    .contact-block-title { margin-bottom: 20px; }
    .form-wrapper form { padding: 0px 15px; margin-bottom: 30px; }
    .csw-row-one.csw-row .side-bg { width: 0; }
    /*contact style end*/

}


</style>



<div class="cc-aboutus-section" id="contact-us">
    <div class="wrapper">

	    <!--banner-section-->
		<div class="cc-innerpage-banner">
			<div class="banner-section">
	
				<div class="image-section" style="background: url('<?php echo get_template_directory_uri();  ?>/assets/images/about-bg.png') no-repeat ;background-size: cover">
				</div>
	
				<div class="overlay-section opacity0">
					<div class="container">

						<div class="banner-content">

							<div class="text-one">
								<h3><?php get_field('banner_title')? the_field('banner_title'):'';?></h3>
                            </div>
                            
							<div class="text-two">
								<h2 class="mobile-text-two-sty"><?php get_field('banner_heading')? the_field('banner_heading'):'';?></h2>
                            </div>
                            
							<div class="text-three">
								<h3>
                                    <?php get_field('banner_description')? the_field('banner_description'):'';?>
                                </h3>
							</div>
							
                        </div>
                        
						<div class="banner-content-right">
                            <?php  $banimage =  get_field('banner_image'); ?>
							<img src="<?php echo $banimage['url']?>" alt="<?php echo $banimage['alt'] ?>" />
                        </div>
                        
					</div>
				</div>
	
			</div>
        </div>

        <!--contact-->
        <div class="contact ">
            <div class="container">
                <div class="contact-block-title block-titles">
                    <div class="title">
                        <div class="big-title">
                            <h2> <?php get_field('back_title')? the_field('back_title'):'';?></h2>
                        </div>
                        <div class="small-title">
                            <div class="right-line small-title-line"></div>
                            <div class="title-content get-for-quote">
                                <h3> <?php get_field('front_title')? the_field('front_title'):'';?></h3>
                            </div>
                            <div class="left-line small-title-line"></div>
                        </div>
                    </div>
                    <div class="desc">
                        <p> <?php get_field('description')? the_field('description'):'';?></p>
                    </div>
                </div>
                <div class="home-contact-form">
                    <div class="cc-row">
                        <div class="col-full">
                            <div class="form-wrapper">

                                <form action="#">
                                    <div class="wrapp-field text-field">
                                        <input type="text" placeholder="Name*">
                                    </div>
                                    <div class="wrapp-field text-field">
                                        <input type="email" placeholder="Phone">
                                    </div>
                                    <div class="wrapp-field text-field">
                                        <input type="email" placeholder="Email*">
                                    </div>
                                    <div class="wrapp-field text-field">
                                        <input type="text" placeholder="Website">
                                    </div>
                                    <div class="wrapp-field text-field">
                                        <input type="text" placeholder="Project budget ?">
                                    </div>
                                    <div class="wrapp-field text-field">
                                        <label for="file" class="filelabel">File Upload
                                            <input type="file" id="file" class="filetype">
                                        </label>

                                    </div>
                                    <div class="wrapp-field textarea-field full-wrap">
                                        <textarea placeholder='Your message'></textarea>
                                    </div>
                                    <div class="wrap-submit-btn more-btn">
                                        <div class="button-wrapper">
                                            <button type="submit" class="btn-sty-one animated-button thar-three"><span
                                                    class="text">Send</span><span class="arrow"></span></button>
                                        </div>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--cms technolgies-->
		<div class="cc-row technologies-div text-center" style="background:#009bfa url(<?php echo get_template_directory_uri();?>/assets/images/smart-tech-bgcircle.png) no-repeat top left">
			<div class="container">
				<div class="cc-col-100">
					<div class="content-block">
						<h3 class="technology-title text-center">
                            <?php get_field('contact_title')? the_field('contact_title'):'';?>
						</h3>
						<ul>
							<li><i class="fa fa-skype"></i> <?php get_field('skype_id')? the_field('skype_id'):'';?></li>
							<li><i class="fa fa-phone-square"></i> <?php get_field('phone_number')? the_field('phone_number'):'';?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
        <!--cms technolgies-->
        
        <div class="map-row">
            <!-- <?php //$mapimage =  get_field('map_image');?>
		    <img src=" <?php //echo $mapimage['url'] ?> " alt="<?php //echo $mapimage['alt'] ?>"> -->
		    <img src="<?php echo get_template_directory_uri();?>/assets/images/map.jpg" alt="askan"/>
		</div>
        
    </div>
</div>

<?php get_footer('new'); ?>