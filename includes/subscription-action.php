<?php
if($_POST)
{
require('captcha-config.php');
    
    $subs_name      = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $subs_email     = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    
    if(empty($subs_name)) {
		$empty[] = "<b>Name</b>";		
	}
	if(empty($subs_email)) {
		$empty[] = "<b>Email</b>";
	}
	
	if(!empty($empty)) {
		$output = json_encode(array('type'=>'error', 'text' => implode(", ",$empty) . ' Required!'));
        die($output);
	}
	
	if(!filter_var($subs_email, FILTER_VALIDATE_EMAIL)){ //email validation
	    $output = json_encode(array('type'=>'error', 'text' => '<b>'.$subs_email.'</b> is an invalid Email, please correct it.'));
		die($output);
	}
	
	//reCAPTCHA validation
	if (isset($_POST['g-recaptcha-response'])) {		
		require('recaptcha/src/autoload.php');
		$recaptcha = new \ReCaptcha\ReCaptcha(SECRET_KEY);
		$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
		  if (!$resp->isSuccess()) {
				$output = json_encode(array('type'=>'error', 'text' => '<b>Captcha</b> Validation Required!'));
				die($output);				
		  }	
	}
	
	$toEmail = "impokhriyal@gmail.com, regauflowers@gmail.com";
	$mailHeaders = "From: " . $subs_name . "<" . $subs_email . ">\r\n";
	$mailBody = "The following details has been posted to 52Worksheets Subscription form" . "\n\n";
	$mailBody .= "Name: " . $subs_name . "\n";
	$mailBody .= "Email: " . $subs_email . "\n";
	$mailBody .= "From," . "\n\n";
	$mailBody .= "Team, 52Worksheets.com";

	if (mail($toEmail, "Subscription from 52Worksheets.com", $mailBody, $mailHeaders)) {
	    $output = json_encode(array('type'=>'message', 'text' => 'Hi '.$subs_name .', thank you for subscriing with us. We will notified when we are back.'));
	    die($output);
	} else {
	    $output = json_encode(array('type'=>'error', 'text' => 'Unable to send email, please contact'.SENDER_EMAIL));
	    die($output);
	}
}
?>