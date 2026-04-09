<?php 
	require_once("../models/Solicitud.php");
	$solicitud = new Solicitud();
	$datos = $solicitud->getsolicitud();
	require_once("../views/vreporteprematriculados3.php");
 ?>