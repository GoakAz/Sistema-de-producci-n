<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar datos</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<title>Solicitud de inspección</title>
</head>
<body>


<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="img/L.RICSA HD.gif" id="icon" alt="User Icon" />
    </div>

    <h2>Soliitud de inspección</h2>

    <!-- Login Form -->
    <form  method="post" name="form-work" action="enviar.php">
      <input type="text" id="cadnumero" class="fadeIn second" name="cadnumero" placeholder="Numero empleado" required>
      <input type="text" id="cadPiezas" class="fadeIn third" name="cadPiezas" placeholder="Número de piezas" required>
      <input type="text" id="cadRIC" class="fadeIn third" name="cadRIC" placeholder="Número RIC" required>
      <input type="submit" class="fadeIn fourth" value="Enviar">
                                    <div class="form-group">
                                      <div class="col-md-12">
                                  
                                      </div>
                                    </div>     
                                </fieldset> 
                              </form>
                              <div id="formFooter">
                                <a class="underlineHover" href="#">Si requieres ayuda comunicate con el departamento de HSE :)</a>
                              </div>
                 </center>
              </div>
    




</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</html>