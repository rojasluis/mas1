<?php

if(!empty($_POST)){
	if(isset($_POST["usuariologin"]) &&isset($_POST["contrasena"])){
		if($_POST["usuariologin"]!=""&&$_POST["contrasena"]!=""){
			include "conexionlogin.php";
			
			$user_id=null;
			$nom=null;
			$ape=null;
			$sql1= "select * from usuario where (usuariologin=\"$_POST[usuariologin]\" or email=\"$_POST[usuariologin]\") and contrasena=\"$_POST[contrasena]\" and idestado=1";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["idusuario"];
				$nom=$r["nombreusu"];
				$ape=$r["apellidousu"];
				break;

			}
			if($user_id==null){
				print "<script>window.location='login.php';</script>";
					
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
				$_SESSION["nom"]=$nom;
				$_SESSION["ape"]=$ape;
				print "<script>window.location='../index.php';</script>";				
			}
		}
	}
}



?>

<script>

function error(){
 
  $("#error").submit(function(e){
    e.preventDefault();
    $.post("./login/login.php",$("#error").serialize(),function(data){
    });
    swal("¡Bien!", "Has creado un Usuario :)", "error");
    $("#error")[0].reset();
      $('#newModal').modal('hide');
      $('body').removeClass('modal-open');
      $('.modal-backdrop').remove();
   
  });
}



</script>

   <script src="librerias/js/functions.js"></script>
                  <!-- Sweet Alert Script -->
                  <script src="librerias/js/sweetalert.min.js"></script>