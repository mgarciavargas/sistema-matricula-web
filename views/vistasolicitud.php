<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>
		REGISTRO DE SOLICITUD - UACC 2023
	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	

	<script language="JavaScript" type="text/javascript">
		function mostrarmensaje(){
			alert('Salio del Formulario'); window.location='../primer2.php' 
		}

	</script>
	<script type="text/javascript">
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
    }
	</script>
</head>
<body>
    <center><img src = "../imagenes/logousmpnew.png" height="100" width="400"></center>
	<h3><center>REGISTRO DE SOLICITUD - UACC 2023</center></h3>
	<div class="table-responsive">
	<form method="POST" action="../controllers/controladorsolicitud.php" enctype="multipart/form-data">		
	<table class="table table-striped">
		<tr class="table-primary">
			<td colspan="4"><h4>INGRESE SU NÚMERO DE DNI</h4></td>
		</tr>
		<tr>
			<td>DNI DEL POSTULANTE </td>
			<td><input type="text" name="txtdni" required> </td>
			
		</tr>
		<tr class="table-primary"><td colspan="4"><h4>DOCUMENTOS A ADJUNTAR</h4></td></tr>
		<tr>
			<td colspan="2">SOLICITUD DE INCORPORACIÓN AL UACC (formato *.pdf)</td><td><input id="archivoInput" type="file" name="txtsolicitud" class="btn btn-primary btn-sm" onchange="return validarExt()" required="true"></td>
		</tr>
		<tr>
			<td colspan="4">
				Acepta el consentimiento informado sobre el UACC ( <a href="./consentimiento.php" target="_blank">Leer aqui </a> )  <input type="checkbox" name="aceptocondiciones_chk" id="aceptocondiciones_chk" value="1" required="true">
			</td>
		</tr>
		<tr>
			<td colspan="2"><center><input type="button" name="btnlimpiar" value="CANCELAR" class="btn btn-danger" onclick="mostrarmensaje()"></center></td>
			<td colspan="2"><center><input type="submit" name="btnguardar" value="REGISTRAR" class="btn btn-success"></center></td>
		</tr>
		</table>
		<p> ( * ) En caso no contar con la solicitud de incorporación al UACC puede descargarla <a href="../imagenes/solicituduacc2023.docx">aqui</a></p>
		</form>
		</div>
		<center>
		<table>
			<tr>
			<td><center><b>CONSULTAS</b></center></td>
			</tr>
			<tr>
			<td><center><b>Correo: </b>coord_ciclocero_fn@usmp.pe</center></td>
			</tr>
			<tr>
			<td><center><b>Vía Telefónica - Whatsapp: </b>
			<a href="https://wa.me/979934513">979934513</a>/ 
			<a href="https://wa.me/966546296">966546296</a>/
			<a href="https://wa.me/989279396">989279396</a>/
			</center>
			</td>
			</tr>
		</table>
		</center>
			<footer style="color: white; position:fixed; left:0; bottom:0px;z-index:99" border="0">Todos los derechos reservados DragonSoft - Chiclayo 2020</footer>
</body>
</html>