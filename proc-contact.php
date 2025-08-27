<?php



$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if (!$name || !$email || !$subject || !$message)
{
    $error = 'formerror';
    include('error.php');
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    $error = 'emailerror';
    include('error.php');
    exit;
}

else {
$to = 'info@globalwissen.com';
$subject = 'Message from Contact Form';
$from = "From: noreply@globalwissen.com";

$content = 'Below are my details'."\n"
            .'Name: '.$name."\n"
            .'Subject: '.$subject."\n"
            .'Message: '.$message."\n";

mail($to, $subject, $content, $from);
include('thankyou.php');
}




?>