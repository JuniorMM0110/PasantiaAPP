<?php

include("../Model/db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM task WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
    echo $query;
  }
  if($result){
    header('Location: ../registroE.php');
    echo $query;
    
  }
  $_SESSION['message'] = 'Tarea removida';
  $_SESSION['message_type'] = 'danger';
}

?>
