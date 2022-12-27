<?php

  //namespace App\Http\Controllers;

  //use App\Http\Controllers\Login;
  //use App\Models\Producto;
  //use App\Models\Subasta;
  //use App\Models\Usuario;
  //use App\Models\Puja;

  /*class Tablas extends Controller {

    public function store() {

      require_once("Models/Usuario.php");
      require_once("Models/Subasta.php");
      require_once("Models/Producto.php");
      require_once("Models/Puja.php");

      $productos = new Producto();
      $products = $productos->getProductos();

      $subastas = new Subasta();
      $sub = $subastas->getSubastas();

      $usuarios = new Usuario();
      $users = $usuarios->getUsuarios();

      $pujas = new Puja();
      $pu = $pujas->getPujas();

      return view('tablas');
    }
  }*/

  require_once("Models/Usuario.php");
  require_once("Models/Subasta.php");
  require_once("Models/Producto.php");
  require_once("Models/Puja.php");

  $productos = new Producto();
  $products = $productos->getProductos();

  $subastas = new Subasta();
  $sub = $subastas->getSubastas();

  $usuarios = new Usuario();
  $users = $usuarios->getUsuarios();

  $pujas = new Puja();
  $pu = $pujas->getPujas();

  require_once("views/tablas.php");

?>
