<!doctype html>
<html ⚡>

<head>
    <meta charset="utf-8">
    <title>Percent Change</title>

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
                <h1 class="m-bottom">حساب نسبة الزيادة و النقصان </h1>
                <p class="desc">حاسبة النسبة المئوية هي أداة مجانية على الإنترنت لحساب النسب المئوية</p>
               <div class="addto"> <button class="addToPhone_btn" on="tap:my-lightbox"> Add to Phone </button></div>
                <!--1s calculation-->
                <div class="overflow">
                    <div class="form block" amp-fx="fly-in-bottom">
                        <h2>حساب نسبة الزيادة</h2>
                        <div class="img-cal">
                            <amp-img alt="Percent Increase Calculator" src="images/percent-increase-calculator.png"
                                width="500" height="300" layout="responsive" class="heartBeat"></amp-img>
                        </div>
                        <amp-bind-macro id="calc6" arguments="per6, totl_amt6" expression="per6 + 0"></amp-bind-macro>
                        <form id="myform" method="post"
                            action-xhr="https://www.askantech.com/amp_test/percent_change_validate1.php"
                            target="_blank">
                            <div class="FormWrapper FormWrapper4 form_inc arr_mon_0506">
                                <div class="row">
                                    <div class="text1 frm_inc_mobile">
                                        <label class="label-text">القيمة القديمة (القيمة 1)</label>
                                    </div>
                                    <div class="input per_chag_ar_05">
                                        <input type="number" min="1" size="3" id="amount" class="input-fld" required
                                            name="percent_change1"
                                            on="input-throttled:AMP.setState({getinput6:{per6: event.value}});" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1 frm_inc_mobile">
                                        <label class="label-text">القيمة الجديدة (القيمة 2)</label>
                                    </div>
                                    <div class="input per_chag_ar_05">
                                        <input type="number" min="1" size="7" id="percentage" class="input-fld" required
                                            name="percent_change2"
                                            on="input-throttled:AMP.setState({getinput6:{totl_amt6: event.value}});" />
                                    </div>
                                    <!--<div class="text2">-->
                                    <!--    <label class="label-text">؟</label>-->
                                    <!--</div>-->
                                </div>
                                <div class="row" style="margin-bottom:0">
                                    <div class="calculateDiv2">
                                        <input type="submit" value="احسب" class="calculateBtn calculateBtn2"
                                            style="margin-right:0%">
                                        <!-- <button type="button" class="a-bouns calculateBtn" on="tap: AMP.setState({
                                                mycalc6:{
                                                    value6:  calc6((getinput6.totl_amt6 - getinput6.per6) / getinput6.per6) * 100
                                                } 
                                            })">احسب</button> -->
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom:0">
                                    <div class="text1">
                                        <label class="label-text">النتيجة</label>
                                    </div>
                                        </div>
                                        <div class="row">
                                    <div class="inputHome inputhomecopy inputhomecopy2 input_cop_2 per_ar_bx_06 arr_01_06">
                                        <div submit-success
                                            style="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: system-ui;">
                                            <template type="amp-mustache">
                                                {{output}}
                                            </template>
                                        </div>
                                    </div>
                                    <div class="text2">
                                        <label class="label-text">زيادة %</label>
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
        </div>
        </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="Percentage">

                <!--1s calculation-->
                <div class="overflow">
                    <div class="form block" amp-fx="fly-in-bottom">
                        <h2>حساب نسبة النقصان</h2>
                        <div class="img-cal">
                                <amp-img alt=" Percent Decrease calculator" src="images/percent-decrease-calculator.png"
                                    width="500" height="300" layout="responsive" class="heartBeat"></amp-img>
                            </div>
                        <amp-bind-macro id="calc7" arguments="per7, totl_amt7" expression="per7 + 0"></amp-bind-macro>
                        <form id="myform" method="post"
                            action-xhr="https://www.askantech.com/amp_test/percent_change_validate2.php"
                            target="_blank">
                            <div class="FormWrapper FormWrapper4 form_inc arr_mon_0506">
                                <div class="row">
                                    <div class="text1 frm_inc_mobile">
                                        <label class="label-text">القيمة القديمة (القيمة 1)</label>
                                    </div>
                                    <div class="input  per_chag_ar_05">
                                        <input type="number" min="1" size="3" id="amount" class="input-fld" required
                                            name="percent_change3"
                                            on="input-throttled:AMP.setState({getinput7:{per7: event.value}});" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1 frm_inc_mobile">
                                        <label class="label-text">القيمة الجديدة (القيمة 2)</label>
                                    </div>
                                    <div class="input  per_chag_ar_05">
                                        <input type="number" min="1" size="7" id="percentage" class="input-fld" required
                                            name="percent_change4"
                                            on="input-throttled:AMP.setState({getinput7:{totl_amt7: event.value}});" />
                                    </div>
                                    <!--<div class="text2">-->
                                    <!--    <label class="label-text">؟</label>-->
                                    <!--</div>-->
                                </div>
                                <div class="row" style="margin-bottom:0">
                                    <div class="calculateDiv2">
                                        <input type="submit" value="احسب" class="calculateBtn calculateBtn2"
                                            style="margin-right:0%">
                                        <!-- <button type="button" class="a-bouns calculateBtn" on="tap: AMP.setState({
                                                mycalc7:{
                                                    value7:  calc7((getinput7.totl_amt7 - getinput7.per7) / getinput7.per7) * 100
                                                } 
                                            })">احسب</button> -->
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom:0">
                                    <div class="text1">
                                        <label class="label-text">النتيجة</label>
                                    </div>
                                        </div>
                                    <div class="row">
                                        <div class="inputHome inputhomecopy inputhomecopy2  input_cop_2 cop_mobile per_ar_bx_06  arr_01_06">
                                            <div submit-success
                                                style="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: system-ui;">
                                                <template type="amp-mustache">
                                                    {{output}}
                                                </template>
                                            </div>
                                        </div>
                                        <div class="text2">
                                            <label class="label-text">نقصان %</label>
                                        </div>
                                    </div>
                                    <div submit-error style="color:red">
                                        <template type="amp-mustache">
                                            {{message}}.
                                        </template>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="overflow">
                        <div class="form block" amp-fx="fly-in-bottom">
                            <!-- <h2>Percent Decrease Calculator</h2> -->
                            <!-- <div class="overflow Contentpad"> -->
                            <div class="overflow ss-arab">
                                <p class="desc">نقوم بإجراء العديد من المقارنات في حياتنا اليومية، ربما تتساءل كم هي تكلفة قميص هذا الشخص مقارنة بقميصي؟ أو كم ساعة أمضيت في مشاهدة التلفاز اليوم مقارنة باليوم الماضي ، ما مقدار ارتفاع راتبك خلال العام الماضي؟ نقوم بإجراء هذه المقارنات يومياً، ولنسهل عليك إجراء هذه المقارنات قمنا بإنشاء حاسبة نسبة التغيير </p>
                                <p class="desc">يصف الناس الأشخاص الذين يمتلكون  القدرة على معرفة مقدار التغير في أي وقت أنهم اشخاص ذو ذكاء عال. حاسبة نسبة التغير تؤمن لك الفرصة لمعرفة مقدار النسبة للتغيير والتي بدورها تساعدك على اتخاذ قرارات مدروسة </p>

                                <p class="desc"> <b>حساب نسبة الزيادة</b></p>

                                <p class="desc">تساعدك حاسبة نسبة الزيادة على إيجاد مقدار زيادة النسبة المئوية عما كانت عليه في السابق الى القيمة الحالية الجديدة. لذلك إذا لاحظت زيادة في أسعار تذاكر السينما، أو زيادة في حجم زجاجة الصودا المفضلة لديك أو حتى ارتفاع في معدل درجاتك الأكاديمي، فإن حاسبة نسبة الزيادة تجعل إيجاد نسبة الزيادة أمرا سهلا و سريعا</p>
                                <p class="desc">ما يهمنا هنا هو نوع التغير اللازم إيجاده، تقوم حاسبة نسبة الزيادة بإيجاد نتائج دقيقة فقط في كل مرة يتم استخدامها وذلك يعود بالفضل على الخوارزمية المستخدمة والفعالة، لذا لا داعي للقلق بشأن النتائج فهي خالية تماماً من الأخطاء</p>
                                <p class="desc"> كل ما عليك فعله هو إدخال القيمة الأصغر في المربع الأول والقيمة العالية في المربع الثاني, ثم الآلة الحاسبة ستقوم بإجراء العمل كاملاً لك</p>
                                <p class="desc">فيما يلي طريقة حساب نسبة الزيادة:</a></p>
                                <p class="desc"> نسبة الزيادة = (زيادة/تغير في القيمة (القيمة 2 - القيمة 1)) / القيمة الأصلية (القيمة 1) * 100 </p>
                                <p class="desc"> <b>حساب نسبة النقصان</b></p>
                                <p class="desc">قد يكون الإنخفاض في شيء ما جيد في بعض الأحيان، على سبيل المثال قد ترغب بشراء هاتف جديد ولكنك لست قادراً على تحمل التكلفة الباهظة الثمن.. لحسن الحظ، هنالك تخفيضات يوم الجمعة السوداء، حيث يمكنك تحمل التكلفة بسبب انخفاض الأسعار، ولكن ما هي قيمة الانخفاض في النسبة المئوية ؟ لا تقلق فحاسبة نسبة النقصان ستساعدك على ايجاد ما تريد 
                                </p>
                                <p class="desc"> هل كنت تمارس التمارين الرياضية لتحصل على جسمك الرشيق خلال الصيف وترغب في حساب نسبة نقصان الوزن المئوية؟ هذه الآلة الحاسبة تسهل لك عمل ذلك</p>
                                <p class="desc"></p>
                                <p class="desc">كل ما عليك فعله هو إدخال القيمة العالية في المربع الأول والقيمة الأصغر في المربع الثاني ، ثم الضغط على احسب وستظهر النتيجة فوراً على الشاشة </p>
                                <p class="desc">فيما يلي طريقة حساب نسبة النقصان:</p>
                                <p class="desc">نسبة النقصان = (نقصان/تغير في القيمة * (القيمة 1 - القيمة 2)) / القيمة الأصلية (القيمة 1) * 100 </p>
                                <p class="desc">إستخدم هذه الآلات الحاسبة لإيجاد نسبة الزيادة أو النقصان لشيء معين تريد إيجاده، إنه ليس مفيداً لإيجاد الإجابات الدقيقة وحسب، بل وإنها توفر لك الكثير من الوقت الذي يمكنك إمضاءه في أشياء أخرى ذو فائدة. كما انه يزيل العبء عن كاهلك من خلال الكفاءة وسهولة الاستخدام والفعالية، ولا تنسى أنه يمكنك استخدامه تماما بالمجان</p>
                                <p class="desc"><span>يمكنك أيضا زيارة </span><span class="c16 c4"><a class="c15" href="/percent-difference-ar.php">حاسبة فرق النسبة المئوية</a></span><span>، </span><span class="c16 c4"><a class="c15" href="/tip-calculator-ar.php">حاسبة الإكرامية</a></span><span>&nbsp;، </span><span class="c16 c4"><a class="c15" href="/paycheck-calculator-ar.php">حاسبة </a></span><span class="c16 c4"><a class="c15" href="/paycheck-calculator-ar.php">الراتب</a></span><span class="c4">&nbsp;</span><span class="c0">، الخ &nbsp;</span></p>
                                <!-- <p class="desc">You can also check out our <b><a href="/percent-difference.php">
                                            Percentage Difference Calculator</a></b>,<b><a href="/tip-calculator.php">
                                            Tip Calculator</a></b>,<b><a href="/paycheck-calculator.php"> Salary
                                            calculator</a></b>, etc.</p> -->

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
                    <!-- <amp-iframe id="copy" sandbox="allow-scripts" width="120" height="60" frameborder="0"
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
    </section>

    </amp-user-notification>

    <?php readfile( getcwd() . "/footer-ar.php"); ?>
</body>

</html>