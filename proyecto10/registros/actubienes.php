<?php
	include ('../lib/funciones.php');
	$conexion=conexion();
	
	$codigo= $_POST['codigo'];
	$mueble= $_POST['mueble'];
	$descripcion= $_POST['descripcion'];
	$fecha= $_POST['fecha'];
	$sala= $_POST['sala'];
	$cantidad= $_POST['cantidad'];
	$condicion="WHERE codigo = $codigo";
	$campos="codigo='$codigo', mueble='$mueble',descripcion ='$descripcion', fecha='$fecha', sala='$sala', cantidad='$cantidad'";
	$tabla="bienes";
	$actualizar=modificar($tabla,$campos,$condicion);
	if  (!empty($actualizar)) 
	{
			?>
			<script>
		   				alert("Registro Actualizado Correctamente..."); 
						{              self.location.href='../reportes/reportes_bienes.php';
						 }
		</script>
			<?php			
		}else{
			?>
			<script>
		   				alert(" Ha ocurrido un error, por favor intente de nuevo."); 
						{              self.location.href='../reportes/reportes_bienes.php';
						 }
			</script>
			<?php
	}
?>