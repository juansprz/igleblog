<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nueva Entrada</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Estilos -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="/predicas/css/formulario.css" rel="stylesheet">
	<!-- Scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

	<a href="/predicas/admin-home.php" id="btn-back">VOLVER</a>
		<?php
		$msj=$_REQUEST['msj'];				
			
		if ($msj==1)
			echo "<h4> Se agregó correctamente la entrada</h4>";
		if ($msj==2)
			echo "<h4> Ocurrió un problema, intentalo de nuevo</h4>";
		?>
	<div class="container">

		<form action="/predicas/php/insertar_entrada.php" method="POST" enctype="multipart/form-data">
			<h1>Agregar Entrada</h1>
				<div class="form-group">
					<h3>Titulo</h3>
					<input type="text" name="txtTitulo" class="form-control" id="txtTitulo" autofocus required placeholder="Ingresa el titulo de la entrada">
				</div>

				<div class="form-group">
					<h3>Autor</h3>
					<input type="text" name="txtAutor" class="form-control" id="txtAutor" autofocus required placeholder="Autor de la entrada">
				</div>

				<div class="form-group">
					<h3 >Imagen Portada</h3>
					<input type="file" name="img_1" class="form-control" id="img_1"  required placeholder="Selecciona una imagen para la portada">
				</div>

				<div class="form-group">
					<h3 for="titulo">Entrada</h3>
					<textarea type="text" name="txtEntrada" class="form-control" id="txtEntrada" autofocus required placeholder="Escribe tu articulo"></textarea>
				</div>

				<div class="form-group">
					<h3 for="titulo">Fecha de la entrada</h3>
					<input type="date" name="fecha" class="form-control" id="fecha" autofocus required placeholder="Ingresa la fecha de la entrada">
				</div>

				<div class="form-group">
					<h3 for="titulo">Imagen Secundaria</h3>
					<input type="file" name="img_2" class="form-control" id="img_2"  required placeholder="Selecciona una imagen diferente">
				</div>

				<button type="submit" class="btn btn-success">Publicar</button>
		</form>

		
	</div>
</body>
</html>

