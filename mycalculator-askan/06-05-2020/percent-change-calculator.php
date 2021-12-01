<!doctype html>
<html ⚡>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!-------------------------------------------------------->
	<meta property="og:title" content="Percent Change Calculator" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://mypercentcalculator.com/percent-change-calculator.php" />
	<meta property="og:image" content="https://mypercentcalculator.com/images/percent-increase-calculator.jpg" />
	<meta property="og:description" content="MyPercentCalculator is a free online tool to calculate percentages." />
	<meta property="og:site_name" content="MyPercentCalculator" />
	<meta property="og:image:alt" content="Percent Change" />
	
	
	<!---------------------------------------------------------->
	
    
    <title>Percent Change</title>
   <link rel="icon" type="image/png" sizes="32x32" href="images/apple-touch-icon.png">
   <meta name="apple-mobile-web-app-capable" content="AppTitle">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="167x167" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="128x128" href="images/apple-touch-icon.png">

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
        <section>
            <div class="container">
                <div class="Percentage">
                    <h1 class="m-bottom">Percent Change Calculator</h1>
                    <p class="main-subhead">MyPercentCalculator is a free online tool to calculate percentages.</p>
                    <!--1s calculation-->
                     <button  class="addToPhone_btn" on="tap:my-lightbox"> Add to Phone </button>
                    <div class="overflow">
                        <div class="form block" amp-fx="fly-in-bottom">
                            <h2>Percent Increase Calculator</h2>
                            <div class="img-cal">
                                <amp-img alt="Percent Increase Calculator" src="images/percent-increase-calculator.png" width="500" height="300" layout="responsive" class="heartBeat"></amp-img>
                            </div>
                            <div>
                            
                           
                                <!-- <amp-img on="tap:lightbox1"  role="button" tabindex="0" aria-describedby="imageDescription" alt="contactinfo" title="contactinfor" src="/images/contactinfo.png" width="300" height="246"></amp-img> -->
                                <!-- <amp-img on="tap:lightbox1"  role="button" tabindex="0" aria-describedby="imageDescription" alt="contactinfo" title="contactinfor" src="/images/android-example2.png" width="300" height="246"></amp-img> -->
                              </div>
                            <amp-bind-macro id="calc6" arguments="per6, totl_amt6" expression="per6 + 0"></amp-bind-macro>
                            <div class="FormWrapper FormWrapper4">
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text">Old Value (Value 1)</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="1" size="3" id="amount" class="input-fld" on="input-throttled:AMP.setState({getinput6:{per6: event.value}});input-debounced:AMP.setState({charState_fsblock_one: event.value <=  0  ? 'Please input numerical values greater than 0' :   getinput6.totl_amt6 <= 0 ? 'Please input numerical values greater than 0' : event.value <= getinput6.totl_amt6 ? '' :  'Please input a value greater than or equal to the first value' }),msg_fs_one.show" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text">New Value (Value 2)</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="1" size="7" id="percentage" class="input-fld" on="input-throttled:AMP.setState({getinput6:{totl_amt6: event.value}});input-debounced:AMP.setState({charState_fsblock_one: event.value <=  0  ? 'Please input numerical values greater than 0' :   getinput6.per6 <= 0 ? 'Please input numerical values greater than 0' :  event.value >= getinput6.per6 ? '' :  'Please input a value greater than or equal to the first value' }),msg_fs_one.show" />
                                    </div>
                                    <div class="text2">
                                        <label class="label-text">?</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="calculateDiv2">
                                        <button type="button" class="a-bouns calculateBtn" on="tap: AMP.setState({
                             mycalc6:{
                                 value6:  getinput6.totl_amt6 > 0 ? getinput6.per6 > 0 ? getinput6.totl_amt6 > getinput6.per6 ? calc6((getinput6.totl_amt6 - getinput6.per6) / getinput6.per6) * 100:'':'':''
                             } 
                           })">Calculate</button>
                           <p [text]="charState_fsblock_one" hidden id="msg_fs_one"></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text">Result</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" readonly="" [value]="(mycalc6.value6).toFixed(2)" class="input_result input-fld">
                                    </div>
                                    <div class="text2">
                                        <label class="label-text"> % Increase</label>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
            </div>
            </div>
            </div>
        </section>

         <section>
            <div class="container">
                <div class="Percentage">

                    <!--2nd calculation-->
                    <div class="overflow">
                        <div class="form block" amp-fx="fly-in-bottom">
                            <h2>Percent Decrease Calculator</h2>
                            <div class="img-cal">
                                <amp-img alt=" Percent Decrease calculator" src="images/percent-decrease-calculator.png" width="500" height="300" layout="responsive" class="heartBeat"></amp-img>
                            </div>
                            <amp-bind-macro id="calc7" arguments="per7, totl_amt7" expression="per7 + 0"></amp-bind-macro>
                            <div class="FormWrapper FormWrapper4">
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text">Old Value ( Value 1)</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="1" size="3" id="amount" class="input-fld" on="input-throttled:AMP.setState({getinput7:{per7: event.value}});input-debounced:AMP.setState({charState_fsblock_two: event.value <=  0  ? 'Please input numerical values greater than 0' :   getinput7.totl_amt7 <= 0 ? 'Please input numerical values greater than 0' : event.value >= getinput7.totl_amt7 ? '' :  'Please input a value less than or equal to the first value' }),msg_fs_two.show" />
                                    </div>
                                </div>
                                <div class="row ss-row">
                                    <div class="text1">
                                        <label class="label-text">New Value ( Value 2)</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="1" size="7" id="percentage" class="input-fld" on="input-throttled:AMP.setState({getinput7:{totl_amt7: event.value}});input-debounced:AMP.setState({charState_fsblock_two: event.value <= 0 ?  'Please input numerical values greater than 0' : getinput7.per7 <= 0 ? 'Please input numerical values greater than 0' : event.value <= getinput7.per7 ? '' :  'Please input a value less than or equal to the first value'}),msg_fs_two.show" />
                                    </div>
                                    <div class="text2">
                                        <label class="label-text">?</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="calculateDiv2">
                                        <button type="button" class="a-bouns calculateBtn" on="tap: AMP.setState({
                             mycalc7:{
                                 value7: getinput7.per7 > 0 ? getinput7.totl_amt7 > 0 ?  getinput7.totl_amt7 < getinput7.per7 ? calc7((getinput7.per7 - getinput7.totl_amt7) / getinput7.per7) * 100 :'':'' : ''
                             } 
                           })">Calculate</button>
                           <p [text]="charState_fsblock_two" hidden id="msg_fs_two"></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text">Result</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" readonly="" [value]="(mycalc7.value7).toFixed(2)" class="input_result input-fld">
                                    </div>
                                    <div class="text2">
                                        <label class="label-text"> % Decrease</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section> 
        <!-- content page -->
        <section>
            <div class="container">
                <div class="Percentage">
                    <div class="overflow">
                        <div class="form block" amp-fx="fly-in-bottom">
                            <!-- <h2>Percent Decrease Calculator</h2> -->
                            <!-- <div class="overflow Contentpad"> -->
                     <div class="overflow"> 
                    <p class="desc">We make countless comparisons daily, how expensive is that person’s shirt compared with mine? How well did your favorite soccer team perform this season compared to the last? By how much did your pay go up in the last year? We make these comparisons daily and to make it easier we made this <b>online percent change calculator.​</b></p>
                    <p class="desc">Change they say is the only constant thing and knowing how much of it occurs per time is quite rewarding. The <b>percent​ change calculator</b> lets you know what that <b>percent change</b> is letting you make informed decisions.</p>

                    <p class="desc"> <b> Percentage Increase Calculator</b></p>

                    <p class="desc">This <b>percentage increase</b> calculator helps you calculate the <b>percentage increase</b> from what it previously was, to a new value. So if you notice a hike in movie ticket prices, an increase in the size of your favorite soda bottle or even a positive change in your grades, this <b>percentage increase calculator</b> makes it easy and fast to figure out the percentage of increase.</p>
                    <p class="desc">Just like a proficient <b>rate​ of change calculator</b>, the focus is on what sort of change you are interested in. The <b>percent​ increase calculator</b> gives only accurate answers every time it is used thanks to an efficient algorithm. So you can be sure your results are error-free.</p>
                    <p class="desc"> Just enter the lower value in the first box and the higher value in the second box and then the calculator does the work.</p>
                    <p class="desc">Here’s our formula: </a></p>
                    <p class="desc"> Percentage Increase = Increase/Change in  Value (Value 2 - Value 1)/Original Value (Value 1)*100</p>
                    <p class="desc"> <b> Percentage Decrease Calculator</b></p>
                    <p class="desc">A decrease can be a good thing at times, you could want that new phone, but you can’t afford it. Luckily for you, there’s this Black Friday sale, you are able to afford it due to a decrease in price. What’s the value of the decrease in percentage? A <b>percentage decrease calculator</b> will help in figuring that out.</p>
                    <p class="desc">
                    Have you been working out for your summer body and you would like to <b>calculate</b> the decrease in your weight? This calculator makes it easier to know.
                    </p>
                    <p class="desc"></p>
                    <p class="desc">Enter the higher value in the first textbox and the smaller value into the second textbox. Click the calculate button and you would have your results.</p>
                    <p class="desc">Here’s how we calculate the <b>percentage decrease:</b></p>
                    <p class="desc">   Percentage Decrease = Decrease/Change in  Value (Value 1 - Value 2)/Original Value (Value 1) *100</p>
                    <p class="desc">Use these calculators to figure out the percentage increase/decrease in whatever you would like to calculate. It is not just helpful for accurate answers, but it also saves you a lot of time that you could spend on other things, and it eliminates stress by being efficient, easy to use, effective, and it is absolutely free to use.</p>
                    <p class="desc">You can also check out our <b><a href="/percent-difference.php"> Percentage Difference Calculator</a></b>,<b><a href="/tip-calculator.php">  Tip Calculator</a></b>,<b><a href="/paycheck-calculator.php">  Salary calculator</a></b>, etc.</p>

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
                                                        <!--<amp-iframe id="copy" sandbox="allow-scripts" width="120" height="60" frameborder="0"
                                                            src="https://mypercentcalculator.com/copy.php">
                                                        </amp-iframe>-->
                                                        </li>
                                                    </ul>
                                    <div class="comments">
                                        <!--comment-->
                                        <amp-facebook-comments width="486" height="50" layout="responsive"
                                        data-href="https://mypercentcalculator.com/percentage-change.php">
                                        </amp-facebook-comments>
                                    </div>
                                    </div>
                </div>
            </div>
        </section>
        <?php readfile( getcwd() . "/footer.php"); ?>
        <!--<script>-->
        <!--    var userSelection = document.getElementsByClassName('input-fld');-->
        <!--    for(var i = 0; i < userSelection.length; i++) {-->
        <!--      (function(index) {-->
        <!--        userSelection[index].addEventListener("keyup", function(event) {-->
        <!--          if (event.keyCode === 13) { -->
        <!--            if(index ==0 || index ==1)-->
        <!--            {-->
        <!--              var loanAmount1= document.getElementsByClassName("input-fld").item(0).value;-->
        <!--              var loanpercentage= document.getElementsByClassName("input-fld").item(1).value;-->
        <!--              if(loanAmount1 !='' && loanpercentage !='')-->
        <!--              {-->
        <!--                document.getElementsByClassName('calculateBtn')[0].click();-->
        <!--              }-->
        <!--            }-->
        <!--            else if(index ==3 || index ==4)-->
        <!--            {-->
        <!--              var loanAmount2= document.getElementsByClassName("input-fld").item(3).value;-->
        <!--              var loanpercentage2= document.getElementsByClassName("input-fld").item(4).value;-->
        <!--              if(loanAmount2 !='' && loanpercentage2 !='')-->
        <!--              {-->
        <!--                document.getElementsByClassName('calculateBtn')[1].click();-->
        <!--              }-->
        <!--            }-->
        <!--          }-->
        <!--        })-->
        <!--      })(i);-->
        <!--    }-->

        <!--  </script>-->
</body>

</html>