<?php

  $lado = $_POST["lado"];
  $radio = $_POST["radio"];
  $size = $_POST["size"];
  $colorBorde = $_POST["colorBorde"];
  $colorFigura = $_POST["colorFigura"];

  echo "<svg><rect width='$lado' height='$radio' stroke='$colorBorde' stroke-width='$size' fill='$colorFigura'/></svg>";

?>