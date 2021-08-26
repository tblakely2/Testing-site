<?php 
//if "email" variable is filled out, send email   
if (isset($_POST['submit']))  {    
	//email information
	$name = "name"; //$_POST['name'];  
	$subject = "subject"; //$_POST['subject'];  
	$mailFrom = "customerprofileresponse@profireenergy.com";
	$message = "message"; //$_POST['message'];  

	$mailTo = "tblakely2@studentmail.nait.ca";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an email from ".$name.".\n\n".$message;

	mail($mailTo, $subject, $txt, $headers);
	header("Location: index.php?mailsend");
}
//LOOK INTO PHPMAILER
//USE AZURE SMTP CREDENTIALS
//CONTACT IT "I HAVE A PHP SCRIPT AND I WANT TO HOST IT IN THEIR INFRASTRUCTURE 
?>
