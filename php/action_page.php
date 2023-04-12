<?php

use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';

$name = $_POST['Name'];
$mail = $_POST['Email'];
$phone = $_POST['phone'];
$subject = $_POST['Subject'];
$message = $_POST['Message'];

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.mx';
    $mail->Port = 587;
    $mail->SMTPDebug = 2;
    $mail->SMTPAuth = true;
    $mail->Username = 'u918490216';
    $mail->Password = 'corpoh';
    $mail->setFrom('corpohdez@corpoh.com', 'CORPOH Servicios Contables, Fiscales y Administrativos.');
    $mail->addAddress($mail, $name);

    if ($mail->addReplyTo($mail, $name)) {
        $mail->Subject = $subject;
        $mail->isHTML(false);
        $mail->Body = <<<EOT
            Email: $mail
            Nombre: $name
            Mensaje: $message
            Teléfono: $phone
            EOT;
        if (!$mail->send()) {
            $msg = 'Lo sentimos, algo salió mal, inténtelo de nuevo.';
        } else {
            $msg = 'Mensaje enviado, gracias por contactarnos. Espere respuesta a la brevedad.';
        }
    } else {
        $msg = 'Dirección de correo inválido, mensaje ignorado.';
    }

?>