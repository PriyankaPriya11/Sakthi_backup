<!doctype html>
<html ⚡>

<head>
    <meta charset="utf-8">
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
    <?php readfile(getcwd() . "/style.css");
    ?>
    </style>
</head>

<body class="ar finalCalc">
    <?php  readfile( getcwd() . "/header-ar.php"); ?>

    <section id="main">
        <div class="container">
            <div class="Percentage">
                <h1 class="m-bottom">حساب النسبة المئوية للدرجات </h1>
                <p class="desc">حاسبة النسبة المئوية هي أداة مجانية على الإنترنت لحساب النسب المئوية</p>
                <div class="overflow">
                    <div class="form block " amp-fx="fly-in-bottom">
                        <h2>حساب النسبة المئوية للدرجات</h2>
                        <div class="img-cal">
                            <amp-img alt="Final Grade Calculator" src="images/grade-calculator.png" width="500"
                                height="300" layout="responsive" class="heartBeat"></amp-img>
                        </div>
                        <amp-bind-macro id="calc10" arguments="out10" expression="out10 * 100"></amp-bind-macro>
                        <form id="myform" method="post"
                            action-xhr="https://www.askantech.com/amp_test/grade_validate.php" target="_blank">
                            <div class="row">
                                <div class="FormWrapper">
                                    <div class="row">
                                        <div class="text1">
                                            <label class="label-text">العلامة المسجلة</label>
                                        </div>
                                        <div class="input">
                                            <input type="number" min="0" size="3" id="amount" class="input-fld"
                                                on="input-throttled:AMP.setState({getinput10:{out10: event.value}});"
                                                required name="grade1" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="text1">
                                            <label class="label-text">المجموع من</label>
                                        </div>
                                        <div class="input">
                                            <input type="number" min="0" size="7" id="percentage" class="input-fld"
                                                on="input-throttled:AMP.setState({getinput10:{totl_amt10: event.value}});"
                                                required name="grade2" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="calculateDiv2">
                                            <!-- <button type="button" class="a-bouns calculateBtn" on="tap: AMP.setState({
                                                mycalc10:{
                                                    value1:  calc10(getinput10.out10 / getinput10.totl_amt10)
                                                } 
                                                })">احسب</button> -->
                                            <input type="submit" value="احسب" class="calculateBtn"
                                                style="margin-right:0%">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="text1">
                                            <label class="label-text">النتيجة </label>
                                        </div>
                                        <div class="inputHome inputhomecopy">
                                            <div submit-success
                                                style="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: system-ui;">
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
                <div class="overflow">
                    <div class="form block" amp-fx="fly-in-bottom">
                        <!-- <h2>Percent Decrease Calculator</h2> -->
                        <div class="overflow Contentpad ss-arab">
                            <p class="desc">تخيل أنك اضطررت أن ترتب الدرجات لمادة أو مادتين في المدرسة. قد يواجه البعض منا صعوبة في حساب هذه الدرجات أو أننا لا نعرف كيفية حسابها.</p>
                            <p class="desc">قد تجد نفسك تقوم ببعض العمليات الرياضية لتحسب الدرجة أو نسبتها المئوية. قد تستغرق هذه العملية وقتًا أطول من اللازم أو قد تَتْرُكَكَ أمام مجموعة من الأخطاء. حاسبة الدرجات هي حاسبة فعالة عبر الانترنت و وسيلة سريعة لحساب النتيجة النهائية، كما و تساعد في تنظيم مخطط للدرجات.</p>
                            <p class="desc">الدرجات أمر مهم في المدرسة، فهي تخبرنا عن الرسوب، أو التقدم، أو كم التطوير المطلوب. و تختلف الدرجات المطلوبة اعتماداً على  المقرر. في مرحلة ما من حياتنا الأكاديمية، فكرنا "كيف بامكاني حساب درجاتي؟" كطلبة، أو كمدرسين يضعون الدرجات.<p>
                            <p class="desc">حاسبة الدرجات هي حاسبة سهلة عبر الانترنت تساعد في تقديم حسابات سريعة للدرجات و أجابات دقيقة. تقبل حاسبة الدرجات هذه قيماً عدديةً و تقدم نتائجاً على هيئة نسبٍ مئويةٍ.</p>
                            <p class="desc">بإمكانها أن تساعد في حساب الدرجة المطلوبة مما تبقى من العمل المدرسي، أو للنجاح في مقرر ما. و باستخدام صيغة رياضية مضمنة، تقوم هذه الحاسبة السهلة بحساب درجاتك بزمن لا يذكر إطلاقاً.</p>
                            <p class="desc">و يتطلب العمل عليها فقط إدخال القيم اللازمة و الضغط على "أحسب" لتحصل على النسبة المئوية للدرجة. بناءً عليه، و على سبيل المثال، إذا كنت قد حصلت على 36 درجة من 40 في مقرر الكيمياء و كنت تحاول معرفة النسبة المئوية لدرجتك، كل ما علي فعله هو إدخال درجتك والدرجة الكلية و الضغط على "أحسب." و في زمن قصير جداً، ستخبرك النتيجة بأن درجتك هي 90% نسبة إلى الدرجة الكلية. إن الأمر بهذه البساطة.</p>
                            <p class="desc">ولذلك، إذا كنت تبحث عن حاسبة درجة نهائية، حاسبة امتحان نهائي، حاسبة نتائج نهائية، حاسبة امتحان، حاسبة درجة مئوية، حاسبة سهلة للدرجات، حاسبة درجات نهائية، حاسبة درجة امتحان نهائي، حاسبة النقاط اختبار، حاسبة نسبة مئوية للدرجة، أو حاسبة نسبة مئوية للعلامات، فلقد قمنا بتأمين كل ذلك لك.</p>
                            <p class="desc">بالإضافة إلى حاسبة الدرجات، بإمكانك استخدام حاسبة الراتب الخاصة بنا لمعرفة المكافئ اليومي لراتبك الشهري أو يمكنك تجربة حاسبة القروض التي ستساعدك على اتخاذ قرارات مدعومة بأرقام دقيقة.</p>
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
              </amp-iframe>
            </li> -->
                    </ul>
                </div>
                <div class="comments">
                    <!--comment-->
                    <amp-facebook-comments width="486" height="50" layout="responsive"
                        data-href="https://mypercentcalculator.com/marks-calculator.php" style="width:100%;">
                    </amp-facebook-comments>
                </div>
            </div>
        </div>
    </section>


    <?php readfile( getcwd() . "/footer.php"); ?>

</body>

</html>