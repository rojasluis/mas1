<?php
if(!empty($_POST)){
	if(isset($_POST["idtipousuario"]) && isset($_POST["nombreusu"]) &&isset($_POST["apellidousu"]) &&isset($_POST["usuariologin"]) &&isset($_POST["contrasena"])&&isset($_POST["email"])&&isset($_POST["celular"])&&isset($_POST["direccion"])&&isset($_POST["idestado"])){
			include "conexion.php";
			$sql = "update usuario set idtipousuario=\"$_POST[idtipousuario]\",nombreusu=\"$_POST[nombreusu]\",apellidousu=\"$_POST[apellidousu]\",usuariologin=\"$_POST[usuariologin]\",contrasena=\"$_POST[contrasena]\" ,email=\"$_POST[email]\" ,celular=\"$_POST[celular]\" ,direccion=\"$_POST[direccion]\" ,idestado=\"$_POST[idestado]\"where idusuario=".$_POST["idusuario"];
			$query = $con->query($sql);
			if($query!=null){
				//print "<script>alert(\"Actualizado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				//print "<script>alert(\"No se pudo actualizar.\");window.location='../ver.php';</script>";
			}
	}
}
?>