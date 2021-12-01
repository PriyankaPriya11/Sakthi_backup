<!doctype html>
<html ⚡>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>Percent Difference</title>
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
    <?php readfile(getcwd() . "/style.css");
    ?>
    </style>
</head>

<body class="tbl">
    <?php  readfile( getcwd() . "/header.php"); ?>

    <section>
        <div class="container">
            <div class="Percentage">
                <h1 class="m-bottom">Percent Difference Calculator</h1>
                <p class="main-subhead">MyPercentCalculator is a free online tool to calculate percentages.</p>
                <button class="addToPhone_btn" on="tap:my-lightbox"> Add to Phone </button>
                <div class="overflow">
                    <div class="form block" amp-fx="fly-in-bottom">
                        <h2>Percent Difference</h2>
                        <div class="img-cal">
                            <amp-img alt="Percent Difference" src="images/percent-difference-calculator.png" width="500"
                                height="300" layout="responsive" class="heartBeat"></amp-img>
                        </div>


                        <div class="">
                            <amp-bind-macro id="calc7" arguments="per7, totl_amt7" expression="per7 + 0">
                            </amp-bind-macro>
                            <form id="myform" method="post"
                                  action-xhr="https://www.askantech.com/amp_test/percent_diff_validate.php" target="_blank">
                            <div class="FormWrapper">
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text">Value 1</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="1" size="7" id="percentage" class="input-fld" name="field1"
                                            on="input-throttled:AMP.setState({getinput7:{totl_amt7: event.value}});" />
           
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text">Value 2</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="1" size="3" id="amount" class="input-fld" name="field2"
                                            on="input-throttled:AMP.setState({getinput7:{per7: event.value}});" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="calculateDiv2">
                                                                <!-- <button type="button" class="a-bouns calculateBtn" on="tap: AMP.setState({
                                                        mycalc7:{
                                                            value7:   getinput7.totl_amt7 > 0 ?  getinput7.per7 > 0 ? calc7(((getinput7.totl_amt7 - getinput7.per7) / ((+getinput7.per7) + (+getinput7.totl_amt7)))*200)  :'':''
                                                        } 
                                                    })">Calculate</button>
                                                                <p [text]="charState_fsblock_one" hidden id="msg_fs_one"></p> --> 
                                        <input type="submit" value="Calculate" class="calculateBtn">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text">Result</label>
                                    </div>
                                    <div class="inputHome inputhomecopy" >
                                                  <div submit-success style ="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: system-ui;">
                                                      <template type="amp-mustache">
                                                      {{output}}
                                                      </template>
                                                  </div>
                                                  <!--<input type="number" readonly="" [value]="{{output}}" class="input_result input-fld input-center">-->
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
                        </div>
                    </div>

                </div>
            </div>
    </section>
    <section>
        <div class="container">
            <div class="Percentage">
                <div class="overflow">
                    <div class="form block" amp-fx="fly-in-bottom">
                        <!-- <h2>Percent Decrease Calculator</h2> -->
                        <div class="overflow Contentpad">

                            <p class="desc">Have you ever asked <b>what is the difference</b> exactly between your
                                country’s population and another country’s population? Have you tried calculating the
                                percentage difference in the customers you had in your store between last year and this
                                year?</p>
                            <p class="desc">Of course, we have, and sometimes we make a rough guess or shrug it off as
                                not being so much of a big deal, because it could feel naturally easier that way, or not
                                worth the critical analysis.</p>
                            <p class="desc">This <b>percentage difference calculator</b> can prove very useful in
                                satisfying our curiosity and providing accurate results. Lucky for you, this is the
                                easiest and the best <b>percentage difference calculator online!</b> It would cost you
                                nothing at all in time and currency to get answers at your fingertips.</p>
                            <p class="desc"><b>How it Works<b></p>
                            <p class="desc">The <b>percent difference calculator</b> finds the percent difference
                                between two positive numbers greater than zero. The percentage difference is usually
                                calculated when you want to know the difference in percentage between two numbers.</p>
                            <p class="desc">Note that <b>percentage difference</b> is quite different from <b>percentage
                                    change</b>. For this calculator, the order of the numbers does not matter as we are
                                simply dividing the difference between two numbers by the average of the two numbers.
                            </p>
                            <p class="desc">For <b>percentage change</b>, the order matters. It is used to relatively
                                calculate the difference between an old number and a new one. If you would like to check
                                our percentage change calculator,<b> <a href="/percent-change-calculator.php">click
                                        here.</a></b></p>
                            <p class="desc">Percentage Difference is used when both values mean the same kind of thing.
                                For example, the population of two countries. Also, in Percentage Difference we ignore
                                any minus sign because we cannot say which value is more important, “up” (positive) or
                                “down” (negative). We just say the difference in numbers. </p>
                            <p class="desc">The tool makes use of the absolute value of the difference between the two
                                values and divides the result by the average of the two values to <b>calculate the
                                    percent difference</b> of two values.</p>
                            <p class="desc">Here is it in a simpler form:</p>
                            <ul class="uldiffpage">
                                <li>It finds the difference between the two values (Value 1 - Value 2)</li>
                                <li>It finds the absolute value of the difference( |Value1 - Value 2|)</li>
                                <li>The average of the two values is found ( (Value 1 + Value 2) / 2)</li>
                                <li>It divides the absolute value found earlier by the average of the two values and
                                    multiples it by a 100.</li>
                            </ul>
                            <p class="desc">The good thing about this calculator is that you don’t have to watch all of
                                that happen. Its efficiency also allows for easy use.</p>

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
    <!--            }-->

    <!--        })-->
    <!--      })(i);-->
    <!--    }-->

    <!--  </script>-->
</body>

</html>