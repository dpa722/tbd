<!DOCTYPE html>
<html>
<head>
	<title>Esta es la sesion del usuario </title>
</head>
<body>
	<?php 
		session_start();
		$usuario = $_SESSION['u_usuario'];
		if (isset($_SESSION['u_usuario'])) {
			echo "Sesion exitosa\n Binvenido ";
			echo "<br>";
			echo $usuario;
			echo "<br>";
			echo "<a href='cerrar_sesion.php'>Cerrar Sesion</a>";
		}else{
			header("Location: accederCuenta.php");
		}	
	 ?>
</body>
</html>