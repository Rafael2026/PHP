<?php

  namespace App\Http\Controllers;

  class PortalController extends Controller {

    public function __invoke() {
      //
    }

    public function store() {
      return view('portal');
    }

    /*public function index() {
      return view('portal');
    }*/
  }

?>
