<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$nom = htmlspecialchars($_POST['nom']);
$email = htmlspecialchars($_POST['email']);
$objet = htmlspecialchars($_POST['objet']);
$message = htmlspecialchars($_POST['message']);

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'killian.dev4014@gmail.com';
    $mail->Password = 'cetc uyse cvgh dsyb';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    $mail->setFrom('portfolio@killianfilatre.fr', 'Killian Filâtre');
    $mail->addAddress($email);
    $mail->addReplyTo($email, $nom);

    // Contenu de l'email
    $mail->isHTML(true);
    $mail->Subject = $objet;
    $mail->Body = "Nom: $nom<br>Email: $email<br><br>Message:<br>$message";
    $mail->AltBody = "Nom: $nom\nEmail: $email\n\nMessage:\n$message";

    $mail->send();
    echo 'Votre message a été envoyé avec succès.';
} catch (Exception $e) {
    echo "Le message n'a pas pu être envoyé. Erreur: {$mail->ErrorInfo}";
}
