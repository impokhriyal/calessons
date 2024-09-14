<?php
	//Import PHPMailer classes into the global namespace
	//These must be at the top of your script, not inside a function
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	// Load PHPMailer	
	require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

	//Load Composer's autoloader
	// require 'vendor/autoload.php';

	$user_name      = strip_tags($_POST["ftw_name"]);
	$user_email     = strip_tags($_POST["ftw_email"]);
	$user_phone     = strip_tags($_POST["ftw_phone"]);
	$user_comments  = strip_tags($_POST["ftw_comments"]);

	if ( empty($user_name) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR empty($user_email) OR empty($user_phone)) {
		http_response_code(400);
		$msg = 'Please complete the form and try again.';
		echo $msg;
		exit;
  	}

	//Create an instance; passing `true` enables exceptions
	$mail = new PHPMailer(true);
    $mail->SMTPOptions = array(
       'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
       )
    );

	try {
		//Server settings
		$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
		$mail->isSMTP();                                            //Send using SMTP
		$mail->Host       = 'smtp.titan.email';                     //Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
		$mail->Username   = 'info@52worksheets.com';                     //SMTP username
		$mail->Password   = 'Df68ds0h0af$&';                               //SMTP password
		$mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
		//$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
		$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

		//Recipients
		$mail->setFrom($user_email, $user_name);
		$mail->addAddress('regauflowers@gmail.com', 'Regau Flowers');     //Add a recipient
		$mail->addAddress('lisapaolotti@yahoo.com', 'Lisa Flowers');      //Add anoter recipient (Name is optional)
		$mail->addReplyTo($user_email, $user_name);
		// $mail->addCC('cc@example.com');
		$mail->addBCC('impokhriyal@gmail.com');

		//Attachments
		// $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
		// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

		//Content
		$mail->isHTML(true);                                  //Set email format to HTML
		$mail->Subject = 'Contact Form - 52Worksheets.com';
		$mail->Body    = $user_comments;
		// $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
		// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		$mail->send();
		echo 'Message has been sent';
	} catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
?>