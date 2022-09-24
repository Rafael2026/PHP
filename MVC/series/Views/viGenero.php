<?php

  error_reporting(E_ERROR);
  ini_set("display-errors", 0);

  $array = $_GET["serie"];
  $argumento = $_GET["argumento"];

  $array = explode(", ", $array);
  $array[5] = $argumento;
  
?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Página géneros</title>
  <link href="estilos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <header class="container my-4 h3">Mis series</header>

  <div class="container my-3">

    <a href="index.php" class="inicio">Mis series</a>

    <?php
      $array = array($array[0], $array[1], $array[2], $array[3], $array[4], "", $array[6], $array[7]);
      $array = implode(", ", $array);
    ?>

    <a href="info.php?serie=<?php echo $array ?>&argumento=<?php echo $argumento ?>" class="inicio">
      Volver atrás
    </a>
  </div>

  <table class="container table table-responsive table-bordered border-dark mt-3 w-25">

    <thead class="table-dark">

      <tr>
        <th>Género</th>
        <th></th>
      </tr>

    </thead>

    <tbody>

      <?php
        foreach ($generos as $genero) {
      ?>
      
      <tr>

        <td><?php echo $genero['genero'] ?></td>

        <td class="text-center">
          <a href="delGenero.php?delGen=<?php echo $genero['genero'] ?>" name="eliminar">Borrar</a>
        </td>

      </tr>

      <?php
        }
      ?>

      <tr>

        <td>

          <select>

            <option>Elige un género</option>

            <?php
              foreach ($generos as $genero) {
            ?>

            <option><?php echo $genero['genero'] ?></option>;

            <?php
              }
            ?>

            <option>Nuevo género</option>;

          </select>

        </td>

        <td class="text-center">
          <a href="addGenero.php?addGen=<?php echo $genero['genero'] ?>" name="extra">Añadir</a>
        </td>

      </tr>

    </tbody>

  </table>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

</body>

</html>