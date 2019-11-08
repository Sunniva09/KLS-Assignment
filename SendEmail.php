<?php
  $name = $_POST['name'];
  $vemail = $_POST['email'];
  $message = $_POST['message'];

	$email_from = 'yourname@yourwebsite.com';
	$email_subject = "New Form submission";
	$email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message".

	$to = "blandine.fallon@efrei.net";
	$headers = "From: $email_from \r\n";
	$headers .= "Reply-To: $vemail \r\n";

	mail(to,subject,message,headers);
	header("refresh : 2; url = SetData.php");
     echo "Your mail was send successfully";
?>