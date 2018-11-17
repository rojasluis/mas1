<?php
require_once('../conexion.php');
	class CrudUsuario{

		public static $tablename = "tipousuario";


		public function NivelTipoUsuarioData(){
			$this->idtipousuario = "";
			$this->dsctipousuario = "";
	
		}


		public function __construct(){}
		public function combo(){
			$db=DB::conectar();
			$combo=$db->query("SELECT * FROM tipousuario");
			$combo->execute();
			return $combo;
		}
		public function combo2(){
			$db=DB::conectar();
			$combo2=$db->query("SELECT * FROM estado");
			$combo2->execute();
			return $combo2;
		}



		public static function getAll(){
			$db=DB::conectar();
			$sql = $db->query("select * from ".self::$tablename);
		
			$sql->execute();
			return $sql;
		}


	}
?>