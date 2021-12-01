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
      <link rel="icon" type="image/png" sizes="32x32" href="images/apple-touch-icon.png">
      <link rel="canonical" href="#">

      <!-- <link rel="apple-touch-icon" href="touch-icon-iphone.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/favicon-32x32.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon-32x32.png">
<link rel="apple-touch-icon" sizes="167x167" href="images/favicon-32x32.png">
<link rel="apple-touch-icon" sizes="128x128" href="images/favicon-32x32.png"> -->
      <meta name="apple-mobile-web-app-capable" content="AppTitle">
      <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
      <link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon.png">
      <link rel="apple-touch-icon" sizes="167x167" href="images/apple-touch-icon.png">
      <link rel="apple-touch-icon" sizes="128x128" href="images/apple-touch-icon.png">

      <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
      <?php readfile( getcwd() . "/head.php"); ?>
      <style amp-custom>
      <?php readfile(getcwd() . "/style.css");
      ?>
      </style>
  </head>

  <body class="homePage">
      <?php  readfile( getcwd() . "/header.php"); ?>



      <section id="main">
          <div class="container">
              <div class="Percentage">
                  <h1 class="m-bottom">Percentage Calculators</h1>
                  <p class="desc">MyPercentCalculator is a free online tool to calculate percentages.</p>
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
                              <div class="row dFlex w2">
                                  <div class="row1">
                                      <div class="text1Home">
                                          <label class="label-text">What is</label>
                                      </div>
                                      <div class="inputHome">
                                          <input type="number" min="1" size="3" id="amount" class="input-fld"
                                              on="input-throttled:AMP.setState({getinput:{per2: event.value}});input-debounced:AMP.setState({charState_fsblock_one: event.value <=  0  ? 'Please input numerical values greater than 0' :  getinput.totl_amt2 <= 0 ? 'Please input numerical values greater than 0' : '' }),msg_fs_one.show" />
                                      </div>
                                      <div class="text1Home">
                                          <label class="label-text">% of</label>
                                      </div>
                                      <div class="inputHome">
                                          <input type="number" min="1" size="7" id="percentage" class="input-fld"
                                              on="input-throttled:AMP.setState({getinput:{totl_amt2: event.value}});input-debounced:AMP.setState({charState_fsblock_one: event.value <= 0 ?  'Please input numerical values greater than 0' : getinput.per2 <= 0 ? 'Please input numerical values greater than 0' : ''}),msg_fs_one.show" />
                                      </div>
                                      <div class="text1Home">
                                          <label class="label-text">?</label>
                                      </div>
                                  </div>
                                  <div class="row2">
                                      <div class="row results">
                                          <div class="calculateDiv">
                                              <button class="a-bouns calculateBtn" type="button" on="tap: AMP.setState({mycalc2:{value1:  getinput.per2 > 0 ? getinput.totl_amt2 > 0 ? calc2(getinput.per2) / getinput.totl_amt2 : '' : ''} })">Calculate</button>
                                          </div>
                                          <div class="inputHome">
                                              <input type="number" readonly="" [value]="(mycalc2.value1)"
                                                  class="input_result input-fld input-center">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <p [text]="charState_fsblock_one" hidden id="msg_fs_one"> </p>
                              <!-- <p [text]="charState_fs_blk_two" hidden id="msg_fs_two"></p> -->
                          </div>

                          <!--2nd formula-->
                          <div class="FormBlock">
                              <amp-bind-macro id="calc3" arguments="totl_amt3" expression="totl_amt3 * 100">
                              </amp-bind-macro>
                              <div class="row dFlex w3">
                                  <div class="row1">
                                      <div class="inputHome">
                                          <input type="number" min="1" size="7" id="percentage" class="input-fld"
                                              on="input-throttled:AMP.setState({getinput3:{totl_amt3: event.value}});input-debounced:AMP.setState({charState_fsblock_two: event.value <=  0  ? 'Please input numerical values greater than 0' :   getinput3.per3 <= 0 ? 'Please input numerical values greater than 0' : '' }),msg_fs_one_two.show " />

                                      </div>
                                      <div class="text1Home">
                                          <label class="label-text">is what percent of</label>
                                      </div>
                                      <div class="inputHome">
                                          <input type="number" min="1" size="3" id="amount" class="input-fld"
                                              on="input-throttled:AMP.setState({getinput3:{per3: event.value}});input-debounced:AMP.setState({charState_fsblock_two: event.value <= 0 ?  'Please input numerical values greater than 0' : getinput3.totl_amt3 <= 0 ? 'Please input numerical values greater than 0' : ''}),msg_fs_one_two.show" />
                                      </div>
                                      <div class="text1Home">
                                          <label class="label-text">?</label>
                                      </div>
                                  </div>
                                  <div class="row2">
                                      <div class="row results">
                                          <div class="calculateDiv">
                                              <button type="button" class="a-bouns calculateBtn" on="tap: AMP.setState({
                         mycalc3:{
                          value3:  getinput3.totl_amt3 > 0 ? getinput3.per3 > 0 ? calc3(getinput3.totl_amt3) / getinput3.per3 : '' : ''
                         } 
                       })">Calculate</button>
                                          </div>
                                          <div class="inputHome">
                                              <input type="number" readonly="" [value]="(mycalc3.value3).toFixed(2)"
                                                  class="input_result input-fld">
                                          </div>
                                          <div class="text1Home">
                                              <label class="label-text">%</label>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                              <p [text]="charState_fsblock_two" hidden id="msg_fs_one_two"></p>
                              <!-- <p [text]="charState_snd_blk_two" hidden id="messages_snd_blk_two"></p> -->
                          </div>

                          <!--3rd formula-->
                          <div class="FormBlock">
                              <amp-bind-macro id="calc4" arguments="totl_amt4" expression="totl_amt4 * 100">
                              </amp-bind-macro>

                              <div class="row dFlex w4">
                                  <div class="row1">
                                      <div class="inputHome">
                                          <input type="number" min="1" size="3" id="amount" class="input-fld"
                                              on="input-throttled:AMP.setState({getinput4:{out4: event.value}});input-debounced:AMP.setState({charState_fsblock_three: event.value <=  0  ? 'Please input numerical values greater than 0' :   getinput4.totl_amt4 <= 0 ? 'Please input numerical values greater than 0' : '' }),msg_fs_three.show" />
                                      </div>
                                      <div class="text1Home">
                                          <label class="label-text">is</label>
                                      </div>
                                      <div class="inputHome">
                                          <input type="number" min="1" size="7" id="percentage" class="input-fld"
                                              on="input-throttled:AMP.setState({getinput4:{totl_amt4: event.value}});input-debounced:AMP.setState({charState_fsblock_three: event.value <= 0 ?  'Please input numerical values greater than 0' : getinput4.out4 <= 0 ? 'Please input numerical values greater than 0' : ''}),msg_fs_three.show" />
                                      </div>
                                      <div class="text1Home">
                                          <label class="label-text">% of what ?</label>
                                      </div>
                                  </div>
                                  <div class="row2">
                                      <div class="row results">
                                          <div class="calculateDiv">
                                              <button type="button" class="a-bouns calculateBtn" on="tap: AMP.setState({
                     mycalc4:{
                      value1:  getinput4.out4 > 0 ? getinput4.totl_amt4 > 0 ? calc4(getinput4.totl_amt4) / getinput4.out4 : '' : ''
                         
                     } 
                   })">Calculate</button>
                                          </div>
                                          <div class="inputHome">
                                              <input type="number" readonly="" [value]="(mycalc4.value1).toFixed(2)"
                                                  class="input_result input-fld">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <p [text]="charState_fsblock_three" hidden id="msg_fs_three"></p>
                              <!-- <p [text]="charState_thrd_blk_two" hidden id="messages_thrd_blk_two"></p> -->
                          </div>

                          <!--four forula-->
                          <div class="FormBlock">
                              <amp-bind-macro id="calc5" arguments="totl_amt5" expression="100 / totl_amt5">
                              </amp-bind-macro>

                              <div class="row dFlex dFlex1  w5">
                                  <div class="row1 row1_copy">
                                      <div class="text1Home">
                                          <label class="label-text">What % Of</label>
                                      </div>
                                      <div class="inputHome">
                                          <input type="number" min="1" size="7" id="percentage" class="input-fld"
                                              on="input-throttled:AMP.setState({getinput5:{totl_amt5: event.value}});input-debounced:AMP.setState({charState_fsblock_four: event.value <=  0  ? 'Please input numerical values greater than 0' :   getinput5.per5 <= 0 ? 'Please input numerical values greater than 0' : '' }),msg_fs_four.show" />
                                      </div>
                                      <div class="text1Home">
                                          <label class="label-text">is</label>
                                      </div>
                                      <div class="inputHome">
                                          <input type="number" min="1" size="3" id="amount" class="input-fld"
                                              on="input-throttled:AMP.setState({getinput5:{per5: event.value}});input-debounced:AMP.setState({charState_fsblock_four: event.value <= 0 ?  'Please input numerical values greater than 0' : getinput5.totl_amt5 <= 0 ? 'Please input numerical values greater than 0' : ''}),msg_fs_four.show" />
                                      </div>
                                      <div class="text1Home">
                                          <label class="label-text">?</label>
                                      </div>
                                  </div>
                                  <div class="row2">
                                      <div class="row results">
                                          <div class="calculateDiv">
                                              <button type="button" class="a-bouns calculateBtn" on="tap: AMP.setState({
                               mycalc5:{

                                value1:  getinput5.totl_amt5 > 0 ? getinput5.per5 > 0 ? (getinput5.totl_amt5 - getinput5.per5 ) * calc5(getinput5.totl_amt5 )  : '' : ''
                            
                               } 
                             })">Calculate</button>
                                          </div>
                                          <div class="inputHome inputhome2">
                                              <input type="number" readonly="" [value]="(mycalc5.value1).toFixed(2)"
                                                  class="input_result input-fld">
                                          </div>
                                          <div class="text1Home">
                                              <label class="label-text">percent</label>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <p [text]="charState_fsblock_four" hidden id="msg_fs_four"></p>
                          </div>


                          <!--fifth formula-->
                          <div class="FormBlock">
                              <amp-bind-macro id="calc" arguments="totl_amt6" expression="totl_amt6 / 100">
                              </amp-bind-macro>

                              <div class="row dFlex w1">
                                  <div class="row1">
                                      <div class="inputHome">

                                          <input type="number" size="3" min="1" id="amount" class="input-fld"
                                              on="input-throttled:AMP.setState({getinput6:{per6: event.value}});input-debounced:AMP.setState({charState_fsblock_five: event.value <=  0  ? 'Please input numerical values greater than 0' :   getinput6.totl_amt6 <= 0 ? 'Please input numerical values greater than 0' : '' }),msg_fs_five.show" />

                                      </div>
                                      <div class="text1Home">
                                          <label class="label-text">increased/decreased by</label>
                                      </div>
                                      <div class="inputHome">
                                          <!--<amp-script layout="container" script="hello-world" class="amp-script-sample">-->
                                          <input type="number" min="1" size="7" id="percentage" class="input-fld"
                                              on="input-throttled:AMP.setState({getinput6:{totl_amt6: event.value}});input-debounced:AMP.setState({charState_fsblock_five: event.value <= 0 ?  'Please input numerical values greater than 0' : getinput6.per6 <= 0 ? 'Please input numerical values greater than 0' : ''}),msg_fs_five.show" />
                                          <!--</amp-script>-->
                                      </div>
                                      <div class="text1Home">
                                          <label class="label-text"> % ?</label>
                                      </div>
                                  </div>
                                  <div class="row2">
                                      <div class="row results">
                                          <div class="calculateDiv">
                                              <button class="a-bouns calculateBtn calculate1" type="button" id="testing"
                                                  on="tap: AMP.setState({
                         mycalc:{
                          value6:  getinput6.totl_amt6 > 0 ? getinput6.per6 > 0 ? getinput6.per6 * (1+ (getinput6.totl_amt6/100)) : '' : ''
                         } 
                       })">Calculate</button>
                                          </div>
                                          <div class="inputHome">
                                              <input type="number" readonly="" [value]="mycalc.value6"
                                                  class="input_result input-fld input-center">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <p [text]="charState_fsblock_five" hidden id="msg_fs_five"></p>
                          </div>

                          <!-- 6th formula-->
                          <!-- <div class="FormBlock"> 
            <amp-bind-macro id="calc" arguments="totl_amt" expression="totl_amt / 100"></amp-bind-macro>
  
            <div class="row dFlex w1">
                <div class="row1">
                  <div class="inputHome">
                      
                    <input type="number"  size="3" min="1" id="amount"  class="input-fld"
                                on="input-throttled:AMP.setState({getinput7:{per7: event.value}});input-debounced:AMP.setState({charState_fsblock_six: event.value <=  0  ? 'Please input numerical values greater than 0' :   getinput7.totl_amt7 <= 0 ? 'Please input numerical values greater than 0' : '' }),msg_fs_six.show"/>
                               
                  </div>
                  <div class="text1Home">
                    <label class="label-text">decreased by</label>
                  </div>
                  <div class="inputHome">
                    
                    <input type="number" min="1" size="7" id="percentage" class="input-fld"
                                on="input-throttled:AMP.setState({getinput7:{totl_amt7: event.value}});input-debounced:AMP.setState({charState_fsblock_six: event.value <= 0 ?  'Please input numerical values greater than 0' : getinput7.per7 <= 0 ? 'Please input numerical values greater than 0' : ''}),msg_fs_six.show"/>
                                
                  </div>
                  <div class="text1Home">
                       <label class="label-text"> % ?</label>
                  </div>      
                </div>
                <div class="row2">
                  <div class="row results">
                    <div class="calculateDiv">
                      <button class="a-bouns calculateBtn calculate1" type="button" id="testing" on="tap: AMP.setState({
                         mycalc:{
                          value1:  getinput7.totl_amt7 > 0 ? getinput7.per7 > 0 ? (getinput7.per7 - getinput7.per5 ) * calc5(getinput7.per7 )  : '' : ''
                             value1:  calc(getinput.totl_amt * getinput.per)
                         } 
                       })" >Calculate</button>
                    </div>
                    <div class="inputHome">
                      <input type="number" readonly="" [value]="mycalc.value1" class="input_result input-fld input-center">
                    </div>
                  </div> 
                </div>
            </div>
            <p [text]="charState_fsblock_six" hidden id="msg_fs_six"></p>
          </div> -->
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