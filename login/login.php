<?php 
  session_start();
  unset($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Principal, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">
  <title>MAS 1 PRO</title>
  <link href="../librerias/css/bootstrap.min.css" rel="stylesheet">
  <link href="../librerias/css/bootstrap-theme.css" rel="stylesheet">
  <link href="../librerias/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="../librerias/css/font-awesome.css" rel="stylesheet" />
  <link href="../librerias/css/style.css" rel="stylesheet">
  <link href="../librerias/css/style-responsive.css" rel="stylesheet" />
</head>

<body class="login-img3-body">
  <div class="container" >

 <form  class="login-form" method="post" role="form" id="register-form" autocomplete="off" action="procesologin.php">
 <div class="login-wrap">
 <p class="login-img"><i class="icon_lock_alt"></i></p>
 
 <div class="container"  >     
         <div class="form-body">
                         
         	  <div class="form-group" >
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   <input name="usuariologin" type="text" class="form-control" placeholder="Username">
                   </div>
                   <span class="help-block" id="error"></span>
              </div>
                        
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="contrasena" type="password" class="form-control" placeholder="Email">
                   </div> 
                   <span class="help-block" id="error"></span>                     
              </div>
                        
            </div>
            
            <div class="form-footer">
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="entrar" value='entrar'>Iniciar Sesión</button>

            </div>

  </div>
  </div>
            </form>

 </div>

    <div class="text-right">
      <div class="credits" style="text-align: center">
          DEMO MAS1-PRO <a href="https://mas1tv.pe/"></a>SENATI 2018</a>
        </div>
    </div>
 
</body>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script> -->
</html>

    <script src="../librerias/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../librerias/assets/jquery-1.11.2.min.js"></script>
    <script src="../librerias/assets/jquery.validate.min.js"></script>
    <script src="../librerias/assets/register.js"></script>