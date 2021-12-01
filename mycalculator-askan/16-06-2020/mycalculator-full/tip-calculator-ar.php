<!doctype html>
<html ⚡>

<head>
    <meta charset="utf-8">
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
    <?php readfile(getcwd() . "/style.css");
    ?>
    </style>
</head>

<body class="ar tbl">
    <?php  readfile( getcwd() . "/header-ar.php"); ?>

    <section id="Tipmain">
        <div class="container">
            <div class="Percentage">
                <h1 class="m-bottom">كيف تحسب الاكرامية </h1>
                <p class="desc">حاسبة النسبة المئوية هي أداة مجانية على الإنترنت لحساب النسب المئوية</p>
                <div class="addto"> <button class="addToPhone_btn" on="tap:my-lightbox"> Add to Phone </button></div>
                <div class="overflow">
                    <div class="form block" amp-fx="fly-in-bottom">
                        <h2>كيف تحسب الاكرامية </h2>
                        <div class="img-cal">
                            <amp-img alt="Tip Calculator" src="images/tip-calculator.png" width="500" height="300"
                                layout="responsive" class="heartBeat"></amp-img>
                        </div>
                        <amp-bind-macro id="calc9" arguments="per" expression="per / 100"></amp-bind-macro>
                        <form id="myform" method="post"
                            action-xhr="https://www.askantech.com/amp_test/tip_validate1.php" target="_blank">
                            <div class="row">
                                <div class="FormWrapper FormWrapper2 FormWrapper8 FormWrapper11 tip_hei_cal">
                                    <div class="row">
                                        <div class="text1">
                                            <label class="label-text">مبلغ الفاتورة</label>
                                        </div>
                                        <div class="input">
                                            <input type="number" min="0" size="3" id="amount" class="input-fld" required
                                                name="tip1"
                                                on="input-throttled:AMP.setState({getinput:{totl_amt: event.value}});" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="text1">
                                            <label class="label-text">نسبة الإكرامية</label>
                                        </div>
                                        <div class="input">
                                            <input type="number" min="0" size="7" id="percentage" class="input-fld"
                                                required name="tip2"
                                                on="input-throttled:AMP.setState({getinput:{per: event.value}});" />
                                        </div>
                                        <div class="text2">
                                            <label class="label-text">%</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="text1">
                                            <label class="label-text">عدد الأشخاص</label>
                                        </div>
                                        <div class="input">
                                            <input type="number" min="1" size="7" id="percentage" class="input-fld"
                                                required name="tip3"
                                                on="input-throttled:AMP.setState({getinput:{people: event.value}});" />
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="calculateDiv2">
                                            <input type="submit" value="احسب" class="calculateBtn calculateBtn4"
                                                style="margin-right:0%">
                                            <!-- <button class="a-bouns calculateBtn" type="button" on="tap: AMP.setState({
                                                mycal9:{
                                                    value1:  calc9(getinput.totl_amt * getinput.per),
                                                    value2:  calc9(getinput.totl_amt * getinput.per) + (+getinput.totl_amt),
                                                    value3:  ((calc9(getinput.totl_amt * getinput.per) + (+getinput.totl_amt)) / getinput.people),
                                                    value4: (calc9(getinput.totl_amt * getinput.per) / getinput.people),
                                                    value5: calc9(getinput.totl_amt) / 2
                                                } 
                                            })">احسب</button> -->

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div submit-success
                                            style="font-size: 15px;display: block;align-items: center; margin:0px; line-height:1px; font-family: system-ui;">
                                            <template type="amp-mustache">
                                                <div class="row">
                                                    <div class="text1 textheight">
                                                        <label class="label-text">مبلغ الإكرامية</label>
                                                    </div>
                                                    <div class="inputHome inputhomecopy inputhomecopy3 mb_dc tip_ar_01_06"
                                                        style="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: system-ui;">
                                                        {{output1}}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="text1 textheight">
                                                        <label class="label-text">الإكرامية لكل شخص</label>
                                                    </div>
                                                    <div class="inputHome inputhomecopy inputhomecopy3 mb_dc tip_ar_01_06"
                                                        style="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: system-ui;">
                                                        {{output2}}
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="text1 textheight">
                                                        <label class="label-text">الإجمالي لكل شخص بدون الاكرامية </label>
                                                    </div>
                                                    <div class="inputHome inputhomecopy inputhomecopy3 mb_dc tip_ar_01_06"
                                                        style="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: system-ui;">
                                                        {{output3}}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="text1 textheight">
                                                        <label class="label-text">الإجمالي لكل شخص مع الإكرامية</label>
                                                    </div>
                                                    <div class="inputHome inputhomecopy inputhomecopy3 mb_dc tip_ar_01_06"
                                                        style="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: system-ui;">
                                                        {{output4}}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="text1 textheight">
                                                        <label class="label-text">المبلغ الكلي</label>
                                                    </div>
                                                    <div class="inputHome inputhomecopy inputhomecopy3 mb_dc tip_ar_01_06"
                                                        style="font-size: 15px;display: flex;align-items: center; margin:0px; line-height:1px; font-family: system-ui;">
                                                        {{output5}}
                                                    </div>
                                                </div>
                                            </template>
                                        </div>
                                        <div submit-error style="color:red">
                                            <template type="amp-mustache">
                                                {{message}}.
                                            </template>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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
                                    <h2>حاسبة الإكرامية </h2>
                                    <div class="img-cal">
                                        <amp-img alt="Salary Increment Calculator" src="images/salary-calculator.png"
                                            width="500" height="300" layout="responsive" class="heartBeat"></amp-img>
                                    </div>
                                    <div class="FormWrapper FormWrapper3" style="padding:10px 0;max-width:370px">
                                        <amp-iframe id="myiframe" title="custom page" layout="responsive" width="300"
                                            height="400" sandbox="allow-scripts  allow-popups allow-forms"
                                            frameborder="0" src="https://www.askantech.com/amp_test/tip-js-ar.php">
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

            <div class="overflow">
                <div class="form block" amp-fx="fly-in-bottom">
                    <!-- <h2>Percent Decrease Calculator</h2> -->
                    <div class="overflow Contentpad ss-arab">
                        <p class="desc">إعطاء الإكرامية جزء لا يتجزأ من حياتنا اليومية و يظهر أيضاً مدى تقديرنا للخدمة المقدمة، و لكن دعونا نواجه الأمر: ليس من السهل دائماً أن نحسب قيمة الإكرامية بعد تلقي خدمة ما.</p>
                        <p class="desc">قد نسأل من نحن برفقتهم، أو نحاول القيام بحساب ذهني سريع، أو نخرج هواتفنا للمساعدة، أو قد نترك أي مبلغ نعتبره عادلاً بما فيه الكفاية.</p>
                        <p class="desc">ولكن كم يجب أن يكون المبلغ بالتحديد؟ إن سؤالك أصدقاءك أو استخدام الآلة الحاسبة في هاتفك ليست الطريقة الأسرع و الأكثر فعالية للحصول على الإجابة.<p>
                        <p class="desc"> من الشائع أن يستخدم كثير من الناس محركات البحث مثل غوغل و بينغ وغيرها للبحث عن "كم إكرامية توصيل البيتزا،" "كم إكرامية مصفف الشعر،" "كم إكرامية الحلاق،" " كم إكرامية سائق التوصيل،" " كم إكرامية التدليك،" و أنواع أخرى من الأسئلة.</p>
                        <p class="desc">يأتيك الانترنت بإجابات، ولكن بمعلوماتٍ كثيرةٍ و روابط تجعل الأمر يبدو و كأنه بحثٌ جديٌّ فقط من أجل الإكرامية. السؤال الآن هو: هل هناك طريقة أفضل لكي تحسب بسهولة الإكرامية المتعلقة بخدمة تلقيتها؟ نعم، هنالك طريقة. إنها حاسبة الإكرامية الخاصة بنا.</p>
                        <p class="desc">حاسبة الإكرامية هي بديل مريح و أكثر سرعة ولا يقترح عليك تجربة صيغة، أو خدعة، أو أن تقوم بالحساب بنفسك. توفر عليك حاسبة الإكرامية كل ذاك الضغط و تعطيك الثقة في كل مرة تقرر فيها ترك إكرامية لقاء خدمة استثنائية تلقيتها.</p>
                        <p class="desc">صُمِّمَت حاسبة الإكرامية الخاصة بنا خصيصاً لتضمن لك ألا تهرول إلى حاسبتك أو أن تحك رأسك عندما تأتي الفاتورة. إذ أن حاسبتنا تقوم بهذا العمل لأجلك أسرع مما يمكن أن تقوم به حاسباتك، و هي أكثر فاعلية من التنقل بين موقع وآخر بحثاً عن إجابات.</p>
                        <p class="desc">كل ما عليك القيام به هو إدخال "قيمة الفاتورة،" "النسبة المئوية للإكرامية،" و "عدد الأشخاص" على الطاولة. حالما تنقر على "أحسب،" فإن نظامنا الموثوق و الدقيق يقوم بكل هذا العمل في وقت لا يذكر و يعطي معلوماتٍ دقيقة.</p>
                        <p class="desc">تخبرك حاسبتنا بالإكرامية المتوجب على كل شخص دفعها، المبلغ الإجمالي الذي يدفعه كل شخص، متضمناً الإكرامية، إلى أن تصل بك إلى المبلغ الإجمالي (مضافاً إليها الإكراميات) المتوجب على كامل الطاولة دفعه.</p>
                        <p class="desc">بإستخدامك لهذه الحاسبة، بإمكانك أن تقول وداعاً لحسابات الإكرامية الطويلة و البحث على الانترنت.</p>
                        <!-- <p class="desc">بإمكانك أيضاً أن تطلع على حاسبة تغير النسبة المئوية، حاسبة الخصم، حاسبة الرواتب، إلخ...</p> -->
                        <p class="desc"><span>بإمكانك أيضاً أن تطلع على </span><span class="c16"><a class="c15" href="/percent-change-calculator-ar.php">حاسبة تغير النسبة المئوية</a></span><span>، </span><span class="c16"><a class="c15" href="/discount-calculator-ar.php">حاسبة الخصم</a></span><span>، </span><span class="c16"><a class="c15" href="/paycheck-calculator-ar.php">حاسبة الرواتب</a></span><span class="c0">، إلخ...</span></p>
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
                        data-href="https://mypercentcalculator.com/tip-calculator.php">
                    </amp-facebook-comments>
                </div>
            </div>
        </div>
    </section>


    <?php readfile( getcwd() . "/footer-ar.php"); ?>

</body>

</html>