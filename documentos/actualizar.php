<?php
if(!empty($_POST)){
	if(isset($_POST["idcliente"]) && isset($_POST["idtipodocumento"]) &&isset($_POST["fechaemision"]) &&isset($_POST["fechadocumento"]) &&isset($_POST["dscdocumento"])){
		include "conexion.php";
			$sql = "update documento set idcliente=\"$_POST[idcliente]\",idtipodocumento=\"$_POST[idtipodocumento]\",fechaemision=\"$_POST[fechaemision]\",fechadocumento=\"$_POST[fechadocumento]\",dscdocumento=\"$_POST[dscdocumento]\" where iddocumento=".$_POST["iddocumento"];
			$query = $con->query($sql);
			if($query!=null){
				//print "<script>alert(\"Actualizado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				//print "<script>alert(\"No se pudo actualizar.\");window.location='../ver.php';</script>";
			}
	}
}
?>