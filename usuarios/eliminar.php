<?php
if(!empty($_GET)){
			include "conexion.php";
			$sql = "DELETE FROM usuario WHERE idusuario=".$_GET["idusuario"];
			$query = $con->query($sql);
			if($query!=null){
			//	print "<script>alert(\"Eliminado exitosamente.\");window.location='../ver.php';</script>";
			}else{
			//	print "<script>alert(\"No se pudo eliminar.\");window.location='../ver.php';</script>";
			}
}
?>