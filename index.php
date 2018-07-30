<html lang="es">

  <head>

    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!--Con esto garantizamos que se vea bien en dispositivos móviles--> 
    <title>Inicio</title> 
 
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen"> <!--Llamamos al archivo CSS -->

  </head>

  <body>

      <?php
      require_once 'footer.php';
      ?>

      <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
  </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> <!--Importante llamar antes a jQuery para que funcione bootstrap.min.js   --> 
    <script src="js/bootstrap.min.js"></script> <!-- Llamamos al JavaScript de Bootstrap -->

  </body>

</html>
