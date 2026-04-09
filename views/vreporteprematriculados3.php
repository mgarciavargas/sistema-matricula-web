<!DOCTYPE html>
<html>
<head>
	<title>REPORTE DE MATRICULADOS</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<!-- links para exportar a excel -->
    <script src="https://unpkg.com/xlsx@0.16.9/dist/xlsx.full.min.js"></script>
    <script src="https://unpkg.com/file-saverjs@latest/FileSaver.min.js"></script>
    <script src="https://unpkg.com/tableexport@latest/dist/js/tableexport.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<h1>LISTA DE MATRICULADOS</h1>
<button id="btnExportar" class="btn btn-success">
                <i class="fas fa-file-excel"></i> Exportar datos a Excel
            </button>
    <table border=1 cellspacing=0 cellpadding=2 bordercolor="666633" id="tabla">
		<tr>
			<td>#</td>
			<td>DNI</td>
			<td>APELLIDOS ESTUDIANTE</td>
			<td>NOMBRES ESTUDIANTES </td>
			<td>DNI APODERADO</td>
			<td>APELLIDOS APODERADOS</td>
			<td>NOMBRES APODERADOS</td>
			<td>DIRECCIÓN APODERADO</td>
			<td>TELEFONO APODERADO</td>
			<td>CELULAR APODERADO</td>
			<td>CORREO APODERADO</td>
			<td>DNI (DOC)</td>
			<td>CERTIFICADO (DOC)</td>
			<td>FOTOGRAFÍA (DOC)</td>
			<td>COMPROMISO (DOC)</td>
			<td>OPERACIONES</td>
		</tr>
		<?php
			for($i = 0; $i < count($datos); $i++){
		?>
		<tr>
			<td><?php echo $i +1 ?></td>			
			<td><?php echo $datos[$i]['dni_est']; ?></td>
			<td><?php echo $datos[$i]['apel_est']; ?></td>
			<td><?php echo $datos[$i]['nom_est']; ?></td>
			<td><?php echo $datos[$i]['dni_apo']; ?></td>
			<td><?php echo $datos[$i]['apel_apo']; ?></td>
			<td><?php echo $datos[$i]['nom_apo']; ?></td>
			<td><?php echo $datos[$i]['dir_apo']; ?></td>
			<td><?php echo $datos[$i]['tel_apo']; ?></td>
			<td><?php echo $datos[$i]['cel_apo']; ?></td>
			<td><?php echo $datos[$i]['email_apo']; ?></td>
			
			<td><a href='<?php echo "https://matriculasuacc2023.com".$datos[$i]['dniestudiante']; ?>'>DNI DOC</a></td>
			<td><a href='<?php echo "https://matriculasuacc2023.com".$datos[$i]['certificadoestudio']; ?>'>CERTIFICADO DOC</a></td>
			<td><a href='<?php echo "https://matriculasuacc2023.com".$datos[$i]['fotografiaestudiante']; ?>'>FOTOGRAFIA DOC</a></td>
			<td><a href='<?php echo "https://matriculasuacc2023.com".$datos[$i]['compromisopago']; ?>'>FOTOGRAFIA DOC</a></td>
			<td>
                <a class="btn btn-primary" href="borrar2.php?id=<?php echo $datos[$i]['id_matricula'];?>"><i class="fa fa-trash-o fa-lg" aria-hidden="true">Eliminar</i></a>
            </td>

		</tr>
         <?php
          	}
         ?>
	</table>
	<script>
    const $btnExportar = document.querySelector("#btnExportar"),
        $tabla = document.querySelector("#tabla");

    $btnExportar.addEventListener("click", function() {
        let tableExport = new TableExport($tabla, {
            exportButtons: false, // No queremos botones
            filename: "Reporte de Solicitudes", //Nombre del archivo de Excel
            sheetname: "Reporte de prueba", //Título de la hoja
        });
        let datos = tableExport.getExportData();
        let preferenciasDocumento = datos.tabla.xlsx;
        tableExport.export2file(preferenciasDocumento.data, preferenciasDocumento.mimeType, preferenciasDocumento.filename, preferenciasDocumento.fileExtension, preferenciasDocumento.merges, preferenciasDocumento.RTL, preferenciasDocumento.sheetname);
    });
    </script>
</body>
</html>