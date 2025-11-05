<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$content = $_POST['message'];

$email_from = 'info@kensite.com';
$email_subject = 'New Message From Your Site';
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n"
                "User Message: $content.\n";

$to = 'Kendrick.Daniels2011@gmail.com';

$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);
header("Location: contact.html");
?>