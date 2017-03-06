<?php
	include ('../lib/funciones.php');
	$conexion=conexion();
	$codigo=$_POST['cod'];
	$condicion="WHERE codigo = $codigo";
	$tabla='libros';
	$delete=eliminar($tabla,$condicion);
		if  (($delete !=0  )  )
			{
			?>
			<script>
		   				alert("Registro Eliminado Correctamente..."); 
						{              self.location.href='../inicio.html';
						 }
		</script>
			<?php
			}
			else
				{
			?>
			<script>
		   				alert(" Ha ocurrido un error, por favor intente de nuevo."); 
						{              self.location.href='bsuario.html';
						 }
			</script>
			<?php
	}


?>