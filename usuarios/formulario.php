<?php
include "conexion.php";
$user_id=null;
$sql1 = "SELECT u.idusuario, tu.dsctipousuario, u.nombreusu, u.apellidousu, u.usuariologin, u.contrasena, u.email, u.celular,u.direccion, e.dscestado FROM usuario as u inner join tipousuario as tu on tu.idtipousuario = u.idtipousuario inner join estado as e on e.idestado = u.idestado WHERE idusuario=".$_GET["id"];


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
require_once('crud_usuario.php');
// require_once('usuario.php');
$crud=new CrudUsuario();
$mostrar=$crud->combo();
$mostrar2=$crud->combo2();

?>
<?php if($person!=null):?>

<form role="form" id="actualizar" >
  <div class="row">
  <div class="col-md-4">
    <label for="name">ID</label>
    <input type="text" class="form-control" value="<?php echo $person->idusuario; ?>" name="idusuario" required>
  </div>






          <div class="form-group">
                                <label>Tipo</label>
                                <?php
                                    $cats = CrudUsuario::getAll();
                                ?>
                                <?php if(count($cats)>0):?>
                                    <select name="nivelusuario" class="form-control" required>
                                        <option value="">-- SELECCIONE TIPO --</option>
                                    <?php foreach($cats as $cat):?>
                                        <option value="<?=$cat->idtipousuario;?>" <?php if($cat->idtipousuario==$person->nivelusuario){echo "selected";}?>><?=$cat->dsctipousuario;?></option>
                                <?php endforeach;?>
                                </select>
                                <?php endif;?>
                            </div>


		
                







  </div>
  <div class="row">
  <div class="col-md-12">
    <label for="address">Nombre</label>
    <input type="text" class="form-control" value="<?php echo $person->nombreusu; ?>" name="nombreusu" required>
  </div>
  <div class="col-md-12">
    <label for="address">Apellido</label>
    <input type="text" class="form-control" value="<?php echo $person->apellidousu; ?>" name="apellidousu" required>
  </div>
  </div>
 <div class="row">
  <div class="col-md-6">
    <label for="address">Usuario</label>
    <input type="text" class="form-control" value="<?php echo $person->usuariologin; ?>" name="usuariologin" required>
  </div>
  <div class="col-md-6">
    <label for="address">Contraseña</label>
    <input type="password" class="form-control" value="<?php echo $person->contrasena; ?>" name="contrasena" required>
  </div>
  </div>

<div class="row">
  <div class="col-md-6">
    <label for="email">Email</label>
    <input type="email" class="form-control" value="<?php echo $person->email; ?>" name="email" >
  </div>
  <div class="col-md-6">
    <label for="phone">Celular</label>
    <input type="text" class="form-control" value="<?php echo $person->celular; ?>" name="celular" >
  </div>
  </div>
  <div class="row">
  <div class="col-md-12">
    <label for="phone">Direccion</label>
    <input type="text" class="form-control" value="<?php echo $person->direccion; ?>" name="direccion" >
  </div>
  <div class="col-md-6">
    <label for="phone">Estado</label>
    <select  class="form-control" value="<?php echo $person->idestado; ?>" name="idestado" required>
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
<center><button type="submit" class="btn btn-primary">Actualizar</button></center>
</form>
<script>

    $("#actualizar").submit(function(e){
    e.preventDefault();
    $.post("./usuarios/actualizar.php",$("#actualizar").serialize(),function(data){
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