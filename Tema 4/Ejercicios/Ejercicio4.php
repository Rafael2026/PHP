<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 4</title>
  <link href="bootstrap.css" rel="stylesheet">
  <link href="estilos.css" rel="stylesheet">
</head>

<body>

      <?php

        include("Series.php");

        for ($i = 0; $i < count($series); $i++) {

          echo ("<div class='card'><div class='container'><img src='imagenes/imagen$i.jpg'>");

          for ($j = 0; $j < count($series[$i]); $j++) {
            echo ($series[$i][$j]);
          }
        }

      ?>

    </div>

  </div>

</body>

</html>