<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Página principal</title>
  <link href="estilos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" rel="stylesheet">
</head>

<body>

  <header class="container my-4 h3">Mis series</header>

  <div class="container my-3">
    <a href="index.php" class="inicio">Mis series</a>
  </div>

  <table class="container table table-responsive table-bordered border-dark mt-3">

    <thead class="table-dark">

      <tr>
        <th>Título</th>
        <th>Puntuación</th>
        <th class="text-center">Plataforma</th>
        <th></th>
      </tr>

    </thead>

    <tbody>

      <?php
        foreach ($series as $serie) {
      ?>

      <tr>

        <td><?php echo $serie["titulo"] ?></td>
        <td><?php echo $serie["puntuacion"] ?></td>
        
        <?php
          if (is_null($serie["plataforma"])) {
        ?>

        <td class='text-danger font-weight-bold font-italic'>no emitiéndose</td>
        
        <?php
          } else {
        ?>

        <td><?php echo $serie["plataforma"] ?></td>

        <?php

          }

          $array = array($serie["ids"], $serie["titulo"], $serie["fecha"], $serie["temporadas"], $serie["puntuacion"], "", $serie["plataforma"], $serie["poster"]);
          $array = implode(", ", $array);
        ?>

        <td class="text-center text-darkblue">
          <a href="info.php?serie=<?php echo $array ?>&argumento=<?php echo $serie['argumento'] ?>">
            + info
          </a>
        </td>
      
      </tr>

      <?php
        }
      ?>

    </tbody>

  </table>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

</body>

</html>