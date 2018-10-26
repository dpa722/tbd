<?php include('php/funciones.php')?>
<?php 
if (isset($_GET["id"])) {
  $oferta_id = $_GET["id"];
  if (isset($ofertas[$oferta_id])) {
    $oferta = $ofertas[$oferta_id];
  }
}else{
  header("Location: ofertas.php");
  exit();
}

$tituloPagina = "Oferta Destacada";
$pagina = "oferta";
?>
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
  
</head>
<body style="margin-top: 30px;">
  <div class="container">
        <div class="row">
          <div class=" col-md-8">
            <p><img src="<?php echo $oferta["imagen"]; ?>" alt="<?php echo $oferta["nombre"]; ?>"></p>
            <h2><?php echo $oferta["nombre"]; ?></h2>
            <p><?php echo $oferta["descripcion"]; ?></p>
          </div>
          <div class=" col-md-4">
            <p><a href="#" class="btn btn-danger">Comprar: Antes <?php echo $oferta["precio"]; ?> <strong>Ahora <?php echo $oferta["precioOferta"]; ?></strong></a></p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3807.258638777352!2d-66.18043858574548!3d-17.399371188071434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e37385e407fb19%3A0x14af1834962bb250!2sFrancisco%2C+Cochabamba!5e0!3m2!1ses-419!2sbo!4v1540292687594" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div> 
      </div>
      </div>
 <footer style="background: green;">
    <center>
      <a href="#" ></a>
    </center>
      
  </footer>
  <!--fin del pie de pagina-->
</body>
</html>

