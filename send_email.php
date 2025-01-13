<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    $to = "shivanksengar07@gmail.com";
    $subject = "New Contact Request";
    $message = "I would like to work with you. My email address is: " . $email;
    $headers = "From: shivanksengar07@gmail.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>