<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'mahiraza401@gmail.com';
$email_subject = 'New Form Submission';
$email_body = "User_name: $name.\n".
             "User_email: $visitor_email.\n".
             "Subject: $subject.\n".
             "User_message: $message.\n";
$to = 'razamehreen08@gmail.com';
$headers ="From: $email_from \r\n";
$headers = "Reply-To: $visitor_email \r\n";

if (mail($to, $email_subject, $email_body, $headers)) {
        header("Location: contact.html");
        exit;
    } else {
        echo "Email sending failed.";
    }

?>