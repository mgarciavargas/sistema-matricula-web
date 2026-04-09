<?php
		header("Content-type: application/pdf");
		header("Content-Disposition: inline; filename=reglamento.pdf");
		readfile("../imagenes/reglamento.pdf");
?>