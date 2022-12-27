<?php

  //namespace App\Http\Controllers;

  //use App\Http\Controllers\Login;
  //use App\Models\Producto;

  /*class Productos extends Controller {

    public function store() {

      $usuarios = new Producto();
      $users = $usuarios->getUsuarios();

      return view('productos');
    }
  }*/

  require_once("Models/Producto.php");
  $productos = new Producto();
  $products = $productos->getProductos();
  require_once("views/productos.php");

?>
