<?php 
	$conexion= new mysqli("localhost","root","","sesion");
	if ($conexion) {
		# code...
		echo "Conexion exitosa";
	}else{
		echo "conexion fallidas";
	}
 ?>