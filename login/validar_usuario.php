<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/estilo-login.css"/>
</head>
 
<body>
    
    <?php
        session_start();
        // Se comprueba si ya se habia iniciado la sesion y en ese caso le redirigimos a la pagina de inicio
        if(isset($_SESSION['id'])){
            header("Location:pagina1.php");
        }
    ?>
   
    <section>
        <div id="formulario_login">
            <h2>Login</h2>
            <form action="controlador/login.php" method="POST">
                <div class="campoFormulario">
                    <label for="usuario">Usuario:</label>
                    <input type='text' name="usuario" maxlength="15"/>
                </div>
                <div class="campoFormulario">
                    <label for="password">Contraseña:</label>
                    <input type='password' name="password" maxlength="20"/>
                </div>
                <div class="botonFormulario">
                    <input type="submit" id="login" name="login" value="Entrar">
                </div>  
                <div id="enlace_registro">
                    <a href="formulario_registro.php"> Registrarse </a>
                </div>
            </form> 
               
            <?php
                if(!empty($_GET['error'])) {
            ?>
                <p class="errorUsuario">Usuario o pasword incorrectos</p>
            <?php } ?>
        </div>
    </section>
</body>
</html>   







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