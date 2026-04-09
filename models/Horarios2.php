<?php require_once __DIR__.'/../config.php';
?>
<?php

	Class Horarios{

	private $horario;
		private $db;

		public function __construct(){
			$this->horario= array();
			$this->estudiante = array();
		$this->db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
		}

		private function setNames(){
			return $this->db->query("SET NAMES 'utf8'");
		}

		public function gethorario(){
			self::setNames();
			$sql = "SELECT * FROM horario";
			foreach ($this->db->query($sql) as $resultado) {
				$this->horario[] = $resultado;
			}
			return $this->horario;
			$this->db = null;
		}

		public function sethorario($horario,$idestudiante){
			self::setNames();
			$sql = "INSERT INTO registro (id_registro,id_estudiante,id_horario) VALUES 
			    (null,'".$idestudiante."', '".$horario."')";
			$resultado = $this->db->query($sql);

			if ($resultado) {
				return true;
			}else{
				return false;
			}
		}

		public function getaforo($id){
			self::setNames();
			$sql = "SELECT * FROM horario WHERE id_horario=".$id;
			foreach ($this->db->query($sql) as $resultado) {
				$this->horario[] = $resultado;
			}
			return $this->horario;
			$this->db = null;
		}

		public function actualizaraforo($id,$n){
		self::setNames();

			$sql = "UPDATE horario SET aforo_horario = '$n' WHERE id_horario=".$id;
			$resultado = $this->db->query($sql);

			if ($resultado) {
				
				return true;
			}else{
				return false;

			}	
		}

		public function getestudiante($idestudiante){
			self::setNames();
			$sql = "SELECT * FROM estudiante WHERE dni_estudiante =".$idestudiante;
			foreach ($this->db->query($sql) as $resultado) {
				$this->estudiante[] = $resultado;
			}
			return $this->estudiante;
			$this->db = null;
		}
		
		public function getestudiantexhorario($idestudiante){
			self::setNames();
			$sql = "SELECT * FROM registro WHERE id_estudiante =".$idestudiante;
			foreach ($this->db->query($sql) as $resultado) {
				$this->estudiante[] = $resultado;
			}
			return $this->estudiante;
			$this->db = null;
		}
		
		public function generarpdf($idhorario,$idestudiante){
			require('../librerias/fpdf.php');
			$pdf = new FPDF();
			switch ($idhorario) {
			    
			    case 1:
					
					$pdf->AddPage();
					$pdf->SetFont('Arial','B',16);

					$pdf->Image('../imagenes/11A-01A.jpg',20,60,0,0);
					$pdf->Cell(190,25,'HORARIO 11A - 01A UNIDAD ACADEMICA CICLO CERO',1,0,'C');
					$pdf->Ln(5);
					$pdf->SetFont('Arial','',15);
					$pdf->Cell(70,60,'Estimado(a) estudiante identificado(a) con DNI '.$idestudiante.' se le extiende'); 
					$pdf->Ln(5);
					$pdf->Cell(70,60,'el horario seleccionado de las clases para el periodo 2021 - 1');
					$pdf->Output();
					
					
					
					break;
				
			    
			    
				case 2:
					
					$pdf->AddPage();
					$pdf->SetFont('Arial','B',16);

					$pdf->Image('../imagenes/11A-02A.jpg',20,60,0,0);
					$pdf->Cell(190,25,'HORARIO 11A - 02A UNIDAD ACADEMICA CICLO CERO',1,0,'C');
					$pdf->Ln(5);
					$pdf->SetFont('Arial','',15);
					$pdf->Cell(70,60,'Estimado(a) estudiante identificado(a) con DNI '.$idestudiante.' se le extiende'); 
					$pdf->Ln(5);
					$pdf->Cell(70,60,'el horario seleccionado de las clases para el periodo 2021 - 1');
					$pdf->Output();
					break;
				
				
				case 3:
					
					$pdf->AddPage();
					$pdf->SetFont('Arial','B',16);

					$pdf->Image('../imagenes/11B-01B.jpg',20,60,0,0);
					$pdf->Cell(190,25,'HORARIO 11B - 02B UNIDAD ACADEMICA CICLO CERO',1,0,'C');
					$pdf->Ln(5);
					$pdf->SetFont('Arial','',15);
					$pdf->Cell(70,60,'Estimado(a) estudiante identificado(a) con DNI '.$idestudiante.' se le extiende'); 
					$pdf->Ln(5);
					$pdf->Cell(70,60,'el horario seleccionado de las clases para el periodo 2021 - 1');
					$pdf->Output();
					break;
				
				
				case 4:
					
					$pdf->AddPage();
					$pdf->SetFont('Arial','B',16);

					$pdf->Image('../imagenes/11B-02B.jpg',20,60,0,0);
					$pdf->Cell(190,25,'HORARIO 11B - 02B UNIDAD ACADEMICA CICLO CERO',1,0,'C');
					$pdf->Ln(5);
					$pdf->SetFont('Arial','',15);
					$pdf->Cell(70,60,'Estimado(a) estudiante identificado(a) con DNI '.$idestudiante.' se le extiende'); 
					$pdf->Ln(5);
					$pdf->Cell(70,60,'el horario seleccionado de las clases para el periodo 2021 - 1');
					$pdf->Output();
					break;
				
				case 5:
					
					$pdf->AddPage();
					$pdf->SetFont('Arial','B',16);

					$pdf->Image('../imagenes/11C-01C.jpg',20,60,0,0);
					$pdf->Cell(190,25,'HORARIO 11C - 01C UNIDAD ACADEMICA CICLO CERO',1,0,'C');
					$pdf->Ln(5);
					$pdf->SetFont('Arial','',15);
					$pdf->Cell(70,60,'Estimado(a) estudiante identificado(a) con DNI '.$idestudiante.' se le extiende'); 
					$pdf->Ln(5);
					$pdf->Cell(70,60,'el horario seleccionado de las clases para el periodo 2021 - 1');
					$pdf->Output();
					break;
				
				case 6:
					
					$pdf->AddPage();
					$pdf->SetFont('Arial','B',16);

					$pdf->Image('../imagenes/11C-02C.jpg',20,60,0,0);
					$pdf->Cell(190,25,'HORARIO 11C - 02C UNIDAD ACADEMICA CICLO CERO',1,0,'C');
					$pdf->Ln(5);
					$pdf->SetFont('Arial','',15);
					$pdf->Cell(70,60,'Estimado(a) estudiante identificado(a) con DNI '.$idestudiante.' se le extiende'); 
					$pdf->Ln(5);
					$pdf->Cell(70,60,'el horario seleccionado de las clases para el periodo 2021 - 1');
					$pdf->Output();
					break;
				
				/*case 2:
					$pdf->AddPage();
					$pdf->SetFont('Arial','B',16);

					$pdf->Image('../imagenes/11A-02A.jpg',20,60,0,0);
					$pdf->Cell(190,25,'HORARIO 11A - 02A PROGRAMA ACADEMICO CICLO CERO',1,0,'C');
					$pdf->Ln(5);
					$pdf->SetFont('Arial','',15);
					$pdf->Cell(70,60,'Estimado(a) estudiante identificado(a) con DNI '.$idestudiante.' se le extiende'); 
					$pdf->Ln(5);
					$pdf->Cell(70,60,'el horario seleccionado de las clases para el periodo 2020 - 2');
					$pdf->Output();
					break;
				*/
				
				
				default:
					# code...
					break;
			}
		}
	}
?>