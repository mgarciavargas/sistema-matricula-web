<!DOCTYPE html>
<html>
<head>
	<title>REPORTE PRE MATRICULADOS</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
	<h1>LISTA PRE MATRICULADOS</h1>
<?php 
header("Pragma: public");
header("Expires: 0");
$filename = "nombreArchivoQueDescarga.xlxs";
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

?>


	</div>
	<table>
		<tr><td><a href=""></a></td></tr>
	</table>
	<table border=1 cellspacing=0 cellpadding=2 bordercolor="666633">
		<tr>
			<td>#</td>
			<td>APELLIDOS</td>
			<td>NOMBRES</td>
			<td>DIRECCIÓN</td>
			<td>DNI</td>
			<td>NAC</td>
			<td>COLEGIO</td>
			<td>TELEFONO</td>
			<td>CELULAR</td>
			<td>EMAIL 1</td>
			<td>EMAIL 2</td>
		</tr>
		<?php
			for($i = 0; $i < count($datos); $i++){
		?>
		<tr>
			<td><?php echo $datos[$i]['id_estudiante']; ?></td>
			<td><?php echo $datos[$i]['apel_est']; ?></td>
			<td><?php echo $datos[$i]['nom_est']; ?></td>
			<td><?php echo $datos[$i]['dir_est']; ?></td>
			<td><?php echo $datos[$i]['dni_est']; ?></td>
			<td><?php echo $datos[$i]['nac_est']; ?></td>
			<td><?php echo $datos[$i]['col_est']; ?></td>
			<td><?php echo $datos[$i]['tel_est']; ?></td>
			<td><?php echo $datos[$i]['cel_est']; ?></td>
			<td><?php echo $datos[$i]['email1_est']; ?></td>
			<td><?php echo $datos[$i]['email2_est']; ?></td>
		</tr>
         <?php
          	}
         ?>
	</table>
</body>
</html>