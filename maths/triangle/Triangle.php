<?php
  
  class Triangle {

    public $width;
    public $height;
    public $ladoIzq;
    public $ladoDer;

    public function __construct($val1, $val2) {
      $this->width = $val1;
      $this->height = $val2;
    }

    public function __construct1($val1, $izquierda, $derecha) {
      $this->width = $val1;
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

  /*$figura = new Triangle(2, 4);
  $figura2 = new Triangle(4, 8);
  $figura3 = new Triangle(3, 5);
  
  echo "Area del triangulo: ". $figura->getArea() ."<br>";
  echo "Area del triangulo2: ". $figura2->getArea() ."<br>";
  echo "Area del triangulo3: ". $figura3->getArea() ."<br>";*/

?>