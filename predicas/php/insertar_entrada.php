<?php 
include('conexion_db.php');

//Subir Imagenes
	$img_name1 = $_FILES['img_1']['name'];
	$img_ruta1 = $_FILES['img_1']['tmp_name'];
	$img_name2 = $_FILES['img_2']['name'];
	$img_ruta2 = $_FILES['img_2']['tmp_name'];

	$new_image_name1 = 'img_' . date('Y-m-d-H-i-s') . '_' . uniqid() . '.jpg';
	$new_image_name2 = 'img_' . date('Y-m-d-H-i-s') . '_' . uniqid() . '.jpg';
	
	$img_destino1 = "/img-blog/".$new_image_name1;
	$img_destino2 = "/img-blog/".$new_image_name2;
	$img_destinocopy1 = "../img-blog/".$new_image_name1;
	$img_destinocopy2 = "../img-blog/".$new_image_name2;

	copy($img_ruta1, $img_destinocopy1);	
	copy($img_ruta2, $img_destinocopy2);

$titulo = $_POST['txtTitulo'];
$autor = $_POST['txtAutor'];
$fecha = $_POST['fecha'];
$entrada = $_POST['txtEntrada'];
$texto_2 = $_POST['txtTexto_2'];

  $sql = "INSERT INTO contenido(titulo,autor,img_primaria,img_secundaria,fecha,texto) VALUES('" . $titulo . "', '" . $autor . "', '" . $img_destino1 . "', '" . $img_destino2 . "', '" . $fecha . "', '" . $entrada . "')";

  $resultado = mysqli_query($conn, $sql);

  mysqli_close($conn);


if ($resultado) {
	header ("location:../form-entrada.php?msj=1");
}
  


 ?>