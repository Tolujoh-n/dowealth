<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $date = htmlspecialchars($_POST['date']);
    $message = htmlspecialchars($_POST['message']);
    
    // Email address to receive the appointment form data
    $to = "consultingdowealth@gmail.com";  // The email you want to receive the form
    $subject = "New Appointment Request";
    
    // Create the email body content
    $body = "You have received a new appointment request.\n\n".
            "Name: $name\n".
            "Email: $email\n".
            "Phone: $phone\n".
            "Appointment Date: $date\n\n".
            "Message:\n$message";
    
    // Email headers
    $headers = "From: $email";
    
    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Your appointment request has been sent successfully!";
    } else {
        echo "There was an error sending your request. Please try again.";
    }
}
?>
