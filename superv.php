<?php

 require 'logica/conexion.php';
  
 $kname  = $_POST['name'];
 $kRIC  = $_POST['RIC'];
 $kT = $_POST['total'];
 $kP  = $_POST['proceso'];
 $final  = $_POST['finish'];
 $kcolab  = $_POST['colab'];
 $kpn  = $_POST['pendiente'];
 $kc  = $_POST['comentarios'];


 $insertar = "INSERT INTO supervisores VALUES ('$kname','$kRIC','$kT','$kP','$final','$kcolab','$kpn','$kc', now())" ;

 $query = mysqli_query($conectar, $insertar);
 


 $query = mysqli_query($conectar, $insertar);

 if($query){
 
    echo "<script> alert('correcto');
     location.href = 'index.php';
    </script>";
 
 }else{
     echo "<script> alert('incorrecto');
     location.href = 'index.php';
     </script>";
 }
 

?>