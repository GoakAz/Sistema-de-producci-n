<!DOCTYPE html>
<html lang="en">
    <head> 
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/index2.css">

		<!-- Website CSS style -->
		<link rel="stylesheet" type="text/css" href="css/index2.css">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>RICSA 1.1</title>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
                    <div class="fadeIn first">
                        <img src="img/L.RICSA HD.gif"  id="icon" alt="User Icon" />
                      </div>
	               		<h2 class="title">Registro de actividades</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">

					<form  method="POST" name="form-work" action="logica/guardar.php">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Numero empleado</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="name" id="name"  placeholder="Numero de empleado" required="required"/>
								</div>
							</div>
						</div>
                         <!-- Inicio -->
						<div class="form-group">
							<label for="RIC" class="cols-sm-2 control-label">RIC</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-trophy" aria-hidden="true"></i></span>
									<select class="form-control" id="RIC" name="RIC" required="required">
                                        <option value="">-select-</option>
                                        <option value="123">123</option>
                                        <option value="1234">1234</option>
                                        <option value="12345">12345</option>
                                    </select>
								</div>
							</div>
						</div>

                        
<!--   Final   -->
                        <!-- Inicio -->
						<div class="form-group">
							<label for="Actividades" class="cols-sm-2 control-label">Actividad realizada </label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
									<select class="form-control" id="Actividad" name="Actividad" required="required">
                                        <option value="">-select-</option>
                                        <option value="Armado">Armado</option>
                                        <option value="Soldadura">Soldadura</option>
                                        <option value="Limpieza">Limpieza</option>
                                    </select>
								</div>
							</div>
						</div>

                        
<!--   Final   -->
<!-- Inicio -->
                        <div class="form-group">
                            <label for="tipo de piezas" class="cols-sm-2 control-label">Tipo de pieza</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-cubes" aria-hidden="true"></i></i></span>
                                    <select class="form-control"  id="Tipo"  name="Tipo" required="required">
                                        <option value="">-select-</option>
                                        <option value="Placa">Placa</option>
                                        <option value="Boquilla">Boquilla</option>      <!-- Cambiar datos de id y nombre -->
                                        <option value="Piezas">Piezas</option>
                                        <option value="Cuerpo">Cuerpo</option>
                                        <option value="Tapa">Tapa</option>
                                        <option value="Arco interno">Arco interno</option>
                                        <option value="Arco Externo">Arco externo</option>
                                      </select>
                                </div>
                            </div>
                        </div>
<!--   Final   -->
            

<!-- Inicio -->
						<div class="form-group">
							<label for="numero de piezas" class="cols-sm-2 control-label">Numero de piezas</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-hand-o-right" aria-hidden="true"></i></span>
                                    <select class="form-control"  id="Pieza"  name="Pieza" required="required">
                                        <option value="">-select-</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="4">5</option>
                                        <option value="4">6</option>
                                        <option value="4">7</option>
                                        <option value="4">8</option>
                                        <option value="4">9</option>
                                        <option value="mas de 10">+10</option>
                                      </select>
								</div>
							</div>
						</div>
<!--   Final   -->
						<div class="form-group">
							<label for="soldadura" class="cols-sm-2 control-label">Tipo de inspecci??n</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-puzzle-piece" aria-hidden="true"></i></span>
									<select class="form-control" name="Soldadura" id="Soldadura" required="required">
                                        <option value="">-select-</option>
                                        <option value="TIG">TIG</option>
                                        <option value="MIG">MIG</option>
                                        <option value="GTAW">GTAW</option>
                                        <option value="SMAW">SMAW</option>
                                        <option value="ARCO">ARCO</option>
                                    </select>
								</div>
							</div>
						</div>

            <div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Comentarios</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="name" id="name"  placeholder="Numero de empleado" required="required"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<input type="submit" class="btn btn-primary btn-lg btn-block login-button" value="Enviar"></input>
						</div>
					</form>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
	</body>


</html>