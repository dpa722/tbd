<?php
function portada($oferta_id, $oferta){
	$salida = '';
	$salida = $salida . '<div class="col-md-3">';
	$salida = $salida . '<h2>'.$oferta["nombre"].'</h2>';
	$salida = $salida . '<img style="width: 100%"  src="'. $oferta["imagen"] .'" alt="
						' . $oferta["nombre"] .'" class="img-rounded">';
	$salida = $salida . '<p>' . $oferta["introDescripcion"] . '</p>';
	$salida = $salida . '<p><a class="btn btn-danger" href="oferta.php?id=' . $oferta_id .'" role="button">Antes ' . $oferta["precio"] . '<strong> Ahora' . $oferta["precioOferta"] . '</strong></a></p></div>';
	return $salida;
}



$ofertas = array();
$ofertas[001] = array(
"nombre" => "SPA para 2",
"introDescripcion" => "Vive un momento...",
"descripcion" => "no te lo puedes perder...",
"imagen"=> "img/spa.jpg",
"precio" => 389,
"precioOferta" => 49);
$ofertas[002] = array(
"nombre" => "especial sushi",
"introDescripcion" => "El autentico sabor de japon",
"descripcion" => "no te lo puedes perder...",
"imagen"=> "img/sushi.jpg",
"precio" => 79,
"precioOferta" => 19);
$ofertas[003] = array(
"nombre" => "carnes a la braza",
"introDescripcion" => "chuleton de ternera y patatas",
"descripcion" => "no te lo puedes perder...",
"imagen"=> "img/carnes.jpg",
"precio" => 249,
"precioOferta" => 29);
$ofertas[004] = array(
"nombre" => "lavado de autos",
"introDescripcion" => "nosotros lo hacemos por usted",
"descripcion" => "no te lo puedes perder...",
"imagen"=> "img/autos.jpg",
"precio" => 19,
"precioOferta" => 9);
?>