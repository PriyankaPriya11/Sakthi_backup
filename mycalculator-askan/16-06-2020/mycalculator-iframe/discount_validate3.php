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
if(empty($_POST['value6']) || empty($_POST['value7']) ){
   header("Status: 404 Not Found");
   echo json_encode(array('message'=>'Please input a value greater than 0'));
}
else if($_POST['value6'] <=0 || $_POST['value7'] <=0 )
{
   header("Status: 404 Not Found");
   echo json_encode(array('message'=>'Please input a value greater than 0'));
}
else if ($_POST['value7'] >= $_POST['value6'])
{
    header("Status: 404 Not Found");
   echo json_encode(array('message'=>'Please input a value greater than the discount amount'));
    
}
else{
   $value1= $_POST['value6'];
   $value2=$_POST['value7'];
   $result1=$value1- $value2;
   $result2 = $value2/$value1*100;
   echo json_encode(array('output1'=>number_format($result1, 2), 'output2'=>number_format($result2, 2))); 
}
