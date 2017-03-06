<?php
		include ('../lib/funciones.php');

		
		$cedula= $_POST['cedula'];
		$p_nombre= $_POST['p_nombre'];
		$s_nombre= $_POST['s_nombre'];
		$p_apellido= $_POST['p_apellido'];
		$s_apellido= $_POST['s_apellido'];
		$email= $_POST['email'];
		$fn= $_POST['fn'];
		$tlfcasa= $_POST['tlfcasa'];
		$celular= $_POST['celular'];
		$genero= $_POST['genero'];
		$direccion= $_POST['direccion'];
		$tabla="usuarios";

$consultar = "INSERT INTO $tabla VALUES ('$cedula', '$p_nombre', '$s_nombre', '$p_apellido', '$s_apellido','$email','$fn','$tlfcasa', '$celular','$genero','$direccion')";

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
				{				self.location.href='rusuario.html';

				}
			</script>
			
<?php
						}
mysqli_close($conexion);
?>