<?php
include("../../../conexion/conexion.php");
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$estado = $_POST['estado'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$img = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$subcat = $_POST['subcategoria'];
$anunciador = 8733918;

date_default_timezone_set('America/La_Paz');
$fecha = date("Y-m-d");
    //Insertamos en la tabla de anuncios y anuncios normales
$query = "INSERT INTO anuncio(nombreAnuncio,precio,descripcion,estado,direcion,telefono,prioridad,fechaPublicacion,codSubcategoria,ciAnunciador)
VALUES ('$titulo','$precio','$descripcion','$estado','$direccion','$telefono','normal','$fecha','$subcat','$anunciador')";
$resultado = $conexion -> query($query);

if ($resultado) {

  $query2 = "INSERT INTO normal_anuncio(nroAnuncioNormal) VALUES (11)";
  $result = $conexion -> query($query2);
  header("Location: ../../usuario.php");
    if ($result) {
        // code...
        //insertamos las imagenes ahora
      $query3 = "INSERT INTO imagen(imagen,tipoImagen,nroAnuncio) VALUES ('$img','normal',11)";
      $resultadoTres = $conexion ->query($query3);
      if($resultadoTres){
      header("Location: ../../../usuario.php");
      }//else{
      //echo "no se pudo insertar la imagen";}
  }//else{
    //echo "no se pudo insertar en el anuncio normal";}
}//else{
  //echo "no se inserto en el anuncio";}

?>
