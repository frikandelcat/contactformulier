<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Email settings
    $to = "justinlepper@gc-webhosting.nl"; // Replace with your email
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers))
    {
        echo "Email sent successfully!";
    } else
    {
        echo "Failed to send email.";
    }
} else
{
    echo "Invalid request.";
}
?>