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
	               		<h2 class="title">Registro de actividades</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">

					<form  method="POST" name="form-work" action="superv.php">
						
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
							<label for="name" class="cols-sm-2 control-label">Total actividades iniciadas</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="total" id="total"  placeholder="Total de actividades programadas" required="required"/>
								</div>
							</div>
						</div>

                        
<!--   Final   -->
<!-- Inicio -->
<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Total actividades en proceso</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="proceso" id="proceso"  placeholder="Número de actividades pendientes" required="required"/>
								</div>
							</div>
						</div>
                        <!--   Final   -->
            
<!-- Inicio -->
                        <div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Total actividades terminadas</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="finish" id="finish"  placeholder="Número de actividades terminadas" required="required"/>
								</div>
							</div>
						</div>
<!--   Final   -->
<!-- Inicio -->
                            <div class="form-group">
							<label for="exampleFormControlTextarea1" class="form-label">Colaboradores que trabajarón este RIC</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <textarea class="form-control" id="colab" name="colab" rows="3" placeholder="Numeros de empleado" required="required"></textarea>
								</div>
							</div>
						</div>
                           
<!--   Final   -->



                        <div class="form-group">
							<label for="exampleFormControlTextarea1" class="form-label">actividades pendientes </label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <textarea class="form-control" id="pendiente" name="pendiente" rows="3" placeholder="Escribe las actividades del día de mañana" required="required"></textarea>
								</div>
							</div>
						</div>

            <div class="form-group">
							<label for="exampleFormControlTextarea1" class="form-label">Comentarios</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <textarea class="form-control" id="comentarios" name="comentarios" rows="3" placeholder="Escribe los inconvenientes detectados en el día." required="required"></textarea>
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