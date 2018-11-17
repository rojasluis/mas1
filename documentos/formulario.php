<?php
include "conexion.php";
$user_id=null;
$sql1 = "SELECT * FROM documento WHERE iddocumento=".$_GET["id"];
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}
  }
?>
<?php  
require_once('crud_documento.php');
// require_once('usuario.php');
$crud=new CrudDocumento();
$mostrar1=$crud->combo1();
$mostrar2=$crud->combo2();

?>
<?php if($person!=null):?>

<form role="form" id="actualizar" >
  <div class="row">
  <div class="col-md-2">
    <label for="name">ID</label>
    <input type="text" class="form-control" value="<?php echo $person->iddocumento; ?>" name="iddocumento" required>
  </div>
  <div class="col-md-6">
    <label for="lastname">Cliente</label>
     <select class="form-control" name='idcliente' value='<?php echo $person->idcliente?>'>
				<?php 
      			foreach ($mostrar2 as $x ) {
                echo "<option value='".$x['idcliente']."'>".$x['nombrerazonsocial']."</option>";
      			}
      			?> 
			</select>
  </div>
  <div class="col-md-4">
    <label for="lastname">Tipo Docuemnto</label>
     <select class="form-control" name='idtipodocumento' value='<?php echo $person->idtipodocumento?>'>
				<?php 
      			foreach ($mostrar1 as $x ) {
                echo "<option value='".$x['idtipodocumento']."'>".$x['dsctipodocumento']."</option>";
      			}
      			?> 
			</select>
  </div>
  </div>
  <div class="row">
  <div class="col-md-12">
    <label for="address">F. Emision</label>
    <input type="date" class="form-control" value="<?php echo $person->fechaemision; ?>" name="fechaemision" required>
  </div>
  <div class="col-md-12">
    <label for="address">F. Documento</label>
    <input type="date" class="form-control" value="<?php echo $person->fechadocumento; ?>" name="fechadocumento" required>
  </div>
  </div>
  <div class="row">
  <div class="col-md-12">
    <label for="address">Descripcion</label>
    <input type="text" class="form-control" value="<?php echo $person->dscdocumento; ?>" name="dscdocumento" required>
  </div>


  <!-- <div class="col-md-6">
    <label for="address">Contraseña</label>
    <input type="password" class="form-control" value="< echo $person->contrasena; ?>" name="contrasena" required>
  </div>
  </div>

<div class="row">
  <div class="col-md-6">
    <label for="email">Email</label>
    <input type="email" class="form-control" value="< echo $person->email; ?>" name="email" >
  </div> -->
  
  <br>
  <input type="hidden"  name="iddocumento" value="<?php echo $person->iddocumento; ?>">
<center><button onclick="window.print()" type="submit" class="btn btn-primary">Actualizar</button></center>

</form>
<script>
    $("#actualizar").submit(function(e){
    e.preventDefault();
    $.post("./documentos/actualizar.php",$("#actualizar").serialize(),function(data){
    });
    //alert("Agregado exitosamente!");
    //$("#actualizar")[0].reset();
    $('#editModal').modal('hide');
$('body').removeClass('modal-open');
$('.modal-backdrop').remove();
    loadTabla();
  });
</script>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>