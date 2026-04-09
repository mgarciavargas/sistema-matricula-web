<?php
	require_once("../models/Matricula.php");
	require_once("../models/Estudiante.php");
	require_once("../models/Apoderado.php");

	$matricula = new Matricula();
	$estudiante = new Estudiante();
	$apoderado = new Apoderado();

	$asignatura = "Q/MA/C/ME";
	$rfoto = "rutafoto";
	$rfirmapapa = "rutafirmapapa";
	$rfirmaestu = "rutafirmaestu";
	$lap = "";
	$pc = "";
	$tab = "";
	$fij = "";
	$mov = "";
	$ope = $_POST['txtoperador'];

	if(isset($_POST['chlaptop']))
		$lap = "LAPTOP";
	if (isset($_POST['chpc']))
		$pc = "PC";
	if(isset($_POST['chtablet']))
		$tab = "TABLET"; 
	if (isset($_POST['chfijo']))
		$fij = "FIJO";
	if (isset($_POST['chmovil']))
		$mov = "MÓVIL";

	$mat_recursos = $lap.'/'.$pc.'/'.$tab;
	$mat_internet = $fij.'/'.$mov.'/'.$ope;


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

	$v = rand(1,5);
	$apel_apo = $_POST['txtapelpapa'];
	$nom_apo  = $_POST['txtnompapa'];
	$dir_apo  = $_POST['txtdirepapa'];
	$dni_apo = $_POST['txtdnipapa'];
	$tel_apo  = $_POST['txtnumfijopapa'];
	$cel_apo  = $_POST['txtnumcelpapa'];
	$email_apo = $_POST['txtemailpapa'];

//RUTA DE FIRMA PADRE
	$ruta=$_FILES["txtfirmapapa"]["tmp_name"];
	$rfirmapapa="../imagenes/firmas/compromiso".$apel_est.$nom_est.$v."compromiso.pdf";
	copy($ruta,$rfirmapapa);
//RUTA DE FIRMA ESTUDIANTE
	$ruta=$_FILES["txtfirmaestu"]["tmp_name"];
	$rfirmaestu="../imagenes/firmas/".$apel_est.$nom_est.$v."firmaest.jpg";
	copy($ruta,$rfirmaestu);
//RUTA DE COPIA DNI
	//$foto=$_FILES["txtfirmaestu"]["name"];
	$ruta=$_FILES["txtdni"]["tmp_name"];
	$rdni="../imagenes/dni/".$apel_est.$v."DNI.pdf";
	copy($ruta,$rdni);
//RUTA CERTIFICADO
	$ruta=$_FILES["txtcertificado"]["tmp_name"];
	$rcertificado="../imagenes/certificado/".$apel_est.$v."CERT.pdf";
	copy($ruta,$rcertificado);
//RUTA VOUCHER
	$ruta=$_FILES["txtvoucher"]["tmp_name"];
	$rvoucher="../imagenes/voucher/".$apel_est.$v."VOU.jpg";
	copy($ruta,$rvoucher);
//RUTA FOTO ESTUDIANTE
	$ruta=$_FILES["txtfotografia"]["tmp_name"];
	$rfoto="../imagenes/estudiantes/".$apel_est.$nom_est.$v."FOT.jpg";
	copy($ruta,$rfoto);
////////////////////////////////////////////////////////////////////

    $rfirmapapa = substr($rfirmapapa, 2);
    $rfirmaestu = substr($rfirmaestu, 2);
    $rdni = substr($rdni, 2);
    $rfirmaestu = substr($rfirmaestu, 2);
    $rcertificado = substr($rcertificado, 2);
    $rvoucher = substr($rvoucher, 2);
    $rfoto = substr($rfoto, 2);


$array = $matricula->getestudiante($dni_est);

	if(empty($array)){

	$respuesta = $matricula->setMatricula($dni_est,$dni_apo,$asignatura,$rdni,$rcertificado,$rvoucher,$rfoto,$rfirmapapa,$rfirmaestu,$mat_recursos,$mat_internet);

	$respuesta2 = $estudiante->setEstudiante($apel_est,$nom_est,$dir_est,$dni_est,$nac_est,$col_est,$tel_est,$cel_est,$email1_est,$email2_est);

	$respuesta3 = $apoderado->setApoderado($apel_apo,$nom_apo,$dir_apo,$dni_apo,$tel_apo,$cel_apo,$email_apo);

    
    if($respuesta)
        echo "<script> alert('SE REGISTRO CORRECTAMENTE'); window.location='../primer2.php' </script>";
    else
        echo "<script> alert('ERROR'); window.location='../primer2.php' </script>";
    
	}else{
		echo "<script> alert('YA SE ENCUENTRA REGISTRADO'); window.location='../index.php' </script>";
	}

//	include "../controllers/controladorpdf.php?".$rfoto;
?>