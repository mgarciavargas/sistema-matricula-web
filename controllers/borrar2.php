<?php 

	require_once("../models/Matricula.php");
	$Matricula = new Matricula();
	$id = $_GET['id'];

	$array = $Matricula->eliminarmatricula($id);

	if($array){
		echo "<script> alert('SE ELIMINO CORRECTAMENTE'); window.location='../views/vmenudereportes.php' </script>";
	}else{
		echo "<script> alert('OCURRIO UN ERROR') </script>";
	}
?>