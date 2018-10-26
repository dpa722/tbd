<?php 
	/*$conexion= new mysqli("localhost","root","","sesion");
	if ($conexion) {
		# code...
		echo "Conexion exitosa";
	}else{
		echo "conexion fallidas";
	}*/

	$servidor 	= 'localhost';
	$username 	= 'root';
	$password 	= '';
	$db			= 'olx_db';

	$conexion = mysqli_connect($servidor, $username, $password, $db)
			or die ('Error en la conexion de BD:'.mysqli_connect_error());
 ?>