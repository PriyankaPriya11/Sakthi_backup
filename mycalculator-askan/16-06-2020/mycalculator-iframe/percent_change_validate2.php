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
if(empty($_POST['percent_change3']) || empty($_POST['percent_change4']) ){
   header("Status: 404 Not Found");
   echo json_encode(array('message'=>'Please input a value greater than 0'));
}
else if($_POST['percent_change3'] <=0 || $_POST['percent_change4'] <=0)
{
   header("Status: 404 Not Found");
   echo json_encode(array('message'=>'Please input a value greater than 0'));
}
else if ($_POST['percent_change3'] <  $_POST['percent_change4'])
{
    header("Status: 404 Not Found");
    echo json_encode(array('message'=>'Please input a value less than or equal to the first value'));
}
else{
   $value1= $_POST['percent_change3'];
   $value2=$_POST['percent_change4'];
   $result =   ($value1 -  $value2)/ $value1 *100;
   $result = number_format($result, 2);
   echo json_encode(array('output'=>$result)); 
}
