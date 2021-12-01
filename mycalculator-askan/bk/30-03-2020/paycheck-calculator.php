<!doctype html>
<html ⚡>

<head>
    <meta charset="utf-8">
    <title>Salary Calculator</title>
   
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

        <section id="main">
            <div class="container">
                <div class="Percentage">
                    <h1 class="m-bottom">Salary Calculator</h1>
                    <p class="desc">MyPercentCalculator is a free online tool to calculate percentages.</p>
                    <!--1s calculation-->
                    <div class="overflow">
                        <div class="form block" amp-fx="fly-in-bottom">
                            <h2>Paycheck Calculator</h2>
                            <div class="img-cal">
                                <amp-img alt="Paycheck Calculator" src="images/salary-calculator.png" width="500" height="300" layout="responsive" class="heartBeat"></amp-img>
                            </div>

                            <amp-bind-macro id="calc11" arguments="per11" expression="(+per11 + +100) / 100"></amp-bind-macro>
                            <div class="FormWrapper FormWrapper3">
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text">Current salary</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" size="3" id="amount" class="input-fld" on="input-throttled:AMP.setState({getinput11:{totl_amt11: event.value}})" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text"> Percent of increament</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" size="7" id="percentage" class="input-fld" on="input-throttled:AMP.setState({getinput11:{per11: event.value}})" />
                                    </div>
                                    <div class="text2">
                                        <label class="label-text">%</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="calculateDiv2">
                                        <button type="button" class="a-bouns calculateBtn" on="tap: AMP.setState({
                     mycalc11:{
                         value1:  round(calc11(getinput11.per11) * getinput11.totl_amt11)
                     } 
                   })">Calculate</button>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text"> Salary after increment</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" readonly="" [value]="(mycalc11.value1).toFixed(2)" class="input_result input-fld">
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="four">
            <div class="container">
                <div class="Percentage">
                    <div class="overflow">
                        <div class="form block" amp-fx="fly-in-bottom">
                            <h2>My Pay</h2>
                            <div class="img-cal">
                                <amp-img alt="My Pay" src="images/salary-calculator.png" width="500" height="300" layout="responsive" class="heartBeat"></amp-img>
                            </div>

                            <amp-bind-macro id="calc12" arguments="per12" expression="(+per12) + (+0)"></amp-bind-macro>
                            <div class="FormWrapper FormWrapper3">
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text">Current salary</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" id="amount" class="input-fld" on="input-throttled:AMP.setState({getinput12:{totl_amt12: event.value}})" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text">New salary</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" id="percentage" class="input-fld" on="input-throttled:AMP.setState({getinput12:{per12: event.value}})" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="calculateDiv2">
                                        <button type="button" class="a-bouns calculateBtn" on="tap: AMP.setState({
                     mycalc12:{
                         value1:  ((calc12(getinput12.per12) - getinput12.totl_amt12) / getinput12.totl_amt12) * 100
                     } 
                   })">Calculate</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text">Percentage of change</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" readonly="" [value]="(mycalc12.value1).toFixed(2)" class="input_result input-fld">
                                    </div>
                                    <div class="text2">
                                        <label class="label-text">%</label>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

       
        


        <section class="six">
            <div class="container">
                <div class="Percentage">
                    <div class="overflow">
                        <div class="form block" amp-fx="fly-in-bottom">
                            <h2> Salary To Hourly</h2>
                            <div class="img-cal">
                                <amp-img alt=" Salary To Hourly" src="images/salary-calculator.png" width="500" height="300" layout="responsive" class="heartBeat"></amp-img>
                            </div>

                            <amp-bind-macro id="calc14" arguments="totl_amt14" expression="+totl_amt14 +  +0"></amp-bind-macro>
                            <div class="FormWrapper FormWrapper3">
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text">Monthly salary</label>
                                    </div>
                                    <div class="input">
                                        <input type="text"  id="amount" class="input-fld" on="input-throttled:AMP.setState({getinput14:{totl_amt14: event.value}})" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text">Hours per work days</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" id="percentage" class="input-fld" on="input-throttled:AMP.setState({getinput14:{hpd14: event.value}})" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text">No. of days per weak</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" id="nyear" class="input-fld" on="input-throttled:AMP.setState({getinput14:{nodpw14: event.value}})" />
                                    </div>
                                </div>
                                <div class="calculateDiv2">
                                    <button type="button" class="a-bouns calculateBtn" on="tap: AMP.setState({
                                     mycalc14:{
                                        value1: calc14(getinput14.totl_amt14),
                                        value2: calc14(getinput14.totl_amt14) * 12 ,
                                        value3: calc14(getinput14.totl_amt14) / 4.345 ,
                                        value4: (calc14(getinput14.totl_amt14) / 4.345) / 5 ,
                                        value5: ((calc14(getinput14.totl_amt14) / 4.345) / 5) / 9 ,
                                        value6: (((calc14(getinput14.totl_amt14) / 4.345) / 5) / 9) / 60
                                     } 
                                       })">Calculate</button>
                                </div>
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text">Hourly pay</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" readonly="" [value]="(mycalc14.value5).toFixed(2)" class="input_result input-fld">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text">Pay per miunte</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" readonly="" [value]="(mycalc14.value6).toFixed(2)" class="input_result input-fld">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text">Daily pay</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" readonly="" [value]="(mycalc14.value4).toFixed(2)" class="input_result input-fld">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text">Weekly pay</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" readonly="" [value]="(mycalc14.value3).toFixed(2)" class="input_result input-fld">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text">Monthly pay</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" readonly="" [value]="mycalc14.value1" class="input_result input-fld">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text">Yearly pay</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" readonly="" [value]="(mycalc14.value2).toFixed(2)" class="input_result input-fld">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     
             
                <div class="Percentage">
                    <div class="overflow">
                        <div class="form block">
                             <h2>Salary Increment Calculator</h2>
                             <div class="img-cal">
                                <amp-img alt="Salary Increment Calculator" src="images/salary-calculator.png" width="500" height="300" layout="responsive" class="heartBeat"></amp-img>
                            </div>
                            <div class="FormWrapper FormWrapper3">
                                 <amp-iframe id="myiframe" title="custom page" 
                                    layout="responsive" width="300" height="300"   sandbox="allow-scripts  allow-popups" frameborder="0"
                                    src="https://mypercentcalculator.com/sal-js.php">
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
        <script>
            var userSelection = document.getElementsByClassName('input-fld');
            for(var i = 0; i < userSelection.length; i++) {
              (function(index) {
                userSelection[index].addEventListener("keyup", function(event) {
                    console.log(index);
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
                    else if(index ==6 || index ==7 || index ==8)
                    {
                      var loanAmount3= document.getElementsByClassName("input-fld").item(6).value;
                      var loanpercentage3= document.getElementsByClassName("input-fld").item(7).value;
                      var week= document.getElementsByClassName("input-fld").item(8).value;
                      if(loanAmount3 !='' && loanpercentage3 !='' && week !='')
                      {
                        document.getElementsByClassName('calculateBtn')[2].click();
                      }
                    }
                    else if(index ==15 || index ==16 || index ==17)
                    {
                      var loanAmount4= document.getElementsByClassName("input-fld").item(15).value;
                      var loanpercentage4= document.getElementsByClassName("input-fld").item(16).value;
                      var yer = document.getElementsByClassName("input-fld").item(17).value;
                      if(loanAmount4 !='' && loanpercentage4 !='' && yer !='')
                      {
                        document.getElementsByClassName('calculateBtn')[3].click();
                      }
                    }
                  }
                })
              })(i);
            }

          </script>

</body>

</html>