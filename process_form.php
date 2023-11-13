<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "sylvia1997@live.it";
    $subject = "New Registration Form Submission";
    
    $message = "First Name: " . $_POST["first-name"] . "\n";
    $message .= "Last Name: " . $_POST["last-name"] . "\n";
    $message .= "Email: " . $_POST["email"] . "\n";
    // Add other form fields to the message as needed

    $headers = "From: webmaster@example.com"; // Change this to your email or leave it as is
    
    mail($to, $subject, $message, $headers);
    
    // Redirect or display a thank you message
    header("Location: thank-you.html");
    exit();
}
?>