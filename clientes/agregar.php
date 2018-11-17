<?php
if(!empty($_POST)){
	if(isset($_POST["idtipocliente"]) && isset($_POST["nombrerazonsocial"]) &&isset($_POST["dniruc"]) &&isset($_POST["direccion"]) &&isset($_POST["email"])&&isset($_POST["telefono"])){
			include "conexion.php";
			$sql = "insert into clientes values (null,\"$_POST[idtipocliente]\",\"$_POST[nombrerazonsocial]\",\"$_POST[dniruc]\",\"$_POST[direccion]\",\"$_POST[email]\",\"$_POST[telefono]\")";
			$query = $con->query($sql);
			if($query!=null){
				//print "<script>alert(\"Agregado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				//print "<script>alert(\"No se pudo agregar.\");window.location='../ver.php';</script>";
			}
	}
}
?>


