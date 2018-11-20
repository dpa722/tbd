<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Creacion de anuncios en linea</title>
		<!-- bootstrap css -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<!-- css style -->
		<link rel="stylesheet" href="../../../css/index/anuncios.css">
	</head>
	<body class="anuncio">
		<!-- ************************************************************ -->
		<!-- 										navbar 										-->
		<!-- *********************************************************** -->
		<nav class=" inicio navbar navbar-expand-lg navbar-light fixed-top" id="barra">
				<div class="container">
					<a class="navbar-brand font-weight-bold" href="../../../index.php" >Página de anuncios</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ml-auto">
							<li class="nav-item ">
								<a class="nav-link" href="../../ayuda/ayuda.php">Ayuda</a>
							</li>
					</ul>

					</div>
				</div>
		</nav>
			<!-- ************************************************ -->
				<!-- section creacion de anuncio -->
				<!-- ************************************************* -->
			<section class=" container mt-5 pl-3">
				<div class=" row mt-5 pt-3 ">
					<div class="d-inline-block col-md-4 text-center justify-content-center align-self-center ">
							<p class="titulo font-weight-bold ">ANUNCIO NUEVO</p>
					</div>
							<form class="" action="consultas/guardar_anuncio.php" method="POST" enctype="multipart/form-data">
								<div class=" d-inline-block col-md-4  pt-5">
									<input type="text" name="titulo" value="" placeholder="Nombre del Anuncio">
									<br><br>
									<textarea name="descripcion" rows="6" cols="30s" placeholder="Descripcion"></textarea><br><br>
									<input type="number" name="precio" value="" placeholder="Precio"><br><br>
									<input type="text" name="estado" value="" placeholder="Estado"><br><br>
									<input type="text" name="direccion" value="" placeholder="direccion"><br><br>
									<input type="text" name="telefono" value="" placeholder="telefono">
								</div>
								<div class=" d-inline-block col-md-4 ml-5 pl-5 ">
									<p class="font-weight-bold">Elija a imagen principal para la insercion</p>
									<input type="file" name="imagen"/><br><br>
									<p class="font-weight-bold">Elija subcategoria</p>
									<input type="text" name="subcategoria" value="" placeholder="subcategoria"><br><br>
									<input type="submit" name="" value="Publicar" class="btn btn-secondary ">
								</div>

							</form>
						</div>
				</div>
			</section>
<!-- **************************************** -->
<!--                 Footer					-->
<!-- ********************************************** -->

	<footer class="pie mt-5 bg-light p-2 border border-darks">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<p class="font-weight-bold">
							Nota:
						</p>
						<p class="font-weight-bold">
							En esta area sera capaz de crear un anncio con solo una imagen, luego tendra la posibilidad de aumentar mas fotos a lo qeu es su publicacion.
						</p>
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
