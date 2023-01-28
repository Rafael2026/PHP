<?php

  namespace App\Http\Controllers;;

  class LoginController extends Controller {

    public function __invoke() {
      //
    }

    public function store() {
      return view('login');
    }

    /*public function index() {
      return view('login');
    }*/
  }

?>
