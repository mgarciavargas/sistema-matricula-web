<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>
		PRE - MATRICULA UACC 2023
	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<script language="JavaScript" type="text/javascript">
		function mostrarmensaje(){
			alert('Salio del Formulario'); window.location='../primer2.php' 
		}

	</script>
	
	<script language="JavaScript" type="text/javascript">
		function mostrarmensaje(){
			alert('Salio del Formulario'); window.location='../primer2.php' 
		}
        function validarExt()
		{
	    var archivoInput = document.getElementById('archivoInput');
	    var archivoRuta = archivoInput.value;
	    var extPermitidas = /(.pdf)$/i;
	    if(!extPermitidas.exec(archivoRuta)){
	        alert('Asegurese de haber seleccionado un PDF');
	        archivoInput.value = '';
	        return false;
    	}
	</script>
</head>
<body>
    <center><img src = "../imagenes/logousmpnew.png" height="100" width="400"></center>
	<center><h3>FICHA DE PRE - MATRÍCULA VIRTUAL UACC 2023</h3></center>
	<div class="table-responsive">
	<form method="POST" action="../controllers/controladorprematricula.php" enctype="multipart/form-data">		
	<table class="table table-striped">
		<tr class="table-info">
			<td colspan="4"><h4>DATOS DEL ESTUDIANTE</h4></td>
		</tr>
		<tr>
			<td>APELLIDOS</td>
			<td><input type="text" name="txtapellidos" required> </td>
			<td>NOMBRE(S)</td>
			<td><input type="text" name="txtnombres" required></td>
		</tr>
		<tr>
			<td>DIRECCIÓN</td>
			<td><input type="text" name="txtdireccion" required></td>
			<td>N° DNI</td>
			<td><input type="text" name="txtdniestudiante" style="width : 90px;" >
			  N° VERIFICADOR 
			<input type="number" name="txtemail2" style="width : 40px;"><img src="../imagenes/help.jpg" width="50px" height="40px">
			</td>

		</tr>
		<tr>
			<td>FECHA DE NACIMIENTO</td>
			<td><input type="date" name="txtfechanace" required></td>
			<td>COLEG. PROCEDENCIA</td>
			<td><input type="text" name="txtcolegio" required></td>
		</tr>
		<tr>
			<td>TELF. FIJO</td>
			<td><input type="tel" name="txtnumfijo"  required></td>
			<td>N° CELULAR</td>
			<td><input type="tel" name="txtnumcel" required></td>
		</tr>
		<tr>
			<td>CORREO ELECTRÓNICO 1</td>
			<td><input type="email" name="txtemail1"></td>
			<td>CORREO ELECTRÓNICO 2</td>
			<td><input type="email" name="txtemail3"></td>
		</tr>
        <tr>
			<td colspan="2">Ficha Sintomatológica (formato *.pdf)&nbsp&nbsp<input id="archivoInput" type="file" name="txtsolicitud1" class="btn btn-primary btn-sm" onchange="return validarExt()" required="true"></td>
		
			<td colspan="2"><input id="archivoInput" type="file" name="txtsolicitud2" class="btn btn-primary btn-sm" style="display:none">
			
			Certificado de Vacunación (formato *.pdf)&nbsp&nbsp  <input id="archivoInput" type="file" name="txtsolicitud3" class="btn btn-primary btn-sm" onchange="return validarExt()" required="true"></td>
		</tr>
		<tr>
			<td colspan="4">
			    <p>(*) En caso no contar con la ficha sintomatológica del UACC puede descargarla <a href="../imagenes/fichasinto2023.xlsx">aquí</a></p>
			    <p>(**) Para descargar tu certificado de vacunación accede a este link: <a href="https://carnetvacunacion.minsa.gob.pe/">https://carnetvacunacion.minsa.gob.pe/</a></p>
			</td>
		</tr>
		<tr>
			<td colspan="2"><center><input type="button" name="btnlimpiar" value="CANCELAR" class="btn btn-danger" onclick="mostrarmensaje()"></center></td>
			<td colspan="2"><center><input type="submit" name="btnguardar" value="REGISTRAR" class="btn btn-success"></center></td>
		</tr>
		</table>
		</form>
		</div>
		<center>
		<table>
			<tr>
			<td><center><b>CONSULTAS</b></center></td>
			</tr>
			<tr>
			<td><center><b>Correo: </b> coord_ciclocero_fn@usmp.pe</center></td>
			</tr>
			<tr>
			<td><center><b>Vía Telefónica - Whatsapp: </b>
			<a href="https://wa.me/979934513">979934513 </a>/ 
			<a href="https://wa.me/966546296">966546296 </a>/
			<a href="https://wa.me/989279396">989279396 </a>/
			</center>
			</td>
			</tr>
		</table>
		</center>
			<footer style="color: white; position:fixed; left:0; bottom:0px;z-index:99" border="0">Todos los derechos reservados DragonSoft - Chiclayo 2020</footer>
</body>
</html>