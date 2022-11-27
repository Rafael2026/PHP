<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portal de Subastas</title>
  <link href="https://subastas.boe.es/estilos/portalSubastas.css" rel="stylesheet">
  <link href="https://subastas.boe.es/estilos/buscar.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
</head>

<body>

  <header>
    <img src="img/logo.png" alt="Logo de Subasta total">
  </header>

  <nav class="topnav" id="myTopnav">

    <a href="index.php" class="active">Inicio</a>
    <a href="tablas.php">Subastas</a>
    <a href="tablas.php">Ayuda</a>
    <a href="login.php">Iniciar sesion</a>
    <a href="registro.php">Registrarse</a>

    <!--
      
      <div id="top" class="banda-menu">

        <div id="menu_principal" class="menu-wrapper">

          <ul>

            <li class="inicio pc tablet">

              #home
              <a href="" class="active">
                <span>Inicio</span>
              </a>

            </li>

            #News OR #Buscar
            <li class="buscar">

              <a href="https://subastas.boe.es/subastas.php">

                <span class="pc tablet">Buscar</span>

                <span class="movil">
                  <img alt="Buscar" src="../img/logoBuscar_blanco.png" srcset="../img/logoBuscar_blanco.svg">
                </span>

            </a>

          </li>

          #contact
          <li class="ayuda">

            <a href="https://subastas.boe.es/ayuda.php">

              <span class="pc tablet">Ayuda</span>

              <span class="movil">
                <img src="../img/ayuda.png" srcset="../img/ayuda.svg" alt="Ayuda">
              </span>

            </a>

          </li>

          #about
          <li class="botonAcceso ico_acceso">

            <a href="https://subastas.boe.es/acceso.php">

              <span class="tablet pc">
                Iniciar sesion
                <span class="luz">Acceder o registrarse</span>
              </span>

              <span class="movil">
                <img alt="Iniciar sesion" src="../img/logo.png">
              </span>

            </a>

          </li>

        </ul>-->

    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>

    <!--</div>

    </div>-->

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
            <span class="pc tablet">Busqueda</span>
            <img src="img/logoAcceso.png" srcset="img/logoAcceso.svg" alt="Sesion activa" />
          </a>

        </li>

      </ul>

      <div>

        <?php
          for ($i = 0; $i < count($products); $i++) {
        ?>

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

        <?php
          }
        ?>

      </div>

    </section>

    <section>

      <ul>

        <li>
          <span class="fuera">Está usted en la página de resultados número</span>
          <span class="current">1</span>
        </li>

        <li>
          <a href="user.php">2</a>
        </li>

        <li>

          <a href="user.php">
            <abbr title="Página">Pág.</abbr> siguiente
          </a>

        </li>

      </ul>

      <p>Resultados:</p>

    </section>

  </main>

  <footer>

    <h2>
      <abbr title="proyecto">Proyecto final de Grado Superior</abbr>
    </h2>

    <p>
      Autor: Rafael Aguilar Muñoz
    </p>

  </footer>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@latest/dist/umd/popper.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@latest/dist/js/bootstrap.min.js" defer></script>
  <script src="https://cdn.tailwindcss.com/" defer></script>
  <script src="js/reloj.js" defer></script>
  <script src="https://subastas.boe.es/lib/js/desplegable.js" defer></script>

</body>

</html>