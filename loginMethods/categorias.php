<?php

include("php/conexion/conexion.php");
$query = "SELECT * FROM categoria ";
$resultado = $conexion->query($query);

while ($row = $resultado-> fetch_assoc()) {
  # code..
  $num = 1;
  $title = $row['codCategoria'];
  $head = "heading$title";
  $collapse = "collapse$title";
  $Main = "#collapse$title";

              echo "<div class='card'>";
                   echo "<div class='card-header' id ='$head'>";
                     echo "<h5 class='mb-0'>";
                       echo "<button class='btn btn-link' type='button' data-toggle='collapse' data-target='$Main' aria-expanded='true' aria-controls='$collapse'>";
                          echo $row['nombreCategoria'] ;
                       echo "</button>";
                     echo "</h5>";
                   echo "</div>";

                   echo "<div id='$collapse' class='collapse show' aria-labelledby='$head' data-parent='#accordionExample'>";
                       echo "<div class='card-body'>";
                         echo "<div class='container'>";
                         echo "  <ul class='listaAcor'>";
              $query2 = "SELECT * FROM categoria,subcategoria WHERE codigoCategoria = codCategoria and codigoCategoria = $title";
              $resultado2 = $conexion->query($query2);

                          while ($row2 = $resultado2-> fetch_assoc()) {
                              $cat = $row2['nombreSubcategoria'];

                              echo "<li><a href='#'>$cat</a></li>";
                          }

                echo "</ul>";

              echo "</div>";
            echo "</div>";
        echo "</div>";
  echo "</div>";

    }

 ?>
