<?php

header('Content-Type: application/json');
error_log("POST data: " . print_r($_POST, true));
$rawInput = file_get_contents("php://input");
error_log("Raw POST input: " . $rawInput);

// Sanitize and validate inputs
$name = htmlspecialchars(trim($_POST["name"]));
$email = trim($_POST["email"]); // Remove surrounding spaces
$email = preg_replace('/[^\P{C}\s]/u', '', $email); // Remove non-printable characters
$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitize the email address
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
$subject = htmlspecialchars(trim($_POST["subject"]));
$message = htmlspecialchars(trim($_POST["message"]));
error_log("Request Method: " . $_SERVER['REQUEST_METHOD']);
error_log("Content-Type: " . $_SERVER['CONTENT_TYPE']);
error_log("Content-Length: " . $_SERVER['CONTENT_LENGTH']);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
    exit;
}
$input = file_get_contents('php://input');
if (empty($input) && empty($_POST)) {
    echo json_encode(['status' => 'error', 'message' => 'No form data received.']);
    exit;
}
if (!isset($_SERVER['CONTENT_TYPE']) || strpos($_SERVER['CONTENT_TYPE'], 'multipart/form-data') === false) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid content type.']);
    exit;
}
// Check for validation errors
if (!$email) {
    error_log("Invalid email: " . htmlspecialchars($_POST["email"]));
    echo json_encode(['status' => 'error', 'message' => 'Invalid email address.']);
    exit;
}
require '/home1/tdvemgmy/public_html/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);
error_log("Raw email input on first submission: " . $_POST["email"]);
error_log("Raw email input: " . $_POST["email"]);
error_log("Sanitized email input: " . $email);
        
        try {
            // Server settings
            $mail->isSMTP();
            $mail->SMTPAuth = true;
        
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
        
            $mail->Username = "thamannarasik@gmail.com";
            $mail->Password = "kmku cagr teyh ellr";
    $mail->setFrom("thamannarasik@gmail.com", "Website Contact Form"); 
    $mail->addAddress("thamannarasik@gmail.com", "Thamanna");

    $mail->isHTML(true);
            $mail->Subject = 'New Contact Form Submission';
            $mail->Body = "<p><strong>Name:</strong> $name</p>
                           <p><strong>Email:</strong> $email</p>
                           <p><strong>Message:</strong> $message</p>";

                           $mail->send();

                           echo json_encode(['status' => 'success', 'message' => 'Message sent successfully.']);
                       } catch (Exception $e) {
                           echo json_encode(['status' => 'error', 'message' => 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo]);
                       }
?>