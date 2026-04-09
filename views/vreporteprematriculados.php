<!DOCTYPE html>
<html>
<head>
	<title>REPORTE MATRICULADOS</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <!-- links para exportar a excel -->
    <script src="https://unpkg.com/xlsx@0.16.9/dist/xlsx.full.min.js"></script>
    <script src="https://unpkg.com/file-saverjs@latest/FileSaver.min.js"></script>
    <script src="https://unpkg.com/tableexport@latest/dist/js/tableexport.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
   
</head>
<body>
	<h1>LISTA DE ESTUDIANTES PRE MATRICULADOS</h1>
      <button id="btnExportar" class="btn btn-success">
                <i class="fas fa-file-excel"></i> Exportar datos a Excel
            </button>
	<table border=1 cellspacing=0 cellpadding=2 bordercolor="666633" id="tabla">
		<thead >
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
			<td>F. Sintomatológica</td>
			<td>Cert. Vacunación</td>
		</thead>
		<?php
			for($i = 0; $i < count($datos); $i++){
		?>
		<tr>
			<td><?php echo $i + 1; ?></td>
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
			<td><a href=<?php echo "https://matriculasuacc2023.com".$datos[$i]['ruta_fichasintomatologica']; ?>>Ficha Sintomatológica (PDF)</td></a>
			<td><a href=<?php echo "https://matriculasuacc2023.com".$datos[$i]['ruta_vacunacion']; ?>>Certificado de Vacunación (PDF)</td></a>
			<td>
				<a class="btn btn-primary" href="borrar.php?id=<?php echo $datos[$i]['id_estudiante'];?>"><i class="fa fa-trash-o fa-lg" aria-hidden="true">Eliminar</i></a>

			</td>
			
		</tr>
         <?php
          	}
         ?>
	</table>
</div>
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