<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portal de Subastas</title>
  <link href="{{ asset('img/logo.png') }}" type="image/x-icon" rel="icon">
  <link href="{{ asset('css/login.css') }}" rel="stylesheet">
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@latest/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

  <header>
    <img src="{{ asset('img/cabecera.webp') }}" alt="Logo de Subasta total">
  </header>

  <nav class="topnav" id="myTopnav">

    <a href="index.php" class="active">Inicio</a>
    <a href="subasta.php">Subastas</a>
    <a href="puja.php">Pujas</a>
    <a href="login.php" class="disabled">Iniciar sesion</a>
    <a href="registro.php" class="disabled">Registrarse</a>

    <!--<input type="text" placeholder="Search.." name="search">
    <button type="submit"><i class="fa fa-search"></i></button>-->

    <button name="out" id="out">Log out</button>

    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>

  </nav>

  <div class="fin-float"></div>

  <main>

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

      <ul>

        <li>
          <a href="subastas.php">Busqueda</a>
        </li>

        <li>
          <a href="resultados.php">Resultados</a>
        </li>

        <li>

          <a href="guardar.php" class="guardar">
            Guardar
            <span>Busqueda</span>
            <img src="img/logoAcceso.png" srcset="img/logoAcceso.svg" alt="Sesion activa" />
          </a>

        </li>

      </ul>

    </section>

    <section>

      <?php
        for ($i = 0; $i < count($products); $i++) {
      ?>

      <div class="productos">

        <ul>

          <li>
            <h3>Producto: <?php echo $products[$i]['nomProd'] ?></h3>
          </li>

          <li>
            <h4>Materiales: <?php echo $products[$i]['material'] ?></h4>
          </li>

          <li>
            <p>Anchura del producto: <?php echo $products[$i]['anchura'] ?></p>
          </li>

          <li>
            <p>Altura del producto: <?php echo $products[$i]['altura'] ?></p>
          </li>

          <li>
            <p>Categoría del producto: <?php echo $products[$i]['categoria'] ?></p>
          </li>

          <li>
            <p>Fecha inicial: <?php echo $sub[$i]['fechaInic'] ?></p>
          </li>

          <li>
            <p>Fecha fin: <?php echo $sub[$i]['fechaFin'] ?></p>
          </li>

          <li>
            <p>Precio inicial: <?php echo $sub[$i]['precIni'] ?></p>
          </li>

        </ul>

        <button class="buscarSubasta">Buscar subasta</button>

      </div>

        <?php
          }
        ?>

    </section>

    <section>

      <ul>

        <li>
          <span class="fuera">Está usted en la página de resultados número</span>
          <span class="current">1</span>
        </li>

        <li>
          <a href="portal.php">2</a>
        </li>

        <li>

          <a href="user.php">
            <abbr title="Página">Pág.</abbr> siguiente
          </a>

        </li>

      </ul>

      <!--
        <p>Resultados:</p>
        -->

    </section>

  </main>

  <footer>
    <h2>Proyecto final de Grado Superior</h2>
    <p>Autor: Rafael Aguilar Muñoz</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@latest/dist/umd/popper.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@latest/dist/js/bootstrap.min.js" defer></script>
  <script src="{{ asset('js/reloj.js') }}" defer></script>
  <script src="{{ asset('js/script.js') }}" defer></script>
  <script src="{{ asset('js/nav.js') }}" defer></script>
  <script src="{{ asset('js/login.js') }}" defer></script>

</body>

</html>
