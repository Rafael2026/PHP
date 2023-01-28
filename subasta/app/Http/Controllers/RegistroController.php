<?php

  namespace App\Http\Controllers;

  class RegistroControlller extends Controller {

    public function __invoke() {
      //
    }

    public function store() {
      return view('registro');
    }

    /*public function index() {
      return view('registro');
    }*/
  }

?>
