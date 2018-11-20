<?php 
	//coneccion con la base de datos
	include ('../conexion/conexion.php');
	
	//rescatamos los datos del folmulario
	$nombre = $_POST['nombre'];
	$apPaterno = $_POST['apPaterno'];
	$apMaterno = $_POST['apMaterno'];
	$ci = $_POST['ci'];
	$correo = $_POST['correo'];
	$contra = $_POST['contra'];
	$pais = $_POST['pais'];
	$dtpo = $_POST['dtpo'];
	$img = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
	//primero verificamos qeu este bien el correo y qeu no sea igual a otro existente 
	$queryVerificar = "SELECT * FROM cuenta WHERE email = '$correo' ";
	$resultadoVerificacion = $conexion -> query($queryVerificar);
	if($row=$resultadoVerificacion->fetch_assoc()) {
		// en caso de encontrar uno igual recargamos la pagina
		echo "este correo ya existe. Intenta con otro";
	}
	$queryVerificar2 = "SELECT * FROM administrador WHERE ciadmin = '$ci' ";
	$resultadoVerificacion2 = $conexion -> query($queryVerificar2);
	if($row2=$resultadoVerificacion2->fetch_assoc()) {
		// en caso de encontrar uno igual recargamos la pagina
		echo "este correo ya existe. Intenta con otro";
	}

	//insertamos los datos necesario en la tabla cuenta
	$queryCuenta="INSERT INTO cuenta(email,contrasena) VALUES ('$correo','$contra')";
	$resultadoCuenta = $conexion->query($queryCuenta);
	//insertamos en la tabla administrador
	$queryAdministrador="INSERT INTO administrador(ciadmin,nombreadmin,apepaadmin,apemaadmin,foto,departamentoadmin,paisadmin,emailadmin)  VALUES ('$ci','$nombre','$apPaterno','$apMaterno','$img','$dtpo','$pais','$correo')";
			$resultadoAdministrador = $conexion->query($queryAdministrador);
			if(resultadoAdministrador){
				echo "se inserto ";
			}else{
				echo "no se inserto";
			}		
 ?>
