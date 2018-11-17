<?php
// incluye la clase Db
require_once('../conexion.php');

	class CrudCliente{
		
		public function __construct(){}

		
		public function combo(){
			$db=DB::conectar();
			$combo=$db->query("SELECT * FROM tipocliente");
			$combo->execute();
			return $combo;
		}
		
	}
?>