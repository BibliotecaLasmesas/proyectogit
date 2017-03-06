<?php
$conexion = mysqli_connect("localhost", "root", "", "biblioteca");
if (!$conexion) {
    die("Ha ocurrido un error: " . mysqli_connect_error());
}

?>