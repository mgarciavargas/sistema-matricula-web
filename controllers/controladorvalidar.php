<?php 
	require_once("../models/ValidarUsuario.php");
	$vestudiante = new ValidarUsuario();

	$dni = $_POST['dni'];
	$email = $_POST['email'];

	$datos = $vestudiante->getvalidar($dni);
	
	if(empty($datos)){
		echo "<script> alert('EMAIL O DNI INCORRECTOS '); window.location='../index.html' </script>";
	}else{
		echo "<script> alert('BIENVENIDO'); window.location='../primer2.php' </script>";
	}
 ?>