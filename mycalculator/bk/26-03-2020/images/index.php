  <!doctype html>
<html ⚡>
<head>
	<!-------------------------------------------------------->
	<meta property="og:title" content="Percentage Calculators" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://mypercentcalculator.com/" />
	<meta property="og:image" content="https://mypercentcalculator.com/images/percent-calculator.jpg" />
	<meta property="og:description" content="MyPercentCalculator is a free online tool to calculate percentages." />
	<meta property="og:site_name" content="MyPercentCalculator" />
	<meta property="og:image:alt" content="Percentage Calculator" />
	
	
	<!---------------------------------------------------------->
	
	
	
  <meta charset="utf-8">
  <title>Percentage Calculator</title>
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
  <link rel="canonical" href="#">
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
  <?php readfile( getcwd() . "/head.php"); ?>
  <style amp-custom><?php readfile( getcwd() . "/style.css");?></style>
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
            <amp-img alt="Percent Calculator" src="images/percent-calculator.png" width="500" height="300" layout="responsive" class="heartBeat"></amp-img>
          </div>

          <!--1st formula-->
          <div class="FormBlock"> 
            <amp-bind-macro id="calc" arguments="totl_amt" expression="totl_amt / 100"></amp-bind-macro>
  
            <div class="row dFlex w1">
                <div class="row1">
                  <div class="inputHome">
                    <input type="text"  size="3" id="amount"  class="input-fld"
                                on="input-throttled:AMP.setState({getinput:{per: event.value}})"/>
                  </div>
                  <div class="text1Home">
                    <label class="label-text">% of</label>
                  </div>
                  <div class="inputHome">
                    <input type="text"  size="7" id="percentage" class="input-fld"
                                on="input-throttled:AMP.setState({getinput:{totl_amt: event.value}})"/>
                  </div>
                  <div class="text1Home">
                       <label class="label-text">?</label>
                  </div>      
                </div>
                <div class="row2">
                  <div class="row results">
                    <div class="calculateDiv">
                      <button class="a-bouns calculateBtn calculate1" type="button" on="tap: AMP.setState({
                         mycalc:{
                             value1:  calc(getinput.totl_amt * getinput.per)
                         } 
                       })">Calculate</button>
                    </div>
                    <div class="inputHome">
                      <input type="text" readonly="" [value]="mycalc.value1" class="input_result input-fld input-center">
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
                     <label class="label-text">What Is</label>
                  </div>
                  <div class="inputHome">
                     <input type="text"  size="3" id="amount" class="input-fld"
                              on="input-throttled:AMP.setState({getinput:{per2: event.value}})"/>
                  </div>
                  <div class="text1Home">
                    <label class="label-text">% of</label>
                  </div> 
                  <div class="inputHome">
                    <input type="text"  size="7" id="percentage" class="input-fld" 
                              on="input-throttled:AMP.setState({getinput:{totl_amt2: event.value}})"/>
                  </div>
                </div>
                <div class="row2">
                  <div class="row results">
                    <div class="calculateDiv">
                      <button class="a-bouns calculateBtn" type="button" on="tap: AMP.setState({
                         mycalc2:{
                             value1:  calc2(getinput.per2) / getinput.totl_amt2
                         } 
                       })">Calculate</button>
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
                <div class="inputHome">
                  <input type="text"  size="7" id="percentage" class="input-fld" 
                              on="input-throttled:AMP.setState({getinput3:{totl_amt3: event.value}})"/>
                </div>
                <div class="text1Home">
                   <label class="label-text">is what %</label>
                </div>
                <div class="inputHome">
                 <input type="text"  size="3" id="amount" class="input-fld" 
                              on="input-throttled:AMP.setState({getinput3:{per3: event.value}})"/>
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
                       })">Calculate</button>
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
    
            <div class="row dFlex w4">
              <div class="row1">
                <div class="inputHome">
                  <input type="text"  size="3" id="amount" class="input-fld" 
                              on="input-throttled:AMP.setState({getinput4:{out4: event.value}})"/>
                </div>
                <div class="text1Home">
                   <label class="label-text">is</label>
                </div>
                <div class="inputHome">
                 <input type="text"  size="7" id="percentage" class="input-fld" 
                              on="input-throttled:AMP.setState({getinput4:{totl_amt4: event.value}})"/>
                </div>
                <div class="text1Home">
                    <label class="label-text">% of what?</label>
                </div>   
              </div>
              <div class="row2">
                <div class="row results">
                  <div class="calculateDiv">
                    <button type="button" class="a-bouns calculateBtn" on="tap: AMP.setState({
                     mycalc4:{
                         value1: calc4(getinput4.totl_amt4) / getinput4.out4
                     } 
                   })">Calculate</button>
                  </div>
                  <div class="inputHome">
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
    
            <div class="row dFlex w5">
              <div class="row1">
                <div class="text1Home">
                   <label class="label-text">What % Of</label>
                </div>
                <div class="inputHome">
                  <input type="text"  size="7" id="percentage" class="input-fld" 
                              on="input-throttled:AMP.setState({getinput5:{totl_amt5: event.value}})"/>
                </div>
                <div class="text1Home">
                    <label class="label-text">Is</label>
                </div> 
                <div class="inputHome">
                 <input type="text"  size="3" id="amount" class="input-fld"
                              on="input-throttled:AMP.setState({getinput5:{per5: event.value}})"/>
                </div>    
              </div>
              <div class="row2">
                <div class="row results">
                  <div class="calculateDiv">
                    <button type="button" class="a-bouns calculateBtn" on="tap: AMP.setState({
                               mycalc5:{
                                   value1: (getinput5.totl_amt5 - getinput5.per5 ) * calc5(getinput5.totl_amt5 ) 
                               } 
                             })">Calculate</button>
                  </div>
                  <div class="inputHome">
                    <input type="text" readonly="" 
                                  [value]="(mycalc5.value1).toFixed(2)" class="input_result input-fld" >
                  </div>
                  <div class="text1Home">
                      <label class="label-text">%</label>
                  </div> 
                </div> 
              </div>
            </div>
          </div>

          </div>
          </div>
        </div>
        <!--<div class="share">
			<!--soical share-->
         <!-- <ul>
            <li>
              <amp-social-share width="40" height="40" type="facebook" data-param-app_id="254325784911610"></amp-social-share>
              <amp-social-share width="40" height="40" type="twitter"></amp-social-share>
              <amp-social-share width="40" height="40" type="whatsapp"></amp-social-share>
              <amp-social-share width="40" height="40" type="linkedin"></amp-social-share>
            </li>
            <li>
               <amp-iframe id="copy" sandbox="allow-scripts" width="120" height="60" frameborder="0"
                  src="https://mypercentcalculator.com/copy.php">
              </amp-iframe>
            </li>
          </ul>
        </div>-->
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
          <script>
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
        </body>
      </html>