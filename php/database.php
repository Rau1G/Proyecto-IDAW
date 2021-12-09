<?php  
	$conectionSQL = mysqli_connect("localhost", "root", "", "paleteria");
	if(!$conectionSQL){
		echo "Error: No se establecio la conexion";
		exit;
	}
?>