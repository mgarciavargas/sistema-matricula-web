<?php require_once __DIR__.'/../config.php';
?>
<?php
Class ValidarUsuario{

	private $validar;
		private $db;

		public function __construct(){
			$this->estudiante= array();
			
			$this->db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
		}

		private function setNames(){
			return $this->db->query("SET NAMES 'utf8'");
		}

		public function getvalidar($dni){
			self::setNames();
			$sql = "SELECT * FROM usuarioexamen WHERE dni = ".$dni;
			foreach ($this->db->query($sql) as $resultado) {
				$this->estudiante[] = $resultado;
			}
			return $this->estudiante;
			$this->db = null;
		}
	}
?>