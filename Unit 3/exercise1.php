<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercise 1</title>
</head>

<body>

  <?php
    $name = $_POST["name"];
    $email = $_POST["email"];
  ?>

  <?php
    echo htmlspecialchars($name);
  ?>

  <br/>

  <?php
    echo htmlspecialchars($email);
  ?>

</body>

</html>

