<?php
  
  error_reporting(E_ERROR);
  ini_set("display-errors", 0);

  $conexion = mysqli_connect("localhost", "root", "", "subasta");

?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Comprobar monedero</title>
</head>

<body>
  
  <?php

    /*$consulta = "SELECT MAX(codPuja), MAX(valor), fecha, codUsu, codSubasta from puja GROUP BY codSubasta;";*/

    $subQuery = "SELECT COUNT(*) from subasta WHERE precIni > 0"; // Consulta de subastas
    $subResult = mysqli_query($conexion, $subQuery); // Resultado de subastas

    while ($row = mysqli_fetch_array($subResult)) {
      $totalSubastas = $row;
    }

    echo "Subastas existentes: ". $totalSubastas[0] ."<br/>";

    $usuQuery = "SELECT codUsu, nomUsu, apeUsu from usuario WHERE permiso < 1";
    $usuResult = mysqli_query($conexion, $usuQuery);

    while ($row = mysqli_fetch_array($usuResult)) {
      $compradores[] = $row;
    }

    $reservas = 50000;

    $puQuery = "SELECT MAX(valor) AS 'maxValue', codUsu, codSubasta from puja GROUP BY codSubasta ORDER BY codSubasta DESC"; // Consulta de pujas
    $puResult = mysqli_query($conexion, $puQuery); // Resultado de pujas

    while ($row = mysqli_fetch_array($puResult)) {
      $pujas[] = $row;
    }

    $p = (count($pujas) - 1);

    while ($p >= 0) {

      echo "Valor maximo: ". $pujas[$p]['maxValue'] ."<br/>";
      echo "Codigo del usuario: ". $pujas[$p]['codUsu'] ."<br/>";
      echo "Codigo de subasta: ". $pujas[$p]['codSubasta'] ."<br/><br/><br/>";

      for ($c = 0; $c < count($compradores); $c++) {

        if ($pujas[$p]['codUsu'] == $compradores[$c]['codUsu']) {
          $gastos[$c] += intval($pujas[$p]['maxValue']);
        }
      }
      

      $p--;
    }

    /*echo "<pre>";
    print_r($pujas);
    echo "</pre>";*/

    echo "<pre>";
    print_r($compradores);
    echo "</pre>";

    echo "<pre>";
    print_r($gastos);
    echo "</pre>";

    for ($g = 0; $g < count($gastos); $g++) {
      
      if (($reservas - $gastos[$g]) > 0) {
        echo "<br/>Le queda a ". $compradores[$g]['nomUsu'] ." ". $compradores[$g]['apeUsu'] ." -> ". ($reservas - $gastos[$g]);
      } else {
        echo "<br/>Se ha reiniciado tu monedero. Ahora le queda a ". $compradores[$g]['nomUsu'] ." ". $compradores[$g]['apeUsu'] ." -> $reservas";
      }
    }

  ?>

</body>

</html>

<?php
  mysqli_close($conexion);
?>