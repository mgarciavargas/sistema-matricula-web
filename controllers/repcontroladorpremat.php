<?php 
	require_once("../models/Estudiante.php");
	$estudiante = new Estudiante();
	$datos = $estudiante->getEstudiante();
	require_once("../views/vreporteprematriculados.php");
 ?>