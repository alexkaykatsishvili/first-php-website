<?php 
	define('TITLE', 'Contact Us | Franklin\'s Fine Dinning');
	include("includes/header.php");
/*
		NOTE:
		In the form in contact.php, the name text field has the name "name"
		If the user submits the form, the $_POST['name'] variable will be
		automatically created, and will contain the text they typed into
		the field. The $_POST['email'] variable will contain whatever they typed
		into the email field.
	
	
		PHP used in this script:
		
		preg_match()
		- Perform a regular expression match
		- http://ca2.php.net/preg_match
		
		isset()
		- Determine if a variable is set and is not NULL
		- http://ca2.php.net/manual/en/function.isset.php
		
		$_POST
		- An associative array of variables passed to the current script via the HTTP POST method.
		- http://www.php.net/manual/en/reserved.variables.post.php
		
		trim()
		- Strip whitespace (or other characters) from the beginning and end of a string
		- http://www.php.net/manual/en/function.trim.php
		
		exit
		- Output a message and terminate the current script
		- http://www.php.net//manual/en/function.exit.php
		
		die()
		- Equivalent to exit
		- http://ca1.php.net/manual/en/function.die.php
		
		wordwrap()
		- Wraps a string to a given number of characters
		- http://ca1.php.net/manual/en/function.wordwrap.php
		
		mail()
		- Send mail
		- http://ca1.php.net/manual/en/function.mail.php
	*/
?>

<div id="contact">

	<hr>

	<h1>Get in touch with us!</h1>

	<?php 

	//Check for header injection

	function has_header_injection($str) {

		return preg_match("/[\r\n]/", $str);

	}

	if(isset($_POST['contact_submit'])) {

		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$msg = $_POST['message'];

		//Check to see if $name or $email have header injections
		if(has_header_injection($name) || has_header_injection($email)) {
			die();
		}

		//Add the recipient email to a variable
		$to = "alexander.kaykatsishvili@gmail.com";

		//Create a subject
		$subject = "$name send you a message via your contact form";

		//Construct the message
		$message = "Name: $name\r\n";
		$message.= "Email: $email\r\n";
		$message.= "Message:\r\n$msg";

		//If the subscribe checkbox was checked
		if (isset($_POST['subscribe']) && $_POST['subscribe'] == 'Subscribe') {
			
			$message.= "\r\n\r\nPlease add $email to the mailing list.\r\n";

		}

		$message = wordwrap($message, 72);

		// Set the mail headers into a variable
		$headers = "MIME-Version: 1.0\r\n";
		// $headers .= "Content-type: text/plain; charset=UTF-8\r\n";
		$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
		$headers .= "From: " . $name . " <" . $email . ">\r\n";
		$headers .= "X-Priority: 1\r\n";
		$headers .= "X-MSMail-Priority: High\r\n\r\n";

		//Send the email
		mail($to, $subject, $message, $headers);
	?>
	
	<!-- Show success message after email has sent -->
	<h5>Thanks for contacting</h5>
	<p>Please allow 24 hours for a response</p>
	<p><a href="index.php" class="button previous">Go to home</a></p>

	<?php } else { ?>

	<form method="post" action="" id="contact-form">
		<label for="name">Your name</label>
		<input type="text" id="name" name="name" required>

		<label for="email">Your email</label>
		<input type="email" id="email" name="email" required>

		<label for="message">and your message</label>
		<textarea name="message" id="message" required></textarea>

		<input type="checkbox" id="subscribe" name="subscribe" value="Subscribe">
		<label for="subscribe">Subscribe to newsletter</label>

		<input type="submit" class="button next" name="contact_submit" value="Send Message">
	</form>

	<?php } ?>

	<hr>

</div>
<!-- contact -->

<?php

	include("includes/footer.php");

?>