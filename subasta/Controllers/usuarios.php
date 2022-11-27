<?php
  require_once("Models/Model.php");
  
  $productos = new Modelo();
  $products = $productos->getProductos();

  $subastas = new Modelo();
  $sub = $subastas->getSubastas();

  require_once("Views/usuarios.php");
?>