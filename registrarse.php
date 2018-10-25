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
			<input type="text" name="email" class="Email" placeholder="Correo Electronico">
			<input type="password" name="password" class="Address" placeholder="Contraseña">
			<input type="text" name="ci" class="CI" placeholder="Carnet de Identidad">
			<input type="text" name="name" class="Name" placeholder="Nombre">
			<input type="text" name="last name" class="Name" placeholder="Apellido Paterno">
			<input type="text" name="last name2" class="Name" placeholder="Apellido Materno">
			<input type="text" name="country" class="Country" placeholder="Pais">
			<input type="text" name="address" class="Address" placeholder="Departamento">
			<button type="submit" value="Add" name="submit">Registrarse</button>
		</form>
	</div>
</body>
</html>