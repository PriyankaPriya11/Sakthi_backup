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
if(empty($_POST['tip3'])){
   header("Status: 404 Not Found");
   echo json_encode(array('message'=>'Please input a value greater than 0'));
}
else if($_POST['tip1'] <0 || $_POST['tip2'] <0 || $_POST['tip3'] <=0)
{
   header("Status: 404 Not Found");
   echo json_encode(array('message'=>'Please input a value greater than 0'));
}
else{
   $value1= $_POST['tip1'];
   $value2=$_POST['tip2'];
   $value3=$_POST['tip3'];

   $result1=$value1* $value2/100;
   $result2 = $result1/$value3;
   $result3= $value1/$value3;
   $result4 =($value1+$result1)/$value3;
   $result5 = $value1 + $result1;
   // $result5=$result1+ $value1;
   // $result4 = $result5/$value3;
   // 
   // $result3= $value1/100/2;
   echo json_encode(array('output1'=>number_format($result1, 2), 'output2'=>number_format($result2, 2), 'output3'=>number_format($result3, 2), 'output4'=>number_format($result4, 2), 'output5'=>number_format($result5, 2))); 
}

