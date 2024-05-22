<!DOCTYPE html>
<html lang="es">

<head>
	<title>Grupos de Amistad</title>
	<link rel="shortcut icon" href="/img/icons/icon.ico">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="/gruposdeamistad/gruposdeamistad.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

</head>	
<body>
	<header>
		<?php include ('../menu/menu.html');?>
	</header>

	<div class="portada">
		<h1 class="title-portada center white">GRUPOS DE AMISTAD</h1>
		<img src="/img/nosotros.jpg">
	</div>

	<div class="section1">		
		<h1 class="title red center">¿Quienes hacen parte de un Grupo de Amistad?</h1><br>
		<h3 class="text black center light">El grupo de amistad está encabezado por una pareja de líderes, quienes a su vez, pertenecen a otro grupo, formando así una red. Estos grupos son más que simples reuniones. El interés primordial de cada grupo es que las personas que asisten a él, decidan afianzarse y servir a Dios.</h3>	
	</div>

	<div class="section2">
		<h2 class="title white center">¿Quieres pertenecer a uno?</h2><br>
		<h3 class="text white center light">Para nosotros es un placer que puedas pertenecer a uno de nuestros Grupos de Amistad y así poder servirte y ayudarte en el deseo de conocer más a Dios.</h3><br>
		<h3 class="text white center light">Regístrate colocando todos tus datos y te responderemos con la ubicación de tu nuevo Grupo de Amistad.</h3>
		
		<button id="btn-abrir-popup" class="btn-abrir-popup btn-4 text white" style="font-size: 16px;">
		Inscribirme ahora
		</button>		
	</div>

	<div class="contenedor">
		<div class="overlay" id="overlay">
			<div class="popup" id="popup">
				<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
				<h3 class="title black">Inscríbete en un Grupo de Amistad</h3>
				<form action="/gruposdeamistad/form-gruposdeamistad.php">
					<div class="contenedor-inputs">
						<input type="text" name="nombre" placeholder="Nombre" required>
						<input type="text"  name="apellidos" placeholder="Apellidos" required>
						<input type="email" name="email" placeholder="Correo electrónico" required>
						<input type="tel" name="telefono" placeholder="Télefono" required>
					</div>
					<input type="submit" class="btn-submit" value="Enviar">
				</form>
			</div>
		</div>
	</div>

	<div class="section1">
		<h2 class="title black bold center">Descargue nuestro devocional</h2><br>
		<h3 class="text black center light">Recibe una palabra fresca de nuestros Pastores Ricardo y Diana Álvarez.</h3>
		<a href="/pdfs/lifebook.pdf" download="LIFEBOOK-MAYO2019"><button class="btn-3 text white center" style="font-size: 16px;">Descargar</button></a>	
	</div>

	<footer>
		<?php include ('../footer/footer.html');?>
	</footer>

	<script type="text/javascript">
	var btnAbrirPopup = document.getElementById('btn-abrir-popup'),
	overlay = document.getElementById('overlay'),
	popup = document.getElementById('popup'),
	btnCerrarPopup = document.getElementById('btn-cerrar-popup');

	btnAbrirPopup.addEventListener('click', function(){
		overlay.classList.add('active');
		popup.classList.add('active');
	});

	btnCerrarPopup.addEventListener('click', function(e){
		e.preventDefault();
		overlay.classList.remove('active');
		popup.classList.remove('active');
	});
	</script>

</body>
</html>