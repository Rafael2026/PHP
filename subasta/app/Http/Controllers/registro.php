<?php

  //namespace App\Http\Controllers;

  //use App\Http\Controllers\Login;
  //use App\Models\Usuario;

  /*class Registro extends Controller {

    public function store() {

      $usuarios = new Usuario();
      $users = $usuarios->getUsuarios();

      return view('registro');
    }
  }*/

  require_once("Models/Usuario.php");
  $usuarios = new Usuario();
  $users = $usuarios->getUsuarios();
  require_once("views/registro.php");

?>
