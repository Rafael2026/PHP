<?php
  require_once("Models/Modelo.php");
  $serie = new Modelo();
  $series = $serie->getSeries();
  require_once("Views/viSerie.php");
?>