<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['fields']['name'];
    $email = $_POST['fields']['email_4'];
    $phone = $_POST['fields']['phone'];
    $bestTime = implode(', ', $_POST['fields']['field_4']);
    $products = implode(', ', $_POST['fields']['field_5']);
    $details = $_POST['fields']['field_6'];

    $to = 'Support@evanksa.com'; // Replace with your own email address
    $subject = 'New Form Submission';
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    $message .= "Best Time to Contact: $bestTime\n";
    $message .= "Products: $products\n";
    $message .= "Details: $details\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your submission!";
    } else {
        echo "Error sending email. Please try again later.";
    }
}
?>