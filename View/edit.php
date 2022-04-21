<?php
include("../Model/db.php");
$title = '';
$description= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM task WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre_estudiante'];
    $numero = $row['numero'];
    $tecnica = $row['tecnica'];
    $profesorE = $row['maestro_encargado'];
    $pasantia = $row['pasantia'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $title= $_POST['nombre'];
  $numero = $_POST['numero'];
  $tecnica = $_POST['tecnica'];
  $profesorE = $_POST['profesorE'];
  $pasantia = $_POST['pasantia'];

  $query = "UPDATE task set nombre_estudiante = '$nombre', numero = '$numero', tecnica = '$tecnica', maestro_encargado  = '$profesorE', pasantia='$pasantia' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Tarea actualizada';
  $_SESSION['message_type'] = 'warning';
  header('Location: ../registroE.php');
}

?>
<?php include('../includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
          <div class="form-group">
            <input type="text" name="nombre" value="<?php echo $nombre ?>" class="form-control" placeholder="Nombre" autofocus required>
          </div>
          <div class="form-group">
            <input type="text" name="numero" value="<?php echo $numero ?>" class="form-control" placeholder="Numero" autofocus required>
          </div>
          <div class="form-group">
            <select name="tecnica" id="" class="w-100" required placeholder="<?php echo $tecnica ?>"> 
              <option value="" class="disabled">Tecnica</option>
              <option value="Infomática">Infomática</option>
              <option value="Gastronomia">Gastronomia</option>
              <option value="Mercadeo">Mercadeo</option>
              <option value="Contabilidad">Contabilidad</option>
              <option value="Electricidad">Electricidad</option>
              <option value="Electronica">Electronica</option>
              <option value="Refrigeración">Refrigeración</option>
            </select>          
          </div>
        <div class="form-group" >
          <select name="profesorE" id=""class="w-100" required value="<?php echo $profesorE ?>"> 
            <option value="">Profesor</option>
            <option value="Juan Andre Moreno">Juan Andre Moreno</option>
            <option value="Jose Luis Gonzalez">Jose Luis Gonzalez</option>
            <option value="Pedro Perez">Pedro Perez</option>
            <option value="Julio Alberto Sena">Julio Alberto Sena</option>
          </select>
        </div>
          <div class="form-group">
            <input type="text" name="pasantia" rows="1" class="form-control" value="<?php echo $pasantia ?>" placeholder="Nombre de la Empresa" required></input>
          </div>
        <button class="btn-success" name="update"d>
          Actualizar
</button>
        <a href="../registroE.php">

          <button class="btn-danger" name="cancelar">
            Cancelar
          </a>
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('../includes/footer.php'); ?>


