<!DOCTYPE html>

<html lang="es">

<head>

        <title>Biblioteca Pública Guillermina Ramírez de Mora</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
       


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
<center><div class="text-desing text-cal-1">Registrar Bienes Muebles</div></center>



<?php
	include ('../lib/funciones.php');
	$conexion=conexion();
	$codigo=$_POST['bn'];
	$tabla='bienes';
	$condicion="WHERE codigo = $codigo";
	$campos="*";
	$orden="ORDER BY codigo";
	$num_campos=0;
	$num_filas=0;
	
	$consulta=busqueda($tabla,$campos,$condicion,$orden,$num_campos,$num_filas);
	if (empty($consulta))
	{
		
		?>
			<script>
		   				alert("Registro No Encontrado..."); 
						{              self.location.href='../reportes/reportes_bienes.php';
						 }
		</script>
			<?php
	}
	$codigo=$consulta[0][0];
	$mueble=$consulta[0][1];
	$descripcion=$consulta[0][2];
	$fecha=$consulta[0][3];
	$sala=$consulta[0][4];
	$cantidad=$consulta[0][5];
	
?>
<!--Registro-->

	<div class="tab-content">
		<!--registro de libros-->
    		<div role="tabpanel" class="tab-pane active" id="rmuebles"> 
 				<div class="form-group col-xs-6 col-xs-offset-3">
	 	    		<table class="table table-bordered">
						
						<form action="actubienes.php" method="POST">
						<div class="col-xs-12 text-center h4">Código:<input name="codigo" type="text" class="form-control" placeholder="BT-1234567" value="<?php echo $codigo ?>" required=""></div>

						<div class="col-xs-12 text-center h4">Nombre del Mueble:<input name="mueble" type="text" class="form-control" placeholder="Mesa" value="<?php echo $mueble ?>" required=""></div>

						<div class="col-xs-12 text-center h4">Descripción:<input name="descripcion" type="text" class="form-control" placeholder="Mesa Redonda de Madera" value="<?php echo $descripcion ?>" required=""></div>

						<div class="col-xs-4 text-center h4">Fecha de Ingreso a la Institución<input name="fecha" type="date" class="form-control" value="<?php echo $fecha ?>" required=""></div>

						<div class="col-xs-4 text-center h4" >sala donde se Encuentra: 

							<select class="form-control" name="sala" >
								<option value="<?php echo $sala ?>" disabled="" >Selecione la Sala</option>
                        		<option value="General" >General</option>
                        		<option value="Infantil">Infantil</option>
                        		<option value="Estadal">Estadal</option>
                        		<option value="Computacion">Computación</option>
                    		</select>  

            			</div>

						<div class="col-xs-4 text-center h4">Cantidad en Existencia<input name="cantidad" type="number" class="form-control" placeholder="0" value="<?php echo $cantidad ?>" required=""></div>

              			<div><button type="submit" class="miboton2 col-xs-6">Actualizar Mobiliario <span class="glyphicon glyphicon-refresh"></span></button></div>
              			</form>
              			<div><a href="../reportes/reportes_bienes.php"><button type="submit" class="miboton2 col-xs-6"><span class="glyphicon glyphicon-arrow-left">Volver</span></button></a></div>
            		</table>
        		</div>
    		</div>      	
    </div>

						

<!--pie de pagina-->
<footer><marquee> Biblioteca Publica Guillermina Ramirez de Mora <b> Atencion al Público:</b> Lunes a Viernes de 8:00 am a 5:00 pm</marquee></footer>
		<script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>

    </body>
</html>