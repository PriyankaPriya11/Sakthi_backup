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
    <?php readfile(getcwd() . "/style.css");
    ?>
    </style>
</head>

<body class="ar tbl">
    <?php  readfile( getcwd() . "/header-ar.php"); ?>

    <section>
        <div class="container">
            <div class="Percentage">
                <h1 class="m-bottom">حساب نسبة الخصم</h1>
                <p class="desc">حاسبة النسبة المئوية هي أداة مجانية على الإنترنت لحساب النسب المئوية</p>
                <div class="addto"> <button class="addToPhone_btn" on="tap:my-lightbox"> Add to Phone </button></div>
                <div class="overflow">
                    <div class="form block calContainer" amp-fx="fly-in-bottom">
                        <h2>طريقة حساب الخصم </h2>
                        <div class="img-cal">
                            <amp-img alt="Discount Calculator" src="images/discount-calculator.png" width="500"
                                height="300" layout="responsive" class="heartBeat"></amp-img>
                        </div>
                        <amp-bind-macro id="calc8" arguments="totl_amt8, per8" expression="totl_amt8 / 100">
                        </amp-bind-macro>
                        <form id="myform" method="post"
                            action-xhr="https://www.askantech.com/amp_test/discount_validate1.php" target="_blank">
                            <div class=" FormWrapper FormWrapper13 form_dis_cal_ar">
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text">السعر الأصلي</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="1" size="3" id="amount" class="input-fld"
                                            on="input-throttled:AMP.setState({getinput8:{per8: event.value}});" required
                                            name="value1" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text">نسبة الخصم</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="0" size="7" id="percentage" max="100" class="input-fld"
                                            on="input-throttled:AMP.setState({getinput8:{totl_amt8: event.value}});"
                                            required name="value2" />
                                    </div>
                                    <div class="text2">
                                        <label class="label-text">%</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="calculateDiv2">
                                        <!-- <button type="button" class="a-bouns calculateBtn" on="tap: AMP.setState({
                                                mycalc8:{
                                                    value1: calc8(getinput8.totl_amt8 * getinput8.per8),
                                                    value2: (getinput8.per8 - calc8(getinput8.totl_amt8 * getinput8.per8))
                                                } 
                                            })">احسب</button> -->
                                        <input type="submit" value="احسب" id="calculateBtn" class="calculateBtn"
                                            style="margin-right:0%">
                                    </div>
                                </div>
                                <div class="row">
                                    <div submit-success
                                        style="font-size: 15px;display: block;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                        <template type="amp-mustache">
                                            <div class="row">
                                                <div class="text1 textheight">
                                                    <label class="label-text">السعر النهائي</label>
                                                </div>
                                                <div class="inputHome inputhomecopy mb_dc dis_ar_06_01"
                                                    style="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                                    {{output1}}
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="text1 textheight">
                                                    <label class="label-text">وفرت</label>
                                                </div>
                                                <div class="inputHome inputhomecopy mb_dc dis_ar_06_01"
                                                    style="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                                    {{output2}}
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
                            <amp-img alt="Percentage Off Calculator " src="images/discount-calculator.png" width="500"
                                height="300" layout="responsive" class="heartBeat"></amp-img>
                        </div>
                        <amp-bind-macro id="calc9" arguments="totl_amt9" expression="totl_amt9 / 100"></amp-bind-macro>
                        <form id="myform" method="post"
                            action-xhr="https://www.askantech.com/amp_test/discount_validate2.php" target="_blank">
                            <div class="row FormWrapper FormWrapper2 FormWrapper7 form_dis_cal_ar">
                                <!-- <div class="row"> -->
                                <div class="row">
                                    <div class="text1 text1copy2">
                                        <label class="label-text">السعر الأصلي</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="1" size="3" id="amount" class="input-fld"
                                            on="input-throttled:AMP.setState({getinput9:{per9: event.value}});" required
                                            name="value3" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1 text1copy2">
                                        <label class="label-text">نسبة الخصم</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="0" size="7" max="100" id="percentage" class="input-fld"
                                            on="input-throttled:AMP.setState({getinput9:{totl_amt9: event.value}});"
                                            required name="value4" />
                                    </div>
                                    <div class="text2">
                                        <label class="label-text">%</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1 text1copy2">
                                        <label class="label-text">ضريبة القيمة المضافة (الضريبة)</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="0" id="percentage" class="input-fld pb-0"
                                            on="input-throttled:AMP.setState({getinput9:{vat9: event.value}});" required
                                            name="value5" />
                                    </div>
                                    <div class="text2">
                                        <label class="label-text">%</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="calculateDiv2">
                                        <!-- <button type="button" class="a-bouns calculateBtn" on="tap: AMP.setState({
                                                mycalc9:{
                                                    value3: calc9(getinput9.totl_amt9) * ((+getinput9.per9) + (+ getinput9.vat9)),
                                                    value4: (+getinput9.per9) + (+ getinput9.vat9) -  (calc9(getinput9.totl_amt9) * ((+getinput9.per9) + (+ getinput9.vat9))),
                                                    value5:  (+getinput9.per9) + (+ getinput9.vat9)
                                                } 
                                            })">احسب</button> -->
                                        <input type="submit" value="احسب" class="calculateBtn calculateBtn3"
                                            style="margin-right:0%">
                                    </div>
                                </div>
                                <div class="row">
                                    <div submit-success
                                        style="font-size: 15px;display: block;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                        <template type="amp-mustache">
                                            <div class="row">
                                                <div class="text1 textheight text1copy2">
                                                    <label class="label-text padL27">السعر الأصلي مع الضريبة</label>
                                                </div>
                                                <div class="inputHome inputhomecopy inputhomecopy3 mb_dc dis_ar_06_01"
                                                    style="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                                    {{output1}}
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="text1 textheight text1copy2">
                                                    <label class="label-text padL27">سعر البيع مع الضريبة</label>
                                                </div>
                                                <div class="inputHome inputhomecopy inputhomecopy3 mb_dc dis_ar_06_01"
                                                    style="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                                    {{output2}}
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="text1 textheight text1copy2">
                                                    <label class="label-text">التوفير</label>
                                                </div>
                                                <div class="inputHome inputhomecopy inputhomecopy3 mb_dc dis_ar_06_01"
                                                    style="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                                    {{output3}}
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
    </section>

    <!-- fixed amount calculator -->


    <section>
        <div class="container">
            <div class="Percentage">

                <!--1s calculation-->
                <div class="overflow">
                    <div class="form block" amp-fx="fly-in-bottom">
                        <h2>حاسبة قيمة الخصم الثابتة </h2>
                        <div class="img-cal">
                            <amp-img alt="Salary Increment Calculator" src="images/salary-calculator.png" width="500"
                                height="300" layout="responsive" class="heartBeat"></amp-img>
                        </div>
                        <amp-bind-macro id="calc9" arguments="totl_amt9" expression="totl_amt9 / 100"></amp-bind-macro>
                        <form id="myform" method="post"
                            action-xhr="https://www.askantech.com/amp_test/discount_validate3.php" target="_blank">
                            <div class="row FormWrapper FormWrapper13 wid_dis_cal_box3 dis_30_cla ss-panel-bxd">
                                <div class="row">
                                    <div class="text1 text1copy2 dis_cal_30_ar">
                                        <label class="label-text">السعر قبل الخصم</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="1" size="3" id="amount" class="input-fld"
                                            on="input-throttled:AMP.setState({getinput9:{per9: event.value}});" required
                                            name="value6" />
                                    </div>
                                </div>
                                <div class="row">
                                
                                    <div class="text1 text1copy2 dis_cal_30_ar">
                                        <label class="label-text">مقدار الخصم    مبلغ الخصم</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="1" size="7" id="percentage" class="input-fld"
                                            on="input-throttled:AMP.setState({getinput9:{totl_amt9: event.value}});"
                                            required name="value7" />
                                    </div>
                                    <!-- <div class="text2">
                                        <label class="label-text">%</label>
                                    </div> -->
                                </div>
                                <div class="row">
                                    <div class="calculateDiv2">
                                        <input type="submit" value="احسب" class="calculateBtn calculateBtn3"
                                            style="margin-right:0%">
                                    </div>
                                </div>
                                <div class="row">
                                    <div submit-success
                                        style="font-size: 15px;display: block;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                        <template type="amp-mustache">
                                            <div class="row">
                                                <div class="text1 text1copy2 textheight dis_cal_30_ar">
                                                    <label class="label-text padL27" style="line-height: 24px;">السعر بعد الخصم</label>
                                                </div>
                                                <div class="inputHome inputhomecopy inputhomecopy3 mb_dc dis_ar_06_01"
                                                    style="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                                    {{output1}}
                                                </div>
                                               

                                            </div>
                                            <div class="row">
                                                <div class="text1 text1copy2 textheight dis_cal_30_ar">
                                                    <label class="label-text padL27" style="line-height: 24px;">نسبة الخصم</label>
                                                </div>
                                                <div class="inputHome inputhomecopy inputhomecopy3 mb_dc dis_ar_06_01"
                                                    style="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                                    {{output2}}
                                                </div>
                                                <div class="text2 dis_per_label">
                                        <label class="label-text">%</label>
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
            </div>
    </section>
    <!-- before and after price calculator -->

    <section>
        <div class="container">
            <div class="Percentage">

                <!--1s calculation-->
                <div class="overflow">
                    <div class="form block" amp-fx="fly-in-bottom">
                        <h2>السعر قبل و بعد الخصم</h2>
                        <div class="img-cal">
                            <amp-img alt="Salary Increment Calculator" src="images/salary-calculator.png" width="500"
                                height="300" layout="responsive" class="heartBeat"></amp-img>
                        </div>
                        <amp-bind-macro id="calc9" arguments="totl_amt9" expression="totl_amt9 / 100"></amp-bind-macro>
                        <form id="myform" method="post"
                            action-xhr="https://www.askantech.com/amp_test/discount_validate4.php" target="_blank">
                            <div class="row FormWrapper FormWrapper2 FormWrapper13 wid_dis_cal_box4 box4_grey">
                                <div class="row">
                                    <div class="text1 text1copy" style="min-width:140px">
                                        <label class="label-text">السعر القديم</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="1" size="3" id="amount" class="input-fld"
                                            on="input-throttled:AMP.setState({getinput9:{per9: event.value}});" required
                                            name="value8" />
                                    </div>
                                    <!-- <div class="text2">
                                        <label class="label-text">%</label>
                                    </div> -->
                                </div>
                                <div class="row">
                                    <div class="text1 text1copy" style="min-width:140px">
                                        <label class="label-text">السعر الجديد</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="1" size="7" id="percentage" class="input-fld"
                                            on="input-throttled:AMP.setState({getinput9:{totl_amt9: event.value}});"
                                            required name="value9" />
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="calculateDiv2">
                                        <input type="submit" value="احسب" class="calculateBtn calculateBtn3"
                                            style="margin-right:0%">
                                    </div>
                                </div>
                                <div class="row">
                                    <div submit-success
                                        style="font-size: 15px;display: block;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                        <template type="amp-mustache">
                                            <div class="row">
                                                <div class="text1 text1copy textheight" style="min-width:140px">
                                                    <label class="label-text padL27" style="line-height: 24px;">قيمة الخصم</label>
                                                </div>
                                                <div class="inputHome inputhomecopy inputhomecopy3 mb_dc dis_ar_06_01 box4_111"
                                                    style="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                                    {{output1}}
                                                </div>
                                                <div class="text2 dis_per_label">
                                        <label class="label-text">%</label>
                                    </div>

                                            </div>
                                            <div class="row">
                                                <div class="text1 text1copy textheight" style="min-width:140px">
                                                    <label class="label-text padL27"
                                                        style="line-height: 24px;">التوفير</label>
                                                </div>
                                                <div class="inputHome inputhomecopy inputhomecopy3 mb_dc dis_ar_06_01 box4_111"
                                                    style="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: Tahoma;">
                                                    {{output2}}
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
            </div>
            <div class="overflow">
                    <div class="form block" amp-fx="fly-in-bottom">
                        <!-- <h2>Percent Decrease Calculator</h2> -->
                        <div class="overflow Contentpad ss-arab">
                            <p class="desc">تعد معرفة كيفية حساب الخصم مهارة رياضية مفيدة جداً. وتأتي فائدة هذه المهارة حين تواجدك في المطاعم أو خلال القيام بالمبيعات في المتاجر أو حتى في شركتك الخاصة. انه من المشوق حقًا أن نعرف أن هناك عملية بيع منخفضة الثمن، أو أن بعض السلع تحتوي على خصم بنسبة مئوية </p>
                            <p class="desc">هنالك بعض الأشخاص يمكنهم  إجراء العمليات الرياضية بسهولة في رؤوسهم ومعرفة الأسعار المخفضة بأنفسهم، بينما يلجأ الآخرون إلى الإنترنت ليبحثوا عن كيفية حساب هذه الخصومات</p>
                            <p class="desc">إذا واجهت صعوبة في إيجاد بعض الخصومات، أو التخفيضات أو إذا كنت تبحث عن طريقة أفضل لحسابها والتي تضمن تقديم الإجابات الدقيقة، فمن المؤكد أن حاسبة الخصم هذه وحاسبة نسبة الخصم المئوية توفر لك الكثير من العبء والوقت <p>
                            <p class="desc"> وفي الواقع أن "الخصم" و"النسبة المئوية للخصم" يعنيان نفس الشيء بالضبط. تخيل مثلا أن أحد المتاجر قد أعلن عن بيع التصفية، وأن على جميع السلع خصم بنسبة %10، هذا يعني أن هناك خصماً بنسبة %10 </p>
                            <p class="desc">ستساعدك الحاسبات الخاصة بنا على معرفة كمية المال الذي يجب عليك دفعه وكمية المال التي وفرت. فهي ليست سهلة الاستخدام وحسب بل انها تضمن تقديم الإجابات الأكثر دقة في كل مرة، وبدون تأخير</p>
                            <p class="desc"><b>كيفية استخدام حاسبة الخصم </b></p>
                            <p class="desc">و لإبقاء الأمر أساسياً وسهلا وضمان عدم الخلط، فإن استخدام الآلة الحاسبة يتطلب منك فقط إدخال "السعر الأصلي"، و"النسبة المئوية للخصم"، ثم النقر فوق "احسب". سوف تلاحظ ان النتيجة ظهرت فورًا، حيث تعرض لك السعر النهائي بعد الخصم والكمية التي ادخرت.</p>
                            <p class="desc">على سبيل المثال، ليكن السعر الأصلي لشيء ما 900 دولار، وهنالك خصم بنسبة 5%، بمجرد إدخالك القيم والنقر فوق "احسب"، يقوم النظام بسرعة بإجراء الحسابات عن طريق استخدام صيغ معينة، ويوضح لك أن السعر النهائي هو 855.00 دولار أمريكي وأنك قد وفرت 45.00 دولار أمريكي. إنه بسيط وسريع ودقيق!</p>
                            <p class="desc">وشبهاً لذلك، تتطلب حاسبة النسبة المئوية للخصم, السعر الأصلي ونسبة الخصم المئوية وضريبة القيمة المضافة إذا وجدت، وتقوم بحساب السعر باستخدام صيغتها الخاصة لمنحك سعر المبيعات و مدخراتك</p>
                            <!-- <p class="desc">لم تعد بحاجة بعد الآن إلى إجراء أي عمليات حسابية بنفسك؛ دع الآلات الحاسبة الخاصة بنا تقوم بكل العمل. نحن نقدم مجموعة من الآلات الحاسبة الأخرى؛ يمكنك الاطلاع على آلة حساب النسبة المئوية للدرجات الخاصة بنا للاستخدامات الأكاديمية أو حتى آلة حاسب الاكرامية التي يمكن أن تنقذك من الحرج الاجتماعي، وأكثر من ذلك بكثير.</p> -->
                            <p class="desc"><span>لم تعد بحاجة بعد الآن إلى إجراء أي عمليات حسابية بنفسك؛ دع الآلات الحاسبة الخاصة بنا تقوم بكل العمل. نحن نقدم مجموعة من الآلات الحاسبة الأخرى؛ يمكنك الاطلاع على آلة حساب </span><span class="c16"><a class="c15" href="/final-grade-calculator-ar.php">النسبة المئوية للدرجات</a></span><span>&nbsp;الخاصة بنا للاستخدامات الأكاديمية أو حتى آلة </span><span class="c16"><a class="c15" href="/tip-calculator-ar.php">حاسب الاكرامية</a></span><span class="c0">&nbsp;التي يمكن أن تنقذك من الحرج الاجتماعي، وأكثر من ذلك بكثير.</span></p>
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


    <?php readfile( getcwd() . "/footer-ar.php"); ?>
</body>

</html>