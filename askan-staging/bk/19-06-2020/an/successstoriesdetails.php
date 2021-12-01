<?php
/**
 * Template Name: Success Stories Details page
 */
get_header(); ?>

<section class="content">
    <!--innerbanner + title-->
    <div class="div100">
        <div class="innerbanner success-banner">
            <div class="wrapper"><h1>Success Stories</h1></div>
        </div>
    </div>
    <!--innerbanner + title-->
    <!--breadcrumb-->
    <div class="div100">
        <div class="wrapper">
            <div class="breadcrumb">
                <a href="<?php echo site_url(); ?>">Home</a> >> <a href="<?php echo site_url(); ?>/services"/>Success Stories</a> >> <a class="current" href="#"/><?php get_field('clients_website_title')? the_field('clients_website_title'):''; ?></a>
            </div>
        </div>
    </div>
    <!--breadcrumb-->
    <div class="div100 mt25 ">
        <div class="wrapper">
            <div class="100">
                <!--left content-->
                <div class="div70 success-stories-inner">
                    <div class="inner-main-title"><?php get_field('clients_website_title')? the_field('clients_website_title'):''; ?></div>
                    <div class="div100"><hr class="sepl" /></div>
                    <div class="div100 mt15">
                        <?php $clients_website_image = get_field('clients_website_image'); ?>
                        <img src="<?php echo $clients_website_image['url'];?>" alt="<?php echo $clients_website_image['alt'];?>" title="<?php echo $clients_website_image['title'];?>"/>
                    </div>
                    <div class="div100">
                        <div class="techbg">
                            <div class="div33 borderright">
                                <div class="black"><?php get_field('service_provider')? the_field('service_provider'):''; ?></div>
                                <div class="white">Web Development</div>
                            </div>
                            <div class="div33 borderright">
                                <div class="black">Technology</div>
                                <div class="white"><?php get_field('technology')? the_field('technology'):''; ?></div>
                            </div>
                            <div class="div30">
                                <div class="black">Industry</div>
                                <div class="white"><?php get_field('industry')? the_field('industry'):''; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="div100">
                        <?php get_field('what_we_did_for_clients')? the_field('what_we_did_for_clients'):''; ?>
                    </div>
                </div>
                <!--left content-->
                <!--right content-->
                <div class="div30">
                    <div class="success-stories-sidebar">
                        <!--testi-->
                        <div class="success-stories-testimonial">
                            <div class="sidebar-header">Client's Testimonial</div>
                            <div class="success-stories-testi">
                                <?php $clients_website_logo = get_field('clients_website_logo');?>
                                <div class="div30 testi-img"><img src="<?php echo $clients_website_logo['url'];?>" alt="<?php echo $clients_website_logo['alt']; ?>" title="<?php echo $clients_website_logo['title']; ?>" /></div>
                                <div class="div70 side-testi-author"><i><b><?php get_field('clients_name')? the_field('clients_name'):'';?></b><br/><?php get_field('founder_of')? the_field('founder_of'):'';?></i></div>
                                <div class="div100 side-testi-content"><?php get_field('clients_testimonials_in_text')? the_field('clients_testimonials_in_text'):'';?></div>
                            </div>
                        </div>
                        <!--testi-->
                        <!--related projects-->
                        <div class="success-stories-related-projects">
                            <div class="sidebar-header">Related projects</div>
                            <?php $related_projects_images = get_field('related_projects_images');?>
                            <div class="div100 ctext"><img src="<?php echo $related_projects_images['url'];?>" alt="<?php echo $related_projects_images['alt']; ?>" title="<?php echo $related_projects_images['title']; ?>" /></div>
                            <div class="div100"><b><?php get_field('related_projects_name')? the_field('related_projects_name'):'';?></b><br/><?php get_field('related_projects_explanation')? the_field('related_projects_explanation'):'';?></div>
                            <a class="btn btn-blue floatr m20" href="<?php if(get_sub_field('related_projects_explanation_read_more')==null) echo 'javascript:void(0)'; else the_sub_field('related_projects_explanation_read_more');  ?>">Read more...</a>
                        </div>
                        <!--related projects-->
                        <!--related projects-->
                        <div class="success-stories-contact">
                            <div class="sidebar-header">Contact Us</div>
                            <div class="div100">
                                <div class="contact_form">
				     <div id="div_req_error" style="color:red;"></div><br/>
				         <div id="display"></div>
                                    <form name="contact" method="post" action="">
                                        <div class="field">
                                            <input type="text" name="fname" id="fname" placeholder="Name *"/>
                                        </div>
                                        <div class="field">
                                            <input type="text" name="email" id="email" placeholder="Email *"/>
                                        </div>
                                        <div class="field">
                                            <input type="text" name="phone" id="phone" placeholder="Phone"/>
                                        </div>
                                        <div class="field">
                                            <input type="text" name="website" id="website" placeholder="Website"/>
                                        </div>
                                        <div class="field-noborder">
                                            <textarea name="message" id="message"  placeholder="Message"></textarea>
                                        </div>
					<input type="hidden" id="siteurl" value="<?php echo get_template_directory_uri(); ?>"/>
                                        <input type="submit" name="contact_submit" id="contact_submit" value="Submit" />
           				<div id="loading" style="display:none;">
                			<img src="<?php echo get_template_directory_uri()?>/images/loading.gif" alt="Please wait" style="float:left;margin-right:5px;"/><p style="line-height:17px">Please wait...</p>
            				</div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--related projects-->
                    </div>

                </div>
                <!--right content-->
            </div>
        </div>
    </div>

    <?php get_footer(); ?>