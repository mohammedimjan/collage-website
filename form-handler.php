<?php
$name = $_post[''];
$visitor_email = $_post[''];
$Subject = $_post[''];
$message = $_post[''];

$email_from = 'info.domainemailaddress.com';
$email_subject = 'New Form Submission';
$email_body = "user Name: $name.\n".
                "user Email: $visitor_email.\n".
                "Subject: $Subject.\n".
                "Subject Messsage: $message.\n";

$to = 'mohammedimjan(@gmail.com';
$headers = "From: $email_from \r\n";
$headers .="Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");

?>

