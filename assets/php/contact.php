<?php 

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$mailFrom = $_POST['email'];
	$message = $_POST['subject'];

	$mailTo = "sales@electrotec-alarms.co.uk";
	$headers = "From: ".$mailFrom;
	$txt = "You have recieved an email from ".$name.".\n\n".$subject;

	mail($mailTo, $txt, $headers);
	header("Location: contact.php?mailsend");
}