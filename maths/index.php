<?php
  error_reporting(E_ERROR);
  ini_set("display-errors", 0);

  require_once("triangle/Triangle.php");
  require_once("square/Square.php");
  require_once("circle/Circle.php");
  require_once("cube/Cube.php");

  $flecha = new Triangle(2, 4);
  $flecha2 = new Triangle(4, 8);
  $flecha3 = new Triangle(3, 5);

  $cuadro = new Square(2, 4);
  $cuadro2 = new Square(4, 8);
  $cuadro3 = new Square(3, 5);

  $rueda = new Circle(2);
  $rueda2 = new Circle(4);
  $rueda3 = new Circle(3);

  $cubo = new Cube(4);

  $figuras2D = [$flecha, $cuadro, $rueda];
  $figuras3D = [$cubo];

  $array = array("Triangle", "Square", "Circle");

  /*
    echo "<pre>";
    var_dump($array);
    echo "</pre>";

    echo "<pre>";
    print_r($array);
    echo "</pre>";

    echo $array[0];

    echo "<br><br>Longitud del array: ". count($array) . "<br>";
  */

?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Figuras</title>
  <link href="styles.css" rel="stylesheet">
</head>

<body>

  <main>

    <section>

      <?php
        for ($i = 0; $i < count($array); $i++) {
      ?>

        <table>

          <thead>

            <tr>
              <th>
                <h2><?php echo $array[$i]; ?> perimeter</h2>
              </th>
            </tr>

          </thead>

          <tbody>

            <tr>
              <td>
                <img src=<?php echo "img/". $array[$i] .".svg"; ?> alt="<?php echo $array[$i]; ?>">
              </td>
            </tr>

            <tr>
              <td>
                <p><?php echo $figuras2D[$i]->perimetro(); ?></p>
              </td>
            </tr>

            <tr>
              <td>
                <form action="" method="post">
                  <label for="lado">Lado:</label>
                  <input type="number" min="1" name="lado" id="lado">
                  <input type="button" value="Calcular">
                </form>
              </td>
            </tr>

          </tbody>

        </table>

        </div>

        </div>

      <?php
        }
      ?>

    </section>
    
    <hr/>

    <section>

      <?php
        for ($i = 0; $i < count($array); $i++) {
      ?>

        <table>

          <thead>

            <tr>
              <th>
                <h2><?php echo $array[$i]; ?> area</h2>
              </th>
            </tr>

          </thead>

          <tbody>

            <tr>
              <td>
                <img src=<?php echo "img/". $array[$i] .".svg"; ?> alt="<?php echo $array[$i]; ?>">
              </td>
            </tr>

            <tr>
              <td>
                <p><?php echo $figuras2D[$i]->area(); ?></p>
              </td>
            </tr>

            <tr>
              <td>
                <form action="" method="post">
                  <label for="base">Base:</label>
                  <input type="number" min="1" name="base" id="base">

                  <label for="altura">Altura:</label>
                  <input type="number" min="1" name="altura" id="altura">

                  <input type="button" value="Calcular">
                </form>
              </td>
            </tr>

          </tbody>

        </table>

        </div>

        </div>

      <?php
        }
      ?>
    </section>

    <hr/>

    <section>

      <?php

        $cubo = array("Cube");

        for ($i = 0; $i < count($cubo); $i++) {
      ?>

        <table>

          <thead>

            <tr>
              <th>
                <h2><?php echo $cubo[$i]; ?> volume</h2>
              </th>
            </tr>

          </thead>

          <tbody>

            <tr>
              <td>
                <img src=<?php echo "img/". $cubo[$i] .".svg"; ?> alt="<?php echo $cubo[$i]; ?>">
              </td>
            </tr>

            <tr>
              <td>
                <p><?php echo $figuras3D[$i]->volume(); ?></p>
              </td>
            </tr>

            <tr>
              <td>
                <form action="" method="post">
                  <label for="base">Base:</label>
                  <input type="number" min="1" name="base" id="base">

                  <label for="altura">Altura:</label>
                  <input type="number" min="1" name="altura" id="altura">

                  <input type="button" value="Calcular">
                </form>
              </td>
            </tr>

          </tbody>

        </table>

        </div>

        </div>

      <?php
        }
      ?>

    </section>

    <section>
      <img src="img/tabla.webp" alt="Tabla de figuras (Perímetros, áreas y volúmenes)">
    </section>

    <script src="script.js"></script>

  </main>

</body>

</html>