<?php

  namespace App\Http\Controllers;

  //use App\Http\Controllers\Login;
  use App\Models\Usuario;

  class Subasta extends Controller {

    public function store() {

      $usuarios = new Usuario();
      $users = $usuarios->getUsuarios();

      return view('subasta');
    }
    /*require_once("Models/Usuario.php");
    $usuarios = new Usuario();
    $users = $usuarios->getUsuarios();
    require_once("views/login.php");*/
  }

?>

<?php
  require_once("Models/Producto.php");
  require_once("Models/Subasta.php");

  $productos = new Producto();
  $products = $productos->getProductos();

  $subastas = new Subasta();
  $sub = $subastas->getSubastas();

  require_once("views/subasta.php");
?>
