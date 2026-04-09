<?php 
	require_once("../models/Estudiante.php");
	$estudiante = new Estudiante();
	$datos = $estudiante->getmatricula();
	require_once("../views/vreporteprematriculados3.php");

 ?>