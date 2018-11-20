<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Página de anuncios (Nombre de la página)</title>
	<!-- css styles -->
	<link rel="stylesheet" type="text/css" href="css/index/index.css">

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
        			<a class="nav-link " href="php/ingresar/ingresar.php">Ingresar</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="php/crearCuenta/registrarse.php">Registro</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="php/ayuda/ayuda.php">Ayuda</a>
      			</li>
    		</ul>
    		<a href="php/crearCuenta/registrarse.php" class="btn btn-outline-primary p-3 ml-3">
    			<img src="img/camara.png">
    			VENDER
    		</a>
  			</div>
  		</div>
	</nav>
	<!-- ********************************** -->
	<!-- header -->
	<!-- ********************************** -->
	<header id= "header mt-5">

			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  				<ol class="carousel-indicators">
  				 <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
   				 <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
   				 <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					 <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  				</ol>
  				<div class="carousel-inner">
						<div class="carousel-item active">
								<div class="main_header">
									<div class="background-overlay text-white py-5">

											<div class="container">
												<div class="row">
													<div class="oro col-md-6 text-center justify-content-center align-self-center p-5">
														<h1>PRODUCTO Nro. 1</h1>
														<p>Descripcion breve del producto, descripcion del producto,descripcion del producto,descripcion del producto</p>
														<a href="#" class="btn btn-outline-secondary btn-lg text-white">VER PRODUCTO</a>
													</div>
													<div class=" col-md-6 mt-3 p-5">
														<img src="img/nike.jpg" alt="Imagen del Producto" class="imgheader img-fluid d-none d-sm-block">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
					<div class="carousel-item">
							<div class="main_header">
								<div class="background-overlay text-white py-5">

										<div class="container">
											<div class="row">
												<div class="oro col-md-6 text-center justify-content-center align-self-center p-5">
													<h1>PRODUCTO Nro. 2</h1>
													<p>Descripcion breve del producto, descripcion del producto,descripcion del producto,descripcion del producto</p>
													<a href="#" class="btn btn-outline-secondary btn-lg text-white">VER PRODUCTO</a>
												</div>
												<div class=" col-md-6 mt-3 p-5">
													<img src="img/coca.jpg" alt="Imagen del Producto" class="imgheader img-fluid d-none d-sm-block">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
					<div class="carousel-item">
							<div class="main_header">
								<div class="background-overlay text-white py-5">

										<div class="container">
											<div class="row">
												<div class="oro col-md-6 text-center justify-content-center align-self-center p-5">
													<h1>PRODUCTO Nro. 3</h1>
													<p>Descripcion breve del producto, descripcion del producto,descripcion del producto,descripcion del producto</p>
													<a href="#" class="btn btn-outline-secondary btn-lg text-white">VER PRODUCTO</a>
												</div>
												<div class=" col-md-6 mt-3 p-5">
													<img src="img/image2.png" alt="Imagen del Producto" class="imgheader img-fluid d-none d-sm-block">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
					<div class="carousel-item">
							<div class="main_header">
								<div class="background-overlay text-white py-5">

										<div class="container">
											<div class="row">
												<div class="oro col-md-6 text-center justify-content-center align-self-center p-5">
													<h1>PRODUCTO Nro. 4</h1>
													<p>Descripcion breve del producto, descripcion del producto,descripcion del producto,descripcion del producto</p>
													<a href="#" class="btn btn-outline-secondary btn-lg text-white">VER PRODUCTO</a>
												</div>
												<div class=" col-md-6 mt-3 p-5">
													<img src="img/product.jpg" alt="Imagen del Producto" class=" img-fluid d-none d-sm-block">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
  				</div>
  				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
  					  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   					 <span class="sr-only">Previous</span>
  				</a>
 				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
   			 		<span class="carousel-control-next-icon" aria-hidden="true"></span>
    				<span class="sr-only">Next</span>
  				</a>
			</div>

	</header>
	<!-- ***************************************************** -->
	<!-- section anuncios plata por decir -->
	<!-- ***************************************************** -->

	<section class="mt-3" id="plata">
		<p class="nombre p-3 m-2 ">Ultimos anuncios</p>
		<p class="nombre ml-5 pl-5">Plata</p>
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

	<section class="mt-3" id="normal">
		<p class="nombre ml-5 p-3 ">Normal</p>
		<div class="container">
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
<!-- *************************************************************** -->
<!-- 		categorias -->
<!-- **************************************************************** -->
<section class="container text-center ">
	<p class="nombre p-2 m-2 ">Filtrar por categoria</p>
		<div class="row">
			<div class="accordion w-100" id="accordionExample">
					<!--incluimos el codigo php de las categorias en este espacio  -->
					<?php

							include("loginMethods/categorias.php");

					 ?>

			</div>
	</div>
</section>


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



	<script src="http://localhost:35729/livereload.js" charset="utf-8"></script>
	<!-- bootstrap js -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
