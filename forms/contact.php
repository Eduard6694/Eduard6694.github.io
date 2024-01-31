<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Ajusta esta ruta al autoload de Composer

$mail = new PHPMailer(true);

try {
    // Configuración del servidor
    $mail->SMTPDebug = 0; // Habilita la salida de depuración detallada
    $mail->isSMTP(); // Establecer el uso de SMTP
    $mail->Host = 'smtp.gmail.com'; // Especifica los servidores SMTP principales y de respaldo
    $mail->SMTPAuth = true; // Habilita la autenticación SMTP
    $mail->Username = 'isus.infoec@gmail.com'; // SMTP username
    $mail->Password = 'rkek mqdw koeu kkgd'; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Habilita el cifrado TLS; `PHPMailer::ENCRYPTION_SMTPS` también aceptado
    $mail->Port = 587; // Puerto TCP para conectarse a

    // Receptores
    $mail->setFrom('tu_correo@gmail.com', 'Mailer');
    $mail->addAddress('alexander.ponce94@hotmail.com', 'Alexander Ponce'); // Agrega un destinatario

    // Contenido
    $mail->isHTML(true); // Establecer formato de correo electrónico a HTML
    $mail->Subject = 'Aquí va el asunto del correo';
    $mail->Body    = 'Este es el cuerpo del mensaje HTML <b>en negrita!</b>';
    $mail->AltBody = 'Este es el cuerpo en texto plano para clientes de correo no HTML';

    $mail->send();
    echo 'El mensaje ha sido enviado';
} catch (Exception $e) {
    echo "El mensaje no pudo ser enviado. Error de PHPMailer: {$mail->ErrorInfo}";
}
?>
