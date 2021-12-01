<!doctype html>
<html ⚡>

<head>
    <meta charset="utf-8">
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

<body class="ar tbl">
    <?php  readfile( getcwd() . "/header-ar.php"); ?>

        <section>
            <div class="container">
                <div class="Percentage">
                    <h1 class="m-bottom">حساب نسبة الخصم</h1>
                    <p class="desc">اسبة النسبة المئوية هي أداة مجانية على الإنترنت لحساب النسب المئوية.</p>
                    <div class="overflow">
                        <div class="form block calContainer" amp-fx="fly-in-bottom">
                            <h2>طريقة حساب الخصم </h2>
                            <div class="img-cal">
                                <amp-img alt="Discount Calculator" src="images/discount-calculator.png" width="500" height="300" layout="responsive" class="heartBeat"></amp-img>
                            </div>
                            <amp-bind-macro id="calc8" arguments="totl_amt8, per8" expression="totl_amt8 / 100"></amp-bind-macro>
                            <div class="FormWrapper">
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text">السعر الاصلي</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" size="3" id="amount" class="input-fld" on="input-throttled:AMP.setState({getinput8:{per8: event.value}})" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text">نسبة الخصم</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" size="7" id="percentage" class="input-fld" on="input-throttled:AMP.setState({getinput8:{totl_amt8: event.value}})" />
                                    </div>
                                    <div class="text2">
                                        <label class="label-text">%</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="calculateDiv2">
                                        <button type="button" class="a-bouns calculateBtn" on="tap: AMP.setState({
                     mycalc8:{
                         value1: calc8(getinput8.totl_amt8 * getinput8.per8),
                         value2: (getinput8.per8 - calc8(getinput8.totl_amt8 * getinput8.per8))
                     } 
                   })">احسب</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text">السعر النهائي</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" readonly="" [value]="(mycalc8.value2).toFixed(2)" class="input_result input-fld">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text">وفرت</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" readonly="" [value]="(mycalc8.value1).toFixed(2)" class="input_result input-fld">
                                    </div>

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

                    <!--1s calculation-->
                    <div class="overflow">
                        <div class="form block disC" amp-fx="fly-in-bottom">
                            <h2>حاسبة الخصم </h2>
                            <div class="img-cal">
                                <amp-img alt="Percentage Off Calculator " src="images/discount-calculator.png" width="500" height="300" layout="responsive" class="heartBeat"></amp-img>
                            </div>
                            <amp-bind-macro id="calc9" arguments="totl_amt9" expression="totl_amt9 / 100"></amp-bind-macro>
                            <div class="row FormWrapper">
                                <div class="row">
                                    <div class="text1 w100">
                                        <label class="label-text">السعر الاصلي</label>
                                    </div>
                                    <div class="input custInput">
                                        <input type="text" size="3" id="amount" class="input-fld" on="input-throttled:AMP.setState({getinput9:{per9: event.value}})" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1 w100">
                                        <label class="label-text">نسبة الخصم </label>
                                    </div>
                                    <div class="input custInput">
                                        <input type="text" size="7" id="percentage" class="input-fld" on="input-throttled:AMP.setState({getinput9:{totl_amt9: event.value}})" />
                                    </div>
                                    <div class="text2">
                                        <label class="label-text">%</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1 w100">
                                        <label class="label-text"> الضريبة المضافة (اختياري) </label>
                                    </div>
                                    <div class="input custInput">
                                        <input type="text" id="percentage" class="input-fld pb-0" on="input-throttled:AMP.setState({getinput9:{vat9: event.value}})" />
                                    </div>
                                    <div class="text2">
                                        <label class="label-text">%</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="calculateDiv2">
                                        <button type="button" class="a-bouns calculateBtn" on="tap: AMP.setState({
                     mycalc9:{
                         value3: calc9(getinput9.totl_amt9) * ((+getinput9.per9) + (+ getinput9.vat9)),
                         value4: (+getinput9.per9) + (+ getinput9.vat9) -  (calc9(getinput9.totl_amt9) * ((+getinput9.per9) + (+ getinput9.vat9))),
                         value5:  (+getinput9.per9) + (+ getinput9.vat9)
                     } 
                   })">احسب</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text padL27">السعر قبل الخصم</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" readonly="" [value]="mycalc9.value5" class="input_result input-fld">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text padL27">السعر النهائي </label>
                                    </div>
                                    <div class="input">
                                        <input type="text" readonly="" [value]="(mycalc9.value4).toFixed(2)" class="input_result input-fld">
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="text1">
                                        <label class="label-text"> التوفير</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" readonly="" [value]="(mycalc9.value3).toFixed(2)" class="input_result input-fld">
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
       data-href="https://mypercentcalculator.com/percentage-off.php">
    </amp-facebook-comments>
</div>
                    </div>
                </div>
        </section>


        <?php readfile( getcwd() . "/footer.php"); ?>
</body>

</html>