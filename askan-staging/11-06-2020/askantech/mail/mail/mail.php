<?php

require_once('class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

$body             = file_get_contents('contents.html');
$body             = eregi_replace("[\]",'',$body);

$mail->IsSMTP(); // telling the class to use SMTP

//$mail->Host       = "mail.yourdomain.com"; // SMTP server
$mail->Host       = "mail.asahitechnologies.com"; // SMTP server

$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 587;                   // set the SMTP port for the GMAIL server

$mail->Username   = "asahi.kannan@gmail.com";  // GMAIL username
$mail->Password   = "asahi-kannan125";            // GMAIL password

$mail->SetFrom('info@asahitechnologies.com', 'First Last');


$mail->AddReplyTo("info@asahitechnologies.com","First Last");

$mail->Subject    = "PHPMailer Test Subject via smtp (Gmail), basic";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

$address = "krajendran@asahitechnologies.com";
//$address = "info@asahitechnologies.com";

$mail->AddAddress($address, "John Doe");

$mail->AddAttachment("examples/images/phpmailer.gif");      // attachment
$mail->AddAttachment("examples/images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}
    
	
	
?>