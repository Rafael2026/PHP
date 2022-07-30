<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercises - Unit 4</title>
  <link href="styles.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <h1>Exercise 1</h1>

  <?php

    require_once("Series.php");

    for ($i = 0; $i < count($series); $i++) {
      for ($j = 0; $j < count($series[$i]); $j++) {
        echo $series[$i][$j] ."<br>";
      }
    }

  ?>

  <hr>

  <h1>Exercise 2</h1>

  <table>

    <tr>
      <td>Title</td>
      <td>Platform</td>
      <td>Note</td>
      <td>Argument</td>
    </tr>

    <?php

      require_once("Series.php");

      for ($i = 0; $i < count($series); $i++) {

        echo "<tr>";

        for ($j = 0; $j < count($series[$i]); $j++) {
          echo "<td>" .$series[$i][$j] ."</td>";
        }

        echo "</tr>";
      }

    ?>

  </table>

  <hr>

  <h1>Exercise 3</h1>

  <table>

    <tr>
      <td colspan="3">Title</td>
      <td colspan="3">Platform</td>
      <td colspan="3">Note</td>
      <td colspan="3">Argument</td>
    </tr>

    <?php

      require_once("Series.php");

      for ($i = 0; $i < count($series); $i++) {

        echo "<tr>";

        for ($j = 0; $j < count($series[$i]); $j++) {
          echo ("<td colspan='3'>" .$series[$i][$j] ."</td>");
        }

        echo "</tr>";
      }

    ?>

  </table>

  <hr>

  <h1>Exercise 4</h1>

  <?php

    require_once("Series.php");

    for ($i = 0; $i < count($series); $i++) {

      echo "<div class='card'><div class='container'><img src='img/imagen$i.webp'>";

      for ($j = 0; $j < count($series[$i]); $j++) {
        echo($series[$i][$j]);
      }
    }

  ?>

    </div>

  </div>


</body>

</html>