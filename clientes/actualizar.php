<?php
if(!empty($_POST)){
	if(isset($_POST["idtipocliente"]) && isset($_POST["nombrerazonsocial"]) &&isset($_POST["dniruc"]) &&isset($_POST["direccion"]) &&isset($_POST["email"])&&isset($_POST["telefono"])){
		include "conexion.php";
			$sql = "update clientes set idtipocliente=\"$_POST[idtipocliente]\",nombrerazonsocial=\"$_POST[nombrerazonsocial]\",dniruc=\"$_POST[dniruc]\",direccion=\"$_POST[direccion]\",email=\"$_POST[email]\" ,telefono=\"$_POST[telefono]\" where idcliente=".$_POST["idcliente"];
			$query = $con->query($sql);
			if($query!=null){
				//print "<script>alert(\"Actualizado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				//print "<script>alert(\"No se pudo actualizar.\");window.location='../ver.php';</script>";
			}
	}
}
?>