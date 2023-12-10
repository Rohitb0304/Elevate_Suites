<?php
$recipient = 'your-email@example.com'; // default recipient's email address
$subject = 'Contact Form Submission'; // email subject

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Validate and sanitize user inputs
$name = filter_var($name, FILTER_SANITIZE_STRING);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$message = filter_var($message, FILTER_SANITIZE_STRING);

// Set the recipient based on user's email domain
if (strpos($email, 'example.com') !== false) {
    $recipient = 'support@example.com';
}

// Additional headers
$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Send email
$mailSent = mail($recipient, $subject, $message, $headers);

if ($mailSent) {
    echo 'Email sent successfully!';
} else {
    echo 'Email could not be sent.';
}
?>
