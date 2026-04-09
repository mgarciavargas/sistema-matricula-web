<?php 
	require_once("../models/Estudiante.php");
	$estudiante = new Estudiante();
	$datos = $estudiante->getprematricula();
	require_once("../views/vreporteprematriculados.php");

 ?>