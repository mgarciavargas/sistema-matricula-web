<?php
	
	require_once("../models/Estudiante.php");
	

	
	$estudiante = new Estudiante();
	
	
	$apel_est = $_POST['txtapellidos'];
	$nom_est = $_POST['txtnombres'];
	$dir_est = $_POST['txtdireccion'];
	$dni_est = $_POST['txtdniestudiante'];
	$nac_est = $_POST['txtfechanace'];
	$col_est = $_POST['txtcolegio'];
	$tel_est = $_POST['txtnumfijo'];
	$cel_est = $_POST['txtnumcel'];
	$email1_est = $_POST['txtemail1'];
	$email2_est = $_POST['txtemail2'];
	
	$apel_est = strtoupper($apel_est);
	$nom_est = strtoupper($nom_est);
	$dir_est = strtoupper($dir_est);
	$dni_est = strtoupper($dni_est);
	$nac_est = strtoupper($nac_est);
	$col_est = strtoupper($col_est);
	$tel_est = strtoupper($tel_est);
	$cel_est = strtoupper($cel_est);
	$email1_est = strtoupper($email1_est);
	$email2_est = strtoupper($email2_est);
	
	//RUTA CERTIFICADO////////
	$ruta=$_FILES["txtsolicitud1"]["tmp_name"];
	$ruta_fichasintomatologica="../imagenes/fichaprematricula/".$dni_est."FICHA.pdf";
	copy($ruta,$ruta_fichasintomatologica);
	//////////////////////////

	//RUTA CERTIFICADO////////
	$ruta=$_FILES["txtsolicitud2"]["tmp_name"];
	$ruta_certificadomedico="../imagenes/certmedico/".$dni_est."CERTMEDICO.pdf";
	copy($ruta,$ruta_certificadomedico);
	//////////////////////////
	
	//RUTA VACUNACION////////
	$ruta=$_FILES["txtsolicitud3"]["tmp_name"];
	$ruta_vacunacion="../imagenes/vacunacion/".$dni_est."VACUNACION.pdf";
	copy($ruta,$ruta_vacunacion);
	//////////////////////////
	$ruta_fichasintomatologica = substr($ruta_fichasintomatologica, 2);
	$ruta_certificadomedico = substr($ruta_certificadomedico, 2);
    $ruta_vacunacion = substr($ruta_vacunacion, 2);


	$respuesta2 = $estudiante->setprematricula($apel_est,$nom_est,$dir_est,$dni_est,$nac_est,$col_est,$tel_est,$cel_est,$email1_est,$email2_est,$ruta_fichasintomatologica,$ruta_certificadomedico,$ruta_vacunacion);

	echo "<script> alert('SE REGISTRO CORRECTAMENTE'); window.location='../views/vistaprematricula.php' </script>";
//	include "../controllers/controladorpdf.php?".$rfoto;
?>