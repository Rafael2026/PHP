<?php
  require_once("Models/Model.php");
  $subastas = new Modelo();
  $sub = $subastas->getSubastas();
  require_once("Views/subasta.php");
?>