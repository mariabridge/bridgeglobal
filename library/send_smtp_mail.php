<?php
session_start();
/*
 *
 *   This function is used to send mail via SMTP.
 *   Author sumesh@bridge
 *   On 04-06-2014
 *
 *
 *   */

require_once($_SERVER['DOCUMENT_ROOT']."/library/PHPMailer/class.phpmailer.php");

if (! function_exists('sendSmtpMail'))
{

	function sendSmtpMail( $toArray, $fromArray, $subject, $message, $ccArray = array(), $replyToArray = array(), $attachmentArray = array(), $embededImage = '' )
	{

		$mail           = new PHPMailer();

		$mail->IsSMTP(); // telling the class to use SMTP

// 		echo '<pre>';
// 		print_r($embededImageArray);
// 		die;

		$mail->AddEmbeddedImage($embededImage, 'bridge-attach');

		$mail->MsgHTML($message);

		$mail->Host 		= '85.214.236.169'; // SMTP server
		$mail->SMTPDebug  	= FALSE;
		$mail->SMTPAuth  	= FALSE;
		$mail->Port       	= '25';
		$mail->Subject    	= $subject;

		$from_email 		= $fromArray[0];
		$from_name 			= $fromArray[1];
		$mail->From     	= $from_email;
		$mail->FromName 	= $from_name;

		foreach ( $toArray as $keyToEmail => $valueToName )
		{
			if( $keyToEmail )
			{
				$mail->AddAddress( $keyToEmail , $valueToName);
			}
		}

		foreach ( $ccArray as $keyCCEmail => $valueCCName )
		{
			if( $keyCCEmail )
			{
				$mail->AddCC( $keyCCEmail, $valueCCName );
			}
		}

		foreach ( $replyToArray as $keyReplyToEmail => $valueReplyToName )
		{
			if( $keyReplyToEmail )
			{
				$mail->AddReplyTo( $keyReplyToEmail , $valueReplyToName );
			}
		}

		foreach ( $attachmentArray as $keyAttachment => $valueAttachment )
		{
			if( $valueAttachment )
			{
				$mail->AddAttachment($valueAttachment);
			}
		}



		if(!$mail->Send()) {
			echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
			return true;
		}



	}

}
