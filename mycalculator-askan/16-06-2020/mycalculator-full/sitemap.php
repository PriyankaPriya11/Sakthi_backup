<!doctype html>
<html ⚡>

<head>
    <meta charset="utf-8">
    <title>SiteMap</title>
   
   <link rel="icon" type="image/png" sizes="32x32" href="images/apple-touch-icon.png">
   <meta name="apple-mobile-web-app-capable" content="AppTitle">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="167x167" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="128x128" href="images/apple-touch-icon.png">

  <link rel="canonical" href="#">
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    

    <?php readfile( getcwd() . "/head-static.php"); ?>
        <style amp-custom>
            <?php readfile( getcwd() . "/style.css");
            ?>
        </style>
</head>

<body class="tbl">
    <?php  readfile( getcwd() . "/header.php"); ?>
    <div class="ss-sitemap">
    <div class="container ss-smp">
    <!--<button class="addToPhone_btn" on="tap:my-lightbox"> Add to Phone </button>-->
        <div class="row d-flex">
            <div class="col12 pad0">
                <h2>Site Map</h2>
                <ul>
                    <li>
                        <a href="index.php">Percentage Calculators</a>
                    </li>
                    <li>
                        <a href="percent-change-calculator.php">Percent Change</a>
                    </li>
                    <li>
                        <a href="percent-difference.php">Percent Difference</a>
                    </li>
                    <li>
                        <a href="discount-calculator.php">Discount Calculator</a>
                    </li>
                    <li>
                        <a href="tip-calculator.php">Tip Calculator</a>
                    </li>
                    <li>
                        <a href="final-grade-calculator.php">Grade Calculator</a>
                    </li>
                    <li>
                        <a href="paycheck-calculator.php">Salary Calculator</a>
                    </li>
                    <li>
                        <a href="loan-calculator.php">Loan Calculator</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
	 <?php readfile( getcwd() . "/footer.php"); ?>

</body>

</html>