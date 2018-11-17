<?php
		include "conexion.php";
		$user_id=null;
		$sql1= "SELECT idcliente,dsctipocli,nombrerazonsocial,dniruc,direccion,email,telefono from clientes INNER JOIN tipocliente on clientes.idtipocliente=tipocliente.idtipocliente where idcliente like '%$_GET[s]%' or dniruc like '%$_GET[s]%' or nombrerazonsocial like '%$_GET[s]%'";
		$query = $con->query($sql1);
?>
		<?php if($query->num_rows>0):?>
		<table class="table table-bordered table-hover">
		<thead>
	  	<td>Id</td>
      <td>Tipo</td>
      <td>Nombre / RS</td>
      <td>DNI / RUC</td>
      <td>Direcion</td>
      <td>Email</td>
      <td>Telefono</td>
			<th></th>
		</thead>
<?php while ($r=$query->fetch_array()):?>
			<tr>
			<td><?php echo $r["idcliente"]; ?></td>
			<td><?php echo $r["dsctipocli"]; ?></td>
			<td><?php echo $r["nombrerazonsocial"]; ?></td>
			<td><?php echo $r["dniruc"]; ?></td>
			<td><?php echo $r["direccion"]; ?></td>
			<td><?php echo $r["email"]; ?></td>
			<td><?php echo $r["telefono"]; ?></td>
			<td style="width:150px;">
				<a data-id="<?php echo $r["idcliente"];?>" class="btn btn-edit btn-sm btn-warning">Editar</a>
				<a href="#" id="del-<?php echo $r["idcliente"];?>" class="btn btn-sm btn-danger">Eliminar</a>
			<script>
			$("#del-"+<?php echo $r["idcliente"];?>).click(function(e){
				e.preventDefault();
				p = confirm("Estas seguro?");
			if(p){
				$.get("./clientes/eliminar.php","idcliente="+<?php echo $r["idcliente"];?>,function(data){
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
  		$.get("./clientes/formulario.php","id="+id,function(data){
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