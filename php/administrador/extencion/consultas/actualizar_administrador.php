<?php  

	//coneccion con la base de datos
	include ('../../../conexion/conexion.php');

		$ci=$_POST["ci"];
		$nombre=$_POST["nombre"];
		$paterno=$_POST["apPaterno"];
		$materno=$_POST["apMaterno"];
		$contraseña=$_POST["contra"];
		$correo=$_POST["correo"];
		$pais=$_POST["pais"];
		$departamento=$_POST["dtpo"];



	$consulta1 = "UPDATE cuenta SET email='$correo' contrasena='$contraseña' WHERE email=$correo ";
		$consulta2 = "UPDATE administrador SET ciadmin='$ci' nombreadmin='$nombre' apepaadmin='$paterno' apemaadmin='$materno'  departamentoAdmin='$departamento' paisadmin='$pais' emailadmin = '$correo' 
					 WHERE ciadmin=$ci";
		

	mysqli_query($conexion, $consulta1) or die('Error en la consulta UPDATE 1');
		mysqli_query($conexion, $consulta2) or die('Error en la consulta UPDATE 2');
		mysqli_close($conexion);

		header("location: lista_administradores");
	

?>