<?php
  
  class Square {

    public $width;
    public $height;

    public function __construct($val1, $val2) {
      $this->area = $val1;
      $this->height = $val2;
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

  /*$figura = new Triangle(2, 4);
  $figura2 = new Triangle(4, 8);
  $figura3 = new Triangle(3, 5);
  
  echo "Area del triangulo: ". $figura->getArea() ."<br>";
  echo "Area del triangulo2: ". $figura2->getArea() ."<br>";
  echo "Area del triangulo3: ". $figura3->getArea() ."<br>";*/

?>