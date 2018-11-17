<?php
		include "conexion.php";
		$user_id=null;
		$sql1= "SELECT iddocumento,nombrerazonsocial,dsctipodocumento,fechaemision,fechadocumento,dscdocumento from documento INNER JOIN clientes on documento.idcliente=clientes.idcliente INNER JOIN tipodocumento on documento.idtipodocumento=tipodocumento.idtipodocumento where nombrerazonsocial like '%$_GET[s]%' or dsctipodocumento like '%$_GET[s]%' or iddocumento like '%$_GET[s]%'";
		$query = $con->query($sql1);
?>
		<?php if($query->num_rows>0):?>
		<table class="table table-bordered table-hover">
		<thead>
			<td>Id</td>
      <td>Cliente</td>
      <td>Tipo Documento</td>
      <td>F. Emision</td>
      <td>F. Documento</td>
      <td>Descripcion</td>
      <!-- <td>Celular</td>
      <td>Direccion</td> -->
			<th></th>
		</thead>
<?php while ($r=$query->fetch_array()):?>
			<tr>
			<td><?php echo $r["iddocumento"]; ?></td>
			<td><?php echo $r["nombrerazonsocial"]; ?></td>
			<td><?php echo $r["dsctipodocumento"]; ?></td>
			<td><?php echo $r["fechaemision"]; ?></td>
			<td><?php echo $r["fechadocumento"]; ?></td>
			<td><?php echo $r["dscdocumento"]; ?></td>
			<!-- <td>< echo $r["celular"];></td>
			<td>< echo $r["direccion"]; ></td> -->
			
			<td style="width:150px;">
				<a data-id="<?php echo $r["iddocumento"];?>" class="btn btn-edit btn-sm btn-warning">Editar</a>
				<a href="#" id="del-<?php echo $r["iddocumento"];?>" class="btn btn-sm btn-danger">Eliminar</a>
			<script>
			$("#del-"+<?php echo $r["iddocumento"];?>).click(function(e){
				e.preventDefault();
				p = confirm("Estas seguro?");
			if(p){
				$.get("./documentos/eliminar.php","iddocumento="+<?php echo $r["iddocumento"];?>,function(data){
					loadTabla();
				});
			}

		});
		</script>
	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
  <!-- Modal -->
	<script>
  	$(".btn-edit").click(function(){
  		id = $(this).data("id");
  		$.get("./documentos/formulario.php","id="+id,function(data){
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