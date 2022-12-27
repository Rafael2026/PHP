<?php

  //namespace App\Http\Controllers;

  //use App\Http\Controllers\Portal;
  //use App\Models\Producto;
  //use App\Models\Subasta;

  /*class Portal extends Controller {

    public function store() {

      $productos = new Producto();
      $products = $productos->getProductos();

      $subastas = new Subasta();
      $sub = $subastas->getSubastas();

      return view('portal');
    }
  }*/

  require_once("Models/Producto.php");
  require_once("Models/Subasta.php");

  $productos = new Producto();
  $products = $productos->getProductos();

  $subastas = new Subasta();
  $sub = $subastas->getSubastas();

  require_once("views/portal.php");

?>
