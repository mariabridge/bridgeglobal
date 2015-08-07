<?php

$link='http://bridge-global.com/delivery-models';

if( isset( $_POST ) ){

	require_once($_SERVER['DOCUMENT_ROOT']."library/send_smtp_mail.php");

	$your_name 			= '';
	$your_email 		= '';
	$your_model_image 	= '';

	$subject			= '';

	if( isset( $_POST['complete-delivery-model-name'] ) && ( $_POST['complete-delivery-model-name'] != '' ) ){
		$your_name 	= $_POST['complete-delivery-model-name'];
		$subject	= 'Complete Delivery';
	}
	if( isset( $_POST['resource-team-model-name'] ) && ( $_POST['resource-team-model-name'] != '' ) ){
		$your_name 	= $_POST['resource-team-model-name'];
		$subject	= 'Resource Team';
	}
	if( isset( $_POST['resource-model-name'] ) && ( $_POST['resource-model-name'] != '' ) ){
		$your_name 	= $_POST['resource-model-name'];
		$subject	= 'Resource';
	}

	if( isset( $_POST['complete-delivery-model-email'] ) && ( $_POST['complete-delivery-model-email'] != '' ) ){
		$your_email = $_POST['complete-delivery-model-email'];
	}
	if( isset( $_POST['resource-team-model-email'] ) && ( $_POST['resource-team-model-email'] != '' ) ){
		$your_email = $_POST['resource-team-model-email'];
	}
	if( isset( $_POST['resource-model-email'] ) && ( $_POST['resource-model-email'] != '' ) ){
		$your_email = $_POST['resource-model-email'];
	}

	if( isset( $_POST['complete-delivery-model-image-val'] ) && ( $_POST['complete-delivery-model-image-val'] != '' ) ){
		$your_model_image = substr( $_POST['complete-delivery-model-image-val'], strpos( $_POST['complete-delivery-model-image-val'], "," )+1);
	}
	if( isset( $_POST['resource-team-model-image-val'] ) && ( $_POST['resource-team-model-image-val'] != '' ) ){
		$your_model_image = substr( $_POST['resource-team-model-image-val'], strpos( $_POST['resource-team-model-image-val'], "," )+1);
	}
	if( isset( $_POST['resource-model-image-val'] ) && ( $_POST['resource-model-image-val'] != '' ) ){
		$your_model_image = substr( $_POST['resource-model-image-val'], strpos( $_POST['resource-model-image-val'], "," )+1);
	}

	if( ( $your_name != '' ) && ( $your_email != '' ) && ( $your_model_image != '' ) ){

		/* image handling */

		//Decode the string
		/*$unencodedData	= base64_decode( $your_model_image );
		$image_path 	= 'upload/'.session_id().'.png';
		file_put_contents($image_path, $unencodedData);
		*/
		/*
		 *
		 *   SMTP mail
		 *   Author sumesh@bridge
		 *   On 04-06-2014
		 *
		 */
		$toArray 			= array();
		$fromArray 			= array();
		$ccArray			= array();
		$replyToArray		= array();
		$attachmentArray	= array();
		$embededImage   	= '';

		$embededImage	= $image_path;

		$fromArray[]	= $your_email;
		$fromArray[]	= $your_name;

		$mail_subject   = 'Discuss '.$subject.' Model';

		$toArray['info@bridge-global.com']	= 'Admin';
		$admin_message_body					= 'Hi Admin,<br/><br/>'.$your_name.' chosen to discuss the delivery model - '.$subject.' with us.';

		sendSmtpMail( $toArray, $fromArray, $mail_subject, $admin_message_body, $ccArray, $replyToArray, $attachmentArray, $embededImage );

		/*
		$toArray 				= array();
		$toArray[$your_email]	= $your_name;
		//$client_message_body	= 'Hi '.$your_name.',<br/><br/> you are customised our '.$subject.' Model design is given below <br> <img alt="PHPMailer" src="cid:bridge-attach">';
		$client_message_body	= 'Hi '.$your_name.',<br/><br/>Greeting from Bridge!<br/>You have chosen to discuss the delivery model - '.$subject.' with us. We will get back to you shortly to book a meeting.<br/><img alt="PHPMailer" src="cid:bridge-attach"><br/>Have a nice day!<br/><br/>Thank You,<br/>Bridge';
		sendSmtpMail( $toArray, $fromArray, $mail_subject, $client_message_body, $ccArray, $replyToArray, $attachmentArray, $embededImage );
		*/
		unlink( $image_path );

		
		echo '<script language="javascript">window.open(\''.$link.'\',\'_self\');</script>';

	}

	//echo '<script language="javascript">window.open(\''.$link.'\',\'_self\');</script>';

}

echo '<script language="javascript">window.open(\''.$link.'\',\'_self\');</script>';

?>
