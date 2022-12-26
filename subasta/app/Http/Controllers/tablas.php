<?php

  namespace App\Http\Controllers;

  //use App\Http\Controllers\Login;
  use App\Models\Usuario;

  class Tablas extends Controller {

    public function store() {

      $usuarios = new Usuario();
      $users = $usuarios->getUsuarios();

      return view('tablas');
    }
    /*require_once("Models/Usuario.php");
    $usuarios = new Usuario();
    $users = $usuarios->getUsuarios();
    require_once("views/login.php");*/
  }

?>

<?php
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
