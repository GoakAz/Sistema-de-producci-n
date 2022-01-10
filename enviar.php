<?php
    $destino = "servicio.medico@ricsa.com.mx";
    $nombre = $_POST["cadnumero"];
    $Pza = $_POST["cadPiezas"];
    $RIC = $_POST["cadRIC"];
    $contenido = "Nombre: " . $nombre . "\nPiezas: "  . $Pza . "\nRIC: " . $RIC;


   
    if(mail($destino,"Contacto",$contenido)){

        echo "<script> alert('correcto');
        location.href = '../TRY/index.php';
        </script>";
    
    }else{

        echo "<script> alert('incorrecto');
        location.href = '../TRY/index.php';
        </script>";
    }
?>