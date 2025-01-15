<?php

header('Content-Type: application/json');

// Sanitize and validate inputs
$name = htmlspecialchars(trim($_POST["name"]));
$email = filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL);
$subject = htmlspecialchars(trim($_POST["subject"]));
$message = htmlspecialchars(trim($_POST["message"]));

// Check for validation errors
if (!$email) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid email address.']);
    exit;
}

require '/home1/tdvemgmy/public_html/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

try {
    
    $mail->isSMTP();
    $mail->SMTPAuth = true;

    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = "thamannarasik@gmail.com";
    $mail->Password = "kmku cagr teyh ellr";

    $mail->setFrom("thamannarasik@gmail.com", "Website Contact Form"); 
    $mail->addReplyTo($email, $name); 
    $mail->addAddress("thamannarasik@gmail.com", "Thamanna");

    $mail->Subject = $subject;
    $mail->Body = $message;

    $mail->send();

    echo json_encode(['status' => 'success', 'message' => 'Message sent successfully.']);
} catch (Exception $e) {
    echo json_encode(['status' => 'error', 'message' => 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo]);
}
