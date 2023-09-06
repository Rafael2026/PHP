<?php
  error_reporting(E_ERROR);
  ini_set("display-errors", 0);

  require_once("triangle/Triangle.php");
  require_once("square/Square.php");
  require_once("circle/Circle.php");
  require_once("cube/Cube.php");

  $flecha = new Triangle(2, 6, 0, 0);
  $cuadro = new Square(2, 4);
  $rueda = new Circle(2);
  $cubo = new Cube(4);

  $figuras2D = [$flecha, $cuadro, $rueda];
  $figuras3D = [$cubo];

  $array = array("Triangle", "Square", "Circle");

  /*echo "<pre>";
  print_r($array);
  echo "</pre>";*/

  //echo "<br><br>Longitud del array: ". count($array) . "<br>";

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
                <h2><?php echo htmlspecialchars($array[$i]); ?> perimeter</h2>
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
                <form action="" method="POST">
                  <label for="lado">Lado:</label>
                  <input type="number" min="1" name="lado" id="lado">
                  <input type="button" value="Calcular" name="btnPerimeter">
                </form>
              </td>
            </tr>

            <?php

              $lado = $_POST['lado'];

              if (!empty($lado)) {
                
                if ($i == 0) {
                  $triangulo = new Triangle($lado, 0, $lado, $lado);
              
            ?>

              <tr>
                <td class="result"><?php echo $triangulo->getPerimetro(); ?></td>
              </tr>

            <?php
              } else if ($i == 1) {
                $cuadrado = new Square($lado, $lado);
            ?>

              <tr>
                <td class="result"><?php echo $cuadrado->getPerimetro(); ?></td>
              </tr>

            <?php
              } else {
                $circulo = new Circle($lado);
            ?>

            <tr>
              <td class="result"><?php echo $circulo->getPerimetro(); ?></td>
            </tr>

            <?php
                }
              }
            ?>

            

          </tbody>

        </table>

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
                <h2><?php echo htmlspecialchars($array[$i]); ?> area</h2>
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

                  <input type="button" value="Calcular" name="btnArea">
                </form>
              </td>
            </tr>

            <tr>
              <td class="result"></td>
            </tr>

          </tbody>

        </table>

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
                <h2><?php echo htmlspecialchars($cubo[$i]); ?> volume</h2>
              </th>
            </tr>

          </thead>

          <tbody>

            <tr>
              <td>
                <img src=<?php echo "img/". htmlspecialchars($cubo[$i]) .".svg"; ?> alt="<?php echo htmlspecialchars($cubo[$i]); ?>">
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

                  <input type="button" value="Calcular" name="btnVolume">
                </form>
              </td>
            </tr>

            <tr>
              <td class="result"></td>
            </tr>

          </tbody>

        </table>

      <?php
        }
      ?>

    </section>

    <script src="script.js" defer></script>

  </main>

</body>

</html>