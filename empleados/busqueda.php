<?php
		include "conexion.php";
$limitpage = 3;
$page = 1;
if(isset($_GET["page"]) && $_GET["page"]!=""){ $page=$_GET["page"]; }
$startpage = 0;
$endpage = $limitpage;
if($page>1){  $startpage=($page-1)*$limitpage;$endpage=($page)*$limitpage; }
//echo $startpage;
$user_id=null;
$sql0= "select count(*) as c from empleados";
$query0 = $con->query($sql0);
$count = $query0->fetch_array();
$npages = $count["c"]/$limitpage;
		$user_id=null;
		$sql1= "SELECT idempleado,dni,nombrecompleto,dsctipoempleado,dsctipocaro,dsctipopago,fechaingreso,numerocuenta,dsctipopension,celular,sueldo,email,dsctiposeducacion,institutouniversidad,carrera,añoegreso,derechoshabientes,dsctipovinculo from empleados INNER JOIN tipoempleado on empleados.idtipoempleado=tipoempleado.idtipoempleado 
    INNER JOIN tipocargo on empleados.idtipocargo=tipocargo.idtipocargo 
    INNER JOIN tipopago on empleados.idtipago=tipopago.idtipopago
    INNER JOIN tipopension on empleados.idpension=tipopension.idtipopension
    INNER JOIN tiposeducacion on empleados.idtiposeducacion=tiposeducacion.idtiposeducacion
    INNER JOIN tipovinvulo on empleados.idtipovinculo=tipovinculo.idtipovinculo
    where idempleado like '%$_GET[s]%' or DNI like '%$_GET[s]%' or nombre like '%$_GET[s]%' limit $startpage,$limitpage";
		$query = $con->query($sql1);
?>
		<?php if($query->num_rows>0):?>
			<h4>Pagina <?php echo $page; ?> de <?php echo ceil($npages); ?></h4>
		<table class="table table-bordered table-hover">
		<thead>
	  	<td>Id</td>
      <td>DNI</td>
      <td>Nombre Completo</td>
      <td>Tipo Empleado</td>
      <td>Tipo Cargo</td>
      <td>Tipo Pago</td>
      <td>Fecha de Ingreso</td>
      <td>Numero de Cuenta</td>
      <td>Tipo Pension</td>
      <td>Celular</td>
      <td>Sueldo</td>
      <td>E-mail</td>
      <td>Tipo Seducacion</td>
      <td>Instituto o Universidad</td>
      <td>Carrera</td>
      <td>Año de Egreso</td>
      <td>Derechos Habientes</td>
      <td>Tipo Vinculo</td>
			<th></th>
		</thead>
<?php while ($r=$query->fetch_array()):?>
			<tr>
			<td><?php echo $r["idempleado"]; ?></td>
      <td><?php echo $r["dni"]; ?></td>
      <td><?php echo $r["nombrecompleto"]; ?></td>
			<td><?php echo $r["dsctipoempleado"];?></td>
      <td><?php echo $r["dsctipocargo"];?></td>
      <td><?php echo $r["dsctipopago"];?></td>
      <td><?php echo $r["fechaingreso"];?></td>
      <td><?php echo $r["numerocuenta"];?></td>
			<td><?php echo $r["dsctipopension"];?></td>
      <td><?php echo $r["celular"];?></td>
      <td><?php echo $r["sueldo"];?></td>
      <td><?php echo $r["email"];?></td>
      <td><?php echo $r["dsctiposeducacion"];?></td>
      <td><?php echo $r["institutouniversidad"];?></td>
      <td><?php echo $r["carrera"];?></td>
      <td><?php echo $r["añoegreso"];?></td>
			<td><?php echo $r["derechoshabientes"];?></td>
      <td><?php echo $r["dsctipovinculo"];?></td>
			<td style="width:150px;">
      <a data-id="<?php echo $r["idempleado"];?>" class="btn btn-edit btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
      <a href="#" id="del-<?php echo $r["idempleado"];?>" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></a>

			<script>
			$("#del-"+<?php echo $r["idempleado"];?>).click(function(e){
				e.preventDefault();
				p = confirm("Estas seguro?");
			if(p){
				$.get("./empleados/eliminar.php","idempleado="+<?php echo $r["idempleado"];?>,function(data){
					loadTabla();
				});
			}

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
      <a href="#" onclick="empleados(<?php echo $page-1;?>)">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#" onclick="empleados(1)">1</a></li>
<?php endif; ?>
<?php 

for($i=2;$i<$npages+1;$i+=1):?>
   <li><a href="#" onclick="empleados(<?php echo $i;?> )"><?php  echo $i; ?></a></li>
<?php endfor; ?>
<?php if($page<$npages):?>
<li>
      <a href="#" onclick="empleados(<?php echo $page+1;?>)" aria-label="Next">
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
  		$.get("./empleados/formulario.php","id="+id,function(data){
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