<?php include('PHP/funciones.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Avisos clasificados gratis</title>
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/noticias.css">
	<link rel="stylesheet" type="text/css" href="css/categorias.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="jquery/jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#particion").addClass('inicio');
			$(window).on('scroll',function(){
				if($(window).scrollTop()){
					$("#particion").removeClass('inicio');
					$('#particion').addClass('sube');
				}else{
					$('#particion').removeClass('sube');
					$('#particion').addClass('inicio');
				}
			});
		});
		</script>
</head>
<body>
	<!-- inicio de la cabecera -->
	<header>
		<div  id="particion">
			<div class="nombre">
				<a href="index.php" class="n">NOMBRE PAGINA</a>
			</div>
			<div class="busqueda">
				<input type="text" name="" placeholder="¿Qué estas buscando?" id="buscar">
				<div class="lupa"></div>
			</div>
			<ul>
				<li><a href="#">Ingresar</a></li>
				<li><a href="registroPagina.php">Registrarse</a></li>
				<li><a href="ayuda.php">Ayuda</a></li>
			</ul>
		</div>
		<input type="button" class="botonInicio" value="INICIAR">
	</header>
	<!-- fin de la Cabezera-->
	<!-- inicio del cuerpo para las noticias -->
	<div class="noticias">
		<!-- article sera la etiqeuta para cada producto en venta -->
		<h1>ULTIMAS NOVEDADES</h1>
		<div class="row">
            <?php  
            //foreach ($ofertas as $oferta_id =>$oferta) {
            //	echo portada($oferta_id, $oferta);
            //} 
            $x=1;
            $ofertas;
            while( $x<=4 AND list($oferta_id, $oferta) = each($ofertas)){
            	echo portada($oferta_id, $oferta);
            	$x++;
            }?>
          <hr>
        </div>
		

	</div>
	<!-- fin del cuerpo para las Noticias-->

	<!-- inicio parte de las categorias y subcategorias -->
	<div class="categorias">
		<h1> Encuentra lo que buscas en nuestras categorías</h1>
		<div class="cat1">
			<ul class="categoriaLista">
				<li class="nombreLista"><a href="#">COMPRA_VENTA</a></li>
				<li class="subcat"><a href="#">Ropa - Accesorios </a></li>
				<li class="subcat"><a href="#">Moviles</a></li>
				<li class="subcat"><a href="#"> electronica</a></li>
				<li class="subcat"><a href="#"> hogar y jardin</a></li>
				<li class="subcat"><a href="#"> otras ventas</a></li>
				<li class="subcat"><a href="#"> ordenadores</a></li>
				<li class="subcat"><a href="#"> Video Juegos - Consolas</a></li>
				<li class="subcat"><a href="#"> Comercio - Industria</a></li>
				<li class="subcat"><a href="#"> Salud y belleza</a></li>
				<li class="subcat"><a href="#"> Articulos para niños y bebes</a></li>
				<li class="subcat"><a href="#"> instrumentos musicales</a></li>
				<li class="subcat"><a href="#"> Articulos deportivos - bicicletas</a></li>
				<li class="subcat"><a href="#"> joyas - relojes</a></li>
				<li class="subcat"><a href="#"> Animales</a></li>
				<li class="subcat"><a href="#"> Fotografia -Imagen -sonido</a></li>
				<li class="subcat"><a href="#">libros - revistas</a></li>
				<li class="subcat"><a href="#">juegos </a></li>
				<li class="subcat"><a href="#">coleccionables - antiguedades </a></li>
				<li class="subcat"><a href="#">SEgunda mano </a></li>
				<li class="subcat"><a href="#">tickets y entradas	</a></li>


			</ul>
		</div>
	</div>
	<!-- fin de Categorias y subcategorias-->
	<!-- inicio del pie de pagina -->
	<footer class="pie">
		<center>
			<a href="#" class="pieNombre">NOMBRE PAGINA</a>
		</center>
			
	</footer>
	<!--fin del pie de pagina-->
</body>
</html>