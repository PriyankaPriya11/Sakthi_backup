<div class="wrapper">
<!--contact form-->
<div class="div100 mt40">
    <div class="div20">
        <div class="main-title">Contact us</div>
        <div class="div100"><hr class="sep" /></div>
        <div class="sub-title">Get for Quote</div>
    </div>
</div>
<div class="div100 mt25">
    <div class="contact_form">
        <div id="div_req_error" style="color:red;"></div><br/>
        <div id="display"></div>
        <form name="contact" id="contact" method="post">
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
			<div class="field">
				<input type="file" id="image_data" name="image_data" accept="">
			</div>
            <div class="field-noborder">
                <textarea name="message" id="message"  placeholder="Message"></textarea>
            </div>
            <input type="hidden" id="siteurl" value="<?php echo get_template_directory_uri(); ?>"/>
            <input type="submit" name="contact_submit" id="contact_submit" value="Submit" />

            <div id="loading" style="display:none;">
                <img src="<?php echo get_template_directory_uri()?>/images/loading.gif" alt="Please wait" height="20" width="20" style="float:left;margin-right:5px;" /><p style="line-height:17px">Please wait...</p>
            </div>
        </form>
    </div>
</div>
<!--contact form-->
    </div>