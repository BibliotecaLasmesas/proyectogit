<!DOCTYPE html>

<html lang="es">

<head>

        <title>Biblioteca Pública Guillermina Ramírez de Mora</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
      



	<script laguage="javascript">
	function activar(elemento)
	{
	if(elemento.value=="Otros")
	{document.getElementById("aparece").style.display = "inline";}
	else
	{document.getElementById("aparece").style.display = "none";}
	}
	function habilitar(form)
	{
	if(form.asistente.options[0].selected || form.asistente.options[2].selected==true)
	{form.universidad.disabled=true;}
	else
	{form.universidad.disabled=false;}
	}
	</script>
</head>


<body>
<a href="../index.html"><button type="button" class="close1 bg-negro">Salir<span class="glyphicon glyphicon-off" ></span></button></a>
<div class="bg-negro">
	<div class="container">
		<ul class="nav nav-tabs" role="tablist">
			<nav>
			<b>
				<img src="../imagenes/e.png" width="300" height="100" class="col-xs-4">
					<br>


<!-- menu de inicio -->	
				<div class="btn-group">
					<li class="btn"><a href="../inicio.html">
					<button type="button" class="btn bg-negro text-blue dropdown-toggle">
					<span class="glyphicon glyphicon-home"></span>
					  Inicio
					</button></a></li>
				</div>
<!-- menu de Nosotros -->
				<div class="btn-group">
					<button type="button" class="btn bg-negro text-blue" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="glyphicon glyphicon-user"></span>
				    Nosotros <span class="caret"></span>
					</button>
						<ul class="dropdown-menu bg-negro">
				  			<li><a href="../registros/historia.html">Historia</a></li>
				    		<li><a href="../registros/mision.html">Misión</a></li>
				   			<li><a href="../registros/vision.html">Visión</a></li>
				 		</ul>
				</div>
<!-- menu de Registro -->
				<div class="btn-group">
					<button type="button" class="btn bg-negro text-blue" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="glyphicon glyphicon-edit"></span>
				    Registro <span class="caret"></span>
					</button>
						<ul class="dropdown-menu bg-negro">
						  	<li><a href="../registros/rusuario.html">Usuario</a></li>
						    <li><a href="../registros/rlibro.html">Libro</a></li>
						    <li><a href="../registros/rmuebles.html">Bienes Muebles</a></li>
						</ul>
				</div>
<!-- menu de Inventario -->
				<div class="btn-group">
				  	<button type="button" class="btn bg-negro text-blue" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  	<span class="glyphicon glyphicon-list-alt"></span>
				    Inventario <span class="caret"></span>
					</button>
						<ul class="dropdown-menu bg-negro">
						  	<li><a href="reportes_user.php">Usuario</a></li>
						    <li><a href="reportes_libros.php">Libro</a></li>
						    <li><a href="reportes_bienes.php">Bienes Muebles</a></li>
						</ul>
				</div>
<!-- menu de Contactanos -->
				 <div class="btn-group">
				 <li><a href="../registros/prestamo.html"><button type="button" class="btn bg-negro text-blue">
				 <span class="glyphicon glyphicon-export"></span>
				    Prestamo
				  </button></a></li>
				</div>
<!-- busqueda -->
				<div class="btn-group">
					<button type="button" class="btn bg-negro text-blue" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="glyphicon glyphicon-search"></span>
				    Busqueda <span class="caret"></span>
					</button>
						<ul class="dropdown-menu bg-negro">
						  	<li><a href="../registros/bsuario.html">Usuario</a></li>
						    <li><a href="">Libro</a>
						    	<ul class="dropdown-menu1">
						    		<li><a href="../registros/titulo.html">Por Titulo</a></li>
						    		<li><a href="../registros/codigo.html">Por Código</a></li>
						    		<li><a href="../registros/autor.html">Por Autor</a></li>
						    	</ul>
						    </li>
						</ul>
				</div>
				</div>
			</b>
			</nav>
		</ul>
	</div>
</div>


<center><div class="col-xs- 12 text-cal-1 text-desing">Inventario de Bienes Muebles</div></center>

<header>
<?php
    include ('../lib/funciones.php');
    $conexion=conexion();
    $consulta = mysql_query("SELECT * FROM bienes ORDER BY codigo ASC", $conexion);
?>
</header>

<table class="table table-hover col-xs-12 text-center">
   	<tr class="table info">
	    <th class="text-center">Código</th>
	    <th class="text-center">Mueble</th>
	    <th class="text-center">Descripción</th>
	    <th class="text-center">Fecha de Ingreso a la Institución</th>
	    <th class="text-center">Sala</th>
	    <th class="text-center">Cantidad</th>
    </tr>
           
    <?php
		while ($row = mysql_fetch_row($consulta)){   
		    echo "<tr>";  
		    echo "<td>$row[0]</td>";  
		    echo "<td>$row[1]</td>";  
		    echo "<td>$row[2]</td>";  
		    echo "<td>$row[3]</td>";
		    echo "<td>$row[4]</td>";
		    echo "<td>$row[5]</td>";   
		    echo "</tr>";  
    	} 
	?>
</table>

<div class="btn-group col-xs-offset-3 col-xs-6">
	<button type="button" data-toggle="modal" data-target="#modificar" class="col-xs-6 miboton2">Modificar <span class="glyphicon glyphicon-pencil"></span></button>
	<button type="button" data-toggle="modal" data-target="#eliminar" class="col-xs-6 miboton3">Eliminar <span class="glyphicon glyphicon-trash"></span></button>
</div>




<!--modal modificar-->
<div class="modal fade" id="modificar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
    	<div class="modal-content modal-header">
    		<div class="modal-header bg-negro">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<img src="../imagenes/e.png" width="500">
        	</div>	
        		<form action="../registros/modibienes.php" method="POST"> 
				<div class="col-xs-12 text-center">
					<div class="text-desing text-cal-2 text-center col-xs-12">Introducir el código del Mueble a Modificar
					    <input type="number" name="bn" placeholder="BT-1234" class="form-control" required=""> 
					    <button type="submit" class="miboton2">Siguiente <span class="glyphicon glyphicon-arrow-right"></span></button>
					</div>	 
				</div>
				</form>
    	</div>
  	</div>
</div>



<!--modal eliminar-->
<div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
    	<div class="modal-content modal-header">
    		<div class="modal-header bg-negro">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<img src="../imagenes/e.png" width="500">
			</div>

        		<form action="../registros/elibienes.php" method="POST"> 
				<div class="col-xs-12 text-center">
					<div class="text-cal-2 text-desing text-center col-xs-12">Introducir el código del Mueble a Eliminar
					    <input type="number" name="bn" placeholder="BT-1234" class="form-control" required="">
					    <button type="submit" class="miboton3">Eliminar <span class="glyphicon glyphicon-trash"></span></button>
					</div>
				</div>
				</form>
			
    	</div>
  	</div>
</div>


<!--pie de pagina-->
<footer><marquee> Biblioteca Publica Guillermina Ramirez de Mora <b> Atencion al Público:</b> Lunes a Viernes de 8:00 am a 5:00 pm</marquee></footer>
		<script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>

    </body>
</html>