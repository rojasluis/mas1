<?php
include "conexion.php";
$user_id=null;
$sql1 = "SELECT * FROM clientes WHERE idcliente=".$_GET["id"];
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
require_once('crud_clientes.php');
// require_once('usuario.php');
$crud=new CrudCliente();
$mostrar=$crud->combo();





?>
<?php if($person!=null):?>

<form role="form" id="actualizar" >
  <div class="row">
  <div class="col-md-4">
    <label for="name">ID</label>
    <input type="text" class="form-control" value="<?php echo $person->idcliente; ?>" name="idcliente" required>
  </div>
  <div class="col-md-8">
    <label for="lastname">Tipo Cliente</label>
      <select  class="form-control"  name="idtipocliente" value='<?php echo $person->idtipocliente?>' required>
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
    <input type="text" class="form-control" value="<?php echo $person->nombrerazonsocial; ?>" name="nombrerazonsocial" required>
  </div>
  <div class="col-md-12">
    <label for="address">DNI / RUC</label>
    <input type="text" class="form-control" value="<?php echo $person->dniruc; ?>" name="dniruc" required>
  </div>
  </div>
 <div class="row">
  <div class="col-md-6">
    <label for="address">Direccion</label>
    <input type="text" class="form-control" value="<?php echo $person->direccion; ?>" name="direccion" required>
  </div>
<div class="row">
  <div class="col-md-6">
    <label for="email">Email</label>
    <input type="email" class="form-control" value="<?php echo $person->email; ?>" name="email" >
  </div>
  <div class="col-md-6">
    <label for="phone">Telefono</label>
    <input type="text" onkeypress="return valida(event)" maxlength="10" class="form-control" value="<?php echo $person->telefono; ?>" name="telefono" >
  </div>
  </div>
 
  <br>
  <input type="hidden" name="idcliente" value="<?php echo $person->idcliente; ?>">
<center><button type="submit" class="btn btn-primary">Actualizar</button></center>
</form>
<script>
    $("#actualizar").submit(function(e){
    e.preventDefault();
    $.post("./clientes/actualizar.php",$("#actualizar").serialize(),function(data){
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
}

</script>