<?php
include('php/conexion_db.php');

$limit=21;
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 0;
if ($page<1) 
{
	$page=1;
}
$offset=($page-1)*$limit;

$consultacontenido = "SELECT * FROM contenido ORDER BY fecha DESC LIMIT $offset, $limit";
$resultadoTotal = "SELECT * FROM contenido ORDER BY fecha DESC";
$resultado_consulta = mysqli_query($conn, $consultacontenido);
$resultado_consulta_total = mysqli_query($conn, $resultadoTotal);
$num_total_registros = mysqli_num_rows($resultado_consulta_total); 

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Blog</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="/predicas/css/index.css" rel="stylesheet" type="text/css" />
</head>   

<body>

	<header>
		<?php include ('../menu/menu.html');?>
	</header>
	<div id="body">
	<div class="portada">
		<h1 class="title-portada center white">ENSEÑANZAS</h1>
		<img src="/img/predicas.jpg">
	</div>

	<div id="contenido">
		<?php
			if ($resultado_consulta) {
				while ($registro=mysqli_fetch_assoc($resultado_consulta)) {
		?>
	 	<div id="entrada">
	 		<div id="entrada-img">					
	 			<img src="/predicas/<?php echo $registro['img_primaria']; ?>">
			</div>			
			<div id="entrada-info">		
					<p class="title-entrada"><?php echo $registro['titulo']; ?></p>	
					<p class="autor-entrada"><?php echo $registro['autor']; ?></p>			
					<a class="btn-entrada" href="/predicas/entrada.php?id=<?php echo $registro['id'] ?>&name=<?php echo $registro['titulo'] ?>">Ver Más</a>	
			</div>	
		</div>		
		<?php }} ?>	

		<div id="pagination">
		<?php
			$totalPag=ceil($num_total_registros/$limit);
						$links=array();
						for($i=1; $i<=$totalPag; $i++)
						{
							$links[]="<a href=\"?page=$i\">$i</a>";
						}

						echo implode(" | ", $links);

		?>	
		</div>	
	</div>
	</div>

	<footer>
		<?php include ('../footer/footer.html');?>
	</footer>

</body>
</html>