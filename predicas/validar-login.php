<?php
   $user = $_GET['user'];
   $password = $_GET['password'];

   if (($user == "admin") AND ($password == "12345")) {
      echo "Bienvenido ".$user;
      header('Location: admin-home.php');
   } else {
      echo "¡Usuario o contraseña incorrectos!";
      echo '<br><a href="'.$_SERVER['HTTP_REFERER'].'">Volver</a>';
   }
?>