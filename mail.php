<?php 
	//get data from contact form
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message= $_POST['message'];
	$to = "prashantdasnur11@gmail.com";
	$subject = "Mail From theprofessor.tech";
	$txt = "Name: ".$name ."\r\n Email: ".$email . "\r\n Message: ".$message;
	$headers = "From:noreply@theprofessor.tech"."\r\n"
	if ($email != NULL) {
	 	mail($to, $subject, $txt, $headers);
	 	echo "<script>alert("Message Sent")</script>";
	 }
	 or die("Error.!");
	 /*<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeYjILGdG8nOkdEJM0Goa_1U9yVQIWig5toFuTKir329fqlOg/viewform?embedded=true" width="640" height="677" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>*/ 
?>