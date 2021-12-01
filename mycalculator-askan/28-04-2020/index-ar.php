<!doctype html>
<html ⚡>
<head>
    <meta charset="utf-8">
  <title>حساب النسبة المئوية </title>
  <link rel="icon" type="image/png" sizes="32x32" href="images/apple-touch-icon.png">
  <meta name="apple-mobile-web-app-capable" content="AppTitle">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="167x167" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="128x128" href="images/apple-touch-icon.png">

  <link rel="canonical" href="#">
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
  <?php readfile( getcwd() . "/head.php"); ?>
  <style amp-custom><?php readfile( getcwd() . "/style.css");?></style>
</head>

<body class="homePage ar">
<?php  readfile( getcwd() . "/header-ar.php"); ?>


<!-- <amp-img src="https://img.icons8.com/android/24/000000/share.png"> -->
<section id="main">
  <div class="container">
    <div class="Percentage">
      <h1 class="m-bottom">حاسبة النسبة المئوية  </h1>
      <p class="desc">حاسبة النسبة المئوية هي أداة مجانية على الإنترنت لحساب النسب المئوية.</p>
      <!--1s calculation-->
      <div class="overflow">
        <div class="form block" amp-fx="fly-in-bottom">
          <h2>طرق حساب النسبة المئوية  </h2>
          <div class="img-cal">
            <amp-img alt="Percent Calculator" src="images/percent-calculator.png" width="500" height="300" layout="responsive" class="heartBeat"></amp-img>
          </div>

          <!--1st formula-->
          <div class="FormBlock"> 
            <amp-bind-macro id="calc" arguments="totl_amt" expression="totl_amt / 100"></amp-bind-macro>
  
            <div class="row dFlex w1">
                <div class="row1 rowarr">
                  <div class="inputHome">
                    <input type="text"  size="3" id="amount" class="input-fld"
                                on="input-throttled:AMP.setState({getinput:{per: event.value}})"/>
                  </div>
                  <div class="text1Home">
                    <label class="label-text">من</label>
                  </div>
                  <div class="inputHome">
                    <input type="text"  size="7" id="percentage" class="input-fld" 
                                on="input-throttled:AMP.setState({getinput:{totl_amt: event.value}})"/>
                  </div>
                  <div class="text1Home">
                       <label class="label-text">؟</label>
                  </div>      
                </div>
                <div class="row2">
                  <div class="row results">
                    <div class="calculateDiv">
                      <button class="a-bouns calculateBtn" type="button" on="tap: AMP.setState({
                         mycalc:{
                             value1:  calc(getinput.totl_amt * getinput.per)
                         } 
                       })">احسب</button>
                    </div>
                    <div class="inputHome">
                      <input type="text" readonly="" [value]="mycalc.value1" class="input_result input-fld input-center">
                    </div>
					<div class="text1Home">
                    <label class="label-text">% </label>
                  </div>
                  </div> 
                </div>
            </div>
          </div>

          <!--2nd formula-->
          <div class="FormBlock"> 
            <amp-bind-macro id="calc2" arguments="per2" expression="per2 * 100"></amp-bind-macro>
    
            <div class="row dFlex w2">
                <div class="row1">
                  <div class="text1Home">
                     <label class="label-text">ما هو</label>
                  </div>
                  <div class="inputHome">
                  	
                     <input type="text"  size="3" id="amount" class="input-fld"
                              on="input-throttled:AMP.setState({getinput:{per2: event.value}})"/>
                  </div>
                  <div class="text1Home">
                    <label class="label-text">من  % </label>
                  </div> 
                  <div class="inputHome">
                    <input type="text"  size="7" id="percentage" class="input-fld" 
                      on="input-throttled:AMP.setState({getinput:{totl_amt2: event.value}})"/>
                  </div>
                  <div class="text1Home">
                    <label class="label-text">؟</label>
                  </div> 
                </div>
                <div class="row2">
                  <div class="row results">
                    <div class="calculateDiv">
                      <button class="a-bouns calculateBtn" type="button" on="tap: AMP.setState({
                         mycalc2:{
                             value1:  calc2(getinput.per2) / getinput.totl_amt2
                         } 
                       })">احسب</button>
                    </div>
                    <div class="inputHome">
                     <input type="text" readonly="" [value]="(mycalc2.value1).toFixed(2)" class="input_result input-fld input-center">
                    </div>
                  </div> 
                </div>
            </div>
          </div>

          <!--3rd formula-->
          <div class="FormBlock"> 
            <amp-bind-macro id="calc3" arguments="totl_amt3" expression="totl_amt3 * 100"></amp-bind-macro>
    
            <div class="row dFlex w3">
              <div class="row1">
              	<div class="text1Home">
                   <label class="label-text">كم نسبة العدد</label>
                </div>
                <div class="inputHome">
                  <input type="text"  size="7" id="percentage" class="input-fld" 
                              on="input-throttled:AMP.setState({getinput3:{totl_amt3: event.value}})"/>
                </div>
                <div class="text1Home">
                   <label class="label-text">من</label>
                </div>
                <div class="inputHome">
                 <input type="text"  size="3" id="amount" class="input-fld" 
                              on="input-throttled:AMP.setState({getinput3:{per3: event.value}})"/>
                </div>
                <div class="text1Home">
                   <label class="label-text">؟</label>
                </div>

                <!-- <div class="text1Home">
                    <label class="label-text">?</label>
                </div>  -->    
              </div>
              <div class="row2">
                <div class="row results">
                  <div class="calculateDiv">
                    <button type="button" class="a-bouns calculateBtn" on="tap: AMP.setState({
                         mycalc3:{
                             value3:  calc3(getinput3.totl_amt3 / getinput3.per3)
                         } 
                       })">احسب</button>
                  </div>
                  <div class="inputHome">
                    <input type="text" readonly="" 
                                  [value]="(mycalc3.value3).toFixed(2)" class="input_result input-fld">
                  </div>
                  <!-- <div class="text1Home">
                      <label class="label-text">%</label>
                  </div> -->
                </div> 
              </div>
            </div>
          </div> 
          
          <!--4th formula-->
          <div class="FormBlock"> 
            <amp-bind-macro id="calc4" arguments="totl_amt4" 
                expression="totl_amt4 * 100"></amp-bind-macro>
    
            <div class="row dFlex dFlex1 w4">
              <div class="row1">
              	 <div class="text1Home">
                   <label class="label-text">العدد</label>
                </div>
                <div class="inputHome inputhome4">
                  <input type="text"  size="3" id="amount" class="input-fld" 
                              on="input-throttled:AMP.setState({getinput4:{out4: event.value}})"/>
                </div>
                <div class="text1Home">
                   <label class="label-text">هو </label>
                </div>
               
                <div class="inputHome inputhome4">
                 <input type="text"  size="7" id="percentage" class="input-fld" 
                              on="input-throttled:AMP.setState({getinput4:{totl_amt4: event.value}})"/>
                </div>
                <div class="text1Home">
                    <label class="label-text">من اي عدد  % ؟</label>
                </div>   
              </div>
              <div class="row2">
                <div class="row results">
                  <div class="calculateDiv">
                    <button type="button" class="a-bouns calculateBtn" on="tap: AMP.setState({
                     mycalc4:{
                         value1: calc4(getinput4.totl_amt4) / getinput4.out4
                     } 
                   })">احسب</button>
                  </div>
                  <div class="inputHome inputhome3">
                    <input type="text" readonly="" 
                                  [value]="(mycalc4.value1).toFixed(2)" class="input_result input-fld">
                  </div>
                </div> 
              </div>
            </div>
          </div>

          <!--5th forula-->
          <div class="FormBlock"> 
            <amp-bind-macro id="calc5" arguments="totl_amt5" 
                          expression="100 / totl_amt5"></amp-bind-macro>
    
            <div class="row dFlex dFlex1 w5">
              <div class="row1">
                <div class="text1Home">
                   <label class="label-text">ما هي النسبة من</label>
                </div>
                <div class="inputHome inputhome4">
                  <input type="text"  size="7" id="percentage" class="input-fld" 
                              on="input-throttled:AMP.setState({getinput5:{totl_amt5: event.value}})"/>
                </div>
                <div class="text1Home">
                    <label class="label-text">تساوي</label>
                </div> 
                <div class="inputHome">
                 <input type="text"  size="3" id="amount" class="input-fld"
                              on="input-throttled:AMP.setState({getinput5:{per5: event.value}})"/>
                </div>
                <div class="text1Home inputhome4">
                    <label class="label-text">؟</label>
                </div>     
              </div>
              <div class="row2">
                <div class="row results">
                  <div class="calculateDiv sm">
                    <button type="button" class="a-bouns calculateBtn" on="tap: AMP.setState({
                               mycalc5:{
                                   value1: (getinput5.totl_amt5 - getinput5.per5 ) * calc5(getinput5.totl_amt5 ) 
                               } 
                             })">احسب</button>
                  </div>
                  <div class="inputHome inputhome3">
                    <input type="text" readonly="" 
                                  [value]="(mycalc5.value1).toFixed(2)" class="input_result input-fld" >
                  </div>
                 
                </div> 
              </div>
            </div>
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
               <!--<amp-iframe id="copy" sandbox="allow-scripts" width="120" height="60" frameborder="0"
                  src="https://mypercentcalculator.com/copy.php">
              </amp-iframe> -->
            </li>
          </ul>
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
    



          <?php readfile( getcwd() . "/footer-ar.php"); ?>
        </body>
      </html>