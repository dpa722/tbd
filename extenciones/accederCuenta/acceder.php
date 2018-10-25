<?php 
// iniciamos la sesion del usuario 
	session_start();
// variables del usuario
	$usuario = $_POST['usuario'];
	$contrasegna = $_POST['contra'];

	include("conexion.php");
	
	$proceso = $conexion->query("SELECT * FROM cuenta WHERE email ='$usuario' AND contrasena ='$contrasegna'");

	if($resultado = mysqli_fetch_array($proceso)){
		$_SESSION['u_usuario'] = $usuario;
		header("Location: sesion.php");
		
	}else{
		header("Location: accederCuenta.php");
		
	}

 ?>