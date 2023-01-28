<?php

  namespace App\Http\Controllers;

  class TablasControlller extends Controller {

    public function __invoke() {
      //
    }

    public function store() {
      return view('tablas');
    }

    /*public function index() {
      return view('tablas');
    }*/
  }

?>
