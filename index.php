<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>
<p class="text-center h1 m-auto bg-dark ">Sistema</p>
<main class="container p-5 bg-dark" >
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
      <div class=" card-body bg-dark">
        <form action="save_task.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Titulo" autofocus>
          </div>
          <div class="form-group">
            <textarea name="description" rows="2" class="form-control" placeholder="Descripción"></textarea>
          </div>
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Enviar">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered  table table-hover table-dark" >
        <thead>
          <tr>
            <th>Titulo</th>
            <th>Descripción</th>
            <th>Codigo</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          
          <?php
          $query = "SELECT * FROM task";
          $result_tasks = mysqli_query($conn, $query);    
          
          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <br>

            <!-- Formulario de ARCHIVO -->
	<form action="sube.php" method="post" enctype="multipart/form-data" class="form card form"> 
    <!-- Se usa el enctype="multipart/form-data" Para que se puedan recibir archivos por parte del formulario -->
		<input type="file" name="archivo">
		<br><br>
		<button>Subir Archivo</button>
</main>

<?php include('includes/footer.php'); ?>
