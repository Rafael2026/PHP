<?php
  
  class Circle {

    public $width;

    public function __construct($val1) {
      $this->width = $val1;
    }

    function getPerimetro() {
      return pi() * $this->width;
    }

    function getArea() {
      return pi() * ($this->width / 2) * ($this->width / 2);
    }

    function perimetro() {
      echo "P = pi() * d<br><br>"; // D es el diámetro
      echo "P = 2 * pi() * r"; // R es el radio
    }

    function area() {
      echo "A = pi() * (d/2) * (d/2)"; // D es el diámetro
    }
  }

?>