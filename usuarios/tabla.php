<?php

include "conexion.php";

$limitpage = 5;
$page = 1;
if(isset($_GET["page"]) && $_GET["page"]!=""){ $page=$_GET["page"]; }
$startpage = 0;
$endpage = $limitpage;
if($page>1){  $startpage=($page-1)*$limitpage;$endpage=($page)*$limitpage; }
//echo $startpage;
$user_id=null;
$sql0= "select count(*) as c from usuario";
$query0 = $con->query($sql0);
$count = $query0->fetch_array();
$npages = $count["c"]/$limitpage;


$sql1= "SELECT idusuario,dsctipousuario,nombreusu,apellidousu,usuariologin,contrasena,email,celular,direccion,dscestado from usuario INNER JOIN tipousuario on usuario.idtipousuario=tipousuario.idtipousuario INNER JOIN estado on usuario.idestado=estado.idestado limit $startpage,$limitpage";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
	<h4>Pagina <?php echo $page; ?> de <?php echo ceil($npages); ?></h4>
<table class="table table-bordered table-hover table-condensed">
<thead>
	  <td>Id</td>
      <td>Tipo</td>
      <td>Nombre</td>
      <td>Apellido</td>
      <td>Login</td>
      <td>Email</td>
      <td>Celular</td>
      <td>Direccion</td>
      <td>Estado</td>
	<th></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["idusuario"]; ?></td>
	<td><?php echo $r["dsctipousuario"]; ?></td>
	<td><?php echo $r["nombreusu"]; ?></td>
	<td><?php echo $r["apellidousu"]; ?></td>
	<td><?php echo $r["usuariologin"]; ?></td>
	<td><?php echo $r["email"]; ?></td>
	<td><?php echo $r["celular"]; ?></td>
	<td><?php echo $r["direccion"]; ?></td>
	<td><?php echo $r["dscestado"]; ?></td>
	<td style="width:170px;">
		<a data-id="<?php echo $r["idusuario"];?>" class="btn btn-edit btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
		<a href="#" id="del-<?php echo $r["idusuario"];?>" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
		<script>
		$("#del-"+<?php echo $r["idusuario"];?>).click(function(e){
			e.preventDefault();
			// p = confirm("Estas seguro?");

		swal({ 
		title: "¿Seguro que deseas eliminar el usuario?",
		text: "No podrás deshacer este paso...",
		type: "warning",
		showCancelButton: true,
		cancelButtonText: "Cancelar",
		confirmButtonColor: "#DD6B55",
		confirmButtonText: "Continuar!",
		closeOnConfirm: false },

		function(p){ 
			if(p){
				$.get("./usuarios/eliminar.php","idusuario="+<?php echo $r["idusuario"];?>,function(data){
					loadTabla();
				});

			
			swal("¡Hecho!",
		"Acabas de eliminar un usuario.",
		"success");
	}
		});

	


		});


		</script>
	</td>
</tr>
<?php endwhile;?>
</table>


<?php if($count["c"]>$limitpage):?>
  <ul class="pagination">
 
 



  <?php if($page>1):?>
    <li>
     	  <a href="#" onclick="usuarios(<?php echo $page-1;?>)" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>

	
    </li>
    <li><a href="#" onclick="usuarios(1)">1</a></li>
<?php endif; ?>



<?php

for($i=2;$i<$npages+1;$i+=1):?>
    <!-- <li><a href="usuarios/tabla.php?page=<php echo $i;?>"><php  echo $i; ?></a></li> -->
		
		<li><a href="#" onclick="usuarios(<?php echo $i;?> )"><?php  echo $i; ?></a></li>
<?php endfor; ?>

<?php if($page<$npages):?>
<li>
      <a href="#" onclick="usuarios(<?php echo $page+1;?>)" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
<?php endif; ?>
  </ul>
<?php endif; ?>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>

 <!-- Modal -->
 <script>
  	$(".btn-edit").click(function(){
  		id = $(this).data("id");
  		$.get("./usuarios/formulario.php","id="+id,function(data){
  			$("#form-edit").html(data);
  		});
  		$('#editModal').modal('show');
  	});
  </script>
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Actualizar</h4>
        </div>
        <div class="modal-body">
        <div id="form-edit"></div>
        </div>
      </div>
    </div>
  </div>