<?php

 require 'logica/conexion.php';


$numero = $_POST['cadnumero'];
$PZA = $_POST['cadPiezas'];
$RIC = $_POST['cadRIC'];
$contenido = "Recibiste una solicitud de inspeccion del colaborador con numero: " . $RIC . 
"\nPara la inspeccion de las siguientes piezas: "  . $PZA .
 "\nCon numero de RIC: " . $numero;

 $insertar = "INSERT INTO calidad VALUES ('$numero',$PZA,$RIC, now()) ";

$query = mysqli_query($conectar, $insertar);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = SMTP::DEBUG_OFF;
    $mail->isSMTP();
    $mail->Host = 'smtp-mail.outlook.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'k_evinx@hotmail.com';
    $mail->Password = 'Goak950525';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('k_evinx@hotmail.com', 'Kevin Az');
    $mail->addAddress('servicio.medico@ricsa.com.mx' ,'Receptor');
   // $mail->addCC('kevin.a.azpilcueta@gmail.com');

    $mail->addAttachment('docs/RICSA.png', 'RICSA.png');

    $mail->isHTML(true);
    $mail->Subject = $numero;
    $mail->Body = $contenido ;
    $mail->send();

    echo "<script> alert('correcto');
    location.href = '../try/index.php';
    </script>";
} catch (Exception $e) {
    echo "<script> alert('incorrecto');
        location.href = '../try/index.php';
        </script>";
}

