<?php

$name = $_POST['Name'];
$visitor_email = $_POST['Email'];
$phone = $_POST['Phone'];

$email_from = 'https://ahmadelhan.github.io/han.portfolio/';
$email_subject = 'New Contact Form Submission';

$email_body = "Name: $name.\n".
                "Email: $visitor_email.\n".
                    "Phone: $phone.\n";

$to = "elhan.marzooq@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);
header("Location: index.html");
?>