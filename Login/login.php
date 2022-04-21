<?php

$conexion=mysqli_connect("localhost", "root", "", "test");
if (!$conexion){
    die("No hay conexion: "mysqli_connect_error());
}

$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

$query = mysqli_query($conexion, "SELECT * FROM login where usuario = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1){
    //header (Location:"login.html")
    echo "Bienvenido:" .$nombre;
}
else if{
    ($nr == 0)

    header("Location: login.html");
    //echo "No ingreso";
}


?>