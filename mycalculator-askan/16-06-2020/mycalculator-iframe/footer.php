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
<script id="hello-world" type="text/plain" target="amp-script">
var userSelection = document.getElementsByClassName('input-fld');
    for(var i = 0; i < userSelection.length; i++) {
      (function(index) {
        userSelection[index].addEventListener("keyup", function(event) {
          if (event.keyCode === 13) { 
            if(index ==0 || index ==1)
            {
              var loanAmount1= document.getElementsByClassName("input-fld")[0].value;
              var loanpercentage= document.getElementsByClassName("input-fld")[1].value;
              console.log(loanAmount1);
              if(loanAmount1 !='' && loanpercentage !='')
              {
                document.getElementsByClassName('calculateBtn')[0].click();
              }
            }
            else if(index ==3 || index ==4)
            {
              var loanAmount2= document.getElementsByClassName("input-fld").item(3).value;
              var loanpercentage2= document.getElementsByClassName("input-fld").item(4).value;
              if(loanAmount2 !='' && loanpercentage2 !='')
              {
                document.getElementsByClassName('calculateBtn')[1].click();
              }
            }
            else if(index ==6 || index ==7)
            {
              var loanAmount3= document.getElementsByClassName("input-fld").item(6).value;
              var loanpercentage3= document.getElementsByClassName("input-fld").item(7).value;
              if(loanAmount3 !='' && loanpercentage3 !='')
              {
                document.getElementsByClassName('calculateBtn')[2].click();
              }
            }
            else if(index ==9 || index ==10)
            {
              var loanAmount4= document.getElementsByClassName("input-fld").item(9).value;
              var loanpercentage4= document.getElementsByClassName("input-fld").item(10).value;
              if(loanAmount4 !='' && loanpercentage4 !='')
              {
                document.getElementsByClassName('calculateBtn')[3].click();
              }
            }
            else if(index ==12 || index ==13)
            {
              var loanAmount5= document.getElementsByClassName("input-fld").item(12).value;
              var loanpercentage5= document.getElementsByClassName("input-fld").item(13).value;
              if(loanAmount5 !='' && loanpercentage5 !='')
              {
                document.getElementsByClassName('calculateBtn')[4].click();
              }
            }

            else 
            {
              console.log("Undefined box"+ index);
            }
          }
        })
      })(i);
    }
</script>