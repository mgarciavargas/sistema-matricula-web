<?php 
	require_once("../models/ValidarRecibo.php");
	$vestudiante = new ValidarRecibo();

	$codigoacceso = $_POST['codigoacceso'];
	

	$datos = $vestudiante->getvalidar($codigoacceso);
	
	if(empty($datos)){
		echo "<script> alert('EMAIL O DNI INCORRECTOS '); window.location='../views/vistalogeohorario.html' </script>";
	}else{
		echo "<script> alert('BIENVENIDO'); window.location='../views/vistahorario.php' </script>";
	}
 ?>