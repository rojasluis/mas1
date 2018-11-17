<?php
if(!empty($_POST)){
	if(isset($_POST["idcliente"]) && isset($_POST["idtipodocumento"]) &&isset($_POST["fechaemision"]) &&isset($_POST["fechadocumento"]) &&isset($_POST["dscdocumento"])){
			include "conexion.php";
			$sql = "insert into documento values (null,\"$_POST[idcliente]\",\"$_POST[idtipodocumento]\",\"$_POST[fechaemision]\",\"$_POST[fechadocumento]\",\"$_POST[dscdocumento]\")";
			$query = $con->query($sql);
			if($query!=null){
				//print "<script>alert(\"Agregado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				//print "<script>alert(\"No se pudo agregar.\");window.location='../ver.php';</script>";
			}
	}
}
?>


