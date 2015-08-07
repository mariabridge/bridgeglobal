<?php
//ini_set("pcre.backtrack_limit", "0");
//ini_set("pcre.recursion_limit", "0");
//Get the base-64 string from data
$filteredData=substr($_POST['img_val'], strpos($_POST['img_val'], ",")+1);
$name = $_POST['workflow-name'];
$email = $_POST['workflow-email'];

//Decode the string
$unencodedData=base64_decode($filteredData);
session_start();
$img_path = 'session/'.session_id().'.png';
//Save the image
file_put_contents($img_path, $unencodedData);

?>





<?php

require 'PHPMailerAutoload.php';

$mail            = new PHPMailer();
//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
//Set the hostname of the mail server
$mail->Host      = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 465;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'ssl';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "soumyaabhilash85@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "sujathamohanan";
//Set the SMTP port number - 587 for authenticated TLS
$mail->setFrom('teams@bridge-india.in', 'Bridge Team');     //Set who the message is to be sent from
$mail->addReplyTo('sandra.thomas@bridge-india.in', 'Sandra');  //Set an alternative reply-to address

$mail->addAddress('sandra.thomas@bridge-india.in', 'Sandra');  // Add a recipient
$mail->addAddress($email, $name);  // Add a recipient

//echo "<pre>";
//print_r($mail);exit;
 $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');
//$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
// Optional name
// Set email format to HTML

$mail->Subject = 'Project Model';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML('<html><p><img src="'.$_POST['img_val'].'" /></p></html>');
$mail->AddEmbeddedImage($img_path, "my-attach", $img_path);
$mail->Body = 'Name:'.$name.'<br>Email: '.$email.'<br> <img alt="PHPMailer" src="cid:my-attach">';

if(!$mail->send()) {
echo 'Message could not be sent.';
echo 'Mailer Error: ' . $mail->ErrorInfo;

}
else
{
//echo 'Message has been sent';
unlink($img_path);
 header("Location: ../2.htm");exit;
}


//Show the image
//echo '<img src="'.$_POST['img_val'].'" />';
?>

<style type="text/css">
body, a, span {
font-family: Tahoma; font-size: 10pt; font-weight: bold;
}
</style>