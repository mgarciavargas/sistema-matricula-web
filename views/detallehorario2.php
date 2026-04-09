<?php
	echo "<center>";

	$id = $_POST['txtid'];

	include "../models/Horarios.php";
	$nuevoobjeto = new Horarios();
	$datos = $nuevoobjeto->getaforo($id);


	
	foreach ($datos as $recorrer) {	
		$datazo = $recorrer['aforo_horario'];
	}
    
    	echo "EL AFORO DE ESTA AULA ES DE ".$datazo." ESTUDIANTES <br>";
    
	$numero = $datazo - 1 ;
	echo " QUEDAN : ".$datazo." DE VACANTES DISPONIBLES <br>";


	if($_POST['txtid'])
	{
		$horario = $_POST['txtid'];
		 
		switch ($horario) {
			case 1:
				echo "HA SELECCIONADO EL HORARIO 11A - 01A <br>";
				echo "<img src='../imagenes/11A-01A.jpg' width='500' height='350'> <br>";
				if($datazo>0)
					include "../controllers/controladorhorarios.php";
				else
					echo "...SE ACABARON LAS VACANTES INTENTE CON OTRA AULA";
				break;
			case 2:
				echo "HA SELECCIONADO EL HORARIO 11A - 02A <br>";
				echo "<img src='../imagenes/11A-02A.jpg' width='500' height='350'> <br>";
				if($datazo>0)
					include "../controllers/controladorhorarios.php";
				else
					echo "...SE ACABARON LAS VACANTES INTENTE CON OTRA AULA";
				break;
			case 3:
				echo "HA SELECCIONADO EL HORARIO 11B - 01B <br>";
				echo "<img src='../imagenes/11B-01B.jpg' width='500' height='350'> <br>";
				if($datazo>0)
					include "../controllers/controladorhorarios.php";
				else
					echo "...SE ACABARON LAS VACANTES INTENTE CON OTRA AULA";
				break;
			case 4:
				echo "HA SELECCIONADO EL HORARIO 11B - 02B <br>";
				echo "<img src='../imagenes/11B-02B.jpg' width='500' height='350'> <br>";
				if($datazo>0)
					include "../controllers/controladorhorarios.php";
				else
					echo "...SE ACABARON LAS VACANTES INTENTE CON OTRA AULA";
				break;
			case 5:
				echo "HA SELECCIONADO EL HORARIO 11C - 01C <br>";
				echo "<img src='../imagenes/11C-01C.jpg' width='500' height='350'> <br>";
				if($datazo>0)
					include "../controllers/controladorhorarios.php";
				else
					echo "...SE ACABARON LAS VACANTES INTENTE CON OTRA AULA";
				break;
			case 6:
				echo "HA SELECCIONADO EL HORARIO 11C - 02C <br>";
				echo "<img src='../imagenes/11C-02C.jpg' width='500' height='350'> <br>";
				if($datazo>0)
					include "../controllers/controladorhorarios.php";
				else
					echo "...SE ACABARON LAS VACANTES INTENTE CON OTRA AULA";
				break;
			default:
				echo "NO HA SELECCIONADO NINGÚN HORARIO";
				break;
		}
	}
	echo "</center>";
?>