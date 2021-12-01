<?php
/**
 * Template Name: Career Details
 */
echo get_header(); ?>

    <section class="content">
        <!--innerbanner + title-->
        <div class="div100">
            <div class="innerbanner career-banner">
                <div class="wrapper"><h1>career</h1></div>
            </div>
        </div>
        <!--innerbanner + title-->
        <!--breadcrumb-->
        <div class="div100">
            <div class="wrapper">
                <div class="breadcrumb">
                    <a href="<?php echo site_url(); ?>">Home</a> >> <a href="<?php echo site_url(); ?>/career"/>Career</a> >> <a class="current" href="#"/><?php get_field('job_title')? the_field('job_title'):''?></a>
                </div>
            </div>
        </div>
        <!--breadcrumb-->
        <div class="div100 mt25 ">
            <div class="wrapper">
			<div itemscope itemtype="http://schema.org/JobPosting">
                <div class="100">
                    <div class="inner-main-title" itemprop="title"><?php get_field('job_title')? the_field('job_title'):''?></div>
                    <div class="div100"><hr class="sepl" /></div>
                    <p><?php get_field('job_location')? the_field('job_location'):''?> <a href="<?php echo site_url(); ?>/career/" class="blue"> (View All Jobs)</a></p>
                    <i><?php get_field('job_type')? the_field('job_type'):''?></i>
                </div>
                <div class="100 mt25">
                    <div itemprop="description">
					<?php if ( have_posts() ) while ( have_posts() ) : the_post();
                    the_content();
                    endwhile; ?>
					</div>
                    <div class="div100 ltext"><button id="triggerpopup" class="md-trigger btn btn-blue" data-modal="modal-1">Apply Now</button></div>
                </div>
			</div>
            </div>
        </div>
    <div class="md-modal md-effect-1" id="modal-1">
        <div class="md-content">
            <h3><button class="md-close">CLOSE X</button></h3>

            <div class="jobform">
                <h6><u>SUBMIT YOUR APPLICATION</u></h6>
                <div id="div_req_error" style="color:red;"></div><br/>
                <div id="display"></div>
                <form name="jobform" id="jobform" method="post">
                    <div class="jobfield">
                        <div class="div40 job-label">Full Name<span class="required">*</span></div>
                        <div class="div50"><input type="text" name="fname" id="fname"/></div>
                    </div>

                    <div class="jobfield">
                        <div class="div40 job-label">Email<span class="required">*</span></div>
                        <div class="div50"><input type="text" name="email" id="email"/></div>
                    </div>

                    <div class="jobfield">
                        <div class="div40 job-label">Phone</div>
                        <div class="div50"><input type="text" name="phone" id="phone"/></div>
                    </div>

                    <div class="jobfield">
                        <div class="div40 job-label">Applying for</div>
                        <div class="div50"><input type="text" name="applyfor" id="applyfor" value="<?php get_field('job_title')? the_field('job_title'):''?>" readonly="readonly"/></div>
                    </div>

                    <div class="jobfield">
                        <div class="div40 job-label">Current Company</div>
                        <div class="div50"><input type="text" name="current_company" id="current_company"/></div>
                    </div>

                    <div class="jobfield">
                        <div class="div40 job-label">Resume / CV<span class="required">*</span></div>
                        <div class="div50"><input type="file" name="resume" id="resume" placeholder="ATTACH RESUME / CV"/></div>
                    </div>

                    <div class="jobfield">
                        <div class="div40 job-label">Additional Information</div>
                        <div class="div100"><textarea name="information" id="information"></textarea></div>
                    </div>
                    <input type="hidden" id="siteurl" value="<?php echo get_template_directory_uri(); ?>"/>
                    <input type="submit" name="submit" id="career_submit" value="Submit" />
<div id="loading" style="display:none;">
                                        <img src="<?php echo get_template_directory_uri()?>/images/loading.gif" alt="Please wait" style="margin:auto;"/><p style="line-height:17px">Please wait...</p>
                                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="md-overlay"></div>
<?php get_footer(); ?>

       
        <?php if(wp_is_mobile()){?>    
		 <script type="text/javascript">
		jQuery(document).ready(function() {
				jQuery("#triggerpopup").click(function(){
					jQuery('html, body').animate({
					scrollTop: (jQuery('#modal-1').offset().top)},500);
				})
        });
		</script>
		<?php } ?>
 <script type="text/javascript">
        function scrollTop(id, offset){
        jQuery('html, body').animate({
        scrollTop: $(id).offset().top - offset
        }, 300);
        }
        </script>
	