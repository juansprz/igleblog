<?php
include('conexion_db.php');
$id = $_REQUEST['id'];
$img_name_r1 = $_REQUEST['img1'];
$img_name_r2 = $_REQUEST['img2'];

//Subir Imagenes
	
	$img_ruta1 = $_FILES['img_1']['tmp_name'];
	$img_ruta2 = $_FILES['img_2']['tmp_name'];
	
	$img_destinocopy1 = "..".$img_name_r1;
	$img_destinocopy2 = "..".$img_name_r2;

	copy($img_ruta1, $img_destinocopy1);	
	copy($img_ruta2, $img_destinocopy2);

$titulo=$_POST["txtTitulo"];
$autor=$_POST["txtAutor"];
$texto=$_POST["txtEntrada"];
$fecha=$_POST["fecha"];

$actualizardatos = "UPDATE contenido SET titulo='$titulo', autor='$autor', texto='$texto', fecha='$fecha' WHERE id='$id'";
$resultado_consulta = mysqli_query($conn, $actualizardatos);

if ($resultado_consulta)
	header ("location:../form-editar-entrada.php?id=$id&msj=1"); //x=1 es actualizado correctamente
else
	header ("location:../form-editar-entrada.php?msj=2"); //x=2 no se puede actualizar

?>