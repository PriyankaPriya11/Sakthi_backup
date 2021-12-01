<!doctype html>
<html ⚡>

<head>
    <meta charset="utf-8">
    <title>حساب الراتب </title>

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

<body class="ar tbl salCal">
    <?php  readfile( getcwd() . "/header-ar.php"); ?>

    <section id="main">
        <div class="container">
            <div class="Percentage">
                <h1 class="m-bottom">طريقة حساب النسبة المئوية للراتب</h1>
                <p class="desc">حاسبة النسبة المئوية هي أداة مجانية على الإنترنت لحساب النسب المئوية</p>
                <div class="addto"> <button class="addToPhone_btn" on="tap:my-lightbox"> Add to Phone </button></div>
                <!--1s calculation-->
                <div class="overflow">
                    <div class="form block" amp-fx="fly-in-bottom">
                        <h2>حساب زيادة الراتب</h2>
                        <div class="img-cal">
                            <amp-img alt="Paycheck Calculator" src="images/salary-calculator.png" width="500"
                                height="300" layout="responsive" class="heartBeat"></amp-img>
                        </div>

                        <amp-bind-macro id="calc11" arguments="per11" expression="(+per11 + +100) / 100">
                        </amp-bind-macro>
                        <form id="myform" method="post"
                            action-xhr="https://www.askantech.com/amp_test/salary_validate1.php" target="_blank">
                            <div class="FormWrapper pay_first_form pay_ar_mble">
                                <div class="row">
                                    <div class="text1 textheight pay_text1_chck">
                                        <label class="label-text">الراتب الحالي</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="1" size="3" id="amount" class="input-fld"
                                            on="input-throttled:AMP.setState({getinput11:{totl_amt11: event.value}});"
                                            required name="salary1" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1 textheight pay_text1_chck">
                                        <label class="label-text"> نسبة الزيادة/ النقصان في الراتب</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" size="7" id="percentage" class="input-fld"
                                            on="input-throttled:AMP.setState({getinput11:{per11: event.value}});"
                                            required name="salary2" />
                                    </div>
                                    <div class="text2">
                                        <label class="label-text">%</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="calculateDiv2">
                                        <!-- <button type="button" class="a-bouns calculateBtn" on="tap: AMP.setState({
                                            mycalc11:{
                                                value1:  round(calc11(getinput11.per11) * getinput11.totl_amt11)
                                            } 
                                        })">احسب</button> -->
                                        <input type="submit" value="احسب" class="calculateBtn calculateBtn4"
                                            style="margin-right:0%">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="text1 textheight pay_text1_chck">
                                        <label class="label-text">الراتب الجديد</label>
                                    </div>
                                    <div class="inputHome inputhomecopy inputhomecopy3 ar_mb_pc pa_ar_check">
                                        <div submit-success
                                            style="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
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
                        <h2>حساب تغيير الراتب</h2>
                        <div class="img-cal">
                            <amp-img alt="My Pay" src="images/salary-calculator.png" width="500" height="300"
                                layout="responsive" class="heartBeat"></amp-img>
                        </div>

                        <amp-bind-macro id="calc12" arguments="per12" expression="(+per12) + (+0)"></amp-bind-macro>
                        <form id="myform" method="post"
                            action-xhr="https://www.askantech.com/amp_test/salary_validate2.php" target="_blank">
                            <div class="FormWrapper">
                                <div class="row">
                                    <div class="text1 textheight">
                                        <label class="label-text">الراتب الحالي</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="1" id="amount" class="input-fld"
                                            on="input-throttled:AMP.setState({getinput12:{totl_amt12: event.value}});"
                                            required name="salary3" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1 textheight">
                                        <label class="label-text">الراتب الجديد</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="1" id="percentage" class="input-fld"
                                            on="input-throttled:AMP.setState({getinput12:{per12: event.value}});"
                                            required name="salary4" />
                                    </div>
                                     <!-- <div class="text2">
                                        <label class="label-text">%</label>
                                    </div> -->
                                </div>
                                <div class="row">
                                    <div class="calculateDiv2">
                                        <!-- <button type="button" class="a-bouns calculateBtn" on="tap: AMP.setState({
                                            mycalc12:{
                                                value1:  ((calc12(getinput12.per12) - getinput12.totl_amt12) / getinput12.totl_amt12) * 100
                                            } 
                                        })">احسب</button> -->
                                        <input type="submit" value="احسب" class="calculateBtn calculateBtn4"
                                            style="margin-right:0%">
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="text1 textheight">
                                        <label class="label-text">نسبة التغير</label>
                                    </div>
                                    <div class="inputHome inputhomecopy inputhomecopy3 ar_mb_pc pa_ar_check">
                                        <div submit-success
                                            style="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
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
                        <h2> حساب ساعات العمل</h2>
                        <div class="img-cal">
                            <amp-img alt=" Salary To Hourly" src="images/salary-calculator.png" width="500" height="300"
                                layout="responsive" class="heartBeat"></amp-img>
                        </div>

                        <amp-bind-macro id="calc14" arguments="totl_amt14" expression="+totl_amt14 +  +0">
                        </amp-bind-macro>
                        <form id="myform" method="post"
                            action-xhr="https://www.askantech.com/amp_test/salary_validate3.php" target="_blank">
                            <div class="FormWrapper FormWrapper8">
                                <div class="row">
                                    <div class="text1 text1copy2 textheight">
                                        <label class="label-text">الراتب الشهري </label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="1" id="amount" class="input-fld"
                                            on="input-throttled:AMP.setState({getinput14:{totl_amt14: event.value}});"
                                            required name="salary5" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1 text1copy2 textheight">
                                        <label class="label-text">عدد ساعات العمل في اليوم</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="1" max="24" id="percentage" class="input-fld"
                                            on="input-throttled:AMP.setState({getinput14:{hpd14: event.value}});"
                                            required name="salary6" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1 text1copy2 textheight">
                                        <label class="label-text">عدد أيام العمل في الأسبوع </label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="1" max="31" id="nyear" class="input-fld"
                                            on="input-throttled:AMP.setState({getinput14:{nodpw14: event.value}});"
                                            required name="salary7" />
                                    </div>
                                </div>
                                <div class="calculateDiv2">
                                    <!-- <button type="button" class="a-bouns calculateBtn" on="tap: AMP.setState({
                                     mycalc14:{
                                        value1: calc14(getinput14.totl_amt14),
                                        value2: calc14(getinput14.totl_amt14) * 12 ,
                                        value3: calc14(getinput14.totl_amt14) / 4.345 ,
                                        value4: (calc14(getinput14.totl_amt14) / 4.345) / 5 ,
                                        value5: ((calc14(getinput14.totl_amt14) / 4.345) / 5) / 9 ,
                                        value6: (((calc14(getinput14.totl_amt14) / 4.345) / 5) / 9) / 60
                                     } 
                                       })">احسب </button> -->
                                    <input type="submit" value="احسب" class="calculateBtn calculateBtn4"
                                        style="margin-right:0%">
                                </div>
                                <div class="row">
                                    <div submit-success
                                        style="font-size: 15px;display: block;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                        <template type="amp-mustache">
                                            <div class="row">
                                                <div class="text1 text1copy2 textheight">
                                                    <label class="label-text">الأجر في الدقيقة</label>
                                                </div>
                                                <div class="inputHome inputhomecopy inputhomecopy3 ar_mb_pc pa_ar_check"
                                                    style="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                                    {{output1}}
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="text1 text1copy2 textheight">
                                                    <label class="label-text">الأجر في الساعة</label>
                                                </div>
                                                <div class="inputHome inputhomecopy inputhomecopy3 ar_mb_pc pa_ar_check"
                                                    style="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                                    {{output2}}
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="text1 text1copy2 textheight">
                                                    <label class="label-text">الأجر اليومي</label>
                                                </div>
                                                <div class="inputHome inputhomecopy inputhomecopy3 ar_mb_pc pa_ar_check"
                                                    style="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                                    {{output3}}
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="text1 text1copy2 textheight">
                                                    <label class="label-text">الأجر السنوي</label>
                                                </div>
                                                <div class="inputHome inputhomecopy inputhomecopy3 ar_mb_pc pa_ar_check"
                                                    style="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
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
                            <h2>حاسبة الراتب المستقبلي</h2>
                            <div class="img-cal">
                                <amp-img alt="Salary Increment Calculator" src="images/salary-calculator.png"
                                    width="500" height="300" layout="responsive" class="heartBeat"></amp-img>
                            </div>
                            <div class="FormWrapper FormWrapper2">
                                <amp-iframe id="myiframe" title="custom page" layout="responsive" width="320"
                                    height="400" sandbox="allow-scripts  allow-popups allow-forms" frameborder="0"
                                    src="https://www.askantech.com/amp_test/sal-js-ar.php">
                                </amp-iframe>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="overflow">
                    <div class="form block" amp-fx="fly-in-bottom">
                        <!-- <h2>Percent Decrease Calculator</h2> -->
                        <div class="overflow Contentpad ss-arab">
                            <p class="desc">من الجيد معرفة صافي دخلك من الوظيفة إذ يساعدك هذا الأمر على وضع ميزانية للفواتير المنزلية، ملء استمارات الدين المترتبة عليك أو حتى يمكن اعتبار صافي الراتب هدية شخصية كونك تكسبه بشكل مستحق بعد ساعات من العمل. إن حساب مقدار ما يدخل في جيبك بالضبط بعد الضرائب من الممكن أن يكون أمرأً شاقأً و يضعك أمام عددٍ كبير من الأرقام التي ينبغي ترتيبها.</p>
                            <p class="desc">حاسبة الراتب أداة رائعة عبر الإنترنت تساعدك في تدقيق حساباتك وتقدم أرقامًا دقيقة في كل مرة. لن تتعرض بعد الآن لذلك الموقف المفاجئ الذي لربمّا تعرضت له سابقاً عندما اكتشفت فجأةً أنه ينقصك بضع دولاراتٍ أو سنتات.</p>
                            <p class="desc">تساعدك حاسبات الرواتب الخاصة بنا على معرفة مدى التغيير في راتبك. إنها تحسب المقابل الساعي، أو اليومي، وحتى الأسبوعي من راتبك. كما و تجعل الأمور أسهل بالنسبة لك ولن تحتاج إلى آلة حاسبة وورقة وقلم للتعامل مع الأرقام. إنها توفر وقتك ونحن نضمن نتيجة دقيقة في كل مرة.<p>
                            <p class="desc"><b>حاسبة زيادة الراتب</b></p>
                                    <p class="desc">تساعدك حاسبة زيادة الراتب الخاصة بنا على حساب زيادة أجرك أو راتبك الجديد بعد الزيادة. حيث إنها تحسب القيمة التي سوف تحظى بها بعد الزيادة. ضع راتبك الحالي ونسبة الزيادة فقط، وستحصل على قيمة راتبك الجديد بعد الزيادة.</p>
                                    <p class="desc">هكذا نحسب راتبك الجديد:</p>
                                    <p class="desc">راتبك الحالي + (راتبك الحالي * نسبة الزيادة) / 100 = راتبك الجديد بعد الزيادة.</p>
                                    <p class="desc"><b>حاسبة تغيير الراتب</b></p>
                                    <p class="desc">تساعدك حاسبة تغيير الراتب على حساب النسبة المئوية لزيادة دخلك بسهولة، حتى تتمكن من معرفة كم أنت أفضل حالاً مع دخلك الجديد. كما و تزودك بنسبة توضح لك كمّ التغيير الذي شهده راتبك.</p>
                                    <p class="desc">نسبة التغيير في راتبي = ((راتب جديد - راتب حالي) / راتب حالي) * 100</p>
                                    <p class="desc"><b>حاسبة ساعات العمل </b></p>
                                    <p class="desc">ستحول حاسبة ساعات العمل مرتبك الشهري إلى ما يعادله في الدقيقة، أو الساعة، أو اليوم، أو الأسبوع، أو الشهر, أو السنة.</p>
                                    <p class="desc">بمجرد إدخال المبلغ الذي تجنيه في الشهر، وساعات العمل اليومية، و عدد أيام العمل الأسبوعية ، يمكنك ببساطة معرفة راتبك الاسبوعي،  واليومي وحتى معرفة المبلغ الذي تجنيه كل ساعة!</p>
                                    <p class="desc">كيف نحسب الراتب بما يقابله في الدقيقة، أو الساعة، أو اليوم، أو الأسبوع، أو الشهر؟</p>
                                        <p class="desc">  نحسب عدد ساعات العمل في الأسبوع بضرب ساعات العمل اليومية بعدد أيام العمل في الأسبوع.</p>
                                        <p class="desc"> يتم احتساب راتبك السنوي عن طريق ضرب راتبك الشهري ب 12 (شهر في عام)</p>
                                        <p class="desc">  ثم يتم تقسيم راتبك السنوي على 52.14 (عدد الأسابيع التي لدينا في السنة) للحصول على راتبك الأسبوعي </p>
                                        <p class="desc">   يتم تقسيم نتيجة الخطوة 3 على نتيجة الخطوة 1 للحصول على راتبك لكل ساعة. </p>
                                    <p class="desc"><b>حاسبة الراتب المستقبلي</b></p>
                                    <p class="desc">إن الزيادة في الراتب تعني أمراً واحداً و هو المزيد من المال! الأمر الذي نحبه جميعاً. زيادات الراتب ترفع راتبنا الأساسي ، وعادة ما يتم دفعها في نهاية كل عام.</p>                                    
                                    <p class="desc">لذلك، إذا كنت قد كسبت سابقاً 40،000 دولار في السنة ، فمن الممكن أن تتلقى زيادة سنوية في الراتب بقيمة 4000 دولار. تساعدك حاسبة زيادة الراتب الخاصة بنا على معرفة مقدار الزيادة التي ستكسبها عن طريق ادخال راتبك الحالي، و معدل الزيادة في دخلك السنوي و عدد سنوات الخدمة.</p>
                                    <p class="desc">الراتب الحالي الخاص بك + (زيادة الراتب / 100) = الراتب الجديد.</p>                                    
                                    <p class="desc">تتكرر العملية لكل عام، إذا أدخلت ست سنوات، سَتَتكررُ ستَّ مرَّات. تُظهِر حاسبة الراتب هذه المبلغ الإجمالي بعد الزيادة في كل عام.</p>
                                    <!-- <p class="desc">لدينا أدوات أخرى لتلبية احتياجاتك. هل تريد حساب درجاتك؟ جرب حاسبة الدرجات. يمكنك أيضًا التحقق من مقدار الخصم الذي ستحصل عليه من عملية الشراء تلك باستخدام حاسبة الخصم لدينا.</p> -->
                                    <p class="desc"><span>لدينا أدوات أخرى لتلبية احتياجاتك. هل تريد حساب درجاتك؟ جرب </span><span class="c16"><a class="c15" href="/final-grade-calculator-ar.php">حاسبة</a></span><span class="c16"><a class="c15" href="/final-grade-calculator-ar.php">&nbsp;الدرجات</a></span><span>. يمكنك أيضًا التحقق من مقدار الخصم الذي ستحصل عليه من عملية الشراء تلك باستخدام </span><span class="c16"><a class="c15" href="/discount-calculator-ar.php">حاسبة الخصم</a></span><span class="c0">&nbsp;لدينا.</span></p>
                        </div>
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




    <?php readfile( getcwd() . "/footer-ar.php"); ?>

</body>

</html>