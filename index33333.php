<html>
	<head>
		<title>RICSA IND 1.0</title>
		<link rel="stylesheet" type="text/css" href="css/login.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</head>
	<body>
        <div class="wrapper fadeInDown">
        <div id="formContent">

        <div class="fadeIn first">
      <img src="img/L.RICSA HD.gif" id="icon" alt="User Icon" />
    </div>

		<center>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			Usuario:<br>
            <input type="text" id="usuario" class="fadeIn second" name="usuario" placeholder="usuario"><br>
			Clave:<br>
			<input type="text" id="clave" class="fadeIn third" name="clave" placeholder="clave"><br><br>
			<input type="submit" name="login" value="Ingresar">
		</form>
		</center>
        
        <!-- Remind Passowrd -->
    <div id="formFooter"> 
      <a class="underlineHover" href="../try/calidad1.php">Solicitar inspección de calidad</a> 
	</body>
</html>

<?php
	
// 1. Conexion con el servidor y la base de datos
$conexion = new mysqli('localhost', 'root', '', 'try');
if ($conexion->connect_errno) {
    echo "ERROR al conectar con la DB.";
    exit;
}

// 2. isset() del boton login
if(isset($_POST['login'])){

    // 3. Variables $_POST[]
    $u = $_POST['usuario'];
    $c = MD5($_POST['clave']); // La función MD5() estará encriptando lo ingresado para comparar con lo guardado

    if($u == "" || $_POST['clave'] == null){ // Validamos que ningún campo quede vacío
        echo "<script>alert('Error: usuario y/o clave vacios!!');</script>"; // Se utiliza Javascript dentro de PHP
    }else{
        // 4. Cadena de SQL
        $sql = "SELECT * FROM usuarios WHERE usunombre = '$u' AND usuclave = '$c'";

        // 5. Ejecuto cadena query()
        if(!$consulta = $conexion->query($sql)){
            echo "ERROR: no se pudo ejecutar la consulta!";
        }else{

            // 6. Cuento registros obtenidos del select. 
            // Como el nombre de usuario en la clave primaria no debería de haber mas de un registro con el mismo nombre.
            $filas = mysqli_num_rows($consulta);

            // 7. Comparo cantidad de registros encontrados
            if($filas == 0){
                echo "<script>alert('Error: usuario y/o clave incorrectos!!');</script>";
            }else{
                header('location:index1.html'); // Si está todo correcto redirigimos a otra página
            }

        }
    }
}

?>





