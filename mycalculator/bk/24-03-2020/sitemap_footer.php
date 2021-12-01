<style amp-custom>
.loginBtn {
	box-shadow: 2px 2px 2px rgba(171, 171, 171, 0.8);
	  box-sizing: border-box;
	  position: relative;
	  /* width: 13em;  - apply for fixed size */
	  margin: 0.2em;
	  padding: 10px 15px 10px 46px;
	  border: none;
	  text-align: left;
	  white-space: nowrap;
	  border-radius: 0.2em;
	font-size: 13px;
	color:#ffffff;
}
.loginBtn:before {
  content: "";
  box-sizing: border-box;
  position: absolute;
  top: 0;
  left: 0;
  width: 34px;
  height: 100%;
}
.loginBtn:focus {
  outline: none;
}
.loginBtn:active {
  box-shadow: inset 0 0 0 32px rgba(0,0,0,0.1);
}


/* Facebook */
.loginBtn--facebook {
	color:#ffffff !important;
  font-size: 13px !important;
  background-color: #4C69BA;
  background-image: linear-gradient(#4C69BA, #3B55A0);
  text-shadow: 0 -1px 0 #354C8C;
}
.loginBtn--facebook:before {
  border-right: #364e92 1px solid;
  background: url('http://mypercentagecalculator.pmhere.xyz/images/facebook_icon.png') 6px 6px no-repeat;
}
.loginBtn--facebook:hover,
.loginBtn--facebook:focus {
	font-weight: normal;
  background-color: #5B7BD5;
  color:#ffffff;
  font-size: 13px;
  background-image: linear-gradient(#5B7BD5, #4864B1);
}
amp-accordion section[expanded] .show-more {
      display: none;
    }

    amp-accordion section:not([expanded]) .show-less {
      display: none;
    }

    .nested-accordion h4 {
      font-size: 14px;
      background-color: #ddd;
    }

    amp-accordion.hidden-header section[expanded] h4 {
      border: none;
    }
    #content-head {
      display: flex;
    }
    .fruit-title {
      width: 50%;
    }
    .comp-data {
      display: flex;
    }
    .comp-value {
      width: 50%;
      border: 1px solid;
      padding: 5px 18px;
      display: flex;
    }

    /* these styles are not required for the samples to work */
    :root {
      --space-2: 1rem;
      /* 16px */
    }

    amp-accordion.sample {
      margin: var(--space-2);
    }
</style>

<footer style="padding-bottom:0;">


<div class="container">
	<div class="row d-flex">
    <div class="col12 pad0">
        <h2>Our calculators</h2>
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
          </ul>
    </div>
  </div>
  <div class="row d-flex">
    <div class="col12 pad0">
       <div class="col4 pad0">
       <ul>
            <li>
              <a href="privacy.php">Privacy Policy</a>
              <u/l>
            </li>
        </div>
        <div class="col4 pad0">
        <ul>
            <li>
              <a href="about.php">About Us</a>
              </ul>
            </li>
          </div>
          <div class="col4 pad0">
          <ul>
            <li>
              <a href="faq.php">FAQ</a>
              </li>
          </ul>
          </div>
    </div>
  </div>
  <div class="row d-flex">
    <div class="col4 pad0 margR0-auto">
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
        <!--  {{day}}-{{month}}- -->Copyrights {{year}} © All Rights Reserved
      </template>
    </amp-date-display>

   </div>
       <!--cookie-->
       <div class="container">
       <div class="row">
    <amp-user-notification id="my-notification" class="sample-notification" layout="nodisplay">
      <p class="cookieText">By clicking "Accept" or continuing to use our site, you agree to our website's <a href="privacy.php">Privacy Policy</a></p>
        <button on="tap:my-notification.dismiss">I accept</button>
    </amp-user-notification>
  </div>
</div>  
</footer>

