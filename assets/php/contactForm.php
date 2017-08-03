<?php
	// Contact
	require_once('credentials.php');
	$subject = 'New portfolio message from...';

	if(isset($_POST['c_name']) && isset($_POST['c_email']) && isset($_POST['c_company']) && isset($_POST['c_message'])){
		$name = json_encode($_POST['c_name']);
		$from = json_encode($_POST['c_email']);
		$company = json_encode($_POST['c_company']);
		$message = json_encode($_POST['c_message']);
		$headers = 'From: ' . $from;
		if (mail($to, $subject, $message, $company, $headers)) {
			$result = array(
				'message' => 'Thanks for contacting me!',
				'sendstatus' => 1
				);
			echo json_encode($result);
		} else {
			$result = array(
				'message' => 'Sorry, something is wrong',
				'sendstatus' => 1
				);
			echo json_encode($result);
		}
	}

?>