<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ayuda</title>
	<link rel="stylesheet" type="text/css" href="../../css/ayuda/ayuda.css">
	<script src="../../js/jquery-3.1.1.min.js"></script>
	<script>
  		$(document).ready(function() {
    		$(".primeraRespuesta").hide();
    		$(".segundaRespuesta").hide();
    		$(".texto h4").click(mostrar);
    		$(".texto h3").click(mostrarDos);
    		
  		});
  		function mostrar(){
    		/*toogle clas añade y remueve la  clase implementada en cs*/
    		$(this).toggleClass("cerrar").next(".segundaRespuesta").fadeToggle();
    		

  		}
  		function mostrarDos(){
     		$(this).toggleClass("cerrarDos").next(".primeraRespuesta").fadeToggle();
 			
  		}
</script>
</head>
<body>
	<!-- inicio de la cabecera  -->
	<header>
		<div class="nombre">
			NOMBRE DE LA PAGINA	
		</div>
	</header>
	<!-- fin de la cabecera -->
	<!-- inicio del cuerpo  -->
	<section class="ayuda">
		<h1>¿CÓMO PODEMOS AYUDARTE?</h1>
		<!-- caja para los textos de las ayudas -->
		<div class="texto">
				<!-- inicio del primer componente -->
				<h3 id="uno">Publicación de anuncios</h3>
     		 	<div class="primeraRespuesta">
       				 <h4>¿COMO PUBLICO UN ANUNCIO?</h4>
       				 <div class="segundaRespuesta">
       					 <p>hacer todavia</p>
      				 </div>
      				<h4>REGALAS DE LA PUBLICACION</h4>
       				 <div class="segundaRespuesta">
       					 <p>hacer todavia</p>
      				</div>
      				<h4>PORQUE MI ANUNCIO FUE RECHAZADO</h4>
       				 <div class="segundaRespuesta">
       					 <p>hacer todavia</p>
      				</div>
      				<h4>PRODUCTOS Y SERVICIOS NO PERMITIDOS EN LA PAGINA</h4>
       				 <div class="segundaRespuesta">
       					 <p>hacer todavia</p>
      				</div>
      				<h4>CUANTO TIEMPO APARECERAN MIS ANUNCIOS</h4>
       				 <div class="segundaRespuesta">
       					 <p>hacer todavia</p>
      				</div>
      				<h4>CONSEJOS PARA CREAR UN ANUNCIO ATRACTIVO</h4>
       				 <div class="segundaRespuesta">
       					 <p>hacer todavia</p>
      				</div>
      				<h4>PRIVACIDAD</h4>
       				 <div class="segundaRespuesta">
       					 <p class="subtitulo">Pueden los usuarios ver mi informacion personal</p>
       					 <p>respuesta a este subtitulo</p>
       					 <p class="subtitulo">Como me contactan los vendedores qeu yo contacte</p>
       					 <p>respuesta a este subtitulo</p>
      				</div>
      			</div>
      			<!-- fin del primer componente -->
      			<!-- inicio del 2do componente  -->
      			<h3 id="dos">Administración de anuncios</h3>
     		 	<div class="primeraRespuesta">
       				 <h4>¿DONDE PUEDO ENCONTRAR MI ANUNCIO?</h4>
       				 <div class="segundaRespuesta">
       					 <p>hacer todavia</p>
      				 </div>
      				<h4>¿COMO EDITO MI ANUNCIO?</h4>
       				 <div class="segundaRespuesta">
       					 <p>hacer todavia</p>
      				</div>
      				<h4>¿CÓMO ELIMINO MI ANUNCIO?</h4>
       				 <div class="segundaRespuesta">
       					 <p>hacer todavia</p>
      				</div>
      				<h4>¿CÓMO EDITO MI INFORMACION DE CONTACTO?</h4>
       				 <div class="segundaRespuesta">
       					 <p>hacer todavia</p>
      				</div>
      				<h4>NO ENCUENTRO MI ANUNCIO</h4>
       				 <div class="segundaRespuesta">
       					 <p class="subtitulo">Mi anuncio no esta activo</p>
       					 <p>respuesta a este subtitulo</p>
       					 <p class="subtitulo">Mi anuncio fue rechazado</p>
       					 <p>respuesta a este subtitulo</p>
       					 <p class="subtitulo">No encuentro mi anuncio</p>
       					 <p>respuesta a este subtitulo</p>
      				</div>
      			</div>
      			<!-- fin del 2do componente -->
      			<!-- inicio del 3er componente -->
      			<h3 id="tres">Mensajes</h3>
     		 	<div class="primeraRespuesta">
       				 <h4>¿CÓMO CONTACO AL VENDEDOR?</h4>
       				 <div class="segundaRespuesta">
       					 <p>hacer todavia</p>
      				 </div>
      				<h4>¿CÓMO COMPRO CON SEGURIDAD?</h4>
       				 <div class="segundaRespuesta">
       					 <p>hacer todavia</p>
      				</div>
      				<h4>¿CÓMO GUARDO ANUNCIOS PARA VERLOS MAS TARDE?</h4>
       				 <div class="segundaRespuesta">
       					 <p class="subtitulo">No puedo enviar mensajes</p>
       					 <p>respuesta a este subtitulo</p>
       					 <p class="subtitulo">No puedo ver mis mensajes</p>
       					 <p>respuesta a este subtitulo</p>
       					 
      				</div>
      				<h4>DONDE PUEDO ENVIAR LOS MENSAJES QUE ENVIO O RECIBO</h4>
       				 <div class="segundaRespuesta">
       					 <p>hacer todavia</p>
      				</div>
      				
      			</div>
      			<!-- fin del 3er componente -->
      			<!-- inicio del 4to componente -->
      			<h3 id="cuatro">Tu cuenta</h3>
     		 	<div class="primeraRespuesta">
       				 <h4>¿NECESITO REGISTRARME PARA USAR LA PÁGINA?</h4>
       				 <div class="segundaRespuesta">
       					 <p>hacer todavia</p>
      				 </div>
      				<h4>ADMINISTRACIÓN DE MI CUENTA</h4>
       				 <div class="segundaRespuesta">
       					 <p class="subtitulo">Modificar e-mail</p>
       					 <p>respuesta a este subtitulo</p>
       					 <p class="subtitulo">Modificar contraseña</p>
       					 <p>respuesta a este subtitulo</p>
       					 <p class="subtitulo">Eliminar mi cuenta</p>
       					 <p>respuesta a este subtitulo</p>       					 
      				</div>
      				<h4>NO PUEDO ACCEDER A MI CUENTA</h4>
       				 <div class="segundaRespuesta">
       					 <p>hacer todavia</p>
      				</div>
      				
      			</div>
      			<!-- fin del 4to componente -->
      			<!-- inicio del 5to componente -->
      			<h3 id="cinco">Seguridad</h3>
     		 	<div class="primeraRespuesta">
       				 <h4>CONCEJOS PARA UNA TRANSACCION SEGURA</h4>
       				 <div class="segundaRespuesta">
       					 <p>hacer todavia</p>
      				 </div>
      				 <h4>QUIERO REPORTAR UN FRAUDE</h4>
       				 <div class="segundaRespuesta">
       					 <p>hacer todavia</p>
      				</div>
      				<h4>¿CÓMO EVITAR FRAUDES?</h4>
       				 <div class="segundaRespuesta">
       					 <p class="subtitulo">Como identificar el fraude</p>
       					 <p>respuesta a este subtitulo</p>
       					 <p class="subtitulo">Recibi un mensaje sospechoso</p>
       					 <p>respuesta a este subtitulo</p>
       					 <p class="subtitulo">¿Qué hace la pagina en caso de fraude?</p>
       					 <p>respuesta a este subtitulo</p>
       					 <p class="subtitulo">He sido victima de un fraude</p>
       					 <p>respuesta a este subtitulo</p>       					 
      				</div>
      				
      			</div>
      			<!-- fin del 5to componente -->
      			<!-- inicio del 6to componente -->
      			<h3 id="seis">Publicacion masiva-Profesionales</h3>
     		 	<div class="primeraRespuesta">
       				 <h4>Queda pendiente</h4>
       				 <div class="segundaRespuesta">
       					 <p>hacer todavia</p>
      				 </div>
      				 
      			</div>
      			<!-- fin del 6to componente -->
      			<!-- inicio del 7mo componente -->
      			<h3 id="siete">Terminos y condiciones</h3>
     		 	<div class="primeraRespuesta">
       				 <h4>Queda pendiente</h4>
       				 <div class="segundaRespuesta">
       					 <p>hacer todavia</p>
      				 </div>
      				 
      			</div>
      			<!-- fin de 7mo componente -->
		</div>	
			<!-- final caja de textos -->
	</section>
	<!-- fin del cuerpo  -->
	<!-- inicio imagen lateral -->
	<section class="lateral">
		<div class="imagen"></div>
	</section>
	<!-- fin imagen lateral -->
	<!-- inicio del pie de pagina -->
	<footer>
		<ul>
			<li><a href="ayuda.php">Ayuda</a></li>
			<li><a href="terminos_condiciones.php">Terminos y condiciones</a></li>
			<li><a href="#">Acerca de la pagina</a></li>
			<li><a href="index.php">Ir al inicio</a></li>
		</ul>
	</footer>
	<!-- fin del pie de pagina -->
</body>
</html>