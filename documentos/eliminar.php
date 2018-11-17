<?php
if(!empty($_GET)){
			include "conexion.php";
			$sql = "DELETE FROM documento WHERE iddocumento=".$_GET["iddocumento"];
			$query = $con->query($sql);
			if($query!=null){
			//	print "<script>alert(\"Eliminado exitosamente.\");window.location='../ver.php';</script>";
			}else{
			//	print "<script>alert(\"No se pudo eliminar.\");window.location='../ver.php';</script>";
			}
}
?>