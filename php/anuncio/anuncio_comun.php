<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>anuncio comun</title>
	<link rel="stylesheet" type="text/css" href="../../css/index/index.css">

	<!-- bootstrap  -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


	<!-- jquery libraires -->
	<script type="text/javascript" src="../../js/jquery-3.1.1.min.js"></script>
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

<!-- ************************************ -->
	<!-- navbar -->
	<!-- ***************************************** -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="barra">
  		<div class="container">
  			<a class="navbar-brand font-weight-bold" href="#" >Página de anuncios</a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  			</button>
  			<div class="collapse navbar-collapse" id="navbarNav">
    		<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<form class="">
							<input type="text" name="buscar" placeholder="¿Qué es lo que estas buscando?" class="busqueda">
							<input type="submit" name="btnBuscar" value="BUSCAR" class="botonBuscar btn btn-outline-primary p-1 mr-5">
						</form>

					</li>
      			<li class="nav-item active">
        			<a class="nav-link " href="../ingresar/ingresar.php">Ingresar</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="../crearCuenta/registrarse.php">Registro</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="../ayuda/ayuda.php">Ayuda</a>
      			</li>
    		</ul>
    		<a href="../crearCuenta/registrarse.php" class="btn btn-outline-primary p-3 ml-3">
    			<img src="img/camara.png">
    			VENDER
    		</a>
  			</div>
  		</div>
	</nav><br><br><br>

	<!-- *************************************************************** -->
	<!-- 		categorias -->
	<!-- **************************************************************** -->
	<section class="container text-center ">
		<p class="nombre p-2 m-2 ">Filtrar por categoria</p>
		<div class="row">
			<div class="accordion w-100" id="accordionExample">
				<!--incluimos el codigo php de las categorias en este espacio  -->
				<?php
				include("../loginMethods/categorias.php");
				?>
			</div>
		</div>
	</section>




	<?php 
		include ('../conexion/conexion.php');
		$nombre = "";
		$descripcion ="";
		$precio = "";
		$anuncio_comun = ("SELECT * FROM anuncio WHERE prioridad=1");
		$respuesta=mysqli_query($conexion,$anuncio_comun)  or die('Error en la consulta DELETE');


		for ($i=0; $i < 6 ; $i++) { 

			$arreglo=mysqli_fetch_array($respuesta);
	  		$nombre = $arreglo[1];
   			$descripcion = $arreglo[3];
   			$precio = $arreglo[6];
?>
	<section class="mt-3" id="normal">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<a href="#" class="nav-link p3">
						<div class="card btn btn-outline-primary p-2 ">
							<div class="card-body ">
								<img src="/tbd/img/camara.png" class="img-fluid rounded-circle w-100" alt="person one">
								
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
				<p class="anuncioTitulo"><?php echo "nombre: " . $nombre ?></p><br>
				<p class="anuncio"><?php echo "descripcion: " . $descripcion ?></p><br>
				<p class="anuncio"><?php echo "Precio: $precio" ?> </p><br>
				</div>	
			</div>
		</div>
	</section>
<?php 						
}
?>




















<!-- ************************************************************ -->
<!-- 		Footer -->
<!-- ************************************************************ -->

<footer class="mt-2 bg-light p-2 border border-dark">
	<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-6">
					<div class="footer">
						<h3 class="footer-title">Informacion</h3>
						<ul class="footer-links">
							<li><a href="#">¿Quienes Somos?</a></li>
							<li><a href="#">Contacto y ayuda</a></li>
							<li><a href="#">Seguridad</a></li>
							<li><a href="#">Terminos & Condiciones</a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix visible-xs"></div>
				<div class="col-md-3 col-xs-6">
					<div class="footer">
						<h3 class="footer-title">Servicios</h3>
						<ul class="footer-links">
							<li><a href="#">Prinera Publicacion</a></li>
							<li><a href="#">Organizacion</a></li>
							<li><a href="#">Ordenes</a></li>
							<li><a href="#">Anuncios Importantes</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-xs-6">
					<div class="footer">
						<h3 class="footer-title">Acerca de nosotros</h3>
						<ul class="footer-links">
							<li href="#">Contactate con Nosotros</li>
							<li><a href="#">Correo Electronico</a></li>
							<li><a href="#"># Celular</a></li>
							<li><a href="#">Direccion</a></li>

						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<span class="copyright">
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Estudiantes de Ing. de Sistemas de la Universidad Mayor de San Simon.
					</span>
				</div>
			</div>
		</div>
</footer>

	<!-- bootstrap js -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>