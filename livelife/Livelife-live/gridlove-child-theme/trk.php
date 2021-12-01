<?php
/**
 * Template Name: Trk-RedTrack
 */
if($_REQUEST['sub1'] == 1){
	$sub1=$_REQUEST['sub1'];
	$sub2=$_REQUEST['sub2'];
	$sub3=$_REQUEST['sub3'];
	$sub4=$_REQUEST['sub4'];
	$sub5=$_REQUEST['sub5'];
	$url = trim("https://trk.livelife.guide/postback?sub1={$sub1}&sub2={$sub2}&sub3={$sub3}&sub4={$sub4}&sub5={$sub5}&clickid=".$_REQUEST['clickid']);
	$response = curl_download($url);
	print_r($response);
}

function curl_download($Url){
 
    // is cURL installed yet?
    if (!function_exists('curl_init')){
        die('Sorry cURL is not installed!');
    }
 
    // OK cool - then let's create a new cURL resource handle
    $ch = curl_init();
 
    // Now set some options (most are optional)
 
    // Set URL to download
    curl_setopt($ch, CURLOPT_URL, $Url);
 
    // Set a referer
    curl_setopt($ch, CURLOPT_REFERER, "http://www.example.org/yay.htm");
 
    // User agent
    curl_setopt($ch, CURLOPT_USERAGENT, "MozillaXYZ/1.0");
 
    // Include header in result? (0 = yes, 1 = no)
    curl_setopt($ch, CURLOPT_HEADER, 0);
 
    // Should cURL return or print out the data? (true = return, false = print)
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
    // Timeout in seconds
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
 
    // Download the given URL, and return output
    $output = curl_exec($ch);
 
    // Close the cURL resource, and free system resources
    curl_close($ch);
 
    return $output;
}