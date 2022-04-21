<?php include("Model/db.php") ?>
<?php include("includes/header.php") ?>
<!DOCTYPE html>
<html lang="en"></html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

      <!-- ADD TASK FORM -->
      <table class="table table-bordered  table table-hover table-dark" >
        <thead>
          <tr></tr>

            <th>ID</th>
            <th>Nombre</th>
            <th>Numero</th>
            <th>Tecnica</th>
            <th>Maestro Encargado</th>
            <th>Nombre de empresa</th>
            <th>Estado</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM task WHERE estado ='A'";
          $result_tasks = mysqli_query($conn, $query);    
          
          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nombre_estudiante']; ?></td>
            <td><?php echo $row['numero']; ?></td>
            <td><?php echo $row['tecnica']; ?></td>
            <td><?php echo $row['maestro_encargado']; ?></td>
            <td><?php echo $row['pasantia']; ?></td>
            <td><?php echo $row['estado']; ?></td>
            <td>
            <a href="View/edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="Controller/delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <br>

  <?php include("includes/sentencias.tpl") ?>

</body>
</html>

