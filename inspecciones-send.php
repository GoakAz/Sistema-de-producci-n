<?php

 require 'logica/conexion.php';
  
 $empleado = $_POST['empleado'];
 $Proyecto = $_POST['Proyecto'];
 $inspeccion = $_POST['inspeccion'];
 $actividades  = $_POST['actividades'];
 $comentario  = $_POST['comentario'];
 $imagenes123 = $_FILES['name'];


 $mensaje = "El inspector con numero de empleado: " . $empleado.  
 " Solicita la inspección del proyecto con RIC:"  . $Proyecto .
 ", para la activiad de : "  . $inspeccion .
 ", para el tipo de pieza : ".$actividades. 
 " ,con una urgencia o comentarios : "  . $comentario .
 "     Enviado el " . date('d/m/Y', time());

 $insertar = "INSERT INTO inspecciones VALUES ('$empleado','$Proyecto','$inspeccion','$actividades','$comentario',now())" ;

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
    $mail->addAddress('servicio.medico@ricsa.com.mx','Receptor');
   // $mail->addAddress('janetzy.romo@ricsa.com.mx','Receptor');
   // $mail->addCC('kevin.a.azpilcueta@gmail.com');

   //datos adjuntos//
   $mail->AddAttachment($imagenes123["tmp_name"], $imagenes123["name"]);

   //datos adjuntos//
    $mail->isHTML(true);
    $mail->Subject = $empleado;
    $mail->Body = $mensaje ;
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