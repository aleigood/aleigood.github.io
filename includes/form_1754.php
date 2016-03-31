<?php	
	if(empty($_POST['input_2671']) || empty($_POST['input_2869']))
	{
		return false;
	}
	
	$input_2671 = $_POST['input_2671'];
	$input_2869 = $_POST['input_2869'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from teachrec.";
	$email_body = "You have received a new message. \n\n".
				  "Input_2671: $input_2671 \nInput_2869: $input_2869 \n";
	$headers = "From: contact@yoursite.com\n";
	$headers .= "Reply-To: DoNotReply@yoursite.com";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>