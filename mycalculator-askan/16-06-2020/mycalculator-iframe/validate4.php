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
if(empty($_POST['percentage7']) || empty($_POST['percentage8']) ){
   header("Status: 404 Not Found");
   echo json_encode(array('message'=>'Please input a value greater than 0'));
}
else if($_POST['percentage7'] <=0 || $_POST['percentage8'] <=0)
{
   header("Status: 404 Not Found");
   echo json_encode(array('message'=>'Please input a value greater than 0'));
}
else{
    if($_POST['ar'] == 'ar'){
        $value2= $_POST['percentage7'];
        $value1=$_POST['percentage8'];
    }else{
        $value1= $_POST['percentage7'];
        $value2=$_POST['percentage8'];   
    }
   
   $result =  (($value2) /$value1) *100;
   $result = number_format($result, 2);
   echo json_encode(array('output'=>$result)); 
}
