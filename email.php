<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'Duvindu Nishad Karunasingha';
$email_subject = "new form subject";
$email_body="user name: $name.\n".
              "user email: $visitor_email.\n".
              "user message: $message.\n";

$to = "duvidunishad11@gmail.com";
$headers = "from: $email_from \r\n";
$headers .= "reply-to: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("location: index.html");
?>