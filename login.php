<?php
$host= "localhost";
$user= "root";
$db= "php_mysql_crud";
  $conn=mysqli_connect($host, $user,"", $db);
if (!$conn){
    die("No hay conexion:".mysqly_connect_error());
}   


$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];
$sentencia = "SELECT * FROM login WHERE usuario = '".$nombre."' and password = '".$pass."'";
$query = mysqli_query($conn, $sentencia);
$nr = mysqli_num_rows($query);

if($nr == 1)
{
    echo"<script>alert('Bienvenido')</script>";
    header ("Location:inicio.php");
}else{ 

    echo"<script>alert('El usuario o la contraseña son incorrectos')</script>";   echo "<h1><a href='index.php'>Volver</a></h1>";
}

?>