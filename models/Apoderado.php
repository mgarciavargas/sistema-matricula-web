<?php require_once __DIR__.'/../config.php';
?>
<?php

	Class Apoderado{

	private $apoderado;
		private $db;

		public function __construct(){
			$this->apoderado= array();
			
			$this->db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
		}

		private function setNames(){
			return $this->db->query("SET NAMES 'utf8'");
		}

		public function getApoderado(){
			self::setNames();
			$sql = "SELECT * FROM apoderado";
			foreach ($this->db->query($sql) as $resultado) {
				$this->estudiante[] = $resultado;
			}
			return $this->estudiante;
			$this->db = null;
		}

		public function setApoderado($apel_apo,$nom_apo,$dir_apo,$dni_apo,$tel_apo,$cel_apo,$email_apo){
			self::setNames();
			$sql = "INSERT INTO apoderado (id_apoderado,apel_apo,nom_apo,dir_apo,dni_apo,tel_apo,cel_apo,email_apo) VALUES 
			    (null,'".$apel_apo."','".$nom_apo."','".$dir_apo."',".$dni_apo.",'".$tel_apo."','".$cel_apo."','".$email_apo."')";
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