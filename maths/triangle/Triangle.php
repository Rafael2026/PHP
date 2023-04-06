<?php
  
  class Triangle {

    public $width;
    public $height;
    public $ladoIzq;
    public $ladoDer;

    public function __construct($base, $altura) {
      $this->width = $base;
      $this->height = $altura;
    }

    public function __construct2($base, $izquierda, $derecha) {
      $this->width = $base;
      $this->ladoIzq = $izquierda;
      $this->ladoDer = $derecha;
    }
    
    function getPerimetro() {
      return $this->width + $this->ladoIzq + $this->ladoDer;
    }

    function getArea() {
      return ($this->width * $this->height)/2;
    }

    function perimetro() {
      echo "P = l + l + l";
    }

    function area() {
      echo "A = (b * h)/2";
    }
  }

?>