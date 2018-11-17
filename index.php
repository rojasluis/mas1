<?php
    session_start();
?>
<?php
    require_once('maquetasenati/funcionRutas.php');
?>
<script src="./validatos.js"></script>
<script src="http://code.responsivevoice.org/responsivevoice.js">
</script>
<!DOCTYPE html>
<html lang="en">
	</head>  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
      <meta name="author" content="GeeksLabs">
      <meta name="keyword" content="Creative, Principal, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
      <link rel="shortcut icon" href="img/favicon.png">
      <title>MAS 1 PRO</title>
      <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
      <link href="librerias/css/bootstrap.min.css" rel="stylesheet">
      <link href="librerias/css/bootstrap-theme.css" rel="stylesheet">
      <link href="librerias/css/elegant-icons-style.css" rel="stylesheet" />
      <link href="librerias/css/font-awesome.min.css" rel="stylesheet" />
      <link href="librerias/css/style.css" rel="stylesheet">
      <link href="librerias/css/style-responsive.css" rel="stylesheet" />
      <link href="librerias/css/main.css" rel="stylesheet">
      <link href="librerias/css/sweetalert.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  </head>
  <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>
        <a href="index.html" class="logo">MAS1 <span class="lite">PRODUCCIONES</span></a>
      <div class="top-nav notification-row">
        <ul class="nav pull-right top-menu">
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
          <span class="profile-ava"><img alt="" src="./librerias/img/avatar1_small.jpg"></span>
          <span class="username"><?php echo $_SESSION["nom"]." ".$_SESSION["ape"];?> </span>
          <b class="caret"></b>
            </a>
        <ul class="dropdown-menu extended logout">
          <div class="log-arrow-up"></div>
          <li>
            <a href="login/login.php"><i class="icon_key_alt"></i> Cerrar Sesión</a>
          </li>
        </ul>
      </li>
        </ul>
      </div>
  </header>
  
  <aside >
      <div id="sidebar" class="nav-collapse" >
        <ul class="sidebar-menu">
          <li class=""><a class="" href="#" onclick="principal();"><i class="icon_house_alt"></i><span>Principal</span></a></li>
          <li class="sub-menu"><a href="javascript:;" class=""><i class="icon_tools"></i>
          <span>Configuracion</span>
          <span class="menu-arrow arrow_carrot-right"></span>
          </a>
        <ul class="sub">
          <li><a class="" href="maquetasenati/readProducts();">Tipo Usuario</a></li>
          <li><a href="#" onclick="readProducts();">Ejecutar función PHP</a></li>
          <li><a href="#" onclick="indexx();">Ejecutar función PHP 2</a></li>
          <li><a class="" href="ver.php">Tipo Cliente</a></li>
          <li><a class="" href="tipodocumento.html">Tipo Documento</a></li>
        </ul>
        </li>
      <li><a href="#" onclick="usuarios(1);"><i class="icon_profile"></i>Usuarios</a><span></span></a></li>
      <li><a href="#" onclick="clientes();"><i class="icon_group"></i><span>Clientes</span></a></li>
      <li><a href="#" onclick="documentos();"><i class="icon_document_alt"></i><span>Documentos</span></a></li>
      <li><a href="#" onclick="empleados();"><i class="icon_document_alt"></i><span>Empleados</span></a></li>

      </ul>
      </div>
    </aside>
  <body>


        <!--codigo de validacion prueba -->

 
    
 <section id="main-content" >
    <section class="wrapper">
    <div class="row" >
      <!-- <div class="col-lg-12"> -->
    <section >
      <div id="load-products"></div>
    </section>
      </div>
        </div>


    <script src="./librerias/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="./librerias/assets/jquery-1.11.2.min.js"></script>
    <script src="./librerias/assets/jquery.validate.min.js"></script>
    <script src="./librerias/assets/register.js"></script>




        <!--codigo de validacion prueba -->
        
          </section>
            </section>
                  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
                  <script src="librerias/js/functions.js"></script>
                  <script src="librerias/js/sweetalert.min.js"></script>
                  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->



                  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
                  <!-- Include all compiled plugins (below), or include individual files as needed -->
                  <script src="librerias/js/bootstrap.min.js"></script>
                  <!-- Custom functions file -->
                  <script src="librerias/js/functions.js"></script>
                  <!-- Sweet Alert Script -->
                  <script src="librerias/js/sweetalert.min.js"></script>

                  <!-- <script src="js/jquery.min.js"></script> -->
      <!-- bootstrap -->
  <script src="librerias/js/bootstrap.min.js"></script>
      </html>
        <div class="text-right">
        <div class="credits" style="text-align: center">
              DEMO PROYECTO SENATI SENATI <a href="https://mas1tv.pe/">PRO-MAS1</a>
        </div>
        </div>


                  <!-- <script src="librerias/js/jquery.js"></script> -->


                  <script src="librerias/js/bootstrap.min.js"></script>
                  <script src="librerias/js/jquery.scrollTo.min.js"></script>
                  <script src="librerias/js/jquery.nicescroll.js" type="text/javascript"></script>
                  <script src="librerias/js/scripts.js"></script>
      </body>
</html>