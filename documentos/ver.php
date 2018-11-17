<?php  
require_once('../documentos/crud_documento.php');
$crud=new CrudDocumento();
$mostrar=$crud->combo();
$mostrar2=$crud->combo1();
$mostrar3=$crud->combo2();
?>
<html>
	<head>
		<title>.: CRUD :.</title>
    <script src="librerias/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
	</head>
	<body>
<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>Documentos</h2>
<form class="form-inline" role="search" id="buscar">
      <div class="form-group">
        <input type="text" name="s" class="form-control" placeholder="Buscar">
      </div>
      <button type="submit" class="btn btn-default">&nbsp;<i class="glyphicon glyphicon-search"></i>&nbsp;</button>
  <a data-toggle="modal" href="#newModal" class="btn btn-success">Nuevo Documento</a> 
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
    <input type="text" class="form-control" disabled="disabled" name="iddocumento" required>
  </div>
  <div class="col-md-8">
    <label for="lastname">Cliente</label>
    <select  class="form-control"  name="idcliente" required>
    <?php 
      			foreach ($mostrar3 as $x ) {
                echo "<option value='".$x['idcliente']."'>".$x['nombrerazonsocial']."</option>";
      			}
      			?> 
			</select>
  </div>
  </div>
  <div class="row">
  <div class="col-md-12">
    <label for="lastname">Tipo Documento</label>
    <select  class="form-control"  name="idtipodocumento" required>
    <?php 
      			foreach ($mostrar2 as $x ) {
                echo "<option value='".$x['idtipodocumento']."'>".$x['dsctipodocumento']."</option>";
      			}
      			?> 
			</select>
  </div>

  </div>
 <div class="row">
 <div class="col-md-6">
    <label for="address">Fecha Emision</label>
    <input type="date" class="form-control"  name="fechaemision" required>
  </div>
  <div class="col-md-6">
    <label for="address">Fecha documento</label>
    <input type="date" class="form-control"  name="fechadocumento" required>
  </div>
  </div>
 <div class="row">
  <div class="col-md-12">
    <label for="address">Descripcion</label>
    <input type="text" class="form-control"  name="dscdocumento" required>
  </div>
  </div>

<!-- <div class="row">
  <div class="col-md-6">
    <label for="email">Email</label>
    <input type="email" class="form-control"  name="email" >
  </div>
  <div class="col-md-6">
    <label for="phone">Celular</label>
    <input type="text" class="form-control"  name="celular" >
  </div>
  </div> -->
 
  <br>
  <input type="hidden" name="iddocumento" value="<?php echo $person->iddocumento; ?>">

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
  $('#editModal').modal('hide');

  $.get("./documentos/tabla.php","",function(data){
    $("#tabla").html(data);
  })

}
$("#buscar").submit(function(e){
  e.preventDefault();
  $.get("./documentos/busqueda.php",$("#buscar").serialize(),function(data){
    $("#tabla").html(data);
  $("#buscar")[0].reset();
  });
});
loadTabla();
  $("#agregar").submit(function(e){
    e.preventDefault();
    $.post("./documentos/agregar.php",$("#agregar").serialize(),function(data){
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

