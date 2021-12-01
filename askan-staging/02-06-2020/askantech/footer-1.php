<!--testimonial-->
<div class="div100 testimonialbg mt20">
    <div class="htesti-wrapper">
        <div class="div100 mt40">
            <div class="main-title-w">Testimonial</div>
            <div class="div100"><hr class="sep" /></div>
            <div class="sub-title-w"><?php echo get_field('footer_subtitle')? the_field('footer_subtitle'):''; ?></div>
        </div>
        <div class="div100 mt20">
            <?php if(get_field('footer_testimonials_section','options')): ?>
                <?php while(has_sub_field('footer_testimonials_section','options')):
                    $footer_client_images = get_sub_field('footer_client_images'); ?>
            <div class="div50">
                <div class="testimonial-div">
     <div itemscope itemtype="http://schema.org/Person">            
                    <div class="div100 test-content">
                        <div class="client-testimonial"><?php the_sub_field('footer_client_testimonial'); ?></div>
		    </div>
		    <div class="div100 test-author">
			<div class="div20">
                        <img src="<?php echo $footer_client_images['url'];?>" alt="<?php echo $footer_client_images['alt'];?>" title="<?php echo $footer_client_images['title'];?>" width="72" height="72"/>
                    </div>
			<div class="div70">
                        <div itemprop="name" class="client-name"><?php the_sub_field('footer_client_name'); ?></div>
                        <div itemprop="jobtitle" class="client-position"><?php the_sub_field('footer_client_position'); ?></div>
                     </div>
                    </div>
                </div>
</div>
            </div>
                <?php endwhile; ?>
            <?php endif ?>
        </div>
        <!--div class="div100 ctext"><a class="btn btn-blue mt15" href="#"><Read all></a></div-->
    </div>
</div>
<!--testimonial-->