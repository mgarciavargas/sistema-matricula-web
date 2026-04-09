<?php 
	require_once("../models/Horarios.php");
	$estudiante = new Horarios();
	$datos = $estudiante->gethorarioporestudiante();
	require_once("../views/vreporteprematriculados4.php");

 ?>