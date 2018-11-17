<?php

require_once('../conexion.php');

	class CrudDocumento{
	
		public function __construct(){}

		public function combo(){
			$db=DB::conectar();
			$combo=$db->query("SELECT idtipocliente,nombrerazonsocial FROM clientes");
			$combo->execute();
			return $combo;
		}
		public function combo1(){
			$db=DB::conectar();
			$combo1=$db->query("SELECT * FROM tipodocumento");
			$combo1->execute();
			return $combo1;
		}
		public function combo2(){
			$db=DB::conectar();
			$combo2=$db->query("SELECT * FROM clientes");
			$combo2->execute();
			return $combo2;
		}
	
	}

?>