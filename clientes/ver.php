<?php  
require_once('../clientes/crud_clientes.php');
// require_once('usuario.php');
$crud=new CrudCliente();
$mostrar=$crud->combo();


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
		<h2>Clientes</h2>
<!-- Button trigger modal -->



<form class="form-inline" role="search" id="buscar">
      <div class="form-group">
        <input type="text" name="s" class="form-control" placeholder="Buscar">
      </div>
      <button type="submit" class="btn btn-default">&nbsp;<i class="glyphicon glyphicon-search"></i>&nbsp;</button>
  
  
  

  <a data-toggle="modal" href="#newModal" class="btn btn-success">Nuevo Cliente</a> 
  <!-- <button type="submit" class="btn btn-primary">Actualizar</button> -->
</form>




<br>
  <!-- Modal -->
  <div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="newModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar Cliente</h4>
        </div>
        <div class="modal-body">



<form role="form" method="post" id="agregar" >
<div class="row">
  <div class="col-md-4">
    <label for="name">ID</label>
    <input type="text" class="form-control" disabled="disabled" name="idcliente" required>
  </div>
  <div class="col-md-8">
    <label for="lastname">Tipo Cliente</label>
    <select  class="form-control"  name="idtipocliente" required>
    <?php 
      			foreach ($mostrar as $x ) {
                echo "<option value='".$x['idtipocliente']."'>".$x['dsctipocli']."</option>";
      			}
      			?> 
			</select>
  </div>
  </div>
  <div class="row">
  <div class="col-md-12">
    <label for="address">Nombre / RS</label>
    <input type="text" class="form-control"  name="nombrerazonsocial" required>
  </div>
  <div class="col-md-12">
    <label for="address">DNI / RUC</label>
    <input type="text" class="form-control"  name="dniruc" required>
  </div>
  </div>
 <div class="row">
  <div class="col-md-12">
    <label for="address">Direccion</label>
    <input type="text" class="form-control"  name="direccion" required>
  </div>
  </div>
  <div class="row">
  <div class="col-md-6">
    <label for="email">Email</label>
    <input type="email" class="form-control"  name="email" >
  </div>
  <div class="col-md-6">
    <label for="phone">Telefono</label>
    <input type="text" class="form-control" onkeypress="return valida(event)" maxlength="10" name="telefono" >
  </div>
  </div>
  
  <br>
  <input type="hidden" name="idcliente" value="<?php echo $person->idcliente; ?>">



  <button type="submit" class="btn btn-default"  >Agregar</button>
  <button data-dismiss="modal" class="btn btn-default"  >Salir</button>

</form>
        </div>
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
function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
};
function loadTabla(){
  $('#editModal').modal('hide');

  $.get("./clientes/tabla.php","",function(data){
    $("#tabla").html(data);
  })

}
$("#buscar").submit(function(e){
  e.preventDefault();
  $.get("./clientes/busqueda.php",$("#buscar").serialize(),function(data){
    $("#tabla").html(data);
  $("#buscar")[0].reset();
  });
});
loadTabla();
  $("#agregar").submit(function(e){
    e.preventDefault();
    $.post("./clientes/agregar.php",$("#agregar").serialize(),function(data){
    });
    swal("¡Bien!", "Has creado un Cliente Nuevo :)", "success");
    $("#agregar")[0].reset();
      $('#newModal').modal('hide');
      $('body').removeClass('modal-open');
      $('.modal-backdrop').remove();
    loadTabla();
  });
</script>
	</body>
</html>

