<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>TBD</title>
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">	

	<link rel="stylesheet" type="text/css" href="css/index/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/index/boton.css">
	<link rel="shortcut icon" type="image/x-icon" href="img/ico.ico">




	
	
</head>
<body>	

	<header>
		<div class="navbar-wrapper">
			<div class="container-fluid">

				<div class="navbar navbar-inverse navbar-static-top">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="index.php">TBD</a>
						</div>
						<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav navbar-right">
								<li ><a href="ingresar.php">Ingresar</a></li>
								<li ><a href="registrarse.php">Registrarse</a></li>
								<li ><a href="ayuda.php">Ayuda</a></li>
								<li class="active"><a href="ayuda.php">Vender</a></li>
							</ul>

								<div class="search-box">
									<input type="text" name="search" placeholder="¿Que estas buscando?"   class="search-text">
									<button type="button" class="btn btn-default search-btn" aria-label="Left Align">
									<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								</button>
								</div>

								

						</div>
					</div>
				</div>
			</div>
		</div>
	</header>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
    	<!-- Indicators -->
    	<ol class="carousel-indicators">
    		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    		<li data-target="#myCarousel" data-slide-to="1"></li>
    		<li data-target="#myCarousel" data-slide-to="2"></li>
    	</ol>
    	<div class="carousel-inner">
    		<div class="item active">
    			<img src="data:image/png;base64," data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide">
    			<div class="container">
    				<div class="carousel-caption">
    					<h1>Producto 1</h1>
    					<p>Breve descripcion del producto con prioridad alta.</p>
    					<p><a class="btn btn-lg btn-primary" href="#" role="button">Lo necesitas!!</a></p>
    				</div>
    			</div>
    		</div>
    		<div class="item">
    			<img src="data:image/png;base64," data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide">
    			<div class="container">
    				<div class="carousel-caption">
    					<h1>Producto 2</h1>
    					<p>Breve descripcion del producto con prioridad alta.</p>
    					<p><a class="btn btn-lg btn-primary" href="#" role="button">Lo necesitas!!</a></p>
    				</div>
    			</div>
    		</div>
    		<div class="item">
    			<img src="data:image/png;base64," data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide">
    			<div class="container">
    				<div class="carousel-caption">
    					<h1>Producto 3</h1>
    					<p>Breve descripcion del producto con prioridad alta.</p>
    					<p><a class="btn btn-lg btn-primary" href="#" role="button">Lo necesitas!!</a></p>
    				</div>
    			</div>
    		</div>
    	</div>
    	<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    	<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->






    <div class="btn-group">
    	<button type="button" class="btn btn-info btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    		CATEGORIAS <span class="caret"></span>
    	</button>
    	<ul class="dropdown-menu">
    		<li>

    			<div class="btn-group">
    				<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    					CATEGORIAS <span class="caret"></span>
    				</button>
    				<ul class="dropdown-menu">
    					<li>
    					</li>
    				</ul>
    			</div>

    		</li>
    		<li>

    		</li>
    	</ul>
    </div>










    <section class="container">
    	<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
    		<button type="button" class="btn btn-info">COMPRA-VENTA</button>
    		<div class="btn-group" role="group">
    			<button id="btnGroupDrop3" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
    			<div class="dropdown-menu" aria-labelledby="btnGroupDrop3">
    				<a class="dropdown-item" href="#">Cualquier Producto</a>
    				<a class="dropdown-item" href="#">Cualquier cosa 2</a>
    			</div>
    		</div>
    	</div>
    	<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
    		<button type="button" class="btn btn-info">CLASES</button>
    		<div class="btn-group" role="group">
    			<button id="btnGroupDrop3" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
    			<div class="dropdown-menu" aria-labelledby="btnGroupDrop3">
    				<a class="dropdown-item" href="#">Dropdown link</a>
    				<a class="dropdown-item" href="#">Dropdown link</a>
    			</div>
    		</div>
    	</div>
    	<button type="button" class="btn btn-outline-info btn-lg">VIVIENDAS LOCALES</button>
    	<button type="button" class="btn btn-outline-info btn-lg">TRABAJO</button>
    	<button type="button" class="btn btn-outline-info btn-lg">MOTOR</button>
    	<button type="button" class="btn btn-outline-info btn-lg">SERVICIOS</button>
    </section>




    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

    	<!-- Three columns of text below the carousel -->
    	<div class="row">
    		<div class="col-lg-4">
    			<img class="img-circle" src="data:image/png;base64," data-src="holder.js/140x140" alt="imagen">
    			<h2>Nombre del Producto</h2>
    			<p>Brece descripcion del producto.</p>
    			<p><a class="btn btn-default" href="#" role="button">Mas Detalles &raquo;</a></p>
    		</div><!-- /.col-lg-4 -->
    		<div class="col-lg-4">
    			<img class="img-circle" src="data:image/png;base64," data-src="holder.js/140x140" alt="imagen">
    			<h2>Nombre del Producto</h2>
    			<p>Brece descripcion del producto.</p>
    			<p><a class="btn btn-default" href="#" role="button">Mas Detalles &raquo;</a></p>
    		</div><!-- /.col-lg-4 -->
    		<div class="col-lg-4">
    			<img class="img-circle" src="data:image/png;base64," data-src="holder.js/140x140" alt="imagen">
    			<h2>Nombre del Producto</h2>
    			<p>Brece descripcion del producto.</p>
    			<p><a class="btn btn-default" href="#" role="button">Mas Detalles &raquo;</a></p>
    		</div><!-- /.col-lg-4 -->
    	</div><!-- /.row -->

    	<!-- Three columns of text below the carousel -->
    	<div class="row">
    		<div class="col-lg-4">
    			<img class="img-circle" src="data:image/png;base64," data-src="holder.js/140x140" alt="imagen">
    			<h2>Nombre del Producto</h2>
    			<p>Brece descripcion del producto.</p>
    			<p><a class="btn btn-default" href="#" role="button">Mas Detalles &raquo;</a></p>
    		</div><!-- /.col-lg-4 -->
    		<div class="col-lg-4">
    			<img class="img-circle" src="img/lupa.png" data-src="holder.js/140x140" alt="imagen">
    			<h2>Nombre del Producto</h2>
    			<p>Brece descripcion del producto.</p>
    			<p><a class="btn btn-default" href="#" role="button">Mas Detalles &raquo;</a></p>
    		</div><!-- /.col-lg-4 -->
    		<div class="col-lg-4">
    			<img class="img-circle" src="data:image/png;base64," data-src="holder.js/140x140" alt="imagen">
    			<h2>Nombre del Producto</h2>
    			<p>Brece descripcion del producto.</p>
    			<p><a class="btn btn-default" href="#" role="button">Mas Detalles &raquo;</a></p>
    		</div><!-- /.col-lg-4 -->
    	</div><!-- /.row -->

    </div><!-- /.container -->

    <footer>
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


    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>