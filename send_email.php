<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    $to = "customercare@lamitek.in";
    $subject = "New Contact Request";
    $message = "I would like to work with you. My email address is: " . $email;
    $headers = "From: customercare@lamitek.in";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>