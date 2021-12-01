<!doctype html>
<html ⚡>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <title>Salary Calculator</title>
   
   <link rel="icon" type="image/png" sizes="32x32" href="images/apple-touch-icon.png">
   <meta name="apple-mobile-web-app-capable" content="paycheck">
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

<body class="tbl ss-paycheck">
    <?php  readfile( getcwd() . "/header.php"); ?>

        <section id="main" class="salCalpay">
            <div class="container">
                <div class="Percentage">
                    <h1 class="m-bottom">Salary Calculator</h1>
                    <p class="main-subhead">MyPercentCalculator is a free online tool to calculate percentages.</p>
                    <button class="addToPhone_btn" on="tap:my-lightbox"> Add to Phone </button>
                    <!--1s calculation-->
                    <div class="overflow">
                        <div class="form block" amp-fx="fly-in-bottom">
                            <h2>Paycheck Calculator</h2>
                            <div class="img-cal">
                                <amp-img alt="Paycheck Calculator" src="images/salary-calculator.png" width="500" height="300" layout="responsive" class="heartBeat"></amp-img>
                            </div>

                            <amp-bind-macro id="calc11" arguments="per11" expression="(+per11 + +100) / 100"></amp-bind-macro>
                            <form id="myform" method="post"
                                  action-xhr="https://www.askantech.com/amp_test/salary_validate1.php" target="_blank">
                            <div class="FormWrapper FormWrapper3">
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text">Current salary</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="1" size="3" id="amount" class="input-fld" on="input-throttled:AMP.setState({getinput11:{totl_amt11: event.value}});" required name="salary1"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text"> Percent of increment/decrement</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" size="7" id="percentage" class="input-fld" on="input-throttled:AMP.setState({getinput11:{per11: event.value}});" required name="salary2"/>
                                    </div>
                                    <div class="text2">
                                        <label class="label-text">%</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="calculateDiv2">
                                        <!-- <button type="button" class="a-bouns calculateBtn" on="tap: AMP.setState({
                                        mycalc11:{
                                            value1:  getinput11.totl_amt11 > 0 ? getinput11.totl_amt11 !='' ? calc11(getinput11.per11) * getinput11.totl_amt11 :'' :''
                                        } 
                                    })">Calculate</button>
                                    <p [text]="charState_fsblock_one" hidden id="msg_fs_one"></p> -->
                                    <input type="submit" value="Calculate" class="calculateBtn calculateBtn4">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="text1 textheight">
                                        <label class="label-text"> New salary</label>
                                    </div>
                                    <div class="inputHome inputhomecopy inputhomecopy3 pay_check_01_06">
                                        <div submit-success style ="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                            <template type="amp-mustache">
                                            {{output}}
                                            </template>
                                        </div>
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
                                    <form id="myform" method="post"
                                  action-xhr="https://www.askantech.com/amp_test/salary_validate2.php" target="_blank">
                            <div class="FormWrapper FormWrapper3">
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text">Current salary</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="1" id="amount" class="input-fld" on="input-throttled:AMP.setState({getinput12:{totl_amt12: event.value}});" required name="salary3"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text">New salary</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="1" id="percentage" class="input-fld" on="input-throttled:AMP.setState({getinput12:{per12: event.value}});" required name="salary4"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="calculateDiv2">
                                        <!-- <button type="button" class="a-bouns calculateBtn" on="tap: AMP.setState({
                                        mycalc12:{
                                            value1: getinput12.totl_amt12 > 0 ? getinput12.per12  > 0 ? ((calc12(getinput12.per12) - getinput12.totl_amt12) / getinput12.totl_amt12) * 100 : '' : ''
                                            
                                        } 
                                    })">Calculate</button>
                                    <p [text]="charState_fsblock_two" hidden id="msg_fs_two"></p> -->
                                    <input type="submit" value="Calculate" class="calculateBtn calculateBtn4">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1 textheight">
                                        <label class="label-text">Percentage of change</label>
                                    </div>
                                    <div class="inputHome inputhomecopy inputhomecopy3 pay_check_01_06">
                                        <div submit-success style ="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                            <template type="amp-mustache">
                                            {{output}}
                                            </template>
                                        </div>
                                    </div>
                                    <div class="text2">
                                        <label class="label-text">%</label>
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
                            <form id="myform" method="post"
                                  action-xhr="https://www.askantech.com/amp_test/salary_validate3.php" target="_blank">
                            <div class="FormWrapper FormWrapper3 FormWrapper8 pay_check_nw">
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text">Monthly salary</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="1" id="amount" class="input-fld" on="input-throttled:AMP.setState({getinput14:{totl_amt14: event.value}});" required name="salary5"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text">Hours per working days</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="1" max="24" id="percentage" class="input-fld" on="input-throttled:AMP.setState({getinput14:{hpd14: event.value}});" required name="salary6"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text"># of working days per month</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="1" max="31" id="nyear" class="input-fld" on="input-throttled:AMP.setState({getinput14:{nodpw14: event.value}});" required name="salary7"/>
                                    </div>
                                </div>
                                <div class="calculateDiv2 ">
                                    <!-- <button type="button" class="a-bouns calculateBtn" on="tap: AMP.setState({
                                     mycalc14:{
                                        value2: calc14(getinput14.totl_amt14) * 12 ,
                                        value4: (calc14(getinput14.totl_amt14) / 4.345) / 5 ,
                                        value5: ((calc14(getinput14.totl_amt14) / 4.345) / 5) / 9 ,
                                        value6: (((calc14(getinput14.totl_amt14) / 4.345) / 5) / 9) / 60
                                     } 
                                       })">Calculate</button>
                                       <p [text]="charState_fsblock_three" hidden id="msg_fs_three"></p> -->
                                       <input type="submit" value="Calculate" class="calculateBtn calculateBtn4">
                                </div>
                                <div class="row">
                                    <div submit-success style ="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                        <template type="amp-mustache">      
                                            <div class="row">
                                                <div class="text1 textheight">
                                                    <label class="label-text">Pay per minute</label>
                                                </div>
                                                <div class="inputHome inputhomecopy inputhomecopy3 pay_check_01_06" style ="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                                    {{output1}}
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="text1 textheight">
                                                    <label class="label-text">Hourly pay</label>
                                                </div>
                                                <div class="inputHome inputhomecopy inputhomecopy3 pay_check_01_06" style ="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                                    {{output2}}
                                                </div>
                                            </div>
                                
                                            <div class="row">
                                                <div class="text1 textheight">
                                                    <label class="label-text">Daily pay</label>
                                                </div>
                                                <div class="inputHome inputhomecopy inputhomecopy3 pay_check_01_06" style ="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                                    {{output3}}
                                                </div>
                                            </div>
                                
                                            <div class="row">
                                                <div class="text1 textheight">
                                                    <label class="label-text">Yearly pay</label>
                                                </div>
                                                <div class="inputHome inputhomecopy inputhomecopy3 pay_check_01_06" style ="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                                    {{output4}}
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
                     
             
                <div class="Percentage">
                    <div class="overflow">
                        <div class="form block">
                             <h2>Future Salary Calculator</h2>
                             <div class="img-cal">
                                <amp-img alt="Salary Increment Calculator" src="images/salary-calculator.png" width="500" height="300" layout="responsive" class="heartBeat"></amp-img>
                            </div>
                            <div class="FormWrapper FormWrapper3">
                                 <amp-iframe id="myiframe" title="custom page" 
                                    layout="responsive" width="320" height="400"   sandbox="allow-scripts  allow-popups allow-forms" frameborder="0"
                                    src="https://www.askantech.com/amp_test/sal-js.php">
                                </amp-iframe>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- content description -->
        <section class="six">
            <div class="container">
                <div class="Percentage">
                    <div class="overflow">
                        <div class="form block" amp-fx="fly-in-bottom">
                          
                  
                        <!-- <div class="Homecontent">  -->
             <div class="overflow">
                    <p class="desc">It is a good thing to know your net income from a job. It helps budget bills around the house, filling out credit forms and even a personal treat, because after all, it is well earned after working hours. Calculating how much exactly is going into your pocket after taxes can be a lot of ones and zeroes to sort through.</p>
                    <p class="desc">MyPercentCalculator is a great online tool that helps sort through the maths and provides accurate figures every time. You won’t be blindsided by finding yourself coming short on a couple of dollars or cents.</p>
                    <p class="desc">Our Salary Calculator helps you to figure out the extent of change in your salary. It calculates the hourly, daily, and even weekly equivalent of your salary. It makes things easier for you and you wouldn’t need to get a calculator, a sheet of paper, and a pen to tackle the digits. It saves your time and  we guarantee  an accurate result every time.</p>
                    <p class="desc"><b>Paycheck Calculator</b></p>
                    <p class="desc">Our Paycheck calculator helps you calculate your pay raise or your new salary after an increase. It calculates the amount you would have after your increment. </p>
                    <p class="desc">Just put in your current salary and the percentage of increase, and there you would have the value of your new salary after increment</p>
                    <p class="desc">This is how we calculate your new salary:</p>
                    <p class="desc">Your Present Salary + (Your Present Salary * Percentage of Increment)/100 = <b>Your new salary after the increment.</b></p>
                    <p class="desc"> <b>My Pay</b>
                    </p> 
                    <p class="desc"> <b>My Pay</b> conveniently helps to calculate the percentage increase in your income, so you can know how better you are with your new income. It provides you with a percentage of how much change your pay has experienced.</p>
                    <p class="desc"> <b>Percentage of Change in my pay</b> = ((New Salary - Current Salary) / Current Salary) * 100</p>
                    <p class="desc"> <b>Salary to Hourly</b> </p>
                    <p class="desc"> This online Salary to Hourly Pay Calculator will translate your weekly, monthly, or annual salary into its per minute, hourly, daily, weekly and monthly equivalents.
</p>
                    <p class="desc"> Once you input how much you make a month, your daily work hours, and the number of days you get to work in a week, you could simply use this <b>Salary to Hourly calculator</b> to convert your salary to <b>figure out</b> how much you make every hour!
</p><p class="desc"> <b>How do we calculate salary to its minute, hourly, daily, weekly and monthly equivalents?</b> </p>  
                   <ol class="paycheck pay_ch_nw"> 
                    <li>  We calculate the amount of hours you work in a week by multiplying the Hours of Work per day by the number of your work days per week</li>  
                    <li>  Your annual salary is calculated by multiplying your monthly salary by 12 (months in a year)  </li>  
                    <li>  Your annual salary is then divided by 52.14 (number of weeks we have in a year) to get your weekly salary </li>  
                    <li>  The result of step 3 is divided by the result of step 1 to get your hourly pay </li>  
                                    </li>  
                                    </ol>
                    <p class="desc">It is a simple hourly <b>wage calculator.</b> </p>
                    <p class="desc"> <b>Salary Increment Calculator </b> </p>
                    <p class="desc"> An increase in pay means one thing: More money! Which we all love. Salary increments boost our base salary, and they are typically paid at the end of each year. </p>
                    <p class="desc"> So if you previously earned $40,000 per year, you could receive an annual salary increase of $4,000. Our <b>salary increase calculator</b> helps you figure out</b> how much of an increase you would be earning by calculating what your current salary is, how much of an improvement you will be getting in your annual income and how much you would be receiving in your nth year of service.
</p>
                    <p class="desc">Your Present Salary + (Salary Increment/100) = Your New Salary </p>
                    <p class="desc">Your New Salary = Your Present Salary </p>
                    <p class="desc"> The process repeats for each year, if you input six years, it repeats six times. Our <b>Salary calculator</b> shows the total amount after an increase each year.</p>
                    <p class="desc"> We have other tools to meet your needs. Do you want to calculate your grades? Try our <b><a href="/final-grade-calculator.php">Grade Calculator</a></b>. You can also check out how much discount you’d be getting off that purchase with our<b><a href="/discount-calculator.php">discount calculator</a></b>.</p>
              
               <!-- </div> -->
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
        <!--<script>
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

          </script>-->

</body>

</html>