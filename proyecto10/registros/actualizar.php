<?php
	include ('../lib/funciones.php');
	$conexion=conexion();
	
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
	$condicion="WHERE cedula = $cedula";
	$campos="cedula='$cedula', p_nombre='$p_nombre', s_nombre ='$s_nombre', p_apellido='$p_apellido', s_apellido='$s_apellido', email='$email',fn='$fn', tlfcasa='$tlfcasa', celular='$celular', genero='$genero', direccion='$direccion'";

	$tabla="usuarios";
	$actualizar=modificar($tabla,$campos,$condicion);
	if  (!empty($actualizar)) 
	{
			?>
			<script>
		   				alert("Registro Actualizado Correctamente..."); 
						{              self.location.href='../inicio.html';
						 }
		</script>
			<?php			
		}else{
			?>
			<script>
		   				alert(" Ha ocurrido un error, por favor intente de nuevo."); 
						{              self.location.href='bsuario.html';
						 }
			</script>
			<?php
	}
?>