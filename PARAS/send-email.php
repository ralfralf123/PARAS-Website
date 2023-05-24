<?php 

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "ralfanastacio@gmail.com";
$mail->Password = "Apidude2020";

$mail->setFrom($email, $name);
$mail->addAddress("zzzzjeromezzzz@gmail.com", "Ralf");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

echo "email sent";
 ?>