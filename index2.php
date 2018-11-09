<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Página de anuncios (Nombre de la página)</title>
	<!-- css styles -->
	<link rel="stylesheet" type="text/css" href="css/index/index.css">
	<!-- bootstrap  -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!-- jquery libraires -->
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
  			<a class="navbar-brand " href="index.php" >Página de anuncios</a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  			</button>
  			<div class="collapse navbar-collapse" id="navbarNav">
    		<ul class="navbar-nav ml-auto">
      			<li class="nav-item active">
        			<a class="nav-link " href="php/ingresar/acceder.php">Ingresar</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="php/crearCuenta/registrarse.php">Registro</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="php/ayuda/ayuda.php">Ayuda</a>
      			</li>
    		</ul>
    		<a href="php/ingresar/acceder.php" class="btn btn-outline-primary p-3 ml-3">
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
  				</ol>
  				<div class="carousel-inner">
   				 	<div class="carousel-item active ">
  						<img src="img/imagen1.jpg " class="w-100" alt="Imagen 1" style="height: 700px;">
  						<div class="carousel-caption d-none d-md-block">
    						<h5>Imagen 1</h5>
    						<p>Descripcion de la imagen 1</p>
  						</div>
					</div>
   					 <div class="carousel-item">
  						<img src="img/imagen2.jpg" class="w-100" alt="Imagen 2" style="height: 700px;">
  						<div class="carousel-caption d-none d-md-block">
    						<h5>Imagen 2</h5>
    						<p>Descripcion de la imagen 2</p>
  						</div>
					</div>
   					 <div class="carousel-item">
  						<img src="img/imagen3.jpg" class="w-100" alt="Imagen 3" style="height: 700px;">
  						<div class="carousel-caption d-none d-md-block">
    						<h5>Imagen 3</h5>
    						<p>Descripcion de la imagen 3</p>
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
		<div class="container p-5">
			<div class="row">
				
				<div class="col-md-3">
					<div class="card">
						<div class="card-body">
							<img src="img/camara.png" class="img-fluid rounded-circle w-50" alt="person one" style="">
							<h3>nombre del anuncio</h3>
							<p>descripcion</p>
							<p>Precio: monto</p>
							<a href="#" class="btn btn-outline-primary">Ver Anuncio</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card">
						<div class="card-body">
							<img src="img/camara.png" class="img-fluid rounded-circle w-50" alt="person one" style="">
							<h3>nombre del anuncio 2</h3>
							<p>descripcion 2</p>
							<p>Precio: monto</p>
							<a href="#" class="btn btn-outline-primary">Ver Anuncio</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card">
						<div class="card-body">
							<img src="img/camara.png" class="img-fluid rounded-circle w-50" alt="person one" style="">
							<h3>nombre del anuncio 3</h3>
							<p>descripcion 3</p>
							<p>Precio: monto</p>
							<a href="#" class="btn btn-outline-primary">Ver Anuncio</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card">
						<div class="card-body">
							<img src="img/camara.png" class="img-fluid rounded-circle w-50" alt="person one" style="">
							<h3>nombre del anuncio 4</h3>
							<p>descripcion 4</p>
							<p>Precio: monto</p>
							<a href="#" class="btn btn-outline-primary">Ver Anuncio</a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		
	</section>

	<section class="mt-3" id="normal">
		<p class="nombre ml-5 p-3 ">Normal</p>
		<div class="container p-5">
			<div class="row">
				
				<div class="col-md-3">
					<div class="card">
						<div class="card-body">
							<img src="img/camara.png" class="img-fluid rounded-circle w-50" alt="person one" style="">
							<h3>nombre del anuncio 5</h3>
							<p>descripcion 5</p>
							<p>Precio: monto</p>
							<a href="#" class="btn btn-outline-primary">Ver Anuncio</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card">
						<div class="card-body">
							<img src="img/camara.png" class="img-fluid rounded-circle w-50" alt="person one" style="">
							<h3>nombre del anuncio 6</h3>
							<p>descripcion 6</p>
							<p>Precio: monto</p>
							<a href="#" class="btn btn-outline-primary">Ver Anuncio</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card">
						<div class="card-body">
							<img src="img/camara.png" class="img-fluid rounded-circle w-50" alt="person one" style="">
							<h3>nombre del anuncio 7</h3>
							<p>descripcion 7</p>
							<p>Precio: monto</p>
							<a href="#" class="btn btn-outline-primary">Ver Anuncio</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card">
						<div class="card-body">
							<img src="img/camara.png" class="img-fluid rounded-circle w-50" alt="person one" style="">
							<h3>nombre del anuncio 8</h3>
							<p>descripcion 8</p>
							<p>Precio: monto</p>
							<a href="#" class="btn btn-outline-primary">Ver Anuncio</a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
<!-- *************************************************************** -->
<!-- 		categorias -->
<!-- **************************************************************** -->
<section class="container text-center p-5">
	<p class="nombre p-2 m-2 ">Filtrar por categoria</p>
		<div class="row">
			<div class="accordion w-100" id="accordionExample">
  				<div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Categoria 1
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
         <div class="container">
        	<ul class="listaAcor">
        		<li><a href="#">Subcategoria 1</a></li>
        		<li><a href="#">Subcategoria 2</a></li>
        		<li><a href="#">Subcategoria 3</a></li>
        		<li><a href="#">Subcategoria 4</a></li>
        		<li><a href="#">Subcategoria 5</a></li>
        		<li><a href="#">Subcategoria 6</a></li>
        		<li><a href="#">Subcategoria 7</a></li>

        	</ul>
        	
        </div>
      </div>
    </div>
  </div>
  			<div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
       	CAtegoria 2
               </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <div class="container">
        	<ul class="listaAcor">
        		<li><a href="#">Subcategoria 2.1</a></li>
        		<li><a href="#">Subcategoria 2.2</a></li>
        		<li><a href="#">Subcategoria 2.3</a></li>
        		<li><a href="#">Subcategoria 2.4</a></li>
        		<li><a href="#">Subcategoria 2.5</a></li>
        		<li><a href="#">Subcategoria 2.6</a></li>
        		<li><a href="#">Subcategoria 2.7</a></li>

        	</ul>
        	
        </div>
      </div>
    </div>
  </div>
 
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


	<!-- bootstrap js -->
	<script src="js/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>