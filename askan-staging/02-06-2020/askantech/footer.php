<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<div class="div100">
<div class="wrapper">
<!--social icon-->
<!--div class="div100 social-icon mt25">
    <div class="div25"><a class="fb" href="https://www.facebook.com/askantech?_rdr=p" target="_blank"><span><i class="fa fa-facebook fa-lg"></i></span></a></div>
    <div class="div25"><a class="tw" href="https://twitter.com/askantech" target="_blank"><span><i class="fa fa-twitter fa-lg"></i></span></a></div>
    <div class="div25"><a class="ln" href="https://www.linkedin.com/company/askan-technologies" target="_blank"><span><i class="fa fa-linkedin fa-lg"></i></span></a></div>
    <div class="div25"><a class="gp" href="javascript:void(0);"><span><i class="fa fa-google-plus fa-lg"></i></span></a></div>
</div-->
<?php social_share_icon(); ?>
<!--social icon-->
</div>
</div>

<div class="div100 footer-widget">
    <div class="wrapper">
        <!--block1-->
        <div class="div20">
            <h2 class="title"><u>LINKS</u></h2>
            <?php
            $defaults = array(
                'theme_location'  => 'extra-menu',
                'menu'            => 'nav-menu',
                'container'       => 'div',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'menu',
                'menu_id'         => 'footer-menu',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s link">%3$s</ul>',
                'depth'           => 0,
                'walker'          => ''
            );
            wp_nav_menu( $defaults );?>
           <!-- <ul class="link">
                <li><a href="aboutus.html">About Us</a></li>
                <li><a href="services.html">Contact Us</a></li>
                <li><a href="#">Process flow</a></li>
                <li><a href="#">Portfolio</a></li><li><a href="career.html">Career</a><li><li><a href="#">Blog</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="#">Provacy policy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
            </ul>-->
        </div>
        <!--block1-->
        <!--block2-->
		 <?php

    $args = array(
        'type'                     => 'post',
        'child_of'                 => 0,
        'parent'                   => '',
        'orderby'                  => 'name',
        'order'                    => 'ASC',
        'hide_empty'               => 1,
        'hierarchical'             => 1,
        'exclude'                  => '',
        'include'                  => '',
        'number'                   => '',
        'taxonomy'                 => 'category',
        'pad_counts'               => false

    );
   // $categories = get_categories( $args );

    ?>
        <div class="div30">
            <h2 class="title"><u>LATEST BLOGS</u></h2>
            <ul class="blog">
			 <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts('posts_per_page=2&paged=' . $paged); ?>
               <?php if(have_posts()): ?>
						<?php while(have_posts()): the_post(); ?>
				<li>
                    <div class="div25">
                        <div class="blog-img">
			<?php $thumbnail = get_post( get_post_thumbnail_id() ); ?>
			<img src="<?php if(has_post_thumbnail()){ echo rw_resize(get_post_thumbnail_id(),77,77); } else { echo get_template_directory_uri()."/images/askantech-blog.jpg";}?>" alt="<?php if(get_post_thumbnail_id()) { echo get_post_meta( $thumbnail->ID, '_wp_attachment_image_alt', true );} else { echo "askantech-blog"; } ?>"
                                                     title="<?php if(get_post_thumbnail_id()) { echo $thumbnail->post_title; } else { echo "askantech-blog"; } ?>" height="77" width="77"/> </div>
                    </div>
                    <div class="div65">
                        <h3><?php the_title(); ?></h3>
                        <p class="date"><?php the_time('M d Y'); ?></p>
                        <?php //the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="readmore">Read more</a>
                    </div>
                </li>
				 <?php endwhile; ?><?php endif; ?>
            </ul>
        </div>
        <!--block2-->
        <!--block3-->
        <div class="div25">
            <h2 class="title"><u>INDIA</u></h2>
            <ul class="address">
                <li>No:48, (Backside), Pavendar Street,<br/>Mariamman Nagar, Mudaliarpet,<br/>Puducherry - 605004</li>
                <li>0413 4500022</li>
                <li>info(at)askantech(dot)com</li>
                <li>kan.speed</li>
            </ul>
        </div>
        <!--block3-->
		<!--block4-->
        <div class="div25">
            <h2 class="title"><u>THAILAND</u></h2>
            <ul class="address">
                <li>Sapsin1, R#209, 249, <br/> Soi Ramkhamhaeng 24 Yeak 30, <br/>Hua Mak, Bang Kapi, <br/>Bangkok 10240</li>
                <li>+66838762766</li>
            </ul>
        </div>
        <!--block4-->
    </div>
</div>


</section>

<footer>
    <div class="wrapper">
        <div class="div100 ctext pt5 pb5">
            &copy; All Rights Reserved 2015. ASKAN TECHNOLOGIES
        </div>
    </div>
</footer>
<?php
//JQuery 1.10.2 Min
wp_register_script('Askan-jquery-1.11.3.min',get_stylesheet_directory_uri().'/js/jquery-1.11.3.min.js',array(),NULL,true);
wp_enqueue_script('Askan-jquery-1.11.3.min');
//Menu Script
wp_register_script('Askan-menuscript',get_stylesheet_directory_uri().'/js/menuscript.js',array(),NULL,true);
wp_enqueue_script('Askan-menuscript');

if(is_front_page()):
    //Layer Slider Script
    wp_register_script('Askan-greensock',get_stylesheet_directory_uri().'/js/greensock.js',array(),NULL,true);
    wp_enqueue_script('Askan-greensock');

    wp_register_script('Askan-layerslider.transitions',get_stylesheet_directory_uri().'/js/layerslider.transitions.js',array(),NULL,true);
    wp_enqueue_script('Askan-layerslider.transitions');

    wp_register_script('Askan-layerslider.kreaturamedia.jquery',get_stylesheet_directory_uri().'/js/layerslider.kreaturamedia.jquery.js',array(),NULL,true);
    wp_enqueue_script('Askan-layerslider.kreaturamedia.jquery');

    $send_custom = array('plugin_url' => get_stylesheet_directory_uri());
    wp_register_script('layercustom-js',get_stylesheet_directory_uri().'/js/layercustom.js',array(),NULL,true);
    wp_enqueue_script('layercustom-js');
    wp_localize_script( 'layercustom-js', 'askan_layercustom', $send_custom );
endif;
    // job apply pop up

    wp_register_script('Askan-classie',get_stylesheet_directory_uri().'/js/classie.js',array(),NULL,true);
    wp_enqueue_script('Askan-classie');
    wp_register_script('Askan-modalEffects',get_stylesheet_directory_uri().'/js/modalEffects.js',array(),NULL,true);
    wp_enqueue_script('Askan-modalEffects');
    wp_register_script('Askan-owl.carousel',get_stylesheet_directory_uri().'/js/owl.carousel.js',array(),NULL,true);
    wp_enqueue_script('Askan-owl.carousel');
    wp_register_script('Askan-prettyPhoto',get_stylesheet_directory_uri().'/js/jquery.prettyPhoto.js',array(),NULL,true);
    wp_enqueue_script('Askan-prettyPhoto');
    //$send_custom = array('plugin_url' => get_stylesheet_directory_uri());
    wp_register_script('custom-js',get_stylesheet_directory_uri().'/js/custom.js',array(),NULL,true);
    wp_enqueue_script('custom-js');
    //wp_localize_script( 'custom-js', 'askan_custom', $send_custom );
    wp_register_script('share_count-js',get_stylesheet_directory_uri().'/js/share_count.js',array(),NULL,true);
    wp_enqueue_script('share_count-js');

wp_footer(); ?>
	<!--script-->
	<!--menu-script-->
	<!--script src="<?php //echo get_template_directory_uri();?>/js/jquery-1.11.3.min.js"></script>
	<script src="<?php //echo get_template_directory_uri();?>/js/menuscript.js"></script-->
	<!--menu-script-->

	<!--layerslider script-->
	<!--script src="js/jquery.js" type="text/javascript"></script-->
	<!--script src="<?php //echo get_template_directory_uri();?>/js/greensock.js" type="text/javascript"></script-->
	<!-- LayerSlider script files -->
	<!--script src="<?php //echo get_template_directory_uri();?>/js/layerslider.transitions.js" type="text/javascript"></script>
	<script src="<?php //echo get_template_directory_uri();?>/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
	
	
	<script>
		jQuery("#layerslider").layerSlider({
			responsive: false,
			responsiveUnder: 1280,
			layersContainer: 1280,
			skin: 'noskin',
			hoverPrevNext: false,
			skinsPath: 'css/'
		});
	</script-->
	<!--layerslider script-->
	<!--carousel slider-->
	 <!--script src="<?php //echo get_template_directory_uri();?>/js/owl.carousel.js"></script-->
    <!--script>
        jQuery(document).ready(function() {
            jQuery("#owl-demo").owlCarousel({
                navigation : true
            });
        });

    </script-->
	<!--carousel slider-->
	<!--script-->
<?php// if(is_page(43)) {?>
<script type="text/javascript">
var ajax_url_contact = "<?php echo admin_url( 'admin-ajax.php' ) ?>";
var fl = document.getElementById('image_data');
$("#image_data").on('change',function(e) {
			var ext = this.value.replace(/^.*\./, '');
			switch(ext)
			{
			case 'jpg':
			case 'png':
			case 'PNG':
			case 'xlsx':
			case 'xls':
			case 'docx':
			case 'doc':
			case '.doc':
			case 'pdf':
			case 'txt':
			
			$("#div_req_error").html('');
            break;
			default:
			$("#div_req_error").html('<p class="my-notify-error">This file type not allowed</p>');
             scrollTop('#div_req_error',110);
			 this.value='';
             return false;
         //   alert('This file type not allowed');
            
			}
			});
    jQuery(document).ready(function() {
		jQuery( document ).on( 'click', '#contact_submit', function() {
			$("#display").hide();
            var fname=$("#fname").val();
            var email=$("#email").val();
            var phone=$("#phone").val();
            var website = $("#website").val();
            var textarea=$("#message").val();
            var siteurl=$("#siteurl").val();
			var fl = document.getElementById('image_data');
            var namevalid = /^[a-zA-Z\s]+$/;
            var emailvalid = /^([\w\.\-\+])+\@(([\w\-])+\.)+([a-zA-Z0-9]{2,6})$/;
            var phoneNumber = /[0-9-()+]{3,20}/;
            var domainRegex = /^(([\w]+:)?\/\/)?(([\d\w]|%[a-fA-f\d]{2,2})+(:([\d\w]|%[a-fA-f\d]{2,2})+)?@)?([\d\w][-\d\w]{0,253}[\d\w]\.)+[\w]{2,4}(:[\d]+)?(\/([-+_~.\d\w]|%[a-fA-f\d]{2,2})*)*(\?(&?([-+_~.\d\w]|%[a-fA-f\d]{2,2})=?)*)?(#([-+_~.\d\w]|%[a-fA-f\d]{2,2})*)?$/;
			
			$("#image_data").on('change',function(e) {
			var ext = this.value.replace(/^.*\./, '');
			switch(ext)
			{
			case 'jpg':
			case 'png':
			case 'PNG':
			case 'xlsx':
			case 'xls':
			case 'docx':
			case 'doc':
			case 'doc':
			case 'pdf':
			case 'txt':
			
			$("#div_req_error").html('');
            break;
			default:
            $("#div_req_error").html('<p class="my-notify-error">This file type not allowed</p>');
             scrollTop('#div_req_error',110);
			 this.value='';
             return false;
			}
			});
			
            if(fname == ''){
                $("#div_req_error").html('<p class="my-notify-error">Please Enter Your Name</p>');
                scrollTop('#div_req_error',110);
                return false;
            }else if((fname.length)<3){
                $("#div_req_error").html('<p class="my-notify-error">Please Enter Atleast 3 Characters</p>');
                scrollTop('#div_req_error',110);
                return false;
            }else if(!namevalid.test(fname)){
                $("#div_req_error").html('<p class="my-notify-error">Please Enter only Characters</p>');
                scrollTop('#div_req_error',110);
                return false;
            }else if(email=="")
            {  $("#div_req_error").html('<p class="my-notify-error">Please Enter E-mail address</p>');
                scrollTop('#div_req_error',110);
                return false;
            }
            else if(!emailvalid.test(email))
            { $("#div_req_error").html('<p class="my-notify-error">Please Enter Valid E-mail address</p>');
                scrollTop('#div_req_error',110);
                return false;
            }
            else if((phone!='') && (phone.length) < 9 || (phone.length) > 16)  {
                $("#div_req_error").html('<p class="my-notify-error">Please Enter Valid Phone number</p>');
                scrollTop('#div_req_error', 110);
                return false;
            }
            else if((phone!='') && !phoneNumber.test(phone)) {
                $("#div_req_error").html('<p class="my-notify-error">Please Enter the valid Phone number</p>');
                scrollTop('#div_req_error', 110);
                return false;
            }
            else if((website!='') && (!domainRegex.test(website))) {
                $("#div_req_error").html('<p class="my-notify-error">Please Enter Valid domain</p>');
                scrollTop('#div_req_error', 110);
                return false;
            }
            else if(textarea == '')
            { $("#div_req_error").html('<p class="my-notify-error">Please Enter Your Message</p>');
                scrollTop('#div_req_error',110);
                return false;
            }else{
                $("#div_req_error").html('');
            }
            $("#contact_submit").hide();
            $('#loading').show();
            var formData = new FormData($('#contact')[0]);
            formData.append('action', 'post_contact_form');
            formData.append('c_url', window.location.href);
            console.log(formData);
		$.ajax({
				url : ajax_url_contact,
				type: 'POST',
                data: formData,
                success: function(data){
					console.log(data);
					if(data == 1){
						$("#display").show();
                    $("#display").html('<p class="my-notify-success">Successfully Submitted.</p>');
					setTimeout(function(){  
                               $('#display').fadeOut("Slow");  
                          }, 2000); 
                    $('#loading').hide();
                    $("form").trigger("reset");
                    $("#contact_submit").show();
					$("#resume").next(".validation-advice").remove();
					}
                },
                cache: false,
                contentType: false,
                processData: false
            });
            return false;
        });

        $(document).on('change', '#resume', function () {
			$("#resume").next(".validation-advice").remove();
			var filename = $('input[type=file]').val().split('\\').pop();
			$("#resume").after('<p class="validation-advice">'+filename+'</p>');
            var fileExtension = ['doc','docx','xls','xlsx','ppt','pptx','txt','zip','rar','jpeg','png','jpg','psd','rtf','pdf','odt'];
            var fileSize = 10485760;
            if (!navigator.userAgent.match(/msie/i)){
                var iSize = ($('#resume')[0].files[0].size);
            }
            if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                $('#div_req_error').html("<font>Only 'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'txt', 'zip', 'rar', 'jpeg', 'png', 'jpg', 'psd', 'rtf', 'pdf', 'odt' formats are allowed.</font>");
                if (!navigator.userAgent.match(/msie/i)){
                    $('#resume').val('');
                }
                else{
                    $("input[type='file']").replaceWith($("input[type='file']").clone(true));
                }
                scrollTop('#div_req_error',110);

            }else if(iSize > fileSize){
                $('#div_req_error').html("<font>Maximum of 10MB only allowed</font>");
				$("#resume").next(".validation-advice").remove();
                if (!navigator.userAgent.match(/msie/i)){
                    $('#resume').val('');
                }
                else{
                    $("input[type='file']").replaceWith($("input[type='file']").clone(true));
                }
                scrollTop('#div_req_error',110);
            }
            else {
                $('#div_req_error').html(" ");
            }
        });
	$( document ).on( 'click', '#career_submit', function() {
            var fname=$("#fname").val();
            var email=$("#email").val();
            var phone=$("#phone").val();
            var company=$("#current_company").val();
            var resume=$("#resume").val();
            var information=$("#information").val();
            var siteurl=$("#siteurl").val();
            var namevalid = /^[a-zA-Z\s]+$/;
            var emailvalid = /^([\w\.\-\+])+\@(([\w\-])+\.)+([a-zA-Z0-9]{2,6})$/;
            var phoneNumber = /[0-9-()+]{3,20}/;
            if(fname == ''){
                $("#div_req_error").html('<p class="my-notify-error">Please Enter Your Name</p>');
                scrollTop('#div_req_error',110);
                return false;
            }
            else if((fname.length)<3){
                $("#div_req_error").html('<p class="my-notify-error">Please Enter Atleast 3 Characters</p>');
                scrollTop('#div_req_error',110);
                return false;
            }
            else if(!namevalid.test(fname)){
                $("#div_req_error").html('<p class="my-notify-error">Please Enter only Characters</p>');
                scrollTop('#div_req_error',110);
                return false;
            }
            else if(email=="") {
                $("#div_req_error").html('<p class="my-notify-error">Please Enter E-mail address</p>');
                scrollTop('#div_req_error',110);
                return false;
            }
            else if(!emailvalid.test(email))
            { $("#div_req_error").html('<p class="my-notify-error">Please Enter Valid E-mail address</p>');
                scrollTop('#div_req_error',110);
                return false;
            }
            else if((phone!='') && (phone.length) < 9 || (phone.length) > 16)  {
                $("#div_req_error").html('<p class="my-notify-error">Please Enter Valid Phone number</p>');
                scrollTop('#div_req_error', 110);
                return false;
            }
            else if((phone!='') && !phoneNumber.test(phone)) {
                $("#div_req_error").html('<p class="my-notify-error">Please Enter the valid Phone number</p>');
                scrollTop('#div_req_error', 110);
                return false;
            }
            else if(resume==""){
                $('#div_req_error').html('<p class="my-notify-error">Please Upload Files</p>');
                scrollTop('#div_req_error',110);
                return false;
            }
            /* else if(information == '')
            { $("#div_req_error").html('<p class="my-notify-error">Please Enter Your Additional Information</p>');
                scrollTop('#div_req_error',110);
                return false;
            } */else{
                $("#div_req_error").html('');
            }
            $("#career_submit").hide();
            $('#loading').show();
            var formData = new FormData($('#jobform')[0]);console.log(formData);
            formData.append('action', 'post_career_form');
			$.ajax({
			url : ajax_url_contact,
		    type: 'POST',
                data: formData,
                success: function(data){
                    $("#display").html(data);
		    $('#display').hide().html(data).fadeIn('slow').delay(4000).hide(1);
                    $('#loading').hide();
                    $("#div_req_err").html("");
                    $("#fname").val('');
                    $("#email").val('');
                    $("#phone").val('');
                    $("#resume").val('');
                    $("#information").val('');
                    $("#current_company").val('');
                    $("#career_submit").show();
					$("#resume").next(".validation-advice").remove();
                },
                cache: false,
                contentType: false,
                processData: false
            });
            return false;
        });
		$('#inputName').bind('keypress', function (event) {
    var regex = new RegExp("^[a-zA-Z\b]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key))
    {
       event.preventDefault();
       return false;
    }
});

    });

    function scrollTop(id, offset){
        jQuery('html, body').animate({
            scrollTop: $(id).offset().top - offset
        }, 300);
    }
$("#phone").on("keypress keyup blur",function (event) {
            //this.value = this.value.replace(/[^0-9\.]/g,'');
     $(this).val($(this).val().replace(/[^0-9\.]/g,''));
            if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
        });

</script> <?php //} ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-9250988-11', 'auto');
  ga('send', 'pageview');

</script>
	</body>
</html>