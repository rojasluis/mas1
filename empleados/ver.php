<?php  
require_once('../empleados/crud_empleados.php');
// require_once('usuario.php');
$crud=new CrudCliente();
$mostrar=$crud->combo();
$mostrar1=$crud->combo1();
$mostrar2=$crud->combo2();
$mostrar3=$crud->combo3();
$mostrar4=$crud->combo4();
$mostrar5=$crud->combo5();

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
		<h2>Empleados</h2>
<!-- Button trigger modal -->



<form class="form-inline" role="search" id="buscar">
      <div class="form-group">
        <input type="text" name="s" class="form-control" placeholder="Buscar">
      </div>
      <button type="submit" class="btn btn-default">&nbsp;<i class="glyphicon glyphicon-search"></i>&nbsp;</button>
  
  
  

  <a data-toggle="modal" href="#newModal" class="btn btn-success">Nuevo Empleado</a> 
  <!-- <button type="submit" class="btn btn-primary">Actualizar</button> -->
</form>




<br>
  <!-- Modal -->
  <div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="newModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar Empleado</h4>
        </div>
        <div class="modal-body">



<form role="form" method="post" action ="empleados/agregar.php">
  
  <div class="row">
  <div class="col-md-4">
    <label for="name">ID</label>
    <input type="text"  disabled="disabled" class="form-control" name="idempleado" required>
  </div>
    <div class="col-md-8">
    <label for="address">DNI</label>
    <input type="text" class="form-control"  name="dni" required>
  </div>
</div>
  <div class="row">
  <div class="col-md-8">
    <label for="address">Nombre Completo</label>
    <input type="text" class="form-control"  name="nombrecompleto" required>
  </div>

  
  <div class="col-md-4">
    <label for="lastname">Tipo Empleado</label>
      <select  class="form-control"  name="idtipoempleado"  required>
    <?php 
            foreach ($mostrar as $x ) {
                echo "<option value='".$x['idtipoempleado']."'>".$x['dsctipoempleado']."</option>";
            }
            ?> 
      </select>
  </div>
  </div>

   
   <div class="row">
  <div class="col-md-4">
    <label for="lastname">Tipo Cargo</label>
      <select  class="form-control"  name="idtipocargo"  required>
    <?php 
            foreach ($mostrar1 as $x ) {
                echo "<option value='".$x['idtipocargo']."'>".$x['dsctipocargo']."</option>";
            }
            ?> 
      </select>
  </div>
  <div class="col-md-4">
    <label for="lastname">Tipo Pago</label>
      <select  class="form-control"  name="idtipopago"  required>
    <?php 
            foreach ($mostrar2 as $x ) {
                echo "<option value='".$x['idtipopago']."'>".$x['dsctipopago']."</option>";
            }
            ?> 
      </select>
  </div>

    </div>
  
 <div class="row">
  <div class="col-md-4">
    <label for="address">Fecha de Ingreso</label>
    <input type="date" class="form-control"  name="fechaingreso" required>
  </div>
  
  
 
  <div class="col-md-6">
    <label for="address">Numero de Cuenta</label>
    <input type="text" onkeypress="return valida(event) class="form-control"  name="numerocuenta" required>
  </div>
  </div>
  <div class="row">
    <div class="col-md-6">
    <label for="lastname">Tipo Pension</label>
      <select  class="form-control"  name="idtipopension"  required>
    <?php 
            foreach ($mostrar3 as $x ) {
                echo "<option value='".$x['idtipopension']."'>".$x['dsctipopension']."</option>";
            }
            ?> 
      </select>
  </div>
    <div class="col-md-6">
    <label for="phone">Celular</label>
    <input type="text" onkeypress="return valida(event)" maxlength="10" class="form-control"  name="celular" >
  </div>
  </div>
  <div class="row">
    <div class="col-md-4">
    <label for="phone">Sueldo</label>
    <input type="text" onkeypress="return valida(event)" maxlength="10" class="form-control"  name="sueldo" >
  </div>
   <div class="col-md-8">
    <label for="email">E-mail</label>
    <input type="email" class="form-control"  name="email" >
  </div>
</div>
<div class="row">
 <div class="col-md-8">
    <label for="lastname">Tipo Educacion</label>
      <select  class="form-control"  name="idtiposeducacion"  required>
    <?php 
            foreach ($mostrar4 as $x ) {
                echo "<option value='".$x['idtiposeducacion']."'>".$x['dsctiposeducacion']."</option>";
            }
            ?> 
      </select>
  </div>
  
  <div class="col-md-8">
    <label for="address">Instituto Universidad</label>
    <input type="text" class="form-control"  name="institutouniversidad" required>
  </div>
  </div>
    <div class="row">
  <div class="col-md-6">
    <label for="address">Carrera</label>
    <input type="text" class="form-control"  name="carrera" required>
  </div>
  
  <div class="col-md-4">
    <label for="address">Año Egreso</label>
    <input type="date" class="form-control"  name="anoegreso" required>
  </div>
 </div>
   <div class="row">
  <div class="col-md-4">
    <label for="address">Derechos Habientes</label>
      <select  class="form-control"  name="derechoshabientes" required>
        
        <option value="1">Si</option>
        <option value="0">No</option>
      </select>
  


  </div>
     <div class="col-md-8">
    <label for="lastname">Tipo Vinculo</label>
      <select  class="form-control"  name="idtipovinculo"  required>
    <?php 
            foreach ($mostrar5 as $x ) {
                echo "<option value='".$x['idtipovinculo']."'>".$x['dsctipovinculo']."</option>";
            }
            ?> 
      </select>
  </div>
   </div>
   
 
  <br>
  <input type="hidden" name="idempleado"  value="<?php echo $person->idempleado; ?>">



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
    <?php $total = $_GET['total']; ?>

   <?php $valorpagina =$total;?>

  $('#editModal').modal('hide');

  $.get("./empleados/tabla.php?page=<?php echo $valorpagina;?>","",function(data){
    $("#tabla").html(data);
  })

}
$("#buscar").submit(function(e){
     <?php $total = $_GET['total']; ?>

   <?php $valorpagina =$total;?>
  e.preventDefault();
  $.get("./empleados/busqueda.php?page=<?php echo $valorpagina;?>",$("#buscar").serialize(),function(data){
    $("#tabla").html(data);
  $("#buscar")[0].reset();
  });
});
loadTabla();
  $("#agregar").submit(function(e){
    e.preventDefault();
    $.post("./empleados/agregar.php",$("#agregar").serialize(),function(data){
    });
    swal("¡Bien!", "Has creado un Empleado Nuevo :)", "success");
    $("#agregar")[0].reset();
      $('#newModal').modal('hide');
      $('body').removeClass('modal-open');
      $('.modal-backdrop').remove();
    loadTabla();
  });
</script>
	</body>
</html>

