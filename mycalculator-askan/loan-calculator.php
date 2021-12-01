<!doctype html>
<html ⚡>

<head>
    <meta charset="utf-8">
    <title>Loan Calculator</title>
   
   <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
  <link rel="canonical" href="#">
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    

    <?php readfile( getcwd() . "/head.php"); ?>
        <style amp-custom>
            <?php readfile( getcwd() . "/style.css");
            ?>
        </style>
</head>

<body class="tbl">
    <?php  readfile( getcwd() . "/header.php"); ?>

        <section id="main">
            <div class="container">
                <div class="Percentage">
                    <h1 class="m-bottom">Loan Calculator</h1>
                    <p class="desc">MyPercentCalculator is a free online tool to calculate percentages.</p>
                    <!--1s calculation-->
					<div class="Percentage">
						<div class="overflow">
							<div class="form block">
								 <h2>Loan Payment Calculator</h2>
								 <div class="img-cal">
									<amp-img alt="Salary Increment Calculator" src="images/salary-calculator.jpg" width="500" height="300" layout="responsive" class="heartBeat"></amp-img>
								</div>
								<div class="FormWrapper FormWrapper3 formwrapper4">
									 <amp-iframe id="myiframe" title="custom page" 
										layout="responsive" width="600" height="690px"   sandbox="allow-scripts  allow-popups" frameborder="0"
										src="https://www.askantech.com/amp_test/loan-js.php">
									</amp-iframe>

								</div>
							</div>
						</div>
					</div>
                    <div class="share">
                    <!--soical share-->
         <ul>
            <li>
              <amp-social-share width="40" height="40" type="facebook" data-param-app_id="254325784911610"></amp-social-share>
              <amp-social-share width="40" height="40" type="twitter"></amp-social-share>
              <amp-social-share width="40" height="40" type="whatsapp"></amp-social-share>
              <amp-social-share width="40" height="40" type="linkedin"></amp-social-share>
            </li>
            <li>
               <!-- <amp-iframe id="copy" sandbox="allow-scripts" width="120" height="60" frameborder="0"
                  src="https://mypercentcalculator.com/copy.php">
              </amp-iframe> -->
            </li>
          </ul>
                    <div class="comments">
                    <!--comment-->
                    <amp-facebook-comments width="486" height="50" layout="responsive"
                    data-href="https://mypercentcalculator.com/salary-caclulator.php">
                    </amp-facebook-comments>
                </div>

                </div>
            </div>
        </section>
		

 


        <?php readfile( getcwd() . "/footer.php"); ?>

</body>

</html>