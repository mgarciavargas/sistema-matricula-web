<?php require_once __DIR__.'/../config.php';
?>
<?php

	Class Solicitud{

	private $solicitud;
		private $db;

		public function __construct(){
			$this->solicitud= array();
			
			$this->db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
		}

		private function setNames(){
			return $this->db->query("SET NAMES 'utf8'");
		}

		public function getsolicitud(){
			self::setNames();
			$sql = "SELECT * FROM solicitudes WHERE sol_dni <> 0";
			foreach ($this->db->query($sql) as $resultado) {
				$this->solicitud[] = $resultado;
			}
			return $this->solicitud;
			$this->db = null;
		}

		 

		public function setsolicitud($dni_est,$certificado){
			self::setNames();
			$sql = "INSERT INTO solicitudes (sol_codigo,sol_dni,sol_ruta,sol_extra) VALUES 
			    (null,'".$dni_est."','".$certificado."', NOW())";
			$resultado = $this->db->query($sql);

			if ($resultado) {
				return true;
			}else{
				return false;
			}
		}
		public function getestudiantesolicitud($idestudiante){
			self::setNames();
			$sql = "SELECT * FROM solicitudes WHERE sol_dni =".$idestudiante;
			foreach ($this->db->query($sql) as $resultado) {
				$this->solicitud[] = $resultado;
			}
			return $this->solicitud;
			$this->db = null;
		}
		
		public function eliminarsolicitudes($id){
			self::setNames();
			$sql = "UPDATE solicitudes SET sol_dni = 0 WHERE sol_codigo =".$id;
			$resultado = $this->db->query($sql);

			if ($resultado) {
				return true;
			}else{
				return false;
			}
		}
	}
?>