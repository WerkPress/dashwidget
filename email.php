<?php

$name = $_POST['name'];
$company = $_POST['company'];
$email = $_POST['email'];
$website = $_POST['website'];
$theme = $_POST['theme'];
$hosting = $_POST['hosting'];
$changes = $_POST['changes'];
$budget = $_POST['budget'];


// Build email

$to = 'eric@westwerkdesign.com';
$subject = "Theme Customization Request from $name";
$message = "Request from: $name \n";
$message .= "Company: $company \n";
$message .= "Email: $email \n";
$message .= "Website: $website \n";
$message .= "Theme: $theme \n";
$message .= "Hosting: $hosting \n";
$message .= "Changes: $changes \n";
$message .= "Budget: $budget \n";

if ( wp_mail( $to, $subject, $message ) ){
	echo "Message sent";
}

else {
	echo "Couldn't send message";
}
