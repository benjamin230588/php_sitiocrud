<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  

    <?php
          
          function cargabusqueda($busqueda)
          {
              echo("<h1> el valor enviado es " . $busqueda ." </h1>");
          }
     ?>
</head>
<body>
    <?php 
      $busqueda= $_GET["nombre23"];
      $pagina= $_serve["php_self"];

      if($busqueda != null)
      {
        cargabusqueda($busqueda);
      }
      else
      {
          echo ( "
          <form action= '" . $pagina . "' method='get'>
          Busqueda:
          <input type='text' name='nombre23'><br>
          <br>
          <input type='submit' value='Registrar'>
          ");

      }
      
    
    
    ?>

    
  </form>
</body>
</html>