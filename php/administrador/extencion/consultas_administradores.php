<?php 
function lista_administradores(){
	include ('../../conexion/conexion.php');

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



	while($arreglo=mysqli_fetch_array($resultado_administrador)){
		echo "<tr class='success'>";

			echo "<td>$arreglo[0]</td>";
			echo "<td>$arreglo[1]</td>";
			echo "<td>$arreglo[2]</td>";
			echo "<td>$arreglo[3]</td>";
			echo "<td>$arreglo[7]</td>";
			echo "<td>$arreglo[6]</td>";
			echo "<td>$arreglo[5]</td>";


			echo "<td><a href='editar_administrador.php?id=$arreglo[0] & nombre=$arreglo[1] & apellido=$arreglo[2] & materno=$arreglo[3] & correo=$arreglo[7] & departamento=$arreglo[6] & pais=$arreglo[5]'><img src='actualizar.png'></a></td>";
			echo "<td><a href='consultas/eliminar_administrador.php?id=$arreglo[0]'><img src='eliminar.png'></a></td>";
	}
}
?>
<?php 
	function lista_usuarios(){
	include ('../../conexion/conexion.php');

	$anunciador = ("SELECT * FROM anunciador");
	$resultado_anunciador=mysqli_query($conexion,$anunciador);


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



	while($arreglo=mysqli_fetch_array($resultado_anunciador )){
		echo "<tr class='success'>";

			echo "<td>$arreglo[0]</td>";
			echo "<td>$arreglo[1]</td>";
			echo "<td>$arreglo[2]</td>";
			echo "<td>$arreglo[3]</td>";
			echo "<td>$arreglo[7]</td>";
			echo "<td>$arreglo[6]</td>";
			echo "<td>$arreglo[5]</td>";


			echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='actualizar.png'></a></td>";
			echo "<td><a href='consultas/eliminar_usuario.php?id=$arreglo[0]'><img src='eliminar.png'></a></td>";
	}
}
?>

