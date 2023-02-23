<?php
phpinfo();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'dynamicgraphics7@gmail.com';
$email_subject = "New Form Submission";
$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".  
              "User Message: $message.\n";
$to = "dynamicgraphics7@gmail.com";
$headers = "From: $email_from\r\n";
$headers .= "Reply-To: $visitor_email\r\n";

mail($to, $email_subject, $email_body, $headers);
echo "Email sent";
header("Location: index.html");
?>


