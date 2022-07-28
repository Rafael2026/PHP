<?php

  $lado = $_POST["lado"];
  $radio = $_POST["radio"];
  $size = $_POST["size"];
  $border = $_POST["border"];
  $figure = $_POST["figure"];

  echo "<svg><rect width='$lado' height='$radio' stroke='$border' stroke-width='$size' fill='$figure'/></svg>";

?>