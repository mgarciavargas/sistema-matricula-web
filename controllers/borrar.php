<?php 

	require_once("../models/Estudiante.php");
	$estudiante = new Estudiante();
	$id = $_GET['id'];

	$array = $estudiante->eliminarestudianteprematricula($id);

	if($array){
		echo "<script> alert('SE ELIMINO CORRECTAMENTE'); window.location='../views/vmenudereportes.php' </script>";
	}else{
		echo "<script> alert('OCURRIO UN ERROR') </script>";
	}
?>