<?php 
// iniciamos la sesion del usuario 
	session_start();
// variables del usuario
	$usuario = $_POST['usuario'];
	$contrasegna = $_POST['contra'];

	include("../conexion/conexion.php");
	
	$proceso1 = $conexion->query("SELECT * FROM cuenta WHERE email ='$usuario' AND contrasena ='$contrasegna' AND tipo ='usuario'");
	$proceso2 = $conexion->query("SELECT * FROM cuenta WHERE email ='$usuario' AND contrasena ='$contrasegna' AND tipo ='admin'");

	if($resultado = mysqli_fetch_array($proceso1)){
		$_SESSION['u_usuario'] = $usuario;
		header("Location: ../usuario/usuario.php");
		
	}else if($resultado = mysqli_fetch_array($proceso2)){
		$_SESSION['u_usuario'] = $usuario;
		header("Location: ../administrador/administrador.php");
	}else{
		//echo '<script> alert("usuario o contraseña incorrecta")</script>';
		echo '<script> location.href = "ingresar.php" </script>';	
	}
 ?>