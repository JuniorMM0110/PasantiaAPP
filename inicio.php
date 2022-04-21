<?php include("Model/db.php"); ?>

<?php include('includes/header.php'); ?>
<link rel="stylesheet" href="css/styles.css">
<p class="text-center h1 m-auto bg-dark ">Registro de Pasantes</p>
<main class="container p-5 bg-dark" >
  <div class="row" id="content">
    <div class="col-md-6 col row ">
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
        <form action="Controller/save_task.php" id="formulario" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" autofocus required>
          </div>
          <div class="form-group">
            <input type="text" name="numero" class="form-control" placeholder="Numero" autofocus required>
          </div>
          <div class="form-group">
            <select name="tecnica" id="" class="w-100" required> 
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
          <select name="profesorE" id=""class="w-100" required> 
            <option value="">Profesor</option>
            <option value="Juan Andre Moreno">Juan Andre Moreno</option>
            <option value="Jose Luis Gonzalez">Jose Luis Gonzalez</option>
            <option value="Pedro Perez">Pedro Perez</option>
            <option value="Julio Alberto Sena">Julio Alberto Sena</option>
          </select>
        </div>
          <div class="form-group">
            <input type="text" name="pasantia" rows="1" class="form-control" placeholder="Nombre de la Empresa" required></input>
          </div>
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Enviar">
          <br>
      		<input type="file" name="archivo">
		<button class="align-center">Subir Archivo...</button>

        </form>
      </div>
    </div>

            <!-- Formulario de ARCHIVO -->

  </main>

<?php include('includes/footer.php'); ?>
