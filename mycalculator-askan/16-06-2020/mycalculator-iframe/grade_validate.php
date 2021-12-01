<?php

// header("Content-type: application/json");
// header("Access-Control-Allow-Credentials: true");
// header("Access-Control-Allow-Origin: *.ampproject.org");
// header("AMP-Access-Control-Allow-Source-Origin: http://mypercentcalculator.askantech.com/");
// header("Access-Control-Expose-Headers: AMP-Access-Control-Allow-Source-Origin");
// header('access-control-allow-methods: POST, GET, OPTIONS');

header("Content-type: application/json");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Origin: http://mypercentcalculator.askantech.com");
header("AMP-Access-Control-Allow-Source-Origin: http://mypercentcalculator.askantech.com");
header("Access-Control-Expose-Headers: AMP-Access-Control-Allow-Source-Origin");
header("Access-Control-Expose-Headers: AMP-Redirect-To, AMP-Access-Control-Allow-Source-Origin"); 
header('access-control-allow-methods: POST, GET, OPTIONS');
 if($_POST['grade1'] <0 || $_POST['grade2'] <0 )
{
   header("Status: 404 Not Found");
   echo json_encode(array('message'=>'Please input a value greater than 0'));
}
else if($_POST['grade1'] > $_POST['grade2'] )
{
   header("Status: 404 Not Found");
   echo json_encode(array('message'=>'Please input a value greater than or equal to the the first input'));
}
else if ($_POST['grade1'] ==0 && $_POST['grade2'] ==0)
{
   $result1 =0;
   echo json_encode(array('output'=>number_format($result1, 2))); 
}
else{
   $value1= $_POST['grade1'];
   $value2=$_POST['grade2'];
   $result1 = $value1*100/$value2;
   echo json_encode(array('output'=>number_format($result1, 2))); 
}
