<!DOCTYPE html>
<html>
<head>
	<title>Administración</title>
	<style type="text/css">
		/* Contenedor del login */

		#login {
		   background-color: #77B0C5;
		   border-radius: 8px;
		   box-shadow: 3px 3px 10px 0px rgba(50, 50, 50, 0.75);
		   -moz-box-shadow: 3px 3px 10px 0px rgba(50, 50, 50, 0.75);
		   -webkit-box-shadow: 3px 3px 10px 0px rgba(50, 50, 50, 0.75);
		   margin-left: auto;
		   margin-right: auto;
		   margin-top: 10%;
		   max-width: 20em;
		   padding-bottom: 10px;
		   padding-top: 10px;
		}

		/* Etiquetas del formulario */

		label {
		   color: white;
		   display: block;
		   margin-bottom: 6px;
		   margin-left: 1.2em;
		}

		/* Campos del formulario */

		input[type="text"],
		input[type="password"] {
		   border: none;
		   border-radius: 6px;
		   display: block;
		   font-size: 1em;
		   height: 2em;
		   text-align: center;
		   width: 90%;
		   margin-left: auto;
		   margin-right: auto;
		}

		/* Botón */

		input[type="submit"] {
		   background-color: #A3A0A2;
		   border: none;
		   border-radius: 6px;
		   color: white;
		   display: block;
		   font-size: 1em;
		   height: 3em;
		   margin-left: auto;
		   margin-right: auto;
		   margin-top: -10px;
		   text-align: center;
		   width: 150px;
		}

		input[type="submit"]:hover {
		   cursor: pointer;
		   background-color: #A33D41;
		   opacity: 0.8;
		}
	</style>
</head>
<body>
	<header>
		
	</header>

	<div id="login">
		<form action= "/predicas/validar-login.php" method="GET">
	        <label>Usuario: </label>
	          <input type="text" name="user"/><br>

	        <label>Contraseña: </label>
	          <input type="password" name="password"/><br><br>

	          <input type="submit" value="Enviar"/>
	    </form>
	</div>
</body>
</html>