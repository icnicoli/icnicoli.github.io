<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "sabandalisaac@gmail.com"; // Replace with your email address
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";
    $message = "Name: $name\nEmail: $email\nMessage:\n$message";

    mail($to, $subject, $message, $headers);
}
?>