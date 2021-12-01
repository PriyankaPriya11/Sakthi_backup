  <!doctype html>
  <html ⚡>

  <head>
      <meta charset="utf-8">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

      <!-------------------------------------------------------->
      <meta property="og:title" content="Percentage Calculators" />
      <meta property="og:type" content="website" />
      <meta property="og:url" content="https://mypercentcalculator.com/" />
      <meta property="og:image" content="https://mypercentcalculator.com/images/percent-calculator.jpg" />
      <meta property="og:description" content="MyPercentCalculator is a free online tool to calculate percentages." />
      <meta property="og:site_name" content="MyPercentCalculator" />
      <meta property="og:image:alt" content="Percentage Calculator" />


      <!---------------------------------------------------------->

      <title>Percentage Calculator</title>

      <link rel="canonical" href="#">

      <!-- <link rel="apple-touch-icon" href="touch-icon-iphone.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/favicon-32x32.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon-32x32.png">
<link rel="apple-touch-icon" sizes="167x167" href="images/favicon-32x32.png">
<link rel="apple-touch-icon" sizes="128x128" href="images/favicon-32x32.png"> -->

      <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
      <?php readfile( getcwd() . "/head.php"); ?>
      <style amp-custom>
      <?php readfile(getcwd() . "/style.css");
      ?>
      </style>
  </head>

  <body class="homePage ss-hm">
      <?php  readfile( getcwd() . "/header.php"); ?>



      <section id="main">
          <div class="container">
              <div class="Percentage">
                  <h1 class="m-bottom">Percentage Calculators</h1>
                  <p class="main-subhead">MyPercentCalculator is a free online tool to calculate percentages.</p>
                  <button class="addToPhone_btn" on="tap:my-lightbox"> Add to Phone </button>
                  <!--1s calculation-->
                  <div class="overflow">
                      <div class="form block" amp-fx="fly-in-bottom">
                          <h2>Percent Calculators</h2>
                          <div class="img-cal">
                              <amp-img alt="Percent Calculator" src="images/percent-calculator.png" width="500"
                                  height="300" layout="responsive" class="heartBeat"></amp-img>
                          </div>


                          <!--1st formula-->
                          <div class="FormBlock">
                              <amp-bind-macro id="calc2" arguments="per2" expression="per2 * 100"></amp-bind-macro>
                              <form id="myform" method="post"
                                  action-xhr="https://www.askantech.com/amp_test/validate.php" target="_blank">
                                  <div class="row dFlex w2">
                                      <div class="row1">
                                          <div class="text1Home">
                                              <label class="label-text homelabel-vi">What is</label>
                                          </div>
                                          <div class="inputHome inputHomes2">
                                              <input type="number" min="1" size="3" id="amount" class="input-fld"
                                                  required name="percentage1"
                                                  on="input-throttled:AMP.setState({getinput:{per2: event.value}});" />
                                          </div>
                                          <div class="text1Home">
                                              <label class="label-text homelabel-vi">% of</label>
                                          </div>
                                          <div class="inputHome inputHomes2" style="width: 183px; ">
                                              <input type="number" min="1" size="7" id="percentage" class="input-fld"
                                                  required name="percentage2"
                                                  on="input-throttled:AMP.setState({getinput:{totl_amt2: event.value}});" />
                                              <div submit-error style="margin-left: -140%; color:red; margin-top:8px;">
                                                  <template type="amp-mustache">
                                                      {{message}}.
                                                  </template>
                                              </div>
                                          </div>
                                          <div class="text1Home">
                                              <label class="label-text homelabel-vi">?</label>
                                          </div>
                                      </div>
                                      <div class="row2">
                                          <div class="row results">
                                              <div class="calculateDiv">
                                                  <input type="submit" value="Calculate" class="calculateBtn">
                                                  <!-- <div class="calculateDiv">
                                                  <button class="a-bouns calculateBtn" type="button" on="tap: AMP.setState({
                                                    mycalc2:{
                                                        value1:  getinput.per2 > 0 ? getinput.totl_amt2 > 0 ? calc2(getinput.per2) / getinput.totl_amt2 : '' : ''
                                                    } 
                                                  })" >Calculate</button> -->
                                              </div>
                                              <!-- <div class="inputHome">
                                                <input type="number" readonly="" [value]="(mycalc2.value1).toFixed(2)" class="input_result input-fld input-center">
                                                </div> -->
                                              <div class="inputHome "
                                                  style="border: 1px solid #ccc;border-radius: 7px;padding: 19px 19px 19px 6px;">
                                                  <div submit-success
                                                      style="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: system-ui;">
                                                      <template type="amp-mustache">
                                                          {{output}}
                                                      </template>
                                                  </div>
                                                  <!--<input type="number" readonly="" [value]="{{output}}" class="input_result input-fld input-center">-->
                                              </div>
                                              <div class="text1Home" style="padding: 6px 5px;">
                                                  <label class="label-text homelabel-vi"></label>
                                              </div>
                                          </div>
                                      </div>
                              
                          </div>

                          <p [text]="charState_fsblock_one" hidden id="msg_fs_one"> </p>
                          <!-- <p [text]="charState_fs_blk_two" hidden id="msg_fs_two"></p> -->
                          </form>
                      </div>

                      <!--2nd formula-->
                      <div class="FormBlock">
                          <amp-bind-macro id="calc3" arguments="totl_amt3" expression="totl_amt3 * 100">
                          </amp-bind-macro>
                          <form id="myform" method="post" action-xhr="https://www.askantech.com/amp_test/validate2.php"
                              target="_blank">
                              <div class="row dFlex w3">
                                  <div class="row1">
                                      <div class="inputHome inputHomes2">
                                          <input type="number" min="1" size="7" id="percentage" class="input-fld"
                                              required name="percentage3"
                                              on="input-throttled:AMP.setState({getinput3:{totl_amt3: event.value}});" />

                                      </div>
                                      <div class="text1Home">
                                          <label class="label-text homelabel-vi">is what percent of</label>
                                      </div>
                                      <div class="inputHome inputHomes2">
                                          <input type="number" min="1" size="3" id="amount" class="input-fld" required
                                              name="percentage4"
                                              on="input-throttled:AMP.setState({getinput3:{per3: event.value}});" />
                                          <div submit-error style="margin-left: -140%; color:red; margin-top:8px;">
                                              <template type="amp-mustache">
                                                  {{message}}.
                                              </template>
                                          </div>
                                      </div>
                                      <div class="text1Home">
                                          <label class="label-text homelabel-vi">?</label>
                                      </div>
                                  </div>
                                  <div class="row2">
                                      <div class="row results">
                                          <div class="calculateDiv">
                                              <input type="submit" value="Calculate" class="calculateBtn">
                                              <!-- <button type="button" class="a-bouns calculateBtn" on="tap: AMP.setState({
                                              mycalc5:{

                                                value1:  getinput5.totl_amt5 > 0 ? getinput5.per5 > 0 ? calc5(getinput5.per5) / (getinput5.totl_amt5) *100 : '' : ''
                                            
                                              } 
                                            })">Calculate</button> -->
                                          </div>
                                          <!-- <div class="inputHome inputhome2">
                                          <input type="number" readonly="" [value]="(mycalc5.value1).toFixed(2)"
                                              class="input_result input-fld">
                                      </div> -->
                                          <div class="inputHome "
                                              style="border: 1px solid #ccc;border-radius: 7px;padding: 19px 19px 19px 6px;min-width: 90px;">
                                              <div submit-success
                                                  style="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: system-ui;">
                                                  <template type="amp-mustache">
                                                      {{output}}
                                                  </template>
                                              </div>
                                          </div>
                                          <div class="text1Home">
                                              <label class="label-text homelabel-vi">%</label>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                              <p [text]="charState_fsblock_two" hidden id="msg_fs_one_two"></p>
                              <!-- <p [text]="charState_snd_blk_two" hidden id="messages_snd_blk_two"></p> -->
                          </form>
                      </div>

                      <!--3rd formula-->
                      <div class="FormBlock">
                          <amp-bind-macro id="calc4" arguments="totl_amt4" expression="totl_amt4 * 100">
                          </amp-bind-macro>
                          <form id="myform" method="post" action-xhr="https://www.askantech.com/amp_test/validate3.php"
                              target="_blank">
                              <div class="row dFlex w4">
                                  <div class="row1">
                                      <div class="inputHome inputHomes2">
                                          <input type="number" min="1" size="3" id="amount" class="input-fld" required
                                              name="percentage5"
                                              on="input-throttled:AMP.setState({getinput4:{out4: event.value}});" />
                                      </div>
                                      <div class="text1Home">
                                          <label class="label-text homelabel-vi">is</label>
                                      </div>
                                      <div class="inputHome inputHomes2">
                                          <input type="number" min="1" size="7" id="percentage" class="input-fld"
                                              required name="percentage6"
                                              on="input-throttled:AMP.setState({getinput4:{totl_amt4: event.value}});" />
                                          <div submit-error style="margin-left: -140%; color:red; margin-top:8px;">
                                              <template type="amp-mustache">
                                                  {{message}}.
                                              </template>
                                          </div>
                                      </div>
                                      <div class="text1Home">
                                          <label class="label-text homelabel-vi">% of what ?</label>
                                      </div>
                                  </div>
                                  <div class="row2">
                                          <div class="row results">
                                              <div class="calculateDiv">
                                                  <input type="submit" value="Calculate" class="calculateBtn">
                                                  <!-- <div class="calculateDiv">
                                                  <button class="a-bouns calculateBtn" type="button" on="tap: AMP.setState({
                                                    mycalc2:{
                                                        value1:  getinput.per2 > 0 ? getinput.totl_amt2 > 0 ? calc2(getinput.per2) / getinput.totl_amt2 : '' : ''
                                                    } 
                                                  })" >Calculate</button> -->
                                              </div>
                                              <!-- <div class="inputHome">
                                                <input type="number" readonly="" [value]="(mycalc2.value1).toFixed(2)" class="input_result input-fld input-center">
                                                </div> -->
                                              <div class="inputHome "
                                                  style="border: 1px solid #ccc;border-radius: 7px;padding: 19px 19px 19px 6px;">
                                                  <div submit-success
                                                      style="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: system-ui;">
                                                      <template type="amp-mustache">
                                                          {{output}}
                                                      </template>
                                                  </div>
                                                  <!--<input type="number" readonly="" [value]="{{output}}" class="input_result input-fld input-center">-->
                                              </div>
                                              <div class="text1Home" style="padding: 6px 5px;">
                                                  <label class="label-text homelabel-vi"></label>
                                              </div>
                                          </div>
                                      </div>
                              </div>
                              <p [text]="charState_fsblock_three" hidden id="msg_fs_three"></p>
                              <!-- <p [text]="charState_thrd_blk_two" hidden id="messages_thrd_blk_two"></p> -->
                          </form>
                      </div>

                      <!--four forula-->
                      <div class="FormBlock">
                          <amp-bind-macro id="calc5" arguments="totl_amt5" expression="totl_amt5"></amp-bind-macro>
                          <form id="myform" method="post" action-xhr="https://www.askantech.com/amp_test/validate4.php"
                              target="_blank">
                              <div class="row dFlex dFlex1  w5">
                                  <div class="row1 row1_copy">
                                      <div class="text1Home">
                                          <label class="label-text homelabel-vi">What % of</label>
                                      </div>
                                      <div class="inputHome inputHomes2">
                                          <input type="number" min="1" size="7" id="percentage" class="input-fld"
                                              required name="percentage7"
                                              on="input-throttled:AMP.setState({getinput5:{totl_amt5: event.value}});" />
                                      </div>
                                      <div class="text1Home">
                                          <label class="label-text homelabel-vi">is</label>
                                      </div>
                                      <div class="inputHome inputHomes2" style="width: 183px; ">
                                          <input type="number" min="1" size="3" id="amount" class="input-fld" required
                                              name="percentage8"
                                              on="input-throttled:AMP.setState({getinput5:{per5: event.value}});" />
                                          <div submit-error style="margin-left: -140%; color:red; margin-top:8px;">
                                              <template type="amp-mustache">
                                                  {{message}}.
                                              </template>
                                          </div>
                                      </div>
                                      <div class="text1Home">
                                          <label class="label-text homelabel-vi">?</label>
                                      </div>
                                  </div>
                                  <div class="row2">
                                      <div class="row results">
                                          <div class="calculateDiv">
                                              <input type="submit" value="Calculate" class="calculateBtn">
                                              <!-- <button type="button" class="a-bouns calculateBtn" on="tap: AMP.setState({
                                              mycalc5:{

                                                value1:  getinput5.totl_amt5 > 0 ? getinput5.per5 > 0 ? calc5(getinput5.per5) / (getinput5.totl_amt5) *100 : '' : ''
                                            
                                              } 
                                            })">Calculate</button> -->
                                          </div>
                                          <!-- <div class="inputHome inputhome2">
                                          <input type="number" readonly="" [value]="(mycalc5.value1).toFixed(2)"
                                              class="input_result input-fld">
                                      </div> -->
                                          <div class="inputHome "
                                              style="border: 1px solid #ccc;border-radius: 7px;padding: 19px 19px 19px 6px;min-width: 90px;">
                                              <div submit-success
                                                  style="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: system-ui;">
                                                  <template type="amp-mustache">
                                                      {{output}}
                                                  </template>
                                              </div>
                                          </div>
                                          <div class="text1Home">
                                              <label class="label-text homelabel-vi">%</label>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <p [text]="charState_fsblock_four" hidden id="msg_fs_four"></p>
                          </form>
                      </div>


                      <!--fifth formula-->
                      <div class="FormBlock">
                          <amp-bind-macro id="calc" arguments="totl_amt6" expression="totl_amt6 / 100">
                          </amp-bind-macro>
                          <form id="myform" method="post" action-xhr="https://www.askantech.com/amp_test/validate5.php"
                              target="_blank">                   
                          <div class="row dFlex w1">
                              <div class="row1">
                                  <div class="inputHome inputhomecopy4 inputHomes2">

                                      <!-- <input type="number"  size="3" min="1" id="amount"  class="input-fld"
                                on="input-throttled:AMP.setState({getinput6:{per6: event.value}});input-debounced:AMP.setState({charState_fsblock_five: event.value <=  0  ? 'Please input numerical values greater than 0' :   getinput6.totl_amt6 == 0 ? 'Please input numerical values greater than 0' : '' }),msg_fs_five.show"/> -->
                                      <input type="number" size="3" min="1" id="amount" class="input-fld" required name="percentage9"
                                          on="input-throttled:AMP.setState({getinput6:{per6: event.value}});" />

                                  </div>
                                  <div class="text1Home">
                                      <label class="label-text homelabel-vi">increased/decreased by
                                  </div>
                                  <div class="inputHome inputhomecopy4 inputHomes2">
                                      <!--<amp-script layout="container" script="hello-world" class="amp-script-sample">-->
                                      <input type="number" size="7" id="percentage" class="input-fld" required name="percentageten"
                                          on="input-throttled:AMP.setState({getinput6:{totl_amt6: event.value}});" />
                                          <div submit-error style="margin-left: -140%; color:red; margin-top:8px;">
                                              <template type="amp-mustache">
                                                  {{message}}.
                                              </template>
                                          </div>
                                      <!--</amp-script>-->
                                  </div>
                                  <div class="text1Home">
                                      <label class="label-text homelabel-vi"> % ?</label>
                                  </div>
                              </div>
                              <div class="row2">
                                          <div class="row results">
                                              <div class="calculateDiv">
                                                  <input type="submit" value="Calculate" class="calculateBtn">
                                                  <!-- <div class="calculateDiv">
                                                  <button class="a-bouns calculateBtn" type="button" on="tap: AMP.setState({
                                                    mycalc2:{
                                                        value1:  getinput.per2 > 0 ? getinput.totl_amt2 > 0 ? calc2(getinput.per2) / getinput.totl_amt2 : '' : ''
                                                    } 
                                                  })" >Calculate</button> -->
                                              </div>
                                              <!-- <div class="inputHome">
                                                <input type="number" readonly="" [value]="(mycalc2.value1).toFixed(2)" class="input_result input-fld input-center">
                                                </div> -->
                                              <div class="inputHome "
                                                  style="border: 1px solid #ccc;border-radius: 7px;padding: 19px 19px 19px 6px;">
                                                  <div submit-success
                                                      style="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: system-ui;">
                                                      <template type="amp-mustache">
                                                          {{output}}
                                                      </template>
                                                  </div>
                                                  <!--<input type="number" readonly="" [value]="{{output}}" class="input_result input-fld input-center">-->
                                              </div>
                                              <div class="text1Home" style="padding: 6px 5px;">
                                                  <label class="label-text homelabel-vi"></label>
                                              </div>
                                          </div>
                                      </div>
                          </div>
                          <p [text]="charState_fsblock_five" hidden id="msg_fs_five"></p>
                          </form>
                      </div>
                  </div>
              </div>



          </div>

          </div>

          </div>
      </section>



      <section id="main">
          <div class="container">
              <div class="Percentage">
                  <div class="overflow">
                      <div class="form block" amp-fx="fly-in-bottom">
                          <!-- <div class="Homecontent">  -->
                          <div class="overflow ">
                              <p class="desc"> <b> Percentage Calculator in Common Phrases</b></p>
                              <p class="desc"> You’ve probably had complex calculations involving percentages that you
                                  needed to solve within a short time, you’ve solved problems that ended up having
                                  inaccurate answers or simply wondered <b>how to find the percent of a number.</b> If
                                  you have wondered about a system that could help save time and provide correct
                                  answers, a <b>percentage calculator</b> is your answer.</p>
                              <p class="desc">Percentages occur often in our calculations. In mathematics, percentages
                                  are ratios or numbers representing fractions of 100. We can calculate for our
                                  percentages with different formulas, depending on the kind of problem we are trying to
                                  solve. Remembering all of these formulas might not always be easy, or we could easily
                                  mix them up and get wrong answers; it can also be time-wasting.</p>
                              <p class="desc">A <b>percent calculator</b> is a great tool for <b>how to find percentage,
                                      how to average percentages</b> and other math problems that involve percentages.
                                  For example, you could easily solve problems like <b>20 percent of 30, 20 percent of
                                      50, 20 percent of 60, 15 percent of 30 or 15 percent of 50.</b> The percent
                                  calculators assist in solving such problems speedily and easily.</p>
                              <p class="desc">Like <b>Math papa</b>, our percentage calculators solve all of these
                                  problems using the right formulas. You no longer have to worry about remembering what
                                  formula goes with what problem or scribbling down long strings of equations and
                                  punching calculators. All the work done for you is free!
                                  <p class="desc">Using these calculators doesn’t need too much information from you,
                                      and the simple user interface makes it user friendly. No matter what your math
                                      question is, all you have to do is enter the values necessary, and click on
                                      calculate. </p>
                                  <p class="desc">It doesn’t matter if the values are high numbers or very low ones; all
                                      the equations are solved fast and accurately. So allow the calculator to assist
                                      you and make your percentage calculations a breeze. Also try out our <b><a
                                              href="/percent-change-calculator.php">percent change</a> and <a
                                              href="/percent-difference.php">percent difference</a><b> calculators and
                                              our <b><a href="/tip-calculator.php">tip calculator</a><b> would prove
                                                      useful to you.</p>
                          </div>
                          <!-- </div> -->
                      </div>
                  </div>


                  <div class="share">
                      <!--soical share-->
                      <ul>
                          <li>
                              <amp-social-share width="40" height="40" type="facebook"
                                  data-param-app_id="254325784911610"></amp-social-share>
                              <amp-social-share width="40" height="40" type="twitter"></amp-social-share>
                              <amp-social-share width="40" height="40" type="whatsapp"></amp-social-share>
                              <amp-social-share width="40" height="40" type="linkedin"></amp-social-share>
                          </li>
                          <li>
                              <!-- <amp-iframe id="copy" sandbox="allow-scripts" width="120" height="60" frameborder="0"
                  src="https://mypercentcalculator.com/copy.php">
              </amp-iframe>  -->

                          </li>
                      </ul>
                  </div>
              </div>
              <div class="comments">
                  <!--comment-->
                  <amp-facebook-comments width="486" height="50" layout="responsive"
                      data-href="https://mypercentcalculator.com/index.php">
                  </amp-facebook-comments>
              </div>

          </div>

          </div>
      </section>





      <?php readfile( getcwd() . "/footer.php"); ?>
    
  </body>

  </html>