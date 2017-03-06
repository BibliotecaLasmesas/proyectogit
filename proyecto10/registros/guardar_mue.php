<?php
		include ('../lib/funciones.php');

		$codigo= $_POST['codigo'];
		$mueble= $_POST['mueble'];
		$descripcion= $_POST['descripcion'];
		$fecha= $_POST['fecha'];
		$sala= $_POST['sala'];
		$cantidad= $_POST['cantidad'];
		$tabla="bienes";

		$consultar = "INSERT INTO bienes VALUES ('$codigo', '$mueble', '$descripcion', '$fecha', '$sala','$cantidad')";

		if (mysqli_query($conexion, $consultar)) {
			?>
			<script>
				alert("Registro Correcto!!!!!!");
				{				self.location.href='../inicio.html';

				}
			</script>
				<?php
		}
		else{	
?>
			<script>
				alert("Ha ocurrido un error, por favor intente de nuevo");
				{				self.location.href='rmuebles.html';

				}
			</script>
			
<?php
						}
mysqli_close($conexion);
?>