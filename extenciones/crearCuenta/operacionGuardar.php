<?php 
	include("conexion.php");

	$email = $_POST['email'];
	$contra = $_POST['contra'];
	$ci = $_POST['ci'];
	$nombre = $_POST['nombre'];
	$paterno = $_POST['ap'];
	$materno = $_POST['am'];
	$pais = $_POST['pais'];
	$dpto = $_POST['dpto'];
//primero verificamos qeu este bien el correo y qeu no sea igual a otro existente 
	$queryVerificar = "SELECT * FROM cuenta WHERE email = '$email' ";
	$resultadoVerificacion = $conexion -> query($queryVerificar);
	if($row=$resultadoVerificacion->fetch_assoc()) {
		// en caso de encontrar uno igual recargamos la pagina
		header("Location:crearCuenta.php");
	}else{
		// sino pasamos a verificar el carnet de identidad ya que tiene que ser unico 
		$queryVerificar2 = "SELECT * FROM anunciador WHERE ciAnunciador = '$ci' ";
		$resultadoVerificacion2 = $conexion -> query($queryVerificar2);
		if($row2=$resultadoVerificacion2->fetch_assoc()) {
			// si hay uno ya existente pasamos a recargar la pagina
			header("Location: crearCuenta.php");
		}else{

			// sino se da luz blanca a la insercion de los datos
			echo "pasamos a insertar en las tablas correspondientes";
			// primero insertamos en la tabla usuario 
			$queryCuenta="INSERT INTO cuenta(email,contrasena) VALUES ('$email','$contra')";
			$resultadoCuenta = $conexion->query($queryCuenta);
			if ($resultadoCuenta) {
				# code...
				echo "<br>";
				echo "cuenta insertada exitosamente ";
			}else{
				echo "<br>";
				echo "insercion fallida";
			}
			// ahora insertamos en la tabla anunciador
			$queryAnunciador="INSERT INTO anunciador(ciAnunciador,nombreAnun,apePaAnun,apeMaAnun,dptoAnun,paisAnun,emailAnun) VALUES ('$ci','$nombre','$paterno','$materno','$dpto','$pais','$email')";
			$resultadoAnunciador = $conexion->query($queryAnunciador);
			if ($resultadoAnunciador) {
				# code...
				echo "<br>";
				echo "anunciador insertado exitosamente";
			}else{
				echo "<br>";
				echo "insercion anunciador fallida";
			}
			
			echo "<br>";
			echo "todos los datos han sido insertados";
		}
	}
	
?>