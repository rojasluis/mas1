<?php
if(!empty($_POST)){
	if(isset($_POST["dni"]) &&isset($_POST["nombrecompleto"]) && isset($_POST["idtipoempleado"]) &&isset($_POST["idtipocargo"]) &&isset($_POST["idtipopago"]) &&isset($_POST["fechaingreso"])&&isset($_POST["numerocuenta"])&&isset($_POST["idtipopension"])&&isset($_POST["celular"]) &&isset($_POST["sueldo"]) &&isset($_POST["email"]) &&isset($_POST["idtiposeducacion"])&&isset($_POST["institutouniversidad"]) &&isset($_POST["carrera"]) &&isset($_POST["anoegreso"]) &&isset($_POST["derechoshabientes"]) &&isset($_POST["idtipovinculo"])){
			
			include "conexion.php";
			
			// $sql = "INSERT INTO empleados VALUES(null,\"$_POST[dni]\",\"$_POST[nombrecompleto]\",1,1,1,\"$_POST[fechaingreso]\",\"$_POST[numerocuenta]\",1,\"$_POST[celular]\",\"$_POST[sueldo]\",\"$_POST[email]\",1,\"$_POST[institutouniversidad]\",\"$_POST[carrera]\",\"$_POST[anoegreso]\",\"$_POST[derechoshabientes]\",1)";
			$sql = "INSERT into empleados values(null,\"$_POST[dni]\",\"$_POST[nombrecompleto]\",1,1,1,\"$_POST[fechaingreso]\",\"$_POST[numerocuenta]\",1,\"$_POST[celular]\",\"$_POST[sueldo]\",\"$_POST[email]\",1,\"$_POST[institutouniversidad]\",\"$_POST[carrera]\",\"$_POST[anoegreso]\",\"$_POST[derechoshabientes]\",1)";
			$query = $con->query($sql);
		
				
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar .\");window.location='../ver.php';</script>";
				/*print $_POST["dni"]."<br>";
				print $_POST["nombrecompleto"]."<br>";
				print $_POST["idtipoempleado"]."<br>";
				print $_POST["idtipocargo"]."<br>";
				print $_POST["idtipopago"]."<br>";
				print $_POST["fechaingreso"]."<br>";
				print $_POST["numerocuenta"]."<br>";
				print $_POST["idtipopension"]."<br>";
				print $_POST["celular"]."<br>";
				print $_POST["sueldo"]."<br>";
				print $_POST["email"]."<br>";
				print $_POST["idtiposeducacion"]."<br>";
				print $_POST["institutouniversidad"]."<br>";
				print $_POST["carrera"]."<br>";
				print $_POST["anoegreso"]."<br>";
				print $_POST["derechoshabientes"]."<br>";
				print $_POST["idtipovinculo"]."<br>";*/

			}
	}
}
?>