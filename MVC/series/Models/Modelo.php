<?php

  class Modelo {
  
    private $con;

    public function __construct() {
      $this->con = new mysqli('localhost', 'root' , '', 'misseries');
    }

    public function getSeries() {

      $query = $this->con->query("SELECT * FROM serie LIMIT 35");

      while ($row = $query->fetch_array(MYSQLI_ASSOC)) { $series[] = $row; }

      return $series;
    }

    public function getGeneros() {

      $query = $this->con->query("SELECT genero FROM genero");

      while ($row = $query->fetch_array(MYSQLI_ASSOC)) { $generos[] = $row; }

      return $generos;
    }

    public function addGenero($genero) {
      
      $query = $this->con->query("INSERT INTO genero (genero) VALUES genero=$genero");

      while ($row = $query->fetch_array(MYSQLI_ASSOC)) { $generos[] = $row; }

      return $generos;
    }

    public function delGenero($genero) {
      
      $query = $this->con->query("DELETE FROM genero WHERE genero=$genero");

      while ($row = $query->fetch_array(MYSQLI_ASSOC)) { $generos[] = $row; }

      return $generos;
    }

    public function updateSerie($serie) {
      
      $codigo = $serie[0];
      $fecha = $serie[2];
      $temporadas = $serie[3];
      $puntuacion = $serie[4];
      $argumento = $serie[5];

      $query = $this->con->query("UPDATE serie SET fecha='$fecha' , temporadas='$temporadas', puntuacion='$puntuacion', argumento='$argumento' WHERE ids='$codigo'");

      while ($row = $query->fetch_array(MYSQLI_ASSOC)) { $series[] = $row; }

      return $series;
    }
  }
  
?>