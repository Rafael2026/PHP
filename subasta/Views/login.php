<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar sesión</title>
  <!--<link href="https://subastas.boe.es/estilos/portalSubastas.css" rel="stylesheet">
  <link href="https://subastas.boe.es/estilos/buscar.css" rel="stylesheet">-->
  <link href="css/login.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@latest/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <header>
    <img src="img/logo.png" alt="Logo de Subasta total">
  </header>

  <nav class="topnav" id="myTopnav">

    <a href="index.php" class="active">Inicio</a>
    <a href="buscar.php">Buscar</a>
    <a href="ayuda.php">Ayuda</a>
    <a href="sesion.php">Iniciar sesion</a>
    <a href="registrarse.php">Registrarse</a>

    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>

  </nav>

  <main>

    <div class="fin-float"></div>

    <section>

      <!-- Title: Hora Central Europea / Central European Time -->
      <div>
        <span class="fecha"></span>
        <span class="tiempo"></span>
        <span class="horario">CET</span>
      </div>

    </section>

    <section>

      <form action="Views/user.php" method="POST">

        <h2 class="text-center text-info">Login</h2>

        <div class="form-group">
          <label for="usuario" class="text-info">User:</label>
          <input type="email" name="usuario" id="usuario" class="form-control w-50" required autofocus>
        </div>

        <div class="fin-float"></div>

        <div class="form-group">
          <label for="passw" class="text-info">Pass:</label>
          <input type="password" name="passw" id="passw" class="form-control w-50" required>
        </div>

        <div class="fin-float"></div>

        <div class="form-group">
          
          <label for="rol">Seleccionar rol:</label>
          
          <select name="rol">
          <option value="usuario">Usuario</option>
          <option value="admin">Administrador</option>
        </select>

        </div>

        <div class="fin-float"></div>

        <div class="form-group">
          <input type="submit" name="submit" id="submit" value="Verificar credenciales">
        </div>

      </form>

    </section>

    <?php

    if (isset($_POST['submit'])) {

      if (!empty($correo) && !empty($secreto)) {

        if ($mensaje[0] == 1) {

          if ($rol == "usuario") {
            //echo "<pre>El login es válido</pre>";
            header("Location: usuarios.php");
          } else if ($rol == "admin") {
            echo "<pre>El login es válido y acceder al gran panel (admin)</pre>";
            header("Location: usuarios.php");
          } else {
            echo "¿Quién eres?";
            header("Location: registro.php");
          }
        } else {
          echo "<pre>El login no es válido</pre>";
        }
      }
    }

    ?>

  </main>

  <footer>
    <h2>Proyecto final de Grado Superior</h2>
    <p>Autor: Rafael Aguilar Muñoz</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@latest/dist/umd/popper.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@latest/dist/js/bootstrap.min.js" defer></script>
  <script src="js/reloj.js" defer></script>
  <script src="https://subastas.boe.es/lib/js/desplegable.js" defer></script>

</body>

</html>