<?php
  require_once("Models/Modelo.php");
  $genero = new Modelo();
  $generos = $genero->getGeneros();
  require_once("Views/viGenero.php");
?>