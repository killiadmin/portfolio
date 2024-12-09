<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

require 'vendor/autoload.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();


$nom = htmlspecialchars($_POST['nom']);
$email = htmlspecialchars($_POST['email']);
$objet = htmlspecialchars($_POST['objet']);
$message = htmlspecialchars($_POST['message']);

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = $_ENV['SMTP_HOST'];
    $mail->SMTPAuth = true;
    $mail->Username = $_ENV['USERNAME'];
    $mail->Password = $_ENV['PASSWORD'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = $_ENV['PORT'];

    $mail->setFrom($_ENV['USERNAME'], 'Killian Filatre');
    $mail->addAddress($_ENV['USERNAME']);
    $mail->addReplyTo($email, $nom);

    $mail->isHTML(true);
    $mail->Subject = $objet;
    $mail->Body = "Nom (Expéditeur) : $nom<br>Email (Expéditeur) : $email<br><br>Message (Expéditeur) :<br>$message";
    $mail->AltBody = "Nom: $nom\nEmail: $email\n\nMessage:\n$message";

    $mail->send();
    $_SESSION['mail_status'] = 'success';
}  catch (Exception $e) {
    $_SESSION['mail_status'] = 'error';
    $_SESSION['mail_error'] = $mail->ErrorInfo;
}

header("Location: index.php?status=" . ($_SESSION['mail_status'] === 'success' ? 'success' : 'error'));
exit();
