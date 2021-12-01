<?php
$name=$_POST['fname'];
$mail=$_POST['email'];
$ph=$_POST['phone'];
$site=$_POST['website'];
$tarea=$_POST['message'];

require_once '../../../../wp-config.php';
$conn=mysql_pconnect(DB_HOST,DB_USER,DB_PASSWORD);
if($conn){
    mysql_select_db( DB_NAME,$conn);
}// Check connectionelse
if($name != '' && $mail != ''){
    //insert into database
    mysql_query("insert into at2015_contact(fname,email,phone,website,message,created_on) values('$name','$mail','$ph','$site','$tarea',NOW())") or die(mysql_error());

    $dte=date("d-M-y");
    $to = "info@kanwebspeed.com";
    $subject = "AskanTech - Contact Form";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $name <$mail> \r\n";
    // Mail sending
    $tarea = nl2br(urldecode(stripslashes($tarea)));
    $message = "<p>Name: ".$name."</p><p>E-mail: ".$mail."</p><p> Message: ".$tarea."</p><p> Submitted On: ".$dte."</p>";
    if( mail($to,$subject,$message,$headers))
    {
        $header = "MIME-Version: 1.0" . "\r\n";
        $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $header .= "From: AskanTech <info@kanwebspeed.com> \r\n";
        //Customer Acknowledgement
        $message2 = "Thanks For Contacting Us.";
        mail($mail,$subject,$message2,$header);
	echo '<div class="my-notify-success">Successfully Submitted.</div>';
    }
    else{
        echo '<div class="my-notify-error">Your message could not reach.  Please try again later. </div> ';
    }
}
?>