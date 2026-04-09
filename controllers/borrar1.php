<?php 

	require_once("../models/Solicitud.php");
	$Solicitud = new Solicitud();
	$id = $_GET['id'];

	$array = $Solicitud->eliminarsolicitudes($id);

	if($array){
		echo "<script> alert('SE ELIMINO CORRECTAMENTE'); window.location='../views/vmenudereportes.php' </script>";
	}else{
		echo "<script> alert('OCURRIO UN ERROR') </script>";
	}
?>