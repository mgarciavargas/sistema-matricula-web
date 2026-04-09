<!DOCTYPE html>
<html>
<head>
	<title>REGISTRO DE HORARIO</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
    <center><img src = "../imagenes/logousmpnew.png" height="100" width="400"></center>
	<form method="POST" action="#">
	<center>
	<table>
		<tr>
			<td><h1>HORARIO</h1></td><td></td>
		</tr>
		<tr>
			<td>

				<select name="txtid">
					<option>SELECCIONE</option>
					<option value="1">SECCIÓN 11A - 01A</option>
					<option value="2">SECCIÓN 11A - 02A</option>
					<option value="3">SECCIÓN 11B - 01B</option>
					<option value="4">SECCIÓN 11B - 02B</option>
					<option value="5">SECCIÓN 11C - 01C</option>
					<option value="6">SECCIÓN 11C - 02C</option>
					<option value="7">SECCIÓN 11D - 01D</option>
					<option value="8">SECCIÓN 11D - 02D</option>
					<option value="9">SECCIÓN 11E - 01E</option>
					<option value="10">SECCIÓN 11E - 02E</option>
				</select>


			</td><td>
			
				<input type="submit" value="VER"></td>
			
		</tr>	
	</table>
	</center>
	</form>
	<?php 
		if(isset($_POST['txtid']) && ($_POST['txtid'] != ''))
		{
			include "detallehorario.php";
		}

	?>
</body>
</html>