<!doctype html>
<html ⚡>

<head>
    <meta charset="utf-8">
    <title>FAQ</title>
    <script async custom-element="amp-accordion" src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js"></script>
    <link rel="canonical" href="https://amp.dev/documentation/examples/components/amp-accordion/index.html">

    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="canonical" href="#">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">


    <?php readfile( getcwd() . "/head.php"); ?>
    <style amp-custom>
    <?php readfile(getcwd() . "/style.css");

    ?>section#main {
        position: relative;
        top: 150px;
    }

    .ss-faq {
        min-height: calc(100vh - 530px);
    }

    html body footer {
        padding: 50px 0 0 0;
    }

    .i-amphtml-accordion-header {
        cursor: pointer;
        background-color: #ffffff;
        padding-right: 20px;
        border: 1px solid #dfdfdf;
        padding: 14px;
        box-shadow: 2px 2px 3px 0px #00000012;
    }

    amp-accordion>section[expanded]>:last-child {
        display: block !important;
        padding: 14px;
    }

    h4.i-amphtml-accordion-header {
		font-family: Charcoal, sans-serif;
		text-transform: uppercase;
    }
    </style>
</head>

<body class="tbl">
    <?php  readfile( getcwd() . "/header.php"); ?>
    <section id="main" class="ss-faq">
        <div class="container">
            <div class="ss-accordian">
                <amp-accordion class="sample" expand-single-section>
                    <section>
                        <h4>1. Question 1</h4>
                        <p>Answer 1</p>
                    </section>
                    <section>
                        <h4>2. Question 2</h4>
                        <p>Answer 2</p>
                    </section>
                    <section>
                        <h4>3. Question 3</h4>
                        <p>Answer 3</p>
                    </section>
                </amp-accordion>
            </div>
        </div>
    </section>

    <?php readfile( getcwd() . "/footer.php"); ?>



</body>

</html>