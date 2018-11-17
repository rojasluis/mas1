<?php  
require_once('../usuarios/crud_usuario.php');
// require_once('usuario.php');
$crud=new CrudUsuario();
$mostrar=$crud->combo();
$mostrar2=$crud->combo2();
?>
<html>
	<head>
		<title>.: CRUD :.</title>

                  
      <!-- bootstrap -->
  <script src="librerias/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
	</head>
	<body>

<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>Usuarios</h2>
<!-- Button trigger modal -->

<form class="form-inline" role="search" id="buscar">
      <div class="form-group">
        <input type="text" name="s" class="form-control" placeholder="Buscar">
      </div>
      <button type="submit" class="btn btn-default">&nbsp;<i class="glyphicon glyphicon-search"></i>&nbsp;</button>
  <a data-toggle="modal" href="#newModal" class="btn btn-success">Nuevo Usuario</a> 
  <!-- <button type="submit" class="btn btn-primary">Actualizar</button> -->
</form>

<br>
  <!-- Modal -->
  <div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="newModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar</h4>
        </div>
        <div class="modal-body">
<form role="form" method="post" id="agregar" >
<div class="row">
  <div class="col-md-4">
    <label for="name">ID</label>
    <input type="text" class="form-control" disabled="disabled" name="idusuario" required>
  </div>
  <div class="col-md-8">
    <label for="lastname">Tipo Usuario</label>
    <select  class="form-control"  name="idtipousuario" required>
    <?php 
      			foreach ($mostrar as $x ) {
                echo "<option value='".$x['idtipousuario']."'>".$x['dsctipousuario']."</option>";
      			}
      			?> 
			</select>
  </div>
  </div>
  <div class="row">
  <div class="col-md-12">
    <label for="address">Nombre</label>
    <input type="text" class="form-control"  name="nombreusu" required>
  </div>
  <div class="col-md-12">
    <label for="address">Apellido</label>
    <input type="text" class="form-control"  name="apellidousu" required>
  </div>
  </div>
 <div class="row">
  <div class="col-md-6">
    <label for="address">Usuario</label>
    <input type="text" class="form-control"  name="usuariologin" required>
  </div>
  <div class="col-md-6">
    <label for="address">Contraseña</label>
    <input type="password" class="form-control"  name="contrasena" required>
  </div>
  </div>
<div class="row">
  <div class="col-md-6">
    <label for="email">Email</label>
    <input type="email" class="form-control"  name="email" >
  </div>
  <div class="col-md-6">
    <label for="phone">Celular</label>
    <input type="text" class="form-control"  name="celular" >
  </div>
  </div>
  <div class="row">
  <div class="col-md-12">
    <label for="phone">Direccion</label>
    <input type="text" class="form-control"  name="direccion" >
  </div>
  <div class="col-md-6">
    <label for="phone">Estado</label>
    <select  class="form-control" name="idestado" required>
    <?php 
      			foreach ($mostrar2 as $x ) {
                echo "<option value='".$x['idestado']."'>".$x['dscestado']."</option>";
      			}
      			?> 
			</select>
      </div>
  </div>
  <br>
  <input type="hidden" name="idusuario" value="<?php echo $person->idusuario; ?>">
  <button type="submit" class="btn btn-default"  >Agregar</button>
  <button data-dismiss="modal" class="btn btn-default"  >Salir</button>
</form>
        </div>
      </div>
    </div>
  </div>
<div id="tabla"></div>
</div>
</div>
</div>
<script src="bootstrap/js/bootstrap.min.js"></script>


<script>
function loadTabla(){
    <?php $total = $_GET['total']; ?>

   <?php $valorpagina =$total;?>

  $('#editModal').modal('hide');

  $.get("./usuarios/tabla.php?page=<?php echo $valorpagina;?>","",function(data){
    $("#tabla").html(data);
  })
}

$("#buscar").submit(function(e){
  e.preventDefault();
 
  $.get("./usuarios/busqueda.php",$("#buscar").serialize(),function(data){
  $("#tabla").html(data);
  $("#buscar")[0].reset();
  });

});

loadTabla();
  $("#agregar").submit(function(e){
    e.preventDefault();
    $.post("./usuarios/agregar.php",$("#agregar").serialize(),function(data){
    });
    swal("¡Bien!", "Has creado un Usuario :)", "success");
    $("#agregar")[0].reset();
      $('#newModal').modal('hide');
      $('body').removeClass('modal-open');
      $('.modal-backdrop').remove();
    loadTabla();
  });
</script>
	</body>
</html>

