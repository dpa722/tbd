<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<html lang="es">
<head>
	<meta charset="utf-8">

	<title>Nuevo Usuario</title>

	<link rel="stylesheet" href="css/registro/registro.css">
</head>

<body>
	<div class="page-container">
		<form class="formulario" action="extenciones/crearCuenta/operacionGuardar.php" method="POST">
			<h1>Felicidades !!</h1>
			<h1>Nuevo Usuario</h1>
			<input type="text" name="email" class="Email" placeholder="Correo Electronico" required="">
			<input type="password" name="contra" class="Address" placeholder="Contraseña" required="">
			<input type="text" name="ci" class="CI" placeholder="Carnet de Identidad" required="">
			<input type="text" name="nombre" class="Name" placeholder="Nombre" required="">
			<input type="text" name="ap" class="Paterno" placeholder="Apellido Paterno" required="">
			<input type="text" name="am" class="Materno" placeholder="Apellido Materno" required="">
			<input type="text" name="pais" class="Country" placeholder="Pais" required="">
			<input type="text" name="dpto" class="Address" placeholder="Departamento" required="">
			<button type="submit" value="Add" name="submit">Registrarse</button>
		</form>
	</div>
</body>
</html>