<!DOCTYPE html>
<html lang="es">
<head>
	<title>Administrador</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../css/usuarios/usuarios.css">
</head>
<body>

	<!-- Side -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--Titulo -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				USUARIO <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- Informacion -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="" >
					<figcaption class="text-center text-titles">Nombre del Usuario</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="#">
							<i class="zmdi zmdi-settings"></i>
						</a>
					</li>
					<li>
						<a href="#" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
			<!--Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="index.php">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Pagina del Usuario
					</a>
				</li>
				<li>
					<a href="#" class="btn-sideBar-SubMenu">
						<i class="glyphicon glyphicon-align-left"></i> Publicaciones <i></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="#"><i class=""></i> Tus publicaciones</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#" class="btn-sideBar-SubMenu">
						<i class="glyphicon glyphicon-align-left"></i> Perfil <i></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="#"><i class=""></i> Datos de Usuario</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#" class="btn-sideBar-SubMenu">
						<i class=""></i> Publicaciones Pago <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="#"><i class=""></i> Pagas por publicaciones</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class=""></i> Ayuda <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="#"><i class=""></i> ¿Contacto del administrador?</a>
						</li>
						<li>
							<a href="#"><i class=""></i> ¿Contacto del Programador?</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</section>

	<!-- contenedor-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				<li>
					<a href="#!" class="btn-Notifications-area">
						<i class="zmdi zmdi-notifications-none"></i>
						<span class="badge">  </span>
					</a>
				</li>
			</ul>
		</nav>
		<!-- contenido de la pagina //falta aumentar en esta parte -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles">Control de la Pagina</h1>
			</div>
		</div>
		<div class="full-box text-center" style="padding: 30px 10px;">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Administradores
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">0</p>
					<small>Registrados</small>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Usuarios
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-male-alt"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">0</p>
					<small>Registrados</small>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Publicaciones
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-male-alt"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">0</p>
					<small>Registrados</small>
				</div>
			</article>
		</div>
	</section>

	<!-- Notificaciones -->
	<section class="full-box Notifications-area">
		<div class="full-box Notifications-bg btn-Notifications-area"></div>
		<div class="full-box Notifications-body">
			<div class="Notifications-body-title text-titles text-center">
				Notificaciones <i class="zmdi zmdi-close btn-Notifications-area"></i>
			</div>
			<div class="list-group">
				<div class="list-group-item">
					<div class="row-action-primary">
						<i class="zmdi zmdi-alert-triangle"></i>
					</div>
					<div class="row-content">
						<h4 class="list-group-item-heading">Mensaje Recibido</h4>
						<p class="list-group-item-text">Ocurrio un reporte de la publicacion por parte de muchos usuarios</p>
					</div>
				</div>
				<div class="list-group-separator"></div>
				<div class="list-group-item">
					<div class="row-action-primary">
						<i class="zmdi zmdi-alert-octagon"></i>
					</div>
					<div class="row-content">
						<h4 class="list-group-item-heading">Mensaje Recibido</h4>
						<p class="list-group-item-text">Ocurrio un reporte de la publicacion por parte de muchos usuarios</p>
					</div>
				</div>
				<div class="list-group-separator"></div>
				<div class="list-group-item">
					<div class="row-action-primary">
						<i class="zmdi zmdi-help"></i>
					</div>
					<div class="row-content">
						<h4 class="list-group-item-heading">Mensaje Recibido</h4>
						<p class="list-group-item-text">Ocurrio un reporte de la publicacion por parte de muchos usuarios</p>
					</div>
				</div>
				<div class="list-group-separator"></div>
			</div>
		</div>
	</section>

	
	<!--====== Scripts -->
	<script src="../../js/jquery.min.js"></script>
	<script src="../../js/usuarios/sweetalert2.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
	<script src="../../js/usuarios/material.min.js"></script>
	<script src="../../js/usuarios/ripples.min.js"></script>
	<script src="../../js/usuarios/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="../../js/usuarios/usuarios.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>