<?php
  
  class Cube {

    public $width;
    public $height;
    public $elevation;

    public function __construct($value) {
      $this->width = $value;
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

?>