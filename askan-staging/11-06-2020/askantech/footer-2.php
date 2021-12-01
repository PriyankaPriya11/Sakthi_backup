<div class="wrapper">
    <!--clients-->
    <div class="div100 mt40">
        <div class="div20">
            <div class="main-title">Our Clients</div>
            <div class="div100"><hr class="sep" /></div>
            <div class="sub-title" style="visibility:hidden;">Meet our Clients</div>
        </div>
    </div>
    <div class="div100 mt25">

        <div id="owl-demo" class="owl-carousel">
            <?php if(get_field('footer_slider_images', 'options')):?>
            <?php while(has_sub_field('footer_slider_images', 'options')):
            $foot_image = get_sub_field('foot_slider_images');?>
            <div class="item"><img src="<?php echo $foot_image['url']; ?>" alt="<?php echo $foot_image['alt']; ?>" title="<?php echo $foot_image['title']; ?>" width="215" height="110" /></div>
        <?php endwhile; endif; ?>
        </div>
    </div>
    <!--clients-->
</div>