<?php 
//if "email" variable is filled out, send email   
if (isset($_POST['submit']))  {    
	//email information
	$name = $_POST['name'];  
	$subject = $_POST['subject'];  
	$mailFrom = $_POST['mail'];  
	$message = $_POST['message'];  

	$mailTo = "tjblakely@gmail.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an email from ".$name.".\n\n".$message;

	mail($mailTo, $subject, $txt, $headers);
	header("Location: subscriberform.html?mailsend");
} 
?>