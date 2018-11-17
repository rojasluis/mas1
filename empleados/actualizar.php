<?php
if(!empty($_POST)){
	if(isset($_POST["dni"]) && isset($_POST["nombrecompleto"]) &&isset($_POST["idtipoempleado"]) &&isset($_POST["idtipocargo"]) &&isset($_POST["idtipopago"])&&isset($_POST["fechaingreso"])&&isset($_POST["numerocuenta"])&&isset($_POST["idtipopension"])&&isset($_POST["celular"])&&isset($_POST["sueldo"])&&isset($_POST["email"])&&isset($_POST["idtiposeducacion"])&&isset($_POST["institutouniversidad"])&&isset($_POST["carrera"])&&isset($_POST["anoegreso"])&&isset($_POST["derechoshabientes"])&&isset($_POST["idtipovinculo"])){
		include "conexion.php";
			$sql = "update empleados set dni=\"$_POST[dni]\",nombrecompleto=\"$_POST[nombrecompleto]\",idtipoempleado=\"$_POST[idtipoempleado]\",idtipocargo=\"$_POST[idtipocargo]\",idtipopago=\"$_POST[idtipopago]\" ,fechaingreso=\"$_POST[fechaingreso]\",numerocuenta=\"$_POST[numerocuenta]\",idtipopension=\"$_POST[idtipopension]\",celular=\"$_POST[celular]\",sueldo=\"$_POST[sueldo]\",email=\"$_POST[email]\",idtiposeducacion=\"$_POST[idtiposeducacion]\",institutouniversidad=\"$_POST[institutouniversidad]\",carrera=\"$_POST[carrera]\",anoegreso=\"$_POST[anoegreso]\",derechoshabientes=\"$_POST[derechoshabientes]\",idtipovinculo=\"$_POST[idtipovinculo]\" where idempleado=".$_POST["idempleado"];
			$query = $con->query($sql);
			if($query!=null){
				//print "<script>alert(\"Actualizado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				//print "<script>alert(\"No se pudo actualizar.\");window.location='../ver.php';</script>";
			}
	}
}
?>