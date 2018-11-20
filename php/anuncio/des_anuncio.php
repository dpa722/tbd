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

</body>
</html>