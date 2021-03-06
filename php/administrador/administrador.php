<!DOCTYPE html>
<html lang="es">
<head>
	<title>Administrador</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../css/administrador/usuarios.css">
</head>
<body>

	<!-- Side        principal de administrador diferenciar-->

	
	<section class="full-box cover dashboard-sideBar ">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard "></div>
		<div class="full-box dashboard-sideBar-ct ">
			<!--Titulo -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				ADMINISTRADOR <i></i>
			</div>
			<!-- Informacion -->
			<div class="full-box dashboard-sideBar-UserInfo ">
				<figure class="full-box">
					<img src="fotoadmin.php" >
					<figcaption class="text-center text-titles">Nombre del Usuario</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a class="btn-exit-system">
							<i class="glyphicon glyphicon-off"></i>
						</a>
					</li>
				</ul>
			</div>
			<!--Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="../../index2.php">
						<i class="glyphicon glyphicon-th"></i> Pagina Principal
					</a>
				</li>
				<li>
					<a class="btn-sideBar-SubMenu">
						<i class="glyphicon glyphicon-menu-right"></i> Administracion 
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="administrador.php"><i class="glyphicon glyphicon-cog"></i> Configuraciones</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="btn-sideBar-SubMenu">
						<i class="glyphicon glyphicon-menu-right"></i> Usuarios
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="extencion/lista_administradores.php"><i class="glyphicon glyphicon-king"></i> Administradores</a>
						</li>
						<li>
							<a href="extencion/lista_usuarios.php"><i class="glyphicon glyphicon-user"></i> Usuarios</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="btn-sideBar-SubMenu">
						<i class="glyphicon glyphicon-menu-right"></i> Prioridades 
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="extencion/usuarios_prioridad.php"><i class="glyphicon glyphicon-bishop"></i> Usuarios con Prioridad</a>
						</li>
						<li>
							<a href="extenicion/publicaciones.php"><i class="glyphicon glyphicon-transfer"></i> Rotacion de Publicaciones</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="btn-sideBar-SubMenu">
						<i class="glyphicon glyphicon-menu-right"></i> Ayuda
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href=""><i ></i> Ternimos y condiciones</a>
						</li>
						<li>
							<a href="extencion/Programador.php"><i class="glyphicon glyphicon-knight"></i> ¿El Programador?</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</section>

	<!-- contenedor-->
	<section class="full-box dashboard-contentPage ">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a class="btn-menu-dashboard"><i class="glyphicon glyphicon-align-justify"></i></a>
				</li>
				<li>
					<a class="btn-Notifications-area">
						<i class="glyphicon glyphicon-envelope"></i>
						<span class="badge"><!--notificaciones sacar de bd --></span>
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
			<article class="full-box tile" >
				<div class="full-box tile-title text-center text-titles text-uppercase" >
					<a href="extencion/lista_administradores.php">ADMINISTRADORES</a>
				</div>
				<div class="full-box tile-icon text-center">
					<i><a class="glyphicon glyphicon-king" href="extencion/lista_administradores.php"></a></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">0</p>
					<small><a href="extencion/lista_administradores.php">Registrados</a></small>
				</div>
			</article>


			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase" >
					<a href="extencion/lista_usuario.php">USUARIOS</a>
				</div>
				<div class="full-box tile-icon text-center">
					<i><a class="glyphicon glyphicon-user" href="extencion/administradores.php"></a></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><a href="extencion/administradores.php">0</a></p>
					<small><a href="extencion/lista_publicaciones.php">Registrados</a></small>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					<a href="../usuario/usuario.php">PUBLICACIONES</a>
				</div>
				<div class="full-box tile-icon text-center">
					<i><a class="glyphicon glyphicon-pencil" href="extencion/administradores.php"></a></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><a href="extencion/administradores.php">0</a></p>
					<small><a href="extencion/administradores.php">Registrados</a></small>
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
	<script src="../../js/bootstrap.min.js"></script>
	<script src="../../js/usuarios/sweetalert2.min.js"></script>	
	<script src="../../js/usuarios/material.min.js"></script>
	<script src="../../js/usuarios/ripples.min.js"></script>
	<script src="../../js/usuarios/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="../../js/usuarios/usuarios.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>