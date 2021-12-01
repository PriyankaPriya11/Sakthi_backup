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
if(empty($_POST['salary5']) || empty($_POST['salary6']) || empty($_POST['salary7'])){
   header("Status: 404 Not Found");
   echo json_encode(array('message'=>'Please input a value greater than 0'));
}
else if($_POST['salary5'] <=0 || $_POST['salary6'] <=0 || $_POST['salary6'] <=0)
{
   header("Status: 404 Not Found");
   echo json_encode(array('message'=>'Please input a value greater than 0'));
}
else if ($_POST['salary6'] >24)
{
   header("Status: 404 Not Found");
   echo json_encode(array('message'=>'Please input a value from 1 to 24'));
}
else if ($_POST['salary7'] >31)
{
   header("Status: 404 Not Found");
   echo json_encode(array('message'=>'Please input a value from 1 to 31'));
}
else{
   $value1= $_POST['salary5'];
   $value2 = $_POST['salary6'];
   $value3 = $_POST['salary7'];
   
   $result2 = $value1 / ($value2* $value3);
   //$result3 = ($value1 / 4.345) / 5 ;
   $result3 = $result2 * $value2;
   //$result2 = $result3/9;
      $result4=$value1 *12;
   $result1 = $result2 /60;
   echo json_encode(array('output1'=>number_format($result1, 2), 'output2'=>number_format($result2, 2), 'output3'=>number_format($result3, 2), 'output4'=>number_format($result4, 2))); 
}
