<?php
	include ('../lib/funciones.php');

	$codigo=$_POST['bn'];
	$condicion="WHERE codigo = $codigo";
	$tabla='bienes';
	$delete=eliminar($tabla,$condicion);



	$consultar = "DELETE FROM libros WHERE $codigo";

if (mysqli_query($conexion, $consultar)) {
    echo "eliminado sactisfactorio";
} else {
    echo "Error de eliminar: " . mysqli_error($conexion);
}

mysqli_close($conexion);

?>