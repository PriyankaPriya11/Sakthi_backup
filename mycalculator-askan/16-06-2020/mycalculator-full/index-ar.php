<!doctype html>
<html ⚡ lang="@de">

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
    <style amp-custom>
    <?php readfile(getcwd() . "/style.css");
    ?>
    </style>
</head>

<body class="homePage ar">
    <?php  readfile( getcwd() . "/header-ar.php"); ?>


    <!-- <amp-img src="https://img.icons8.com/android/24/000000/share.png"> -->
    <section id="main">
        <div class="container">
            <div class="Percentage">
                <h1 class="m-bottom">حاسبة النسبة المئوية </h1>
                <p class="desc">حاسبة النسبة المئوية هي أداة مجانية على الإنترنت لحساب النسب المئوية</p>
                <div class="addto"> <button class="addToPhone_btn" on="tap:my-lightbox"> Add to Phone </button></div>
                <!--1s calculation-->
                <div class="overflow">
                    <div class="form block" amp-fx="fly-in-bottom">
                        <h2>طرق حساب النسبة المئوية </h2>
                        <div class="img-cal">
                            <amp-img alt="Percent Calculator" src="images/percent-calculator.png" width="500"
                                height="300" layout="responsive" class="heartBeat"></amp-img>
                        </div>

                        <!--1st formula-->
                        <div class="FormBlock">
                            <amp-bind-macro id="calc" arguments="totl_amt" expression="totl_amt / 100"></amp-bind-macro>
                            <form id="myform" method="post" action-xhr="https://www.askantech.com/amp_test/validate.php"
                                target="_blank">
                                <div class="row dFlex w1 w2">
                                    <div class="row1 rowarr">
                                        <div class="text1Home ss-cot">
                                            <label class="label-text">ما هي</label>
                                        </div>
                                        <div class="inputHome inputfld_home new_input">
                                            <input type="number" min="1" size="3" id="amount" class="input-fld" required
                                                name="percentage1"
                                                on="input-throttled:AMP.setState({getinput:{per2: event.value}});" />
                                        </div>
                                        <div class="text1Home nw_txt1">
                                            <label class="label-text">بالمئة من</label>
                                        </div>
                                        <div class="inputHome inputfld_home new_input">
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
                                            <label class="label-text">؟</label>
                                        </div>
                                    </div>
                                    <div class="row2 mw661">
                                        <div class="row results">
                                            <div class="calculateDiv">
                                                <input type="submit" value="احسب" class="calculateBtn">
                                                <!-- <button class="a-bouns calculateBtn" type="button" on="tap: AMP.setState({
                                        mycalc2:{
                                            value1:  calc2(getinput.per2) / getinput.totl_amt2
                                        } 
                                      })">احسب</button> -->
                                            </div>
                                            <div class="inputHome new_input"
                                                style="border: 1px solid #ccc;border-radius: 7px;padding: 19px 19px 19px 6px;min-width: 90px;">
                                                <div submit-success
                                                    style="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: system-ui;">
                                                    <template type="amp-mustache">
                                                        {{output}}
                                                    </template>
                                                </div>
                                                <!-- <input type="text" readonly="" [value]="(mycalc2.value1).toFixed(2)"
                                                class="input_result input-fld input-center"> -->
                                            </div>
                                            <!--<div class="text1Home text1Home2">-->
                                            <!--    <label class="label-text">% </label>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>

                    <!--2nd formula-->
                    <div class="FormBlock">
                        <amp-bind-macro id="calc2" arguments="per2" expression="per2 * 100"></amp-bind-macro>
                        <form id="myform" method="post" action-xhr="https://www.askantech.com/amp_test/validate2.php"
                            target="_blank">
                            <div class="row dFlex w2">
                                <div class="row1">
                                    <!--<div class="text1Home">-->
                                    <!--    <label class="label-text">ما هو</label>-->
                                    <!--</div>-->
                                    <div class="inputHome inputfld_home new_input">

                                        <input type="number" min="1" size="7" id="percentage" class="input-fld" required
                                            name="percentage3"
                                            on="input-throttled:AMP.setState({getinput3:{totl_amt3: event.value}});" />
                                    </div>
                                    <div class="text1Home nw_txt11">
                                        <label class="label-text">هو كم بالمئة من</label>
                                    </div>
                                    <div class="inputHome inputfld_home new_input">
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
                                        <label class="label-text">؟</label>
                                    </div>
                                </div>
                                <div class="row2 mw661">
                                    <div class="row results">
                                        <div class="calculateDiv">
                                            <input type="submit" value="احسب" class="calculateBtn">
                                            <!-- <button class="a-bouns calculateBtn" type="button" on="tap: AMP.setState({
                                        mycalc2:{
                                            value1:  calc2(getinput.per2) / getinput.totl_amt2
                                        } 
                                      })">احسب</button> -->
                                        </div>
                                        <div class="inputHome new_input "
                                            style="border: 1px solid #ccc;border-radius: 7px;padding: 19px 19px 19px 6px;min-width: 90px;">
                                            <div submit-success
                                                style="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: system-ui;">
                                                <template type="amp-mustache">
                                                    {{output}}
                                                </template>
                                            </div>
                                            <!-- <input type="text" readonly="" [value]="(mycalc2.value1).toFixed(2)"
                                                class="input_result input-fld input-center"> -->
                                        </div>
                                        <div class="text1Home text1Home2 home_label nw_lable">
                                                <label class="label-text">% </label>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!--3rd formula-->
                    <div class="FormBlock">
                        <amp-bind-macro id="calc3" arguments="totl_amt3" expression="totl_amt3 * 100">
                        </amp-bind-macro>
                        <form id="myform" method="post" action-xhr="https://www.askantech.com/amp_test/validate3.php"
                            target="_blank">
                            <div class="row dFlex  w2 w3">
                                <div class="row1">
                                    <div class="inputHome inputfld_home new_input">
                                        <input type="number" min="1" size="3" id="amount" class="input-fld" required
                                            name="percentage5"
                                            on="input-throttled:AMP.setState({getinput4:{out4: event.value}});" />
                                    </div>
                                    <div class="text1Home ss-cot_1">
                                        <label class="label-text">هو</label>
                                    </div>
                                    <div class="inputHome inputfld_home new_input">
                                        <input type="number" min="1" size="7" id="percentage" class="input-fld" required
                                            name="percentage6"
                                            on="input-throttled:AMP.setState({getinput4:{totl_amt4: event.value}});" />
                                        <div submit-error style="margin-left: -140%; color:red; margin-top:8px;">
                                            <template type="amp-mustache">
                                                {{message}}.
                                            </template>
                                        </div>
                                    </div>
                                    <div class="text1Home ss-cot_2">
                                        <label class="label-text">بالمئة من كم ؟</label>
                                    </div>

                                    <!-- <div class="text1Home">
                    <label class="label-text">?</label>
                </div>  -->
                                </div>
                                <div class="row2 mw66">
                                    <div class="row results">
                                        <div class="calculateDiv">
                                            <input type="submit" value="احسب" class="calculateBtn">
                                            <!-- <button class="a-bouns calculateBtn" type="button" on="tap: AMP.setState({
                                        mycalc2:{
                                            value1:  calc2(getinput.per2) / getinput.totl_amt2
                                        } 
                                      })">احسب</button> -->
                                        </div>
                                        <div class="inputHome new_input "
                                            style="border: 1px solid #ccc;border-radius: 7px;padding: 19px 19px 19px 6px;min-width: 90px;">
                                            <div submit-success
                                                style="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: system-ui;">
                                                <template type="amp-mustache">
                                                    {{output}}
                                                </template>
                                            </div>
                                            <!-- <input type="text" readonly="" [value]="(mycalc2.value1).toFixed(2)"
                                                class="input_result input-fld input-center"> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!--4th formula-->
                    <div class="FormBlock">
                        <amp-bind-macro id="calc4" arguments="totl_amt4" expression="totl_amt4 * 100">
                        </amp-bind-macro>
                        <form id="myform" method="post" action-xhr="https://www.askantech.com/amp_test/validate4.php"
                            target="_blank">
                            <div class="row dFlex dFlex1 w2 w4">
                                <div class="row1">
                                    <div class="text1Home ss-cot-3">
                                        <label class="label-text">كم بالمئة هي</label>
                                    </div>
                                    <div class="inputHome inputhome4 inputfld_home nw_input">
                                        <input type="number" min="1" size="7" id="percentage" class="input-fld" required
                                            name="percentage7"
                                            on="input-throttled:AMP.setState({getinput5:{totl_amt5: event.value}});" />
                                    </div>
                                    <div class="text1Home">
                                        <label class="label-text">من </label>
                                    </div>
                                    <input type="hidden" name="ar" value="ar" />
                                    <div class="inputHome inputhome4 inputfld_home nw_input">
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
                                        <label class="label-text">؟</label>
                                    </div>
                                </div>
                                <div class="row2 mw66">
                                    <div class="row results">
                                        <div class="calculateDiv">
                                            <input type="submit" value="احسب" class="calculateBtn">
                                            <!-- <button class="a-bouns calculateBtn" type="button" on="tap: AMP.setState({
                                        mycalc2:{
                                            value1:  calc2(getinput.per2) / getinput.totl_amt2
                                        } 
                                      })">احسب</button> -->
                                        </div>
                                        <div class="inputHome new_input "
                                            style="border: 1px solid #ccc;border-radius: 7px;padding: 19px 19px 19px 6px;min-width: 90px;">
                                            <div submit-success
                                                style="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: system-ui;">
                                                <template type="amp-mustache">
                                                    {{output}}
                                                </template>
                                            </div>
                                            <!-- <input type="text" readonly="" [value]="(mycalc2.value1).toFixed(2)"
                                                class="input_result input-fld input-center"> -->
                                        </div>
                                        <div class="text1Home text1Home2 home_label nw_lable">
                                                <label class="label-text">% </label>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!--5th forula-->
                    <div class="FormBlock">
                        <amp-bind-macro id="calc5" arguments="totl_amt5" expression="100 / totl_amt5">
                        </amp-bind-macro>
                        <form id="myform" method="post" action-xhr="https://www.askantech.com/amp_test/validate5.php"
                            target="_blank">

                            <div class="row dFlex dFlex1 w5 w66">
                                <div class="row1">
                                    <!--<div class="text1Home">-->
                                    <!--    <label class="label-text">ما هي النسبة من</label>-->
                                    <!--</div>-->
                                    <div class="inputHome inputhome4 inputfld_home ds_input">
                                        <input type="number" size="3" min="1" id="amount" class="input-fld" required
                                            name="percentage9"
                                            on="input-throttled:AMP.setState({getinput6:{per6: event.value}});" />
                                    </div>
                                    <div class="text1Home">
                                        <label class="label-text">ناقص / زائد</label>
                                    </div>
                                    <div class="inputHome inputfld_home ds_input">
                                        <input type="number" size="7" id="percentage" class="input-fld" required
                                            name="percentageten"
                                            on="input-throttled:AMP.setState({getinput6:{totl_amt6: event.value}});" />
                                        <div submit-error style="margin-left: -140%; color:red; margin-top:8px;">
                                            <template type="amp-mustache">
                                                {{message}}.
                                            </template>
                                        </div>
                                    </div>
                                    <div class="text1Home inputhome4">
                                        <label class="label-text">؟ %</label>
                                    </div>
                                </div>
                                <div class="row2 mw66">
                                    <div class="row results">
                                        <div class="calculateDiv">
                                            <input type="submit" value="احسب" class="calculateBtn">
                                            <!-- <button class="a-bouns calculateBtn" type="button" on="tap: AMP.setState({
                                        mycalc2:{
                                            value1:  calc2(getinput.per2) / getinput.totl_amt2
                                        } 
                                      })">احسب</button> -->
                                        </div>
                                        <div class="inputHome new_input"
                                            style="border: 1px solid #ccc;border-radius: 7px;padding: 19px 19px 19px 6px;min-width: 90px;">
                                            <div submit-success
                                                style="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: system-ui;">
                                                <template type="amp-mustache">
                                                    {{output}}
                                                </template>
                                            </div>
                                            <!-- <input type="text" readonly="" [value]="(mycalc2.value1).toFixed(2)"
                                                class="input_result input-fld input-center"> -->
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>

            </div>
            <div class="overflow">
                    <div class="form block" amp-fx="fly-in-bottom">
                        <!-- <div class="Homecontent">  -->
                        <div class="overflow ss-arab">
                            <p class="desc"> <b> صفحة حاسبة النسبة المئوية</b></p>
                            <p class="desc">من المحتمل أنك اضطررت لإجراء حسابات معقدة تحتوي على نسب مئوية والتي يجب عليك حلها خلال وقت قصير، قد حللت عدة مسائل مع الانتهاء بإجابات غير دقيقة، أو ربما قد تساءلت كيف من الممكن أن أجد النسبة المئوية لرقم معين. في حال أنك تساءلت أين من الممكن إيجاد وسيلة تساعد على توفير الوقت من خلال إيجاد الإجابة الصحيحة بوقت سريع، فحاسبة النسبة المئوية هي حلك الأفضل</p>
                            <p class="desc">تتواجد النسب المئوية غالبا في العديد من حساباتنا. في الرياضيات، تتألف النسب المئوية من عوامل أو أرقام تمثل أقسام من العدد 100. يمكننا حساب النسبة المئوية باستخدام مجموعة من الصيغ المختلفة. اعتمادا على طبيعة المسألة التي نحاول حلها، تذكر كل هذه الصيغ قد لا يكون من الامر السهل دائما، او ربما يمكننا الخلط بينهم وارتكاب الأخطاء بسهولة؛ من الممكن أن تكون أيضا مضيعة للوقت</p>
                            <p class="desc">حاسبة النسبة المئوية هي وسيلة رائعة لإيجاد النسبة المئوية، إيجاد متوسط النسبة المئوية، والعديد من المسائل الحسابية التي تحتوي على نسب مئوية. على سبيل المثال، يمكنك بسهولة حل مسائل مثل إيجاد 20 في المئة من 30، 20 في المئة من 50، 20 في المئة من 15، أو 15 في المئة من 50. حاسبة النسبة المئوية تساعد على حل مثل هذه المسائل بسرعة وسهولة</p>
                            <p class="desc">على شبه موقع ماث بابا حاسبة النسبة المئوية قادرة على حل جميع هذه المسائل عن طريق استخدام الصيغ الصحيحة. لا داعي للقلق بعد الآن بشأن تذكر الصيغة الموافقة لمسألة معينة أو حتى كتابة سلسلة من المعادلات التي تأخذ العديد من الأسطر الطويلة. كما أنك أيضا لا تحتاج لاستخدام الآلات الحاسبة، كل هذا العمل يتم إنجازه لك بالمجان</p>
                                <p class="desc">استخدام هذه الآلات الحاسبة لا يتطلب منك العديد من المعلومات، كما أن واجهة الاستخدام البسيطة تجعل الأمر يبدو سهل الاستخدام. بغض النظر عن سؤال الرياضيات الخاص بك، كل ما عليك فعله هو إدخال القيم المتطلب حسابها، ثم الضغط على احسب</p>
                                <!-- <p class="desc">لا يهم إذا كانت قيم هذه الارقام عالية أو منخفضة جدًا؛ يتم حل جميع المعادلات بسرعة وبدقة. لذلك اسمح للحاسبة بمساعدتك وجعل حسابات نسبتك المئوية في غاية السهولة. يمكنك أيضًا تجريب حاسب نسبة التغيير وحاسب فرق النسبة المئوية وحاسب الاكرامية وستثبت هذه الآلات الحاسبة الخاصة بنا أنها ذو فائدة جديرة بالذكر</p> -->
                                <p class="desc"><span>لا يهم إذا كانت قيم هذه الارقام عالية أو منخفضة جدًا؛ يتم حل جميع المعادلات بسرعة وبدقة. لذلك اسمح للحاسبة بمساعدتك وجعل حسابات نسبتك المئوية في غاية السهولة. يمكنك أيضًا تجريب حاسب</span><span class="c4">&nbsp;</span><span class="c16 c4"><a class="c15" href="/percent-change-calculator-ar.php">نسبة التغيير</a></span><span class="c4">&nbsp;</span><span>وحاسب</span><span class="c4">&nbsp;</span><span class="c16 c4"><a class="c15" href="/percent-difference-ar.php">فرق النسبة المئوية</a></span><span class="c4">&nbsp;</span><span>وحاسب </span><span class="c4 c16"><a class="c15" href="/tip-calculator-ar.php">الاكرامية</a></span><span class="c4 c59">&nbsp;</span><span class="c0">وستثبت هذه الآلات الحاسبة الخاصة بنا أنها ذو فائدة جديرة بالذكر</span></p>
                                                    <!-- <p class="desc">It doesn’t matter if the values are high numbers or very low ones; all
                                    the equations are solved fast and accurately. So allow the calculator to assist
                                    you and make your percentage calculations a breeze. Also try out our <b><a
                                            href="/percent-change-calculator.php">percent change</a> and <a
                                            href="/percent-difference.php">percent difference</a><b> calculators and
                                            our <b><a href="/tip-calculator.php">tip calculator</a><b> would prove
                                                    useful to you.</p> -->
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
        </div>
        </div>
        <div class="share">
            <!--soical share-->
            <ul>
                <li>
                    <amp-social-share width="40" height="40" type="facebook" data-param-app_id="254325784911610">
                    </amp-social-share>
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