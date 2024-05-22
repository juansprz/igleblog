<?php  
  
  $destino = "oficinacic@hotmail.com";
  $nombre = $_POST["nombre"];
  $apellidos = $_POST["apellidos"];
  $telefono = $_POST["telefono"];
  $email = $_POST["email"];
  $asunto = "Prueba";

  $contenido = "Nombre: " . $nombre . "Apellidos: " . $apellidos . "Correo: " . $email . "Telefono: " . $telefono;

  $anviar = mail($destino, $asunto, $contenido);

  if(!$anviar){ 

    echo "<script>";
    echo "alert('Tu mensaje ha sido enviado correctamente, te estaremos contactando muy pronto.');";  
    echo "window.location = '/gruposdeamistad/index.php';";
    echo "</script>";

    }

?>