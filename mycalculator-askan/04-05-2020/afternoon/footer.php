<amp-lightbox id="my-lightbox" class="ss-bg-popup" layout="nodisplay">

<!-- <div class="lightbox" on="tap:my-lightbox.close" role="button" tabindex="0"> -->
<div class="modal">
<span class="helptext-mob">Add this calculator to your phone</span>
<amp-img on="tap:my-lightbox" class="ss-igt" role="button" tabindex="0" src="/images/popupimg.jpg"layout="responsive" width="350" height="375" ></amp-img>
<span class="close" tabindex="0" on="tap:my-lightbox.close" role="button" >×</span>
</div>
</amp-lightbox>

<footer style="padding-bottom:0;">


<div class="container">
	<div class="row d-flex">
    <!-- <div class="col8 pad0">
        <h2>Our other calculators</h2>
          <ul>
            <li >
              <a href="index.php">Percentage Calculators</a>
            </li>
            <li >
              <a href="percent-change-calculator.php">Percent Change</a>
            </li>
            <li >
              <a href="percent-difference.php">Percent Difference</a>
            </li>
            <li >
              <a href="discount-calculator.php">Discount Calculator</a>
            </li>
            <li >
              <a href="tip-calculator.php">Tip Calculator</a>
            </li>
            <li >
              <a href="final-grade-calculator.php">Grade Calculator</a>
            </li>
            <li >
              <a href="paycheck-calculator.php">Salary Calculator</a>
            </li>
			<li >
              <a href="loan-calculator.php">Loan Calculator</a>
            </li>
            <li >
              <a href="privacy.php">Privacy Policy</a>
            </li>
            <li >
              <a href="about.php">About Us</a>
            </li>
            <li >
              <a href="faq.php">FAQ</a>
            </li>
          </ul>
    </div>
    <div class="col4 pad0 margR0-auto">
      <ul class="social-ul">
        <li>
        <a href="#" class="loginBtn loginBtn--facebook">
          Follow us on Facebook
        </a>
        </li>
      </ul>  
    </div>  -->
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
</div>
<div class="date center" style="padding-top:50px;">
    
    <amp-date-display datetime="now" layout="responsive" width="360" height="0">
      <template type="amp-mustache">
        <!--  {{day}}-{{month}}- -->Copyrights {{year}} © All Rights Reserved
      </template>
    </amp-date-display>

   </div>
       <!--cookie-->
       <div class="container">
       <div class="row">
    <amp-user-notification id="my-notification" class="sample-notification" layout="nodisplay">
      <p class="cookieText">By clicking "I ACCEPT" or continuing to use our site, you agree to our website's <a href="privacy.php">Privacy Policy</a></p>
        <button on="tap:my-notification.dismiss">I Accept</button>
    </amp-user-notification>
  </div>
</div>
</footer>

<amp-analytics type="googleanalytics">
<script type="application/json">
{
"vars": {
"account": "UA-159998943-1"
},
"triggers": {
"trackPageview": {
"on": "visible",
"request": "pageview"
  }
 }
}
</script>
</amp-analytics>