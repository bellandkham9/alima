<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    // Paramètres SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Serveur SMTP de Gmail
    $mail->SMTPAuth = true;
    $mail->Username = 'bellandkham9@gmail.com'; // Adresse e-mail du propriétaire
    $mail->Password = 'xkak hger rmmc alyb'; // Mot de passe d'application
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Expéditeur et destinataire
    $mail->setFrom('bellandkham9@gmail.com', 'Belland KHAM');
    $mail->addAddress('bellandkham9@gmail.com', 'Belland KHAM'); // E-mail du propriétaire

    // Contenu de l'e-mail
    $mail->isHTML(true);
    $mail->Subject = 'Nouveau message de contact';
    $mail->Body = 'Nom: ' . $_POST['nom'] . '<br>Email: ' . $_POST['email'] . '<br>Message: ' . $_POST['message'];

    $mail->send();
    echo 'Message envoyé avec succès';
} catch (Exception $e) {
    echo "Erreur lors de l'envoi du message : {$mail->ErrorInfo}";
}

?>