<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>
		MATRICULA UACC 2023
	</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

function validarExtjpg()
{
    var archivoInput = document.getElementById('archivoInput1');
    var archivoRuta = archivoInput.value;
    var extPermitidas = /(.jpg)$/i;
    if(!extPermitidas.exec(archivoRuta)){
        alert('Asegurese de haber seleccionado un JPG');
        archivoInput.value = '';
        return false;
    }
}



</script>
</head>
<body>
    <center><img src = "../imagenes/logousmpnew.png" height="100" width="400"></center>
	<h3><center>FICHA DE MATRICULA VIRTUAL UACC 2023</center></h3>
	<div class="table-responsive">
	<form method="POST" action="../controllers/controladormatricula.php" enctype="multipart/form-data">		
	<table class="table table-striped">
		<tr class="table-primary">
			<td colspan="4"><h4>DATOS DEL ESTUDIANTE</h4></td>
		</tr>
		<tr>
			<td>APELLIDOS</td>
			<td><input type="text" name="txtapellidos" required="true"> </td>
			<td>NOMBRE(S)</td>
			<td><input type="text" name="txtnombres" required="true"></td>
		</tr>
		<tr>
			<td>DIRECCIÓN</td>
			<td><input type="text" name="txtdireccion" required="true"></td>
			<td>N° DNI</td>
			<td><input type="text" name="txtdniestudiante" required="true"></td>
		</tr>
		<tr>
			<td>FECHA DE NACIMIENTO</td>
			<td><input type="date" name="txtfechanace" required="true"></td>
			<td>COLEG. PROCEDENCIA</td>
			<td><input type="text" name="txtcolegio" required="true"></td>
		</tr>
		<tr>
			<td>TELF. FIJO</td>
			<td><input type="text" name="txtnumfijo" required="true"></td>
			<td>N° CELULAR</td>
			<td><input type="text" name="txtnumcel" required="true"></td>
		</tr>
		<tr>
			<td>CORREO ELECTRÓNICO 1</td>
			<td><input type="email" name="txtemail1" required="true"></td>
			<td>CORREO ELECTRÓNICO 2</td>
			<td><input type="email" name="txtemail2" required="true"></td>
		</tr>

		<tr class="table-primary">
			<td colspan="4"><h4>DATOS DEL APODERADO (Sólo el apoderado podrá acceder a las notas del estudiante)</h4></td>
		</tr>
		<tr>
			<td>APELLIDOS</td>
			<td><input type="text" name="txtapelpapa" required="true"> </td>
			<td>NOMBRE(S)</td>
			<td><input type="text" name="txtnompapa" required="true"></td>
		</tr>
		<tr>
			<td>DIRECCIÓN</td>
			<td><input type="text" name="txtdirepapa" required="true"></td>
			<td>N° DNI</td>
			<td><input type="text" name="txtdnipapa" required="true"></td>
		</tr>
		<tr>
			<td>TELF. FIJO</td>
			<td><input type="text" name="txtnumfijopapa" required="true"></td>
			<td>N° CELULAR</td>
			<td><input type="text" name="txtnumcelpapa" required="true"></td>
		</tr>
		<tr>
			<td>CORREO ELECTRÓNICO</td>
			<td colspan="3"><input type="text" name="txtemailpapa" required="true"></td>
		</tr>
		<tr>
			<td colspan="4"></td>
		</tr>
		<tr class="table-primary">
			<td colspan="4"><h4>ASIGNATURAS MATRICULADAS</h4></td>
		</tr>
		<tr>
			<td>QUÍMICA <input type="checkbox" name="chqui" checked="true" disabled="true"></td>
			<td>COMPRESIÓN LECTORA <input type="checkbox" name="chcomp" checked="true" disabled="true"></td>
			<td>MATEMÁTICA <input type="checkbox" name="chmate" checked="true" disabled="true"></td>
			<td>METODOLOGÍA DEL APRENDIZAJE <input type="checkbox" name="chmeto" checked="true" disabled="true"></td>
		</tr>


		<tr  class="table-primary">
			<td colspan="4"><h4>RECURSOS INFORMÁTICOS</h4><h9>*Los firmantes declaran contar con los siguientes equipos y tipo de conectividad</h9></td>
		</tr>
		<tr>
			<td colspan="2">Seleccione la(s) opción(es) con las que cuenta</td>
			<td colspan="2">Seleccione su tipo de conexión a internet</td>			
		</tr>
		<tr>
			<td>LAPTOP</td>
			<td><input type="checkbox" name="chlaptop" value="LAPTOP"></td>
			<td>FIJO</td><td><input type="checkbox" name="chfija" value="FIJO"></td>
		</tr>
		<tr>
			<td>PC</td><td><input type="checkbox" name="chpc" value="PC"></td>
			<td>MÓVIL</td><td><input type="checkbox" name="chmovil" value="MOVIL"></td>
		</tr>
		<tr>
			<td>TABLET</td><td><input type="checkbox" name="chtablet" value="TABLET"></td>
			<td>OPERADOR</td><td><input type="text" name="txtoperador" required="true"></td>
		</tr>
		<tr>
		<tr class="table-primary"><td colspan="4"><h4>DOCUMENTOS A ADJUNTAR</h4></td></tr>
		<tr>
			<td>DNI VIGENTE (formato *.pdf)</td><td><input id="archivoInput" type="file" name="txtdni" class="btn btn-primary btn-sm" onchange="return validarExt()"></td>
	
			<td>CERTIFICADO DE ESTUDIO O COMPROMISO DE HONOR(formato *.pdf)</td><td><input id="archivoInput" type="file" name="txtcertificado" class="btn btn-primary btn-sm" onchange="return validarExt()"></td>
		</tr>
		<tr>
			<td>FOTOGRAFÍA DEL ESTUDIANTE (formato *.jpg)</td><td><input  id="archivoInput1" type="file" name="txtfotografia" class="btn btn-primary btn-sm" onchange="return validarExtjpg()"></td>
	
			<td>COMPROMISO DE PAGO (formato *.pdf)</center></td><td colspan="2"><input type="file" id="txtfirmapapa"  name="txtfirmapapa" id="archivoInput1" class="btn btn-primary btn-sm" ></td><td colspan="2"><center><input id="archivoInput1" type="hidden" name="txtfirmaestu" class="btn btn-primary btn-sm"></center></td>
		</tr>	

		<tr>
			<td colspan="2"><center><input type="button" name="btnlimpiar" value="CANCELAR" class="btn btn-danger" onclick="mostrarmensaje()"></center></td>
			<td colspan="2"><center><input type="submit" name="btnguardar" value="REGISTRAR" class="btn btn-success" ></center></td>
		</tr>
		<tr>
		    <td colspan="4">
		        <p><h4>Observación</h4></p>
		        <p>Si no tienes DNI enviar ticket de trámite con RENIEC y adjuntar tu compromiso de honor de tu trámite de DNI.</p>
		        <p>
		            Si no cuentas con certificado de estudios debe adjuntar compromiso de honor más documento que acredite término de quinto año de secundaria satisfactorio.
		        </p>
		    </td> 
		</tr>
	
		
		</table>
		</form>
		</div>
		    <p> ( * ) En caso no contar con el compromiso de pago puede descargarlo <a href="../imagenes/compromisopagopacc2023.docx">aqui</a></p>
	    <p> ( * ) En caso no contar con el compromiso de honor puede descargarlo <a href="../imagenes/compromisohonorpacc2023.docx">aqui</a></p>
	    	
	    	<p>( * ) En caso no contar con el compromiso de honor de trámite de DNI, puede descargarlo <a href="../imagenes/tramitedni.docx">aqui</a></p>
	    	<footer style="color: white; position:fixed; left:0; bottom:0px;z-index:99" border="0">Todos los derechos reservados DragonSoft - Chiclayo 2020</footer>
</body>
</html>

 

