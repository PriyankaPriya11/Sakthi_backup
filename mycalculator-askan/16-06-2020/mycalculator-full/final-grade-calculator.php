<!doctype html>
<html ⚡>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <title>Grade Calculator</title>
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

<body>
    <?php  readfile( getcwd() . "/header.php"); ?>

        <section id="main">
            <div class="container">
                <div class="Percentage">
                    <h1 class="m-bottom">Grade Calculator</h1>
                    <p class="main-subhead">MyPercentCalculator is a free online tool to calculate percentages.</p>
                    <button  class="addToPhone_btn" on="tap:my-lightbox"> Add to Phone </button>
                    <div class="overflow">
                        <div class="form block" amp-fx="fly-in-bottom">
                            <h2>Final Grade Calculator</h2>
                            <div class="img-cal">
                                <amp-img alt="Final Grade Calculator" src="images/grade-calculator.png" width="500" height="300" layout="responsive" class="heartBeat"></amp-img>
                            </div>
                            <amp-bind-macro id="calc10" arguments="out10" expression="out10 * 100"></amp-bind-macro>
                            <form id="myform" method="post"
                                  action-xhr="https://www.askantech.com/amp_test/grade_validate.php" target="_blank">
                            <div class="row">
                                <div class="FormWrapper fin_new">
                                    <div class="row">
                                        <div class="text1">
                                            <label class="label-text">Scored mark</label>
                                        </div>
                                        <div class="input">
                                            <input type="number" min="0" size="3" id="amount" class="input-fld" on="input-throttled:AMP.setState({getinput10:{out10: event.value}});" required name="grade1"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="text1">
                                            <label class="label-text">Out of mark</label>
                                        </div>
                                        <div class="input">
                                            <input type="number" min="0" size="7" id="percentage" class="input-fld" on="input-throttled:AMP.setState({getinput10:{totl_amt10: event.value}});" required name="grade2"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="calculateDiv2">
                                            <!-- <button type="button" class="a-bouns calculateBtn" on="tap: AMP.setState({
                                                    mycalc10:{ 
                                                        value1:  getinput10.totl_amt10 > 0 ?  getinput10.out10 > 0 ? calc10(getinput10.out10 / getinput10.totl_amt10) :'':''
                                                    } 
                                                    })">Calculate</button>
                                            <p [text]="charState_fsblock_one" hidden id="msg_fs_two"></p> -->
                                            <input type="submit" value="Calculate" class="calculateBtn">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="text1 textheight"> 
                                         <label class="label-text">Result</label>
                                        </div>
                                        <div class="inputHome inputhomecopy final_en">
                                            <div submit-success style ="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: system-ui;">
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
        </section>
<!-- content description -->

<section id="main">
            <div class="container">
                <div class="Percentage">
                    <div class="overflow">
                        <div class="form block" amp-fx="fly-in-bottom">                                      
                            <!-- <div class="Homecontent">  -->
                                 <div class="overflow">
                                    <p class="desc">Imagine you had to sort the grades of a course or a couple of courses in school. Some of us might fight it hard to <b>calculate grades</b> or we don’t know <b>how to calculate grades.</b></p>
                                    <p class="desc">You might find yourself through a bit of math trying to <b>calculate grade</b> or <b>grade percentage.</b> This process could take up more time than necessary or leave you with a number of errors. A <b>grade calculator</b> is an effective <b>online grader</b> and a quick way to <b>calculate final grade</b> and help sort out a <b>grade chart.</b></p>
                                    <p class="desc">Grades are important in school. They tell us about failure, progress or how much improvement is necessary. Required grades differ depending on the course. At some point in our academic life, we’ve thought, “How can I <b>calculate my grade</b>?” as a student, or have been the <b>grader</b>, as teachers.</p>
                                    <p class="desc">The grade calculator is an <b>easy grader online</b>, that helps provide <b>quick grade</b> calculations and accurate answers. This <b>grade calc</b> accepts numerical values and provides results as the <b>grade calculator percentage.</b></p>
                                    <p class="desc">It can help in calculating the grade needed from remaining school work, to pass a course. With an embedded mathematical formula, this <b>easy grader</b> calculates your grades in no time at all.</p>
                                    <p class="desc">Getting it to work only requires that you enter the values necessary and click on calculate to get your grade percentage. So, for example, if I scored 45 marks out of 100 in a chemistry class and I’m trying to know how many percents my grade is, I just need to enter my score and the total marks and click on ‘calculate’. In no time, the result tells me my grade is 45% of the total. It’s that simple.</p>
                                    <p class="desc">So if you have been searching for a <b>final grade calculator, final exam calculator, finals calculator, exam calculator, grade percentage calculator, easy grade calculator, finals grade calculator, final exam grade calculator, test score calculator, percentage grade calculator</b>, or a <b>marks percentage calculator</b>, we have got you covered</p>
                                    <p class="desc">Apart from your grades, use our <b><a href="/paycheck-calculator.php">salary calculators</a></b> to figure out the daily equivalent of your monthly salary or you can try our <b><a href="/loan-calculator.php">loan calculator</a></b> which would help you make decisions backed up with accurate numbers.</p>
                                </div>
            <!-- </div>                                                  -->
                    
                        </div>
        <div class="share">
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
        </div>
<div class="comments">
    <!--comment-->
    <amp-facebook-comments width="486" height="50" layout="responsive"
       data-href="https://mypercentcalculator.com/marks-calculator.php" style="width:100%;">
    </amp-facebook-comments>
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
                    if(index ==0 || index ==1 )
                    {
                      var loanAmount1= document.getElementsByClassName("input-fld").item(0).value;
                      var loanpercentage= document.getElementsByClassName("input-fld").item(1).value;

                      if(loanAmount1 !='' && loanpercentage !='')
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