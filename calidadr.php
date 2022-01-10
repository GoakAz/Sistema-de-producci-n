<!DOCTYPE html>
<html lang="en">
    <head> 
    	<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Website CSS style -->
		<link rel="stylesheet" type="text/css" href="css/calidad.css">

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
	               		<h2 class="title">Resultado inspección</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">

					<form  method="POST" name="form-work" action="scalidadr.php" enctype="multipart/form-data">
						
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
							<label for="Actividades" class="cols-sm-2 control-label">Tipo de inspección </label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
									<select class="form-control" id="insp" name="insp" required="required">
                                        <option value="">-select-</option>
										<option value="Visual Ext">Visual externa</option>
                                        <option value="Visual int">Visual interna</option>
                                        <option value="Liquidos p">Líquidos penetrantes</option>
                                        <option value="Particulas Mag">Partículas Magneticas</option>
                                        <option value="Ultrasonido">Ultrasonido</option>
                                        <option value="Radiografía">Radiografía</option>
                                        <option value="Dimensional">Dimensional</option>
                                        <option value="Limpieza Q">Limpieza Química</option>
                                        <option value="Recubimiento">Recubrimiento</option>
                                        <option value="Final">Final</option>
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
                                        <option value="Brida">Brida</option>
                                        <option value="Boquilla">Boquilla</option>
                                        <option value="Armado">Armado</option>
                                        <option value="Soldadura">Soldadura</option>
                                        <option value="Final">Final</option>
                                        <option value="Coples">Coples</option>
                                        <option value="Maquinados">Maquinados</option>
                                        <option value="Tapas">Tapas</option>
                                        <option value="Circunferencial">Circunferencial</option>
                                        <option value="Internos">Internos</option>
                                        <option value="Cuerpo">Cuerpo</option>
                                        <option value="Faldon">Faldon</option>
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
							<label for="exampleFormControlTextarea1" class="form-label">Comentarios</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <textarea class="form-control" id="comentarios" name="comentarios" rows="3" placeholder="Numero de empleado" required="required"></textarea>
								</div>
							</div>
						</div>

                        <div class="form-group">
							<label for="numero de piezas" class="cols-sm-2 control-label">¿Liberado?</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-hand-o-right" aria-hidden="true"></i></span>
                                    <select class="form-control"  id="liberado"  name="liberado" required="required">
                                        <option value="">-select-</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                      </select>
								</div>
							</div>
						</div>


                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">Subir imagen</label>
                            <input type="file" class="form-control" id="evidencia" name="evidencia">
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