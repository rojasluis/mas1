
<script>
	function usuarios($v){
		//  $('#load-products').load("usuarios/ver.php?total=<php echo(2);?>");
		 $('#load-products').load('usuarios/ver.php?total='+ $v);
	}
	function documentos(){
		$('#load-products').load('documentos/ver.php');
	}
	function empleados($v){
		$('#load-products').load('empleados/ver.php?total='+ $v);
	}
    function clientes(){
		$('#load-products').load('clientes/ver.php');
	}	
	function principal(){
		$('#load-products').load('cars.php');
	}	
</script>
