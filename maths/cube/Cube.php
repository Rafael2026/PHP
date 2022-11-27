<?php
  
  class Cube {

    public $width;
    public $height;
    public $elevation;

    public function __construct($value) {
      $this->area = $value;
      $this->height = $value;
      $this->elevation = $value;
    }

    function getVolumen() {
      return $this->width * $this->height * $this->elevation;
    }

    function volume() {
      echo "V = l * l * l";
    }
  }

  /*$figura = new Triangle(2, 4);
  $figura2 = new Triangle(4, 8);
  $figura3 = new Triangle(3, 5);
  
  echo "Area del triangulo: ". $figura->getArea() ."<br>";
  echo "Area del triangulo2: ". $figura2->getArea() ."<br>";
  echo "Area del triangulo3: ". $figura3->getArea() ."<br>";*/

?>