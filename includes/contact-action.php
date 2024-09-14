<?php
// require('recaptcha/src/autoload.php');
if($_POST)
{
require('captcha-config.php');
    
    $user_name      = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $user_email     = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $user_phone     = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
    $user_subject   = filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
    $user_comments  = filter_var($_POST["comments"], FILTER_SANITIZE_STRING);
    
    if(empty($user_name)) {
		$empty[] = "<b>Name</b>";		
	}
	if(empty($user_email)) {
		$empty[] = "<b>Email</b>";
	}
	if(empty($user_phone)) {
		$empty[] = "<b>Phone Number</b>";
	}	
	if(empty($user_subject)) {
		$empty[] = "<b>Subject</b>";
	}
	if(empty($user_comments)) {
		$empty[] = "<b>Comments</b>";
	}
	
	if(!empty($empty)) {
		$output = json_encode(array('type'=>'error', 'text' => implode(", ",$empty) . ' Required!'));
        die($output);
	}
	
	if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)){ //email validation
	    $output = json_encode(array('type'=>'error', 'text' => '<b>'.$user_email.'</b> is an invalid Email, please correct it.'));
		die($output);
	}
	// echo "<pre>";
	// print_r($_POST);
	// exit;
	
	//reCAPTCHA validation
	if(isset($_POST['g-recaptcha-response'])) {		
		require('recaptcha/src/autoload.php');
		$recaptcha = new \ReCaptcha\ReCaptcha(SECRET_KEY);
		$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
		  if (!$resp->isSuccess()) {
				$output = json_encode(array('type'=>'error', 'text' => '<b>Captcha</b> Validation Required!'));
				die($output);				
		  }	
	}
	
	$toEmail = "impokhriyal@gmail.com, regauflowers@gmail.com";
	$mailHeaders = "From: " . $user_name . "<" . $user_email . ">\r\n";
	$mailBody = "The following details has been posted to 52Worksheets contact form" . "\n\n";
	$mailBody .= "Name: " . $user_name . "\n";
	$mailBody .= "Email: " . $user_email . "\n";
	$mailBody .= "Phone: " . $user_phone . "\n";
	$mailBody .= "Subject: " . $user_subject . "\n";
	$mailBody .= "Comments: " . $user_comments . "\n\n";
	$mailBody .= "From," . "\n";
	$mailBody .= "Team, 52Worksheets.com";

	if (mail($toEmail, "Contact from 52Worksheets.com", $mailBody, $mailHeaders)) {
	    $output = json_encode(array('type'=>'message', 'text' => 'Hi '.$user_name .', thank you for the comments. We will get back to you shortly.'));
	    die($output);
	} else {
	    $output = json_encode(array('type'=>'error', 'text' => 'Unable to send email, please contact'.SENDER_EMAIL));
	    die($output);
	}
}
?>