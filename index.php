<?php include("conexion.php")  ?>
<?php include("plantillas/header.php")  ?>



<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="guardar.php" method="POST">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="name" autofocus>
          </div>
          
          <div class="form-group">
            <input type="text" name="apellido" class="form-control" placeholder="apellido" autofocus>
          </div>
          
          <input type="submit" name="save_usuario" class="btn btn-success btn-block" value="Save Task">
        </form>
      </div>
    </div>
    <div class="col-md-8 otro">
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
          $query = "SELECT * FROM usuario";
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


