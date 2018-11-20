<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
<?php 
	function anuncio_plata(){		
		include ('../conexion.php');

		$nombre = "";
		$descripcion ="";
		$precio = "";

		$anuncio_plata = ("SELECT * FROM anuncio WHERE prioridad=2");
		$respuesta=mysqli_query($conexion,$anuncio_plata)  or die('Error en la consulta DELETE');

		for ($i=0; $i < 4 ; $i++) { 

			$arreglo=mysqli_fetch_array($respuesta);	
	  		$nombre = $arreglo[1];
   			$descripcion = $arreglo[3];
   			$precio = $arreglo[6];
 ?>	
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<a href="#" class="nav-link p3">
						<div class="card btn btn-outline-primary p-2 ">
							<div class="card-body ">
								<img src="img/camara.png" class="img-fluid rounded-circle w-100" alt="person one">
								<p class="anuncioTitulo"><?php echo "nombre: " . $nombre ?></p>
								<p class="anuncio"><?php echo "descripcion: " . $descripcion ?></p>
								<p class="anuncio"><?php echo "Precio: $precio" ?> </p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>


<?php 						
   	}
}
?>


 <?php 
	function anuncio_comun(){
		include ('conexion.php');
		$nombre = "";
		$descripcion ="";
		$precio = "";

		$anuncio_comun = ("SELECT * FROM anuncio WHERE prioridad=1");
		$respuesta=mysqli_query($conexion,$anuncio_comun)  or die('Error en la consulta DELETE');

		for ($i=0; $i < 4 ; $i++) { 

			$arreglo=mysqli_fetch_array($respuesta);
	  		$nombre = $arreglo[1];
   			$descripcion = $arreglo[3];
   			$precio = $arreglo[6];
?>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<a href="#" class="nav-link p3">
						<div class="card btn btn-outline-primary p-2 ">
							<div class="card-body ">
								<img src="img/camara.png" class="img-fluid rounded-circle w-100" alt="person one">
								<p class="anuncioTitulo"><?php echo "nombre: " . $nombre ?></p>
								<p class="anuncio"><?php echo "descripcion: " . $descripcion ?></p>
								<p class="anuncio"><?php echo "Precio: $precio" ?> </p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
<?php 						
   	}
}
?>