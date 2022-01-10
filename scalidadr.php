<?php

 require 'logica/conexion.php';
  
 $kname  = $_POST['name'];
 $kRIC  = $_POST['RIC'];
 $kActividad = $_POST['insp'];
 $kTipo  = $_POST['Tipo'];
 $kPieza  = $_POST['Pieza'];
 $kcom  = $_POST['comentarios'];
 $klib  = $_POST['liberado'];
 $kevidencia  = $_FILES['evidencia'];


 $contenido = "El inspector con numero de empleado: " . $kname.  
 " Reviso la solicitud del RIC:"  . $kRIC .
 " Realizando la inspeccion de: "  . $kActividad .
 ",para el total de piezas: ".$kPieza. 
 " ,para la pieza: "  . $kTipo .
 " ,quedando como:  "  . $klib . "  liberada".
 " ,Por ultimo favor de revisar sus comentarios :  "  . $kcom .
 "     Enviado el " . date('d/m/Y', time());

 $insertar = "INSERT INTO inspeccion VALUES ('$kname','$kRIC','$kActividad','$kTipo','$kPieza','$kcom','$klib',now())" ;

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
    $mail->addAddress('servicio.medico@ricsa.com.mx','janetzy.romo@ricsa.com.mx','Receptor');
    $mail->addAddress('janetzy.romo@ricsa.com.mx','Receptor');
   // $mail->addCC('kevin.a.azpilcueta@gmail.com');

   //datos adjuntos//
   $mail->AddAttachment($kevidencia["tmp_name"], $kevidencia["name"]);
   //datos adjuntos//
    $mail->isHTML(true);
    $mail->Subject = $kname;
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



?>