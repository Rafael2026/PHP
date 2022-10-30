<?php
  error_reporting(E_ERROR);
  ini_set("display-errors", 0);
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

        require_once("triangle/Triangle.php");
        require_once("square/Square.php");
        require_once("circle/Circle.php");

        $figura = new Triangle(2, 4);
        $figura2 = new Triangle(4, 8);
        $figura3 = new Triangle(3, 5);

        $cuadro = new Square(2, 4);
        $cuadro2 = new Square(4, 8);
        $cuadro3 = new Square(3, 5);

        $rueda = new Circle(2);
        $rueda2 = new Circle(4);
        $rueda3 = new Circle(3);

        $figuras = [$figura, $cuadro, $rueda];

        /*Triangulo ,cuadrado, circulo, recangulo */
        $array = array("triangle", "square", "circle");

        /*echo "<pre>";
        var_dump($array);
        echo "</pre>";

        echo "<pre>";
        print_r($array);
        echo "</pre>";

        echo $array[0];

        echo "<br><br>Longitud del array: ". count($array) . "<br>";*/

        for ($i = 0; $i < count($array); $i++) {

      ?>

        <table>

          <thead>

            <tr>
              <th>
                <h2>Perímetro del <?php echo $array[$i]; ?></h2>
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
                <p><?php echo $figuras[$i]->perimetro(); ?></p>
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
    
    <hr>

    <section>

      <?php
        for ($i = 0; $i < count($array); $i++) {
      ?>

        <table>

          <thead>

            <tr>
              <th>
                <h2>Área del <?php echo $array[$i]; ?></h2>
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
                <p><?php echo $figuras[$i]->area(); ?></p>
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

    <hr>

    <section>

      <?php
        for ($i = 0; $i < count($array); $i++) {
      ?>

        <table>

          <thead>

            <tr>
              <th>
                <h2>Volumen del <?php echo $array[$i]; ?></h2>
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
                <p><?php echo $figuras[$i]->area(); ?></p>
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

  </main>

</body>

</html>