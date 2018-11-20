<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 

	function anuncio_comun(){

		include ('../conexion.php');

		$sql1 = "SELECT nombreAnuncio, descripcion, precio FROM anuncion WHERE prioridad='1'";
		$respuesta = mysql_query($sql1, $conexion);

		if($row = mysql_fetch_array($respuesta)){
	  		$nombre = $row["nombreAnuncio"];
   			$descripcion = $row["descripcion"];
   			$precio = $row["precio"];
   		}
   		for ($i=0; $i <= 4 ; $i++) {
 ?>
 <section class="mt-3" id="normal">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
						<a href="#" class="nav-link p3">
					<div class="card btn btn-outline-primary p-2 ">
						<div class="card-body ">
								<img src="img/camara.png" class="img-fluid rounded-circle w-100" alt="person one">
								<p class="anuncioTitulo"><?php echo "nombre: " . $nombre ?></p>
								<p class="anuncio"><?php echo "descripcion: " . $descripcion ?></p>
								<p class="anuncio"><?php echo "Precio: $precio"; ?> </p>
						</div>
					</div>
					</a>
				</div>
			</div>
		</div>
	</section>


<?php 			
   		}
	}
?>


</body>
</html>