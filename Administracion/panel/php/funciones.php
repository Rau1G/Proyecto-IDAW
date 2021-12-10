<?php 
	function Ventas(){
		include '../../../php/database.php';
		$madarConsulta = mysqli_query($conectionSQL, "SELECT SUM(Precio) as 'total' FROM ventas;");
		include '../index.php';
		return mysqli_fetch_assoc($madarConsulta)['total'];
	}	
 ?>