<?php 


$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name'];

if(!file_exists('Archivos')){
	mkdir('Archivos',0777,true);
	if(file_exists('Archivos')){
		if(move_uploaded_file($guardado, 'Archivos/'.$nombre)){
			echo "<script>alert('Archivo guardado con exito');</script>";
			
		}else{
			echo "Archivo no se pudo guardar";
		}
	}
}else{
	if(move_uploaded_file($guardado, 'Archivos/'.$nombre)){
		echo "<script>alert('Archivo guardado con exito');</script>";
	}else{
		echo "Archivo no se pudo guardar";
	}
}


?>