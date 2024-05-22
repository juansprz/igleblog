<?php

	$conn = mysqli_connect("localhost", "root", "", "db_cic");

	if (!$conn) {
		echo "La conexión ha fallado: " , mysql_error();

		exit(); 
	}



?>