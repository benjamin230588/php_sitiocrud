<?php include("conexion.php")  ?>
<?php include("plantillas/header.php")  ?>



<main class="container p-4">
  <div class="row">
   
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
           
            <th>Name</th>
            <th>Apellido</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $busqueda= $_GET["nombre23"];
          $query = "SELECT * FROM usuario where  name like '%$busqueda%'";
          $result_tasks = mysqli_query($conn, $query); 
          // $fila =  mysqli_fetch_row($result_tasks) esta funcion permite acceder a cada fila del recorset
          // con este metodo accedo a las propiedades por medio del indice del vector
          // mysqli_fetch_assoc permite acceder a array por el nombre de la propiedad
          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['apellido']; ?></td>
           
            <td>
              <a href="editar.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>


<?php include("plantillas/footer.php"); ?>