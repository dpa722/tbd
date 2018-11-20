<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<html lang="es">
<head>
	<meta charset="utf-8">

	<title>Nuevo Usuario</title>

	<link rel="stylesheet" href="../../css/registro/registro.css">
	<script src="../../js/jquery.min.js"></script>
</head>

<body>
	<div class="page-container">
		<form class="formulario" action="../conexion/operacionGuardar.php" method="POST">
			<h1>Felicidades !!</h1>
			<h1>Nuevo Usuario</h1>
			<input type="text" REQUIRED name="email" class="Email" placeholder="Correo Electronico">
			<input type="password" REQUIRED name="contra" class="Address" placeholder="Contraseña">
			<input type="text" REQUIRED name="nombre" class="Name" placeholder="Nombre Usuario">
			<input type="checkbox" value=""> Acepto los terminos y condiciones
			<button type="submit" value="Add" name="submit" >Registrarse</button>
		</form>
	</div>
</body>
</html>