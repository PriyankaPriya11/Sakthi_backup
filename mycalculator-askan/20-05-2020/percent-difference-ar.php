<!doctype html>
<html ⚡>

<head>
    <meta charset="utf-8">
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

<body class="ar tbl">
    <?php  readfile( getcwd() . "/header-ar.php"); ?>

    <section>
        <div class="container">
            <div class="Percentage">
                <h1 class="m-bottom">حساب فرق النسبة المئوية</h1>
                <p class="desc">حاسبة النسبة المئوية هي أداة مجانية على الإنترنت لحساب النسب المئوية</p>
                <div class="overflow">
                    <div class="form block" amp-fx="fly-in-bottom">
                        <h2>حساب نسبة الفرق</h2>
                        <div class="img-cal">
                            <amp-img alt="Percent Difference" src="images/percent-difference-calculator.png" width="500"
                                height="300" layout="responsive" class="heartBeat"></amp-img>
                        </div>
                        <amp-bind-macro id="calc7" arguments="per7, totl_amt7" expression="per7 + 0"></amp-bind-macro>
                        <form id="myform" method="post"
                            action-xhr="https://www.askantech.com/amp_test/percent_diff_validate.php" target="_blank">
                            <div class="FormWrapper">
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text">العدد الاول</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" min="1" size="7" id="percentage" class="input-fld"
                                            on="input-throttled:AMP.setState({getinput7:{totl_amt7: event.value}});"
                                            required name="percent_diff1" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text1">
                                        <label class="label-text"> العدد الثاني</label>
                                    </div>
                                    <div class="input">

                                        <input type="number" min="1" size="3" id="amount" class="input-fld"
                                            on="input-throttled:AMP.setState({getinput7:{per7: event.value}});" required
                                            name="percent_diff2" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="calculateDiv2">
                                        <input type="submit" value="احسب" class="calculateBtn" style="margin-right:0%">
                                        <!-- <button type="button" class="a-bouns calculateBtn" on="tap: AMP.setState({
                                                mycalc7:{
                                                    value7: calc7(((getinput7.per7 - getinput7.totl_amt7) / ((+getinput7.per7) + (+getinput7.totl_amt7)))*200) 
                                                } 
                                            })">احسب</button> -->
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

                            <p class="desc">هل سبق لك أن تساءلت عن الفارق بين عدد سكان بلدك وعدد سكان بلد آخر؟ هل حاولت حساب فرق النسبة المئوية في عدد الزبائن الذين زاروا متجرك بين العام الماضي والعام الحالي؟ </p>
                            <p class="desc">طبعا الإجابة هي نعم، وفي بعض الأحيان نقوم بإجراء التخامين التقريبية أو نتجاهل هذه المسائل على أنها ليست ذو أهمية كبيرة وذلك لأنها قد تبدو الطريقة الاسهل، أو أنها لا تستحق التحليل </p>
                            <p class="desc">أداة حساب فرق النسبة المئوية هذه تثبت أنها مفيدة جداً في إرضاء فضولنا وتزويدنا بنتائج دقيقة. لحسن حظك، قدمنا لك أسهل وأفضل حاسبة فرق النسبة المئوية على شبكة الإنترنت! سوف لن تكلفك اي شيء على الإطلاق من ناحية الوقت والمال للحصول على الإجابات في متناول يدك</p>
                            <p class="desc"><b>كيفية العمل؟<b></p>
                            <p class="desc">تقوم حاسبة فرق النسبة المئوية بإيجاد فرق النسبة بين عددين موجبين. يتم حساب فرق النسبة المئوية عادة عندما تريد معرفة الفرق في النسبة المئوية بين رقمين حيث انه لا يهمنا ترتيب الاعداد في هذه الحالة </p>
                            <p class="desc">لاحظ أن حاسب فرق النسبة المئوية يختلف تماماً عن حاسب نسبة التغيير. بالنسبة إلى هذه الحاسبة، لا يهم ترتيب الأرقام لأننا ببساطة نقوم بقسمة الفرق بين رقمين على المتوسط الحسابي الخاص بهم </p>
                            <p class="desc">بالنسبة الى نسبة التغيير، فإن الترتيب مهم. ويُستخدم لحساب الفرق بين الرقم القديم والرقم الجديد. إذا كنت ترغب في زيارة حاسبة نسبة التغيير الخاصة بنا، فانقر هنا </p>
                            <p class="desc">تقوم هذه الأداة باستخدام القيمة المطلقة للفرق بين قيمتين ومن ثم تقسيم النتيجة على متوسط القيمتين لحساب فرق النسبة المئوية لقيمتين</p>
                            <p class="desc">ها هو الشرح في شكل أبسط:</p>
                            <ul class="uldiffpage">
                                <li>يتم ايجاد الفرق بين القيمتين (القيمة 1 - القيمة 2)</li>
                                <li>يتم ايجاد القيمة المطلقة للفرق بين (|القيمة 1 - القيمة 2|)</li>
                                <li>يتم العثور على متوسط القيمتين ((القيمة 1 + القيمة 2)/2)</li>
                                <li>يتم قسمة القيمة المطلقة التي تم العثور عليها سابقًا على المتوسط ثم ضربها بالعدد 100</li>
                            </ul>
                            <p class="desc">والشيء الجيد في هذه الحاسبة هو أنك لن تضطر إلى مشاهدة كل هذه العمليات. كما أن كفاءتها تجعل استخدامها سهلا</p>
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
              </amp-iframe>-->
                        </li>
                    </ul>
                    <div class="comments">
                        <!--comment-->
                        <amp-facebook-comments width="486" height="50" layout="responsive"
                            data-href="https://mypercentcalculator.com/percentage-difference.php">
                        </amp-facebook-comments>
                    </div>
                </div>
            </div>            
    </section>


    <?php readfile( getcwd() . "/footer.php"); ?>
</body>

</html>