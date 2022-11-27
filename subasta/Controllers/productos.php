<?php
  require_once("Models/Model.php");
  $productos = new Modelo();
  $products = $productos->getProductos();
  require_once("Views/productos.php");
?>