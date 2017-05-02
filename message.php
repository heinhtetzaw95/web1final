<?php 

	/*
	*		Author: Hein Htet Zaw
	*		Date: May 2, 2017
	*		Copyright: MIT
	*/

	include 'credentials.php';

			//form must use POST request
	if ($_SERVER['REQUEST_METHOD'] === 'POST'){
		$name = $_POST["name"];
		$subject = $_POST["subject"];
		$message = $_POST["message"];

		$email = "From: heinhtet.me \nName: $name \nSubject: $subject \nMessage: $message \n";

		if(strlen(trim($name)) < 1) {
			echo "<h2> Error! Invalid Name </h2>";
		}
		elseif (strlen(trim($message)) < 1) {
			echo "<h2> Error! No message content! </h2>";
		}
		elseif (strlen(trim($message)) < 1) {
			echo "<h2> Error! No subject line! </h2>";
		}
		else {
			if (mail($to, $subject, $email))
				echo "<h2> Thanks for your message. Your message has been sent! </h2>";
			else echo "<h2> Sorry! Your message did not go through. </h2>";
		}
		echo "<button onclick=\"goback();\">Go Back</button></a><script> function goback(){ window.history.back();} </script>";
	}

	elseif ($_SERVER['REQUEST_METHOD'] === 'GET'){
		echo "<h1> Sorry! You have nothing to see here. </h1>";
	}
?>