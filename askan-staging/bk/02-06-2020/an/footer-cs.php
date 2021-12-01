    <footer>
        <div class="footer-address-row">
            <div class="cc-container">
                <div class="cc-fx-row">
                    <div class="cc-col-33 united" data-bg="url(https://www.askantech.com/wp-content/themes/askantech/assets/images/united.png)" data-was-processed="true" style="background-image: url(&quot;https://www.askantech.com/wp-content/themes/askantech/assets/images/united.png&quot;);">
                        <div class="addressbox">
                            <?php dynamic_sidebar( 'case-study-footer-1' ); ?>
                        </div>
                    </div>

                    <div class="cc-col-33 india" data-bg="url(https://www.askantech.com/wp-content/themes/askantech/assets/images/india.png)" data-was-processed="true" style="background-image: url(&quot;https://www.askantech.com/wp-content/themes/askantech/assets/images/india.png&quot;);">
                        <div class="addressbox">
                            <?php dynamic_sidebar( 'case-study-footer-2' ); ?>
                        </div>
                    </div>


                    <div class="cc-col-33 thailand" data-bg="url(https://www.askantech.com/wp-content/themes/askantech/assets/images/thailand.png)" data-was-processed="true" style="background-image: url(&quot;https://www.askantech.com/wp-content/themes/askantech/assets/images/thailand.png&quot;);">
                        <div class="addressbox">
                            <?php dynamic_sidebar( 'case-study-footer-3' ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social-links">
                <ul>
                    <li><a href="https://www.facebook.com/askantech/" target="_blank">Facebook</a><span></span></li>
                    <li><a href="https://twitter.com/askantech" target="_blank">Twitter</a><span></span></li>
                    <li><a href="https://in.linkedin.com/company/askan-technologies" target="_blank">LinkedIn</a></li>
                </ul>
            </div>
        </div>
        <div class="cc-footer-desc">
            <div class="cc-footer-des-links">
                <p>Privacy Policy</p>
                <p>Terms and Conditions</p>
            </div>
            <div class="cc-footer-copyright">
                <p>All Rights Reserved <?php echo date("Y"); ?>. ASKAN TECHNOLOGIES</p>
            </div>
        </div>
    </footer>
</div>
<script src="https://www.askantech.com/wp-content/themes/askantech/assets/js/jquery.min.js"></script>
<?php wp_footer(); ?>
<script>
    jQuery(document).ready(function(){
        jQuery('.cc-mobile-toggle').on('click',function(){
            jQuery('.cc-nav-section .cc-ul-wrapper').addClass('openmenu');
        })
        jQuery('.cc-closemenu').on('click',function(){
            jQuery('.cc-nav-section .cc-ul-wrapper').removeClass('openmenu');
        })
        jQuery('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                // dots: false,
                navigation: true,
                navigationText: ["<img src='myprevimage.png'>", "<img src='mynextimage.png'>"],
                smartSpeed:450,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            });
    });
</script>
</body>
</html>