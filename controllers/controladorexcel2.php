<?php 
	require_once("../models/Solicitud.php");
	$estudiante = new Solicitud();
	$datos = $estudiante->getsolicitud();
	require_once("../views/vreporteprematriculados2.php");
 ?>