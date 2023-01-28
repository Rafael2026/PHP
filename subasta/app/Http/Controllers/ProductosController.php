<?php

  namespace App\Http\Controllers;

  class ProductosController extends Controller {

    public function __invoke() {
      //
    }

    public function store() {
      return view('productos');
    }

    /*public function index() {
      return view('productos');
    }*/
  }

?>
