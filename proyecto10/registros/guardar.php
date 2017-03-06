<?php
		include ('../lib/funciones.php');

		$titulo= $_POST['titulo'];
		$autor= $_POST['autor'];
		$codigo= $_POST['codigo'];
		$editorial= $_POST['editorial'];
		$anio= $_POST['anio'];
		$volumen= $_POST['volumen'];
		$clasificacion= $_POST['clasificacion'];
		$cantidad= $_POST['cantidad'];
		$tabla="libros";

		$consultar = "INSERT INTO libros VALUES ('$titulo', '$autor', '$codigo', '$editorial', '$anio','$volumen','$clasificacion', '$cantidad')";

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
				alert("Ha ocurrido un error, porfavor intente de nuevo");
				{				self.location.href='rlibro.html';

				}
			</script>
			
<?php
						}
mysqli_close($conexion);
?>