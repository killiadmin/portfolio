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

if (!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
    $_SESSION['mail_status'] = 'error';
    $_SESSION['mail_error'] = 'Invalid CSRF token';
    header("Location: index.php?status=error");
    exit();
}

$nom = htmlspecialchars($_POST['nom'], ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
$objet = htmlspecialchars($_POST['objet'], ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');

$nom = strip_tags($nom);
$objet = strip_tags($objet);
$message = strip_tags($message);


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['mail_status'] = 'error';
    $_SESSION['mail_error'] = 'Votre email est invalide';
    header("Location: index.php?status=error");
    exit();
}

if (!preg_match("/^[a-zA-Z-' ]*$/", $nom)) {
    $_SESSION['mail_status'] = 'error';
    $_SESSION['mail_error'] = 'Votre nom est invalide';
    header("Location: index.php?status=error");
    exit();
}

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->Encoding = 'base64';

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
