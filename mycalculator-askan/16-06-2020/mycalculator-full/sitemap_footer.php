<footer style="padding-bottom:0;">
    <div class="container">
        <div class="row d-flex">
            <div class="col12 pad0">
                <div class="col3 pad0">
                    <ul>
                        <li>
                            <a href="privacy.php">Privacy Policy</a>
                            <ul>
                        </li>
                </div>
                <div class="col3 pad0">
                    <ul>
                        <li>
                            <a href="about.php">About Us</a>
                    </ul>
                    </li>
                </div>
                <div class="col3 pad0">
                    <ul>
                        <li>
                            <a href="sitemap.php">Site Map</a>
                        </li>
                    </ul>
                </div>
                <div class="col3 pad0">
                    <ul>
                        <li>
                            <a href="faq.php">FAQ</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col3 pad0 margR0-auto">
                <ul class="social-ul">
                    <li>
                        <a href="#" class="loginBtn loginBtn--facebook">
                            Follow us on Facebook
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
        

    <div class="date center" style="padding-top:50px;">

        <amp-date-display datetime="now" layout="responsive" width="360" height="0">
            <template type="amp-mustache">
              Copyrights {{year}} © All Rights Reserved
            </template>
        </amp-date-display>

    </div>
    <!--cookie-->
    <div class="container">
        <div class="row">
            <amp-user-notification id="my-notification" class="sample-notification" layout="nodisplay">
                <p class="cookieText">By clicking "Accept" or continuing to use our site, you agree to our website's <a
                        href="privacy.php">Privacy Policy</a></p>
                <button on="tap:my-notification.dismiss">I accept</button>
            </amp-user-notification>
        </div>
    </div>
</footer>