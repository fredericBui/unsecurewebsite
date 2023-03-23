<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$mail = new PHPMailer(true);

if (isset($_POST["message"])) {
    try {
        // Modifier les informations ci-dessous avec les vôtres
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '2750fb86be6c71';
        $mail->Password = 'd761b43027f4c6';
        //Recipients
        $mail->setFrom('admin@unsecurewebsite.com', 'Unsecurewebsite');
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
