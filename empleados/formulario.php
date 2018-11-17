<?php
include "conexion.php";
$user_id=null;
$sql1 = "SELECT * FROM empleados WHERE idempleado=".$_GET["id"];
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
require_once('crud_empleados.php');
// require_once('usuario.php');
$crud=new CrudCliente();
$mostrar=$crud->combo();
$mostrar1=$crud->combo1();
$mostrar2=$crud->combo2();
$mostrar3=$crud->combo3();
$mostrar4=$crud->combo4();
$mostrar5=$crud->combo5();







?>
<?php if($person!=null):?>

<form role="form" id="actualizar" >
  <div class="row">
  <div class="col-md-4">
    <label for="name">ID</label>
    <input type="text" class="form-control" value="<?php echo $person->idempleado; ?>" name="idempleado" required>
  </div>
    <div class="col-md-8">
    <label for="address">DNI</label>
    <input type="text" class="form-control" value="<?php echo $person->dni; ?>" name="dni" required>
  </div>
</div>
  <div class="row">
  <div class="col-md-8">
    <label for="address">Nombre Completo</label>
    <input type="text" class="form-control" value="<?php echo $person->nombrecompleto; ?>" name="nombrecompleto" required>
  </div>

  
  <div class="col-md-4">
    <label for="lastname">Tipo Empleado</label>
      <select  class="form-control"  name="idtipoempleado" value='<?php echo $person->idtipoempleado?>' required>
    <?php 
      			foreach ($mostrar as $x ) {
                echo "<option value='".$x['idtipoempleado']."'>".$x['dsctipoempleado']."</option>";
      			}
      			?> 
			</select>
  </div>
  </div>

   </div>
   <div class="row">
  <div class="col-md-4">
    <label for="lastname">Tipo Cargo</label>
      <select  class="form-control"  name="idtipocargo" value='<?php echo $person->idtipocargo?>' required>
    <?php 
            foreach ($mostrar1 as $x ) {
                echo "<option value='".$x['idtipocargo']."'>".$x['dsctipocargo']."</option>";
            }
            ?> 
      </select>
  </div>
  <div class="col-md-4">
    <label for="lastname">Tipo Pago</label>
      <select  class="form-control"  name="idtipopago" value='<?php echo $person->idtipopago?>' required>
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
    <input type="date" class="form-control" value="<?php echo $person->fechaingreso; ?>" name="fechaingreso" required>
  </div>
  
  
 
  <div class="col-md-6">
    <label for="address">Numero de Cuenta</label>
    <input type="text" onkeypress="return valida(event) class="form-control" value="<?php echo $person->numerocuenta; ?>" name="numerocuenta" required>
  </div>
  </div>
  <div class="row">
    <div class="col-md-6">
    <label for="lastname">Tipo Pension</label>
      <select  class="form-control"  name="idtipopension" value='<?php echo $person->idtipopension?>' required>
    <?php 
            foreach ($mostrar3 as $x ) {
                echo "<option value='".$x['idtipopension']."'>".$x['dsctipopension']."</option>";
            }
            ?> 
      </select>
  </div>
    <div class="col-md-6">
    <label for="phone">Celular</label>
    <input type="text" onkeypress="return valida(event)" maxlength="10" class="form-control" value="<?php echo $person->celular; ?>" name="celular" >
  </div>
  </div>
  <div class="row">
    <div class="col-md-4">
    <label for="phone">Sueldo</label>
    <input type="text" onkeypress="return valida(event)" maxlength="10" class="form-control" value="<?php echo $person->sueldo; ?>" name="sueldo" >
  </div>
   <div class="col-md-8">
    <label for="email">E-mail</label>
    <input type="email" class="form-control" value="<?php echo $person->email; ?>" name="email" >
  </div>
</div>
<div class="row">
 <div class="col-md-8">
    <label for="lastname">Tipo Educacion</label>
      <select  class="form-control"  name="idtiposeducacion" value='<?php echo $person->idtiposeducacion?>' required>
    <?php 
            foreach ($mostrar4 as $x ) {
                echo "<option value='".$x['idtiposeducacion']."'>".$x['dsctiposeducacion']."</option>";
            }
            ?> 
      </select>
  </div>
  
  <div class="col-md-8">
    <label for="address">Instituto Universidad</label>
    <input type="text" class="form-control" value="<?php echo $person->institutouniversidad; ?>" name="institutouniversidad" required>
  </div>
  </div>
    <div class="row">
  <div class="col-md-6">
    <label for="address">Carrera</label>
    <input type="text" class="form-control" value="<?php echo $person->carrera; ?>" name="carrera" required>
  </div>
  
  <div class="col-md-4">
    <label for="address">Año Egreso</label>
    <input type="date" class="form-control" value="<?php echo $person->anoegreso; ?>" name="anoegreso" required>
  </div>
 </div>
   <div class="row">
  <div class="col-md-4">
    <label for="address">Derechos Habientes</label>
      <select  class="form-control" value="<?php echo $person->derechoshabientes; ?>" name="derechoshabientes" required>
        <option value="1">Si</option>
        <option value="0">No</option>
      </select>
    
  </div>

  
  <div class="col-md-4">
    <label for="lastname">Tipo Vinculo</label>
      <select  class="form-control"  name="idtipovinculo" value='<?php echo $person->idtipovinculo?>' required>
    <?php 
            foreach ($mostrar5 as $x ) {
                echo "<option value='".$x['idtipovinculo']."'>".$x['dsctipovinculo']."</option>";
            }
            ?> 
      </select>
  </div>
</div>

 
  <br>
  <input type="hidden" name="idempleado" value="<?php echo $person->idempleado; ?>">
<center><button type="submit" class="btn btn-primary">Actualizar</button></center>
</form>
<script>
    $("#actualizar").submit(function(e){
    e.preventDefault();
    $.post("./empleados/actualizar.php",$("#actualizar").serialize(),function(data){
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