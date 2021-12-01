<?php 
session_start();
require_once '../../../../wp-config.php';
$conn=mysql_pconnect(DB_HOST,DB_USER,DB_PASSWORD);
if($conn){
    mysql_select_db( DB_NAME,$conn);
}// Check connection
if(!empty($_REQUEST['fname'])){$YourName = trim($_REQUEST['fname']);}else{$YourName = trim($_GET['fname']);}
if(!empty($_REQUEST['email'])){$email = trim($_REQUEST['email']);}else{$email = trim($_GET['email']);}
if(!empty($_REQUEST['applyfor'])){$position = trim($_REQUEST['applyfor']);}else{$position = trim($_GET['applyfor']);}
if(!empty($_REQUEST['phone'])){$phone = trim($_REQUEST['phone']);}else{$phone = trim($_GET['phone']);}
if(!empty($_REQUEST['current_company'])){$current_company = trim($_REQUEST['current_company']);}else{$current_company = trim($_GET['current_company']);}
if(!empty($_REQUEST['information'])){$additionalinfo = trim($_REQUEST['information']);}else{$additionalinfo = trim($_GET['information']);}
//$current_company = $_GET['current_company'];
//$additionalinfo = $_GET['additionalinfo'];

$requestfiles = $_FILES['resume']['name'];
$network_url = site_url();
$upload_dir = wp_upload_dir();
$browser = $_REQUEST['browser'];
$subject = 'Job Submit';
$path = '';
$adminAddress = "info@kanwebspeed.com";//'arunkumar.d@beroe-inc.com';
if ($YourName != "" && $email != "") {
    if($requestfiles != ""){ 
        $newfile = explode('.', $requestfiles);
        $remove_these = array(' ','`','"','\'','\\','/');
        $newname = str_replace($remove_these, '', $_FILES['resume']['name']);
        $newname = time().'-'.$newname;
        $localpath = wp_upload_dir();
        $path = $localpath['basedir'].'/custom_uploads/'.$newname;
        //$newpath = $localpath['basedir'].'/custom_uploads/';
        $tmp = $_FILES['resume']['tmp_name'];
        move_uploaded_file($name, $path);
    }

    mysql_query("INSERT INTO at2015_jobsubmit(fname,email,phone,position,current_company,files,additionalinfo,created_on) VALUES('$YourName','$email','$phone','$position','$current_company','$requestfiles','$additionalinfo',NOW())") or die(mysql_error());
    //Mail Sending
    require_once('../mail/mail/class.phpmailer.php');
    $mail             = new PHPMailer();
    $help = nl2br(urldecode(stripslashes($help)));
    $body=
    $body=
        "<table border='0'>
            <tr>
            <td width='200'><b>Name</b></td><td width='30'>:</td><td>$YourName</td></tr>
            <tr><td><b>Email</b></td><td>:</td><td>$email</td></tr>
            <tr><td><b>Phone</b></td><td>:</td><td>$phone</td></tr>
            <tr><td><b>Position applied for</b></td><td>:</td><td>$position</td></tr>
            <tr><td><b>File</b></td><td>:</td><td>$requestfiles</td></tr>
            </table>";
    $mail->IsSMTP(); // telling the class to use SMTP
    $mail->MailerDebug = false;
    $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)    // 1 = errors and messages    // 2 = messages only
    $mail->SMTPAuth   = true;                  // enable SMTP authentication
    $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
    $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
    $mail->Port       = 587;                   // set the SMTP port for the GMAIL server
    $mail->Username   = "speedkanweb@gmail.com";  // GMAIL username
    $mail->Password   = "Speed@123";            // GMAIL password
    $mail->SetFrom($email, $FullName);
    //$mail->AddReplyTo($email, $FullName);
    $mail->Subject    = "Askan Tech JOB SUBMIT";
    $mail->AddAttachment($tmp, $path);
    $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
    $mail->MsgHTML($body);
    $mail->AddAddress($adminAddress, $adminName);
    if(!$mail->Send()) {
        echo '<div class="my-notify-error">Your message could not reach.  Please try again later. </div> ';
    }else{
        $body = "Thank you for contacting us.";
        // Mail to customer
        $mailtocustomer             = new PHPMailer();
        $mailtocustomer->IsSMTP(); // telling the class to use SMTP
        $mailtocustomer->MailerDebug = false;
        $mailtocustomer->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
        $mailtocustomer->SMTPAuth   = true;                  // enable SMTP authentication
        $mailtocustomer->SMTPSecure = "tls";                 // sets the prefix to the servier
        $mailtocustomer->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
        $mailtocustomer->Port       = 587;                   // set the SMTP port for the GMAIL server
        $mailtocustomer->Username   = "speedkanweb@gmail.com";  // GMAIL username
        $mailtocustomer->Password   = "Speed@123";            // GMAIL password
        $mailtocustomer->SetFrom('info@kanwebspeed.com', 'Askan Tech');
        $mailtocustomer->Subject    = "JOB SUBMIT";
        $mailtocustomer->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
        $mailtocustomer->MsgHTML($body);
        $mailtocustomer->AddAddress($email, $FullName);
        $mailtocustomer->Send();
        echo '<div class="my-notify-success">Successfully Submitted.</div>';
    }
}
