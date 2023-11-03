<?php
// Datos del Formulario

$correo = $_POST['correo'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$archivo = $_FILES['archivo'];

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'mailer/Exception.php';
require 'mailer/PHPMailer.php';
require 'mailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'angeldeveloper04@gmail.com';                     //SMTP username
    $mail->Password   = 'lblybgodyqdqzgoh';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('angeldeveloper04@gmail.com', 'Angel Dev');
    $mail->addAddress('angeldeveloper04@gmail.com');     //Add a recipient

    $contenido = '
        <html>
            <body>
                <h2>'. $nombre. '</h2>
                <h3>Correo: '. $correo. '</h3>
                <h3>Teléfono: '. $telefono. '</h3>
                <br>
                <p style="font-size:1.1rem">'. $mensaje. '</p>
            </body>
        </html>
    ';

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $asunto;
    $mail->Body    = $contenido;
    
    
    $mail->send();

    echo ' yes';
} catch (Exception $e) {
    echo 'Error al enviar el correo: ' . $mail->ErrorInfo;
}