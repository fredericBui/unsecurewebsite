<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createMutable('../');
$dotenv->load();

$mail = new PHPMailer(true);


if (isset($_POST["message"])) {
    //if (isset($_POST["message"]) && $_SESSION["capcha"] == $_POST["capcha"]) {
    try {
        // Modifier les informations ci-dessous avec les vôtres
        $mail->isSMTP();
        $mail->Host = $_ENV["SMTP_HOST"];
        $mail->SMTPAuth = true;
        $mail->Port = $_ENV["SMTP_PORT"];
        $mail->Username = $_ENV["SMTP_USER_NAME"];
        $mail->Password = $_ENV["SMTP_PASSWORD"];
        //Recipients
        $mail->setFrom($_ENV["EMAIL"], 'Unsecurewebsite');
        $mail->addAddress($_POST["email"]);

        // //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Unsecurewebsite - Contact form';
        $mail->Body    = $_POST["message"]; //htmlspecialchars($_POST["message"])
        $mail->AltBody = $_POST["message"]; //htmlspecialchars($_POST["message"])

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
