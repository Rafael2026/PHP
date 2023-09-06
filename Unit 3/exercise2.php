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
  ?>

  <svg>
    <rect width="<?php echo htmlspecialchars($base); ?>" height="<?php echo htmlspecialchars($altura); ?>"/>
  </svg>

  </svg>

</body>

</html>