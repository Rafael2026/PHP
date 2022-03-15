<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 4</title>
</head>

<body>

  <?php
    $secuencia1 = "1, 2, 3, 4";
    $secuencia2 = "5, 6, 7, 8";
  ?>

  <form action='index2.php' method='post'>
    <input type='text' name='sec1' value='$secuencia1'><br>
    <input type='text' name='sec2' value='$secuencia2'><br>
    <input type='submit'>
  </form>

</body>

</html>