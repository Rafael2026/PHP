<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrarse</title>
  <link href="{{ asset('img/favicon.ico') }}" type="image/x-icon" rel="icon">
  <link href="{{ asset('css/registro.css') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@latest/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <header>
    <img src="{{ asset('img/cabecera.webp') }}" alt="Logo de Subasta total">
  </header>

  <nav class="topnav" id="myTopnav">

    <a href="/" class="active">Inicio</a>
    <a href="/buscar">Buscar</a>
    <a href="/ayuda">Ayuda</a>
    <a href="/">Iniciar sesion</a>
    <a href="/registro">Registrarse</a>

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

      <h2>Subastas. Busqueda avanzada</h2>

      <form action="" method="GET">

        <h2 class="text-center text-info">Login</h2>

        <div class="form-group">
          <label for="nombre" class="text-info">Name</label>
          <input type="text" name="nombre" id="nombre" class="form-control" required autofocus>
        </div>

        <div class="fin-float"></div>

        <div class="form-group">
          <label for="apellidos" class="text-info">Surname</label>
          <input type="text" name="apellidos" id="apellidos" class="form-control" required autofocus>
        </div>

        <div class="fin-float"></div>

        <div class="form-group">
          <label for="usuario" class="text-info">User</label>
          <input type="email" name="usuario" id="usuario" class="form-control" required autofocus>
        </div>

        <div class="fin-float"></div>

        <div class="form-group">
          <label for="passw" class="text-info">Pass</label>
          <input type="password" name="passw" id="passw" class="form-control" required>
        </div>

        <div class="fin-float"></div>

        <div class="form-group">
          <input type="submit" name="submit" id="submit" value="Registrarse">
        </div>

      </form>

    </section>

    <?php

      if (isset($_GET["submit"])) {

        $name = $_GET["nombre"];
        $surname = $_GET["apellidos"];
        $correo = $_GET["usuario"];
        $password = $_GET["passw"];

        $regex = "/^[A-Za-zÑñÁáÉéÍíÓóÚúÜü ]{1,50}$/";
        //$regex = "/^[A-Za-z]{1,50}$/";

        if(preg_match($regex, ($name)) && preg_match($regex, ($surname))) {

          echo "Nombre: ". $name. "<br>";
          echo "Apellidos: ". $surname. "<br>";
          echo "Usuario: ". $user. "<br>";
          echo "Contraseña: ". $password. "<br>";
          echo "Fecha actual: ". date("Y-m-d");

          $usuario = new Usuario();
          $user = $usuario->getLastId();

          $codigo = intval($user[0]['codUsu']) + 1;

          $usuario = new Usuario();
          $users = $usuario->addUsuarios($codigo, $name, $surname, $correo, hash('sha512', $password), date("Y-m-d"));

        } else {
          echo "<script>alert('Hay agún error en el registro');</script>";
        }
      }

    ?>

  </main>

  <footer>
    <h2>Proyecto final de Grado Superior</h2>
    <p>Autor: Rafael Aguilar Muñoz</p>
  </footer>

  <script src="https://subastas.boe.es/lib/js/desplegable.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@latest/dist/umd/popper.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@latest/dist/js/bootstrap.min.js" defer></script>
  <script src="{{ asset('js/reloj.js') }}" defer></script>


</body>

</html>
