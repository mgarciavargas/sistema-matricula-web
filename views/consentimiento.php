<?php
		header("Content-type: application/pdf");
		header("Content-Disposition: inline; filename=consentimientoinformado.pdf");
		readfile("../imagenes/consentimientoinformado.pdf");
?>