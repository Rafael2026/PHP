<?php

  /*namespace App\Http\Controllers;

  //use App\Http\Controllers\Login;
  //use App\Models\Usuario;

  class Login extends Controller {

    public function store() {
      return view('login');
    }

  }*/

  require_once("Models/Usuario.php");
  $usuarios = new Usuario();
  $users = $usuarios->getUsuarios();
  require_once("views/login.php");

?>
