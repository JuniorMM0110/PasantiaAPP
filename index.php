<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
     <title>VaidrollTeamLogin6</title>
     <link rel="stylesheet" href="css/style-login">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body>
  <div class="cajafuera">
<div class="formulariocaja">
<form action="login.php" method="post"> 
<img src="Imagenes/usuario.jpg">

<?php if (isset($_SESSION['message'])) { ?>
    <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
      <?= $_SESSION['message']?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?php session_unset(); } ?>


<input type="text" name="txtusuario" placeholder="&#128100; Usuario" class="cajaentradatexto" required>

<input type="password" name="txtpassword" placeholder="&#128274; Password" class="cajaentradatexto" required>
<input type="submit" value="Iniciar sesión" class="botonenviar">
<input type="reset" value="Cancelar" class="botonenviar">
</form>
</div>
</div> 
<footer>© 2021 Formulario Login. Todos los derechos reservados | Diseño de VaidrollTeam 
</footer>
</body>
</html>