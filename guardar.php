<?php 


include('conexion.php');

if (isset($_POST['save_usuario'])) {
  $name = $_POST['name'];
  $apellido = $_POST['apellido'];
  $query = "INSERT INTO usuario(name,apellido) VALUES ('$name', '$apellido')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }
  echo mysqli_affected_rows($conn);
  //nos dice cuantos regustros fueron modificados

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>