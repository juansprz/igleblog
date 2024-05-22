<?php
include('php/conexion_db.php');
session_start();
extract($_REQUEST);
$id = $_REQUEST['id'];
$titulo = $_REQUEST['name'];

$consultaentrada = "SELECT * FROM contenido WHERE id ='".$id."'";
$resultado_consulta = mysqli_query($conn, $consultaentrada);

$registro=mysqli_fetch_assoc($resultado_consulta);

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?php echo $titulo; ?></title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="/predicas/css/entrada.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript">
	function MM_openBrWindow(theURL,winName,features) { //v2.0
	window.open(theURL,winName,features);
	}
	</script>
</head>
<body>

	<header>
		<?php include ('../menu/menu.html');?>
	</header>

	<div id="portada-entrada">
		<img src="/predicas/<?php echo $registro['img_primaria']; ?>">
		<div id="text-portada-entrada">
			<p class="title-entrada"><?php echo $registro['titulo']; ?></p>	
			<p class="autor-entrada"><?php echo $registro['autor']; ?></p>
			<p class="fecha-entrada"><?php echo $registro['fecha']; ?></p>
		</div>
	</div>	

 <div id="contenido">
	<textarea class="comentario-entrada"><?php echo $registro['texto']; ?></textarea>

	<div id="contenido-right">
		<div id="entrada-img-secundaria">	 			
		 	<img src="/predicas/<?php echo $registro['img_secundaria']; ?>">
		</div>

		<div id="redes-entrada">
			<p class="title-redes-entrada">¡Comparte esta prédica!</p>
			<div id="fb-root"></div>
			<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.3"></script>
			<div class="fb-share-button" data-href="iglesiacic.org" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
			<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		</div>
	</div>							
</div>

<footer>
		<?php include ('../footer/footer.html');?>
</footer>

</body>
</html>