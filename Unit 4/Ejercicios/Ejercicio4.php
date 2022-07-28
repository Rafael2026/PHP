<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 4</title>
  <link href="estilos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <?php

    require_once("Series.php");

    for ($i = 0; $i < count($series); $i++) {

      echo "<div class='card'><div class='container'><img src='img/imagen$i.jpg'>";

      for ($j = 0; $j < count($series[$i]); $j++) {
        echo($series[$i][$j]);
      }
    }

  ?>

    </div>

  </div>

</body>

</html>
