<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../../vendor/autoload.php';

Flight::map('mailer', function () {
    $mail = new PHPMailer(true);

    // SMTP Configuration for Gmail
    $mail->isSMTP();  // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Gmail SMTP server
    $mail->SMTPAuth = true;  // Enable SMTP authentication
    $mail->Username = 'your-email@gmail.com';  // Gmail address
    $mail->Password = 'your-app-password';  // App Password (or your Gmail password if not using 2FA)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Enable TLS encryption
    $mail->Port = 587;  // SMTP port (587 for TLS)

    // From address
    $mail->setFrom('your-email@gmail.com', 'Your App');

    return $mail;
});

Flight::map('render', function ($template, $data = []) {
    // Extract passed data into variables
    extract($data);

    // Get the view path
    $viewPath = Flight::get('flight.views.path');

    // Include the header
    require $viewPath . '/templates/header.php';

    // Include the main template
    require $viewPath . '/' . $template . '.php';

    // Include the footer
    require $viewPath . '/templates/footer.php';
});
