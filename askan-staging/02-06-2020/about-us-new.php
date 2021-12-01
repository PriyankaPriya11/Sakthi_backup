<?php /** * Template Name: About-us-new */ ?>

<?php get_header('new'); ?>

<div class="cc-aboutus-section" id="about-us">
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
								<h3><?php get_field('banner_heading')? the_field('banner_heading'):'';?></h3>
							</div>
							<div class="text-two">
								<h2 class="mobile-text-two-sty"><?php get_field('banner_description')? the_field('banner_description'):'';?></h2>
							</div>
							<div class="text-three">
								<h3><?php get_field('banner_content')? the_field('banner_content'):'';?></h3>
							</div>
						</div>
						<div class="banner-content-right">
							<?php $banner_image_url = get_field('banner_image');  ?>
							<img src="<?php echo get_field('banner_image')? $banner_image_url['url']:'';?>" alt="<?php echo get_field('banner_image')? $banner_image_url['alt']:'';?>"/>
						</div>
					</div>
				</div>
	
			</div>
		</div>
		
    </div>

    <div class="content">
	
		<div class="cc-row web-app-service aboutusdiv">
			<div class="container">
				<div class="cc-row">

				<?php if(get_field('image_block')): ?>
					<?php while(has_sub_field('image_block')):
						$blockimg = get_sub_field('block_image'); 
						$blockheading = get_sub_field('block_heading'); 
						$blockcontent = get_sub_field('block_content'); 
					?>

					<div class="cc-col-50 mivisn">
						<div class="content-block text-center">
							<div class="ourmission" style="background-image:url(<?php echo $blockimg['url'];?>)">
								<h4><?php echo $blockheading; ?></h4>
								<p><?php echo $blockcontent; ?></p>
							</div>
						</div>
					</div>
					
					<?php endwhile; ?>
				<?php endif ?>
				
				</div>
				<div class="cc-row">
					<?php if(get_field('services_section')): ?>
						<?php while(has_sub_field('services_section')):
							$service_img = get_sub_field('services_section_image'); 
							$service_img_heading = get_sub_field('services_section_heading'); 
							$service_img_content = get_sub_field('services_section_content'); 
						?>
						<div class="cc-col-25 whyus-box">
							<img src="<?php echo $service_img['url']; ?>" alt="echo $service_img['alt'];"/>
							<h3><?php echo $service_img_heading; ?></h3>
							<p><?php echo $service_img_content; ?></p>
						</div>
						<?php endwhile; ?>
					<?php endif ?>
				</div>
			</div>
        </div>
		
		
		<!--why choose askan-->
		<div class="customer-choose">
			<div class="container">
				<div class="cc-row">
				<div class="cc-col-50">
					<div class="content-block">
						<div class="content-block-title web-app-title">
							<h3><?php get_field('why_choose_us_heading')? the_field('why_choose_us_heading'):'';?></h3>
						</div>
						<div class="content-block-contents">
							<div class="tick-list">
							<ul>
								<?php if(get_field('qualties_list')): ?>
									<?php while(has_sub_field('qualties_list')):
										$quality = get_sub_field('qualiteis'); 
									?>
									<li><?php echo $quality ?></li>
									<?php endwhile; ?>
								<?php endif ?>
							</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="cc-col-50">
					<div class="image-block">
						<div class="image-one">
							<?php $why_us_banner =  get_field('why_choose_us_image') ?>
							<img src="<?php echo $why_us_banner['url'] ?>" alt="<?php echo $why_us_banner['alt'] ?>">
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
		<!--why choose askan-->
		
		<div class="cc-row app-technology">
			<div class="container">
            <div class="cc-row">

				<div class="cc-col-50 text-center apptech-txt">
					<div class="apptechbox">
						<h3><?php get_field('about_askan_heading')? the_field('about_askan_heading'):'';?><span class="small-title-line"></span></h3>
						<p class="text-left"><?php get_field('about_askan_description')? the_field('about_askan_description'):'';?></p>
					</div>
				</div>


				<div class="cc-col-50">

 					<?php $color_class =  array('blue-bg','violet-bg','blue-bg'); $fa_class    =  array('fa-file-text-o','fa-comment-o','fa-globe'); ?>
										
					<?php if(get_field('about_askan_block')): $i=0; ?>
						<?php while(has_sub_field('about_askan_block')):
							$project_count = get_sub_field('project_count'); 
							$project_desc = get_sub_field('project_description'); 
						?>
						<div class="<?php echo $color_class[$i] ?> apptech-box">
							<i class="fa <?php echo $fa_class[$i] ?>"></i>
							<h3> <?php echo $project_count; ?> </h3>
							<span><?php echo $project_desc; ?></span>
						</div>
						<?php $i++; ?>
						<?php endwhile; ?>
					<?php endif ?>
				</div>

			</div>
			</div>
		</div>

        <!--footer contact-->
        <div class="footer-contact">
			<div class="container">
                <div class="cc-row">
					<div class="contact-block-title block-titles">
                    <div class="title">
                        <div class="big-title">
                            <h2><?php get_field('contact_heading')? the_field('contact_heading'):'';?></h2>
                        </div>
                        <div class="small-title">
                            <div class="right-line small-title-line"></div>
                            <div class="title-content get-for-quote">
                                <h3><?php get_field('contact_description')? the_field('contact_description'):'';?></h3>
                            </div>
                            <div class="left-line small-title-line"></div>
                        </div>
                    </div>
					<div class="title">
                        <h3><?php get_field('first_line')? the_field('first_line'):'';?></h3>
                    </div>
                    <div class="desc">
                        <p><?php get_field('second_line')? the_field('second_line'):'';?></p>
                    </div>
					<div class="more-btn button-center">
						<div class="button-wrapper">
							<?php $foot_banner_link = get_field('contact_link') ?>
							<a href="<?php echo $foot_banner_link['url'] ?>" class="btn-sty-one animated-button thar-three"><span class="text">Get in Touch</span><span class="arrow"></span></a>
						</div>
					</div>
                </div>
				</div>
			</div>
		</div>
		
    </div>

</div>
 


 <?php get_footer('new'); ?>