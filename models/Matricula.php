<?php require_once __DIR__.'/../config.php';
?>
<?php

	Class Matricula{

	private $matricula;
		private $db;

		public function __construct(){
			$this->matricula= array();
			
			$this->db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
		}

		private function setNames(){
			return $this->db->query("SET NAMES 'utf8'");
		}

		public function getmatricula(){
			self::setNames();
			$sql = "SELECT * FROM matricula";
			foreach ($this->db->query($sql) as $resultado) {
				$this->matricula[] = $resultado;
			}
			return $this->matricula;
			$this->db = null;
		}

		public function setMatricula($dni_est,$dni_padre,$asignatura,$dni,$certificado,$voucher,$fotografia,$firmapapa,$firmaest,$matrecursos,$matinternet){
			self::setNames();
			$sql = "INSERT INTO matricula (id_matricula,dni_estudiante,dni_padre,asignaturas,doc_dni,doc_certificado,doc_voucher,doc_fotografia,doc_firmapapa,doc_firmaest,mat_recursos,mat_internet) VALUES 
			    (null,".$dni_est.",".$dni_padre.",'".$asignatura."','".$dni."','".$certificado."','".$voucher."','".$fotografia."','".$firmapapa."','".$firmaest."','".$matrecursos."','".$matinternet."')";
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
		
		public function eliminarmatricula($id){
			self::setNames();
			$sql = "UPDATE matricula SET dni_estudiante = 0 WHERE id_matricula =".$id;
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
*/
		public function getestudiante($idestudiante){
			self::setNames();
			$sql = "SELECT * FROM estudiante WHERE dni_est =".$idestudiante;
			foreach ($this->db->query($sql) as $resultado) {
				$this->estudiante[] = $resultado;
			}
			return $this->estudiante;
			$this->db = null;
		}
	}
?>