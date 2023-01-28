<?php

  namespace App\Http\Controllers;

  class UsuariosControlller extends Controller {

    public function __invoke() {
      //
    }

    public function store() {
      return view('usuarios');
    }

    /*public function index() {
      return view('usuarios');
    }*/
  }

?>
