<!DOCTYPE html>

<html lang="es">

<head>

        <title>Biblioteca Pública Guillermina Ramírez de Mora</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.css" rel="stylesheet" tipe="text/css">
       
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
				<img src="../imagenes/e.png" width="300" height="100" title="Blue agency" class="col-xs-4">
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
				  			<li><a href="historia.html">Historia</a></li>
				    		<li><a href="mision.html">Misión</a></li>
				   			<li><a href="vision.html">Visión</a></li>
				 		</ul>
				</div>
<!-- menu de Registro -->
				<div class="btn-group">
					<button type="button" class="btn bg-negro text-blue" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="glyphicon glyphicon-edit"></span>
				    Registro <span class="caret"></span>
					</button>
						<ul class="dropdown-menu bg-negro">
						  	<li><a href="rusuario.html">Usuario</a></li>
						    <li><a href="rlibro.html">Libro</a></li>
						    <li><a href="rmuebles.html">Bienes Muebles</a></li>
						</ul>
				</div>
<!-- menu de Inventario -->
				<div class="btn-group">
				  	<button type="button" class="btn bg-negro text-blue" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  	<span class="glyphicon glyphicon-list-alt"></span>
				    Inventario <span class="caret"></span>
					</button>
						<ul class="dropdown-menu bg-negro">
						  	<li><a href="../reportes/reportes_user.php">Usuario</a></li>
						    <li><a href="../reportes/reportes_libros.php">Libro</a></li>
						    <li><a href="../reportes/reportes_bienes.php">Bienes Muebles</a></li>
						</ul>
				</div>
<!-- menu de Contactanos -->
				<div class="btn-group">
					<li><a href="prestamo.html"><button type="button" class="btn bg-negro text-blue">
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
						  	<li><a href="bsuario.html">Usuario</a></li>
						    <li><a href="">Libro</a>
						    	<ul class="dropdown-menu1">
						    		<li><a href="titulo.html">Por Titulo</a></li>
						    		<li><a href="codigo.html">Por Código</a></li>
						    		<li><a href="autor.html">Por Autor</a></li>
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



<?php
	include ('../lib/funciones.php');
	$conexion=conexion();
	$com=$_POST['bus'];
	$tabla='libros';
	$condicion="WHERE titulo = '$com'";
	$campos="*";
	$orden="ORDER BY titulo";
	$num_campos=0;
	$num_filas=0;
	
	$consulta=busqueda($tabla,$campos,$condicion,$orden,$num_campos,$num_filas);
	if (empty($consulta))
	{
		
		?>
			<script>
		   				alert("Registro No Encontrado..."); 
						{              self.location.href='titulo.html';
						 }
		</script>
			<?php
	}
	$titulo=$consulta[0][0];
	$autor=$consulta[0][1];
	$codigo=$consulta[0][2];
	$editorial=$consulta[0][3];
	$anio=$consulta[0][4];
	$volumen=$consulta[0][5];
	$clasificacion=$consulta[0][6];
	$cantidad=$consulta[0][7];

								
?>

<center><div class="col-xs- 12 text-cal-1 text-desing">Datos del Libro</div></center>

<div class="tab-content">
	<!--Busqueda de libros por codigo-->
    		<div role="tabpanel" class="tab-pane active" id="rlibro">        
        		<div class="form-group col-xs-6 col-xs-offset-3">
         			<table class="table table-bordered">
         				
         				<div class="col-xs-12 text-center h4">Titulo del Libro:<input type="text" name="titulo" class="form-control" disabled="" value="<?php echo $titulo ?>"></div>

			            <div class="col-xs-12 text-center h4">Autor(es):<input class="form-control" type="text" name="autor" disabled=""  value="<?php echo $autor ?>"></div>

			            <div class="col-xs-12 text-center h4">Código del Libro:<input class="form-control" type="number" name="codigo" disabled=""  value="<?php echo $codigo ?>" ></div>

			            <div class="col-xs-12 text-center h4">Editorial:<input class="form-control" type="text" name="editorial" disabled=""  value="<?php echo $editorial ?>"></div>

			            <div class="col-xs-6 text-center h4">Fecha de Edición<input class="form-control" type="date" name="anio" disabled=""  value="<?php echo $anio ?>"></div>

			            <div class="col-xs-6 text-center h4">Volumenes<input class="form-control" type="number" name="volumen" disabled=""  value="<?php echo $volumen ?>"></div> 

			            <div class="col-xs-6 text-center h4">Clasificación por sala:<input class="form-control" type="text" name="clasificacion" disabled="" value="<?php echo $clasificacion ?>"></div>

			            <div class="col-xs-6 text-center h4">Cantidad en Existencia<input class="form-control" type="text" name="cantidad" disabled="" value="<?php echo $cantidad ?>"></div>
			            
			            <form action="modilibro.php" method="POST">
			       		<input type="hidden" type="number" name="cod" value="<?php echo $codigo ?>">
	            		<div><button type="submit" class="miboton3 col-xs-6">Modificar <span class="glyphicon glyphicon-pencil"></span></button></a></div>
	            		</form>

	            		<form action="elilibro.php" method="POST">
			       		<input type="hidden" type="number" name="cod" value="<?php echo $codigo ?>">
		            	<div><button type="submit" class="miboton3 col-xs-6">Eliminar <span class="glyphicon glyphicon-trash"></span></button></a></div>
		           		</form>

		            	<div><a href="titulo.html"><button type="submit" class="miboton2 col-xs-12">Buscar otro Libro <span class="glyphicon glyphicon-search"></span></button></a></div>

            	</table>
        	</div>
    	</div>
    </div>
</div>




<!--pie de pagina-->
<footer><marquee> Biblioteca Publica Guillermina Ramirez de Mora <b> Atencion al Público:</b> Lunes a Viernes de 8:00 am a 5:00 pm</marquee></footer>

		<script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>