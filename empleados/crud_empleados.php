<?php
// incluye la clase Db
require_once('../conexion.php');

	class CrudCliente{
		
		public function __construct(){}

		
		public function combo(){
			$db=DB::conectar();
			$combo=$db->query("SELECT * FROM tipoempleado");
			$combo->execute();
			return $combo;
		}
		
				public function combo1(){
			$db=DB::conectar();
			$combo=$db->query("SELECT * FROM tipocargo");
			$combo->execute();
			return $combo;
		}
				public function combo2(){
			$db=DB::conectar();
			$combo=$db->query("SELECT * FROM tipopago");
			$combo->execute();
			return $combo;
		}
				public function combo3(){
			$db=DB::conectar();
			$combo=$db->query("SELECT * FROM tipopension");
			$combo->execute();
			return $combo;
		}
				public function combo4(){
			$db=DB::conectar();
			$combo=$db->query("SELECT * FROM tiposeducacion");
			$combo->execute();
			return $combo;
		}
				public function combo5(){
			$db=DB::conectar();
			$combo=$db->query("SELECT * FROM tipovinculo");
			$combo->execute();
			return $combo;
		}
	}
?>