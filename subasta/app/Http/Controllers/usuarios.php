<?php

  namespace App\Http\Controllers;

  //use App\Http\Controllers\Login;
  use App\Models\Usuario;

  class Usuarios extends Controller {

    public function store() {

      $usuarios = new Usuario();
      $users = $usuarios->getUsuarios();

      return view('Usuarios');
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

  $productos = new Producto();
  $products = $productos->getProductos();

  $subastas = new Subasta();
  $sub = $subastas->getSubastas();

  require_once("views/usuarios.php");
?>
