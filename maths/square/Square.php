<?php
  
  class Square {

    public $width;
    public $height;

    public function __construct($base, $altura) {
      $this->width = $base;
      $this->height = $altura;
    }

    function getPerimetro() {
      return ($this->width + $this->height) + ($this->width + $this->height);
    }

    function getArea() {
      return ($this->width * $this->height)/2;
    }

    function perimetro() {
      echo "P = (b + h) + (b + h)";
    }

    function area() {
      echo "A = b * h";
    }
  }

?>