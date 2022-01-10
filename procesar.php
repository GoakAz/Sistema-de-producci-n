
<?php
//recogida de información
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$foto = $_FILES['foto'];

//validamos la información (ejemplo muy sencillo)
$errores = array();
if ($nombre == ""){
  $errores[] = "Falta nombre";
}
if ($edad == ""){
  $errores[] = "Falta edad";
}
if ($foto['name'] == "" || $foto['size'] == 0){
  $errores[] = "Falta la foto";
}

//si hay errores se muestran y se sale del programa
if (count($errores) > 0){
  echo "Se han encontrado los siguientes errores:<br />";
  foreach($errores as $error){
    echo $error."<br />";
  }
  
  die("<a href='index.html'>Atrás</a>");
}

//se compone el mensaje
require("class.phpmailer.php");
$mail = new PHPMailer();
$mail->Host = "localhost";
$mail->From = "";
$mail->FromName = "Servidor web";
$mail->Subject = "Socio nuevo";
$mail->AddAddress("k_evinx@hotmail.com", "Goak950525");
$body = "Nuevo sociorn";
$body .= "Nombre: $nombrern";
$body .= "Edad: $edadrn";
$mail->Body = $body;
//adjuntamos un archivo
$mail->AddAttachment($foto["tmp_name"], $foto["name"]);
$mail->Send();

echo "Solicitud enviada. Gracias.";
?>