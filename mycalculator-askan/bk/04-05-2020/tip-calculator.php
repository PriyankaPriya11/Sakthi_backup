<!doctype html>
<html ⚡>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <title>Tip Calculator</title>
   
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

        <section id="Tipmain">
            <div class="container">
                <div class="Percentage">
                    <h1 class="m-bottom">Tip Calculator</h1>
                    <p class="main-subhead">MyPercentCalculator is a free online tool to calculate percentages.</p>
                    <button class="addToPhone_btn" on="tap:my-lightbox"> Add to Phone </button>
                    <div class="overflow">
                        <div class="form block" amp-fx="fly-in-bottom">
                            <h2>Tip Calculator</h2>
                            <div class="img-cal">
                                <amp-img alt="Tip Calculator" src="images/tip-calculator.png" width="500" height="300" layout="responsive" class="heartBeat"></amp-img>
                            </div>
                            <amp-bind-macro id="calc9" arguments="per" expression="per / 100"></amp-bind-macro>
                            <div class="row">
                                <div class="FormWrapper FormWrapper2">
                                    <div class="row">
                                        <div class="text1">
                                            <label class="label-text">Bill amount</label>
                                        </div>
                                        <div class="input">
                                            <input type="number" min="1" size="3" id="amount" class="input-fld" on="input-throttled:AMP.setState({getinput:{totl_amt: event.value}});input-debounced:AMP.setState({charState_fsblock_five: event.value <=  0  ? 'Please input numerical values greater than 0' :   getinput.per <= 0 ? 'Please input numerical values greater than 0' : getinput.people <=0  ? 'Please input numerical values greater than 0' : '' }),msg_fs_five.show" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="text1">
                                            <label class="label-text">Tip percentage</label>
                                        </div>
                                        <div class="input">
                                            <input type="number"  min="1" size="7" id="percentage" class="input-fld" on="input-throttled:AMP.setState({getinput:{per: event.value}});input-debounced:AMP.setState({charState_fsblock_five: event.value <=  0  ? 'Please input numerical values greater than 0' :   getinput.totl_amt <= 0 ? 'Please input numerical values greater than 0' : getinput.people <=0 ? 'Please input numerical values greater than 0' : '' }),msg_fs_five.show" />
                                        </div>
                                        <div class="text2">
                                            <label class="label-text">%</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="text1">
                                            <label class="label-text">Number of person(s)</label>
                                        </div>
                                        <div class="input">
                                            <input type="number" min="1" size="7" id="percentage" class="input-fld" on="input-throttled:AMP.setState({getinput:{people: event.value}});input-debounced:AMP.setState({charState_fsblock_five: event.value <=  0  ? 'Please input numerical values greater than 0' :   getinput.per <= 0 ? 'Please input numerical values greater than 0': getinput.totl_amt <= 0 ? 'Please input numerical values greater than 0' : '' }),msg_fs_five.show" />
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="calculateDiv2">
                                            <button class="a-bouns calculateBtn" type="button" on="tap: AMP.setState({
                 mycal9:{
                    value1:  calc9(getinput.totl_amt * getinput.per),
                     value2:  calc9(getinput.totl_amt * getinput.per) + (+getinput.totl_amt),
                     value3:  ((calc9(getinput.totl_amt * getinput.per) + (+getinput.totl_amt)) / getinput.people),
                     value4: (calc9(getinput.totl_amt * getinput.per) / getinput.people),
                     value5: calc9(getinput.totl_amt) / 2


                           
                 } 
               })">Calculate</button>
               <p [text]="charState_fsblock_five" hidden id="msg_fs_five"></p>

                                        </div>
                                       
                                    </div>
                                    <div class="row">
                                        <div class="text1">
                                            <label class="label-text">Tip amount</label>
                                        </div>
                                        <div class="input">
                                            <input type="text" readonly="" [value]="(mycal9.value1).toFixed(2)" class="input_result input-fld input-center">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="text1">
                                            <label class="label-text">Tip per person </label>
                                        </div>
                                        <div class="input">
                                            <input type="text" readonly="" [value]="(mycal9.value4).toFixed(2)" class="input_result input-fld input-center">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="text1">
                                            <label class="label-text">Total per person</label>
                                        </div>
                                        <div class="input">
                                            <input type="text" readonly="" [value]="(mycal9.value3).toFixed(2)" class="input_result input-fld input-center">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="text1">
                                            <label class="label-text">Total per person w/o tip</label>
                                        </div>
                                        <div class="input">
                                            <input type="text" readonly="" [value]="(mycal9.value5).toFixed(2)" class="input_result input-fld input-center">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="text1">
                                            <label class="label-text">Total to pay</label>
                                        </div>
                                        <div class="input">
                                            <input type="text" readonly="" [value]="(mycal9.value2).toFixed(2)" class="input_result input-fld input-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>

                        </div> 
                </div>
        </section>
 

 
        <section id="Tipmain">
            <div class="container">
                <div class="Percentage">
                    
                    <div class="overflow">
                        <div class="form block" amp-fx="fly-in-bottom">
                         
                          

                            <!--iframe code added-->
                             <div class="Percentage">
                    <div class="overflow">
                        <div class="form block">
                             <h2>Shared Bill Tip Calculator</h2>
                             <div class="img-cal">
                                <amp-img alt="Salary Increment Calculator" src="images/salary-calculator.png" width="500" height="300" layout="responsive" class="heartBeat"></amp-img>
                            </div>
                            <div class="FormWrapper FormWrapper3">
                                 <amp-iframe id="myiframe" title="custom page" 
                                    layout="responsive" width="300" height="400"   sandbox="allow-scripts  allow-popups" frameborder="0"
                                    src="https://www.askantech.com/amp_test/tip-js-new.php">
                                </amp-iframe>

                            </div>
                        </div>
                    </div>
                </div> 
                        
<!-- content description -->
          
                </div>

                        </div> 
                    <!--soical share-->                   
                    </div>
                </div>
        </section>




        <section id="Tipmain">
            <div class="container">
                <div class="Percentage">
                    <div class="overflow">
                        <div class="form block" amp-fx="fly-in-bottom">
                                    
<!-- content description -->
                   <div class="form block" amp-fx="fly-in-bottom">
                            
                            <!-- <div class="Homecontent">  -->
                        <!-- <div class="overflow Contentpad"> -->
                        <div class="overflow ">
<p class="desc">Giving out<b> tips</b> is an integral part of our daily lives and it shows how much we appreciate a service rendered, but let’s face it: it’s not always easy to figure out the<b> tip</b> after a service. </p>
<p class="desc">We ask the people we’re with, try to do some quick math in our heads, pull out our phones for help, or leave whatever we might consider being fair enough. </p>
<p class="desc">But how much is that exactly? Asking your friends or using the calculator on your phone isn’t the most effective or quickest way to get an answer. </p>
<p class="desc">It is common to find search histories like “<b> how much to tip pizza delivery</b>,” “<b> how much to tip hairdresser</b>,” “<b> how much to tip barber</b>,” “<b> how much to tip delivery</b>,” “<b> how much to tip delivery driver</b>,” “<b> how much to tip for massage</b>,” and other kinds of questions.</p>
<p class="desc">The internet answers, but with so much information and links that it makes it seem like serious research just for a tip. Now the question, is there a better way to easily figure out the tip on the service you have been rendered? Yes, there is,<b> Tip Calculators</b>.</p>
<p class="desc">Tip calculators </b>are a much faster and comfortable alternative that doesn’t suggest you try out a formula, a trick, or that you do the math yourself. A<b> tip calc </b>saves you all of that stress and gives you the confidence every time you decide to leave a tip for exceptional service rendered.</p>
<p class="desc">Our<b> tip calculator </b>is specially designed to ensure that when the bill comes, and you have to tip, you don’t go scrambling for your calculator or scratching your head. It does all the work for you faster than your calculations would, and is more effective than jumping from website to website for answers. </p>
<p class="desc">All you have to do is enter your<b>’bill amount’</b>,<b> ‘tip percentage,’</b> and the<b> ‘number of person(s)</b>’ on the table. Once you click on ‘calculate,’ our trusted and accurate system does all the work in no time and delivers precise information. </p>
<p class="desc">It tells you the tip each person is to pay, the total amount each person pays, including the tip, and down to the total amount (plus tips) the entire table should pay. </p>
<p class="desc">With this calculator, you can say goodbye to long tip calculations and internet inquiry.</p>
<p class="desc">You can also check out our<b> <a href="/percent-change-calculator.php">Percentage Change Calculator</a></b><b>, </b><b><a href="/discount-calculator.php"> Discount Calculator</a></b><b>, </b><b><a href="/paycheck-calculator.php"> Salary Calculator</a></b><b>, etc.</b></p>
            <!-- </div> -->
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
                        data-href="https://mypercentcalculator.com/tip-calculator.php">
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
                  if (event.keyCode === 13) { 
                    if(index ==0 || index ==1 || index ==2)
                    {
                      var loanAmount1= document.getElementsByClassName("input-fld").item(0).value;
                      var loanpercentage= document.getElementsByClassName("input-fld").item(1).value;
                      var noperson= document.getElementsByClassName("input-fld").item(2).value;

                      if(loanAmount1 !='' && loanpercentage !='' && noperson !='')
                      {
                        document.getElementsByClassName('calculateBtn')[0].click();
                      }
                    }
                    }
                  
                })
              })(i);
            }

          </script>-->
</body>

</html>