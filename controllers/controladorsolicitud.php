<?php
		
	require_once("../models/Solicitud.php");

	
	$solicitud = new Solicitud();
	
	
	//$v = rand(1,5);
	$dni_est = $_POST['txtdni'];
	
	
	$dni_est = strtoupper($dni_est);
	
	//RUTA CERTIFICADO////////
	$ruta=$_FILES["txtsolicitud"]["tmp_name"];
	$rsolicitud="../imagenes/solicitud/".$dni_est."SOL.pdf";
	copy($ruta,$rsolicitud);
	//////////////////////////
    $rsolicitud = substr($rsolicitud, 2);
	$array = $solicitud->getestudiantesolicitud($dni_est);
	
	if(empty($array)){
		$respuesta = $solicitud->setsolicitud($dni_est,$rsolicitud);
		echo "<script> alert('SE REGISTRO CORRECTAMENTE'); window.location='../primer2.php' </script>";
	}else{
		echo "<script> alert('YA SE ENCUENTRA REGISTRADO'); window.location='../views/vistasolicitud.php' </script>";
	}
?>