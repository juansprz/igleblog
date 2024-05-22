<?php
include('php/conexion_db.php');
$id = $_REQUEST['id'];

$query = "DELETE FROM contenido WHERE id = '$id'";
$result = mysqli_query($conn, $query); 
	if (!$result) {
	 	echo "No se borró correctamente el registro";
	 };

if (!unlink($_GET['nameimg'])){
echo 'No se pudo borrar el archivo la imagen, comuniquese con el administrador';
}

if (!unlink($_GET['nameimg2'])){
echo 'No se pudo borrar el archivo la imagen, comuniquese con el administrador';
}

if ($result) {
	header ("location:/predicas/editar-entrada.php");
}

?>
