<!DOCTYPE html>

<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="styles.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<?php

  error_reporting(E_ERROR) ;
  ini_set("display-errors", 0);

  $user = $_POST["username"];
  $password = hash("SHA256", $_POST["passw"]);
  $radioValor = $_POST["flexRadio"];
  $busquedaFinalizada = false;
  $usuarioExiste = false;
  $passwordValid = false;
  $i = 0;

  function leerEstatico() {

    $fh = fopen('usuarios.txt', 'r');

    while ($line = fgets($fh)) { $usuarios[] = explode(" ", trim($line)); }

    fclose($fh);

    return $usuarios;
  }

  function leerBDLocal() {

    $conexion = mysqli_connect("localhost", "root", "", "logindaw");
    $consulta = "SELECT email, passw FROM usuario";
    $resultado = mysqli_query($conexion, $consulta);

    while ($row = mysqli_fetch_array($resultado)) { $usuarios[] = $row; }

    return $usuarios;
  }

  if ($radioValor == "estatico") {
    $usuarios = leerEstatico();
  } else if ($radioValor == "local") {
    $usuarios = leerBDLocal();
  }

  while (!$busquedaFinalizada) {

    if (strcmp($user, $usuarios[$i][0]) == 0) {

      $usuarioExiste = true;

      if (strcmp($password, $usuarios[$i][1]) == 0) { $passwordValid = true; }

      $busquedaFinalizada = true;;

    } else {

      $usuarioExiste = false;

      if ($i < count($usuarios)) {
        $i++;
      } else {
        $busquedaFinalizada = true;
      }
    }
  }

  if ($usuarioExiste) {

    if ($passwordValid) {
      header("Location: logueado.html");
    } else {?>

      <div class="alert alert-warning" role="alert">Reestablecer contraseña - Ampliación futura</div>

      <a href="login.html">
        <button>Volver al login</button>
      </a>

      <?php
    }

  } else {?>

    <div class="alert alert-danger" role="alert">Registrarse  - Ampliación futura</div>

    <a href="login.html">
      <button>Volver al login</button>
    </a>

    <?php

  }

?>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" defer></script>

</body>

</html>