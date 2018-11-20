<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>

	<link rel="stylesheet" type="text/css" href="../../css/index/index.css">

	<!-- bootstrap  -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!-- jquery libraires -->
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#barra").addClass('inicio');
			$(window).on('scroll',function(){
				if($(window).scrollTop()){
					$("#barra").removeClass('inicio');
					$('#barra').addClass('subir');
				}else{
					$('#barra').removeClass('subir');
					$('#barra').addClass('inicio');
				}
			});
		});
	</script>

</head>
<body>
<?php 

	function anuncio_comun(){

		include ('conexion.php');

		$nombre = "";
		$descripcion ="";
		$precio = "";

		$anuncio_comun = ("SELECT * FROM anuncio WHERE prioridad=1");
		$respuesta=mysqli_query($conexion,$anuncio_comun)  or die('Error en la consulta DELETE');



		while($arreglo=mysqli_fetch_array($respuesta)){	
	  		$nombre = $arreglo[1];
   			$descripcion = $arreglo[3];
   			$precio = $arreglo[6];

   		
   		
   		
 ?>
 	<section class="mt-3" id="plata">
		<div class="container ">
			<div class="row">

				<div class="col-md-3">
					<a href="#" class="nav-link p3">
						<div class="card btn btn-outline-primary p-2 ">

							<div class="card-body ">

								<img src="img/camara.png" class="img-fluid rounded-circle w-100" alt="person one">
								<p class="anuncioTitulo">nombre del anuncio</p>
								<p class="anuncio">descripcion</p>
								<p class="anuncio">Precio: monto</p>

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



	<!-- bootstrap js -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>