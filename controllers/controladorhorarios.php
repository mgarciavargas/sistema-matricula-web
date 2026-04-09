<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<?php 
		$horario;
		$numero;
	?>
	<form method="POST" action="../controllers/controladorregistrar.php">
		<table>
		<tr>
			<td>INGRESE SU DNI: <input type="text" name="txtidestudiante" required>
				<input type="hidden" value='<?php echo $horario ;?>' name="txthorario">
				<input type="hidden" value='<?php echo $numero ;?>' name="txtnumero">
			</td>
			<td><input type="submit" value="REGISTRAR"></td>
		</tr>
		</table>
	</form>
</body>
</html>