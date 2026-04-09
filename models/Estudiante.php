<?php require_once __DIR__.'/../config.php';
?>
<?php

	Class Estudiante{

	private $estudiante;
		private $db;

		public function __construct(){
			$this->estudiante= array();
			
		$this->db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
		}

		private function setNames(){
			return $this->db->query("SET NAMES 'utf8'");
		}

		public function getEstudiante(){
			self::setNames();
			$sql = "SELECT * FROM estudiante";
			foreach ($this->db->query($sql) as $resultado) {
				$this->estudiante[] = $resultado;
			}
			return $this->estudiante;
			$this->db = null;
		}

		public function setEstudiante($apel_est,$nom_est,$dir_est,$dni_est,$nac_est,$col_est,$tel_est,$cel_est,$email1_est,$email2_est){
			self::setNames();
			$sql = "INSERT INTO estudiante (id_estudiante,apel_est,nom_est,dir_est,dni_est,nac_est,col_est,tel_est,cel_est,email1_est,email2_est) VALUES 
			    (null,'".$apel_est."','".$nom_est."','".$dir_est."','".$dni_est."','".$nac_est."','".$col_est."','".$tel_est."','".$cel_est."','".$email1_est."','".$email2_est."')";
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
		
		public function setprematricula($apel_est,$nom_est,$dir_est,$dni_est,$nac_est,$col_est,$tel_est,$cel_est,$email1_est,$email2_est,$rficha,$rcerti,$rvacunacion){
			self::setNames();
			$sql = "INSERT INTO prematricula (id_estudiante,apel_est,nom_est,dir_est,dni_est,nac_est,col_est,tel_est,cel_est,email1_est,email2_est,ruta_fichasintomatologica,ruta_certificadomedico,ruta_vacunacion) VALUES 
			    (null,'".$apel_est."','".$nom_est."','".$dir_est."','".$dni_est."','".$nac_est."','".$col_est."','".$tel_est."','".$cel_est."','".$email1_est."','".$email2_est."','".$rficha."','".$rcert."','".$rvacunacion."')";
			$resultado = $this->db->query($sql);

			if ($resultado) {
				return true;
			}else{
				return false;
			}
		}
		
		public function getprematricula(){
			self::setNames();
			$sql = "SELECT id_estudiante, apel_est,nom_est,dir_est,dni_est,nac_est,col_est,tel_est,cel_est,email1_est,email2_est,ruta_fichasintomatologica,ruta_certificadomedico,ruta_vacunacion FROM prematricula WHERE dni_est <> 0 GROUP by dni_est";
			foreach ($this->db->query($sql) as $resultado) {
				$this->estudiante[] = $resultado;
			}
			return $this->estudiante;
			$this->db = null;
		}
		
		public function getmatricula(){
			self::setNames();
			$sql = "SELECT mt.id_matricula, es.dni_est, es.apel_est,es.nom_est, ap.dni_apo,ap.apel_apo,ap.nom_apo,ap.dir_apo,ap.tel_apo,ap.cel_apo,ap.email_apo, mt.doc_dni as dniestudiante ,mt.doc_certificado as certificadoestudio, mt.doc_fotografia as fotografiaestudiante, mt.doc_firmapapa as compromisopago FROM matricula mt INNER JOIN estudiante es on es.dni_est = mt.dni_estudiante INNER JOIN apoderado ap on mt.dni_padre = ap.dni_apo WHERE mt.dni_estudiante <> 0 AND es.dni_est <> 0 GROUP BY es.dni_est ORDER BY 1 ASC";
			foreach ($this->db->query($sql) as $resultado) {
				$this->estudiante[] = $resultado;
			}
			return $this->estudiante;
			$this->db = null;
		}
		
		public function eliminarestudianteprematricula($id){
			self::setNames();
			$sql = "UPDATE prematricula SET dni_est = 0 WHERE id_estudiante =".$id;
			$resultado = $this->db->query($sql);

			if ($resultado) {
				return true;
			}else{
				return false;
			}
		}
		
/*
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
		}*/
	}
?>