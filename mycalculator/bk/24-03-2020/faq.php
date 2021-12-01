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
            <?php readfile( getcwd() . "/style.css");
            ?>
			section#main {
				position: relative;
				top: 150px;
			}
        </style>
</head>

<body class="tbl">
    <?php  readfile( getcwd() . "/header.php"); ?>
<section id="main">
	<div class="container">
		<div class="ss-accordian">
			<amp-accordion class="sample"
			expand-single-section>
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