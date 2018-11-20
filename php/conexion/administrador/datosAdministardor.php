<?php 
	include ('conexion.php');

	function guardarAdministrador(){
		//rescatamos los datos del folmulario
		$nombre =$_POST['nombre'];
		$apPaterno =$_POST['apPaterno'];
		$apMaterno =$_POST['apMaterno'];
		$ci =$_POST['ci'];
		$correo =$_POST['correo'];
		$contra =$_POST['contra'];
		$pais =$_POST['pais'];
		$dtpo =$_POST['dtpo'];
		$foto = addslashes(file_get_contents($FILES['foto']['tmp_name']));

		if(verificarCuenta($correo)){

		}else if(verificarAdministrador($ci)){

		}else{
			//insertamos los datos necesario en la tabla cuenta
				$queryCuenta="INSERT INTO cuenta(email,contrasena) VALUES ('$correo','$contra')";
				$resultadoCuenta = $conexion->query($queryCuenta);
				//insertamos en la tabla administrador
				$queryAdministrador="INSERT INTO administrador(ciadmin,nombreadmin,apepaadmin,apemaadmin,foto,departamentoAdmin,paisadmin,emailadmin)  VALUES ('$ci','$nombre','$apPaterno','$apMaterno','$foto','$dtpo','$pais','$correo')";
				$resultadoAdministradr = $conexion->query($queryAdministrador);
				if($resultadoAdministradr){
					echo "insertado";
				}else{
					echo "noinserto";
				}
		}
	}

	function verificarCuenta($correo){//verificamos que no exixta la cuenta en la base de datos
		$queryVerificar = "SELECT * FROM cuenta WHERE email = '$correo' ";
		$resultadoVerificacion = $conexion -> query($queryVerificar);
		if($row=$resultadoVerificacion->fetch_assoc()) {
		// en caso de encontrar uno igual recargamos la pagina
		echo "este correo ya existe. Intenta con otro";
	}

	function verificarAdministrador($ci){//verificar la llave primaria del administrador sea unica
		$queryVerificar2 = "SELECT * FROM administrador WHERE ciadmin = '$ci' ";
		$resultadoVerificacion2 = $conexion -> query($queryVerificar2);
		if($row2=$resultadoVerificacion2->fetch_assoc()) {
		// en caso de encontrar uno igual recargamos la pagina
		echo "este correo ya existe. Intenta con otro";
	}

 ?>

<?php 
	function lista_administradores(){
	include ('conexion.php');

	$administradores = ("SELECT * FROM administrador");
	$resultado_administrador=mysqli_query($conexion,$administradores);

	echo "<table border='1'; class='table table-hover';>";
	echo "<tr class='warning'>";
	echo "<td>Id</td>";
	echo "<td>Usaurio</td>";
	echo "<td>Ap. Paterno</td>";
	echo "<td>Ap. Paterno</td>";
	echo "<td>correo</td>";
	echo "<td>pais</td>";
	echo "<td>departamento</td>";
	echo "<td>Editar</td>";
	echo "<td>Borrar</td>";
	echo "</tr>";

	while(($arreglo=mysqli_fetch_row($resultado_administrador))== true){
		echo "<tr class='success'>";

			echo "<td>$arreglo[0]</td>";
			echo "<td>$arreglo[1]</td>";
			echo "<td>$arreglo[2]</td>";
			echo "<td>$arreglo[3]</td>";
			echo "<td>$arreglo[7]</td>";
			echo "<td>$arreglo[6]</td>";
			echo "<td>$arreglo[5]</td>";


			echo "<td><a href='actualizar.php?id=$arreglo[0]'></a></td>";
			echo "<td><a href='eliminar.php?id=$arreglo[0]'><img src='eliminar.png'></a></td>";
	}
}
?>


<?php 



 ?>