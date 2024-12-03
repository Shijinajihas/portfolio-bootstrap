<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Replace with your email address
    $to = 'shijinanewstar@gmail.com';
    $subject = $_POST['subject'] ?? 'No Subject'; // Default subject
    $name = $_POST['name'] ?? 'Anonymous';       // Default name
    $email = $_POST['email'] ?? 'no-reply@example.com'; // Default email
    $message = $_POST['message'] ?? 'No Message'; // Default message

    // Email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        http_response_code(200); // Success response
        echo "Mail sent successfully!";
    } else {
        http_response_code(500); // Server error
        echo "Failed to send mail.";
    }
} else {
    http_response_code(405); // Method Not Allowed
    echo "Method Not Allowed";
}
?>
