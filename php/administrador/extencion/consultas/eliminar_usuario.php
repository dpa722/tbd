<?php 
	//coneccion con la base de datos
	include ('../../../conexion/conexion.php');

		$id=$_GET["id"];

		$consulta = "DELETE FROM anunciador WHERE ciAnunciador=$id";

		mysqli_query($conexion, $consulta) or die('Error en la consulta DELETE');
		mysqli_close($conexion);

		header("location:../lista_usuarios.php");
	
?>