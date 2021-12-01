<!doctype html>
<html ⚡>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <title>Discount Calculator</title>
   
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

<body class="dicountCAl tbl ss-dis">
    <?php  readfile( getcwd() . "/header.php"); ?>

        <section>
            <div class="container">
                <div class="Percentage">
                    <h1 class="m-bottom">Percent Off Calculator</h1>
                    <p class="main-subhead">MyPercentCalculator is a free online tool to calculate percentages.</p>
                    <button  class="addToPhone_btn" on="tap:my-lightbox"> Add to Phone </button>
                    <div class="overflow">
                        <div class="form block calContainer" amp-fx="fly-in-bottom">
                            <h2>Discount Calculator</h2>
                            <div class="img-cal">
                                <amp-img alt="Discount Calculator" src="images/discount-calculator.png" width="500" height="300" layout="responsive" class="heartBeat"></amp-img>
                            </div>
                            <amp-bind-macro id="calc8" arguments="totl_amt8, per8" expression="totl_amt8 / 100"></amp-bind-macro>
                            <form id="myform" method="post"
                                  action-xhr="https://www.askantech.com/amp_test/discount_validate1.php" target="_blank" >
                            <div class=" FormWrapper">
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text">Original price</label>
                                    </div>
                                    <!-- oninvalid="setCustomValidity('Must Be Longer Than 5 Characters');" -->
                                    <div class="input">
                                        <input type="number" min="1" size="3" id="amount" class="input-fld" on="input-throttled:AMP.setState({getinput8:{per8: event.value}});" required name ="value1" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text">Percent off</label>
                                    </div>
                                    <div class="input">
                                        <input type="number"    min="0"  max="100" size="3" id="percentage" class="input-fld" on="input-throttled:AMP.setState({getinput8:{totl_amt8: event.value}});" required name ="value2" />
                                    </div>
                                    <div class="text2">
                                        <label class="label-text">%</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="calculateDiv2">
                                        <!-- <button type="button" class="a-bouns calculateBtn" on="tap: AMP.setState({
                                            mycalc8:{
                                                value1:   getinput8.per8  > 0 ? getinput8.totl_amt8  > 0  ? calc8(getinput8.totl_amt8 * getinput8.per8) :'':'',
                                                value2:   getinput8.per8  > 0 ? getinput8.totl_amt8  > 0  ? (getinput8.per8 - calc8(getinput8.totl_amt8 * getinput8.per8)):'':''
                                            } 
                                        })">Calculate</button> -->
                                        <!-- <p [text]="charState_fsblock_one" hidden id="msg_fs_one"></p> -->
                                        <input type="submit" value="Calculate" id="calculateBtn" class="calculateBtn">
                                    </div>
                                </div>
                                <div class="row">
                                          <div submit-success style ="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                                <template type="amp-mustache">
                                                <div class="row">
                                                    <div class="text1 textheight">
                                                        <label class="label-text">Final price</label>
                                                    </div>
                                                    <div class="inputHome inputhomecopy dis_cal_01_6" style ="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                                    {{output1}}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="text1 textheight">
                                                        <label class="label-text">You save</label>
                                                    </div>
                                                    <div class="inputHome inputhomecopy dis_cal_01_6" style ="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                                    {{output2}}
                                                    </div>
                                                  </div>
                                                </template>
                                               
                                            </div>
                                            <!--<input type="number" readonly="" [value]="{{output}}" class="input_result input-fld input-center">-->
                                    </div>
                                <!-- <div class="row">
                                    <div class="text1">
                                        <label class="label-text">You save</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="1" readonly="" [value]="(mycalc8.value1).toFixed(2)" class="input_result input-fld">
                                    </div>

                                </div> -->
                                <div submit-error style="color:red">
                                      <template type="amp-mustache">
                                          {{message}}.
                                      </template>
                                  </div>        
                            </div>
                             </form>               
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="Percentage">

                    <!--1s calculation-->
                    <div class="overflow">
                        <div class="form block" amp-fx="fly-in-bottom">
                            <h2>Percentage Off Calculator</h2>
                            <div class="img-cal">
                                <amp-img alt="Percentage Off Calculator " src="images/discount-calculator.png" width="500" height="300" layout="responsive" class="heartBeat"></amp-img>
                            </div>
                            <amp-bind-macro id="calc9" arguments="totl_amt9" expression="totl_amt9 / 100"></amp-bind-macro>
                            <form id="myform" method="post"
                                  action-xhr="https://www.askantech.com/amp_test/discount_validate2.php" target="_blank" >
                            <div class="row FormWrapper FormWrapper2">
                                <div class="row">
                                    <div class="text1 text1copy pri_af_dis_nw">
                                        <label class="label-text">Original price</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="1" size="3" id="amount" class="input-fld" on="input-throttled:AMP.setState({getinput9:{per9: event.value}});" required name ="value3" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1 text1copy pri_af_dis_nw">
                                        <label class="label-text">Percent off</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="0" size="3" max="100" id="percentage" class="input-fld" on="input-throttled:AMP.setState({getinput9:{totl_amt9: event.value}});" required name ="value4" />
                                    </div>
                                    <div class="text2">
                                        <label class="label-text">%</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1 text1copy pri_af_dis_nw">
                                        <label class="label-text">VAT(TAX)</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="0" id="percentage" class="input-fld pb-0" on="input-throttled:AMP.setState({getinput9:{vat9: event.value}});" required name ="value5" />
                                    </div>
                                    <div class="text2">
                                        <label class="label-text">%</label>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="calculateDiv2">
                                        <!-- <button type="button" class="a-bouns calculateBtn" on="tap: AMP.setState({
                                        mycalc9:{
                                            value3: calc9(getinput9.totl_amt9) * ((+getinput9.per9) + (+ getinput9.vat9)),
                                            value4: (+getinput9.per9) + (+ getinput9.vat9) -  (calc9(getinput9.totl_amt9) * ((+getinput9.per9) + (+ getinput9.vat9))),
                                            value5:  (+getinput9.per9) + (+ getinput9.vat9)
                                        } 
                                    })">Calculate</button> -->
                                        <!-- <p [text]="charState_fsblock_three" hidden id="msg_fs_three"></p> -->
                                        <input type="submit" value="Calculate" class="calculateBtn calculateBtn3">
                                    </div>
                                </div>
                                <div class="row">
                                    <div submit-success style ="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                        <template type="amp-mustache">
                                            <div class="row">
                                                <div class="text1 text1copy textheight pri_af_dis_nw">
                                                    <label class="label-text padL27" style="line-height: 24px;">Original price with VAT(TAX)</label>
                                                </div>
                                                <div class="inputHome inputhomecopy inputhomecopy3 dis_cal_01_6 dis_mobile_06" style ="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                                    {{output1}}
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="text1 text1copy textheight pri_af_dis_nw">
                                                    <label class="label-text padL27" style="line-height: 24px;">Sales price with VAT(TAX)</label>
                                                </div>
                                                <div class="inputHome inputhomecopy inputhomecopy3 dis_cal_01_6 dis_mobile_06" style ="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                                    {{output2}}
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="text1 text1copy textheight pri_af_dis_nw">
                                                    <label class="label-text">Savings</label>
                                                </div>
                                                <div class="inputHome inputhomecopy inputhomecopy3 dis_cal_01_6 dis_mobile_06" style ="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                                    {{output3}}
                                                </div>
                                            </div>
                                            </template>
                                        </div>      
                                    </div>
                                    <div submit-error style="color:red">
                                      <template type="amp-mustache">
                                          {{message}}.
                                      </template>
                                  </div>        
                                 </div>
                             </form>  
                            </div>
                        </div>
                </div>
        </section>

        <!-- fixed amount calculator -->


        <section>
            <div class="container">
                <div class="Percentage">

                    <!--1s calculation-->
                    <div class="overflow">
                        <div class="form block" amp-fx="fly-in-bottom">
                            <h2>FIXED AMOUNT OFF CALCULATOR</h2>
                            <div class="img-cal">
                                <amp-img alt="Salary Increment Calculator" src="images/salary-calculator.png" width="500" height="300" layout="responsive" class="heartBeat"></amp-img>
                            </div>
                            <amp-bind-macro id="calc9" arguments="totl_amt9" expression="totl_amt9 / 100"></amp-bind-macro>
                            <form id="myform" method="post"
                                  action-xhr="https://www.askantech.com/amp_test/discount_validate3.php" target="_blank" >
                            <div class="row FormWrapper FormWrapper2 FormWrapper13 prce_bfr_height dis_cal_grey_space">
                                <div class="row">
                                    <div class="text1 text1copy cpy_1">
                                        <label class="label-text">Price before discount</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="1" size="3" id="amount" class="input-fld" on="input-throttled:AMP.setState({getinput9:{per9: event.value}});" required name ="value6" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1 text1copy cpy_1">
                                        <label class="label-text">Discount amount</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="1" size="7" id="percentage" class="input-fld" on="input-throttled:AMP.setState({getinput9:{totl_amt9: event.value}});" required name ="value7" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="calculateDiv2">
                                        <input type="submit" value="Calculate" class="calculateBtn calculateBtn3">
                                    </div>
                                </div>
                                <div class="row">
                                    <div submit-success style ="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                        <template type="amp-mustache">
                                            <div class="row">
                                                <div class="text1 text1copy textheight pri_af_dis_nw">
                                                    <label class="label-text padL27" style="line-height: 24px;">Price after discount</label>
                                                </div>
                                                <div class="inputHome inputhomecopy inputhomecopy3 dis_cal_01_6 dis_mobile_06 dis_en_0506" style ="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                                    {{output1}}
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="text1 text1copy textheight pri_af_dis_nw">
                                                    <label class="label-text padL27" style="line-height: 24px;">Discount percentage</label>
                                                </div>
                                                <div class="inputHome inputhomecopy inputhomecopy3 dis_cal_01_6 dis_mobile_06 dis_en_0506" style ="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                                    {{output2}}
                                                </div>
                                                <div class="text2 dis_cal_label_nw">
                                        <label class="label-text">%</label>
                                    </div>
                                            </div>
                                            </template>
                                        </div>      
                                    </div>
                                    <div submit-error style="color:red">
                                      <template type="amp-mustache">
                                          {{message}}.
                                      </template>
                                  </div>        
                                 </div>
                             </form>  
                            </div>
                        </div>
                </div>
        </section>
           <!-- before and after price calculator --> 
                              
        <section>
            <div class="container">
                <div class="Percentage">

                    <!--1s calculation-->
                    <div class="overflow">
                        <div class="form block" amp-fx="fly-in-bottom">
                            <h2>BEFORE AND AFTER PRICE</h2>
                            <div class="img-cal">
                                 <amp-img alt="Salary Increment Calculator" src="images/salary-calculator.png" width="500" height="300" layout="responsive" class="heartBeat"></amp-img>
                            </div>
                            <amp-bind-macro id="calc9" arguments="totl_amt9" expression="totl_amt9 / 100"></amp-bind-macro>
                            <form id="myform" method="post"
                                  action-xhr="https://www.askantech.com/amp_test/discount_validate4.php" target="_blank" >
                            <div class="row FormWrapper FormWrapper2 FormWrapper13 prce_bfr_height ss-form" >
                                <div class="row">
                                    <div class="text1 text1copy"  style="min-width:140px">
                                        <label class="label-text">Old price</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="1" size="3" id="amount" class="input-fld" on="input-throttled:AMP.setState({getinput9:{per9: event.value}});" required name ="value8" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1 text1copy" style="min-width:140px">
                                        <label class="label-text">New price</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="1" size="7" id="percentage" class="input-fld" on="input-throttled:AMP.setState({getinput9:{totl_amt9: event.value}});" required name ="value9" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="calculateDiv2">
                                        <input type="submit" value="Calculate" class="calculateBtn calculateBtn3">
                                    </div>
                                </div>
                                <div class="row">
                                    <div submit-success style ="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                        <template type="amp-mustache">
                                            <div class="row">
                                                <div class="text1 text1copy textheight" style="min-width:140px">
                                                    <label class="label-text padL27" style="line-height: 24px;">Percent off</label>
                                                </div>
                                                <div class="inputHome inputhomecopy inputhomecopy3 dis_cal_01_6 dis_mobile_06" style ="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                                    {{output1}}
                                                </div>
                                                <div class="text2 dis_cal_label_nw">
                                        <label class="label-text">%</label>
                                    </div>

                                            </div>
                                            <div class="row">
                                                <div class="text1 text1copy textheight" style="min-width:140px">
                                                    <label class="label-text padL27" style="line-height: 24px;">Savings</label>
                                                </div>
                                                <div class="inputHome inputhomecopy inputhomecopy3 dis_cal_01_6 dis_mobile_06" style ="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                                    {{output2}}
                                                </div>
                                            </div>
                                            </template>
                                        </div>      
                                    </div>
                                    <div submit-error style="color:red">
                                      <template type="amp-mustache">
                                          {{message}}.
                                      </template>
                                  </div>        
                                 </div>
                             </form>  
                            </div>
                        </div>
                </div>
        </section>



        <!-- <section id="Tipmain">
            <div class="container">
            <div class="Percentage">
                    <div class="overflow">
                        <div class="form block">
                             <h2>FIXED AMOUNT OFF CALCULATOR</h2>
                             <div class="img-cal">
                                <amp-img alt="Salary Increment Calculator" src="images/salary-calculator.png" width="500" height="300" layout="responsive" class="heartBeat"></amp-img>
                            </div>
                            <div class="FormWrapper FormWrapper3">
                                 <amp-iframe id="myiframe" title="custom page" 
                                    layout="responsive" width="300" height="350"  scrolling="no"  sandbox="allow-scripts  allow-popups" frameborder="0"
                                    src="https://www.askantech.com/amp_test/tip-js-boxtwo.php">
                                </amp-iframe>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- before and after price calculator --> 

        <!-- <section id="Tipmain">
            <div class="container">
            <div class="Percentage">
                    <div class="overflow">
                        <div class="form block">
                             <h2>BEFORE AND AFTER PRICE</h2>
                             <div class="img-cal">
                                <amp-img alt="Salary Increment Calculator" src="images/salary-calculator.png" width="500" height="300" layout="responsive" class="heartBeat"></amp-img>
                            </div>
                            <div class="FormWrapper FormWrapper3">
                                 <amp-iframe id="myiframe" title="custom page" 
                                    layout="responsive" width="300" height="350" scrolling="no"  sandbox="allow-scripts  allow-popups" frameborder="0"
                                    src="https://www.askantech.com/amp_test/tip-js-boxthree.php">
                                </amp-iframe>

                            </div>
                        </div>
                    </div>
            </div>
        </section> -->
<!-- content description -->





        <section>
            <div class="container">
                <div class="Percentage">

                    <!--1s calculation-->
                    <div class="overflow">
                        <div class="form block" amp-fx="fly-in-bottom">
                            <!-- <div class="Homecontent">  -->
             <div class="overflow">
                    <p class="desc"> Calculating a discount is a useful math skill to have. It comes in handy at restaurants, sales in stores, or even at your own business. It is thrilling to <b>know</b> that there’s a discounted sale going on, or that certain items have some percent off.</p>
                    <p class="desc"> For some people, they can easily do the math in their heads and <b>know</b> the discounted prices themselves, while others turn to the internet to ask how to calculate discounts. </p>
                    <p class="desc">If you are having a tough time figuring out discounts, percent off, or you are looking for a better way to calculate them that is guaranteed to give accurate answers, this discount calculator and <b>percentage off calculator</b> is sure to save you a lot of trouble and time.</p>
                    <p class="desc">Actually, “a discount” and “percent off” mean the exact same thing. Imagine for a minute that a particular store has clearance sales, and all of the goods are <b>10% off.</b> That means there’s a 10% discount.</p>
                    <p class="desc">Our calculators will help you figure out <b>how much</b> money you save and <b>how much</b> you would actually have to pay. They are straightforward to use and are sure to deliver the most accurate answers every time, without delay.</p>
                    <p class="desc"> <b>How to use the Discount Calculator</b></p>
                    <p class="desc">Keeping it basic to ensure that you don’t get confused, using the calculator only requires you to enter the ‘original price,’ the ‘percentage off,’ and then click enter. The result immediately comes up, showing you the final price after the discount and <b>how much</b> you save. </p>
                    <p class="desc">For example, the original price on an item is $900, and there’s a 5% discount, once you enter the values and click ‘calculate,’ the system calculates quickly using its formula and shows you that your final price is $855.00 and you save $45.00. It is that simple, fast, and accurate!</p>
                    <p class="desc">Similarly, also, the <b>percent off calculator</b> requires the original price, percent off, and VAT if there is, and it calculates using its own formula to give you the sales price and your savings.</p>
                    <p class="desc">You no longer have to do any calculations; Let our calculators do all the work. We offer calculators on other things; you can check out our <b><a href="/final-grade-calculator.php">grade calculator</a></b> for academic uses or even our <b><a href="/tip-calculator.php">tip calculator</a></b> that could save you from social awkwardness, and many more.</p>
               </div>
            <!-- </div> -->
            
                        
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
       data-href="https://mypercentcalculator.com/percentage-off.php">
    </amp-facebook-comments>
</div>
                    </div>
                </div>
        </section>


        <?php readfile( getcwd() . "/footer.php"); ?>

        <!-- <button id="scrollToTopButton" on="tap:top-page.scrollTo(duration=200)" class="scrollToTop relative"><span><i class="fa fa-angle-up" aria-hidden="true"></i></span></button>
 -->
 <!--<script>
            var userSelection = document.getElementsByClassName('input-fld');
            for(var i = 0; i < userSelection.length; i++) {
              (function(index) {
                userSelection[index].addEventListener("keyup", function(event) {
                  if (event.keyCode === 13) { 
                    if(index ==0 || index ==1)
                    {
                      var loanAmount1= document.getElementsByClassName("input-fld").item(0).value;
                      var loanpercentage= document.getElementsByClassName("input-fld").item(1).value;
                      if(loanAmount1 !='' && loanpercentage !='')
                      {
                        document.getElementsByClassName('calculateBtn')[0].click();
                      }
                    }
                    else if(index ==4 || index ==5 || index==6)
                    {
                      var loanAmount2= document.getElementsByClassName("input-fld").item(4).value;
                      var loanpercentage2= document.getElementsByClassName("input-fld").item(5).value;
                      var vat= document.getElementsByClassName("input-fld").item(6).value;
                      if(loanAmount2 !='' && loanpercentage2 !='' && vat !='') 
                      {
                        document.getElementsByClassName('calculateBtn')[1].click();
                      }
                    }
                    }
                  
                })
              })(i);
            }

          </script>-->
</body>

</html>