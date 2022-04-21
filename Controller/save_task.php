<?php

include('../Model/db.php');

if (isset($_POST['save_task'])) {
  $nombre = $_POST['nombre'];
  $numero = $_POST['numero'];
  $tecnica = $_POST['tecnica'];
  $profesorE = $_POST['profesorE'];
  $pasantia = $_POST['pasantia'];
  $query = "INSERT INTO `task`(`nombre_estudiante`, `numero`, `tecnica`, `maestro_encargado`, `pasantia`) VALUES ('$nombre', '$numero','$tecnica','$profesorE','$pasantia')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    echo $query;
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Tarea Guardada';
  $_SESSION['message_type'] = 'success';
  header('Location: ../inicio.php');

}

?>
