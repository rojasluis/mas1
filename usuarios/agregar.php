<?php
if(!empty($_POST)){
	if(isset($_POST["idtipousuario"]) && isset($_POST["nombreusu"]) &&isset($_POST["apellidousu"]) &&isset($_POST["usuariologin"]) &&isset($_POST["contrasena"])&&isset($_POST["email"])&&isset($_POST["celular"])&&isset($_POST["direccion"])&&isset($_POST["idestado"])){
			include "conexion.php";
			$sql = "insert into usuario values (null,\"$_POST[idtipousuario]\",\"$_POST[nombreusu]\",\"$_POST[apellidousu]\",\"$_POST[usuariologin]\",\"$_POST[contrasena]\",\"$_POST[email]\",\"$_POST[celular]\",\"$_POST[direccion]\",\"$_POST[idestado]\")";
			$query = $con->query($sql);
			if($query!=null){
				//print "<script>alert(\"Agregado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				//print "<script>alert(\"No se pudo agregar.\");window.location='../ver.php';</script>";
			}
	}
}
?>