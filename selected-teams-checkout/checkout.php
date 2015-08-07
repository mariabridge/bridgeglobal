<?php

if($_POST)
{

	require_once($_SERVER['DOCUMENT_ROOT']."library/send_smtp_mail.php");

	/*
	 *
	 *   SMTP mail
	 *   Author sumesh@bridge
	 *   On 13-02-2015
	 *
	 *   */

	$developer_checkout_array 	= json_decode( $_POST['developer_checkout_array'] );
	$loged_user_name 			= $_POST['loged_user_name'];
	$loged_user_email 			= $_POST['loged_user_email'];
	$loged_user_phone 			= $_POST['loged_user_phone'];
	$cookie_developers 			= json_decode( $_POST['cookie_developers'] );

	$toArray 		= array();
	$fromArray 		= array();
	$fromArray_admin= array();
	$ccArray		= array();
	$replyToArray	= array();
	$attachmentArray= array();

	$bridge_message = '';

	$client_message = '';

	$common_message = '';

	$bridge_message	= 'Hi Admin,<br/><br/>'.$loged_user_name.' is picked some team members. Picked members details are given below<br/><br/><table>';

	$client_message	= 'Hi '.$loged_user_name.',<br/><br/> You picked our some developers for your team. Picked members details are given below<br/><br/><table>';

	foreach ( $cookie_developers as $key => $value ){

		if ( in_array( $key, $developer_checkout_array ) ) {

			$common_message = $common_message.'<tr>
					<td>Developer Name</td><td>&nbsp;:&nbsp;</td><td>'.$value[0]->name.'</td>
					</tr>
					<tr>
					<td>Developer Job Position</td><td>&nbsp;:&nbsp;</td><td>'.$value[1]->job_position.'</td>
					</tr>
					<tr>
					<td colspan="3">&nbsp;</td>
					</tr>
					';

		}
	}

	 $messageBody_bridge = $bridge_message.$common_message.'</table>Contact details of '.$loged_user_name.' : <br/>Email : '.$loged_user_email.'<br/>Phone : '.$loged_user_phone.'<br/><br/>Best Regards<br/>Staffing Admin';

	 $messageBody_client = $client_message.$common_message.'</table>Best Regards<br/>Staffing Admin';

	$fromArray[]		= 'info@bridge-global.com';
	$fromArray[]		= 'Bridge Global Admin';

	$fromArray_admin[]	= $loged_user_email;
	$fromArray_admin[]	= $loged_user_name;

	$subject			= 'Pick My Team';

	//$toArray['maria.joseph@bridge-india.in'] 	= 'Admin';
	$toArray['info@bridge-global.com'] 	= 'Admin';
	$toArray_client[$loged_user_email] 	= $loged_user_name;

	sendSmtpMail( $toArray_client,$fromArray, $subject, $messageBody_client, $ccArray, $replyToArray, $attachmentArray );

	if(sendSmtpMail( $toArray, $fromArray_admin, $subject, $messageBody_bridge, $ccArray, $replyToArray, $attachmentArray ) )
	{
		die("success");
	}
}

?>
