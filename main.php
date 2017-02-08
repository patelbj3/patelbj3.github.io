<?php
$to = "binjalpatel08@gmail.com";
	$subject = "Job Responce";
	$txt = $_POST["name"]."\r\n".$_POST["email"]."\r\n".$_POST["phone"]."\r\n".$_POST["message"];
	$headers = "From: binjalpatel08@gmail.com\r\n";

	mail($to,$subject,$txt,$headers); //me

	$to = $_POST["email"];
	$subject = "Hey ".$_POST["name"].", Thank you for your message.";
	$txt = "Hi ".$_POST["name"].",\r\n\n Thanks you for your responce. I shall get back to you soon.\r\n\nThank You, Binjal Patel";
	$headers = "From:binjalpatel08@gmail.com\r\n";

	mail($to,$subject,$txt,$headers); //sender

 ?>
