<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercise 2</title>
</head>

<body>
  
  <?php
    $base = $_POST["base"];
    $altura = $_POST["altura"];
    $size = $_POST["size"];
    $border = $_POST["border"];
    $figure = $_POST["figure"];
  ?>

  <svg>
    <rect width="<?php echo htmlspecialchars($base); ?>" height="<?php echo htmlspecialchars($altura); ?>" stroke="<?php echo htmlspecialchars($border); ?>" stroke-width="<?php echo htmlspecialchars($size); ?>" fill="<?php echo htmlspecialchars($figure); ?>"/>
  </svg>

  </svg>

</body>

</html>