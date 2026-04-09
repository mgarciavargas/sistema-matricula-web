<?php
	include "../models/Horarios.php";
	$nuevo = new Horarios();
	$horario = $_POST['txthorario'];
	$idestudiante = $_POST['txtidestudiante'];
	$n = $_POST['txtnumero'];

	//$res1 = $nuevo->getestudiante($idestudiante);
	


//	$list = $nuevo->getestudiante(); 
	//foreach ($list as $listaestudiante) {
//	if($listaestudiante['dni_estudiante'] == $idestudiante) {
//		echo "YA SE ENCUENTRA REGISTRADO ... ";	
//		header("Location: ../index.php");
		//}else{
//		}

    $array = $nuevo->getestudiantexhorario($idestudiante);

	if(empty($array)){

        $res = $nuevo->sethorario($horario,$idestudiante);
	    $res = $nuevo->actualizaraforo($horario,$n);
	    $res = $nuevo->generarpdf($horario,$idestudiante);
	
	    echo "<script> alert('SE REGISTRO CORRECTAMENTE'); </script>";
	}else{
	     echo "<script> alert('YA ESCOGIÓ SU HORARIO ANTES O NO SE HA MATRICULADO CON 48hrs DE ANTERIORIDAD'); window.location='../views/vistahorario.php' </script>";
	}
	
//	$res = $nuevo->sethorario($horario,$idestudiante);
//	$res = $nuevo->actualizaraforo($horario,$n);
		//foreach ($res1 as $W) {
		//	echo $res1['dni_est'];
		//}
	//}
//		$res = $nuevo->generarpdf($horario,$idestudiante);
	
//	echo "<script> alert('SE REGISTRO CORRECTAMENTE'); </script>";
	
///	header("Location: ../index.php");
//	}
?>