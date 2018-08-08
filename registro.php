<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
</head>
<body>
	<?php
      require_once 'footer.php';
      ?>

      <form>  <!-- REGISTRO SIN CONTENEDOR -->
     <div class="container">
  <div class="form-group"> 
    <label for="exampleInputNombres">Nombres</label>
    <input type="Texto" class="form-control" id="exampleInputNombres" aria-describedby="emailHelp" placeholder="">
    <small id="NombresHelp" class="form-text text-muted">Primer y Segundo Nombre.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputApellidos">Apellidos</label>
    <input type="Texto" class="form-control" id="exampleInputApellidos" placeholder="">
     <small id="ApellidosHelp" class="form-text text-muted">Primer y Segundo Apellido.</small>
  </div> 
  <div class="form-group">
    <label for="exampleInputCedula">Cedula de Identidad</label>
    <input type="Numerico" class="form-control" id="exampleInputCedula" placeholder="">
     <small id="CedulaHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputCorreo">Direccion de Correo Electronico</label>
    <input type="correo" class="form-control" id="exampleInputCorreo" placeholder="">
     <small id="CorreoHelp" class="form-text text-muted">Direccion Gmail.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputContraseña1">Contraseña</label>
    <input type="contraseña" class="form-control" id="exampleinpumtContraseña1" placeholder="">
     <small id="Contraseña1Help" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputContraseña2">Repita Contraseña</label>
    <input type="contraseña" class="form-control" id="exampleinpumtContraseña2" placeholder="">
     <small id="Contraseña2Help" class="form-text text-muted"></small>
  </div>
  <button type="submit" class="btn btn-primary">Registrarse</button>
  </div>
</form>

</body>
</html>