<?php
	include ('../lib/funciones.php');
	$conexion=conexion();
	
	$titulo= $_POST['titulo'];
	$autor= $_POST['autor'];
	$codigo= $_POST['codigo'];
	$editorial= $_POST['editorial'];
	$anio= $_POST['anio'];
	$volumen= $_POST['volumen'];
	$clasificacion= $_POST['clasificacion'];
	$cantidad= $_POST['cantidad'];
	$condicion="WHERE codigo = $codigo";
	$campos="titulo='$titulo', autor='$autor', codigo='$codigo', editorial='$editorial',anio='$anio',volumen='$volumen',clasificacion='$clasificacion',cantidad='$cantidad'";
	$tabla="libros";
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
						{              self.location.href='codigo.html';
						 }
			</script>
			<?php
	}
?>