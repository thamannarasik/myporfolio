<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['submitContact'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);


        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
        // Authentication
        $mail->Username = "thamannarasik@gmail.com";
        $mail->Password = "kmku cagr teyh ellr";

        // Email content
        $mail->setFrom("thamannarasik@gmail.com", "Website Contact Form");
        $mail->addAddress("thamannarasik@gmail.com", "Thamanna");
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = "<p><strong>Name:</strong> $name</p>
                       <p><strong>Email:</strong> $email</p>
                       <p><strong>Message:</strong> $message</p>";

                       if ($mail->send()) {
                        $_SESSION['status'] = "Thank you! Your message has been sent successfully.";
                    } else {
                        $_SESSION['status'] = "Message could not be sent. Mail Error: {$mail->ErrorInfo}";
                    }
            
                    header('Location: index.php');
                    exit(0);
                } catch (Exception $e) {
                    $_SESSION['status'] = "An error occurred: {$mail->ErrorInfo}";
                    header('Location: index.php');
                    exit(0);
                }
            } else {
                header('Location: index.php');
                exit(0);
            }
            ?>