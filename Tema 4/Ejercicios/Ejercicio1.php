<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 1</title>
  <link href="https://github.com/Rafael2026/learn_bootstrap/blob/main/bootstrap/css/bootstrap.css" rel="stylesheet">
</head>

<body>

  <?php

    require_once("Series.php");

    for ($i = 0; $i < count($series); $i++) {

      for ($j = 0; $j < count($series[$i]); $j++) {
        echo $series[$i][$j] ."<br>";
      }
    }

  ?>

</body>

</html>